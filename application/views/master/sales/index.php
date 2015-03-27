<div class="container">
	<h2 class="judul">Master Sales</h2>
	<div id="alert"></div>
	<form class="form-horizontal">
		<fieldset>
			<div class="row">
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="sales_code">Sales Code</label>
					<div class="controls">
						<div class="input-append"><input maxlength="5"  style="width:75px" type="text" name="sales_code"
						id="sales_code" oldvalue="" browseobj="cari_kode_sales" />
						<a style="display:none" class="add-on browse" id="cari_kode_sales"
						href="cari?ref=sales_code&tipe=sal" 
						title="Klik untuk mencari Kode sales">
						<i class="icon-search"></i></a></div>
					</div>
				</div>
			</div>
					
			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="nama_sales">Sales Name</label>
					<div class="controls">
						<input type="text" name="nama_sales" id="nama_sales" />
					</div>
				</div>
			</div>
			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="address">Address</label>
					<div class="controls">
                 <!--<textarea type="text" name="address" id="address"></textarea>-->
					<input type="text" name="address" id="address" class="span4" />
					
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="address1"></label>
					<div class="controls">
                 <!--<textarea type="text" name="address" id="address"></textarea>-->
					<input type="text" name="address1" id="address1" class="span4" />
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="address2"></label>
					<div class="controls">
                 <!--<textarea type="text" name="address" id="address"></textarea>-->
					<input type="text" name="address2" id="address2" class="span4" />
					
					</div>
				</div>
			</div>
			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="phone">Phone</label>
					<div class="controls">
						<input type="text" name="phone" id="phone" />
					</div>
				</div>
			</div>
			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="no_ktp">No_Ktp</label>
					<div class="controls">
						<input type="text" name="no_ktp" id="no_ktp" />
					</div>
				</div>
			</div>
			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="title">Title</label>
					<div class="controls">
						<input type="text" name="title" id="title" />
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
					<i class="icon-refresh"></i> Cancel</a>
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
//Initialize
preventempty="sales_code, nama_sales";
preventemptystatus="1,1";
function initialize(){
	initializex();
	$( '#sales_code' ).focus();
}
function initializex(){

	$( '.simpan, .batal' ).show();
	$( '.ubah, .hapus' ).hide();
	$('input:text, textarea').val('');
	$('input:checkbox').removeAttr('checked');
	$('#cari_kode_sales').tooltip();
	$('.alert').alert();
	$('.cetak').attr('href', 'cetak');
	show_user_name('');
}	

$( document ).ready( function() {

	// Initialize

	initialize();

	// Retrieve data untuk menampilakn data yg telah di cari f5 ketika di enter
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
					$( "#sales_code" ).val( data[ 'sales_code' ] );
					$( "#nama_sales" ).val( data[ 'nama_sales' ] );
					$( "#address" ).val( data[ 'address' ] );
					$( "#address1" ).val( data[ 'address1' ] );
					$( "#address2" ).val( data[ 'address2' ] );
					$( "#phone" ).val( data[ 'phone' ] );
					$( "#no_ktp" ).val( data[ 'no_ktp' ] );
					$( "#title" ).val( data[ 'title' ] );
					$( "#team" ).val( data[ 'team' ] );
					$( '.ubah, .hapus' ).show();
					$( '.simpan' ).hide();
					
				}
			});
		}
	});
	$( '#sales_code' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_kode_sales' ).click();
			} else {
				$( '#nama_sales' ).focus();
			}
		}
	});
	$( '#nama_sales' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '#address' ).focus();
		}
	});
	$( '#address' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '#address1' ).focus();
		}
	});
	$( '#address1' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '#address2' ).focus();
		}
	});
	$( '#address2' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '#phone' ).focus();
		}
	});
	$( '#phone' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '#no_ktp' ).focus();
		}
	});
	$( '#no_ktp' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '#title' ).focus();
		}
	});
	$( '#title' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '#team' ).focus();
		}
	});
	$( '#team' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '.simpan' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#team' ).focus();
		}else if ( e.which === 40 ){
			e.preventDefault;
			$( '.cetak' ).focus();
		}
	});
	$( '.cetak' ).bind( 'keydown', function( e ) {
		if ( e.which === 39 ){
			$( '.simpan' ).focus();
			$( '.ubah' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#team' ).focus();
		}
	});
	
	$( '.simpan' ).bind( 'keydown', function( e ) {
		if ( e.which === 37 ){
			$( '.cetak' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#team' ).focus();
		}else if ( e.which === 39 ){
			$( '.batal' ).focus();
		}
	});
	
	$( '.ubah' ).bind( 'keydown', function( e ) {
		if ( e.which === 37 ){
			$( '.cetak' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#team' ).focus();
		}else if ( e.which === 39 ){
			$( '.hapus' ).focus();
		}
	});
	
	$( '.hapus' ).bind( 'keydown', function( e ) {
		if ( e.which === 37 ){
			$( '.ubah' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#team' ).focus();
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
			$( '#team' ).focus();
		}
	});
	//Button
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
						var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Delete Data '+$( '#sales_code' ).val()+' Complete.</div>';
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