<?php

require_once( '../sample-plugin.php' );

class AlertsTest extends WP_UnitTestCase {
	
	function setUp() {
		parent::setUp();
		
		$sp = new SamplePlugin();

		foreach ( $this->shortcodes as $shortcode ) {
			add_shortcode( $shortcode, array( $this, '_shortcode_' . str_replace( '-', '_', $shortcode ) ) );
		}
	}
	
	function testShortcodes {
		$expected = '<iframe width="500" height="200" scrolling="no" frameborder="no" src="http://w.soundcloud.com/player?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F38987054"></iframe>';
		$params = array(
		  'url' => 'http://api.soundcloud.com/tracks/38987054',
		  'iframe' => true,
		  'width' => 500,
		  'height' => 200
		);
		$this->assertEquals($expected, soundcloud_shortcode($params), 'Simple HTML5 widget');
	}
	function testSample() {
		// replace this with some actual testing code
		$this->assertTrue( true );
	}
}

?>	