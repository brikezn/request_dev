CREATE TABLE PROFILE (
   profile_id INT NOT NULL AUTO_INCREMENT,
   profile_login VARCHAR(100) NOT NULL,
   profile_password VARCHAR(40) NOT NULL,
   PRIMARY KEY ( profile_id )
);

CREATE TABLE REQUEST (
   request_id INT NOT NULL AUTO_INCREMENT,
   request_first_name VARCHAR(100) NOT NULL,
   request_patronymic VARCHAR(100) NOT NULL,
   request_lastname VARCHAR(100) NOT NULL,
   request_adress VARCHAR(150) NOT NULL,
   request_phone VARCHAR(30) NOT NULL,
   request_email VARCHAR(30) NOT NULL,
   PRIMARY KEY ( request_id )
);

INSERT INTO PROFILE VALUES (DEFAULT, 'admin', MD5('admin'));

INSERT INTO request VALUES(DEFAULT, "Nikolay", "Brikez", "Vladimirovich", "bolshevikov 8", "111-11-10", "brikez1@gmail.com");
INSERT INTO request VALUES(DEFAULT, "Andrew", "Brikez", "Sergeevich", "bolshevikov 9", "111-11-10", "brikez1@gmail.com");
INSERT INTO request VALUES(DEFAULT, "Viktor", "Brikez", "Vladimirovich", "bolshevikov 9", "111-11-10", "brikez1@gmail.com");
INSERT INTO request VALUES(DEFAULT, "Alex", "Brikez", "Vladimirovich", "bolshevikov 9", "111-11-10", "brikez2@gmail.com");
INSERT INTO request VALUES(DEFAULT, "Petr", "Brikez", "Vladimirovich", "bolshevikov 9", "111-11-10", "brikez2@gmail.com");
INSERT INTO request VALUES(DEFAULT, "Nikolay", "Brikez", "Vladimirovich", "bolshevikov 9", "111-11-10", "brikez2@gmail.com");
INSERT INTO request VALUES(DEFAULT, "Nikolay", "Brikez", "Vladimirovich", "bolshevikov 9", "111-11-11", "brikez3@gmail.com");
INSERT INTO request VALUES(DEFAULT, "Nikolay", "Brikez", "Vladimirovich", "bolshevikov 9", "111-11-11", "brikez3@gmail.com");
INSERT INTO request VALUES(DEFAULT, "Nikolay", "Brikez", "Vladimirovich", "bolshevikov 9", "111-11-11", "brikez3@gmail.com");
INSERT INTO request VALUES(DEFAULT, "Nikolay", "Brikez", "Vladimirovich", "bolshevikov 9", "111-11-11", "brikez4@gmail.com");
