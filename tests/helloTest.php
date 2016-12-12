<?php

require_once('src/hello.php');

class HelloTest extends PHPUnit_Framework_TestCase {


	public function setUp() {
	}

	public function tearDown() {
	}

	public function testHelloWorld() {
		$this->assertEquals(0, 1);
	}


}

?>