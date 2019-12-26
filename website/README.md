# Personal-Website V2.0
HTML version of my personal website. It is similar to version 1.0 but this was made so that it works with netlify

# Get started
- Install node js on your machine
- cd to root directory, type "npm install" for dependencies
- type "npm run dev" to start the server
- Go to http://localhost:8080

## HTML Pages
All html pages are in the /views/pages/ directory. These are ejs files which
call partials in ejs to include html in other pages.

## Static Files (CSS, Javascript)
/static/ directory

When an html page links to a stylesheet or some script, express serves the Static
files in the /static/ directory within the same direcory it is called inside
of the /views/pages/ direcory.

For example:

/views/pages/software/index.ejs     has a stylesheet href="css/page.css"

Since express serves our static files for us it actually grabs the css from

/static/software/css/page.css

This makes it easy to use relative addresses in hrefs of html files, so long
as you continue this directory structure of placing static files in /static
directory and the html in the views/pages/ directory and the reusable html
in the /views/partials/ directory

## Special Thanks
Secial Thanks to Devon Crawford for the help
