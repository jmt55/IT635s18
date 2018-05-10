#IT635

Student: John Tiu
Class: IT635
Instructor: DJ Kehoe

Boo Inventory Project Readme.
Post mid-term presentation, new additions such as ability to accept and deny request was added.  Admin can view all equipment regardless of status and have delete option. 
Final deliverables were stored procedure, master/slave DB replication, mongo server setup and database content, normal forms 1-3, and UML.   
There are two logins. 
User1: boo, password: mario64, accessType: standard
User2: boo-admin, password: mario64, accessType: admin
Login page: http://18.217.224.39/IT635midproj/home_page.php
Please make sure you enter all the require fields or login error will occur if any one of the fields is blank.  
Upon login you will be directed to click on a link leading you to the either Admin or standard user page.
Admin page will have the ability to add asset using the Navigation menu, view refresh orders, and amongst others. the "home" link is broken after you click on as it leads to standard user page vs staying in Admin mode. Please hit the backward button instead then make a selection.
Standard user access page can view their assigned assets, request asset and view their request. *no issues here
Log out is available on both member access.
When a standard user request an asset they can view their request immediately by clicking on "view my request" and Admin can view the request order under "View refresh request", can accept or deny.
Admin can add asset using the web form please enter the following below to test:
sn = 45GFT78 (any alpha combo 7digits) hostname = your choice for test model = keep it short like "Latitude E5480" type = put Laptop or Desktop cpu = "i7-3200" RAM = "16GB" hdd_type = "SSD-512" user = boo, status = active or available, refresh_date = you pick 
click Add record button.
please feel free to grade everything in the following found in the git repo: https://github.com/jmt55/IT635s18
except *bokuser.sql, bokuser.sql,ComputerInvBackup.sql (these were early tries and test)
