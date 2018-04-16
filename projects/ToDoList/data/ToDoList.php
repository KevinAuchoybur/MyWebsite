<html>
<head>
<title>ToDoList
</title>
<link rel="stylesheet" type="text/css" href="../style/toDoList.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>
<header>
	<A HREF="../index.php" class="linkRetour1"><i class="fa fa-arrow-circle-left fa-lg"></i> Retour</A> 
	<center><h2>Ma Liste</h2></center>

</header>

<br>


<div id='additem'>
    &nbsp;&nbsp;<input type='text' name='additem' class="addItem" placeholder="Saisir une tache"/>
    <button class="buttonAddItem"><i class="fa fa-plus-circle"></i> Ajouter</button>
</div>

<div id='todolist'>
    <ol><br>
	</ol>
   <!-- Add item from "additem" input field -->
</div>

<script src='../js/jquery.js'></script>
<script src='../js/toDoList.js'></script>

</body>
</html>