#!/bin/bash

# This script generates sample images using ImageMagick

set -ex
cd `dirname $0`
convert \
	 -border 10 -bordercolor White \
	 -background White \
         label:"My News Image" \
	 ../assets/news-image.png
exit 0

