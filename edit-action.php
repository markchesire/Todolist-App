<html>
<title>Action-Edit</title>
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
	<p>Todo's Edit List</p>
	<div id="main">
	<p style="color:#40ff00">
	<?php
		include 'includes/class_autoload.php';
		$editaction = new DatabaseClass();
        $editaction->editlist();  
		?>
	</p>	
	<form method="post"class="timecard">
	Enter ID:<input type="text" name="id" class="id" placeholder="Enter Event ID To Edit" ><br/><br/>
	Enter Desc:<input type="text" name="duty_desc" class="desc" placeholder="Event Description" ><br/><br/>
	Enter Day:<input type="tex" name="event_day" class="day" placeholder="Event Date i.e 03/04/2020" ><br/></br>
	Enter Time:<input type="text" name="event_time" class="time" placeholder="Event Time"><br/></br>
	<button type="submit" name="submit" value="submit">Submit</button>	
    </form>
</div>
</article>
</body>
</html>

