<div class="container">
	<h2 class="judul">Master Sales Commision</h2>
	<div id="alert"></div>
	<form class="form-horizontal">
		<fieldset>
		<div class="row">
					  <div class="control-group span6" style="height:15px">
					            <label class="control-label" for="date">Date</label>
					            <div class="controls">
						            <input type="text" name="date" id="date" class="tanggal"/>
					              </div>
					
				            </div>
			</div>
			
			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="sales_code">Sales Code</label>
					<div class="controls">
						<div class="input-append"><input type="text" name="sales_code"
						id="sales_code" oldvalue="" browseobj="cari_kode_sales" style="width:50px"/>
						<a style="display:none" class="add-on browse" id="cari_kode_sales"
						href="cari?ref=sales_code&tipe=sal" title="Klik untuk mencari Kode sales">
						<i class="icon-search"></i></a></div>
										
					</div>
					
				</div>
			</div>
				
			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="nama_sales">Sales Name</label>
					<div class="controls">
						<input type="text" name="nama_sales"  style="width:440px"  readonly="readonly" id="nama_sales" />
						<!--<a style="display:none" class="add-on browse" id="cari_sales_code" href="cari?ref=sales_code&tipe=sal" title="Klik untuk mencari Sales Code"><i class="icon-search"></i></a>-->
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="team">Team</label>
					<div class="controls">
						<input type="text" name="team" id="team" />
					</div>
				</div>
			</div>
			<div class="row">
				<div class="span12 tab-pane active ju" style="height:200px" id="ju">
					<input type="hidden" id="baris-sales-commision" name="baris-sales-commision" value="0" />
					<table class="table">
						<thead>
							<tr><th></th><th>Periode Awal</th><th>Periode Akhir</th><th>Net Profit From</th><th>Net Profit Until</th><th>% Of Commision</th><th></th></tr>
						</thead>
						<tbody id="transaksix">
						</tbody>
					</table>
				</div>
			</div>
			
			<div class="form-actions btn-group" style="height:0px">
				<a href="#" class="btn browse cetak" style="top:-15px">
				<i class="icon-print"></i> Print</a>
				<?php if( in_array( 'create_sales', unserialize($capabilities) ) ){ ?>
					<a href="#" class="btn btn-primary simpan" style="top:-15px">
					<i class="icon-ok icon-white"></i> Save</a>
				<?php } ?>
				<?php if( in_array( 'update_sales', unserialize($capabilities) ) ){ ?>
					<a href="#" class="btn btn-primary ubah" style="top:-15px">
					<i class="icon-pencil icon-white"></i>Update</a>
				<?php } ?>
				<?php if( intval($role)!=0 ) { ?>
					<?php if( in_array( 'delete_sales', unserialize($capabilities) ) ){ ?>
						<a href="#" class="btn btn-danger hapus" style="top:-15px">
						<i class="icon-trash icon-white"></i> Delete</a>
					<?php } ?>
				<?php } ?>
					<a href="#" class="btn batal" style="top:-15px">
					<i class="icon-refresh"></i>Cancel</a>
			</div>
		</fieldset>
		
	</form>
</div>

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



//Initialize
preventempty="sales_code,nama_sales,team,date,date_awal,date_akhir,target_min,target_max,perentase";
preventemptystatus="1,1,1,1,1,1,1,1,1";
function initialize(){
	initializex();
	$( '#date' ).focus();
	
}
function initializex(){

	$('.simpan, .batal' ).show();
	$('.ubah, .hapus' ).hide();
	$('input:text, textarea').val('');
	$('input:checkbox').removeAttr('checked');
	$('#cari_kode_sales').tooltip();
	$('.alert').alert();
	$('.tanggal').datepicker({
		dateFormat: 'dd-mm-yy',
		changeMonth:true,
		changeYear:true
	});
	$('#cetak').attr('href', '');
	$('.sales-commision-row').remove();
	$( '#transaksix' ).append(
		add_row_sales_comision( 0, 0 )
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
			for( var i = lastid.length; i < 4; i++ ){
				lastid = '0' + lastid;
			}
			$( '#id' ).val( lastid );
		}
	});
}

function add_row_sales_comision( i, action ){
	var tabel = '<tr class="sales-commision-row" id="sales-commision-'+i+'">';

	tabel += '<td><div class="input-append"><input style="width:50px" type="hidden" name="sales_commision['+i+'][id]" id="sales-commision-'+i+'-id" class="sales_commision-id id detail_jadwal" oldvalue="" browseobj="cari-sales-commision-'+i+'-id" /></div></td>';
	
	tabel += '<td><div class="input-append"><input style="width:80px" type="text" name="sales_commision['+i+'][date_awal]" id="sales-commision-'+i+'-date_awal" class="sales_commision tanggal" /></td>';
	
	tabel += '<td><div class="input-append"><input style="width:80px" type="text" name="sales_commision['+i+'][date_akhir]" id="sales-commision-'+i+'-date_akhir" class="sales_commision tanggal" /></td>';
	
	tabel += '<td><div class="input-append"><input style="width:200px" type="text" name="sales_commision['+i+'][target_min]" id="sales-commision-'+i+'-target_min" class="sales_commision target_min  currency detail_jadwal" oldvalue="" browseobj="cari-sales-commision-'+i+'-target_min" value="0" /></div></td>';
	
	tabel += '<td><input style="width:200px"  type="text" name="sales_commision['+i+'][target_max]" id="sales-commision-'+i+'-target_max" class="sales_commision currency detail_jadwal" value="0"/></td>';
	
	tabel += '<td><input style="width:200px"  type="text" name="sales_commision['+i+'][perentase]" id="sales-commision-'+i+'-perentase" class="sales_commision currency detail_jadwal" value="0" /></td>';
	

	if( action === 1 ){
		tabel += '<td class="action" id="action-baris-sales-commision-'+i+'"><a href="#void()" class="tombol tombol-small hapus-baris-sales-commision detail_jadwal" id="hapus-baris-sales-commision-'+i+'"><i class="icon-remove"></i></a></td>';
	} else tabel += '<td class="action" id="action-baris-sales-commision-'+i+'"><a href="#void()" class="tombol tombol-small tambah-baris-sales-commision detail_jadwal" id="tambah-baris-sales-commision-'+i+'"><i class="icon-plus"></i></a></td>';
	tabel += '</tr>';
	$( "#baris-sales-commision" ).val( i + 1 );
	return tabel;
}

$( document ).ready( function() {

	// Initialize

	initialize();

	// Retrieve data
	//Blur : Ketika Pindah
	//Keydown : Ketika di Enter
	
	$( '.detail_jadwal' ).live( 'keydown', function( e ){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 2 ];
		if ( e.which === kodehapusbaris ){
			e.preventDefault();
			var xobj = document.getElementById('hapus-sales-commision-'+num);
			if (xobj != null){
				$( '#hapus-baris-sales-commision-'+( Number( num ) ) ).click();
			}else{
				$("input[id*='" + "sales-commision-"+num + "']").val('');
			}
			setfocus(Number(num),'id','sales-commision');
		}
	});
	
	
	$( '.sales-commision-date_awal' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 3 ];
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr("oldvalue",$(this).val());
				$( '#cari-'+ asal ).click();
			} else {
				$( '#'+asal.replace( 'date_awal', 'sales_code' ) ).focus();
			}
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'date_awal','sales-commision');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'date_awal','sales-commision');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'date_akhir','sales-commision');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus2((Number(num)),'target_min','sales-commision');
			}
		}
	});
$( '.sales-commision-perentase' ).live( 'keydown', function( e ){
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== '' ){
				var asal = $( this ).attr( 'id' );
				var num = asal.split( '-' )[ 3 ];
				console.log( $( '#baris-sales-commision' ).val() == ( Number( num ) + 1 ) );
				if( Number( $( '#baris-sales-commision' ).val() ) === ( Number( num ) + 1 ) ){
					$( '#tambah-baris-sales-commision-'+num ).click();
					nomorbaru();
				}
				$( '#sales-commision-'+( Number( num ) + 1 )+'-id' ).focus();
			}
		}
	});
	// Retrieve data untuk menampilakn data yg telah di cari f5 ketika di enter
	
	
// Tambah Hapus Baris TTUS
	
	$( '.tambah-baris-sales-commision' ).live( 'click', function(){
		var str = $( this ).attr( 'id' );
		var num = str.replace( "tambah-sales-commision-", "" );

		// Change action
		$( "#action"+str.replace( "tambah", "" ) ).html(
			'<a href="#void()" class="tombol tombol-small hapus-baris hapus-baris-sales-commision" id="hapus-baris-sales-commision-'+num+'"><i class="icon-remove"></i></a>'
		);

		// Insert row
		$( '#transaksix' ).append(
			add_row_sales_comision( Number( str.replace( 'tambah-baris-sales-commision-', '' ) ) + 1, 0 )
		);
		setfocus(Number(num)+1,'id','sales-commision');
	});

	$( '.hapus-baris-sales-commision' ).live( 'click', function(){
		if( confirm( 'Are You Sure Want Cancel This Transaction?' ) ){
			var str = $( this ).attr( 'id' );
			var num = str.split('-')[4];
			$( "#"+str.replace( "hapus-baris-", "" ) ).remove();
			setfocus(Number(num),'id','sales-commision');
		}
	});
	
	
$( '#sales_code' ).bind( 'blur', function( ) {
		if($(this).val()!==$(this).attr('oldvalue')){	
			$.post( 'db_read', { id: $( '#sales_code' ).val() }, function( result ){
				if( result === '' ){
				
					var id = $( '#sales_code' ).val();
					initializex();
					$( '#sales_code' ).val( id );
					
				} else {
			
					var data = unserialize( result );
						var data = unserialize( result );
					if (data[ 'user_name2']!=null){
						show_user_name(data[ 'user_name2']);
					}else if (data[ 'user_name']!=null){
						show_user_name(data[ 'user_name']);
					}else{
						show_user_name('');
					}
				
					
					
					$( "#sales_code" ).val( data['sales_code'] );					
					$( "#nama_sales" ).val( data['nama_sales'] );
					$( "#team" ).val( data[ 'team' ] );
					$( "#date" ).val( data[ 'date' ] );
					//$( "#date_awal" ).val( data[ 'date_awal' ] );
					//$( "#date_akhir" ).val( data[ 'date_akhir' ] );
					//$( "#target_min" ).val( data[ 'target_min' ] );
					//$( "#target_max" ).val( data[ 'target_max' ] );
					//$( "#perentase" ).val( data[ 'perentase' ] );
					
					//$( '.sales-commision-row' ).remove();
					//var i = 0;
					//for(; data['jadwal'][i]; i++ ){
					//	$( '#transaksix' ).append( add_row_sales_comision( i, 1 ) );
					//	$( '#sales-commision-'+i+'-id' ).val( data['jadwal'][i][ 'id' ] );
					//	$( '#sales-commision-'+i+'-date_awal' ).val( data['jadwal'][i][ 'date_awal' ] );
					//	$( '#sales-commision-'+i+'-date_akhir' ).val( data['jadwal'][i][ 'date_akhir' ] );
					///	$( '#sales-commision-'+i+'-target_min' ).val( data['jadwal'][i][ 'target_min' ] );
					//	$( '#sales-commision-'+i+'-target_max' ).val( data['jadwal'][i][ 'target_max' ] );
					//	$( '#sales-commision-'+i+'-perentase' ).val( data['jadwal'][i][ 'perentase' ] );
						
					//	$( '#baris-sales-commision' ).val( i + 1 );
					//}
					//$( '#transaksix' ).append( add_row_sales_comision( i, 0 ) );	 
					$( '.ubah,.hapus' ).hide();
					$('#cetak').attr('href', 'pdf?sales_code=' + $('#sales_code').val());
					$( '.simpan,.cetak' ).show();
					
				}
			});
		}
	});
	
	
	$( '#sales_code' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			if ($( '#sales_code' ).val()===''){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_sales_code' ).click();
			}else{
				if ($('.simpan').is(':visible')){
				$( '.simpan' ).focus();
				}else{
					$( '.ubah' ).focus();
				}
			}
		}
	});
	
	
	$( '#sales_code' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_kode_sales' ).click();  //function ketika di browsing dari data grid
			} else {
				$( '#team' ).focus();
				
			}
		}
	});
	
	
	$( '#team' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '.simpan' ).focus();
		}
	});
	
	//Button untuk menyimpan data yang function dari models dan controller
	$( '.simpan' ).click( function(){
	
		if( $( '#sales_code' ).val() !== '' ){
			$.post( 'db_create', $( 'form' ).serialize(), function( result ){
				success=unserialize(result);
				if( success['status'] ==='Error' ){
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Create Data '+$( '#sales_code' ).val()+' Failed. '+ success['ket'] +'</div>';
					$('#alert').html( message );					
				}else if( success['status'] ){
					var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Create Data '+$( '#sales_code' ).val()+' Complete.</div>';
					$('#alert').html( message );
					initialize();
				} else {
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Create Data '+$( '#sales_code' ).val()+' Failed.</div>';
					$('#alert').html( message );
				}
			});
		} else {
			var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data Required.</div>';
			$('#alert').html( message );
		}
	});
	$( '.ubah' ).click( function(){
		if( $( '#sales_code' ).val() !== '' ){
			$.post( 'db_update', $( 'form' ).serialize(), function( result ){
				success=unserialize(result);
				if( success['status'] ==='Error' ){
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Update Data '+$( '#sales_code' ).val()+' Failed. '+ success['ket'] +'</div>';
					$('#alert').html( message );					
				}else if( success['status'] ){
					 var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Update Data '+$( '#sales_code' ).val()+' Complete.</div>';
					$('#alert').html( message );
					initialize();
				} else {
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Update Data '+$( '#sales' ).val()+' Failed.</div>';
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
			if( $( '#sales_code' ).val() !== '' ){
				$.post( 'db_delete', { id: $( '#sales_code' ).val() }, function( result ){
					success=unserialize(result);
					if( success['status'] ==='Error' ){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Delete Data '+$( '#sales_code' ).val()+' Failed. '+ success['ket'] +'</div>';
						$('#alert').html( message );					
					}else if( success['status'] ){
						var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong>Delete Data '+$( '#sales_code' ).val()+' Complete.</div>';
						$('#alert').html( message );
						initialize();
					} else {
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Delete Data '+$( '#sales_code' ).val()+' Failed.</div>';
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
		if ($('#sales_code').val()===''){
			window.close();
		}else{
			if( confirm( 'Are You Sure Cancel This Transaction?' ) ){
				initialize();
			}
		}
	});

});

</script>