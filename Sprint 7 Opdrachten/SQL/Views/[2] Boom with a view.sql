SELECT 
	[Category]
	,COUNT(*) [Number of events]
FROM 
	vwEverything 
WHERE
	[Continent] LIKE '%Africa%'
GROUP BY 
	vwEverything.Category
ORDER BY
	[Number of events] DESC
