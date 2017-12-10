-- Db statements 

-- Insert Offers
INSERT INTO offer (UserID,ColID,OfferType,Company,Position,Industry,Salary,Hourly,Signbonus,Yearendbonus,Pto,
                   PromotionOpt,Pension,Relocate,Stocks,Active)
Values (2,20,'FT','Intel Corp','Lead Software Engineer',5,100000,0,0,0.00,3,'Yes',0.06,'No','No',1)

INSERT INTO offer (UserID,ColID,OfferType,Company,Position,Industry,Salary,Hourly,Signbonus,Yearendbonus,Pto,
                   PromotionOpt,Pension,Relocate,Stocks,Active)
Values (2,20,'FT','Intel Corp','Lead Software Engineer',5,90000,0,0,0.00,4,'Yes',0.06,'No','No',1)

INSERT INTO offer (UserID,ColID,OfferType,Company,Position,Industry,Salary,Hourly,Signbonus,Yearendbonus,Pto,
                   PromotionOpt,Pension,Relocate,Stocks,Active)
Values (2,201,'FT','Intel Corp','Lead Software Engineer',5,115000,0,0,0.00,2,'No',0.00,'Yes','No',1)


-- Insert profiles
INSERT INTO profile (UserID,LocationID,Age,Gender,DateOfBirth,EmploymentStatus,EduacationLevel)
VALUES (1008,1,63,'Female','1954-10-23','Yes',3);

insert into state (Name,NameAbbr) 
select distinct(NameAbbr), name from state_old
INSERT INTO profile (UserID,LocationID,Age,Gender,DateOfBirth,EmploymentStatus,EduacationLevel)
VALUES (1008,1,63,'Female','1954-10-23','Yes',3);



Insert into user (RoleID,Username,Password,Email,Active)
Values(2,'tyroneruss','rhouse11','tyroneruss@outlook.com',1);

Insert into user (RoleID,Username,Password,Email,Active)
Values(1,'mchukes','mchukes','mchukes@outlook.com',1);

Insert into user (RoleID,Username,Password,Email,Active)
Values(1,'terryruss','rhouse11','attorneyruss@outlook.com',1);