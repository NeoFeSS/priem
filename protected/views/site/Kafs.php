<ul>
    <li><a href="/site/index">Таблица "Преподаватели"</a></li> <br />
    <li><a href="/site/Students">Таблица "Студенты"</a></li>
</ul>

<div style="width: 400px; margin: auto;">
    <hr />
    <b><p style="text-align: center;">Таблица "Кафедры"</p></b>
    <hr />
    <table border="1" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>№ Факультета</th>
            <th>Название Кафедры</th>
            <th>Зав. кафедры</th>
        </tr>
        <?php foreach ($Kafedrs as $kafs){ ?>
        <tr>
            <td><?=$kafs->idkaf;?></td>
            <td><?=$kafs->idfak;?></td>
            <td><?=$kafs->knazv;?></td>
            <td><?=$kafs->zavkaf;?></td>
        </tr>
        <?php } ?>
    </table>
<div style="width: 370px; margin: auto;">