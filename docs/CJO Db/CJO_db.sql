-- -----------------------------------------------------
-- Table `cjodb`.`User`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cjodb`.`User` ;

CREATE TABLE IF NOT EXISTS `cjodb`.`User` (
  `UserID` SMALLINT NOT NULL AUTO_INCREMENT,
  `LocationID` SMALLINT NULL,
  `Fullname` VARCHAR(80) NOT NULL,
  `Username` VARCHAR(40) NOT NULL,
  `Password` VARCHAR(30) NOT NULL,
  `Email`    VARCHAR(80) NOT NULL,
  UNIQUE INDEX `UserID_UNIQUE` (`UserID` ASC),
  PRIMARY KEY (`UserID`),
  UNIQUE INDEX `Username_UNIQUE` (`Username` ASC))
ENGINE = InnoDB;
ALTER TABLE user AUTO_INCREMENT=1000;

-- -----------------------------------------------------
-- Table `pbsdb`.`Profile`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `CJOdb`.`profile` ;

CREATE TABLE IF NOT EXISTS `CJOdb`.`profile` (
  `ProfileID` SMALLINT NOT NULL AUTO_INCREMENT,
  `UserID` SMALLINT NOT NULL,
  `LocationID` SMALLINT NOT NULL,
  `Age` SMALLINT NULL,
  `Gender` VARCHAR(10) NOT NULL,
  `DateOfBirth` DATE NOT NULL,
  `EmploymentStatus` VARCHAR(3) NULL,
  `EduacationLevel` SMALLINT NOT NULL,   
  PRIMARY KEY (`ProfileID`)
)ENGINE = InnoDB;
ALTER TABLE profile AUTO_INCREMENT=1;

-- -----------------------------------------------------
-- Table `CJOdb`.`Offer`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `CJOdb`.`offer` ;

CREATE TABLE IF NOT EXISTS `CJOdb`.`O=offer` (
  `OfferID` SMALLINT NOT NULL AUTO_INCREMENT,
  `LocationID`  SMALLINT NOT NULL,
  `OfferType`  VARCHAR(10) NOT NULL,
  `SectorID` SMALLINT NOT NULL,
  `PositionTitle` VARCHAR(80) NOT NULL,
  `Company` VARCHAR(80) NOT NULL,
  `Hourly` DECIMAL(5,2) NULL,
  `BaseSalary` DECIMAL(10,2) NULL,
  `BonusCommissions` DECIMAL(3,2) NULL,
  `Pension`  DECIMAL(3,2) NULL,
  `ReimburseExp` DECIMAL(8,2) NULL,
  `Relocate` VARCHAR(3) NOT NULL,
  PRIMARY KEY (`OfferID`),
  UNIQUE INDEX `OfferID_UNIQUE` (`OfferID` ASC))
ENGINE = InnoDB;
ALTER TABLE offer AUTO_INCREMENT=1;

-- -----------------------------------------------------
-- Table `cjodb`.`location`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cjodb`.`location` ;

CREATE TABLE IF NOT EXISTS `cjodb`.`location` (
  `LocationID` SMALLINT NOT NULL AUTO_INCREMENT,
  `City` VARCHAR(45) NOT NULL,
  `State` VARCHAR(2) NOT NULL,
  `StateTax` VARCHAR(3) NOT NULL,
  `ColIndex` FLOAT NULL,
  `Grocery` FLOAT NULL,
  `Housing` FLOAT NULL,
  `Utilities` FLOAT NULL,
  `Transport` FLOAT NULL,
  `HealthCare` FLOAT NULL,
  `MiscGoodServices` VARCHAR(45) NULL,
  PRIMARY KEY (`LocationID`))
ENGINE = InnoDB;
ALTER TABLE location AUTO_INCREMENT=1;

-- -----------------------------------------------------
-- Table `cjodb`.`Sector`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cjodb`.`Sector` ;

CREATE TABLE IF NOT EXISTS `cjodb`.`Sector` (
  `SectorID` INT NOT NULL,
  `SectorName` VARCHAR(80) NULL,
  `SkillID` INT NULL,
  PRIMARY KEY (`SectorID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cjodb`.`Skill`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cjodb`.`Skill` ;

CREATE TABLE IF NOT EXISTS `cjodb`.`Skill`(
  `SkillID` INT NOT NULL,
  `SectorID` INT NOT NULL,
  `SkillName` VARCHAR(64) NOT NULL,
  `Sector_SectorID` INT NOT NULL,
  `User_UserID` INT NOT NULL,
  PRIMARY KEY (`SkillID`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `cjodb`.`Education`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cjodb`.`Education` ;

CREATE TABLE IF NOT EXISTS `cjodb`.`Education` (
  `EducationID` INT NOT NULL,
  `EducationType` VARCHAR(45) NOT NULL,
  `DegreeType` VARCHAR(10) NOT NULL COMMENT 'AA,AS,BA,BS,PhD,JD,MS,MBA',
  `MajorID` INT NULL,
  `SchoolName` VARCHAR(80) NULL,
  `SchoolRanked` INT NOT NULL,
  `User_UserID` INT NOT NULL,
  PRIMARY KEY (`EducationID`))
ENGINE = InnoDB;

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