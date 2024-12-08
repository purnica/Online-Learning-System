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