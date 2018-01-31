<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title>Foxlabel | Login Page</title>
    <!-- Css Files -->
    <link href="css/root.css" rel="stylesheet">
    <style type="text/css">
        body {
            background: #F5F5F5;
        }
        html, body{
            height: 100%;
            width: 100%
        }
    </style>
</head>
<body >
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8" style="background-image: url(https://www.standard.co.uk/s3fs-public/styles/story_large/public/thumbnails/image/2016/09/16/11/laptop-header.jpg); height: 100vh;">
                
            </div>
            <div class="col-md-4" align="">
                <br>
                 <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                    <h3 align="left">Entre com sua conta</h3>
                    <div class="form-group">
                        <label class="col-sm-2 control-label form-label">Email</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label form-label">Password</label>
                        <div class="col-sm-12">
                            <input type="password" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10 checkbox checkbox-primary padding-l-35">
                            <input id="checkbox103" type="checkbox" checked="">
                            <label for="checkbox103">Remember me</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10 ">
                            <button type="submit" class="btn btn-default">Entrar</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-12 ">
                            <a href="registrar.html" class="">Ainda não possui uma conta? Faça seu cadastro</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>