# Giswater Web Client Application

Web client application using QGIS, QgisServer and LizMap.
![Giswater Web Client](https://raw.githubusercontent.com/geoffreykirui/Giswater-Web-Client-Application/main/Giswater%20Web%20Client%20Application.png?token=AK4O76K6EVRIDRFURCYI6YDB2YZLG)

Giswater has been used in the management of water cycle through QGIS software and Giswater plugin, but web client application is more benefits for portability of water and sewer systems projects in a web browser.
QWC2 is one option of using the native of QGIS, but LizMap is another application working with QGIS and QgisServer.

These are the steps to deploying Giswater project as a web map but still the functionalities of Giswater are not replicated in the web app.
The following steps assume that the user will keep the suggested installation/deploy paths. If there is the necessity to use custom installatin/deploy paths then a number of configuration files (Apache, PHP) will need to be modified. This guide also assumes that on the Windows machine being used there aren't any other programs/services running on port 80. For reference check out the [LizMap windows installation documentation](https://docs.lizmap.com/3.4/en/install/windows.html) for guide through the set up process.

# The Requirements
1. Text Editor (e.g. [Visual Studio Code](https://code.visualstudio.com/download))
2. Microsoft Visual C++ Redistributable 64-bits (this installation need to respect the compiling version of Apache and PHP)([Microsoft VCs C++](https://support.microsoft.com/pt-pt/help/2977003/the-latest-supported-visual-c-downloads))
3. Web Server ([Apache 24 64-bits](https://www.apachelounge.com/download))
4. PHP 7.3.10 ([Non Thread Safe](https://windows.php.net/download/))
5. QGIS Server 3 64-bits ([OSGeo4W Network Installer (64 bit)](https://download.osgeo.org/osgeo4w/osgeo4w-setup-x86_64.exe)) Install compartible same version of QGIS and QGIS Server eg Version 3.10 - 3.16
6. Lizmap Web Client 3.x ([Github Lizmap releases](https://github.com/3liz/lizmap-web-client/releases/))
7. Giswater plugin [Version 3.5](https://download.giswater.org/plugin/3.5/giswater.xml) copy the link and configure in the QGIS plugins.
8. [PostgreSQL 9.5 - 11.x](https://www.postgresql.org/download/)
9. [PostGIS 2.x](http://postgis.net/install/)
10. FTP software (e.g. [Filezilla](https://filezilla-project.org/) , [WinSCP](https://winscp.net/eng/download.php)) 64-bits (optional)

# Giswater Web Client Application
After succesfully installing the requrements it is now time to add Giswater project to the web application.

First create schema and the QGIS project as described in [Giswater documentation](https://github.com/Giswater/giswater_dbmodel/wiki/Setup-guide) for set up guide.

Configure the giswater in QGIS project properties such that the project is correctly served. For [QGIS Server documentation](https://docs.qgis.org/3.16/en/docs/server_manual/index.html)
For windows systems don't worry about installing xampp since you already installed the Apache above.

In QGIS install [LizMap plugin](https://plugins.qgis.org/plugins/lizmap/) in the usual way. 
Open LizMap in QGIS and configure the LizMap project as desired, click ok to save the Giswater project and the configuration file, and copy the two files to the lizmap directory. Eg C:\webserver\data\prod\rep1\

Open your browser open the lizmap production environment eg http://localhost//webgis//index.php
Log in to lizmap application to access the administrator dashboard
Go to the maps management and create a repository with id, label, and local folder path eg /webserver/data/prod/rep3/ and optionally check the required button accordingly.
A new Giswater project repository is now available, click on view and all the parameters as set in QGIS are visible, click on Load the Map to view the web map.

Giswater functionalities in QGIS are reflected in the web map immediately, there has been no better Giswater client than QGIS in the date. 

> The purpose of this project is to enable full functions of Giswater through the web for easy portability especially in the water operation and management.



