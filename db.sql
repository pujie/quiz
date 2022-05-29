drop table if exists collections;
create table collections (id int primary key auto_increment,subject varchar(50),creator varchar(50),createdate timestamp default current_timestamp());
drop table if exists questions;
create table questions (id int primary key auto_increment,collection_id int,subject text,answer varchar(1),qweight smallint,creator varchar(50),createdate timestamp default current_timestamp());
drop table if exists options;
create table options (id int primary key auto_increment,question_id int,optionid varchar(1),subject varchar(50),creator varchar(50),createdate timestamp default current_timestamp());

drop table if exists users;
create table users (id int primary key auto_increment,name varchar(50),createdate timestamp default current_timestamp());
drop table if exists user_answers;
create table user_answers (user_id varchar(10),question_id int ,option_id varchar(1) ,createdate timestamp default current_timestamp(),CONSTRAINT PK_Person PRIMARY KEY (user_id,question_id));

