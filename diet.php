<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
body {
	background-image: url("diet1.jpg");
	background-repeat: no-repeat;
	background-size: cover;
	
	font-size: 16px;
	}
table
{
	border-collapse:
}
td {
    border:none;
	color:black;
}
</style>
</head>

<body>
<form action="diet1.php" method="post" >
<table width="250" border="1" cellpadding="5">
  <tr>
    <td colspan="2" align="center"><p>ENTER THE DETAILS</p>
  </tr>
  <tr>
    <td>age</td>
    <td>
      <input type="text" name="age" />
 	</td>
  </tr>
   <tr>
    <td>Height</td>
    <td> <input type="text" name="height" />mtrs</td>
  </tr>
  <tr>
    <td>weight</td>
    <td> <input type="text" name="weight" />kg</td>
  </tr>
  <tr>
    <td>gender</td>
    <td><input type="radio" name="gender" value="M" />MALE<input type="radio" name="gender" value="F" />FEMALE</td>
  </tr>
  <tr>
    <td colspan="2"><input type="radio" name="food" value="veg" />VEG  <input type="radio" name="food" value="nonveg" />NON-VEG</td>
   </tr>
   <tr>
    <td>ANY illness?</td>
    <td> <input type="text" name="illness" /></td>
  </tr>
  <tr><td>Your training course:</td><td><select name="course">
  <option value="weight">WEIGHT TRAINING</option>
  <option value="cardio">CARDIO</option>
  </select>
  </tr></td>
</table>
<input type="submit"value="SUBMIT"align="middle"/>
</form>
</body>
</html>
