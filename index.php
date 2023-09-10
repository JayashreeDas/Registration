<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    
</head>
<body>
    <div class="container mt-4">
        <div class="row justify-content-center ">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header text-center">
                        <h2>Registration Form</h2>
                    </div>

                    <div class="card-body">
                        
                        <form action="connect.php" method="post" >
                            <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName" class="form-label" >First Name </label>
                                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name"required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName" class="form-label">Last Name </label>
                                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name"required>
                            </div>

                            </div>

                            
                            <div class="mb-3">
                                <label for="email" class="form-label">Email </label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password </label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                            </div>

                            <div class="mb-3 ">
                                <label class="form-label">Gender</label>
                                <div >
                                <input type="radio" id="male" name="gender" value="male">
                                <label for="male"><i>Male</i></label>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" id="female" name="gender" value="female">
                                <label for="female"><i>Female</i></label>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" id="other" name="gender" value="other">
                                <label for="other"><i>Other</i></label>
                                </div>
                             
                            </div>

                            
                            <div class="text-center">
                            <button type="submit" class="btn btn-primary" >Register</button>
                            <p class="mt-1"><i>Already and existng user?</i><a href="login.php"> Login Here!</a></p>
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