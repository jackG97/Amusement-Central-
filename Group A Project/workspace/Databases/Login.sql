DROP DATABASE IF EXISTS Login;

CREATE DATABASE Login;

USE Login;

CREATE TABLE login(
UserName VARCHAR(100) NOT NULL,
Pass_Word VARCHAR (100) NOT NULL,
PRIMARY KEY (UserName));


INSERT INTO login (UserName, Pass_Word)
VALUES 
('adamlwr', 'games'),
('jack1997', 'test');
