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
	wp_add_dashboard_widget( 'dashcat_widget', 'DashCat', 'dashCat');
}



/*
Random Cat Image Selection (Drawn from pics folder in plugin directory)
https://stackoverflow.com/questions/1761252/how-to-get-random-image-from-directory-using-php
*/

// dashCat Function Test
/*
function dashCat() {
	_e( 'Please enjoy this randomly selected image of a cat intended to brighten your editing experience.');
    $path = "pics/";
	$images = scandir($path);
	$image_number = rand(2,count($images)-1);
	echo "<br><br>";
	$path .= $images[$image_number];
	echo $path;
*/
function dashCat() {
	echo( 'Please enjoy this randomly selected image of a cat intended to brighten your editing experience.');
	echo '<img src="http://animalli.com/wp-content/uploads/2016/11/cats-kitty-animal-cute-cat-birthday-images-free.jpg">';
	$files = glob("pics/*.*");
	for ($i=1; $i<count($files); $i++)
	$num = $files[$i];
	echo '<img src="'.$num.'" alt="random image">'."&nbsp;&nbsp;";
	_e( "Here's some more text as a test because I cannot seem to get an image to display.");
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

