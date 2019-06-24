USE WorldEvents

SELECT        
-- De kolommen selecteren
	tblEvent.EventName, 
	tblEvent.EventDate, 
	tblCategory.CategoryName
FROM            
-- OUTER JOIN gebruiken om de lege categorie�n te vinden
	tblCategory FULL OUTER JOIN tblEvent ON 
	tblCategory.CategoryID = tblEvent.CategoryID
WHERE
-- Alle lege categorie�n selecteren
	EventName IS NULL
ORDER BY 
-- Sorteren op de datums
	tblEvent.EventDate