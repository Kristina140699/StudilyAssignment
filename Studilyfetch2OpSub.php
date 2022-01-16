<?php
$mysqli = new mysqli("localhost", "root", "", "studilyassignment");
if($mysqli->connect_error) {
exit('Could not connect');
}
// else{
//     echo 'Connected! <br/>';
// }
$sql = "SELECT * FROM optionalsubjects WHERE optionalSubject1= ? order by Section";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($rno, $sname, $section, $ops1, $ops2);
// $stmt->fetch();


echo "<table>";
echo "<tr>";
echo "<th>Roll Number</th>";
echo "<th>Student Name</th>";
echo "<th>Section</th>";
echo "<th>Optional Subject 1</th>";
echo "<th>Optional Subject 2</th>";
echo "</tr>";
while ($stmt -> fetch())
{echo "<tr>";
echo "<td>" . $rno . "</td>";
echo "<td>" . $sname . "</td>";
echo "<td>" . $section . "</td>";
echo "<td>" . $ops1 . "</td>";
echo "<td>" . $ops2 . "</td>";
echo "</tr>";}
echo "</table>";

$stmt->close();
?>
