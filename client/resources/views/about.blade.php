<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('header')
</head>

<body>
    <!-- start banner Area -->
    <section class="banner-area relative about-banner" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        À PROPOS
                    </h1>
                    <p class="text-white link-nav"><a href="index.html">Acceuil </a> <span
                            class="lnr lnr-arrow-right"></span> <a href="about.html">À Propos</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    {{-- smal introduction about cabinet --}}
    <div class="whole-wrap">
        <div class="container">
            <div class="section-top-border">
                <h3 class="mb-30">CENTRE DENTAIRE Dr.Asmae ELBAKKALI ETTAHERI</h3>
                <div class="row">
                    <div class="col-lg-12">
                        <blockquote class="generic-blockquote">
                            “Recently, the US Federal government banned online casinos from operating in America by
                            making it illegal to transfer money to them through any US bank or payment system. As a
                            result of this law, most of the popular online casino networks such as Party Gaming and
                            PlayTech left the United States. Overnight, online casino players found themselves being
                            chased by the Federal government. But, after a fortnight, the online casino industry came up
                            with a solution and new online casinos started taking root. These began to operate under a
                            different business umbrella, and by doing that, rendered the transfer of money to and from
                            them legal. A major part of this was enlisting electronic banking systems that would accept
                            this new clarification and start doing business with me. Listed in this article are the
                            electronic banking”
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Start home-about Area -->
    <section class="home-about-area section-gap relative">
        <div class="container">
            <div class="row align-items-center justify-content-end">
                <div class="col-lg-6 no-padding home-about-right">
                    <h1 class="text-white">
                        Dr.Asmae ELBAKKALI <br>
                        ETTAHIRI
                    </h1>
                    <p>
                        Dr. Asmae ELBAKKALI ETTAHIRI est une dentiste qualifiée, spécialisée en soins dentaires. Elle
                        offre
                        une gamme complète de services, y compris les nettoyages dentaires, les traitements des caries,
                        les
                        extractions, ainsi que les soins esthétiques tels que le blanchiment des dents et la pose de
                        facettes.
                        Dr. ELBAKKALI s'engage à fournir des soins de haute qualité tout en veillant au confort et au
                        bien-être de ses patients.
                    </p>

                </div>
            </div>
        </div>
    </section>

    <div class="whole-wrap">
        <div class="container">

            <section class="section-top-border">
                <div class="col-md-12 pb-40 header-text text-center">
                    <h1 class="pb-10">Gallery</h1>
                </div>
                <div class="row gallery-item">
                    <div class="col-md-4">
                        <a href="img/elements/img1.jpeg" class="img-gal">
                            <div class="single-gallery-image" style="background: url(img/elements/img1.jpeg);"></div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="img/elements/img2.jpeg" class="img-gal">
                            <div class="single-gallery-image" style="background: url(img/elements/img2.jpeg);"></div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="img/elements/img3.jpeg" class="img-gal">
                            <div class="single-gallery-image" style="background: url(img/elements/img3.jpeg);"></div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="img/elements/img4.jpeg" class="img-gal">
                            <div class="single-gallery-image" style="background: url(img/elements/img4.jpeg);"></div>
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- End home-about Area -->
    <br>
</body>
@include('footer')

</html>