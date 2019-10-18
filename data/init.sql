DROP DATABASE IF EXISTS covoiturage_like;
CREATE DATABASE covoiturage_like DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
use covoiturage_like;

CREATE TABLE users (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(30) NOT NULL,
    lastName VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    birthDate DATE NOT NULL,
    rate VARCHAR(1) NOT NULL,
    listOfCars TEXT NOT NULL,
    listOfUsers TEXT NOT NULL,
    date TIMESTAMP
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
    cityStart VARCHAR(30) NOT NULL,
    cityEnd VARCHAR(30) NOT NULL,
    dateStart VARCHAR(30) NOT NULL,
    dateEnd VARCHAR(30) NOT NULL,
    userDriver VARCHAR(30) NOT NULL,
    seatNumber VARCHAR(30) NOT NULL,
    price VARCHAR(30) NOT NULL,
    car VARCHAR(30) NOT NULL
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
    status VARCHAR(30) NOT NULL
);