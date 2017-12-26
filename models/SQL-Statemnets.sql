select OfferID,Salary,Signbonus,Yearendbonus,Pto,Medicaloffered,PromotionOpt,
       PaidRelocate,Pension,Stocks,401k 
from offer
Where OfferID=1

-- Insert Offer
INSERT INTO offer (UserID,ColID,OfferType,Company,Position,
                    Industry,Salary,Hourly,Normalworkhours,Signbonus,
                    Yearendbonus,Stocks,401k,Pension,Pto,
                    Medicaloffered,PromotionOpt,ReimburseExp,Relocate,PaidRelocate,Active)
Values (2,20,'FT','IBM Corp','Software Engineer',5,90000,0.00,40,5000,'No','Yes',5.5,'Yes',3,'No','No',0.00,'No','No',1);

INSERT INTO offer (UserID,ColID,OfferType,Company,Position,
                    Industry,Salary,Hourly,Normalworkhours,Signbonus,
                    Yearendbonus,Stocks,401k,Pension,Pto,
                    Medicaloffered,PromotionOpt,ReimburseExp,Relocate,PaidRelocate,Active)
Values (2,20,'FT','Home Deopt','Lead Software Engineer',5,125000,0.00,40,15000,'Yes','Yes',5.5,'Yes',3,'Yes','No',0.00,'No','No',1)

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