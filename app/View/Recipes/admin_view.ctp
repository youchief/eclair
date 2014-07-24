<div class="row">
        <div class="col-sm-6">
                <?php echo $this->Html->image($recipe['Recipe']['image'], array('class' => 'img-responsive')); ?>
        </div>
        <div class="col-sm-6">
                <h1><?php echo h($recipe['Recipe']['name']); ?></h1>
                <dl>

                        <dt><?php echo __('Created'); ?></dt>
                        <dd>
                                <?php echo h($recipe['Recipe']['created']); ?>
                                &nbsp;
                        </dd>
                        <dt><?php echo __('Modified'); ?></dt>
                        <dd>
                                <?php echo h($recipe['Recipe']['modified']); ?>
                                &nbsp;
                        </dd>


                </dl>
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
                                        <?php echo $this->Html->image($product['image'], array('class'=>'img-responsive'))?>
                                        <p>
                                                <?php echo $product['name']?>
                                        </p>
                                </div>
                        </div>
                       
                        
                <?php endforeach; ?>
                </div>

                <div class="btn-group">
                        <?php echo $this->Html->link(__('Edit Recipe'), array('action' => 'edit', $recipe['Recipe']['id']), array('class' => 'btn btn-sm btn-default')); ?>
                        <?php echo $this->Form->postLink(__('Delete Recipe'), array('action' => 'delete', $recipe['Recipe']['id']), array('class' => 'btn btn-sm btn-danger'), __('Are you sure you want to delete # %s?', $recipe['Recipe']['id'])); ?> 
                </div>

        </div>
</div>