<?php

namespace Doctrine\Tests\Common\Annotations;

use Doctrine\Common\Annotations\Annotation\IgnorePhpDoc;
use Doctrine\Common\Annotations\Annotation\IgnoreAnnotation;
use Doctrine\Common\Annotations\DocParser;
use Doctrine\Common\Annotations\AnnotationRegistry;
use Doctrine\Common\Annotations\Annotation\Target;
use Doctrine\Tests\Common\Annotations\Fixtures\AnnotationWithConstants;
use Doctrine\Tests\Common\Annotations\Fixtures\ClassWithConstants;
use Doctrine\Tests\Common\Annotations\Fixtures\IntefaceWithConstants;

class DocParserTest extends \PHPUnit_Framework_TestCase
{
    public function testNestedArraysWithNestedAnnotation()
    {
        $parser = $this->createTestParser();

        // Nested arrays with nested annotations
        $result = $parser->parse('@Name(foo={1,2, {"key"=@Name}})');
        $annot = $result[0];

        $this->assertTrue($annot instanceof Name);
        $this->assertNull($annot->value);
        $this->assertEquals(3, count($annot->foo));
        $this->assertEquals(1, $annot->foo[0]);
        $this->assertEquals(2, $annot->foo[1]);
        $this->assertTrue(is_array($annot->foo[2]));

        $nestedArray = $annot->foo[2];
        $this->assertTrue(isset($nestedArray['key']));
        $this->assertTrue($nestedArray['key'] instanceof Name);
    }

    public function testBasicAnnotations()
    {
        $parser = $this->createTestParser();

        // Marker annotation
        $result = $parser->parse("@Name");
        $annot = $result[0];
        $this->assertTrue($annot instanceof Name);
        $this->assertNull($annot->value);
        $this->assertNull($annot->foo);

        // Associative arrays
        $result = $parser->parse('@Name(foo={"key1" = "value1"})');
        $annot = $result[0];
        $this->assertNull($annot->value);
        $this->assertTrue(is_array($annot->foo));
        $this->assertTrue(isset($annot->foo['key1']));

        // Numerical arrays
        $result = $parser->parse('@Name({2="foo", 4="bar"})');
        $annot = $result[0];
        $this->assertTrue(is_array($annot->value));
        $this->assertEquals('foo', $annot->value[2]);
        $this->assertEquals('bar', $annot->value[4]);
        $this->assertFalse(isset($annot->value[0]));
        $this->assertFalse(isset($annot->value[1]));
        $this->assertFalse(isset($annot->value[3]));

        // Multiple values
        $result = $parser->parse('@Name(@Name, @Name)');
        $annot = $result[0];

        $this->assertTrue($annot instanceof Name);
        $this->assertTrue(is_array($annot->value));
        $this->assertTrue($annot->value[0] instanceof Name);
        $this->assertTrue($annot->value[1] instanceof Name);

        // Multiple types as values
        $result = $parser->parse('@Name(foo="Bar", @Name, {"key1"="value1", "key2"="value2"})');
        $annot = $result[0];

        $this->assertTrue($annot instanceof Name);
        $this->assertTrue(is_array($annot->value));
        $this->assertTrue($annot->value[0] instanceof Name);
        $this->assertTrue(is_array($annot->value[1]));
        $this->assertEquals('value1', $annot->value[1]['key1']);
        $this->assertEquals('value2', $annot->value[1]['key2']);

        // Complete docblock
        $docblock = <<<DOCBLOCK
/**
 * Some nifty class.
 *
 * @author Mr.X
 * @Name(foo="bar")
 */
DOCBLOCK;

        $result = $parser->parse($docblock);
        $this->assertEquals(1, count($result));
        $annot = $result[0];
        $this->assertTrue($annot instanceof Name);
        $this->assertEquals("bar", $annot->foo);
        $this->assertNull($annot->value);
   }

    public function testNamespacedAnnotations()
    {
        $parser = new DocParser;
        $parser->setIgnoreNotImportedAnnotations(true);

        $docblock = <<<DOCBLOCK
/**
 * Some nifty class.
 *
 * @package foo
 * @subpackage bar
 * @author Mr.X <mr@x.com>
 * @Doctrine\Tests\Common\Annotations\Name(foo="bar")
 * @ignore
 */
DOCBLOCK;

        $result = $parser->parse($docblock);
        $this->assertEquals(1, count($result));
        $annot = $result[0];
        $this->assertTrue($annot instanceof Name);
        $this->assertEquals("bar", $annot->foo);
    }

    /**
     * @group debug
     */
    public function testTypic