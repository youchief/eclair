<div class="products index">
        <h2><?php echo __('Products'); ?> <?php echo $this->Html->link(\__('+'), array('action' => 'add'), array('class' => 'btn btn-success btn-sm')); ?></h2>
        <table cellpadding="0" cellspacing="0" class="table">
                <tr>

                        <th><?php echo $this->Paginator->sort('image'); ?></th>
                        <th><?php echo $this->Paginator->sort('name'); ?></th>
                        <th><?php echo $this->Paginator->sort('order'); ?></th>
                        <th><?php echo $this->Paginator->sort('type_id'); ?></th>
                        <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
                <?php foreach ($products as $product): ?>
                        <tr>

                                <td><?php echo $this->Html->image($product['Product']['image'], array('width' => '100px')); ?>&nbsp;</td>
                                <td><?php echo h($product['Product']['name']); ?>&nbsp;</td>
                                <td><?php echo h($product['Product']['order']); ?>&nbsp;</td>
                                <td>
                                        <?php echo $this->Html->link($product['Type']['name'], array('controller' => 'types', 'action' => 'view', $product['Type']['id'])); ?>
                                </td>
                                <td class="actions">
                                        <div class="btn-group">
                                                <?php echo $this->Html->link(__('View'), array('action' => 'view', $product['Product']['id']), array('class' => 'btn btn-default btn-xs')); ?>
                                                <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $product['Product']['id']), array('class' => 'btn btn-default btn-xs')); ?>
                                                <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $product['Product']['id']), array('class' => 'btn btn-danger btn-xs'), __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?>
                                        </div>
                                </td>
                        </tr>
                <?php endforeach; ?>
        </table>
        <div class="well well-sm">
                <?php
                echo $this->Paginator->counter(array(
                    'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
                ));
                ?>
        </div>
        <ul class="pagination">
                <?php echo '<li>' . $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled')) . '</li>' ?>
                <?php echo '<li>' . $this->Paginator->numbers(array('separator' => '')) . '</li>' ?>
                <?php echo '<li>' . $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled')) . '</li>' ?>
        </ul>
</div>
