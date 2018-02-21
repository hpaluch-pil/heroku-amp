#!/bin/bash

# This script generates sample images using ImageMagick

set -ex
cd `dirname $0`

# News Article image
n_template=../assets/news-image-template.png
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
	../assets/news-image.png	

for i in 800 640 320 256
do
convert $n_template \
	-scale $i \
	-gravity SouthWest \
	-stroke gray \
	-annotate 0 ' %w x %h pixels' \
	../assets/news-image-$i.png	
done


# Publisher logo image - must be 600x60
convert \
	 -size 600x60 \
	 -background White \
	 -gravity center \
         label:"My logo" \
	 ../assets/logo-template.png

convert ../assets/logo-template.png \
	-gravity SouthWest \
	-stroke gray \
	-annotate 0 ' %w x %h pixels' \
	../assets/logo.png	


exit 0

