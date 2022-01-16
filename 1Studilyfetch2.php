<?php
$mysqli = new mysqli("localhost", "root", "", "studilyassignment");
if($mysqli->connect_error) {
exit('Could not connect');
}
// else{
//     echo 'Connected! <br/>';
// }
$sql = "SELECT * FROM subjectteachertable WHERE Teacher= ? order by Section";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($subject, $teacher, $section);
// $stmt->fetch();


echo "<table>";
echo "<tr>";
echo "<th>Section</th>";
echo "<th>Subject</th>";
echo "<th>Teacher</th>";
echo "</tr>";
while ($stmt -> fetch())
{echo "<tr>";
echo "<td>" . $section . "</td>";
echo "<td>" . $subject . "</td>";
echo "<td>" . $teacher . "</td>";
echo "</tr>";}
echo "</table>";

$stmt->close();
?>