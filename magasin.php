<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Julie GADOURY</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Progress bar -->
    <script src="/js/pace.js"></script>
    <script src="/js/photo-gallery.js"></script>
    <!--Tracking Google Analytics-->
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-58346903-2']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
</head>

<body>
<!-- Facebook SDK -->
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '942573445787298',
            xfbml      : true,
            version    : 'v2.3'
        });
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<!-- Fin Facebook SDK -->

    <div class="container">
        <header id="header">
        <div class="row">
             <a href="index02.html">
                        <div class="col-md-12 juliegadoury"><span class="julie">Julie </span><span class="gadoury">GADOURY</span></div>
                        <div class="col-md-12 titre">conceptrice Web & graphique</div>
                        </a>
        </div>
        <div class="row">
            <div class="col-md-12"><!--MENU--->
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a href="index02.html">À propos de MOI<span class="sr-only">(current)</span></a></li>
                                <li><a href="projets.html">Mes PROJETS</a></li>
                                <li><a href="magasin.php">Ma BOUTIQUE</a></li>
                                <li><a href="joindre.html">Me JOINDRE</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>

            </div><!--FIN MENU--->

            </div>
</header>
<!----FIN EN-TETE--->

    <div class="row">
        <div class="col-lg-12 separateurGris"></div>
    </div>

<div class="container textGallerie">
        <div class="row">
           <div class="col-xs-10 col-center-block">
            <h3 class="titreCentre">
                MON CATALOGUE
            </h3>
            <p>Puisque que ma réalité est maintenant de passer plusieurs heures à mon bureau de travail en compagnie de mon ami l'ordi, je vous présente quelques objets qui agrémente ma nouvelle vie de 'geek'.</p></br>
            </div>
        </div>
</div>
        <ul class="row">
            <li class="col-md-4 col-sm-12 col-xs-12">
                <img class="img-responsive" src="img/catalogue/hammac.jpg"></br>
<form action="charge.php" method="POST">
                                      	<script
                                      			src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                      			data-key="pk_test_2uVngJUlwknHJP2fLNyifFc0"
                                      			data-amount="2000"
                                      			data-name="Demo Site"
                                      			data-description="2 widgets ($20.00)"
                                      			data-image="img/icon128x128.png">
                                      	</script>
                                      </form>
            </li>

          </ul>
<hr>
<!-- Footer -->
<div class="row">
           <div class="col-lg-12 col-center-block">
            <p class="copyright">Tous droits réservés © juliegadoury.ca 2015</p>
            </div>
        </div>


 </div> <!-- /container -->


    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->






    </div>





    </div><!-----Fin container--->

 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-body">
                          </div>
                        </div><!-- /.modal-content -->
                      </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- Bootstrap Javascript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<!--Modal--->
	<script>
 	$(document).ready(function(){
           $('li img').on('click',function(){
                var src = $(this).attr('src');
                var img = '<img src="' + src + '" class="img-responsive"/>';
                $('#myModal').modal();
                $('#myModal').on('shown.bs.modal', function(){
                    $('#myModal .modal-body').html(img);
                });
                $('#myModal').on('hidden.bs.modal', function(){
                    $('#myModal .modal-body').html('');
                });
           });
        })
     </script>
    <!--Google Analytics--->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-58346903-2', 'auto');
        ga('send', 'pageview');

    </script>

</body>
</html>