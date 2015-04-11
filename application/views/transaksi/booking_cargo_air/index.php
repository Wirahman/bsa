<div class="container">
	<h2 class="judul">Booking Cargo (AIR)</h2>
	<div id="alert"></div>
	<form class="form-horizontal">
		<fieldset>
			<div class="row">
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="order_no">Order No.</label>
					<div class="controls">
						<div class="input-append"><input type="text" name="order_no" id="order_no" oldvalue="" browseobj="cari_order_no" /><a style="display:none" class="add-on browse" id="cari_order_no" href="cari?ref=order_no&tipe=booking_cargo_air" title="Klik untuk mencari order number"><i class="icon-search"></i></a></div>
					</div>
				</div>
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="order_date">Order Date</label>
					<div class="controls">
						<input type="text" name="order_date" id="order_date" class="tanggal" />
					</div>
				</div>
				
			</div>
			<div class="row">
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="HAWB_no">HAWB No.</label>
					<div class="controls">
						<input type="text" obl="" name="HAWB_no" id="HAWB_no" />
					</div>
				</div>
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="MAWB_no">MAWB No.</label>
					<div class="controls">
						<input type="text" obl="" maxlength="20"  name="MAWB_no" id="MAWB_no" />
					</div>
				</div>
			</div>
			<div class="row">
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="SI_ref">SI Ref</label>
					<div class="controls">
						<input type="text" siref="" maxlength="10" name="SI_ref" id="SI_ref" />
					</div>
				</div>
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="quotation_ref">Quotation ref</label>
					<div class="controls">
						<div class="input-append"><input type="text" name="quotation_ref" id="quotation_ref" oldvalue="" browseobj="cari_quotation_ref" /><a style="display:none" class="add-on browse" id="cari_quotation_ref" href="cari?ref=quotation_ref" title="Klik untuk mencari quotation ref"><i class="icon-search"></i></a></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="control-group span9">
					<div class="controls">
						<ul class="nav nav-tabs nav-justified selector" id="meta">
							<li class="active"><a href="#parties" class="tab" title="Klik untuk mengisi informasi the parties">The Parties</a></li>
<!--							<li><a href="#biaya" class="tab" title="Klik untuk mengisi informasi biaya lain">B. Lain</a></li>-->
							<li><a href="#portroute" class="tab" title="Klik untuk mengisi informasi port and route">Port and Routing</a></li>
							<li><a href="#shipment" class="tab" title="Klik untuk mengisi informasi shipment detail">Shipment Detail</a></li>
							<li><a href="#particulars" class="tab" title="Klik untuk mengisi informasi particulars">Particulars</a></li>
						</ul> 
					</div>
				</div>
			</div>
			<div class="tab-content ">
				<div class="span12 tab-pane active" style="height:300px;width:1300px" id="parties">
					<div class="row">
						<div class="control-group span6">
							<label class="control-label" for="shipper_id">Shipper ID :</label>
							<div class="controls">
								<div class="input-append"><input type="text" name="shipper_id" id="shipper_id" oldvalue="" browseobj="cari_shipper_id" /><a style="display:none" class="add-on browse" id="cari_shipper_id" href="cari?ref=shipper_id&tipe=customer&cond1=shipper" title="Klik untuk mencari shipper id"><i class="icon-search"></i></a></div>
							</div>
							<div class="controls">
								<textarea type="text" name="keterangan_shipper" id="keterangan_shipper" class="input-xlarge" rows="3" /></textarea>
							</div>
						</div>
						<div class="control-group span6">
							<label class="control-label" for="cnee_id">Cnee ID :</label>
							<div class="controls">
								<div class="input-append"><input type="text" name="cnee_id" id="cnee_id" oldvalue="" browseobj="cari_cnee_id" /><a style="display:none" class="add-on browse" id="cari_cnee_id" href="cari?ref=cnee_id&tipe=customer&cond1=consignee" title="Klik untuk mencari consignee id"><i class="icon-search"></i></a></div>
							</div>
							<div class="controls">
								<textarea type="text" name="keterangan_cnee" id="keterangan_cnee" class="input-xlarge" rows="3" /></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="control-group span6">
							<label class="control-label" for="notify_id">Notify ID :</label>
							<div class="controls">
								<div class="input-append"><input type="text" name="notify_id" id="notify_id" oldvalue="" browseobj="cari_notify_id" /><a style="display:none" class="add-on browse" id="cari_notify_id" href="cari?ref=notify_id&tipe=customer" title="Klik untuk mencari notify id"><i class="icon-search"></i></a></div>
							</div>
							<div class="controls">
								<textarea type="text" name="keterangan_notify" id="keterangan_notify" class="input-xlarge" rows="3" /></textarea>
							</div>
						</div>
						<div class="control-group span6">
							<label class="control-label" for="agent_id">Agent ID :</label>
							<div class="controls">
								<div class="input-append"><input type="text" name="agent_id" id="agent_id" oldvalue="" browseobj="cari_agent_id" /><a style="display:none" class="add-on browse" id="cari_agent_id" href="cari?ref=agent_id&tipe=customer&cond1=agent" title="Klik untuk mencari agent id"><i class="icon-search"></i></a></div>
							</div>
							<div class="controls">
								<textarea type="text" name="keterangan_agent" id="keterangan_agent" class="input-xlarge" rows="3" /></textarea>
							</div>
						</div>
					</div>
				</div>
				<div class="span12 tab-pane portroute" style="height:300px;width:1300px" id="portroute">

					<div class="row">
						<div class="control-group span6" style="height:15px">
							<label class="control-label" for="port_code">Port of Loading :</label>
							<div class="controls">
								<div class="input-append"><input type="text" name="port_kode_loading" id="port_kode_loading" oldvalue="" browseobj="cari_kode_airport_loading" style="width:50px"/><a style="display:none" class="add-on browse" id="cari_kode_airport_loading" href="cari?ref=port_kode_loading&tipe=air" title="Klik untuk mencari Kode Airport"><i class="icon-search"></i></a></div>
								<input type="text" style="width:110px" readonly="readonly" name="nama_port_loading" id="nama_port_loading" />
							</div>
						</div>
						<div class="control-group span6" style="height:15px">
							<label class="control-label" for="port_code">Port of Departure :</label>
							<div class="controls">
								<div class="input-append"><input type="text" name="port_kode_departure" id="port_kode_departure" oldvalue="" browseobj="cari_kode_airport_departure" style="width:50px"/><a style="display:none" class="add-on browse" id="cari_kode_airport_departure" href="cari?ref=port_kode_departure&tipe=air" title="Klik untuk mencari Kode Airport"><i class="icon-search"></i></a></div>
								<input type="text" style="width:110px" readonly="readonly" name="nama_port_departure" id="nama_port_departure" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="control-group span6" style="height:15px">
							<label class="control-label" for="port_code">Port of Transit :</label>
							<div class="controls">
								<div class="input-append"><input type="text" name="port_kode_transit" id="port_kode_transit" oldvalue="" browseobj="cari_kode_airport_transit" style="width:50px"/><a style="display:none" class="add-on browse" id="cari_kode_airport_transit" href="cari?ref=port_kode_transit&tipe=air" title="Klik untuk mencari Kode Airport"><i class="icon-search"></i></a></div>
								<input type="text" style="width:110px" readonly="readonly" name="nama_port_transit" id="nama_port_transit" />
							</div>
						</div>
						<div class="control-group span6" style="height:15px">
							<label class="control-label" for="port_code">Port of Destination :</label>
							<div class="controls">
								<div class="input-append"><input type="text" name="port_kode_destination" id="port_kode_destination" oldvalue="" browseobj="cari_kode_airport_destination" style="width:50px"/><a style="display:none" class="add-on browse" id="cari_kode_airport_destination" href="cari?ref=port_kode_destination&tipe=air" title="Klik untuk mencari Kode Airport"><i class="icon-search"></i></a></div>
								<input type="text" style="width:110px" readonly="readonly" name="nama_port_destination" id="nama_port_destination" />
							</div>
						</div>
				
					</div>
					<div class="row">
						<div class="control-group span6" style="height:15px">
							<label class="control-label" for="stuffing_date">Stuffing Date</label>
							<div class="controls">
								<input type="text" name="stuffing_date" id="stuffing_date" class="tanggal" />
							</div>
						</div>
						<div class="control-group span6" style="height:15px">
							<label class="control-label" for="onboard_date">Onboard Date</label>
							<div class="controls">
								<input type="text" name="onboard_date" id="onboard_date" class="tanggal" />
							</div>
						</div>
				
					</div>
					<div class="row">
						<div class="control-group span6" style="height:15px">
							<label class="control-label" for="shipment_date">Shipment E.T.D</label>
							<div class="controls">
								<input type="text" name="shipment_ETD" id="shipment_ETD" class="tanggal" />
							</div>
						</div>
						<div class="control-group span6" style="height:15px">
							<label class="control-label" for="shipment_ETA">Shipment E.T.A</label>
							<div class="controls">
								<input type="text" name="shipment_ETA" id="shipment_ETA" class="tanggal" />
							</div>
						</div>
				
					</div>

					<div class="row">
						<div class="control-group span6" style="height:15px">
							<label class="control-label" for="co_loader">Co-Loader</label>
							<div class="controls">
								<div class="input-append"><input style="width:110px" type="text" name="co_loader" id="co_loader" oldvalue="" browseobj="cari_co_loader" /><a style="display:none" class="add-on browse" id="cari_co_loader" href="cari?ref=co_loader&tipe=customer&cond1=coloader" title="Klik untuk mencari co-loader"><i class="icon-search"></i></a></div>
								<input type="text"   readonly="readonly"  name="co_loader_name" id="co_loader_name"/>
							</div>
						</div>
				
					</div>
					<div class="row">
						<div class="control-group span12" >
							<input type="hidden" id="baris-route" name="baris-route" value="0" />
							<table class="table">
								<thead height="5px">
									<tr height="5px"><th style="width:100px">Routing</th><th style="width:100px">Airline ID</th><th style="width:100px">Airline Name</th><th style="width:100px">Flight No</th><th style="width:100px">E.T.D.</th><th style="width:100px">E.T.A.</th><th></th></tr>
								</thead>
								<tbody id="transaksix">
								
								</tbody>
							</table>
						</div>
					</div>
					
				</div>
				<div class="span12 tab-pane shipment" style="height:300px;width:1300px" id="shipment">
					<div class="row">
						<div class="control-group span6" style ="height:15px">
							<label class="control-label" for="packages">Packages :</label>
							<div class="controls">
								<input type="text" style="text-align:right" name="packages_number" id="packages_number" class="currency" />
								<select name="packages_type" id="packages_type" class="packages_type" style="width:80px;margin-left:0px">
									<option value="box">BOX</option>
									<option value="pieces">PIECES</option>
									<option value="cartons">CARTONS</option>
									<option value="reels">REELS</option>
								</select>
							</div>
							
						</div>
						<div class="control-group span6" style ="height:15px">
							<label class="control-label" for="gross_weight">Gross Weight :</label>
							<div class="controls">
								<input type="text" style="text-align:right" name="gross_weight" id="gross_weight" class="currency" />
								<select name="gross_type" id="gross_type" class="gross_type" style="width:80px;margin-left:0px">
									
								</select>
							</div>
							
						</div>
						
					</div>
					<div class="row">
						
						<div class="control-group span6" style ="height:15px">
							<label class="control-label" for="net_weight">Nett Weight :</label>
							<div class="controls">
								<input type="text" style="text-align:right" name="net_weight" id="net_weight" class="currency" />
								<select name="net_type" id="net_type" class="net_type" style="width:80px;margin-left:0px">
									
								</select>
							</div>
							
						</div>
						<div class="control-group span6" style ="height:15px">
							<label class="control-label" for="measurement">Measurement :</label>
							<div class="controls">
								<input type="text" style="text-align:right" name="measurement_number" id="measurement_number" class="currency" />
								<select name="measurement_type" id="measurement_type" class="measurement_type" style="width:80px;margin-left:0px">
									<option value="m3">M3</option>
									<option value="cm3">CM3</option>
									<option value="mm3">MM3</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						
						<div class="control-group span6" style ="height:15px">
							<label class="control-label" for="change_weight">Chg Weight :</label>
							<div class="controls">
								<input type="text" style="text-align:right" name="change_weight" id="change_weight" class="currency" />
								<select name="change_weight_type" id="change_weight_type" class="change_weight_type" style="width:80px;margin-left:0px">
									
								</select>
							</div>
							
						</div>
						<div class="control-group span6" style ="height:15px">
							<label class="control-label" for="rata_charge">Rata/Charge :</label>
							<div class="controls">
								<input type="text" style="text-align:right" name="rata_charge" id="rata_charge" class="currency" />
								<select name="rata_charge_type" id="rata_charge_type" class="rata_charge_type" style="width:80px;margin-left:0px">
									
								</select>
							</div>
							
						</div>
					</div>
					<div class="row">
						<div class="control-group span6" style ="height:15px">
							<label class="control-label" for="total">Total :</label>
							<div class="controls">
								<input type="text" style="text-align:right" name="total" id="total" class="currency" />
							</div>
							
						</div>
						<div class="control-group span6" style ="height:15px">
							<label class="control-label" for="commodity">Commodity :</label>
							<div class="controls">
								<div class="input-append"><input style="width:110px" type="text" name="commodity_code" id="commodity_code" oldvalue="" browseobj="cari_commodity_code" /><a style="display:none" class="add-on browse" id="cari_commodity_code" href="cari?ref=commodity_code&tipe=com" title="Klik untuk mencari commodity code"><i class="icon-search"></i></a></div>
								<input type="text" readonly="readonly"  name="commodity_name" id="commodity_name"/>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="control-group span6" style ="height:15px">
							<label class="control-label" for="type_of_service">Type of Service :</label>
							<div class="controls">
								<select name="service_type" id="service_type" class="service_type" style="width:150px;margin-left:0px">
									<option value="fcl">FCL</option>
									<option value="lcl">LCL</option>
									<option value="bb">BREAK-BULK</option>
								</select>
								<select name="service_type2" id="service_type2" class="service_type2" style="width:120px;margin-left:0px">
									<option value="cycy">CY-CY</option>
									<option value="cycfs">CY-CFS</option>
								</select>
							</div>
						</div>
						<div class="control-group span6" style ="height:15px">
							<label class="control-label" for="freight">Freight Term :</label>
							<div class="controls">
								<div class="input-append"><input style="width:110px" type="text" name="freight_term_code" id="freight_term_code" oldvalue="" browseobj="cari_freight_term_code" /><a style="display:none" class="add-on browse" id="cari_freight_term_code" href="cari?ref=freight_term_code&tipe=freight_term" title="Klik untuk mencari freight term code"><i class="icon-search"></i></a></div>
								<input type="text" readonly="readonly"  name="freight_term_name" id="freight_term_name"/>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="control-group span6" style ="height:15px">
							<label class="control-label" for="freight_payable_at">Freight Payable at :</label>
							<div class="controls">
								<select name="freight_payable_at" id="freight_payable_at" class="freight_payable_at" style="width:140px;margin-left:0px">
									<option value="origin">ORIGIN</option>
									<option value="destination">DESTINATION</option>
								
								</select>
								
							</div>
						</div>
						<div class="control-group span6" style ="height:15px">
							<label class="control-label" for="original_BL">Original B/L :</label>
							<div class="controls">
								<input type="text" style="text-align:right" name="original_BL" id="original_BL" class="currency" />
							</div>
							
						</div>
					</div>
					<div class="row">
						<div class="control-group span6" style ="height:15px">
							<label class="control-label" for="order_status">Order Status :</label>
							<div class="controls">
								<select name="order_status" id="order_status" class="order_status" style="width:120px;margin-left:0px">
									<option value="freehand">FREEHAND</option>
									<option value="nominate">NOMINATE</option>
								
								</select>
								
							</div>
						</div>
						<div class="control-group span6" style ="height:30px">
							<label class="control-label" for="remarks">Remarks :</label>
							<div class="controls">
								<textarea type="text" name="remarks" id="remarks" class="input-xlarge" rows="1" /></textarea>
							</div>
							
						</div>
					</div>
					<div class="row">
						<div class="control-group span6" style ="height:15px">
							<label class="control-label" for="handling_information">Handling Information :</label>
							<div class="controls">
								<textarea type="text" name="handling_information" id="handling_information" class="input-xlarge" rows="1" /></textarea>
							</div>
							
						</div>
						<div class="control-group span6" style ="height:15px">
							<label class="control-label" for="accounting_information">Accounting Information :</label>
							<div class="controls">
								<textarea type="text" name="accounting_information" id="accounting_information" class="input-xlarge" rows="1" /></textarea>
							</div>
							
						</div>
					</div>

				</div>
				<div class="span12 tab-pane particulars" id="particulars" style="height:300px;width:1300px">

					<div class="row">
						<div class="control-group span4">
							<label>MARKS & NOS. / CONTAINER NOS. :</label>
						
								<textarea type="text"  style="width: 350px;"  name="marksnumber" id="marksnumber" class="input-xlarge" rows="7" /></textarea>
							
						</div>
						<div class="control-group span8">
							<label >DESCRIPTION OF PACKAGES AND GOODS :</label>
							
								<textarea type="text" style="width: 600px;" name="description_packages" id="description_packages" class="input-xlarge" rows="7" /></textarea>
							
						</div>
					</div>
					
				</div>
			</div>


			
			<div class="span12 form-actions btn-group">
				<?php if( in_array( 'create_booking_cargo_air', unserialize($capabilities) ) ){ ?>
				<a href="#" class="btn btn-primary simpan" style="top:-15px"><i class="icon-ok icon-white"></i> Simpan</a>
				<?php } ?>
				<a href="#" class="btn cetak browse" id="cetak" style="top:-15px"><i class="icon-print"></i> Cetak</a>
				<?php if( in_array( 'update_booking_cargo_air', unserialize($capabilities) ) ){ ?>
				<a href="#" class="btn btn-primary ubah" style="top:-15px"><i class="icon-pencil icon-white"></i> Ubah</a>
				<?php } ?>
				<?php if( intval($role)!= 1){ ?>
					<?php if( in_array( 'delete_booking_cargo_air', unserialize($capabilities) ) ){ ?>
					<a href="#" class="btn btn-danger hapus" style="top:-15px"><i class="icon-trash icon-white"></i> Hapus</a>
					<?php } ?>
				<?php } ?>
				<a href="#" class="btn batal" style="top:-15px"	><i class="icon-refresh"></i> Cancel</a>
			</div>
		</fieldset>
	</form>
</div>
<style type="text/css">

#parties{
overflow-x:auto;
}
#parties{
overflow-y:auto;
}
#portroute{
overflow-x:auto;
}
#portroute{
overflow-y:auto;
}
#shipment{
overflow-x:auto;
}
#shipment{
overflow-y:auto;
}

#particulars{
overflow-x:auto;
}
#particulars{
overflow-y:auto;
}


</style>

<div id="mask"></div>
<link href="<?php echo base_url('assets/css/mask.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/jqueryui/style.css'); ?>" rel="stylesheet">
<script src='<?php echo base_url('assets/js/jqueryui/jquery.ui.core.min.js'); ?>'></script>
<script src='<?php echo base_url('assets/js/jqueryui/jquery.ui.datepicker.min.js'); ?>'></script>
<script src='<?php echo base_url('assets/js/unserialize.js'); ?>'></script>
<script src='<?php echo base_url('assets/js/utf8.decode.js'); ?>'></script>
<script src='<?php echo base_url('assets/js/format.currency.min.js'); ?>'></script>
<script src='<?php echo base_url('assets/js/script.js'); ?>'></script>
<script src='<?php echo base_url('assets/js/jquery.caret.min.js'); ?>'></script>
<script>
//*****************************************************************//
//
// Initialize
//
//*****************************************************************//


function initialize(){
	$( '#order_no' ).focus();
	set_weight_type();
	set_currency_type();
	initializex();
}
function initializex(){

	$( '.simpan, .batal' ).show();
	$( '.ubah, .hapus, .cetak' ).hide();
	$('input:text, textarea').val('');
	$('input:checkbox').removeAttr('checked');
	$('.browse').tooltip();
	$('.alert').alert();
	$('.tanggal').datepicker({
		dateFormat: 'dd-mm-yy',
		changeMonth:true,
		changeYear:true
	});


	$('#cetak').attr('href', '');

	$('#meta a:first').show();
	$('#meta a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	})

	$('.route-row').remove();
	$( '#transaksix' ).append(
		add_row_route( 0, 0 )
	);

	var d = new Date();
	var tgl = d.getDate();
	if( tgl < 10 ) tgl = "0" + tgl;
	var bln = d.getMonth() + 1;
	if( bln < 10 ) bln = "0" + bln;
	var thn = d.getFullYear();
	var tanggal = tgl+"-"+bln+"-"+thn;
	$( "#order_date" ).val( tanggal );
	$("#gross_type").val($("#gross_type option:first").val());
	$("#net_type").val($("#net_type option:first").val());
	$("#change_weight_type").val($("change_weight_type option:first").val());
	$("#rata_charge_type").val($("rata_charge_type option:first").val());
	$("#packages_type").val($("#packages_type option:first").val());
	$("#measurement_type").val($("#measurement_type option:first").val());
	$("#service_type2").val($("#service_type2 option:first").val());
	nomorbaru();
}

preventempty="order_no,order_date,HAWB_no,MAWB_no,SI_ref,quotation_ref";
preventemptystatus="1,1,1,1,1,1";
//*****************************************************************//
//
// Tambah pilihan kg sesuai database
//
//*****************************************************************//
function set_weight_type(){
	$.post( 'db_read_all_weight', { }, function( result ){
					if( result === '' ){
						alert("There is nothing in weight type database");
					} else {
						var data = unserialize( result );	
						var i=0;
						for(;data[i];i++)
						{
							if(i==0)
							{
								$('#gross_type').append('<option value="'+data[i]['unit_code']+'" selected="selected" >'+data[i]['description']+'</option>');
								$('#net_type').append('<option value="'+data[i]['unit_code']+'" selected="selected" >'+data[i]['description']+'</option>');
								$('#change_weight_type').append('<option value="'+data[i]['unit_code']+'" selected="selected" >'+data[i]['description']+'</option>');
							}
							else
							{
								$('#gross_type').append('<option value="'+data[i]['unit_code']+'"  >'+data[i]['description']+'</option>');
								$('#net_type').append('<option value="'+data[i]['unit_code']+'" selected="selected" >'+data[i]['description']+'</option>');
								$('#change_weight_type').append('<option value="'+data[i]['unit_code']+'" selected="selected" >'+data[i]['description']+'</option>');
							}
						}
					}
	});
}

function set_currency_type(){
	$.post( 'db_read_all_currency', { }, function( result ){
		if( result === ''){
			alert("There is nothing in Currency Type Database");
		} else {
			var data = unserialize ( result );
			var i=0;
			for(;data[i];i++)
			{
				if(i==0)
				{
					$('#rata_charge_type').append('<option value="'+data[i]['currency_code']+'" selected="selected" >'+data[i]['description']+'</option>');
				}
				else
				{
					$('#rata_charge_type').append('<option value="'+data[i]['currency_code']+'" selected="selected" >'+data[i]['description']+'</option>');
				}
			}
		}
	});
}

function nomorbaru()
{
	$.post( 'db_lastid', {tanggal : $( '#order_date' ).val() }, function( result ){
		if( result === '' ){
			var pecah=$( '#order_date' ).val().split('-');
			$( '#order_no' ).val( pecah[2] + pecah[1] + '0001' );
		} else {
			var lastid = ( Number( result ) + 1 ) + '';
			for( var i = lastid.length; i < 10; i++ ){
				lastid = '0' + lastid;
			}
			$( '#order_no' ).val( lastid );
		}
	});
}

//*****************************************************************//
//
// Tambah baris tabel route
//
//*****************************************************************//
function add_row_route(i, action) {
	var tabel = '<tr class="route-row" id="route-' + i + '">';
	//tabel  += '<td><div class="input-append"><input style="width:100px" type="text" name="route['+i+'][routing]" id="route-'+i+'-routing" class="route-routing id detail_transaksi" oldvalue="" browseobj="cari-route-'+i+'-routing" /><a style="display:none" class="add-on browse id detail_transaksi" id="cari-route-'+i+'-routing" href="cari?ref=route-'+i+'-routing&tipe=city" title="Click for Search Routing"><i class="icon-search"></i></a></div></td>';
	tabel += '<td><div class="input-append"><input style="width:100px" type="text" name="route['+i+'][routing]" id="route-'+i+'-routing" class="route-routing id detail_transaksi" oldvalue="" browseobj="cari-route-'+i+'-routing" /><a style="display:none" class="add-on browse id detail_transaksi" id="cari-route-'+i+'-routing" href="cari?ref=route-'+i+'-routing&tipe=city" title="Click for Search Routing"><i class="icon-search"></i></a></div></td>'; 
	//tabel += '<td><input style ="width:100px" type="text" name="route['+i+'][airline_id]" id="route-'+i+'-airline_id" class="route-airline_id id detail_transaksi" oldvalue="" browseobj="cari-route-'+i+'-airline_id" /><a style="display:none" class="add-on browse id detail_transaksi" id="cari-route-'+i+'-airline_id" href="cari?ref=route-'+i+'-airline_id&tipe=airline" title="Click for Search Airline"><i class="icon-search"></i></a></div></td>'; 
	tabel += '<td><input style ="width:100px" type="text" name="route['+i+'][airline_id]" id="route-'+i+'-airline_id" class="route-airline_id id detail_transaksi" oldvalue="" browseobj="cari-route-'+i+'-airline_id" /><a style="display:none" class="add-on browse id detail_transaksi" id="cari-route-'+i+'-airline_id" href="cari?ref=route-'+i+'-airline_id&tipe=airline" title="Click for Search Airline"><i class="icon-search"></i></a></div></td>';
	tabel += '<td><input type ="text" name="route[' + i + '][airline_name]" style="text-align:right;width:100px" id="route-' + i + '-airline_name" class="route-airline_name detail_transaksi" readonly /></td>';
	tabel += '<td><input type ="text" name="route[' + i + '][flight_no]" style="text-align:right;width:100px" id="route-' + i + '-flight_no" class="route-flight_no detail_transaksi" readonly /></td>';
	tabel += '<td><input type ="text" name="route[' + i + '] [etd]" style="text-align:right;width:100px" id="route-' + i + '-etd" class="route-etd detail_transaksi tanggal" /></td>';
	tabel += '<td><input type ="text" name="route[' + i + '] [eta]" style="text-align:right;width:100px" id="route-' + i + '-eta" class="route-etd detail_transaksi tanggalx tanggal" /></td>';
	if( action === 1 ){
		tabel += '<td class="action" id="action-baris-route-'+i+'"><a href="#void()" class="tombol tombol-small hapus-baris-route detail_transaksi" id="hapus-baris-route-'+i+'"><i class="icon-remove"></i></a></td>';
	} else tabel += '<td class="action" id="action-baris-route-'+i+'"><a href="#void()" class="tombol tombol-small tambah-baris-route detail_transaksi" id="tambah-baris-route-'+i+'"><i class="icon-plus"></i></a></td>';
	tabel += '</tr>';
	$( "#baris-route" ).val( i + 1 );
	$('.route-etd').datepicker({
		dateFormat: 'dd-mm-yy'
	});
	$('.route-eta').datepicker({
		dateFormat: 'dd-mm-yy'
	});
	return tabel;
}

$( document ).ready( function() {

	////////////////////////////////////////////////////////////////
	//
	// Initialize
	//
	////////////////////////////////////////////////////////////////
	initialize();

	////////////////////////////////////////////////////////////////
	//
	// Miscellaneous
	//
	////////////////////////////////////////////////////////////////
	$( '#order_date' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
			
			} else {
				$( '#HAWB_no' ).focus();
			}
		}
	});

	$( '#HAWB_no' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
			
			} else {
				$( '#MAWB_no' ).focus();
			}
		}
	});

	$( '#MAWB_no' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
			
			} else {
				$( '#SI_ref' ).focus();
			}
		}
	});

	$( '#SI_ref' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
			
			} else {
				$( '#quotation_ref' ).focus();
			}
		}
	});



	$( '#quotation_ref' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
			
			} else {

			}
		}
	});

	////////////////////////////////////////////////////////////////
	//
	// Mengatur tab The parties
	//
	////////////////////////////////////////////////////////////////


	$( '#shipper_id' ).bind( 'blur', function( ) {
		if ($( this ).val()===''){
			$( '#keterangan_shipper' ).val( "" );
		}else{
			if ($(this).val()!== $(this).attr("oldvalue")){
				$.post( 'db_read_customer', { id: $( '#shipper_id' ).val(), cond:'shipper' }, function( result ){
					if( result === '' ){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Kode shipper tidak ada.</div>';
						$('#alert').html( message );
						$( "#keterangan_shipper" ).val( '' );
						$( "#shipper_id" ).val( '' );
						$( '#shipper_id' ).focus();
					} else {
						var data = unserialize( result );	
						var keterangan = data['name']+"\n"+data['address']+"\n"+data['address1']+"\n"+data['address2'];
						$( "#keterangan_shipper" ).val( keterangan );
					}
				});
			}
		}
	});
	$( '#shipper_id' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_shipper_id' ).click();
			} else {
				$( '#cnee_id' ).focus();
			}
		}
	});

	$( '#cnee_id' ).bind( 'blur', function( ) {
		if ($( this ).val()===''){
			$( '#keterangan_cnee' ).val( "" );
		}else{
			if ($(this).val()!== $(this).attr("oldvalue")){
				$.post( 'db_read_customer', { id: $( '#cnee_id' ).val(), cond:'consignee' }, function( result ){
					if( result === '' ){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Kode consignee tidak ada.</div>';
						$('#alert').html( message );
						$( "#keterangan_cnee" ).val( '' );
						$( "#cnee_id" ).val( '' );
						$( '#cnee_id' ).focus();
					} else {
						var data = unserialize( result );	
						var keterangan = data['name']+"\n"+data['address']+"\n"+data['address1']+"\n"+data['address2'];
						$( "#keterangan_cnee" ).val( keterangan );
					}
				});
			}
		}
	});
	$( '#cnee_id' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_cnee_id' ).click();
			} else {
				$( '#notify_id' ).focus();
			}
		}
	});
	$( '#notify_id' ).bind( 'blur', function( ) {
		if ($( this ).val()===''){
			$( '#keterangan_notify' ).val( "" );
		}else{
			if ($(this).val()!== $(this).attr("oldvalue")){
				$.post( 'db_read_customer', { id: $( '#notify_id' ).val(), cond: '' }, function( result ){
					if( result === '' ){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Kode notify tidak ada.</div>';
						$('#alert').html( message );
						$( "#keterangan_notify" ).val( '' );
						$( "#notify_id" ).val( '' );
						$( '#notify_id' ).focus();
					} else {
						var data = unserialize( result );	
						var keterangan = data['name']+"\n"+data['address']+"\n"+data['address1']+"\n"+data['address2'];
						$( "#keterangan_notify" ).val( keterangan );
					}
				});
			}
		}
	});
	$( '#notify_id' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_notify_id' ).click();
			} else {
				$( '#agent_id' ).focus();
			}
		}
	});

	$( '#agent_id' ).bind( 'blur', function( ) {
		if ($( this ).val()===''){
			$( '#keterangan_agent' ).val( "" );
		}else{
			if ($(this).val()!== $(this).attr("oldvalue")){
				$.post( 'db_read_customer', { id: $( '#agent_id' ).val(), cond:'agent'  }, function( result ){
					if( result === '' ){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Kode agent tidak ada.</div>';
						$('#alert').html( message );
						$( "#keterangan_agent" ).val( '' );
						$( "#agent_id" ).val( '' );
						$( '#agent_id' ).focus();
					} else {
						var data = unserialize( result );	
						var keterangan = data['name']+"\n"+data['address']+"\n"+data['address1']+"\n"+data['address2'];
						$( "#keterangan_agent" ).val( keterangan );
					}
				});
			}
		}
	});
	$( '#agent_id' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_agent_id' ).click();
			} else {
				$( '.simpan' ).focus();
			}
		}
	});

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//
	//
	//	Shipment Detail
	//
	//
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	$( '#packages_number' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
			
			} else {
				$( '#gross_weight' ).focus();
			}
		}
	});

	$( '#gross_weight' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
			
			} else {
				$( '#net_weight' ).focus();
			}
		}
	});

	$( '#net_weight' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
			
			} else {
				$( '#measurement_number' ).focus();
			}
		}
	});

	$( 'measurement_number' ).bind( 'keydown', function( e ) {
		if ( e.which === 13){
			e.preventDefault();
			if( $( this ).val() === '' ){

			} else {
				$( '#change_weight')
			}
		}
	});


	$( 'change_weight' ).bind( 'keydown', function( e ) {
		if ( e.which === 13){
			e.preventDefault();
			if( $( this ).val() === '' ){

			} else {
				$( '#rata_charge')
			}
		}
	});


	$( 'rata_charge' ).bind( 'keydown', function( e ) {
		if ( e.which === 13){
			e.preventDefault();
			if( $( this ).val() === '' ){

			} else {
				$( '#total')
			}
		}
	});

	$( '#total' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
			
			} else {
				$( '#commodity_code' ).focus();
			}
		}
	});

	$( '#commodity_code' ).bind( 'blur', function( ) {
		if ($( this ).val()===''){
			$( '#commodity_name' ).val( "" );
		}else{
			if ($(this).val()!== $(this).attr("oldvalue")){
				$.post( 'db_read_commodity', { id: $( '#commodity_code' ).val() }, function( result ){
					if( result === '' ){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Kode commodity tidak ada.</div>';
						$('#alert').html( message );
						$( "#commodity_name" ).val( '' );
						$( "#commodity_code" ).val( '' );
						$( '#commodity_code' ).focus();
					} else {
					
						$( "#commodity_name" ).val( result );
					}
				});
			}
		}
	});

	$( '#commodity_code' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_commodity_code' ).click();
			} else {
				$( '#service_type' ).focus();
			}
		}
	});

	$( '#service_type' ).bind( 'blur', function( ) {
		$(".service_type2 option").each(function() {
   				$(this).remove();
		});
		if($('#service_type').val()=='fcl')
		{
			$('#service_type2').append('<option value="cycy" selected="selected" >CY-CY</option>');
			$('#service_type2').append('<option value="cycfs">CY-CFS</option>');
		}	
		else if($('#service_type').val()=='lcl')
		{
			$('#service_type2').append('<option value="cfscfs" selected="selected" >CFS-CFS</option>');
			$('#service_type2').append('<option value="cfscy" >CFS-CY</option>');
		}
		else
		{
			
			$('#service_type2').append('<option value="linier" selected="selected" >Linier</option>');
			$('#service_type2').append('<option value="fifo" >FIFO</option>');
			$('#service_type2').append('<option value="lifo" >LIFO</option>');
			$('#service_type2').append('<option value="fio"  >FIO</option>');
		}
	});

	$( '#service_type' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if($('#service_type').val()=='fcl')
			{
				$('#service_type2').append('<option value="cycy" selected="selected" >CY-CY</option>');
				$('#service_type2').append('<option value="cycfs">CY-CFS</option>');
			}	
		else if($('#service_type').val()=='lcl')
			{
				$('#service_type2').append('<option value="cfscfs" selected="selected" >CFS-CFS</option>');
				$('#service_type2').append('<option value="cfscy" >CFS-CY</option>');
			}
		else
			{
				$('#service_type2').append('<option value="linier" selected="selected" >Linier</option>');
				$('#service_type2').append('<option value="fifo" >FIFO</option>');
				$('#service_type2').append('<option value="lifo" >LIFO</option>');
				$('#service_type2').append('<option value="fio"  >FIO</option>');
			}
			$( '#service_type2' ).focus();
			
		}
	});

	$( '#service_type2' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
			
			} else {
				$( '#freight_term_code' ).focus();
			}
		}
	});

	$( '#freight_term_code' ).bind( 'blur', function( ) {
		if ($( this ).val()===''){
			$( '#freight_term_name' ).val( "" );
		}else{
			if ($(this).val()!== $(this).attr("oldvalue")){
				$.post( 'db_read_freight_term', { id: $( '#freight_term_code' ).val() }, function( result ){
					if( result === '' ){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Kode freight term tidak ada.</div>';
						$('#alert').html( message );
						$( "#freight_term_name" ).val( '' );
						$( "#freight_term_code" ).val( '' );
						$( '#freight_term_code' ).focus();
					} else {
					
						$( "#freight_term_name" ).val( result );
					}
				});
			}
		}
	});
	$( '#freight_term_code' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_freight_term_code' ).click();
			} else {
				$( '#freight_payable_at' ).focus();
			}
		}
	});

	$( '#freight_payable_at' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			
			$( '#original_BL' ).focus();
			
		}
	});


	$( '#original_BL' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			
			$( '#order_status' ).focus();
			
		}
	});

	$( '#order_status' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			
			$( '#remarks' ).focus();
			
		}
	});

	$( '#remarks' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			
			$( '#handling_information' ).focus();
			
		}
	});

	$( '#handling_information' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			
			$( '#accounting_information' ).focus();
			
		}
	});


	////////////////////////////////////////////////////////////////
	//
	// Mengatur tab port and route
	//
	////////////////////////////////////////////////////////////////

	$( '.detail_transaksi' ).live( 'keydown', function( e ){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if ( e.which === kodehapusbaris ){
			e.preventDefault();
			var xobj = document.getElementById('hapus-baris-route-'+num);
			if (xobj != null){
				$( '#hapus-baris-route-'+( Number( num ) ) ).click();
			}else{
				$("input[id*='" + "route-"+num + "']").val('');
			}
			setfocus(Number(num),'routing','route');
		}
	});


	$( '#port_kode_loading' ).bind( 'blur', function( ) {
		if ($( this ).val()===''){
			$( '#nama_port_loading' ).val( "" );
		}else{
			if ($(this).val()!== $(this).attr("oldvalue")){
				$.post( 'db_read_port', { id: $( '#port_kode_loading' ).val() }, function( result ){
					if( result === '' ){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Kode port tidak ada.</div>';
						$('#alert').html( message );
						$( "#nama_port_loading" ).val( '' );
						$( "#port_kode_loading" ).val( '' );
						$( '#port_kode_loading' ).focus();
					} else {
						$( "#nama_port_loading" ).val( result );
					}
				});
			}
		}
	});
	$( '#port_kode_loading' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_kode_seaport_loading' ).click();
			} else {
				$( '#port_kode_departure' ).focus();
			}
		}
	});

	$( '#port_kode_departure' ).bind( 'blur', function( ) {
		if ($( this ).val()===''){
			$( '#nama_port_departure' ).val( "" );
		}else{
			if ($(this).val()!== $(this).attr("oldvalue")){
				$.post( 'db_read_port', { id: $( '#port_kode_departure' ).val() }, function( result ){
					if( result === '' ){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Kode port tidak ada.</div>';
						$('#alert').html( message );
						$( "#nama_port_departure" ).val( '' );
						$( "#port_kode_departure" ).val( '' );
						$( '#port_kode_departure' ).focus();
					} else {
						$( "#nama_port_departure" ).val( result );
					}
				});
			}
		}
	});
	$( '#port_kode_departure' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_kode_seaport_departure' ).click();
			} else {
				$( '#port_kode_transit' ).focus();
			}
		}
	});

	$( '#port_kode_transit' ).bind( 'blur', function( ) {
		if ($( this ).val()===''){
			$( '#nama_port_transit' ).val( "" );
		}else{
			if ($(this).val()!== $(this).attr("oldvalue")){
				$.post( 'db_read_port', { id: $( '#port_kode_transit' ).val() }, function( result ){
					if( result === '' ){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Kode port tidak ada.</div>';
						$('#alert').html( message );
						$( "#nama_port_transit" ).val( '' );
						$( "#port_kode_transit" ).val( '' );
						$( '#port_kode_transit' ).focus();
					} else {
						$( "#nama_port_transit" ).val( result );
					}
				});
			}
		}
	});
	$( '#port_kode_transit' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_kode_seaport_transit' ).click();
			} else {
				$( '#port_kode_destination' ).focus();
			}
		}
	});

	$( '#port_kode_destination' ).bind( 'blur', function( ) {
		if ($( this ).val()===''){
			$( '#nama_port_destination' ).val( "" );
		}else{
			if ($(this).val()!== $(this).attr("oldvalue")){
				$.post( 'db_read_port', { id: $( '#port_kode_destination' ).val() }, function( result ){
					if( result === '' ){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Kode port tidak ada.</div>';
						$('#alert').html( message );
						$( "#nama_port_destination" ).val( '' );
						$( "#port_kode_destination" ).val( '' );
						$( '#port_kode_destination' ).focus();
					} else {
						$( "#nama_port_destination" ).val( result );
					}
				});
			}
		}
	});
	$( '#port_kode_destination' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_kode_seaport_destination' ).click();
			} else {
				$( '#stuffing_date' ).focus();
			}
		}
	});

	$( '#stuffing_date' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== '' ){	
				$('#onboard_date').focus();
			}
		}
	});

	$( '#onboard_date' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== '' ){	
				$('#shipment_ETD').focus();
			}
		}
	});

	$( '#shipment_ETD' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== '' ){	
				$('#shipment_ETA').focus();
			}
		}
	});


	$( '#shipment_ETA' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== '' ){	
				$('#co_loader').focus();
			}
		}
	});

	$( '#co_loader' ).bind( 'blur', function( ) {
		if ($( this ).val()===''){
			$( '#co_loader_name' ).val( "" );
		}else{
			if ($(this).val()!== $(this).attr("oldvalue")){
				$.post( 'db_read_customer', { id: $( '#co_loader' ).val() , cond:'coloader' }, function( result ){
					if( result === '' ){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Kode company tidak ada.</div>';
						$('#alert').html( message );
						$( "#co_loader_name" ).val( '' );
						$( "#co_loader" ).val( '' );
						$( '#co_loader' ).focus();
					} else {
						var data = unserialize( result );	
						$( "#co_loader_name" ).val( data['name'] );
					}
				});
			}
		}
	});
	$( '#co_loader' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_co_loader' ).click();
			} else {
				setfocus(0,'routing','route');
			}
		}
	});



	////////////////////////////////////////////////////////////////
	//
	// Press enter then move from x to y with default value if empty
	//
	////////////////////////////////////////////////////////////////

	$( '.route-airline_id' ).live( 'blur', function(){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if($( this ).val()==''){
			$( '#'+asal.replace( 'airline_id', 'airline_name')).val( '' );
		}else{
			if ($( this ).val()!==$( this ).attr('oldvalue')){
				$.post( 'db_read_airline', { id: $( this ).val()}, function( result){
					if( result === '' || result===null){
						var message = '<div class"alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Airline Code Not Found.</div>';
						$('#alert').html( message );
						$( '#'+asal.replace( 'airline_id', 'airline_name')).val( '' );
						$( '#'+asal ).val( '' );
						$(this).val('');
						$(this).attr("oldvalue", '');
						$( '#'+asal ).focus();
					}else{
						var data = unserialize( result );
						$('#alert').html( "" );
						$( '#'+asal.replace( 'airline_id', 'airline_name')).val( data['airline_name']);
						$( '#'+asal.replace( 'airline_id', 'flight_no')).val( data['flight_no']);
					}
				});
			}
		}
	});

	$( '.route-routing' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr("oldvalue",$(this).val());
				$( '#cari-'+ asal ).click();
			} else {
				$( '#'+asal.replace( 'routing', 'airline_id' ) ).focus();
			}
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'routing','route');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'routing','route');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'airline_id','route');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus2((Number(num)),'eta','route');
			}
		}
	});
	
	$( '.route-airline_id' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if ( e.which === 13 ){
			e.preventDefault;
			setfocus(Number(num),'airline_name','route');
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'airline_id','route');	
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'airline_id','route');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'airline_name','route');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'routing','route');
			}
		}
	});

	$( '.route-airline_name' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if ( e.which === 13 ){
			e.preventDefault;
			setfocus(Number(num),'flight_no','route');
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'airline_name','route');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'airline_name','route');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'flight_no','route');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'airline_id','route');
			}
		}
	});
	$( '.route-flight_no' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if ( e.which === 13 ){
			e.preventDefault;
			setfocus(Number(num),'etd','route');
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'flight_no','route');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'flight_no','route');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'etd','route');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'airline_name','route');
			}
		}
	});

	$( '.route-etd' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if ( e.which === 13 ){
			e.preventDefault;
			setfocus(Number(num),'eta','route');
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'etd','route');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'etd','route');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'eta','route');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'flight_no','route');
			}
		}
	});

	$( '.route-eta' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
	
		if ( e.which === 13 ){
			e.preventDefault;
			if( Number( $( '#baris-route' ).val() ) === ( Number( num ) + 1 ) ){
				$( '#tambah-baris-route-'+num ).click();
			}
			setfocus(Number(num)+1,'routing','route');
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'eta','route');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'eta','route');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num)+1,'routing','route');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'etd','route');
			}
		}
	});

	$( '.route-eta' ).live( 'keydown', function( e ){
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== '' ){
				var asal = $( this ).attr( 'id' );
				var num = asal.split( '-' )[ 1 ];
				console.log( $( '#baris-route' ).val() == ( Number( num ) + 1 ) );
				if( Number( $( '#baris-route' ).val() ) === ( Number( num ) + 1 ) ){
					$( '#tambah-baris-route-'+num ).click();
				}
				$( '#route-'+( Number( num ) + 1 )+'-code' ).focus();
			}
		}
	});

	////////////////////////////////////////////////////////////////
	//
	// Retrieve data
	//
	////////////////////////////////////////////////////////////////
	$( '#order_no' ).bind( 'blur', function() {
		if ($(this).val()!==$(this).attr('oldvalue')){
			$.post( 'db_read', { id: $( '#order_no' ).val() }, function( result ){
				if( result === '' ){
					
					var id = $( '#order_no' ).val();
					initializex();
					$( '#order_no' ).val( id );
					$( '#order_date' ).focus();

				} else {
					var data = unserialize( result );

					var tanggal = data[ 'order_date' ].split( "-" );
					var tgl = tanggal[ 2 ];
					var bln = tanggal[ 1 ];
					var thn = tanggal[ 0 ];
					$( "#order_date" ).val( tgl + "-" + bln + "-" + thn );
					$( "#HAWB_no" ).val( data[ 'HAWB_no' ] );
					$( "#MAWB_no" ).val( data[ 'MAWB_no' ] );
					$( "#SI_ref" ).val( data[ 'SI_ref' ] );
					$( "#quotation_ref" ).val( data[ 'quotation_ref' ] );
					$( "#shipper_id" ).val( data[ 'shipper_id' ] );
					$( "#keterangan_shipper" ).val( data[ 'shipper_description' ] );
					$( "#cnee_id" ).val( data[ 'cnee_id' ] );
					$( "#keterangan_cnee" ).val( data[ 'cnee_description' ] );
					$( "#notify_id" ).val( data[ 'notify_id' ] );
					$( "#keterangan_notify" ).val( data[ 'notify_description' ] );
					$( "#agent_id" ).val( data[ 'agent_id' ] );
					$( "#keterangan_agent" ).val( data[ 'agent_description' ] );
					$( "#port_kode_loading" ).val( data[ 'port_loading_code' ] );
					$( "#nama_port_loading" ).val( data[ 'port_loading_description' ] );
					$( "#port_kode_departure" ).val( data[ 'port_departure_code' ] );
					$( "#nama_port_departure" ).val( data[ 'port_departure_description' ] );
					$( "#port_kode_transit" ).val( data[ 'port_transit_code' ] );
					$( "#nama_port_transit" ).val( data[ 'port_transit_description' ] );
					$( "#port_kode_destination" ).val( data[ 'port_destination_code' ] );
					$( "#nama_port_destination" ).val( data[ 'port_destination_description' ] );
					var tanggal = data[ 'stuffing_date' ].split( "-" );
					var tgl = tanggal[ 2 ];
					var bln = tanggal[ 1 ];
					var thn = tanggal[ 0 ];
					$( "#stuffing_date" ).val( tgl + "-" + bln + "-" + thn );
					var tanggal = data[ 'onboard_date' ].split( "-" );
					var tgl = tanggal[ 2 ];
					var bln = tanggal[ 1 ];
					var thn = tanggal[ 0 ];
					$( "#onboard_date" ).val( tgl + "-" + bln + "-" + thn );
					var tanggal = data[ 'shipment_etd' ].split( "-" );
					var tgl = tanggal[ 2 ];
					var bln = tanggal[ 1 ];
					var thn = tanggal[ 0 ];
					$( "#shipment_ETD" ).val( tgl + "-" + bln + "-" + thn );
					var tanggal = data[ 'shipment_eta' ].split( "-" );
					var tgl = tanggal[ 2 ];
					var bln = tanggal[ 1 ];
					var thn = tanggal[ 0 ];
					$( "#shipment_ETA" ).val( tgl + "-" + bln + "-" + thn );
					$( "#co_loader" ).val( data[ 'co_loader_code' ] );
					$( "#co_loader_name" ).val( data[ 'co_loader_description' ] );
					$( "#packages_number" ).val( parseFloat( data[ 'packages_number' ] ) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
					$( "#packages_type" ).val( data[ 'packages_type' ] );
					$( "#gross_weight" ).val( parseFloat( data[ 'gross_weight' ] ) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
					$( "#gross_type" ).val( data[ 'gross_weight_type' ] );
					$( "#net_weight" ).val( parseFloat( data[ 'net_weight' ] ) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
					$( "#net_type" ).val( data[ 'net_weight_type' ] );
					$( "#measurement_number" ).val( parseFloat( data[ 'measurement' ] ) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
					$( "#measurement_type" ).val( data[ 'measurement_type' ] );
					$( "#change_weight" ).val( parseFloat( data[ 'change_weight' ] ) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
					$( "#change_weight_type" ).val( data[ 'change_weight_type' ] );
					$( "#total" ).val( parseFloat( data[ 'total' ] ) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });					
					$( "#commodity_code" ).val( data['commodity_code'] );
					$( "#commodity_name" ).val( data['commodity_description'] );
					$(".service_type2 option").each(function() {
		   			$(this).remove();
					});
					if( data['service_type']=='fcl')
					{
						$('#service_type2').append('<option value="cycy" >CY-CY</option>');
						$('#service_type2').append('<option value="cycfs">CY-CFS</option>');
					}	
					else if( data['service_type']=='lcl')
					{
						$('#service_type2').append('<option value="cfscfs" >CFS-CFS</option>');
						$('#service_type2').append('<option value="cfscy" >CFS-CY</option>');
					}
					else
					{						
						$('#service_type2').append('<option value="linier" >Linier</option>');
						$('#service_type2').append('<option value="fifo" >FIFO</option>');
						$('#service_type2').append('<option value="lifo" >LIFO</option>');
						$('#service_type2').append('<option value="fio"  >FIO</option>');
					}
					$( "#service_type" ).val( data['service_type'] );
					$( "#service_type2" ).val( data['service_type2'] );
					$( "#freight_term_code" ).val( data['freight_term_code'] );
					$( "#freight_term_name" ).val( data['freight_term_description'] );
					$( "#freight_payable_at" ).val( data['freight_payable_at'] );
					$( "#original_BL" ).val(parseFloat( data[ 'original_bl' ] ) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 } );
					$( "#order_status" ).val( data['order_status'] );
					$( "#remarks" ).val( data['remarks'] );		
					$( "#handling_information" ).val( data['handling_information'] );		
					$( "#accounting_information" ).val( data['accounting_information'] );		
					$( "#marksnumber" ).val( data['marks_number'] );
					$( "#description_packages" ).val( data['packages_description'] );				
					
					///////////////////////////////////////////////////////////////////////////////////////
					////
					////	Menampilkan data pada grid route
					////
					////////////////////////////////////////////////////////////////////////////////////////
					if( data['route']!=null)
					{
						$( '.route-row' ).remove();
						var i = 0;
						for(; data['route'][i]; i++ ){
							$( '#transaksix' ).append( add_row_route( i, 1 ) );
							$( '#route-'+i+'-routing' ).val( data['route'][i][ 'routing' ] );
							$( '#route-'+i+'-airline_id' ).val( data['route'][i][ 'airline_id' ] );
							$( '#route-'+i+'-airline_name' ).val( data['route'][i][ 'airline_name' ] );
							$( '#route-'+i+'-flight_no' ).val( data['route'][i][ 'flight_no' ] );
							var tanggal = data['route'][i][ 'etd' ].split( "-" );
							var tgl = tanggal[ 2 ];
							var bln = tanggal[ 1 ];
							var thn = tanggal[ 0 ];
							$( '#route-'+i+'-etd' ).val( tgl + "-" + bln + "-" + thn );
							var tanggal = data['route'][i][ 'eta' ].split( "-" );
							var tgl = tanggal[ 2 ];
							var bln = tanggal[ 1 ];
							var thn = tanggal[ 0 ];
							$( '#route-'+i+'-eta' ).val( tgl + "-" + bln + "-" + thn );
							$( '#baris-route' ).val( i + 1 );
						}
						$( '#transaksix' ).append( add_row_route( i, 0 ) );
					}
					$( '.ubah, .hapus, .cetak' ).show();
					$('#cetak').attr('href', 'pdf?order_no=' + $('#order_no').val());
					$( '.simpan' ).hide();
				}
			});
		}
	});
	$( '#order_no' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){	
				nomorbaru();
			} else {
				$('#order_date').focus();
			}
		}
	});
	$( '#co_loader' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			
			setfocus(0,'routing','route');
			
		}
	});

	////////////////////////////////////////////////////////////////
	//
	// Tambah Hapus Baris TTUS
	//
	////////////////////////////////////////////////////////////////
	$( '.tambah-baris-route' ).live( 'click', function(){
		var str = $( this ).attr( 'id' );
		var num = str.replace( "tambah-baris-route-", "" );
	
		// Change action
		$( "#action"+str.replace( "tambah", "" ) ).html(
			'<a href="#void()" class="tombol tombol-small hapus-baris hapus-baris-route" id="hapus-baris-route-'+num+'"><i class="icon-remove"></i></a>'
		);

		// Insert row
		$( '#transaksix' ).append(
			add_row_route( Number( str.replace( 'tambah-baris-route-', '' ) ) + 1, 0 )
		);
		setfocus(Number(num)+1,'routing','route');
	});

	$( '.hapus-baris-route' ).live( 'click', function(){
		if( confirm( 'Are you sure to delete this row?' ) ){
			var str = $( this ).attr( 'id' );
			var num = str.split('-')[3];
			$( "#"+str.replace( "hapus-baris-", "" ) ).remove();
			setfocus(Number(num),'routing','route');
		}
	});

	////////////////////////////////////////////////////////////////
	//
	// Button Behavior
	//
	////////////////////////////////////////////////////////////////
	$( '.simpan' ).click( function(){
		if( $( '#order_no' ).val() !== '' ){
			$.post( 'db_create', $( 'form' ).serialize(), function( result ){
				success=unserialize(result);
				if( success['status'] ==='Error' ){
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Process '+$( '#order_no' ).val()+' Failed. '+ success['ket'] +'</div>';
					$('#alert').html( message );					
					if (success['ket']=='Data Already Exist.'){
						nomorbaru();
					}
				}else if( success['status'] ){
					var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Process '+$( '#order_no' ).val()+' Complete.</div>';
					$('#alert').html( message );
					initializex();
				} else {
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Process '+$( '#order_no' ).val()+' Failed.</div>';
					$('#alert').html( message );
				}
			});
		} else {
			var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data <strong> REQUIRED </strong>.</div>';
			$('#alert').html( message );
		}
	});

	$( '.ubah' ).click( function(){
		if( $( '#order_no' ).val() !== ''  ){
			$.post( 'db_update', $( 'form' ).serialize(), function( result ){
				success=unserialize(result);
				if( success['status'] ==='Error' ){
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Process '+$( '#order_no' ).val()+'  Failed. '+ success['ket'] +'</div>';
					$('#alert').html( message );					
					if (success['ket']=='Data Already Exist.'){
						nomorbaru();
					}
				}else if( success['status'] ){
					var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Process '+$( '#order_no' ).val()+' Complete.</div>';
					$('#alert').html( message );
					//$( '#cetak' ).attr( 'href', 'pdf?id_jurnal=' + $('#id_jurnal').val()+'&id_transaksi=' + $('#id_transaksi').val());					
					//$( '.cetak' ).click();
					initializex();
				} else {
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Process '+$( '#order_no' ).val()+' Failed.</div>';
					$('#alert').html( message );
				}
			});
		} else {
			var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data <strong> REQUIRED </strong>.</div>';
			$('#alert').html( message );
		}
	});

	$( '.hapus' ).click( function(){
		if( confirm( 'Are You Sure Want Delete This Data?' ) ){
			if( $( '#order_no' ).val() !== '' ){
				$.post( 'db_delete', { id: $( '#order_no' ).val() }, function( result ){
					success=unserialize(result);
					if( success['status'] ==='Error' ){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Process '+$( '#order_no' ).val()+' Failed. '+ success['ket'] +'</div>';
						$('#alert').html( message );					
					}else if( success['status'] ){
						var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Process '+$( '#order_no' ).val()+' Complete.</div>';
						$('#alert').html( message );
						initializex();
					} else {
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Process '+$( '#order_no' ).val()+'  Failed.</div>';
						$('#alert').html( message );
					}
				});
			} else {
				var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data <strong> REQUIRED </strong>.</div>';
				$('#alert').html( message );
			}
		}
	});

	$( '.batal' ).click( function(){
		if (($('#order_no').val()==='') ){
			window.close();
		}else{
			if( confirm( 'Are You Sure Want Cancel This Transaction?' ) ){
				initializex();
			}
		}
	});
	$( '.cetak' ).click( function(){
		$( '#cetak' ).attr( 'href', 'pdf?id_jurnal=' + $('#id_jurnal').val()+'&id_transaksi=' + $('#id_transaksi').val());					
	});

});
</script>