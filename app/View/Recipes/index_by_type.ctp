<ol class="breadcrumb">
        <li><?php echo __('Recipes') ?></li>
        <li><?php echo $recipes[0]['RecipeType']['name']?></li>
</ol>
<div class="row">
        <?php foreach ($recipes as $recipe): ?>
                <div class="col-sm-4">
                        <a href="<?php echo $this->Html->url(array('controller'=>'recipes', 'action'=>'view',$recipe['Recipe']['id']))?>" class="thumbnail">
                                <?php echo $this->Html->image($recipe['Recipe']['image'], array('class' => 'img-responsive')) ?>
                                <h3><?php echo $recipe['Recipe']['name'] ?></h3>
                        </a>
                </div>
        <?php endforeach; ?>
</div>