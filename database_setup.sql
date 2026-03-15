CREATE DATABASE gvs_computer_center;
USE gvs_computer_center;

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    rollNo VARCHAR(255) NOT NULL,
    name VARCHAR(255) NOT NULL,
    session VARCHAR(255) NOT NULL,
    courseType VARCHAR(255) NOT NULL,
    courseInterest VARCHAR(255),
    fatherName VARCHAR(255) NOT NULL,
    motherName VARCHAR(255),
    mobile VARCHAR(255) NOT NULL,
    altMobile VARCHAR(255),
    email VARCHAR(255) NOT NULL,
    dob DATE NOT NULL,
    gender VARCHAR(10) NOT NULL,
    qualification VARCHAR(255),
    address TEXT NOT NULL,
    savedAt DATETIME DEFAULT CURRENT_TIMESTAMP
);