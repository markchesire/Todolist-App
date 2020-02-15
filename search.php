 <?php
		include 'includes/class_autoload.php';
?>
<html>
<title>Search Action</title>
<link rel="stylesheet" type="text/css" href="includes/style.css">
<body>
<head></head>
<article>
	<p>TodoList Manager[Search]</p>
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
	<br/>
	<p style="color:#ff0000;">Search Below</p>
	<div id="main" >

      
	<form method="post"class="timecard">
	Search:<input type="text" name="search" class="id" placeholder="Search.." ><br/><br/>
	<button type="submit" name="submit" value="submit">Submit</button>	
    </form>
    <table class="timecard">
	
	<thead>
		<tr>
			<th id="thNo">No:</th>
			<th id="thDesc">Event Description</th>
			<th id="thDay">Event Day</th>
			<th id="thTime">Event Time</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$searchlist = new DatabaseClass();
        $result = $searchlist->search();
           if (!$result) {
               die(' ');
            }
            while ($row = mysqli_fetch_assoc($result)){
		?>
		
		<tr class="odd">
			<th><?php echo $row['id']; ?></th>
			<td><?php echo $row['duty_desc']; ?></td>
			<td><?php echo $row['event_day']; ?></td>
			<td><?php echo $row['event_time']; ?></td>
		</tr>
		<?php }?>
	</tbody>
</table>
</div>
</article>
</body>
</html>


