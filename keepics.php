<?php
/*
Plugin Name: DashCat
Description: An essentially useless plugin that cycles through an array of cat photos and allows you the opportunity to shower the author with thanks. 
*/

add_action( 'wp_dashboard_setup', 'ci_dashboard_add_widgets' );
function ci_dashboard_add_widgets() {
	wp_add_dashboard_widget( 'dashcat_widget', 'DashCat', 'dashCat');
}

function dashCat() {
	echo( '<h2><strong><u>Please enjoy this randomly selected image of a cat.</strong></u></h2><br><br>');
	$photoAreas = array("https://vetstreet.brightspotcdn.com/dims4/default/f6e3702/2147483647/thumbnail/180x180/quality/90/?url=https%3A%2F%2Fvetstreet-brightspot.s3.amazonaws.com%2F17%2Fa85b40b3a511e092fe0050568d634f%2Ffile%2Fhub-cats-kitten.jpg", "https://vetstreet.brightspotcdn.com/dims4/default/a1a90c7/2147483647/thumbnail/180x180/quality/90/?url=https%3A%2F%2Fvetstreet-brightspot.s3.amazonaws.com%2F0d%2Ff2e4c0b3a611e092fe0050568d634f%2Ffile%2Fhub-cats-senior.jpg", "https://pbs.twimg.com/profile_images/378800000532546226/dbe5f0727b69487016ffd67a6689e75a_400x400.jpeg", "https://d1wn0q81ehzw6k.cloudfront.net/additional/thul/media/0eaa14d11e8930f5?w=400&h=400", "https://vetstreet.brightspotcdn.com/dims4/default/38e16fc/2147483647/thumbnail/320x275/quality/90/?url=https%3A%2F%2Fvetstreet-brightspot.s3.amazonaws.com%2F04%2F09%2F1a9bfeea41e5b32f71c5cebd393d%2Fkitten-playing-with-toy.jpg", "http://cdn.shopify.com/s/files/1/1365/2497/products/inflatable_unicorn_horn_for_cats_grande.jpg?v=1470256461", "https://pbs.twimg.com/profile_images/875671244791840768/rUzo7sDc_400x400.jpg", "http://cdn.shopify.com/s/files/1/0344/6469/files/Screen_Shot_2016-10-04_at_11.16.03_AM_large.png?v=1475594279", "https://www.designboom.com/wp-content/uploads/2016/10/seth-casteel-pounce-kittens-designboom-250.jpg", "https://cdn.shopify.com/s/files/1/0673/5325/files/LadyDinahs_Cat_Cafe_Alice-Block_2048x.jpg?v=1517059999", "http://r.ddmcdn.com/s_f/o_1/cx_462/cy_245/cw_1349/ch_1349/w_720/APL/uploads/2015/06/caturday-shutterstock_149320799.jpg", "https://lh3.googleusercontent.com/-cnlDgM3JEuhUu2xhX82fSt5unNFUlBD5bnPFzwIK5wBxzeQdV9dPVuYttwlb66k8w4T=w300", "http://i0.kym-cdn.com/entries/icons/medium/000/011/365/GRUMPYCAT.jpg", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQKiW1zrKBTnb4_Nz53VWDxiQT4XNZrBg7ytmNJnw3irIfPdRLQ", "https://d1wn0q81ehzw6k.cloudfront.net/additional/thul/media/099d1c3d50c17528?w=400&h=400", "https://s7d2.scene7.com/is/image/PetSmart/PB1801_FEAT_PROD-CatTile-20170130?$CL0404$", "http://www.orphankittenrescue.com/~ASSETS/img/upload/Cauliflower.JPG", "https://petco.scene7.com/is/image/PETCO/2747731-center-1", "https://i1.wp.com/www.catcafesd.com/wp-content/uploads/2014/05/coffee_cat_9.jpeg?fit=493%2C335&ssl=1", "http://a.fod4.com/images/user_photos/1305415/9027f0b1f0b244b9f34fdbac2cca8254_square_fullsize.png");
	$randomNumber = rand(0, (count($photoAreas) -1));
	echo '<img src="' . $photoAreas[$randomNumber] . '" width=250 height=250>';
	echo '<br><br>Do you <strong><i>love</strong></i> seeing cat pictures in your WordPress admin dashboard? Of course you do.<a href="mailto:josh.marcus@wpengine.com?subject=These Cat Pics Saved My Business.&cc=joshmarcus85@gmail.com&body=Hi, Josh!%0D%0A%0D%0AJust wanted to drop you a line to tell you how much your plugin has improved my life. Who knew WordPress could be this much fun?%0D%0A%0D%0ASincerely,%0A%0D%0AYour Biggest Fan"><br>Email Josh</a> to let him know how much these cat photos improved your editing experience.<br><br><a href="https://twitter.com/intent/tweet?button_hashtag=joshmarcus85&ref_src=twsrc%5Etfw" class="twitter-hashtag-button" data-show-count="false">Tweet #joshmarcus85</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>';
}


?>

