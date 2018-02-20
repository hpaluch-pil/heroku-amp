<!DOCTYPE html>
<html lang="en">
<?php
	require 'include.php';
?>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="amphtml" href="<?php echo $amphtml_url ; ?>" />
  <title><?php echo $amp_title; ?></title>
 </head>
 <body>
  <h1><?php echo $amp_title; ?></h1>
 
  <p> This is canonical text.
  <img src="<?php echo $images['news-image.png']['url']; ?>" alt="News Image"
		width="<?php echo $images['news-image.png']['width']; ?>"  
		height="<?php echo $images['news-image.png']['height']; ?>"  >
  </p>
  
  <hr>
  <p> Go to <a href="/">Index</a>.

  <img src="<?php echo $images['logo.png']['url']; ?>" alt="Logo Image"
		width="<?php echo $images['logo.png']['width']; ?>"  
		height="<?php echo $images['logo.png']['height']; ?>"  >
  </p>
 </body>
</html>

