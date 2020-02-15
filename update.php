<?php
include 'includes/class_autoload.php';
$database = new DatabaseClass();
$database->connect();
$result=$database->getlist();
?>
<html>
<title>Edit</title>
<link rel="stylesheet" type="text/css" href="includes/style.css">
<body>
<head></head>
<article>
	<p>TodoList Manager[Edit]</p>
	<nav>
		<ul>
			<li><a href="index.php">View All</a></li>
			<li><a href="add.php">Add</a></li>
			<li><a href="update.php">Edit</a></li>
			<li><a href="delete.php">Delete</a></li>
			<li><a href="search.php">Search<a></li>
		<ul>
	<nav>
</article >
<article id="content">
	<div id="main">
		<br/>
<table class="timecard">
	
	<thead>
		<tr>
			<th id="thNo">No:</th>
			<th id="thDesc">Event Description</th>
			<th id="thDay">Event Day</th>
			<th id="thTime">Event Time</th>
			<th id="thTime">Action</th>
		</tr>
	</thead>
	<tbody>
		<?php
        while($row = mysqli_fetch_assoc($result)){
        ?>
		<tr class="odd">
			<th><?php echo $row['id']; ?></th>
			<td><?php echo $row['duty_desc']; ?></td>
			<td><?php echo $row['event_day']; ?></td>
			<td><?php echo $row['event_time']; ?></td>
			<td>
				<a href="edit-action.php"class='btn btn-danger delete-object'>
					<span class='glyphicon glyphicon-remove'></span>Edit
				</a>
			</td>
			
		</tr>
		<?php }?>
	</tbody>
</table>
</div>
</article>
</body>
</html>


