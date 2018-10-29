# Grubbie


### Welcome to Grubbie - Proposed MEST Kitchen Application



### Phase 1: Implementation of UI

#### Proposed technology stack
HTML (Markup Language)
- https://www.w3schools.com/html/default.asp

SASS (Styling)
 - http://sass-lang.com/
 - https://www.tutorialspoint.com/sass/

Javascript (Animations)
- https://www.w3schools.com/js/default.asp

PHP (Templating)
- https://www.w3schools.com/php/default.asp

#### Folder structure
||=====================
||- assets
---css : *Compiled css output*
---images :  Images storage
--- js: *Javascript files*
---scss: *SASS Files*
||- includes: *HTML to be included in other pages*
||- inventory: Pages related to inventory management
||-orders: Pages related to orders
||-rating: Pages related to rating
||-user: Pages related to the user

#### General file naming rules
All file names will be in lowercase. For where we have multiple words per name, underscores to be used. Using of more than one word is not recommended.

#### SASS files naming and organisation

SASS Files will be named with respect to the section they relate to. E.g. users.sass for all user section related styling. All files will be compiled into one main.css

#### HTML pages file structure and naming
HTML files will be as php files with the php extension *filename.php*. This is to allow execution of PHP code within the files.

All files will have lowercase names with only one word. Words should represent the actions of the files. Examples are *create, read, update, delete, view, deactivate, vote / rate*

Only files related to the folder scope should be placed within the relevant folder.

#### Templating

Templating will be done using php include() function. To include a HTML page into another HTML page, simply add the following to your page:

    <?php include('../includes/header.php'); ?>

The above will include the file in the path to the page.
That simple :-)
