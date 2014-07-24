<header class="navbar navbar-default navbar-fixed-top ">
        <div class="">
                <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Eclair - Admin</a>
                </div>
                <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">

                                <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home News <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                                <li><?php echo $this->Html->link('List', array('controller' => 'news', 'action' => 'index', 'admin' => true)) ?></li>
                                                <li><?php echo $this->Html->link('Add', array('controller' => 'news', 'action' => 'add', 'admin' => true)) ?></li>  

                                        </ul>
                                </li>

                                <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                                <li><?php echo $this->Html->link('List', array('controller' => 'products', 'action' => 'index', 'admin' => true)) ?></li>
                                                <li><?php echo $this->Html->link('Add', array('controller' => 'products', 'action' => 'add', 'admin' => true)) ?></li>  

                                        </ul>
                                </li>
                                <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Product Types <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                                <li><?php echo $this->Html->link('List', array('controller' => 'types', 'action' => 'index', 'admin' => true)) ?></li>
                                                <li><?php echo $this->Html->link('Add', array('controller' => 'types', 'action' => 'add', 'admin' => true)) ?></li>                        
                                        </ul>
                                </li>

                                <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Recipes <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                                <li><?php echo $this->Html->link('List', array('controller' => 'recipes', 'action' => 'index', 'admin' => true)) ?></li>
                                                <li><?php echo $this->Html->link('Add', array('controller' => 'recipes', 'action' => 'add', 'admin' => true)) ?></li>                        
                                        </ul>
                                </li>

                                <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Recipe Type <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                                <li><?php echo $this->Html->link('List', array('controller' => 'recipeTypes', 'action' => 'index', 'admin' => true)) ?></li>
                                                <li><?php echo $this->Html->link('Add', array('controller' => 'recipeTypes', 'action' => 'add', 'admin' => true)) ?></li>     
                                        </ul>
                                </li>

                                <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contacts <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                                <li><?php echo $this->Html->link('List', array('controller' => 'contacts', 'action' => 'index', 'admin' => true)) ?></li>
                                                <li><?php echo $this->Html->link('Add', array('controller' => 'contacts', 'action' => 'add', 'admin' => true)) ?></li> 

                                        </ul>
                                </li>


                                <li><?php echo $this->Html->link('Déconnexion', array('controller' => 'users', 'action' => 'logout', 'admin' => false)) ?></li>
                        </ul>

                </div><!--/.navbar-collapse -->
        </div>
</header>