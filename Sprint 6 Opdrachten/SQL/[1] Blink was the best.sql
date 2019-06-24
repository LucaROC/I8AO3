USE DoctorWho

SELECT
	AuthorName
	,COUNT(*) [Episodes]
	,MIN(EpisodeDate) [Earliest date]
	,MAX(EpisodeDate) [Latest date]
FROM            
	tblAuthor INNER JOIN tblEpisode 
	ON tblAuthor.AuthorId = tblEpisode.AuthorId
GROUP BY
	AuthorName
ORDER BY
	[Episodes] DESC