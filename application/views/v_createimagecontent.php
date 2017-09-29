<form action="/main/editimages" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label >Имя:</label>
    <input name="name" type="text" class="form-control" value="">
  </div>
  <div class="form-group">
    <p>Изображение</p>
    <input type="file" name="image" placeholder="" value="">
  </div>
  <input type="submit" name="submit">
</form>