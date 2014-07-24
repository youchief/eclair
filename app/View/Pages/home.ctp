<?php
$last_news = $this->requestAction(array('controller' => 'news', 'action' => 'getCurrentNews'));
?>
<?php if (!empty($last_news)): ?>
        <style>
                .affix-content{
                        background: url(<?php echo $this->webroot.$last_news['News']['image']?>) no-repeat center center fixed; 

                        -webkit-background-size: cover;
                        -moz-background-size: cover;
                        -o-background-size: cover;
                        background-size: cover;
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
                        background: url(img/back_home.jpg) no-repeat center center fixed; 

                        -webkit-background-size: cover;
                        -moz-background-size: cover;
                        -o-background-size: cover;
                        background-size: cover;
                }
        </style>
        <div class="home">
                <div class="home_message">
                        <div class="home_title">
                                Saveures & Tradition
                        </div>
                        <div class="home_content">
                                Eclair privilégie les produits locaux provenant d’agriculteurs de la région respectueux de l’environnement. Fraîcheur et qualité des produits du terroir sont les valeurs défendues depuis toujours par Eclair.

                        </div>
                </div>  
        </div>
<?php endif; ?>
