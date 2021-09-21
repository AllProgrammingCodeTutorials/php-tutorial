<html>
    <head>
          <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
    </head>
        <body>
            <div class="container col-6">
            <table class="table table-striped table-hover table-bordered">
                <tr>
                    <th>id</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                <tr>
            <?php 
                include 'database.php';

                // ----- code for display data------
                    $q = "SELECT * From employee";
                    $query= mysqli_query($con, $q);
                    while($res = mysqli_fetch_array($query)):
           ?>
                </tr>
                <tr>
                    <td><?php echo $res['id']; ?></td>
                    <td><?php echo $res['username']; ?></td>
                    <td><?php echo $res['password']; ?></td>
                    <td><a href="delete.php?id=<?php echo $res['id'];?>" class="btn btn-danger"> delete </a></td>
                    <td><a href="update.php?id=<?php echo $res['id']; ?>" class="btn btn-info"> edit</a></td>
                </tr>
                <?php endwhile; ?>
            </table>
            </div>
        </body>
</html>