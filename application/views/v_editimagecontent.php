<!-- ПАНЕЛЬ РЕДАКТИРОВАНИЯ ИЗОБРАЖЕНИЙ -->

<a href="/main/createimage"><button class="btn btn-default">Добавить изображение</button></a>
<br>
<table class="table">
 <thead>
 <tr>
 <th>Имя</th>
 <th>Изображение</th>
 <th>Удалить</th>
 </tr>
 </thead>
 <tbody>
<?php foreach ($images as $image):  ?>
 <tr>
 <td><?php echo $image['name'];  ?></td>
 <td><img width="500" height="300" src="/<?php echo $image['url'];  ?>" alt=""></td>
 <td><a href="/main/deleteimage/<?php echo $image['id'];  ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
 </tr>
<?php endforeach;  ?>

 </tbody>
 </table>