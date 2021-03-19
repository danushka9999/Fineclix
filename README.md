# Fineclix
This is a dynamic website called "Fineclix" for online event  photography management system with all four CRUD operation.

This dynamic website was my first year second semester Internet and Web Technologies module project.

In this Project I implemented these functions- 

index.php               -This is the Home page of Fineclix websit and on this user can get a idea about this website(chat with Us function implemented)</br>
(header and footer)
joinourteam.php         -This is the main page that redirects to requiredskills.php and photographerregister.php.
Requiredskils.php       -This is just a static page that shows required qualification to join Fineclix.
photographerregister.php-(CREATE Operation)This is the register form for photographer acc. when user fill this,
                          All the data will be stored in(users1 table) and redirect to user profile page(home.php)
photographerlogin.php   -(READ Operation)This is the login page of photographer acc[To access this page, the link is on the footer(photographer login)].
                          To log in user first need to register. If user registerd, Then the php functions validate that the user is valid one,
                          If user is a valid person php fuctions will redirect to user profile(home.php).
home.php                -(READ Operation)This is the User profile page and this page consist of user profile and links that update the users information,
                          delete users acc and log out function.
update.php              -(UPDATE Operation)This page consist form to update user information and diplay current information too.
delete.php              -(DELETE Operation)This page consist of php code and sql command that delete the users information ffrom database.
logout.php              -This page consist of php command to end the sesiion and redirect to photographerlogin page.
