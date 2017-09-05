
/* 
  Steps
    1: Services -> cjodb -> user
    2: Right click on user and select Execute command
    
    3: Run the following command
    
-- -----------------------------------------------------
-- Table `cjodb`.`User`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cjodb`.`User` ;

CREATE TABLE IF NOT EXISTS `cjodb`.`User` (
  `UserID` SMALLINT NOT NULL AUTO_INCREMENT,
  `Fullname` VARCHAR(80) DEFAULT NULL,
  `Username` VARCHAR(40) NOT NULL,
  `Password` VARCHAR(30) NOT NULL,
  `Email`    VARCHAR(80) NOT NULL,
  `City`     VARCHAR(45) NOT NULL,
  `State`    VARCHAR(2)  NOT NULL,
  `EmploymentStatus` VARCHAR(3) NULL,
  `EduacationLevel` SMALLINT DEFAULT NULL,   
  UNIQUE INDEX `UserID_UNIQUE` (`UserID` ASC),
  PRIMARY KEY (`UserID`),
  UNIQUE INDEX `Username_UNIQUE` (`Username` ASC))
ENGINE = InnoDB;
ALTER TABLE user AUTO_INCREMENT=1000;

  
 */

