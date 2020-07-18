<?php get_header(); ?>


<section class="slider">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-filter"></div>
                <img src="https://www.skanska.pl/globalassets/externalcontent2/project/portland-public-schools-franklin-high-school-renovation/9f1146bd-a02a-4174-a4f0-86c6df2f46fb.1.jpg?download" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-inline-flex">
                    <div class="caption-title display-4 py-5 text-right flex-center-vert">
                        Zapoznaj się z zasadami rekrutacji do naszej szkoły!
                    </div>
                    <div class="vl"></div>
                    <p class="caption-content py-5 flex-center-vert text-left">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus euismod condimentum. 
                        Donec pharetra lorem sit amet ligula semper dignissim a in ipsum. 
                        Duis placerat ante vitae orci aliquet congue. 
                        Sed ultricies urna volutpat justo vehicula, ut varius dolor vestibulum. 
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-filter"></div>
                <img src="https://via.placeholder.com/1920x1080.jpg?text=Drugi+slide" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-filter"></div>
                <img src="https://via.placeholder.com/1920x1080.jpg?text=Trzeci+slide" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

<section class="blog mt-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col text-center">
                <div class="display-4">
                    Najnowsze aktualności
                </div>
                <hr>
            </div>
        </div>
    </div>
</section>


<!-- <?php get_template_part('includes/section', 'content'); ?> -->

<?php get_footer(); ?>