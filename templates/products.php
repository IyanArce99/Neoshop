               <div class="products">
                    <!-- TODO: Desarrollar el marcado para los productos -->
                    <div class="container">
                        <h2 class="products__title">Productos</h2>
                        <div class="row">
                            <?php $products = getJSON('products'); ?>
                            <?php foreach($products['data'] as $index=>$product) : ?>

                                        <?php if($index == 4) : ?>
                                        <div class="col-sm-6 col-lg-8">
                                            <div class="cta" style="background-image: url('resources/cta/cta2.jpg'); "> </div>
                                        </div>
                                        <?php endif;?>

                                        <?php if($index == 7) : ?>
                                        <div class="col-lg-8">
                                            <div class="cta" style="background-image: url('resources/cta/cta2.jpg'); "> </div>
                                        </div>
                                        <?php endif;?>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="product">

                                        <div class="product__thumbnail">
                                            <a href="<?php echo $product['button_link']?>"><img src="<?php echo $product['image']?>" class="product__image"/></a>
                                        </div>
                                        <div class="product__caption js-matchHeight--product-caption">
                                            <a href="<?php echo $product['button_link']?>"><h3 class="product__title"><?php echo $product['name']?></h3></a>
                                            <span class="product__price"><?php echo $product['price']?></span>
                                        </div>
                                        <div class="product__footer">
                                            <a href="<?php echo $product['button_link']?>" class="button"><?php echo $product['button_text']?></a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                </div><!-- .products -->

                <div class="load">
                    <!-- TODO: BONUS. Desarrollar la funcionalidad para que el botón cargue más productos -->
                    <span class="load__button button">Cargar más productos</span>
                </div><!-- .load -->