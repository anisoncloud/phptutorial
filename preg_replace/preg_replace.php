<?php
echo "<h1>preg_replace(pattern, replacement, subject)</h1><br/>";


$subject = "Hello World";
$pattern = '/World/';
$replacement = 'Karim';

echo preg_replace($pattern, $replacement, $subject)."<br/>";


?>