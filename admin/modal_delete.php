					<!-- user delete modal -->
					<div id="picsdelete" class="modal  fade modal-sm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 id="myModalLabel">Delete image(s)?</h3>
					</div>
					<div class="modal-body">
					<div class="alert alert-danger">
					<p>Are you sure you want to delete the image(s) you check?.</p>
					</div>
					</div>
					<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> Close</button>
					<button name="delete_pics" class="btn btn-danger"><i class="icon-check icon-large"></i> Yes</button>
					</div>
					</div>
					
					<!-- department delete modal -->
					<div id="eventdelete" class="modal  fade modal-sm" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 id="myModalLabel">Delete Department?</h3>
					</div>
					<div class="modal-body">
					<div class="alert alert-danger">
					<p>Are you sure you want to delete the event you checked?.</p>
					</div>
					</div>
					<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> No</button>
					<button name="delete_event" class="btn btn-danger"><i class="icon-check icon-large"></i> Yes</button>
					</div>
					</div>
					
								<!-- class delete modal -->
					<div id="mediadelete" class="modal fade modal-sm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 id="myModalLabel">Delete Picture?</h3>
					</div>
					<div class="modal-body">
					<div class="alert alert-danger">
					<p>Are you sure you want to delete the Picture(s) you checked?.</p>
					</div>
					</div>
					<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> Close</button>
					<button name="delete_media" class="btn btn-danger"><i class="icon-check icon-large"></i> Yes</button>
					</div>
					</div>
					
											<!-- student delete modal -->
					<div id="testimony_delete" class="modal  fade modal-sm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 id="myModalLabel">Delete Testimony?</h3>
					</div>
					<div class="modal-body">
					<div class="alert alert-danger">
					<p>Are you sure you want to delete the Testimony you checked?.</p>
					</div>
					</div>
					<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> Close</button>
					<button name="delete_testimony" class="btn btn-danger"><i class="icon-check icon-large"></i> Yes</button>
					</div>
					</div>
					
					
											<!-- student delete modal -->
					<div id="pub_delete" class="modal  fade modal-sm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 id="myModalLabel">Delete Publication?</h3>
					</div>
					<div class="modal-body">
					<div class="alert alert-danger">
					<p>Are you sure you want to delete the Publication(s) you checked ?</p>
					</div>
					</div>
					<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> Close</button>
					<button name="delete_pub" class="btn btn-danger"><i class="icon-check icon-large"></i> Yes</button>
					</div>
					</div>
					
					
					                 	<!--  Social modal -->
					<div id="youtube" class="modal  fade modal-primary modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
							<h3 id="myModalLabel">Update Youtube Link?</h3>
						</div>
						<div class="modal-body">
							<form method="post" action="save_social.php">
								<?php
								$query = $conn->query("select * from social where account ='youtube'");
								while ($row = $query->fetch()) {

									?>
									<div class="form-group col-sm-10">
										<label>Link:</label>

										<div class="input-group  col-sm-8">

											<input type="url" name="youtubes" class="form-control" id="event" placeholder="Publication Heading" value="<?php echo $row['link']; ?>" required>
										</div>

									</div>
								<?php }?>


						</div>
						<div class="modal-footer">
							<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> No</button>
							<button name="youtube" class="btn btn-danger"><i class="icon-check icon-large"></i> Yes</button>
						</div>
						</form>
					</div>
					<div id="instagram" class="modal  fade modal-primary modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
							<h3 id="myModalLabel">Update Instagram Link?</h3>
						</div>
						<div class="modal-body">
							<form method="post" action="save_social.php">
								<?php
								$query = $conn->query("select * from social where account ='instagram'");
								while ($row = $query->fetch()) {

									?>
									<div class="form-group col-sm-10">
										<label>Link:</label>

										<div class="input-group  col-sm-8">

											<input type="url" name="instagrams" class="form-control" id="event" placeholder="Publication Heading" value="<?php echo $row['link']; ?>" required>
										</div>

									</div>
								<?php }?>


						</div>
						<div class="modal-footer">
							<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> No</button>
							<button name="instagram" class="btn btn-danger"><i class="icon-check icon-large"></i> Yes</button>
						</div>
						</form>
					</div>
					<div id="facebook" class="modal  fade modal-primary modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
							<h3 id="myModalLabel">Update Facebook Link?</h3>
						</div>
						<div class="modal-body">
							<form method="post" action="save_social.php">
								<?php
								$query = $conn->query("select * from social where account ='facebook'");
								while ($row = $query->fetch()) {

									?>
									<div class="form-group col-sm-10">
										<label>Link:</label>

										<div class="input-group  col-sm-8">

											<input type="url" name="facebooks" class="form-control" id="event" placeholder="Publication Heading" value="<?php echo $row['link']; ?>" required>
										</div>

									</div>
								<?php }?>


						</div>
						<div class="modal-footer">
							<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> No</button>
							<button name="facebook" class="btn btn-danger"><i class="icon-check icon-large"></i> Yes</button>
						</div>
						</form>
					</div>
					<div id="twitter" class="modal  fade modal-primary modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
							<h3 id="myModalLabel">Update Twitter Link?</h3>
						</div>
						<div class="modal-body">
							<form method="post" action="save_social.php">
								<?php
								$query = $conn->query("select * from social where account ='twitter'");
								while ($row = $query->fetch()) {

									?>
									<div class="form-group col-sm-10">
										<label>Link:</label>

										<div class="input-group  col-sm-8">

											<input type="url" name="twitters" class="form-control" id="event" placeholder="Publication Heading" value="<?php echo $row['link']; ?>" required>
										</div>

									</div>
								<?php }?>


						</div>
						<div class="modal-footer">
							<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> No</button>
							<button name="twitter" class="btn btn-danger"><i class="icon-check icon-large"></i> Yes</button>
						</div>
						</form>
					</div>
					<!-- Content delete modal -->
					<div id="subject_delete" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 id="myModalLabel">Delete Subject?</h3>
					</div>
					<div class="modal-body">
					<div class="alert alert-danger">
					<p>Are you sure you want to delete the subject you check?.</p>
					</div>
					</div>
					<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> Close</button>
					<button name="delete_subject" class="btn btn-danger"><i class="icon-check icon-large"></i> Yes</button>
					</div>
					</div>