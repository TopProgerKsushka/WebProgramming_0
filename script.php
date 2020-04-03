<?php
	if (isset($_POST['submit'])) {
		$start = microtime(TRUE);
		$x = $_POST['x'];
		$y = $_POST['y'];
		$r = $_POST['r'];
		$hit = FALSE;
		if ($x >= 0 && $y >= 0) {
			if ($x * $x + $y * $y < $r * $r)
			{
				$hit = FALSE;
			}
		}
		if ($x <= 0 && $y >= 0) {
			if ($y - $x < $r)
			{
				$hit = TRUE;
			} 
		}
		if ($x <= 0 && $y <= 0) {
			if ($x > -$r && $y > -$r)
			{
				$hit = TRUE;
			}
		}

		echo '<table border cellspacing="0"><tr><td>variable</td><td>value</td></tr><tr><td>x</td><td>' . $x . "</td></tr><tr><td>y</td><td>" . $y . "</td></tr><tr><td>r</td><td>" . $r . "</td></tr><tr><td>result</td><td>";
		if (!$hit)
			echo "not ";
		echo "hit </td></tr></table>";
		echo "<p>current time : " . date('d/m/y G:i') . "</p>";
		echo "<p>execution time : " . round(microtime(TRUE) - $start, 4) . "s</p>";
	}
?>