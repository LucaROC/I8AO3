USE DoctorWho

SELECT 
	AuthorName
	,DoctorName
	,COUNT(*) [Episodes]
FROM
	tblAuthor INNER JOIN tblEpisode ON 
	tblAuthor.AuthorId = tblEpisode.AuthorId INNER JOIN
    tblDoctor ON tblEpisode.DoctorId = tblDoctor.DoctorId
GROUP BY
	AuthorName,
	DoctorName
HAVING COUNT(EpisodeNumber) > 4
ORDER BY
	[Episodes] DESC

