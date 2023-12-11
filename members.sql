create table members (
    num int not null auto_increment,
    name char(10) not null,
    id char(15) not null,
    pw char(15) not null,
    email char(80) not null,
    phoneNumber CHAR(15) not null,
    regist_day char(20),
    primary key(num)
);