<div class="container-fluid">
	<div class="col-lg-12 col-md-12 col-sm-12 col-sx-12">
		<?php if (Session::has('message')): ?>
			<div class="alert alert-success">
				<i class="fa fa-exclamation-circle"></i><small>  <?php echo Session::get('message'); ?> !!</small>
				<button type="button" class="close" data-dismiss="alert">
					×
				</button>
			</div>
		<?php endif; ?>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Company</h3>
			</div>
			<div class="panel-body">
				<form class="form-horizontal" method="POST" action="<?php echo url();?>/company">
					<div class="form-group required">
						<label class="col-sm-2 control-label">Cover Photo</label>
						<div class="col-sm-6">
							<img src="{{ asset($company->file) }}" height="150" />
							<input type="file" class="form-control" name="userfile" required/>
						</div>
					</div>
					<div class="form-group required">
						<label class="col-sm-2 control-label">Company Name</label>
						<div class="col-sm-6">
							<input type="text" name="name" value="<?php echo $company->name;?>" class="form-control" required/>
							<input type="hidden" name="id" value="<?php echo $company->id;?>"/>
						</div>
					</div>
					<div class="form-group required">
						<label class="col-sm-2 control-label">Phone</label>
						<div class="col-sm-6">
							<input type="text" name="phone" value="<?php echo $company->phone;?>" class="form-control" required/>
						</div>
					</div>
					<div class="form-group required">
						<label class="col-sm-2 control-label">Email</label>
						<div class="col-sm-6">
							<input type="email" name="email" value="<?php echo $company->email;?>" class="form-control" required/>
						</div>
					</div>
					<div class="form-group required">
						<label class="col-sm-2 control-label">Address</label>
						<div class="col-sm-6">
							<textarea class="form-control" name="address" rows="5"><?php echo $company->address;?></textarea>
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
<script type="text/javascript">
	$(document).ready(function(){

		 $('#region_id').change(function(){
            $('#country_id').html(empty('country'));
            $('#province_id').html(empty('province'));
            $('#city_id').html(empty('city'));
            var value = $(this).val();
            var country = LoadHTML('employee/country/'+value);
            $('#country_id').html(country);
        });

		 $('#country_id').change(function(){
            $('#province_id').html(empty('province'));
            $('#city_id').html(empty('city'));
            var value = $(this).val();
            var province = LoadHTML('employee/province/'+value);
            $('#province_id').html(province);
        });
		
		 $('#province_id').change(function(){
		 	$('#city_id').html(empty('city'));
		 	var value = $(this).val();
		 	var city = LoadHTML('employee/city/'+value);
		 	$('#city_id').html(city);
		 });

	});
</script>