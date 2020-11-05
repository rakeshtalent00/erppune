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
					<table id="subjecttable" class="display" style="width:100%" cellspacing="3px">
				        <thead>
				            <tr>
				                <th>Name</th>
				                <th>Code</th>
				                <th>Description</th>
				                <th>Passing Marks</th>
                                <th>Total Marks</th>
                                <th>Status</th>
				                <th></th>
				            </tr>
				        </thead>
                        <?php if(!empty($subjects)) { ?>
				        <?php foreach($subjects as $row){ ?>	
                            <tr>
                                <td><?php echo $row->name ?></td>
                                <td><?php echo $row->code ?></td>
                                <td><?php echo $row->description ?></td>
                                <td><?php echo $row->passing_marks ?></td>
                                <td><?php echo $row->total_marks ?></td>
                                <?php if($row->status == 1){ ?>
                                <td>Active</td>
                                <?php }else{ ?>
                                    <td>In Active</td>
                                <?php } ?>
                                <td><a id="editData" href="<?php echo base_url(); ?>subject/update/<?php echo $row->id; ?>"><span class='cta-edit-user'>Edit</a></td>
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
				    <!-- <div class="table-footer">
						<div class="pagination">
						    <a href="#">&laquo;</a>
						    <a href="#">1</a>
						    <a href="#" class="active">2</a>
						    <a href="#">3</a>
						    <a href="#">4</a>
						    <a href="#">5</a>
						    <a href="#">6</a>
						    <a href="#">&raquo;</a>
						</div>
					</div> -->
				</div>
			</div>

<script>
$(document).ready(function() {
    $('#subjecttable').DataTable();
} );
</script>