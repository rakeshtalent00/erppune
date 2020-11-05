<div class="te-container">
				<div class="users-view"> 
					<div class="d-flex table-header">
						<div class="sort-bar d-flex">
							<p>Sort By: </p>
							<input type="text" name="userSearch" class="" placeholder="Sort By" />
						</div>
						<div class="search-bar">
							<input type="text" name="userSearch" class="" placeholder="Search User" />
						</div>
					</div>
					<table id="example" class="display" style="width:100%" cellspacing="3px">
				        <thead>
				            <tr>
				                <th>Name</th>
				                <th>Title</th>
				                <th>Status</th>
				                <th>description</th>
				                <th></th>
				            </tr>
				        </thead>
				        <?php foreach($moduleList as $row){ ?>	
		        	<tr>
		                <td><?php echo $row->name ?></td>
		                <td><?php echo $row->title ?></td>
						<?php if($row->status == 1){ ?>
		                <td>Active</td>
						<?php }else{ ?>
							<td>In Active</td>
						<?php } ?>
		                <td><?php echo $row->description ?></td>
		                <td><a id="editData" href="Module/updateModuleForm/<?php echo $row->id; ?>"><span class='cta-edit-user'>Edit</a></td>
		            </tr>
		            
				<?php }?>
				</table>
						</td>
		            </tr>
				        </tbody>
				    </table>
				    <div class="table-footer">
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
					</div>
				</div>
			</div>