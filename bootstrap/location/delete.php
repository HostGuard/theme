<?php if ($this->input->is_ajax_request()): ?>

        <?php $this->output->set_output(''); ?>
        <div class="modal-dialog">
                <div class="modal-content">
                        <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Delete Location <?php echo $location->location_name; ?></h4>
                        </div>
                        
                        <?php echo form_open('location/delete/'.$location->location_id, array('class' => 'form-horizontal')); ?>

                        <div class="modal-body">
                                <p>During the deletion of a location, nodes assigned to this location must be relocated to another location.  Choose a location below.</p>
                                <div class="form-group">
                                        <label for="newlocation" class="col-md-3 control-label">New Location:</label>
                                        <div class="col-md-8">
                                                <?php echo form_dropdown('newlocation', $locations, null, 'class="selectpicker"'); ?>
                                        </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                                <?php echo form_submit('submit', 'Delete Node', 'class="btn btn-primary"'); ?>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                <?php echo form_close(); ?>
                        </div>
                </div>
        </div>
        <?php die(); ?>
        
<?php else: ?>

        <div class="col-md-12">
                <div class="panel panel-default">
                        <div class="panel-heading">Delete Location <?php echo $location->location_name; ?></div>
                        <div class="panel-body">
                                
                                <?php echo form_open('location/delete/'.$location->location_id, array('class' => 'form-horizontal')); ?>
                                
                                <p>During the deletion of a location, nodes assigned to this location must be relocated to another location.  Choose a location below.</p>
                                
                                <div class="form-group">
                                        <label for="newlocation" class="col-md-3 control-label">New Location:</label>
                                        <div class="col-md-8">
                                                <?php echo form_dropdown('newlocation', $locations, null, 'class="selectpicker"'); ?>
                                        </div>
                                </div>
                                
                                <div class="form-group">
                                        <label class="col-md-3 control-label"> </label>
                                        <div class="col-md-8">
                                                <?php echo form_submit('submit', 'Delete Node', 'class="btn btn-primary"'); ?>
                                        </div>
                                </div>
                                
                                <?php echo form_close(); ?>

                        </div>
                </div>
        </div>

<?php endif; ?>
