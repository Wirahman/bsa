<div class="container">
	<h2 class="judul">Master Devisi</h2>
	<div id="alert"></div>
	<form class="form-horizontal">
		<fieldset>
			<div class="row">
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="kode_devisi">Kode Devisi</label>
					<div class="controls">
						<div class="input-append"><input type="text" name="kode_devisi" id="kode_devisi" oldvalue="" browseobj="cari_kode_devisi" /><a style="display:none" class="add-on browse" id="cari_kode_devisi" href="cari?ref=kode_devisi&tipe=dev" title="Klik untuk mencari Kode Devisi"><i class="icon-search"></i></a></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="nama_devisi">Nama Devisi</label>
					<div class="controls">
						<input type="text" name="nama_devisi" id="nama_devisi" />
					</div>
				</div>
			</div>
			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="kode_kepala">Kepala Devisi</label>
					<div class="controls">
						<div class="input-append">
							<input type="text" name="kode_kepala" id="kode_kepala" oldvalue="" browseobj="cari_kode_kepala" />
							<input type="text" style="width:440px" readonly="readonly" name="nama_kepala" id="nama_kepala" />
							<a style="display:none" class="add-on browse" id="cari_kode_kepala" href="cari?ref=kode_kepala&tipe=karyawan" title="Klik untuk mencari Kepala Devisi"><i class="icon-search"></i></a>				
						</div>
					</div>
				</div>
			</div>

			<div class="form-actions btn-group" style="height:0px">
				<a href="#" class="btn browse cetak" style="top:-15px"><i class="icon-print"></i> Cetak</a>
				<?php if( in_array( 'create_devisi', unserialize($capabilities) ) ){ ?>
					<a href="#" class="btn btn-primary simpan" style="top:-15px"><i class="icon-ok icon-white"></i> Save</a>
				<?php } ?>
				<?php if( in_array( 'update_devisi', unserialize($capabilities) ) ){ ?>
					<a href="#" class="btn btn-primary ubah" style="top:-15px"><i class="icon-pencil icon-white"></i> Edit</a>
				<?php } ?>
				<?php if( intval($role)!=0 ) { ?>
					<?php if( in_array( 'delete_devisi', unserialize($capabilities) ) ){ ?>
						<a href="#" class="btn btn-danger hapus" style="top:-15px"><i class="icon-trash icon-white"></i> Hapus</a>
					<?php } ?>
				<?php } ?>
					<a href="#" class="btn batal" style="top:-15px"><i class="icon-refresh"></i> Batal</a>
			</div>
		</fieldset>
		
	</form>
</div>

<div id="mask"></div>
<link href="<?php echo base_url('assets/css/jqueryui/style.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/mask.css'); ?>" rel="stylesheet">
<script src='<?php echo base_url('assets/js/format.currency.min.js'); ?>'></script>
<script src='<?php echo base_url('assets/js/unserialize.js'); ?>'></script>

<script src='<?php echo base_url('assets/js/utf8.decode.js'); ?>'></script>
<script src='<?php echo base_url('assets/js/script.js'); ?>'></script>
<script>

// Initialize

function initialize(){
	initializex();
	$( '#kode_devisi' ).focus();
}
function initializex(){

	$( '.simpan, .batal' ).show();
	$( '.ubah, .hapus' ).hide();
	$('input:text, textarea').val('');
	$('input:checkbox').removeAttr('checked');
	$('#cari_kode_devisi').tooltip();
	$('.alert').alert();
	$('.cetak').attr('href', 'cetak');
	show_user_name('');
}	
preventempty="kode_devisi,nama_devisi,kode_kepala,nama_kepala";
preventemptystatus="1,1,1,0";
$( document ).ready( function() {

	// Initialize

	initialize();


	// Retrieve data
	
	$( '#kode_devisi' ).bind( 'blur', function( ) {
		if($(this).val()!==$(this).attr('oldvalue')){
			$.post( 'db_read', { id: $( '#kode_devisi' ).val() }, function( result ){
				if( result === '' ){
				
					var id = $( '#kode_devisi' ).val();
					initializex();
					$( '#kode_devisi' ).val( id );
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
					$( "#kode_kepala" ).val( data[ 'kode_kepala' ] );
					$( "#nama_kepala" ).val( data[ 'nama_kepala' ] );
					$( "#nama_devisi" ).val( data[ 'nama_devisi' ] );
					$( '.ubah, .hapus' ).show();
					$( '.simpan' ).hide();
					
				}
			});
		}
	});
	$( '#kode_devisi' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_kode_devisi' ).click();
			} else {
				$( '#nama_devisi' ).focus();
			}
		}
	});
	$( '#kode_kepala' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			if ($( '#kode_kepala' ).val()===''){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_kode_kepala' ).click();
			}else{
				if ($('.simpan').is(':visible')){
				$( '.simpan' ).focus();
				}else{
					$( '.ubah' ).focus();
				}
			}
		}
	});
	$( '#kode_kepala' ).bind( 'blur', function( ) {
		if ($( '#kode_kepala' ).val()===''){
			$( '#nama_kepala' ).val( "" );
		}else{
			if($(this).val()!==$(this).attr('oldvalue')){
				$.post( 'db_read_kepala', { id: $( '#kode_kepala' ).val() }, function( result ){
					if( result === '' ){
						$( '#nama_kepala' ).val( "" );
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Kode Karyawan tidak ada.</div>';
						$('#alert').html( message );						
					} else {
						$( '#nama_kepala' ).val( result );
					}
				});
			}
		}
	});

	
	$( '#nama_devisi' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '#kode_kepala' ).focus();
		}
	});
	
	
	// Button Behavior
	
	$( '.simpan' ).click( function(){
	
		if( $( '#kode_devisi' ).val() !== '' ){
			$.post( 'db_create', $( 'form' ).serialize(), function( result ){
				success=unserialize(result);
				if( success['status'] ==='Error' ){
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Data '+$( '#kode_devisi' ).val()+' gagal disimpan. '+ success['ket'] +'</div>';
					$('#alert').html( message );					
				}else if( success['status'] ){
					var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Berhasil!</strong> Data '+$( '#kode_devisi' ).val()+' telah disimpan.</div>';
					$('#alert').html( message );
					initialize();
				} else {
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data '+$( '#kode_devisi' ).val()+' gagal disimpan.</div>';
					$('#alert').html( message );
				}
			});
		} else {
			var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data belum lengkap.</div>';
			$('#alert').html( message );
		}
	});

	$( '.ubah' ).click( function(){
		if( $( '#kode_devisi' ).val() !== '' ){
			$.post( 'db_update', $( 'form' ).serialize(), function( result ){
				success=unserialize(result);
				if( success['status'] ==='Error' ){
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Data '+$( '#kode_devisi' ).val()+' gagal diubah. '+ success['ket'] +'</div>';
					$('#alert').html( message );					
				}else if( success['status'] ){
					var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Berhasil!</strong> Data '+$( '#kode_devisi' ).val()+' telah diubah.</div>';
					$('#alert').html( message );
					initialize();
				} else {
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data '+$( '#kode_devisi' ).val()+' gagal diubah.</div>';
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
			if( $( '#kode_devisi' ).val() !== '' ){
				$.post( 'db_delete', { id: $( '#kode_devisi' ).val() }, function( result ){
					success=unserialize(result);
					if( success['status'] ==='Error' ){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Data '+$( '#kode_devisi' ).val()+' gagal dihapus. '+ success['ket'] +'</div>';
						$('#alert').html( message );					
					}else if( success['status'] ){
						var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Berhasil!</strong> Data '+$( '#kode_devisi' ).val()+' telah dihapus.</div>';
						$('#alert').html( message );
						initialize();
					} else {
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data '+$( '#kode_devisi' ).val()+' gagal dihapus.</div>';
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
		if ($('#kode_devisi').val()===''){
			window.close();
		}else{
			if( confirm( 'Anda yakin untuk membatalkan transaksi ini?' ) ){
				initialize();
			}
		}
	});

});
</script>