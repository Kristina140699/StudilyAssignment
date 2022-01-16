<?php
$rno = $_POST['rno']??"";
$sname = $_POST['sname']??"";
$sec = $_POST['section']??"";
$ops1 = $_POST['ops1']??"";
$ops2 = $_POST['ops2']??"";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["rno"])) {
    $rnoErr = "Roll Number is required";
    } else {
    $rno = test_input($_POST["rno"]);}
    
if (empty($_POST["sname"])) {
    $snameErr = "Student Name is required";
    } else {
    $sname = test_input($_POST["sname"]);
    }

if (empty($_POST["section"])) {
        $secErr = "Section is required";
        } else {
        $sec = test_input($_POST["section"]);
        }
if (empty($_POST["ops1"])) {
        $ops1Err = "Optional Subject 1 is required";
        } else {
        $ops1 = test_input($_POST["ops1"]);
        }
if (empty($_POST["ops2"])) {
    $ops2Err = "Optional Subject 2 is required";
    } else {
    $ops2 = test_input($_POST["ops2"]);
    }
}

    
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }

if (isset ($rno)){
    $link= mysqli_connect("localhost", "root", "","studilyassignment"); 

    if($link === false){
        die("ERROR: Could not connect." .mysqli_connect_error());
    }
    // else
    //  {echo "Connected!";}

}


$sql="INSERT INTO optionalsubjects(RollNo,SName,Section,optionalSubject1,optionalSubject2) 
values('$rno','$sname','$sec','$ops1', '$ops2')";

if(mysqli_query($link, $sql)){
    echo "";
}else{
    echo"ERROR: Not able to execute $sql.".mysqli_error($link);
}
mysqli_close($link);
?>


<html>
    <head>
        <title>Optional Subject Database</title>
        <style>
             body{background-image: url("blues.jpg");
        width: 100%; 
  background-attachment: fixed;
  }

  .bgColor{
    background-color:rgb(250, 250, 250, 0.4);
    margin:30px;
    padding: 2px;
    width:800px;
  }
     .bg{
       margin: 5px;     
       padding: 10px;}
            a{text-decoration: none;
                color: black;}

                .submit{
                    text-align:center;
                    background: #fff;
                    border-radius: 4px;
                    border: none;
                    font-size: 16px;
                }
        </style>
    </head>

        <body style="margin-top:7%;">
        
<center>
<div class="bg bgColor">
<h3>List of Optional Subjects</h3>
<table style="border: 1px solid white">
    
<tr><th style="border: 1px solid white">S.No.</th> <th style="border: 1px solid white"> Optional Subjects</th></tr>
<tr><td style="border: 1px solid white"> 1  </td> <td style="border: 1px solid white">   Computer Science</td></tr>
<tr><td style="border: 1px solid white"> 2  </td> <td style="border: 1px solid white">   Economics</td></tr>
<tr><td style="border: 1px solid white"> 3  </td> <td style="border: 1px solid white">	Physics </td></tr>
</table>
<p style="color: green"><b>Note: </b>
Select any two Optional Subjects out of three</p></div></center>
<br/>
<form action="" method="post" style="margin-left:40%;">
        
         <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enter your Optional Subjects</h3>
        <table >
        <tr><td style="text-align:right">Roll No.:</td> <td><input type="text" name="rno" placeholder="Enter your Roll Number" require/></td></tr>     
        <tr><td style="text-align:right">Student Name:</td> <td><input type="text" name="sname" placeholder="Enter your Student Name" require/></td></tr>
        <tr><td style="text-align:right">Section:</td> <td><input type="text" name="section" placeholder="Enter your Section" require/></td></tr>
        <tr><td style="text-align:right">Optional Subject 1:</td> <td><input type="text" name="ops1" placeholder="Enter your Optional Subject 1" require/></td></tr>
        <tr><td style="text-align:right">Optional Subject 2: </td> <td><input type="text" name="ops2" placeholder="Enter your Optional Subject 2" require/></td></tr>
        </table>
        <br/> 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input class="submit" type="submit" value="Submit"/>  
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button class="submit"><a href="5StudilyHome.php">Go Back Home</a></button> 
</form>
</body>
</html>