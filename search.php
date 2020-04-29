<html>
<head>
<title>Menu</title>
</head>
<style>
body{
  background-image: url('p3.jpg');
  background-size: 700px 1200px;
}
img{
     opacity:0.5;
		}
		h1{
  padding-top: 50px;
  padding-right: 40px;
  padding-bottom: 50px;
  padding-left: 80px;
}

.center-block {
  display: block;
  margin-right: auto;
  margin-left: auto;
}

</style>
<h1 align="center" color="red">SEARCH</h1>
<br>
<form action="dbsearch.php" method="POST">
<input class="center-block" type="text" name="nic" placeholder="Enter patient NIC number." style="height:50px; width:300px;opacity:0.5;"><br>  
<input class="center-block" type="submit" name="submit" value="Search" style="height:25px; width:70px;">
</form>
</body>
</html>