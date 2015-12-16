create database promotion;
use promotion;

create table colleges (
    id int(11) primary key auto_increment,
    name varchar(255) default '',
    url  varchar(255) default '',
    num varchar(255) default '',
    create_time int(11) default 0,
    update_time int(11) default 0
);
