-- Db statements 

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
ALTER TABLE col AUTO_INCREMENT=1;

-- -----------------------------------------------------
-- Table `cjodb`.`costofliving`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cjodb`.`costofliving` ;

-- -----------------------------------------------------
-- Table `cjodb`.`costofliving`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cjodb`.`costofliving` (
  `ColID` SMALLINT(6) NOT NULL AUTO_INCREMENT,
  `City` VARCHAR(45) NOT NULL,
  `State` VARCHAR(2) NOT NULL,
  `StateTax` VARCHAR(3) NOT NULL,
  `ColIndex` FLOAT NULL DEFAULT NULL,
  `GroceryIndex` FLOAT NULL DEFAULT NULL,
  `RestPriceIndex` FLOAT NULL DEFAULT NULL,
  `PurchPowerIndex` FLOAT NULL DEFAULT NULL,
  PRIMARY KEY (`ColID`))
ENGINE = InnoDB;
ALTER TABLE costofliving AUTO_INCREMENT=1;

-- -----------------------------------------------------
-- Table `cjodb`.`costofliving`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cjodb`.`costofliving` ;

-- -----------------------------------------------------
-- Table `cjodb`.`prodession`
-- Defintion: Contains 
--      Professionan Area
--      Position Title
--      Salary Range
--      Salary Index
--      Adding skills later
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cjodb`.`prodession` (
  `ProfessionID` SMALLINT(6) NOT NULL AUTO_INCREMENT,
  `Area` VARCHAR(45) NOT NULL,
  `Positon` VARCHAR(2) NOT NULL,
  `MinSaiary` VARCHAR(3) NOT NULL,
-- -----------------------------------------------------
-- Table `CJOdb`.`Offer`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `CJOdb`.`offer` ;

CREATE TABLE IF NOT EXISTS `CJOdb`.`offer` (
  `OfferID` SMALLINT NOT NULL AUTO_INCREMENT,
  `UserID` SMALLINT NOT NULL,
  `ColID`  SMALLINT NOT NULL,
  `OfferType` VARCHAR(3) NOT NULL,
  `Company` VARCHAR(80) NOT NULL,
  `Position` VARCHAR(80) NOT NULL,
  `Industry` SMALLINT NOT NULL,
  `Salary` DECIMAL(10,2) NULL,
  `Hourly` DECIMAL(10,2) NULL,
  `Signbonus` DECIMAL(10,2) NULL,
  `Yearendbonus` DECIMAL(3,2) NULL,
  `Pto` SMALLINT NULL,
  `PromotionOpt` VARCHAR(3) NULL,    
  `Pension`  DECIMAL(3,2) NULL,
  `ReimburseExp` DECIMAL(8,2) NULL,
  `Relocate` VARCHAR(3) NULL,
  `PaidRelocate` VARCHAR(3) NULL,
  `Stocks`  VARCHAR(3) NULL,
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


Insert into user (RoleID,Username,Password,Email,Active)
Values(2,'tyroneruss','rhouse11','tyroneruss@outlook.com',1);

Insert into user (RoleID,Username,Password,Email,Active)
Values(1,'mchukes','mchukes','mchukes@outlook.com',1);

Insert into user (RoleID,Username,Password,Email,Active)
Values(1,'terryruss','rhouse11','attorneyruss@outlook.com',1);