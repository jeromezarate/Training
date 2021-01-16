USE world_old;

-- 1
SELECT countries.name, languages.language, languages.percentage
FROM countries
INNER JOIN languages
ON countries.code = languages.country_code
WHERE languages.language = "Slovene"
ORDER BY languages.percentage DESC;

-- 2
SELECT countries.name, count(*) AS number_of_cities
FROM countries
INNER JOIN cities
ON countries.code = cities.country_code
GROUP BY countries.name
ORDER BY count(*) DESC;

-- 3
SELECT cities.name, cities.population
FROM countries
LEFT JOIN cities
ON countries.code = cities.country_code
WHERE countries.name = "Mexico" AND cities.population > 500000
ORDER BY  cities.population DESC;

-- 4
SELECT countries.name, languages.language, languages.percentage 
FROM countries
INNER JOIN languages
ON countries.code = languages.country_code
WHERE languages.percentage > 89
ORDER BY languages.percentage DESC;

-- 5
SELECT name, surface_area, population
FROM countries 
WHERE surface_area < 501 AND population > 100000;

-- 6
SELECT name, government_form, capital, life_expectancy
FROM countries 
WHERE government_form = "Constitutional Monarchy" AND capital > 200 AND life_expectancy > 75;

-- 7
SELECT
	countries.name,
    cities.name,
    cities.district,
    cities.population
FROM countries
INNER JOIN cities
ON countries.code = cities.country_code
WHERE countries.name = "Argentina" AND district = "Buenos Aires" AND cities.population > 500000;

-- 8
SELECT region, count(*) AS number_of_countries
FROM countries
GROUP BY region
ORDER BY count(*) DESC;