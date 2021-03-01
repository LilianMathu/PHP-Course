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
SELECT statements in the database. 
You can use exec() statements, but is recommended to use prepare statements with SELECT query
the prepare method returns a statement which is an instance of $pdo statement.
Call execute on the statement, which will make the query on the database.


*/
$statement = $pdo->prepare('SELECT * FROM products ORDER BY create_date DESC');
$statement->execute();
$products = $statement->fetchAll(PDO::FETCH_ASSOC);          //records in this table will be fetched as associative arrays.

/*
Iterate the elements and display them in the table
*/

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

    <title>Products CRUD</title>
</head>

<body>
    <h1>Products CRUD</h1>

    <p>
        <a href="create.php" class="btn btn-success" >Create Product</a>
    </p>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Create_Date</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>

            <?php
            foreach ($products as $i => $product) :  ?>

            <tr>
                <th scope="row"><?php echo $i + 1  //because the iterations start with zero, and you don't want the table to start with a zero ?></th>
                <td></td>
                <td><?php echo $product['title'] ?></td>
                <td><?php echo $product['price'] ?></td>
                <td><?php echo $product['create_date'] ?></td>
                <td>
                    <button type="button" class="btn btn-sm btn-outline-primary">Edit</button>
                    <button type="button" class="btn btn-sm  btn-outline-danger">Delete</button>
                </td>

            </tr>

            <?php endforeach;   ?>

        </tbody>
    </table>


</body>

</html>