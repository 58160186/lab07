<html lang="en">
<head>
<meta charset="utf-8">
<title>Form Validation</title>
</head>
<body>
<h3>แบบฟอร์มลงทะเบียน</h3>
<form action="dopost.php" method="post" class="a">
ชื่อ-นามสกุล: <br/>
<input type="text" class="text" name="name" id="name" /> <br/>
อีเมล์: <br/>
<input type="text" class="text" name="email" id="email" /> <br/>
เพศ: <br />
<input type="radio" class="radio" name="sex" id="sex" value="M" /> ชาย
<input type="radio" class="radio" name="sex" id="sex" value="F" /> หญิง
ความสนใจ: <br/>
<input type="checkbox" class="checkbox" name="intr1" id="intr1" /> เรียน
<input type="checkbox" class="checkbox" name="intr2" id="intr2" /> เกมส์
<br />
ที่อยู่ <br/>
<textarea class="text" name="address" id="address" row="4" cols="50" ></textarea>
<br />
จังหวัด: <br />
<select name="province" id="province">
<option value="value">---เลือกจังหวัด---</option>
<option value="value">กรุงเทพมหานคร</option>
<option value="value">ชลบุรี</option>
</select><br />
<br/><br/>
<input type="submit" id="submit" value="submit" name="submit" />
</form>
