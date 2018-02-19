<?php
/*
Plugin Name: DashCat
*/

add_action( 'wp_dashboard_setup', 'ci_dashboard_add_widgets' );
function ci_dashboard_add_widgets() {
	wp_add_dashboard_widget( 'dashcat_widget', 'DashCat', 'dashCat');
}

function dashCat() {
	echo( '<strong>Please enjoy this randomly selected image of a cat.</strong><br>');
	$photoAreas = array("https://vetstreet.brightspotcdn.com/dims4/default/f6e3702/2147483647/thumbnail/180x180/quality/90/?url=https%3A%2F%2Fvetstreet-brightspot.s3.amazonaws.com%2F17%2Fa85b40b3a511e092fe0050568d634f%2Ffile%2Fhub-cats-kitten.jpg", "https://vetstreet.brightspotcdn.com/dims4/default/a1a90c7/2147483647/thumbnail/180x180/quality/90/?url=https%3A%2F%2Fvetstreet-brightspot.s3.amazonaws.com%2F0d%2Ff2e4c0b3a611e092fe0050568d634f%2Ffile%2Fhub-cats-senior.jpg", "https://pbs.twimg.com/profile_images/378800000532546226/dbe5f0727b69487016ffd67a6689e75a_400x400.jpeg", "https://d1wn0q81ehzw6k.cloudfront.net/additional/thul/media/0eaa14d11e8930f5?w=400&h=400", "https://vetstreet.brightspotcdn.com/dims4/default/38e16fc/2147483647/thumbnail/320x275/quality/90/?url=https%3A%2F%2Fvetstreet-brightspot.s3.amazonaws.com%2F04%2F09%2F1a9bfeea41e5b32f71c5cebd393d%2Fkitten-playing-with-toy.jpg", "http://cdn.shopify.com/s/files/1/1365/2497/products/inflatable_unicorn_horn_for_cats_grande.jpg?v=1470256461", "https://pbs.twimg.com/profile_images/875671244791840768/rUzo7sDc_400x400.jpg", "http://cdn.shopify.com/s/files/1/0344/6469/files/Screen_Shot_2016-10-04_at_11.16.03_AM_large.png?v=1475594279", "https://www.designboom.com/wp-content/uploads/2016/10/seth-casteel-pounce-kittens-designboom-250.jpg", "https://cdn.shopify.com/s/files/1/0673/5325/files/LadyDinahs_Cat_Cafe_Alice-Block_2048x.jpg?v=1517059999");
	$randomNumber = rand(0, (count($photoAreas) -1));
	echo '<img src="' . $photoAreas[$randomNumber] . '" width=200 height=200>';
}


?>

