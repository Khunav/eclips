<link type='text/css' rel='stylesheet'  href='stylesheet.css'/>


<?php

echo '<p>hello</p>';
include './DBconfig.php';

$query="SELECT * from department" or die("Error is query".mysqli_errno($connection));
$result = mysqli_query($link, $query) or die(mysqli_error());
?>
<table border="1">
<?php

while ($row=mysqli_fetch_array($result))
{
	?>
	<tr><td>
	<?php
	echo $row['ID'];
	?>
	</td>
	<td>
	<?php echo$row["Name"];?>
	</td>
	</tr>
<?php } ?>
</table>
<!--  <a href="./DBconfig.php">next page</a> -->

<script type="text/javascript" src="script.js">
</script>

