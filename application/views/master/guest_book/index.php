<div class="container">
	<h2 class="judul">Buku Tamu</h2>
	<div id="alert"></div>
	<form class="form-horizontal">
		<fieldset>
			<div class="row">
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="date">Tanggal :</label>
					<div class="controls">
						<div class="input-append"><input type="text" name="date"
						id="date" oldvalue="" browseobj="cari_date" style="width:100px" class="date tanggal"/>
						<a style="display:none" class="add-on browse" id="cari_date"
						href="cari?ref=date&tipe=guest_book" 
						title="Klik untuk mencari Kode Tanggal">
						<i class="icon-search"></i></a></div>
					</div>
				</div>
			</div>
					
			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="nama">Nama :</label>
					<div class="controls">
						<input type="text" style="width:200px" name="nama" id="nama" />
					</div>
				</div>
			</div>
					
			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="alamat">Alamat :</label>
					<div class="controls">
						<input type="text" style="width:400px" name="alamat" id="alamat" />
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="contack_person">Contack Person :</label>
					<div class="controls">
						<input type="text" style="width:200px" name="contack_person" id="contack_person" />
					</div>
				</div>
			</div>
				
			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="company_name">Asal Perusahaan :</label>
					<div class="controls">
						<input type="text" style="width:200px" name="company_name" id="company_name" />
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="tujuan">Tujuan :</label>
					<div class="controls">
						<input type="text" style="width:200px" name="tujuan" id="tujuan" />
					</div>
				</div>
			</div>
			
			<div class="form-actions btn-group" style="height:0px">
				<a href="#" class="btn browse cetak" style="top:-15px">
				<i class="icon-print"></i> Cetak</a>
				<?php if( in_array( 'create_guest_book', unserialize($capabilities) ) ){ ?>
					<a href="#" class="btn btn-primary simpan" style="top:-15px">
					<i class="icon-ok icon-white"></i> Simpan</a>
				<?php } ?>
				<?php if( in_array( 'update_guest_book', unserialize($capabilities) ) ){ ?>
					<a href="#" class="btn btn-primary ubah" style="top:-15px">
					<i class="icon-pencil icon-white"></i> Ubah</a>
				<?php } ?>
				<?php if( intval($role)!=0 ) { ?>
					<?php if( in_array( 'delete_guest_book', unserialize($capabilities) ) ){ ?>
						<a href="#" class="btn btn-danger hapus" style="top:-15px">
						<i class="icon-trash icon-white"></i> Hapus</a>
					<?php } ?>
				<?php } ?>
					<a href="#" class="btn batal" style="top:-15px">
					<i class="icon-refresh"></i> Batal</a>
			</div>
		</fieldset>
		
	</form>
</div>

<div id="mask"></div>
<link href="<?php echo base_url('assets/css/jqueryui/style.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/mask.css'); ?>" rel="stylesheet">
<script src='<?php echo base_url('assets/js/format.currency.min.js'); ?>'></script>
<script src='<?php echo base_url('assets/js/unserialize.js'); ?>'></script>
<script src='<?php echo base_url('assets/js/jqueryui/jquery.ui.datepicker.min.js'); ?>'></script>
<script src='<?php echo base_url('assets/js/utf8.decode.js'); ?>'></script>
<script src='<?php echo base_url('assets/js/script.js'); ?>'></script>
<script src='<?php echo base_url('assets/js/jqueryui/jquery.ui.core.min.js'); ?>'></script>
<script src='<?php echo base_url('assets/js/jqueryui/jquery.ui.datepicker.min.js'); ?>'></script>
<script src='<?php echo base_url('assets/js/jquery.caret.min.js'); ?>'></script>

<script>
//Initialize
function initialize(){
	initializex();
	$( '#date' ).focus();
}
function initializex(){

	$( '.simpan, .batal' ).show();
	$( '.ubah, .hapus' ).hide();
	$('input:text, textarea').val('');
	$('input:checkbox').removeAttr('checked');
	$('.tanggal').datepicker({
		dateFormat: 'dd-mm-yy',
		changeMonth:true,
		changeYear:true
	});
	
	var d = new Date();
	var tgl = d.getDate();
	if( tgl < 10 ) tgl = "0" + tgl;
	var bln = d.getMonth() + 1;
	if( bln < 10 ) bln = "0" + bln;
	var thn = d.getFullYear();
	var tanggal = tgl+"-"+bln+"-"+thn;
	$( "#date" ).val( tanggal );
	
	$('.alert').alert();
	$('.cetak').attr('href', 'cetak');
	show_user_name('');
}	
preventempty="date,nama,alamat,contack_person,company_name,tujuan";
preventemptystatus="1,1,1,1,1,1";
$( document ).ready( function() {

	// Initialize

	initialize();

	// Retrieve data
$( '#date' ).bind( 'blur', function( ) {
		
			$.post( 'db_read', { id: $( '#date' ).val() }, function( result ){
				if( result === '' ){
				
					var id = $( '#date' ).val();
					initializex();
					$( '#date' ).val( id );
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
					
					var tanggal = data[ 'date' ].split( "-" );
					tgl = tanggal[ 2 ];
					bln = tanggal[ 1 ];
					thn = tanggal[ 0 ];
					$( "#date" ).val(tgl + "-" + bln + "-" + thn );
					$( "#nama" ).val( data[ 'nama' ] );
					$( "#alamat" ).val( data[ 'alamat' ] );
					$( "#contack_person" ).val( data[ 'contack_person' ] );
                                        $( "#company_name").val( data[ 'company_name']);
                                        $( "#tujuan").val( data[ 'tujuan'])
					$( '.ubah, .hapus' ).show();
					$( '.simpan' ).hide();
					
				}
			});
		
	});
	$( '#date' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== '' ){	
				$('#nama').focus();

			}
		}else if ( e.which === 40 ){
			e.preventDefault;
			$( '#nama' ).focus();
		}
	});
	
	$( '#nama' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== '' ){	
				$('#alamat').focus();

			}
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#date' ).focus();
		}else if ( e.which === 40 ){
			e.preventDefault;
			$( '#alamat' ).focus();
		}
	});
	
	$( '#alamat' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== '' ){	
				$('#contack_person').focus();

			}
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#nama' ).focus();
		}else if ( e.which === 40 ){
			e.preventDefault;
			$( '#contack_person' ).focus();
		}
	});
	
	$( '#contack_person' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== '' ){	
				$('#company_name').focus();

			}
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#alamat' ).focus();
		}else if ( e.which === 40 ){
			e.preventDefault;
			$( '#company_name' ).focus();
		}
	});
	
	$( '#company_name' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== '' ){	
				$('#tujuan').focus();

			}
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#contack_person' ).focus();
		}else if ( e.which === 40 ){
			e.preventDefault;
			$( '#tujuan' ).focus();
		}
	});
	$( '#tujuan' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '.simpan' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#min_target' ).focus();
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
			$( '#tujuan' ).focus();
		}
	});
	
	$( '.simpan' ).bind( 'keydown', function( e ) {
		if ( e.which === 37 ){
			$( '.cetak' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#tujuan' ).focus();
		}else if ( e.which === 39 ){
			$( '.batal' ).focus();
		}
	});
	
	$( '.ubah' ).bind( 'keydown', function( e ) {
		if ( e.which === 37 ){
			$( '.cetak' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#tujuan' ).focus();
		}else if ( e.which === 39 ){
			$( '.hapus' ).focus();
		}
	});
	
	$( '.hapus' ).bind( 'keydown', function( e ) {
		if ( e.which === 37 ){
			$( '.ubah' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#tujuan' ).focus();
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
			$( '#tujuan' ).focus();
		}
	});
	//Button
	$( '.simpan' ).click( function(){
	
		if( $( '#date' ).val() !== '' ){
			$.post( 'db_create', $( 'form' ).serialize(), function( result ){
				success=unserialize(result);
				if( success['status'] ==='Error' ){
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Create Data '+$( '#date' ).val()+' Failed. '+ success['ket'] +'</div>';
					$('#alert').html( message );					
				}else if( success['status'] ){
					var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Create Data '+$( '#date' ).val()+' Complete.</div>';
					$('#alert').html( message );
					initialize();
				} else {
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Create Data '+$( '#date' ).val()+' Failed.</div>';
					$('#alert').html( message );
				}
			});
		} else {
			var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data Required.</div>';
			$('#alert').html( message );
		}
	});
	$( '.ubah' ).click( function(){
		if( $( '#date' ).val() !== '' ){
			$.post( 'db_update', $( 'form' ).serialize(), function( result ){
				success=unserialize(result);
				if( success['status'] ==='Error' ){
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Update Data '+$( '#date' ).val()+' Failed. '+ success['ket'] +'</div>';
					$('#alert').html( message );					
				}else if( success['status'] ){
					 var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Update Data '+$( '#date' ).val()+' Complete.</div>';
					$('#alert').html( message );
					initializex();
				} else {
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Update Data '+$( '#date' ).val()+' Failed.</div>';
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
			if( $( '#date' ).val() !== '' ){
				$.post( 'db_delete', { id: $( '#date' ).val() }, function( result ){
					success=unserialize(result);
					if( success['status'] ==='Error' ){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Delete Data '+$( '#date' ).val()+' Failed. '+ success['ket'] +'</div>';
						$('#alert').html( message );					
					}else if( success['status'] ){
						var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Delete Data '+$( '#date' ).val()+' Complete.</div>';
						$('#alert').html( message );
						initializex();
					} else {
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Delete Data '+$( '#date' ).val()+' Failed.</div>';
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
		if ($('#date').val()===''){
			window.close();
		}else{
			if( confirm( 'Are You Sure Cancel This Transaction?' ) ){
				initializex();
			}
		}
	});

});
</script>