<div class="container-fluid">
	<div class="col-lg-12 col-md-12 col-sm-12 col-sx-12">
		<div class="panel-body">
			<div class="row">
				<div class="pull-right">
					<a href="<?php echo url();?>/guest/index" data-toggle="tooltip" title="Back To Grid" class="btn btn-default"><i class="fa fa-refresh"></i> Back</a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12 col-sx-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Guest</h3>
			</div>
			<div class="panel-body">
				<form class="form-horizontal" method="POST" action="<?php echo url();?>/guest">
					<div class="form-group required">
						<label class="col-sm-2 control-label">Guest Name</label>
						<div class="col-sm-6">
							<input type="text" name="full_name" value="<?php echo $data->full_name;?>" class="form-control" required/>
							<input type="hidden" name="id" value="<?php echo $data->id;?>"/>
						</div>
					</div>
					<div class="form-group required">
						 <label class="col-sm-2 control-label">Gender</label>
						 <div class="col-sm-10">
							<?php if($data->gender=='Male'): ?>
								<label class="radio-inline">
									 <input type="radio" name="gender" value="Male" checked="true" required/> Male
								</label>
								<label class="radio-inline">
									 <input type="radio" name="gender" value="Female" required/> Female
								</label>
							<?php Else: ?>
								<label class="radio-inline">
									 <input type="radio" name="gender" value="Male" required/> Male
								</label>
								<label class="radio-inline">
									 <input type="radio" name="gender" value="Female" checked="true"  required/> Female
								</label>
							<?php EndIf; ?>	
						 </div>
					</div>
					<div class="form-group required">
						<label class="col-sm-2 control-label">Phone</label>
						<div class="col-sm-6">
							<input type="text" name="phone" value="<?php echo $data->phone;?>" class="form-control" required/>
						</div>
					</div>
					<div class="form-group required">
						<label class="col-sm-2 control-label">Email</label>
						<div class="col-sm-6">
							<input type="email" name="email" value="<?php echo $data->email;?>" class="form-control" required/>
						</div>
					</div>
					<div class="form-group required">
						<label class="col-sm-2 control-label">Address</label>
						<div class="col-sm-6">
							<textarea class="form-control" name="address" rows="5"><?php echo $data->address;?></textarea>
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
            var country = LoadHTML('guest/country/'+value);
            $('#country_id').html(country);
        });

		 $('#country_id').change(function(){
            $('#province_id').html(empty('province'));
            $('#city_id').html(empty('city'));
            var value = $(this).val();
            var province = LoadHTML('guest/province/'+value);
            $('#province_id').html(province);
        });
		
		 $('#province_id').change(function(){
		 	$('#city_id').html(empty('city'));
		 	var value = $(this).val();
		 	var city = LoadHTML('guest/city/'+value);
		 	$('#city_id').html(city);
		 });

	});
</script>