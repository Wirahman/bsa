<div class="container">
	<h2 class="judul">Gross Profit Import (AIR)</h2>
	<div id="alert"></div>
	<form class="form-horizontal">
		<fieldset>
			<div class="row">
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="gp_no">GP No.</label>
					<div class="controls">
						<div class="input-append">
							<input type="text" name="gp_no" id="gp_no" oldvalue="" browseobj="cari_gp_no" />
							<a style="display:none" class="add-on browse" id="cari_gp_no" href="cari?ref=gp_no&tipe=air_gross_profit_import" title="Click For Search GP No">
							<i class="icon-search"></i></a></div>
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
					<label class="control-label" for="MAWB_no">MAWB No.</label>
					<div class="controls">
						<input type="text" hbl="" name="MAWB_no" id="MAWB_no" oldvalue="" browseobj="cari_MAWB_no" />
						<a style="display:none" class="add-on browse" id="cari_MAWB_no" href="cari?ref=MAWB_no&tipe=air_import_master" title="Click for search MAWB No"><i class="icon-search"></i></a>
					</div>
				</div>
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="etd">ETD</label>
					<div class="controls">
						<input type="text" name="etd" id="etd" class="tanggal" />
					</div>
				</div>
			</div>

			<div class="row">
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="POL_id">POL</label>
					<div class="controls">
						<div class="input-append">
							<input type="text" name="POL_id" id="POL_id" oldvalue="" browseobj="cari_POL_id" style="width:50px"/>
							<a style="display:none" class="add-on browse" id="cari_POL_id" href="cari?ref=POL_id&tipe=air" title="Click For Search POL ID"><i class="icon-search"></i></a>
						</div>
						<input type="text" style="width:110px" readonly="readonly" name="POL_description" id="POL_description" />
					</div>
				</div>
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="POD_id">POD</label>
					<div class="controls">
						<div class="input-append">							
							<input type="text" PODid="" oldvalue="" browseobj="cari_POD_id" name="POD_id" id="POD_id" style="width:50px" />
							<a style="display:none" class="add-on browse" id="cari_POD_id" href="cari?ref=POD_id&tipe=air" title="Click For Search Port Of Destination"><i class="icon-search"></i></a>
						</div>
						<input type="text" style="width:110px" readonly="readonly" name="POD_description" id="POD_description" />
					</div>
				</div>
			</div>

			<div class="row">
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="sales_id">Sales by</label>
					<div class="controls">
						<div class="input-append">
							<input type="text" name="sales_id" id="sales_id" oldvalue="" browseobj="cari_sales_id" style="width:50px"/>
							<a style="display:none" class="add-on browse" id="cari_sales_id" href="cari?ref=sales_id&tipe=sal" title="Click For Search Sales ID"><i class="icon-search"></i></a>
						</div>
						<input type="text" style="width:110px" readonly="readonly" name="sales_description" id="sales_description" />
					</div>
				</div>
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="prepared">Prepared By</label>
					<div class="controls">
						<div class="input-append">
							<input type="text" style="width:110px" name="prepared" id="prepared" />
						</div>
					</div>
				</div>
			</div>

			<div class="row">				
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="approved"> Approved By</label>
					<div class="controls">
						<div class="input-append">
							<input type="text" style="width:110px" name="approved" id="approved" />
						</div>
					</div>
				</div>
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="remarks">Remarks</label>
					<div class="controls">
						<div class="input-append">
							<textarea type="text" name="remarks" id="remarks" class="input-xlarge" rows="1" /></textarea>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="control-group span9">
					<div class="controls">
						<ul class="nav nav-tabs nav-justified selector" id="meta">
							<li class="active"><li><a href="#revenue" class="tab" title="Click For Filled Revenue Detail">REVENUE</a></li>
							<li><a href="#cost" class="tab" title="Click For Search Cost Detail">COST</a></li>
						</ul> 
					</div>
				</div>
			</div>
			<div class="tab-content ">
				<div class="span12 tab-pane active" style="height:300px;width:1300px" id="revenue">
					<div class="row">
						<div class="control-group span12" >
							<input type="hidden" id="baris-revenue" name="baris-revenue" value="0" />
							<table class="table">
								<thead height="5px">
									<tr height="5px"><th style="width:100px">Charges Code</th><th style="width:100px">Charges Description</th><th style="width:100px">Customer ID</th><th style="width:100px">Customer</th><th style="width:100px">Unit</th><th style="width:100px">Currency</th><th>Rate</th><th></th></tr>
								</thead>
								<tbody id="transaksix">
								
								</tbody>
							</table>
						</div>
					</div>
					
				</div>
				<div class="span12 tab-pane cost" style="height:300px;width:1300px" id="cost">
					<div class="row">
						<div class="control-group span12" >
							<input type="hidden" id="baris-cost" name="baris-cost" value="0" />
							<table class="table">
								<thead height="5px">
									<tr height="5px"><th style="width:100px">Charges Code</th><th style="width:100px">Charges Description</th><th style="width:100px">Vendor ID</th><th style="width:100px">Vendor</th><th style="width:100px">Unit</th><th style="width:100px">Currency</th><th>Rate</th><th></th></tr>
								</thead>
								<tbody id="transaksix2">
								
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="control-group span4" style="height:15px">
				</div>
				<div class="control-group span8" style="height:15px">
					<label class="control-label"></label>
					<label class="control-label" style="margin-left:8px" >Revenue</label>
					<label class="control-label" style="margin-left:10px" >Cost</label>
				</div>
				<div class="control-group span4" style="height:15px">
				</div>
				<div class="control-group span8" style="height:15px">
					<label class="control-label" style="margin-left:100px" >TOTAL</label>
					<div class="controls">
						<input style="width:150px;text-align:right;margin-left:25px" type="text" name="total_revenue" id="total_revenue" value="0" />
						<input style="width:150px;text-align:right" type="text" name="total_cost" id="total_cost" value="0" />
					</div>
				</div>
			</div>

			
			<div class="span12 form-actions btn-group">
				<?php if( in_array( 'create_air_gross_profit_import', unserialize($capabilities) ) ){ ?>
				<a href="#" class="btn btn-primary simpan" style="top:-15px"><i class="icon-ok icon-white"></i> Simpan</a>
				<?php } ?>
				<a href="#" class="btn cetak browse" id="cetak" style="top:-15px"><i class="icon-print"></i> Cetak</a>
				<?php if( in_array( 'update_air_gross_profit_import', unserialize($capabilities) ) ){ ?>
				<a href="#" class="btn btn-primary ubah" style="top:-15px"><i class="icon-pencil icon-white"></i> Ubah</a>
				<?php } ?>
				<?php if( intval($role)!= 1){ ?>
					<?php if( in_array( 'delete_air_gross_profit_import', unserialize($capabilities) ) ){ ?>
					<a href="#" class="btn btn-danger hapus" style="top:-15px"><i class="icon-trash icon-white"></i> Hapus</a>
					<?php } ?>
				<?php } ?>
				<a href="#" class="btn batal" style="top:-15px"	><i class="icon-refresh"></i> Cancel</a>
			</div>
		</fieldset>
	</form>
</div>
<style type="text/css">

#revenue{
overflow-x:auto;
}
#revenue{
overflow-y:auto;
}
#cost{
overflow-x:auto;
}
#cost{
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
	$( '#gp_no' ).focus();
	set_weight_type();
	initializex();
}
function initializex(){

	$( '.simpan, .batal' ).show();
	$( '.ubah, .hapus, .cetak' ).hide();
	$('input:text, textarea').val('');
	$('input:checkbox').removeAttr('checked');
	$('#total_revenue,#total_cost').val('0');
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

	$('.revenue-row').remove();
	$( '#transaksix' ).append(
		add_row_revenue( 0, 0 )
	);
	$('.cost-row').remove();
	$( '#transaksix2' ).append(
		add_row_cost( 0, 0 )
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
	$("#packages_type").val($("#packages_type option:first").val());
	$("#measurement_type").val($("#measurement_type option:first").val());
	$("#service_type2").val($("#service_type2 option:first").val());
	nomorbaru();
}

preventempty="gp_no,order_date,MAWB_no,etd,POL_id,POD_id,sales_id,prepared,approved,remarks";
preventemptystatus="1,1,1,1,1,1,1,1,1,1";
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

function nomorbaru()
{
	$.post( 'db_lastid', {tanggal : $( '#order_date' ).val() }, function( result ){
		if( result === '' ){
			var pecah=$( '#order_date' ).val().split('-');
			$( '#gp_no' ).val( pecah[2] + pecah[1] + '0001' );
		} else {
			var lastid = ( Number( result ) + 1 ) + '';
			for( var i = lastid.length; i < 10; i++ ){
				lastid = '0' + lastid;
			}
			$( '#gp_no' ).val( lastid );
		}
	});
}

//*****************************************************************//
//
// Tambah baris tabel revenue
//
//*****************************************************************//

function add_row_revenue(i, action) {
	var tabel = '<tr class="revenue-row" id="revenue-' + i + '">';
	tabel  += '<td><div class="input-append"><input style="width:100px" type="text" name="revenue['+i+'][charges_code]" id="revenue-'+i+'-charges_code" class="revenue-charges_code id detail_transaksi" oldvalue="" browseobj="cari-revenue-'+i+'-charges_code" /><a style="display:none" class="add-on browse id detail_transaksi" id="cari-revenue-'+i+'-charges_code" href="cari?ref=revenue-'+i+'-charges_code&tipe=chra" title="Click For Search Charges Code"><i class="icon-search"></i></a></div></td>';
	tabel  += '<td><input type="text" name="revenue[' + i + '][charges_description]" style="text-align:right;width:200px" id="revenue-' + i + '-charges_description" class="revenue-charges_description detail_transaksi" readonly /></td>';
	tabel  += '<td><div class="input-append"><input style="width:100px" type="text" name="revenue['+i+'][customer_id]" id="revenue-'+i+'-customer_id" class="revenue-customer_id detail_transaksi" oldvalue="" browseobj="cari-revenue-'+i+'-customer_id" /><a style="display:none" class="add-on browse detail_transaksi" id="cari-revenue-'+i+'-customer_id" href="cari?ref=revenue-'+i+'-customer_id&tipe=customer" title="Click For Search Customer Id"><i class="icon-search"></i></a></div></td>';
	tabel  += '<td><input type="text" name="revenue[' + i + '][customer_description]" style="text-align:right;width:200px" id="revenue-' + i + '-customer_description" class="revenue-customer_description detail_transaksi" readonly /></td>';
	tabel  += '<td><div class="input-append"><input style="width:100px" type="text" name="revenue['+i+'][unit_id]" id="revenue-'+i+'-unit_id" class="revenue-unit_id detail_transaksi" oldvalue="" browseobj="cari-revenue-'+i+'-unit_id" /><a style="display:none" class="add-on browse detail_transaksi" id="cari-revenue-'+i+'-unit_id" href="cari?ref=revenue-'+i+'-unit_id&tipe=unit" title="Click For Search Unit Id"><i class="icon-search"></i></a></div></td>';
	tabel  += '<td><div class="input-append"><input style="width:100px" type="text" name="revenue['+i+'][currency_id]" id="revenue-'+i+'-currency_id" class="revenue-currency_id detail_transaksi" oldvalue="" browseobj="cari-revenue-'+i+'-currency_id" /><a style="display:none" class="add-on browse detail_transaksi" id="cari-revenue-'+i+'-currency_id" href="cari?ref=revenue-'+i+'-currency_id&tipe=cur" title="Click For Search Currency Id"><i class="icon-search"></i></a></div></td>';
	tabel  += '<td><input type="text" name="revenue[' + i + '][rata_charges]" style="text-align:right;width:150px" id="revenue-' + i + '-rata_charges" class="revenue-rata_charges detail_transaksi currency" /></td>';
	if( action === 1 ){
		tabel += '<td class="action" id="action-baris-revenue-'+i+'"><a href="#void()" class="tombol tombol-small hapus-baris-revenue detail_transaksi" id="hapus-baris-revenue-'+i+'"><i class="icon-remove"></i></a></td>';
	} else tabel += '<td class="action" id="action-baris-revenue-'+i+'"><a href="#void()" class="tombol tombol-small tambah-baris-revenue detail_transaksi" id="tambah-baris-revenue-'+i+'"><i class="icon-plus"></i></a></td>';
	tabel  += '</tr>';
	$( "#baris-revenue" ).val( i + 1 );
	return tabel;
}


function add_row_cost(i, action) {
	var tabel = '<tr class="cost-row" id="cost-' + i + '">';
	tabel  += '<td><div class="input-append"><input style="width:100px" type="text" name="cost['+i+'][charges_code]" id="cost-'+i+'-charges_code" class="cost-charges_code id detail_transaksi" oldvalue="" browseobj="cari-cost-'+i+'-charges_code" /><a style="display:none" class="add-on browse id detail_transaksi" id="cari-cost-'+i+'-charges_code" href="cari?ref=cost-'+i+'-charges_code&tipe=chra" title="Click For Search Charges Code"><i class="icon-search"></i></a></div></td>';
	tabel  += '<td><input type="text" name="cost[' + i + '][charges_description]" style="text-align:right;width:200px" id="cost-' + i + '-charges_description" class="cost-charges_description detail_transaksi" readonly /></td>';
	tabel  += '<td><div class="input-append"><input style="width:100px" type="text" name="cost['+i+'][vendor_id]" id="cost-'+i+'-vendor_id" class="cost-vendor_id detail_transaksi" oldvalue="" browseobj="cari-cost-'+i+'-vendor_id" /><a style="display:none" class="add-on browse detail_transaksi" id="cari-cost-'+i+'-vendor_id" href="cari?ref=cost-'+i+'-vendor_id&tipe=pr_air" title="Click For Search Customer Id"><i class="icon-search"></i></a></div></td>';
	tabel  += '<td><input type="text" name="cost[' + i + '][vendor_description]" style="text-align:right;width:200px" id="cost-' + i + '-vendor_description" class="cost-vendor_description detail_transaksi" readonly /></td>';
	tabel  += '<td><div class="input-append"><input style="width:100px" type="text" name="cost['+i+'][unit_id]" id="cost-'+i+'-unit_id" class="cost-unit_id detail_transaksi" oldvalue="" browseobj="cari-cost-'+i+'-unit_id" /><a style="display:none" class="add-on browse detail_transaksi" id="cari-cost-'+i+'-unit_id" href="cari?ref=cost-'+i+'-unit_id&tipe=unit" title="Click For Search Unit Id"><i class="icon-search"></i></a></div></td>';
	tabel  += '<td><div class="input-append"><input style="width:100px" type="text" name="cost['+i+'][currency_id]" id="cost-'+i+'-currency_id" class="cost-currency_id detail_transaksi" oldvalue="" browseobj="cari-cost-'+i+'-currency_id" /><a style="display:none" class="add-on browse detail_transaksi" id="cari-cost-'+i+'-currency_id" href="cari?ref=cost-'+i+'-currency_id&tipe=cur" title="Click For Search Currency Id"><i class="icon-search"></i></a></div></td>';
	tabel  += '<td><input type="text" name="cost[' + i + '][rata_charges]" style="text-align:right;width:150px" id="cost-' + i + '-rata_charges" class="cost-rata_charges detail_transaksi currency" /></td>';
	if( action === 1 ){
		tabel += '<td class="action" id="action-baris-cost-'+i+'"><a href="#void()" class="tombol tombol-small hapus-baris-cost detail_transaksi" id="hapus-baris-cost-'+i+'"><i class="icon-remove"></i></a></td>';
	} else tabel += '<td class="action" id="action-baris-cost-'+i+'"><a href="#void()" class="tombol tombol-small tambah-baris-cost detail_transaksi" id="tambah-baris-cost-'+i+'"><i class="icon-plus"></i></a></td>';
	tabel  += '</tr>';
	$( "#baris-cost" ).val( i + 1 );
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

	$('.revenue-rata_charges').live( 'keyup', function(){
		var total_revenue = 0;
		$('.revenue-rata_charges').each( function(){
			total_revenue += Number( $( this ).val().replace( /[^0-9.]+/g, "" ) );
		});
		$('#total_revenue').val( total_revenue ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
	});
	
	$('.cost-rata_charges').live( 'keyup', function(){
		var total_cost = 0;
		$('.cost-rata_charges').each( function(){
			total_cost += Number( $( this ).val().replace( /[^0-9.]+/g, "" ) );
		});
		$('#total_cost').val( total_cost ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
	});

	$( '#order_date' ).bind( 'keydown', function( e ) {
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
				$( '#ETD' ).focus();
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
					} else {

					}
				});
			}
		}
	});

	$( '#ETD' ).bind( 'keydown', function( e ) {
		if (e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === ''){

			} else {
				$( '#POL_id').focus();
			}
		}
	});

	$( '#POL_id' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
			
			} else {
				$( '#POD_id' ).focus();
			}
		}
	});

	$( '#POL_id' ).bind( 'blur', function( ) {
		if ($( '#POL_id' ).val()===''){
			$( '#POL_description' ).val( "" );
		}else{
			if($(this).val()!==$(this).attr('oldvalue')){
				$.post( 'db_read_port', { id: $( '#POL_id' ).val() }, function( result ){
					if( result === '' ){
						$( '#POL_id' ).val( "" );
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Customer Code Not Found.</div>';
						$('#alert').html( message );						
					} else {
						$( '#POL_description' ).val( result );
					}
				});
			}
		}
	});

	$( '#POD_id' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
			
			} else {
				$( '#sales_id' ).focus();
			}
		}
	});

	$( '#POD_id' ).bind( 'blur', function( ) {
		if ($( '#POD_id' ).val()===''){
			$( '#POD_description' ).val( "" );
		}else{
			if($(this).val()!==$(this).attr('oldvalue')){
				$.post( 'db_read_port', { id: $( '#POD_id' ).val() }, function( result ){
					if( result === '' ){
						$( '#POD_id' ).val( "" );
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Customer Code Not Found.</div>';
						$('#alert').html( message );						
					} else {
						$( '#POD_description' ).val( result );
					}
				});
			}
		}
	});

	$( '#sales_id' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
			
			} else {
				$( '#prepared' ).focus();
			}
		}
	});

	$( '#sales_id' ).bind( 'blur', function( ) {
		if ($( '#sales_id' ).val()===''){
			$( '#sales_description' ).val( "" );
		}else{
			if($(this).val()!==$(this).attr('oldvalue')){
				$.post( 'db_read_sales', { id: $( '#sales_id' ).val() }, function( result ){
					if( result === '' ){
						$( '#sales_id' ).val( "" );
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Customer Code Not Found.</div>';
						$('#alert').html( message );						
					} else {
						$( '#sales_description' ).val( result );
					}
				});
			}
		}
	});

	$( '#prepared' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
			
			} else {
				$( '#approved' ).focus();
			}
		}
	});

	$( '#approved' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
			
			} else {
				$( '#remarks' ).focus();
			}
		}
	});

	////////////////////////////////////////////////////////////////
	//
	// Mengatur tab revenue
	//
	////////////////////////////////////////////////////////////////

	$( '.detail_transaksi' ).live( 'keydown', function( e ){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if ( e.which === kodehapusbaris ){
			e.preventDefault();
			var xobj = document.getElementById('hapus-baris-revenue-'+num);
			if (xobj != null){
				$( '#hapus-baris-revenue-'+( Number( num ) ) ).click();
			}else{
				$("input[id*='" + "revenue-"+num + "']").val('');
			}
			setfocus(Number(num),'charges_code','revenue');
		}
	});

	////////////////////////////////////////////////////////////////
	//
	// Press enter then move from x to y with default value if empty
	//
	////////////////////////////////////////////////////////////////


	$( '.revenue-charges_code' ).live( 'blur', function(){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if($( this ).val()==''){
			$( '#'+asal.replace( 'charges_code', 'charges_description' ) ).val( '' );
		}else{
			if ($( this ).val()!==$( this ).attr('oldvalue')){
				$.post( 'db_read_charges', { id: $( this ).val() }, function( result ){
					
					if( result === ''  || result===null){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Charges Code Not Found.</div>';
						$('#alert').html( message );
						$( '#'+asal.replace( 'charges_code', 'charges_description' ) ).val( '' );
						$( '#'+asal ).val( '' );
						$(this).val('');
						$(this).attr("oldvalue",'');
						$( '#'+asal ).focus();
					}else{
						var data = unserialize( result );
						$('#alert').html( "" );	
						$( '#'+asal.replace( 'charges_code', 'charges_description' ) ).val( data['description'] );
					}
				});
			}
		}
	});

	$( '.revenue-charges_code' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr("oldvalue",$(this).val());
				$( '#cari-'+ asal ).click();
			} else {
				$( '#'+asal.replace( 'charges_code', 'customer_id' ) ).focus();
			}
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'charges_code','revenue');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'charges_code','revenue');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'name','revenue');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus2((Number(num)),'rata_charges','revenue');
			}
		}
	});

	$( '.revenue-customer_id' ).live( 'blur', function(){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if($( this ).val()==''){
			$( '#'+asal.replace( 'customer_id', 'customer_description' ) ).val( '' );
		}else{
			if ($( this ).val()!==$( this ).attr('oldvalue')){
				$.post( 'db_read_customer', { id: $( this ).val() }, function( result ){
					
					if( result === ''  || result===null){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Customer ID Not Found.</div>';
						$('#alert').html( message );
						$( '#'+asal.replace( 'customer_id', 'customer_description' ) ).val( '' );
						$( '#'+asal ).val( '' );
						$(this).val('');
						$(this).attr("oldvalue",'');
						$( '#'+asal ).focus();
					}else{
						var data = unserialize( result );
						$('#alert').html( "" );	
						$( '#'+asal.replace( 'customer_id', 'customer_description' ) ).val( data['name'] );
					}
				});
			}
		}
	});

	$( '.revenue-customer_id' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr("oldvalue",$(this).val());
				$( '#cari-'+ asal ).click();
			} else {
				$( '#'+asal.replace( 'customer_id', 'unit_id' ) ).focus();
			}
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'customer_id','revenue');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'customer_id','revenue');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'name','revenue');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus2((Number(num)),'charges_code','revenue');
			}
		}
	});
	
	$( '.revenue-unit_id' ).live( 'blur', function(){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if($( this ).val()==''){
			$( '#'+asal.replace( 'unit_id', 'unit_id' ) ).val( '' );
		}else{
			if ($( this ).val()!==$( this ).attr('oldvalue')){
				$.post( 'db_read_unit', { id: $( this ).val() }, function( result ){
					
					if( result === ''  || result===null){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Unit ID Not Found.</div>';
						$('#alert').html( message );
						$( '#'+asal.replace( 'unit_id', 'unit_id' ) ).val( '' );
						$( '#'+asal ).val( '' );
						$(this).val('');
						$(this).attr("oldvalue",'');
						$( '#'+asal ).focus();
					}else{
						var data = unserialize( result );
						$('#alert').html( "" );	
						$( '#'+asal.replace( 'unit_id', 'unit_id' ) ).val( data['description'] );
					}
				});
			}
		}
	});

	$( '.revenue-unit_id' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr("oldvalue",$(this).val());
				$( '#cari-'+ asal ).click();
			} else {
				$( '#'+asal.replace( 'unit_id', 'currency_id' ) ).focus();
			}
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'unit_id','revenue');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'unit_id','revenue');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'name','revenue');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus2((Number(num)),'customer_id','revenue');
			}
		}
	});

	$( '.revenue-currency_id' ).live( 'blur', function(){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if($( this ).val()==''){
			$( '#'+asal.replace( 'currency_id', 'currency_id' ) ).val( '' );
		}else{
			if ($( this ).val()!==$( this ).attr('oldvalue')){
				$.post( 'db_read_currency', { id: $( this ).val() }, function( result ){
					
					if( result === ''  || result===null){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Currency ID Not Found.</div>';
						$('#alert').html( message );
						$( '#'+asal.replace( 'currency_id', 'currency_id' ) ).val( '' );
						$( '#'+asal ).val( '' );
						$(this).val('');
						$(this).attr("oldvalue",'');
						$( '#'+asal ).focus();
					}else{
						var data = unserialize( result );
						$('#alert').html( "" );	
						$( '#'+asal.replace( 'currency_id', 'currency_id' ) ).val( data['currency_code'] );
					}
				});
			}
		}
	});

	$( '.revenue-currency_id' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr("oldvalue",$(this).val());
				$( '#cari-'+ asal ).click();
			} else {
				$( '#'+asal.replace( 'currency_id', 'rata_charges' ) ).focus();
			}
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'currency_id','revenue');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'currency_id','revenue');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'name','revenue');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus2((Number(num)),'unit_id','revenue');
			}
		}
	});


	$( '.revenue-rata_charges' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
	
		if ( e.which === 13 ){
			e.preventDefault;
			if( Number( $( '#baris-revenue' ).val() ) === ( Number( num ) + 1 ) ){
				$( '#tambah-baris-revenue-'+num ).click();
			}
			setfocus(Number(num)+1,'charges_code','revenue');
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'rata_charges','revenue');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'rata_charges','revenue');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num)+1,'charges_code','revenue');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'etd','revenue');
			}
		}
	});

	$( '.revenue-rata_charges' ).live( 'keydown', function( e ){
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== '' ){
				var asal = $( this ).attr( 'id' );
				var num = asal.split( '-' )[ 1 ];
				console.log( $( '#baris-revenue' ).val() == ( Number( num ) + 1 ) );
				if( Number( $( '#baris-revenue' ).val() ) === ( Number( num ) + 1 ) ){
					$( '#tambah-baris-revenue-'+num ).click();
				}
				$( '#revenue-'+( Number( num ) + 1 )+'-charges_code' ).focus();
			}
		}
	});


	////////////////////////////////////////////////////////////////
	//
	//   Cost Grid
	// 
	////////////////////////////////////////////////////////////////
	
	$( '.cost-charges_code' ).live( 'blur', function(){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if($( this ).val()==''){
			$( '#'+asal.replace( 'charges_code', 'charges_description' ) ).val( '' );
		}else{
			if ($( this ).val()!==$( this ).attr('oldvalue')){
				$.post( 'db_read_charges', { id: $( this ).val() }, function( result ){
					
					if( result === ''  || result===null){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Charges Code Not Found.</div>';
						$('#alert').html( message );
						$( '#'+asal.replace( 'charges_code', 'charges_description' ) ).val( '' );
						$( '#'+asal ).val( '' );
						$(this).val('');
						$(this).attr("oldvalue",'');
						$( '#'+asal ).focus();
					}else{
						var data = unserialize( result );
						$('#alert').html( "" );	
						$( '#'+asal.replace( 'charges_code', 'charges_description' ) ).val( data['description'] );
					}
				});
			}
		}
	});

	$( '.cost-charges_code' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr("oldvalue",$(this).val());
				$( '#cari-'+ asal ).click();
			} else {
				$( '#'+asal.replace( 'charges_code', 'vendor_id' ) ).focus();
			}
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'charges_code','cost');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'charges_code','cost');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'name','cost');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus2((Number(num)),'rata_charges','cost');
			}
		}
	});

	$( '.cost-vendor_id' ).live( 'blur', function(){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if($( this ).val()==''){
			$( '#'+asal.replace( 'vendor_id', 'vendor_description' ) ).val( '' );
		}else{
			if ($( this ).val()!==$( this ).attr('oldvalue')){
				$.post( 'db_read_pr_air', { id: $( this ).val() }, function( result ){
					
					if( result === ''  || result===null){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Vendor ID Not Found.</div>';
						$('#alert').html( message );
						$( '#'+asal.replace( 'vendor_id', 'vendor_description' ) ).val( '' );
						$( '#'+asal ).val( '' );
						$(this).val('');
						$(this).attr("oldvalue",'');
						$( '#'+asal ).focus();
					}else{
						var data = unserialize( result );
						$('#alert').html( "" );	
						$( '#'+asal.replace( 'vendor_id', 'vendor_description' ) ).val( data['company_name'] );
					}
				});
			}
		}
	});

	$( '.cost-vendor_id' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr("oldvalue",$(this).val());
				$( '#cari-'+ asal ).click();
			} else {
				$( '#'+asal.replace( 'vendor_id', 'unit_id' ) ).focus();
			}
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'vendor_id','cost');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'vendor_id','cost');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'name','cost');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus2((Number(num)),'charges_code','cost');
			}
		}
	});
	
	$( '.cost-unit_id' ).live( 'blur', function(){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if($( this ).val()==''){
			$( '#'+asal.replace( 'unit_id', 'unit_id' ) ).val( '' );
		}else{
			if ($( this ).val()!==$( this ).attr('oldvalue')){
				$.post( 'db_read_unit', { id: $( this ).val() }, function( result ){
					
					if( result === ''  || result===null){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Unit ID Not Found.</div>';
						$('#alert').html( message );
						$( '#'+asal.replace( 'unit_id', 'unit_id' ) ).val( '' );
						$( '#'+asal ).val( '' );
						$(this).val('');
						$(this).attr("oldvalue",'');
						$( '#'+asal ).focus();
					}else{
						var data = unserialize( result );
						$('#alert').html( "" );	
						$( '#'+asal.replace( 'unit_id', 'unit_id' ) ).val( data['description'] );
					}
				});
			}
		}
	});

	$( '.cost-unit_id' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr("oldvalue",$(this).val());
				$( '#cari-'+ asal ).click();
			} else {
				$( '#'+asal.replace( 'unit_id', 'currency_id' ) ).focus();
			}
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'unit_id','cost');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'unit_id','cost');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'name','cost');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus2((Number(num)),'vendor_id','cost');
			}
		}
	});

	$( '.cost-currency_id' ).live( 'blur', function(){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if($( this ).val()==''){
			$( '#'+asal.replace( 'currency_id', 'currency_id' ) ).val( '' );
		}else{
			if ($( this ).val()!==$( this ).attr('oldvalue')){
				$.post( 'db_read_currency', { id: $( this ).val() }, function( result ){
					
					if( result === ''  || result===null){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Currency ID Not Found.</div>';
						$('#alert').html( message );
						$( '#'+asal.replace( 'currency_id', 'currency_id' ) ).val( '' );
						$( '#'+asal ).val( '' );
						$(this).val('');
						$(this).attr("oldvalue",'');
						$( '#'+asal ).focus();
					}else{
						var data = unserialize( result );
						$('#alert').html( "" );	
						$( '#'+asal.replace( 'currency_id', 'currency_id' ) ).val( data['currency_code'] );
					}
				});
			}
		}
	});

	$( '.cost-currency_id' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr("oldvalue",$(this).val());
				$( '#cari-'+ asal ).click();
			} else {
				$( '#'+asal.replace( 'currency_id', 'rata_charges' ) ).focus();
			}
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'currency_id','cost');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'currency_id','cost');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'name','cost');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus2((Number(num)),'unit_id','cost');
			}
		}
	});


	$( '.cost-rata_charges' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
	
		if ( e.which === 13 ){
			e.preventDefault;
			if( Number( $( '#baris-cost' ).val() ) === ( Number( num ) + 1 ) ){
				$( '#tambah-baris-cost-'+num ).click();
			}
			setfocus(Number(num)+1,'charges_code','cost');
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'rata_charges','cost');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'rata_charges','cost');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num)+1,'charges_code','cost');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'etd','cost');
			}
		}
	});

	$( '.cost-rata_charges' ).live( 'keydown', function( e ){
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== '' ){
				var asal = $( this ).attr( 'id' );
				var num = asal.split( '-' )[ 1 ];
				console.log( $( '#baris-cost' ).val() == ( Number( num ) + 1 ) );
				if( Number( $( '#baris-cost' ).val() ) === ( Number( num ) + 1 ) ){
					$( '#tambah-baris-cost-'+num ).click();
				}
				$( '#cost-'+( Number( num ) + 1 )+'-charges_code' ).focus();
			}
		}
	});

	////////////////////////////////////////////////////////////////
	//
	// Retrieve data
	//
	////////////////////////////////////////////////////////////////
	$( '#gp_no' ).bind( 'blur', function() {
		if ($(this).val()!==$(this).attr('oldvalue')){
			$.post( 'db_read', { id: $( '#gp_no' ).val() }, function( result ){
				if( result === '' ){
					
					var id = $( '#gp_no' ).val();
					initializex();
					$( '#gp_no' ).val( id );
					$( '#order_date' ).focus();

				} else {
					var data = unserialize( result );

					var tanggal = data[ 'order_date' ].split( "-" );
					var tgl = tanggal[ 2 ];
					var bln = tanggal[ 1 ];
					var thn = tanggal[ 0 ];
					$( "#order_date" ).val( tgl + "-" + bln + "-" + thn );
					$( "#MAWB_no" ).val( data[ 'MAWB_no' ] );
					$( "#POD_id" ).val( data[ 'POD_id' ] );
					$( "#POD_description" ).val( data[ 'POD_description' ] );
					$( "#POL_id" ).val( data[ 'POL_id' ] );
					$( "#POL_description" ).val( data[ 'POL_description' ] );
					var tanggal = data[ 'etd' ].split( "-" );
					var tgl = tanggal[ 2 ];
					var bln = tanggal[ 1 ];
					var thn = tanggal[ 0 ];
					$( "#etd" ).val( tgl + "-" + bln + "-" + thn );
					$( "#sales_id" ).val( data[ 'sales_id' ] );
					$( "#sales_description" ).val( data[ 'sales_description' ] );
					$( "#prepared" ).val( data[ 'prepared' ] );
					$( "#approved" ).val( data[ 'approved' ] );
					$( "#remarks" ).val( data['remarks'] );		
					$( "#total_revenue" ).val( parseFloat( data[ 'total_revenue' ] ) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
					$( "#total_cost" ).val( parseFloat( data[ 'total_cost' ] ) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });			
					
					///////////////////////////////////////////////////////////////////////////////////////
					////
					////	Menampilkan data pada grid revenue
					////
					////////////////////////////////////////////////////////////////////////////////////////
					if( data['revenue']!=null)
					{
						$( '.revenue-row' ).remove();
						var i = 0;
						for(; data['revenue'][i]; i++ ){
							$( '#transaksix' ).append( add_row_revenue( i, 1 ) );
							$( '#revenue-'+i+'-charges_code' ).val( data['revenue'][i][ 'charges_code' ] );
							$( '#revenue-'+i+'-charges_description' ).val( data['revenue'][i][ 'charges_description' ] );
							$( '#revenue-'+i+'-customer_id' ).val( data['revenue'][i][ 'customer_id' ] );
							$( '#revenue-'+i+'-customer_description' ).val( data['revenue'][i][ 'customer_description' ] );
							$( '#revenue-'+i+'-unit_id' ).val( data['revenue'][i][ 'unit_id' ] );
							$( '#revenue-'+i+'-currency_id' ).val( data['revenue'][i][ 'currency_id' ] );
							$( '#revenue-'+i+'-rata_charges' ).val(parseFloat( data['revenue'][i][ 'rata_charges' ] ) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 } );
							$( '#baris-revenue' ).val( i + 1 );
						}
						$( '#transaksix' ).append( add_row_revenue( i, 0 ) );
					}
					///////////////////////////////////////////////////////////////////////////////////////
					////
					////	Menampilkan data pada grid cost
					////
					////////////////////////////////////////////////////////////////////////////////////////
					if( data['cost']!=null)
					{
						$( '.cost-row' ).remove();
						var i = 0;
						for(; data['cost'][i]; i++ ){
							$( '#transaksix2' ).append( add_row_cost( i, 1 ) );
							$( '#cost-'+i+'-charges_code' ).val( data['cost'][i][ 'charges_code' ] );
							$( '#cost-'+i+'-charges_description' ).val( data['cost'][i][ 'charges_description' ] );
							$( '#cost-'+i+'-vendor_id' ).val( data['cost'][i][ 'vendor_id' ] );
							$( '#cost-'+i+'-vendor_description' ).val( data['cost'][i][ 'vendor_description' ] );
							$( '#cost-'+i+'-unit_id' ).val( data['cost'][i][ 'unit_id' ] );
							$( '#cost-'+i+'-currency_id' ).val( data['cost'][i][ 'currency_id' ] );
							$( '#cost-'+i+'-rata_charges' ).val(parseFloat( data['cost'][i][ 'rata_charges' ] ) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 } );
							$( '#baris-cost' ).val( i + 1 );
						}
						$( '#transaksix2' ).append( add_row_cost( i, 0 ) );
					}
					$( '.ubah, .hapus, .cetak' ).show();
					$('#cetak').attr('href', 'pdf?gp_no=' + $('#gp_no').val());
					$( '.simpan' ).hide();
				}
			});
		}
	});
	$( '#gp_no' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){	
				nomorbaru();
			} else {
				$('#order_date').focus();
			}
		}
	});

	$( '#approved' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			
			setfocus(0,'charges_code','revenue');
			
		}
	});


	$( '#approved' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			
			setfocus(0,'charges_code','cost');
			
		}
	});


	////////////////////////////////////////////////////////////////
	//
	// Tambah Hapus Baris TTUS
	//
	////////////////////////////////////////////////////////////////
	$( '.tambah-baris-revenue' ).live( 'click', function(){
		var str = $( this ).attr( 'id' );
		var num = str.replace( "tambah-baris-revenue-", "" );
	
		// Change action
		$( "#action"+str.replace( "tambah", "" ) ).html(
			'<a href="#void()" class="tombol tombol-small hapus-baris hapus-baris-revenue" id="hapus-baris-revenue-'+num+'"><i class="icon-remove"></i></a>'
		);

		// Insert row
		$( '#transaksix' ).append(
			add_row_revenue( Number( str.replace( 'tambah-baris-revenue-', '' ) ) + 1, 0 )
		);
		setfocus(Number(num)+1,'code','revenue');
	});

	$( '.hapus-baris-revenue' ).live( 'click', function(){
		if( confirm( 'Anda yakin untuk menghapus baris ini?' ) ){
			var str = $( this ).attr( 'id' );
			var num = str.split('-')[3];
			$( "#"+str.replace( "hapus-baris-", "" ) ).remove();
			setfocus(Number(num),'code','revenue');
		}
	});

	$( '.tambah-baris-cost' ).live( 'click', function(){
		var str = $( this ).attr( 'id' );
		var num = str.replace( "tambah-baris-cost-", "" );
	
		// Change action
		$( "#action"+str.replace( "tambah", "" ) ).html(
			'<a href="#void()" class="tombol tombol-small hapus-baris hapus-baris-cost" id="hapus-baris-cost-'+num+'"><i class="icon-remove"></i></a>'
		);

		// Insert row
		$( '#transaksix2' ).append(
			add_row_cost( Number( str.replace( 'tambah-baris-cost-', '' ) ) + 1, 0 )
		);
		setfocus(Number(num)+1,'code','cost');
	});

	$( '.hapus-baris-cost' ).live( 'click', function(){
		if( confirm( 'Anda yakin untuk menghapus baris ini?' ) ){
			var str = $( this ).attr( 'id' );
			var num = str.split('-')[3];
			$( "#"+str.replace( "hapus-baris-", "" ) ).remove();
			setfocus(Number(num),'code','cost');
		}
	});





	////////////////////////////////////////////////////////////////
	//
	// Button Behavior
	//
	////////////////////////////////////////////////////////////////
	$( '.simpan' ).click( function(){
		if( $( '#gp_no' ).val() !== '' ){
			$.post( 'db_create', $( 'form' ).serialize(), function( result ){
				success=unserialize(result);
				if( success['status'] ==='Error' ){
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Data '+$( '#gp_no' ).val()+' Failed. '+ success['ket'] +'</div>';
					$('#alert').html( message );					
					if (success['ket']=='Data dengan nomor order yang sama sudah ada.'){
						nomorbaru();
					}
				}else if( success['status'] ){
					var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Data '+$( '#gp_no' ).val()+' Complete.</div>';
					$('#alert').html( message );
					initializex();
				} else {
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data '+$( '#gp_no' ).val()+' Failed.</div>';
					$('#alert').html( message );
				}
			});
		} else {
			var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data Required.</div>';
			$('#alert').html( message );
		}
	});

	$( '.ubah' ).click( function(){
		if( $( '#gp_no' ).val() !== ''  ){
			$.post( 'db_update', $( 'form' ).serialize(), function( result ){
				success=unserialize(result);
				if( success['status'] ==='Error' ){
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Data '+$( '#gp_no' ).val()+'  Failed. '+ success['ket'] +'</div>';
					$('#alert').html( message );					
					if (success['ket']=='Data dengan nomor transaksi yang sama sudah ada.'){
						nomorbaru();
					}
				}else if( success['status'] ){
					var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Data '+$( '#gp_no' ).val()+' Complete.</div>';
					$('#alert').html( message );
					//$( '#cetak' ).attr( 'href', 'pdf?id_jurnal=' + $('#id_jurnal').val()+'&id_transaksi=' + $('#id_transaksi').val());					
					//$( '.cetak' ).click();
					initializex();
				} else {
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data '+$( '#gp_no' ).val()+' Failed.</div>';
					$('#alert').html( message );
				}
			});
		} else {
			var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data Required.</div>';
			$('#alert').html( message );
		}
	});

	$( '.hapus' ).click( function(){
		if( confirm( 'Are You Sure Want Delete This Data?' ) ){
			if( $( '#gp_no' ).val() !== '' ){
				$.post( 'db_delete', { id: $( '#gp_no' ).val() }, function( result ){
					success=unserialize(result);
					if( success['status'] ==='Error' ){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Data '+$( '#gp_no' ).val()+' Failed. '+ success['ket'] +'</div>';
						$('#alert').html( message );					
					}else if( success['status'] ){
						var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Data '+$( '#gp_no' ).val()+' Complete.</div>';
						$('#alert').html( message );
						initializex();
					} else {
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data '+$( '#gp_no' ).val()+'  Failed.</div>';
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
		if (($('#gp_no').val()==='') ){
			window.close();
		}else{
			if( confirm( 'Are You Sure Cancel This Transaction?' ) ){
				initializex();
			}
		}
	});
	$( '.cetak' ).click( function(){
		$( '#cetak' ).attr( 'href', 'pdf?id_jurnal=' + $('#id_jurnal').val()+'&id_transaksi=' + $('#id_transaksi').val());					
	});

});
</script>