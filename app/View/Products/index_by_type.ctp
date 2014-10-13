<ol class="breadcrumb">
        <li><?php echo __('PRODUITS') ?></li>
        <li><?php echo $type['Type']['name'] ?></li>
</ol>
<div class="container">
        <div class="row page-title">
                <div class="col-sm-12">
                        <h1><?php echo $type['Type']['name'] ?></h1>
                </div>
        </div>

        <div class="row">

                <?php foreach ($products as $product): ?>
                        <div class="col-sm-6">
                                <a href="<?php echo $this->Html->url(array('controller' => 'products', 'action' => 'view', $product['Product']['id'])) ?>" class="thumbnail">
                                        <?php echo $this->Html->image($product['Product']['image'], array('class' => 'img-responsive')) ?>
                                        <h3><?php echo $product['Product']['name'] ?></h3>
                                </a>
                        </div>
                <?php endforeach; ?>
        </div>
       
</div>
