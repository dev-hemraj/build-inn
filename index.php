<!-- HEADER OPEN -->
<?php include('shared/header.php'); ?>
<!-- HEADER CLOSE -->

<!-- ==================   HERO Section Open   ===================== -->
<section class="hero">
    <!-- Swiper -->
    <div class="swiper hero__slide">
        <div class="swiper-wrapper">
            <div class="swiper-slide hero__slide__item">
                <img src="assets/images/banner.jpg" alt="">
                <div class="hero__slide__item__caption">
                    <h1>Da construção à reabilitação, <br>
                        o nosso projeto é criar
                        <span>a casa dos seus sonhos.</span>
                    </h1>
                    <div class="heroBtn">
                        <a href="#" class="heroBtn__link">Ver projectos
                        </a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide hero__slide__item">
                <img src="assets/images/banner.jpg" alt="">
                <div class="hero__slide__item__caption">
                    <h1>Da construção à reabilitação, <br>
                        o nosso projeto é criar
                        <span>a casa dos seus sonhos.</span>
                    </h1>
                    <div class="heroBtn">
                        <a href="#" class="heroBtn__link">Ver projectos
                        </a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide hero__slide__item">
                <img src="assets/images/banner.jpg" alt="">
                <div class="hero__slide__item__caption">
                    <h1>Da construção à reabilitação, <br>
                        o nosso projeto é criar
                        <span>a casa dos seus sonhos.</span>
                    </h1>
                    <div class="heroBtn">
                        <a href="#" class="heroBtn__link">Ver projectos
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next" id="swiper-button-next"></div>
        <div class="swiper-button-prev" id="swiper-button-prev"></div>

        <div class="swiper-pagination"></div>
        <div class="hero__slide__indicator">
            <div id="indicator"></div>
        </div>

    </div>
</section>
<!-- ==================   HERO Section Close   ===================== -->

<!-- ==================    Projectos Section Open   ===================== -->
<section class="projectos">
    <div class="container-fluid">
        <div class="projectos__heading heading" data-aos="fade-up" data-aos-duration="800">
            <h2>Projectos</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 mt-5 p-md-0">
                <ul class="projectos__tabs nav nav-pills mb-3 justify-content-center gap-5" id="pills-tab"
                    role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-actuais-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-actuais" type="button" role="tab" aria-controls="pills-actuais"
                            aria-selected="true">Projectos actuais</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-concluidos-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-concluidos" type="button" role="tab" aria-controls="pills-concluidos"
                            aria-selected="false">projectos coNCluídos</button>
                    </li>
                </ul>
                <div class="projectos__content tab-content" id="pills-tabContent">
                    <div class="projectos__content__pane tab-pane fade show active" id="pills-actuais" role="tabpanel"
                        aria-labelledby="pills-home-tab" tabindex="0">
                        <div class="project__inner">
                            <div class="tabItem">
                                <div class="tabImg">
                                    <img src="assets/images/tab-imag1.jpg" alt="">
                                </div>
                                <div class="tabText">
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                    <h4>santo amaro palace</h4>
                                </div>
                            </div>
                            <div class="tabItem">
                                <div class="tabImg">
                                    <img src="assets/images/tab-img2.jpg" alt="">
                                </div>
                                <div class="tabText">
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                    <h4>santo amaro palace</h4>
                                </div>
                            </div>
                            <div class="tabItem">
                                <div class="tabImg">
                                    <img src="assets/images/tab-img3.jpg" alt="">
                                </div>
                                <div class="tabText">
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                    <h4>varandas do atlântico
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="projectos__content__pane tab-pane fade" id="pills-concluidos" role="tabpanel"
                        aria-labelledby="pills-concluidos-tab" tabindex="0">
                        <div class="project__inner">
                            <div class="tabItem">
                                <div class="tabImg">
                                    <img src="assets/images/tab-imag1.jpg" alt="">

                                </div>
                                <div class="tabText">
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                    <h4>santo amaro palace</h4>

                                </div>

                            </div>

                            <div class="tabItem">
                                <div class="tabImg">
                                    <img src="assets/images/tab-img2.jpg" alt="">
                                </div>
                                <div class="tabText">
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                    <h4>santo amaro palace</h4>
                                </div>
                            </div>

                            <div class="tabItem">
                                <div class="tabImg">
                                    <img src="assets/images/tab-img3.jpg" alt="">
                                </div>
                                <div class="tabText">
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                    <h4>varandas do atlântico
                                    </h4>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==================    Projectos Section Close   ===================== -->



<!-- ==================   Sobre nós Section Open   ===================== -->
<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="about__left">
                    <div class="about__left__backimage d-flex justify-content-md-end" data-aos="fade-up"
                        data-aos-duration="800">
                        <img src="assets/images/about-back.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="about__left__frontimage" data-aos="fade-down" data-aos-duration="800">
                        <img src="assets/images/about-front.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mt-4 mt-md-0">
                <div class="about__right">
                    <div class="about__right__heading heading" data-aos="fade-up" data-aos-duration="800">
                        <h2>Sobre <span>nós</span></h2>
                    </div>

                    <p data-aos="fade-up" data-aos-duration="800">
                        A BUILD INN acompanha o desenvolvimento do mercado imobiliário em Portugal, sendo a ampliação e
                        consolidação de empresas com mais de 3 décadas de sucesso no mercado imobiliário de gama alta
                        (DIAS & CUNHA e MENDES & CUNHA); <br><br>

                        A DIAS & CUNHA e MENDES & CUNHA são empresas familiares que vem atuando no desenvolvimento e
                        construção de empreendimentos imobiliários residenciais nos melhores locais em toda a linha de
                        Cascais e Oeiras; <br><br>

                        A BUILD INN vem assim consolidar a aposta em novas tecnologias, crescimento e modernização do
                        mercado imobiliário, pretendendo estimular e ajudar na reinvenção deste mercado.
                    </p>
                    <div class="aboutBtn">
                        <a href="#" class="aboutBtnLink">saber mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==================   Sobre nós Section Close   ===================== -->


<!-- ==================   Como Trabalhhamos Section Open   ===================== -->
<section class="howWork">
    <div class="container">
        <div class="heading" data-aos="fade-up" data-aos-duration="800">
            <h2>Como <span>Trabalhamos</span></h2>
        </div>
        <div class="row mt-5">
            <div class="col-12 col-md-3 mb-3 mb-md-0 p-md-0">
                <div class="howWork__item">
                    <div class="howWork__item__img">
                        <img src="assets/images/how.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="howWork__item__text">
                        <h4>Lorem ipsum </h4>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-3 mb-3 mb-md-0 p-md-0">
                <div class="howWork__item">
                    <div class="howWork__item__img">
                        <img src="assets/images/how.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="howWork__item__text">
                        <h4>Lorem ipsum </h4>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 mb-3 mb-md-0 p-md-0">
                <div class="howWork__item">
                    <div class="howWork__item__img">
                        <img src="assets/images/how.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="howWork__item__text">
                        <h4>Lorem ipsum </h4>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 mb-3 mb-md-0 p-md-0">
                <div class="howWork__item">
                    <div class="howWork__item__img">
                        <img src="assets/images/how.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="howWork__item__text">
                        <h4>Lorem ipsum </h4>
                    </div>
                </div>
            </div>






        </div>
    </div>
</section>
<!-- ==================   Como Trabalhhamos Section Close   ===================== -->

<!-- ==================  CTA Section Open   ===================== -->
<section class="ctaHome">

    <div class="container">
        <div class="row">
            <div class="col-12 ctaHome__box">
                <div class="ctaHome__box__info" data-aos="fade-up" data-aos-duration="800">
                    <h3>
                        Contacte-nos e
                        <span>realize o seu projeto</span>
                    </h3>
                    <p>Da construção à reabilitação, o nosso projeto é criar a casa dos seus sonhos.</p>
                    <div class="ctaBtn">
                        <a href="#" class="ctaBtn__link">saber mais</a>
                    </div>

                </div>

                <div class="topRct"></div>
                <div class="btnRct"></div>
            </div>
        </div>
    </div>
</section>
<!-- ==================  CTA Section Close   ===================== -->



<!-- HEADER OPEN -->
<?php include('shared/footer.php'); ?>
<!-- HEADER CLOSE -->