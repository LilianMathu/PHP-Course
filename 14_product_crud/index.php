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
            foreach ($products as $product) {  ?>

            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>

            <?php }   ?>

        </tbody>
    </table>


</body>

</html>