<div class="container">
    <div class="row">
      <?php foreach($one_news as $one_news_item): ?>
      <div class="item">
        <div class="thumbnail">
          <img src="http://placehold.it/350x240" alt="">
          <div class="caption">
            <h4 class="center">
              <a href="#"><?php echo $one_news_item['name']; ?></a>
            </h4>
            <p class="center"><?php echo $one_news_item['description']; ?></p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
    <a class="btn btn-primary" href="/"><i class="fa fa-arrow-right" aria-hidden="true"></i>&nbsp;На главную</a>
    </div>
  </div>