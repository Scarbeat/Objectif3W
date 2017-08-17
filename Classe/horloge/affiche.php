<?php
$t = getdate();
$h = $t['hours'] % 12;
$m = round($t['minutes']/5)*5;
header('refresh:60');
?>

<body bgcolor="#ffffff" text="#000000" link="#0000ff" vlink="#800080" alink="#ff0000">
<div align="center">

<img src="horloge.php?h=<?=$h?>&m=<?=$m?>" border="0" width="400" height="400" alt="">
</div>
</body>
</html>
