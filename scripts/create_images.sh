#!/bin/bash

# This script generates sample images using ImageMagick

set -ex
cd `dirname $0`

# News Article image
convert \
	 -size 1200x128 \
	 -gravity center \
	 -background White \
         label:"My News Image" \
	 ../assets/news-image.png


# Publisher logo image - must be 600x60
convert \
	 -size 600x60 \
	 -background White \
	 -gravity center \
         label:"My Publisher logo" \
	 ../assets/logo.png


exit 0

