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
<form method="post" action="insert_team">
	Отбор: <input type="text" name="team" /> <br/>
	Държава: <input type="text" name="country" /> <br/>
	Бюджет: <input type="text" name="budget" /> <br/>
	Зала: <input type="text" name="arena" /> <br/>
	<input type="submit" name="save" value="Запиши"/>
</form>
</body>
</html>