<?php

include("../backend/database_connection.php");

$address = $con->query("CREATE table address(sr_no int(10) primary key auto_increment, username varchar(30), name varchar(50), mobileno varchar(15), pincode varchar(10), locality varchar(50), address varchar(200), city varchar(50), state varchar(50)");

$cart = $con->query("CREATE table cart(sr_no int(10) primary key auto_increment, username varchar(30), productId varchar(20), quantity varchar(10), total_price int(10)");

$login_details = $con->query("CREATE table login_details(username varchar(30) primary key, password varchar(50)");

$orders_log = $con->query("CREATE table orders_log(sr_no int(10) primary key auto_increment, username varchar(30), productId varchar(20), quantity varchar(10), date varchar(30)");

$transaction = $con->query("CREATE table transaction(sr_no int(10) primary key auto_increment, username varchar(30), amount varchar(20), date varchar(30), status varchar(10)");

$users = $con->query("CREATE table users(name varchar(50), username varchar(30) primary key, email varchar(50), mobileno varchar(15), password varchar(50)");

?>