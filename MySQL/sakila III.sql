USE sakila;

-- 1
SELECT country, count(*) AS number_of_customers
FROM country
INNER JOIN city
ON country.country_id = city.country_id
INNER JOIN address
ON city.city_id = address.city_id
INNER JOIN customer
ON address.address_id = customer.address_id
GROUP BY country;

-- 2
SELECT city, country, count(*) AS number_of_customers
FROM country
INNER JOIN city
ON country.country_id = city.country_id
INNER JOIN address
ON city.city_id = address.city_id
INNER JOIN customer
ON address.address_id = customer.address_id
GROUP BY city;

-- 1
SELECT
	monthname(payment_date) AS month,
    avg(amount) AS average_amount,
    sum(amount) AS total_amount,
    count(*) AS number_of_transactions
FROM country
INNER JOIN city
ON country.country_id = city.country_id
INNER JOIN address
ON city.city_id = address.city_id
INNER JOIN customer
ON address.address_id = customer.address_id
INNER JOIN payment
ON customer.customer_id = payment.customer_id
INNER JOIN rental
ON payment.rental_id = rental.rental_id
GROUP BY monthname(payment_date)
ORDER BY month(payment_date);

-- 2
SELECT
	monthname(payment_date) AS month,
    dayname(payment_date) AS day,
    hour(payment_date) AS hour,
    sum(amount) AS total_sales
FROM country
INNER JOIN city
ON country.country_id = city.country_id
INNER JOIN address
ON city.city_id = address.city_id
INNER JOIN customer
ON address.address_id = customer.address_id
INNER JOIN payment
ON customer.customer_id = payment.customer_id
INNER JOIN rental
ON payment.rental_id = rental.rental_id
GROUP BY month(payment_date), day(payment_date), hour(payment_date)
ORDER BY sum(amount) DESC
LIMIT 10;

