<?php
$last_news = $this->requestAction(array('controller' => 'news', 'action' => 'getCurrentNews'));
$this->assign('title', 'sapore e tradizione');

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
                                                       <?php echo __('Freschezza e qualità')?>
                                                </h2>
                                                <p>
                                                        <?php echo __('Tutti i prodotti Eclair devono soddisfare rigorosi standard per potersi fregiare della firma che esprime l\'orgoglio del marchio: <b><i>sapore e tradizione</b></i>')?>

                                                </p>
                                        </div>
                                </div>
                                <div class="item ad2">
                                        <div class="carousel-caption hidden-xs">
                                                <h2>
                                                        <?php echo __('Prodotti del territorio')?>
                                                </h2>
                                                <p>
                                                        <?php echo __('Lavorando prevalentemente con produttori della regione rispettosi dell\'ambiente, Eclair è impegnata nella difesa di valori importanti come la salute e la vicinanza tra luogo d\'origine e di lavorazione.
')?>
                                                </p>
                                        </div>
                                </div>
                                <div class="item ad3">
                                        <div class="carousel-caption hidden-xs">
                                                <h2>
                                                        <?php echo __('Spirito pionieristico')?>

                                                </h2>
                                                <p>
                                                        <?php echo __('Eclair, azienda pionieristica nel proprio settore, negli anni Cinquanta ha proposto per prima in Svizzera romanda le famose paste per dolci, pronte all\'uso.')?>
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
