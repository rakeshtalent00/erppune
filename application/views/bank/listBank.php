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
				
					<table id="banktable" class="display" style="width:100%" cellspacing="3px">
				        <thead>
				            <tr>
				                <th>Name</th>
				                <th>Branch Name</th>
				                <th>IFSC CODE</th>
				                <th>Address</th>
                                <th>Account No</th>
                                <th>Payment Method</th>
                                <th>Status</th>
				                <th></th>
				            </tr>
				        </thead>
                        <?php if(!empty($banks)) { ?>
				        <?php foreach($banks as $row){ ?>	
                            <tr>
                                <td><?php echo $row->name ?></td>
                                <td><?php echo $row->branch_name ?></td>
                                <td><?php echo $row->ifsc_code ?></td>
                                <td><?php echo $row->address ?></td>
                                <td><?php echo $row->account_no ?></td>
                                <td><?php echo $row->payment_type ?></td>
                                <?php if($row->status == 1){ ?>
                                <td>Active</td>
                                <?php }else{ ?>
                                    <td>In Active</td>
                                <?php } ?>
                                <td><a id="editData" href="<?php echo base_url(); ?>bank/update/<?php echo $row->id; ?>"><span class='cta-edit-user'>Edit</a></td>
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
    $('#banktable').DataTable();
} );
</script>