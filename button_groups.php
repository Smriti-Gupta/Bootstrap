
<!DOCTYPE html>
<html>
    <head>
        <title>Bootstrap</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h3 style="color:blue;">Button Groups</h3>
            <div class="btn-group btn-group-lg">
                <button class="btn btn-info" type="button" name="button">Add</button>
                <button class="btn btn-info" type="button" name="button">Modify</button>
                <button class="btn btn-info" type="button" name="button">Delete</button>
            </div>
            <h3 style="color:blue;">Vertical Button Groups</h3>
            <div class="btn-group-vertical">
                <button class="btn btn-info" type="button" name="button">Add</button>
                <button class="btn btn-info" type="button" name="button">Modify</button>
                <button class="btn btn-info" type="button" name="button">Delete</button>
            </div>
            <h3 style="color:blue;">Nested Button Group and Dropdown</h3>
            <div class="btn-group btn-group-lg">
                <button class="btn btn-info" type="button" name="button">Home</button>
                <button class="btn btn-info" type="button" name="button">Log in</button>
                <div class="btn-group btn-group-lg">
                    <button class="btn btn-info dropdown-toggle" data-toggle="dropdown" type="button">Basics <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">HTML</a></li>
                                <li><a href="#">CSS</a></li>
                                <li><a href="#">PHP</a></li>
                            </ul>
                </div>
            </div>    
                <h3 style="color:blue;">Split Button Dropdown</h3>
                <div class="btn-group btn-group-lg">
                <button class="btn btn-info" type="button" name="button">Home</button>
                <button class="btn btn-info" type="button" name="button">Log in</button>
                <div class="btn-group btn-group-lg">
                    <button class="btn btn-info" type="button">Basics</button>
                    <button class="btn btn-info dropdown-toggle" data-toggle="dropdown" type="button"><span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">HTML</a></li>
                                <li><a href="#">CSS</a></li>
                                <li><a href="#">PHP</a></li>
                            </ul>
                </div>
            </div>
        </div>
    </body>
</html>    