<?php
/*
Plugin Name: Kee Pics
*/

/*
Widget Creation in WordPress
https://www.cssigniter.com/make-wordpress-dashboard-widget/
*/
add_action( 'wp_dashboard_setup', 'ci_dashboard_add_widgets' );
function ci_dashboard_add_widgets() {
	wp_add_dashboard_widget( 'keepics_widget', 'KeePics', 'keePics');
}

/*
Random Cat Image Selection (Drawn from pics folder in plugin directory)
https://stackoverflow.com/questions/1761252/how-to-get-random-image-from-directory-using-php
*/

// KeePics Function Test
function keePics() {
	_e( 'Please put cat pictures here.');
	$imagepath="pics/cat1.jpg";
	$image=imagecreatefromjpeg($imagepath);
	header('Content-Type: image/jpeg');
	imagejpeg($image);
}

/*
function keePics() {
	// Sets the image directory
	$imagesDir = 'pics';
	$images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
	// Chooses a random image from the directory
	$randomImage = $images[array_rand($images)]; 

	// This should return a random image for display on the dashboard ... I think. 
	return $randomImage;
}
*/

?>