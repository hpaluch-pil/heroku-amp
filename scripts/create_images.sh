#!/bin/bash

# This script generates sample images using ImageMagick

set -ex
cd `dirname $0`

asset_dir=../public_html/assets

# News Article image
n_template=$asset_dir/news-image-template.png
convert \
	 -size 1200x128 \
	 -gravity center \
	 -background White \
         label:"My News Image" \
	 $n_template
	 

convert $n_template \
	-gravity SouthWest \
	-stroke gray \
	-annotate 0 ' %w x %h pixels' \
	$asset_dir/news-image.png	

for i in 800 640 320 256
do
convert $n_template \
	-scale $i \
	-gravity SouthWest \
	-stroke gray \
	-annotate 0 ' %w x %h pixels' \
	$asset_dir/news-image-$i.png	
done


# Publisher logo image - must be 600x60
convert \
	 -size 600x60 \
	 -background White \
	 -gravity center \
         label:"My logo" \
	 $asset_dir/logo-template.png

convert $asset_dir/logo-template.png \
	-gravity SouthWest \
	-stroke gray \
	-annotate 0 ' %w x %h pixels' \
	$asset_dir/logo.png	


exit 0

