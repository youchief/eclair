<div class="col-sm-3 col-md-2 affix-sidebar">
        <div class="sidebar-nav">
                <div class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                </button>
                                <span class="visible-xs navbar-brand"><?php echo $this->Html->image('logo_mobile.png', array('width' => '50px')) ?></span>
                        </div>
                        <div class="navbar-collapse collapse sidebar-navbar-collapse">
                                <ul class="nav navbar-nav text-center" id="sidenav01">
                                        <p class="lang"><?php echo $this->Html->link('FR', array('controller' => 'app', 'action' => 'setlanguage', 'fra')) ?> | 
                                                <?php echo $this->Html->link('DE', array('controller' => 'app', 'action' => 'setlanguage', 'deu')) ?> |
                                                <?php echo $this->Html->link('IT', array('controller' => 'app', 'action' => 'setlanguage', 'ita')) ?> 
                                        </p>
                                        <li class="hidden-xs">
                                                <a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'display', 'home_' . Configure::read('Config.language'))) ?>">
                                                        <?php echo $this->Html->image('logo.png', array('width' => '100%', 'id'=>'logo')) ?>
                                                </a>

                                        </li>
                                        <li>
                                                <a href="#" data-toggle="collapse" data-target="#toggleDemo" data-parent="#sidenav01" class="collapsed">
                                                        <?php echo __('L\'ENTREPRISE') ?>
                                                </a>

                                                <div class="collapse" id="toggleDemo" style="height: 0px;">
                                                        <ul class="nav nav-list">
                                                                <li><?php echo $this->Html->link(__('Notre histoire'), array('controller' => 'pages', 'action' => 'display', 'entreprise_' . Configure::read('Config.language'), '#' => 'story')) ?></li>
                                                                <li><?php echo $this->Html->link(__('Une production locale'), array('controller' => 'pages', 'action' => 'display', 'entreprise_' . Configure::read('Config.language'), '#' => 'production')) ?></li>
                                                                <li><?php echo $this->Html->link(__('Engagement responsable'), array('controller' => 'pages', 'action' => 'display', 'entreprise_' . Configure::read('Config.language'), '#' => 'responsable')) ?></li>
                                                        </ul>
                                                </div>
                                        </li>
                                        <li>
                                                <a href="#" data-toggle="collapse" data-target="#toggleDemo1" data-parent="#sidenav01" class="collapsed">
                                                        <?php echo __('PRODUITS') ?> 
                                                </a>
                                                <?php $types = $this->requestAction(array('controller' => 'types', 'action' => 'gettypes')) ?>
                                                <div class="collapse" id="toggleDemo1" style="height: 0px;">
                                                        <ul class="nav nav-list">
                                                                <?php foreach ($types as $key => $value): ?>
                                                                        <li><?php echo $this->Html->link($value, array('controller' => 'products', 'action' => 'index_by_type', $key)) ?></li>
                                                                <?php endforeach; ?>

                                                        </ul>
                                                </div>
                                        </li>
                                        <li>
                                                <a href="#" data-toggle="collapse" data-target="#toggleDemo2" data-parent="#sidenav01" class="collapsed">
                                                        <?php echo __('RECETTES') ?> 
                                                </a>
                                                <?php $recipetypes = $this->requestAction(array('controller' => 'recipeTypes', 'action' => 'getrecipeTypes')) ?>
                                                <div class="collapse" id="toggleDemo2" style="height: 0px;">
                                                        <ul class="nav nav-list">
                                                                <li><?php echo $this->Html->link(__('Tout'), array('controller' => 'recipes', 'action' => 'index')) ?></li>
                                                                <?php foreach ($recipetypes as $key => $value): ?>
                                                                        
                                                                        <li><?php echo $this->Html->link($value, array('controller' => 'recipes', 'action' => 'index_by_type', $key)) ?></li>
                                                                <?php endforeach; ?>

                                                        </ul>
                                                </div>



                                        </li>
                                        <li><?php echo $this->Html->link(__('CONTACT'), array('controller' => 'contacts', 'action' => 'index')) ?></li>
                                        <li><?php echo $this->Html->link(__('ESPACE PRO'), array('controller' => 'products', 'action' => 'pro')) ?></li>
                                        <li><a href='https://www.facebook.com/pages/Eclair-Vuilleumier-SA/424855234239907?fref=ts' target='_blank'><?php echo $this->Html->image('logo_facebook.png', array('width'=>'24px')) ?></a></li>

                                </ul>
                        </div><!--/.nav-collapse -->

                </div>
        </div>
        <div class="address hidden-xs">
                <strong>Eclair Vuilleumier S.A.</strong>
                <br>
                Route de Crochy 26
                <br>
                1024 Ecublens 
                <br>
                Tel: 021 691 77 34 
                <br>
                Fax: 021 691 77 40 
        </div>

</div>