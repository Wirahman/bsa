<div class="container">
	<h2 class="judul">Invoice A.P (AIR)</h2>
	<div id="alert"></div>
	<form class="form-horizontal">
		<fieldset>
			<div class="row">
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="invoice_no">Invoice No.</label>
					<div class="controls">
						<div class="input-append">
							<input type="text" name="invoice_no" id="invoice_no" oldvalue="" browseobj="cari_invoice_no" />
							<a style="display:none" class="add-on browse" id="cari_invoice_no" href="cari?ref=invoice_no&tipe=air_invoice_ap" title="Click For Search Invoice No.">
							<i class="icon-search"></i></a>
						</div>
					</div>
				</div>
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for ="invoice_date">Invoice Date</label>
					<div class="controls">
						<input type="text" name="invoice_date" id="invoice_date" class="tanggal" />
					</div>
				</div>
			</div>

			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="customer_id">Invoice To</label>
					<div class="controls">
						<div class="input-append">
							<input type="text" name="customer_id" oldvalue="" id="customer_id" browseobj="cari_kode_customer" style="width:100px" />
							<a style="display:none" class="add-on browse" id="cari_kode_customer" href="cari?ref=customer_id&tipe=customer" title="Click For search Customer Address"><i class="icon-search"></i></a>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="customer_address">Address :</label>
					<div class="controls">
						<input type="text" style="width:400px" name="customer_address" id="customer_address" readonly/>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="customer_address1"></label>
					<div class="controls">
						<input type="text" style="width:400px" name="customer_address1" id="customer_address1" readonly/>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="customer_address2"></label>
					<div class="controls">
						<input type="text" style="width:400px" name="customer_address2" id="customer_address2" readonly/>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="credit_term">Credit Term:</label>
					<div class="controls">
						<input type="text" style="width:100px" name="credit_term" id="credit_term"> Days
					</div>
				</div>
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="due_date">Due Date</label>
					<div class="controls">
						<input type="text" name="due_date" id="due_date" class="tanggal" />
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="shipper_id">Shipper</label>
					<div class="controls">
						<input type="text" shipperid="" name="shipper_id" id="shipper_id" oldvalue="" browseobj="cari_shipper_id" />
						<a style="display:none" class="add-on browse" id="cari_shipper_id" href="cari?ref=shipper_id&tipe=customer&cond1=shipper" title="Click For Search Shipper ID"></a>
					</div>
				</div>
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="cnee_id">Consignee</label>
					<div class="controls">
						<input type="text" cneeid="" name="cnee_id" id="cnee_id" oldvalue="" browseobj="cari_cnee_id" />
						<a style="display:none" class="add-on browse" id="cari_cnee_id" href="cari?ref=cnee_id&tipe=customer&cond1=consignee" title="Click For Search Consignee ID"></a>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="order_no">Order No</label>
					<div class="controls">
						<input type="text" orderno="" name="order_no" id="order_no" oldvalue="" browseobj="cari_order_no" />
						<a style="display:none" class="add-on browse" id="cari_order_no" href="cari?ref=order_no&tipe=booking_cargo_sea" title="Click For Search Order No"></a>
					</div>
				</div>
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="si_ref">SI Ref</label>
					<div class="controls">
						<input type="text" siref="" name="si_ref" id="si_ref" oldvalue="" browseobj="cari_si_ref" />
						<a style="display:none" class="add-on browse" id="cari_si_ref" href="cari?ref=si_ref&tipe=carrier_booking_sea" title="Click For Search SI Ref"></a>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="currency_id">Currency</label>
					<div class="controls">
						<select name="currency_id" id="currency_id" class="currency_id"></select>
					</div>
				</div>
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="term">Term</label>
					<div class="controls">
						<select name="term" id="term" class="term" style="width:80px;margin-left:0px">
							<option value="cycy">CY-CY</option>
							<option value="cycfs">CY-CFS</option>
							<option value="cfscfs">CFS-CFS</option>
							<option value="cfsct">CFS-CT</option>
							<option value="linier">Linier</option>
							<option value="fifo">FIFO</option>
							<option value="lifo">LIFO</option>
							<option value="fio">FIO</option>
							<option></option>
						</select>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="HAWB_no">HAWB No</label>
					<div class="controls">
						<input type="text" orderno="" name="HAWB_no" id="HAWB_no" oldvalue="" browseobj="cari_HAWB_no" />
						<a style="display:none" class="add-on browse" id="cari_HAWB_no" href="cari?ref=HAWB_no&tipe=air_import_master" title="Click For Search HAWB No"></a>
					</div>
				</div>
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="MAWB_no">MAWB No</label>
					<div class="controls">
						<input type="text" siref="" name="MAWB_no" id="MAWB_no" oldvalue="" browseobj="cari_MAWB_no" />
						<a style="display:none" class="add-on browse" id="cari_MAWB_no" href="cari?ref=MAWB_no&tipe=air_export_master" title="Click For Search  MAWB No"></a>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="first_carrier_id">First Carrier</label>
					<div class="controls">
						<div class="input-append">
							<input style="width:110px" type="text" name="first_carrier_id" id="first_carrier_id" oldvalue="" browseobj="cari_first_carrier_id" />
							<a style="display:none" class="add-on browse" id="cari_first_carrier_id" href="cari?ref=first_carrier_id&tipe=airline" title="Click For Search Feeder Vessel"><i class="icon-search"></i></a>
							<input type="text" style="width:110px" readonly="readonly" name="first_carrier_name" id="first_carrier_name" />
						</div>
					</div>
				</div>			
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="second_carrier_id">Second Carrier</label>
					<div class="controls">
						<div class="input-append">
							<input style="width:110px" type="text" name="second_carrier_id" id="second_carrier_id" oldvalue="" browseobj="cari_second_carrier_id" />
							<a style="display:none" class="add-on browse" id="cari_second_carrier_id" href="cari?ref=second_carrier_id&tipe=airline" title="Click For Search Mother Vessel"><i class="icon-search"></i></a>
							<input type="text" style="width:110px" readonly="readonly" name="second_carrier_name" id="second_carrier_name" />
						</div>
					</div>
				</div>	
			</div>

			<div class="row">
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="gross_weight">Gross Weight :</label>
					<div class="controls">
						<input type="text" style="text-align:right" name="gross_weight" id="gross_weight" class="currency" />
						<select name="gross_weight_description" id="gross_weight_description" class="gross_weight_description" style="width:80px;margin-left:0px">
						</select>
					</div>
				</div>
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="measurement">Measurement</label>
					<div class="controls">
						<input type="text" style="text-align:right" name="measurement" id="measurement" class="currency" />
						<select name="measurement_description" id="measurement_description" class="measurement_description" style="width:80px;margin-left:0px">
							<option value="m3">M3</option>
							<option value="cm3">CM3</option>
							<option value="mm3">MM3</option>
						</select>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="departure_port">Departure Port</label>
					<div class="controls">
						<input type="text" departureport="" name="departure_port" id="departure_port" oldvalue="" browseobj="cari_departure_port">
						<a style="display:none" class="add-on browse" id="cari_departure_port" href="cari?ref=departure_port&tipe=air" title="Click For Search Departure Port"><i class="icon-search"></i></a>
					</div>
				</div>
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="date_departure">Departure Date</label>
					<div class="controls">
						<input type="text" name="date_departure" id="date_departure" class="tanggal" />
					</div>
				</div>
			</div>

			<div class="row">
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="destination_port">Discharge Port</label>
					<div class="controls">
						<input type="text" destinationport="" name="destination_port" id="destination_port" oldvalue="" browseobj="cari_destination_port">
						<a style="display:none" class="add-on browse" id="cari_destination_port" href="cari?ref=destination_port&tipe=air" title="Click For Search Discharge Port"><i class="icon-search"></i></a>
					</div>
				</div>
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="date_destination">Discharge Date</label>
					<div class="controls">
						<input type="text" name="date_destination" id="date_destination" class="tanggal" />
					</div>
				</div>
			</div>

			<div class="row">
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="commodity">Commodity</label>
					<div class="controls">
						<input type="text" commodity="" name="commodity" id="commodity" oldvalue="" browseobj="cari_commodity">
						<a style="display:none" class="add-on browse" id="cari_commodity" href="cari?ref=commodity&tipe=com" title="Click For Search Commodity"><i class="icon-search"></i></a>
					</div>
				</div>
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="party">Party</label>
					<div class="controls">
						<input type="text" party="" name="party" id="party" oldvalue="" browseobj="cari_party">
						<a style="display:none" class="add-on browse" id="cari_party" href="cari?ref=party&tipe=unit" title="Click For Search Party"><i class="icon-search"></i></a>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="signature_id">Signature</label>
					<div class="controls">
						<input type="text" name="signature_id" id="signature_id" oldvalue="" style="width:100px" browseobj="cari_signature_id">
						<a style="display:none" class="add-on browse" id="cari_signature_id" href="cari?ref=signature_id&tipe=sig" title="Search For Signature ID"><i class="icon-search"></i></a>
						<input type="text" style="width:200px" readonly="readonly" name="signature_name" id="signature_name" />
					</div>
				</div>
			</div>


			<div class="row">
				<div class="span12 tab-pane active charges" style="height:200px" id="charges">
					<input type="hidden" id="baris-charges" name="baris-charges" value="1" />
					<table class="table">
						<thead>
							<tr>
								<th>Charges Codes</th><th>Description</th><th>Amount</th><th></th>
							</tr>
						</thead>
						<tbody id="transaksix">
						</tbody>
					</table>
				</div>
			</div>

			<div class="row">
				<div class="control-group span2" style="height:15px">
				</div>
				<div class="control-group span6">
					<label>Say</label>
					<textarea type="text" name="say" id="say"></textarea>
				</div>
				<div class="control-group span2">
					<label>Remarks</label>
					<textarea type="text" name="remarks" id="remarks"></textarea>
				</div>
			</div>

			<div class="row">
				<div class="control-group span8" style="height:15px">
					<label class="control-label"></label>
					<label class="control-label">Sub Total</label>
					<label class="control-label">VAT 10%</label>
					<label class="control-label">TOTAL</label>
				</div>
				<div class="control-group span4" style="height:15px">
				</div>
				<div class="control-group span8" style="height:15px">
					<div class="controls">
						<input style="width:150px;text-align:right" type="text" name="sub_total" id="sub_total" value="sub_total" readonly/>
						<input style="width:150px;text-align:right" type="text" name="vat" id="vat" value="vat" />
						<input style="width:150px;text-align:right" type="text" name="total" id="total" value="total" readonly/>
					</div>
				</div>
			</div>

			<div class="span12 form-actions btn-group">
				<?php if( in_array( 'create_air_invoice_ap', unserialize($capabilities) ) ){ ?>
				<a href="#" class="btn btn-primary simpan" style="top:-15px"><i class="icon-ok icon-white"></i> Simpan</a>
				<?php } ?>
				<a href="#" class="btn cetak browse" id="cetak" style="top:-15px"><i class="icon-print"></i> Cetak</a>
				<?php if( in_array( 'update_air_invoice_ap', unserialize($capabilities) ) ){ ?>
				<a href="#" class="btn btn-primary ubah" style="top:-15px"><i class="icon-pencil icon-white"></i> Ubah</a>
				<?php } ?>
				<?php if( intval($role)!= 1){ ?>
					<?php if( in_array( 'delete_air_invoice_ap', unserialize($capabilities) ) ){ ?>
					<a href="#" class="btn btn-danger hapus" style="top:-15px"><i class="icon-trash icon-white"></i> Hapus</a>
					<?php } ?>
				<?php } ?>
				<a href="#" class="btn batal" style="top:-15px"	><i class="icon-refresh"></i> Cancel</a>
			</div>

		</fieldset>
	</form>
</div>

<style type="text/css">
#charges{
overflow-x:auto;
}
#charges{
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
	$( '#invoice_no' ).focus();
	set_weight_type();
	set_currency_id();
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

	$('.charges-row').remove();
	$( '#transaksix' ).append(
		add_row_charges( 0, 0 )
	);

	var d = new Date();
	var tgl = d.getDate();
	if( tgl < 10 ) tgl = "0" + tgl;
	var bln = d.getMonth() + 1;
	if( bln < 10 ) bln = "0" + bln;
	var thn = d.getFullYear();
	var tanggal = tgl+"-"+bln+"-"+thn;
	$("#invoice_date" ).val( tanggal );
	$("#currency_id").val($("#currency_id option:first").val());
	$("#gross_weight_description").val($("#gross_weight_description option:first").val());
	$("#measurement_description").val($("#measurement_description option:first").val());
	nomorbaru();
}

preventempty="invoice_no,invoice_date,customer_id,credit_term,due_date,shipper_id,cnee_id,order_no,si_ref,currency_id,term,HAWB_no,MAWB_no,first_carrier_id,second_carrier_id,gross_weight,gross_weight_description,measurement,measurement_description,departure_port,date_departure,destination_port,date_destination,commodity,party,signature_id";
preventemptystatus="1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1";

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
								$('#gross_weight_description').append('<option value="'+data[i]['capasity_code']+'" selected="selected" >'+data[i]['description']+'</option>');
							}
							else
							{
								$('#gross_weight_description').append('<option value="'+data[i]['capasity_code']+'"  >'+data[i]['description']+'</option>');
							}
						}
					}
	});
}

function set_currency_id(){
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
					$('#currency_id').append('<option value="'+data[i]['currency_code']+'" selected="selected" >'+data[i]['description']+'</option>');
				}
				else
				{
					$('#currency_id').append('<option value="'+data[i]['currency_code']+'" selected="selected" >'+data[i]['description']+'</option>');
				}
			}
		}
	});
}

function nomorbaru()
{
	$.post( 'db_lastid', {tanggal : $( '#invoice_date' ).val() }, function( result ){
		if( result === '' ){
			var pecah=$( '#invoice_date' ).val().split('-');
			$( '#invoice_no' ).val( pecah[2] + pecah[1] + '0001' );
		} else {
			var lastid = ( Number( result ) + 1 ) + '';
			for( var i = lastid.length; i < 10; i++ ){
				lastid = '0' + lastid;
			}
			$( '#invoice_no' ).val( lastid );
		}
	});
}

//*****************************************************************//
//
// Tambah baris tabel charges
//
//*****************************************************************//
function add_row_charges(i, action) {
	var tabel = '<tr class="charges-row" id="charges-' + i + '">';
	tabel  += '<td><div class="input-append"><input style="width:100px" type="text" name="charges['+i+'][charges_code]" id="charges-'+i+'-charges_code" class="charges-charges_code id detail_transaksi" oldvalue="" browseobj="cari-charges-'+i+'-charges_code" /><a style="display:none" class="add-on browse id detail_transaksi" id="cari-charges-'+i+'-charges_code" href="cari?ref=charges-'+i+'-charges_code&tipe=chra" title="Klik untuk mencari kode charges"><i class="icon-search"></i></a></div></td>';
	tabel  += '<td><input type="text" name="charges[' + i + '][charges_description]" style="text-align:right;width:100px" id="charges-' + i + '-charges_description" class="charges-charges_description detail_transaksi" readonly /></td>';
	tabel  += '<td><input type="text" name="charges[' + i + '][amount]" style="text-align:right;width:100px" id="charges-' + i + '-amount" class="charges-amount detail_transaksi currency" /></td>';
	if( action === 1 ){
		tabel += '<td class="action" id="action-baris-charges-'+i+'"><a href="#void()" class="tombol tombol-small hapus-baris-charges detail_transaksi" id="hapus-baris-charges-'+i+'"><i class="icon-remove"></i></a></td>';
	} else tabel += '<td class="action" id="action-baris-charges-'+i+'"><a href="#void()" class="tombol tombol-small tambah-baris-charges detail_transaksi" id="tambah-baris-charges-'+i+'"><i class="icon-plus"></i></a></td>';
	tabel  += '</tr>';
	$( "#baris-charges" ).val( i + 1 );
	
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
	$('.charges-amount').live( 'keyup', function(){
		var sub_total = 0;
		var vat = 0;
		var total = 0;
		$('.charges-amount').each( function(){
			sub_total += Number( $( this ).val().replace( /[^0-9.]+/g, "" ) );
			vat += Number( $( this ).val().replace( /[^0-9.]+/g, "" ) ) / 10;
		});
		$('#sub_total').val( sub_total ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
		$('#vat').val( vat ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
		$('#total').val( sub_total - vat ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
	});
	
	$( '#invoice_date' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$( '#invoice_date' ).focus();
			} else {
				$( '#customer_id' ).focus();
			}
		}
	});

	$( '#customer_id' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$( '#customer_id' ).focus();
			} else {
				$( '#credit_term' ).focus();
			}
		}
	});

	$( '#customer_id' ).bind( 'blur', function( ) {
		var asal = $( this ).attr( 'id' );
		if ($( '#customer_id' ).val()===''){

		}else{
			if($(this).val()!==$(this).attr('oldvalue')){
				$.post( 'db_read_customer', { id: $( '#customer_id' ).val(),cond:'' }, function( result ){
					if( result === '' ){
						$( '#customer_id' ).val( "" );
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Customer ID Not Found.</div>';
						$('#alert').html( message );
						$( '#customer_id' ).focus();						
					} else {
						var data = unserialize( result );
						$('#alert').html( "" );
						$( '#'+asal.replace( 'customer_id', 'customer_address' ) ).val( data['address'] );
						$( '#'+asal.replace( 'customer_id', 'customer_address1' ) ).val( data['address1'] );
						$( '#'+asal.replace( 'customer_id', 'customer_address2' ) ).val( data['address2'] );
					}
				});
			}
		}
	});

	$( '#credit_term' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$( '#credit_term' ).focus();
			} else {
				$( '#due_date' ).focus();
			}
		}
	});

	$( '#due_date' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$( '#due_date' ).focus();
			} else {
				$( '#shipper_id' ).focus();
			}
		}
	});

	$( '#shipper_id' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$( '#shipper_id' ).focus();
			} else {
				$( '#cnee_id' ).focus();
			}
		}
	});

	$( '#shipper_id' ).bind( 'blur', function( ) {
		var asal = $( this ).attr( 'id' );
		if ($( '#shipper_id' ).val()===''){

		}else{
			if($(this).val()!==$(this).attr('oldvalue')){
				$.post( 'db_read_customer', { id: $( '#shipper_id' ).val(),cond:'shipper' }, function( result ){
					if( result === '' ){
						$( '#shipper_id' ).val( "" );
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Shipper ID Not Found.</div>';
						$('#alert').html( message );
						$( '#shipper_id' ).focus();												
					} else {
						var data = unserialize( result );
						$('#alert').html( "" );
						$( '#'+asal.replace( 'shipper_id', 'shipper_id' ) ).val( data['name'] );
					}
				});
			}
		}
	});

	$( '#cnee_id' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$( '#cnee_id' ).focus();
			} else {
				$( '#order_no' ).focus();
			}
		}
	});

	$( '#cnee_id' ).bind( 'blur', function( ) {
		var asal = $( this ).attr( 'id' );
		if ($( '#cnee_id' ).val()===''){

		}else{
			if($(this).val()!==$(this).attr('oldvalue')){
				$.post( 'db_read_customer', { id: $( '#cnee_id' ).val(),cond:'consignee' }, function( result ){
					if( result === '' ){
						$( '#cnee_id' ).val( "" );
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Consignee ID Not Found.</div>';
						$('#alert').html( message );	
						$( '#cnee_id' ).focus();					
					} else {
						var data = unserialize( result );
						$('#alert').html( "" );
						$( '#'+asal.replace( 'cnee_id', 'cnee_id' ) ).val( data['name'] );
					}
				});
			}
		}
	});

	$( '#order_no' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$( '#order_no' ).focus();
			} else {
				$( '#order_no' ).focus();
			}
		}
	});

	$( '#order_no' ).bind( 'blur', function( ) {
		if ($( '#order_no' ).val()===''){

		}else{
			if($(this).val()!==$(this).attr('oldvalue')){
				$.post( 'db_read_order_no', { id: $( '#order_no' ).val() }, function( result ){
					if( result === '' ){
						$( '#order_no' ).val( "" );
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Order No Not Found.</div>';
						$('#alert').html( message );	
						$( '#order_no' ).focus();					
					} else {

					}
				});
			}
		}
	});

	$( '#si_ref' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$( '#si_ref' ).focus();
			} else {
				$( '#si_ref' ).focus();
			}
		}
	});

	$( '#si_ref' ).bind( 'blur', function( ) {
		if ($( '#si_ref' ).val()===''){

		}else{
			if($(this).val()!==$(this).attr('oldvalue')){
				$.post( 'db_read_SI_ref', { id: $( '#si_ref' ).val() }, function( result ){
					if( result === '' ){
						$( '#si_ref' ).val( "" );
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> SI Ref Not Found.</div>';
						$('#alert').html( message );
						$( '#si_ref' ).focus();
					} else {
						$( '#si_ref' ).val( result );
					}
				});
			}
		}
	});

	$( '#currency_id' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$( '#currency_id' ).focus();
			} else {
				$( '#term' ).focus();
			}
		}
	});

	$( '#term' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$( '#term' ).focus();
			} else {
				$( '#HAWB_no' ).focus();
			}
		}
	});

	$( '#HAWB_no' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$( '#HAWB_no' ).focus();
			} else {
				$( '#MAWB_no' ).focus();
			}
		}
	});

	$( '#HAWB_no' ).bind( 'blur', function( ) {
		if ($( '#HAWB_no' ).val()===''){

		}else{
			if($(this).val()!==$(this).attr('oldvalue')){
				$.post( 'db_read_HAWB_no', { id: $( '#HAWB_no' ).val() }, function( result ){
					if( result === '' ){
						$( '#HAWB_no' ).val( "" );
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> HAWB No Not Found.</div>';
						$('#alert').html( message );
						$( '#HAWB_no' ).focus();
					} else {
						$( '#HAWB_no' ).val( result );
					}
				});
			}
		}
	});

	$( '#MAWB_no' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$( '#MAWB_no' ).focus();
			} else {
				$( '#first_carrier_id' ).focus();
			}
		}
	});

	$( '#MAWB_no' ).bind( 'blur', function( ) {
		if ($( '#MAWB_no' ).val()===''){

		}else{
			if($(this).val()!==$(this).attr('oldvalue')){
				$.post( 'db_read_MAWB_no', { id: $( '#MAWB_no' ).val() }, function( result ){
					if( result === '' ){
						$( '#MAWB_no' ).val( "" );
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> MAWB No Not Found.</div>';
						$('#alert').html( message );
						$( '#MAWB_no' ).focus();
					} else {
						$( '#MAWB_no' ).val( result );
					}
				});
			}
		}
	});

	$( '#first_carrier_id' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$( '#first_carrier_id' ).focus();
			} else {
				$( '#second_carrier_id' ).focus();
			}
		}
	});

	$( '#first_carrier_id' ).bind( 'blur', function( ) {
		var asal = $( this ).attr( 'id' );
		if ($( '#first_carrier_id' ).val()===''){

		}else{
			if($(this).val()!==$(this).attr('oldvalue')){
				$.post( 'db_read_airline', { id: $( '#first_carrier_id' ).val()}, function( result ){
					if( result === '' ){
						$( '#first_carrier_id' ).val( "" );
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Feeder Vessel Not Found.</div>';
						$('#alert').html( message );						
					} else {
						var data = unserialize( result );
						$('#alert').html( "" );
						$( '#'+asal.replace( 'first_carrier_id', 'first_carrier_name' ) ).val( data['airline_name'] );
					}
				});
			}
		}
	});

	$( '#second_carrier_id' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$( '#second_carrier_id' ).focus();
			} else {
				$( '#gross_weight' ).focus();
			}
		}
	});

	$( '#second_carrier_id' ).bind( 'blur', function( ) {
		var asal = $( this ).attr( 'id' );
		if ($( '#second_carrier_id' ).val()===''){

		}else{
			if($(this).val()!==$(this).attr('oldvalue')){
				$.post( 'db_read_airline', { id: $( '#second_carrier_id' ).val(), cond:'airline_type2' }, function( result ){
					if( result === '' ){
						$( '#second_carrier_id' ).val( "" );
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Mother Vessel Not Found.</div>';
						$('#alert').html( message );						
					} else {
						var data = unserialize( result );
						$('#alert').html( "" );
						$( '#'+asal.replace( 'second_carrier_id', 'second_carrier_name' ) ).val( data['airline_name'] );
					}
				});
			}
		}
	});

	$( '#gross_weight' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
			
			} else {
				$( '#gross_weight_description' ).focus();
			}
		}
	});

	$( '#gross_weight_description' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
			
			} else {
				$( '#measurement' ).focus();
			}
		}
	});

	$( '#measurement' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
			
			} else {
				$( '#measurement_description' ).focus();
			}
		}
	});

	$( '#measurement_description' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
			
			} else {
				$( '#departure_port' ).focus();
			}
		}
	});

	$( '#departure_port' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$( '#departure_port' ).focus();
			} else {
				$( '#date_departure' ).focus();
			}
		}
	});

	$( '#departure_port' ).bind( 'blur', function( ) {
		if ($( '#departure_port' ).val()===''){

		}else{
			if($(this).val()!==$(this).attr('oldvalue')){
				$.post( 'db_read_port', { id: $( '#departure_port' ).val() }, function( result ){
					if( result === '' ){
						$( '#departure_port' ).val( "" );
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Loading Port Not Found.</div>';
						$('#alert').html( message );
						$( '#departure_port' ).focus();
					} else {
						$( '#departure_port' ).val( result );
					}
				});
			}
		}
	});

	$( '#date_departure' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
			
			} else {
				$( '#destination_port' ).focus();
			}
		}
	});

	$( '#destination_port' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$( '#destination_port' ).focus();
			} else {
				$( '#date_destination' ).focus();
			}
		}
	});

	$( '#destination_port' ).bind( 'blur', function( ) {
		if ($( '#destination_port' ).val()===''){

		}else{
			if($(this).val()!==$(this).attr('oldvalue')){
				$.post( 'db_read_port', { id: $( '#destination_port' ).val() }, function( result ){
					if( result === '' ){
						$( '#destination_port' ).val( "" );
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Discharge Port Not Found.</div>';
						$('#alert').html( message );
						$( '#destination_port' ).focus();
					} else {
						$( '#destination_port' ).val( result );
					}
				});
			}
		}
	});

	$( '#date_destination' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
			
			} else {
				$( '#commodity' ).focus();
			}
		}
	});

	$( '#commodity' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$( '#commodity' ).focus();
			} else {
				$( '#party' ).focus();
			}
		}
	});

	$( '#commodity' ).bind( 'blur', function( ) {
		if ($( '#commodity' ).val()===''){

		}else{
			if($(this).val()!==$(this).attr('oldvalue')){
				$.post( 'db_read_commodity', { id: $( '#commodity' ).val() }, function( result ){
					if( result === '' ){
						$( '#commodity' ).val( "" );
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong>Commodity Not Found.</div>';
						$('#alert').html( message );
						$( '#commodity' ).focus();
					} else {
						$( '#commodity' ).val( result );
					}
				});
			}
		}
	});

	$( '#party' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$( '#party' ).focus();
			} else {
				$( '#signature_id' ).focus();
			}
		}
	});

	$( '#party' ).bind( 'blur', function( ) {
		if ($( '#party' ).val()===''){

		}else{
			if($(this).val()!==$(this).attr('oldvalue')){
				$.post( 'db_read_unit', { id: $( '#party' ).val() }, function( result ){
					if( result === '' ){
						$( '#party' ).val( "" );
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Party Not Found.</div>';
						$('#alert').html( message );
						$( '#party' ).focus();
					} else {
						$( '#party' ).val( result );
					}
				});
			}
		}
	});

	$( '#signature_id' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){

			} else {

			}
		}
	});

	$( '#signature_id' ).bind( 'blur', function( ) {
		if ($( '#signature_id' ).val()===''){

		}else{
			if($(this).val()!==$(this).attr('oldvalue')){
				$.post( 'db_read_signature', { id: $( '#signature_id' ).val() }, function( result ){
					if( result === '' ){
						$( '#signature_id' ).val( "" );
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Signature Name Not Found.</div>';
						$('#alert').html( message );
						$( '#signature_id' ).focus();
					} else {
						$( '#signature_name' ).val( result );
					}
				});
			}
		}
	});

	////////////////////////////////////////////////////////////////
	//
	// Press enter then move from x to y with default value if empty
	//
	////////////////////////////////////////////////////////////////

	$( '.detail_transaksi' ).live( 'keydown', function( e ){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if ( e.which === kodehapusbaris ){
			e.preventDefault();
			var xobj = document.getElementById('hapus-baris-charges-'+num);
			if (xobj != null){
				$( '#hapus-baris-charges-'+( Number( num ) ) ).click();
			}else{
				$("input[id*='" + "charges-"+num + "']").val('');
			}
			setfocus(Number(num),'charges_code','charges');
		}
	});

	$( '.charges-charges_code' ).live( 'blur', function(){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if($( this ).val()==''){
			$( '#'+asal.replace( 'charges_code', 'charges_description')).val( '' );
		}else{
			if ($( this ).val()!==$( this ).attr('oldvalue')){
				$.post( 'db_read_charges', { id: $( this ).val()}, function( result){
					if( result === '' || result===null){
						var message = '<div class"alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Charges Code Not Found.</div>';
						$('#alert').html( message );
						$( '#'+asal.replace( 'charges_code', 'charges_description')).val( '' );
						$( '#'+asal ).val( '' );
						$(this).val('');
						$(this).attr("oldvalue", '');
						$( '#'+asal ).focus();
					}else{
						var data = unserialize( result );
						$('#alert').html( "" );
						$( '#'+asal.replace( 'charges_code', 'charges_description')).val( data['description']);
					}
				});
			}
		}
	});

	$( '.charges-charges_code' ).live( 'keydown', function( e ){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if ( e.which === 13 ){
			e.preventDefault;
			setfocus(Number(num),'amount','charges');
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'charges_code','charges');	
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'charges_code','charges');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'amount','charges');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'amount','charges');
			}
		}
	});

	$( '.charges-amount' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if ( e.which === 13 ){
			e.preventDefault;
			setfocus(Number(num),'netweight','charges');
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'amount','charges');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'amount','charges');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'netweight','charges');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'sealno','charges');
			}
		}
	});

	$( '.charges-amount' ).live( 'keydown', function( e ){
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== '' ){
				var asal = $( this ).attr( 'id' );
				var num = asal.split( '-' )[ 1 ];
				console.log( $( '#baris-charges' ).val() == ( Number( num ) + 1 ) );
				if( Number( $( '#baris-charges' ).val() ) === ( Number( num ) + 1 ) ){
					$( '#tambah-baris-charges-'+num ).click();
				}
				$( '#charges-'+( Number( num ) + 1 )+'-code' ).focus();
			}
		}
	});

	////////////////////////////////////////////////////////////////
	//
	// Retrieve data
	//
	////////////////////////////////////////////////////////////////
	$( '#invoice_no' ).bind( 'blur', function() {
		if ($(this).val()!==$(this).attr('oldvalue')){
			$.post( 'db_read', { id: $( '#invoice_no' ).val() }, function( result ){
				if( result === '' ){
					
					var id = $( '#invoice_no' ).val();
					initializex();
					$( '#invoice_no' ).val( id );
					$( '#invoice_date' ).focus();

				} else {
					var data = unserialize( result );

					var tanggal = data[ 'invoice_date' ].split( "-" );
					var tgl = tanggal[ 2 ];
					var bln = tanggal[ 1 ];
					var thn = tanggal[ 0 ];
					$( "#invoice_date" ).val( tgl + "-" + bln + "-" + thn );

					$( "#customer_id" ).val( data[ 'customer_id' ] );
					$( "#customer_address" ).val( data[ 'customer_address' ] );
					$( "#customer_address1" ).val( data[ 'customer_address1' ] );
					$( "#customer_address2" ).val( data[ 'customer_address2' ] );
					$( "#credit_term" ).val( data[ 'credit_term' ] );
					var tanggal = data[ 'due_date' ].split( "-" );
					var tgl = tanggal[ 2 ];
					var bln = tanggal[ 1 ];
					var thn = tanggal[ 0 ];
					$( "#due_date" ).val( tgl + "-" + bln + "-" + thn );
					$( "#shipper_id" ).val( data[ 'shipper_id' ] );
					$( "#cnee_id" ).val( data[ 'cnee_id' ] );
					$( "#order_no" ).val( data[ 'order_no' ] );
					$( "#si_ref" ).val( data[ 'si_ref' ] );
					$( "#currency_id" ).val( data[ 'currency_id' ] );
					$( "#term" ).val( data[ 'term' ] );
					$( "#HAWB_no" ).val( data[ 'HAWB_no' ] );
					$( "#MAWB_no" ).val( data[ 'MAWB_no' ] );
					$( "#first_carrier_id" ).val( data[ 'first_carrier_id' ] );
					$( "#first_carrier_name" ).val( data[ 'first_carrier_name' ] );
					$( "#second_carrier_id" ).val( data[ 'second_carrier_id' ] );
					$( "#second_carrier_name" ).val( data[ 'second_carrier_name' ] );
					$( "#gross_weight" ).val( parseFloat( data[ 'gross_weight' ] ) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
					$( "#gross_weight_description" ).val( data[ 'gross_weight_description' ] );
					$( "#measurement" ).val( parseFloat( data[ 'measurement' ] ) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
					$( "#measurement_description" ).val( data[ 'measurement_description' ] );
					$( "#departure_port" ).val( data[ 'departure_port' ] );
					var tanggal = data[ 'date_departure' ].split( "-" );
					var tgl = tanggal[ 2 ];
					var bln = tanggal[ 1 ];
					var thn = tanggal[ 0 ];
					$( "#date_departure" ).val( tgl + "-" + bln + "-" + thn );
					$( "#destination_port" ).val( data[ 'destination_port' ] );
					var tanggal = data[ 'date_destination' ].split( "-" );
					var tgl = tanggal[ 2 ];
					var bln = tanggal[ 1 ];
					var thn = tanggal[ 0 ];
					$( "#date_destination" ).val( tgl + "-" + bln + "-" + thn );
					$( "#commodity").val( data[ 'commodity' ]);
					$( "#party").val( data[ 'party' ]);
					$( "#say").val( data[ 'say' ]);
					$( "#remarks").val( data[ 'remarks' ]);
					$( "#co_loader" ).val( data[ 'co_loader_code' ] );
					$( "#co_loader_name" ).val( data[ 'co_loader_description' ] );
					$( "#signature_id" ).val( data['signature_id'] );
					$( "#signature_name" ).val( data['signature_name'] );
					$( "#sub_total" ).val( parseFloat( data[ 'sub_total' ] ) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
					$( "#vat" ).val( parseFloat( data[ 'vat' ] ) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
					$( "#total" ).val( parseFloat( data[ 'total' ] ) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });

					
					///////////////////////////////////////////////////////////////////////////////////////
					////
					////	Menampilkan data pada grid route
					////
					////////////////////////////////////////////////////////////////////////////////////////
					if( data['charges']!=null)
					{
						$( '.charges-row' ).remove();
						var i = 0;
						for(; data['charges'][i]; i++ ){
							$( '#transaksix' ).append( add_row_charges( i, 1 ) );
							$( '#charges-'+i+'-charges_code' ).val( data['charges'][i][ 'charges_code' ] );
							$( '#charges-'+i+'-charges_description' ).val( data['charges'][i][ 'charges_description' ] );
							$( '#charges-'+i+'-flight_no' ).val( data['charges'][i][ 'flight_no' ] );
							$( '#charges-'+i+'-amount' ).val(parseFloat( data['charges'][i][ 'amount' ] ) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 } );
							$( '#baris-charges' ).val( i + 1 );
						}
						$( '#transaksix' ).append( add_row_charges( i, 0 ) );
					}
					$( '.ubah, .hapus, .cetak' ).show();
					$('#cetak').attr('href', 'pdf?invoice_no=' + $('#invoice_no').val());
					$( '.simpan' ).hide();
				}
			});
		}
	});
	$( '#invoice_no' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){	
				nomorbaru();
			} else {
				$('#invoice_date').focus();
			}
		}
	});
	$( '#party' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			
			setfocus(0,'charges_code','charges');
			
		}
	});

	////////////////////////////////////////////////////////////////
	//
	// Tambah Hapus Baris TTUS
	//
	////////////////////////////////////////////////////////////////
	$( '.tambah-baris-charges' ).live( 'click', function(){
		var str = $( this ).attr( 'id' );
		var num = str.replace( "tambah-baris-charges-", "" );
	
		// Change action
		$( "#action"+str.replace( "tambah", "" ) ).html(
			'<a href="#void()" class="tombol tombol-small hapus-baris hapus-baris-charges" id="hapus-baris-charges-'+num+'"><i class="icon-remove"></i></a>'
		);

		// Insert row
		$( '#transaksix' ).append(
			add_row_charges( Number( str.replace( 'tambah-baris-charges-', '' ) ) + 1, 0 )
		);
		setfocus(Number(num)+1,'charges_code','charges');
	});

	$( '.hapus-baris-charges' ).live( 'click', function(){
		if( confirm( 'Are you sure to delete this row?' ) ){
			var str = $( this ).attr( 'id' );
			var num = str.split('-')[3];
			$( "#"+str.replace( "hapus-baris-", "" ) ).remove();
			setfocus(Number(num),'charges_code','charges');
		}
	});

	////////////////////////////////////////////////////////////////
	//
	// Button Behavior
	//
	////////////////////////////////////////////////////////////////
	$( '.simpan' ).click( function(){
		if( $( '#invoice_no' ).val() !== '' ){
			$.post( 'db_create', $( 'form' ).serialize(), function( result ){
				success=unserialize(result);
				if( success['status'] ==='Error' ){
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Process '+$( '#invoice_no' ).val()+' Failed. '+ success['ket'] +'</div>';
					$('#alert').html( message );					
					if (success['ket']=='Data Already Exist.'){
						nomorbaru();
					}
				}else if( success['status'] ){
					var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Process '+$( '#invoice_no' ).val()+' Complete.</div>';
					$('#alert').html( message );
					initializex();
				} else {
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Process '+$( '#invoice_no' ).val()+' Failed.</div>';
					$('#alert').html( message );
				}
			});
		} else {
			var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data <strong> REQUIRED </strong>.</div>';
			$('#alert').html( message );
		}
	});

	$( '.ubah' ).click( function(){
		if( $( '#invoice_no' ).val() !== ''  ){
			$.post( 'db_update', $( 'form' ).serialize(), function( result ){
				success=unserialize(result);
				if( success['status'] ==='Error' ){
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Process '+$( '#invoice_no' ).val()+'  Failed. '+ success['ket'] +'</div>';
					$('#alert').html( message );					
					if (success['ket']=='Data Already Exist.'){
						nomorbaru();
					}
				}else if( success['status'] ){
					var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Process '+$( '#invoice_no' ).val()+' Complete.</div>';
					$('#alert').html( message );
					//$( '#cetak' ).attr( 'href', 'pdf?id_jurnal=' + $('#id_jurnal').val()+'&id_transaksi=' + $('#id_transaksi').val());					
					//$( '.cetak' ).click();
					initializex();
				} else {
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Process '+$( '#invoice_no' ).val()+' Failed.</div>';
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
			if( $( '#invoice_no' ).val() !== '' ){
				$.post( 'db_delete', { id: $( '#invoice_no' ).val() }, function( result ){
					success=unserialize(result);
					if( success['status'] ==='Error' ){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Process '+$( '#invoice_no' ).val()+' Failed. '+ success['ket'] +'</div>';
						$('#alert').html( message );					
					}else if( success['status'] ){
						var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Process '+$( '#invoice_no' ).val()+' Complete.</div>';
						$('#alert').html( message );
						initializex();
					} else {
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Process '+$( '#invoice_no' ).val()+'  Failed.</div>';
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
		if (($('#invoice_no').val()==='') ){
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

