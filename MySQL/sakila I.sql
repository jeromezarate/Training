USE sakila;

-- 1
SELECT *
FROM customer
WHERE customer_id = 20;

-- 2
SELECT *
FROM customer
WHERE customer_id
BETWEEN 20 AND 60;

-- 3
SELECT *
FROM customer
WHERE first_name
LIKE "L%";

-- 4
SELECT *
FROM customer
WHERE first_name
LIKE "%L%";

-- 5
SELECT *
FROM customer
WHERE first_name
LIKE "%L";

-- 6
SELECT *
FROM customer
WHERE last_name
LIKE "C%"
ORDER BY create_date DESC;

-- 7
SELECT *
FROM customer
WHERE last_name
LIKE "%NN%"
ORDER BY create_date ASC
LIMIT 5;

-- 8
SELECT customer_id, first_name, last_name, email
FROM customer
WHERE customer_id 
IN ("515", "181", "582", "503", "29", "85");

-- 9
SELECT email AS email_address
FROM customer
WHERE store_id = 2;

-- 10
SELECT first_name, last_name, email
FROM customer
ORDER BY  email DESC;

-- 11
SELECT customer_id, first_name, last_name, email
FROM customer
WHERE monthname(create_date) = "February" AND
active = true;

-- 12
SELECT email, length(email)
FROM customer
ORDER BY length(email) DESC, email ASC;

-- 13
SELECT *
FROM customer
ORDER BY length(email) ASC
limit 100;