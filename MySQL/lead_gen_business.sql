USE lead_gen_business;

-- 1
SELECT monthname(charged_datetime) AS month, sum(amount) AS revenue
FROM billing
WHERE year(charged_datetime) = "2012" AND monthname(charged_datetime) = "March";

-- 2
SELECT clients.client_id, sum(amount) AS tota_revenue
FROM clients
INNER JOIN billing
ON clients.client_id = billing.client_id
WHERE clients.client_id = "2";

-- 3
SELECT domain_name AS website, clients.client_id
FROM clients
INNER JOIN sites
ON clients.client_id = sites.client_id
WHERE  clients.client_id = "10";

-- 4
SELECT
	clients.client_id,
    count(domain_name) AS number_of_websites,
    monthname(created_datetime) AS month_created,
    year(created_datetime) AS year_created
FROM clients
INNER JOIN sites
ON clients.client_id = sites.client_id
WHERE clients.client_id = "1"
GROUP BY monthname(created_datetime), year(created_datetime);

SELECT
	clients.client_id,
    count(domain_name) AS number_of_websites,
    monthname(created_datetime) AS month_created,
    year(created_datetime) AS year_created
FROM clients
INNER JOIN sites
ON clients.client_id = sites.client_id
WHERE clients.client_id = "20"
GROUP BY monthname(created_datetime), year(created_datetime);

-- 5
SELECT 
	domain_name AS website,
    count(*) AS number_of_leads,
    date_format(registered_datetime, "%M %d, %Y" ) AS date_generated
FROM clients
INNER JOIN sites
ON clients.client_id = sites.client_id
INNER JOIN leads
ON sites.site_id = leads.site_id
WHERE date(registered_datetime) >= "2011-01-01" AND date(registered_datetime) < "2011-2-15"
GROUP BY domain_name;

-- 6
SELECT 
	concat(clients.first_name, " ", clients.last_name) AS client_name,
    count(*) AS number_of_leads
FROM clients
INNER JOIN sites
ON clients.client_id = sites.client_id
INNER JOIN leads
ON sites.site_id = leads.site_id
WHERE date(registered_datetime) >= "2011-01-01" AND date(registered_datetime) < "2011-12-31"
GROUP BY clients.client_id;

-- 7
SELECT 
	concat(clients.first_name, " ", clients.last_name) AS client_name,
    count(*) AS number_of_leads,
    date_format(registered_datetime, "%M" ) AS month_generated
FROM clients
INNER JOIN sites
ON clients.client_id = sites.client_id
INNER JOIN leads
ON sites.site_id = leads.site_id
WHERE month(registered_datetime) >= "1" AND month(registered_datetime) <= "6" AND year(registered_datetime) = "2011"
GROUP BY domain_name;

-- 8
SELECT 
	concat_ws(clients.first_name, " ", clients.last_name) AS client_name,
    domain_name AS website,
    count(*) AS number_of_leads,
    date_format(registered_datetime, "%M %d, %Y" ) AS date_generated
FROM clients
INNER JOIN sites
ON clients.client_id = sites.client_id
INNER JOIN leads
ON sites.site_id = leads.site_id
GROUP BY domain_name
ORDER BY clients.client_id;

-- 9
SELECT
	concat(first_name, " ", last_name) AS client_name,
	sum(amount) AS Total_revenue,
    date_format(charged_datetime, "%M") AS month_charge,
    date_format(charged_datetime, "%Y") AS year_charge
FROM clients
INNER JOIN billing
ON clients.client_id = billing.client_id
GROUP BY concat(first_name, " ", last_name), date_format(charged_datetime, "%M %Y");

-- 10
SELECT
	concat(clients.first_name, " ", clients.last_name) AS client_name,
    group_concat(domain_name separator " / ") AS sites
FROM clients
LEFT JOIN sites
ON clients.client_id = sites.client_id
GROUP BY concat(clients.first_name, " ", clients.last_name);