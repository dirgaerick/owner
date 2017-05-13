<div class="container-fluid">
	<div class="col-lg-12 col-md-12 col-sm-12 col-sx-12">
		<div class="panel-body">
			<div class="row">
				<div class="pull-right">
					<a href="<?php echo url();?>/bookings/index" data-toggle="tooltip" title="Back To Grid" class="btn btn-default"><i class="fa fa-refresh"></i> Back</a>
				</div>
			</div>
		</div>
	</div>
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
				<h3 class="panel-title">Detail Bookings Rooms</h3>
			</div>
			<div class="panel-body">
				<form class="form-horizontal" method="POST" action="<?php echo url();?>/bookings">
					<div class="form-group">
						 <label class="col-sm-2 control-label">Receptionist</label>
						 <div class="col-sm-3">
						 	<label class="control-label">:</label>
						 	<?php if(isset($data->employee->full_name)): ?>
								<label class="control-label"><?php echo $data->employee->full_name;?></label>
							<?php Else: ?>	
								<label class="control-label">Administrator</label>
							<?php EndIf; ?>
						 </div>
					</div>
					<div class="form-group">
						 <label class="col-sm-2 control-label">Booking Code</label>
						 <div class="col-sm-3">
						 	<label class="control-label">:</label>
							<label class="control-label"><?php echo $data->booking_code;?></label>
						 </div>
					</div>
					<div class="form-group">
						 <label class="col-sm-2 control-label">Date of Bookings</label>
						 <div class="col-sm-3">
						 	<label class="control-label">:</label>
							<label class="control-label"><?php echo $data->date_booking;?></label>
						 </div>
					</div>
					<div class="form-group">
						 <label class="col-sm-2 control-label">Checkin Time</label>
						 <div class="col-sm-3">
							<label class="control-label">:</label>
							<label class="control-label"><?php echo $data->checkin_time;?></label>
						 </div>
					</div>
					<div class="form-group">
						 <label class="col-sm-2 control-label">Number Of Time</label>
						 <div class="col-sm-3">
							 <label class="control-label">:</label>
							 <label class="control-label"><?php echo $data->number_of_time;?> Hours</label>
						 </div>
					</div>
					<div class="form-group">
						 <label class="col-sm-2 control-label">Checkout Time</label>
						 <div class="col-sm-3">
							<label class="control-label">:</label>
							<label class="control-label"><?php echo $data->checkout_time;?></label>
						 </div>
					</div>
					<div class="form-group">
						 <label class="col-sm-2 control-label">Guest Name</label>
						 <div class="col-sm-4">
							<label class="control-label">:</label>
							<label class="control-label"><?php echo $data->guest->full_name;?></label>
						 </div>
					</div>
					
					<div id="data-service"></div>
					<div class="table-responsive">
						<table class="table table-bordered table-hover" id="TData">
							<thead>
								<tr>
									<td colspan="4">
										<label># Details Of Rooms</label>
									</td>
								</tr>
								<tr>
									<th>Type Of Rooms</th>
									<th>Rooms</th>
									<th>Number Of Rooms</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($rooms as $r): ?>
									<tr>
										<td><?php echo $r->room->type->name;?></td>
										<td><?php echo $r->room->name;?></td>
										<td><?php echo $r->room->number;?></td>
										<td>$ <?php echo $r->room->type->price;?></td>
									</tr>
								<?php EndForeach; ?>	
							</tbody>
						</table>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
