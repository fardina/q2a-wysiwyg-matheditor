Q2A Math Editor (LaTeX)
=======================

## Intro

This is a totally new mathjax editor for q2a. It's not markdown, it's based on ckeditor 4. So it's also a ckeditor 4 plugin for q2a. 

I made this plugin long time ago (right after the ckeditor 4 release) but I never published it.
It's time to do it ;)


## Feedback

Please report any issue, this is a beta testing release and I think there's some small fixes to do.


## How to use 

### Install plugin 
You will find enclosed the plugin, you just have to decompress it and put it in the qa-plugins directory and enable Matheditor in the Posting admin page.


### Enable mathjax (mandatory)

Put this code into Admin, Layout, Custom HTML at top of every page:

    <script type="text/x-mathjax-config"> MathJax.Hub.Config({ extensions: ["tex2jax.js"], jax: ["input/TeX","output/HTML-CSS"],     tex2jax: {inlineMath: [["$","$"],["\\(","\\)"]]}, TeX: { extensions: ["AMSmath.js","AMSsymbols.js"]} }); </script>

Put this code into Admin, Layout, Custom HTML in HEAD section of every page:

    <script type="text/javascript" src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"> </script>


## Outro 

Here you will find the Ckeditor 4 readme




CKEditor 4
==========

Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.  
http://ckeditor.com - See LICENSE.md for license information.

CKEditor is a text editor to be used inside web pages. It's not a replacement
for desktop text editors like Word or OpenOffice, but a component to be used as
part of web applications and websites.

## Documentation

The full editor documentation is available online at the following address:
http://docs.ckeditor.com

## Installation

Installing CKEditor is an easy task. Just follow these simple steps:

 1. **Download** the latest version from the CKEditor website:
    http://ckeditor.com. You should have already completed this step, but be
    sure you have the very latest version.
 2. **Extract** (decompress) the downloaded file into the root of your website.

**Note:** CKEditor is by default installed in the `ckeditor` folder. You can
place the files in whichever you want though.

## Checking Your Installation

The editor comes with a few sample pages that can be used to verify that
installation proceeded properly. Take a look at the `samples` directory.

To test your installation, just call the following page at your website:

	http://<your site>/<CKEditor installation path>/samples/index.html

For example:

	http://www.example.com/ckeditor/samples/index.html
