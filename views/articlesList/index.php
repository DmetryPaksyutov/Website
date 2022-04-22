
<div>
    
<?php if($articles): ?>
	<?php foreach($articles as $oneArticle): ?>
            <div>
                <<img src="<?=$oneArticle['image_path'];?>"/>
                <h2><?=$oneArticle['title'];?></h2>
		<p><?=$oneArticle['small_text'];?></p>
		<a href="/article/?id=<?=$oneArticle['id'];?>">Перейти >></a>
            </div>
            
	<?php endforeach; ?>
<?php else: ?>
	<h2>Статьи не найдены</h2>
<?php endif; ?>

</div>

<div>
    Переход между стницами
</div>