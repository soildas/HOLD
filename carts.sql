create table carts (
    cart_num int not null auto_increment,
    member_id char(15) not null,
    product_id char(15) not null,
    name char(20) not null,
    primary key(cart_num)
);