<?php
$students = array("Alfi", "shahina", "aneesa", "sabina", "rojina");

echo "Array before sorting:\n";
print_r($students);
echo "<br><br>";
asort($students);
echo "\nArray after ascending sorting (asort):\n";
print_r($students);
echo "<br><br>";
arsort($students);
echo "\nArray after descending sorting (arsort):\n";
print_r($students);
?>

