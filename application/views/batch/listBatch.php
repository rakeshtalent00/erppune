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
					<!-- <div class="d-flex table-header">
						<div class="sort-bar d-flex">
							<p>Sort By: </p>
							<input type="text" name="userSearch" class="" placeholder="Sort By" />
						</div>
						<div class="search-bar">
							<input type="text" name="userSearch" class="" placeholder="Search User" />
						</div>
					</div> -->
					<table id="batchtable" class="display" style="width:100%" cellspacing="3px">
				        <thead>
				            <tr>
				                <th>Name</th>
				                <th>Code</th>
				                <th>Start Date</th>
				                <th>End Date</th>
                                <th>Status</th>
				                <th></th>
				            </tr>
				        </thead>
                        <?php if(!empty($batches)) { ?>
				        <?php foreach($batches as $row){ ?>	
                            <tr>
                                <td><?php echo $row->name ?></td>
                                <td><?php echo $row->code ?></td>
                                <td><?php echo $row->start_date ?></td>
                                <td><?php echo $row->end_date ?></td>
                                <?php if($row->status == 1){ ?>
                                <td>Active</td>
                                <?php }else{ ?>
                                    <td>In Active</td>
                                <?php } ?>
                                <td><a id="editData" href="<?php echo base_url(); ?>batch/update/<?php echo $row->id; ?>"><span class='cta-edit-user'>Edit</a></td>
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
    $('#batchtable').DataTable();
} );
</script>