create database project;

create table signup(
id int primary key auto_increment,
firstname varchar(30),
lastname varchar(30),
email varchar(30),
password varchar(100)
);

select * from signup;
 
 DELETE FROM signup
WHERE id BETWEEN 6 AND 19;

create table admin(
id int primary key auto_increment,
email varchar(30),
password varchar(100)
);

insert into admin (email, password) values("purnika@gmail.com","purnika"),("upasana@gmail.com", "upasana");
insert into admin (email, password) values("admin@gmail.com","admin123");

select * from admin;

alter table admin
add name varchar(10);

update admin set name= 'Purnika' where id=1;
update admin set name= 'Upasana' where id=2;
update admin set name= 'AdminJi' where id=3;

create table courses(
CourseID int primary key auto_increment,
CourseTitle varchar(30),
description varchar(1000),
CreditHour int 
);

select * from courses;