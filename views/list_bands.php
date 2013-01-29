<h2>All Bands</h2>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Genre</th>
			<th># Albums</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php
		// Read all lines of the CSV file into an array
		$lines = file('data/bands.csv',FILE_IGNORE_NEW_LINES);
		
		// Counter variable for line number
		$i = 0;
		
		// Iterate over the array of lines
		foreach($lines as $line) {
			$parts = explode(',',$line);
			$name = $parts[0];
			$genre = $parts[1];
			$num_albums = $parts[2];
			echo '<tr">';
			echo 	"<td>$name</td>";
			echo 	"<td>$genre</td>";
			echo 	"<td>$num_albums</td>";
			echo 	"<td><a href=\"./?p=form_edit_band&band=$i\" class=\"btn btn-warning\"><i class=\"icon-edit icon-white\"></i></a> <a href=\"actions/delete_band.php?linenum=$i\" class=\"btn btn-danger\"><i class=\"icon-trash icon-white\"></i></a></td>";
			echo '</tr>';
			
			$i++; // increment line number
		}
		?>
	</tbody>
</table>