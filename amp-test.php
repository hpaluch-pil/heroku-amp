<!doctype html>
<html amp lang="en">
<?php
	require 'include.php';
?>
  <head>
    <meta charset="utf-8">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <title><?php echo $amp_title; ?></title>
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <script type="application/ld+json">
	{
		"@context": "http://schema.org",
		"@type": "NewsArticle",
		"author": {
			"@type": "Person",
			"name": "Humble person"
		 },
		"publisher": {
			"@type": "Organization",
			"name": "wish to remain anonymous",
			"logo": {
				"@type": "ImageObject",
				"url":   "<?php echo $images['logo.png']['url']; ?>",
				"width":  <?php echo $images['logo.png']['width']; ?>,
				"height": <?php echo $images['logo.png']['height']; ?>
			}
		},
		"headline": "<?php echo $amp_headline; ?>",
		"datePublished": "<?php echo date('c'); ?>",
		"dateModified": "<?php echo date('c'); ?>",
		"image": [ {
			"@type": "ImageObject",
			"url":   "<?php echo $images['news-image.png']['url']; ?>",
			"width":  <?php echo $images['news-image.png']['width']; ?>,
			"height": <?php echo $images['news-image.png']['height']; ?>
		} ]
	}
    </script>
    <style amp-boilerplate>
	h1 { border-bottom: 1px solid black; }
    </style>
    <noscript>
     <style amp-boilerplate>
	h1 { border-bottom: 1px solid blue; }
     </style>
    </noscript>
  </head>
  <body>
  <h1><?php echo $amp_title; ?></h1>
	<p>V2: This is modified source from <a href="https://www.ampproject.org/docs/tutorials/create/basic_markup">AMP project</a> page.
        <p> Inline picture here:
	  <amp-img src="<?php echo $images['news-image.png']['url']; ?>" alt="News Image"
		width="<?php echo $images['news-image.png']['width']; ?>"  
		height="<?php echo $images['news-image.png']['height']; ?>"
		layout="responsive">
	</amp-img>

	</p>
  </body>
</html> 
