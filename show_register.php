<?php
// connect database
include("db.php"); 
$query ="SELECT * FROM provinces";
$result = $conn->query($query);

$query ="SELECT * FROM register_form NATURAL JOIN provinces WHERE register_form.PROVINCE_ID=provinces.PROVINCE_ID ";
$result = $conn->query($query);
?>

<html>
<head>
<title>Register</title>
<meta charset="UTF-8">

</head>
<body>
<table align=center border=1>
<center><h2>รายชื่อผู้ลงทะเบียน</h2></center>
<tr>
<td align=center>#</td>
<td align=center>ชื่อ-นามสกุล</td>
<td align=center>อีเมล</td>
<td align=center>เพศ</td>
<td align=center>ความสนใจ</td>
<td align=center>ที่อยู่</td>
<td align=center>จังหวัด</td>
</tr>
<?php while ($row = $result->fetch_array()) { ?>
<tr>
<td align=center><?php echo $row['id']; ?></td>
<td align=center><?php echo $row['name']; ?></td>
<td align=center><?php echo $row['email']; ?></td>
<td align=center><?php echo $row['sex']; ?></td>
<td align=center><?php echo $row['intr1']; ?><?php if ($row['intr1'] != '') echo "<br>"; ?><?php echo $row['intr2']; ?></td>
<td align=center><?php echo $row['address']; ?></td>
<td align=center><?php echo $row['PROVINCE_NAME']; ?></td>
</tr>
<?php }
$result->close();
?>
</table><br>

    <center><button type="button"><a href="http://angsila.cs.buu.ac.th/~58160186/887371/lab07/register_form.php">
		Register
	</a></button>
    
</body>
<html>