DROP DATABASE IF EXISTS CarSharing;
-- CREATE DATABASE CarSharing DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
CREATE DATABASE CarSharing DEFAULT CHARACTER SET utf8mb4;
use CarSharing;

CREATE TABLE users (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(30) NOT NULL,
    lastName VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    birthDate DATE NOT NULL,
    rate TINYINT NOT NULL,
    listOfCars TEXT NOT NULL,
    listOfComments TEXT NOT NULL,
    date DATE NOT NULL
); 

CREATE TABLE cars (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    mark VARCHAR(30) NOT NULL,
    model VARCHAR(30) NOT NULL,
    color VARCHAR(30) NOT NULL,
    nbOfSeats VARCHAR(30) NOT NULL
    
);

CREATE TABLE announcements (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    userDriver VARCHAR(30) NOT NULL,
    cityStart VARCHAR(30) NOT NULL,
    cityEnd VARCHAR(30) NOT NULL,
    dateStart VARCHAR(30) NOT NULL,
    dateEnd VARCHAR(30) NOT NULL,
    car VARCHAR(30) NOT NULL,
    seatNumber INT(1) NOT NULL,
    price FLOAT(10) NOT NULL,
    date DATE NOT NULL
);

CREATE TABLE userComments (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    text VARCHAR(30) NOT NULL,
    userAuthor VARCHAR(30) NOT NULL,
    date VARCHAR(30) NOT NULL,
    userAssociated VARCHAR(30) NOT NULL
);

CREATE TABLE userAnnouncements (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    text VARCHAR(30) NOT NULL,
    userAuthor VARCHAR(30) NOT NULL,
    date VARCHAR(30) NOT NULL,
    announceAssociated VARCHAR(30) NOT NULL
);

CREATE TABLE reservations (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    date DATE,
    user VARCHAR(30) NOT NULL,
    announce VARCHAR(30) NOT NULL,
    status BOOLEAN NOT NULL
);

INSERT INTO `users` (`firstName`, `lastName`, `email`, `birthDate`, `rate`, `listOfCars`, `listOfComments`, `date`)
VALUES 
('Tony', 'Bengué', 'tonybengue@hotmail.fr', '1993-12-02', 0, 'Aucune Voiture', "Aucun commentaire", now()),
('Alméric', 'Steichen', 'almeric.steichen@etu.unilim.fr', '1998-02-12', 0, "Aucune Voiture", "Aucun commentaire", now());

INSERT INTO `announcements` (`cityStart`, `cityEnd`, `dateStart`, `dateEnd`, `userDriver`, `seatNumber`, `price`, `car`, `date`)
VALUES 
('Paris', 'Lyon', '2019-03-12', '2019-03-12', 'Tony Bengué', 4, 33.22, 'Peugeot 107', '2019-10-19');