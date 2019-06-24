USE WorldEvents

SELECT
	EventName,
	EventDate,
-- Verschillen in het aantal dagen vergeleken met mijn geboortedatum tonen met DATEDIFF
	DATEDIFF(DAY, EventDate, '2001/02/08') AS DaysOffset,
-- Maak er een heel nummer van met ABS zodat je ze kan sorteren op hoe dicht het bij mijn geboortedatum is
	ABS(DATEDIFF(DAY, EventDate, '2001/02/08')) AS DaysDiffrence
FROM
	tblEvent
ORDER BY
-- Sorteren op hoe dichtbij het bij mijn geboortedatum zit (van dichtstbij tot verst weg
	DaysDiffrence ASC