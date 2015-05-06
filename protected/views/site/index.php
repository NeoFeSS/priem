    <h1 style="text-align: center;">ПРИЕМНАЯ КОМИССИЯ
    </h1>
    <ul>
    Выберите таблицу:
    <br /><br />
        <li><a href="/site/students">Таблица "Студенты"</a></li> <br />
        <li><a href="/site/Kafedrs">Таблица "Кафедры"</a></li>
    </ul>
    <div style="width: 210px; margin: auto">
        <hr />
        <h1 style="font-size: 16px; text-align: center;">Таблица "Преподаватели"</h1>
        <hr />
    </div>
    <table border="1" cellspacing="0" style="margin: 0 auto;">
        <tr>
            <th>ID</th>
            <th>Имя</th>
            <th>Фамилия</th>
        </tr>
        
        <?php foreach($Preps as $prep){ ?>
        <tr>
            <td><?= $prep->idprep; ?></td>
            <td><?= $prep->pname; ?></td>
            <td><?= $prep->pfam; ?></td>
        </tr>
        <?php } ?>
    </table>
