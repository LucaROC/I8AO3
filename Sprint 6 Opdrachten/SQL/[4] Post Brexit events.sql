USE WorldEvents

SELECT
	ContinentName,
	CountryName,
	Count(EventName) [Number of events]
FROM
	tblContinent INNER JOIN tblCountry ON 
	tblContinent.ContinentID = tblCountry.ContinentID 
	INNER JOIN tblEvent ON 
	tblCountry.CountryID = tblEvent.CountryID
WHERE
	ContinentName NOT LIKE 'Europe'
GROUP BY
	ContinentName,
	CountryName
HAVING COUNT(EventName) > 5
ORDER BY
	CountryName