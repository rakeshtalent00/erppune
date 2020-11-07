<div class="te-container">
            <!--- Success Message --->
            <?php if ($this->session->flashdata('success')) { ?>
                <p style="font-size: 20px; color:green"><?php echo $this->session->flashdata('success'); ?></p>
                <?php }?>
                <!---- Error Message ---->
                <?php if ($this->session->flashdata('error')) { ?>
                <p style="font-size: 20px; color:red"><?php echo $this->session->flashdata('error'); ?></p>
                <?php } ?>
				<div class="users-view"> 
					<table id="programtable" class="display" style="width:100%" cellspacing="3px">
				        <thead>
				            <tr>
				                <th>Name</th>
                                <th>Status</th>
				                <th></th>
				            </tr>
				        </thead>
                        <?php if(!empty($programs)) { ?>
				        <?php foreach($programs as $row){ ?>	
                            <tr>
                                <td><?php echo $row->name ?></td>
                                <?php if($row->status == 1){ ?>
                                <td>Active</td>
                                <?php }else{ ?>
                                    <td>In Active</td>
                                <?php } ?>
                                <td><a id="editData" href="<?php echo base_url(); ?>program/update/<?php echo $row->id; ?>"><span class='cta-edit-user'>Edit</a></td>
                            </tr>
				        <?php }?>
                                <?php } else{ ?>
                                <tr><td>No Records Found</td>
                                </tr>
                                <?php } ?>
				</table>
						</td>
		            </tr>
				        </tbody>
				    </table>
				    
				</div>
			</div>

<script>
$(document).ready(function() {
    $('#programtable').DataTable();
} );
</script>