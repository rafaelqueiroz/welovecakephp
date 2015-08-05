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
                        <li><a href="<?php echo $this->Url->build(array('action' => 'index'));?>">Home</a></li>
                    </ul>
                    <h1 class="logo-primary">
                        <?php echo $this->Html->image('logo.png');?>
                    </h1>
                    <div class="logo-secondary">
                        <?php echo $this->Html->image('logo.png');?>
                    </div>
                    <ul>
                        <li><a href="<?php echo $this->Url->build(array('action' => 'about'));?>">Sobre</a></li>
                    </ul>                    
                </nav>
            </div>
        </header>        
        <section class="top-section">
            <div class="offset-borders">
            </div>
        </section>
        <?php echo $this->fetch('content');?>
        <footer class="page-footer">
            <div class="footer-dark">
                <div class="container">
                    <p class="site-info"><?php echo date('Y');?> All rights reserved.</p>
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
