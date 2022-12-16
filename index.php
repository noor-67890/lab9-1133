<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Lab8</title>
    </head>
    <body>
        <h1>Noor</h1>
        <form action="auth.php" method="get">
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" name="email" id="email">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" name="password" id="pwd">
        </div>
         <div class="form-check">
            <input type="radio" class="form-check-input" id="radio1" name="radio" value="option1" checked>
            <label class="form-check-label" for="radio1">First Radio</label>
        </div>
        <div class="form-check">
            <input type="radio" class="form-check-input" id="radio2" name="radio" value="option2">
            <label class="form-check-label" for="radio2">Second Radio</label>
        </div>
        <div class="form-check">
            <input type="radio" class="form-check-input" name="radio" value="option3">
            <label class="form-check-label">Third disabled radio</label>
        </div>
        <div class="checkbox">
            <label><input type="checkbox" name="checkbox">Example Checkbox</label>
        </div>
        
        <button type="submit" class="btn btn-default">Sign In</button>
    </form>
    </body>
</html> 