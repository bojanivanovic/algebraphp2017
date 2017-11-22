SELECT
	member.first_name,
	member.last_name,
	film.title
FROM videostore.members member
INNER JOIN videostore.films_members lent ON lent.member_id = member.id and lent.date_returned IS NULL
INNER JOIN videostore.films film ON film.id = lent.film_id