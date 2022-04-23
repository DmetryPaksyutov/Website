
<section class="events">
    <div class="container">
	<div class="row">
            <?php if((isset($articles)) && (count($articles) > 0) ): ?>
                <?php foreach($articles as $oneArticle): ?>
                    <div class="col-12 events__wrapper">
                        <div class="event-item__wrapper">
                            <a href="statiy.html" class="silca">
                                <img src="<?php echo $imagesPath; ?><?=$oneArticle['image_path'];?>" alt="" >
                                <p>
                                   <?=$oneArticle['title'];?> 
                                </p>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <h2>Статьи не найдены</h2>
            <?php endif; ?>
	</div>
    </div>
</section>
