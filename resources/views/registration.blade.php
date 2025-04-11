<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">  <!-- Local Bootstrap -->
        <link href="css/styles.css" rel="stylesheet">        <!-- Custom Styles -->
    </head>
    
<body>
    <div class="container">
        <h2 class="text-center">Register</h2>
        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter full name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password">
            </div>
            <div class="mb-3">
                <label for="confirm-password" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirm-password" placeholder="Confirm password">
            </div>
            <button type="submit" class="btn btn-primary w-100">Register</button>
        </form>
        <p class="text-center mt-3"><a href="login.html">Already have an account? Login</a></p>
    </div>
</body>
</html>
