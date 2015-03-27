<div class="container">
	<h2 class="judul">Selling Rate(Sea)</h2>
	<div id="alert"></div>
	<form class="form-horizontal">
		<fieldset>
		<div class="row">
				<div class="control-group span12" style="height:25px">
					<label class="control-label" for="cus_id">Customer ID: </label>
					<div class="controls">
						<div class="input-append"><input type="text" name="cus_id" id="cus_id" oldvalue="" browseobj="cari_cus_id" style="width:80px" /><a style="display:none" class="add-on browse" id="cari_cus_id" href="cari?ref=cus_id&tipe=customer" title="Klik untuk mencari kode Customer Id"><i class="icon-search"></i></a></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="control-group span12" style="height:25px">
					<label class="control-label" for="company_name">Company Name: </label>
					<div class="controls">
						<input type="text" readonly name="company_name" id="company_name" class="span9" />
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="span12 tab-pane active ju" style="height:200px" id="ju">
					<input type="hidden" id="baris-selling-rate-sea" name="baris-selling-rate-sea" value="1" />
					<table class="table">
						<thead>
							<tr><th>Begin Period</th><th>End Period</th><th>Vendor ID</th><th>Charges Code</th><th>Charges Description</th><th>Code</th><th>Port of Loading</th><th>Code</th><th>Port of Destination</th><th>Unit Code</th><th>Unit Description</th><th>Currency Code</th><th>Currency Description</th><th>Base Rate</th><th>Base Margin</th><th>Selling Rate</th><th>Quotation Number</th><th></th></tr>
						</thead>
						<tbody id="transaksix">
						</tbody>
					</table>
				</div>
			</div>
			
			<div class="form-actions btn-group">
				<?php if( in_array( 'create_selling_rate_sea', unserialize($capabilities) ) ){ ?>
				<a href="#" class="btn btn-primary simpan" style="top:-15px"><i class="icon-ok icon-white"></i> Save</a>
				<?php } ?>
				<a href="#" class="btn cetak browse" id="cetak" style="top:-15px"><i class="icon-print"></i> Print</a>
				<?php if( in_array( 'update_selling_rate_sea', unserialize($capabilities) ) ){ ?>
				<a href="#" class="btn btn-primary ubah" style="top:-15px"><i class="icon-pencil icon-white"></i> Update</a>
				<?php } ?>
				<?php if( intval($role)!= 1){ ?>
					<?php if( in_array( 'delete_selling_rate_sea', unserialize($capabilities) ) ){ ?>
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
preventempty="cus_id,company_name";
preventemptystatus="1,1";
function initialize(){
	$( '#cus_id' ).focus();
	initializex();
}
function initializex(){
	$( '.simpan, .batal' ).show();
	$( '.ubah, .hapus' ).hide();
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
	$('.selling-rate-sea-row').remove();
	$( '#transaksix' ).append(
		add_row_selling_rate_sea( 0, 0 )
	);
	var d = new Date();
	var tgl = d.getDate();
	if( tgl < 10 ) tgl = "0" + tgl;
	var bln = d.getMonth() + 1;
	if( bln < 10 ) bln = "0" + bln;
	var thn = d.getFullYear();
	var tanggal = tgl+"-"+bln+"-"+thn;
	$( "#tanggal" ).val( tanggal );
	show_user_name('');
}

function nomorbaru(){
	$.post( 'db_lastid', { id: $( "#id" ).val() }, function( result ){
		if( result === '' ){
			$( '#id' ).val( '1' );
		} else {
			var lastid = ( Number( result ) + 1 ) + '';
			for( var i = lastid.length; i < 4000; i++ ){
				lastid = '0' + lastid;
			}
			$( '#id' ).val( lastid );
		}
	});
}
function bookingBaris(num){
	var tgldatefrom = $( '#selling-rate-sea-'+num+'-date_from').val();
	var tgldateuntil = $( '#selling-rate-sea-'+num+'-date_until').val();
	
	var tanggal = tgldatefrom.split( "-" );
	var tgl = tanggal[ 2 ];
	var bln = tanggal[ 1 ];
	var thn = tanggal[ 0 ];
	var datefrombanding = tgl+""+bln+""+thn;
	
	var tanggal = tgldateuntil.split( "-" );
	var tgl = tanggal[ 2 ];
	var bln = tanggal[ 1 ];
	var thn = tanggal[ 0 ];
	var dateuntilbanding = tgl+""+bln+""+thn;
	
	if(datefrombanding>dateuntilbanding)
		{
		status=false;
		var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> End Period cannot be more earlier than Begin Period </div>';
		$('#alert').html( message );
		initializex();		
		}
	}
	
//Dari Buying Rate ke Selling Rate
/*
function get_buying_rate(num)
{	
//Yang tadi gw lakukan adalah split tanggal dari "program" ke database biar bisa dibaca
	var tgldatefrom = $( '#selling-rate-sea-'+num+'-date_from').val();
	var tgldateuntil = $( '#selling-rate-sea-'+num+'-date_until').val();
	
	var tanggal = tgldatefrom.split( "-" );
	var tgl = tanggal[ 2 ];
	var bln = tanggal[ 1 ];
	var thn = tanggal[ 0 ];
	
	var tanggal = tgldateuntil.split( "-" );
	var tgl1 = tanggal[ 2 ];
	var bln1 = tanggal[ 1 ];
	var thn1 = tanggal[ 0 ];
	var tglawal =  tgl +"-"+bln+"-"+thn;
	var tglakhir = tgl1 +"-"+bln1+"-"+thn1;
	//sampai sintax yang atas
	
	var cusid= $('#cus_id').val();
	var charges_code = $('#selling-rate-sea-'+num+'-charges_code').val();
	var port_awal = $('#selling-rate-sea-'+num+'-code_awal').val();
	var port_akhir = $('#selling-rate-sea-'+num+'-code_akhir').val();
	if( cusid!="" && tglawal!="" && tglakhir!="" && charges_code!="" && port_awal!="" && port_akhir!="")
	{		
		//Yang gw bingungin dari kemarin adalah nilai tgl_from, tgl_until, charges, cus_id, portawal, dan portakhir itu diambil darimana?
		//Terus yang gw bingung lagi, selain cara deklarasikan semua nilai itu dari field buying rate, bagaimana cara mencocokkannya...
		//Alurnyakan dia memanggil load_buying_rate
		$.post( 'load_buying_rate', { cus_id: cusid ,  tgl_from: tglawal , tgl_until: tglakhir , charges: charges_code ,portawal : port_awal, portakhir: port_akhir }, function( result ){
			if( result === '' ||  data===null){
			// if( result === '' ||  result===null){
				var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Buying rate not found with this criteria. Please Check Again.</div>';
				$('#alert').html( message );
				$('#selling-rate-sea-'+num+'-cus_id').focus();
				var buying_rate= $('#selling-rate-sea-'+num+'-buying_rate').val();
				var base_rate= $('#selling-rate-sea-'+num+'-base_rate').val();
				var selling_rate= $('#selling-rate-sea-'+num+'-selling_rate').val();
				$('#selling-rate-sea-'+num+'-buying_rate').val('');
				$('#selling-rate-sea-'+num+'-base_rate').val('');
				$('#selling-rate-sea-'+num+'-selling_rate').val('');
			}else{
				// var data = unserialize( result );
				var data = eval( result );
				data > data[0];
				console.log(data);
				$('#alert').html( "" );	
				//var charges_code = $('#selling-rate-sea-'+num+'-charges_code').val();
				//$( '#selling-rate-sea-'+i+'-unit_code' ).val( data['jadwal'][i][ 'unit_code' ] );
				var base_margin= $('#selling-rate-sea-'+num+'-base_margin').val();
				var additional_margin= $('#selling-rate-sea-'+num+'-additional_margin').val();
				$('#selling-rate-sea-'+num+'-buying_rate').val(data['selling_rate']);
				$('#selling-rate-sea-'+num+'-base_rate').val(parseFloat( base_margin)+parseFloat( data['selling_rate']));
				$('#selling-rate-sea-'+num+'-selling_rate').val(parseFloat( base_margin)+parseFloat( data['selling_rate'])+parseFloat(additional_margin));
				$('#selling-rate-sea-'+num+'-unit_code').val(data['unit_code']);
				$('#selling-rate-sea-'+num+'-unit_description').val(data['unit_description']);
				$('#selling-rate-sea-'+num+'-currency_code').val(data['currency_code']);
				$('#selling-rate-sea-'+num+'-currency_description').val(data['currency_description']);
			}
		});
	}

}
*/
// function get_buying_rate(num)
// {
function get_customer_id(num)
{
	var quotid = $('#quot_id').val();
	
	// if(tglawal!="" && tglakhir!="" && quotid!="" && charges_code!="" && port_awal!="" && port_akhir!="")
	// {
	if (quotid!="" )
	{
		// $.post( 'load_buying_rate', {  quot_id: quotid }, function( result ){
			// if( result === '' ||  data===null){
				// var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Buying rate not found with this criteria. Please Check Again.</div>';
				// $('#alert').html( message );
				// $('#selling-rate-sea-'+num+'-quot_id').focus();
		$.post( 'load_quot_id', { quot_id: quotid }, function( result ){
			if( result === '' || data === null) {
				var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Buying rate not found with this criteria. Please Check Again.</div>';
				$('#alert').html( message );
				$('#selling-rate-sea-'+num+'-quot_id').focus();
				// var buying_rate= $('#selling-rate-sea-'+num+'-buying_rate').val();
				// var base_rate= $('#selling-rate-sea-'+num+'-base_rate').val();
				// var selling_rate= $('#selling-rate-sea-'+num+'-selling_rate').val();
				// $('#selling-rate-sea-'+num+'-buying_rate').val('');
				// $('#selling-rate-sea-'+num+'-base_rate').val('');
				// $('#selling-rate-sea-'+num+'-selling_rate').val('');
				var base_rate= $('#selling-rate-sea-'+num+'-base_rate').val();
				var selling_rate= $('#selling-rate-sea-'+num+'-selling_rate').val();
				$('#selling-rate-sea-'+num+'-base_rate').val('');
				$('#selling-rate-sea-'+num+'-selling_rate').val('');
			
			}else{
				var data = unserialize( result );
				//var data = eval( result );
				data = data [0];
				console.log(data);
				$('#alert').html( "" );
				
				// var tgldatefrom = $('#selling-rate-sea-'+num+'-date_from').val();
				// var tgldateuntil = $('#selling-rate-sea-'+num+'-date_until').val();
				
				// var tanggal = tgldatefrom.split( "-" );
				// var tgl = tanggal[ 2 ];
				// var bln = tanggal[ 1 ];
				// var thn = tanggal[ 0 ];
				// var tglawal = tgl+"-"+bln+"-"+thn;
				
				// var tanggal = tgldateuntil.split("-");
				// var tgl = tanggal[ 2 ];
				// var bln = tanggal[ 1 ];
				// var thn = tanggal[ 0 ];
				// var tglakhir = tgl+"-"+bln+"-"+thn;
				$('#cus_id').val(data[cus_id]);
				$('#customer_name').val(data[customer_name]);
				$('#selling-rate-sea-'+num+'-date_from').val(data[valid_from]);
				$('#selling-rate-sea-'+num+'-date_until').val(data[valid_until]);
				$('#selling-rate-sea-'+num+'-vendor_id').val(data[vendor_id]);
				$('#selling-rate-sea-'+num+'-charges_code').val(data[charges_code]);
				$('#selling-rate-sea-'+num+'-charges_description').val(data[charges_description]);
				$('#selling-rate-sea-'+num+'-code_awal').val(data[code_awal]);
				$('#selling-rate-sea-'+num+'-port_awal').val(data[port_awal]);
				$('#selling-rate-sea-'+num+'-code_akhir').val(data[code_akhir]);
				$('#selling-rate-sea-'+num+'-port_akhir').val(data[port_akhir]);
				$('#selling-rate-sea-'+num+'-unit_code').val(data[unit_code]);
				$('#selling-rate-sea-'+num+'-unit_description').val(data[unit_description]);
				$('#selling-rate-sea-'+num+'-currency_code').val(data[currency_code]);
				$('#selling-rate-sea-'+num+'-currency_description').val(data[currency_description]);
				$('#selling-rate-sea-'+num+'-base_rate').val(data['base_rate']);
				$('#selling-rate-sea-'+num+'-base_margin').val(data['additional_margin']);
				$('#selling-rate-sea-'+num+'-selling_rate').val(data['selling_rate']);
			}
		});
	}

}
function add_row_selling_rate_sea( i, action ){
	var tabel = '<tr class="selling-rate-sea-row" id="selling-rate-sea-'+i+'">';

	tabel += '<td><div class="input-append"><input style="width:80px"  type="text" name="selling_rate_sea['+i+'][date_from]" id="selling-rate-sea-'+i+'-date_from" class="selling-rate-sea-date_from tanggal" /></td>';
	
	tabel += '<td><div class="input-append"><input style="width:80px" type="text" name="selling_rate_sea['+i+'][date_until]" id="selling-rate-sea-'+i+'-date_until" class="selling-rate-sea-date_until tanggal" /></td>';
	
	tabel += '<td><div class="input-append"><input style="width:80px" type="text" name="selling_rate_sea['+i+'][vendor_id]" id="selling-rate-sea-'+i+'-vendor_id" class="selling-rate-sea-vendor_id vendor_id detail_jadwal" oldvalue="" browseobj="cari-selling-rate-sea-'+i+'-vendor_id" /><a style="display:none" class="add-on browse vendor_id detail_jadwal" id="cari-selling-rate-sea-'+i+'-vendor_id" href="cari?ref=selling-rate-sea-'+i+'-vendor_id&tipe=pr_sea" title="Klik untuk mencari Vendor ID"><i class="icon-search"></i></a></div></td>';
	
	tabel += '<td><div class="input-append"><input style="width:80px" type="text" name="selling_rate_sea['+i+'][charges_code]" id="selling-rate-sea-'+i+'-charges_code" class="selling-rate-sea-charges_code charges_code detail_jadwal" oldvalue="" browseobj="cari-selling-rate-sea-'+i+'-charges_code" /><a style="display:none" class="add-on browse charges_code detail_jadwal" id="cari-selling-rate-sea-'+i+'-charges_code" href="cari?ref=selling-rate-sea-'+i+'-charges_code&tipe=chra" title="Klik untuk mencari Charges Code"><i class="icon-search"></i></a></div></td>';
	
	tabel += '<td><input style="width:200px" readonly type="text" name="selling_rate_sea['+i+'][charges_description]" id="selling-rate-sea-'+i+'-charges_description" class="selling-rate-sea-charges_description detail_jadwal" /></td>';
	
	tabel += '<td><div class="input-append"><input style="width:80px" type="text" name="selling_rate_sea['+i+'][code_awal]" id="selling-rate-sea-'+i+'-code_awal" class="selling-rate-sea-code_awal detail_jadwal" oldvalue="" browseobj="cari-selling-rate-sea-'+i+'-code_awal" /><a style="display:none" class="add-on browse code_awal detail_jadwal" id="cari-selling-rate-sea-'+i+'-code_awal" href="cari?ref=selling-rate-sea-'+i+'-code_awal&tipe=sea" title="Klik untuk mencari code_awal"><i class="icon-search"></i></a></div></td>';
	
	tabel += '<td><input style="width:200px" readonly type="text" name="selling_rate_sea['+i+'][port_awal]" id="selling-rate-sea-'+i+'-port_awal" class="selling-rate-sea-port_awal detail_jadwal" /></td>';
	
	tabel += '<td><div class="input-append"><input style="width:80px" type="text" name="selling_rate_sea['+i+'][code_akhir]" id="selling-rate-sea-'+i+'-code_akhir" class="selling-rate-sea-code_akhir detail_jadwal" oldvalue="" browseobj="cari-selling-rate-sea-'+i+'-code_akhir" /><a style="display:none" class="add-on browse code_akhir detail_jadwal" id="cari-selling-rate-sea-'+i+'-code_akhir" href="cari?ref=selling-rate-sea-'+i+'-code_akhir&tipe=sea" title="Klik untuk mencari code_akhir"><i class="icon-search"></i></a></div></td>';
	
	tabel += '<td><input style="width:200px" readonly type="text" name="selling_rate_sea['+i+'][port_akhir]" id="selling-rate-sea-'+i+'-port_akhir" class="selling-rate-sea-port_akhir detail_jadwal" /></td>';
	
	tabel += '<td><div class="input-append"><input style="width:80px" type="text" name="selling_rate_sea['+i+'][unit_code]" id="selling-rate-sea-'+i+'-unit_code" class="selling-rate-sea-unit_code detail_jadwal" oldvalue="" browseobj="cari-selling-rate-sea-'+i+'-unit_code" /><a style="display:none" class="add-on browse unit_code detail_jadwal" id="cari-selling-rate-sea-'+i+'-unit_code" href="cari?ref=selling-rate-sea-'+i+'-unit_code&tipe=unit" title="Klik untuk mencari unit_code"><i class="icon-search"></i></a></div></td>';
	
	tabel += '<td><input style="width:80px" readonly type="text" name="selling_rate_sea['+i+'][unit_description]" id="selling-rate-sea-'+i+'-unit_description" class="selling-rate-sea-unit_description detail_jadwal" /></td>';
		
	tabel += '<td><div class="input-append"><input style="width:80px" type="text" name="selling_rate_sea['+i+'][currency_code]" id="selling-rate-sea-'+i+'-currency_code" class="selling-rate-sea-currency_code detail_jadwal" oldvalue="" browseobj="cari-selling-rate-sea-'+i+'-currency_code" /><a style="display:none" class="add-on browse currency_code detail_jadwal" id="cari-selling-rate-sea-'+i+'-currency_code" href="cari?ref=selling-rate-sea-'+i+'-currency_code&tipe=cur" title="Klik untuk mencari currency_code"><i class="icon-search"></i></a></div></td>';
	
	tabel += '<td><input style="width:80px" readonly type="text" name="selling_rate_sea['+i+'][currency_description]" id="selling-rate-sea-'+i+'-currency_description" class="selling-rate-sea-currency_description detail_jadwal" /></td>';
	
	tabel += '<td><input style="width:100px;text-align:right" readonly type="text" name="selling_rate_sea['+i+'][base_rate]" id="selling-rate-sea-'+i+'-base_rate" class="selling-rate-sea-base_rate currency detail_jadwal" value="0" /></td>';
	
	tabel += '<td><input style="width:100px;text-align:right" type="text" name="selling_rate_sea['+i+'][base_margin]" id="selling-rate-sea-'+i+'-base_margin" class="selling-rate-sea-base_margin currency detail_jadwal" value="0" /></td>';
	
	tabel += '<td><input style="width:100px;text-align:right" readonly type="text" name="selling_rate_sea['+i+'][selling_rate]" id="selling-rate-sea-'+i+'-selling_rate" class="selling-rate-sea-selling_rate currency detail_jadwal" value="0" /></td>';
	
	tabel += '<td><input style="width:80px" type="text" name="selling_rate_sea['+i+'][quot_id]" id="selling-rate-sea-'+i+'-quot_id" class="selling-rate-sea-quot_id detail_jadwal" /></td>';
	
	if( action === 1 ){
		tabel += '<td class="action" id="action-baris-selling-rate-sea-'+i+'"><a href="#void()" class="tombol tombol-small hapus-baris-selling-rate-sea detail_jadwal" id="hapus-baris-selling-rate-sea-'+i+'"><i class="icon-remove"></i></a></td>';
	} else tabel += '<td class="action" id="action-baris-selling-rate-sea-'+i+'"><a href="#void()" class="tombol tombol-small tambah-baris-selling-rate-sea detail_jadwal" id="tambah-baris-selling-rate-sea-'+i+'"><i class="icon-plus"></i></a></td>';
	tabel += '</tr>';
	$( "#baris-selling-rate-sea" ).val( i + 1 );
	return tabel;
}
$( document ).ready( function() {

	// Initialize
	initialize();
	// Miscellaneous
	
	$('.selling-rate-sea-base_margin').live( 'keyup', function(e){
		var base_rate = 0;
		var selling_rate = 0;
		var asal = $( this ).attr( 'id' );
		var base_rate =	Number($( '#'+asal.replace( 'base_margin', 'buying_rate' ) ).val().replace( /(?!^-)[^0-9.]+/g, "" ) ) + Number( $( this ).val().replace(  /(?!^-)[^0-9.]+/g, "" ) ); 
		var selling_rate =	Number($( '#'+asal.replace( 'base_margin', 'buying_rate' ) ).val().replace( /(?!^-)[^0-9.]+/g, "" ) ) + Number( $( this ).val().replace(  /(?!^-)[^0-9.]+/g, "" ) ) + Number($( '#'+asal.replace( 'base_margin', 'additional_margin' ) ).val().replace( /(?!^-)[^0-9.]+/g, "" ) ); 
		
		// $('#total_debet').val( total_debet ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });

		$('#'+asal.replace( 'base_margin', 'base_rate' ) ).val(base_rate).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
		$('#'+asal.replace( 'base_margin', 'selling_rate' ) ).val(selling_rate).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
	});
	
	//Each Function
	
	// $('.jurnal-umum-debet').live( 'keyup', function(){
		// var total_debet = 0;
		// $('.jurnal-umum-debet').each( function(){
			// total_debet += Number( $( this ).val().replace( /[^0-9.]+/g, "" ) );
		// });
		// $('#total_debet').val( total_debet ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
	// });
	
	
	//Blur : Ketika Pindah
	//Keydown : Ketika di Enter
	
	$( '.detail_jadwal' ).live( 'keydown', function( e ){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 3 ];
		if ( e.which === kodehapusbaris ){
			e.preventDefault();
			var xobj = document.getElementById('hapus-baris-selling-rate-sea-'+num);
			if (xobj != null){
				$( '#hapus-baris-selling-rate-sea-'+( Number( num ) ) ).click();
			}else{
				$("input[id*='" + "selling-rate-sea-"+num + "']").val('');
			}
			setfocus(Number(num),'id','selling-rate-sea');
		}
	});
	
	$( '.selling-rate-sea-id' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 3 ];
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
			setfocus(Number(num)+1,'id','selling-rate-sea');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'id','selling-rate-sea');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'charges_code','selling-rate-sea');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus2((Number(num)),'currency_description','selling-rate-sea');
			}
		}
	});
	
	
	$( '.selling-rate-sea-date_from' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 3 ];
		if ( e.which === 13 ){
			e.preventDefault;
			bookingBaris(num);
			setfocus(Number(num),'date_until','selling-rate-sea');
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'date_from','selling-rate-sea');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'date_from','selling-rate-sea');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
			bookingBaris(num);
			setfocus(Number(num),'date_until','selling-rate-sea');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
			bookingBaris(num);
			setfocus2((Number(num)),'additional_margin','selling-rate-sea');
			}
		}
	});
	
	$( '.selling-rate-sea-date_from' ).live( 'blur', function(){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 3 ];
		bookingBaris(num);
	});
	
	$( '.selling-rate-sea-date_until' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 3 ];
		if ( e.which === 13 ){
			e.preventDefault;
			bookingBaris(num);
			setfocus(Number(num),'charges_code','selling-rate-sea');
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'date_until','selling-rate-sea');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'date_until','selling-rate-sea');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
			bookingBaris(num);
			setfocus(Number(num),'charges_code','selling-rate-sea');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
			bookingBaris(num);
			setfocus((Number(num)),'date_from','selling-rate-sea');
			}
		}
	});
	
	$( '.selling-rate-sea-date_until' ).live( 'blur', function(){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 3 ];
		bookingBaris(num);
	});
	
	$( '.selling-rate-sea-charges_code' ).live( 'blur', function(){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 3 ];
		if($( this ).val()==''){
			$( '#'+asal.replace( 'charges_code', 'charges_description' ) ).val( '' );
		}else{
			if ($( this ).val()!==$( this ).attr('oldvalue')){
				$.post( 'load_charges', { id: $( this ).val() }, function( result ){
					var data = unserialize( result );
					if( result === '' ||  data===null){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Charges code not Found. Please Check Again.</div>';
						$('#alert').html( message );
						$( '#'+asal.replace( 'charges_code', 'charges_description' ) ).val( '' );
						$( '#'+asal ).val( '' );
						$(this).val('');
						$(this).attr("oldvalue",'');
						$( '#'+asal ).focus();
					}else{
						$('#alert').html( "" );	
						$( '#'+asal.replace( 'charges_code', 'charges_description' ) ).val( data['description'] );
					}
				});
			}
		}
	});
	
	$( '.selling-rate-sea-charges_code' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 3 ];
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
			setfocus(Number(num)+1,'charges_code','selling-rate-sea');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'charges_code','selling-rate-sea');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'code_awal','selling-rate-sea');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'date_until','selling-rate-sea');
			}
		}
	});
	
	$( '.selling-rate-sea-code_awal' ).live( 'blur', function(){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 3 ];
		if($( this ).val()==''){
			$( '#'+asal.replace( 'code_awal', 'port_awal' ) ).val( '' );
		}else{
			if ($( this ).val()!==$( this ).attr('oldvalue')){
				$.post( 'load_seaport', { id: $( this ).val() }, function( result ){
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
	$( '.selling-rate-sea-code_awal' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 3 ];
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
			setfocus(Number(num)+1,'code_awal','selling-rate-sea');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'code_awal','selling-rate-sea');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'code_akhir','selling-rate-sea');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'charges_code','selling-rate-sea');
			}
		}
	});
	$( '.selling-rate-sea-code_akhir' ).live( 'blur', function(){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 3 ];
		if($( this ).val()==''){
			$( '#'+asal.replace( 'code_akhir', 'port_akhir' ) ).val( '' );
		}else{
			if ($( this ).val()!==$( this ).attr('oldvalue')){
				$.post( 'load_seaport', { id: $( this ).val() }, function( result ){
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
	
	$( '.selling-rate-sea-code_akhir' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 3 ];
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
			setfocus(Number(num)+1,'code_akhir','selling-rate-sea');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'code_akhir','selling-rate-sea');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'unit_code','selling-rate-sea');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'code_awal','selling-rate-sea');
			}
		}
	});
	
	
	$( '.selling-rate-sea-unit_code' ).live( 'blur', function(){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 3 ];
		if($( this ).val()==''){
			$( '#'+asal.replace( 'unit_code', 'unit_description' ) ).val( '' );
		}else{
			if ($( this ).val()!==$( this ).attr('oldvalue')){
				$.post( 'load_unit', { id: $( this ).val() }, function( result ){
					var data = unserialize( result );
					if( result === '' ||  data===null){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Unit code not Found. Please Check Again.</div>';
						$('#alert').html( message );
						$( '#'+asal.replace( 'unit_code', 'unit_description' ) ).val( '' );
						$( '#'+asal ).val( '' );
						$(this).val('');
						$(this).attr("oldvalue",'');
						$( '#'+asal ).focus();
					}else{
						$('#alert').html( "" );	
						$( '#'+asal.replace( 'unit_code', 'unit_description' ) ).val( data['description'] );
					}
				});
			}
		}
	});
	
	$( '.selling-rate-sea-unit_code' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 3 ];
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
			setfocus(Number(num)+1,'unit_code','selling-rate-sea');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'unit_code','selling-rate-sea');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'currency_code','selling-rate-sea');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'code_akhir','selling-rate-sea');
			}
		}
	});
	
	
	$( '.selling-rate-sea-currency_code' ).live( 'blur', function(){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 3 ];
		if($( this ).val()==''){
			$( '#'+asal.replace( 'currency_code', 'currency_description' ) ).val( '' );
		}else{
			if ($( this ).val()!==$( this ).attr('oldvalue')){
				$.post( 'load_currency', { id: $( this ).val() }, function( result ){
					var data = unserialize( result );
					if( result === '' ||  data===null){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Currency Code not Found. Please Check Again.</div>';
						$('#alert').html( message );
						$( '#'+asal.replace( 'currency_code', 'currency_description' ) ).val( '' );
						$( '#'+asal ).val( '' );
						$(this).val('');
						$(this).attr("oldvalue",'');
						$( '#'+asal ).focus();
					}else{
						$('#alert').html( "" );	
						$( '#'+asal.replace( 'currency_code', 'currency_description' ) ).val( data['description'] );
					}
				});
			}
		}
	});
	
	$( '.selling-rate-sea-currency_code' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 3 ];
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr("oldvalue",$(this).val());
				$( '#cari-'+ asal ).click();
			} else {
				$( '#'+asal.replace( 'currency_code', 'buying_rate' ) ).focus();
			}
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'currency_code','selling-rate-sea');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'currency_code','selling-rate-sea');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'buying_rate','selling-rate-sea');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'unit_code','selling-rate-sea');
			}
		}
	});
	
	$( '.selling-rate-sea-buying_rate' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 3 ];
		if ( e.which === 13 ){
			e.preventDefault;
			setfocus(Number(num),'base_margin','selling-rate-sea');
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'buying_rate','selling-rate-sea');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'buying_rate','selling-rate-sea');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'base_margin','selling-rate-sea');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'currency_code','selling-rate-sea');
			}
		}
	});
	
	$( '.selling-rate-sea-base_margin' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 3 ];
		if ( e.which === 13 ){
			e.preventDefault;
			setfocus(Number(num),'additional_margin','selling-rate-sea');
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'base_margin','selling-rate-sea');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'base_margin','selling-rate-sea');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'additional_margin','selling-rate-sea');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'buying_rate','selling-rate-sea');
			}
		}
	});
	
	$( '.selling-rate-sea-additional_margin' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 3 ];
		if ( e.which === 13 ){
			e.preventDefault;
			if( Number( $( '#baris-selling-rate-sea' ).val() ) === ( Number( num ) + 1 ) ){
				$( '#tambah-baris-selling-rate-sea-'+num ).click();
				nomorbaru();
			}
			setfocus(Number(num)+1,'date_from','selling-rate-sea');
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'additional_margin','selling-rate-sea');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'additional_margin','selling-rate-sea');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num)+1,'date_from','selling-rate-sea');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'base_margin','selling-rate-sea');
			}
		}
	});
	
	$( '.selling-rate-sea-additional_margin' ).live( 'keydown', function( e ){
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== '' ){
				var asal = $( this ).attr( 'id' );
				var num = asal.split( '-' )[ 3 ];
				console.log( $( '#baris-selling-rate-sea' ).val() == ( Number( num ) + 1 ) );
				if( Number( $( '#baris-selling-rate-sea' ).val() ) === ( Number( num ) + 1 ) ){
					$( '#tambah-baris-selling-rate-sea-'+num ).click();
					nomorbaru();
				}
				$( '#selling-rate-sea-'+( Number( num ) + 1 )+'-id' ).focus();
			}
		}
	});
	$( '.selling-rate-sea-quot_id' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 3 ];
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr("oldvalue",$(this).val());
				$( '#cari-'+ asal ).click();
			} else {
				$( '#'+asal.replace( 'quot_id', 'currency_code' ) ).focus();
			}
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'quot_id','selling-rate-sea');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'quot_id','selling-rate-sea');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'quot_id','selling-rate-sea');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'code_akhir','selling-rate-sea');
			}
		}
	});
	// Retrieve data
	$( '#cus_id' ).bind( 'blur', function( ) {
		if($(this).val()!==$(this).attr('oldvalue')){
			$.post( 'db_read', { cus_id: $( '#cus_id' ).val() }, function( result ){
				if( result === '' ){
				
					var cus_id = $( '#cus_id' ).val();
					initializex();
					$( '#cus_id' ).val( cus_id );
				} else {
					var data = unserialize( result );
					if (data[ 'user_name2']!=null){
						show_user_name(data[ 'user_name2']);
					}else if (data[ 'user_name']!=null){
						show_user_name(data[ 'user_name']);
					}else{
						show_user_name('');
					}
					$( "#cus_id" ).val( data[ 'cus_id' ] );
					$( "#company_name" ).val( data[ 'company_name' ] );
					
					$( '.selling-rate-sea-row' ).remove();
					var i = 0;
					for(; data['jadwal'][i]; i++ ){
					
					var tanggal = data['jadwal'][i][ 'date_from' ] .split( "-" );
					var tgl = tanggal[ 2 ];
					var bln = tanggal[ 1 ];
					var thn = tanggal[ 0 ];
					
					var tanggal1 = data['jadwal'][i][ 'date_until' ] .split( "-" );
					var tgl1 = tanggal1[ 2 ];
					var bln1 = tanggal1[ 1 ];
					var thn1 = tanggal1[ 0 ];
						$( '#transaksix' ).append( add_row_selling_rate_sea( i, 1 ) );
						$( '#selling-rate-sea-'+i+'-id' ).val( data['jadwal'][i][ 'id' ] );
						$( '#selling-rate-sea-'+i+'-date_from' ).val( tgl + "-" + bln + "-" + thn );
						$( '#selling-rate-sea-'+i+'-date_until' ).val( tgl1 + "-" + bln1 + "-" + thn1 );
						$( '#selling-rate-sea-'+i+'-charges_code' ).val( data['jadwal'][i][ 'charges_code' ] );
						$( '#selling-rate-sea-'+i+'-charges_description' ).val( data['jadwal'][i][ 'charges_description' ] );
						$( '#selling-rate-sea-'+i+'-code_awal' ).val( data['jadwal'][i][ 'code_awal' ] );
						$( '#selling-rate-sea-'+i+'-port_awal' ).val( data['jadwal'][i][ 'port_awal' ] );
						$( '#selling-rate-sea-'+i+'-code_akhir' ).val( data['jadwal'][i][ 'code_akhir' ] );
						$( '#selling-rate-sea-'+i+'-port_akhir' ).val( data['jadwal'][i][ 'port_akhir' ] );
						$( '#selling-rate-sea-'+i+'-unit_code' ).val( data['jadwal'][i][ 'unit_code' ] );
						$( '#selling-rate-sea-'+i+'-unit_description' ).val( data['jadwal'][i][ 'unit_description' ] );
						$( '#selling-rate-sea-'+i+'-currency_code' ).val( data['jadwal'][i][ 'currency_code' ] );
						$( '#selling-rate-sea-'+i+'-currency_description' ).val( data['jadwal'][i][ 'currency_description' ] );
						$( '#selling-rate-sea-'+i+'-buying_rate' ).val( parseFloat( data['jadwal'][i][ 'buying_rate' ] ) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
						$( '#selling-rate-sea-'+i+'-base_margin' ).val( parseFloat( data['jadwal'][i][ 'base_margin' ] ) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
						$( '#selling-rate-sea-'+i+'-base_rate' ).val( parseFloat( data['jadwal'][i][ 'base_rate' ] ) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
						$( '#selling-rate-sea-'+i+'-additional_margin' ).val( parseFloat( data['jadwal'][i][ 'additional_margin' ] ) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
						$( '#selling-rate-sea-'+i+'-selling_rate' ).val( parseFloat( data['jadwal'][i][ 'selling_rate' ] ) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
						$( '#selling-rate-sea-'+i+'-quot_id' ).val( data['jadwal'][i][ 'quot_id' ] );
						$( '#selling-rate-sea-'+i+'-app_id' ).val( data['jadwal'][i][ 'app_id' ] );
						$( '#baris-selling-rate-sea' ).val( i + 1 );
					}
					$( '#transaksix' ).append( add_row_selling_rate_sea( i, 0 ) );
					$( '.ubah, .hapus, .cetak' ).show();
					$('#cetak').attr('href', 'pdf');
					$( '.simpan' ).hide();
				}
			});
		}
	});
	$( '#cus_id' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			if ($( '#cus_id' ).val()===''){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_kode_customer' ).click();
			}else{		
				$( '#company_name' ).focus();				
			}
		}
	});
	
	$( '#cus_id' ).bind( 'blur', function( ) {
		if ($( '#cus_id' ).val()===''){
			$( '#company_name' ).val( "" );
		}else{
			if($(this).val()!==$(this).attr('oldvalue')){
				$.post( 'db_read_kepala_customer', { id: $( '#cus_id' ).val() }, function( result ){
					if( result === '' ){
						$( '#cus_id' ).val( "" );
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Customer Code Not Found.</div>';
						$('#alert').html( message );						
					} else {
						$( '#company_name' ).val( result );
					}
				});
			}
		}
	});
	
	$( '#cus_id' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== '' ){	
				setfocus(0,'date_from','selling-rate-sea');
			}
		}
	});
	
	
	$( '.cetak' ).bind( 'keydown', function( e ) {
		if ( e.which === 39 ){
			$( '.simpan' ).focus();
			$( '.ubah' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus(0,'date_from','selling-rate-sea');
		}
	});
	
	$( '.simpan' ).bind( 'keydown', function( e ) {
		if ( e.which === 37 ){
			$( '.cetak' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus(0,'date_from','selling-rate-sea');
		}else if ( e.which === 39 ){
			$( '.batal' ).focus();
		}
	});
	
	$( '.ubah' ).bind( 'keydown', function( e ) {
		if ( e.which === 37 ){
			$( '.cetak' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus(0,'date_from','selling-rate-sea');
		}else if ( e.which === 39 ){
			$( '.hapus' ).focus();
		}
	});
	
	$( '.hapus' ).bind( 'keydown', function( e ) {
		if ( e.which === 37 ){
			$( '.ubah' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus(0,'date_from','selling-rate-sea');
		}else if ( e.which === 39 ){
			$( '.batal' ).focus();
		}
	});
	
	$( '.batal' ).bind( 'keydown', function( e ) {
		if ( e.which === 37 ){
			$( '.simpan' ).focus();
			$( '.hapus' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus(0,'date_from','selling-rate-sea');
		}
	});
	// Tambah Hapus Baris TTUS
	
	$( '.tambah-baris-selling-rate-sea' ).live( 'click', function(){
		var str = $( this ).attr( 'id' );
		var num = str.replace( "tambah-baris-selling-rate-sea-", "" );

		// Change action
		$( "#action"+str.replace( "tambah", "" ) ).html(
			'<a href="#void()" class="tombol tombol-small hapus-baris hapus-baris-selling-rate-sea" id="hapus-baris-selling-rate-sea-'+num+'"><i class="icon-remove"></i></a>'
		);

		// Insert row
		$( '#transaksix' ).append(
			add_row_selling_rate_sea( Number( str.replace( 'tambah-baris-selling-rate-sea-', '' ) ) + 1, 0 )
		);
		setfocus(Number(num)+1,'id','selling-rate-sea');
	});

	$( '.hapus-baris-selling-rate-sea' ).live( 'click', function(){
		if( confirm( 'Are You Sure Want to Remove this Row?' ) ){
			var str = $( this ).attr( 'id' );
			var num = str.split('-')[4];
			$( "#"+str.replace( "hapus-baris-", "" ) ).remove();
			setfocus(Number(num),'id','selling-rate-sea');
		}
	});
	// Button Behavior
	
	$( '.simpan' ).click( function(){
		if( $( '#cus_id' ).val() !== '' ){
			$.post( 'db_create', $( 'form' ).serialize(), function( result ){
				success=unserialize(result);
				if( success['status'] ==='Error' ){
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Data '+$( '#cus_id' ).val()+success['ket'] +'</div>';
					$('#alert').html( message );					
					if (success['ket']=='Data Already Exist.'){
						nomorbaru();
					}
				}else if( success['status'] ){
					var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Data '+$( '#cus_id' ).val()+' Complete.</div>';
					$('#alert').html( message );
					$( '#cetak' ).attr( 'href', 'pdf');		
					initializex();
				} else {
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data '+$( '#cus_id' ).val()+' Failed.</div>';
					$('#alert').html( message );
				}
			});
		} else {
			var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data Required.</div>';
			$('#alert').html( message );
		}
	});
	
	$( '.ubah' ).click( function(){
		if( $( '#cus_id' ).val() !== ''){
			$.post( 'db_update', $( 'form' ).serialize(), function( result ){
				success=unserialize(result);
				if( success['status'] ==='Error' ){
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Data '+$( '#cus_id' ).val()+' Failed. '+ success['ket'] +'</div>';
					$('#alert').html( message );					
					if (success['ket']=='Data Already Exist.'){
						nomorbaru();
					}
				}else if( success['status'] ){
					var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Data '+$( '#cus_id' ).val()+' Complete.</div>';
					$('#alert').html( message );
					$( '#cetak' ).attr( 'href', 'pdf');
					initializex();
				} else {
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data '+$( '#cus_id' ).val()+' Failed.</div>';
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
			if( $( '#cus_id' ).val() !== '' ){
				$.post( 'db_delete', { cus_id: $( '#cus_id' ).val() }, function( result ){
					success=unserialize(result);
					if( success['status'] ==='Error' ){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Data '+$( '#cus_id' ).val()+' Failed. '+ success['ket'] +'</div>';
						$('#alert').html( message );					
					}else if( success['status'] ){
						var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Data '+$( '#cus_id' ).val()+' Have been Deleted.</div>';
						$('#alert').html( message );
						initializex();
					} else {
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data '+$( '#cus_id' ).val()+' Failed.</div>';
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
		if (($('#cus_id').val()==='')){
			window.close();
		}else{
			if( confirm( 'Are You Sure Cancel This Transaction?' ) ){
				initializex();
			}
		}
	});
	
	$( '.cetak' ).click( function(){
		$( '#cetak' ).attr( 'href', 'pdf');
	});

});
</script>
