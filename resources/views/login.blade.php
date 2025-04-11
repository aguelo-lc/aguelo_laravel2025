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
        <h2 class="text-center">Login</h2>
        <form>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password">
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
        <p class="text-center mt-3"><a href="register.html">Don't have an account? Register</a></p>
    </div>
</body>
</html>
