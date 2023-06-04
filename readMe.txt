	CREATE DATABASE Barbados;
	CREATE TABLE Admin(admin_id int(16) PRIMARY KEY NOT Null AUTO_INCREMENT,Names varchar(222),Email varchar(177),Username varchar(177),Password varchar(177));

    CREATE TABLE Supplier(sup_id int(16) PRIMARY KEY NOT NULL AUTO_INCREMENT,sup_name varchar(188),national_id varchar(188),Address varchar(188),Phone varchar(188), Username varchar(188),Password varchar(188))
 	CREATE TABLE Product(pro_id int(16) PRIMARY KEY NOT null AUTO_INCREMENT,pro_Name varchar(166),Quality varchar(177));
	CREATE TABLE Application(app_id int(16) PRIMARY KEY not null AUTO_INCREMENT,file varchar(177),sup_id int(16), FOREIGN KEY(sup_id) REFERENCES supplier(sup_id),pro_id int(16), FOREIGN KEY(pro_id) REFERENCES product(pro_id));

CREATE TABLE accept_reject(id int PRIMARY KEY NOT null AUTO_INCREMENT,app_id int(16),FOREIGN KEY(app_id) REFERENCES application(app_id),file varchar(1000),sup_id varchar(122),pro_id varchar(133),status varchar(133));