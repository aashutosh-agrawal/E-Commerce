<?php
//database connection
include("../backend/database_connection.php");

$men_fwear = "create table menfootwear(productId varchar(20) primary key, image varchar(200), name varchar(100), price varchar(10), size varchar(10), description varchar(200), category varchar(50))";
$con->query($men_fwear);
$w1 = "insert into menfootwear values('mfwc1p1ss', 'assets/37.jpeg', 'Men Loafers For Men', '2000', 'S', 'TASSEL LOAFERS 734 FOREST TASSEL LOAFERS IN BURGUNDY BOX-CALF.', 'Loafers')";
$con->query($w1);
$w2 = "insert into menfootwear values('mfwc1p1sm', 'assets/37.jpeg', 'Men Loafers For Men', '2000', 'M', 'TASSEL LOAFERS 734 FOREST TASSEL LOAFERS IN BURGUNDY BOX-CALF.', 'Loafers')";
$con->query($w2);
$w3 = "insert into menfootwear values('mfwc1p1sl', 'assets/37.jpeg', 'Men Loafers For Men', '2000', 'L', 'TASSEL LOAFERS 734 FOREST TASSEL LOAFERS IN BURGUNDY BOX-CALF.', 'Loafers')";
$con->query($w3);
$w4 = "insert into menfootwear values('mfwc1p2ss', 'assets/38.jpeg', 'Knoos Loafers For Men (Brown)', '3000', 'S', 'Knoos Brown Synthetic Leather Casual Loafer Loafers For Men (Brown).', 'Loafers')";
$con->query($w4);
$w5 = "insert into menfootwear values('mfwc1p2sm', 'assets/38.jpeg', 'Knoos Loafers For Men (Brown)', '3000', 'M', 'Knoos Brown Synthetic Leather Casual Loafer Loafers For Men (Brown).', 'Loafers')";
$con->query($w5);
$w6 = "insert into menfootwear values('mfwc1p2sl', 'assets/38.jpeg', 'Knoos Loafers For Men (Brown)', '3000', 'L', 'Knoos Brown Synthetic Leather Casual Loafer Loafers For Men (Brown).', 'Loafers')";
$con->query($w6);
$w7 = "insert into menfootwear values('mfwc1p3ss', 'assets/39.jpeg', 'Copper Loafers', '2500', 'S',  'Knoos Copper Synthetic Leather Casual Loafer Soft Footwear Brand Mens Casual Shoes.', 'Loafers')";
$con->query($w7);
$w8 = "insert into menfootwear values('mfwc1p3sm', 'assets/39.jpeg', 'Copper Loafers', '2500', 'M', 'Knoos Copper Synthetic Leather Casual Loafer Soft Footwear Brand Mens Casual Shoes.', 'Loafers')";
$con->query($w8);
$w9 = "insert into menfootwear values('mfwc1p3sl', 'assets/39.jpeg', 'Copper Loafers', '2500', 'L', 'Knoos Copper Synthetic Leather Casual Loafer Soft Footwear Brand Mens Casual Shoes.', 'Loafers')";
$con->query($w9);
$w10 = "insert into menfootwear values('mfwc2p1ss', 'assets/40.jpeg', 'Casual sneakers shoes for men Sneakers For Men (White)', '3500', 'S', 'Spring White Shoes Men Casual Shoes Male Sneakers Cool Street Men Shoes Brand Man Footwear KA793.', 'Sneakers')";
$con->query($w10);
$w11 = "insert into menfootwear values('mfwc2p1sm', 'assets/40.jpeg', 'Casual sneakers shoes for men Sneakers For Men (White)', '3500', 'M', 'Spring White Shoes Men Casual Shoes Male Sneakers Cool Street Men Shoes Brand Man Footwear KA793.', 'Sneakers')";
$con->query($w11);
$w12 = "insert into menfootwear values('mfwc2p1sl', 'assets/40.jpeg', 'Casual sneakers shoes for men Sneakers For Men (White)', '3500', 'L', 'Spring White Shoes Men Casual Shoes Male Sneakers Cool Street Men Shoes Brand Man Footwear KA793.', 'Sneakers')";
$con->query($w12);
$w13 = "insert into menfootwear values('mfwc2p2ss', 'assets/41.jpeg', 'Hotstyle Sneakers For Men (Black)', '2000', 'S', 'CLYMB Casual Shoes Men Shark Design Bottom Platform Sneakers Men Mesh Breathable Shoes Male Mixed Colors Trainers Shoes for Mens The Best White Sneakers For Men.', 'Sneakers')";
$con->query($w13);
$w14 = "insert into menfootwear values('mfwc2p2sm', 'assets/41.jpeg', 'Hotstyle Sneakers For Men (Black)', '2000', 'M', 'CLYMB Casual Shoes Men Shark Design Bottom Platform Sneakers Men Mesh Breathable Shoes Male Mixed Colors Trainers Shoes for Mens The Best White Sneakers For Men.', 'Sneakers')";
$con->query($w14);
$w15 = "insert into menfootwear values('mfwc2p2sl', 'assets/41.jpeg', 'Hotstyle Sneakers For Men (Black)', '2000', 'L', 'CLYMB Casual Shoes Men Shark Design Bottom Platform Sneakers Men Mesh Breathable Shoes Male Mixed Colors Trainers Shoes for Mens The Best White Sneakers For Men.', 'Sneakers')";
$con->query($w15);
$w16 = "insert into menfootwear values('mfwc2p3ss', 'assets/42.jpeg', 'Lace-up Sneakers', '2500', 'S', 'pinstyle Outdoor Casual Light Weight Lace-up Sneakers Sneakers For Men Sneakers For Men Futurecraft 4D Sports Running Shoe Sneakers Men Casual Shoes Court Royale AC Genuine Leather Sneakers.', 'Sneakers')";
$con->query($w16);
$w17 = "insert into menfootwear values('mfwc2p3sm', 'assets/42.jpeg', 'Lace-up Sneakers', '2500', 'M', 'pinstyle Outdoor Casual Light Weight Lace-up Sneakers Sneakers For Men Sneakers For Men Futurecraft 4D Sports Running Shoe Sneakers Men Casual Shoes Court Royale AC Genuine Leather Sneakers.', 'Sneakers')";
$con->query($w17);
$w18 = "insert into menfootwear values('mfwc2p3sl', 'assets/42.jpeg', 'Lace-up Sneakers', '2500', 'L', 'pinstyle Outdoor Casual Light Weight Lace-up Sneakers Sneakers For Men Sneakers For Men Futurecraft 4D Sports Running Shoe Sneakers Men Casual Shoes Court Royale AC Genuine Leather Sneakers.', 'Sneakers')";
$con->query($w18);
$w19 = "insert into menfootwear values('mfwc3p1ss', 'assets/43.jpeg', 'Roadster Boots For Men (Brown)', '4000', 'S', 'Vintage Style Boots Men Shoes Casual Fashion Zipper Motorcycle Boots Shoes', 'Boots')";
$con->query($w19);
$w20 = "insert into menfootwear values('mfwc3p1sm', 'assets/43.jpeg', 'Roadster Boots For Men (Brown)', '4000', 'M', 'Vintage Style Boots Men Shoes Casual Fashion Zipper Motorcycle Boots Shoes', 'Boots')";
$con->query($w20);
$w21 = "insert into menfootwear values('mfwc3p1sl', 'assets/43.jpeg', 'Roadster Boots For Men (Brown)', '4000', 'L', 'Vintage Style Boots Men Shoes Casual Fashion Zipper Motorcycle Boots Shoes', 'Boots')";
$con->query($w21);
$w22 = "insert into menfootwear values('mfwc3p2ss', 'assets/44.jpeg', 'Unistar Jungle Boots', '3500', 'S', 'Oil Stain & Water Resistant- Extra Cushion InnerSole -Light Weight Trekking Shoes Boots For Men (OliveGreen) Boots For Men (Multicolor).', 'Boots')";
$con->query($w22);
$w23 = "insert into menfootwear values('mfwc3p2sm', 'assets/44.jpeg', 'Unistar Jungle Boots', '3500', 'M', 'Oil Stain & Water Resistant- Extra Cushion InnerSole -Light Weight Trekking Shoes Boots For Men (OliveGreen) Boots For Men (Multicolor).', 'Boots')";
$con->query($w23);
$w24 = "insert into menfootwear values('mfwc3p2sl', 'assets/44.jpeg', 'Unistar Jungle Boots', '3500', 'L', 'Oil Stain & Water Resistant- Extra Cushion InnerSole -Light Weight Trekking Shoes Boots For Men (OliveGreen) Boots For Men (Multicolor).', 'Boots')";
$con->query($w24);
$w25 = "insert into menfootwear values('mfwc3p3ss', 'assets/45.jpeg', 'Warrior By Liberty (Olive)', '3000', 'S', 'Fashionable Retro Outdoor Casual High-Top Genuine Leather Boots Men Men''s Black Casual Ankle Lace-Up Boots', 'Boots')";
$con->query($w25);
$w26 = "insert into menfootwear values('mfwc3p3sm', 'assets/45.jpeg', 'Warrior By Liberty (Olive)', '3000', 'M', 'Fashionable Retro Outdoor Casual High-Top Genuine Leather Boots Men Men''s Black Casual Ankle Lace-Up Boots', 'Boots')";
$con->query($w26);
$w27 = "insert into menfootwear values('mfwc3p3sl', 'assets/45.jpeg', 'Warrior By Liberty (Olive)', '3000', 'L', 'Fashionable Retro Outdoor Casual High-Top Genuine Leather Boots Men Men''s Black Casual Ankle Lace-Up Boots', 'Boots')";
$con->query($w27);
$w28 = "insert into menfootwear values('mfwc4p1ss', 'assets/46.jpeg', 'Sparx Men Olive, Black Sandal', '1500', 'S', 'Royal Flex Men Grey Sports Sandals.', 'Floaters')";
$con->query($w28);
$w29 = "insert into menfootwear values('mfwc4p1sm', 'assets/46.jpeg', 'Sparx Men Olive, Black Sandal', '1500', 'M', 'Royal Flex Men Grey Sports Sandals.', 'Floaters')";
$con->query($w29);
$w30 = "insert into menfootwear values('mfwc4p1sl', 'assets/46.jpeg', 'Sparx Men Olive, Black Sandal', '1500', 'L', 'Royal Flex Men Grey Sports Sandals.', 'Floaters')";
$con->query($w30);
$w31 = "insert into menfootwear values('mfwc4p2ss', 'assets/47.jpeg', 'Sparx Men Blue Sports Sandal', '2000', 'S', 'Stylish flloter sandal, are to maximize your fashion.', 'Floaters')";
$con->query($w31);
$w32 = "insert into menfootwear values('mfwc4p2sm', 'assets/47.jpeg', 'Sparx Men Blue Sports Sandal', '2000', 'M', 'Stylish flloter sandal, are to maximize your fashion.', 'Floaters')";
$con->query($w32);
$w33 = "insert into menfootwear values('mfwc4p2sl', 'assets/47.jpeg', 'Sparx Men Blue Sports Sandal', '2000', 'L', 'Stylish flloter sandal, are to maximize your fashion.', 'Floaters')";
$con->query($w33);
$w34 = "insert into menfootwear values('mfwc4p3ss', 'assets/48.jpeg', 'Woodland Men Olive Sandal', '1500', 'S', 'Pu Rocks Men Sandels Mens PU Brown Casual Outdoor Sandals and Floaters.', 'Floaters')";
$con->query($w34);
$w35 = "insert into menfootwear values('mfwc4p3sm', 'assets/48.jpeg', 'Woodland Men Olive Sandal', '1500', 'M', 'Pu Rocks Men Sandels Mens PU Brown Casual Outdoor Sandals and Floaters.', 'Floaters')";
$con->query($w35);
$w36 = "insert into menfootwear values('mfwc4p3sl', 'assets/48.jpeg', 'Woodland Men Olive Sandal', '1500', 'L', 'Pu Rocks Men Sandels Mens PU Brown Casual Outdoor Sandals and Floaters.', 'Floaters')";
$con->query($w36);
?>