<div class="container">
	<h2 class="judul">Transaksi Jurnal Umum</h2>
	<div id="alert"></div>
	<form class="form-horizontal">
		<fieldset>
			<div class="row">
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="id_jurnal">Kode Jurnal</label>
					<div class="controls">
						<div class="input-append"><input type="text" name="id_jurnal" id="id_jurnal" oldvalue="" browseobj="cari_id_jurnal" /><a style="display:none" class="add-on browse" id="cari_id_jurnal" href="cari/ref/id_jurnal/tipe/jju" title="Klik untuk mencari kode jurnal"><i class="icon-search"></i></a></div>
					</div>
				</div>
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="id_transaksi">No. Transaksi</label>
					<div class="controls">
						<div class="input-append"><input type="text" name="id_transaksi" id="id_transaksi" oldvalue="" browseobj="cari_id_transaksi" /><a style="display:none" class="add-on browse" id="cari_id_transaksi" href="cari/ref/id_transaksi/tipe/tju" title="Klik untuk mencari id transaksi"><i class="icon-search"></i></a></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="tanggal">Tanggal</label>
					<div class="controls">
						<input type="text" name="tanggal" id="tanggal" class="tanggal" />
					</div>
				</div>
			</div>
			<div class="row">
				<div class="control-group span12" style="height:25px">
					<label class="control-label" for="keterangan">Keterangan</label>
					<div class="controls">
						<input type="text" name="keterangan" id="keterangan" class="span9" />
					</div>
				</div>
			</div>
			<div class="row">
				<div class="span12 tab-pane active ju" style="height:200px" id="ju">
					<input type="hidden" id="baris-jurnal-umum" name="baris-jurnal-umum" value="1" />
					<table class="table">
						<thead>
							<tr><th>Kode Perkiraan</th><th>Nama Perkiraan</th><th>Keterangan</th><th>Debet</th><th>Kredit</th><th></th></tr>
						</thead>
						<tbody id="transaksix">
						</tbody>
					</table>
				</div>
			</div>

			<div class="row">
				<div class="control-group span4" style="height:15px">
				</div>
				<div class="control-group span8" style="height:15px">
					<label class="control-label"></label>
					<label class="control-label" style="margin-left:8px" >Debet</label>
					<label class="control-label" style="margin-left:10px" >Kredit</label>
				</div>
				<div class="control-group span4" style="height:15px">
				</div>
				<div class="control-group span8" style="height:15px">
					<label class="control-label" style="margin-left:100px" >TOTAL</label>
					<div class="controls">
						<input style="width:150px;text-align:right;margin-left:25px" type="text" name="total_debet" id="total_debet" value="0" />
						<input style="width:150px;text-align:right" type="text" name="total_kredit" id="total_kredit" value="0" />
					</div>
				</div>
			</div>
			
			<div class="form-actions btn-group">
				<?php if( in_array( 'create_jurnal_umum', unserialize($capabilities) ) ){ ?>
				<a href="#" class="btn btn-primary simpan" style="top:-15px"><i class="icon-ok icon-white"></i> Simpan</a>
				<?php } ?>
				<a href="#" class="btn cetak browse" id="cetak" style="top:-15px"><i class="icon-print"></i> Cetak</a>
				<?php if( in_array( 'update_jurnal_umum', unserialize($capabilities) ) ){ ?>
				<a href="#" class="btn btn-primary ubah" style="top:-15px"><i class="icon-pencil icon-white"></i> Ubah</a>
				<?php } ?>
				<?php if( intval($role)!= 1){ ?>
					<?php if( in_array( 'delete_jurnal_umum', unserialize($capabilities) ) ){ ?>
					<a href="#" class="btn btn-danger hapus" style="top:-15px"><i class="icon-trash icon-white"></i> Hapus</a>
					<?php } ?>
				<?php } ?>
				<a href="#" class="btn batal" style="top:-15px"	><i class="icon-refresh"></i> Batal</a>
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
//*****************************************************************//
//
// Initialize
//
//*****************************************************************//
preventempty="id_jurnal,id_transaksi,tanggal";
preventemptystatus="1,1,1";
function initialize(){
	$( '#id_jurnal' ).focus();
	initializex();
}
function initializex(){
	$('#nama_currency').html("");
	$( '.simpan, .batal' ).show();
	$( '.ubah, .hapus, .cetak' ).hide();
	$('input:text, textarea').val('');
	$('#total_debet,#total_kredit').val('0');
	$('input:checkbox').removeAttr('checked');
	$('.browse').tooltip();
	$('.alert').alert();
	$('.tanggal').datepicker({
		dateFormat: 'dd-mm-yy',
		changeMonth:true,
		changeYear:true
	});
	$('#cetak').attr('href', '');
	$('.jurnal-umum-row').remove();
	$( '#transaksix' ).append(
		add_row_jurnal_umum( 0, 0 )
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
	$.post( 'db_lastid', { id_jurnal: $( "#id_jurnal" ).val() }, function( result ){
		if( result === '' ){
			$( '#id_transaksi' ).val( '0001' );
		} else {
			var lastid = ( Number( result ) + 1 ) + '';
			for( var i = lastid.length; i < 4; i++ ){
				lastid = '0' + lastid;
			}
			$( '#id_transaksi' ).val( lastid );
		}
	});
}

function add_row_jurnal_umum( i, action ){
	var tabel = '<tr class="jurnal-umum-row" id="jurnal-umum-'+i+'">';
	tabel += '<td><div class="input-append"><input style="width:120px" type="text" name="jurnal_umum['+i+'][id]" id="jurnal-umum-'+i+'-id" class="jurnal-umum-id id detail_transaksi" oldvalue="" browseobj="cari-jurnal-umum-'+i+'-id" /><a style="display:none" class="add-on browse id detail_transaksi" id="cari-jurnal-umum-'+i+'-id" href="cari/ref/jurnal-umum-'+i+'-id/tipe/acc" title="Klik untuk mencari id perkiraan"><i class="icon-search"></i></a></div></td>';
	tabel += '<td><input style="width:200px" readonly type="text" name="jurnal_umum['+i+'][nama]" id="jurnal-umum-'+i+'-nama" class="jurnal-umum-nama detail_transaksi" /></td>';
	tabel += '<td><input style="width:200px" maxlength="200" type="text" name="jurnal_umum['+i+'][keterangan]" id="jurnal-umum-'+i+'-keterangan" class="jurnal-umum-keterangan detail_transaksi" /></td>';
	tabel += '<td><input style="width:150px;text-align:right" type="text" name="jurnal_umum['+i+'][debet]" id="jurnal-umum-'+i+'-debet" class="jurnal-umum-debet currency detail_transaksi" value="0" /></td>';
	tabel += '<td><input style="width:150px;text-align:right" type="text" name="jurnal_umum['+i+'][kredit]" id="jurnal-umum-'+i+'-kredit" class="jurnal-umum-kredit currency detail_transaksi" value="0" /></td>';
	if( action === 1 ){
		tabel += '<td class="action" id="action-baris-jurnal-umum-'+i+'"><a href="#void()" class="tombol tombol-small hapus-baris-jurnal-umum detail_transaksi" id="hapus-baris-jurnal-umum-'+i+'"><i class="icon-remove"></i></a></td>';
	} else tabel += '<td class="action" id="action-baris-jurnal-umum-'+i+'"><a href="#void()" class="tombol tombol-small tambah-baris-jurnal-umum detail_transaksi" id="tambah-baris-jurnal-umum-'+i+'"><i class="icon-plus"></i></a></td>';
	tabel += '</tr>';
	$( "#baris-jurnal-umum" ).val( i + 1 );
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
	$('.jurnal-umum-debet').live( 'keyup', function(){
		var total_debet = 0;
		$('.jurnal-umum-debet').each( function(){
			total_debet += Number( $( this ).val().replace( /[^0-9.]+/g, "" ) );
		});
		$('#total_debet').val( total_debet ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
	});
	$('.jurnal-umum-kredit').live( 'keyup', function(){
		var total_kredit = 0;
		$('.jurnal-umum-kredit').each( function(){
			total_kredit += Number( $( this ).val().replace( /[^0-9.]+/g, "" ) );
		});
		$('#total_kredit').val( total_kredit ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
	});

	////////////////////////////////////////////////////////////////
	//
	// Press enter then move from x to y with default value if empty
	//
	////////////////////////////////////////////////////////////////

	$( '.detail_transaksi' ).live( 'keydown', function( e ){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 2 ];
		if ( e.which === kodehapusbaris ){
			e.preventDefault();
			var xobj = document.getElementById('hapus-baris-jurnal-umum-'+num);
			if (xobj != null){
				$( '#hapus-baris-jurnal-umum-'+( Number( num ) ) ).click();
			}else{
				$("input[id*='" + "jurnal-umum-"+num + "']").val('');
			}
			setfocus(Number(num),'id','jurnal-umum');
		}
	});

	$( '.jurnal-umum-id' ).live( 'blur', function(){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 2 ];
		if($( this ).val()==''){
			$( '#'+asal.replace( 'id', 'nama' ) ).val( '' );
		}else{
			if ($( this ).val()!==$( this ).attr('oldvalue')){
				$.post( 'load_perkiraan', { id: $( this ).val() }, function( result ){
					var data = unserialize( result );
					if( result === '' ||  data===null){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Kode perkiraan tidak ada.</div>';
						$('#alert').html( message );
						$( '#'+asal.replace( 'id', 'nama' ) ).val( '' );
						$( '#'+asal ).val( '' );
						$(this).val('');
						$(this).attr("oldvalue",'');
						$( '#'+asal ).focus();
					}else{
						$('#alert').html( "" );	
						$( '#'+asal.replace( 'id', 'nama' ) ).val( data['nama'] );
					}
				});
			}
		}
	});
	$( '.jurnal-umum-id' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 2 ];
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr("oldvalue",$(this).val());
				$( '#cari-'+ asal ).click();
			} else {
				$( '#'+asal.replace( 'id', 'keterangan' ) ).focus();
			}
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'id','jurnal-umum');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'id','jurnal-umum');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'nama','jurnal-umum');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus2((Number(num)),'kredit','jurnal-umum');
			}
		}
	});
	
	$( '.jurnal-umum-nama' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 2 ];
		if ( e.which === 13 ){
			e.preventDefault;
			setfocus(Number(num),'keterangan','jurnal-umum');
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'nama','jurnal-umum');	
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'nama','jurnal-umum');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'keterangan','jurnal-umum');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'id','jurnal-umum');
			}
		}
	});

	$( '.jurnal-umum-keterangan' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 2 ];
		if ( e.which === 13 ){
			e.preventDefault;
			setfocus(Number(num),'debet','jurnal-umum');
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'keterangan','jurnal-umum');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'keterangan','jurnal-umum');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'debet','jurnal-umum');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'nama','jurnal-umum');
			}
		}
	});
	$( '.jurnal-umum-debet' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 2 ];
		if ( e.which === 13 ){
			e.preventDefault;
			setfocus(Number(num),'kredit','jurnal-umum');
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'debet','jurnal-umum');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'debet','jurnal-umum');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'kredit','jurnal-umum');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'keterangan','jurnal-umum');
			}
		}
	});
	$( '.jurnal-umum-kredit' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 2 ];
		if ( e.which === 13 ){
			e.preventDefault;
			if( Number( $( '#baris-jurnal-umum' ).val() ) === ( Number( num ) + 1 ) ){
				$( '#tambah-baris-jurnal-umum-'+num ).click();
			}
			setfocus(Number(num)+1,'id','jurnal-umum');
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'kredit','jurnal-umum');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'kredit','jurnal-umum');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num)+1,'id','jurnal-umum');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'debet','jurnal-umum');
			}
		}
	});
	$( '.jurnal-umum-kredit' ).live( 'keydown', function( e ){
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== '' ){
				var asal = $( this ).attr( 'id' );
				var num = asal.split( '-' )[ 2 ];
				console.log( $( '#baris-jurnal-umum' ).val() == ( Number( num ) + 1 ) );
				if( Number( $( '#baris-jurnal-umum' ).val() ) === ( Number( num ) + 1 ) ){
					$( '#tambah-baris-jurnal-umum-'+num ).click();
				}
				$( '#jurnal-umum-'+( Number( num ) + 1 )+'-id' ).focus();
			}
		}
	});


	////////////////////////////////////////////////////////////////
	//
	// Browsing ID
	//
	////////////////////////////////////////////////////////////////
	$( '#cari_id_transaksi' ).live( 'click', function( e ){
		var href = $( this ).attr( 'href' ).split( "&" );
		$( this ).attr( 'href', href[ 0 ] +'/'+href[ 1 ] + '/cond1/' + $( "#id_jurnal" ).val() );
	});
	$( '#id_transaksi' ).bind( 'focus', function( e ){
		var asal = $( this ).attr( 'id' );
		var href = $( '#cari_'+ asal ).attr( 'href' ).split( "&" );
		$( '#cari_'+ asal ).attr( 'href', href[ 0 ] +'/'+href[ 1 ] + '/cond1/' + $( "#id_jurnal" ).val() );
	});

	$( '#id_jurnal' ).bind( 'blur', function( e ){
		if ($( '#id_jurnal' ).val()==''){
			$( '#id_transaksi' ).val('');
		}else{
			if ($(this).val()!==$(this).attr('oldvalue')){
				if ($('#id_transaksi').val()!==''){
					$( '#id_transaksi' ).attr('oldvalue','');
					$( '#id_transaksi' ).blur();
				}else{
					nomorbaru();
				}
			}
		}
	});

	$( '#id_jurnal' ).live( 'keydown', function( e ){
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_id_jurnal' ).click();
			} else {
				$( '#id_transaksi' ).focus();
			}
		}
	});


	////////////////////////////////////////////////////////////////
	//
	// Retrieve data
	//
	////////////////////////////////////////////////////////////////
	$( '#id_transaksi' ).bind( 'blur', function() {
		if ($(this).val()!==$(this).attr('oldvalue')){
			$.post( 'db_read', { id_jurnal: $( '#id_jurnal' ).val(), id_transaksi: $( '#id_transaksi' ).val() }, function( result ){
				if( result === '' ){
					var jurnal = $( '#id_jurnal' ).val();
					var transaksi = $( '#id_transaksi' ).val();
					initializex();
					$( '#id_jurnal' ).val( jurnal );
					$( '#id_transaksi' ).val( transaksi );
				} else {
					var data = unserialize( result );
					if (data[ 'user_name2']!=null){
						show_user_name(data[ 'user_name2']);
					}else if (data[ 'user_name']!=null){
						show_user_name(data[ 'user_name']);
					}else{
						show_user_name('');
					}
					var tanggal = data[ 'tanggal' ].split( "-" );
					var tgl = tanggal[ 2 ];
					var bln = tanggal[ 1 ];
					var thn = tanggal[ 0 ];
					$( "#tanggal" ).val( tgl + "-" + bln + "-" + thn );
					$( "#keterangan" ).val( data[ 'keterangan' ] );
					$( "#id_currency" ).val( data[ 'id_currency' ] );
					$( "#total_debet" ).val( parseFloat( data[ 'total_debet' ] ) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
					$( "#total_kredit" ).val( parseFloat( data[ 'total_kredit' ] ) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });

					$( '.jurnal-umum-row' ).remove();
					var i = 0;
					for(; data['transaksi'][i]; i++ ){
						$( '#transaksix' ).append( add_row_jurnal_umum( i, 1 ) );
						$( '#jurnal-umum-'+i+'-id' ).val( data['transaksi'][i][ 'id_perkiraan' ] );
						$( '#jurnal-umum-'+i+'-nama' ).val( data['transaksi'][i][ 'nama_perkiraan' ] );
						$( '#jurnal-umum-'+i+'-keterangan' ).val( data['transaksi'][i][ 'keterangan' ] );
						$( '#jurnal-umum-'+i+'-debet' ).val( parseFloat( data['transaksi'][i][ 'debet' ] ) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
						$( '#jurnal-umum-'+i+'-kredit' ).val( parseFloat( data['transaksi'][i][ 'kredit' ] ) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
						$( '#baris-jurnal-umum' ).val( i + 1 );
					}
					$( '#transaksix' ).append( add_row_jurnal_umum( i, 0 ) );
					$( '.ubah, .hapus, .cetak' ).show();
					$('#cetak').attr('href', 'pdf?id_jurnal=' + $('#id_jurnal').val()+'&id_transaksi=' + $('#id_transaksi').val());
					$( '.simpan' ).hide();
				}
			});
		}
	});
	$( '#id_transaksi' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){	
				nomorbaru();
			} else {
				$('#tanggal').focus();
			}
		}
	});

	$( '#tanggal' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== '' ){	
				$('#keterangan').focus();
			}
		}
	});

	$( '#keterangan' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			setfocus(0,'id','jurnal-umum');
		}
	});

	////////////////////////////////////////////////////////////////
	//
	// Tambah Hapus Baris TTUS
	//
	////////////////////////////////////////////////////////////////
	$( '.tambah-baris-jurnal-umum' ).live( 'click', function(){
		var str = $( this ).attr( 'id' );
		var num = str.replace( "tambah-baris-jurnal-umum-", "" );
		nomorbaru();

		// Change action
		$( "#action"+str.replace( "tambah", "" ) ).html(
			'<a href="#void()" class="tombol tombol-small hapus-baris hapus-baris-jurnal-umum" id="hapus-baris-jurnal-umum-'+num+'"><i class="icon-remove"></i></a>'
		);

		// Insert row
		$( '#transaksix' ).append(
			add_row_jurnal_umum( Number( str.replace( 'tambah-baris-jurnal-umum-', '' ) ) + 1, 0 )
		);
		setfocus(Number(num)+1,'id','jurnal-umum');
	});

	$( '.hapus-baris-jurnal-umum' ).live( 'click', function(){
		if( confirm( 'Anda yakin untuk menghapus baris ini?' ) ){
			var str = $( this ).attr( 'id' );
			var num = str.split('-')[4];
			$( "#"+str.replace( "hapus-baris-", "" ) ).remove();
			setfocus(Number(num),'id','jurnal-umum');
		}
	});



	////////////////////////////////////////////////////////////////
	//
	// Button Behavior
	//
	////////////////////////////////////////////////////////////////
	$( '.simpan' ).click( function(){
		if( $( '#id_jurnal' ).val() !== '' && $( '#id_transaksi' ).val() !== '' ){
			$.post( 'db_create', $( 'form' ).serialize(), function( result ){
				success=unserialize(result);
				if( success['status'] ==='Error' ){
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Data '+$( '#id_jurnal' ).val()+' no '+$( '#id_transaksi' ).val()+' gagal disimpan. '+ success['ket'] +'</div>';
					$('#alert').html( message );					
					if (success['ket']=='Data dengan nomor transaksi yang sama sudah ada.'){
						nomorbaru();
					}
				}else if( success['status'] ){
					var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Berhasil!</strong> Data '+$( '#id_jurnal' ).val()+' no '+$( '#id_transaksi' ).val()+' telah disimpan.</div>';
					$('#alert').html( message );
					$( '#cetak' ).attr( 'href', 'pdf?id_jurnal=' + $('#id_jurnal').val()+'&id_transaksi=' + $('#id_transaksi').val());					
					$( '.cetak' ).click();
					initialize();
				} else {
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data '+$( '#id_jurnal' ).val()+' no '+$( '#id_transaksi' ).val()+' gagal disimpan.</div>';
					$('#alert').html( message );
				}
			});
		} else {
			var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data belum lengkap.</div>';
			$('#alert').html( message );
		}
	});

	$( '.ubah' ).click( function(){
		if( $( '#id_jurnal' ).val() !== '' && $( '#id_transaksi' ).val() !== '' ){
			$.post( 'db_update', $( 'form' ).serialize(), function( result ){
				success=unserialize(result);
				if( success['status'] ==='Error' ){
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Data '+$( '#id_jurnal' ).val()+' no '+$( '#id_transaksi' ).val()+' gagal diubah. '+ success['ket'] +'</div>';
					$('#alert').html( message );					
					if (success['ket']=='Data dengan nomor transaksi yang sama sudah ada.'){
						nomorbaru();
					}
				}else if( success['status'] ){
					var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Berhasil!</strong> Data '+$( '#id_jurnal' ).val()+' no '+$( '#id_transaksi' ).val()+' telah diubah.</div>';
					$('#alert').html( message );
					$( '#cetak' ).attr( 'href', 'pdf?id_jurnal=' + $('#id_jurnal').val()+'&id_transaksi=' + $('#id_transaksi').val());					
					$( '.cetak' ).click();
					initialize();
				} else {
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data '+$( '#id_jurnal' ).val()+' no '+$( '#id_transaksi' ).val()+' gagal diubah.</div>';
					$('#alert').html( message );
				}
			});
		} else {
			var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data belum lengkap.</div>';
			$('#alert').html( message );
		}
	});

	$( '.hapus' ).click( function(){
		if( confirm( 'Anda yakin untuk menghapus data ini?' ) ){
			if( $( '#id_jurnal' ).val() !== '' && $( '#id_transaksi' ).val() !== '' ){
				$.post( 'db_delete', { id_jurnal: $( '#id_jurnal' ).val(), id_transaksi: $( '#id_transaksi' ).val() }, function( result ){
					success=unserialize(result);
					if( success['status'] ==='Error' ){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Data '+$( '#id_jurnal' ).val()+' no '+$( '#id_transaksi' ).val()+' gagal dihapus. '+ success['ket'] +'</div>';
						$('#alert').html( message );					
					}else if( success['status'] ){
						var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Berhasil!</strong> Data '+$( '#id_jurnal' ).val()+' no '+$( '#id_transaksi' ).val()+' telah dihapus.</div>';
						$('#alert').html( message );
						initialize();
					} else {
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data '+$( '#id_jurnal' ).val()+' no '+$( '#id_transaksi' ).val()+' gagal dihapus.</div>';
						$('#alert').html( message );
					}
				});
			} else {
				var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data belum lengkap.</div>';
				$('#alert').html( message );
			}
		}
	});

	$( '.batal' ).click( function(){
		if (($('#id_jurnal').val()==='') || ($('#id_transaksi').val()==='')){
			window.close();
		}else{
			if( confirm( 'Anda yakin untuk membatalkan transaksi ini?' ) ){
				initialize();
			}
		}
	});
	$( '.cetak' ).click( function(){
		$( '#cetak' ).attr( 'href', 'pdf?id_jurnal=' + $('#id_jurnal').val()+'&id_transaksi=' + $('#id_transaksi').val());					
	});

});
</script>
