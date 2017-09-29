<!-- ФОРМА РЕДАКТИРОВАНИЯ НОВОСТИ -->

<form action="/main/editposts" method="POST">
  <div class="form-group">
    <label >Имя:</label>
    <input name="name" type="text" class="form-control" value="
    <?php echo $news[0]['name']; ?>">
  </div>
  <div class="form-group">
    <label >Описание</label>
    <textarea name="description" id="" cols="30" rows="10" >
    	<?php echo $news[0]['description']; ?>
    </textarea>
    <input name="id" type="hidden" value="<?php echo $id; ?>">
  </div>
  <input type="submit" name="submit">
</form>