create database projects; 
	
   use projects; 

	CREATE TABLE researcher(
		id smallint(5) unsigned NOT NULL,
		firstname varchar(30),
		lastname varchar(30),
		PRIMARY KEY (id),
		KEY idx_lastname (lastname)
	)ENGINE=InnoDB;
	
	CREATE TABLE papers(
		id int(10) unsigned NOT NULL auto_increment,
		researcherid smallint(5) unsigned NOT NULL,
		title varchar(100),
		journal varchar(100),
		published date,
		PRIMARY KEY (id)
	)ENGINE=InnodDB;
	
	ALTER TABLE papers
	ADD CONSTRAINT FK_papers
	FOREIGN KEY (researcherid) REFERENCES researcher(id)
	ON UPDATE CASCADE
	ON DELETE CASCADE;