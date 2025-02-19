create table interns (internID SMALLINT NOT NULL AUTO_INCREMENT  PRIMARY KEY, 
email VARCHAR(40), password_md5 VARCHAR(32), first VARCHAR(40), last VARCHAR(40));

CREATE TABLE opportunities (opportunityID SMALLINT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
company VARCHAR(40), city VARCHAR(25), start_date DATE, end_date DATE, position VARCHAR(30), 
description VARCHAR(250));


CREATE TABLE assigned_opportunities (opportunityID SMALLINT, internID SMALLINT, date_selected DATE, 
date_approved DATE);

