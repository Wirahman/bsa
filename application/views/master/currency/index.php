<div class="container">
	<h2 class="judul">Master Currency</h2>
	<div id="alert"></div>
	<form class="form-horizontal">
		<fieldset>
			<div class="row">
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="currency_code">Code Currency</label>
					<div class="controls">
						<div class="input-append"><input maxlength="5"  style="width:100px" type="text" name="currency_code"
						id="currency_code" oldvalue="" browseobj="cari_kode_currency" class="span2"/>
						<a style="display:none" class="add-on browse" id="cari_kode_currency"
						href="cari/ref/currency_code/tipe/cur" 
						title="Klik untuk mencari Kode currency">
						<i class="icon-search"></i></a></div>
					</div>
				</div>
			</div>
					
			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="description">Description</label>
					<div class="controls">
						<input type="text" name="description" id="description"  />
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="symbol">Symbol</label>
					<div class="controls">
						<input type="text" name="symbol" id="symbol" class="span1" />
					</div>
				</div>
			</div>
            <div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="function">Function</label>
					
				  <div class="controls">
						<input  name="function"  id ="function1"   value="aktif" type="checkbox"  />Aktif
						 <input name="function"  id ="function2"   value="non_aktif" type="checkbox"  />Non Aktif
						 </div>
				</div>
			</div>
			
			
			<div class="form-actions btn-group" style="height:0px">
				<a href="#" class="btn browse cetak" style="top:-15px">
				<i class="icon-print"></i> Print</a>
				<?php if( in_array( 'create_currency', unserialize($capabilities) ) ){ ?>
					<a href="#" class="btn btn-primary simpan" style="top:-15px">
					<i class="icon-ok icon-white"></i> Save</a>
				<?php } ?>
				<?php if( in_array( 'update_currency', unserialize($capabilities) ) ){ ?>
					<a href="#" class="btn btn-primary ubah" style="top:-15px">
					<i class="icon-pencil icon-white"></i>Update</a>
				<?php } ?>
				<?php if( intval($role)!=0 ) { ?>
					<?php if( in_array( 'delete_currency', unserialize($capabilities) ) ){ ?>
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
function initialize(){
	initializex();
	$( '#currency_code' ).focus();
}
function initializex(){

	$( '.simpan, .batal' ).show();
	$( '.ubah, .hapus' ).hide();
	$( '#function' ).focus();	
	$('input:text, textarea').val('');
	$('input:checkbox').removeAttr('checked');
	$('#cari_kode_currency').tooltip();
	$('.alert').alert();
	$('.cetak').attr('href', 'cetak');
	show_user_name('');
}	
preventempty="currency_code,description,symbol,function";
preventemptystatus="1,1,1,1";
$( document ).ready( function() {

	// Initialize

	initialize();

	// Retrieve data untuk menampilakan data yg telah di cari f5 ketika di enter
$( '#currency_code' ).bind( 'blur', function( ) {
		if($(this).val()!==$(this).attr('oldvalue')){	
			$.post( 'db_read', { id: $( '#currency_code' ).val() }, function( result ){
				if( result === '' ){
					var id = $( '#currency_code' ).val();
					initializex();
					$( '#currency_code' ).val( id );
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
					if (data[ 'function' ] == "aktif")
					{
					$('#function1').prop('checked',true);
					$('#function2').prop('checked',false);
					}
					else if(data[ 'function' ] == "non_aktif")
					{
					$('#function1').prop('checked',false);
					$('#function2').prop('checked',true);
					}
					$( "#currency_code" ).val( data[ 'currency_code' ] );//filed / isi yang di keluarkan
					$( "#description" ).val( data[ 'description' ] );
					$( "#symbol").val (data['symbol']);
					$( "#function").val (data['function']);
					$( '.ubah, .hapus' ).show();
					$( '.simpan' ).hide();
					
				}
			});
		}
	});
	$( '#currency_code' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_kode_currency' ).click();
			} else {
				$( '#description' ).focus();
			}
		}
	});
	$( '#description' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '#symbol' ).focus();
		}
	});
	$( '#symbol' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '#function1' ).focus();
		}
	});
	$( '#function1' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '#function2' ).focus();
		}
	});
	
	$( '#function2' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '.simpan' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#currency_code' ).focus();
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
			$( '#function2' ).focus();
		}
	});
	
	$( '.simpan' ).bind( 'keydown', function( e ) {
		if ( e.which === 37 ){
			$( '.cetak' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#function2' ).focus();
		}else if ( e.which === 39 ){
			$( '.batal' ).focus();
		}
	});
	
	$( '.ubah' ).bind( 'keydown', function( e ) {
		if ( e.which === 37 ){
			$( '.cetak' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#function2' ).focus();
		}else if ( e.which === 39 ){
			$( '.hapus' ).focus();
		}
	});
	
	$( '.hapus' ).bind( 'keydown', function( e ) {
		if ( e.which === 37 ){
			$( '.ubah' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#function2' ).focus();
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
			$( '#function2' ).focus();
		}
	});
	
	////////////////////////////////////
	//
	//fungsi cekbox 
	//
	////////////////////////////////////

	/////////////////////////////////////////////////////////
	//
	//fungsi Button simpan,ubah,delete
	//
	////////////////////////////////////////////////////////
	$( '.simpan' ).click( function(){
	
		if( $( '#currency_code' ).val() !== '' ){
			$.post( 'db_create', $( 'form' ).serialize(), function( result ){
				success=unserialize(result);
				if( success['status'] ==='Error' ){
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Create Data '+$( '#currency_code' ).val()+' Failed. '+ success['ket'] +'</div>';
					$('#alert').html( message );					
				}else if( success['status'] ){
					var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Create Data '+$( '#currency_code' ).val()+' Success.</div>';
					$('#alert').html( message );
					initialize();
				} else {
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Create Data '+$( '#currency_code' ).val()+' Failed.</div>';
					$('#alert').html( message );
				}
			});
		} else {
			var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data Required.</div>';
			$('#alert').html( message );
		}
	});
	$( '.ubah' ).click( function(){
		if( $( '#currency_code' ).val() !== '' ){
			$.post( 'db_update', $( 'form' ).serialize(), function( result ){
				success=unserialize(result);
				if( success['status'] ==='Error' ){
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Update Data '+$( '#currency_code' ).val()+' Failed. '+ success['ket'] +'</div>';
					$('#alert').html( message );					
				}else if( success['status'] ){
					 var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Update Data '+$( '#currency_code' ).val()+' Complete.</div>';
					$('#alert').html( message );
					initialize();
				} else {
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Update Data '+$( '#currency' ).val()+' Failed.</div>';
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
			if( $( '#currency_code' ).val() !== '' ){
				$.post( 'db_delete', { id: $( '#currency_code' ).val() }, function( result ){
					success=unserialize(result);
					if( success['status'] ==='Error' ){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Delete Data '+$( '#currency_code' ).val()+' Failed. '+ success['ket'] +'</div>';
						$('#alert').html( message );					
					}else if( success['status'] ){
						var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Delete Data '+$( '#currency_code' ).val()+' Complete.</div>';
						$('#alert').html( message );
						initialize();
					} else {
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Delete Data '+$( '#currency_code' ).val()+' Failed.</div>';
						$('#alert').html( message );
					}
				});
			} else {
				var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data Required.</div>';
				$('#alert').html( message );
			}
		}
	});
	$( '.batal' ).click( function (){
		if ($('#currency_code').val()===''){
			window.close();
		}else{
			if( confirm( 'Are You Sure Cancel This Transaction?' ) ){
				initialize();
			}
		}
	});

});
</script>
