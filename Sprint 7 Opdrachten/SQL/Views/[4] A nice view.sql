USE WorldEvents

SELECT
	*
FROM
	EventsByCategory
--Selecteer alleen de categorie�n die meer dan 50 events hebben
WHERE
	What > 50
