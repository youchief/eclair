<ol class="breadcrumb">
        <li><?php echo __('Products') ?></li>
        <li><?php echo __('Professionel Products') ?></li>
</ol>
<div class="container">
        <div class="row">

                <div class="col-sm-12">
                        <h1><?php echo __('For Professionel') ?></h1>
                </div>

        </div>
        <div class="row">
                <div class='col-sm-12'>
                        <table class=' table table-striped'>
                                <?php foreach ($products as $product): ?>
                                        <tr>
                                                <td>

                                                        <a href="<?php echo $this->Html->url(array('controller' => 'products', 'action' => 'view', $product['Product']['id'])) ?>" class="">

                                                                <?php echo $product['Product']['name'] ?>
                                                        </a>
                                                </td>
                                        <?php endforeach; ?>
                        </table>
                </div>
        </div>
        <ul class="pagination">
                <?php echo '<li>' . $this->Paginator->prev('<<', array(), null, array('class' => 'prev disabled')) . '</li>' ?>
                <?php echo '<li>' . $this->Paginator->numbers(array('separator' => '')) . '</li>' ?>
                <?php echo '<li>' . $this->Paginator->next('>>', array(), null, array('class' => 'next disabled')) . '</li>' ?>
        </ul>
</div>