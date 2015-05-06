<ul>
    <li><a href="/site/index">Таблица "Преподаватели"</a></li> <br />
    <li><a href="/site/Kafedrs">Таблица "Кафедры"</a></li>
</ul>

<div style="width: 370px; margin: auto;">
    <hr />
    <b><p style="text-align: center;">Таблица "Студенты"</p></b>
    <hr />
    <table border="1" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Отчество</th>
            <th>Пол</th>
        </tr>
        <?php foreach ($Students as $studs){ ?>
        <tr>
            <td><?=$studs->idstud;?></td>
            <td><?=$studs->sname;?></td>
            <td><?=$studs->sfam;?></td>
            <td><?=$studs->sotch;?></td>
            <td><?=((boolean)$studs->ssex)?'М':'Ж';?></td>
        </tr>
        <?php } ?>
    </table>
</div>