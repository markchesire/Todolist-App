<html>
<title>Delete Action</title>
<link rel="stylesheet" type="text/css" href="includes/style.css">
<body>
<head></head>
<article>
	<p>TodoList Manager[Delete]</p>
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
	<p style="color:#ff0000;">Confirm Event ID To Delete</p>
	<div id="main" >
	<p style="color:#40ff00;">
	<?php
		include 'includes/class_autoload.php';
		$deletelist = new DatabaseClass();
        $deletelist->delete();  
		?>
	</p>
	<form method="post"class="timecard">
	Enter ID:<input type="text" name="id" class="id" placeholder="Enter event ID" ><br/><br/>
	<button type="submit" name="submit" value="submit">Submit</button>	
    </form>
</div>
</article>
</body>
</html>

