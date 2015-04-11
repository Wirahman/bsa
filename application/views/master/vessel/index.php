<div class="container">
	<h2 class="judul">Master Vessel</h2>
	<div id="alert"></div>
	<form class="form-horizontal">
		<fieldset>
			<div class="row">
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="vessel_code">Vessel Code :</label>
					<div class="controls">
						<div class="input-append"><input type="text" name="vessel_code" id="vessel_code" oldvalue="" browseobj="cari_kode_vessel" /><a style="display:none" class="add-on browse" id="cari_kode_vessel" href="cari/ref/vessel_code/tipe/ves" title="Klik untuk mencari Kode Vessel"><i class="icon-search"></i></a></div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="vessel_name">Vessel Name :</label>
					<div class="controls">
						<input type="text" name="vessel_name" id="vessel_name" />
					</div>
				</div>
			</div>
						
			<div class="row">
				<div class="control-group span12" style="height:50px">
					<label class="control-label" for="vessel_type">Vessel Type</label>
					<div class="controls">
						<!-- <input type="radio" value ="Feeder Vessel" name="vessel_type" id="vessel_type1" checked />Feeder Vessel<br> -->
						<input type="radio" value ="Feeder Vessel" name="vessel_type" id="vessel_type1" />Feeder Vessel<br>
						<input type="radio" value ="Mother Vessel" name="vessel_type" id="vessel_type2" />Mother Vessel<p>
						<input type="radio" value ="Others" name="vessel_type" id="vessel_type3" />Others<p>
					</div>
				</div>
			</div>
			
			
			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="flag">Flag :</label>
					<div class="controls">
						<input type="text" name="flag" id="flag" />
					</div>
				</div>
			</div>
			
			<div class="form-actions btn-group" style="height:0px">
				<a href="#" class="btn browse cetak" style="top:-15px"><i class="icon-print"></i> Print</a>
				<?php if( in_array( 'create_vessel', unserialize($capabilities) ) ){ ?>
					<a href="#" class="btn btn-primary simpan" style="top:-15px"><i class="icon-ok icon-white"></i> Save</a>
				<?php } ?>
				<?php if( in_array( 'update_vessel', unserialize($capabilities) ) ){ ?>
					<a href="#" class="btn btn-primary ubah" style="top:-15px"><i class="icon-pencil icon-white"></i> Update</a>
				<?php } ?>
				<?php if( intval($role)!=0 ) { ?>
					<?php if( in_array( 'delete_vessel', unserialize($capabilities) ) ){ ?>
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
//Initialize
function initialize(){
	initializex();
	$( '#vessel_code' ).focus();
}
function initializex(){

	$( '.simpan, .batal' ).show();
	$( '.ubah, .hapus' ).hide();
	$('input:text, textarea').val('');
	$('input:checkbox').removeAttr('checked');
	$('#cari_kode_vessel').tooltip();
	$('.alert').alert();
	$('.cetak').attr('href', 'cetak');
	show_user_name('');
}	
preventempty="vessel_code,vessel_name,vessel_type,flag";
preventemptystatus="1,1,1,1";
$( document ).ready( function() {

	// Initialize

	initialize();

	// Retrieve data

	$( '#vessel_code' ).bind( 'blur', function( ) {
		if($(this).val()!==$(this).attr('oldvalue')){	
			$.post( 'db_read', { id: $( '#vessel_code' ).val() }, function( result ){
				if( result === '' ){
				
					var id = $( '#vessel_code' ).val();
					initializex();
					$( '#vessel_code' ).val( id );
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
					if (data[ 'vessel_type' ] == 'Feeder Vessel')
					{
					$('#vessel_type1').prop('checked',true);
					$('#vessel_type2').prop('checked',false);
					$('#vessel_type3').prop('checked',false);
					}
					else if(data[ 'vessel_type' ] == 'Mother Vessel')
					{
					$('#vessel_type1').prop('checked',false);
					$('#vessel_type2').prop('checked',true);
					$('#vessel_type3').prop('checked',false);
					}else if(data[ 'vessel_type' ] == 'Others')
					{
					$('#vessel_type1').prop('checked',false);
					$('#vessel_type2').prop('checked',false);
					$('#vessel_type3').prop('checked',true);
					}
					$( "#vessel_code" ).val( data[ 'vessel_code' ] );
					$( "#vessel_name" ).val( data[ 'vessel_name' ] );
					$( "#vessel_type" ).val( data[ 'vessel_type' ] );
					$( "#flag" ).val( data[ 'flag' ] );
					$( '#flag' ).bind( 'keydown', function( e ) {
					if ( e.which === 13 ){
					$( '.ubah' ).focus();
						}
					});
					$( '.ubah, .hapus' ).show();
					$( '.simpan' ).hide();
					
				}
			});
		}
	});
	$( '#vessel_code' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_kode_vessel' ).click();
			} else {
				$( '#vessel_name' ).focus();
			}
		}else if ( e.which === 40 ){
			e.preventDefault;
			$( '#vessel_name' ).focus();
		}
	});
	
	$( '#vessel_name' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '#vessel_type' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#vessel_code' ).focus();
		}else if ( e.which === 40 ){
			e.preventDefault;
			$( '#flag' ).focus();
		}
	});
	
	$( '#flag' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '.simpan' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#vessel_name' ).focus();
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
			$( '#flag' ).focus();
		}
	});
	
	$( '.simpan' ).bind( 'keydown', function( e ) {
		if ( e.which === 37 ){
			$( '.cetak' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#flag' ).focus();
		}else if ( e.which === 39 ){
			$( '.batal' ).focus();
		}
	});
	
	$( '.ubah' ).bind( 'keydown', function( e ) {
		if ( e.which === 37 ){
			$( '.cetak' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#flag' ).focus();
		}else if ( e.which === 39 ){
			$( '.hapus' ).focus();
		}
	});
	
	$( '.hapus' ).bind( 'keydown', function( e ) {
		if ( e.which === 37 ){
			$( '.ubah' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#flag' ).focus();
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
			$( '#flag' ).focus();
		}
	});
	//Button
	$( '.simpan' ).click( function(){
	
		if( $( '#vessel_code' ).val() !== '' ){
			$.post( 'db_create', $( 'form' ).serialize(), function( result ){
				success=unserialize(result);
				if( success['status'] ==='Error' ){
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Create Data '+$( '#vessel_code' ).val()+' Failed. '+ success['ket'] +'</div>';
					$('#alert').html( message );					
				}else if( success['status'] ){
					var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Create Data '+$( '#vessel_code' ).val()+' Complete.</div>';
					$('#alert').html( message );
					initialize();
				} else {
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Create Data '+$( '#vessel_code' ).val()+' Failed.</div>';
					$('#alert').html( message );
				}
			});
		} else {
			var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data Required.</div>';
			$('#alert').html( message );
		}
	});
	$( '.ubah' ).click( function(){
		if( $( '#vessel_code' ).val() !== '' ){
			$.post( 'db_update', $( 'form' ).serialize(), function( result ){
				success=unserialize(result);
				if( success['status'] ==='Error' ){
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Update Data '+$( '#vessel_code' ).val()+' Failed. '+ success['ket'] +'</div>';
					$('#alert').html( message );					
				}else if( success['status'] ){
					 var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Update Data '+$( '#vessel_code' ).val()+' Complete.</div>';
					$('#alert').html( message );
					initialize();
				} else {
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Update Data '+$( '#vessel_code' ).val()+' Failed.</div>';
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
			if( $( '#vessel_code' ).val() !== '' ){
				$.post( 'db_delete', { id: $( '#vessel_code' ).val() }, function( result ){
					success=unserialize(result);
					if( success['status'] ==='Error' ){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Delete Data '+$( '#vessel_code' ).val()+' Failed. '+ success['ket'] +'</div>';
						$('#alert').html( message );					
					}else if( success['status'] ){
						var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Delete Data '+$( '#vessel_code' ).val()+' Success.</div>';
						$('#alert').html( message );
						initialize();
					} else {
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Delete Data '+$( '#vessel_code' ).val()+' Failed.</div>';
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
		if ($('#vessel_code').val()===''){
			window.close();
		}else{
			if( confirm( 'Are You Sure Cancel This Transaction?' ) ){
				initialize();
			}
		}
	});

});
</script>
