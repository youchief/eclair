<div class="padding">
        <ol class="breadcrumb">
                <li><?php echo __('RECETTES') ?></li>
                <li><?php echo $type['RecipeType']['name'] ?></li>
        </ol>

        <div class="row page-title">
                <div class="col-sm-12">
                        <h1><?php echo $type['RecipeType']['name'] ?></h1>
                </div>
        </div>
        <div class="row">
                <?php foreach ($recipes as $recipe): ?>
                        <div class="col-sm-6">
                                <a href="<?php echo $this->Html->url(array('controller' => 'recipes', 'action' => 'view', $recipe['Recipe']['id'], Inflector::slug($recipe['Recipe']['name']))) ?>" class="thumbnail">
                                        <?php echo $this->Html->image($recipe['Recipe']['image'], array('class' => 'img-responsive')) ?>
                                        <h3><?php echo $recipe['Recipe']['name'] ?></h3>
                                </a>
                        </div>
                <?php endforeach; ?>
        </div>
</div>