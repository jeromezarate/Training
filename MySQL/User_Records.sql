-- 1
CREATE DATABASE hackerhero_practice;
CREATE TABLE hackerhero_practice. users(
	id INT PRIMARY KEY AUTO_INCREMENT,
	first_name VARCHAR(255),
	last_name VARCHAR(255),
	email VARCHAR(255),
	encrypted_password VARCHAR(255),
	created_at DATETIME,
	updated_at DATETIME
);

USE hackerhero_practice;
-- 2
INSERT INTO users (first_name)
VALUES 
	("fake1"),
    ("fake2"),
    ("fake3");

-- 3
UPDATE users
SET last_name = "jojo"
WHERE id = 1;

-- 4 
UPDATE users
SET last_name = "Choi";

-- 5
UPDATE users
SET last_name = "Choi"
WHERE id
IN (3, 5, 7, 12, 19);

-- 6
DELETE FROM users
WHERE id = 1;

-- 7
DELETE FROM users;

-- 8
DROP TABLE users;
-- using "drop" It will remove the entire table including itself while "deleting all record" is deleting only the content of the table.*/

-- 9
SELECT email AS email_address
FROM users;

-- 10
ALTER TABLE users
MODIFY COLUMN id BIGINT;

-- 11
ALTER TABLE users
ADD COLUMN is_active BOOLEAN NOT NULL DEFAULT 0;