<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <style media="screen">
        body{
            background-color: #222;
        }
        form{
            background-color: #ccc;
            margin: 25vh auto;
            padding: 50px 10px;
            width:400px;
            border: solid 1px lightgrey;
            border-radius: 10px;
        }
        .btn-secondary{
            border: solid 1px grey;
        }
        .btn-secondary:hover{
            background-color: #eee;
            box-shadow: red  0 0 2px 2px;
            transition-duration: 0.4s;
        }
    </style>

    <title>Document</title>
</head>
<body>
    <form action="traitement.php" method="post">
        <div class="form-group">
            <label for="inputFirstName">Prénom</label>
            <input type="FirstName" class="form-control" id="inputFirstName" placeholder="Prénom">
        </div>
        <div class="form-group">
            <label for="inputLastName">Nom</label>
            <input type="LastName" class="form-control" id="inputLastName" placeholder="Nom">
        </div>
        <div class="form-group">
            <label for="inputUsername">Nom</label>
            <input type="Username" class="form-control" id="inputUsername" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="inputPassword">Password</label>
            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="submit" class="btn btn-secondary">Reset</button>
    </form>
</body>
</html>
