-- MySQL Workbench Forward Engineering
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema cjodb
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `cjodb` ;

-- -----------------------------------------------------
-- Schema cjodb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `cjodb` ;
USE `cjodb` ;

-- -----------------------------------------------------
-- Table `cjodb`.`User`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cjodb`.`User` ;

CREATE TABLE IF NOT EXISTS `cjodb`.`User` (
  `UserID` SMALLINT NOT NULL AUTO_INCREMENT,
  `Fullname` VARCHAR(80) NOT NULL,
  `Username` VARCHAR(40) NOT NULL,
  `Password` VARCHAR(30) NOT NULL,
  `Email`    VARCHAR(80) NOT NULL,
  `City`     VARCHAR(45) NOT NULL,
  `State`    VARCHAR(2) NOT NULL,
  `EmploymentStatus` VARCHAR(3) NULL,
  `EduacationLevel` SMALLINT NOT NULL,   
  UNIQUE INDEX `UserID_UNIQUE` (`UserID` ASC),
  PRIMARY KEY (`UserID`),
  UNIQUE INDEX `Username_UNIQUE` (`Username` ASC))
ENGINE = InnoDB;
ALTER TABLE user AUTO_INCREMENT=1000;
 -----------------------------------------------------
-- Table `cjodb`.`Job`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cjodb`.`Job` ;

CREATE TABLE IF NOT EXISTS `cjodb`.`Job` (
  `JobID` INT NOT NULL,
  `Position` VARCHAR(80) NULL,
  `SectorID` INT NULL,
  `Region` VARCHAR(45) NULL,
  `CityStateID` INT NULL,
  `Offer_OfferID` INT NOT NULL,
  `Offer_User_UserID` INT NOT NULL,
  PRIMARY KEY (`JobID`, `Offer_OfferID`, `Offer_User_UserID`),
  INDEX `fk_Job_Offer1_idx` (`Offer_OfferID` ASC, `Offer_User_UserID` ASC),
  CONSTRAINT `fk_Job_Offer1`
    FOREIGN KEY (`Offer_OfferID` , `Offer_User_UserID`)
    REFERENCES `cjodb`.`Offer` (`OfferID` , `User_UserID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;
ALTER TABLE user AUTO_INCREMENT=1000;


DROP TABLE IF EXISTS `cjodb`.`Offer` ;

CREATE TABLE IF NOT EXISTS `cjodb`.`Offer` (
  `OfferID` INT NOT NULL,
  `UserID` INT NOT NULL,
  `JobID` INT NOT NULL,
  `OfferType` VARCHAR(45) NOT NULL,
  `OfferRank` INT NULL,
  `Company` VARCHAR(45) NOT NULL,
  `Salary` INT NULL,
  `Hourly` INT NULL,
  `WeeklyHours` INT NULL,
  `User_UserID` INT NOT NULL,
  `IncreaseOffer` FLOAT NULL COMMENT 'Increase 5-100% -- Base on skills and nunber years at Job being offered',
  PRIMARY KEY (`OfferID`, `User_UserID`),
  UNIQUE INDEX `OfferID_UNIQUE` (`OfferID` ASC),
  INDEX `fk_Offer_User_idx` (`User_UserID` ASC),
  UNIQUE INDEX `JobID_UNIQUE` (`JobID` ASC),
  CONSTRAINT `fk_Offer_User`
    FOREIGN KEY (`User_UserID`)
    REFERENCES `cjodb`.`User` (`UserID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;
ALTER TABLE offer AUTO_INCREMENT=1000;

-- -----------------------------------------------------
-- Table `cjodb`.`CityStateRatios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cjodb`.`CityState` ;

CREATE TABLE IF NOT EXISTS `cjodb`.`CityState` (
  `CityStateID` SMALLINT NOT NULL AUTO_INCREMENT,
  `City` VARCHAR(45) NOT NULL,
  `State` VARCHAR(2) NOT NULL,
  `ColIndex` FLOAT NULL,
  `Grocery` FLOAT NULL,
  `Housing` FLOAT NULL,
  `Utilities` FLOAT NULL,
  `Transport` FLOAT NULL,
  `HealthCare` FLOAT NULL,
  `MiscGoodServices` VARCHAR(45) NULL,
  PRIMARY KEY (`CityStateID`))
ENGINE = InnoDB;
ALTER TABLE CityState AUTO_INCREMENT=1;

-- -----------------------------------------------------
-- Table `cjodb`.`Sector`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cjodb`.`Sector` ;

CREATE TABLE IF NOT EXISTS `cjodb`.`Sector` (
  `SectorID` INT NOT NULL,
  `SectorName` VARCHAR(80) NULL,
  `SkillsID` INT NULL,
  `UserSkills_JobSkillsID` INT NOT NULL,
  PRIMARY KEY (`SectorID`, `UserSkills_JobSkillsID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cjodb`.`Skill`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cjodb`.`Skill` ;

CREATE TABLE IF NOT EXISTS `cjodb`.`Skill` (
  `SkillID` INT NOT NULL,
  `SectorID` INT NOT NULL,
  `SkillName` VARCHAR(64) NOT NULL,
  `Sector_SectorID` INT NOT NULL,
  `User_UserID` INT NOT NULL,
  UNIQUE INDEX `SkillsID_UNIQUE` (`SkillID` ASC),
  PRIMARY KEY (`SkillID`, `Sector_SectorID`, `User_UserID`),
  UNIQUE INDEX `Sector_UNIQUE` (`SectorID` ASC),
  INDEX `fk_Skill_Sector1_idx` (`Sector_SectorID` ASC),
  INDEX `fk_Skill_User1_idx` (`User_UserID` ASC),
  CONSTRAINT `fk_Skill_Sector1`
    FOREIGN KEY (`Sector_SectorID`)
    REFERENCES `cjodb`.`Sector` (`SectorID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Skill_User1`
    FOREIGN KEY (`User_UserID`)
    REFERENCES `cjodb`.`User` (`UserID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
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
  PRIMARY KEY (`EducationID`, `User_UserID`),
  INDEX `fk_Education_User1_idx` (`User_UserID` ASC),
  CONSTRAINT `fk_Education_User1`
    FOREIGN KEY (`User_UserID`)
    REFERENCES `cjodb`.`User` (`UserID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cjodb`.`Major`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cjodb`.`Major` ;

CREATE TABLE IF NOT EXISTS `cjodb`.`Major` (
  `MajorID` INT NOT NULL,
  `MajorName` VARCHAR(80) NULL,
  `Education_EducationID` INT NOT NULL,
  `Education_User_UserID` INT NOT NULL,
  PRIMARY KEY (`MajorID`, `Education_EducationID`, `Education_User_UserID`),
  INDEX `fk_Major_Education1_idx` (`Education_EducationID` ASC, `Education_User_UserID` ASC),
  CONSTRAINT `fk_Major_Education1`
    FOREIGN KEY (`Education_EducationID` , `Education_User_UserID`)
    REFERENCES `cjodb`.`Education` (`EducationID` , `User_UserID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cjodb`.`address`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cjodb`.`address` ;

CREATE TABLE IF NOT EXISTS `cjodb`.`address` (
  `AddressID` INT NOT NULL,
  `UserID` VARCHAR(45) NOT NULL,
  `Street` VARCHAR(132) NULL,
  `City` VARCHAR(45) NOT NULL,
  `State` VARCHAR(2) NOT NULL,
  `Zipcode` VARCHAR(10) NOT NULL,
  `User_UserID` INT NOT NULL,
  PRIMARY KEY (`AddressID`),
  UNIQUE INDEX `AddressID_UNIQUE` (`AddressID` ASC),
  INDEX `fk_address_User1_idx` (`User_UserID` ASC),
  CONSTRAINT `fk_address_User1`
    FOREIGN KEY (`User_UserID`)
    REFERENCES `cjodb`.`User` (`UserID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `cjodb` ;

-- -----------------------------------------------------
-- Placeholder table for view `cjodb`.`SectorSkills`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cjodb`.`SectorSkills` (`SectorID` INT, `SectorName` INT, `SkillName` INT);

-- -----------------------------------------------------
-- View `cjodb`.`SectorSkills`
-- -----------------------------------------------------
DROP VIEW IF EXISTS `cjodb`.`SectorSkills` ;
DROP TABLE IF EXISTS `cjodb`.`SectorSkills`;
USE `cjodb`;
CREATE  OR REPLACE VIEW `SectorSkills` AS
SELECT sc.SectorID,SectorName,SkillName
FROM Sector sc, Skill sk
WHERE sc.SectorID = sk.SectorID;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
