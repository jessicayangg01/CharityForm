CREATE TABLE `CHARITY` (

 `Id` int(8) unsigned NOT NULL AUTO_INCREMENT,
 `LegalName` CHAR(20) NOT NULL,
 `CommonName` CHAR(20),
 `Street` CHAR(20),
 `City` CHAR(20),
 `Province` CHAR(20),
 `Postal_code` CHAR(20),
 `URL` CHAR(20),

 PRIMARY KEY (`Id`)
);

CREATE TABLE `SECTOR` (
 `Id` int(8) unsigned NOT NULL AUTO_INCREMENT,
 `Name` CHAR(20) NOT NULL,

 PRIMARY KEY (`Id`)
);


CREATE TABLE `CHAR_SEC` (

 `CharityID` int(8) unsigned NOT NULL,
 `SectorID` int(8) unsigned NOT NULL,

 PRIMARY KEY (`CharityID`,`SectorID`),

 CONSTRAINT `invoice_line_ibfk_1` FOREIGN KEY (`CharityID`) REFERENCES `CHARITY` (`Id`),
 CONSTRAINT `invoice_line_ibfk_2` FOREIGN KEY (`SectorID`) REFERENCES `SECTOR` (`Id`)

);
