<?php

/** Template Name: Landing Euroluce25 */

get_header();

wp_enqueue_script('euroluce25');
wp_enqueue_script('lenis');
wp_enqueue_script('gsap');
wp_enqueue_script('scroll-trigger');
wp_enqueue_script('fancybox');

wp_enqueue_style('output-euroluce25', get_template_directory_uri() . '/dist/css/euroluce25.css');
wp_enqueue_style('fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css');

?>

    <div class="euroluce-landing page-template-landing-euroluce25 bg-blue-euroluce overflow-x-hidden transition duration-300 ease-in ">
        <!-- Menu items -->
        <nav class="euroluce-nav">
            <span class="dummy"></span>
            <ul class="slides">
                <li><a href="#first">1</a></li>
                <li><a href="#second">2</a></li>
                <li><a href="#third">3</a></li>
                <li><a href="#fourth">4</a></li>
                <li><a href="#fifth">5</a></li>
            </ul>
            <ul class="menu">
                <li><a href="#first"><?php _e('Intro', 'landing-euroluce25'); ?></a></li>
                <li><a href="#introduction"><?php _e('Products', 'landing-euroluce25'); ?></a></li>
                <li><a href="#downloads"><?php _e('Downloads', 'landing-euroluce25'); ?></a></li>
                <li><a href="#contact-form"><?php _e('Contact', 'landing-euroluce25'); ?></a></li>
            </ul>
        </nav>

        <!-- Scroll Smooth Lenis -->
        <main id="lenis-wrapper">
            <!-- Section Envelope -->
            <section id="first" class="first">
                <img class="lang-en envelope" src="/wp-content/themes/santa-cole/img/euroluce25/sobre.png">
                <img class="lang-es envelope" src="/wp-content/themes/santa-cole/img/euroluce25/sobre-es.png">
            </section>
            <!-- Section Potatos -->
            <section id="second" class="potatos">
                <img class="lang-en potato potato1" src="/wp-content/themes/santa-cole/img/euroluce25/potato.png">
                <img class="lang-es potato potato1" src="/wp-content/themes/santa-cole/img/euroluce25/potato-es.png">
                <img class="potato potato2" src="/wp-content/themes/santa-cole/img/euroluce25/potato-2.png">
            
            </section>
            <!-- Section Diptics -->
            <section id="third" class="diptics">
                <img class="lang-en diptic diptic-closed" src="/wp-content/themes/santa-cole/img/euroluce25/diptic-closed.png">
                <img class="lang-en diptic diptic-opened" src="/wp-content/themes/santa-cole/img/euroluce25/diptic-opened.png">
                <img class="lang-es diptic diptic-closed" src="/wp-content/themes/santa-cole/img/euroluce25/diptic-closed-es.png">
                <img class="lang-es diptic diptic-opened" src="/wp-content/themes/santa-cole/img/euroluce25/diptic-opened-es.png">
            </section>
            <!-- Section Bookmarks -->
            <section id="fourth" class="bookmarks">
                <img class="bookmark bookmark-front" src="/wp-content/themes/santa-cole/img/euroluce25/bookmark-front.png">
                <img class="lang-en bookmark bookmark-back" src="/wp-content/themes/santa-cole/img/euroluce25/bookmark-back.png">
                <img class="lang-es bookmark bookmark-back" src="/wp-content/themes/santa-cole/img/euroluce25/bookmark-back-es.png">
            </section>
            <!-- Section Pre Photo -->
            <section id="fifth" class="pre-photos">
                <img class="pre-photo" src="/wp-content/themes/santa-cole/img/euroluce25/pre-photo.png">
            </section>
            <!-- Section Main Photo -->
            <section  class="main-photos">
                <img class="main-photo" src="/wp-content/themes/santa-cole/img/euroluce25/main-photo.jpg">
            </section>
            <!-- Introduction Products -->
            <section id="introduction" class="introduction text-white text-lead">
                <div class="col title">
                    <h2><?php _e('Euroluce 2025', 'landing-euroluce25'); ?></h2>
                    <h3><?php _e('Continuity and Change', 'landing-euroluce25'); ?></h3>
                </div>
                <div class="col text">
                    <h2><?php _e('Hall 04, C06', 'landing-euroluce25'); ?></h2>
                    <p><?php _e('April 8-13', 'landing-euroluce25'); ?></p>
                    <p><?php _e('In this edition of Euroluce (Fiera Milano, Hall 04, C06), we present some of the first products from the catalog alongside newly launched designs that, despite coming from different generations and contexts, coexist naturally and harmoniously in terms of lighting. Conceived as a canvas inspired by nature’s colors — like the sandy glow of yellow light or the deep blue of the night sea— the exhibition space invites visitors to <em>"to look beyond the lamps and pay closer attention to the light.”</em> (Gabriel Ordeig, 1985), before stepping closer to read the objects.', 'landing-euroluce25'); ?></p>
                    <p><?php _e('For forty years, we have built our catalog as a small, independent, and global editor, guided by the freedom to choose authors and works. The result of this enduring approach is a collection of well-designed objects that coexist effortlessly and transcend cultures, generations, and contexts.', 'landing-euroluce25'); ?></p>
                    <p><?php _e("Our authors collectively define the company's commitment to editing objects that soften the noise of the world and help us feel a little more at ease, a bit happier.", 'landing-euroluce25'); ?></p>
                </div>
            </section>
            <!-- Products -->
            <section id="products">
                <!-- Products Index -->
                <div class="products-reel">
                    <a href="#tekio-mayor">
                        <div class="product-item">
                            <div class="image-wrapper">
                                <img  src="/wp-content/themes/santa-cole/img/euroluce25/products/tekio-mayor/Tekio-Mayor-P2-Santa Cole-Euroluce-Enric-Badrinas-2025-2694.jpg">
                            </div>
                            <p>Tekiò Mayor</p>
                        </div>
                    </a>
                    <a href="#lamparaprima">
                        <div class="product-item">
                            <div class="image-wrapper">
                                <img  src="/wp-content/themes/santa-cole/img/euroluce25/products/lamparaprima/Lamparaprima-Coke-Bartrina-Casa-Costa-2025-0833.jpg">
                            </div>
                            <p>Lamparaprima</p>
                        </div>
                    </a>
                    <a href="#TMA">
                        <div class="product-item">
                            <div class="image-wrapper">
                                <img  src="/wp-content/themes/santa-cole/img/euroluce25/products/tma/TMA-Coke Bartrina-Vasto-2025-1150.jpg">
                            </div>
                            <p>TMA</p>
                        </div>
                    </a>
                    <a href="#alterna">
                        <div class="product-item">
                            <div class="image-wrapper">
                                <img  src="/wp-content/themes/santa-cole/img/euroluce25/products/alterna/Alterna-Santa Cole-Euroluce-Enric-Badrinas-2025-2597.jpg">
                            </div>
                            <p>Alterna</p>
                        </div>
                    </a>
                    <a href="#gira-mini">
                        <div class="product-item">
                            <div class="image-wrapper">
                                <img  src="/wp-content/themes/santa-cole/img/euroluce25/products/gira-mini/Gira Mini-Coke Bartrina-Clara-2025-0257.jpeg">
                            </div>
                            <p>Gira Mini</p>
                        </div>
                    </a>
                    <a href="#bella-durmiente">
                        <div class="product-item">
                            <div class="image-wrapper">
                                <img  src="/wp-content/themes/santa-cole/img/euroluce25/products/bella-durmiente/La_Bella_Durmiente_Jara_Varela_SantaCole_2023_04.jpeg">
                            </div>
                            <p>La Bella Durmiente</p>
                        </div>
                    </a>
                    <a href="#mesita-go">
                        <div class="product-item">
                            <div class="image-wrapper">
                                <img  src="/wp-content/themes/santa-cole/img/euroluce25/products/mesita-go/Mesita-GO-Coke-Bartrina-Casa-Costa-2025-0775.jpeg">
                            </div>
                            <p>Mesita GO</p>
                        </div>
                    </a>
                    <a href="#M64">
                        <div class="product-item">
                            <div class="image-wrapper">
                                <img  src="/wp-content/themes/santa-cole/img/euroluce25/products/m64/M64-Table-SantaCole-Euroluce-Enric-Badrinas-2025-2389.jpeg">
                            </div>
                            <p>M64</p>
                        </div>
                    </a>
                    <a href="#cirio-pana">
                        <div class="product-item">
                            <div class="image-wrapper">
                                <img  src="/wp-content/themes/santa-cole/img/euroluce25/products/cirio-pana/Cirio-Pana-JaraVarela-CasaCosta-2025-1409.jpeg">
                            </div>
                            <p>Cirio Pana</p>
                        </div>
                    </a>
                    <a href="#bib-luz">
                        <div class="product-item">
                            <div class="image-wrapper">
                                <img  src="/wp-content/themes/santa-cole/img/euroluce25/products/bibluz/BibLuz_SantaCole_EnricBadrinas_2024_88_RET.jpeg">
                            </div>
                            <p>Bib Luz</p>
                        </div>
                    </a>
                    <a href="#sylvestrina">
                        <div class="product-item">
                            <div class="image-wrapper">
                                <img  src="/wp-content/themes/santa-cole/img/euroluce25/products/sylvestrina/Sylvestrina-Blanca-Coke Bartrina-Vasto-2025-1504.jpeg">
                            </div>
                            <p>Sylvestrina</p>
                        </div>
                    </a>
                    <a href="#shiro">
                        <div class="product-item">
                            <div class="image-wrapper">
                                <img  src="/wp-content/themes/santa-cole/img/euroluce25/products/shiro/Shiro-17-Bateria-Coke-Bartrina-Casa-Costa-2025-1117.jpeg">
                            </div>
                            <p>Shiro</p>
                        </div>
                    </a>
                    <a href="#la-colilla">
                        <div class="product-item">
                            <div class="image-wrapper">
                                <img  src="/wp-content/themes/santa-cole/img/euroluce25/products/colilla/Mesita GO-La Colilla-Santa Cole-Euroluce-Enric-Badrinas-2025-2445.jpeg">
                            </div>
                            <p>La Colilla</p>
                        </div>
                    </a>
                    <a href="#cesita-alubat">
                        <div class="product-item">
                            <div class="image-wrapper">
                                <img  src="/wp-content/themes/santa-cole/img/euroluce25/products/cestita/Cestita_Alubat_NR_VI_NG_Enric_Badrinas_2024_2529.jpeg">
                            </div>
                            <p>Cestita Alubat</p>
                        </div>
                    </a>
                </div>
                <!-- Products Gallery -->
                <div class="products-gallery">
                    <!-- Product card -->
                    <div id="tekio-mayor" class="product-card float-left">
                        <div class="product-card-header">
                            <div class="name">Tekiò Mayor</div>
                            <div class="author">Anthony Dickens, 2025</div>
                        </div>
                        <div class="gallery">
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/tekio-mayor/Tekio-Mayor-P2-Santa Cole-Euroluce-Enric-Badrinas-2025-2694.jpg" data-fancybox="gallery-tekio-mayor" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/tekio-mayor/Tekio-Mayor-P2-Santa Cole-Euroluce-Enric-Badrinas-2025-2694.jpg">
                            </a>
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/tekio-mayor/Tekio-Mayor-Casa-Costa-Coke-Bartrina-2025-0730_RET.jpg" data-fancybox="gallery-tekio-mayor" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/tekio-mayor/Tekio-Mayor-Casa-Costa-Coke-Bartrina-2025-0730_RET.jpg">
                            </a>
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/tekio-mayor/Tekio-Mayor-Casa-Costa-Coke Bartrina-2025-RET.jpeg" data-fancybox="gallery-tekio-mayor" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/tekio-mayor/Tekio-Mayor-Casa-Costa-Coke Bartrina-2025-RET.jpeg">
                            </a>
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/tekio-mayor/Santa Cole-Euroluce-Enric-Badrinas-2025-2112.jpeg" data-fancybox="gallery-tekio-mayor" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/tekio-mayor/Santa Cole-Euroluce-Enric-Badrinas-2025-2112.jpeg">
                            </a>
                        </div>
                        <div class="description">
                            <h3>A Presence That Commands</h3>
                            <p>Tekiò Mayor is the grander expression of Tekiò. Standing at the same height and with equal luminosity as its smaller sibling, it exudes a forceful presence. As a single module, it evokes the luminous sculptures of Isamu Noguchi; as a double, it recalls the grand rice-paper lanterns that often grace the entrances of Shinto temples.</p>
                            <p>Tekiò –meaning “adaptation” in Japanese– merges centuries-old craftsmanship with Warm to Dim LED technology, allowing for adjustable intensity and color temperature in tandem. Highly technical structures wrapped in handmade Japanese paper. Alone or arranged in series, its radiance shifts from a whisper to an exclamation.</p>
                        </div>
                    </div>
                    <!-- Product card -->
                    <div id="lamparaprima" class="product-card float-right">
                        <div class="product-card-header">
                            <div class="name">Lamparaprima</div>
                            <div class="author">Pete Sans, 1979</div>
                        </div>
                        <div class="gallery">
                            <a href="/wp-content/themes/santa-cole/img/euroluce25/products/lamparaprima/Lamparaprima-Coke-Bartrina-Casa-Costa-2025-0833.jpg" data-fancybox="gallery-lamparaprima" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/lamparaprima/Lamparaprima-Coke-Bartrina-Casa-Costa-2025-0833.jpg" />
                            </a>
                            <a href="/wp-content/themes/santa-cole/img/euroluce25/products/lamparaprima/Lamparaprima-Coke-Bartrina-Casa-Costa-2025-0908.jpg" data-fancybox="gallery-lamparaprima" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/lamparaprima/Lamparaprima-Coke-Bartrina-Casa-Costa-2025-0908.jpg" />
                            </a>
                            <a href="/wp-content/themes/santa-cole/img/euroluce25/products/lamparaprima/Lamparaprima-CokeBartrina-Vasto-2025-1219.jpeg" data-fancybox="gallery-lamparaprima" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/lamparaprima/Lamparaprima-CokeBartrina-Vasto-2025-1219.jpeg" />
                            </a>
                            <a href="/wp-content/themes/santa-cole/img/euroluce25/products/lamparaprima/Lamparaprima-CokeBartrina-Vasto-2025-1286.jpeg" data-fancybox="gallery-lamparaprima" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/lamparaprima/Lamparaprima-CokeBartrina-Vasto-2025-1286.jpeg" />
                            </a>
                            <a href="/wp-content/themes/santa-cole/img/euroluce25/products/lamparaprima/Lamparaprima-SantaCole-Euroluce-Enric-Badrinas-2025-2548.jpeg" data-fancybox="gallery-lamparaprima" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/lamparaprima/Lamparaprima-SantaCole-Euroluce-Enric-Badrinas-2025-2548.jpeg" />
                            </a>
                        </div>
                        <div class="description">
                            <h3>Inventive Ubiquity</h3>
                            <p>Designed to rest on a desk or hang from a wall, Lamparaprima consists of a metal rod supporting an LED tube, encased in a rotating visor-like shade. By bending and twisting a clothes hanger, Pete Sans came upon an ingenious and expressive solution that would become his first commercial lamp and the second product ever issued by Santa & Cole.</p>
                            <p>“There is always an element of invention in my work”, explains the creator. The 2025 version introduces a low-voltage (12V) system that gives the structure itself the ability to conduct electricity. This requires an LED light source, even if it's still visually reminiscent of a traditional soffit, and further allows it to operate with a simple rotation of the shade to switch it on or off.</p>
                        </div>
                    </div>
                    <!-- Product card -->
                    <div id="TMA" class="product-card float-right">
                        <div class="product-card-header">
                            <div class="name">TMA</div>
                            <div class="author">Miguel Milá, 1981</div>
                        </div>
                        <div class="gallery">
                            
                            <a href="/wp-content/themes/santa-cole/img/euroluce25/products/tma/TMA-Coke Bartrina-Vasto-2025-1150.jpg" data-fancybox="gallery-TMA" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/tma/TMA-Coke Bartrina-Vasto-2025-1150.jpg" />
                            </a>
                            <a href="/wp-content/themes/santa-cole/img/euroluce25/products/tma/TMA-Sylvestrina-Coke-Bartrina-Clara-2025-0435.jpg" data-fancybox="gallery-TMA" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/tma/TMA-Sylvestrina-Coke-Bartrina-Clara-2025-0435.jpg" />
                            </a>
                            <a href="/wp-content/themes/santa-cole/img/euroluce25/products/tma/TMA-Coke-Bartrina-Vasto-2025-1627-RET.jpeg" data-fancybox="gallery-TMA" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/tma/TMA-Coke-Bartrina-Vasto-2025-1627-RET.jpeg" />
                            </a>
                        </div>
                        <div class="description">
                            <h3>Refinement Upon Refinement</h3>
                            <p>With a mastery of form and function, Miguel Milá distilled the three basic elements of any lamp: structure, electrical components and shade. A cross-shaped base, a sturdy vertical shaft and a lightweight frame supporting the bulb holder. The shade rotates around its axis and adjusts in height with a simple rubber ring –like a sail hoisted up a mast. And, of course, its hallmark on/off switch: a gentle tug on the cord. Light yet robust, it is easily moved.</p>
                            <p>A direct evolution of the TMM (1961), this lesser known yet even more refined design is the culmination of Miguel Milá’s relentless quest for simplicity. Stripped to its essence, nothing can be taken away. TMA's naked form speaks to its economy: this is the most accessible and youthful member of the TM family</p>
                        </div>
                    </div>
                    <!-- Product card -->
                    <div id="alterna" class="product-card float-left">
                        <div class="product-card-header">
                            <div class="name">Alterna</div>
                            <div class="author">Júlia Esqué, 2025</div>
                        </div>
                        <div class="gallery">
                            <a href="/wp-content/themes/santa-cole/img/euroluce25/products/alterna/Alterna-Santa Cole-Euroluce-Enric-Badrinas-2025-2597.jpg" data-fancybox="gallery-alterna" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/alterna/Alterna-Santa Cole-Euroluce-Enric-Badrinas-2025-2597.jpg" />
                            </a>
                            
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/alterna/Alterna-Coke-Bartrina-Casa-Costa-2025-1051-RET.jpg" data-fancybox="gallery-alterna" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/alterna/Alterna-Coke-Bartrina-Casa-Costa-2025-1051-RET.jpg" />
                            </a>
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/alterna/Alterna-table-Santa Cole-Euroluce-Enric-Badrinas-2025-2250-RET.jpeg" data-fancybox="gallery-alterna" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/alterna/Alterna-table-Santa Cole-Euroluce-Enric-Badrinas-2025-2250-RET.jpeg" />
                            </a>
                        </div>
                        <div class="description">
                            <h3>Alternating between Full and Empty</h3>
                            <p>Tension, transparency, balance. A structured frame extends a square-sectioned prismatic shade, crafted from photographic filter material. The rigidity of the skeleton transforms the flat into volume, shaping a body. Four stitched pockets secure transverse rods that define the rhythm of the surface. A translucent skin refines the light.</p>
                            <p>Alterna floats solo or in clusters. Its modular design allows for scalable compositions that expand freely across space in vertical or horizontal formations, alternating moments of expression and stillness</p>
                        </div>
                    </div>
                    <!-- Product card -->
                    <div id="gira-mini" class="product-card float-right">
                        <div class="product-card-header">
                            <div class="name">Gira Mini</div>
                            <div class="author">J.M. Massana, J.M. Tremoleda, Mariano Ferrer, 2023</div>
                        </div>
                        <div class="gallery">
                            <a href="/wp-content/themes/santa-cole/img/euroluce25/products/gira-mini/Gira Mini-Coke Bartrina-Clara-2025-0257.jpeg" data-fancybox="gallery-gira-mini" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/gira-mini/Gira Mini-Coke Bartrina-Clara-2025-0257.jpeg" />
                            </a>
                            
                            <a href="/wp-content/themes/santa-cole/img/euroluce25/products/gira-mini/Campana_Verano_2023_Cadaques_Arquitectura_G_Jara_Varela_09_230379_Gira_Mini.jpeg" data-fancybox="gallery-gira-mini" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/gira-mini/Campana_Verano_2023_Cadaques_Arquitectura_G_Jara_Varela_09_230379_Gira_Mini.jpeg" />
                            </a>
                            <a href="/wp-content/themes/santa-cole/img/euroluce25/products/gira-mini/Gira Mini-TMA-Coke Bartrina-Clara-2025-0083.jpeg" data-fancybox="gallery-gira-mini" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/gira-mini/Gira Mini-TMA-Coke Bartrina-Clara-2025-0083.jpeg" />
                            </a>
                            <a href="/wp-content/themes/santa-cole/img/euroluce25/products/gira-mini/Gira Mini-Coke Bartrina-Clara-2025-0114.jpeg" data-fancybox="gallery-gira-mini" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/gira-mini/Gira Mini-Coke Bartrina-Clara-2025-0114.jpeg" />
                            </a>
                            <a href="/wp-content/themes/santa-cole/img/euroluce25/products/gira-mini/Gira-Mini-Yosigo-2024-244834.jpeg" data-fancybox="gallery-gira-mini" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/gira-mini/Gira-Mini-Yosigo-2024-244834.jpeg" />
                            </a>
                        </div>
                        <div class="description">
                            <h3>Rotation in Hand</h3>
                            <p>Gira Mini distills the essence of portable lighting into a compact design that retains the virtues of its older sibling. An ingenious ball-joint base, paired with an adjustable shade around a spherical LED core, grants complete freedom of movement, directing light precisely where it is needed. With its battery-powered mobility and dual light intensity, Gira Mini is both exacting and discreet –illuminating the relevant area without drawing attention to itself.</p>
                        </div>
                    </div>
                    <!-- Product card -->
                    <div id="bella-durmiente" class="product-card float-left">
                        <div class="product-card-header">
                            <div class="name">La Bella Durmiente</div>
                            <div class="author">Nina Masó and Gabriel Ordeig Cole, 1985</div>
                        </div>
                        <div class="gallery">
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/bella-durmiente/La_Bella_Durmiente_Jara_Varela_SantaCole_2023_04.jpeg" data-fancybox="gallery-bella-durmiente" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/bella-durmiente/La_Bella_Durmiente_Jara_Varela_SantaCole_2023_04.jpeg">
                            </a>
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/bella-durmiente/La Bella Durmiente-Coke Bartrina-Vasto-2025-1471.jpeg" data-fancybox="gallery-bella-durmiente" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/bella-durmiente/La Bella Durmiente-Coke Bartrina-Vasto-2025-1471.jpeg">
                            </a>
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/bella-durmiente/La_Bella_Durmiente_Jara_Varela_SantaCole_2023_03.jpeg" data-fancybox="gallery-bella-durmiente" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/bella-durmiente/La_Bella_Durmiente_Jara_Varela_SantaCole_2023_03.jpeg">
                            </a>
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/bella-durmiente/La-Bella-Durmiente-Menor-Yosigo-2024-DSC4658.jpeg" data-fancybox="gallery-bella-durmiente" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/bella-durmiente/La-Bella-Durmiente-Menor-Yosigo-2024-DSC4658.jpeg">
                            </a>
                            
                        </div>
                        <div class="description">
                            <h3>Awaken to a Joyful Light</h3>
                            <p>Designed by Santa & Cole co-founders Gabriel Ordeig Cole and Nina Masó, La Bella Durmiente (Sleeping Beauty) is a totemic volume that explores the expressive potential of color, playing with contrasts between warm and cold hues. The result is a visually dynamic and balanced composition. Contemplation and imagination. A composition that nods to the geometric abstraction of Piet Mondrian or Theo van Doesburg.</p>
                            <p>Born in 1986 as a defiant response to an era dominated by cold halogen lights and stark metal structures, this lamp championed colorful fluorescence (now LED) when this light source was considered blue and soulless.</p>
                            <p><em>“It was a time of artistic expansion without predefined limits–very sweet, very beautiful. Critics ignited a debate to draw a line between art and design, an absurd distinction that only stifled creativity. That’s when La Bella Durmiente was born.”</em> —Xano Armenter</p>
                            <p>The shade is now printed with pigmented inks on a special paper, achieving a clean, precise, and rich finish. A transparent laminate protects it from moisture and the passage of time. Two tiered black-lacquered wooden end caps frame this sculptural piece, secured with a threaded closure.</p>
                            <p>The shade is now printed with pigmented inks on a special paper, achieving a clean, precise and rich finish. A transparent laminate protects it from moisture and the passage of time. Two tiered black-lacquered wooden end caps frame this sculptural piece, secured with a threaded closure.</p>
                            <p>The 2025 reedition maintains the original dimensions, allowing new screens to be replaced on old structures.</p>
                        </div>
                    </div>
                    <!-- Product card -->
                    <div id="mesita-go" class="product-card float-right">
                        <div class="product-card-header">
                            <div class="name">Mesita GO</div>
                            <div class="author">Gabriel Ordeig Cole, 1988</div>
                        </div>
                        <div class="gallery">
                            <a href="/wp-content/themes/santa-cole/img/euroluce25/products/mesita-go/Mesita-GO-Coke-Bartrina-Casa-Costa-2025-0775.jpeg" data-fancybox="gallery-MesitaGO" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/mesita-go/Mesita-GO-Coke-Bartrina-Casa-Costa-2025-0775.jpeg" />
                            </a>
                            <a href="/wp-content/themes/santa-cole/img/euroluce25/products/mesita-go/Mesita GO-Santa Cole-Euroluce-Enric-Badrinas-2025-2443.jpeg" data-fancybox="gallery-MesitaGO" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/mesita-go/Mesita GO-Santa Cole-Euroluce-Enric-Badrinas-2025-2443.jpeg" />
                            </a>
                            <a href="/wp-content/themes/santa-cole/img/euroluce25/products/mesita-go/Mesita-GO-Coke-Bartrina-Casa-Costa-2025-0787.jpeg" data-fancybox="gallery-MesitaGO" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/mesita-go/Mesita-GO-Coke-Bartrina-Casa-Costa-2025-0787.jpeg" />
                            </a>
                            <a href="/wp-content/themes/santa-cole/img/euroluce25/products/mesita-go/Mesita-GO-Vasto-Coke Bartrina-2025-1605.jpeg" data-fancybox="gallery-MesitaGO" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/mesita-go/Mesita-GO-Vasto-Coke Bartrina-2025-1605.jpeg" />
                            </a>
                            <a href="/wp-content/themes/santa-cole/img/euroluce25/products/mesita-go/Mesita-GO-Yosigo-2024-DSC4845.jpeg" data-fancybox="gallery-MesitaGO" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/mesita-go/Mesita-GO-Yosigo-2024-DSC4845.jpeg" />
                            </a>
                        </div>
                        <div class="description">
                            <h3>Kindling a Spark</h3>
                            <p>The Mesita GO fuses functionality with sculptural charm. Chrome legs, capped with feet resembling match heads, elevate a black-stained oak tabletop with effortless grace.</p>
                            <p>Available in two options: a sleek flat surface or with a discreet secretaire drawer. Unusually robust for its size, it relocates easily while bearing heavy loads.</p>
                        </div>
                    </div>
                    <!-- Product card -->
                    <div id="M64" class="product-card float-left">
                        <div class="product-card-header">
                            <div class="name">M64</div>
                            <div class="author">Miguel Milá, 2024</div>
                        </div>
                        <div class="gallery">
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/m64/M64-Table-SantaCole-Euroluce-Enric-Badrinas-2025-2389.jpeg" data-fancybox="gallery-M64" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/m64/M64-Table-SantaCole-Euroluce-Enric-Badrinas-2025-2389.jpeg">
                            </a>
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/m64/M64-Table-SantaCole-Euroluce-Enric-Badrinas-2025-2134.jpeg" data-fancybox="gallery-M64" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/m64/M64-Table-SantaCole-Euroluce-Enric-Badrinas-2025-2134.jpeg">
                            </a>
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/m64/M64-Table-SantaCole-Euroluce-Enric-Badrinas-2025-2129.jpeg" data-fancybox="gallery-M64" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/m64/M64-Table-SantaCole-Euroluce-Enric-Badrinas-2025-2129.jpeg">
                            </a>
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/m64/M64-table-Blanca-Yosigo-2024-244556.jpeg" data-fancybox="gallery-M64" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/m64/M64-table-Blanca-Yosigo-2024-244556.jpeg">
                            </a>
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/m64/M64-table-Blanca-Yosigo-2024-244553.jpeg" data-fancybox="gallery-M64" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/m64/M64-table-Blanca-Yosigo-2024-244553.jpeg">
                            </a>
                        </div>
                        <div class="description">
                            <h3>A Historic Silhouette</h3>
                            <p>The M64 desk lamp is the last evolution of Miguel Milá’s award-winning 1964 pendant lamp, which won the Gold Delta Award and became a landmark in Spanish design history, at its inception as a professional discipline.</p>
                            <p>True to its origins, this version translates the lamp’s fundamental elements into a compact tabletop format, featuring a chrome metal structure that highlights its voluptuous, sensuous shade, available in 10 different finishes. It casts a focused cone of light onto the surface while allowing a soft glow to radiate through its filtered upper opening.</p>
                        </div>
                    </div>
                    <!-- Product card -->
                    <div id="cirio-pana" class="product-card float-right">
                        <div class="product-card-header">
                            <div class="name">Cirio Pana</div>
                            <div class="author">Antoni Arola, 2025</div>
                        </div>
                        <div class="gallery">
                            <a href="/wp-content/themes/santa-cole/img/euroluce25/products/cirio-pana/Cirio-Pana-JaraVarela-CasaCosta-2025-1409.jpeg" data-fancybox="gallery-cirio-pana" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/cirio-pana/Cirio-Pana-JaraVarela-CasaCosta-2025-1409.jpeg" />
                            </a>
                            
                            <a href="/wp-content/themes/santa-cole/img/euroluce25/products/cirio-pana/Cirio-Pana-JaraVarela-CasaCosta-2025-1368_RET.jpeg" data-fancybox="gallery-cirio-pana" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/cirio-pana/Cirio-Pana-JaraVarela-CasaCosta-2025-1368_RET.jpeg" />
                            </a>
                            <a href="/wp-content/themes/santa-cole/img/euroluce25/products/cirio-pana/Cirio-Pana-Yosigo-2024-244416.jpeg" data-fancybox="gallery-cirio-pana" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/cirio-pana/Cirio-Pana-Yosigo-2024-244416.jpeg" />
                            </a>
                            <a href="/wp-content/themes/santa-cole/img/euroluce25/products/cirio-pana/Cirio-Pana-Yosigo-2024-DSC4565.jpeg" data-fancybox="gallery-cirio-pana" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/cirio-pana/Cirio-Pana-Yosigo-2024-DSC4565.jpeg" />
                            </a>
                        </div>
                        <div class="description">
                            <h3>Singular Grooves</h3>
                            <p>Cirio Pana reimagines the traditional long wax candle, a historic ritual object, through the delicate lens of porcelain. More powerful than that of its smaller counterpart, its luminous disc is encased in a shade as tall as it is wide, producing a light that is both focused and expansive. With unique nuances in every pieces, its grooved texture recalls the softness and depth of corduroy (pana in Spanish), traced by fine vertical ridges.</p>
                            <p>Handcrafted in <a href="https://sargadelos.com/es/" target="_blank">Sargadelos</a></p>
                        </div>
                    </div>
                    <!-- Product card -->
                    <div id="bib-luz" class="product-card float-left">
                        <div class="product-card-header">
                            <div class="name">Bib Luz</div>
                            <div class="author">Oscar Tusquets, 1986</div>
                        </div>
                        <div class="gallery">
                            
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/bibluz/BibLuz_SantaCole_EnricBadrinas_2024_88_RET.jpeg" data-fancybox="gallery-bib-luz" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/bibluz/BibLuz_SantaCole_EnricBadrinas_2024_88_RET.jpeg">
                            </a>
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/bibluz/BibLuz-Coke-Bartrina-Casa-Costa-2025-1016.jpeg" data-fancybox="gallery-bib-luz" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/bibluz/BibLuz-Coke-Bartrina-Casa-Costa-2025-1016.jpeg">
                            </a>
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/bibluz/BibLuz_Casa_Oscar_Tusquets_SantaCole_CokeBartrina_2024_19.jpeg" data-fancybox="gallery-bib-luz" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/bibluz/BibLuz_Casa_Oscar_Tusquets_SantaCole_CokeBartrina_2024_19.jpeg" />
                            </a>
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/bibluz/BibLuz_gris_blanca_ONL_SantaCole_EnricBadrinas_2024_RET.jpeg" data-fancybox="gallery-bib-luz" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/bibluz/BibLuz_gris_blanca_ONL_SantaCole_EnricBadrinas_2024_RET.jpeg" />
                            </a>
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/bibluz/BibLuz_ON_DET_foco_05_SantaCole_EnricBadrinas_2024.jpeg" data-fancybox="gallery-bib-luz" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/bibluz/BibLuz_ON_DET_foco_05_SantaCole_EnricBadrinas_2024.jpeg" />
                            </a>
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/bibluz/BibLuz_SantaCole_EnricBadrinas_2024_89.jpeg" data-fancybox="gallery-bib-luz" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/bibluz/BibLuz_SantaCole_EnricBadrinas_2024_89.jpeg" />
                            </a>
                        </div>
                        <div class="description">
                            <h3>A Book Among More Books</h3>
                            <p>In 1986, triggered by the challenge of illuminating his own library, Oscar Tusquets envisioned a lamp that could integrate itself in any shelf, taking up minimal space while offering adaptable lighting. In his own words, “What better form than a book itself?”.</p>
                            <p>With its metal book-shaped body (in white or gray aluminum), Bib Luz sits discreetly on shelves. From its “spine,” a slender, rotating arm extends, ending in an adjustable spotlight that highlights any desired corner. Multiple units can be interconnected in series, forming harmonious compositions at varying levels. The result is always brilliant, though never dazzling; ideal for those who search among the literature.</p>
                        </div>
                    </div>
                    <!-- Product card -->
                    <div id="sylvestrina" class="product-card float-right">
                        <div class="product-card-header">
                            <div class="name">Sylvestrina</div>
                            <div class="badge-product">New Finish</div>
                            <div class="badge-product">IF Design Product design Hannover 2021</div>
                            <div class="author">Enric Sòria, Jordi Garcés 1974</div>
                            
                        </div>
                        <div class="gallery">
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/sylvestrina/Sylvestrina-Blanca-Coke Bartrina-Vasto-2025-1504.jpeg" data-fancybox="gallery-sylvestrina" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/sylvestrina/Sylvestrina-Blanca-Coke Bartrina-Vasto-2025-1504.jpeg">
                            </a>
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/sylvestrina/Sylvestrina-Blanca-Coke Bartrina-Clara-2025-0444.jpeg" data-fancybox="gallery-sylvestrina" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/sylvestrina/Sylvestrina-Blanca-Coke Bartrina-Clara-2025-0444.jpeg">
                            </a>
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/sylvestrina/Sylvestrina_blanca_Enric_Badrinas_2024_2450-2.jpeg" data-fancybox="gallery-sylvestrina" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/sylvestrina/Sylvestrina_blanca_Enric_Badrinas_2024_2450-2.jpeg">
                            </a>
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/sylvestrina/Sylvestrina_blanca_Enric_Badrinas_2024_2403_RET.jpg" data-fancybox="gallery-sylvestrina" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/sylvestrina/Sylvestrina_blanca_Enric_Badrinas_2024_2403_RET.jpg">
                            </a>
                        </div>
                        <div class="description">
                            <h3>A State-of-the-Art Oil Lamp</h3>
                            <p>Freed of all oils, kerosene or cables, Sylvestrina is at hand, ready for any occasion. Named after a fisherman from the Costa Brava –Silvestre, a tall, lean, and elegant character-, it leaves barely a trace on the table, much like a wine bottle. A simple press on its base turns it on, adjusting the intensity between full, medium, or off.</p>
                            <p>Sylvestrina travels flat-packed for easy transport and disassembles into three components –the battery base, light source and surrounding screen—, ensuring easy repair and a long lifespan.</p>
                        </div>
                    </div>
                    <!-- Product card -->
                    <div id="shiro" class="product-card float-left">
                        <div class="product-card-header">
                            <div class="name">Shiro</div>
                            <div class="author">Antoni Arola 1998 / 2025</div>
                            <div class="badge-product">Delta de Plata 1999</div>
                        </div>
                        <div class="gallery">
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/shiro/Shiro-17-Bateria-Coke-Bartrina-Casa-Costa-2025-1117.jpeg" data-fancybox="gallery-shiro" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/shiro/Shiro-17-Bateria-Coke-Bartrina-Casa-Costa-2025-1117.jpeg">
                            </a>
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/shiro/Shiro_exterior_ON_JaraVarela_Delta_SantaCole_2023_10_RET.jpeg" data-fancybox="gallery-shiro" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/shiro/Shiro_exterior_ON_JaraVarela_Delta_SantaCole_2023_10_RET.jpeg">
                            </a>
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/shiro/Shiro_exterior_ON_JaraVarela_Delta_SantaCole_2023_03.jpeg" data-fancybox="gallery-shiro" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/shiro/Shiro_exterior_ON_JaraVarela_Delta_SantaCole_2023_03.jpeg">
                            </a>
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/shiro/Shiro_exterior_ON_JaraVarela_Delta_SantaCole_2023_17.jpeg" data-fancybox="gallery-shiro" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/shiro/Shiro_exterior_ON_JaraVarela_Delta_SantaCole_2023_17.jpeg">
                            </a>
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/shiro/Shiro-25-Yosigo-2024-244530.jpeg" data-fancybox="gallery-shiro" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/shiro/Shiro-25-Yosigo-2024-244530.jpeg">
                            </a>
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/shiro/Shiro-Alta-17-Yosigo-2024-244803.jpeg" data-fancybox="gallery-shiro" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/shiro/Shiro-Alta-17-Yosigo-2024-244803.jpeg">
                            </a>
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/shiro/Shiro-Familia-EnricBadrinas-OFF-2990-2024.jpeg" data-fancybox="gallery-shiro" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/shiro/Shiro-Familia-EnricBadrinas-OFF-2990-2024.jpeg">
                            </a>
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/shiro/Shiro-Familia-EnricBadrinas-ON-3006-2024.jpeg" data-fancybox="gallery-shiro" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/shiro/Shiro-Familia-EnricBadrinas-ON-3006-2024.jpeg">
                            </a>
                        </div>
                        <div class="description">
                            <h3>Contemplative Serenity</h3>
                            <p>Shiro, which translate as “white” in Japanese, carries deep significance in the country’s philosophical tradition, evoking emptiness, honor, purity, and calm. Far from simply being absence of color, Shiro represents a void brimming with potential, an expression of energy contained. A spiritual openness that invites contemplation and discovery.</p>
                            <p>This outdoor lamp draws a dialogue between architecture and nature, integrating naturally into the landscape. Its rational, refined structure does not enclose but filters light through slats arranged in a cubic form. The result is a soft, grazing illumination that creates a tranquil atmosphere, balancing the inhabited outdoor space with the open natural world.</p>
                            <p>Available in three sizes, it can be fixed in place or stand freely. The smaller offers additional versatility: battery-operated, wired, or elevated as a beacon.</p>
                        </div>
                    </div>
                    <!-- Product card -->
                    <div id="la-colilla" class="product-card float-right">
                        <div class="product-card-header">
                            <div class="name">La Colilla</div>
                            <div class="author">Carles Riart, 1976</div>
                        </div>
                        <div class="gallery">
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/colilla/Mesita GO-La Colilla-Santa Cole-Euroluce-Enric-Badrinas-2025-2445.jpeg" data-fancybox="gallery-colilla" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/colilla/Mesita GO-La Colilla-Santa Cole-Euroluce-Enric-Badrinas-2025-2445.jpeg">
                            </a>
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/colilla/Campana_Verano_2023_Cadaques_Arquitectura_G_Jara_Varela_020_230441_La_Colilla_Babel.jpeg" data-fancybox="gallery-colilla" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/colilla/Campana_Verano_2023_Cadaques_Arquitectura_G_Jara_Varela_020_230441_La_Colilla_Babel.jpeg">
                            </a>
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/colilla/Casa_Bonay_Libertine_Enric_Badrinas_2024_DSC0158_LaColilla_BasicaMinima_RET.jpeg" data-fancybox="gallery-colilla" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/colilla/Casa_Bonay_Libertine_Enric_Badrinas_2024_DSC0158_LaColilla_BasicaMinima_RET.jpeg">
                            </a>
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/colilla/Casa_Bonay_Libertine_Enric_Badrinas_2024_DSC0159_LaColilla.jpeg" data-fancybox="gallery-colilla" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/colilla/Casa_Bonay_Libertine_Enric_Badrinas_2024_DSC0159_LaColilla.jpeg">
                            </a>
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/colilla/LaColilla-pedrera-SalvaLopez-2.jpeg" data-fancybox="gallery-colilla" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/colilla/LaColilla-pedrera-SalvaLopez-2.jpeg">
                            </a>
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/colilla/Mesita GO-La Colilla-Santa Cole-Euroluce-Enric-Badrinas-2025-2445.jpeg" data-fancybox="gallery-colilla" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/colilla/Mesita GO-La Colilla-Santa Cole-Euroluce-Enric-Badrinas-2025-2445.jpeg">
                            </a>
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/colilla/Un-senor-Barcelona-Pomes_Jara-Varela_Nanimarquina_COLILLA_29.jpeg" data-fancybox="gallery-colilla" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/colilla/Un-senor-Barcelona-Pomes_Jara-Varela_Nanimarquina_COLILLA_29.jpeg">
                            </a>
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/colilla/Un-senor-Barcelona-Pomes_Jara-Varela_Nanimarquina_COLILLA_CESTA_28.jpeg" data-fancybox="gallery-colilla" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/colilla/Un-senor-Barcelona-Pomes_Jara-Varela_Nanimarquina_COLILLA_CESTA_28.jpeg">
                            </a>
                        </div>
                        <div class="description">
                            <h3>Subtlety of Minimum Light</h3>
                            <p>Some lights can only be seen at night. A sky full of stars. Fireflies dancing in an open field. The embers of a campfire, glowing as the sun fades. This lamp is designed as a companion for music, for conversation, for love. Where the night falls, La Colilla illuminates.</p>
                            <p>Designed by Carles Riart in 1976, produced by chance and distributed by Gabriel Ordeig Cole, from his first venture Comercial Estelar, La Colilla was Santa & Cole’s first edited product back in 1985.</p>
                            <p>Made up of a translucent tube produced in two size versions: the usual two-meter one and the recently reintroduced one-meter versión, the softly nuanced surface conceals a series of small neon bulbs inside that consume an insignificant amount of power and have an extremely long lifespan, to the point that it is delivered without a switch so it can be kept on at all times. Hanging from a delicate thread, it has an appearance of floating in mid-air. It has a variety of uses: in the bedroom or the lounge, providing helpful and guiding light in hallways, stairs or porches, and even as a children’s night light for sweet dreams.</p>
                        </div>
                    </div>
                    <!-- Product card -->
                    <div id="cestita-alubat" class="product-card float-left">
                        <div class="product-card-header">
                            <div class="name">Cestita Alubat</div>
                            <div class="badge-product">New finishes</div>
                            <div class="author">Miguel Milá, 1981</div>
                        </div>
                        <div class="gallery">
                            <a href="/wp-content/themes/santa-cole/img/euroluce25/products/cestita/Cestita_Alubat_NR_VI_NG_Enric_Badrinas_2024_2529.jpeg" data-fancybox="gallery-alubat" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/cestita/Cestita_Alubat_NR_VI_NG_Enric_Badrinas_2024_2529.jpeg" />
                            </a>
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/cestita/Alubat-Yosigo_Solo_Invierno_2024.jpeg" data-fancybox="gallery-alubat" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/cestita/Alubat-Yosigo_Solo_Invierno_2024.jpeg" />
                            </a>
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/cestita/Alubat-Yosigo_Solo_Invierno_2024_4752.jpeg" data-fancybox="gallery-alubat" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/cestita/Alubat-Yosigo_Solo_Invierno_2024_4752.jpeg" />
                            </a>
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/cestita/Alubat-Yosigo_Solo_Invierno_2024_244341.jpeg" data-fancybox="gallery-alubat" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/cestita/Alubat-Yosigo_Solo_Invierno_2024_244341.jpeg" />
                            </a>
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/cestita/Cestita_Alubat_naranja_rojizo_Enric_Badrinas_2024_DET_2332_v2.jpeg" data-fancybox="gallery-alubat" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/cestita/Cestita_Alubat_naranja_rojizo_Enric_Badrinas_2024_DET_2332_v2.jpeg" />
                            </a>
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/cestita/Cestita_Alubat_naranja_rojizo_Enric_Badrinas_2024_DET_2626.jpeg" data-fancybox="gallery-alubat" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/cestita/Cestita_Alubat_naranja_rojizo_Enric_Badrinas_2024_DET_2626.jpeg" />
                            </a>
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/cestita/Cestita_Alubat_Naranja_Rojizo_OFF_Enric_Badrinas_2024_1.jpeg" data-fancybox="gallery-alubat" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/cestita/Cestita_Alubat_Naranja_Rojizo_OFF_Enric_Badrinas_2024_1.jpeg" />
                            </a>
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/cestita/Cestita_Alubat_Naranja_Rojizo_ON_Enric_Badrinas_2024_1.jpeg" data-fancybox="gallery-alubat" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/cestita/Cestita_Alubat_Naranja_Rojizo_ON_Enric_Badrinas_2024_1.jpeg" />
                            </a>
                            <a  href="/wp-content/themes/santa-cole/img/euroluce25/products/cestita/Cestita_Alubat_NR_VI_NG_Enric_Badrinas_2024_2529.jpeg" data-fancybox="gallery-alubat" data-caption="">
                                <img src="/wp-content/themes/santa-cole/img/euroluce25/products/cestita/Cestita_Alubat_NR_VI_NG_Enric_Badrinas_2024_2529.jpeg" />
                            </a>
                        </div>
                        <div class="description">
                            <h3>A Companion for Every Adventure</h3>
                            <p>Cestita Alubat's comfortable handle makes it suitable for all kinds of excursions—indoor or out.</p>
                            <p>The robustness of aluminum, available in black, English green or reddish orange, contrasts with the delicacy of its original wood-and-glass version. Inspired by the traditional lanterns that light coastal homes, country estates, and open terraces, the Cesta family features structures that embrace and elevate the luminous globe, adapting it to different uses. Cestita Alubat is the sturdiest of them all: solid yet lightweight, with three light settings –full, medium or low–, it is the perfect companion for any journey</p>
                        </div>
                    </div>
                </div>
            </section>
            
            
			<div class="euroluce-landing">
			<section id="downloads">
                <h2><?php _e('Downloads', 'landing-euroluce25'); ?></h2>
              
                <div class="kits">
                    <a target="_blank"  href="https://online.fliphtml5.com/zugzq/nxke/">
                        <div class="kit">
                            <img src="/wp-content/themes/santa-cole/img/euroluce25/catalogues/presskit.jpg">
                            <p><?php _e('Catálogo general', 'landing-euroluce25'); ?></p>
                        </div>
                    </a>
                    <a target="_blank"  href="https://online.fliphtml5.com/zugzq/ibmy/#p=1">
                        <div class="kit">
                            <img src="/wp-content/themes/santa-cole/img/euroluce25/catalogues/presskit.jpg">
                            <p><?php _e('Presskit', 'landing-euroluce25'); ?></p>
                        </div>
                    </a>
                    <a target="_blank"  href="https://downloads.santacole.com/">
                        <div class="kit">
                            <!-- <img src="/wp-content/themes/santa-cole/img/euroluce25/catalogues/presskit.jpg"> -->
                            <p class="dam-link"><?php _e('o mira nuestro DAM de imágenes', 'landing-euroluce25'); ?></p>
                        </div>
                    </a>
                </div>
            </section>
				<section id="contact-form">
					<h2><?php _e('Contact form', 'landing-euroluce25'); ?></h2>
					
					
					<?php echo do_shortcode('[contact-form-7 id="294" title="Formulario de contacto"]'); ?>
				</section>
			</div>
        </main>
    </div>
	
	<div class="euroluce-landing">
	
		<!--Información de contacto -->
		<section class="main-contact contact-endpoints wrapper">
			<div class="container-fluid pb-5 mb-5">
				<div class="row py-5">

					<div class="col-12 mb-5 pb-3 px-0">

						<?php display_tag_options(
							'title_group_tres',
							'title_tag',
							'title_txt',
							'pb-3 border-bottom endpoints-title'
						); ?>

						<div class="contact-grid">
			
							<?php if (have_rows('bloque_contacto', 'option')) {
								while (have_rows('bloque_contacto', 'option')) { the_row(); ?>

									<div class="pt-3">
										<p class="fw-500">
											<?php the_sub_field('pais') ?>
										</p>
										<a class="color-grey-light3 mb-0 d-block custom-direction_mas" href="tel:00<?php the_sub_field('telefono'); ?>">
											T.+<?php the_sub_field('telefono'); ?>
										</a>
										<a class="color-grey-light3 custom-direction_mas" href="mailto:<?php echo str_replace("http://", " ", get_sub_field('correo')); ?>">
											<?php echo str_replace("http://", " ", get_sub_field('correo')); ?>
										</a>
									</div>

								<?php }
							} ?>

						</div>

					</div>

					<div class="col-12 px-0">

						<?php display_tag_options(
							'title_group_cuatro',
							'title_tag',
							'title_txt',
							'pb-3 pt-5 pt-lg-0 border-bottom endpoints-title'
						); ?>

						<div class="contact-grid">
							
							<?php if (have_rows('bloque_contacto_sede', 'option')) {

								while (have_rows('bloque_contacto_sede', 'option')) { the_row(); ?>

									<div class="pt-3">
										<p class="fw-500">
											<?php the_sub_field('lugar') ?>
										</p>
										<address class="color-grey-light3 mb-2 fs-0875">
											<?php the_sub_field('direccion') ?>
										</address>
										<p class="color-grey-light3 mb-2">
											<?php the_sub_field('schedule') ?>
										</p>

										<?php $link = get_sub_field('enlace_mapa');
										if($link) { 
											$link_url = $link['url'];
											$link_title = $link['title'];
											$link_target = $link['target'] ? $link['target'] : '_self'; ?>
											<a class="color-grey-light3 mb-2 d-block view-map underline" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
												<?php echo esc_html( $link_title ); ?>
											</a>
										<?php } ?>

										<?php $tel = get_sub_field('telefono');
										if (!empty($tel)) { ?>
											<a class="color-grey-light3 custom-direction_mas" href="tel:<?php echo $tel; ?>">
												<?php echo 'T. ' . $tel; ?>
											</a>
										<?php } ?>

										<a class="color-grey-light3 custom-direction_mas" href="mailto:<?php the_sub_field('email') ?>">
											<?php echo get_sub_field('email'); ?>
										</a>
									</div>

								<?php }
							} ?>
								
						</div>
							
					</div>

				</div>
			</div>
		</section>
	
	</div>
	
	

<?php
get_footer();
