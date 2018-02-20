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


  // page specific data
  $amp_title = 'Hello, AMPs';
  $amp_headline = 'My AMP test page';

  $image_dir = "assets";


