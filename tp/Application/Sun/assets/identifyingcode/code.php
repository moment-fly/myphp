<?php
	session_start();
	$string = 'sunpegfi123';
	$code = '';
	for ($i = 0; $i < 4; $i++) {
		$code .= $string[mt_rand(0, strlen($string) - 1)];
	}
	$_SESSION['code'] = $code;
	$width = 250;
	$height = 100;
	$font_size = 80;
	$image = imagecreate($width, $height);
	
	$background_red = mt_rand(0, 255);
	$background_green = mt_rand(0, 255);
	$background_blue = mt_rand(0, 255);
	$background_color = imagecolorallocate($image, $background_red, $background_green, $background_blue);
	$noise_color = imagecolorallocate($image, abs(100 - $background_red), abs(100 - $background_green), abs(100 - $background_blue));
	$text_color = imagecolorallocate($image, 255 - $background_red, 255 - $background_green, 255 - $background_blue);
	
	for ($i = 0;$i < $width * $height / 2;$i++) {
		imagefilledellipse($image, mt_rand(0, $width), mt_rand(0, $height), 1, 1, $noise_color);
	}
	
	for ($i = 0;$i < $width * $height / 200;$i++) {
		imageline($image, mt_rand(0, $width), mt_rand(0, $height), mt_rand(0, $width), mt_rand(0, $height), $noise_color);
	}
	
	$red_pixel = imagecolorallocate($image, abs(100 - $background_red), abs(100 - $background_green), abs(100 - $background_blue));
	$white_pixel = imagecolorallocate($image, abs(100 - $background_red), abs(100 - $background_green), abs(100 - $background_blue));
	
	$style = [$red_pixel, $red_pixel, $red_pixel, $red_pixel, $red_pixel, $white_pixel, $white_pixel, $white_pixel, $white_pixel, $white_pixel];
	imagesetstyle($image, $style);
	
	imageline($image, 0, 0, $width, $height, IMG_COLOR_STYLED);
	imageline($image, $width, 0, 0, $height, IMG_COLOR_STYLED);
	
	$values = [
		mt_rand(0, $width), mt_rand(0, $height), 
		mt_rand(0, $height), mt_rand(0, $width), 
		mt_rand(0, $width), mt_rand(0, $height), 
		mt_rand(0, $height), mt_rand(0, $width), 
		mt_rand(0, $width), mt_rand(0, $height), 
		mt_rand(0, $height), mt_rand(0, $width), 
		mt_rand(0, $width), mt_rand(0, $height), 
		mt_rand(0, $height), mt_rand(0, $width), 
		mt_rand(0, $width), mt_rand(0, $height), 
		mt_rand(0, $height), mt_rand(0, $width), 
		mt_rand(0, $width), mt_rand(0, $height), 
		mt_rand(0, $height), mt_rand(0, $width),
	]; 

	// create Random Colors then set it to $clr
	$red_random = abs(100 - mt_rand(0, 255)); 
	$green_random = abs(100 - mt_rand(0, 255)); 
	$blue_random = abs(100 - mt_rand(0, 255)); 
	$clr = imagecolorallocate($image, $red_random, $green_random, $blue_random); 

	// create filled polygon with random points 
	imagefilledpolygon($image, $values, 6, $clr);

	$textbox = imagettfbbox($font_size, 0, './consola.ttf', $code) or die('Error in imagettfbbox function'); 
	$x = ($width - $textbox[4]) / 2; 
	$y = ($height - $textbox[5]) / 2; 
	imagettftext($image, $font_size, 0, $x, $y, $text_color, './consola.ttf', $code) or die('Error in imagettftext function');
	
	imageantialias($image, 100);
	imagealphablending($image, 1);
	imagelayereffect($image, IMG_EFFECT_OVERLAY);
	
	header('Content-Type: image/jpeg');
	imagejpeg($image);
	imagedestroy($image);