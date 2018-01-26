-- MySQL Workbench Forward Engineering

CREATE SCHEMA IF NOT EXISTS `cjodb` DEFAULT CHARACTER SET utf8 ;
USE `cjodb` ;

-- -----------------------------------------------------
-- Table `cjodb`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cjodb`.`user` (
  `UserID` SMALLINT(6) NOT NULL AUTO_INCREMENT,
  `RoleID` SMALLINT(6) NOT NULL,
  `Username` VARCHAR(40) NOT NULL,
  `Password` VARCHAR(30) NOT NULL,
  `Email` VARCHAR(80) NOT NULL,
  `Active` SMALLINT(6) NOT NULL,
  PRIMARY KEY (`UserID`),
  UNIQUE INDEX `UserID_UNIQUE` (`UserID` ASC),
  UNIQUE INDEX `Username_UNIQUE` (`Username` ASC))
ENGINE = InnoDB;
ALTER TABLE user AUTO_INCREMENT=1;


-- -----------------------------------------------------
-- Table `cjodb`.`areaposition`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cjodb`.`areaposition` (
  `AreaPositionID` SMALLINT(6) NOT NULL AUTO_INCREMENT,
  `Area` VARCHAR(132) NOT NULL,
  `Position` VARCHAR(80) NOT NULL,
  `Salary_low` FLOAT NULL DEFAULT NULL,
  `Salary_high` FLOAT NULL DEFAULT NULL,
  `Salary_avg` FLOAT NULL DEFAULT NULL,
  PRIMARY KEY (`AreaPositionID`))
ENGINE = InnoDB;
ALTER TABLE areaposition AUTO_INCREMENT=1;

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
-- Table `cjodb`.`company`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cjodb`.`company` (
  `CompanyID` SMALLINT(6) NOT NULL AUTO_INCREMENT,
  `IndustryID` VARCHAR(80) NULL DEFAULT NULL,
  `Company` VARCHAR(80) NOT NULL,
  PRIMARY KEY (`CompanyID`))
ENGINE = InnoDB;
ALTER TABLE company AUTO_INCREMENT=1;

-- -----------------------------------------------------
-- Table `cjodb`.`major`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cjodb`.`major` (
  `MajorID` INT(11) NOT NULL,
  `MajorName` VARCHAR(80) NULL DEFAULT NULL,
  PRIMARY KEY (`MajorID`))
ENGINE = InnoDB;
ALTER TABLE major AUTO_INCREMENT=1;

-- -----------------------------------------------------
-- Table `cjodb`.`offer`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cjodb`.`offer` (
  `OfferID` SMALLINT(6) NOT NULL AUTO_INCREMENT,
  `UserID` SMALLINT(6) NOT NULL,
  `ColID` SMALLINT(6) NOT NULL,
  `OfferType` VARCHAR(3) NOT NULL,
  `Company` VARCHAR(80) NOT NULL,
  `Position` VARCHAR(80) NOT NULL,
  `Salary` FLOAT NULL DEFAULT NULL,
  `Hourly` FLOAT NULL DEFAULT NULL,
  `Normalworkhours` SMALLINT(6) NOT NULL,
  `Signbonus` DECIMAL(10,2) NULL DEFAULT NULL,
  `Yearendbonus` VARCHAR(3) NULL DEFAULT NULL,
  `Stocks` VARCHAR(3) NULL DEFAULT NULL,
  `401k` DECIMAL(5,2) NULL DEFAULT NULL,
  `Pension` VARCHAR(3) NULL DEFAULT NULL,
  `Pto` SMALLINT(6) NOT NULL,
  `Medicaloffered` VARCHAR(3) NULL DEFAULT NULL,
  `PromotionOpt` VARCHAR(3) NULL DEFAULT NULL,
  `ReimburseExp` FLOAT NULL DEFAULT NULL,
  `Relocate` VARCHAR(3) NULL DEFAULT NULL,
  `PaidRelocate` VARCHAR(3) NULL DEFAULT NULL,
  `Active` SMALLINT(6) NOT NULL,
  `State` VARCHAR(3) NULL DEFAULT NULL,
  `City` VARCHAR(80) NULL DEFAULT NULL,
  `Area` VARCHAR(132) NULL DEFAULT NULL,
  PRIMARY KEY (`OfferID`),
  UNIQUE INDEX `OfferID_UNIQUE` (`OfferID` ASC))
ENGINE = InnoDB;
ALTER TABLE offer AUTO_INCREMENT=1;

-- -----------------------------------------------------
-- Table `cjodb`.`profile`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cjodb`.`profile` (
  `ProfileID` SMALLINT(6) NOT NULL AUTO_INCREMENT,
  `UserID` SMALLINT(6) NOT NULL,
  `Firstname` VARCHAR(45) NOT NULL,
  `Lastname` VARCHAR(45) NOT NULL,
  `Gender` VARCHAR(10) NULL DEFAULT NULL,
  `Employed` VARCHAR(3) NOT NULL,
  `EduLevel` VARCHAR(45) NULL DEFAULT NULL,
  `Infield` SMALLINT(6) NULL DEFAULT NULL,
  `Yearsinfield` SMALLINT(6) NULL DEFAULT NULL,
  PRIMARY KEY (`ProfileID`))
ENGINE = InnoDB;
ALTER TABLE profile AUTO_INCREMENT=1;

-- -----------------------------------------------------
-- Table `cjodb`.`role`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cjodb`.`role` (
  `RoleID` SMALLINT(6) NOT NULL AUTO_INCREMENT,
  `Title` VARCHAR(64) NOT NULL,
  `Description` VARCHAR(255) NULL DEFAULT NULL,
  PRIMARY KEY (`RoleID`))
ENGINE = InnoDB;
ALTER TABLE role AUTO_INCREMENT=1;

-- -----------------------------------------------------
-- Table `cjodb`.`sector`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cjodb`.`sector` (
  `SectorID` INT(11) NOT NULL,
  `SectorName` VARCHAR(80) NULL DEFAULT NULL,
  `Damand` FLOAT NULL DEFAULT NULL,
  PRIMARY KEY (`SectorID`))
ENGINE = InnoDB;
ALTER TABLE sector AUTO_INCREMENT=1;


-- -----------------------------------------------------
-- Table `cjodb`.`skill`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cjodb`.`skill` (
  `SkillID` INT(11) NOT NULL,
  `SectorID` INT(11) NOT NULL,
  `SkillName` VARCHAR(64) NOT NULL,
  `Sector_SectorID` INT(11) NOT NULL,
  `User_UserID` INT(11) NOT NULL,
  PRIMARY KEY (`SkillID`))
ENGINE = InnoDB;
ALTER TABLE skill AUTO_INCREMENT=1;


