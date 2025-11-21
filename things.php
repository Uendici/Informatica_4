<table>

<?php

	for($i = 0; $i < 5;$i++){
	echo "<tr>";
	for($j = 0; $j < 5;$j++){
		$prodotto = ($i + 1) * ($j + 1);
		echo "<TD>$prodotto</TD>";
	}
	echo "</tr>";
	}

