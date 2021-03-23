
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
    primary key(id),
    foreign key(id_user) references users(id),
    foreign key(id_photographer) references users(id),
    foreign key(id_combo) references combo(id)
    
);

create table detail_booking(
	id int auto_increment,
    id_booking int,
    address varchar(255),
    user_phone numeric,
    photographer_phone numeric,
    user_name varchar(50), 
    photographer_name varchar(50),
    code_vourcher varchar(50),
    name_style varchar(50),
    primary key(id),
    foreign key(id_booking) references booking(id)
    -- foreign key(name_style) references combo(name_style) 
    -- foreign key(code_vourcher) references voucher(codee) 
    
);

-- create table studio(
-- 	id int auto_increment,
--     address varchar(255),
--     phone numeric
-- );

create table post(
	id int auto_increment,
    id_photographer int,
    primary key(id),
    foreign key(id_photographer) references users(id)
);
create table post_detail(
	id int auto_increment,
    title varchar(50),
    content varchar(255),
    img varchar(255),
	id_post int,
    foreign key(id_post) references post(id),
    primary key(id)
);



