ALTER TABLE students 
ADD COLUMN (
    acadYr varchar(15),
    studStatus int(8),
    studDOB date) ;


UPDATE students SET acadYr = "2";

CREATE TABLE `comschoolmand`.`tblClass` 
(
	`classsId` INT(8) NOT NULL AUTO_INCREMENT , 
	`classsName` VARCHAR(15) NOT NULL , 
	`classsDesc` VARCHAR(50) NOT NULL , 
	PRIMARY KEY (`classsId`)
) 
ENGINE = MyISAM;





UPDATE students SET `currentClass` = 1 WHERE `currentClass` ="JSS 1";
UPDATE students SET `currentClass` = 2 WHERE `currentClass` ="JSS 2";
UPDATE students SET `currentClass` = 3 WHERE `currentClass` ="JSS 3";
UPDATE students SET `currentClass` = 4 WHERE `currentClass` ="SSS 1";
UPDATE students SET `currentClass` = 5 WHERE `currentClass` ="SSS 2";
UPDATE students SET `currentClass` = 6 WHERE `currentClass` ="SSS 3";

UPDATE students SET `arm` = 1 WHERE `arm` ="Beryl";
UPDATE students SET `arm` = 2 WHERE `arm` ="Coral";
UPDATE students SET `arm` = 3 WHERE `arm` ="Diamond";
UPDATE students SET `arm` = 4 WHERE `arm` ="Emerald";
UPDATE students SET `arm` = 5 WHERE `arm` ="Gold";
UPDATE students SET `arm` = 6 WHERE `arm` ="Opal";
UPDATE students SET `arm` = 7 WHERE `arm` ="Pearl";
UPDATE students SET `arm` = 8 WHERE `arm` ="Topaz";
UPDATE students SET `arm` = 9 WHERE `arm` ="Ruby";
UPDATE students SET `arm` = 10 WHERE `arm` ="Silver";


UPDATE students SET `house` = 1 WHERE `house` ="Dragon";
UPDATE students SET `house` = 2 WHERE `house` ="Hippopotamus";
UPDATE students SET `house` = 3 WHERE `house` ="Rhinoceros";
UPDATE students SET `house` = 4 WHERE `house` ="Stallion";
UPDATE students SET `house` = 5 WHERE `house` ="Tiger";
UPDATE students SET `house` = 6 WHERE `house` ="Commandant";