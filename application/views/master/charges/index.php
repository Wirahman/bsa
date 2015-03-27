<div class="container">
	<h2 class="judul">Master Komponen Freight</h2>
	<div id="alert"></div>
	<form class="form-horizontal">
		<fieldset>
			<div class="row">
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="charges_code"> Charges Code</label>
					<div class="controls">
						<div class="input-append"><input type="text" name="charges_code"
						id="charges_code" oldvalue="" browseobj="cari_kode_charges" />
						<a style="display:none" class="add-on browse" id="cari_kode_charges"
						href="cari?ref=charges_code&tipe=chra" 
						title="Klik untuk mencari Kode charges">
						<i class="icon-search"></i></a></div>
					</div>
				</div>
			</div>
					
			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="description">Description</label>
					<div class="controls">
						<input type="text" name="description" id="description" style="width:500px" />
					</div>
				</div>
			</div>
			
			
            <div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="traffic_lane">Traffic Lane</label>
					
				  <div class="controls">
						<input name="traffic_lane" id="traffic_lane1" type="radio" value="sea" checked  />Sea
						<input name="traffic_lane" id="traffic_lane2" type="radio" value="air"  />Air
					</div>
				</div>
			</div>
			 <div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="lintas">Exim</label>
					
				  <div class="controls">
						<input name="lintas" id="lintas1" type="radio" value="export" checked  />Export
						<input name="lintas" id="lintas2" type="radio" value="import"  />Import
					</div>
				</div>
			</div>
			 <div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="type">Type</label>
					
				  <div class="controls">
						<input name="type" id="type1" type="radio" value="revenue" checked />Revenue
						<input name="type" id="type2" type="radio" value="cost"  />Cost
					</div>
				</div>
			</div>
			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="gl_code">GL Code</label>
					<div class="controls">
						<input type="text" name="gl_code" oldvalue2="" id="gl_code" />
					</div>
				</div>
			</div>
			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="gl_description">GL Description</label>
					<div class="controls">
						<input type="text" name="gl_description" id="gl_description" style="width:500px" />
					</div>
				</div>
			</div>
			 <div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="ke2">Type</label>
					
				  <div class="controls">
				  		<input type="radio" name="ket2"  id="ket21"  value="FreightCharges" checked /> Freight Charges
						<input type="radio" name="ket2" id="ket22"  value="FreightComponent"  />Freight Component Charges
					</div>
				</div>
			</div>
			
			<div class="form-actions btn-group" style="height:0px">
				<a href="#" class="btn browse cetak" style="top:-15px">
				<i class="icon-print"></i>Print</a>
				<?php if( in_array( 'create_charges', unserialize($capabilities) ) ){ ?>
					<a href="#" class="btn btn-primary simpan" style="top:-15px">
					<i class="icon-ok icon-white"></i> Save</a>
				<?php } ?>
				<?php if( in_array( 'update_charges', unserialize($capabilities) ) ){ ?>
					<a href="#" class="btn btn-primary ubah" style="top:-15px">
					<i class="icon-pencil icon-white"></i>Update</a>
				<?php } ?>
				<?php if( intval($role)!=0 ) { ?>
					<?php if( in_array( 'delete_charges', unserialize($capabilities) ) ){ ?>
						<a href="#" class="btn btn-danger hapus" style="top:-15px">
						<i class="icon-trash icon-white"></i>Delete</a>
					<?php } ?>
				<?php } ?>
					<a href="#" class="btn batal" style="top:-15px">
					<i class="icon-refresh"></i>Cancel</a>
			</div>
		</fieldset>
		
	</form>
</div>

<div id="mask"></div>
<link href="<?php echo base_url('assets/css/jqueryui/style.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/mask.css'); ?>" rel="stylesheet">
<script src='<?php echo base_url('assets/js/format.charges.min.js'); ?>'></script>
<script src='<?php echo base_url('assets/js/unserialize.js'); ?>'></script>

<script src='<?php echo base_url('assets/js/utf8.decode.js'); ?>'></script>
<script src='<?php echo base_url('assets/js/script.js'); ?>'></script>


<script>
//Initialize
function  initialize(){
	initializex();
	$( '#charges_code' ).focus();
}
function  initializex(){

	$( '.simpan, .batal' ).show();
	$( '.ubah, .hapus' ).hide();
	$('input:text, textarea').val('');
	$('input:checkbox').removeAttr('checked');
	$('#cari_kode_charges').tooltip();
	$('.alert').alert();
	$('.cetak').attr('href', 'cetak');
	$('input:radio[name=ket2]:nth(0)').attr('checked',true);
	$('input:radio[name=lintas]:nth(0)').attr('checked',true);
	$('input:radio[name=type]:nth(0)').attr('checked',true);
	$('input:radio[name=traffic_lane]:nth(0)').attr('checked',true);
	show_user_name('');
}	
preventempty="charges_code,description,traffic_lane,lintas,type,gl_code,gl_description,ket2";
preventemptystatus="1,1,1,1,1,1,1,1";
$( document ).ready( function () {

	// Initialize

	initialize();

	// Retrieve data untuk menampilakn data yg telah di cari f5 ketika di enter
$( '#charges_code' ).bind( 'blur',function ( ) {
		if($(this).val()!==$(this).attr('oldvalue')){	
			$.post( 'db_read', { id: $( '#charges_code' ).val() }, function ( result ){
				if( result === '' ){
				
					var id = $( '#charges_code' ).val();
					initializex();
					$( '#charges_code' ).val( id );
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
					////////checked/////////
				
					$( "#charges_code" ).val( data[ 'charges_code' ] );
					$( "#description" ).val( data[ 'description' ] );
					$( "#gl_code").val (data['gl_code']);
					$( "#gl_description").val (data['gl_description']);
					if(data['type']=='revenue')
					{
						$('input:radio[name=type]:nth(0)').attr('checked',true);
					}
					else
					{
						$('input:radio[name=type]:nth(1)').attr('checked',true);
					}
					$( "#type").val (data['type']);
					if(data['lintas']=='export')
					{
						$('input:radio[name=lintas]:nth(0)').attr('checked',true);
					}
					else
					{
						$('input:radio[name=lintas]:nth(1)').attr('checked',true);
					}
					$( "#lintas").val (data['lintas']);
					if(data['ket2']=='FreightCharges')
					{
						$('input:radio[name=ket2]:nth(0)').attr('checked',true);
					}
					else
					{
						$('input:radio[name=ket2]:nth(1)').attr('checked',true);
					}
					$( "#ket2").val (data['ket2']);
					if(data['traffic_lane']=='sea')
					{
						$('input:radio[name=traffic_lane]:nth(0)').attr('checked',true);
					}
					else
					{
						$('input:radio[name=traffic_lane]:nth(1)').attr('checked',true);
					}
					$( "#traffic_lane").val (data['traffic_lane']);
					$( '.ubah, .hapus' ).show();
					$( '.simpan' ).hide();
					
				}
			});
		}
	});
	$( '#charges_code' ).bind( 'keydown',function ( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_kode_charges' ).click();
			} else {
				$( '#description' ).focus();
			}
		}
	});
	$( '#description' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '#traffic_lane1' ).focus();
		}
	});
	$( '#traffic_lane1' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '#lintas1' ).focus();
		}
	});
	$( '#traffic_lane2' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '#lintas1' ).focus();
		}
	});
	
	$( '#lintas1' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '#type1' ).focus();
		}
	});

	$( '#lintas2' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '#type1' ).focus();
		}
	});
	
	$( '#type1' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '#gl_code' ).focus();
		}
	});

	$( '#type2' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '#gl_code' ).focus();
		}
	});

	$( '#gl_code' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '#gl_description' ).focus();
		}
	});
	$( '#gl_description' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '#ket21' ).focus();
		}
	});
	$( '#ket21' ).bind( 'keydown', function( e ) {
		if ( e.which === 38 ){
			$( '#simpan' ).focus();
		}
	});

	$( '#ket22' ).bind( 'keydown', function( e ) {
		if ( e.which === 38 ){
			$( '#simpan' ).focus();
		}
	});
	
	$( '.cetak' ).bind( 'keydown', function( e ) {
		if ( e.which === 39 ){
			$( '.simpan' ).focus();
			$( '.ubah' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#ket3' ).focus();
		}
	});
	
	$( '.simpan' ).bind( 'keydown', function( e ) {
		if ( e.which === 37 ){
			$( '.cetak' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#ket3' ).focus();
		}else if ( e.which === 39 ){
			$( '.batal' ).focus();
		}
	});
	
	$( '.ubah' ).bind( 'keydown', function( e ) {
		if ( e.which === 37 ){
			$( '.cetak' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#ket3' ).focus();
		}else if ( e.which === 39 ){
			$( '.hapus' ).focus();
		}
	});
	
	$( '.hapus' ).bind( 'keydown', function( e ) {
		if ( e.which === 37 ){
			$( '.ubah' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#ket3' ).focus();
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
			$( '#ket3' ).focus();
		}
	});
	////////////////////////////////
	
	////////////////////////////////
	//fungsi cekbox tanpa harus velue di view
	//
	////////////////////////////////////
	
	
	/////////////////////////////////////////
	//fungsi Button simpan
	$( '.simpan' ).click( function (){
	
		if( $( '#charges_code' ).val() !== '' ){
			$.post( 'db_create', $( 'form' ).serialize(), function ( result ){
				success=unserialize(result);
				if( success['status'] ==='Error' ){
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Create Data '+$( '#charges_code' ).val()+' Failed. '+ success['ket'] +'</div>';
					$('#alert').html( message );					
				}else if( success['status'] ){
					var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Create Data '+$( '#charges_code' ).val()+' Complete.</div>';
					$('#alert').html( message );
					initialize();
				} else {
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Create Data '+$( '#charges_code' ).val()+' Failed.</div>';
					$('#alert').html( message );
				}
			});
		} else {
			var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data Required.</div>';
			$('#alert').html( message );
		}
	});
	$( '.ubah' ).click( function (){
		if( $( '#charges_code' ).val() !== '' ){
			$.post( 'db_update', $( 'form' ).serialize(), function ( result ){
				success=unserialize(result);
				if( success['status'] ==='Error' ){
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Update Data '+$( '#charges_code' ).val()+' Failed. '+ success['ket'] +'</div>';
					$('#alert').html( message );					
				}else if( success['status'] ){
					 var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Update Data '+$( '#charges_code' ).val()+' Complete.</div>';
					$('#alert').html( message );
					initialize();
				} else {
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Update Data '+$( '#charges' ).val()+'  Failed.</div>';
					$('#alert').html( message );
				}
			});
		} else {
			var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data Required.</div>';
			$('#alert').html( message );
		}
	});
	$( '.hapus' ).click( function (){
		if( confirm( 'Are You Sure Delete This Data?' ) ){
			if( $( '#charges_code' ).val() !== '' ){
				$.post( 'db_delete', { id: $( '#charges_code' ).val() }, function ( result ){
					success=unserialize(result);
					if( success['status'] ==='Error' ){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Delete Data '+$( '#charges_code' ).val()+' Failed. '+ success['ket'] +'</div>';
						$('#alert').html( message );					
					}else if( success['status'] ){
						var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Delete Data '+$( '#charges_code' ).val()+' Complete.</div>';
						var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Delete Data '+$( '#charges_code' ).val()+' Complete.</div>';
						$('#alert').html( message );
						initialize();
					} else {
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Delete Data '+$( '#charges_code' ).val()+' Failed.</div>';
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
		if ($('#charges_code').val()===''){
			window.close();
		}else{
			if( confirm( 'Are You Sure Cancel This Transaction?' ) ){
				initialize();
			}
		}
	});

});
</script>