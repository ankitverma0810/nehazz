<section>
    <div id="wowslider-container1">
        <div class="ws_images">
            <ul>
                <?php foreach($banners as $banner): ?>
                    <li><a href="<?php echo  $banner['Banner']['url']; ?>"><?php echo $this->Html->image('/files/banners/'.$banner['Banner']['filename']); ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="ws_shadow"></div>
    </div>
    <script type="text/javascript" src="engine1/wowslider.js"></script>
    <script type="text/javascript" src="engine1/script.js"></script>
    <!-- End WOWSlider.com BODY section -->
</section>

<section id="services">
    <div class="gray">
        <div class="wrap">
            <?php echo $page['Page']['description']; ?>
            <div class="both"></div>
        </div>
    </div>
</section>

<h2 class="page-title1">OUR SPECIALITY</h2>
<section id="portfolio">
    <div class="inner">
        <ul id="rb-grid" class="list rb-grid">
            <?php foreach($specialities as $speciality): ?>
                <li>
                    <a class="item" href="<?php echo $speciality['Speciality']['url'] ?>">
                        <?php echo $this->Html->image('/files/speciality/'.$speciality['Speciality']['filename']); ?>
                        <div class="over">
                            <h2 class="page-title"><?php echo $speciality['Speciality']['title'] ?><span class="border"></span></h2>
                            <h3 class="page-subtitle">
                                <?php echo $speciality['Speciality']['description'] ?>
                            </h3>
                        </div>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>

<section id="clients" class="section clients">
    <div class="container">
        <!--section header -->
        <div class="header">
            <div class="row">
                <div class="col-xs-12">
                    <h2>Our Happy Clients</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div style="display: block; opacity: 1;" id="testimonials" class="owl-carousel owl-theme">
                <div class="owl-wrapper-outer">
                    <div style="display: block;" class="owl-wrapper">
                        <?php foreach($testimonials as $testimonial): ?>
                            <div style="width: 470px;" class="owl-item">
                                <div class="item">
                                    <div class="box testimonials">
                                        <?php echo $this->Html->image('/files/testimonial/'.$testimonial['Testimonial']['filename']); ?>
                                        <blockquote>
                                            <p><?php echo $testimonial['Testimonial']['description']; ?></p>
                                        </blockquote>
                                        <div class="author"> <strong><?php echo $testimonial['Testimonial']['author']; ?></strong></div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>  
            </div>  
        </div>
    </div>
</section>