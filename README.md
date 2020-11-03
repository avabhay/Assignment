## Create table query
create table registration(
  id int(20) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  fname varchar(40) NOT NULL,
  lname varchar(40),
  email varchar(40) NOT NULL UNIQUE,
  password varchar(40) NOT NULL,
  mobile int(10)
);

### Download the code and extract it to htdocs folder of xampp server and then run create table query
### I have used syscom database in mysql
### Open the sysassig.php file on browser to run the project
