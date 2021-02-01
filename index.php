<html>
	<head>
	<title>Todo-List App</title>
	 <!-- <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'> -->
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" charset="utf-8">    
	</head>
	<body>
		<div class="container">
			<p>
			 	<label for = "new-task"> Add Item</label><input id="new-task"type="text"><button>Add</button>
			</p>
			<h3>Todo</h3>
      <ul id="incomplete-tasks">
        <li><input type="checkbox"><label>Pay Bills</label><input type="text"><button class="edit">Edit</button><button class="delete">Delete</button></li>
        <li class="editMode"><input type="checkbox"><label>Go Shopping</label><input type="text" value="Go Shopping"><button class="edit">Edit</button><button class="delete">Delete</button></li>
        
      </ul>
          <h3>Completed</h3>
      <ul id="completed-tasks">
        <li><input type="checkbox" checked><label>See the Doctor</label><input type="text"><button class="edit">Edit</button><button class="delete">Delete</button></li>
      </ul>
      		
    </div>

    <script type="text/javascript" src="app.js"></script>

</html>