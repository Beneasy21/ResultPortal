/*  ---------------    Creating table tblSubjects   -------------------*/
create table tblsubjects
(
	subId int (8) AUTO_INCREMENT PRIMARY KEY,
	subName varchar (35)NOT NULL,
	subDesc varchar (50) 
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*  ---------------    Inserting values into table tblSubjects   -------------------*/
INSERT INTO `tblsubjects`(`subId`, `subName`, `subDesc`) 
VALUES
(NULL,'Agricultural Science',''),
(NULL,'Animal Husbandary',''),
(NULL,'Arabic',''),
(NULL,'B. Elect',''),
(NULL,'B. Electronics',''),
(NULL,'Basic Sci & Tech',''),
(NULL,'Biology',''),
(NULL,'Business Studies',''),
(NULL,'C C A',''),
(NULL,'C R S',''),
(NULL,'Catering & Crafts Practice',''),
(NULL,'Chemistry',''),
(NULL,'Civic Education',''),
(NULL,'Commerce',''),
(NULL,'Computer',''),
(NULL,'Data Processing',''),
(NULL,'Dyeing and Bleaching',''),
(NULL,'Economics',''),
(NULL,'Eng Lang',''),
(NULL,'Fin Account',''),
(NULL,'Foods & Nutrition',''),
(NULL,'French',''),
(NULL,'Further Mathematics',''),
(NULL,'Geography',''),
(NULL,'Government',''),
(NULL,'Guidance and Counselling',''),
(NULL,'Hausa',''),
(NULL,'Health Education',''),
(NULL,'History',''),
(NULL,'I R S',''),
(NULL,'Igbo',''),
(NULL,'Insurance',''),
(NULL,'Lit In Eng',''),
(NULL,'Marketing',''),
(NULL,'Maths',''),
(NULL,'Music',''),
(NULL,'Nat Value Edu',''),
(NULL,'Office Practice',''),
(NULL,'Physical Education',''),
(NULL,'Physics',''),
(NULL,'Prevoc Studies',''),
(NULL,'Store Keeping',''),
(NULL,'Store Management',''),
(NULL,'Technical Drawing',''),
(NULL,'Visual arts',''),
(NULL,'Yoruba','');


/*  ---------------    Normalizing Subjects   -------------------*/

UPDATE results SET subjects = "1" where subjects = 'Agricultural Science';
UPDATE results SET subjects = "1" where subjects = 'Agricutural Science';
UPDATE results SET subjects = "2" where subjects = 'Animal Husbandary';
UPDATE results SET subjects = "3" where subjects = 'Arabic';
UPDATE results SET subjects = "4" where subjects = 'B. Elect';
UPDATE results SET subjects = "4" where subjects = 'B. Electricity';
UPDATE results SET subjects = "5" where subjects = 'B. Electronics';
UPDATE results SET subjects = "6" where subjects = 'Basic Sci & Tech';
UPDATE results SET subjects = "6" where subjects = 'Basic Science and Technology';
UPDATE results SET subjects = "7" where subjects = 'Biology';
UPDATE results SET subjects = "8" where subjects = 'Business Studies';
UPDATE results SET subjects = "9" where subjects = 'C . C . A';
UPDATE results SET subjects = "9" where subjects = 'C . C. A';
UPDATE results SET subjects = "9" where subjects = 'C C A';
UPDATE results SET subjects = "10" where subjects = 'C R S';
UPDATE results SET subjects = "10" where subjects = 'C.R.S';
UPDATE results SET subjects = "11" where subjects = 'Catering & Crafts Practice';
UPDATE results SET subjects = "11" where subjects = 'Catering and Craft Practice';
UPDATE results SET subjects = "12" where subjects = 'Chemistry';
UPDATE results SET subjects = "13" where subjects = 'Civic Education';
UPDATE results SET subjects = "14" where subjects = 'Commerce';
UPDATE results SET subjects = "15" where subjects = 'Computer';
UPDATE results SET subjects = "10" where subjects = 'CRS / IRS';
UPDATE results SET subjects = "16" where subjects = 'Data Processing';
UPDATE results SET subjects = "17" where subjects = 'Dyeing and Bleaching';
UPDATE results SET subjects = "17" where subjects = 'Dying and Bleaching';
UPDATE results SET subjects = "18" where subjects = 'Economics';
UPDATE results SET subjects = "19" where subjects = 'Eng Lang';
UPDATE results SET subjects = "19" where subjects = 'English Language';
UPDATE results SET subjects = "20" where subjects = 'Fin Account';
UPDATE results SET subjects = "20" where subjects = 'Financial Accounting';
UPDATE results SET subjects = "21" where subjects = 'Food and Nutrition';
UPDATE results SET subjects = "21" where subjects = 'Foods and Nutrition';
UPDATE results SET subjects = "22" where subjects = 'French';
UPDATE results SET subjects = "23" where subjects = 'Further Mathematics';
UPDATE results SET subjects = "24" where subjects = 'Geography';
UPDATE results SET subjects = "25" where subjects = 'Government';
UPDATE results SET subjects = "26" where subjects = 'Guidance and Counselling';
UPDATE results SET subjects = "27" where subjects = 'Hausa';
UPDATE results SET subjects = "28" where subjects = 'Health Education';
UPDATE results SET subjects = "29" where subjects = 'History';
UPDATE results SET subjects = "30" where subjects = 'I R S';
UPDATE results SET subjects = "30" where subjects = 'I.R.S';
UPDATE results SET subjects = "31" where subjects = 'Igbo';
UPDATE results SET subjects = "32" where subjects = 'Insurance';
UPDATE results SET subjects = "33" where subjects = 'Lit In Eng';
UPDATE results SET subjects = "33" where subjects = 'Literature In English';
UPDATE results SET subjects = "34" where subjects = 'Marketing';
UPDATE results SET subjects = "35" where subjects = 'Mathematics';
UPDATE results SET subjects = "35" where subjects = 'Maths';
UPDATE results SET subjects = "36" where subjects = 'Music';
UPDATE results SET subjects = "37" where subjects = 'Nat Value Edu';
UPDATE results SET subjects = "37" where subjects = 'National Value Education';
UPDATE results SET subjects = "38" where subjects = 'Office Practice';
UPDATE results SET subjects = "39" where subjects = 'Physical And Health Education';
UPDATE results SET subjects = "39" where subjects = 'Physical Education';
UPDATE results SET subjects = "40" where subjects = 'Physics';
UPDATE results SET subjects = "41" where subjects = 'Prevoc Studies';
UPDATE results SET subjects = "41" where subjects = 'Prevocational Studies';
UPDATE results SET subjects = "42" where subjects = 'Store Keeping';
UPDATE results SET subjects = "42" where subjects = 'Store Keeping/ Marketing';
UPDATE results SET subjects = "43" where subjects = 'Store Management';
UPDATE results SET subjects = "44" where subjects = 'Technical Drawing';
UPDATE results SET subjects = "45" where subjects = 'Visual arts';
UPDATE results SET subjects = "46" where subjects = 'Yoruba';


/*  ---------------    Normalizing Classes   -------------------*/
UPDATE results SET `resClass` = 1 WHERE `resClass` ="JSS 1";
UPDATE results SET `resClass` = 2 WHERE `resClass` ="JSS 2";
UPDATE results SET `resClass` = 3 WHERE `resClass` ="JSS 3";
UPDATE results SET `resClass` = 4 WHERE `resClass` ="SSS 1";
UPDATE results SET `resClass` = 5 WHERE `resClass` ="SSS 2";
UPDATE results SET `resClass` = 6 WHERE `resClass` ="SSS 3";


/*  ---------------    Normalizing Arms   -------------------*/
UPDATE results SET `arm` = 1 WHERE `arm` ="Beryl";
UPDATE results SET `arm` = 2 WHERE `arm` ="Coral";
UPDATE results SET `arm` = 3 WHERE `arm` ="Diamond";
UPDATE results SET `arm` = 4 WHERE `arm` ="Emerald";
UPDATE results SET `arm` = 5 WHERE `arm` ="Gold";
UPDATE results SET `arm` = 6 WHERE `arm` ="Opal";
UPDATE results SET `arm` = 7 WHERE `arm` ="Pearl";
UPDATE results SET `arm` = 8 WHERE `arm` ="Topaz";
UPDATE results SET `arm` = 9 WHERE `arm` ="Ruby";
UPDATE results SET `arm` = 10 WHERE `arm` ="Silver";

/*  ---------------    Normalizing Academic Year   -------------------*/
UPDATE results SET acadYR = 2;

/*  ---------------    correcting students without classes   -------------------*/
UPDATE results SET resClass = '4' WHERE studId LIKE '40%';
UPDATE results SET resClass = '3' WHERE studId LIKE '30%';
UPDATE results SET resClass = '2' WHERE studId LIKE '20%';
UPDATE results SET resClass = '1' WHERE studId LIKE '10%';
UPDATE results SET resClass = '5' WHERE studId LIKE '50%';
UPDATE results SET resClass = '6' WHERE studId LIKE '60%';


/*  ---------------    correcting resultss without terms   -------------------*/
UPDATE results SET term = 2 WHERE subjects = "National Value Education" AND term <>1 AND term<>2 AND term<>3;
UPDATE results SET term = 3 WHERE subjects = "Nat Value Edu" AND term <>1 AND term<>2 AND term<>3

 
/*  ---------------    Normalizing Arms   -------------------*/
UPDATE results SET `arm` = 1 WHERE `arm` ="Beryl Ext";
UPDATE results SET `arm` = 2 WHERE `arm` ="Coral Ext";
UPDATE results SET `arm` = 3 WHERE `arm` ="Diamond Ext";
UPDATE results SET `arm` = 4 WHERE `arm` ="Emerald Ext";
UPDATE results SET `arm` = 5 WHERE `arm` ="Gold Ext";
UPDATE results SET `arm` = 6 WHERE `arm` ="Opal Ext";
UPDATE results SET `arm` = 7 WHERE `arm` ="Pearl Ext";
UPDATE results SET `arm` = 8 WHERE `arm` ="Topaz Ext";
UPDATE results SET `arm` = 9 WHERE `arm` ="Ruby Ext";
UPDATE results SET `arm` = 10 WHERE `arm` ="Silver Ext";