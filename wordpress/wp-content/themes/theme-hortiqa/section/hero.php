<section class="hero">
    <div class="wrapper">
        <div class="hero__inner row">
            <div class="hero__wrapper col-lg-4 col-12">
                <h1 class="hero__title">Croatia’s Largest Garden Center – Now Online</h1>
                <p class="hero__text text">Discover plants, garden tools, and decor with fast delivery and expert guidance. Shop with confidence and bring your green space to life, wherever you are.</p>
                <ul class="hero__items">
                    <li class="hero__item">
                        <?php
                        echo file_get_contents(
                            get_template_directory() . '/assets/img/svg/cheeck.svg'
                        );
                        ?>
                        <span class="hero__icon-text text">Expert Advice</span>
                    </li>
                    <li class="hero__item">
                        <?php
                        $basketIcon = file_get_contents(get_template_directory() . '/assets/img/svg/basket.svg');
                        $basketIcon = str_replace('<svg', '<svg class="hero__basket"', $basketIcon);
                        ?>
                        <?= $basketIcon; ?>


                        <span class="hero__icon-text text">Largest Assortment</span>
                    </li>
                    <li class="hero__item">
                        <?php
                        echo file_get_contents(
                            get_template_directory() . '/assets/img/svg/truck.svg'
                        );
                        ?>
                        <span class="hero__icon-text text">24–48h Delivery</span>
                    </li>
                </ul>
                <div class="hero__content">
                    <a class="hero__shop-link btn btn-lightgreen" href="#">Shop now</a>
                    <a class="hero__shop-link btn" href="#">Get Inspired</a>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <!-- Slider main container -->
                <div class="hero__swiper swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide"><img src="https://media.geeksforgeeks.org/wp-content/uploads/20210915115837/gfg3-300x300.png" alt="GFG image" />
                        </div>
                        <div class="swiper-slide"><img src="https://media.geeksforgeeks.org/wp-content/uploads/20210915115837/gfg3-300x300.png" alt="GFG image" />
                        </div>
                        <div class="swiper-slide"><img src="https://media.geeksforgeeks.org/wp-content/uploads/20210915115837/gfg3-300x300.png" alt="GFG image" />
                        </div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>



                </div>
            </div>


        </div>
    </div>
</section>