-- 1
SELECT
	users.first_name AS first_name,
    users.last_name AS last_name,
    user2.first_name AS friend_first_name,
    user2.last_name AS friend_last_name
FROM users 
INNER JOIN friendships
ON users.id = friendships.user_id 
INNER JOIN users as user2
ON friendships.friend_id = user2.id;

-- ADDITIONAL EXERCISE
-- 1
SELECT
	users.first_name AS first_name,
    users.last_name AS last_name,
    user2.first_name AS friend_first_name,
    user2.last_name AS friend_last_name
FROM users 
INNER JOIN friendships
ON users.id = friendships.user_id 
INNER JOIN users as user2
ON friendships.friend_id = user2.id
WHERE user2.first_name = "Kermit";

-- 2
SELECT
	count(*) AS number_of_friendships
FROM users 
INNER JOIN friendships
ON users.id = friendships.user_id 
INNER JOIN users as user2
ON friendships.friend_id = user2.id;

-- 3
SELECT
	concat(users.first_name, " ", users.last_name) AS name,
    count(*) AS numbe_of_friends
FROM users 
INNER JOIN friendships
ON users.id = friendships.user_id 
INNER JOIN users as user2
ON friendships.friend_id = user2.id
GROUP BY concat(users.first_name, " ", users.last_name);

-- 4
INSERT INTO users (first_name, last_name, created_at)
VALUES ("Jerome", "Zarate", "2021-01-09 09:51:43");
INSERT INTO friendships (user_id, friend_id, created_at)
VALUES
	("2", "6",  "2021-01-09 09:51:43"),
    ("4", "6",  "2021-01-09 09:51:43"),
    ("5", "6",  "2021-01-09 09:51:43");

-- 5
SELECT
	concat(users.first_name, " ", users.last_name) AS name,
    concat(user2.first_name, " ", user2.last_name) AS name
FROM users 
INNER JOIN friendships
ON users.id = friendships.user_id 
INNER JOIN users as user2
ON friendships.friend_id = user2.id
WHERE users.first_name = "Eli"
ORDER BY  user2.first_name ASC;

-- 6
DELETE FROM friendships
WHERE id = 5; 

-- 7
SELECT
	concat(users.first_name, " ", users.last_name) AS name,
	group_concat(concat(user2.first_name, " ", user2.last_name) separator " / ") AS friend_name
FROM users
INNER JOIN friendships
ON users.id = friendships.user_id 
INNER JOIN users as user2
ON friendships.friend_id = user2.id
GROUP BY users.first_name;