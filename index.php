<!DOCTYPE HTML>
<lang="en">

<head>
<title>PHP Hyptertext Preprocessor</title>
</head>

<body>
  <h1>Enjoy These foreach And if Loops I Put Together For Fun</h1>
    <p>I Also Incorporated {continue(); } and { break; } statements in the PHP</p>
    <small>Lastly, I Want To Add That I Also Incorporated concatenation <br /></small>

<?php
$name = "dale yarborough";
$pos = rand(0,strlen($name)-1);
print substr($name,$pos,1);
echo ("<br />" . "<br />")
?>

<?php


for ($i = 0; $i <= 5; $i++) {
	if ($i % 2 == 0) { continue(1); }
	for ($k = 0; $k <= 5; $k++) {
	if ($k == 3) { break(1); }
	echo $i . "-" . $k . "<br / >" ;
	{if ($k == 4) { break(2); }
		}
	}
}

# single-line comment
/* more than one line comment

"Hello World Will Not Appear"
"Nor Will This"
*/

?>

</body>
</html>
