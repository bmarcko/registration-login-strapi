<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<title>Registration Form</title>
</head>
<body>
<h1>Registration Form</h1>

        <form method="POST" action="register.php">
            <div class="form-group row">
                <label for="Username" class="col-sm-2 col-form-label">Username:</label>
                <div class="col-sm-4">
                <input type="text" class="form-control" id="Username" name="Username" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email:</label>
                <div class="col-sm-4">
                <input type="text" class="form-control" id="email" name="email" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">Password:</label>
                <div class="col-sm-4">
                <input type="text" class="form-control" id="password" name="password" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="confirm_password" class="col-sm-2 col-form-label">Confirm Password:</label>
                <div class="col-sm-4">
                <input type="text" class="form-control" id="confirm_password" name="confirm_password" required>
                </div>
            </div>
            <button id="submit"  type="submit" class="btn btn-primary mb-2" href="register.php">Submit</button>
        </form>

</body>
</html>