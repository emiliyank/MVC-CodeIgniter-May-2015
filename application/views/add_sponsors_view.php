<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<div style="color:red">
<?php
	echo validation_errors();
?>
</div>
<form method="post" action="insert_sponsor">
	Спонсор: <input type="text" name="sponsor" /> <br/>
	Държава: <input type="text" name="country" /> <br/>
	Сектор: <input type="text" name="sector" /> <br/>
	Президент: <input type="text" name="president" /> <br/>
	<input type="submit" name="save" value="Запиши"/>
</form>
</body>
</html>