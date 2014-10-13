<?php
$last_news = $this->requestAction(array('controller' => 'news', 'action' => 'getCurrentNews'));
$this->assign('title', 'Saveur & Tradition');

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
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                                <div class="item active ad1">
                                        <div class="carousel-caption   hidden-xs">
                                                <h2>
                                                        <?php echo __('Fraîcheur et qualité') ?>
                                                </h2>
                                                <p>
                                                        <?php echo __('Tous les produits Eclair doivent répondre à de rigoureux standards d’exigences pour avoir le droit de porter la signature qui fait la fierté de la marque: <b><i>Saveur & Tradition</i></b>.') ?>

                                                </p>
                                        </div>
                                </div>
                                <div class="item ad2">
                                        <div class="carousel-caption   hidden-xs">
                                                <h2>
                                                        <?php echo __('Produits du terroir') ?>
                                                </h2>
                                                <p>
                                                        <?php echo __('Travaillant en priorité avec des producteurs de la région respectueux de l’environnement, la marque Eclair tient à défendre des valeurs de santé et de proximité.') ?>
                                                </p>
                                        </div>
                                </div>
                                <div class="item ad3">
                                        <div class="carousel-caption   hidden-xs">
                                                <h2>
                                                        <?php echo __('Esprit pionnier') ?>

                                                </h2>
                                                <p>
                                                        <?php echo __('Pionnière en son domaine, la maison Eclair a été la première en Suisse romande à concevoir dans les années 50 les fameuses pâtes à gâteaux prêtes à l’emploi.') ?>
                                                </p>
                                        </div>
                                </div>

                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                
                        </a>


                </div>
        </div>

<?php endif; ?>
