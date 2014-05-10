
CREATE TABLE User
(User_ID integer(5),
 First_Name VARCHAR(20),
 Last_Name VARCHAR(20),
 E_mail VARCHAR(40),
 Password VARCHAR(20)
CONSTRAINT User_ID_pk PRIMARY KEY(User_ID));



CREATE TABLE Algorithm
(Algorithm_ID integer(5),
 Algorithm_Description VARCHAR(500),
 Algorithm_Process VARCHAR(500),
 Algorithm_Category integer(5),
CONSTRAINT Algorithm_ID_pk PRIMARY KEY(Algorithm_ID),
CONSTRAINT Algorithm_Category_fk FOREIGN KEY(Algorithm_Category) REFERENCES Category(Category_ID));


CREATE TABLE Category
(Category_ID integer(3),
 Category_name VARCHAR(500),
 Category_description VARCHAR(500),
CONSTRAINT Category_ID_pk PRIMARY KEY(Category_ID));


CREATE TABLE UsersAlgorithm
(
 Users_Algorithm_ID integer(5),
 Progress integer(5),
 Algorithm_ID integer(5),
 Status_ID integer(5),
CONSTRAINT Users_Algorithm_ID_pk PRIMARY KEY(Users_Algorithm_ID),
CONSTRAINT Algorithm_ID_fk FOREIGN KEY(Algorithm_ID) references Algorithm(Algorithm_ID),
CONSTRAINT Status_ID_fk FOREIGN KEY(Status_ID) references UsersStatus(Status_ID));


CREATE TABLE UsersStatus
(
 Status_ID integer(5)
 State_description VARCHAR(100),
CONSTRAINT Status_ID_pk PRIMARY KEY(Status_ID));



INSERT INTO Category
(Category_ID,
Category_name,
Category_Description
)
VALUES
(1,'Category 1','Description of Category 1'),
(2,'Category 2','Description of Category 2'),
(3,'Category 3','Description of Category 3'),
;



INSERT INTO algorithm (
Algorithm_ID,
Algorithm_Description,
Algorithm_Process,
Algorithm_Category)
VALUES(
1,'Description of Algorithm 1','Process of Algorithm 1',1),
(2,'Description of Algorithm 2','Process of Algorithm 2',2),
(3,'Description of Algorithm 3','Process of Algorithm 3',3);



INSERT INTO UsersStatus
(
 Status_ID,
 State_description,
)
VALUES
(1,"Interested"),
(2,"Learning"),
(3,"Completed");

INSERT INTO User
(User_ID,
 First_Name,
 Last_Name,
 E_mail,
 Password
 )
VALUES
(1, 'abc', 'def', 'abc@xyz.com', 'pass1');

INSERT INTO UsersAlgorithm
(
 Users_Algorithm_ID,
 Progress,
 Algorithm_ID,
 Status_ID,
)
VALUES
(1, 1, 1, 0);