<div class="container">
	<h2 class="judul">Master Seaport</h2>
	<div id="alert"></div>
	<form class="form-horizontal">
		<fieldset>
			<div class="row">
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="port_code">Port Code :</label>
					<div class="controls">
						<div class="input-append"><input type="text" name="port_kode" id="port_kode" oldvalue="" browseobj="cari_kode_seaport" style="width:50px"/><a style="display:none" class="add-on browse" id="cari_kode_seaport" href="cari/ref/port_kode/tipe/sea" title="Klik untuk mencari Kode Seaport"><i class="icon-search"></i></a></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="port_name">Port Name :</label>
					<div class="controls">
						<input type="text" name="port_name" id="port_name" />
					</div>
				</div>
			</div>
			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="country_code">Country :</label>
					<div class="controls">
						<div class="input-append">
							<input type="text" name="country_code" id="country_code" oldvalue="" browseobj="cari_kode_country"style="width:50px" />
							<input type="text" style="width:440px" readonly="readonly" name="country_name" id="country_name" />
							<a style="display:none" class="add-on browse" id="cari_kode_country" href="cari/ref/country_code/tipe/count" title="Klik untuk mencari Kode Country"><i class="icon-search"></i></a>				
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="region_code">Region :</label>
					<div class="controls">
						<div class="input-append">
							<input type="text" name="region_code" id="region_code" oldvalue="" browseobj="cari_kode_region" style="width:50px"/>
							<input type="text" style="width:440px" readonly="readonly" name="region_name" id="region_name" />
							<a style="display:none" class="add-on browse" id="cari_kode_region" href="cari/ref/region_code/tipe/reg" title="Klik untuk mencari Kode Region"><i class="icon-search"></i></a>				
						</div>
					</div>
				</div>
			</div>
			
			<div class="form-actions btn-group" style="height:0px">
				<a href="#" class="btn browse cetak" style="top:-15px"><i class="icon-print"></i> Print</a>
				<?php if( in_array( 'create_seaport', unserialize($capabilities) ) ){ ?>
					<a href="#" class="btn btn-primary simpan" style="top:-15px"><i class="icon-ok icon-white"></i> Save</a>
				<?php } ?>
				<?php if( in_array( 'update_seaport', unserialize($capabilities) ) ){ ?>
					<a href="#" class="btn btn-primary ubah" style="top:-15px"><i class="icon-pencil icon-white"></i> Update</a>
				<?php } ?>
				<?php if( intval($role)!=0 ) { ?>
					<?php if( in_array( 'delete_seaport', unserialize($capabilities) ) ){ ?>
						<a href="#" class="btn btn-danger hapus" style="top:-15px"><i class="icon-trash icon-white"></i> Delete</a>
					<?php } ?>
				<?php } ?>
					<a href="#" class="btn batal" style="top:-15px"><i class="icon-refresh"></i> Cancel</a>
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
	$( '#port_kode' ).focus();
}
function initializex(){

	$( '.simpan, .batal' ).show();
	$( '.ubah, .hapus' ).hide();
	$('input:text, textarea').val('');
	$('input:checkbox').removeAttr('checked');
	$('#cari_kode_seaport').tooltip();
	$('.alert').alert();
	$('.cetak').attr('href', 'cetak');
	show_user_name('');
}	
preventempty="port_kode,port_name,country_code,region_code";
preventemptystatus="1,1,1,1";
$( document ).ready( function() {
	
	// Initialize

	initialize();

	// Retrieve data

	$( '#port_kode' ).bind( 'blur', function( ) {
		if($(this).val()!==$(this).attr('oldvalue')){
			$.post( 'db_read', { id: $( '#port_kode' ).val() }, function( result ){
				if( result === '' ){
				
					var id = $( '#port_kode' ).val();
					initializex();
					$( '#port_kode' ).val( id );
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
					$( "#port_kode" ).val( data[ 'port_kode' ] );
					$( "#port_name" ).val( data[ 'port_name' ] );
					$( "#country_code" ).val( data[ 'country_code' ] );
					$( "#country_name" ).val( data[ 'country_name' ] );
					$( "#region_code" ).val( data[ 'region_code' ] );
					$( '#region_code' ).bind( 'keydown', function( e ) {
					if ( e.which === 13 ){
					$( '.ubah' ).focus();
						}
					});
					$( "#region_name" ).val( data[ 'region_name' ] );
					$( '.ubah, .hapus' ).show();
					$( '.simpan' ).hide();
					
				}
			});
		}
	});
	$( '#port_kode' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_kode_seaport' ).click();
			} else {
				$( '#port_name' ).focus();
			}
		}
	});
	$( '#country_code' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			if ($( '#country_code' ).val()===''){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_kode_country' ).click();
			}else{
				if ($('.simpan').is(':visible')){
				$( '.simpan' ).focus();
				}else{
					$( '.ubah' ).focus();
				}
			}
		}
	});
	
	$( '#country_code' ).bind( 'blur', function( ) {
		if ($( '#country_code' ).val()===''){
			$( '#country_name' ).val( "" );
		}else{
			if($(this).val()!==$(this).attr('oldvalue')){
				$.post( 'db_read_kepala_country', { id: $( '#country_code' ).val() }, function( result ){
					if( result === '' ){
						$( '#country_code' ).val( "" );
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Country Code Not Found.</div>';
						$('#alert').html( message );
						$( '#country_code' ).focus();
					} else {
						$( '#country_name' ).val( result );
					}
				});
			}
		}
	});
	
	$( '#region_code' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			if ($( '#region_code' ).val()===''){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_kode_region' ).click();
			}else{
				if ($('.simpan').is(':visible')){
				$( '.simpan' ).focus();
				}else{
					$( '.ubah' ).focus();
				}
			}
		}
	});
	
	$( '#region_code' ).bind( 'blur', function( ) {
		if ($( '#region_code' ).val()===''){
			$( '#region_name' ).val( "" );
		}else{
			if($(this).val()!==$(this).attr('oldvalue')){
				$.post( 'db_read_kepala_region', { id: $( '#region_code' ).val() }, function( result ){
					if( result === '' ){
						$( '#region_code' ).val( "" );
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Region Code Not Found.</div>';
						$('#alert').html( message );
						$( '#region_code' ).focus();
					} else {
						$( '#region_name' ).val( result );
					}
				});
			}
		}
	});
	$( '#port_kode' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '#port_name' ).focus();
		}else if ( e.which === 40 ){
			$( '#port_name' ).focus();
		}
	});
	
	$( '#port_name' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '#country_code' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#port_kode' ).focus();
		}else if ( e.which === 40 ){
			$( '#country_code' ).focus();
		}
	});
	
	$( '#country_code' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '#region_code' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#port_name' ).focus();
		}else if ( e.which === 40 ){
			$( '#region_code' ).focus();
		}
	});
	
	$( '#region_code' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '.simpan' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#country_code' ).focus();
		}else if ( e.which === 40 ){
			$( '.cetak' ).focus();
		}
	});
	
	$( '.cetak' ).bind( 'keydown', function( e ) {
		if ( e.which === 39 ){
			$( '.simpan' ).focus();
			$( '.ubah' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#region_code' ).focus();
		}
	});
	
	$( '.simpan' ).bind( 'keydown', function( e ) {
		if ( e.which === 37 ){
			$( '.cetak' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#region_code' ).focus();
		}else if ( e.which === 39 ){
			$( '.batal' ).focus();
		}
	});
	
	$( '.ubah' ).bind( 'keydown', function( e ) {
		if ( e.which === 37 ){
			$( '.cetak' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#region_code' ).focus();
		}else if ( e.which === 39 ){
			$( '.hapus' ).focus();
		}
	});
	
	$( '.hapus' ).bind( 'keydown', function( e ) {
		if ( e.which === 37 ){
			$( '.ubah' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#region_code' ).focus();
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
			$( '#region_code' ).focus();
		}
	});
	// Button Behavior
	
	$( '.simpan' ).click( function(){
	
		if( $( '#port_kode' ).val() !== '' ){
			$.post( 'db_create', $( 'form' ).serialize(), function( result ){
				success=unserialize(result);
				if( success['status'] ==='Error' ){
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Create Data '+$( '#port_kode' ).val()+' Failed. '+ success['ket'] +'</div>';
					$('#alert').html( message );					
				}else if( success['status'] ){
					var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Create Data '+$( '#port_kode' ).val()+' Complete.</div>';
					$('#alert').html( message );
					initialize();
				} else {
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Create Data '+$( '#port_kode' ).val()+' Failed.</div>';
					$('#alert').html( message );
				}
			});
		} else {
			var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data Required.</div>';
			$('#alert').html( message );
		}
	});
	
	$( '.ubah' ).click( function(){
		if( $( '#port_kode' ).val() !== '' ){
			$.post( 'db_update', $( 'form' ).serialize(), function( result ){
				success=unserialize(result);
				if( success['status'] ==='Error' ){
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Update Data '+$( '#port_kode' ).val()+' Failed. '+ success['ket'] +'</div>';
					$('#alert').html( message );					
				}else if( success['status'] ){
					var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Update Data '+$( '#port_kode' ).val()+' Complete.</div>';
					$('#alert').html( message );
					initialize();
				} else {
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Update Data '+$( '#port_kode' ).val()+' Failed.</div>';
					$('#alert').html( message );
				}
			});
		} else {
			var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data Required.</div>';
			$('#alert').html( message );
		}
	});
	
	$( '.hapus' ).click( function(){
		if( confirm( 'Are You Sure Want To Delete This Data?' ) ){
			if( $( '#port_kode' ).val() !== '' ){
				$.post( 'db_delete', { id: $( '#port_kode' ).val() }, function( result ){
					success=unserialize(result);
					if( success['status'] ==='Error' ){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Delete Data '+$( '#port_kode' ).val()+' Failed. '+ success['ket'] +'</div>';
						$('#alert').html( message );					
					}else if( success['status'] ){
						var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Delete Data '+$( '#port_kode' ).val()+' Complete.</div>';
						$('#alert').html( message );
						initialize();
					} else {
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Delete Data '+$( '#port_kode' ).val()+' Failed.</div>';
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
		if ($('#port_kode').val()===''){
			window.close();
		}else{
			if( confirm( 'Are You Sure Cancel This Transaction?' ) ){
				initialize();
			}
		}
	});

});
</script>
