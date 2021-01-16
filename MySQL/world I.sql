USE world;
-- 1.
SELECT *
FROM country
WHERE Continent = "Europe";

-- 2. 
SELECT *
FROM country
WHERE Continent In ("North America", "Africa");

-- 3.
SELECT *
FROM city
INNER JOIN country
ON city.CountryCode = country.Code
WHERE country.Population > 100000000;

-- 4. 
SELECT Name
FROM country
INNER JOIN countrylanguage
ON country.Code = countrylanguage.CountryCode
WHERE countrylanguage.Language = "Spanish";

-- 5.
SELECT Name
FROM country
INNER JOIN countrylanguage
ON country.Code = countrylanguage.CountryCode
WHERE countrylanguage.Language = "Spanish" AND IsOfficial = "T";
    
-- 6.
SELECT Name
FROM country
INNER JOIN countrylanguage
ON country.Code = countrylanguage.CountryCode
WHERE countrylanguage.Language IN ("Spanish", "ENGLISH") AND IsOfficial = "T";
    
-- 7.
SELECT Name
FROM country
INNER JOIN countrylanguage
ON country.Code = countrylanguage.CountryCode
WHERE countrylanguage.Language = "Arabic" AND IsOfficial = "F" AND Percentage > 30;
    
-- 8.
SELECT Name
FROM country
INNER JOIN countrylanguage
ON country.Code = countrylanguage.CountryCode
WHERE countrylanguage.Language = "French" AND IsOfficial = "T" AND Percentage < 50;
    
-- 9.
SELECT Name, countrylanguage.Language
FROM country
INNER JOIN countrylanguage
ON country.Code = countrylanguage.CountryCode
WHERE IsOfficial = "T" ORDER BY countrylanguage.Language;
    
-- 10.
SELECT country.Name, countrylanguage.Language
FROM city
INNER JOIN country
ON city.CountryCode = country.Code
INNER JOIN countrylanguage
ON city.CountryCode = countrylanguage.CountryCode
WHERE countrylanguage.IsOfficial = "T"
ORDER BY city.Population DESC
LIMIT 100;
        
-- 11.
SELECT *
FROM city
INNER JOIN country
ON city.CountryCode = country.Code
WHERE country.LifeExpectancy < 40
ORDER BY city.Population DESC
LIMIT 100;

-- 12.
SELECT *
FROM country
INNER JOIN countrylanguage
ON country.Code = countrylanguage.CountryCode
WHERE countrylanguage.Language = "English"
ORDER BY LifeExpectancy DESC
LIMIT 100;