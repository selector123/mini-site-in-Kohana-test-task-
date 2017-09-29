<!--Галерея-->
<?php foreach ($images as $image):  ?>
<div class="col-md-3 gallery-bts">
<a class="example-image-link" href="/<?php echo $image['url']; ?>" data-lightbox="example-<?php echo $image['id']; ?>">
<img class="example-image" src="/<?php echo $image['url']; ?>" alt="<?php echo $image['name']; ?>">
</a>
<div class="clearfix"></div>
</div>
<?php endforeach;  ?>