create database healthinformationsystem

CREATE TABLE User (
    user_id INT PRIMARY KEY,
    user_name VARCHAR(50),
    user_mobile VARCHAR(20),
    user_email VARCHAR(50),
    user_address VARCHAR(100)
);

CREATE TABLE Login (
    login_id INT PRIMARY KEY, 
    login_username VARCHAR(50),
    login_password VARCHAR(50),
    login_role_id INT,
    FOREIGN KEY (login_role_id) REFERENCES Role(role_id)
);

CREATE TABLE Role (
    role_id INT PRIMARY KEY,
    role_name VARCHAR(50),
    role_desc VARCHAR(100)
);

CREATE TABLE Permission (
    permission_id INT PRIMARY KEY,
    permission_role_id INT,
    permission_name VARCHAR(50),
    FOREIGN KEY (permission_role_id) REFERENCES Role(role_id)
);

CREATE TABLE Doctor (
    doc_id INT PRIMARY KEY,
    doc_name VARCHAR(50),
    doc_specialty VARCHAR(50),
    doc_add VARCHAR(100),
    doc_mobile VARCHAR(20),
    doc_email VARCHAR(50),
    doc_pass VARCHAR(50)
);

CREATE TABLE Hospital (
    hos_id INT PRIMARY KEY,
    hos_name VARCHAR(50),
    hos_type VARCHAR(50),
    hos_desc VARCHAR(100),
    hos_doc_id INT,
    hos_place VARCHAR(50),
    FOREIGN KEY (hos_doc_id) REFERENCES Doctor(doc_id)
);

CREATE TABLE Patient (
    pat_id INT PRIMARY KEY,
    pat_name VARCHAR(50),
    pat_gender ENUM('male', 'female', 'other'),
    pat_age INT,
    pat_email VARCHAR(50),
    pat_mobile VARCHAR(20),
    pat_address VARCHAR(100)
);

CREATE TABLE Medicine (
    med_id INT PRIMARY KEY,
    med_name VARCHAR(50),
    med_quantity INT,
    med_price DECIMAL(10,2),
    hos_id INT,
    FOREIGN KEY (hos_id) REFERENCES Hospital(hos_id)
);
