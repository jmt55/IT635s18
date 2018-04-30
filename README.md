# IT635s18

Boo Inventory Project Readme.

there are 2 user logins with hashed and salted password
user1: hashman  ,password: "hashthis" accessType: admin
user2: hashman2 ,password: "hashaway" accessType: standard

login page specified here: http://18.220.80.140/IT635midproj/home_page.php

please make sure you enter all the require fields or login error to occur.

Upon login you will be directed to click on a link leading you to the either Admin or standard user page.

Admin page will have the ability to add asset using the Navigation menu, view refresh orders, and amongst others. **the "home" link is broken
after you click on as it leads to standard user page vs staying in Admin mode.  It was working before but I screwed something up last second.** 

Standard user access page can view their assigned assets, request asset and view their request. *no issues here

Log out is available on both member access.

When a standard user request an asset they can view their request immediately by clicking on "view my request" and Admin can view the request order
under "View refresh request"

Admin can add asset using the web form please enter the following below to test:

sn = 45GFT78 (any alpha combo 7digits)
hostname =  your choice for test
model = keep it short like "Latitude E5480"
type = put Laptop or Desktop
cpu = "i7-3200"
RAM = "16GB"
hdd_type = "SSD-512"
user = hashman (the user has to exist in member table or it will fail)
status = active or available
po_date = you pick
refres_date = you pick
wty_exp = you pick

click Add record button.


please feel free to grade everything in the following found in the git repo: https://github.com/jmt55/IT635s18

except *bokuser.sql, bokuser.sql,ComputerInvBackup.sql (these were early tries and test)

notes for 'me'
*I will work on further hardening security on the mysql server and project which I'm aware needs more work.
Will add java to make the pages dynamic- didn't have time.
will work on mysql table rules and joins

