# CodeIgniter 4 Basic Docker Setup

To use this you will need to do the following

1. _**add**_ the following line to your /etc/hosts file on your computer
   <code>127.0.0.1     new-backoffice.test</code>

2. The .env file is set up for local development work. There is no need to alter the file.

Make sure you stop all other docker containers before starting this one up.
To stop docker containers
Open your terminal and `cd` to the directory where an active container is running and enter
<code>docker-compose stop</code>

Then `cd` to the root folder of this project and type
<code>docker-compose up -d</code>

NOTE: no database has been added yet for this project. 

