<div class="container-fluid">
	<div class="col-lg-12 col-md-12 col-sm-12 col-sx-12">
		<div class="panel-body">
			<div class="row">
				<div class="pull-right">
					<a href="<?php echo url();?>/employee/index" data-toggle="tooltip" title="Back To Grid" class="btn btn-default"><i class="fa fa-refresh"></i> Back</a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12 col-sx-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Employee</h3>
			</div>
			<div class="panel-body">
				<form class="form-horizontal" method="POST" action="<?php echo url();?>/employee">
					<div class="form-group required">
						<label class="col-sm-2 control-label">Employee Name</label>
						<div class="col-sm-6">
							<input type="text" name="name" class="form-control" required/>
						</div>
					</div>
					<div class="form-group required">
						<label class="col-sm-2 control-label">Position</label>
						<div class="col-sm-6">
							<select name="position" class="form-control">
								<option></option>
								<?php foreach($position as $p): ?>
									<option value="<?php echo $p;?>"><?php echo $p;?></option>
								<?php EndForeach; ?>	
							</select>
						</div>
					</div>
					<div class="form-group required">
						 <label class="col-sm-2 control-label">Gender</label>
						 <div class="col-sm-10">
							<label class="radio-inline">
								 <input type="radio" name="gender" value="Male" required/> Male
							</label>
							<label class="radio-inline">
								 <input type="radio" name="gender" value="Female" required/> Female
							</label>
						 </div>
					</div>
					<div class="form-group required">
						<label class="col-sm-2 control-label">Phone</label>
						<div class="col-sm-6">
							<input type="text" name="phone" class="form-control" required/>
						</div>
					</div>
					<div class="form-group required">
						<label class="col-sm-2 control-label">Email</label>
						<div class="col-sm-6">
							<input type="email" name="email" class="form-control" required/>
						</div>
					</div>
					<div class="form-group required">
						<label class="col-sm-2 control-label">Address</label>
						<div class="col-sm-6">
							<textarea class="form-control" name="address" rows="5"></textarea>
						</div>
					</div>
					
					<div class="pull-right">
						<button type="reset" data-toggle="tooltip" title="Reset Form" class="btn btn-warning">
							<i class="fa fa-refresh"></i> Reset
						</button>
						<button type="submit" data-toggle="tooltip" title="Save" class="btn btn-primary">
							<i class="fa fa-save"></i> Save
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
