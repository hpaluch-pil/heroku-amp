<?php
  define("GOOGLE_DATA_VAL_URL","https://search.google.com/structured-data/testing-tool#url=");

  function structured_data_link($url,$allow_target=true){
	  $link = GOOGLE_DATA_VAL_URL.urlencode($url);
	  $target = $allow_target ? " target=\"data_validator\"" : ""; 
	  return sprintf("<a%s href=\"%s\">%s</a>",$target,$link,"Validate LD+JSON");
  }

  // return structure to be easily jsonised for ld+json
  function bread_crumbs_for_json($breadcrumbs){

	  $bc_items = array();
	  for($i=0;$i<count($breadcrumbs);$i++){
		  $bc_items[] = array (
			"@type"    => "ListItem",
			"position" => $i+1,
			"item" => array (
				"@id"  => $breadcrumbs[$i]['url'],
				"url"  => $breadcrumbs[$i]['url'],
				"name" => $breadcrumbs[$i]['name']
			)
		  );
	  }


	  $bclist = array(
		"@context" => "http://schema.org",
		"@type"    => "BreadcrumbList",
		"itemListElement" => $bc_items
	  );
	  return $bclist;
  }

  function bread_crumbs_as_html($breadcrumbs){
	  $nc = false;
	  echo "<nav>";
	  foreach( $breadcrumbs as $bc ){
		  if ($nc){
			  echo " | ";
		  } else {
			  $nc = true;
		  }
		printf("<a href=\"%s\">%s</a>",$bc['url'],$bc['name']);	  
	  }
	  echo "</nav>";
  }

  function desc_width_sorter($a,$b){
	  $v =  $b['width'] - $a['width'];
	  return gmp_sign($v);
  }


  $proto = "http";

  // is this right way to detect https for heroku?
  if ( isset($_SERVER['HTTP_X_FORWARDED_PROTO']) ){
	  $proto = $_SERVER['HTTP_X_FORWARDED_PROTO'];
  }

  $url_base = $proto."://".$_SERVER['SERVER_NAME'];
  $assets_base = $url_base."/assets";

  $canonical_url = $url_base."/amp-test-desktop.php";
  $amphtml_url   = $url_base."/amp-test.php";

  $breadcrumbs = array(
	  array(
		  "name" => "Home",
		  "url"  => $url_base
	  )
  );

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
			$news_images[] = $images[ $filename ];
		}

	}

  }
  // sort news_images by width in descending order
  usort($news_images,'desc_width_sorter');
  // error_log("IMAGES: ".print_r($images,true));


