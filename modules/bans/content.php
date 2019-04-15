 <div class="page-header">
              <h1 id="tables">Последние 50 банов с Бан Листа</h1>
            </div>

<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>#</th>
      <th>Ник</th>
      <th>Причина</th>
      <th>Забанен</th>
      <th>Имя админа</th>
    </tr>
  </thead>
  <tbody>
<?php
@include "./config.php";
$result=mysql_query("SELECT * FROM `amx_bans` ORDER BY `bid` ASC LIMIT 50" );// делаем выборку из таблицы
while($row=mysql_fetch_array($result)) { // берем результаты из каждой строки
	echo '

 <tr>
      <td>'.$row['bid'].'</td>
      <td>'.$row['player_nick'].'</td>
      <td>'.$row['ban_reason'].'</td>
      <td>'.$row['ban_length'].'</td>
      <td>'.$row['admin_nick'].'</td>
    </tr>

';// выводим данные
}
?>    


  </tbody>
</table>