<?php
$last_news = $this->requestAction(array('controller' => 'news', 'action' => 'getCurrentNews'));
$this->assign('title', 'Geschmack & Tradition');

?>
<?php if (!empty($last_news)): ?>
        <style>
                .affix-content{
                        background: url(<?php echo $this->webroot . $last_news['News']['image'] ?>) no-repeat center center fixed; 
                        -webkit-background-size: cover;
                        -moz-background-size: cover;
                        -o-background-size: cover;
                        background-size: cover;
                        padding-left: 0px;
                        padding-right:0px;
                }
        </style>
        <div class="home">
                <div class="home_message">
                        <div class="home_title">
                                <?php echo $last_news['News']['title'] ?>
                        </div>
                        <div class="home_content">
                                <?php echo $last_news['News']['description'] ?>
                        </div>
                </div>  
        </div>
<?php else: ?>
        <style>
                .affix-content{

                        padding-left: 0px;
                        padding-right:0px;
                        height:100%;
                }
        </style>
        <div class="home">
                <div id="carousel-example-generic" class="carousel slide " data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                                <div class="item active ad1">
                                        <div class="carousel-caption hidden-xs">
                                                <h2>
                                                       <?php echo __('Frische und Qualität')?>
                                                </h2>
                                                <p>
                                                        <?php echo __('Alle Produkte von Eclair müssen strenge Anforderungen erfüllen, um den Slogan <b><i>Saveur & tradition</b></i> («Geschmack & Tradition») tragen zu dürfen, der das Unternehmen mit Stolz erfüllt.')?>

                                                </p>
                                        </div>
                                </div>
                                <div class="item ad2">
                                        <div class="carousel-caption hidden-xs">
                                                <h2>
                                                        <?php echo __('Regionale Produkte')?>
                                                </h2>
                                                <p>
                                                        <?php echo __('Die Marke Eclair arbeitet bevorzugt mit regionalen Produzenten zusammen, die sich dem Umweltschutz verschrieben haben, und setzt sich für die Verteidigung ihrer Werte Gesundheit und Nähe ein.')?>
                                                </p>
                                        </div>
                                </div>
                                <div class="item ad3">
                                        <div class="carousel-caption hidden-xs">
                                                <h2>
                                                        <?php echo __('Pioniergeist')?>

                                                </h2>
                                                <p>
                                                        <?php echo __('Das Unternehmen Eclair ist ein Pionier auf seinem Gebiet und erfand in den 1950er-Jahren in der Westschweiz als erstes die berühmten fertigen Kuchenteige.')?>
                                                </p>
                                        </div>
                                </div>

                        </div>

                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                
                        </a>

                </div>
        </div>
        
<?php endif; ?>
