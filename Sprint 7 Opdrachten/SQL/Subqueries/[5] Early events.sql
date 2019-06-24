USE WorldEvents

-- Eerst selecteren we de gegevens die wij willen zien en Inner joinen we de tables
SELECT    
	EventName
	,EventDetails    
FROM            
	tblEvent INNER JOIN tblCountry ON 
	tblEvent.CountryID = 
	tblCountry.CountryID INNER JOIN tblCategory ON 
	tblEvent.CategoryID = tblCategory.CategoryID

-- Daarna gebruiken we een Subquery om ervoor te zorgen dat de laatste 30 CountryIDs worden weggelaten op alfabetische volgorde
WHERE
	tblCountry.CountryID NOT IN
	(
		SELECT
			TOP 30 CountryID
		FROM
			tblCountry
		ORDER BY
			CountryName DESC
	)

-- Daarna gebruiken we nog een Subquery maar dan om de Top 15 CategoryIDs weg te laten, ook op alfabetische volgorde
	AND
	tblCategory.CategoryID NOT IN
	(
		SELECT
			TOP 15 CategoryID
		FROM
			tblCategory
		ORDER BY
			CategoryName DESC
	)

-- En ten slotte orderen we onze resultaten op chronologische volgorde
	ORDER BY
		EventDate