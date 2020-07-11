<?php
//-------------------------------------------------------------database connection-------------------------------------------
include("../backend/database_connection.php");

$kids_wear = "create table kidswear(productId varchar(20) primary key, image varchar(200), name varchar(100), price varchar(10), size varchar(10), description varchar(200), category varchar(50))";
$con->query($kids_wear);
$w1 = "insert into kidswear values('kwc1p1ss', 'assets/49.jpeg', 'Full Sleeve Printed Boys Sweatshirt', '2100', 'S', 'With a rainbow of colors available and a budget-friendly price point, this hoodie cant be beat!.', 'Sweatshirt')";
$con->query($w1);
$w2 = "insert into kidswear values('kwc1p1sm', 'assets/49.jpeg', 'Full Sleeve Printed Boys Sweatshirt', '2100', 'M', 'With a rainbow of colors available and a budget-friendly price point, this hoodie cant be beat!.', 'Sweatshirt')";
$con->query($w2);
$w3 = "insert into kidswear values('kwc1p1sl', 'assets/49.jpeg', 'Full Sleeve Printed Boys Sweatshirt', '2100', 'L', 'With a rainbow of colors available and a budget-friendly price point, this hoodie cant be beat!.', 'Sweatshirt')";
$con->query($w3);
$w4 = "insert into kidswear values('kwc1p2ss', 'assets/50.jpeg', 'Full Sleeve Boys Sweatshirt', '2500', 'S', 'Crafted from 100% cotton this sweatshirt from the AW18 Dsquared2 kids collection', 'Sweatshirt')";
$con->query($w4);
$w5 = "insert into kidswear values('kwc1p2sm', 'assets/50.jpeg', 'Full Sleeve Boys Sweatshirt', '2500', 'M', 'Crafted from 100% cotton this sweatshirt from the AW18 Dsquared2 kids collection', 'Sweatshirt')";
$con->query($w5);
$w6 = "insert into kidswear values('kwc1p2sl', 'assets/50.jpeg', 'Full Sleeve Boys Sweatshirt', '2500', 'L', 'Crafted from 100% cotton this sweatshirt from the AW18 Dsquared2 kids collection', 'Sweatshirt')";
$con->query($w6);
$w7 = "insert into kidswear values('kwc1p3ss', 'assets/51.jpeg', 'Full Sleeve Embellished Sweatshirt', '2700', 'S', 'Full Sleeve Embellished Sweatshirt Great sweatshirt from the latest collection.', 'Sweatshirt')";
$con->query($w7);
$w8 = "insert into kidswear values('kwc1p3sm', 'assets/51.jpeg', 'Full Sleeve Embellished Sweatshirt', '2700', 'M', 'Full Sleeve Embellished Sweatshirt Great sweatshirt from the latest collection.', 'Sweatshirt')";
$con->query($w8);
$w9 = "insert into kidswear values('kwc1p3sl', 'assets/51.jpeg', 'Full Sleeve Embellished Sweatshirt', '2700', 'L', 'Full Sleeve Embellished Sweatshirt Great sweatshirt from the latest collection.', 'Sweatshirt')";
$con->query($w9);
$w10 = "insert into kidswear values('kwc2p1ss', 'assets/52.jpeg', 'Boys Printed Pure Cotton T Shirt', '3000', 'S', 'Wild Thunder T Shirt - Premium Quality Half Sleeve Round Neck Plain 100% Cotton Durable High Quality Crew neck for Kids.', 'Tshirt and Tops')";
$con->query($w10);
$w11 = "insert into kidswear values('kwc2p1sm', 'assets/52.jpeg', 'Boys Printed Pure Cotton T Shirt', '3000', 'M', 'Wild Thunder T Shirt - Premium Quality Half Sleeve Round Neck Plain 100% Cotton Durable High Quality Crew neck for Kids.', 'Tshirt and Tops')";
$con->query($w11);
$w12 = "insert into kidswear values('kwc2p1sl', 'assets/52.jpeg', 'Boys Printed Pure Cotton T Shirt', '3000', 'L', 'Wild Thunder T Shirt - Premium Quality Half Sleeve Round Neck Plain 100% Cotton Durable High Quality Crew neck for Kids.', 'Tshirt and Tops')";
$con->query($w12);
$w13 = "insert into kidswear values('kwc2p2ss', 'assets/53.jpeg', 'Girls Party Cotton Blend Top', '2800', 'S', 'Premium Quality Cotton tshirt Round neck t shirt Short sleeve t-shirt Silk screen printed tshirts .', 'Tshirt and Tops')";
$con->query($w13);
$w14 = "insert into kidswear values('kwc2p2sm', 'assets/53.jpeg', 'Girls Party Cotton Blend Top', '2800', 'M', 'Premium Quality Cotton tshirt Round neck t shirt Short sleeve t-shirt Silk screen printed tshirts .', 'Tshirt and Tops')";
$con->query($w14);
$w15 = "insert into kidswear values('kwc2p2sl', 'assets/53.jpeg', 'Girls Party Cotton Blend Top', '2800', 'L', 'Premium Quality Cotton tshirt Round neck t shirt Short sleeve t-shirt Silk screen printed tshirts .', 'Tshirt and Tops')";
$con->query($w15);
$w16 = "insert into kidswear values('kwc2p3ss', 'assets/54.jpeg', 'Boys & Girls Printed Cotton Silk T Shirt', '3200', 'S', 'Soft feel comfort Tshirt kids Tshirt for kids Kids 1-15 years old Comfortable and Durable High Quality Crew neck.', 'Tshirt and Tops')";
$con->query($w16);
$w17 = "insert into kidswear values('kwc2p3sm', 'assets/54.jpeg', 'Boys & Girls Printed Cotton Silk T Shirt', '3200', 'M', 'Soft feel comfort Tshirt kids Tshirt for kids Kids 1-15 years old Comfortable and Durable High Quality Crew neck.', 'Tshirt and Tops')";
$con->query($w17);
$w18 = "insert into kidswear values('kwc2p3sl', 'assets/54.jpeg', 'Boys & Girls Printed Cotton Silk T Shirt', '3200', 'L', 'Soft feel comfort Tshirt kids Tshirt for kids Kids 1-15 years old Comfortable and Durable High Quality Crew neck.', 'Tshirt and Tops')";
$con->query($w18);
$w19 = "insert into kidswear values('kwc3p1ss', 'assets/58.jpeg', 'Girls Pink Jacket', '4200', 'S', 'Burberry baby girls pink quilted jacket with a hood, an embossed flap over the zip closure, three buttoned pockets on the front.', 'Jackets')";
$con->query($w19);
$w20 = "insert into kidswear values('kwc3p1sm', 'assets/58.jpeg', 'Girls Pink Jacket', '4200', 'M', 'Burberry baby girls pink quilted jacket with a hood, an embossed flap over the zip closure, three buttoned pockets on the front.', 'Jackets')";
$con->query($w20);
$w21 = "insert into kidswear values('kwc3p1sl', 'assets/58.jpeg', 'Girls Pink Jacket', '4200', 'L', 'Burberry baby girls pink quilted jacket with a hood, an embossed flap over the zip closure, three buttoned pockets on the front.', 'Jackets')";
$con->query($w21);
$w22 = "insert into kidswear values('kwc3p2ss', 'assets/59.jpeg', 'Black Jacket', '4000', 'S', 'This adorable and soft monogrammed sherpa jacket will keep your kids warm during those chilly fall and winter mornings boys space jacket, modeled after Alpha’s jacket.', 'Jackets')";
$con->query($w22);
$w23 = "insert into kidswear values('kwc3p2sm', 'assets/59.jpeg', 'Black Jacket', '4000', 'M', 'This adorable and soft monogrammed sherpa jacket will keep your kids warm during those chilly fall and winter mornings boys space jacket, modeled after Alpha’s jacket .', 'Jackets')";
$con->query($w23);
$w24 = "insert into kidswear values('kwc3p2sl', 'assets/59.jpeg', 'Black Jacket', '4000', 'L', 'This adorable and soft monogrammed sherpa jacket will keep your kids warm during those chilly fall and winter mornings boys space jacket, modeled after Alpha’s jacket .', 'Jackets')";
$con->query($w24);
$w25 = "insert into kidswear values('kwc3p3ss', 'assets/60.jpeg', 'Black rugged Jacket', '3500', 'S', 'This rugged jacket offers waterproof, lightly insulated coverage that lets kids have fun outdoors even when conditions arent perfect.', 'Jackets')";
$con->query($w25);
$w26 = "insert into kidswear values('kwc3p3sm', 'assets/60.jpeg', 'Black rugged Jacket', '3500', 'M', 'This rugged jacket offers waterproof, lightly insulated coverage that lets kids have fun outdoors even when conditions arent perfect.', 'Jackets')";
$con->query($w26);
$w27 = "insert into kidswear values('kwc3p3sl', 'assets/60.jpeg', 'Black rugged Jacket', '3500', 'L', 'This rugged jacket offers waterproof, lightly insulated coverage that lets kids have fun outdoors even when conditions arent perfect.', 'Jackets')";
$con->query($w27);
$w28 = "insert into kidswear values('kwc4p1ss', 'assets/55.jpeg', 'Sports Pants', '2500', 'S', 'Spring Boys Elastic Loose Pants Colored Sports Pants For Girls Children Sweatpants Kids Trousers 2-12Y Baby Clothing Top-Quality.', 'Trousers')";
$con->query($w28);
$w29 = "insert into kidswear values('kwc4p1sm', 'assets/55.jpeg', 'Sports Pants', '2500', 'M', 'Spring Boys Elastic Loose Pants Colored Sports Pants For Girls Children Sweatpants Kids Trousers 2-12Y Baby Clothing Top-Quality.', 'Trousers')";
$con->query($w29);
$w30 = "insert into kidswear values('kwc4p1sl', 'assets/55.jpeg', 'Sports Pants', '2500', 'L', 'Spring Boys Elastic Loose Pants Colored Sports Pants For Girls Children Sweatpants Kids Trousers 2-12Y Baby Clothing Top-Quality.', 'Trousers')";
$con->query($w30);
$w31 = "insert into kidswear values('kwc4p2ss', 'assets/57.jpeg', 'Track Pant For Boys & Girls', '2700', 'S', 'This pants feature a side pockets and letter print design.amde by natural synthetic comfortable design.', 'Trousers')";
$con->query($w31);
$w32 = "insert into kidswear values('kwc4p2sm', 'assets/57.jpeg', 'Track Pant For Boys & Girls', '2700', 'M', 'This pants feature a side pockets and letter print design.amde by natural synthetic comfortable design.', 'Trousers')";
$con->query($w32);
$w33 = "insert into kidswear values('kwc4p2sl', 'assets/57.jpeg', 'Track Pant For Boys & Girls', '2700', 'L', 'This pants feature a side pockets and letter print design.amde by natural synthetic comfortable design.', 'Trousers')";
$con->query($w33);
$w34 = "insert into kidswear values('kwc4p3ss', 'assets/56.jpeg', 'kids pant', '2800', 'S', 'Fashion Kids Leisure Pants 2-7Y Casual Baby Trousers Spring Autumn Toddler Baby Boys Pants Children Clothing Summer boys pants wholesale casual kids trousers.', 'Trousers')";
$con->query($w34);
$w35 = "insert into kidswear values('kwc4p3sm', 'assets/56.jpeg', 'kids pant', '2800', 'M', 'Fashion Kids Leisure Pants 2-7Y Casual Baby Trousers Spring Autumn Toddler Baby Boys Pants Children Clothing Summer boys pants wholesale casual kids trousers..', 'Trousers')";
$con->query($w35);
$w36 = "insert into kidswear values('kwc4p3sl', 'assets/56.jpeg', 'kids pant', '2800', 'L', 'Fashion Kids Leisure Pants 2-7Y Casual Baby Trousers Spring Autumn Toddler Baby Boys Pants Children Clothing Summer boys pants wholesale casual kids trousers.', 'Trousers')";
$con->query($w36);
?>