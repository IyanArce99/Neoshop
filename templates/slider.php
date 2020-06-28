<div class="slider js-slider">
    <!-- TODO: Desarrollar el marcado para el slider -->
    <?php $data = getJSON('slides'); ?>

    <?php foreach($data['data'] as $slide) : ?>
        <div class="slider__item" style="background-image: url(<?php echo $slide['bg_image']; ?>)">
            <div class="container">
                <div class="col-10 col-sm-12 offset-1 offset-sm-0">
                    <div class="slider__item-content">
                        <h1 class="slider__title"><?php echo $slide['title'];?></h1>
                        <a href='' class='button'>Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    <?php   endforeach; ?>
</div><!-- .slider -->