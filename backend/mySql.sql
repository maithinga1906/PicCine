
drop database if exists piccine;
create database piccine;
use piccine;


create table roles(
	id int auto_increment,
    roles varchar(10),
    descr varchar(255),
    primary key(id)
);
create table voucher(
	id int auto_increment,
    namee varchar(50),
    codee varchar(50),
    descr varchar(255),
    count int,
    denominations float,
    primary key(id)
);

create table combo(
	id int auto_increment,
    name_style varchar(50),
    descr varchar(255),
    img varchar(255),
    price float,
    primary key(id)
);


create table users(
	id int auto_increment,
    username varchar(50),
	email varchar(70),
    passwordd varchar(255),
    id_roles int,
    phone numeric,
    namee varchar(50),
    token varchar(255),
    primary key(id),
    foreign key (id_roles) references roles(id)
);

create table booking(
	id int auto_increment,
    id_user int,
    id_photographer int,
    created_time datetime,
    id_combo int,
    is_cancel boolean,
    code_voucher varchar(50),
    primary key(id),
    foreign key(id_user) references users(id),
    foreign key(id_photographer) references users(id),
    foreign key(id_combo) references combo(id)
    
);


create table posts(
	id int auto_increment,
	id_photographer int,
    title varchar(50),
    content varchar(255),
    img varchar(255),
	id_post int,
    primary key(id),
	foreign key(id_photographer) references users(id)
);



