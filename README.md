# :black_nib: Q2A Math Editor (LaTeX)


## :clipboard: Description

This is a totally new mathjax editor for q2a. It's not markdown, it's based on CKEditor 4. ~~So it's also a ckeditor 4 plugin for q2a~~ (use native WYSIWYG instead). 

I made this plugin long time ago (right after the ckeditor 4 release) but I published long time after (but already 5 years ago !)

Since then, [Question2Answers](https://www.question2answer.org/) team integrated natively the [CKEditor 4](https://github.com/ckeditor/ckeditor-dev) as WYSIWYG.


## :speech_balloon: Feedback

Please report any issue in the [issue board](https://github.com/thibaultduponchelle/q2a-ckeditor-latex/issues), this is a beta testing release and I think there's some small fixes to do.


## :carousel_horse: Install 

1. Download the plugin
2. Decompress in your **qa-plugin** directory
3. Enable **WYSIWYG Math Editor** in the **Admin** > **Posting** page.

![](screenies/matheditors.png)

4. Enable **MathJax** on your website by putting this code into **Admin** > **Layout** > C**ustom HTML in HEAD** section of every page:

```
<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
<script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
```

Like this : 

![](screenies/customhtml.png)

And you're done !

## :rainbow: Demo

When you go to post a question you will have this new WYSIWYG editor with an **Sigma** in the toolbar (+ various other plugins selected by me) : 

![](screenies/editor.png)

When you click on it the **Sigma** button you will have a popup and you can start editing **Math Formulas** with a visual feedback : 

![](screenies/editmath.png)

When you submit you message, you get your math YEAH : 

![](screenies/yeah.png)


## :airplane: Outro 

Here you will find the Ckeditor 4 README





CKEditor 4
==========

Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
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
