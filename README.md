#Create table query
create table registration(
  id int(20) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  fname varchar(40) NOT NULL,
  lname varchar(40),
  email varchar(40) NOT NULL UNIQUE,
  password varchar(40) NOT NULL,
  mobile int(10)
);
