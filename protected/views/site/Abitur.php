<!DOCTYPE html>
<html>

    <head>
        <title>Приемная комиссия - главная</title>
        <link rel='stylesheet' href='/css/bootstrap.min.css' type='text/css' media='all'>
        <link rel='stylesheet' href='/css/bootstrap-theme.min.css' type='text/css' media='all'>
    </head>
    
    <body>
         <nav class="navbar navbar-static-top navbar-inverse">
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
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        
        <div class="col-md-2 panel panel-success">
           <form role="form" style="margin: 10px 0 0 0;">
                <label>Выберите таблицу:</label>
                <select class="form-control">
                     <option>Таблица 1</option>
                     <option>Таблица 2</option>
                     <option>Таблица 3</option>
                     <option>Таблица 4</option>
                     <option>Таблица 5</option>
                </select>
           </form>
           <hr class="alert-danger"/>
           <form role="form">
                <label>Выберите столбцы:</label>
                <div class="checkbox">
                    <label><input type="checkbox">Дата регистрации</label> <br />
                    <label><input type="checkbox">Код</label> <br />
                    <label><input type="checkbox">Имя</label> <br />
                    <label><input type="checkbox">Фамилия</label> <br />
                </div>
                <button type="submit" class="btn btn-success">Открыть</button>
           </form>
           <hr class="alert-danger"/>
        </div>

        <div class="panel panel-primary col-md-10">
            <div class="page-header">
                <h1>ТАБЛИЦА: <small>Абитуриенты</small></h1>
            </div>
                
            <div class="container-fluid">
                <table class="table table-striped table-hover table-bordered">
                    <tr class="fixed">
                        <th>Дата регистрации</th>
                        <th>Код</th>
                        <th>Имя</th>
                        <th>Фамилия</th>
                        <th>Отчество</th>
                        <th>Пол</th>            
                    </tr>
                    <?php foreach ($Abiturient as $abitur){ ?>
                    <tr>
                        <td><?=$abitur->DataReg;?></td>
                        <td><?=$abitur->Kod;?></td>
                        <td><?=$abitur->Imy;?></td>
                        <td><?=$abitur->Fam;?></td>
                        <td><?=$abitur->Otch;?></td>
                        <td><?=$abitur->Pol;?></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </body>
    
    <footer>
      <div class="panel-footer" style="text-align: center;">Приемная комиссия ЧВВМУ - 2015</div>
    </footer>
    
</html>