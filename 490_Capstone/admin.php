<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
      <h1>Welcome Admin</h1>
      <form class="" action="index.html" method="post">
        <label for="AddEmployee"></label>
        <a href="addEmployee.php">  <input type="button" name="AddEmployee" value="Add Employee"><br><br></a>

       <a href="view.php"> <input type="button" name="View Employees" value="View Employees"><br><br></a>
      </form>
			<button type="submit" name="logout"><a href="logout.php">Logout</button>
		
    </div>
  </body>
</html>
