<<<<<<< HEAD
SCIS: Senior Citizen Information System
=======================================
Program Synopsis: This program is a web based information system of Senior Citizens in Los Banos, Laguna. This helps the officials of the Los Banos Office for Senior Citizen Affairs (OSCA) to track the resident Senior Citizens that resides in the municipality and aid them to generate Senior Citizen IDs for their dependents.

Developers:
-Doron, Michael Bernard Bryan
-Ornales, Katrina
-Zavalla, Lorenzo
*Students of CMSC127 ST-2L from the University of the Philippines Los Banos

Installation:
1. Copy to your WAMP/XAMPP any Web Server htdocs
2. Edit private-files/connectDB.php and add your server's hostname MySQL username and password
3. Run on your web server (link to your server)/createDB.php
4. If the page has redirected you to the login page, then your application is ready to use.

Functionalities:
- Generate Application form For Senior Citizens
- View All Applications by the following parameters:
	- OSCA ID Number
	- Name
	- Barangay (Address)
	- Gender
	- Birthplace
	- Civil Status
- Search All Applications by the following parameters:
	- OSCA ID Number
	- Name
	- Barangay (Address)
	- Gender
	- Birthplace
	- Civil Status
	- Educational Attainment
	- Years of Residency
- Track logs of application process (Displayed on the home page which of the users generated an application)

FILES IN THE DIRECTORY AND THEIR FUNCTION:
>INDEX
	-createDB.php (create tables, MUST be run on first use)
	- form_newApplication.php (forms that contain the application form)
	- header.php (Header/Navbar)
	- home.php (Home page where users are redirected to)
	- index.php (Login page/Signup Page)
	- login.php (Login Controller, Checks Whether user is authenticated)
	- logout.php (Logout controller)
	- newApplication.php (Form submit controller, submits file on Database)
	- register.php (Signup controller)
	- searchpage.php (Search Page)
	- viewallapplications.php (View All Registered Senior Citizens in Database)



	>private-files(PHP SCRIPTS)
	- connectDB.php (Connects the app to the MySQL Database)
	- createDB.php (Creates a database/BACKUP FILE)
	- displayinfo.php (Display info of one user)
	- generateid.php (Generate OSCA ID Number per user)
	- listtable.php (Table that displays Application information)
	- logtable.php (Table that displays log information)
	- SCISstatistics.php (Calculates total number of applicants)
	- searchresults.php (Search functionality controller)
	- viewall.php (View all applications controller)



	>custom-scripts(JAVASCRIPT/CSS CODES)

	>bootstrap(bootstrap library)

TECHNOLOGIES/LIBRARIES USED:
- Jquery
- Bootstrap 3
- Jquery Validation Plugin (http://formvalidator.org)
- Ajax Validate (http://ajax.microsoft.com)

=======
SCIS
====

Senior Citizen Information System for Los Banos Laguna

This is a Project by the ff Students of CMSC 127 @ University of the Philippines Los Banos, Laguna
- Doron, Michael Bernard Bryan 
- Ornales, Katrina
- Zavalla, Lorenzo

Installation:

1. Make sure you have PHP and Mysql Set up on your Server.
2. Clone this repository and select the directory (where your cloned files will be saved)at your web server's document root (htdocs)
3. Edit connectDB.php and put in your mysql credentials
4. Run <server link (default is localhost)>/private-files/ConnectDB.php on your browser
5. The app will now run smoothly.
>>>>>>> f732a1cfc03bf0d056bbbd9ee3081fc82b9f2d2b
