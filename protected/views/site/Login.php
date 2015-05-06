<!DOCTYPE html>
<html>
    <head>
        <title>Приемная комиссия - авторизация</title>
        <link rel='stylesheet' href='/css/bootstrap.min.css' type='text/css' media='all'>
        <link rel='stylesheet' href='/css/bootstrap-theme.min.css' type='text/css' media='all'>
    </head>
    
    <body>
    
    <body>
         <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="http://site.com/site/Abiturient">Главная</a>
            </div>
        
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="http://site.com/site/Login">Авторизация <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Link</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    
        <div class="panel panel-primary col-sm-4" style="margin: 1% 35%;">
            <br/>
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="mail" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="mail" placeholder="Email">
                        </div>
                </div>
                <div class="form-group">
                    <label for="pass" class="col-sm-2 control-label">Пароль</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="pass" placeholder="Пароль">
                        </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Запомнить меня
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Подтвердить</button>
                    </div>
                </div>
            </form>
        </div>
    </body>