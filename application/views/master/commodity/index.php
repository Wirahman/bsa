<div class="container">
	<h2 class="judul">Master Commodity</h2>
	<div id="alert"></div>
	<form class="form-horizontal">
		<fieldset>
			<div class="row">
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="code">Commodity Code :</label>
					<div class="controls">
						<div class="input-append"><input type="text" name="code" id="code" oldvalue="" browseobj="cari_kode_commodity" style="width:50px" /><a style="display:none" class="add-on browse" id="cari_kode_commodity" href="cari/ref/code/tipe/com" title="Klik untuk mencari Kode Commodity"><i class="icon-search"></i></a></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="name">Commodity Name :</label>
					<div class="controls">
						<input type="text" name="name" id="name" />
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="commodity_class">Commodity Class :</label>
					<div class="controls">
						<div class="input-append">
							<input type="text" name="commodity_class" id="commodity_class" oldvalue="" browseobj="cari_commodity_class" style="width:50px" />
							<input type="text" style="width:440px" readonly="readonly" name="nama_kepala" id="nama_kepala" />
							<a style="display:none" class="add-on browse" id="cari_commodity_class" href="cari/ref/commodity/class/tipe/commclass" title="Klik untuk mencari Commodity Class"><i class="icon-search"></i></a>				
						</div>
					</div>
				</div>
			</div>
			
			
			<div class="row">
				<div class="control-group span12" style="height:60px">
					<label class="control-label" for="desc">Description :</label>
					<div class="controls">
						<input type="text" style="width:450px"  name="desc" id="desc" />
					
					</div>
				</div>
			</div>
			
			<div class="form-actions btn-group" style="height:0px">
				<a href="#" class="btn browse cetak" style="top:-15px"><i class="icon-print"></i> Print</a>
				<?php if( in_array( 'create_commodity', unserialize($capabilities) ) ){ ?>
					<a href="#" class="btn btn-primary simpan" style="top:-15px"><i class="icon-ok icon-white"></i> Save</a>
				<?php } ?>
				<?php if( in_array( 'update_commodity', unserialize($capabilities) ) ){ ?>
					<a href="#" class="btn btn-primary ubah" style="top:-15px"><i class="icon-pencil icon-white"></i> Update</a>
				<?php } ?>
				<?php if( intval($role)!=0 ) { ?>
					<?php if( in_array( 'delete_commodity', unserialize($capabilities) ) ){ ?>
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
	$( '#code' ).focus();
}
function initializex(){

	$( '.simpan, .batal' ).show();
	$( '.ubah, .hapus' ).hide();
	$('input:text, textarea').val('');
	$('input:checkbox').removeAttr('checked');
	$('#cari_kode_commodity').tooltip();
	$('.alert').alert();
	$('.cetak').attr('href', 'cetak');
	show_user_name('');
}	
preventempty="code,name,commodity_class,nama_kepala,desc";
preventemptystatus="1,1,1,1,0";
$( document ).ready( function() {

	// Initialize

	initialize();


	// Retrieve data
	
	$( '#code' ).bind( 'blur', function( ) {
		if($(this).val()!==$(this).attr('oldvalue')){
			$.post( 'db_read', { id: $( '#code' ).val() }, function( result ){
				if( result === '' ){
				
					var id = $( '#code' ).val();
					initializex();
					$( '#code' ).val( id );
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
					$( "#commodity_class" ).val( data[ 'commodity_class' ] );
					$( "#nama_kepala" ).val( data[ 'nama_kepala' ] );
					$( "#name" ).val( data[ 'name' ] );
					$( "#desc" ).val( data[ 'desc' ] );
					$( '.ubah, .hapus' ).show();
					$( '.simpan' ).hide();
					
				}
			});
		}
	});
	$( '#code' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_kode_commodity' ).click();
			} else {
				$( '#name' ).focus();
			}
		}else if ( e.which === 40 ){
			e.preventDefault;
			$( '#name' ).focus();
		}
	});
	$( '#commodity_class' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			if ($( '#commodity_class' ).val()===''){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_commodity_class' ).click();
				$( '#nama_kepala' ).val( "" );
			}else{
				$( '#desc' ).focus();
			}
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#name' ).focus();
		}else if ( e.which === 40 ){
			e.preventDefault;
			$( '#desc' ).focus();
		}
	});
	$( '#commodity_class' ).bind( 'blur', function( ) {
		if ($( '#commodity_class' ).val()===''){
			$( '#nama_kepala' ).val( "" );
		}else{
			if($(this).val()!==$(this).attr('oldvalue')){
				$.post( 'db_read_kepala', { id: $( '#commodity_class' ).val() }, function( result ){
					if( result === '' ){
						$( '#nama_kepala' ).val( "" );
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Commodity Class Not Found.</div>';
						$('#alert').html( message );
						$( '#commodity_class' ).focus();
					} else {
						$( '#nama_kepala' ).val( result );
					}
				});
			}
		}
	});
	
	$( '#name' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '#commodity_class' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#code' ).focus();
		}else if ( e.which === 40 ){
			e.preventDefault;
			$( '#commodity_class' ).focus();
		}
	});
	
	$( '#desc' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '.cetak' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#commodity_class' ).focus();
		}else if ( e.which === 40 ){
			e.preventDefault;
			$( '.simpan' ).focus();
		}
	});
	$( '.cetak' ).bind( 'keydown', function( e ) {
		if ( e.which === 39 ){
			$( '.simpan' ).focus();
			$( '.ubah' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#desc' ).focus();
		}
	});
	
	$( '.simpan' ).bind( 'keydown', function( e ) {
		if ( e.which === 37 ){
			$( '.cetak' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#desc' ).focus();
		}else if ( e.which === 39 ){
			$( '.batal' ).focus();
		}
	});
	
	$( '.ubah' ).bind( 'keydown', function( e ) {
		if ( e.which === 37 ){
			$( '.cetak' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#desc' ).focus();
		}else if ( e.which === 39 ){
			$( '.hapus' ).focus();
		}
	});
	
	$( '.hapus' ).bind( 'keydown', function( e ) {
		if ( e.which === 37 ){
			$( '.ubah' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#desc' ).focus();
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
			$( '#desc' ).focus();
		}
	});
	
	// Button Behavior
	
	$( '.simpan' ).click( function(){
	
		if( $( '#kode_commodity' ).val() !== '' ){
			$.post( 'db_create', $( 'form' ).serialize(), function( result ){
				success=unserialize(result);
				if( success['status'] ==='Error' ){
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Create Data '+$( '#code' ).val()+' Failed. '+ success['ket'] +'</div>';
					$('#alert').html( message );					
				}else if( success['status'] ){
					var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Create Data '+$( '#code' ).val()+' Complete.</div>';
					$('#alert').html( message );
					initialize();
				} else {
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Create Data '+$( '#code' ).val()+' Failed.</div>';
					$('#alert').html( message );
				}
			});
		} else {
			var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data Required.</div>';
			$('#alert').html( message );
		}
	});
	
	$( '.ubah' ).click( function(){
		if( $( '#code' ).val() !== '' ){
			$.post( 'db_update', $( 'form' ).serialize(), function( result ){
				success=unserialize(result);
				if( success['status'] ==='Error' ){
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Update Data '+$( '#code' ).val()+' Failed. '+ success['ket'] +'</div>';
					$('#alert').html( message );					
				}else if( success['status'] ){
					var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Update Data '+$( '#code' ).val()+' Complete.</div>';
					$('#alert').html( message );
					initialize();
				} else {
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Update Data '+$( '#code' ).val()+' Failed.</div>';
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
			if( $( '#code' ).val() !== '' ){
				$.post( 'db_delete', { id: $( '#code' ).val() }, function( result ){
					success=unserialize(result);
					if( success['status'] ==='Error' ){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Delete Data '+$( '#code' ).val()+' Failed. '+ success['ket'] +'</div>';
						$('#alert').html( message );					
					}else if( success['status'] ){
						var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Delete Data '+$( '#code' ).val()+' Complete.</div>';
						$('#alert').html( message );
						initialize();
					} else {
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Delete Data '+$( '#code' ).val()+' Failed.</div>';
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
		if ($('#code').val()===''){
			window.close();
		}else{
			if( confirm( 'Are You Sure Cancel This Transaction?' ) ){
				initialize();
			}
		}
	});

});
</script>
