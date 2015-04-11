<div class="container">
	<h2 class="judul">Master Sales Commision</h2>
	<div id="alert"></div>
	<form class="form-horizontal">
		<fieldset>
		<!--<div class="row">
					  <div class="control-group span6" style="height:15px">
					            <label class="control-label" for="date">Date</label>
					            <div class="controls">
						            <input type="text" name="date" id="date" class="tanggal"/>
					              </div>
					          </div>
			</div>-->
			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="sales_code"><u>S</u>ales Code</label>
					<div class="controls">
						<div class="input-append"><input type="text" name="sales_code"
						id="sales_code" oldvalue="" browseobj="cari_kode_sales" style="width:50px"/>
						<a style="display:none" class="add-on browse" id="cari_kode_sales"
						href="cari/ref/sales_code/tipe/sal" title="Klik untuk mencari Kode sales">
						<i class="icon-search"></i></a></div>
										
					</div>
					
				</div>
			</div>
				
			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="nama_sales"><u>S</u>ales Name</label>
					<div class="controls">
						<input type="text" name="nama_sales"  style="width:440px"  readonly="readonly" id="nama_sales" />
						<!--<a style="display:none" class="add-on browse" id="cari_sales_code" href="cari?ref=sales_code&tipe=sal" title="Klik untuk mencari Sales Code"><i class="icon-search"></i></a>-->
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="team"><u>T</u>eam</label>
					<div class="controls">
						<input type="text" name="team" id="team" readonly="readonly"/>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="span12 tab-pane active ju" style="height:200px" id="ju">
					<input type="hidden" id="baris-sales-comision" name="baris-sales-comision" value="0" />
					<table class="table">
						<thead>
							<tr><th>Begin Periode </th><th>End Periode </th><th>Net Profit From</th><th>Net Profit Until</th><th>Percentage Commision</th><th></th></tr>
						</thead>
						<tbody id="transaksix">
						</tbody>
					</table>
				</div>
			</div>
			
			
			<div class="form-actions btn-group">
				<?php if( in_array( 'create_sales_com', unserialize($capabilities) ) ){ ?>
				<a href="#" class="btn btn-primary simpan" style="top:-15px"><i class="icon-ok icon-white"></i> Save</a>
				<?php } ?>
				<a href="#" class="btn cetak browse" id="cetak" style="top:-15px"><i class="icon-print"></i> Print</a>
				<?php if( in_array( 'update_sales_com', unserialize($capabilities) ) ){ ?>
				<a href="#" class="btn btn-primary ubah" style="top:-15px"><i class="icon-pencil icon-white"></i> Update</a>
				<?php } ?>
				<?php if( intval($role)!= 1){ ?>
					<?php if( in_array( 'delete_sales_com', unserialize($capabilities) ) ){ ?>
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
preventempty="sales_code,date,nama_sales,team";
preventemptystatus="1,1,1,1";
function initialize(){
	$( '#sales_code' ).focus();
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

	$('.sales-comision-row').remove();
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
	$( "#date" ).val( tanggal );
	show_user_name('');
}


function add_row_sales_comision( i, action ){
	var tabel = '<tr class="sales-comision-row" id="sales-comision-'+i+'">';

	//tabel += '<td><div class="input-append"><input style="width:50px" type="hidden" name="sales_comision['+i+'][id]" id="sales-comision-'+i+'-id" class="sales-comision-id id detail_jadwal" oldvalue="" browseobj="cari-sales-comision-'+i+'-id" /></div></td>';
	
	tabel += '<td><div class="input-append"><input style="width:80px" type="text" name="sales_comision['+i+'][date_from]" id="sales-comision-'+i+'-date_from" class="sales-comision tanggal" /></td>';
	
	tabel += '<td><div class="input-append"><input style="width:80px" type="text" name="sales_comision['+i+'][date_until]" id="sales-comision-'+i+'-date_until" class="sales-comision tanggal" /></td>';
	

	tabel += '<td><input style="width:80px;text-align:right"  type="text" name="sales_comision['+i+'][target_min]" id="sales-comision-'+i+'-target_min" class="sales-comision-target_min currency detail_jadwal" value="0" /></td>';
	
	tabel += '<td><input style="width:80px;text-align:right" type="text" name="sales_comision['+i+'][target_max]" id="sales-comision-'+i+'-target_max" class="sales-comision-target_max currency detail_jadwal" value="0" /></td>';
	
	tabel += '<td><input style="width:80px;text-align:right"  type="text" name="sales_comision['+i+'][presentase]" id="sales-comision-'+i+'-presentase" class="sales-comision-presentase currency detail_jadwal" value="0" /></td>';
	
	if( action === 1 ){
		tabel += '<td class="action" id="action-baris-sales-comision-'+i+'"><a href="#void()" class="tombol tombol-small hapus-baris-sales-comision detail_jadwal" id="hapus-baris-sales-comision-'+i+'"><i class="icon-remove"></i></a></td>';
	} else tabel += '<td class="action" id="action-baris-sales-comision-'+i+'"><a href="#void()" class="tombol tombol-small tambah-baris-sales-comision detail_jadwal" id="tambah-baris-sales-comision-'+i+'"><i class="icon-plus"></i></a></td>';
	tabel += '</tr>';
	$( "#baris-sales-comision" ).val( i + 1 );
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
			var xobj = document.getElementById('hapus-baris-sales-comision-'+num);
			if (xobj != null){
				$( '#hapus-baris-sales-comision-'+( Number( num ) ) ).click();
			}else{
				$("input[id*='" + "sales-comision-"+num + "']").val('');
			}
			setfocus(Number(num),'id','sales-comision');
		}
	});
	
	$( '.sales-comision-id' ).live( 'keydown', function( e ){
	
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
			setfocus(Number(num)+1,'id','sales-comision');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'id','sales-comision');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'charges_code','sales-comision');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus2((Number(num)),'currency_description','sales-comision');
			}
		}
	});
	
	$( '.sales-comision-date_from' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 3 ];
		alert();
		if ( e.which === 13 ){
			e.preventDefault;
			setfocus(Number(num),'date_until','sales-comision');
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'date_from','sales-comision');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'date_from','sales-comision');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'date_until','sales-comision');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'team','sales-comision');
			}
		}
	});
	
	
	$( '.sales-comision-date_until' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[3];
		if ( e.which === 13 ){
			e.preventDefault;
			setfocus(Number(num),'charges_code','sales-comision');
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'date_until','sales-comision');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'date_until','sales-comision');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'target_max','sales-comision');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'target_min','sales-comision');
			}
		}
	});
		
	$( '.sales-comision-target_min' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 2 ];
		if ( e.which === 13 ){
			e.preventDefault;
			setfocus(Number(num),'target_max','sales-comision');
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'target_min','sales-comision');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'target_min','sales-comision');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'target_max','sales-comision');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'presentase','sales-comision');
			}
		}
	});
	
	$( '.sales-comision-target_max' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 2 ];
		if ( e.which === 13 ){
			e.preventDefault;
			setfocus(Number(num),'presentase','sales-comision');
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'target_max','sales-comision');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'target_max','sales-comision');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'presentase','sales-comision');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'target_min','sales-comision');
			}
		}
	});
		
	$( '.sales-comision-presentase' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 2 ];
		if ( e.which === 13 ){
			e.preventDefault;
			if( Number( $( '#baris-sales-comision' ).val() ) === ( Number( num ) + 1 ) ){
				$( '#tambah-baris-sales-comision-'+num ).click();
	
			}
			setfocus(Number(num)+1,'id','sales-comision');
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'presentase','sales-comision');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'presentase','sales-comision');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num)+1,'id','sales-comision');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'target_max','sales-comision');
			}
		}
	});
	
	$( '.sales-comision-presentase' ).live( 'keydown', function( e ){
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== '' ){
				var asal = $( this ).attr( 'id' );
				var num = asal.split( '-' )[ 2 ];
				console.log( $( '#baris-sales-comision' ).val() == ( Number( num ) + 1 ) );
				if( Number( $( '#baris-sales-comision' ).val() ) === ( Number( num ) + 1 ) ){
					$( '#tambah-baris-sales-comision-'+num ).click();
				
				}
				$( '#sales-comision-'+( Number( num ) + 1 )+'-id' ).focus();
			}
		}
	});
	// Retrieve data
	$( '#sales_code' ).bind( 'blur', function( ) {
		if($(this).val()!==$(this).attr('oldvalue')){
			$.post( 'db_read', { sales_code: $( '#sales_code' ).val() }, function( result ){
				if( result === '' ){
				
					var sales_code = $( '#sales_code' ).val();
					initializex();
					$( '#sales_code' ).val( sales_code );
				} else {
					var data = unserialize( result );
					if (data[ 'user_name2']!=null){
						show_user_name(data[ 'user_name2']);
					}else if (data[ 'user_name']!=null){
						show_user_name(data[ 'user_name']);
					}else{
						show_user_name('');
					}
                    $( "#sales_code" ).val( data[ 'sales_code' ] );
					$( "#nama_sales" ).val( data[ 'nama_sales' ] );
					$( "#team" ).val( data[ 'team' ] );
					
					$( '.sales-comision-row' ).remove();
					
					var i = 0;
					for(; data['jadwal'][i]; i++ ){
					
					var tanggal = data['jadwal'][i][ 'date_from' ].split( "-" );
						var tgl = tanggal[ 2 ];
						var bln = tanggal[ 1 ];
						var thn = tanggal[ 0 ];
						
					var tanggal1 = data['jadwal'][i][ 'date_until' ].split( "-" );
						var tgl1 = tanggal1[ 2 ];
						var bln1 = tanggal1[ 1 ];
						var thn1 = tanggal1[ 0 ];
						$( '#transaksix' ).append( add_row_sales_comision( i, 1 ) );
						$( '#sales-comision-'+i+'-id' ).val( data['jadwal'][i][ 'id' ] );
						$( '#sales-comision-'+i+'-date_from' ).val( tgl + "-" + bln + "-" + thn  );
						$( '#sales-comision-'+i+'-date_until' ).val( tgl1 + "-" + bln1 + "-" + thn1  );						
						$( '#sales-comision-'+i+'-target_min' ).val( parseFloat( data['jadwal'][i][ 'target_min' ] ) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
						$( '#sales-comision-'+i+'-target_max' ).val( parseFloat( data['jadwal'][i][ 'target_max' ] ) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
						$( '#sales-comision-'+i+'-presentase' ).val( data['jadwal'][i][ 'presentase' ] );
						$( '#baris-sales-comision' ).val( i + 1 );
					}
					$( '#transaksix' ).append( add_row_sales_comision( i, 0 ) );
					$( '.ubah, .hapus, .cetak' ).show();
					//$('#cetak').attr('href', 'pdf?sales_code=' + $('#sales_code').val());
					$( '.simpan' ).hide();
				}
			});
		}
	});
	$( '#date' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){	
			
			} else {
				$('#nama_sales').focus();
			}
		}
	});
	$( '#sales_code' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){	
				//nomorbaru();
				$( '#sales_code' ).focus();
			} else {
				setfocus(0,'date_from','sales-comision');
			}
		}
	});
	$( '#sales_code' ).bind( 'blur', function( ) {
		if ($( '#sales_code' ).val()===''){
			$( '#nama_sales' ).val( "" );
			
		}else{
			if($(this).val()!==$(this).attr('oldvalue')){
				$.post( 'db_read_kepala', { id: $( '#sales_code' ).val() }, function( result ){
					if( result === '' ){
						$( '#nama_sales' ).val( "" );
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Code Not Found.</div>';
						$('#alert').html( message );						
					} else {
						var data = unserialize(result);
						$( '#nama_sales' ).val( data['nama_sales'] );
						$( '#team' ).val( data['team'] );
					}
				});
			}
		}
	});
	
	$( '#team' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			setfocus(0,'date_from','sales-comision');
		}
	});
	$( '#presentase' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== '' ){	
				$('.simpan').focus();

			}
		}
	});
	// Tambah Hapus Baris TTUS
	
	$( '.tambah-baris-sales-comision' ).live( 'click', function(){
		var str = $( this ).attr( 'id' );
		var num = str.replace( "tambah-baris-sales-comision-", "" );

		// Change action
		$( "#action"+str.replace( "tambah", "" ) ).html(
			'<a href="#void()" class="tombol tombol-small hapus-baris hapus-baris-sales-comision" id="hapus-baris-sales-comision-'+num+'"><i class="icon-remove"></i></a>'
		);

		// Insert row
		$( '#transaksix' ).append(
			add_row_sales_comision( Number( str.replace( 'tambah-baris-sales-comision-', '' ) ) + 1, 0 )
		);
		setfocus(Number(num)+1,'id','sales-comision');
	});

	$( '.hapus-baris-sales-comision' ).live( 'click', function(){
		if( confirm( 'Are You Sure Want to Remove this Row?' ) ){
			var str = $( this ).attr( 'id' );
			var num = str.split('-')[4];
			$( "#"+str.replace( "hapus-baris-", "" ) ).remove();
			setfocus(Number(num),'id','sales-comision');
		}
	});

	// Button Behavior
	
	$( '.simpan' ).click( function(){
		if( $( '#sales_code' ).val() !== '' ){
			$.post( 'db_create', $( 'form' ).serialize(), function( result ){
				success=unserialize(result);
				if( success['status'] ==='Error' ){
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Data '+$( '#sales_code' ).val()+success['ket'] +'</div>';
					$('#alert').html( message );					
					if (success['ket']=='Data With The Same Code Already Exists.'){
						//nomorbaru();
					}
				}else if( success['status'] ){
					var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Data '+$( '#sales_code' ).val()+' Complete.</div>';
					$('#alert').html( message );
					$( '#cetak' ).attr( 'href', 'pdf?sales_code=' + $('#sales_code').val());					
					//$( '.cetak' ).click();
					initializex();
				} else {
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data '+$( '#sales_code' ).val()+' Failed.</div>';
					$('#alert').html( message );
				}
			});
		} else {
			var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data Required.</div>';
			$('#alert').html( message );
		}
	});
	
	$( '.ubah' ).click( function(){
		if( $( '#sales_code' ).val() !== ''){
			$.post( 'db_update', $( 'form' ).serialize(), function( result ){
				success=unserialize(result);
				if( success['status'] ==='Error' ){
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Data '+$( '#sales_code' ).val()+' Failed. '+ success['ket'] +'</div>';
					$('#alert').html( message );					
					if (success['ket']=='Data Already Exist.'){
						//nomorbaru();
					}
				}else if( success['status'] ){
					var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Data '+$( '#sales_code' ).val()+' Complete.</div>';
					$('#alert').html( message );
					$( '#cetak' ).attr( 'href', 'pdf?sales_code=' + $('#sales_code').val());
					//$( '.cetak' ).click();
					initializex();
				} else {
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data '+$( '#sales_code' ).val()+' Failed.</div>';
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
				$.post( 'db_delete', { sales_code: $( '#sales_code' ).val() }, function( result ){
					success=unserialize(result);
					if( success['status'] ==='Error' ){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Data '+$( '#sales_code' ).val()+' Failed. '+ success['ket'] +'</div>';
						$('#alert').html( message );					
					}else if( success['status'] ){
						var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Data '+$( '#sales_code' ).val()+' Have been Deleted.</div>';
					//	$('#alert').html( message );
						initializex();
					} else {
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data '+$( '#sales_code' ).val()+' Failed.</div>';
						$('#alert').html( message );
					}
				});
			} else {
				var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data Required.</div>';
				$('#alert').html( message );
			}
		}
	});
	$( '.cetak' ).click( function(){
		$( '#cetak' ).attr( 'href', 'pdf?sales_code=' + $('#sales_code').val());		
	});

});
	$( '.batal' ).click( function(){
		if ($('#seles_code').val()===''){
			window.close();
		}else{
			if( confirm( 'Are You Sure Cancel This Transaction?' ) ){
				initializex();
			}
		}
	});
	
</script>
