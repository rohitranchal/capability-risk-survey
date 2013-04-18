DROP TABLE Session;
CREATE TABLE Session (
	id VARCHAR(255),
	ip VARCHAR(100),
	time TIMESTAMP DEFAULT NOW()
);

DROP TABLE Capability;
CREATE TABLE Capability (
	session_id VARCHAR(255),
	c1 INT, 
	c2 INT,
	c3 INT,
	c4 INT, 
	c5 INT,
	c6 INT
);

DROP TABLE Threat_Rank;
CREATE TABLE Threat_Rank (
	session_id VARCHAR(255),
	threat INT, 
	capability INT,
	et INT,
	se INT, 
	ks INT,
	wo INT,
	re INT
);

