--DDL QUERIES
    
SET LINESIZE 500
SET PAGESIZE 20

drop table tracking;
drop table insurance;
drop table fund;
drop table pInvoice;
drop table invoice;
drop table parcel;
drop table manages;
drop table employee;
drop table branch;
drop table gpo;
drop table customer;
drop table parcelType;
drop sequence invoice_ID;
drop sequence tracking_ID;
drop sequence serial_No;
drop sequence event_No;
drop sequence c_No;

CREATE TABLE gpo(
	gpo_id NUMBER(4),
	name VARCHAR(20),
	address VARCHAR(30),
	phoneNo VARCHAR(13),
	PRIMARY KEY(gpo_id)
);
insert into gpo values('0001', 'GPO ISLAMABAD', 'Melody, G-6', '0300-111-1111'); 
insert into gpo values('0002', 'GPO LAHORE', 'Sector-1, Main Market', '0300-111-2222'); 
insert into gpo values('0003', 'GPO KARACHI', 'Sector-4, Main Market', '0300-111-3333'); 
commit;


CREATE TABLE branch(
	branchNo VARCHAR(4),
	branchName VARCHAR(20),
	address VARCHAR(30),
	phoneNo VARCHAR(13),
	gpo_id NUMBER(4),
	PRIMARY KEY(branchNo),
	FOREIGN KEY(gpo_id) REFERENCES gpo(gpo_id)
);

insert into branch values('1000', 'I-8', 'I-8 Markaz, ISLAMABAD', '0300-111-1000', '0001'); 
insert into branch values('2000', 'Bahria Phase 2', 'Phase-2, Main Market, LAHORE','0300-111-2000', '0002'); 
insert into branch values('3000', 'Bahria Phase 4', 'Phase-4, Main Market, KARACHI','0300-111-3000', '0003'); 
insert into branch values('1001', 'G-8', 'I-8 Markaz, ISLAMABAD', '0300-111-1001', '0001'); 
insert into branch values('2001', 'Bahria Phase 3', 'Phase-3, Main Market, LAHORE','0300-111-2001', '0002'); 
insert into branch values('3001', 'Bahria Phase 2', 'Phase-2, Main Market, KARACHI','0300-111-3001', '0003');
insert INTO branch VALUES('1002','Dubai Plaza', 'Islamabad', '0300-111-1003', '0001');
insert INTO branch VALUES('1003','London Plaza', 'Islamabad', '0300-111-1004', '0001');
insert INTO branch VALUES('3002','Paris Plaza', 'Karachi', '0300-111-3002', '0001');
insert INTO branch VALUES('2002','Pyong Yang Plaza', 'Lahore', '0300-111-2002', '0002');
commit;

CREATE TABLE employee(
	empNo VARCHAR(4),
	fName VARCHAR(10),
	lName VARCHAR(10),
	hiredate DATE,
	CNIC VARCHAR(15),
	salary NUMBER,
	branchNo VARCHAR(4),
	PRIMARY KEY(empNo),
	FOREIGN KEY(branchNo) REFERENCES branch(branchNo)
);

INSERT INTO employee VALUES('7238', 'Abdullah', 'Afridi', TO_DATE('03-06-1999', 'MM-DD-YYYY'), '36281-4829123-4', '10000', '1001');
INSERT INTO employee VALUES('6321', 'Ali', 'Hassan', TO_DATE('07-07-2001', 'MM-DD-YYYY'), '53241-3215437-9', '20000', '2000');
INSERT INTO employee VALUES('4526', 'Muhammad', 'Zubair', TO_DATE('02-12-2012', 'MM-DD-YYYY'), '52282-7592456-5', '13000', '3002');
INSERT INTO employee VALUES('7233', 'Humaiz', 'Tariq', TO_DATE('06-06-2018', 'MM-DD-YYYY'), '82130-6543921-2', '17000', '1001');
commit;

CREATE TABLE manages(
	mgr_id VARCHAR(4),
	branchNo VARCHAR(4),
	startDate DATE,
	PRIMARY KEY(branchNo),
	UNIQUE(mgr_id),
	FOREIGN KEY(mgr_id) REFERENCES employee(empNo),
	FOREIGN KEY(branchNo) REFERENCES branch(branchNo)
);

INSERT INTO manages VALUES('7238', '1000', TO_DATE('02-07-2001', 'MM-DD-YYYY'));
INSERT INTO manages VALUES('6321', '1002', TO_DATE('05-07-2005', 'MM-DD-YYYY'));
INSERT INTO manages VALUES('4526', '2001', TO_DATE('11-12-2008', 'MM-DD-YYYY'));
INSERT INTO manages VALUES('7233', '3002', TO_DATE('10-07-2001', 'MM-DD-YYYY'));
commit;

CREATE TABLE customer(
	cust_id VARCHAR(5),
	fName VARCHAR(10),
	lName VARCHAR(10),
	address VARCHAR(30),
	city	VARCHAR(10),
	CNIC VARCHAR(15),
	phoneNo VARCHAR(13),
	PRIMARY KEY(cust_id)
);

CREATE SEQUENCE c_No
MINVALUE 0
MAXVALUE 99999
START WITH 0
INCREMENT BY 1
CACHE 10; 

INSERT INTO customer VALUES(c_No.nextval, 'Talha', 'Khan', 'Phase-3, Main Market', 'lahore', '52282-7592456-2','0311-111-3341');
INSERT INTO customer VALUES(c_No.nextval, 'Yusuf', 'Ali', 'Phase-3, Main Market', 'lahore', '52243-7522457-1','0311-111-3451');
INSERT INTO customer VALUES(c_No.nextval, 'Shahid', 'Afridi', 'Main Market, warda hamna', 'lslamabad', '64402-3928412-9','0322-111-3231');
INSERT INTO customer VALUES(c_No.nextval, 'Hammad', 'Khan', 'street#3,CM colony', 'karachi', '82924-7592456-2','0322-111-3761');
commit;

CREATE TABLE parcelType(
	typeID NUMBER(1),
	rate NUMBER(5),
	name VARCHAR(11),
	PRIMARY KEY(typeID)
);
INSERT INTO parcelType VALUES('1', '70', 'PACKAGE'); 
INSERT INTO parcelType VALUES('2', '30', 'LETTER'); 
INSERT INTO parcelType VALUES('3', '20', 'MONEY ORDER'); 
commit;

CREATE SEQUENCE tracking_ID
MINVALUE 2
MAXVALUE 9999999
START WITH 2
INCREMENT BY 1
CACHE 20; 

CREATE TABLE parcel(
	trackNo NUMBER(7),
	weight NUMBER,
	origin VARCHAR(10),
	destination VARCHAR(10),
	RName VARCHAR(20),
	RAddrress VARCHAR(30),
	RPhoneNo VARCHAR(13),
	agentRefNo VARCHAR(4),
	SName VARCHAR(30),
	PRIMARY KEY(trackNo)
);

INSERT INTO parcel VALUES('0000001', '4', 'ISLAMABAD', 'KARACHI', 'Humaiz Tariq', 'H#332, St#98, Bahria Phase-1', '0321-122-2332', '7233', 'Dr.Ejaz');
INSERT INTO parcel VALUES(tracking_ID.nextval, '4.2', 'ISLAMABAD', 'KARACHI', 'Ali Zubair', 'H#123, St#76, Bahria Phase-2', '0321-123-5432', '7233', 'Dr.Omer');
INSERT INTO parcel VALUES(tracking_ID.nextval, '0.2', 'LAHORE', 'KARACHI', 'Ali Zubair', 'H#123, St#76, Bahria Phase-2', '0321-123-5432', '7233', 'Dr.Hassan');
INSERT INTO parcel VALUES(tracking_ID.nextval,'7.9', 'LAHORE', 'ISLAMABAD', 'Taha Suhail', 'H#400, St#6, I-8/4', '0333-555-1111', '7233', 'Dr.Adnan');
INSERT INTO parcel VALUES(tracking_ID.nextval, '0.1', 'ISLAMABAD', 'LAHORE', 'Faizan Ahmed', 'H#432, St#25, Bahria Phase-4', '0311-455-5242', '7233', 'Dr.Ejaz');

commit;

CREATE TABLE invoice(
	invoiceNo NUMBER(6),
	branchNo VARCHAR(4),
	empNo VARCHAR(4),
	cust_id  VARCHAR(5),
	i_date date,
	tot_price NUMBER,
	tot_qty NUMBER,
	FOREIGN KEY(branchNo) REFERENCES branch(branchNo),
	FOREIGN KEY(empNo) REFERENCES employee(empNo),
	FOREIGN KEY(cust_id) REFERENCES customer(cust_id),
	PRIMARY KEY(invoiceNo)
);

CREATE SEQUENCE invoice_ID
MINVALUE 2
MAXVALUE 999999
START WITH 2
INCREMENT BY 1
CACHE 10; 

INSERT INTO invoice VALUES('000001', '1002', '7238', '1', sysdate, 0, 0);
INSERT INTO invoice VALUES(invoice_ID.nextval, '1001', '7238', '1', sysdate, 0, 0);
INSERT INTO invoice VALUES(invoice_ID.nextval, '3002', '6321', '2', sysdate, 0, 0);
INSERT INTO invoice VALUES(invoice_ID.nextval, '2000', '7238', '3', sysdate, 0, 0);
INSERT INTO invoice VALUES(invoice_ID.nextval, '1003', '7233', '4', sysdate, 0, 0);
	
CREATE TABLE pInvoice(
	invoiceNo NUMBER(6),
	trackNo NUMBER(7),
	refund NUMBER(1),
	qty NUMBER(3),
	shipCost NUMBER(5),
	itemValue NUMBER,
	parcelType NUMBER(1),
	serviceType VARCHAR(10),
	FOREIGN KEY(invoiceNo) REFERENCES invoice(invoiceNo),
	FOREIGN KEY(trackNo) REFERENCES parcel(trackNo),
	PRIMARY KEY(invoiceNo, trackNo, refund),
	UNIQUE (trackNo, refund),
	FOREIGN KEY(parcelType) REFERENCES parcelType(typeID)
);

INSERT INTO pInvoice VALUES('000001', '0000001', '0', '3', '280', '1300', '1', 'URGENT');
INSERT INTO pInvoice VALUES('000001', '0000001', '1', '3', '-280', '2300', '1', 'URGENT'); 
INSERT INTO pInvoice VALUES('000001', '0000002', '0', '5', '350', '3400', '2', 'SAME DAY'); 
INSERT INTO pInvoice VALUES('000002', '0000004', '0', '1', '20', '35000', '3', 'SAME DAY');

CREATE SEQUENCE serial_No
MINVALUE 1
MAXVALUE 9999
START WITH 1
INCREMENT BY 1
CACHE 10; 

CREATE TABLE fund(
	branchNo VARCHAR(4),
	serialNo NUMBER(4),
	f_date DATE,
	amount NUMBER,
	FOREIGN KEY(branchNo) REFERENCES branch(branchNo),
	PRIMARY KEY(branchNo, serialNo),
	UNIQUE(branchNo, f_date)
);
INSERT INTO fund VALUES ('1002', serial_No.nextval , TO_DATE('11-06-2018', 'MM-DD-YYYY'), 32000);
INSERT INTO fund VALUES ('3000', serial_No.nextval , TO_DATE('11-08-2018', 'MM-DD-YYYY'), 48000);
INSERT INTO fund VALUES ('2000', serial_No.nextval , TO_DATE('11-05-2018', 'MM-DD-YYYY'), 39000);
INSERT INTO fund VALUES ('1002', serial_No.nextval , TO_DATE('12-03-2018', 'MM-DD-YYYY'), 33000);

CREATE TABLE insurance(
	trackNo NUMBER(7),
	agentID VARCHAR(4),
	issue_date DATE,
	amount NUMBER,
	cust_id VARCHAR(5),
	FOREIGN KEY(cust_id) REFERENCES customer(cust_id),
	FOREIGN KEY(trackNo) REFERENCES parcel(trackNo),
	PRIMARY KEY(trackNo)
);

INSERT INTO insurance VALUES('1', '7233', sysdate, 120, '1');
INSERT INTO insurance VALUES('3', '7233', sysdate, 150, '1');
INSERT INTO insurance VALUES('4', '7238', sysdate, 160, '4');

CREATE TABLE tracking(
	trackNo NUMBER(7),
	eventNo NUMBER(4),
	description VARCHAR(30),
	currentCity VARCHAR(15),
	delivered char(1),
	t_date DATE,
	signName VARCHAR(20),
	FOREIGN KEY(trackNo) REFERENCES parcel(trackNo),
	PRIMARY KEY(trackNo, eventNo)
);

CREATE SEQUENCE event_No
MINVALUE 1
MAXVALUE 9999
START WITH 1
INCREMENT BY 1
CACHE 10; 

INSERT INTO tracking VALUES('1', event_No.nextval, 'Arrived At GPO LAHORE', 'LAHORE', 'N', sysdate, 'DANISH'); 
INSERT INTO tracking VALUES('1', event_No.nextval, 'Delivered To Addressee', 'LAHORE', 'Y', sysdate, 'DANISH'); 
INSERT INTO tracking VALUES('1', event_No.nextval, 'Sent to KARACHI', 'KARACHI', 'N', sysdate, 'AHMAD');
INSERT INTO tracking VALUES('1', event_No.nextval, 'Delivered To Addressee', 'ISLAMABAD', 'N', sysdate, 'ALI');

PROMPT 'TABLE GPO'
select * from gpo;
PROMPT 'TABLE BRANCH'
select * from branch;
PROMPT 'TABLE EMPLOYEE'
select * from employee;
PROMPT 'TABLE MANAGES'
select * from manages;
PROMPT 'TABLE CUSTOMER'
select * from customer;
PROMPT 'TABLE PARCEL'
select * from parcel;
PROMPT 'TABLE PARCELTYPE'
select * from parcelType;
PROMPT 'TABLE INVOICE'
select * from invoice;
PROMPT 'TABLE PInvoice'
select * from pInvoice;
PROMPT 'TABLE TRACKING'
select * from tracking;
PROMPT 'TABLE INSURANCE'
select * from insurance;
PROMPT 'TABLE FUND'
select * from fund;

commit;