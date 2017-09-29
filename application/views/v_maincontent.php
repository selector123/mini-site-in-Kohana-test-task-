<div class="container">
    <div class="row masonry" data-columns>
      <?php foreach($news as $newsitem): ?>
      <div class="item">
        <div class="thumbnail">
          <img src="http://placehold.it/350x240" alt="">
          <div class="caption">
            <h4>
              <a href="#"><?php echo $newsitem['name']; ?></a>
            </h4>
            <p><?php echo $newsitem['description']; ?></p>
            <a class="btn btn-primary" href="/main/news/<?php echo $newsitem['id']; ?>"><i class="fa fa-arrow-right" aria-hidden="true"></i>&nbsp;Перейти к новости</a>
          </div>
        </div>
      </div>
        <?php endforeach; ?>
    </div>
  </div>