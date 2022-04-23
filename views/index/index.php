<section class="innfo">
	<div class="info">
		<div class="container">
			<div class="row">
				<div class="oooo">
				
                                    <?php foreach ($articles as $oneArticle): ?>
                                    <div class="col-8 info__wrapper">
					<div class="info-item__wrapper">
                                            <img src="<?php echo $imagesPath; ?><?=$oneArticle['image_path'];?>" alt="">
						<a class="info-a__wrapper" href="/article/?id=<?=$oneArticle['id'];?>"><p class="info_info"><?=$oneArticle['title'];?></p></a>
						
					</div>
                                    </div>
                                    <?php endforeach; ?>
				
				<div class="col-4  opros__wrapper">
					<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSernxAuzK4rmQY10tDuIjaqngp23VpCkmTcwSPW_uEery-AQQ/viewform?embedded=true" width="330" height="500" frameborder="0" marginheight="0" marginwidth="0">Р—Р°РіСЂСѓР·РєР°вЂ¦</iframe>
				</div>
			</div>
			</div>
		</div>
	</div>
</section>

<section class="mens"> 
	<div class="owner__wrapper">
		<div class="container">
			<div class="row">
				<div class="col-12 owner-all__wrapper">
					<p>Руководители</p>
					<div class="owner-item__wrapper">
						<img src="<?php echo $imagesPath; ?>akem.jpg" alt="">
						<div class="name"><p >Аким города Лисаковска</p></div>
						<div class="vector"><p >Курируемые направления:</p></div>
						<div class="tell"><p >Телефон: 8 (71433) 3-40-50</p></div>
						<div class="mail"><p >E-mail: lisakovsk@kostanay.gov.kz</p></div>
						<div class="vector-text"><p >
							Здравоохранение, Жилищно-коммунальное хозяйство, Финансы, Предпринимательство и сельское хозяйство, Бизнес, Статистическая информация, Социальная защита, Промышленность, Образование, Экономика, Физическая культура и спорт, Культура, Государственные услуги
                                                    </p></div>
						
					</div>
					
				</div>
				
			</div>
		</div>
	</div>

</section>


