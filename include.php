<?php
  $proto = "http";

  // is this right way to detect https for heroku?
  if ( isset($_SERVER['HTTP_X_FORWARDED_PROTO']) ){
	  $proto = $_SERVER['HTTP_X_FORWARDED_PROTO'];
  }

  $url_base = $proto."://".$_SERVER['SERVER_NAME'];
  $assets_base = $url_base."/assets";

  $canonical_url = $url_base."/amp-test-desktop.php";
  $amphtml_url   = $url_base."/amp-test.php";


  // page specific data - added unique string
  $unique_str = 'irgzurnuloer';
  $amp_title = 'Hello, AMPs '.$unique_str;
  $amp_headline = 'My AMP test page '.$unique_str;

  $image_dir = "assets";

  $news_images = array();

  $images = array();

  // query all images to get widht/height
  $files = scandir($image_dir);
  foreach ($files as $filename ) {
	if ( preg_match('/.*\.(gif|jpg|png)$/',$filename) == 1 ){
		// we are interested in images only
		// error_log("Filename1: '$filename'");
		list($width,$height) = getimagesize( $image_dir ."/". $filename );
		$images[ $filename ] = array (
			"width" => $width,
			"height" => $height,
			"url" => $assets_base."/".$filename
		);
		if ( preg_match('/^news-image(\.|-\d)/',$filename) == 1 ){
			$news_images[$filename] = $images[ $filename ];
		}

	}

  }
  // error_log("IMAGES: ".print_r($images,true));


