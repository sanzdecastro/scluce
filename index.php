<!DOCTYPE html>
<html lang="en-US">
<!-- <html lang="es-ES"> -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Santa & Cole - Euroluce</title>
    
    <script src="https://unpkg.com/lenis@1.2.3/dist/lenis.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
    <link href="/src/output.css" rel="stylesheet">
</head>

<body>
    <div class="page-template-landing-euroluce bg-blue-euroluce overflow-x-hidden transition duration-300 ease-in euroluce-landing">
        <!-- Menu items -->
        <nav>
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
                <img class="lang-en envelope" src="/assets/img/sobre.png">
                <img class="lang-es envelope" src="/assets/img/sobre-es.png">
            </section>
            <!-- Section Potatos -->
            <section id="second" class="potatos">
                <img class="lang-en potato potato1" src="/assets/img/potato.png">
                <img class="lang-es potato potato1" src="/assets/img/potato-es.png">
                <img class="potato potato2" src="/assets/img/potato-2.png">
            
            </section>
            <!-- Section Diptics -->
            <section id="third" class="diptics">
                <img class="lang-en diptic diptic-closed" src="/assets/img/diptic-closed.png">
                <img class="lang-en diptic diptic-opened" src="/assets/img/diptic-opened.png">
                <img class="lang-es diptic diptic-closed" src="/assets/img/diptic-closed-es.png">
                <img class="lang-es diptic diptic-opened" src="/assets/img/diptic-opened-es.png">
            </section>
            <!-- Section Bookmarks -->
            <section id="fourth" class="bookmarks">
                <img class="bookmark bookmark-front" src="/assets/img/bookmark-front.png">
                <img class="lang-en bookmark bookmark-back" src="/assets/img/bookmark-back.png">
                <img class="lang-es bookmark bookmark-back" src="/assets/img/bookmark-back-es.png">
            </section>
            <!-- Section Pre Photo -->
            <section id="fifth" class="pre-photos">
                <img class="pre-photo" src="/assets/img/pre-photo.png">
            </section>
            <!-- Section Main Photo -->
            <section  class="main-photos">
                <img class="main-photo" src="/assets/img/main-photo.jpg">
            </section>
            <!-- Introduction Products -->
            <section id="introduction" class="introduction text-white text-lead">
                <div class="col title">
                    <h2><?php _e('Euroluce 2025', 'landing-euroluce25'); ?></h2>
                    <h3><?php _e('Memoria y futuro. Familiaridad y sorpresa.', 'landing-euroluce25'); ?></h3>
                </div>
                <div class="col text">
                    <h2><?php _e('Hall 04, C06', 'landing-euroluce25'); ?></h2>
                    <p><?php _e('April 8-13', 'landing-euroluce25'); ?></p>
                    <p><?php _e('Laborum ea proident irure excepteur. <em>Mollit ad aliquip magna duis irure</em> proident dolore dolore adipisicing mollit aute laborum. Ea culpa occaecat proident id fugiat id anim. Consectetur nisi nulla et velit duis Lorem ea excepteur. Irure est officia nostrud ut eu magna aliqua cillum magna aliquip. Lorem aliqua non non aliquip adipisicing veniam.', 'landing-euroluce25'); ?></p>
                    <p><?php _e('Reprehenderit officia amet nostrud amet ullamco sunt dolor ipsum enim do. Excepteur sunt culpa officia sit non do et dolore ea. Lorem minim amet irure ut ea laborum culpa pariatur. Laboris sunt et amet cupidatat aute dolore ad aute dolore et enim pariatur anim magna amet. Sit incididunt exercitation aliqua et aliqua ex non tempor tempor aute. Magna veniam mollit culpa ea officia cupidatat laboris voluptate laboris laborum adipisicing incididunt ullamco. Do est voluptate magna eu proident.', 'landing-euroluce25'); ?></p>
                </div>
            </section>
            <!-- Products -->
            <section id="products">
                <p class=""><?php _e('Texto explicando los productos que presentamos en Euroluce 2025, Laborum ea proident irure excepteur. Mollit ad aliquip magna duis irure proident dolore dolore adipisicing mollit aute laborum.', 'landing-euroluce25'); ?></p>
                <!-- Products Index -->
                <div class="products-reel">
                    <a href="#alterna">
                        <div class="product-item">
                            <div class="image-wrapper">
                                <img  src="/assets/img/products/Alterna-Santa Cole-Euroluce-Enric-Badrinas-2025-2597.jpg">
                            </div>
                            <p>Alterna</p>
                        </div>
                    </a>
                    <a href="#bib-luz">
                        <div class="product-item">
                            <div class="image-wrapper">
                                <img  src="/assets/img/products/BibLuz_SantaCole_EnricBadrinas_2024_88_RET.jpg">
                            </div>
                            <p>Bib Luz</p>
                        </div>
                    </a>
                    <a href="#cesita-alubat">
                        <div class="product-item">
                            <div class="image-wrapper">
                                <img  src="/assets/img/products/Yosigo_Solo_Invierno_2024_Alubat_4752.jpg">
                            </div>
                            <p>Cestita Alubat</p>
                        </div>
                    </a>
                    <a href="#cirio-pana">
                        <div class="product-item">
                            <div class="image-wrapper">
                                <img  src="/assets/img/products/">
                            </div>
                            <p>Cirio Pana</p>
                        </div>
                    </a>
                    <a href="#gira-mini">
                        <div class="product-item">
                            <div class="image-wrapper">
                                <img  src="/assets/img/products/Gira-Mini-Coke-Bartrina-Clara-2025-0257.jpg">
                            </div>
                            <p>Gira Mini</p>
                        </div>
                    </a>
                    <a href="#bella-durmiente">
                        <div class="product-item">
                            <div class="image-wrapper">
                                <img  src="/assets/img/products/La_Bella_Durmiente_Jara_Varela_SantaCole_2023_04.jpg">
                            </div>
                            <p>La Bella Durmiente</p>
                        </div>
                    </a>
                    <a href="#la-colilla">
                        <div class="product-item">
                            <div class="image-wrapper">
                                <img  src="/assets/img/products/Mesita GO-La Colilla-Santa Cole-Euroluce-Enric-Badrinas-2025-2445.jpg">
                            </div>
                            <p>La Colilla</p>
                        </div>
                    </a>
                    <a href="#lamparaprima">
                        <div class="product-item">
                            <div class="image-wrapper">
                                <img  src="/assets/img/products/Lamparaprima-Coke-Bartrina-Casa-Costa-2025-0833.jpg">
                            </div>
                            <p>Lamparaprima</p>
                        </div>
                    </a>
                    <a href="#mesita-go">
                        <div class="product-item">
                            <div class="image-wrapper">
                                <img  src="/assets/img/products/Mesita-GO-Coke-Bartrina-Casa-Costa-2025-0775.jpg">
                            </div>
                            <p>Mesita GO</p>
                        </div>
                    </a>
                    <a href="#M64">
                        <div class="product-item">
                            <div class="image-wrapper">
                                <img  src="/assets/img/products/M64-Table-Santa Cole-Euroluce-Enric-Badrinas-2025-2389.jpg">
                            </div>
                            <p>M64</p>
                        </div>
                    </a>
                    <a href="#shiro">
                        <div class="product-item">
                            <div class="image-wrapper">
                                <img  src="/assets/img/products/Shiro-17-Bateria-Coke-Bartrina-Casa-Costa-2025-1108.jpg">
                            </div>
                            <p>Shiro</p>
                        </div>
                    </a>
                    <a href="#sylvestrina">
                        <div class="product-item">
                            <div class="image-wrapper">
                                <img  src="/assets/img/products/Sylvestrina-Blanca-Coke Bartrina-Vasto-2025-1504.jpg">
                            </div>
                            <p>Sylvestrina</p>
                        </div>
                    </a>
                    <a href="#tekio-mayor">
                        <div class="product-item">
                            <div class="image-wrapper">
                                <img  src="/assets/img/products/Tekio-Mayor-P2-Santa Cole-Euroluce-Enric-Badrinas-2025-2694.jpg">
                            </div>
                            <p>Tekiò Mayor</p>
                        </div>
                    </a>
                    <a href="#TMA">
                        <div class="product-item">
                            <div class="image-wrapper">
                                <img  src="/assets/img/products/TMA-Coke Bartrina-Vasto-2025-1150.jpg">
                            </div>
                            <p>TMA</p>
                        </div>
                    </a>
                </div>
                <!-- Products Gallery -->
                <div class="products-gallery">
                    <!-- Product card -->
                    <div id="gira-mini" class="product-card float-left">
                        <div class="product-card-header">
                            <div class="name"><?php _e('Gira Mini', 'landing-euroluce25'); ?></div>
                            <div class="author"><?php _e('J.M. Massana, J.M. Tremoleda, Mariano Ferrer, 2023', 'landing-euroluce25'); ?></div>
                        </div>
                        <div class="gallery">
                            <a href="/assets/img/products/Gira-Mini-Coke-Bartrina-Clara-2025-0257.jpg" data-fancybox="gira-mini" data-caption="">
                                <img src="/assets/img/products/Gira-Mini-Coke-Bartrina-Clara-2025-0257.jpg" />
                            </a>
                            
                            <a  href="/assets/img/products/Campana_Verano_2023_Cadaques_Arquitectura_G_Jara_Varela_09_230379_Gira_Mini.jpg" data-fancybox="gira-mini" data-caption="">
                                <img src="/assets/img/products/Campana_Verano_2023_Cadaques_Arquitectura_G_Jara_Varela_09_230379_Gira_Mini.jpg" />
                            </a>
                        </div>
                        <div class="description">
                            <h3><?php _e('Rotation in Hand', 'landing-euroluce25'); ?></h3>
                            <p><?php _e('Gira Mini distills the essence of portable lighting into a compact design that retains the virtues of its older sibling. An ingenious ball-joint base, paired with an adjustable shade around a spherical LED core, grants complete freedom of movement, directing light precisely where it is needed. With its battery-powered mobility and dual light intensity, Gira Mini is both exacting and discreet –illuminating the relevant area without drawing attention to itself.', 'landing-euroluce25'); ?></p>
                        </div>
                    </div>

                    <!-- Product card -->
                    <div id="cirio-pana" class="product-card float-right">
                        <div class="product-card-header">
                            <div class="name"><?php _e('Cirio Pana', 'landing-euroluce25'); ?></div>
                            <div class="author"><?php _e('Antoni Arola, 2025', 'landing-euroluce25'); ?></div>
                        </div>
                        <div class="gallery">
                            <a href="/assets/img/products/gira-mini.jpg" data-fancybox="gira-mini" data-caption="">
                                <img src="/assets/img/products/gira-mini.jpg" />
                            </a>
                            
                            <a  href="/assets/img/products/bella.jpg" data-fancybox="gira-mini" data-caption="">
                                <img src="/assets/img/products/bella.jpg" />
                            </a>
                        </div>
                        <div class="description">
                            <h3><?php _e('Singular Grooves', 'landing-euroluce25'); ?></h3>
                            <p><?php _e('Cirio Pana reimagines the traditional long wax candle, a historic ritual object, through the delicate lens of porcelain. More powerful than that of its smaller counterpart, its luminous disc is encased in a shade as tall as it is wide, producing a light that is both focused and expansive. With unique nuances in every pieces, its grooved texture recalls the softness and depth of corduroy (pana in Spanish), traced by fine vertical ridges.', 'landing-euroluce25'); ?></p>
                            <p><?php _e('Handcrafted in <a href="https://sargadelos.com/es/" target="_blank">Sargadelos</a>', 'landing-euroluce25'); ?></p>
                        </div>
                    </div>

                    
                    
                    <!-- Product card -->
                    <div id="cesita-alubat" class="product-card float-right">
                        <div class="product-card-header">
                            <div class="name"><?php _e('Cestita Alubat', 'landing-euroluce25'); ?></div>
                            <div class="badge"><?php _e('New finishes', 'landing-euroluce25'); ?></div>
                            <div class="author"><?php _e('Miguel Milá, 1981', 'landing-euroluce25'); ?></div>
                        </div>
                        <div class="gallery">
                            <a href="/assets/img/products/Yosigo_Solo_Invierno_2024_Alubat_4752.jpg" data-fancybox="alubat" data-caption="">
                                <img src="/assets/img/products/Yosigo_Solo_Invierno_2024_Alubat_4752.jpg" />
                            </a>
                            <a  href="/assets/img/products/Yosigo_Solo_Invierno_2024_Alubat_4770_RET.jpg" data-fancybox="alubat" data-caption="">
                                <img src="/assets/img/products/Yosigo_Solo_Invierno_2024_Alubat_4770_RET.jpg" />
                            </a>
                        </div>
                        <div class="description">
                            <h3><?php _e('A Companion for Every Adventure', 'landing-euroluce25'); ?></h3>
                            <p><?php _e("Cestita Alubat's comfortable handle makes it suitable for all kinds of excursions—indoor or out.", 'landing-euroluce25'); ?></p>
                            <p><?php _e('The robustness of aluminum, available in black, English green or reddish orange, contrasts with the delicacy of its original wood-and-glass version. Inspired by the traditional lanterns that light coastal homes, country estates, and open terraces, the Cesta family features structures that embrace and elevate the luminous globe, adapting it to different uses. Cestita Alubat is the sturdiest of them all: solid yet lightweight, with three light settings –full, medium or low–, it is the perfect companion for any journey', 'landing-euroluce25'); ?></p>
                        </div>
                    </div>

                    <!-- Product card -->
                    <div  id="TMA" class="product-card float-left">
                        <div class="product-card-header">
                            <div class="name"><?php _e('TMA', 'landing-euroluce25'); ?></div>
                            <div class="author"><?php _e('Miguel Milá, 2025', 'landing-euroluce25'); ?></div>
                        </div>
                        <div class="gallery">
                        
                            <a href="/assets/img/products/TMA-Coke Bartrina-Vasto-2025-1150.jpg" data-fancybox="TMA" data-caption="">
                                <img src="/assets/img/products/TMA-Coke Bartrina-Vasto-2025-1150.jpg" />
                            </a>
                            <a href="/assets/img/products/TMA-Sylvestrina-Coke-Bartrina-Clara-2025-0435.jpg" data-fancybox="TMA" data-caption="">
                                <img src="/assets/img/products/TMA-Sylvestrina-Coke-Bartrina-Clara-2025-0435.jpg" />
                            </a>
                        </div>
                        <div class="description">
                            <h3><?php _e('Refinement Upon Refinement', 'landing-euroluce25'); ?></h3>
                            <p><?php _e('With a mastery of form and function, Miguel Milá distilled the three basic elements of any lamp: structure, electrical components and shade. A cross-shaped base, a sturdy vertical shaft and a lightweight frame supporting the bulb holder. The shade rotates around its axis and adjusts in height with a simple rubber ring –like a sail hoisted up a mast. And, of course, its hallmark on/off switch: a gentle tug on the cord. Light yet robust, it is easily moved.', 'landing-euroluce25'); ?></p>
                            <p><?php _e("A direct evolution of the TMM (1961), this lesser known yet even more refined design is the culmination of Miguel Milá’s relentless quest for simplicity. Stripped to its essence, nothing can be taken away. TMA's naked form speaks to its economy: this is the most accessible and youthful member of the TM family", 'landing-euroluce25'); ?></p>
                        </div>
                    </div>

                    <!-- Product card -->
                    <div id="alterna" class="product-card float-right">
                        <div class="product-card-header">
                            <div class="name"><?php _e('Alterna', 'landing-euroluce25'); ?></div>
                            <div class="author"><?php _e('Júlia Esqué, 2025', 'landing-euroluce25'); ?></div>
                        </div>
                        <div class="gallery">
                            <a href="/assets/img/products/Alterna-Santa Cole-Euroluce-Enric-Badrinas-2025-2597.jpg" data-fancybox="alterna" data-caption="">
                                <img src="/assets/img/products/Alterna-Santa Cole-Euroluce-Enric-Badrinas-2025-2597.jpg" />
                            </a>
                            
                            <a  href="/assets/img/products/Alterna-Coke-Bartrina-Casa-Costa-2025-1051-RET.jpg" data-fancybox="alterna" data-caption="">
                                <img src="/assets/img/products/Alterna-Coke-Bartrina-Casa-Costa-2025-1051-RET.jpg" />
                            </a>
                        </div>
                        <div class="description">
                            <h3><?php _e('Alternating between Full and Empty', 'landing-euroluce25'); ?></h3>
                            <p><?php _e('Tension, transparency, balance. A structured frame extends a square-sectioned prismatic shade, crafted from photographic filter material. The rigidity of the skeleton transforms the flat into volume, shaping a body. Four stitched pockets secure transverse rods that define the rhythm of the surface. A translucent skin refines the light.', 'landing-euroluce25'); ?></p>
                            <p><?php _e('Alterna floats solo or in clusters. Its modular design allows for scalable compositions that expand freely across space in vertical or horizontal formations, alternating moments of expression and stillness', 'landing-euroluce25'); ?></p>
                        </div>
                    </div>

                    
                    <!-- Product card -->
                    <div  id="lamparaprima" class="product-card float-left">
                        <div class="product-card-header">
                            <div class="name"><?php _e('Refinement Upon Refinement', 'landing-euroluce25'); ?></h3>
                            <p><?php _e('Lamparaprima', 'landing-euroluce25'); ?></div>
                            <div class="author"><?php _e('Pete Sans, 1979', 'landing-euroluce25'); ?></div>
                        </div>
                        <div class="gallery">
                            <a href="/assets/img/products/Lamparaprima-Coke-Bartrina-Casa-Costa-2025-0833.jpg" data-fancybox="lamparaprima" data-caption="">
                                <img src="/assets/img/products/Lamparaprima-Coke-Bartrina-Casa-Costa-2025-0833.jpg" />
                            </a>
                            <a href="/assets/img/products/Lamparaprima-Coke-Bartrina-Casa-Costa-2025-0908.jpg" data-fancybox="lamparaprima" data-caption="">
                                <img src="/assets/img/products/Lamparaprima-Coke-Bartrina-Casa-Costa-2025-0908.jpg" />
                            </a>
                        </div>
                        <div class="description">
                            <h3><?php _e('Inventive Ubiquity', 'landing-euroluce25'); ?></h3>
                            <p><?php _e('Designed to rest on a desk or hang from a wall, Lamparaprima consists of a metal rod supporting an LED tube, encased in a rotating visor-like shade. By bending and twisting a clothes hanger, Pete Sans came upon an ingenious and expressive solution that would become his first commercial lamp and the second product ever issued by Santa & Cole.', 'landing-euroluce25'); ?></p>
                            <p><?php _e("“There is always an element of invention in my work”, explains the creator. The 2025 version introduces a low-voltage (12V) system that gives the structure itself the ability to conduct electricity. This requires an LED light source, even if it's still visually reminiscent of a traditional soffit, and further allows it to operate with a simple rotation of the shade to switch it on or off.", 'landing-euroluce25'); ?></p>
                        </div>
                    </div>
                    
                    <!-- Product card -->
                    <div id="tekio-mayor" class="product-card float-right">
                        <div class="product-card-header">
                            <div class="name"><?php _e('Tekiò Mayor', 'landing-euroluce25'); ?></div>
                            <div class="author"><?php _e('Anthony Dickens, 2025', 'landing-euroluce25'); ?></div>
                        </div>
                        <div class="gallery">
                            <a  href="/assets/img/products/Tekio-Mayor-P2-Santa Cole-Euroluce-Enric-Badrinas-2025-2694.jpg" data-fancybox="tekio-mayor" data-caption="">
                                <img src="/assets/img/products/Tekio-Mayor-P2-Santa Cole-Euroluce-Enric-Badrinas-2025-2694.jpg">
                            </a>
                            <a  href="/assets/img/products/Tekio-Mayor-Casa-Costa-Coke-Bartrina-2025-0730_RET.jpg" data-fancybox="tekio-mayor" data-caption="">
                                <img src="/assets/img/products/Tekio-Mayor-Casa-Costa-Coke-Bartrina-2025-0730_RET.jpg">
                            </a>
                        </div>
                        <div class="description">
                            <h3><?php _e('A Presence That Commands', 'landing-euroluce25'); ?></h3>
                            <p><?php _e('Tekiò Mayor is the grander expression of Tekiò. Standing at the same height and with equal luminosity as its smaller sibling, it exudes a forceful presence. As a single module, it evokes the luminous sculptures of Isamu Noguchi; as a double, it recalls the grand rice-paper lanterns that often grace the entrances of Shinto temples.', 'landing-euroluce25'); ?></p>
                            <p><?php _e('Tekiò –meaning “adaptation” in Japanese– merges centuries-old craftsmanship with Warm to Dim LED technology, allowing for adjustable intensity and color temperature in tandem. Highly technical structures wrapped in handmade Japanese paper. Alone or arranged in series, its radiance shifts from a whisper to an exclamation.', 'landing-euroluce25'); ?></p>
                        </div>
                    </div>
                
                    
                    <!-- Product card -->
                    <div id="mesita-go" class="product-card float-left">
                        <div class="product-card-header">
                            <div class="name"><?php _e('Mesita GO', 'landing-euroluce25'); ?></div>
                            <div class="author"><?php _e('Gabriel Ordeig Cole, 1988', 'landing-euroluce25'); ?></div>
                        </div>
                        <div class="gallery">
                            <a href="/assets/img/products/Mesita-GO-Coke-Bartrina-Casa-Costa-2025-0775.jpg" data-fancybox="MesitaGO" data-caption="">
                                <img src="/assets/img/products/Mesita-GO-Coke-Bartrina-Casa-Costa-2025-0775.jpg" />
                            </a>
                            <a  href="/assets/img/products/mesita-go-2.jpg" data-fancybox="MesitaGO" data-caption="">
                                <img src="/assets/img/products/mesita-go-2.jpg" />
                            </a>
                        </div>
                        <div class="description">
                            <h3><?php _e('Kindling a Spark.', 'landing-euroluce25'); ?></h3>
                            <p><?php _e('The Mesita GO fuses functionality with sculptural charm. Chrome legs, capped with feet resembling match heads, elevate a black-stained oak tabletop with effortless grace.', 'landing-euroluce25'); ?></p>
                            <p><?php _e('Available in two options: a sleek flat surface or with a discreet secretaire drawer. Unusually robust for its size, it relocates easily while bearing heavy loads.', 'landing-euroluce25'); ?></p>
                        </div>
                    </div>

                    <!-- Product card -->
                    <div  id="bib-luz" class="product-card float-right">
                        <div class="product-card-header">
                            <div class="name"><?php _e('Bib Luz', 'landing-euroluce25'); ?></div>
                            <div class="author"><?php _e('Oscar Tusquets, 1986', 'landing-euroluce25'); ?></div>
                        </div>
                        <div class="gallery">
                            <a  href="/assets/img/products/BibLuz_SantaCole_EnricBadrinas_2024_88_RET.jpg" data-fancybox="bib-luz" data-caption="">
                                <img src="/assets/img/products/BibLuz_SantaCole_EnricBadrinas_2024_88_RET.jpg">
                            </a>
                            <a  href="/assets/img/products/bib-luz-2.jpg" data-fancybox="bib-luz" data-caption="">
                                <img src="/assets/img/products/bib-luz-2.jpg" />
                            </a>
                            <a  href="/assets/img/products/Bib-Luz-Coke-Bartrina-Casa-Costa-2025-1016.jpg" data-fancybox="bib-luz" data-caption="">
                                <img src="/assets/img/products/Bib-Luz-Coke-Bartrina-Casa-Costa-2025-1016.jpg" />
                            </a>
                        </div>
                        <div class="description">
                            <h3><?php _e('A Book Among More Books', 'landing-euroluce25'); ?></h3>
                            <p><?php _e("In 1986, triggered by the challenge of illuminating his own library, Oscar Tusquets envisioned a lamp that could integrate itself in any shelf, taking up minimal space while offering adaptable lighting. In his own words, “What better form than a book itself?”.", 'landing-euroluce25'); ?></p>
                            <p><?php _e('With its metal book-shaped body (in white or gray aluminum), Bib Luz sits discreetly on shelves. From its “spine,” a slender, rotating arm extends, ending in an adjustable spotlight that highlights any desired corner. Multiple units can be interconnected in series, forming harmonious compositions at varying levels. The result is always brilliant, though never dazzling; ideal for those who search among the literature.', 'landing-euroluce25'); ?></p>
                        </div>
                    </div>
                    
                    <!-- Product card -->
                    <div id="bella-durmiente" class="product-card float-left">
                        <div class="product-card-header">
                            <div class="name"><?php _e('La Bella Durmiente', 'landing-euroluce25'); ?></div>
                            <div class="author"><?php _e('Nina Masó and Gabriel Ordeig Cole, 1985', 'landing-euroluce25'); ?></div>
                        </div>
                        <div class="gallery">
                            <a  href="/assets/img/products/La_Bella_Durmiente_Jara_Varela_SantaCole_2023_04.jpg" data-fancybox="bella-durmiente" data-caption="">
                                <img src="/assets/img/products/La_Bella_Durmiente_Jara_Varela_SantaCole_2023_04.jpg">
                            </a>
                            <a  href="/assets/img/products/La-Bella-Durmiente-Coke-Bartrina-Vasto-2025-1422.jpg" data-fancybox="bella-durmiente" data-caption="">
                                <img src="/assets/img/products/La-Bella-Durmiente-Coke-Bartrina-Vasto-2025-1422.jpg">
                            </a>
                            
                        </div>
                        <div class="description">
                            <h3><?php _e('Awaken to a Joyful Light', 'landing-euroluce25'); ?></h3>
                            <p><?php _e('Designed by Santa & Cole co-founders Gabriel Ordeig Cole and Nina Masó, La Bella Durmiente (Sleeping Beauty) is a totemic volume that explores the expressive potential of color, playing with contrasts between warm and cold hues. The result is a visually dynamic and balanced composition. Contemplation and imagination. A composition that nods to the geometric abstraction of Piet Mondrian or Theo van Doesburg.', 'landing-euroluce25'); ?></p>
                            <p><?php _e('Born in 1986 as a defiant response to an era dominated by cold halogen lights and stark metal structures, this lamp championed colorful fluorescence (now LED) when this light source was considered blue and soulless.', 'landing-euroluce25'); ?></p>
                            <p><?php _e("<em>“It was a time of artistic expansion without predefined limits–very sweet, very beautiful. Critics ignited a debate to draw a line between art and design, an absurd distinction that only stifled creativity. That’s when La Bella Durmiente was born.”</em> —Xano Armenter", 'landing-euroluce25'); ?></p>
                            <p><?php _e('The shade is now printed with pigmented inks on a special paper, achieving a clean, precise, and rich finish. A transparent laminate protects it from moisture and the passage of time. Two tiered black-lacquered wooden end caps frame this sculptural piece, secured with a threaded closure.', 'landing-euroluce25'); ?></p>
                            <p><?php _e('The 2025 reedition maintains the original dimensions, allowing new screens to be replaced on old structures.', 'landing-euroluce25'); ?></p>
                        </div>
                    </div>

                    <!-- Product card -->
                    <div  id="shiro" class="product-card float-right">
                        <div class="product-card-header">
                            <div class="name"><?php _e('Shiro', 'landing-euroluce25'); ?></div>
                            <div class="author"><?php _e('Antoni Arola 1998 / 2025', 'landing-euroluce25'); ?></div>
                            <div class="badge"><?php _e('Delta de Plata 1999', 'landing-euroluce25'); ?></div>
                        </div>
                        <div class="gallery">
                            <a  href="/assets/img/products/Shiro-17-Bateria-Coke-Bartrina-Casa-Costa-2025-1108.jpg" data-fancybox="shiro" data-caption="">
                                <img src="/assets/img/products/Shiro-17-Bateria-Coke-Bartrina-Casa-Costa-2025-1108.jpg">
                            </a>
                            <a  href="/assets/img/products/Shiro_25_45_exterior_ON_JaraVarela_Delta_SantaCole_2023_10_RET.jpg" data-fancybox="shiro" data-caption="">
                                <img src="/assets/img/products/Shiro_25_45_exterior_ON_JaraVarela_Delta_SantaCole_2023_10_RET.jpg">
                            </a>
                        </div>
                        <div class="description">
                            <h3><?php _e('Contemplative Serenity', 'landing-euroluce25'); ?></h3>
                            <p><?php _e('Shiro, which translate as “white” in Japanese, carries deep significance in the country’s philosophical tradition, evoking emptiness, honor, purity, and calm. Far from simply being absence of color, Shiro represents a void brimming with potential, an expression of energy contained. A spiritual openness that invites contemplation and discovery.', 'landing-euroluce25'); ?></p>
                            <p><?php _e('This outdoor lamp draws a dialogue between architecture and nature, integrating naturally into the landscape. Its rational, refined structure does not enclose but filters light through slats arranged in a cubic form. The result is a soft, grazing illumination that creates a tranquil atmosphere, balancing the inhabited outdoor space with the open natural world.', 'landing-euroluce25'); ?></p>
                            <p><?php _e('Available in three sizes, it can be fixed in place or stand freely. The smaller offers additional versatility: battery-operated, wired, or elevated as a beacon.', 'landing-euroluce25'); ?></p>
                        </div>
                    </div>
                    
                    <!-- Product card -->
                    <div  id="sylvestrina" class="product-card float-left">
                        <div class="product-card-header">
                            <div class="name"><?php _e('Sylvestrina', 'landing-euroluce25'); ?></div>
                            <div class="badge"><?php _e('New Finish', 'landing-euroluce25'); ?></div>
                            <div class="author"><?php _e('Enric Sòria, Jordi Garcés 1974', 'landing-euroluce25'); ?></div>
                            <div class="badge"><?php _e('IF Design Product design Hannover 2021', 'landing-euroluce25'); ?></div>
                        </div>
                        <div class="gallery">
                            <a  href="/assets/img/products/Sylvestrina-Blanca-Coke Bartrina-Vasto-2025-1504.jpg" data-fancybox="sylvestrina" data-caption="">
                                <img src="/assets/img/products/Sylvestrina-Blanca-Coke Bartrina-Vasto-2025-1504.jpg">
                            </a>
                            <a  href="/assets/img/products/Sylvestrina-Blanca-Coke-Bartrina-Clara-2025-0444.jpg" data-fancybox="sylvestrina" data-caption="">
                                <img src="/assets/img/products/Sylvestrina-Blanca-Coke-Bartrina-Clara-2025-0444.jpg">
                            </a>
                        </div>
                        <div class="description">
                            <h3><?php _e('A State-of-the-Art Oil Lamp', 'landing-euroluce25'); ?></h3>
                            <p><?php _e('Freed of all oils, kerosene or cables, Sylvestrina is at hand, ready for any occasion. Named after a fisherman from the Costa Brava –Silvestre, a tall, lean, and elegant character-, it leaves barely a trace on the table, much like a wine bottle. A simple press on its base turns it on, adjusting the intensity between full, medium, or off.', 'landing-euroluce25'); ?></p>
                            <p><?php _e('Sylvestrina travels flat-packed for easy transport and disassembles into three components –the battery base, light source and surrounding screen—, ensuring easy repair and a long lifespan.', 'landing-euroluce25'); ?></p>
                        </div>
                    </div>
                
                    <!-- Product card -->
                    <div id="M64" class="product-card float-right">
                        <div class="product-card-header">
                            <div class="name"><?php _e('M64', 'landing-euroluce25'); ?></div>
                            <div class="author"><?php _e('Miguel Milá, 2024', 'landing-euroluce25'); ?></div>
                        </div>
                        <div class="gallery">
                            <a  href="/assets/img/products/M64-Table-Santa Cole-Euroluce-Enric-Badrinas-2025-2389.jpg" data-fancybox="M64" data-caption="">
                                <img src="/assets/img/products/M64-Table-Santa Cole-Euroluce-Enric-Badrinas-2025-2389.jpg">
                            </a>
                            <a  href="/assets/img/products/M64-table-Blanca-Yosigo-2024-244553.jpg" data-fancybox="M64" data-caption="">
                                <img src="/assets/img/products/M64-table-Blanca-Yosigo-2024-244553.jpg">
                            </a>
                        </div>
                        <div class="description">
                            <h3><?php _e('A Historic Silhouette', 'landing-euroluce25'); ?></h3>
                            <p><?php _e('The M64 desk lamp is the last evolution of Miguel Milá’s award-winning 1964 pendant lamp, which won the Gold Delta Award and became a landmark in Spanish design history, at its inception as a professional discipline.', 'landing-euroluce25'); ?></p>
                            <p><?php _e('True to its origins, this version translates the lamp’s fundamental elements into a compact tabletop format, featuring a chrome metal structure that highlights its voluptuous, sensuous shade, available in 10 different finishes. It casts a focused cone of light onto the surface while allowing a soft glow to radiate through its filtered upper opening.', 'landing-euroluce25'); ?></p>
                        </div>
                    </div>

                    <!-- Product card -->
                    <div id="la-colilla" class="product-card float-right 2xl:float-left">
                        <div class="product-card-header">
                            <div class="name"><?php _e('La Colilla', 'landing-euroluce25'); ?></div>
                            <div class="author"><?php _e('Carles Riart, 1976', 'landing-euroluce25'); ?></div>
                        </div>
                        <div class="gallery">
                            <a  href="/assets/img/products/Mesita GO-La Colilla-Santa Cole-Euroluce-Enric-Badrinas-2025-2445.jpg" data-fancybox="colilla" data-caption="">
                                <img src="/assets/img/products/Mesita GO-La Colilla-Santa Cole-Euroluce-Enric-Badrinas-2025-2445.jpg">
                            </a>
                            <a  href="/assets/img/products/Campana_Verano_2023_Cadaques_Arquitectura_G_Jara_Varela_020_230441_La_Colilla_Babel.jpg" data-fancybox="colilla" data-caption="">
                                <img src="/assets/img/products/Campana_Verano_2023_Cadaques_Arquitectura_G_Jara_Varela_020_230441_La_Colilla_Babel.jpg">
                            </a>
                        </div>
                        <div class="description">
                            <h3><?php _e('The Subtlety of Minimum Light', 'landing-euroluce25'); ?></h3>
                            <p><?php _e('Some lights can only be seen at night. A sky full of stars. Fireflies dancing in an open field. The embers of a campfire, glowing as the sun fades. This lamp is designed as a companion for music, for conversation, for love. Where the night falls, La Colilla illuminates.', 'landing-euroluce25'); ?></p>
                            <p><?php _e('Designed by Carles Riart in 1976, produced by chance and distributed by Gabriel Ordeig Cole, from his first venture Comercial Estelar, La Colilla was Santa & Cole’s first edited product back in 1985.', 'landing-euroluce25'); ?></p>
                            <p><?php _e('A translucent tube houses the small neon bulbs which provide the illumination. La Colilla pendant lamp is a low-energy light with an exceptionally long lifespan; it comes without a switch so that it is always left on. Hanging from a delicate thread, it has an appearance of floating in mid-air. It has a variety of uses: in the bedroom or the lounge, providing helpful and guiding light in hallways, stairs or porches, and even as a children’s night light for sweet dreams.', 'landing-euroluce25'); ?></p>
                        </div>
                    </div>
                </div>
            </section>
            <section id="downloads">
                <h2><?php _e('Downloads', 'landing-euroluce25'); ?></h2>
                <p><?php _e('Texto explicativo. Laborum ea proident irure excepteur. Mollit ad aliquip magna duis irure proident dolore dolore adipisicing mollit aute laborum. Do labore nulla cupidatat cillum dolor consequat aliqua nisi esse ea ea excepteur commodo. Tempor ea do irure exercitation ea exercitation fugiat. Quis elit voluptate esse in est elit eiusmod ea excepteur. Adipisicing id consequat amet ad.', 'landing-euroluce25'); ?></p>
                <div class="kits">
                    <a href="">
                        <div class="kit">
                            <img src="assets/img/catalogues/presskit.jpg">
                            <p><?php _e('Catálogo general', 'landing-euroluce25'); ?></p>
                        </div>
                    </a>
                    <a href="">
                        <div class="kit">
                            <img src="assets/img/catalogues/presskit.jpg">
                            <p><?php _e('Presskit', 'landing-euroluce25'); ?></p>
                        </div>
                    </a>
                    <a href="">
                        <div class="kit">
                            <!-- <img src="assets/img/catalogues/presskit.jpg"> -->
                            <p class="dam-link"><?php _e('o mira nuestro DAM de imágenes', 'landing-euroluce25'); ?></p>
                        </div>
                    </a>
                </div>
            </section>
            <section id="contact-form">
                <h2><?php _e('Contact form', 'landing-euroluce25'); ?></h2>
                <p><?php _e('Texto explicativo Contact Form', 'landing-euroluce25'); ?></p>
            </section>
        </main>
    </div>
</body>
<script src="/main.js"></script>

</html>