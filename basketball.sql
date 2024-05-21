CREATE DATABASE una_bball;

USE una_bball;
CREATE TABLE opponent
(
  id int auto_increment PRIMARY KEY,
  school varchar(50),
  city varchar(50),
  state varchar(2)
);

CREATE TABLE users 
(
    id int primary key auto_increment, 
    username varchar(255), 
    password varchar(255) 
);

-- insert a row into the users table for the administrator:
-- username = admin
-- password = pwd
INSERT INTO users (username, password) VALUES ('admin', '$2y$10$6EagpQz90eekX4cIlXjWdu/iCCo3jmSPrLmm9kJ/OVzbmwHaJZGzG');

INSERT into opponent (school, city, state) VALUES('Samford','Birmingham','AL');
INSERT into opponent (school, city, state) VALUES('Blue Mountain','Florence','AL');
INSERT into opponent (school, city, state) VALUES('Saint Louis','Saint Louis','MO');
INSERT into opponent (school, city, state) VALUES('Pitt','Pittsburgh','PA');
INSERT into opponent (school, city, state) VALUES('Martin Methodist','Florence','AL');
INSERT into opponent (school, city, state) VALUES('Troy','Troy','AL');
INSERT into opponent (school, city, state) VALUES('Toledo','Toledo','OH');
INSERT into opponent (school, city, state) VALUES('Jacksonville State','Florence','AL');
INSERT into opponent (school, city, state) VALUES('UAB','Birmingham','AL');
INSERT into opponent (school, city, state) VALUES('Huntingdon','Florence','AL');
INSERT into opponent (school, city, state) VALUES('UNC-Greensboro','Greensboro','NC');
INSERT into opponent (school, city, state) VALUES('Jacksonville State','Jacksonville','AL');
INSERT into opponent (school, city, state) VALUES('VMI','Lexington','VA');
INSERT into opponent (school, city, state) VALUES('Gonzaga','Spokane','WA');
INSERT into opponent (school, city, state) VALUES('Eastern Illinois','Charleston','IL');
INSERT into opponent (school, city, state) VALUES('North Florida','Jacksonville','FL');
INSERT into opponent (school, city, state) VALUES('Florida Gulf Coast','Florence','AL');
INSERT into opponent (school, city, state) VALUES('NJIT','Florence','AL');
INSERT into opponent (school, city, state) VALUES('Jacksonville','Jacksonville','FL');
INSERT into opponent (school, city, state) VALUES('Stetson','Florence','AL');
INSERT into opponent (school, city, state) VALUES('Liberty','Lynchburg','VA');
INSERT into opponent (school, city, state) VALUES('Kennesaw State','Florence','AL');
INSERT into opponent (school, city, state) VALUES('NJIT','Newark','NJ');
INSERT into opponent (school, city, state) VALUES('Lipscomb','Nashville','TN');
INSERT into opponent (school, city, state) VALUES('Florida Gulf Coast','Fort Meyers','FL');
INSERT into opponent (school, city, state) VALUES('North Florida','Florence','AL');
INSERT into opponent (school, city, state) VALUES('Liberty','Florence','AL');
INSERT into opponent (school, city, state) VALUES('Kennesaw State','Kennesaw','GA');
INSERT into opponent (school, city, state) VALUES('Stetson','Deland','FL');
INSERT into opponent (school, city, state) VALUES('Jacksonville','Florence','AL');
INSERT into opponent (school, city, state) VALUES('Lipscomb','Florence','AL');
