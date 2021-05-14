






CREATE DATABASE `projekti`;

USE `projekti`;

CREATE TABLE `projekti`.`users` 
( `Uid` INT NOT NULL AUTO_INCREMENT ,
`Name` VARCHAR(255) NOT NULL ,
`Surname` VARCHAR(255) NOT NULL ,
`Username` VARCHAR(255) NOT NULL ,
`Email` VARCHAR(255) NOT NULL ,
`Password` VARCHAR(255) NOT NULL,
PRIMARY KEY (`Uid`)
);
