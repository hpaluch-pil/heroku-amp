#!/bin/bash

# This script generates sample images using ImageMagick

set -ex
cd `dirname $0`
convert label:"My News Image" -border 10 ../assets/news-image.png
exit 0

