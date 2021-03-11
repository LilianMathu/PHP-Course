<?php
//Database setup

//For the database, use PDO  (PHP Data Objects).
/*Start by creating an instance of the PDO class. and pass the following arguments.
    1. dsn:string ->connection string (host, port, database name)
    2. user
    3. Password
->Also specify what happens if the connection was not successful

*/
$pdo = new PDO('mysql:host=localhost; port=3306; dbname=products', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

/*
Query strings (get method)
 example of a query string without data input
?image=&title=&description=&price=


An example of a query string with data input
image=&title=Engine+oil&description=Shell+&price++++=300


A query string starts with a question mark (?) 
It is a key value pairs separated with & statements

    image =  
    title = 
*/


/*
-GET method is best used when creating a search form. 
-Never use GET when submitting usernames and passwords, or data you might want to change later

*/


/*
SUPERGLOBALS
They are variables. In the naming, they start with an underscore

1. $_GET
-Information in the query string can be accessed using this superglobal

2. $_POST
-
*/

$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$date = date('Y-M-D h:i:s');

//insert to the database must be strings. which is why the values are in strings Price can be exempted because it is an INT

$pdo-> exec("INSERT INTO products (title, description, image, price, create_date)
                VALUE('$title','$description', '', $price, '$date' )  
        ");
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="app.css">

    <title>Create a Product</title>
</head>

<body>
    <h1>Create a Product</h1>
    <!-- The action attribute specifies where the form should be submitted -->

    <form action="create.php" method="post">       
        <div class="form-group">
            <label>Product image</label> <br>
            <input type="file" name="image" >
        </div>

        <div class="form-group">
            <label>Product title</label>
            <input type="text" class="form-control" name="title" >
        </div>

        <div class="form-group">
            <label>Product description</label>
            <textarea class="form-control" name="description" ></textarea>
        </div>

        <div class="form-group">
            <label>Product price</label>
            <input type="number" step=".01" class="form-control" name="price    " >
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</body>

</html>