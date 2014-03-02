<?php

session_start();
if ($_SESSION['user'] == "") {
	
	header("Location: index.php");
}

include 'config.php';

$SQLsts = "SELECT * FROM customers WHERE id=" . $_SESSION['page'];
$result = mysql_query($SQLsts);
$row = mysql_fetch_row($result);

?>

				<div class="page-header">
							<h1>
								Edit Customer
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
							
								<form class="form-horizontal" role="form" action="functions/save_customer.php?id=<?= $_SESSION['page']; ?>" method="post" parsley-validate>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right">Customer</label>

										<div class="col-sm-9">
											<span class="input-icon">
												<input type="text" id="form-field-icon-1" placeholder="Customer, inc" name="customer" value="<?php echo $row[1]; ?>" required/>
												<i class="icon-building blue"></i>
											</span>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right">Contact Person</label>

										<div class="col-sm-9">
											<span class="input-icon">
												<input type="text" id="form-field-icon-1" placeholder="Jane Doe" name="cpname" value="<?php echo $row[2]; ?>" required/>
												<i class="icon-male blue"></i>
											</span>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right">Billing Address</label>

										<div class="col-sm-9">
											<span class="input-icon">
												<textarea class="form-control" id="form-field-8" placeholder="Type billing address here" name="t1" required><?php echo $row[3]; ?></textarea>
											</span>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right">Phone (Primary)</label>

										<div class="col-sm-9">
											<span class="input-icon">
												<input type="text" id="form-field-icon-1" placeholder="+1 234 567 89" name="phone1" value="<?php echo $row[4]; ?>" required/>
												<i class="icon-phone blue"></i>
											</span>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right">Phone (Alternative)</label>

										<div class="col-sm-9">
											<span class="input-icon">
												<input type="text" id="form-field-icon-1" placeholder="+1 234 567 89" name="phone2" value="<?php echo $row[5]; ?>"/>
												<i class="icon-phone blue"></i>
											</span>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right">Fax</label>

										<div class="col-sm-9">
											<span class="input-icon">
												<input type="text" id="form-field-icon-1" placeholder="+1 234 567 89" name="fax" value="<?php echo $row[6]; ?>"/>
												<i class="icon-file-text blue"></i>
											</span>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right">Email</label>

										<div class="col-sm-9">
											<span class="input-icon">
												<input type="text" id="form-field-icon-1" placeholder="supplier@gmail.com" name="email" value="<?php echo $row[7]; ?>" parsley-type="email" required/>
												<i class="icon-envelope blue"></i>
											</span>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right">Shipping Address</label>

										<div class="col-sm-9">
											<span class="input-icon">
												<textarea class="form-control" id="form-field-8" placeholder="Type Shipping address here" name="t2" required><?php echo $row[8]; ?></textarea>
											</span>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right">Note</label>

										<div class="col-sm-9">
											<span class="input-icon">
												<textarea class="form-control" id="form-field-8" placeholder="Type customer note here" name="t3"><?php echo $row[9]; ?></textarea>
											</span>
										</div>
									</div>

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit">
												<i class="icon-ok bigger-110"></i>
												Save
											</button>

										</div>
									</div>
								</form>
								
<?php mysql_close($con); ?>
								