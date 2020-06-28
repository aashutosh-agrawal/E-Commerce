<?php
//database connection
$hostname="127.0.0.1";
$un="root";
$pass="";
$dbname="ecommerce";

//connecting database using php
$con=new mysqli($hostname,$un,$pass,$dbname);

$men_wear = "create table menwear(productId varchar(20) primary key, image varchar(200), name varchar(100), price varchar(10), size varchar(10), quantity varchar(10), description varchar(200))";
$con->query($men_wear);
$w1 = "insert into menwear values('mwc1p1ss', 'assets/13.jpeg', 'Solid Men Hooded Black T-Shirt', '1000', 'S', '1100', 'Liseaven Men T Shirt Man Long Sleeve Tshirt Solid Men Hooded Neck Black T-Shirt.')";
$con->query($w1);
$w2 = "insert into menwear values('mwc1p1sm', 'assets/13.jpeg', 'Solid Men Hooded Black T-Shirt', '1000', 'M', '1100', 'Liseaven Men T Shirt Man Long Sleeve Tshirt Solid Men Hooded Neck Black T-Shirt.')";
$con->query($w2);
$w3 = "insert into menwear values('mwc1p1sl', 'assets/13.jpeg', 'Solid Men Hooded Black T-Shirt', '1000', 'L', '1100', 'Liseaven Men T Shirt Man Long Sleeve Tshirt Solid Men Hooded Neck Black T-Shirt.')";
$con->query($w3);
$w4 = "insert into menwear values('mwc1p2ss', 'assets/14.jpeg', 'Color Block Men Hoody', '2000', 'S', '1100', 'Fashion Men Brand Casual Men Sweatshirt Solid Color Hoodie Jaskets Male Hoodies.')";
$con->query($w4);
$w5 = "insert into menwear values('mwc1p2sm', 'assets/14.jpeg', 'Color Block Men Hoody', '2000', 'M', '1100', 'Fashion Men Brand Casual Men Sweatshirt Solid Color Hoodie Jaskets Male Hoodies.')";
$con->query($w5);
$w6 = "insert into menwear values('mwc1p2sl', 'assets/14.jpeg', 'Color Block Men Hoody', '2000', 'L', '1100', 'Fashion Men Brand Casual Men Sweatshirt Solid Color Hoodie Jaskets Male Hoodies.')";
$con->query($w6);
$w7 = "insert into menwear values('mwc1p3ss', 'assets/15.jpeg', 'Solid Men Round Neck Red T-Shirt', '700', 'S',  '1100', 'The purple tree Mens Printed Cotton T-Shirt - 1 pc, Printed Cotton Tshirt for Men, Men Tshirt, Tshirt.')";
$con->query($w7);
$w8 = "insert into menwear values('mwc1p3sm', 'assets/15.jpeg', 'Solid Men Round Neck Red T-Shirt', '700', 'M', '1100', 'The purple tree Mens Printed Cotton T-Shirt - 1 pc, Printed Cotton Tshirt for Men, Men Tshirt, Tshirt.')";
$con->query($w8);
$w9 = "insert into menwear values('mwc1p3sl', 'assets/15.jpeg', 'Solid Men Round Neck Red T-Shirt', '700', 'L', '1100', 'The purple tree Mens Printed Cotton T-Shirt - 1 pc, Printed Cotton Tshirt for Men, Men Tshirt, Tshirt.')";
$con->query($w9);
$w10 = "insert into menwear values('mwc2p1ss', 'assets/16.jpeg', 'Men Printed Formal Spread Shirt', '1500', 'S', '1100', 'Off Road Military Fashion Handsome Style Slim Fit Cotton Long-sleeved Men Shirt - Khaki M.')";
$con->query($w10);
$w11 = "insert into menwear values('mwc2p1sm', 'assets/16.jpeg', 'Men Printed Formal Spread Shirt', '1500', 'M', '1100', 'Off Road Military Fashion Handsome Style Slim Fit Cotton Long-sleeved Men Shirt - Khaki M.')";
$con->query($w11);
$w12 = "insert into menwear values('mwc2p1sl', 'assets/16.jpeg', 'Men Printed Formal Spread Shirt', '1500', 'L', '1100', 'Off Road Military Fashion Handsome Style Slim Fit Cotton Long-sleeved Men Shirt - Khaki M.')";
$con->query($w12);
$w13 = "insert into menwear values('mwc2p2ss', 'assets/17.jpeg', 'Men Solid Formal Spread Shirt', '2000', 'S', '1100', 'Fashion Mesh Mens See Through Shirts Men Shirt Silk Sexy Floral Mens Casual Shirt long Sleeve Man Shirts Slim Fit Designer Dress.')";
$con->query($w13);
$w14 = "insert into menwear values('mwc2p2sm', 'assets/17.jpeg', 'Men Solid Formal Spread Shirt', '2000', 'M', '1100', 'Fashion Mesh Mens See Through Shirts Men Shirt Silk Sexy Floral Mens Casual Shirt long Sleeve Man Shirts Slim Fit Designer Dress.')";
$con->query($w14);
$w15 = "insert into menwear values('mwc2p2sl', 'assets/17.jpeg', 'Men Solid Formal Spread Shirt', '2000', 'L', '1100', 'Fashion Mesh Mens See Through Shirts Men Shirt Silk Sexy Floral Mens Casual Shirt long Sleeve Man Shirts Slim Fit Designer Dress.')";
$con->query($w15);
$w16 = "insert into menwear values('mwc2p3ss', 'assets/18.jpeg', 'Men Self Design Formal Spread Shirt', '1000', 'S', '1100', 'Mens White Oxford Shirt in Stretch New Mens Shirts men Casual slim fit designer Print Camisa red/khaki/white/green Asian.')";
$con->query($w16);
$w17 = "insert into menwear values('mwc2p3sm', 'assets/18.jpeg', 'Men Self Design Formal Spread Shirt', '1000', 'M', '1100', 'Mens White Oxford Shirt in Stretch New Mens Shirts men Casual slim fit designer Print Camisa red/khaki/white/green Asian.')";
$con->query($w17);
$w18 = "insert into menwear values('mwc2p3sl', 'assets/18.jpeg', 'Men Self Design Formal Spread Shirt', '1000', 'L', '1100', 'Mens White Oxford Shirt in Stretch New Mens Shirts men Casual slim fit designer Print Camisa red/khaki/white/green Asian.')";
$con->query($w18);
$w19 = "insert into menwear values('mwc3p1ss', 'assets/19.jpeg', 'Regular Fit Men Grey Cotton Blend Trousers', '2500', 'S', '1100', 'Get the perfect blend of comfort and style by wearing these grey textured Slim Fit trousers from Allen Solly by Allen Solly.')";
$con->query($w19);
$w20 = "insert into menwear values('mwc3p1sm', 'assets/19.jpeg', 'Regular Fit Men Grey Cotton Blend Trousers', '2500', 'M', '1100', 'Get the perfect blend of comfort and style by wearing these grey textured Slim Fit trousers from Allen Solly by Allen Solly.')";
$con->query($w20);
$w21 = "insert into menwear values('mwc3p1sl', 'assets/19.jpeg', 'Regular Fit Men Grey Cotton Blend Trousers', '2500', 'L', '1100', 'Get the perfect blend of comfort and style by wearing these grey textured Slim Fit trousers from Allen Solly by Allen Solly.')";
$con->query($w21);
$w22 = "insert into menwear values('mwc3p2ss', 'assets/20.jpeg', 'Peter England Blend Trousers', '1000', 'S', '1100', 'Slim Fit Men Dark Blue Polyester Viscose Blend Trousers Regular Fit Men Pure Cotton Dark Blue Pure Cotton Trousers Regular Fit Men White Trousers.')";
$con->query($w22);
$w23 = "insert into menwear values('mwc3p2sm', 'assets/20.jpeg', 'Peter England Blend Trousers', '1000', 'M', '1100', 'Slim Fit Men Dark Blue Polyester Viscose Blend Trousers Regular Fit Men Pure Cotton Dark Blue Pure Cotton Trousers Regular Fit Men White Trousers.')";
$con->query($w23);
$w24 = "insert into menwear values('mwc3p2sl', 'assets/20.jpeg', 'Peter England Blend Trousers', '1000', 'L', '1100', 'Slim Fit Men Dark Blue Polyester Viscose Blend Trousers Regular Fit Men Pure Cotton Dark Blue Pure Cotton Trousers Regular Fit Men White Trousers.')";
$con->query($w24);
$w25 = "insert into menwear values('mwc3p3ss', 'assets/21.jpeg', 'Raymond Blend Trousers', '3500', 'S', '1100', 'Raymond Slim Fit Men Blue Polyester Blend Trousers Slim Fit Men Black Cotton Blend Trousers Brooklyn Slim Fit Men Beige Cotton Linen Blend Trousers.')";
$con->query($w25);
$w26 = "insert into menwear values('mwc3p3sm', 'assets/21.jpeg', 'Raymond Blend Trousers', '3500', 'M', '1100', 'Raymond Slim Fit Men Blue Polyester Blend Trousers Slim Fit Men Black Cotton Blend Trousers Brooklyn Slim Fit Men Beige Cotton Linen Blend Trousers.')";
$con->query($w26);
$w27 = "insert into menwear values('mwc3p3sl', 'assets/21.jpeg', 'Raymond Blend Trousers', '3500', 'L', '1100', 'Raymond Slim Fit Men Blue Polyester Blend Trousers Slim Fit Men Black Cotton Blend Trousers Brooklyn Slim Fit Men Beige Cotton Linen Blend Trousers.')";
$con->query($w27);
$w28 = "insert into menwear values('mwc4p1ss', 'assets/22.jpeg', 'COBIO MAN black Kurta', '2500', 'S', '1100', 'COBIO MAN Men Solid Cotton Blend Asymmetric Kurta (Black).')";
$con->query($w28);
$w29 = "insert into menwear values('mwc4p1sm', 'assets/22.jpeg', 'COBIO MAN black Kurta', '2500', 'M', '1100', 'COBIO MAN Men Solid Cotton Blend Asymmetric Kurta (Black).')";
$con->query($w29);
$w30 = "insert into menwear values('mwc4p1sl', 'assets/22.jpeg', 'COBIO MAN black Kurta', '2500', 'L', '1100', 'COBIO MAN Men Solid Cotton Blend Asymmetric Kurta (Black).')";
$con->query($w30);
$w31 = "insert into menwear values('mwc4p2ss', 'assets/23.jpeg', 'BENSTOKE Kurta', '2200', 'S', '1100', 'BENSTOKE Men Solid Cotton Blend Frontslit Kurta (Orange) Men Solid Cotton Blend Asymmetric Kurta.')";
$con->query($w31);
$w32 = "insert into menwear values('mwc4p2sm', 'assets/23.jpeg', 'BENSTOKE Kurta', '2200', 'M', '1100', 'BENSTOKE Men Solid Cotton Blend Frontslit Kurta (Orange) Men Solid Cotton Blend Asymmetric Kurta.')";
$con->query($w32);
$w33 = "insert into menwear values('mwc4p2sl', 'assets/23.jpeg', 'BENSTOKE Kurta', '2200', 'L', '1100', 'BENSTOKE Men Solid Cotton Blend Frontslit Kurta (Orange) Men Solid Cotton Blend Asymmetric Kurta.')";
$con->query($w33);
$w34 = "insert into menwear values('mwc4p3ss', 'assets/24.jpeg', 'VERO LIE Kurta', '1500', 'S', '1100', 'VERO LIE Men Solid Cotton Blend Straight Kurta (Light Blue) Men Solid Cotton Linen Blend Straight Kurta.')";
$con->query($w34);
$w35 = "insert into menwear values('mwc4p3sm', 'assets/24.jpeg', 'VERO LIE Kurta', '1500', 'M', '1100', 'VERO LIE Men Solid Cotton Blend Straight Kurta (Light Blue) Men Solid Cotton Linen Blend Straight Kurta.')";
$con->query($w35);
$w36 = "insert into menwear values('mwc4p3sl', 'assets/24.jpeg', 'VERO LIE Kurta', '1500', 'L', '1100', 'VERO LIE Men Solid Cotton Blend Straight Kurta (Light Blue) Men Solid Cotton Linen Blend Straight Kurta.')";
$con->query($w36);
?>
