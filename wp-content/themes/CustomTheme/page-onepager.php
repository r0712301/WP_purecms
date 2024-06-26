<?php 
    get_header('onepager');

    ?>
    <div class="hero pb-0 mt-0">
        <video id="myVideo" autoplay muted loop plays-inline>
            <source src="/wp-content/themes/CustomTheme/assets/Detail_Ridez_Video.mp4#t=7,70" type="video/mp4">
        </video>
        <div class="content align-content-center">
            <img src="/wp-content/themes/CustomTheme/assets/Detail-ridez-logo.png" alt="Detail Ridez logo">
            <div>
                <a href="#"><button id="left" class="btn buttons-over-img" ><i class="bi bi-arrow-down px-1"></i>ONTDEK ONZE DIENSTEN</button></a>
                <a href="#"><buttonv id="right" class="btn buttons-over-img">MAAK EEN AFSPRAAK</button></a>
            </div>
        
        </div>
        <div id="under-hero" class="mycontainer">
            <div  class="row mt-4">
                <div class="col-lg-4">
                    <h3 class="text-white align-content-center" ><img src="/wp-content/themes/CustomTheme/assets/icons8-dollar-50.png" alt="icon dollar" width="50px" height="50px"> KWALITEIT</h3>
                    <p class="text-white">Bij ons staat kwaliteit voorop. Elk voertuig wordt behandeld met de hoogste precisie en expertise. Daarnaast wordt elk uitgevoerd werk nauwlettend opgevolgd.</p>

                </div>
                <div class="col-lg-4">
                    <h3 class="text-white align-content-center"><svg xmlns="http://www.w3.org/2000/svg" height="50px" stroke-width="1.5" viewBox="0 0 24 24" stroke="#FBB041FF" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="m12 3 3 6 6 3-6 3-3 6-3-6-6-3 6-3z"></path></svg>
                    SERVICE</h3>
                    <p class="text-white">Klanttevredenheid is onze drijfveer en wij streven enkel naar het perfecte resultaat. Daarom garanderen wij telkens opnieuw een exclusieve service.</p>
                </div>
                <div class="col-lg-4">
                    <h3 class="text-white align-content-center"><svg xmlns="http://www.w3.org/2000/svg" height="50px" stroke-width="1.5" viewBox="0 0 24 24" stroke="#FBB041FF" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="4" y="10" width="8" height="11" rx="2"></rect><path d="M6 10V6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4"></path><path d="M15 7h.01"></path><path d="M18 9h.01"></path><path d="M18 5h.01"></path><path d="M21 3h.01"></path><path d="M21 7h.01"></path><path d="M21 11h.01"></path><path d="M10 7h1"></path></svg>
                    PROFESSIONALITEIT</h3>
                    <p class="text-white">Met meer dan 20 jaar ervaring staat Detail Ridez in voor de juiste expertise, waardoor onze klanten steeds kunnen vertrouwen op een juiste aanpak en het perfecte eindresultaat.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="diensten" class="mycontainer my-5">
        <div>
            <h2 class="text-white">ONZE DIENSTEN</h2>
            <hr style="color: #FBB042; background-color: #FBB042; height: 2px; opacity: 1;">
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <?php
            $args = array(  
                'post_type' => 'dienst',
                'posts_per_page' => '-1',
                'orderby' => 'title',
                'order' => 'ASC'
            );
            
            $services = new WP_Query($args);
            

            if($services->have_posts()):
                while($services->have_posts()): $services->the_post();
                // $service_name = the_title();
                $service_descr = get_field('omschrijving');
                $service_cost = get_field('prijs');
                $service_image = get_field('afbeelding');
                

        ?>
            <div class="col">
                <div class="card text-bg-dark h-100 position-relative">
                <?php
                if( strchr(esc_url($service_image['url']), ".io") ){
                    ?>
                    <img src="/wp-content/themes/CustomTheme/assets/placeholder.webp" class="card-img"  alt="Some alt text" >
                    <?php
                }
                else{
                    ?>
                    <img src="<?php echo esc_url($service_image['url']);?>" class="card-img h-100 w-auto" alt="Some alt text">
                    <?php
                }
                ?>
                    
                    <div class="card-img-overlay bg-dark" style="--bs-bg-opacity: .8;">
                        <h5 class="card-title text-center" style="margin-top:50%;"><?php the_title(); ?></h5>
                        <!-- <p class="card-text"><?php //echo $service_descr; ?></p> -->
                        <div class="card-footer " style="margin-top:38%;border-top: 1px solid #FBB042;">
                            <span class="float-start"><small>prijs excl. btw:</small></span>
                            <?php
                                if($service_cost){?>
                                    <span class="float-end">VANAF €<?php echo $service_cost;?></span>
                                    <?php
                                }
                                else{?>
                                    <span class="float-end">OP AANVRAAG</span>
                                    <?php
                                }
                            ?>
                            
                        </div>
                        <div class="overlay">
                            <div class="text">
                                <div class="overlay-title"><?php the_title(); ?></div>
                                <div class="descr"><?php echo $service_descr;?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            
            <?php 
                endwhile;
            endif;
            ?>
        </div>
        
        
    </div>
    
    <div id="overons" class="mycontainer">
        <div class="float-start overflow-hidden" style="height:500px; width: 33%; margin-bottom: 120px;"><img id="overonsimg" src="/wp-content/themes/CustomTheme/assets/20231016_145415.jpg" alt=""></div>
        <div class="float-end" style="width:50%;">
            <h2 class="text-white text-uppercase">Wie zijn wij</h2>
            <p class="text-white">Onze zaakvoerder Kurt Waelburgs richtte Detail Ridez op met als doel klanten de service te bieden die ze verdienen. Met meer dan 20 jaar ervaring verzekeren wij een op maat gemaakte behandeling die aansluit bij de unieke noden van elke klant.</p>
            <div>
                <p><a class="text-white text-decoration-none text-uppercase" href="mailto:info@detailridez.be"><svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" viewBox="0 0 24 24" stroke="#FBB041FF" fill="none" stroke-linecap="round" stroke-linejoin="round" height="40px" width="40px"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="3" y="5" width="18" height="14" rx="2"></rect><polyline points="3 7 12 13 21 7"></polyline></svg> info@detailridez.be</a></p>
                <p><a class="text-white text-decoration-none" href="tel:+32472607368"><svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" viewBox="0 0 24 24" stroke="#FBB041FF" fill="none" stroke-linecap="round" stroke-linejoin="round" height="40px" width="40px"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 4h4l2 5-2.5 1.5a11 11 0 0 0 5 5L15 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2"></path></svg> +32 472 60 73 68</a></p>
        </div>
        </div>
    </div>
    <hr class=" mb-0 pb-0 mt-5 hr" style="color: #FBB042; background-color: #FBB042; height: 2px; opacity: 1; width:100%;">
    <div class="videoBannerContainer overflow-hidden" style="max-height: 500px; margin-bottom:120px;">
        <div class="centering">
            <h2 class="text-white text-uppercase text-center">Wij zorgen voor jouw voertuig</h2>
            <p class="text-center text-white">Geef je wagen de behandeling die het verdient</p>
            <a class="text-center" href="#"><button id="bannerbtn" class="btn text-center buttons-over-img">MAAK EEN AFSPRAAK</button></a>
        </div>
        <video id="myVideoBanner" autoplay muted loop plays-inline>
            <source src="/wp-content/themes/CustomTheme/assets/car-cleaning.mp4" type="video/mp4">
        </video>
        
        
    </div>
    
    <div class="row justify-content-center" style="width:100vw; padding-right:3%; padding-left:3%;">
        <div class="col-lg-4 float-start">
            <div class="split">
                <div id="split-0"></div>
                <div id="split-1"></div>
            </div>
        </div>
        <div class="col-lg-4" style="padding-left:4%">
            <div class="split">
                <div id="split-2"></div>
                <div id="split-3"></div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="split float-end">
                <div id="split-4"></div>
                <div id="split-5"></div>
            </div>
        </div>
    </div>
   
    <!-- <div class="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="/wp-content/themes/CustomTheme/assets/Na_001-square.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="/wp-content/themes/CustomTheme/assets/Na_001-square.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="/wp-content/themes/CustomTheme/assets/Na_001-square.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="/wp-content/themes/CustomTheme/assets/Na_001-square.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- </div> -->
    
<?php get_footer('onepager');?>