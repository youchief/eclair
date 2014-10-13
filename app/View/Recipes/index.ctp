<ol class="breadcrumb">
        <li><?php echo __('RECETTES') ?></li>

</ol>

<div class="row ">
        <div class="col-sm-12 story" id='story'>
                <?php echo $this->Html->image('recettes.jpg', array('width' => '100%')) ?>
        </div>
</div>

<div class="container">

        <div class="row page-title">
                <div class="col-sm-12">
                        <h1><?php echo __('Nos recettes') ?></h1>
                </div>
        </div>



        <div class='spacer--alpha'></div>

        <div class="row">
                <?php foreach ($recipes as $recipe): ?>
                        <div class="col-sm-6 recipe">
                                <a href="<?php echo $this->Html->url(array('controller' => 'recipes', 'action' => 'view', $recipe['Recipe']['id'], Inflector::slug($recipe['Recipe']['name']))) ?>" class="thumbnail">
                                        <div class='created'><?php echo $this->Time->format('d/m/y', $recipe['Recipe']['created']) ?></div>
                                        <h3><?php echo $recipe['Recipe']['name'] ?></h3>
                                        <?php echo $this->Html->image($recipe['Recipe']['image'], array('class' => 'img-responsive')) ?>

                                </a>
                        </div>
                <?php endforeach; ?>
        </div>
</div>