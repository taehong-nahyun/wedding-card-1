<?php
$conn = new mysqli('sjs0274.cafe24.com', 'sjs0274', 'tlawlstn12146212', 'insert');
$inputName=$_POST['inputName'];
$inputMessage=$_POST['inputMessage'];
$inputNumber=$_POST['inputNumber'];
$sql="INSERT INTO `data` (`id`, `inputName`, `inputMessage`, `inputNumber`) VALUES (NULL, '$inputName', '$inputMessage', '$inputNumber')";
if ($conn->query($sql) === TRUE) {
    echo "data inserted";
}
else 
{
    echo "failed";
}
?>