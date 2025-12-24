<?php

namespace Unit\Domain\Entity;

use Core\Domain\Entity\Category;
use PHPUnit\Framework\TestCase;

class CategoryUnitTest extends TestCase
{
    public function testAttributes()
    {
        $category = new Category(
            name: 'New Cat',
            description: 'New desc',
            isActive: true
        );
        $this->assertEquals("", $category->id);
        $this->assertEquals("New Cat", $category->name);
        $this->assertEquals("New desc", $category->description);
        $this->assertTrue(true, $category->isActive);
    }

    public function testActived()
    {
        $category = new Category(
            name: 'New Cat',
            isActive: false,
        );

        $this->assertFalse($category->isActive);
        $category->activate();
        $this->assertTrue($category->isActive);
    }

    public function testDesable()
    {
        $category = new Category(
            name: 'New Cat',
        );

        $this->assertTrue($category->isActive);
        $category->desable();
        $this->assertFalse($category->isActive);
    }

    public function testUpdate()
    {
        $uuid = 'uuid.value';

        $category = new Category(
            id : $uuid,
            name: 'New Cat',
            description: 'New desc',
            isActive: true
        );

        $category->update(
           name: 'New_name',
            description: 'New_desc',
        );

        $this->assertEquals("New_name", $category->name);
        $this->assertEquals("New_desc", $category->description);
    }
}