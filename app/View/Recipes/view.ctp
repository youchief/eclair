<ol class="breadcrumb">
        <li><?php echo __('Recipes') ?></li>
        <li><?php echo $this->Html->link($recipe['RecipeType']['name'], array('controller' => 'recipes', 'action' => 'index_by_type', $recipe['RecipeType']['id'])) ?></li>
        <li class="active"><?php echo h($recipe['Recipe']['name']); ?></li>
</ol>
<div class="row">
        <div class="col-sm-6">
                <?php echo $this->Html->image($recipe['Recipe']['image'], array('class' => 'img-responsive')); ?>
        </div>
        <div class="col-sm-6">
                <h1><?php echo h($recipe['Recipe']['name']); ?></h1>

                <h3><?php echo __('Ingredients'); ?></h3>
                <p>
                        <?php echo $recipe['Recipe']['ingredients']; ?>
                </p>
                <h3><?php echo __('How To'); ?></h3>
                <p>
                        <?php echo $recipe['Recipe']['how_to']; ?>
                </p>

                <h3><?php echo __('Possible Product'); ?></h3>
                <div class="row">
                        <?php foreach ($recipe['Product'] as $product): ?>

                                <div class="col-sm-4">
                                        <div class="thumbnail">
                                                <?php echo $this->Html->image($product['image'], array('class' => 'img-responsive')) ?>
                                                <p>
                                                        <?php echo $product['name'] ?>
                                                </p>
                                        </div>
                                </div>


                        <?php endforeach; ?>
                </div>


        </div>
</div>