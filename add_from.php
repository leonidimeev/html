<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<title>LebedkinImeevApteka</title>
</head>
<body>

<table
border="1"
align="center"
rules="rows"
style="width:60%;">
<tr>

<td>

<table
border="1"
background="images/168.png"
bgcolor="#006400"
cellpadding="10"
style="width:100%; border-radius:5px;">
<tr>

<th color="white">

<h1>АПТЕКА НИЗКИХ ЦЕН</h1>
<h3>Мы следим за Вашим здоровьем!</h3>
</th>
</tr>
</table>

<table
border="1"
bgcolor="#e6e6fa"
cellpadding="10"
style="width:100%; border-radius:5px;">

<tr>

<td
rowspan="2"
style="width:80%">




    <table width="100%" cellspacing="0" border="1">

        <TD>
          <P>Add Drug:</P>
          <form action="add_from.php" method="post">
              <table width="100%" cellspacing="0" border="1">
                  <TR>
                    <TD>Name:</TD> <TD><input type="text" name="name"></TD>
                  </TR><TR>
                  <TD>Image:</TD> <TD><input type="text" name="image"></TD>
                  </TR><TR>
                  <TD>Maker:</TD> <TD><input type="text" name="maker"></TD>
                  </TR><TR>
                  <TD>Storage time:</TD> <TD><input type="text" name="time"></TD>
                  </TR><TR>
                  <TD>Medicine:</TD> <TD><input type="text" name="medicine"></TD>
                  </TR><TR>
                <input type="submit" value="Add Drug">
                </TR>
				</table>
                </form>
              
        </TD>


</td>

<td bgcolor="#e6e6fa">
<h3>Меню</h3>
<p>
<a href="">
<img src="#">
<span style="margin-left:5px;">Главная</span></a>
</p>
<p>
<a href="Drugs_out.php">
<img src="#">
<span style="margin-left:5px;">Список препаратов</span;></a>
</p>
<p>
<a href="Maker_out.php">
<img src="#">
<span style="margin-left:5px;">Список производителей</span></a>
</p>
</td>

</tr>
<tr>
<td
bgcolor="#e6e6fa"
align="center">
<h3>Общая информация</h3>
<p>Текст общей информации</p>
</td>
</tr>

</table>

<table
border="1"
bgcolor="#e6e6fa"
height="100"
cellpadding="10"
style="width:100%; border-radius:5px;">
<tr>

<th>

<div id="footer">
  <p>Copyright &copy; 2018. <a href="https://github.com/leonidimeev/html" title="reporef">Our github repo</a> è <a href="http://ec2-52-14-19-253.us-east-2.compute.amazonaws.com" title="hostingref">AWS Amazon</a></p>
		<p><a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a> | <a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional"><abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a> | <a href="http://jigsaw.w3.org/css-validator/check/referer" title="This page validates as CSS"><abbr title="Cascading Style Sheets">CSS</abbr></a></p></div>

</div>

</th>


</tr>
</table>
</td>
</tr>
</table>
</body>
</html>