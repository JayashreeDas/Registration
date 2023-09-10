<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-4">
                <div class="card-header text-center">
                    <h3>Login</h3>
                </div>

                <div class="card-body">
                    <form action="login_connect.php" method="POST">
                        <div class="row mb-3 text-center mt-3">
                            <div class="col-md-4"><label for="userName" class="form-label">Username/Email</label></div>
                            <div class="col-md-8"><input type="text" class="form-control" id="userName" name="userName" required></div>
                        </div>
                        <div class="row mb-3 text-center">
                            <div class="col-md-4"><label for="password" class="form-label">Password</label></div>
                            <div class="col-md-8"><input type="password" class="form-control" id="password" name="password" required></div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary mt-3" >Login</button>
                            <p class="mt-2">New user?<a href="index.php"><i>Register Here</i></a></p>
                        </div>
                    </form>
                </div>

                <div class="card-footer" style="text-align: right;">
                    &copy; Jayashree Das
                </div>

            </div>
        </div>

    </div>
</div>
    
</body>
</html>