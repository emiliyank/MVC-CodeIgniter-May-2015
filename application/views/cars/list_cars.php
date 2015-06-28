<body>
<div style="text-align:center">
<h1> List All Cars</h1>
<table border="1">
	<tr>
		<th> No </th> <th> Car </th> <th> Model </th> <th> Category </th>
		<th> Year </th> <th> Price </th> <th> Date Added</th> 
		<th> Edit </th> <th> Delete </th>
	</tr>
<?php
	$num = 1;
	foreach($all_cars as $car){

		echo "<tr>
			<td> $num</td> <td> $car[brand]</td> <td> $car[model]</td>
			<td> $car[category]</td>
			<td> $car[year_created]</td> <td> $car[price]</td>
			<td> $car[date_created]</td> <td>";
			echo anchor("cars/show_edit_car/$car[id]", 'Edit');

			echo "</td> <td>";
			echo anchor("cars/delete_car/$car[id]", 'Delete');			
			echo "</td> </tr>";
		$num++;
	}
?>
</table>
<?php 
	echo '<div style="text-align:center">';
		echo anchor("cars/show_add_car", 'Add New Car');
	echo '</div>';
?>
</div>