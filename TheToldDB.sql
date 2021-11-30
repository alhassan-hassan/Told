drop database if exists TheTold;
create database TheTold;
use TheTold;

create table users (
	user_id int auto_increment primary key,
    fName varchar (20) not null,
    lName varchar (20) not null,
    region varchar(30) not null,
    dob date,
    email varchar(50) not null,
    password_ varchar (16) not null unique
);

create table post(
	post_id int auto_increment primary key,
    user_id int,
    brief varchar(40) not null,
    description_ text,
    date_ datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    file_content blob not null,
    foreign key(user_id) references users(user_id)
);

create table notification (
    notification_id int auto_increment primary key,
	receiver_id int not null,
	sender_name varchar(40),
    date_ datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    subject_ varchar(40),
    description_ text,
    foreign key(receiver_id) references users(user_id)
);

create table user_notification (
    receiver_id int not null,
    notification_id int not null,
    foreign key(receiver_id) references users(user_id),
    foreign key(notification_id) references notification (notification_id)
);