USE WorldEvents

-- Selecteer heel simpel alleen de EventName van tblEvent
SELECT
	EventName
FROM
	tblEvent

-- Gebruik een Subquery om de Events te laten zien met een Lengte langer dan de Average lengte
WHERE
	LEN(EventName) > 
 (SELECT 
	AVG(LEN(EventName))
  FROM
	tblEvent)