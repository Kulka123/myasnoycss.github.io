 <div class="page-header">
              <h1 id="tables">Админы и VIP сервера</h1>
            </div>

<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>#</th>
      <th>Ник</th>
      <th>Флаги</th>
      <th>Доступ</th>
      <th>Дни</th>
    </tr>
  </thead>
  <tbody>
<?php
@include "./config.php";
$result=mysql_query("SELECT * FROM `amx_amxadmins` ORDER BY `id` ASC LIMIT 50" );// делаем выборку из таблицы
while($row=mysql_fetch_array($result)) { // берем результаты из каждой строки
	echo '

 <tr>
      <td>'.$row['id'].'</td>
      <td>'.$row['nickname'].'</td>
      <td>'.$row['access'].'</td>
      <td>'.$row['flags'].'</td>
      <td>'.$row['days'].'</td>
    </tr>

';// выводим данные
}
?>    


  </tbody>
</table>