<div class="container">
	<h2 class="judul">Publish Rate(Air)</h2>
	<div id="alert"></div>
	<form class="form-horizontal">
		<fieldset>
		<div class="row">
				<div class="control-group span12" style="height:25px">
					<label class="control-label" for="vendor_id">Vendor ID: </label>
					<div class="controls">
						<div class="input-append">
						<input type="text" name="vendor_id" id="vendor_id" oldvalue="" browseobj="cari_vendor_id" style="width:70px"/><a style="display:none" class="add-on browse" id="cari_vendor_id" href="cari/ref/vendor_id/tipe/br_air" title="Klik untuk mencari kode Vendor Id"><i class="icon-airrch"></i></a></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="control-group span12" style="height:25px">
					<label class="control-label" for="company_name">Company Name: </label>
					<div class="controls">
						<input type="text" name="company_name" id="company_name" class="span9" />
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="span12 tab-pane active ju" style="height:200px" id="ju">
					<input type="hidden" id="baris-publish-rate-air" name="baris-publish-rate-air" value="1" />
					<table class="table">
						<thead>
							<tr><th>Begin Period</th><th>End Period</th><th>Charges Code</th><th>Charges Description</th><th>Code</th><th>Port of Loading</th><th>Code</th><th>Port of Destination</th><th>Unit Code</th><th>Unit Description</th><th>Currency Code</th><th>Currency Description</th><th>Publish Rate</th><th>Base Margin</th><th>Base Rate</th><th></th></tr>
						</thead>
						<tbody id="transaksix">
						</tbody>
					</table>
				</div>
			</div>
			
			<div class="form-actions btn-group">
				<?php if( in_array( 'create_buying_rate_air', unserialize($capabilities) ) ){ ?>
				<a href="#" class="btn btn-primary simpan" style="top:-15px"><i class="icon-ok icon-white"></i> Save</a>
				<?php } ?>
				<a href="#" class="btn cetak browse" id="cetak" style="top:-15px"><i class="icon-print"></i> Print</a>
				<?php if( in_array( 'update_buying_rate_air', unserialize($capabilities) ) ){ ?>
				<a href="#" class="btn btn-primary ubah" style="top:-15px"><i class="icon-pencil icon-white"></i> Update</a>
				<?php } ?>
				<?php if( intval($role)!= 1){ ?>
					<?php if( in_array( 'delete_buying_rate_air', unserialize($capabilities) ) ){ ?>
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
preventempty="vendor_id,company_name";
preventemptystatus="1,1";
function initialize(){
	$( '#vendor_id' ).focus();
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
	$('.publish-rate-air-row').remove();
	$( '#transaksix' ).append(
		add_row_publish_rate_air( 0, 0 )
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
	var tgldatefrom = $( '#publish-rate-air-'+num+'-date_from').val();
	var tgldateuntil = $( '#publish-rate-air-'+num+'-date_until').val();
	
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
	
// function bookingSemua(){
// var status = true;
// $(".buying-rate-air-date_from").each(function()
	// {
		// if($(this).val()!="")
		// {
			// var asalsekarang = $ (this).attr('id');
			// var numsekarang = asalsekarang.split( '-' ) [ 3 ];
			// var datefromsekarang = $( this ).val();
			// var dateuntilsekarang = $('#' + asalsekarang.replace('date_from', 'date_until')).val();
			// var tanggal = datefromsekarang.split( "-" );
			// var tgl = tanggal [ 2 ];
			// var bln = tanggal [ 1 ];
			// var thn = tanggal [ 0 ];
			// var tgldatefrombanding = tgl+""+bln+""+thn;
			// var tanggal = dateuntilsekarang.split( "-" );
			// var tgl = tanggal [ 2 ];
			// var bln = tanggal [ 1 ];
			// var thn = tanggal [ 0 ];
			// var tgldateuntilbanding = tgl+""+bln+""+thn;
			// if(tgldatefrombanding<tgldateuntilbanding)
			// {
			// status=false;
			// var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Validity Until cannot be more earlier than Validity From </div>';
			// $('#alert').html( message );
			// $(this).focus();
			// }
		// }
	// });
		
	// var tgldatefrom = $ ( '#buying-rate-air-date_from' ).val();
	// var tgldateuntil = $ ( '#buying-rate-air-date_until' ).val();
	
	// var tanggal = tgldatefrom.split ( "-" );
	// var tgl = tanggal [ 2 ];
	// var bln = tanggal [ 1 ];
	// var thn = tanggal [ 0 ];
	
	// tgldatefrombanding = tgl+""+bln+""+thn;
	
	// var tanggal = tgldateuntil.split ( "-" );
	// var tgl = tanggal [ 2 ];
	// var bln = tanggal [ 1 ];
	// var thn = tanggal [ 0 ];
	
	// tgldateuntilbanding = tgl+""+bln+""+thn;
	
	// if(tgldatefrom<tgldateuntil)
	// {
		// status=false;
		// var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Validity Until cannot be more earlier than Validity From </div>';
		// $('#alert').html( message );
		// $('#buying-rate-air-date_until').focus();
		// }
		
		// return status;
		// }
	
	
	
	
	
	// function bandingTglSeluruhnya()
// {
	// var status= true;
	// $(".routing-eta").each(function() {
		// if($(this).val()!="")
		// {
			// var asalsekarang = $( this ).attr( 'id' );
			// var numsekarang = asalsekarang.split( '-' )[ 1 ];
			// var etasekarang = $( this ).val();
			// var etdsekarang = $('#' + asalsekarang.replace('eta', 'etd')).val();
			// var tanggal = etasekarang.split( "-" );
			// var tgl = tanggal[ 0 ];
			// var bln = tanggal[ 1 ];
			// var thn = tanggal[ 2 ];
			// var tgletaBanding = thn+""+bln+""+tgl;
			// var tanggal = etdsekarang.split( "-" );
			// var tgl = tanggal[ 0 ];
			// var bln = tanggal[ 1 ];
			// var thn = tanggal[ 2 ];
			// var tgletdBanding = thn+""+bln+""+tgl;
			// if(tgletaBanding<tgletdBanding)
			// {
				// status=false;
				// var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> ETD cannot be more earlier than ETA </div>';
				// $('#alert').html( message );
				// $(this).focus();
			// }

		// }

	// });
	// var tgletd = $( '#shipment_ETD' ).val();
	// var tgleta = $( '#shipment_ETA' ).val();
	// var tanggal = tgleta.split( "-" );
	// var tgl = tanggal[ 0 ];
	// var bln = tanggal[ 1 ];
	// var thn = tanggal[ 2 ];
	// var tgletaBanding = thn+""+bln+""+tgl;
	// var tanggal = tgletd.split( "-" );
	// var tgl = tanggal[ 0 ];
	// var bln = tanggal[ 1 ];
	// var thn = tanggal[ 2 ];
	// var tgletdBanding = thn+""+bln+""+tgl;
	// if(tgletaBanding<tgletdBanding)
	// {
		// status=false;
		// var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> ETD cannot be more earlier than ETA </div>';
		// $('#alert').html( message );
		// $('#shipment_ETA' ).focus();
	// }
	

	// return status;
// }
		
function add_row_publish_rate_air( i, action ){
	var tabel = '<tr class="publish-rate-air-row" id="publish-rate-air-'+i+'">';

	tabel += '<td><div class="input-append"><input style="width:80px" type="text" name="publish_rate_air['+i+'][date_from]" id="publish-rate-air-'+i+'-date_from" class="publish-rate-air-date_from tanggal" /></td>';
	
	tabel += '<td><div class="input-append"><input style="width:80px" type="text" name="publish_rate_air['+i+'][date_until]" id="publish-rate-air-'+i+'-date_until" class="publish-rate-air-date_until tanggal" /></td>';
	
	tabel += '<td><div class="input-append"><input style="width:80px" type="text" name="publish_rate_air['+i+'][charges_code]" id="publish-rate-air-'+i+'-charges_code" class="publish-rate-air-charges_code charges_code detail_jadwal" oldvalue="" browseobj="cari-publish-rate-air-'+i+'-charges_code" /><a style="display:none" class="add-on browse charges_code detail_jadwal" id="cari-publish-rate-air-'+i+'-charges_code" href="cari/ref/publish-rate-air-'+i+'-charges_code/tipe/chra" title="Klik untuk mencari charges_code"><i class="icon-airrch"></i></a></div></td>';
	
	tabel += '<td><input style="width:200px" readonly type="text" name="publish_rate_air['+i+'][charges_description]" id="publish-rate-air-'+i+'-charges_description" class="publish-rate-air-charges_description detail_jadwal" /></td>';
	
	
	tabel += '<td><div class="input-append"><input style="width:80px" type="text" name="publish_rate_air['+i+'][code_awal]" id="publish-rate-air-'+i+'-code_awal" class="publish-rate-air-code_awal detail_jadwal" oldvalue="" browseobj="cari-publish-rate-air-'+i+'-code_awal" /><a style="display:none" class="add-on browse code_awal detail_jadwal" id="cari-publish-rate-air-'+i+'-code_awal" href="cari/ref/publish-rate-air-'+i+'-code_awal/tipe/air" title="Klik untuk mencari code_awal"><i class="icon-airrch"></i></a></div></td>';
	
	tabel += '<td><input style="width:200px" readonly type="text" name="publish_rate_air['+i+'][port_awal]" id="publish-rate-air-'+i+'-port_awal" class="publish-rate-air-port_awal detail_jadwal" /></td>';
	
	
	tabel += '<td><div class="input-append"><input style="width:80px" type="text" name="publish_rate_air['+i+'][code_akhir]" id="publish-rate-air-'+i+'-code_akhir" class="publish-rate-air-code_akhir detail_jadwal" oldvalue="" browseobj="cari-publish-rate-air-'+i+'-code_akhir" /><a style="display:none" class="add-on browse code_akhir detail_jadwal" id="cari-publish-rate-air-'+i+'-code_akhir" href="cari/ref/publish-rate-air-'+i+'-code_akhir/tipe/air" title="Klik untuk mencari code_akhir"><i class="icon-airrch"></i></a></div></td>';
	
	tabel += '<td><input style="width:200px" readonly type="text" name="publish_rate_air['+i+'][port_akhir]" id="publish-rate-air-'+i+'-port_akhir" class="publish-rate-air-port_akhir detail_jadwal" /></td>';
	
	tabel += '<td><div class="input-append"><input style="width:80px" type="text" name="publish_rate_air['+i+'][unit_code]" id="publish-rate-air-'+i+'-unit_code" class="publish-rate-air-unit_code detail_jadwal" oldvalue="" browseobj="cari-publish-rate-air-'+i+'-unit_code" /><a style="display:none" class="add-on browse unit_code detail_jadwal" id="cari-publish-rate-air-'+i+'-unit_code" href="cari/ref/publish-rate-air-'+i+'-unit_code/tipe/unit" title="Klik untuk mencari unit_code"><i class="icon-airrch"></i></a></div></td>';
	
	tabel += '<td><input style="width:80px" readonly type="text" name="publish_rate_air['+i+'][unit_description]" id="publish-rate-air-'+i+'-unit_description" class="publish-rate-air-unit_description detail_jadwal" /></td>';
		
	tabel += '<td><div class="input-append"><input style="width:80px" type="text" name="publish_rate_air['+i+'][currency_code]" id="publish-rate-air-'+i+'-currency_code" class="publish-rate-air-currency_code detail_jadwal" oldvalue="" browseobj="cari-publish-rate-air-'+i+'-currency_code" /><a style="display:none" class="add-on browse currency_code detail_jadwal" id="cari-publish-rate-air-'+i+'-currency_code" href="cari/ref/publish-rate-air-'+i+'-currency_code/tipe/cur" title="Klik untuk mencari currency_code"><i class="icon-airrch"></i></a></div></td>';
	
	tabel += '<td><input style="width:80px" readonly type="text" name="publish_rate_air['+i+'][currency_description]" id="publish-rate-air-'+i+'-currency_description" class="publish-rate-air-currency_description detail_jadwal" /></td>';
	
	tabel += '<td><input style="width:100px;text-align:right" type="text" name="publish_rate_air['+i+'][publish_rate]" id="publish-rate-air-'+i+'-publish_rate" class="publish-rate-air-publish_rate currency detail_jadwal" value="0" /></td>';
	
	tabel += '<td><input style="width:100px;text-align:right" type="text" name="publish_rate_air['+i+'][base_margin]" id="publish-rate-air-'+i+'-base_margin" class="publish-rate-air-base_margin currency detail_jadwal" value="0" /></td>';
	
	tabel += '<td><input style="width:100px;text-align:right" readonly type="text" name="publish_rate_air['+i+'][base_rate]" id="publish-rate-air-'+i+'-base_rate" class="publish-rate-air-base_rate currency detail_jadwal" value="0" /></td>';
	
	if( action === 1 ){
		tabel += '<td class="action" id="action-baris-publish-rate-air-'+i+'"><a href="#void()" class="tombol tombol-small hapus-baris-publish-rate-air detail_jadwal" id="hapus-baris-publish-rate-air-'+i+'"><i class="icon-remove"></i></a></td>';
	} else tabel += '<td class="action" id="action-baris-publish-rate-air-'+i+'"><a href="#void()" class="tombol tombol-small tambah-baris-publish-rate-air detail_jadwal" id="tambah-baris-publish-rate-air-'+i+'"><i class="icon-plus"></i></a></td>';
	tabel += '</tr>';
	$( "#baris-publish-rate-air" ).val( i + 1 );
	return tabel;
}

$( document ).ready( function() {

	// Initialize
	initialize();
	// Miscellaneous
	
	$('.publish-rate-air-publish_rate').live( 'keyup', function(e){
		var base_rate = 0;
		var asal = $( this ).attr( 'id' );
		
		var base_rate =	Number($( '#'+asal.replace( 'publish_rate', 'base_margin' ) ).val().replace( /(?!^-)[^0-9.]+/g, "" ) ) + Number( $( this ).val().replace(  /(?!^-)[^0-9.]+/g, "" ) );
		
		$('#'+asal.replace( 'publish_rate', 'base_rate' ) ).val(base_rate).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
	});
	

	$('.publish-rate-air-base_margin').live( 'keyup', function(e){
		var base_rate = 0;
		var asal = $( this ).attr( 'id' );
		var base_rate =	Number($( '#'+asal.replace( 'base_margin', 'publish_rate' ) ).val().replace( /(?!^-)[^0-9.]+/g, "" ) ) + Number( $( this ).val().replace(  /(?!^-)[^0-9.]+/g, "" ) );
		
		// $('#total_debet').val( total_debet ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });

		$('#'+asal.replace( 'base_margin', 'base_rate' ) ).val(base_rate).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
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
		var num = asal.split( '-' )[ 2 ];
		if ( e.which === kodehapusbaris ){
			e.preventDefault();
			var xobj = document.getElementById('hapus-baris-publish-rate-air-'+num);
			if (xobj != null){
				$( '#hapus-baris-publish-rate-air-'+( Number( num ) ) ).click();
			}else{
				$("input[id*='" + "publish-rate-air-"+num + "']").val('');
			}
			setfocus(Number(num),'id','publish-rate-air');
		}
	});
	
	$( '.publish-rate-air-id' ).live( 'keydown', function( e ){
	
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
			setfocus(Number(num)+1,'id','publish-rate-air');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'id','publish-rate-air');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'charges_code','publish-rate-air');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus2((Number(num)),'currency_description','publish-rate-air');
			}
		}
	});
	
	$( '.publish-rate-air-date_from' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 3 ];
		if ( e.which === 13 ){
			e.preventDefault;
			bookingBaris(num);
			setfocus(Number(num),'date_until','publish-rate-air');
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'date_from','publish-rate-air');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'date_from','publish-rate-air');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
			bookingBaris(num);
				setfocus(Number(num),'date_until','publish-rate-air');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
			bookingBaris(num);
				setfocus2((Number(num)),'additional_margin','publish-rate-air');
			}
		}
	});
	
	$( '.publish-rate-air-date_from' ).live( 'blur', function(){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 3 ];
		bookingBaris(num);
	});
		
	$( '.publish-rate-air-date_until' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 3 ];
		if ( e.which === 13 ){
			e.preventDefault;
			bookingBaris(num);
			setfocus(Number(num),'charges_code','publish-rate-air');
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'date_until','publish-rate-air');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'date_until','publish-rate-air');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
			bookingBaris(num);
				setfocus(Number(num),'charges_code','publish-rate-air');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'date_from','publish-rate-air');
			}
		}
	});
	
	$( '.publish-rate-air-date_until' ).live( 'blur', function(){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 3 ];
		bookingBaris(num);
	});
	
	
	$( '.publish-rate-air-charges_code' ).live( 'blur', function(){
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
	
	$( '.publish-rate-air-charges_code' ).live( 'keydown', function( e ){
	
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
			setfocus(Number(num)+1,'charges_code','publish-rate-air');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'charges_code','publish-rate-air');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'code_awal','publish-rate-air');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'date_until','publish-rate-air');
			}
		}
	});
	
	$( '.publish-rate-air-code_awal' ).live( 'blur', function(){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 3 ];
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
	$( '.publish-rate-air-code_awal' ).live( 'keydown', function( e ){
	
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
			setfocus(Number(num)+1,'code_awal','publish-rate-air');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'code_awal','publish-rate-air');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'code_akhir','publish-rate-air');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'charges_code','publish-rate-air');
			}
		}
	});
	$( '.publish-rate-air-code_akhir' ).live( 'blur', function(){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 3 ];
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
	
	$( '.publish-rate-air-code_akhir' ).live( 'keydown', function( e ){
	
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
			setfocus(Number(num)+1,'code_akhir','publish-rate-air');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'code_akhir','publish-rate-air');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'unit_code','publish-rate-air');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'code_awal','publish-rate-air');
			}
		}
	});
	
	$( '.publish-rate-air-unit_code' ).live( 'blur', function(){
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
	
	$( '.publish-rate-air-unit_code' ).live( 'keydown', function( e ){
	
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
			setfocus(Number(num)+1,'unit_code','publish-rate-air');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'unit_code','publish-rate-air');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'currency_code','publish-rate-air');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'code_akhir','publish-rate-air');
			}
		}
	});
	
	
	$( '.publish-rate-air-currency_code' ).live( 'blur', function(){
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
	
	$( '.publish-rate-air-currency_code' ).live( 'keydown', function( e ){
	
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
			setfocus(Number(num)+1,'currency_code','publish-rate-air');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'currency_code','publish-rate-air');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'buying_rate','publish-rate-air');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'unit_code','publish-rate-air');
			}
		}
	});
	
	$( '.publish-rate-air-buying_rate' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 3 ];
		if ( e.which === 13 ){
			e.preventDefault;
			setfocus(Number(num),'base_margin','publish-rate-air');
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'buying_rate','publish-rate-air');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'buying_rate','publish-rate-air');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'base_margin','publish-rate-air');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'currency_code','publish-rate-air');
			}
		}
	});
	
	$( '.publish-rate-air-base_margin' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 3 ];
		if ( e.which === 13 ){
			e.preventDefault;
			setfocus(Number(num),'additional_margin','publish-rate-air');
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'base_margin','publish-rate-air');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'base_margin','publish-rate-air');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'additional_margin','publish-rate-air');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'buying_rate','publish-rate-air');
			}
		}
	});
	
	$( '.publish-rate-air-additional_margin' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 3 ];
		if ( e.which === 13 ){
			e.preventDefault;
			if( Number( $( '#baris-publish-rate-air' ).val() ) === ( Number( num ) + 1 ) ){
				$( '#tambah-baris-publish-rate-air-'+num ).click();
				nomorbaru();
			}
			setfocus(Number(num)+1,'date_from','publish-rate-air');
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'additional_margin','publish-rate-air');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'additional_margin','publish-rate-air');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num)+1,'date_from','publish-rate-air');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'base_margin','publish-rate-air');
			}
		}
	});
	
	$( '.publish-rate-air-additional_margin' ).live( 'keydown', function( e ){
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== '' ){
				var asal = $( this ).attr( 'id' );
				var num = asal.split( '-' )[ 2 ];
				console.log( $( '#baris-publish-rate-air' ).val() == ( Number( num ) + 1 ) );
				if( Number( $( '#baris-publish-rate-air' ).val() ) === ( Number( num ) + 1 ) ){
					$( '#tambah-baris-publish-rate-air-'+num ).click();
					nomorbaru();
				}
				$( '#publish-rate-air-'+( Number( num ) + 1 )+'-id' ).focus();
			}
		}
	});
	// Retrieve data
	$( '#vendor_id' ).bind( 'blur', function( ) {
		if($(this).val()!==$(this).attr('oldvalue')){
			$.post( 'db_read', { vendor_id: $( '#vendor_id' ).val() }, function( result ){
				if( result === '' ){
					var vendor_id = $( '#vendor_id' ).val();
					initializex();
					$( '#vendor_id' ).val( vendor_id );
				} else {
					var data = unserialize( result );
					if (data[ 'user_name2']!=null){
						show_user_name(data[ 'user_name2']);
					}else if (data[ 'user_name']!=null){
						show_user_name(data[ 'user_name']);
					}else{
						show_user_name('');
					}
					
					$( "#vendor_id" ).val( data[ 'vendor_id' ] );
					$( "#company_name" ).val( data[ 'company_name' ] );
					
					$( '.publish-rate-air-row' ).remove();
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
					
						$( '#transaksix' ).append( add_row_publish_rate_air( i, 1 ) );
						$( '#publish-rate-air-'+i+'-id' ).val( data['jadwal'][i][ 'id' ] );
						$( '#publish-rate-air-'+i+'-date_from' ).val( tgl + "-" + bln + "-" + thn );
						$( '#publish-rate-air-'+i+'-date_until' ).val( tgl1 + "-" + bln1 + "-" + thn1 );
						$( '#publish-rate-air-'+i+'-charges_code' ).val( data['jadwal'][i][ 'charges_code' ] );
						$( '#publish-rate-air-'+i+'-charges_description' ).val( data['jadwal'][i][ 'charges_description' ] );
						$( '#publish-rate-air-'+i+'-code_awal' ).val( data['jadwal'][i][ 'code_awal' ] );
						$( '#publish-rate-air-'+i+'-port_awal' ).val( data['jadwal'][i][ 'port_awal' ] );
						$( '#publish-rate-air-'+i+'-code_akhir' ).val( data['jadwal'][i][ 'code_akhir' ] );
						$( '#publish-rate-air-'+i+'-port_akhir' ).val( data['jadwal'][i][ 'port_akhir' ] );
						$( '#publish-rate-air-'+i+'-unit_code' ).val( data['jadwal'][i][ 'unit_code' ] );
						$( '#publish-rate-air-'+i+'-unit_description' ).val( data['jadwal'][i][ 'unit_description' ] );
						$( '#publish-rate-air-'+i+'-currency_code' ).val( data['jadwal'][i][ 'currency_code' ] );
						$( '#publish-rate-air-'+i+'-currency_description' ).val( data['jadwal'][i][ 'currency_description' ] );
						$( '#publish-rate-air-'+i+'-publish_rate' ).val( parseFloat( data['jadwal'][i][ 'publish_rate' ] ) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
						$( '#publish-rate-air-'+i+'-base_margin' ).val( parseFloat( data['jadwal'][i][ 'base_margin' ] ) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
						$( '#publish-rate-air-'+i+'-base_rate' ).val( parseFloat( data['jadwal'][i][ 'base_rate' ] ) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
						$( '#publish-rate-air-'+i+'-additional_margin' ).val( parseFloat( data['jadwal'][i][ 'additional_margin' ] ) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
						$( '#publish-rate-air-'+i+'-selling_rate' ).val( parseFloat( data['jadwal'][i][ 'selling_rate' ] ) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
						$( '#baris-publish-rate-air' ).val( i + 1 );
					}
					$( '#transaksix' ).append( add_row_publish_rate_air( i, 0 ) );
					$( '.ubah, .hapus, .cetak' ).show();
					
					$( '.simpan' ).hide();
				}
			});
		}
	});
	
	$( '#vendor_id' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){	
				$(this).attr("oldvalue",$(this).val());
				$( '#cari-'+ asal ).click();
			} else {
				$('#company_name').focus();
			}
		}else if ( e.which === 40 ){
			e.preventDefault;
			$( '#company_name' ).focus();
		}
	});
	
	$( '#company_name' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			setfocus(0,'date_from','publish-rate-air');
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#vendor_id' ).focus();
		}else if ( e.which === 40 ){
			e.preventDefault;
			$( '.cetak' ).focus();
			$( '.simpan' ).focus();
		}
	});
	
	$( '.cetak' ).bind( 'keydown', function( e ) {
		if ( e.which === 39 ){
			$( '.simpan' ).focus();
			$( '.ubah' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus(0,'date_from','publish-rate-air');
		}
	});
	
	$( '.simpan' ).bind( 'keydown', function( e ) {
		if ( e.which === 37 ){
			$( '.cetak' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus(0,'date_from','publish-rate-air');
		}else if ( e.which === 39 ){
			$( '.batal' ).focus();
		}
	});
	
	$( '.ubah' ).bind( 'keydown', function( e ) {
		if ( e.which === 37 ){
			$( '.cetak' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus(0,'date_from','publish-rate-air');
		}else if ( e.which === 39 ){
			$( '.hapus' ).focus();
		}
	});
	
	$( '.hapus' ).bind( 'keydown', function( e ) {
		if ( e.which === 37 ){
			$( '.ubah' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus(0,'date_from','publish-rate-air');
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
			setfocus(0,'date_from','publish-rate-air');
		}
	});
	// Tambah Hapus Baris TTUS
	
	$( '.tambah-baris-publish-rate-air' ).live( 'click', function(){
		var str = $( this ).attr( 'id' );
		var num = str.replace( "tambah-baris-publish-rate-air-", "" );

		// Change action
		$( "#action"+str.replace( "tambah", "" ) ).html(
			'<a href="#void()" class="tombol tombol-small hapus-baris hapus-baris-publish-rate-air" id="hapus-baris-publish-rate-air-'+num+'"><i class="icon-remove"></i></a>'
		);

		// Insert row
		$( '#transaksix' ).append(
			add_row_buying_rate_air( Number( str.replace( 'tambah-baris-publish-rate-air-', '' ) ) + 1, 0 )
		);
		setfocus(Number(num)+1,'id','publish-rate-air');
	});

	$( '.hapus-baris-publish-rate-air' ).live( 'click', function(){
		if( confirm( 'Are You Sure Want to Remove this row?' ) ){
			var str = $( this ).attr( 'id' );
			var num = str.split('-')[5];
			$( "#"+str.replace( "hapus-baris-", "" ) ).remove();
			setfocus(Number(num),'id','publish-rate-air');
		}
	});

	// Button Behavior
	
	$( '.simpan' ).click( function(){
		if( $( '#vendor_id' ).val() !== '' ){
			$.post( 'db_create', $( 'form' ).serialize(), function( result ){
				success=unserialize(result);
				// bookingSemua();
				if( success['status'] ==='Error' ){
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Data '+$( '#vendor_id' ).val()+success['ket'] +'</div>';
					$('#alert').html( message );					
					if (success['ket']=='Data Already Exist.'){
						nomorbaru();
					}
				}else if( success['status'] ){
					var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Data '+$( '#vendor_id' ).val()+' Complete.</div>';
					$('#alert').html( message );
					$( '#cetak' ).attr( 'href', 'pdf?vendor_id=' + $('#vendor_id').val());	
					
					initializex();
				} else {
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data '+$( '#vendor_id' ).val()+' Failed.</div>';
					$('#alert').html( message );
				}
			});
		} else {
			var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data Required.</div>';
			$('#alert').html( message );
		}
	});
	
	$( '.ubah' ).click( function(){
		if( $( '#vendor_id' ).val() !== ''){
			$.post( 'db_update', $( 'form' ).serialize(), function( result ){
				success=unserialize(result);
				// bookingSemua();
				if( success['status'] ==='Error' ){
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Data '+$( '#vendor_id' ).val()+' Failed. '+ success['ket'] +'</div>';
					$('#alert').html( message );					
					if (success['ket']=='Data Already Exist.'){
						nomorbaru();
					}
				}else if( success['status'] ){
					var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Data '+$( '#vendor_id' ).val()+' Complete.</div>';
					$('#alert').html( message );
					$( '#cetak' ).attr( 'href', 'pdf?vendor_id=' + $('#vendor_id').val());
					
					initializex();
				} else {
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data '+$( '#vendor_id' ).val()+' Failed.</div>';
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
			if( $( '#vendor_id' ).val() !== '' ){
				$.post( 'db_delete', { vendor_id: $( '#vendor_id' ).val() }, function( result ){
					success=unserialize(result);
					if( success['status'] ==='Error' ){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Data '+$( '#vendor_id' ).val()+' Failed. '+ success['ket'] +'</div>';
						$('#alert').html( message );					
					}else if( success['status'] ){
						var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Data '+$( '#vendor_id' ).val()+' Have been Deleted.</div>';
						$('#alert').html( message );
						initializex();
					} else {
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data '+$( '#vendor_id' ).val()+' Failed.</div>';
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
		if (($('#vendor_id').val()==='')){
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
