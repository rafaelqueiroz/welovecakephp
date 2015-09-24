<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="cakephp, php">
    <meta name="author" content="rafaelfqf@gmail.com">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <?php
        echo $this->Html->css(array(
            '/font-awesome/font-awesome/css/font-awesome.min.css',
            'http://fonts.googleapis.com/css?family=Open+Sans:300,400,600italic,700%7CMontserrat:400,700%7CLato',
            '/bootstrap/css/bootstrap.min.css',
            '/owl-carousel/owl.carousel.css',
            '/masterslider/style/masterslider.css',
            '/masterslider/skins/default/style.css',
            'main.css'
        ));
        echo $this->Html->script('modernizr.js');
    ?>
    <title>We Love CakePHP</title>
</head>
<body>
    <div id="all">
        <header class="page-header">
            <div class="page-header-content container">
                <div class="menu-button-container">
                    <i id="menu-button" class="menu-button fa fa-reorder"></i>
                </div>
                <nav id="nav-top" class="nav-top">
                    <ul>
                        <li><a href="<?= $this->Url->build(array('action' => 'index'));?>">Home</a></li>
                    </ul>
                    <h1 class="logo-primary">
                        <?php echo $this->Html->image('logo.png');?>
                    </h1>
                    <div class="logo-secondary">
                        <?php echo $this->Html->image('logo.png', ['width' => 80, 'height' => 80]);?>
                    </div>
                    <ul>
                        <li><a href="<?php echo $this->Url->build(array('action' => 'about'));?>">Sobre</a></li>
                    </ul>                    
                </nav>
            </div>
        </header>        
        <section class="top-section">
            <div class="offset-borders">
                <?php if ($this->view !== 'training') { ?>
                <div id="header-course" class="full-header-container">
                    <div class="full-header">
                        <div class="container">
                            <a href="<?= $this->Url->build(array('action' => 'training'));?>">
                                <h1>CakePHP 3</h1>
                            </a>
                            <h3>Este curso permitirá se atualizar e ficar à frente da concorrência</h3>
                            <h3>17 Outubro - Boa Viagem, Recife - PE</h3>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </section>
        <?php echo $this->fetch('content');?>
        <footer class="page-footer">
            <div class="footer-dark">                
                <div class="container">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6 footer-column onscroll-animate" data-delay="300">
                                <h4>Treinamento</h4>
                                <p>
                                    CakePHP 3<br>
                                    Boa Viagem, Recife - PE<br>
                                    <span class="highlight">25 Setembro, 9:00 am - 5:00 pm</span>
                                </p>
                                <div class="margin-40"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6 footer-column onscroll-animate" data-delay="400">
                            </div>
                            <div class="col-sm-6 footer-column onscroll-animate" data-delay="500">
                                <h4>Contato</h4>
                                <p>Segunda Sexta: <span class="highlight">12:00 pm - 4:00 pm</span><br></p>
                                <div class="icon-opening-wrapper">
                                    <div class="icon-opening-container">
                                        <p class="icon-opening"><i class="fa fa-envelope"></i></p>
                                        <p class="icon-opening-content">rafaelfqf@gmail.com</p>
                                    </div>
                                </div>
                                <div class="margin-40"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <?php
        echo $this->Html->script(array(
            'jquery-1.11.1.min.js',
            '/bootstrap/js/bootstrap.min.js',
            '/owl-carousel/owl.carousel.min.js',
            '/masterslider/masterslider.min.js',
            'jquery.scrollTo.min.js',
            'jquery.stellar.min.js',
            'placeholder-fallback.js',
            'jquery.inview.min.js',
            'custom.js',
        ));
    ?>
    <script src="//cdnjs.cloudflare.com/ajax/libs/gist-embed/2.1/gist-embed.min.js"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-65366129-1', 'auto');
        ga('send', 'pageview');
    </script>    
</body>
</html>
