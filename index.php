<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud exam</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2>List of register</h2>
        <a class="btn-primary" href="/crud/create.php" role="button">LOGIN NEW</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Create At</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                    $servername ="localhost";
                    $username ="root";
                    $password = "";
                    $database = "exam";


                    $connection = new mysqli($servername, $username, $password, $database);

                    if ($connection->connect_error) {
                        die("Connection failed:" . $connection->connect_error);

                    }

                    $sql = "SELECT * FROM list";
                    $result = $connection->query($sql);

                    if(!$result) {
                          die("invalid query:" . $connection->error);
                    }

                    while ($row = $result->fetch_assoc()){
                        echo "  
                        <tr>
                        <td>$row[id]</td>
                        <td>$row[name]</td>
                        <td>$row[email]</td>
                        <td>$row[phone]</td>    
                        <td>$row[address]</td>
                        <td>$row[created_at]</td>
        
                        <td>
                                <a class='btn btn-primary btn-sm' href='/crud/edit.php?id=$row[id]'>Update</a>
                                <a class='btn btn-primary btn-sm' href='/crud/delete.php?id=$row[id]'>Delete</a>
                        </td>
                        </tr>
                        ";
                    }

                    ?>

             
                </tbody>
        </table>

    </div>
</body>
</html>