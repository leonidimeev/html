<HTML>
<HEAD>
<TITLE>Imeev_Lebedkin</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<SCRIPT TYPE="text/javascript">

function newImage(arg) {
	if (document.images) {
		rslt = new Image();
		rslt.src = arg;
		return rslt;
	}
}

function changeImages() {
	if (document.images && (preloadFlag == true)) {
		for (var i=0; i<changeImages.arguments.length; i+=2) {
			document[changeImages.arguments[i]].src = changeImages.arguments[i+1];
		}
	}
}

var preloadFlag = false;
function preloadImages() {
	if (document.images) {
		home_over = newImage("images/home-over.gif");
		company_over = newImage("images/company-over.gif");
		services_over = newImage("images/services-over.gif");
		products_over = newImage("images/products-over.gif");
		preloadFlag = true;
	}
}

</SCRIPT>
</HEAD>
<link href="css/styles.css" rel="stylesheet" type="text/css">
<center>
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
</center>
</HTML>