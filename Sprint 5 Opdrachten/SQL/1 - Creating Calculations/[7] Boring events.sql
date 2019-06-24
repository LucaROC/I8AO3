USE WorldEvents

SELECT t.* FROM (SELECT EventName,
		-- Sorteer welke Events beginnen en eindigen met dezelfde letter
        CASE WHEN LEFT(EventName, 1) = RIGHT(EventName, 1)
            THEN 'Same Letter'
			-- Sorteer welke letter een medeklinker in het begin en einde hebben
            WHEN LEFT(EventName, 1) IN ('a', 'e', 'i', 'o', 'u') AND RIGHT(EventName, 1) IN ('a', 'e', 'i', 'o', 'u')
            THEN 'Begins and ends with a vowel'
        END AS 'Result'
        FROM tblEvent) t
		-- Laat alle events zonder dit principe niet zien (of zoals ze in deze opdracht worden beschreven, alle 'saaie' events)
    WHERE t.Result IS NOT NULL