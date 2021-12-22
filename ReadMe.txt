Admin url
http://localhost/photography/admin/

Home Page url
http://localhost/photography/


Dear Sir / Madam,
*I am not familiar with payment gate integration but I think i will be able to learn it with your support.
*This is mobile friendly site as well. (Check it)
*Used bootstrap ass CSS framework
*Used Firebase storage to save images so that the admin can save clear and high quality images(file size does not matter) 
* use following sql commads to create database


CREATE SCHEMA `photography` ;

CREATE TABLE `photography`.`images` (
  `ID` INT NOT NULL,
  `imgURL` VARCHAR(1000) NULL,
  `Topic` VARCHAR(45) NULL,
  `price` VARCHAR(45) NULL,
  PRIMARY KEY (`ID`));
