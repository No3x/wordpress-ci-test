<?php

//require_once( './bootstrap-shortcodes.php' );

class ShortcodesTest extends WP_UnitTestCase {
	
	function setUp() {
		parent::setUp();
	}
	
	function testSample() {
		// replace this with some actual testing code
		$this->assertTrue( true );
	}
	
	function testAlerts() {
		
		$expected = '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Well done!</strong>You successfully read <a class="alert-link" href="#">this important alert message</a>.</div>';
		$content = '<strong>Well done!</strong>You successfully read <a class="alert-link" href="#">this important alert message</a>.';
		$params = array(
		  'type' => 'success'
		);
		$this->assertEquals($expected, bs_notice($params, $content), 'Alert');
	}
	
}

?>	