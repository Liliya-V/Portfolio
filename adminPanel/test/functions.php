<?php
require('../functions.php');

use PHPUnit\Framework\TestCase;

class test extends TestCase
{

    public function testvalidateProject()
    {
        $postdata = ['title' => 'logo', 'link' => 'link', 'image' => 'image'];
        $result = validateProject($postdata);
        $this->assertInternalType('bool', $result);
        $this->assertTrue($result);
    }

    public function testvalidateProject_failure()
    {
        $postdata = ['title' => '', 'link' => 'link', 'image' => 'image'];
        $result = validateProject($postdata);
        $this->assertInternalType('bool', $result);
        $this->assertFalse($result);
    }

    public function testvalidateProject_failure2()
    {
        $postdata = ['link' => 'link', 'image' => 'image'];
        $result = validateProject($postdata);
        $this->assertInternalType('bool', $result);
        $this->assertFalse($result);
    }

    public function testvalidateProject_failure3()
    {
        $postdata = ['title' => '', 'image' => 'image'];
        $result = validateProject($postdata);
        $this->assertInternalType('bool', $result);
        $this->assertFalse($result);
    }

    public function testvalidateProject_failure4()
    {
        $postdata = ['title' => '', 'link' => 'link'];
        $result = validateProject($postdata);
        $this->assertInternalType('bool', $result);
        $this->assertFalse($result);
    }

    public function testsetVariables()
    {
        $data = ['title' => 'logo', 'link' => 'link', 'image' => 'image'];
        $result = setVariables($data);
        $this->assertInternalType('string', $result[':title']);
        $this->assertInternalType('string', $result[':link']);
        $this->assertInternalType('string', $result[':image']);
    }

    public function testsetVariables_sanitizeTitle()
    {
        $data = ['title' => '<h1>hello</h1>', 'link' => 'link', 'image' => 'image'];
        $result = setVariables($data);
        $this->assertEquals('hello', $result[':title']);
    }

    public function testsetVariables_validateLink()
    {
        $data = ['title' => 'logo', 'link' => 'https://www.lil£iya.dev', 'image' => 'image'];
        $result = setVariables($data);
        $this->assertEquals('https://www.liliya.dev', $result[':link']);
    }

    public function testsetVariables_Image()
    {
        $data = ['title' => 'logo', 'link' => 'link', 'image' => 'image'];
        $result = setVariables($data);
        $this->assertEquals('images/image', $result[':image']);
    }
}