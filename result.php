<html>
<head>
<title>Submitted</title>
</head>
<body background="file:///C:/Users/athrey/Downloads/38015-410x293-Web_page_backgrounds.jpg">
<?php
include_once 'logout2.php';
$clgname=$_GET['clgname'];
$con=mysqli_connect('localhost','root','','proffaplly');
$sql1="select * from applied where Clgname='$clgname'";

$result1=mysqli_query($con,$sql1) or die("bad query");

echo"<br><br><br><br>";
echo'<style>table{ padding:10px 10px; width:100%; font-size:25}</style>';
echo"<table border='1' cellpadding='10' cellspacing='50'>";
echo"<tr><th>Clgname</th><th>Name</th><th>Username</th><th>Dept</th><th>Degree</th><th>Exper</th><th>Caste</th><th>Skills</th><th>Prev</th></tr>";
while($row1=mysqli_fetch_assoc($result1)) {
	echo"<tr><td>{$row1['Clgname']}</td><td>{$row1['Name']}</td><td>{$row1['Username']}</td><td>{$row1['Dept']}</td><td>{$row1['Degree']}</td><td>{$row1['Exper']}</td>
		<td>{$row1['Caste']}</td><td>{$row1['Skills']}</td><td>{$row1['Prev']}</td></tr>";
}
echo"</table>";
echo'<br><br><br><font size="4">Submitted Succesfully</font>';

?>
</body>
</html>
