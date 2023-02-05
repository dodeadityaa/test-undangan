<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<script>
    window.onload = function disableScroll() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
        // Get the current page scroll position
        var x = window.scrollX;
        var y = window.scrollY;
        window.onscroll = function() {
            window.scrollTo(x, y);
        };
    }

    function enableScroll() {
        window.onscroll = function() {};
    }
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        // Add smooth scrolling to all links
        $("a").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function() {

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });
    });
</script>

<style type="text/css">
    #tamu {
        font-family: Georgia, serif;
    }
</style>
<style>
    img[alt="www.000webhost.com"] {
        display: none;
    }
</style>
<style>
    .belakang {
        opacity: 0.8;
        background: #b38e21;

    }

    .scrollpo {
        width: 100%;
        height: 200px;
        overflow: scroll;
        padding: 10px;
    }

    .justify {
        text-align: justify;
    }

    @font-face

    /*perintah untuk memanggil font eksternal*/
        {
        font-family: 'maytra';
        /*memberikan nama bebas untuk font*/
        src: url('cssundangan/fonts/maytra.ttf');
        /*memanggil file font eksternalnya di folder nexa*/
    }

    @font-face

    /*perintah untuk memanggil font eksternal*/
        {
        font-family: 'demo';
        /*memberikan nama bebas untuk font*/
        src: url('cssundangan/fonts/demo.otf');
        /*memanggil file font eksternalnya di folder nexa*/
    }
</style>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>undangan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montez" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie Flower" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=antipasto pro" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Carter One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Satisfy">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

    <!-- Animate.css -->
    <link rel="stylesheet" href="cssundangan/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="cssundangan/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="cssundangan/css/bootstrap.css">
    <!-- Superfish -->
    <link rel="stylesheet" href="cssundangan/css/superfish.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="cssundangan/css/magnific-popup.css">

    <link rel="stylesheet" href="cssundangan/css/style.css">
    <link rel="stylesheet" href="cssundangan/css/slide.css">
    <link rel="stylesheet" href="cssundangan/style3.css">


    <!-- Modernizr JS -->
    <script src="cssundangan/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>

    <audio id="audioNotifikasi">
        <source src="cssundangan/musik/musik.mp3" type="audio/mpeg">
    </audio>


    <div id="fh5co-wrapper">
        <div id="fh5co-page">

            <div class="fh5co-hero" data-section="home">
                <div class="fh5co-overlay"></div>
                <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(cssundangan/foto/prewedback.png);">
                    <div class="display-t">
                        <div class="display-tc">
                            <div class="container">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="animate-box">
                                        <h1>Christmas</h1>
                                        <h2>Youth Fatmawati25</h2>
                                        <p><span>17.12.2022</span></p>
                                    </div>
                                    <p id="" tamu>For Youth Generation
                                    <p>
                                    <p id="tamu">
                                        <font size="4">
                                        </font>
                                    </p>


                                    <a href="#mulai" class="btn-scroll scrollto" onclick="enableScroll();playAudio()" title="Scroll Down">
                                        <font size="6" face="Montez">Open Invitation</font><br>
                                        <a href="#mulai" class="btn-scroll scrollto" onclick="enableScroll();playAudio()" title="Scroll Down">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                            </svg></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- end:header-top -->
            <section id="mulai">
                <div id="fh5co-couple" class="fh5co-section-gray">
                    <div class="container">
                        <center><br>
                            <!--img src="cssundangan/foto/prewedback.png" style="width:300px;height:80px;"-->
                            <h1>Shalom</h1>

                            <font size="5" face="Satisfy">Hallo Semuanya!!! Gimana Kabarnya? Kita mau ngundang kalian
                                nih di acara Natal Youth GBI Fatmawati25 dengan Tema 'Warmful Home'✨.</font><br><br>

                        </center><br><br>

                        <div class="row animate-box">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="col-md-12 text-center heading-section">
                                    <font color="#b38e21" face="Merienda" size="5">Akan Di Laksanakan Pada</font>
                                    <p><strong>17 Desember 2022 &mdash; GBI Fatmawati</strong></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section id="waktu">
                <div id="fh5co-countdown">
                    <div class="container">
                        <br>
                        <center>
                            <h1 style="color:#ffffff;">Menuju Acara</h1>
                        </center>
                        <div class="row">

                            <div class="col-md-8 col-md-offset-2 text-center animate-box">
                                <p class="countdown">
                                    <span id="days"></span>
                                    <span id="hours"></span>
                                    <span id="minutes"></span>
                                    <span id="seconds"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <div id="fh5co-when-where" class="fh5co-section-gray">
                <div class="container">
                    <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                        <br>

                        <h2>Detail Acara</h2>
                    </div>

                    <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                        <div class="wedding-events">

                            <div class="ceremony-bg" style="background-image: url(cssundangan/foto/prewedback.png);">
                            </div>
                            <div class="desc">
                                <font face="montez" size="7" color="grey">Ibadah Natal</font><br>
                                <font size="4"><strong>Sabtu, 17 Oktober 2022,</strong></font><br>
                                <font size="3"><strong>17.00 PM - Selesai</strong></font><br>
                                <font size="2"><strong>Dress Code : Putih </strong></font><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                        <div class="wedding-events">

                            <div class="ceremony-bg" style="background-image: url(cssundangan/foto/prewedback.png);">
                            </div>
                            <div class="desc">
                                <font face="montez" size="7" color="grey">Pembicara</font><br>

                                <font face="Merienda" size="4"><strong>- Kak Rama -</strong></font><br>
                            </div>
                        </div>
                    </div>
                </div>
                <p>
                <div class="container">
                    <font color="grey" size="4" face="palatino">
                        <center>Sesungguhnya, seorang anak telah lahir bagi kita, seorang putra telah
                            dikaruniakan bagi kita, dan pemerintahan akan ada di bahunya; nama-Nya akan disebut:
                            “Penasihat Ajaib”, “Allah Yang Mahakuasa”, “Bapa Yang Kekal”, “Raja Damai”.

                            </p>


                            <span>Yesaya 9:5</span>
                        </center>
                    </font>
                    <br>
                </div>
                <section id="lokasi">
                    <div class="container">
                        <div class="col-md-12">
                            <center>
                                <br>
                                <font color="#353535" face="Montez" size="7">Google Maps</font>
                            </center>
                            <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.8029971450424!2d106.79344841535237!3d-6.289604963313886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1dd173ae331%3A0x9ab3a40f12bc9387!2sGBI%20Fatmawati!5e0!3m2!1sid!2sid!4v1670346346155!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


                        </div>
                    </div>
            </div>
        </div>
        </section>

        <section id="foto">
            <div id="fh5co-gallery" class="fh5co-section-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                            <br></br>

                            <h2>Youth Gallery</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="gallery animate-box">
                                <a class="gallery-img image-popup" href="cssundangan/foto/prewedback.png"><img src="cssundangan/foto/prewedback.png" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
                            </div>
                            <div class="gallery animate-box">
                                <a class="gallery-img image-popup" href="cssundangan/foto/prewedback.png"><img src="cssundangan/foto/prewedback.png" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="gallery animate-box">
                                <a class="gallery-img image-popup" href="cssundangan/foto/prewedback.png"><img src="cssundangan/foto/prewedback.png" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
                            </div>
                            <div class="gallery animate-box">
                                <a class="gallery-img image-popup" href="cssundangan/foto/prewedback.png"><img src="cssundangan/foto/prewedback.png" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="gallery animate-box">
                                <a class="gallery-img image-popup" href="cssundangan/foto/prewedback.png"><img src="cssundangan/foto/prewedback.png" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
                            </div>
                            <div class="gallery animate-box">
                                <a class="gallery-img image-popup" href="cssundangan/foto/prewedback.png"><img src="cssundangan/foto/prewedback.png" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <div id="fh5co-started" style="background-image:url(cssundangan/foto/prewedback.png);">


            <div class="slideshow-container">
                <div class="container">

                    <br>
                    <div class="row animate-box">
                        <div class="col-md-8 col-md-offset-2 text-center heading-section">
                            <font color="#353535" face="Montez" size="8">Kehadiran</font>

                        </div>
                    </div>
                    <div class="row animate-box">
                        <div class="col-md-10 col-md-offset-1">
                            <form method="post" action="jawab.php" class="form-inline">
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="nama" class="sr-only">Nama</label>
                                        <input type="text" class="form-control" name="nama" placeholder="Nama">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <form method="post" action="jawab.php">
                                            <td><input type="radio" name="jawaban" value="Hadir">Hadir</td>
                                            <td><input type="radio" name="jawaban" value="Tidak">Tidak Hadir</td>

                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <input type="submit" class="btn btn-primary btn-block" name="submit" value="kirim">
                                </div>

                            </form>


                        </div>
                    </div>



                </div>
            </div>
        </div>




        <div class="bottom-nav">
            <div class="bottom-link-nav">
                <a href="#foto" class="back-to-top">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-image" viewBox="0 0 16 16">
                        <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                        <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z" />
                    </svg>
                </a>
                <a href="#waktu">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                        <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                    </svg>
                </a>
                <a href="#mulai">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-heart" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l3.235 1.94a2.76 2.76 0 0 0-.233 1.027L1 5.384v5.721l3.453-2.124c.146.277.329.556.55.835l-3.97 2.443A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741l-3.968-2.442c.22-.28.403-.56.55-.836L15 11.105V5.383l-3.002 1.801a2.76 2.76 0 0 0-.233-1.026L15 4.217V4a1 1 0 0 0-1-1H2Zm6 2.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z" />
                    </svg>
                </a>
                <a href="#lokasi">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                    </svg>
                </a>
                <a onclick="pauseAudio()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" color="white" class="bi bi-volume-mute" viewBox="0 0 16 16">
                        <path d="M6.717 3.55A.5.5 0 0 1 7 4v8a.5.5 0 0 1-.812.39L3.825 10.5H1.5A.5.5 0 0 1 1 10V6a.5.5 0 0 1 .5-.5h2.325l2.363-1.89a.5.5 0 0 1 .529-.06zM6 5.04 4.312 6.39A.5.5 0 0 1 4 6.5H2v3h2a.5.5 0 0 1 .312.11L6 10.96V5.04zm7.854.606a.5.5 0 0 1 0 .708L12.207 8l1.647 1.646a.5.5 0 0 1-.708.708L11.5 8.707l-1.646 1.647a.5.5 0 0 1-.708-.708L10.793 8 9.146 6.354a.5.5 0 1 1 .708-.708L11.5 7.293l1.646-1.647a.5.5 0 0 1 .708 0z" />
                    </svg>
                </a>
            </div>

        </div>


        <footer>
            <div id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2>Terimakasih</h2>
                            <font color="white" size="4">Tuhan Yesus Memberkati</font><br><br><br>
                        </div>
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <p class="fh5co-social-icons">
                                <a href="https://www.instagram.com/youthfatmawati25/?igshid=ZmVmZTY5ZGE="><i class="icon-instagram"></i></a>
                                <a href="https://youtube.com/@GBIFatmawati25"><i class="icon-youtube"></i></a>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </footer>



    </div>
    <!-- END fh5co-page -->

    </div>
    <!-- END fh5co-wrapper -->

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
    <!-- jQuery -->
    <script src="cssundangan/dist/scripts.js"></script>

    <!--<script>
		var prevScrollpos = window.pageYOffset;
		window.onscroll = function () {
			var currentScrollPos = window.pageYOffset;
			if (prevScrollpos > currentScrollPos) {
				document.getElementById("navbar").style.top = "0";
			} else {
				document.getElementById("navbar").style.top = "-100px";
			}
			prevScrollpos = currentScrollPos;
		}
	</script> -->

    <script type="text/javascript">
        var el = document.getElementById("audioNotifikasi");

        function playAudio() {
            el.play();
        }

        function pauseAudio() {
            el.pause();
        }
    </script>

    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n => slides.length) {
                slideIndex = 1
            }
            if (n <= 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>


    <div style="text-align:right;position:fixed;z-index:9999999;bottom:0;width:auto;right:1%;cursor:pointer;line-height:0;display:block!important"><a title="Hosted on free web hosting 000webhost.com. Host your own website for FREE." target="_blank" href="https://www.000webhost.com/?utm_source=000webhostapp&utm_campaign=000_logo&utm_medium=website&utm_content=footer_img"><img src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png" alt="www.000webhost.com"></a></div>
    <script>
        function getCookie(t) {
            for (var e = t + "=", n = decodeURIComponent(document.cookie).split(";"), o = 0; o < n.length; o++) {
                for (var i = n[o];
                    " " == i.charAt(0);) i = i.substring(1);
                if (0 == i.indexOf(e)) return i.substring(e.length, i.length)
            }
            return ""
        }
        getCookie("hostinger") && (document.cookie = "hostinger=;expires=Thu, 01 Jan 1970 00:00:01 GMT;", location.reload());
        var wordpressAdminBody = document.getElementsByClassName("wp-admin")[0],
            notification = document.getElementsByClassName("notice notice-success is-dismissible"),
            hostingerLogo = document.getElementsByClassName("hlogo"),
            mainContent = document.getElementsByClassName("notice_content")[0];
        if (null != wordpressAdminBody && 0 < notification.length && null != mainContent) {
            var googleFont = document.createElement("link");
            googleFontHref = document.createAttribute("href"), googleFontRel = document.createAttribute("rel"), googleFontHref.value = "https://fonts.googleapis.com/css?family=Roboto:300,400,600,700", googleFontRel.value = "stylesheet", googleFont.setAttributeNode(googleFontHref), googleFont.setAttributeNode(googleFontRel);
            var css = "@media only screen and (max-width: 576px) {#main_content {max-width: 320px !important;} #main_content h1 {font-size: 30px !important;} #main_content h2 {font-size: 40px !important; margin: 20px 0 !important;} #main_content p {font-size: 14px !important;} #main_content .content-wrapper {text-align: center !important;}} @media only screen and (max-width: 781px) {#main_content {margin: auto; justify-content: center; max-width: 445px;}} @media only screen and (max-width: 1325px) {.web-hosting-90-off-image-wrapper {position: absolute; max-width: 95% !important;} .notice_content {justify-content: center;} .web-hosting-90-off-image {opacity: 1;}} @media only screen and (min-width: 769px) {.notice_content {justify-content: space-between;} #main_content {margin-left: 5%; max-width: 445px;} .web-hosting-90-off-image-wrapper {position: absolute; display: flex; justify-content: center; width: 50%; margin-left: 45%;}} .web-hosting-90-off-image {max-width: 90%;} .content-wrapper {min-height: 454px; display: flex; flex-direction: column; justify-content: center; z-index: 5} .notice_content {display: flex; align-items: center;} * {-webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;} .upgrade_button_red_sale{box-shadow: 0 2px 4px 0 rgba(255, 69, 70, 0.2); width: 264px; border: 0; border-radius: 3px; background-color: #FF5C62 !important; padding: 15px 55px !important; font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 600; color: #ffffff;} .upgrade_button_red_sale:hover{color: #ffffff !important; background: #d10303 !important;}",
                style = document.createElement("style"),
                sheet = window.document.styleSheets[0];
            style.styleSheet ? style.styleSheet.cssText = css : style.appendChild(document.createTextNode(css)), document.getElementsByTagName("head")[0].appendChild(style), document.getElementsByTagName("head")[0].appendChild(googleFont);
            var button = document.getElementsByClassName("upgrade_button_red")[0],
                link = button.parentElement;
            link.setAttribute("href", "https://www.hostinger.com/hosting-starter-offer?utm_source=000webhost&utm_medium=panel&utm_campaign=000-wp"), link.innerHTML = '<button class="upgrade_button_red_sale">Claim Deal</button>', (notification = notification[0]).setAttribute("style", "padding-bottom: 0; padding-top: 5px; background-color: #040713; background-size: cover; background-repeat: no-repeat; color: #ffffff; border-left-color: #040713;"), notification.className = "notice notice-error is-dismissible";
            var mainContentHolder = document.getElementById("main_content");
            mainContentHolder.setAttribute("style", "padding: 0;"), hostingerLogo[0].remove();
            var h1Tag = notification.getElementsByTagName("H1")[0];
            h1Tag.className = "000-h1", h1Tag.innerHTML = "Black Friday", h1Tag.setAttribute("style", 'color: white; font-family: "Roboto", sans-serif; font-size: 48px; font-weight: 700;');
            var h2Tag = document.createElement("H2");
            h2Tag.innerHTML = "Up to 90% off 4-year hosting plans + free domain, SSL & DDoS protection", h2Tag.setAttribute("style", 'color: white; margin: 10px 0 15px 0; font-family: "Roboto", sans-serif; font-size: 16px; font-weight: 400; line-height: 1;'), h1Tag.parentNode.insertBefore(h2Tag, h1Tag.nextSibling);
            var paragraph = notification.getElementsByTagName("p")[0];
            paragraph.innerHTML = "$<span style='font-size: 80px;'>2.49</span>/mo", paragraph.setAttribute("style", 'font-family: "Roboto", sans-serif; font-size: 48px; font-weight: 700; margin: 0;');
            var list = notification.getElementsByTagName("UL")[0];
            list.remove();
            var org_html = mainContent.innerHTML,
                new_html = '<div class="content-wrapper">' + mainContent.innerHTML + '</div><div class="web-hosting-90-off-image-wrapper"><img class="web-hosting-90-off-image" src="https://cdn.000webhost.com/000webhost/promotions/bf-2022-bottom-banner.png"></div>';
            mainContent.innerHTML = new_html;
            var saleImage = mainContent.getElementsByClassName("web-hosting-90-off-image")[0]
        }
    </script>
</body>

</html>