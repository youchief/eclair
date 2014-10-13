<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
        <head>
                <?php echo $this->Html->charset(); ?>
                <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
                <meta name="viewport" content="width=device-width">
                <title>
                        Eclair - <?php echo $title_for_layout; ?>
                </title>
                
                <meta name="description" content="<?php echo strip_tags($this->fetch('description'));?>">
                <meta name="keywords" content="<?php echo strip_tags($this->fetch('keywords'));?>">

                

                <link rel="shortcut icon" href="/favicon.ico">
                <link rel="icon" sizes="16x16 32x32 64x64" href="/favicon.ico">
                <link rel="icon" type="image/png" sizes="196x196" href="/favicon-196.png">
                <link rel="icon" type="image/png" sizes="160x160" href="/favicon-160.png">
                <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96.png">
                <link rel="icon" type="image/png" sizes="64x64" href="/favicon-64.png">
                <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32.png">
                <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16.png">
                <link rel="apple-touch-icon" sizes="152x152" href="/favicon-152.png">
                <link rel="apple-touch-icon" sizes="144x144" href="/favicon-144.png">
                <link rel="apple-touch-icon" sizes="120x120" href="/favicon-120.png">
                <link rel="apple-touch-icon" sizes="114x114" href="/favicon-114.png">
                <link rel="apple-touch-icon" sizes="76x76" href="/favicon-76.png">
                <link rel="apple-touch-icon" sizes="72x72" href="/favicon-72.png">
                <link rel="apple-touch-icon" href="/favicon-57.png">
                <meta name="msapplication-TileColor" content="#FFFFFF">
                <meta name="msapplication-TileImage" content="/favicon-144.png">
                <meta name="msapplication-config" content="/browserconfig.xml">

                <?php echo $this->fetch('meta'); ?>

                <?php
                echo $this->Html->meta('icon');

                echo $this->Html->css(array(
                    'vendor/twitter/bootstrap.min',
                    'vendor/fontawesome/font-awesome.min',
                    'vendor/3xw/fonts-path-fix',
                    'vendor/3xw/cake',
                    'vendor/3xw/helpers',
                    'theme'
                ));

                echo $this->fetch('css');
                ?>

                <!--[if lt IE 8]>
                <?php echo $this->Html->css('vendor/coliff/bootstrap-ie7'); ?>
                <![endif]-->
        </head>
        <body>
                <!--[if lt IE 8]>
                                    <div class="container">
                                        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
                                    </div>
                                <![endif]-->

                <div class="row affix-row">
                        <?php echo $this->element('menu'); ?>
                        <div class="col-sm-9 col-md-10 affix-content  ">
                                <div id="content" class="">
                                        <?php
                                        echo $this->Session->flash();
                                        echo $this->fetch('content');
                                        echo $this->element('sql_dump');
                                        ?>
                                </div>
                        </div>





                        <?php echo $this->element('footer'); ?>

                </div>



                <?php
                echo $this->Html->script(array(
                    'vendor/jquery/jquery-1.10.1.min',
                    'vendor/twitter/bootstrap.min'
                   
                ));
                ?>

                <!--[if lt IE 10]>
                <?php echo $this->Html->script('vendor/3xw/ie-lt-10'); ?>
                <![endif]-->
                <!--[if lt IE 9]>
                <?php echo $this->Html->script('vendor/boilerplate/html5-3.6-respond-1.1.0.min'); ?>
                <![endif]-->
                <!--[if lt IE 8]>
                <?php echo $this->Html->script('vendor/3xw/ie-lt-8'); ?>
                <![endif]-->
                <?php echo $this->fetch('script'); ?>

                <script>
                        (function(i, s, o, g, r, a, m) {
                                i['GoogleAnalyticsObject'] = r;
                                i[r] = i[r] || function() {
                                        (i[r].q = i[r].q || []).push(arguments)
                                }, i[r].l = 1 * new Date();
                                a = s.createElement(o),
                                        m = s.getElementsByTagName(o)[0];
                                a.async = 1;
                                a.src = g;
                                m.parentNode.insertBefore(a, m)
                        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

                        ga('create', 'UA-44952673-18', 'auto');
                        ga('send', 'pageview');

                </script>

        </body>
</html>