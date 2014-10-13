<?php 
$this->assign('title', $product['Product']['name']);
$this->assign('description', $product['Product']['description']);
$this->assign('keywords', $product['Product']['ingredients']);
?>
<ol class="breadcrumb">
        <li><?php echo __('PRODUITS') ?></li>
        <li><?php echo $this->Html->link($type['Type']['name'], array('controller' => 'products', 'action' => 'index_by_type', $product['Type']['id'])) ?></li>
        <li class="active"><?php echo $product['Product']['name'] ?></li>
</ol>
<div class="container">
        <div class="row">
                <div class="col-sm-12">
                        <div class="img-product">
                                <?php
                                if (!empty($product['Product']['image'])) {
                                        echo $this->Html->image($product['Product']['image'], array('class' => 'img-responsive'));
                                } else {
                                        echo $this->Html->image('no_pic.png', array('class' => 'img-responsive'));
                                }
                                ?>
                        </div>
                        <h1><?php echo h($product['Product']['name']); ?></h1>
                        <p class="product_description">
                                <?php echo $product['Product']['description']; ?>
                        </p>
                        <div class="product_info">
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
        </div>
        <?php if (!empty($recipes)): ?>
                <hr>
                <h2><?php echo __('Our Recipes') ?></h2>
                <div class="row">
                        <?php for ($i = 0; $i < 4; $i++): ?>
                                <?php if (!empty($recipes['Recipe'][$i]['image'])): ?>

                                        <div class="col-sm-3">

                                                <a href="<?php echo $this->Html->url(array('controller' => 'recipes', 'action' => 'view', $recipes['Recipe'][$i]['id'])) ?>" class="thumbnail">
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

</div>

<?php debug($product);?>