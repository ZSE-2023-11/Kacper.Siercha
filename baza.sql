create database baza;
use baza;
create table users
(
  id int primary key auto_increment,
  username varchar(25),
  password varchar(75)
) engine=InnoDB default charset=utf8mb4 collate=utf8mb4_general_ci;
insert into users(username, password) values('admin', 'test');