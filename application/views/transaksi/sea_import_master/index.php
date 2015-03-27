<div class="container">
	<h2 class="judul">Sea Import Master</h2>
	<div id="alert"></div>
	<form class="form-horizontal">
		<fieldset>
			<div class="row">
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="OBL_no">OBL # :</label>
					<div class="controls">
						<div class="input-append"><input type="text" name="OBL_no" id="OBL_no" oldvalue="" browseobj="cari_OBL_no" /><a style="display:none" class="add-on browse" id="cari_OBL_no" href="cari?ref=OBL_no&tipe=sea_import_master" title="Klik untuk mencari order number"><i class="icon-search"></i></a></div>
					</div>
				</div>
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="date">Date</label>
					<div class="controls">
						<input type="text" name="date" id="date" class="tanggal" />
					</div>
				</div>
				
			</div>
			<div class="row">
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="total_shipment">Total Shipment</label>
					<div class="controls">
						<input type="text" class="total_shipment" name="total_shipment" id="total_shipment" />
					</div>
				</div>
			</div>
			<div class="row">
				<div class="control-group span9">
					<div class="controls">
						<ul class="nav nav-tabs nav-justified selector" id="meta">
							<li class="active"><a href="#parties" class="tab" title="Klik untuk mengisi informasi the parties">The Parties</a></li>
<!--							<li><a href="#biaya" class="tab" title="Klik untuk mengisi informasi biaya lain">B. Lain</a></li>-->
							<li><a href="#portvessel" class="tab" title="Klik untuk mengisi informasi port and vessel">Port and Vessel</a></li>
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
				<div class="span12 tab-pane portvessel" style="height:300px;width:1300px" id="portvessel">

					<div class="row">
						<div class="control-group span6" style="height:15px">
							<label class="control-label" for="port_code">Port of Loading :</label>
							<div class="controls">
								<div class="input-append"><input type="text" name="port_kode_loading" id="port_kode_loading" oldvalue="" browseobj="cari_kode_seaport_loading" style="width:50px"/><a style="display:none" class="add-on browse" id="cari_kode_seaport_loading" href="cari?ref=port_kode_loading&tipe=sea" title="Klik untuk mencari Kode Seaport"><i class="icon-search"></i></a></div>
								<input type="text" style="width:110px" readonly="readonly" name="nama_port_loading" id="nama_port_loading" />
							</div>
						</div>
						<div class="control-group span6" style="height:15px">
							<label class="control-label" for="port_code">Port of Departure :</label>
							<div class="controls">
								<div class="input-append"><input type="text" name="port_kode_departure" id="port_kode_departure" oldvalue="" browseobj="cari_kode_seaport_departure" style="width:50px"/><a style="display:none" class="add-on browse" id="cari_kode_seaport_departure" href="cari?ref=port_kode_departure&tipe=sea" title="Klik untuk mencari Kode Seaport"><i class="icon-search"></i></a></div>
								<input type="text" style="width:110px" readonly="readonly" name="nama_port_departure" id="nama_port_departure" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="control-group span6" style="height:15px">
							<label class="control-label" for="port_code">Port of Discharge :</label>
							<div class="controls">
								<div class="input-append"><input type="text" name="port_kode_discharge" id="port_kode_discharge" oldvalue="" browseobj="cari_kode_seaport_discharge" style="width:50px"/><a style="display:none" class="add-on browse" id="cari_kode_seaport_discharge" href="cari?ref=port_kode_discharge&tipe=sea" title="Klik untuk mencari Kode Seaport"><i class="icon-search"></i></a></div>
								<input type="text" style="width:110px" readonly="readonly" name="nama_port_discharge" id="nama_port_discharge" />
							</div>
						</div>
						<div class="control-group span6" style="height:15px">
							<label class="control-label" for="port_code">Port of Destination :</label>
							<div class="controls">
								<div class="input-append"><input type="text" name="port_kode_destination" id="port_kode_destination" oldvalue="" browseobj="cari_kode_seaport_destination" style="width:50px"/><a style="display:none" class="add-on browse" id="cari_kode_seaport_destination" href="cari?ref=port_kode_destination&tipe=sea" title="Klik untuk mencari Kode Seaport"><i class="icon-search"></i></a></div>
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
							<label class="control-label" for="carrier_code">Carrier:</label>
							<div class="controls">
								<div class="input-append"><input style="width:110px" type="text" name="carrier_code" id="carrier_code" oldvalue="" browseobj="cari_carrier_code" /><a style="display:none" class="add-on browse" id="cari_carrier_code" href="cari?ref=carrier_code&tipe=carrier_booking_sea" title="Klik untuk mencari carrier code"><i class="icon-search"></i></a></div>
								<input type="text" readonly="readonly"  name="carrier_description" id="carrier_description"/>								
							</div>
						</div>
					</div>
					<div class="row">
						<div class="control-group span12" >
							<input type="hidden" id="baris-vessel" name="baris-vessel" value="0" />
							<table class="table">
								<thead height="5px">
									<tr height="5px"><th style="width:100px">Vessel Code</th><th style="width:100px">Vessel Name</th><th style="width:100px">Vessel Type</th><th style="width:100px">Voyage #</th><th style="width:100px">E.T.D.</th><th style="width:100px">E.T.A.</th><th></th></tr>
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
							<label class="control-label" for="commodity">Commodity :</label>
							<div class="controls">
								<div class="input-append"><input style="width:110px" type="text" name="commodity_code" id="commodity_code" oldvalue="" browseobj="cari_commodity_code" /><a style="display:none" class="add-on browse" id="cari_commodity_code" href="cari?ref=commodity_code&tipe=com" title="Klik untuk mencari commodity code"><i class="icon-search"></i></a></div>
								<input type="text" readonly="readonly"  name="commodity_name" id="commodity_name"/>
							</div>
						</div>
						<div class="control-group span6" style ="height:15px">
							<label class="control-label" for="cargo_insurance">Cargo Insurance :</label>
							<div class="controls">
								<select name="cargo_insurance" id="cargo_insurance" class="cargo_insurance" style="width:150px;margin-left:0px">
									<option value="notcovered">Not Covered</option>
									<option value="covered">Covered</option>
								</select>
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
						<div class="control-group span6" style ="height:15px">
							<label class="control-label" for="remarks">Remarks :</label>
							<div class="controls">
								<textarea type="text" name="remarks" id="remarks" class="input-xlarge" rows="1" /></textarea>
							</div>
							
						</div>
					</div>
					<div class="row">
						<div class="control-group span6" style ="height:15px">
							<label class="control-label" for="warehouse">Warehouse :</label>
							<div class="controls">
								<input type="text" name="warehouse" id="warehouse" class="input-xlarge" rows="1"></input>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="control-group span12" >
							<input type="hidden" id="baris-container" name="baris-container" value="0" />
							<table class="table">
								<thead height="5px">
									<tr height="5px"><th style="width:100px">Container Code</th><th style="width:100px">Size</th><th style="width:100px">Seal No.</th><th style="width:100px">Gross Weight</th><th style="width:100px">Nett Weight</th><th style="width:100px">Measurement</th><th style="width:100px">Description</th><th></th></tr>
								</thead>
								<tbody id="transaksix2">
								
								</tbody>
							</table>
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
				<?php if( in_array( 'create_sea_import_master', unserialize($capabilities) ) ){ ?>
				<a href="#" class="btn btn-primary simpan" style="top:-15px"><i class="icon-ok icon-white"></i> Simpan</a>
				<?php } ?>
				<a href="#" class="btn cetak browse" id="cetak" style="top:-15px"><i class="icon-print"></i> Cetak</a>
				<?php if( in_array( 'update_sea_import_master', unserialize($capabilities) ) ){ ?>
				<a href="#" class="btn btn-primary ubah" style="top:-15px"><i class="icon-pencil icon-white"></i> Ubah</a>
				<?php } ?>
				<?php if( intval($role)!= 1){ ?>
					<?php if( in_array( 'delete_sea_import_master', unserialize($capabilities) ) ){ ?>
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
#portvessel{
overflow-x:auto;
}
#portvessel{
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
	$( '#OBL_no' ).focus();
	set_weight_type();
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

	$('.vessel-row').remove();
	$( '#transaksix' ).append(
		add_row_vessel( 0, 0 )
	);
	$('.container-row').remove();
	$( '#transaksix2' ).append(
		add_row_container( 0, 0 )
	);

	var d = new Date();
	var tgl = d.getDate();
	if( tgl < 10 ) tgl = "0" + tgl;
	var bln = d.getMonth() + 1;
	if( bln < 10 ) bln = "0" + bln;
	var thn = d.getFullYear();
	var tanggal = tgl+"-"+bln+"-"+thn;
	$( "#date" ).val( tanggal );
	$("#gross_type").val($("#gross_type option:first").val());
	$("#net_type").val($("#net_type option:first").val());
	$("#packages_type").val($("#packages_type option:first").val());
	$("#measurement_type").val($("#measurement_type option:first").val());
	$("#service_type2").val($("#service_type2 option:first").val());
}

preventempty="OBL_no,date,total_shipment";
preventemptystatus="1,1,1";
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
							}
							else
							{
								$('#gross_type').append('<option value="'+data[i]['unit_code']+'"  >'+data[i]['description']+'</option>');
								$('#net_type').append('<option value="'+data[i]['unit_code']+'" selected="selected" >'+data[i]['description']+'</option>');
							}
						}
					}
	});
}

//*****************************************************************//
//
// Tambah baris tabel vessel
//
//*****************************************************************//

function add_row_vessel(i, action) {
	var tabel = '<tr class="vessel-row" id="vessel-' + i + '">';
	tabel  += '<td><div class="input-append"><input style="width:100px" type="text" name="vessel['+i+'][code]" id="vessel-'+i+'-code" class="vessel-code id detail_transaksi" oldvalue="" browseobj="cari-vessel-'+i+'-code" /><a style="display:none" class="add-on browse id detail_transaksi" id="cari-vessel-'+i+'-code" href="cari?ref=vessel-'+i+'-code&tipe=ves" title="Klik untuk mencari kode vessel"><i class="icon-search"></i></a></div></td>';
	tabel  += '<td><input type="text" name="vessel[' + i + '][name]" style="text-align:right;width:100px" id="vessel-' + i + '-name" class="vessel-name detail_transaksi" readonly /></td>';
	tabel  += '<td><input type="text" name="vessel[' + i + '][tipe]" style="text-align:right;width:100px" id="vessel-' + i + '-tipe" class="vessel-tipe detail_transaksi" readonly /></td>';
	tabel  += '<td><input type="text" name="vessel[' + i + '][voyage]" style="text-align:right;width:100px" id="vessel-' + i + '-voyage" class="vessel-voyage detail_transaksi" /></td>';
	tabel  += '<td><input type="text" name="vessel[' + i + '][etd]" style="text-align:right;width:100px" id="vessel-' + i + '-etd" class="vessel-etd detail_transaksi tanggal" /></td>';
	tabel  += '<td><input type="text" name="vessel[' + i + '][eta]" style="text-align:right;width:100px" id="vessel-' + i + '-eta" class="vessel-eta detail_transaksi tanggalx tanggal" /></td>';
	if( action === 1 ){
		tabel += '<td class="action" id="action-baris-vessel-'+i+'"><a href="#void()" class="tombol tombol-small hapus-baris-vessel detail_transaksi" id="hapus-baris-vessel-'+i+'"><i class="icon-remove"></i></a></td>';
	} else tabel += '<td class="action" id="action-baris-vessel-'+i+'"><a href="#void()" class="tombol tombol-small tambah-baris-vessel detail_transaksi" id="tambah-baris-vessel-'+i+'"><i class="icon-plus"></i></a></td>';
	tabel  += '</tr>';
	$( "#baris-vessel" ).val( i + 1 );
	$('.vessel-etd').datepicker({
		dateFormat: 'dd-mm-yy'
	});
	$('.vessel-eta').datepicker({
		dateFormat: 'dd-mm-yy'
	});

	return tabel;
}


function add_row_container(i, action) {
	var tabel = '<tr class="container-row" id="container-' + i + '">';
	tabel  += '<td><input style="width:100px" type="text" name="container['+i+'][code]" id="container-'+i+'-code" class="container-code id detail_transaksi" /></td>';
	tabel  += '<td><input type="text" name="container[' + i + '][size]" style="text-align:right;width:100px" id="container-' + i + '-size" class="container-size detail_transaksi"  /></td>';
	tabel  += '<td><input type="text" name="container[' + i + '][sealno]" style="text-align:right;width:100px" id="container-' + i + '-sealno" class="container-sealno detail_transaksi" /></td>';
	tabel  += '<td><input type="text" name="container[' + i + '][grossweight]" style="text-align:right;width:100px" id="container-' + i + '-grossweight" class="container-grossweight detail_transaksi currency" /></td>';
	tabel  += '<td><input type="text" name="container[' + i + '][netweight]" style="text-align:right;width:100px" id="container-' + i + '-netweight" class="container-netweight detail_transaksi currency" /></td>';
	tabel  += '<td><input type="text" name="container[' + i + '][measurement]" style="text-align:right;width:100px" id="container-' + i + '-measurement" class="container-measurement detail_transaksi currency" /></td>';
	tabel  += '<td><input type="text" name="container[' + i + '][description]" style="text-align:right;width:100px" id="container-' + i + '-description" class="container-description detail_transaksi" /></td>';
	if( action === 1 ){
		tabel += '<td class="action" id="action-baris-container-'+i+'"><a href="#void()" class="tombol tombol-small hapus-baris-container detail_transaksi" id="hapus-baris-container-'+i+'"><i class="icon-remove"></i></a></td>';
	} else tabel += '<td class="action" id="action-baris-container-'+i+'"><a href="#void()" class="tombol tombol-small tambah-baris-container detail_transaksi" id="tambah-baris-container-'+i+'"><i class="icon-plus"></i></a></td>';
	tabel  += '</tr>';
	$( "#baris-container" ).val( i + 1 );

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

	$( '#OBL_no' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
			
			} else {
				$( '#date' ).focus();
			}
		}
	});

	$( '#date' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
			
			} else {
				$( '#total_shipment' ).focus();
			}
		}
	});


	$( '#total_shipment' ).bind( 'keydown', function( e ) {
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

	$( '#measurement_number' ).bind( 'keydown', function( e ) {
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
				$( '#cargo_insurance' ).focus();
			}
		}
	});

	$( '#cargo_insurance' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			$('#service_type').focus();
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
			
			$( '#warehouse' ).focus();
			
		}
	});

	$( '#warehouse' ).bind( 'keydown', function( e ) {
		if( e.which === 13){
			e.preventDefault();

			$( '#remarks' ).focus();
		}
	});


	////////////////////////////////////////////////////////////////
	//
	// Mengatur tab port and vessel
	//
	////////////////////////////////////////////////////////////////

	$( '.detail_transaksi' ).live( 'keydown', function( e ){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if ( e.which === kodehapusbaris ){
			e.preventDefault();
			var xobj = document.getElementById('hapus-baris-vessel-'+num);
			if (xobj != null){
				$( '#hapus-baris-vessel-'+( Number( num ) ) ).click();
			}else{
				$("input[id*='" + "vessel-"+num + "']").val('');
			}
			setfocus(Number(num),'code','vessel');
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
				$( '#port_kode_discharge' ).focus();
			}
		}
	});

	$( '#port_kode_discharge' ).bind( 'blur', function( ) {
		if ($( this ).val()===''){
			$( '#nama_port_discharge' ).val( "" );
		}else{
			if ($(this).val()!== $(this).attr("oldvalue")){
				$.post( 'db_read_port', { id: $( '#port_kode_discharge' ).val() }, function( result ){
					if( result === '' ){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Kode port tidak ada.</div>';
						$('#alert').html( message );
						$( "#nama_port_discharge" ).val( '' );
						$( "#port_kode_discharge" ).val( '' );
						$( '#port_kode_discharge' ).focus();
					} else {
						$( "#nama_port_discharge" ).val( result );
					}
				});
			}
		}
	});
	$( '#port_kode_discharge' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_kode_seaport_discharge' ).click();
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
				$('#shipping_line').focus();
			}
		}
	});

	$( '#carrier_code' ).bind( 'blur', function( ) {
		if ($( this ).val()===''){
			$( '#carrier_description' ).val( "" );
		}else{
			if ($(this).val()!== $(this).attr("oldvalue")){
				$.post( 'db_read_carrier', { id: $( '#carrier_code' ).val() }, function( result ){
					if( result === '' ){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Carrier Code not Found.</div>';
						$('#alert').html( message );
						$( "#carrier_description" ).val( '' );
						$( "#carrier_code" ).val( '' );
						$( '#carrier_code' ).focus();
					} else {
						var data = unserialize( result );	
						$( "#carrier_description" ).val( data['reference'] );
					}
				});
			}
		}
	});
	$( '#carrier_code' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_carrier_code' ).click();
			} else {
				setfocus(0,'code','vessel');
			}
		}
	});



	////////////////////////////////////////////////////////////////
	//
	// Press enter then move from x to y with default value if empty
	//
	////////////////////////////////////////////////////////////////


	$( '.vessel-code' ).live( 'blur', function(){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if($( this ).val()==''){
			$( '#'+asal.replace( 'code', 'name' ) ).val( '' );
		}else{
			if ($( this ).val()!==$( this ).attr('oldvalue')){
				$.post( 'db_read_vessel', { id: $( this ).val() }, function( result ){
					
					if( result === ''  || result===null){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Kode vessel tidak ada.</div>';
						$('#alert').html( message );
						$( '#'+asal.replace( 'code', 'name' ) ).val( '' );
						$( '#'+asal ).val( '' );
						$(this).val('');
						$(this).attr("oldvalue",'');
						$( '#'+asal ).focus();
					}else{
						var data = unserialize( result );
						$('#alert').html( "" );	
						$( '#'+asal.replace( 'code', 'name' ) ).val( data['vessel_name'] );
						$( '#'+asal.replace( 'code', 'tipe' ) ).val( data['vessel_type'] );
					}
				});
			}
		}
	});
	$( '.vessel-code' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr("oldvalue",$(this).val());
				$( '#cari-'+ asal ).click();
			} else {
				$( '#'+asal.replace( 'code', 'voyage' ) ).focus();
			}
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'code','vessel');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'code','vessel');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'name','vessel');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus2((Number(num)),'eta','vessel');
			}
		}
	});
	
	$( '.vessel-name' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if ( e.which === 13 ){
			e.preventDefault;
			setfocus(Number(num),'tipe','vessel');
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'name','vessel');	
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'name','vessel');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'tipe','vessel');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'code','vessel');
			}
		}
	});

	$( '.vessel-tipe' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if ( e.which === 13 ){
			e.preventDefault;
			setfocus(Number(num),'voyage','vessel');
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'tipe','vessel');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'tipe','vessel');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'voyage','vessel');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'name','vessel');
			}
		}
	});
	$( '.vessel-voyage' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if ( e.which === 13 ){
			e.preventDefault;
			setfocus(Number(num),'etd','vessel');
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'voyage','vessel');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'voyage','vessel');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'etd','vessel');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'tipe','vessel');
			}
		}
	});

	$( '.vessel-etd' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if ( e.which === 13 ){
			e.preventDefault;
			setfocus(Number(num),'eta','vessel');
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'etd','vessel');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'etd','vessel');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'eta','vessel');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'voyage','vessel');
			}
		}
	});
	$( '.vessel-eta' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
	
		if ( e.which === 13 ){
			e.preventDefault;
			if( Number( $( '#baris-vessel' ).val() ) === ( Number( num ) + 1 ) ){
				$( '#tambah-baris-vessel-'+num ).click();
			}
			setfocus(Number(num)+1,'code','vessel');
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'eta','vessel');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'eta','vessel');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num)+1,'code','vessel');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'etd','vessel');
			}
		}
	});

	$( '.vessel-eta' ).live( 'keydown', function( e ){
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== '' ){
				var asal = $( this ).attr( 'id' );
				var num = asal.split( '-' )[ 1 ];
				console.log( $( '#baris-vessel' ).val() == ( Number( num ) + 1 ) );
				if( Number( $( '#baris-vessel' ).val() ) === ( Number( num ) + 1 ) ){
					$( '#tambah-baris-vessel-'+num ).click();
				}
				$( '#vessel-'+( Number( num ) + 1 )+'-code' ).focus();
			}
		}
	});


	////////////////////////////////////////////////////////////////
	//
	//   Container Grid
	// 
	////////////////////////////////////////////////////////////////


	$( '.container-code' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if ( e.which === 13 ){
			e.preventDefault;
			setfocus(Number(num),'size','container');
		
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'code','container');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'code','container');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'size','container');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus2((Number(num)),'measurement','container');
			}
		}
	});
	
	$( '.container-size' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if ( e.which === 13 ){
			e.preventDefault;
			setfocus(Number(num),'sealno','container');
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'size','container');	
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'size','container');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'sealno','container');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'code','container');
			}
		}
	});

	$( '.container-sealno' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if ( e.which === 13 ){
			e.preventDefault;
			setfocus(Number(num),'grossweight','container');
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'sealno','container');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'sealno','container');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'grossweight','container');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'size','container');
			}
		}
	});

	$( '.container-grossweight' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if ( e.which === 13 ){
			e.preventDefault;
			setfocus(Number(num),'netweight','container');
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'grossweight','container');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'grossweight','container');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'netweight','container');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'sealno','container');
			}
		}
	});

	$( '.container-netweight' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if ( e.which === 13 ){
			e.preventDefault;
			setfocus(Number(num),'measurement','container');
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'netweight','container');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'netweight','container');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'measurement','container');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'grossweight','container');
			}
		}
	});

	$( '.container-measurement' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if ( e.which === 13 ){
			e.preventDefault;
			setfocus(Number(num),'description','container');
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'measurement','container');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'measurement','container');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'description','container');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'netweight','container');
			}
		}
	});
	$( '.container-description' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
	
		if ( e.which === 13 ){
			e.preventDefault;
			if( Number( $( '#baris-container' ).val() ) === ( Number( num ) + 1 ) ){
				$( '#tambah-baris-container-'+num ).click();
			}
			setfocus(Number(num)+1,'code','container');
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'description','container');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'description','container');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num)+1,'code','container');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'netweight','container');
			}
		}
	});

	$( '.container-description' ).live( 'keydown', function( e ){
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== '' ){
				var asal = $( this ).attr( 'id' );
				var num = asal.split( '-' )[ 1 ];
				console.log( $( '#baris-container' ).val() == ( Number( num ) + 1 ) );
				if( Number( $( '#baris-container' ).val() ) === ( Number( num ) + 1 ) ){
					$( '#tambah-baris-container-'+num ).click();
				}
				$( '#container-'+( Number( num ) + 1 )+'-code' ).focus();
			}
		}
	});


	////////////////////////////////////////////////////////////////
	//
	// Retrieve data
	//
	////////////////////////////////////////////////////////////////
	$( '#OBL_no' ).bind( 'blur', function() {
		if ($(this).val()!==$(this).attr('oldvalue')){
			$.post( 'db_read', { id: $( '#OBL_no' ).val() }, function( result ){
				if( result === '' ){
					
					var id = $( '#OBL_no' ).val();
					initializex();
					$( '#OBL_no' ).val( id );
					$( '#date' ).focus();

				} else {
					var data = unserialize( result );

					var tanggal = data[ 'date' ].split( "-" );
					var tgl = tanggal[ 2 ];
					var bln = tanggal[ 1 ];
					var thn = tanggal[ 0 ];
					$( "#date" ).val( tgl + "-" + bln + "-" + thn );
					$( "#total_shipment" ).val( data[ 'total_shipment' ] );
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
					$( "#port_kode_discharge" ).val( data[ 'port_discharge_code' ] );
					$( "#nama_port_discharge" ).val( data[ 'port_discharge_description' ] );
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
					$( "#carrier_code" ).val( data[ 'carrier_code' ] );
					$( "#carrier_description" ).val( data[ 'carrier_description' ] );
					$( "#packages_number" ).val( parseFloat( data[ 'packages_number' ] ) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
					$( "#packages_type" ).val( data[ 'packages_type' ] );
					$( "#gross_weight" ).val( parseFloat( data[ 'gross_weight' ] ) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
					$( "#gross_type" ).val( data[ 'gross_weight_type' ] );
					$( "#net_weight" ).val( parseFloat( data[ 'net_weight' ] ) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
					$( "#net_type" ).val( data[ 'net_weight_type' ] );
					$( "#measurement_number" ).val( parseFloat( data[ 'measurement' ] ) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
					$( "#measurement_type" ).val( data[ 'measurement_type' ] );
					$( "#commodity_code" ).val( data['commodity_code'] );
					$( "#commodity_name" ).val( data['commodity_description'] );
					$( "#cargo_insurance" ).val( data['cargo_insurance'] );
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
					$( "warehouse").val( data['warehouse']);
					$( "#remarks" ).val( data['remarks'] );		
					$( "#marksnumber" ).val( data['marks_number'] );
					$( "#description_packages" ).val( data['packages_description'] );				
					
					///////////////////////////////////////////////////////////////////////////////////////
					////
					////	Menampilkan data pada grid vessel
					////
					////////////////////////////////////////////////////////////////////////////////////////
					if( data['vessel']!=null)
					{
						$( '.vessel-row' ).remove();
						var i = 0;
						for(; data['vessel'][i]; i++ ){
							$( '#transaksix' ).append( add_row_vessel( i, 1 ) );
							$( '#vessel-'+i+'-code' ).val( data['vessel'][i][ 'vessel_code' ] );
							$( '#vessel-'+i+'-name' ).val( data['vessel'][i][ 'vessel_name' ] );
							$( '#vessel-'+i+'-tipe' ).val( data['vessel'][i][ 'vessel_type' ] );
							$( '#vessel-'+i+'-voyage' ).val( data['vessel'][i][ 'voyage_code' ] );
							var tanggal = data['vessel'][i][ 'etd' ].split( "-" );
							var tgl = tanggal[ 2 ];
							var bln = tanggal[ 1 ];
							var thn = tanggal[ 0 ];
							$( '#vessel-'+i+'-etd' ).val( tgl + "-" + bln + "-" + thn );
							var tanggal = data['vessel'][i][ 'eta' ].split( "-" );
							var tgl = tanggal[ 2 ];
							var bln = tanggal[ 1 ];
							var thn = tanggal[ 0 ];
							$( '#vessel-'+i+'-eta' ).val( tgl + "-" + bln + "-" + thn );
							$( '#baris-vessel' ).val( i + 1 );
						}
						$( '#transaksix' ).append( add_row_vessel( i, 0 ) );
					}
					///////////////////////////////////////////////////////////////////////////////////////
					////
					////	Menampilkan data pada grid container
					////
					////////////////////////////////////////////////////////////////////////////////////////
					if( data['container']!=null)
					{
						$( '.container-row' ).remove();
						var i = 0;
						for(; data['container'][i]; i++ ){
							$( '#transaksix2' ).append( add_row_container( i, 1 ) );
							$( '#container-'+i+'-code' ).val( data['container'][i][ 'container_code' ] );
							$( '#container-'+i+'-size' ).val( data['container'][i][ 'size' ] );
							$( '#container-'+i+'-sealno' ).val(  data['container'][i][ 'seal_no' ]);
							$( '#container-'+i+'-grossweight' ).val(parseFloat( data['container'][i][ 'gross_weight' ] ) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 } );
							$( '#container-'+i+'-netweight' ).val(parseFloat( data['container'][i][ 'net_weight' ] ) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 } );
							$( '#container-'+i+'-measurement' ).val(parseFloat( data['container'][i][ 'measurement' ] ) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 } );
							$( '#container-'+i+'-description' ).val( data['container'][i][ 'description' ] );
							$( '#baris-container' ).val( i + 1 );
						}
						$( '#transaksix2' ).append( add_row_container( i, 0 ) );
					}
					$( '.ubah, .hapus, .cetak' ).show();
					$('#cetak').attr('href', 'pdf?OBL_no=' + $('#OBL_no').val());
					$( '.simpan' ).hide();
				}
			});
		}
	});
	$( '#OBL_no' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){	
			
			} else {
				$('#date').focus();
			}
		}
	});
	$( '#carrier_code' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			
			setfocus(0,'code','vessel');
			
		}
	});


	$( '#remarks' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			
			setfocus(0,'code','container');
			
		}
	});


	////////////////////////////////////////////////////////////////
	//
	// Tambah Hapus Baris TTUS
	//
	////////////////////////////////////////////////////////////////
	$( '.tambah-baris-vessel' ).live( 'click', function(){
		var str = $( this ).attr( 'id' );
		var num = str.replace( "tambah-baris-vessel-", "" );
	
		// Change action
		$( "#action"+str.replace( "tambah", "" ) ).html(
			'<a href="#void()" class="tombol tombol-small hapus-baris hapus-baris-vessel" id="hapus-baris-vessel-'+num+'"><i class="icon-remove"></i></a>'
		);

		// Insert row
		$( '#transaksix' ).append(
			add_row_vessel( Number( str.replace( 'tambah-baris-vessel-', '' ) ) + 1, 0 )
		);
		setfocus(Number(num)+1,'code','vessel');
	});

	$( '.hapus-baris-vessel' ).live( 'click', function(){
		if( confirm( 'Anda yakin untuk menghapus baris ini?' ) ){
			var str = $( this ).attr( 'id' );
			var num = str.split('-')[3];
			$( "#"+str.replace( "hapus-baris-", "" ) ).remove();
			setfocus(Number(num),'code','vessel');
		}
	});

	$( '.tambah-baris-container' ).live( 'click', function(){
		var str = $( this ).attr( 'id' );
		var num = str.replace( "tambah-baris-container-", "" );
	
		// Change action
		$( "#action"+str.replace( "tambah", "" ) ).html(
			'<a href="#void()" class="tombol tombol-small hapus-baris hapus-baris-container" id="hapus-baris-container-'+num+'"><i class="icon-remove"></i></a>'
		);

		// Insert row
		$( '#transaksix2' ).append(
			add_row_container( Number( str.replace( 'tambah-baris-container-', '' ) ) + 1, 0 )
		);
		setfocus(Number(num)+1,'code','container');
	});

	$( '.hapus-baris-container' ).live( 'click', function(){
		if( confirm( 'Are You Sure want delete this data?' ) ){
			var str = $( this ).attr( 'id' );
			var num = str.split('-')[3];
			$( "#"+str.replace( "hapus-baris-", "" ) ).remove();
			setfocus(Number(num),'code','container');
		}
	});

	////////////////////////////////////////////////////////////////
	//
	// Button Behavior
	//
	////////////////////////////////////////////////////////////////
	$( '.simpan' ).click( function(){
		if( $( '#OBL_no' ).val() !== '' ){
			$.post( 'db_create', $( 'form' ).serialize(), function( result ){
				success=unserialize(result);
				if( success['status'] ==='Error' ){
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Process '+$( '#OBL_no' ).val()+' Failed. '+ success['ket'] +'</div>';
					$('#alert').html( message );					
					if (success['ket']=='Data Already Exist.'){
					
					}
				}else if( success['status'] ){
					var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Process '+$( '#OBL_no' ).val()+' Complete.</div>';
					$('#alert').html( message );
					initializex();
				} else {
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Process '+$( '#OBL_no' ).val()+' Failed.</div>';
					$('#alert').html( message );
				}
			});
		} else {
			var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data Required.</div>';
			$('#alert').html( message );
		}
	});

	$( '.ubah' ).click( function(){
		if( $( '#OBL_no' ).val() !== ''  ){
			$.post( 'db_update', $( 'form' ).serialize(), function( result ){
				success=unserialize(result);
				if( success['status'] ==='Error' ){
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Process '+$( '#OBL_no' ).val()+'  Failed. '+ success['ket'] +'</div>';
					$('#alert').html( message );					
					if (success['ket']=='Data Already Exist.'){
						
					}
				}else if( success['status'] ){
					var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Process '+$( '#OBL_no' ).val()+' Complete.</div>';
					$('#alert').html( message );
					//$( '#cetak' ).attr( 'href', 'pdf?id_jurnal=' + $('#id_jurnal').val()+'&id_transaksi=' + $('#id_transaksi').val());					
					//$( '.cetak' ).click();
					initializex();
				} else {
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Process '+$( '#OBL_no' ).val()+' Failed.</div>';
					$('#alert').html( message );
				}
			});
		} else {
			var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data Required.</div>';
			$('#alert').html( message );
		}
	});

	$( '.hapus' ).click( function(){
		if( confirm( 'Are You Sure Delete This Data?' ) ){
			if( $( '#OBL_no' ).val() !== '' ){
				$.post( 'db_delete', { id: $( '#OBL_no' ).val() }, function( result ){
					success=unserialize(result);
					if( success['status'] ==='Error' ){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Process '+$( '#OBL_no' ).val()+' Failed. '+ success['ket'] +'</div>';
						$('#alert').html( message );					
					}else if( success['status'] ){
						var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Process '+$( '#OBL_no' ).val()+' Complete.</div>';
						$('#alert').html( message );
						initializex();
					} else {
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Process '+$( '#OBL_no' ).val()+'  Failed.</div>';
						$('#alert').html( message );
					}
				});
			} else {
				var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data Required.</div>';
				$('#alert').html( message );
			}
		}
	});

	$( '.batal' ).click( function(){
		if (($('#OBL_no').val()==='') ){
			window.close();
		}else{
			if( confirm( 'Are you cancel this transaction?' ) ){
				initializex();
			}
		}
	});
	$( '.cetak' ).click( function(){
		$( '#cetak' ).attr( 'href', 'pdf?OBL_no=' + $('#OBL_no').val());					
	});

});
</script>