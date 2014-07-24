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
                                <span class="visible-xs navbar-brand"><?php echo $this->Html->image('logo.png', array('width' => '50px')) ?></span>
                        </div>
                        <div class="navbar-collapse collapse sidebar-navbar-collapse">
                                <ul class="nav navbar-nav" id="sidenav01">
                                        <p><?php echo $this->Html->link('FR', array('controller' => 'app', 'action' => 'setlanguage', 'fra')) ?> | 
                                                <?php echo $this->Html->link('DE', array('controller' => 'app', 'action' => 'setlanguage', 'deu')) ?> |
                                                <?php echo $this->Html->link('IT', array('controller' => 'app', 'action' => 'setlanguage', 'ita')) ?> |
                                                <?php echo $this->Html->link('EN', array('controller' => 'app', 'action' => 'setlanguage', 'eng')) ?>
                                        </p>
                                        <li class="hidden-xs">
                                                <a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'display', 'home')) ?>">
                                                        <?php echo $this->Html->image('logo.png', array('width' => '100%')) ?>
                                                </a>

                                        </li>
                                        <li><a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'display', 'entreprise')) ?>"><i class="fa fa-building-o"></i> L'entreprise</a></li>
                                        <li>
                                                <a href="#" data-toggle="collapse" data-target="#toggleDemo" data-parent="#sidenav01" class="collapsed">
                                                        <i class="fa fa-cutlery"></i> Produits <span class="caret pull-right"></span>
                                                </a>
                                                <?php $types = $this->requestAction(array('controller' => 'types', 'action' => 'gettypes')) ?>
                                                <div class="collapse" id="toggleDemo" style="height: 0px;">
                                                        <ul class="nav nav-list">
                                                                <?php foreach ($types as $key => $value): ?>
                                                                        <li><?php echo $this->Html->link($value, array('controller' => 'products', 'action' => 'index_by_type', $key)) ?></li>
                                                                <?php endforeach; ?>

                                                        </ul>
                                                </div>
                                        </li>
                                        <li>
                                                <a href="#" data-toggle="collapse" data-target="#toggleDemo2" data-parent="#sidenav01" class="collapsed">
                                                        <i class="fa fa-book"></i> Recettes <span class="caret pull-right"></span>
                                                </a>
                                                <?php $recipetypes = $this->requestAction(array('controller' => 'recipeTypes', 'action' => 'getrecipeTypes')) ?>
                                                <div class="collapse" id="toggleDemo2" style="height: 0px;">
                                                        <ul class="nav nav-list">
                                                                <?php foreach ($recipetypes as $key => $value): ?>
                                                                        <li><?php echo $this->Html->link($value, array('controller' => 'recipes', 'action' => 'index_by_type', $key)) ?></li>
                                                                <?php endforeach; ?>

                                                        </ul>
                                                </div>



                                        </li>
                                        <li><a href="<?php echo $this->Html->url(array('controller' => 'contacts', 'action' => 'index')) ?>"><span class="glyphicon glyphicon-phone-alt"></span> Contact</a></li>
                                        <li><a href="#"><span class="glyphicon glyphicon-certificate"></span> Espace PRO</a></li>

                                </ul>
                        </div><!--/.nav-collapse -->
                </div>
        </div>
</div>