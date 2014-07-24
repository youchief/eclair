<?php $this->Html->script(array('vendor/3xw/better','admin/attachment-add'),array('inline' => false)); ?>
<script>
var attachment_add_settings = <?php echo json_encode($settings); ?>;
attachment_add_settings.controller_url = "<?php echo $this->Html->url(array('controller' => 'attachments', 'admin' => true )); ?>";
</script>
<br/>
<?php if(array_key_exists('habtm', $settings['relations']) ){ ?>
    <button id="choose-many" type="button" class="btn btn-primary">Choose exisiting attachment(s)</button>
    <button id="upload-many" type="button" class="btn btn-primary">Upload Files</button>
<?php } ?>
    
    <button id="add-embed" type="button" class="btn btn-primary">Add an embed file</button>

<br/>
<!-- MODAL -->
<div id="attachement-modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->