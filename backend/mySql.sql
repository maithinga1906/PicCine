
drop database if exists piccine;
create database piccine;
use piccine;
/* */ 
create table admin(		
	id int auto_increment,
	username varchar(20) not null,
    passwordd varchar(20) not null,
    email varchar(50) not null,
    phone int not null,
    access_token varchar(255),
    primary key(id)
);

/* */ 
create table user(
	 id int auto_increment,
     username varchar(20) not null,
     passwordd varchar(20) not null,
     email varchar(50),
     phone int,
     address varchar(255),
     primary key(id) 
);
create table role(
	id int auto_increment,
    rolee varchar(50)
);
/* */  
create table photogr(
	 id int auto_increment,
     username varchar(20) not null,
     passwordd varchar(20) not null,
     is_online boolean,
     primary key(id )
);

create table detail_photogr(
	id int auto_increment,
    id_photogr int,
    fullname varchar(50),
    nickname varchar(50),
    age int,
    phone int,
    address varchar(255),
    primary key(id),
	foreign key(id_photogr) references photogr(id)
);

/* */
create table follow(
	id int auto_increment,
    id_user int not null,
    id_photogr int not null,
    primary key(id),
    foreign key(id_user) references user(id),
    foreign key(id_photogr) references photogr(id)
);
/* */
create table post (
	id int auto_increment,
	id_photogr int not null,
    title varchar(50),
    content varchar(255),
    primary key(id),
    foreign key(id_photogr) references photogr(id)
);

create table book(
	id int auto_increment,
    id_user int not null,
    id_photogr int not null,
	is_cancel boolean,
    start_date datetime,
    primary key(id),
    foreign key(id_user) references user(id),
    foreign key(id_photogr) references photogr(id)
);

create table combo(
	id int auto_increment,
    title varchar(50) not null,
    descr varchar(255),
    price float,
    id_photogr int,
    primary key(id),
    foreign key(id_photogr) references photogr(id)
);
create table style(
	id int auto_increment,
    style varchar(50),
    descr varchar(255),
    id_photogr int,
    primary key(id),
    foreign key(id_photogr) references photogr(id)
);

create table comment(
	id int auto_increment,
    id_post int not null,
    id_user int not null,
    content varchar(255),
    primary key(id),
    foreign key(id_post) references post(id),
    foreign key(id_user) references user(id)
);

create table voucher(
	id int auto_increment,
    total int,
    codee varchar(50),
    start_day date,
    end_day date,
    primary key(id)
);

create table scene(
	id int auto_increment,
    start_date datetime,
    end_date datetime,
    title varchar(50),
    address varchar(255),
    primary key(id)
);

create table count_rate(
	id int auto_increment,
    id_photogr int not null,
    count_time int,
    total_score decimal,
    total_star decimal,
    primary key(id),
	foreign key(id_photogr) references photogr(id)
);

insert into admin(username, passwordd, email, phone) values ('piccine','piccine','piccine@gmail.com',0918203107);
-- select * from admin;

insert into user(username, passwordd, email, phone, address) values
('husky','piccine','husky@gmail.com',091820305,'101B Le Huu Trac, DN'),
('di','piccine', 'di@gmail.com',082354545,'102 Le Huu Trac, DN'),
('na','piccine', 'na@gmail.com', 081323232, '103 Le Huu Trac, DN'),
('nami','piccine','nami@gmail.com', 086543211,'104 Le Huu Trac, DN');
-- select * from user;

insert into photogr(username, passwordd, is_online) values 
('nhang.dang','piccine',true),
('nga.mai','piccine', false),
('thuat.ha','piccine', true),
('mai.ho', 'piccine',false),
('nga.nguyen','piccine',true);

-- select *from photogr;


--------------------- New database mowis -----------


drop database if exists piccine;
create database piccine;
use piccine;


create table roles(
	id int auto_increment,
    roles varchar(2550),
    primary key(id)
);

create table users(
	id int auto_increment,
    username varchar(50),
    firstname varchar(50),
    passwordd varchar(255),
    email varchar(255),
    phone numeric,
    id_roles int,
    primary key(id),
    foreign key (id_roles) references roles(id)
);

create table booking(
	id int auto_increment,
    user_id int,
    primary key(id),
    foreign key(user_id) references users(id)
);

create table detail_booking(
	id int auto_increment,
    id_booking int,
    address varchar(255),
    user_phone numeric,
    photographer numeric,
    primary key(id),
    foreign key(id_booking) references booking(id)
);

