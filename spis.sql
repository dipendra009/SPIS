DROP DATABASE spis;

CREATE DATABASE spis;

USE spis;


CREATE TABLE Districts(dist_id INT(10) PRIMARY KEY NOT NULL, dist_name VARCHAR(15) );

CREATE TABLE Years(year_id INT(5) PRIMARY KEY NOT NULL ,year_name INT(5) );

DROP TABLE Subjects;

CREATE TABLE Subjects(sub_code VARCHAR(10) NOT NULL PRIMARY KEY, sub_name VARCHAR(25), sub_th_int INT(5) DEFAULT NULL, sub_th_final INT(5)DEFAULT NULL, sub_prac_int INT(5) DEFAULT NULL, sub_prac_final INT(5) DEFAULT NULL, check sub_th_int <= 20, check sub_th_final <= 80, check sub_prac_int <= 100, check sub_prac_final <=75);


CREATE TABLE Teachers(teach_id INT(10) PRIMARY KEY NOT NULL, teach_name VARCHAR(25), teach_num DECIMAL(10,0), teach_mailid VARCHAR(25));


CREATE TABLE Faculty(fac_id INT(5) PRIMARY KEY NOT NULL, fac_name VARCHAR(25), teach_id INT(10), FOREIGN KEY (teach_id) REFERENCES Teachers(teach_id) );

DROP TABLE Students;

CREATE TABLE Students(std_id INT(25) NOT NULL PRIMARY KEY AUTO_INCREMENT, std_name VARCHAR(25),std_roll INT(5),std_pswd VARCHAR(25), std_num DECIMAL(10,0),std_mailid VARCHAR(25), std_location VARCHAR(25), dist_id INT(5),fac_id INT(5),year_id INT(5));


CREATE TABLE Batch(batch_id INT(10)  PRIMARY KEY NOT NULL, fac_id INT(5), year_id INT(5),batch_total INT(10), teach_id INT(10), std_id INT(25), FOREIGN KEY(fac_id) REFERENCES Faculty(fac_id), FOREIGN KEY(year_id) REFERENCES Years(year_id), FOREIGN KEY (teach_id) REFERENCES Teachers(teach_id), FOREIGN KEY (std_id) REFERENCES Students(std_id));


CREATE TABLE Marks(std_id INT(25), sub_code VARCHAR(25), th_int INT(10), th_final INT(10), prac_int INT(10), prac_final INT(10),batch_id INT(5));

INSERT INTO Years VALUES(1,2064),(2,2065),(3,2067);

SELECT * FROM Years;

INSERT INTO Districts Values(1,"Kathmandu"),(2, "Saptari"),(3,"Lalitpur"),(4,"Siraha"),(5,"Makhwanpur");

INSERT INTO Districts Values (6,"Sindupalchowk"),(7,"Kaski");

SELECT * FROM Districts;

INSERT INTO Subjects Values("EG666CE","Engg. Economics",20,80,0,0),("EG671SH","Prob./Statistics",20,80,0,0),("EG679CT","Comm. Systems",20,80,50,0),("EG678EX","Computer Graphics",20,80,50,0),("EG682CT","Operating System",20,80,25,0),("EG681CT","Database Management System",20,80,50,0),("EG677CT","Minor Project",0,0,50,25);

SELECT * FROM Subjects;

INSERT INTO Teachers Values(1,"Kabin Tamrakar",9841593434, "kab_praise@yahoo.com");

INSERT INTO Faculty VALUES(1,"Computer",1);

INSERT INTO Faculty VALUES(2,"Electronics and Communication",1),(3,"Civil",1);

INSERT INTO Students VALUES(1,"Dipendra Kumar Jha",14,"dipendra",9841153258,"dipendrakumar2009@hotmail.com","Rajbiraj",2,1,1);

INSERT INTO Students VALUES(2,"Prakash Shrestha",20,"prakash",9849346001,"prakash_oit@yahoo.com","Barhabise",6,1,1);

INSERT INTO Students VALUES(3,"Pradip Chitrakar",19,"pradip",9841555485,"","Gwarko",3,1,1);

INSERT INTO Students VALUES(4,"Ashesh Raj Shakya",05,"dipendra",9849054850," ","Butwal",2,1,1);

INSERT INTO Students VALUES(5,"Saroj Maharjan",29,"dipendra",9841864583,"","Dhapakhel",3,1,1);

INSERT INTO Students VALUES(6,"Subodh Mandal",43,"dipendra",9845231584,"","Lahan",5,1,1);

INSERT INTO Students VALUES(7,"Sameer Dhakal",27,"dipendra",9841153258,"dipendrakumar2009@hotmail.com","Rajbiraj",2,1,1);

INSERT INTO Students VALUES(8,"Udip Upreti",39,"dipendra",9841153258,"dipendrakumar2009@hotmail.com","Rajbiraj",2,1,1);

INSERT INTO Students VALUES(9,"Ishwor Chalise",15,"dipendra",9841153258,"dipendrakumar2009@hotmail.com","Rajbiraj",2,1,1);


INSERT INTO Students VALUES(10,"Aliza Tandukar",02,"dipendra",9841153258,"dipendrakumar2009@hotmail.com","Rajbiraj",2,1,1);

INSERT INTO Students VALUES(11,"Sweta Mahaju",38,"dipendra",9841153258,"dipendrakumar2009@hotmail.com","Rajbiraj",2,1,1);

INSERT INTO Students VALUES(12,"Smriti Tamrakar",31,"dipendra",9841153258,"dipendrakumar2009@hotmail.com","Rajbiraj",2,1,1);

INSERT INTO Students VALUES(13,"Sanjip Shah",42,"dipendra",9841153258,"dipendrakumar2009@hotmail.com","Rajbiraj",2,1,1);

INSERT INTO Students VALUES(14,"Bishnu Karki",10,"dipendra",9841153258,"dipendrakumar2009@hotmail.com","Rajbiraj",2,1,1);


SELECT * FROM Students;

INSERT INTO Batch VALUES(1,1,1,40,1,1);





