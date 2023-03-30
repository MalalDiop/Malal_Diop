<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Acceuil</title>
</head>
<body style="background-image: url('pexels-cleyton-ewerton-3007322.jpg');">
    <div class="container">
        <div class="card">
            <div class="card_header mt-4" style="height:80px;  background-color : #140344 ;">
                <a href="{{route('login')}}" class="btn btn-primary float-right mr-4 mt-4">Inscription</a>
                <a href="" class="btn btn-primary float-right mr-4 mt-4">Chauffeurs</a>
                <a href="" class="btn btn-primary float-right mr-4 mt-4">Passagers</a>
                <a href="" class="btn btn-primary float-right mr-4 mt-4">A propos</a>
            </div>
            <div class="card-body">
                <span>Comment u  va</span>
            </div>
        </div>
    </div>
</body>
</html>