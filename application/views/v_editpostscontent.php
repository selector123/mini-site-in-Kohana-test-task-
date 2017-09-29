<!-- ПАНЕЛЬ РЕДАКТИРОВАНИЯ НОВОСТЕЙ -->

<a href="/main/create"><button class="btn btn-default">Добавить статью</button></a>
<br>
<table class="table">
 <thead>
 <tr>
 <th>Имя</th>
 <th>Описание</th>
 <th>Изменить</th>
 <th>Удалить</th>
 </tr>
 </thead>
 <tbody>
<?php foreach ($news as $newsitem):  ?>
 <tr>
 <td><?php echo $newsitem['name'];  ?></td>
 <td><?php echo $newsitem['description'];  ?></td>
 <td><a href="/main/edit/<?php echo $newsitem['id'];  ?>"><i class="fa fa-pencil-square" aria-hidden="true"></a></i></a></td>
 <td><a href="/main/delete/<?php echo $newsitem['id'];  ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></td>
 </tr>
<?php endforeach;  ?>

 </tbody>
 </table>