<ol class="breadcrumb">
        <li><?php echo __('Products') ?></li>
        <li><?php echo $this->Html->link($product['Type']['name'], array('controller' => 'products', 'action' => 'index_by_type', $product['Type']['id'])) ?></li>
        <li class="active"><?php echo $product['Product']['name'] ?></li>
</ol>
<div class="row">
        <div class="col-sm-6">
                <?php echo $this->Html->image($product['Product']['image'], array('class' => 'img-responsive')); ?>
        </div>
        <div class="col-sm-6">
                <h1><?php echo h($product['Product']['name']); ?></h1>
                <p class="product_description">
                        <?php echo $product['Product']['description']; ?>
                </p>
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

        </div>
</div>
<?php if (!empty($product['Recipe'])): ?>
        <hr>
        <h2><?php echo __('Our Recipes') ?></h2>
        <div class="row">
                <?php for ($i = 0; $i < 4; $i++): ?>
                        <?php if (!empty($product['Recipe'][$i]['image'])): ?>

                                <div class="col-sm-3">

                                        <a href="<?php echo $this->Html->url(array('controller' => 'recipes', 'action' => 'view', $product['Recipe'][$i]['id'])) ?>" class="thumbnail">
                                                <?php echo $this->Html->image($product['Recipe'][$i]['image'], array('class' => 'img-responsive')) ?>
                                                <h4>
                                                        <?php echo $product['Recipe'][$i]['name'] ?>
                                                </h4>
                                        </a>

                                </div>
                        <?php endif; ?>
                <?php endfor; ?>

        </div>
<?php endif; ?>
