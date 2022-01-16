<!DOCTYPE html>
<html>
    <head>        <title>Teacher Details</title>

<style>
      body{background-image: url("light.jpg");
        width: 100%;
        
  
  background-attachment: fixed;
  }
  .bgColor{
    background-color:#fff;
    margin:30px;
    padding: 2px;
  }
     .bg{
       margin: 5px;     
       padding: 10px;}
table,th,td {
border : 1px solid black;
border-collapse: collapse;
}
th,td {
padding: 5px;
}
</style></head>
<body style="margin-top:5%;">
<div style="background-color:rgb(255, 255, 255, 0.6);
       width:88%; margin:20px;padding: 15px;">

<h2>Teacher Details</h2>
<div class="bg" >

<form action="">
<select name="customers" onchange="showCustomer(this.value)">
<option value="">Select a teacher:</option>
<option value="Rahul Mishra">Rahul Mishra</option>
<option value="Shweta tiwari">Shweta tiwari</option>
<option value="Mehek Arora">Mehek Arora</option>
<option value="Devjai Rai">Devjai Rai</option>
<option value="Aditya Nagpal">Aditya Nagpal</option> 
<option value="Aditi Nayar">Aditi Nayar</option> 
<option value="Uttam Sharma">Uttam Sharma</option> 

</select>
</form>
<br>
<div id="txtHint">Teacher info will be listed here...</div>
<script>
function showCustomer(str) {
var xhttp;
if (str == "") {
document.getElementById("txtHint").innerHTML = "";
return;
}
xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
document.getElementById("txtHint").innerHTML = this.responseText;
}
};
xhttp.open("GET", "1Studilyfetch2.php?q="+str, true);
xhttp.send();
}
</script>
</div>

</div>
</body>
</html>
