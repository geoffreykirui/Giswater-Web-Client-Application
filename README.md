# Giswater Web Client Application

Web client application using QGIS, GISWATER, QgisServer and LizMap.
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

# Easy install/deploy QGIS Server and Lizmap Web Client for Windows guys

Credits: João Gaspar, https://github.com/jonnyforestGIS

Last Tested on: QGIS Server 3.22.6 LTR + LizMap Web Client 3.4.11

:warning:**Warning for Portuguese Users**:warning:: If you use the application for Cartão de Cidadão Autenticação GOV, we found a issue that breaks the QGIS and QGIS Server instalation. Please check https://github.com/amagovpt/autenticacao.gov/issues/88


The following steps assume that the user will keep the suggested installation/deploy paths. If there is the necessity to use custom installatin/deploy paths then a number of configuration files (Apache, PHP) will need to be modified. This guide also assumes that on the Windows machine being used there aren't any other programs/services running on port 80.

1) Download the OSGeo4W installer: https://download.osgeo.org/osgeo4w/v2/osgeo4w-setup.exe 

2) Install the packages "qgis-ltr", "qgis-ltr-server" and "fcgi", let the installer manage the installation of dependencies

3) Copy the "webserver" folder inside the C: drive

4) Start the Apache web server by running **as administrator** (right click > run as administrator) the file 
```
C:\webserver\Apache24\bin\httpd.exe
```
5) As option Apache can be installed as Windows service by running (from the Windows console, launched as administrator) the following command:
```
C:\webserver\Apache24\bin\install-server.bat
```
After that Apache can be started/stopped from the Windows Services control panel or from the Windows console using the command (as administrator):
```
C:\webserver\Apache24\bin\start-server.bat
```
6) Open a browser and test if Apache works:
```
http://localhost
```
7) Test if PHP works:
```
http://localhost/info.php
```
8) Test if QGIS Server works:

```
http://localhost/qgis/qgis_mapserv.fcgi.exe
```
9) Test if Lizmap Web Client works:
```
http://localhost/lizmap/lizmap/www/index.php
```
10) On a completely clean Window 10 machine you can get an error message about missing some library. If is the case just download and install them from the MS web site: https://www.microsoft.com/en-us/download/details.aspx?id=52685


# Giswater ws and ud projects
After succesfully installing the requrements it is now time to add Giswater project to the web application.

First create schema and the QGIS project as described in [Giswater documentation](https://github.com/Giswater/giswater_dbmodel/wiki/Setup-guide) for set up guide.

In QGIS install [LizMap plugin](https://plugins.qgis.org/plugins/lizmap/) in the usual way. 
Open LizMap in QGIS and configure the LizMap project as desired, click ok to save the Giswater project and the configuration file, and copy the two files to the lizmap directory. Eg In webserver folder go to www\lizmap\lizmap\install\qgis there are;
1. wsedit.qgs and it corresponding wsedit.qgs.cfg for water network project
2. udedit.qgs and it corresponding udedit.qgs.cfg for sewer network project 

Open your browser open the lizmap production environment eg http://localhost/lizmap/lizmap/www/index.php
Log in to lizmap application to access the administrator dashboard
Go to the maps management and create a repository with id, label, and local folder path eg /webserver/data/prod/rep1/ and optionally check the required button accordingly.
A new Giswater project repository is now available, click on view and all the parameters as set in QGIS are visible, click on Load the Map to view the web map.
Giswater functionalities in QGIS are reflected in the web map immediately, there has been no better Giswater client than QGIS in the date. 
> The purpose of this project is to enable full functions of Giswater through the web for easy portability especially in the water operation and management.



