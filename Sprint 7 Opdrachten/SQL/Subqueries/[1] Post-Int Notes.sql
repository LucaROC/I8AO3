USE WorldEvents

-- Selecteer de kolommen met Inner join (zodat je tblCountry ook kan gebruiken)
SELECT        
	EventName 
	,EventDate
	,CountryName
FROM            
	tblEvent INNER JOIN tblCountry 
	ON tblEvent.CountryID = tblCountry.CountryID

-- Gebruik een Subqeuery de Events te selecteren waar de datums groter zijn dan de MAX
WHERE
	EventDate > 
(SELECT 
	 MAX(EventDate)
 FROM
 	tblEvent
 WHERE 
 	CountryID = 21)

-- Sorteer op de datum op aflopende volgorde
ORDER BY
	EventDate DESC