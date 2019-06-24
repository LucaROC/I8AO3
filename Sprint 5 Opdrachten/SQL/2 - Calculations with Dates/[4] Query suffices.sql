USE WorldEvents

SELECT
	EventName,
-- CASE maken zodat bij eerste dagen '1st' staat en niet '1th'
CASE
	WHEN 
		DAY(EventDate) = 1
		OR DAY(EventDate) = 21
		OR DAY(EventDate) = 31
    THEN 
-- Ervoor zorgen dat er 1st komt te staan
		CAST(DATENAME(WEEKDAY, EventDate) AS varchar) + ' ' + CAST(DAY(EventDate) AS varchar) + 'st ' + 
		CAST(DATENAME(MONTH, EventDate) AS varchar) + ' ' + CAST(DATENAME(YEAR, EventDate) AS varchar)
	ELSE
-- Ervoor zorgen dat er 'th' achter de datums komt
		CAST(DATENAME(WEEKDAY, EventDate) AS varchar) + ' ' + CAST(DAY(EventDate) AS varchar) + 'th ' + 
		CAST(DATENAME(MONTH, EventDate) AS varchar) + ' ' + CAST(DATENAME(YEAR, EventDate) AS varchar)
-- De kolom 'Full date' noemen
END AS 'Full date'

FROM
	tblEvent

ORDER BY
	EventDate