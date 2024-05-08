<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do app - Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="container d-flex justify-contect-center">
        <h1>To Do app - Register</h1> 

        <form action="register-process.php" method="post">

            <div class="form-group">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="" class="form-control">
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Passowrd</label>
                <input type="text" name="password" class="form-control">
            </div>

            <div class="form-group">
                <label for="re-password" class="form-label">Re enter password</label>
                <input type="text" name="re-password" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>
    </div>
    
</body>
</html>