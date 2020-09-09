CREATE DATABASE car_details; //Query to create database

DB : car_details

CREATE TABLE `car_data` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name_name` varchar(50) NOT NULL,
  `car_name` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `price` bigint(15) NOT NULL,
  `purchase_date` bigint(15) NOT NULL,
  `time_created` bigint(15) NOT NULL,
  `time_modified` bigint(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;     //Query to create table
