USE WorldEvents

-- Gebruik wederom Inner Join om de twee tabellen aan elkaar te koppelen
SELECT        
	ContinentName
	,EventName
FROM            
	tblEvent INNER JOIN tblCountry ON tblEvent.CountryID = 
	tblCountry.CountryID INNER JOIN tblContinent ON tblCountry.ContinentID = 
	tblContinent.ContinentID

-- Met gebruik van een Subquery zorgen we er hiervoor dat de events worden gefilterd
-- Alle events die hier worden geselecteerd zijn de events van de top 3 continenten met het laagste aantal events
WHERE
	ContinentName IN 
	(
	SELECT        
		TOP 3 ContinentName
	FROM            
		tblEvent INNER JOIN tblCountry ON tblEvent.CountryID = 
		tblCountry.CountryID INNER JOIN tblContinent ON tblCountry.ContinentID = 
		tblContinent.ContinentID
	GROUP BY
		ContinentName
		-- Het gebruik van Order By zoals in de opdracht wordt beschreven
	ORDER BY
		COUNT(EventName)
	)

