CREATE DATABASE mysql_workbench_setup;

CREATE TABLE users(
	id INT PRIMARY KEY AUTO_INCREMENT,
	first_name VARCHAR(255),
	last_name VARCHAR(255),
	email VARCHAR(255),
	encrypted_password VARCHAR(255),
	created_at DATETIME,
	updated_at DATETIME
);
INSERT INTO users(first_name)
VALUE ("Jerome");

UPDATE users 
SET last_name = "Zarate";

DELETE FROM users
WHERE last_name = "Zarate";

SELECT *
FROM users;