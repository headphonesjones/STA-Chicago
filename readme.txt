XAMPP

Make sure you install and run a XAMPP server. You will need to run Apache and MySQL in order to get the code to work. Pull the project into the XAMPP/htdocs directory and then continue on to installing the node modules with npm install.
On quenchjs.com

NPM
===============
Navigate to your project directory using the command line and run the following command:
    npm install


Using Gulp
==========

Default Task
------------

    gulp

Running the default task automatically watches your project folders for any changes and runs the accompanying task. For example, if you've elected to run tasks on your JavaScript, anytime you change a JavaScript file gulp will automatically run those tasks, including a browser refresh if you've included BrowserSync.

CSS
---
    gulp styles

Running the gulp styles task will run your selected CSS tasks once.

JavaScript
----------
 
    gulp scripts

Running the gulp scripts task will run your selected JavaScript tasks once.

Images
------

    gulp images

Running the gulp images task will run your selected image tasks once.

Feedback
========

I'd love to hear your thoughts on Quench, any suggestions you might have, or any bugs you come across. Send all feedback to: feedback@quenchjs.com
