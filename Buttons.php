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
            <h1>Try different types of Buttons</h1>
            <h3><ul>
                    <li>Basic Button,</li>
                    <li>buttons with contextual colors,</li>
                    <li>buttons in Active & disabled state,</li>
                    <li>use <code>.btn</code> class with "a"(anchor),"button" or "input element"</li>
                </ul>
            </h3>  
            <input type="button" class="btn  btn-info active" name="button" value="Log in"/>
            <input type="button" class="btn btn-info active" name="button" value="Add"/>
            <input type="button" class="btn btn-info active" name="button" value="Refresh"/>
            <input type="button" class="btn btn-info disabled" name="button" value="Delete"/>
            <a class="btn" href="#" active>Link</a>
        </div>
            <div class="container">
            <h2>Different Button Sizes<h2>
            <input type="submit" class="btn btn-lg btn-info" name="submit" value="submit"/>
            <input type="submit" class="btn btn-md btn-info" name="submit" value="submit"/>
            <input type="submit" class="btn btn-sm btn-info" name="submit" value="submit"/>
            <input type="submit" class="btn btn-xs btn-info" name="submit" value="submit"/>
            </div>
    </body>
</html>