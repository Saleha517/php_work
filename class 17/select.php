<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
</head>
<body>
    <?php include('db.php');
    ?>
    <section class = "container">
        <div class = "row">
            <div class = "col-12">
                <a href = "create.php" class = "btn btn-dark">Create User</a>
                <h1>User Data</h1>
                <table class = "table table-primary">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>email</th>
                            <th>CNIC</th>
                            <th>contact</th>
                            <th>address</th>
                        </tr>

                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM user_data";
                        $queryRun = mysqli_query($result , $query);

                        while($GO = mysqli_fetch_assoc($queryRun)){
                            echo "<tr>
                                      <td>".$GO['id']."</td>
                                      <td>".$GO['name']."</td>
                                      <td>".$GO['email']."</td>
                                      <td>".$GO['contact']."</td>
                                      <td>".$GO['CNIC']."</td>
                                      <td>".$GO['address']."</td>
                                      </tr>";
                        }
                        ?>
                    </tbody>

                </table>

            </div>

        </div>

    </section>
</body>
</html>