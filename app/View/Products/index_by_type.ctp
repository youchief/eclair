<ol class="breadcrumb">
        <li><?php echo __('Products') ?></li>
        <li><?php echo $products[0]['Type']['name']?></li>
</ol>
<div class="row">
        <?php foreach ($products as $product): ?>
                <div class="col-sm-4">
                        <a href="<?php echo $this->Html->url(array('controller'=>'products', 'action'=>'view',$product['Product']['id']))?>" class="thumbnail">
                                <?php echo $this->Html->image($product['Product']['image'], array('class' => 'img-responsive')) ?>
                                <h3><?php echo $product['Product']['name'] ?></h3>
                        </a>
                </div>
        <?php endforeach; ?>
</div>