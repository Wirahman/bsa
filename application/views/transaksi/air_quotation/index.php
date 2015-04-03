<div class="container">
	<h2 class="judul">Air Quotation</h2>
	<div id="alert"></div>
	<form class="form-horizontal">
		<fieldset>
			<div class="row">
				<div class="control-group span6" style="height:25px">
					<label class="control-label" for="quot_id">Quotation #: </label>
					<div class="controls">
						<div class="input-append">
						<input type="text" name="quot_id" id="quot_id" oldvalue="" browseobj="cari_quot_id" />
						<a style="display:none" class="add-on browse" id="cari_quot_id" href="cari/ref/quot_id/tipe/air_quot" title="Klik untuk mencari Quotation Number">
						<i class="icon-search"></i></a></div>
					</div>
				</div>
				<div class="control-group span6" style="height:25px">
					<label class="control-label" for="date">Date: </label>
					<div class="controls">
						<input type="text" name="date" id="date" class="date tanggal" />
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="control-group span6" style="height:25px">
					<label class="control-label" for="cus_id">Customer ID: </label>
					<div class="controls">
						<div class="input-append">
							<input type="text" name="cus_id" id="cus_id" oldvalue="" browseobj="cari_kode_customer" style="width:50px" />
							<input type="text" style="width:400px" readonly="readonly" name="customer_name" id="customer_name" />
							<a style="display:none" class="add-on browse" id="cari_kode_customer" href="cari/ref/cus_id/tipe/customer" title="Klik untuk mencari Kode Customer">
							<i class="icon-airrch"></i></a>				
						</div>
					</div>
				</div>
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="service">Service :</label>
					<div class="controls">
						<select name="service" id="service" class="service">
							<option value="-">Select Service</option>
							<option value="Door to Door">Door to Door</option>
							<option value="Door to Port">Door to Port</option>
							<option value="Port to Door">Port to Door</option>
							<option value="Port to Port">Port to Port</option>
-->						</select>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="attn">Attn To :</label>
					<div class="controls">
						<input type="text" name="attn" id="attn" />
					</div>
				</div>
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="route">Route :</label>
					<div class="controls">
						<input type="text" name="route" id="route" />
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="re">Re :</label>
					<div class="controls">
						<input type="text" name="re" id="re" />
					</div>
				</div>

				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="commodity">Commodity :</label>
					<div class="controls">
						<div class="input-append">
							<input type="text" name="commodity" id="commodity" oldvalue="" browseobj="cari_commodity" style="width:50px" />
							<input type="text" style="width:200px" readonly="readonly" name="commodity_class" id="commodity_class"  />
							<a style="display:none" class="add-on browse" id="cari_commodity" href="cari/ref/commodity/tipe/commclass" title="Klik untuk mencari Commodity Class">
							<i class="icon-search"></i></a>				
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="regards">Regards :</label>
					<div class="controls">
						<input type="text" name="regards" id="regards" />
					</div>
				</div>

				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="freight">Freight :</label>
					<div class="controls">
						<div class="input-append">
							<input type="text" name="freight" id="freight" oldvalue="" browseobj="cari_freight" style="width : 50px" />
							<input type="text" style="width:200px" readonly="readonly" name="freight_desc" id="freight_desc"  />
							<a style="display:none" class="add-on browse" id="cari_freight" href="cari/ref/freight/tipe/freight_term" title="Klik untuk mencari Freight Code">
							<i class="icon-search"></i></a>				
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<<div class="control-group span6" style="height:25px">
					<label class="control-label" for="valid_from">Validity From: </label>
					<div class="controls">
						<input type="text" name="valid_from" id="valid_from" class="valid_from tanggal" />
					</div>
				</div>
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="sales_code">Sales :</label>
					<div class="controls">
						<div class="input-append">
							<input type="text" name="sales_code" id="sales_code" oldvalue="" browseobj="cari_sales_code" style="width : 50px" />
							<input type="text" style="width:200px" readonly="readonly" name="nama_sales" id="nama_sales"  />
							<a style="display:none" class="add-on browse" id="cari_sales_code" href="cari/ref/sales_code/tipe/sal" title="Klik untuk mencari Kode Sales">
							<i class="icon-search"></i></a>				
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="span12 tab-pane active ju" style="height:300px" id="ju">
					<input type="hidden" id="baris-air-quotation" name="baris-air-quotation" value="1" />
					<table class="table">
						<thead>
							<tr><th>Vendor ID</th><th>Vendor Name</th><th>Charges Code</th><th>Charges Description</th><th>Code</th><th>Port of Loading</th><th>Code</th><th>Destination</th><th>Unit Code</th><th>Unit Description</th><th>Currency Code</th><th>Currency Description</th><th>Selling Rate</th><th>Approval Number</th><th></th></tr>
						</thead>
						<tbody id="transaksix">
						</tbody>
					</table>
				</div>
			</div>
			
			<div class="row">
				<div class="control-group span3" style="height:200px">
					<label class="control-label" for="term_note"></label>
					<div class="controls">
					Term and Condition :
					<div class="input-append">
						<textarea type="text" style="width:200px" name="term_note" id="term_note"></textarea>
						<a style="display:none" ></i></a>
					</div>
					</div>
					<label class="control-label" for="sales_note"></label>
					<div class="controls">
					Sales Note :
					<div class="input-append">
						<textarea type="text" style="width:200px" name="sales_note" id="sales_note"></textarea>
						<a style="display:none" ></i></a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="control-group span3" style="height:200px">
					<label class="control-label" for="manager_note"></label>
					<div class="controls">
					Manager Note :
					<div class="input-append">
						<textarea type="text" style="width:200px" name="manager_note" id="manager_note"></textarea>
						<a style="display:none" ></i></a>
					</div>
				</div>
				<label class="control-label" for="director_note"></label>
					<div class="controls">
					Director Note :
					<div class="input-append">
						<textarea type="text" style="width:200px" name="director_note" id="director_note"></textarea>
						<a style="display:none" ></i></a>
					</div>
				</div>
			</div>
			</div>
			</div>
			
			<div class="form-actions btn-group;control-group span12">
				<?php if( in_array( 'create_air_quotation', unserialize($capabilities) ) ){ ?>
				<a href="#" class="btn btn-primary simpan" style="top:-15px"><i class="icon-ok icon-white"></i> Save</a>
				<?php } ?>
				<a href="#" class="btn cetak browse" id="cetak" style="top:-15px"><i class="icon-print"></i> Print</a>
				<?php if( in_array( 'update_air_quotation', unserialize($capabilities) ) ){ ?>
				<a href="#" class="btn btn-primary ubah" style="top:-15px"><i class="icon-pencil icon-white"></i> Update</a>
				<?php } ?>
				<?php if( intval($role)!= 1){ ?>
					<?php if( in_array( 'delete_air_quotation', unserialize($capabilities) ) ){ ?>
					<a href="#" class="btn btn-danger hapus" style="top:-15px"><i class="icon-trash icon-white"></i> Delete</a>
					<?php } ?>
				<?php } ?>
				<a href="#" class="btn batal" style="top:-15px"	><i class="icon-refresh"></i> Cancel</a>
			</div>
		</fieldset>
	</form>
</div>
<style type="text/css">
#ju{
overflow-x:auto;
}
#ju{
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
// Initialize
preventempty="quot_id,date,cus_id,service,attn,route,re,commodity,regards,freight,valid_from,sales_code";
preventemptystatus="1,1,1,1,1,1,1,1,1,1,1,1";
function initialize(){
	$( '#quot_id' ).focus();
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
	$('.air-quotation-row').remove();
	$( '#transaksix' ).append(
		add_row_air_quotation( 0, 0 )
	);
	var d = new Date();
	var tgl = d.getDate();
	if( tgl < 10 ) tgl = "0" + tgl;
	var bln = d.getMonth() + 1;
	if( bln < 10 ) bln = "0" + bln;
	var thn = d.getFullYear();
	var tanggal = tgl+"-"+bln+"-"+thn;
	$( "#date" ).val( tanggal );
	show_user_name('');
	nomorbaru();
}

function nomorbaru()
{
	$.post( 'db_lastid', {tanggal : $( '#date' ).val() }, function( result ){
		if( result === '' ){
			var pecah=$( '#date' ).val().split('-');
			$( '#quot_id' ).val( pecah[2] + pecah[1] + '0001' );
		} else {
			var lastid = ( Number( result ) + 1 ) + '';
			for( var i = lastid.length; i < 10; i++ ){
				lastid = '0' + lastid;
			}
			$( '#quot_id' ).val( lastid );
		}
	});
}

// function get_selling_rate(num)
// {
	// var tgldatefrom = $( '#valid_from').val();
function get_selling_rate(num)
{
	var tgldatefrom = $ ('#valid_from').val();
	
	// var tanggal = tgldatefrom.split( "-" );
	// var tgl = tanggal[ 0 ];
	// var bln = tanggal[ 1 ];
	// var thn = tanggal[ 2 ];
	var tanggal = tgldatefrom.split("-");
	var tgl = tanggal [ 0 ];
	var bln = tanggal [ 1 ];
	var thn = tanggal [ 2 ];
	
	// var tglawal =  thn +"-"+bln+"-"+tgl;
	// var tglakhir = thn1 +"-"+bln1+"-"+tgl1;
	var tglawal = thn+"-"+bln+"-"+tgl;
	var tglakhir = thn+"-"+bln+"-"+tgl;
	
		// var vendorid = $('#sea-quotation-'+num+'-vendor_id').val();
		// var charges_code = $('#sea-quotation-'+num+'-charges_code').val();
		// var port_awal = $('#sea-quotation-'+num+'-code_awal').val();
		// var port_akhir = $('#sea-quotation-'+num+'-code_akhir').val();
	var vendorid = $('$air-quotation-'+num+'-vendor_id' ).val();
	var charges_code = $('$air-quotation-'+num+'-charges_code' ).val();
	var port_awal = $('$air-quotation-'+num+'-code_awal' ).val();
	var port_akhir = $('$air-quotation-'+num+'-code_akhir' ).val();
		// if(tglawal!="" && tglakhir!="" && vendorid!="" && charges_code!="" && port_awal!="" && port_akhir!="")
		// {		
		// $.post( 'load_selling_rate', { tgl_from: tglawal , tgl_until: tglakhir , charges: charges_code , vendor_id: vendorid , portawal : port_awal, portakhir: port_akhir }, function( result){
				// if(result===''||result===null){
					// var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Selling Rate Not Found. Please Check Again.</div>';
					// $('#alert').html( message );
		if(tglawal!="" && tglakhir!="" && vendorid!="" && charges_code!="" && port_awal!="" && port_akhir!="")
		{
			$.post( 'load_selling_rate', { tgl_from: tglawal , tgl_until: tglakhir , charges: charges_code , vendor_id: vendorid , portawal : port_awal, portakhir: port_akhir }, function( result){
				if(result===''||result===null){
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Selling Rate Not Found. Please Check Again.</div>';
					$('#alert').html( message );
					// $('#sea-quotation-'+num+'-vendor_id').focus();
					// var selling_rate = $('#sea-quotation-'+num+'-selling_rate').val();
					// $('#sea-quotation-'+num+'-selling_rate').val('');
					$('#air-quotation-'+num+'-vendor_id').focus();
					var selling_rate = $('#air-quotation-'+num+'-selling_rate').val();
					$('#air-quotation-'+num+'-selling_rate').val('');
				// }else{
					// var data = eval(result);	
					// data = data[0];
					// console.log(data);
					// $('#alert').html( "" );
					}else{
					//var data = unserialize (result);
					var data = eval(result);
					data = data[0];
					console.log(data);
					$('#alert').html("");
					// $('#sea-quotation-'+num+'-selling_rate').val(data['selling_rate']);
					// $('#sea-quotation-'+num+'-unit_code').val(data['unit_code']);
					// $('#sea-quotation-'+num+'-unit_description').val(data['unit_description']);
					// $('#sea-quotation-'+num+'-currency_code').val(data['currency_code']);
					// $('#sea-quotation-'+num+'-currency_description').val(data['currency_description']);
					
					$('#air-quotation-'+num+'-selling_rate').val(data['selling_rate']);
					$('#air-quotation-'+num+'-unit_code').val(data['unit_code']);
					$('#air-quotation-'+num+'-unit_description').val(data['unit_description']);
					$('#air-quotation-'+num+'-currency_code').val(data['currency_code']);
					$('#air-quotation-'+num+'-currency_description').val(data['currency_description']);
			
			// }
		// });
	// }

// }
			}
		});
	}
}
function add_row_air_quotation( i, action ){
	var tabel = '<tr class="air-quotation-row" id="air-quotation-'+i+'">';
	
	tabel += '<td><div class="input-append"><input style="width:50px" type="text" name="air_quotation['+i+'][vendor_id]" id="air-quotation-'+i+'-vendor_id" class="air-quotation-vendor_id detail_jadwal" oldvalue="" browseobj="cari-air-quotation-'+i+'-vendor_id" /><a style="display:none" class="add-on browse vendor_id detail_jadwal" id="cari-air-quotation-'+i+'-vendor_id" href="cari/ref/air-quotation-'+i+'-vendor_id/tipe/br_air" title="Klik untuk mencari vendor_id"><i class="icon-airrch"></i></a></div></td>';
	
	tabel += '<td><input style="width:200px" readonly type="text" name="air_quotation['+i+'][vendor_name]" id="air-quotation-'+i+'-vendor_name" class="air-quotation-vendor_name detail_jadwal" /></td>';
	
	tabel += '<td><div class="input-append"><input style="width:50px" type="text" name="air_quotation['+i+'][charges_code]" id="air-quotation-'+i+'-charges_code" class="air-quotation-charges_code charges_code detail_jadwal" oldvalue="" browseobj="cari-air-quotation-'+i+'-charges_code" /><a style="display:none" class="add-on browse charges_code detail_jadwal" id="cari-air-quotation-'+i+'-charges_code" href="cari/ref/air-quotation-'+i+'-charges_code/tipe/chra" title="Klik untuk mencari charges_code"><i class="icon-airrch"></i></a></div></td>';
	
	tabel += '<td><input style="width:200px" readonly type="text" name="air_quotation['+i+'][charges_desc]" id="air-quotation-'+i+'-charges_desc" class="air-quotation-charges_desc detail_jadwal" /></td>';
	
	
	tabel += '<td><div class="input-append"><input style="width:50px" type="text" name="air_quotation['+i+'][code_awal]" id="air-quotation-'+i+'-code_awal" class="air-quotation-code_awal detail_jadwal" oldvalue="" browseobj="cari-air-quotation-'+i+'-code_awal" /><a style="display:none" class="add-on browse code_awal detail_jadwal" id="cari-air-quotation-'+i+'-code_awal" href="cari/ref/air-quotation-'+i+'-code_awal/tipe/air" title="Klik untuk mencari code_awal"><i class="icon-airrch"></i></a></div></td>';
	
	tabel += '<td><input style="width:200px" readonly type="text" name="air_quotation['+i+'][port_awal]" id="air-quotation-'+i+'-port_awal" class="air-quotation-port_awal detail_jadwal" /></td>';
	
	
	tabel += '<td><div class="input-append"><input style="width:50px" type="text" name="air_quotation['+i+'][code_akhir]" id="air-quotation-'+i+'-code_akhir" class="air-quotation-code_akhir detail_jadwal" oldvalue="" browseobj="cari-air-quotation-'+i+'-code_akhir" /><a style="display:none" class="add-on browse code_akhir detail_jadwal" id="cari-air-quotation-'+i+'-code_akhir" href="cari/ref/air-quotation-'+i+'-code_akhir/tipe/air" title="Klik untuk mencari code_akhir"><i class="icon-airrch"></i></a></div></td>';
	
	tabel += '<td><input style="width:200px" readonly type="text" name="air_quotation['+i+'][port_akhir]" id="air-quotation-'+i+'-port_akhir" class="air-quotation-port_akhir detail_jadwal" /></td>';
	
	tabel += '<td><div class="input-append"><input style="width:50px" type="text" name="air_quotation['+i+'][unit_code]" id="air-quotation-'+i+'-unit_code" class="air-quotation-unit_code detail_jadwal" oldvalue="" browseobj="cari-air-quotation-'+i+'-unit_code" /><a style="display:none" class="add-on browse unit_code detail_jadwal" id="cari-air-quotation-'+i+'-unit_code" href="cari/ref/air-quotation-'+i+'-unit_code/tipe/unit" title="Klik untuk mencari unit_code"><i class="icon-airrch"></i></a></div></td>';
	
	tabel += '<td><input style="width:200px" readonly type="text" name="air_quotation['+i+'][unit_desc]" id="air-quotation-'+i+'-unit_desc" class="air-quotation-unit_desc detail_jadwal" /></td>';
		
	tabel += '<td><div class="input-append"><input style="width:50px" type="text" name="air_quotation['+i+'][currency_code]" id="air-quotation-'+i+'-currency_code" class="air-quotation-currency_code detail_jadwal" oldvalue="" browseobj="cari-air-quotation-'+i+'-currency_code" /><a style="display:none" class="add-on browse currency_code detail_jadwal" id="cari-air-quotation-'+i+'-currency_code" href="cari/ref/air-quotation-'+i+'-currency_code/tipe/cur" title="Klik untuk mencari currency_code"><i class="icon-airrch"></i></a></div></td>';
	
	tabel += '<td><input style="width:200px" readonly type="text" name="air_quotation['+i+'][currency_desc]" id="air-quotation-'+i+'-currency_desc" class="air-quotation-currency_desc detail_jadwal" /></td>';
	
	tabel += '<td><input style="width:100px;text-align:right" type="text" name="air_quotation['+i+'][selling_rate]" id="air-quotation-'+i+'-selling_rate" class="air-quotation-selling_rate currency detail_jadwal" value="0" /></td>';
	
	tabel += '<td><input style="width:50px" maxlength="100" type="checkbox" name="air_quotation['+i+'][approval_number]" id="air-quotation-'+i+'-approval_number" class="air-quotation-approval_number detail_transaksi" /></td>';
	
	if( action === 1 ){
		tabel += '<td class="action" id="action-baris-air-quotation-'+i+'"><a href="#void()" class="tombol tombol-small hapus-baris-air-quotation detail_jadwal" id="hapus-baris-air-quotation-'+i+'"><i class="icon-remove"></i></a></td>';
	} else tabel += '<td class="action" id="action-baris-air-quotation-'+i+'"><a href="#void()" class="tombol tombol-small tambah-baris-air-quotation detail_jadwal" id="tambah-baris-air-quotation-'+i+'"><i class="icon-plus"></i></a></td>';
	tabel += '</tr>';
	$( "#baris-air-quotation" ).val( i + 1 );
	return tabel;
}
$( document ).ready( function() {

	// Initialize
	initialize();
	// Miscellaneous
		
	//Blur : Ketika Pindah
	//Keydown : Ketika di Enter
	
	$( '.detail_jadwal' ).live( 'keydown', function( e ){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 2 ];
		if ( e.which === kodehapusbaris ){
			e.preventDefault();
			var xobj = document.getElementById('hapus-baris-air-quotation-'+num);
			if (xobj != null){
				$( '#hapus-baris-air-quotation-'+( Number( num ) ) ).click();
			}else{
				$("input[id*='" + "air-quotation-"+num + "']").val('');
			}
			setfocus(Number(num),'id','air-quotation');
		}
	});
	//////////////////////////////////////////////////////////
	//keydown dan Blur Function
	//////////////////////////////////////////////////////////
	
	$( '.air-quotation-id' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 2 ];
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr("oldvalue",$(this).val());
				$( '#cari-'+ asal ).click();
			} else {
				$( '#'+asal.replace( 'id', 'charges_code' ) ).focus();
			}
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'id','air-quotation');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'id','air-quotation');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'charges_code','air-quotation');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus2((Number(num)),'currency_desc','air-quotation');
			}
		}
	});
	
	$( '.air-quotation-charges_code' ).live( 'blur', function(){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 2 ];
		if($( this ).val()==''){
			$( '#'+asal.replace( 'charges_code', 'charges_desc' ) ).val( '' );
		}else{
			if ($( this ).val()!==$( this ).attr('oldvalue')){
				$.post( 'load_charges', { id: $( this ).val() }, function( result ){
					var data = unserialize( result );
					if( result === '' ||  data===null){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Charges code not Found. Please Check Again.</div>';
						$('#alert').html( message );
						$( '#'+asal.replace( 'charges_code', 'charges_desc' ) ).val( '' );
						$( '#'+asal ).val( '' );
						$(this).val('');
						$(this).attr("oldvalue",'');
						$( '#'+asal ).focus();
					}else{
						$('#alert').html( "" );	
						$( '#'+asal.replace( 'charges_code', 'charges_desc' ) ).val( data['description'] );
					}
				});
			}
		}
	});
	
	$( '.air-quotation-charges_code' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 2 ];
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr("oldvalue",$(this).val());
				$( '#cari-'+ asal ).click();
			} else {
				$( '#'+asal.replace( 'charges_code', 'code_awal' ) ).focus();
			}
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'charges_code','air-quotation');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'charges_code','air-quotation');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'code_awal','air-quotation');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus2((Number(num)),'approval_number','air-quotation');
			}
		}
	});
	
	$( '.air-quotation-code_awal' ).live( 'blur', function(){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 2 ];
		if($( this ).val()==''){
			$( '#'+asal.replace( 'code_awal', 'port_awal' ) ).val( '' );
		}else{
			if ($( this ).val()!==$( this ).attr('oldvalue')){
				$.post( 'load_airport', { id: $( this ).val() }, function( result ){
					var data = unserialize( result );
					if( result === '' ||  data===null){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Port Of Loading not Found. Please Check Again.</div>';
						$('#alert').html( message );
						$( '#'+asal.replace( 'code_awal', 'port_awal' ) ).val( '' );
						$( '#'+asal ).val( '' );
						$(this).val('');
						$(this).attr("oldvalue",'');
						$( '#'+asal ).focus();
					}else{
						$('#alert').html( "" );	
						$( '#'+asal.replace( 'code_awal', 'port_awal' ) ).val( data['port_name'] );
					}
				});
			}
		}
	});
	$( '.air-quotation-code_awal' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 2 ];
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr("oldvalue",$(this).val());
				$( '#cari-'+ asal ).click();
			} else {
				$( '#'+asal.replace( 'code_awal', 'code_akhir' ) ).focus();
			}
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'code_awal','air-quotation');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'code_awal','air-quotation');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'code_akhir','air-quotation');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'charges_code','air-quotation');
			}
		}
	});
	$( '.air-quotation-code_akhir' ).live( 'blur', function(){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 2 ];
		if($( this ).val()==''){
			$( '#'+asal.replace( 'code_akhir', 'port_akhir' ) ).val( '' );
		}else{
			if ($( this ).val()!==$( this ).attr('oldvalue')){
				$.post( 'load_airport', { id: $( this ).val() }, function( result ){
					var data = unserialize( result );
					if( result === '' ||  data===null){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Port Destination not Found. Please Check Again.</div>';
						$('#alert').html( message );
						$( '#'+asal.replace( 'code_akhir', 'port_akhir' ) ).val( '' );
						$( '#'+asal ).val( '' );
						$(this).val('');
						$(this).attr("oldvalue",'');
						$( '#'+asal ).focus();
					}else{
						$('#alert').html( "" );	
						$( '#'+asal.replace( 'code_akhir', 'port_akhir' ) ).val( data['port_name'] );
					}
				});
			}
		}
	});
	
	$( '.air-quotation-code_akhir' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 2 ];
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr("oldvalue",$(this).val());
				$( '#cari-'+ asal ).click();
			} else {
				$( '#'+asal.replace( 'code_akhir', 'unit_code' ) ).focus();
			}
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'code_akhir','air-quotation');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'code_akhir','air-quotation');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'unit_code','air-quotation');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'code_awal','air-quotation');
			}
		}
	});
	
	$( '.air-quotation-unit_code' ).live( 'blur', function(){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 2 ];
		if($( this ).val()==''){
			$( '#'+asal.replace( 'unit_code', 'unit_desc' ) ).val( '' );
		}else{
			if ($( this ).val()!==$( this ).attr('oldvalue')){
				$.post( 'load_unit', { id: $( this ).val() }, function( result ){
					var data = unserialize( result );
					if( result === '' ||  data===null){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Unit code not Found. Please Check Again.</div>';
						$('#alert').html( message );
						$( '#'+asal.replace( 'unit_code', 'unit_desc' ) ).val( '' );
						$( '#'+asal ).val( '' );
						$(this).val('');
						$(this).attr("oldvalue",'');
						$( '#'+asal ).focus();
					}else{
						$('#alert').html( "" );	
						$( '#'+asal.replace( 'unit_code', 'unit_desc' ) ).val( data['description'] );
					}
				});
			}
		}
	});
	
	$( '.air-quotation-unit_code' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 2 ];
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr("oldvalue",$(this).val());
				$( '#cari-'+ asal ).click();
			} else {
				$( '#'+asal.replace( 'unit_code', 'currency_code' ) ).focus();
			}
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'unit_code','air-quotation');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'unit_code','air-quotation');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'currency_code','air-quotation');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'code_akhir','air-quotation');
			}
		}
	});
	
	
	$( '.air-quotation-currency_code' ).live( 'blur', function(){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 2 ];
		if($( this ).val()==''){
			$( '#'+asal.replace( 'currency_code', 'currency_desc' ) ).val( '' );
		}else{
			if ($( this ).val()!==$( this ).attr('oldvalue')){
				$.post( 'load_currency', { id: $( this ).val() }, function( result ){
					var data = unserialize( result );
					if( result === '' ||  data===null){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Currency Code not Found. Please Check Again.</div>';
						$('#alert').html( message );
						$( '#'+asal.replace( 'currency_code', 'currency_desc' ) ).val( '' );
						$( '#'+asal ).val( '' );
						$(this).val('');
						$(this).attr("oldvalue",'');
						$( '#'+asal ).focus();
					}else{
						$('#alert').html( "" );	
						$( '#'+asal.replace( 'currency_code', 'currency_desc' ) ).val( data['description'] );
					}
				});
			}
		}
	});
	
	$( '.air-quotation-currency_code' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 2 ];
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr("oldvalue",$(this).val());
				$( '#cari-'+ asal ).click();
			} else {
				$( '#'+asal.replace( 'currency_code', 'selling_rate' ) ).focus();
			}
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'currency_code','air-quotation');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'currency_code','air-quotation');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'selling_rate','air-quotation');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'unit_code','air-quotation');
			}
		}
	});
	
	
	
	$( '.air-quotation-selling_rate' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 2 ];
		if ( e.which === 13 ){
			e.preventDefault;
			setfocus(Number(num),'vendor_id','air-quotation');
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'selling_rate','air-quotation');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'selling_rate','air-quotation');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'vendor_id','air-quotation');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'currency_code','air-quotation');
			}
		}
	});
	
	$( '.air-quotation-vendor_id' ).live( 'blur', function(){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 2 ];
		if($( this ).val()==''){
			$( '#'+asal.replace( 'vendor_id', 'vendor_name' ) ).val( '' );
		}else{
			if ($( this ).val()!==$( this ).attr('oldvalue')){
				$.post( 'load_br_air', { id: $( this ).val() }, function( result ){
					var data = unserialize( result );
					if( result === '' ||  data===null){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Vendor ID not Found. Please Check Again.</div>';
						$('#alert').html( message );
						$( '#'+asal.replace( 'vendor_id', 'vendor_name' ) ).val( '' );
						$( '#'+asal ).val( '' );
						$(this).val('');
						$(this).attr("oldvalue",'');
						$( '#'+asal ).focus();
					}else{
						$('#alert').html( "" );	
						$( '#'+asal.replace( 'vendor_id', 'vendor_name' ) ).val( data['company_name'] );
					}
				});
			}
		}
	});
	
	$( '.air-quotation-vendor_id' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 2 ];
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr("oldvalue",$(this).val());
				$( '#cari-'+ asal ).click();
			} else {
				$( '#'+asal.replace( 'vendor_id', 'approval_number' ) ).focus();
			}
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'vendor_id','air-quotation');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'vendor_id','air-quotation');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'approval_number','air-quotation');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'selling_rate','air-quotation');
			}
		}
	});
	$( '.air-quotation-approval_number' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 2 ];
		if ( e.which === 13 ){
			e.preventDefault;
			if( Number( $( '#baris-air-quotation' ).val() ) === ( Number( num ) + 1 ) ){
				$( '#tambah-baris-air-quotation-'+num ).click();
				nomorbaru();
			}
			setfocus(Number(num)+1,'id','air-quotation');
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'approval_number','air-quotation');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'approval_number','air-quotation');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num)+1,'charges_code','air-quotation');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'vendor_id','air-quotation');
			}
		}
	});
	
		$( '.air-quotation-approval_number' ).live( 'keydown', function( e ){
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== '' ){
				var asal = $( this ).attr( 'id' );
				var num = asal.split( '-' )[ 2 ];
				console.log( $( '#baris-air-quotation' ).val() == ( Number( num ) + 1 ) );
				if( Number( $( '#baris-air-quotation' ).val() ) === ( Number( num ) + 1 ) ){
					$( '#tambah-baris-air-quotation-'+num ).click();
					nomorbaru();
				}
				$( '#air-quotation-'+( Number( num ) + 1 )+'-id' ).focus();
			}
		}
	});
	
	// Retrieve data
	$( '#quot_id' ).bind( 'blur', function( ) {
		if($(this).val()!==$(this).attr('oldvalue')){
			$.post( 'db_read', { quot_id: $( '#quot_id' ).val() }, function( result ){
				if( result === '' ){
					var quot_id = $( '#quot_id' ).val();
					initializex();
					$( '#quot_id' ).val( quot_id );
					$( '#date' ).focus();
				} else {
					var data = unserialize( result );
					if (data[ 'user_name2']!=null){
						show_user_name(data[ 'user_name2']);
					}else if (data[ 'user_name']!=null){
						show_user_name(data[ 'user_name']);
					}else{
						show_user_name('');
					}
					var tanggal = data[ 'date' ].split( "-" );
					var tgl = tanggal[ 2 ];
					var bln = tanggal[ 1 ];
					var thn = tanggal[ 0 ];
					
					var tanggal1 = data[ 'valid_from' ].split( "-" );
					var tgl1 = tanggal1[ 2 ];
					var bln1 = tanggal1[ 1 ];
					var thn1 = tanggal1[ 0 ];
					
					$( "#quot_id" ).val( data[ 'quot_id' ] );
					$( "#date" ).val( tgl + "-" + bln + "-" + thn );
					$( "#cus_id" ).val( data[ 'cus_id' ] );
					$( "#customer_name").val( data['customer_name']);
					$( "#service" ).val( data[ 'service' ] );
					$( "#attn" ).val( data[ 'attn' ] );
					$( "#route" ).val( data[ 'route' ] );
					$( "#re" ).val( data[ 're' ] );
					$( "#commodity" ).val( data[ 'commodity' ] );
					$( "#commodity_class" ).val( data[ 'commodity_class' ] );
					$( "#regards" ).val( data[ 'regards' ] );
					$( "#freight" ).val( data[ 'freight' ] );
					$( "#freight_desc" ).val( data[ 'freight_desc' ] );
					$( "#valid_from" ).val( tgl1 + "-" + bln1 + "-" + thn1 );
					$( "#sales_code" ).val( data[ 'sales_code' ] );
					$( "#nama_sales" ).val( data[ 'nama_sales' ] );
					$( "#term_note" ).val( data[ 'term_note' ] );
					$( "#sales_note").val( data['sales_note']);
					$( "#manager_note" ).val( data[ 'manager_note' ] );
					$( "#director_note" ).val( data[ 'director_note' ] );
					
					$( '.air-quotation-row' ).remove();
					var i = 0;
										
					for(; data['jadwal'][i]; i++ ){
					
						$( '#transaksix' ).append( add_row_air_quotation( i, 1 ) );
						$( '#air-quotation-'+i+'-charges_code' ).val( data['jadwal'][i][ 'charges_code' ] );
						$( '#air-quotation-'+i+'-charges_desc' ).val( data['jadwal'][i][ 'charges_desc' ] );
						$( '#air-quotation-'+i+'-code_awal' ).val( data['jadwal'][i][ 'code_awal' ] );
						$( '#air-quotation-'+i+'-port_awal' ).val( data['jadwal'][i][ 'port_awal' ] );
						$( '#air-quotation-'+i+'-code_akhir' ).val( data['jadwal'][i][ 'code_akhir' ] );
						$( '#air-quotation-'+i+'-port_akhir' ).val( data['jadwal'][i][ 'port_akhir' ] );
						$( '#air-quotation-'+i+'-unit_code' ).val( data['jadwal'][i][ 'unit_code' ] );
						$( '#air-quotation-'+i+'-unit_desc' ).val( data['jadwal'][i][ 'unit_desc' ] );
						$( '#air-quotation-'+i+'-currency_code' ).val( data['jadwal'][i][ 'currency_code' ] );
						$( '#air-quotation-'+i+'-currency_desc' ).val( data['jadwal'][i][ 'currency_desc' ] );
						$( '#air-quotation-'+i+'-vendor_id' ).val( data['jadwal'][i][ 'vendor_id' ] );
						$( '#air-quotation-'+i+'-vendor_name' ).val( data['jadwal'][i][ 'vendor_name' ] );
						$( '#air-quotation-'+i+'-selling_rate' ).val( parseFloat( data['jadwal'][i][ 'selling_rate' ] ) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
						$( '#air-quotation-'+i+'-approval_number' ).val( data['jadwal'][i][ 'approval_number' ] );
						$( '#baris-air-quotation' ).val( i + 1 );
					}
					$( '#transaksix' ).append( add_row_air_quotation( i, 0 ) );
					$( '.ubah, .hapus, .cetak' ).show();
					$('#cetak').attr('href', 'pdf?quot_id=' + $('#quot_id').val());
					$( '.simpan' ).hide();
				}
			});
		}
	});
	
	
$( '#quot_id' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){	
				nomorbaru();
			} else {
				$('#date').focus();
			}
		}
	});
	$( '#date' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== '' ){	
				$('#cus_id').focus();
			}
		}
	});
	$( '#cus_id' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			if ($( '#cus_id' ).val()===''){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_kode_customer' ).click();
			}else{
				$( '#service' ).focus();
			}
		}
	});
	
	$( '#cus_id' ).bind( 'blur', function( ) {
		if ($( '#cus_id' ).val()===''){
			$( '#customer_name' ).val( "" );
		}else{
			if($(this).val()!==$(this).attr('oldvalue')){
				$.post( 'db_read_kepala_customer', { id: $( '#cus_id' ).val() }, function( result ){
					if( result === '' ){
						$( '#cus_id' ).val( "" );
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Customer Code Not Found.</div>';
						$('#alert').html( message );						
					} else {
						$( '#customer_name' ).val( result );
					}
				});
			}
		}
	});
	
	$( '#cus_id' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== '' ){	
				$('#service').focus();
			}
		}
	});
	$( '#service' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== '' ){	
				$('#attn').focus();
			}
		}
	});
	$( '#attn' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== '' ){	
				$('#route').focus();
			}
		}
	});
	$( '#route' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== '' ){	
				$('#re').focus();
			}
		}
	});
	$( '#re' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== '' ){	
				$('#commodity').focus();
			}
		}
	});
	
	$( '#commodity' ).bind( 'blur', function( ) {
		if ($( '#commodity' ).val()===''){
			$( '#commodity_class' ).val( "" );
		}else{
			if($(this).val()!==$(this).attr('oldvalue')){
				$.post( 'db_read_kepala_commodity', { id: $( '#commodity' ).val() }, function( result ){
					if( result === '' ){
						$( '#commodity' ).val( "" );
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Commodity Class Not Found.</div>';
						$('#alert').html( message );						
					} else {
						$( '#commodity_class' ).val( result );
					}
				});
			}
		}
	});
	
	$( '#commodity' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			if ($( '#commodity' ).val()===''){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_commodity' ).click();
			}else{
					$( '#regards' ).focus();
			}
		}
	});
	
	$( '#regards' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== '' ){	
				$('#valid_from').focus();
			}
		}
	});
	
	$( '#freight' ).bind( 'blur', function( ) {
		if ($( '#freight' ).val()===''){
			$( '#freight_desc' ).val( "" );
		}else{
			if($(this).val()!==$(this).attr('oldvalue')){
				$.post( 'db_read_kepala_freight', { id: $( '#freight' ).val() }, function( result ){
					if( result === '' ){
						$( '#freight' ).val( "" );
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Sales Code Not Found.</div>';
						$('#alert').html( message );						
					} else {
						$( '#freight_desc' ).val( result );
					}
				});
			}
		}
	});
	
	$( '#freight' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			if ($( '#freight' ).val()===''){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_freight' ).click();
			}else{
					$( '#valid_from' ).focus();
			}
		}
	});
	
	$( '#valid_from' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== '' ){	
				$('#sales_code').focus();
			}
		}
	});
	$( '#sales_code' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== '' ){	
				$('#valid_until').focus();
			}
		}
	});
	$( '#sales_code' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			if ($( '#sales_code' ).val()===''){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_sales_code' ).click();
			}else{
					$( '#valid_until' ).focus();
			}
		}
	});
	
	$( '#sales_code' ).bind( 'blur', function( ) {
		if ($( '#sales_code' ).val()===''){
			$( '#nama_sales' ).val( "" );
		}else{
			if($(this).val()!==$(this).attr('oldvalue')){
				$.post( 'db_read_kepala_sales', { id: $( '#sales_code' ).val() }, function( result ){
					if( result === '' ){
						$( '#sales_code' ).val( "" );
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Sales Code Not Found.</div>';
						$('#alert').html( message );						
					} else {
						$( '#nama_sales' ).val( result );
					}
				});
			}
		}
	});
	$( '#sales_code' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			setfocus(0,'charges_code','air-quotation');
		}
	});
	
	// Tambah Hapus Baris TTUS
	
	$( '.tambah-baris-air-quotation' ).live( 'click', function(){
		var str = $( this ).attr( 'id' );
		var num = str.replace( "tambah-baris-air-quotation-", "" );

		// Change action
		$( "#action"+str.replace( "tambah", "" ) ).html(
			'<a href="#void()" class="tombol tombol-small hapus-baris hapus-baris-air-quotation" id="hapus-baris-air-quotation-'+num+'"><i class="icon-remove"></i></a>'
		);

		// Insert row
		$( '#transaksix' ).append(
			add_row_air_quotation( Number( str.replace( 'tambah-baris-air-quotation-', '' ) ) + 1, 0 )
		);
		setfocus(Number(num)+1,'id','air-quotation');
	});

	$( '.hapus-baris-air-quotation' ).live( 'click', function(){
		if( confirm( 'Are You Sure Want Cancel This Transaction?' ) ){
			var str = $( this ).attr( 'id' );
			var num = str.split('-')[4];
			$( "#"+str.replace( "hapus-baris-", "" ) ).remove();
			setfocus(Number(num),'id','air-quotation');
		}
	});
	// Button Behavior
	
	$( '.simpan' ).click( function(){
		if( $( '#quot_id' ).val() !== '' ){
			$.post( 'db_create', $( 'form' ).serialize(), function( result ){
				success=unserialize(result);
				if( success['status'] ==='Error' ){
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Data '+$( '#quot_id' ).val()+success['ket'] +'</div>';
					$('#alert').html( message );					
					if (success['ket']=='Data Already Exist.'){
						nomorbaru();
					}
				}else if( success['status'] ){
					var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Data '+$( '#quot_id' ).val()+' Complete.</div>';
					$('#alert').html( message );
					$( '#cetak' ).attr( 'href', 'pdf?quot_id=' + $('#quot_id').val());		
					initializex();
				} else {
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data '+$( '#quot_id' ).val()+' Failed.</div>';
					$('#alert').html( message );
				}
			});
		} else {
			var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data Required.</div>';
			$('#alert').html( message );
		}
	});
	
	$( '.ubah' ).click( function(){
		if( $( '#quot_id' ).val() !== ''){
			$.post( 'db_update', $( 'form' ).serialize(), function( result ){
				success=unserialize(result);
				if( success['status'] ==='Error' ){
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Data '+$( '#quot_id' ).val()+' Failed. '+ success['ket'] +'</div>';
					$('#alert').html( message );					
					if (success['ket']=='Data Already Exist.'){
						nomorbaru();
					}
				}else if( success['status'] ){
					var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Data '+$( '#quot_id' ).val()+' Complete.</div>';
					$('#alert').html( message );
					$( '#cetak' ).attr( 'href', 'pdf?quot_id=' + $('#quot_id').val());
					initializex();
				} else {
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data '+$( '#quot_id' ).val()+' Failed.</div>';
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
			if( $( '#quot_id' ).val() !== '' ){
				$.post( 'db_delete', { quot_id: $( '#quot_id' ).val() }, function( result ){
					success=unserialize(result);
					if( success['status'] ==='Error' ){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Data '+$( '#quot_id' ).val()+' Failed. '+ success['ket'] +'</div>';
						$('#alert').html( message );					
					}else if( success['status'] ){
						var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Data '+$( '#quot_id' ).val()+' Have been Deleted.</div>';
						$('#alert').html( message );
						initializex();
					} else {
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data '+$( '#quot_id' ).val()+' Failed.</div>';
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
		if (($('#quot_id').val()==='')){
			window.close();
			if( confirm( 'Are You Sure To Delete This Transaction?' ) ){
		}else{
				initialize();
			}
		}
	});
	$( '.cetak' ).click( function(){
		$( '#cetak' ).attr( 'href', 'pdf');
	});

});
</script>
