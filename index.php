<!DOCTYPE html>
<title>LUCID PTR generator</title>
<style>
@font-face
{
font-family: league-gothic;
src: url(font/league-gothic.otf);
}

@font-face
{
font-family: open-sans;
src: url(font/open-sans.ttf);
}

* {
font-family: open-sans;
}
input, textarea {
margin-top: 5px;
top: auto;
}
.small {
width: 50px;
}
#header {
width: 100%;
height: 120px;
background-color: #dddddd;
position: absolute;
top: 0;
left: 0;
text-align: center;
font-size: 100px;
font-family: league-gothic;
color: #333333;
}
body {
padding-top: 130px;
}
</style>
<div id = "header">
PTR GENERATOR
</div>
<form action = "generate.php" method = "GET" autocomplete = "off">

Preferred Start Time: <br>
Year: <input type = "text" name = "i1" class = "small">&nbsp;
Month: <input type = "text" name = "i2" class = "small">&nbsp;
Day: <input type = "text" name = "i3" class = "small">&nbsp;
Hour: <input type = "text" name = "i4" class = "small">&nbsp;
Minute: <input type = "text" name = "i5" class = "small">&nbsp;
Second: <input type = "text" name = "i6" class = "small"><br>
<br>
Earliest Start Time: <br>
Year: <input type = "text" name = "i7" class = "small">&nbsp;
Month: <input type = "text" name = "i8" class = "small">&nbsp;
Day: <input type = "text" name = "i9" class = "small">&nbsp;
Hour: <input type = "text" name = "i10" class = "small">&nbsp;
Minute: <input type = "text" name = "i11" class = "small">&nbsp;
Second: <input type = "text" name = "i12" class = "small"><br>
<br>
Latest Start Time: <br>
Year: <input type = "text" name = "i13" class = "small">&nbsp;
Month: <input type = "text" name = "i14" class = "small">&nbsp;
Day: <input type = "text" name = "i15" class = "small">&nbsp;
Hour: <input type = "text" name = "i16" class = "small">&nbsp;
Minute: <input type = "text" name = "i17" class = "small">&nbsp;
Second: <input type = "text" name = "i18" class = "small"><br>
<br>
Duration: <br>
Days: <input type = "text" name = "i19" class = "small">&nbsp;
Hours: <input type = "text" name = "i20" class = "small">&nbsp;
Minutes: <input type = "text" name = "i21" class = "small">&nbsp;
Seconds: <input type = "text" name = "i22" class = "small"><br>
<br>
PTR ID: <input type = "text" name = "i23"><br>
<br>
Priority: <input type = "text" name = "i24"><br>
<br>
Explanatory Text: <br><textarea name = "i25"></textarea><br>
<input type = "submit" value = "Submit">
</form>
