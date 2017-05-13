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
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Bookings Rooms</h3>
			</div>
			<div class="panel-body">
				<form class="form-horizontal" method="POST" action="<?php echo url();?>/bookings">
					<div class="form-group">
						 <label class="col-sm-2 control-label">Date of Bookings</label>
						 <div class="col-sm-3">
						 	 <input type="hidden" name="employee_id" value="<?php echo Session::get('employee_id');?>" readonly="true"/>
							 <input type="text"  value="<?php echo date('Y-m-d');?>" name="date_booking" class="form-control" readonly="true" required/>
						 </div>
					</div>
					<div class="form-group">
						 <label class="col-sm-2 control-label">Checkin Time</label>
						 <div class="col-sm-3">
							 <input type="text" id="checkin_time" value="<?php date_default_timezone_set('Asia/Jakarta'); echo  $date = date("H:i");?>"  name="checkin_time" class="form-control" required/>
						 </div>
					</div>
					<div class="form-group">
						 <label class="col-sm-2 control-label">Number Of Time</label>
						 <div class="col-sm-3">
							 <input type="number" id="number_of_time"  name="number_of_time" onchange="tambah_waktu()" class="form-control" required/>
						 </div>
					</div>
					<div class="form-group">
						 <label class="col-sm-2 control-label">Checkout Time</label>
						 <div class="col-sm-3">
							 <input type="text" id="checkout_time" name="checkout_time" class="form-control" required/>
						 </div>
					</div>
					<div class="form-group">
						 <label class="col-sm-2 control-label">Guest Name</label>
						 <div class="col-sm-4">
							 <input type="hidden" id="guest_id" name="guest_id" class="form-control"  required/>
						 </div>
					</div>
					
					<div id="data-service"></div>
					<div class="table-responsive">
						<table class="table table-bordered table-hover" id="TData">
							<thead>
								<tr>
									<td colspan="5">
										<label># Details Of Rooms</label>
										<a href="javascript:void(0)" onclick="AddRoom()" title="Add New Room" class="btn pull-right btn-sm btn-success"><i class="fa fa-plus"></i> Add Room</a>
									</td>
								</tr>
								<tr>
									<th>Type Of Rooms</th>
									<th>Rooms</th>
									<th>Number Of Rooms</th>
									<th>Price</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
					</div>
					<div class="pull-right">
						<button type="reset" data-toggle="tooltip" title="Reset Form" class="btn btn-warning"><i class="fa fa-refresh"></i> Reset</button>
						<button type="submit" data-toggle="tooltip" title="Save" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">

function tambah_waktu(){
	var x = document.getElementById("number_of_time").value;

var today = new Date();
var y = Number(x);
var u = today.getHours() + y;
today.setHours(u);
document.getElementById("checkout_time").value=today.getHours()+':'+today.getMinutes();

}
	$(document).ready(function(){

		$('#guest_id').select2({
            ajax: {
                placeholder: 'Type Guest Name',    
                url: '<?php echo url();?>/bookings/guest',
                dataType: 'json',
                quietMillis: 100,
                data: function (term) {
                    return {
                        q: term, // search term
                    };
                },
                results: function (data) {
                    var myResults = [];
                    $.each(data, function (index, item) {
                        myResults.push({
                            'id': item.id,
                            'text': item.text
                        });
                    });
                    return {
                        results: myResults
                    };
                },
                minimumInputLength: 3
            }
        });

        

       

      

	});

	
	function AddRoom(){
		var row = $('#TData tbody tr').length;
		if(row>0){
			var index = $('.index').last().attr('id');
			index = parseInt(index);
			row = parseInt(row);
			row = index+1;
		}
		var html = '<tr id="'+row+'" class="index">';
		html += '<td><input type="hidden" id="type_id'+row+'" onChange="javascript:room(this)" class="form-control" required/></td>';
		html += '<td><select id="room_id'+row+'" name="room_id[]" class="form-control"  onChange="javascript:price(this)" required></select></td>';
		html += '<td><input type="text" id="number'+row+'" class="form-control" readonly="true" required/></td>';
		html += '<td><input type="text" id="price'+row+'" class="form-control" readonly="true" required/></td>';
		html += '<td><a href="javascript:void(0)" onclick="javascript:deleteRow(this)" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> Delete</a></td>';
		html += '</tr>';
		$('#TData tbody').append(html);
		$('#type_id'+row).select2({
            ajax: {
                placeholder: 'Type Type Of Rooms',    
                url: '<?php echo url();?>/bookings/type',
                dataType: 'json',
                quietMillis: 100,
                data: function (term) {
                    return {
                        q: term, // search term
                    };
                },
                results: function (data) {
                    var myResults = [];
                    $.each(data, function (index, item) {
                        myResults.push({
                            'id': item.id,
                            'text': item.text
                        });
                    });
                    return {
                        results: myResults
                    };
                },
                minimumInputLength: 3
            }
        });
      
	}

	function room(x){
		var id = $(x).attr('id');
        var value = $('#'+id).val();
        id = id.substr(7);
        var room = LoadRoom(value);
        $('#room_id'+id).html(room);
        $('#room_id'+id).select2();
	}

	
	function price(x){
		var id = $(x).attr('id');
		var value = $('#'+id).val();
		var json = LoadPrice(value);
		var data = eval(json);
		var index = id.substr(7);
		$("#number"+index).val(data[0].number);
		$("#price"+index).val(data[0].price);
	}

	function LoadRoom(id){
		var value = '';
		$.ajax({
			url: '<?php echo url();?>/bookings/rooms/'+id,
			dataType: 'html',
			async: false,
			success:function(data){
				value = data;
			}
		});
		return value;
	}

	function LoadPrice(id){
		var value = '';
		$.ajax({
			url: '<?php echo url();?>/bookings/price/'+id,
			dataType: 'json',
			async: false,
			success:function(data){
				value = data;
			}
		});
		return value;
	}

	

	
	function deleteRow(btn) {
	  var row = btn.parentNode.parentNode;
	  row.parentNode.removeChild(row);
	}

	AddRoom();

</script>