USE sakila;

-- 1
SELECT first_name, last_name, email, address
FROM country
INNER JOIN city
ON country.country_id = city.country_id
INNER JOIN address
ON city.city_id = address.city_id
INNER JOIN customer
ON address.address_id = customer.address_id
WHERE city.city_id = 312;

-- 2
SELECT title, description, release_year, rating, special_features, name AS genre
FROM category
INNER JOIN film_category
ON category.category_id = film_category.category_id
INNER JOIN film
ON film_category.film_id = film.film_id
WHERE category.name = "Comedy";

-- 3
SELECT
	actor.actor_id,
    concat(first_name, " ", last_name) AS actor_name,
    title,
    description,
    release_year
FROM film
INNER JOIN film_actor
ON film.film_id = film_actor.film_id
INNER JOIN actor
ON film_actor.actor_id = actor.actor_id
WHERE actor.actor_id = 5;

-- 4
SELECT
	customer.store_id,
    city.city_id,
    first_name,
    last_name,
    email,
    address
FROM country
INNER JOIN city
ON country.country_id = city.country_id
INNER JOIN address
ON city.city_id = address.city_id
INNER JOIN customer
ON address.address_id = customer.address_id
INNER JOIN store
ON customer.store_id = store.store_id
WHERE customer.store_id = 1 AND city.city_id IN (1, 42, 312, 459);

-- 5
SELECT
	title,
    description,
    release_year,
    rating,
    special_features
FROM category
INNER JOIN film_category
ON category.category_id = film_category.category_id
INNER JOIN film
ON film_category.film_id = film.film_id
INNER JOIN film_actor
ON film.film_id = film_actor.film_id
INNER JOIN actor
ON film_actor.actor_id = actor.actor_id
WHERE rating = "G" AND special_features LIKE "%behind the scenes%" AND actor.actor_id = "15";

-- 6
SELECT film.film_id, title, actor.actor_id, concat(first_name, " ", last_name) AS actor_name
FROM film
INNER JOIN film_actor
ON film.film_id = film_actor.film_id
INNER JOIN actor
ON film_actor.actor_id = actor.actor_id
WHERE film.film_id = "369";

-- 7
SELECT 
	film.film_id,
    title,
    description,
    release_year,
    rating,
    special_features,
    special_features, name AS genre,
    rental_rate
FROM category
INNER JOIN film_category
ON category.category_id = film_category.category_id
INNER JOIN film
ON film_category.film_id = film.film_id
WHERE rental_rate = "2.99" AND category.name = "Drama";

-- 8
SELECT
	actor.actor_id,
    concat(first_name, " ", last_name) AS actor_name,
    film.film_id,
	title,
    description,
    release_year,
    rating,
    special_features,
    name AS genre
FROM category
INNER JOIN film_category
ON category.category_id = film_category.category_id
INNER JOIN film
ON film_category.film_id = film.film_id
INNER JOIN film_actor
ON film.film_id = film_actor.film_id
INNER JOIN actor
ON film_actor.actor_id = actor.actor_id
WHERE category.name = "Action" AND first_name = "SANDRA " AND last_name = "KILMER"
