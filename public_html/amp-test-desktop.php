<!DOCTYPE html>
<html lang="en">
<?php
	require '../lib/include.php';
	$breadcrumbs [] = array (
		"name" => "AMP Desktop",
		"url"  => $canonical_url
	);
?>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="amphtml" href="<?php echo $amphtml_url ; ?>" />
  <title><?php echo $amp_title; ?> (title dtp)</title>
 </head>
 <body>
  <header>
	AMP example project (header dtp)
  </header>
  <?php bread_crumbs_as_html($breadcrumbs); ?>
  <article>
  <h1><?php echo $amp_title; ?> (h1 dtp)</h1>
 
  <p>DTP, <?php echo date('r'); ?>: This is canonical text.
   <img src="<?php echo $images['news-image.png']['url']; ?>" alt="News Image"
		width="<?php echo $images['news-image.png']['width']; ?>"  
		height="<?php echo $images['news-image.png']['height']; ?>"  >
  </p>
  </article>
  <nav>
    Go to <a href="/">Index</a> (nav).
  </nav>
  <footer>
     <img src="<?php echo $images['logo.png']['url']; ?>" alt="Logo Image"
		width="<?php echo $images['logo.png']['width']; ?>"  
		height="<?php echo $images['logo.png']['height']; ?>"  >
     (footer)
  </footer>
 </body>
</html>

