USE world;

-- 1
SELECT continent, count(*) AS countries
FROM country
WHERE lifeExpectancy > 70
GROUP BY continent;

-- 2
SELECT continent, count(*) AS countries
FROM country
WHERE lifeExpectancy BETWEEN 60 AND 70
GROUP BY continent;

-- 3
SELECT count(*) AS number_of_countries
FROM country
WHERE lifeExpectancy > 75;

-- 4
SELECT count(*) AS total_countries
FROM country
WHERE lifeExpectancy < 40;

-- 5
SELECT name AS country, population AS populations
FROM country
ORDER BY population DESC
LIMIT 10;

-- 6
SELECT sum(population) AS total_population
FROM country;

-- 7
SELECT continent, sum(population) AS total_population
FROM country
GROUP BY continent
HAVING sum(population) > 500000000;

-- 8
SELECT
	continent,
    count(*) AS countries,
    sum(population) AS total_population,
    avg(lifeExpectancy) AS life_expectancy
FROM country
GROUP BY continent
HAVING avg(lifeExpectancy) < 71;

-- 1
SELECT country.name, count(*) AS number_of_cities
FROM country
INNER JOIN city
ON country.code = city.countryCode
GROUP BY country.name;

-- 2
SELECT countrylanguage.language, count(*) AS number_of_countries
FROM country
INNER JOIN countrylanguage
ON country.code = countrylanguage.countryCode
GROUP BY countrylanguage.language;

-- 3
SELECT countrylanguage.language, count(*) AS number_of_countries
FROM country
INNER JOIN countrylanguage
ON country.code = countrylanguage.countryCode
WHERE isOfficial = "T"
GROUP BY countrylanguage.language;

-- 4
SELECT continent, count(city.name) AS number_of_countries, avg(city.population)
FROM country
INNER JOIN city
ON country.code = city.countryCode
GROUP BY continent;

-- 5
SELECT
    countrylanguage.language,
    sum((countrylanguage.percentage/100) * country.population) AS total_population_per_language
FROM country
INNER JOIN countrylanguage
ON country.Code = countrylanguage.countryCode
GROUP BY countrylanguage.language;