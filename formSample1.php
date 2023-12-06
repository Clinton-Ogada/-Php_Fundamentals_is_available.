<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <main>
    <form action ="includes/form-handler.php" method = "post">
<label for = "firstname">FirstName</label>
<input required id="firstname" type="text" name="firstname" placeholder="First Name...">
<br>
<label for="lastname" >Last Name: </label>
<input required id="lastname" type="text" name="lastname" placeholder="Last Name...">
<br>
<label fro="favouritepet">Favourite Pet?</label>
<select id="favouritepet" name="favouritepet" >
        <option value="none">None</option>
        <option value="dog">Dog</option>
        <option value="cat">Cat</option>
        <option value="bird">Bird</option>
</select>
<button type="submit">Submit</button>
    </form>
  </main>
</body>
</html>
