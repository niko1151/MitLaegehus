-- Opretter database
create database MitLaegehus;

USE MitLaegehus;

-- Her opretter vi vores tabeller

-- Lægehus Tabel
CREATE TABLE Laegehus(
	LaegehusID int AUTO_INCREMENT PRIMARY KEY,
	Navn varchar(50),
	Postnummer int
);

-- Bruger Tabel
CREATE TABLE Bruger(
	BrugerID int AUTO_INCREMENT PRIMARY KEY,
	LaegehusID int,
	Fornavn VARCHAR(20),
	Efternavn VARCHAR(30),
	Email VARCHAR(100),
	Tlf INT,
	Fødselsdag DATE,
	AdminLevel INT,
	FOREIGN KEY (LaegehusID) REFERENCES Laegehus(LaegehusID)
);

-- Bruger login Tabel
CREATE TABLE BrugerLogin(
	BrugerID int,
	Brugernavn VARCHAR(50),
	Adgangskode VARCHAR(50),
	FOREIGN KEY (BrugerID) REFERENCES Bruger(BrugerID)
);

-- Vaccine Tabel
CREATE TABLE Vaccine(
	VaccineID int AUTO_INCREMENT PRIMARY KEY,
	Navn varchar(50),
	Pris int
);

-- Booking Tabel
CREATE TABLE Booking(
	BookingID int AUTO_INCREMENT PRIMARY KEY,
	BrugerID int,
	Tidsbestilling datetime,
	Varighed INT,
	Besked text,
	FOREIGN KEY (BrugerID) REFERENCES Bruger(BrugerID)
);

-- Tilføj fremmednøglebegrænsning til LeagehusID i Bruger tabellen
ALTER TABLE Bruger ADD CONSTRAINT fk_bruger_laegehus FOREIGN KEY (LaegehusID) REFERENCES Laegehus (LaegehusID);

-- Tilføj fremmednøglebegrænsning til BrugerID i BrugerLogin tabellen
ALTER TABLE BrugerLogin ADD CONSTRAINT fk_brugerlogin_bruger FOREIGN KEY (BrugerID) REFERENCES Bruger (BrugerID);

-- Tilføj fremmednøglebegrænsning til BrugerID i Booking tabellen
ALTER TABLE Booking ADD CONSTRAINT fk_booking_bruger FOREIGN KEY (BrugerID) REFERENCES Bruger (BrugerID);

-- Dummy data til lægehus
INSERT INTO Laegehus (Navn, Postnummer)
VALUES ('Ballerup Laegehus', 2750), ('Skovlunde Laegehus', 2740), ('Herlev Laegehus', 2730);

-- Dummy data til brugere
INSERT INTO Bruger(Fornavn, Efternavn, Email, Tlf, Fødselsdag, AdminLevel)
VALUES ('Svend', 'Nielsen', 'SvendTest@gmail.com', '39485765', '2008-01-04', 0), ('Bo', 'Andersen', 'BoTest@gmail.com', '12345678', '1999-10-28', 0), ('Morten', 'Jensen', 'MortenTest@gmail.com', '87654321', '1979-03-09', 0);

-- Dummy data til Bruger login
INSERT INTO BrugerLogin(Brugernavn, Adgangskode)
VALUES ('Sejevend58', 'smartienfart28'), ('Boermitnavn37', 'padelkongen123'), ('Morten33', 'mjensen123');

-- Dummy data til Vaccine
INSERT INTO Vaccine(Navn, Pris)
VALUES ('Hepatitis A', 100), ('Stivkrampe', 200), ('Rabies', 300);

-- Dummy data til Booking
INSERT INTO Booking(BrugerID,Tidsbestilling, Varighed, Besked)
VALUES (2,'2023-05-15 10:30:00', 30, 'Dette er min besked1'), (3,'2023-09-06 11:30:00', 30, 'Dette er min besked2'), (1,'2023-05-15 12:30:00', 30, 'Dette er min besked3');

-- Her er vores forskellige select statements

SELECT * FROM Laegehus;

SELECT * FROM Bruger;

SELECT *
FROM Laegehus
INNER JOIN Bruger ON Laegehus.LaegehusID = Bruger.LaegehusID;

SELECT *
FROM Bruger
LEFT JOIN BrugerLogin ON Bruger.BrugerID = BrugerLogin.BrugerID;

SELECT *
FROM Bruger
INNER JOIN Booking ON Bruger.BrugerID = Booking.BrugerID;






