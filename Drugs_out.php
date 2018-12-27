<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<title>LebedkinImeevApteka</title>
</head>
<BODY BGCOLOR=#FFFFFF LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 ONLOAD="preloadImages();">
<TABLE>
<?php
	printf('<P>Hello world! Searching for every medicine:</P> %s',"\n");
	include('config.php');	
	$link = mysqli_connect($server,$user,$password,$database)
	    or die('Error: Unable to connect: ' . mysqli_connect_error());
	printf('<P>Succesfully connected!</P> %s',"\n");
	
	$SQLquery = 'SELECT DrugsNew.ID, DrugsNew.Name, DrugsNew.Image, Makers.Name, Medicine.Name FROM DrugsNew LEFT JOIN Makers ON DrugsNew.Maker=Makers.ID INNER JOIN Medicine ON DrugsNew.Medicine=Medicine.ID';
	$SQLresult = mysqli_query($link,$SQLquery);

	printf('<table cellspacing=\' 0 \' border=\' 1 \'> %s',"\n");
	printf('<TR> %s',"\n");
	printf('	<TH>ID</TH> %s',"\n");
	printf('	<TH>Name</TH> %s',"\n");
	printf('	<TH>Image</TH> %s',"\n");
	printf('	<TH>Maker</TH> %s',"\n");
	#printf('	<TH>Storage time</TH> %s',"\n");
	printf('	<TH>Medicine</TH> %s',"\n");
	printf('</TR> %s',"\n");

	while ($result = mysqli_fetch_array($SQLresult,MYSQLI_NUM))
	{
		printf('<TR>');
		printf('<TD> %s </TD> <TD>%s</TD> <TD> %s  </TD><TD> %s  </TD><TD> %s  </TD>',$result[0],$result[1],$result[2],$result[3],$result[4]);
		printf('</TR> %s',"\n");
	}
	printf('</table> %s',"\n");
	mysqli_free_result($SQLresult);
	mysqli_close($link);

?>
</TABLE>
</BODY>
</html>