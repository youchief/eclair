<div class="row">
        <div class="col-sm-6">
                <?php echo $this->Html->image($product['Product']['image'], array('class' => 'img-responsive')); ?>
        </div>
        <div class="col-sm-6">
                <h1><?php echo h($product['Product']['name']); ?></h1>
                <dl>

                        <dt><?php echo __('Created'); ?></dt>
                        <dd>
                                <?php echo h($product['Product']['created']); ?>
                                &nbsp;
                        </dd>
                        <dt><?php echo __('Modified'); ?></dt>
                        <dd>
                                <?php echo h($product['Product']['modified']); ?>
                                &nbsp;
                        </dd>

                        <dt><?php echo __('New'); ?></dt>
                        <dd>
                                <?php echo h($product['Product']['new']); ?>
                                &nbsp;
                        </dd>
                        
                        <dt><?php echo __('Pro'); ?></dt>
                        <dd>
                                <?php echo h($product['Product']['pro']); ?>
                                &nbsp;
                        </dd>
                        
                        <dt><?php echo __('Order'); ?></dt>
                        <dd>
                                <?php echo h($product['Product']['order']); ?>
                                &nbsp;
                        </dd>

                </dl>
                <p><?php echo $product['Product']['description']; ?></p>
                <h3><?php echo __('Energy Value'); ?></h3>
                <p>
                        <?php echo $product['Product']['energy_value']; ?>
                </p>
                <h3><?php echo __('Ingredients'); ?></h3>
                <p>
                        <?php echo $product['Product']['ingredients']; ?>
                </p>
                <h3><?php echo __('Alergy Informations'); ?></h3>
                <p>
                        <?php echo $product['Product']['alergy_informations']; ?>
                </p>
                <h3><?php echo __('Type'); ?></h3>
                <p>
                        <?php echo $this->Html->link($product['Type']['name'], array('controller' => 'types', 'action' => 'view', $product['Type']['id'])); ?>
                </p>
                <div class="btn-group">
                <?php echo $this->Html->link(__('Edit Product'), array('action' => 'edit', $product['Product']['id']), array('class' => 'btn btn-sm btn-default')); ?>
                <?php echo $this->Form->postLink(__('Delete Product'), array('action' => 'delete', $product['Product']['id']), array('class' => 'btn btn-sm btn-danger'), __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?> 
        </div>
        </div>
</div>