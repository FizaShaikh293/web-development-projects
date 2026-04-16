CREATE DATABASE hotel;
USE hotel;

CREATE TABLE roombook (
    id INT AUTO_INCREMENT PRIMARY KEY,
    FName VARCHAR(50),
    LName VARCHAR(50),
    Email VARCHAR(100),
    TRoom VARCHAR(50),
    cin DATE,
    cout DATE,
    stat VARCHAR(20)
);