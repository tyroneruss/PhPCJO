-- Db statements 
INSERT INTO profile (UserID,LocationID,Age,Gender,DateOfBirth,EmploymentStatus,EduacationLevel)
VALUES (1008,1,63,'Female','1954-10-23','Yes',3);

insert into state (Name,NameAbbr) 
select distinct(NameAbbr), name from state_old

-- -----------------------------------------------------
-- Table `cjodb`.`Location`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cjodb`.`col` ;

-- -----------------------------------------------------
-- Table `cjodb`.`col`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cjodb`.`col` (
  `ColID` SMALLINT(6) NOT NULL AUTO_INCREMENT,
  `City` VARCHAR(45) NOT NULL,
  `State` VARCHAR(2) NOT NULL,
  `StateTax` VARCHAR(3) NOT NULL,
  `ColIndex` FLOAT NULL DEFAULT NULL,
  `Grocery` FLOAT NULL DEFAULT NULL,
  `Housing` FLOAT NULL DEFAULT NULL,
  `Utilities` FLOAT NULL DEFAULT NULL,
  `Transport` FLOAT NULL DEFAULT NULL,
  `HealthCare` FLOAT NULL DEFAULT NULL,
  `MiscGoodServices` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`ColID`))
ENGINE = InnoDB;
ALTER TABLE location AUTO_INCREMENT=1;

-- -----------------------------------------------------
-- Table `cjodb`.`Location`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cjodb`.`location` ;

CREATE TABLE IF NOT EXISTS `cjodb`.`location` (
  `LocationID` SMALLINT NOT NULL AUTO_INCREMENT,
  `Name`  VARCHAR(64) NOT NULL,
  PRIMARY KEY (`LocationID`))
ENGINE = InnoDB;
ALTER TABLE location AUTO_INCREMENT=1;

-- -----------------------------------------------------
-- Table `cjodb`.`role`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cjodb`.`role` ;

CREATE TABLE IF NOT EXISTS `cjodb`.`role` (
  `RoleID` SMALLINT NOT NULL AUTO_INCREMENT,
  `Title`  VARCHAR(64) NOT NULL,
  PRIMARY KEY (`RoleID`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `cjodb`.`User`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cjodb`.`user` ;

CREATE TABLE IF NOT EXISTS `cjodb`.`user` (
  `UserID` SMALLINT NOT NULL AUTO_INCREMENT,
  `RoleID` SMALLINT NOT NULL,
  `Username` VARCHAR(40) NOT NULL,
  `Password` VARCHAR(30) NOT NULL,
  `Email`    VARCHAR(80) NOT NULL,
  `Active` SMALLINT NOT NULL,
  UNIQUE INDEX `UserID_UNIQUE` (`UserID` ASC),
  PRIMARY KEY (`UserID`),
  UNIQUE INDEX `Username_UNIQUE` (`Username` ASC))
ENGINE = InnoDB;
ALTER TABLE user AUTO_INCREMENT=1000;

-- -----------------------------------------------------
-- Table `cjodb`.`profile`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cjodb`.`profile`;

CREATE TABLE IF NOT EXISTS `cjodb`.`profile` (
  `ProfileID` SMALLINT NOT NULL AUTO_INCREMENT,
  `UserID` SMALLINT NOT NULL,
  `LocationID` SMALLINT NOT NULL,
  `Firstname` VARCHAR(45) NOT NULL,
  `Initial` VARCHAR(3) NULL,
  `Lastname` VARCHAR(45) NOT NULL,
  `Gender` VARCHAR(10) NULL,
  `Employed` VARCHAR(3) NOT NULL,
  `EduLevel` SMALLINT NOT NULL,
  PRIMARY KEY (`ProfileID`))
ENGINE = InnoDB;
ALTER TABLE profile AUTO_INCREMENT=1;

-- -----------------------------------------------------
-- Table `CJOdb`.`Offer`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `CJOdb`.`offer` ;

CREATE TABLE IF NOT EXISTS `CJOdb`.`offer` (
  `OfferID` SMALLINT NOT NULL AUTO_INCREMENT,
  `UserID` SMALLINT NOT NULL,
  `ColID`  SMALLINT NOT NULL,
  `OfferType`  VARCHAR(10) NOT NULL,
  `Company` VARCHAR(80) NOT NULL,
  `Position` VARCHAR(80) NOT NULL,
  `Sector` SMALLINT NOT NULL,
  `BaseSalary` DECIMAL(10,2) NULL,
  `Hourly` DECIMAL(5,2) NULL,
  `BonusCommission` DECIMAL(3,2) NULL,
  `PersonalTimeOff` SMALLINT NOT NULL,
  `Pension`  DECIMAL(3,2) NULL,
  `ReimburseExp` DECIMAL(8,2) NULL,
  `Relocate` VARCHAR(3) NOT NULL,
  `PaidRelocate` DECIMAL(10,2) NULL,
  `StockOptions` DECIMAL(3,2) NULL,
  `Active` SMALLINT NOT NULL,
  PRIMARY KEY (`OfferID`),
  UNIQUE INDEX `OfferID_UNIQUE` (`OfferID` ASC))
ENGINE = InnoDB;
ALTER TABLE offer AUTO_INCREMENT=1;

-- -----------------------------------------------------
-- Table `cjodb`.`Industry`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cjodb`.`Industry` ;

CREATE TABLE IF NOT EXISTS `cjodb`.`Industry` (
  `IndustryID` SMALLINT NOT NULL AUTO_INCREMENT,
  `Industry` VARCHAR(80) NULL,
  `SectorID` VARCHAR(80) NULL, PRIMARY KEY (`IndustryID`))
ENGINE = InnoDB;
ALTER TABLE Industry AUTO_INCREMENT=1;

-- -----------------------------------------------------
-- Table `cjodb`.`Company`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cjodb`.`Company` ;

CREATE TABLE IF NOT EXISTS `cjodb`.`Company` (
  `CompanyID` SMALLINT NOT NULL AUTO_INCREMENT,
  `CompanyName` VARCHAR(80) NULL,
  `IndustryID` VARCHAR(80) NULL,
  PRIMARY KEY (`CompanyID`))
ENGINE = InnoDB;
ALTER TABLE Company AUTO_INCREMENT=1;

-- -----------------------------------------------------
-- Table `cjodb`.`Skill`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cjodb`.`Skill` ;

CREATE TABLE IF NOT EXISTS `cjodb`.`Skill`(
  `SkillID` SMALLINT NOT NULL AUTO_INCREMENT,
  `SectorID` INT NOT NULL,
  `SkillName` VARCHAR(64) NOT NULL,
  `Sector_SectorID` INT NOT NULL,
  `User_UserID` INT NOT NULL,
  PRIMARY KEY (`SkillID`))
ENGINE = InnoDB;
ALTER TABLE Skill AUTO_INCREMENT=1;

-- -----------------------------------------------------
-- Table `cjodb`.`Education`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cjodb`.`Education` ;

CREATE TABLE IF NOT EXISTS `cjodb`.`Education` (
  `EducationID` INT NOT NULL,
  `UserID` 
  `EducationType` VARCHAR(45) NOT NULL,
  `DegreeType` VARCHAR(10)NOT NULL COMMENT 'AA,AS,BA,BS,MS,PhD,JD,MS,MBA',
  `MajorID` INT NULL,
  `SchoolName` VARCHAR(80) NULL,
  `SchoolRanked` INT NULL,
  PRIMARY KEY (`EducationID`))
ENGINE = InnoDB;
ALTER TABLE Education AUTO_INCREMENT=1;

-- -----------------------------------------------------
-- Table `cjodb`.`Major`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cjodb`.`Major` ;

CREATE TABLE IF NOT EXISTS `cjodb`.`Major` (
  `MajorID` INT NOT NULL,
  `MajorName` VARCHAR(80) NULL,
  PRIMARY KEY (`MajorID`))
ENGINE = InnoDB;


Insert into user (LocationID,Fullname,Username,Password,Email)
Values(1,'Tyrone Russ','tyroneruss','rhouse11','tyroneruss@outlook.com');

Insert into user (LocationID,Fullname,Username,Password,Email)
Values(1,'Travis McKenzie','tyroneruss','rhouse11','tyronerus@outlook.com');

Insert into user (LocationID,Fullname,Username,Password,Email)
Values(1,'Mike Chukes','mchukes','mchukes','mchukes@outlook.com');

Insert into user (LocationID,Fullname,Username,Password,Email)
Values(1,'Terry Russ','truss','','attorneyruss@outlook.com');