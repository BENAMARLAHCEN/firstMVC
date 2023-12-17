<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <title>Crud Operation Using PHP and MySQLi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


</head>

<body>
    <div class="signup-form">
        <form method="POST" action="index.php">
            <h2>Fill Data</h2>
            <p class="hint-text">Fill below form.</p>
            <div class="form-group">
                <div class="row">
                    <div class="col"><input type="text" class="form-control" name="firstName" placeholder="First Name" required="true"></div>
                    <div class="col"><input type="text" class="form-control" name="lastName" placeholder="Last Name" required="true"></div>
                </div>
            </div>
    
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Enter your Email id" required="true">
            </div>

            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Enter your password" required="true">
            </div>

            <div class="form-group">
                <input type="date" class="form-control" name="birthday"  required="true">
            </div>
            <!-- <select name="role">
                <option value="client">choise User Role</option>
                <option value="client">Client</option>
                <option value="admin">Admin</option>
            </select> -->

            <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg btn-block" name="submit" value="addUser">Submit</button>
            </div>
        </form>
        <div class="text-center">View Aready Inserted Data!! <a href="index.php">View</a></div>
    </div>
</body>

</html>