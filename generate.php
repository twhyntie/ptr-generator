<!DOCTYPE html>
<link rel = "stylesheet" href = "prism/prism.css">
<title>Generated PTR</title>
<script src = "prism/prism.js"></script>
<style>
#header {
width: 100%;
height: 120px;
background-color: #dddddd;
position: absolute;
top: 0;
left: 0;
text-align: center;
font-size: 100px;
font-family: League Gothic;
color: #333333;
}
body {
padding-top: 130px;
}
</style>
<div id = "header">
GENERATED CODE
</div>
<pre><code class="language-markup">
<?php
exec("python ptrgenerator.py '{$_GET['i1']}' '{$_GET['i2']}' '{$_GET['i3']}' '{$_GET['i4']}' '{$_GET['i5']}' '{$_GET['i6']}' '{$_GET['i7']}' '{$_GET['i8']}' '{$_GET['i9']}' '{$_GET['i10']}' '{$_GET['i11']}' '{$_GET['i12']}' '{$_GET['i13']}' '{$_GET['i14']}' '{$_GET['i15']}' '{$_GET['i16']}' '{$_GET['i17']}' '{$_GET['i18']}' '{$_GET['i19']}' '{$_GET['i20']}' '{$_GET['i21']}' '{$_GET['i22']}' '{$_GET['i23']}' '{$_GET['i24']}' '{$_GET['i25']}'", $result);
$result = htmlentities(implode("\n", $result));
print $result;
?>
</code>
</pre>