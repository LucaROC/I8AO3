USE WorldEvents

SELECT
	*
FROM
	EventsByCategory
--Selecteer alleen de categorieŽn die meer dan 50 events hebben
WHERE
	What > 50
