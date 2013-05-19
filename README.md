# Blogging-Platform

This is a small lightweight blogging engine written in PHP and using a MySQL database.

## Installation

- You need a working MySQL install
- You need php enabled (obviously)
- Download and unzip this repo in your webservers root folder
- Create a folder outside the webservers root folder writeable by the web server's user (atm this needs to be 2 levels higher than the index.php and named config. This will be fixed)
- navigate to the index.php and it will run you through the rest.

## Colour.css
This file is currently untracked.
It looks by default like so:

	html, body {
	    background-color: #F9F9F9;
	    color: #262626;
	}
	#content a {
	    color:#0EA00E;
	}
	.post-text a:visited {
	    color:#0E500E;
	}
	#title a {
	    color:#0E500E;
	}
	.post-title {
	    color:#007000;
	}