<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<h1> List All Teams</h1>
<table border="1">
	<tr>
		<th>Отбор </th>
		<th>Държава </th>
		<th>Бюджет </th>
		<th>Зала </th>
	</tr>
<?php
	foreach($all_teams as $team){
		echo "<tr> 
			<td> $team[teamName]</td>
			<td> $team[country]</td>
			<td> $team[budget]</td>
			<td> $team[arena]</td>
		</tr>";
	}

?>
</table>
</body>
</html>