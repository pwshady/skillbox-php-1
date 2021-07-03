<?php

$num = 0;
$resZ = 0;
$resH = 0;
for ($i = 1; $i <= 20; $i++)
{
    print "<p>" . $i . "</p>";
    $resZ += floor($i /10);
    $resZ += $i % 10;
    $resH += $i;
}
print $resZ . "<br>";
print $resH;
?>
