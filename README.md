# CSRF-coursework
CSRF coursework


When the user creates a new account, there is some code that will capture the user name and password as well as the email address. And it does, into a register.txt file in the backend. To actually counter this problem, the password can be hashed so it cannot be read. This can be seen on line ten, In the register.php file. The login function should work but it doesnt for some reason. To run this site locally, open terminal and run this php "-S localhost:8000" and it should run and you can test it yourself. 

Counter measure is hashing the password or as much of it as you can. 
Make sure the site is SSL protected and alsways look out for fake websites, such as banking websites pretending, as they can fake with css and javascript, and if the user takes the data just how I did, it can be worse. 


To run the code:
php -S localhost:8000 

You need php installed, its a lightweight site, the code has comments all round to describe what is happening.
