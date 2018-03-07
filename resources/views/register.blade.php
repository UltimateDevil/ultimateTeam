<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    {{--external css--}}
    <link href="http://localhost/ultimateTeam/resources/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="http://localhost/ultimateTeam/resources/assets/css/style.css" rel="stylesheet" type="text/css">

    {{--external js--}}
    <script type="text/javascript" src="http://localhost/ultimateTeam/resources/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="http://localhost/ultimateTeam/resources/assets/js/bootstrapjs.min.js"></script>

</head>
<body>

<div class="fh5co-cover" role="banner" style="background-image:'http://localhost/ultimateTeam/public/resources/assets/images/img_bg_1.jpg';">
    <div class="overlay">
        <div class="loginContainer">
            <div class="loginBox">
                <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong> Indicates a successful or positive action.
                </div>
                <form>
                    <div class="form-group">
                        <label for="name">Name :</label>
                        <input type="text" class="form-control" id="name">
                    </div>

                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" id="email">
                    </div>

                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd">
                    </div>

                    <div class="form-group">
                        <label for="cpwd">Confirm Password:</label>
                        <input type="password" class="form-control" id="cpwd">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
