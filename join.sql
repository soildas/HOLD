select p.name, p.color, p.size, p.price, c.amount
 from products p, members m, carts c
 where c.member_id = m.member_id
 and c.product_id = p.product_id;