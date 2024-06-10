WebP Express 0.25.9. Conversion triggered using bulk conversion, 2024-06-06 07:31:47

**WebP Convert 2.9.0 ignited** 
PHP version: 8.1.2-1ubuntu2.17
Server software: Apache/2.4.52 (Ubuntu)

source: [doc-root]/wp-content/uploads/2024/06/fp_w-2x_optimized.png
destination: [doc-root]/wp-content/webp-express/webp-images/uploads/2024/06/fp_w-2x_optimized.png.webp

**Stack converter ignited** 

Options:
------------
- encoding: "auto"
- quality: 85
- alpha-quality: 80
- near-lossless: 60
- metadata: "all"
- log-call-arguments: true
- converters: (array of 2 items)

Note that these are the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options

Defaults:
------------
The following options was not set, so using the following defaults:
- auto-limit: true
- converter-options: (empty array)
- preferred-converters: (empty array)
- extra-converters: (empty array)
- shuffle: false


**imagemagick converter ignited** 

**Error: ** **imagemagick is not installed (cannot execute: "convert")** 
imagemagick is not installed (cannot execute: "convert")
imagemagick failed in 1 ms

**gd converter ignited** 

Options:
------------
- encoding: "auto"** (unsupported by gd)** 
- quality: 85
- alpha-quality: 80** (unsupported by gd)** 
- near-lossless: 60** (unsupported by gd)** 
- metadata: "all"** (unsupported by gd)** 
- log-call-arguments: true
- skip-pngs: **  (unknown to gd)** 

Note that these are the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options

Defaults:
------------
The following options was not set, so using the following defaults:
- auto-limit: true

GD Version: 2.3.0
image is not true color
converting color palette to true color
Bypassing auto-limit (it is only active for jpegs)
Quality: 85. 
gd succeeded :)

Converted image in 4 ms, reducing file size with 39% (went from 2374 bytes to 1456 bytes)
