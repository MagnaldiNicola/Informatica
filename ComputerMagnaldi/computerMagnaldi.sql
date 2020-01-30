CREATE DATABASE esercizio1;
CREATE TABLE computer(
    id is NOT NULL,
	marcaVideo VARCHAR(50),
    marcaTastiera VARCHAR(50),
    marcaCase VARCHAR(50)
);

INSERT INTO computer(id,marcaVideo,marcaTastiera,marcaCase) VALUES(1,'lenovo','hp','lenovo');
INSERT INTO computer(id,marcaVideo,marcaTastiera,marcaCase) VALUES(2,'apple','apple','apple');

INSERT INTO computer(id,marcaVideo,marcaTastiera,marcaCase) 
	VALUES(3,'samsung','samsung', 'hp'),
    (4,'apple','hp', 'lenovo');
	
