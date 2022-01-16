<!DOCTYPE html>
<html>
    <head>        <title>Optional Subject Details</title>

<style>
      body{background-image: url("back.jpg");
        width: 100%;
        
  
  background-attachment: fixed;
  }
  .bgColor{
    background-color:#ddff99;
    margin:30px;
    padding: 2px;
  }
     .bg{
       margin: 5px;     
       padding: 10px;}
table,th,td {
border : 1px solid #fff;
border-collapse: collapse;
}
th,td {
padding: 5px;
}
</style></head>
<body style="margin-top:5%;">
<div style="background-color:rgb(255, 255, 255, 0.6);
       width:88%; margin:20px;padding: 15px;">

<h2>Optional Subject Details</h2>
<div class="bgColor bg" >

<form action="">
<select name="customers" onchange="showCustomer(this.value)">
<option value="">Select subject:</option>
<option value="Computer Science">Computer Science</option>
<option value="Economics">Economics</option>
<option value="Physics">Physics</option>
 

</select>
</form>
<br>
<div id="txtHint">Optional Subject info will be listed here...</div>
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
xhttp.open("GET", "4Studilyfetch2.php?q="+str, true);
xhttp.send();
}
</script>
</div>

</div>
</body>
</html>