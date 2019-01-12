
# Grubbie

> For Meteor implemetation of this project, please refer to: [https://github.com/ngunyimacharia/grubbie-meteor](https://github.com/ngunyimacharia/grubbie-meteor)

[Meltwater Entreprenuerial School of Technology](meltwater.org), MEST, and MEST Incubator provide training, seed investment and mentorship for the next generation of globally successful African software entrepreneurs.

The MEST Operations team proposed the development of an application that would achieve the following goals:

 - List item
 - Reduce wastage
 - Plan weekly purchases effectively
 - Track inventory
 - Measure the satisfaction level of customers, and;
 - Know the potential headcount per meal

This repository holds the implementation of the approved Grubbie team design:

 - [Kitchen Staff design](https://www.figma.com/file/FhCmZJbatPQ1s3qLjDwXfsqL/Kitchen?node-id=0:1)
 - [User design](https://www.figma.com/file/HmYfs4SgIDvfwtuVjnqRx2FS/Grubbie?node-id=0:1)

## Installation

To run this project, install [XAMPP](https://www.apachefriends.org/index.html), [LAMP](https://howtoubuntu.org/how-to-install-lamp-on-ubuntu) or [WAMP](http://www.wampserver.com/en/) on your computer. Clone this repository into a folder named "Grubbie". This can be simply done by running the following command:

    git clone https://github.com/ngunyimacharia/grubbie.git

Ensure that the Apache server is running either by starting XAMP, LAMP or WAMP.

## Usage
To run the project, open the url: http://localhost/grubbie on your browser of choice

NB: Due to internal links, it is highly recommended to maintain the link above.

![enter image description here](https://lh3.googleusercontent.com/0Ino7XGbRMAXAGqKKGoTul2wF9csyVxRLz-2ShQk857dMu61AJkfbgSdAgOM5QSRGd2fU_rOFPDx "Grubbie Landing Page")

## Contributing

#### Technology stack
HTML (Markup Language)
- https://www.w3schools.com/html/default.asp

SASS (Styling)
 - http://sass-lang.com/
 - https://www.tutorialspoint.com/sass/

Javascript (Animations)
- https://www.w3schools.com/js/default.asp

PHP (Templating)
- https://www.w3schools.com/php/default.asp


#### Packages used

Flow Router (Routing)
- https://atmospherejs.com/kadira/flow-router
- https://atmospherejs.com/kadira/blaze-layout

Bootstrap Grid (Grid system)
- https://getbootstrap.com/docs/4.1/layout/grid/

Font Awesome (Icon Pack)
- https://fontawesome.bootstrapcheatsheets.com/

Chart.js (Charting)
- http://chartjs.org/



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

## Credits



**Amanda Williams:** UI / UX design, data structures , backend
**Daniel Kayode:** Product Manager
**Esther Mwangi:** Frond End Mockup, Data
**Kelvin Macharia:** Backend Development
**Solomon Igori:** Front-end / Back-end

## License

This project is covered under the MIT License.
