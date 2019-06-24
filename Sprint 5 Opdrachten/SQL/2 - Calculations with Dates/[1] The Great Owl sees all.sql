USE WorldEvents

SELECT
	EventName,
	EventDate,
-- Show de datum op de beschreven wijze met Format
	FORMAT(EventDate, 'dd/MM/yyyy') AS UsingFormat,
-- Show de datum op de beschreven wijze met Convert
	CONVERT(varchar, EventDate, 103) AS UsingConvert
FROM
	tblEvent
WHERE
-- Alle events kiezen die in mijn geboortejaar zijn gebeurd
	EventDate BETWEEN '2001-01-01' AND '2001-12-31'
ORDER BY
	EventDate ASC