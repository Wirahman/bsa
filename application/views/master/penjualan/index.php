<div class="container">
	<h2 class="judul">Laporan Penjualan</h2>
	<div id="alert"></div>
	<form class="form-horizontal">
		<fieldset>
		<div class="formx" style="height:480px">
			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="pilihan">Pencetakan</label>
					<div class="controls">
						<select name="pilihan" id="pilihan" class="pilihan">
							<option value="-">Pilih Pencetakan</option>
							<option value="jpp">Per Periode</option>
<!--							<option value="jpc">Per Customer</option>
							<option value="jps">Per Sales</option>
							<option value="jpg">Per Group Barang</option>
-->							<option value="jpk">Per Kode Barang</option>
							<option value="jhh">History Harga Jual & Disc Per Customer</option>
<!--							<option value="jbp">Bonus Penjualan</option>
							<option value="jcl">Cetak Lebih Dari 1 Invoice</option>
-->						</select>
					</div>
				</div>
			</div>
			<div class="row detailpilihan jpp jpc jps jpg jpk jhh jbp jcl">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="tanggal">Dari Periode</label>
					<div class="controls">
						<input type="text" name="tanggal" id="tanggal" style="width:130px" class="tanggal"/>
					</div>
				</div>
			</div>

			<div class="row detailpilihan jpp jpc jps jpg jpk jhh jbp jcl">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="tanggal2">Sampai Periode</label>
					<div class="controls">
						<input type="text" name="tanggal2" id="tanggal2" style="width:130px" class="tanggal"/>
					</div>
				</div>
			</div>

			<div class="row detailpilihan jpp">
				<div class="control-group span4" style="height:15px">
					<label class="control-label">Model Laporan</label>
					<div class="controls">
						<input type="radio" name="model_cetak" id="cetak_invoice" value="invoice" checked="checked" style="margin-left:-24px" /> <label class="control-label" for="cetak_invoice" style="margin-left:25px;width:0px">Invoice</label>
					</div>
				</div>
				<div class="control-group span4" style="height:15px">
					<div class="controls">
						<input type="radio" name="tipejual" id="penjualan" value="jual" style="margin-left:-170px" /><label class="control-label" for="penjualan" style="margin-left:-50px;width:150px;text-align:left">Penjualan</label>
					</div>
				</div>
				<div class="control-group span4" style="height:15px">
					<div class="controls">
						<input type="radio" name="tipejual" id="penjualann" value="jualn" style="margin-left:-200px" /><label class="control-label" for="penjualann" style="margin-left:-180px;width:100px;text-align:left">Penjualan (N)</label>						
					</div>
				</div>
			</div>

			<div class="row detailpilihan jpp">
				<div class="control-group span4" style="height:15px">
					<div class="controls">
						<input type="radio" name="model_cetak" id="cetak_barang" value="barang" style="margin-left:-114px" /> <label class="control-label" for="cetak_barang" style="margin-left:25px;width:90px;text-align:left">Item Barang</label>
					</div>
				</div>
				<div class="control-group span4" style="height:15px">
					<div class="controls">
						<input type="radio" name="tipejual" id="penjualans" value="juals" style="margin-left:-170px" /><label class="control-label" for="penjualans" style="margin-left:-50px;width:150px;text-align:left">Penjualan Sederhana</label>
					</div>
				</div>
				<div class="control-group span4" style="height:15px">
					<div class="controls">
						<input type="radio" name="tipejual" id="penjualana" value="juala" checked="checked" style="margin-left:-200px" /><label class="control-label" for="penjualana" style="margin-left:-180px;width:100px;text-align:left">Penjualan (All)</label>
					</div>
				</div>
			</div>

			<div class="row detailpilihan jpp jps">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="kode_sales">Dari Sales</label>
					<div class="controls">
						<div class="input-append"><input type="text" name="kode_sales" id="kode_sales" style="width:130px" oldvalue="" browseobj="cari_kode_sales"/>
						<input type="text" name="nama_sales" readonly="readonly" id="nama_sales" style="width:550px"/><a style="display:none" class="add-on browse" id="cari_kode_sales" href="cari?ref=kode_sales&tipe=karyawan" title="Klik untuk mencari kode sales"><i class="icon-search"></i></a></div>
					</div>
				</div>
			</div>
		
			<div class="row detailpilihan jpp jps">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="kode_sales2">Sampai Sales</label>
					<div class="controls">
						<div class="input-append"><input type="text" name="kode_sales2" id="kode_sales2" style="width:130px" oldvalue="" browseobj="cari_kode_sales2"/>
						<input type="text" name="nama_sales2" readonly="readonly" id="nama_sales2" style="width:550px"/><a style="display:none" class="add-on browse" id="cari_kode_sales2" href="cari?ref=kode_sales2&tipe=karyawan" title="Klik untuk mencari kode sales"><i class="icon-search"></i></a></div>
					</div>
				</div>
			</div>
		
			<div class="row detailpilihan jpg">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="kode_group">Dari Group</label>
					<div class="controls">
						<div class="input-append"><input type="text" name="kode_group" id="kode_group" style="width:130px" oldvalue="" browseobj="cari_kode_group"/>
						<input type="text" name="nama_group" readonly="readonly" id="nama_group" style="width:550px"/><a style="display:none" class="add-on browse" id="cari_kode_group" href="cari?ref=kode_group&tipe=group" title="Klik untuk mencari kode group"><i class="icon-search"></i></a></div>
					</div>
				</div>
			</div>
		
			<div class="row detailpilihan jpg">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="kode_group2">Sampai Group</label>
					<div class="controls">
						<div class="input-append"><input type="text" name="kode_group2" id="kode_group2" style="width:130px" oldvalue="" browseobj="cari_kode_group2"/>
						<input type="text" name="nama_group2" readonly="readonly" id="nama_group2" style="width:550px"/><a style="display:none" class="add-on browse" id="cari_kode_group2" href="cari?ref=kode_group2&tipe=group" title="Klik untuk mencari kode group"><i class="icon-search"></i></a></div>
					</div>
				</div>
			</div>
		
			<div class="row detailpilihan jhh jbp jpk">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="kode_barang">Dari Barang</label>
					<div class="controls">
						<div class="input-append"><input type="text" name="kode_barang" id="kode_barang" style="width:130px" oldvalue="" browseobj="cari_kode_barang"/>
						<input type="text" name="nama_barang" readonly="readonly" id="nama_barang" style="width:550px"/><a style="display:none" class="add-on browse" id="cari_kode_barang" href="cari?ref=kode_barang&tipe=stock" title="Klik untuk mencari kode barang"><i class="icon-search"></i></a></div>
					</div>
				</div>
			</div>
		
			<div class="row detailpilihan jhh jbp jpk">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="kode_barang2">Sampai Barang</label>
					<div class="controls">
						<div class="input-append"><input type="text" name="kode_barang2" id="kode_barang2" style="width:130px" oldvalue="" browseobj="cari_kode_barang2"/>
						<input type="text" name="nama_barang2" readonly="readonly" id="nama_barang2" style="width:550px"/><a style="display:none" class="add-on browse" id="cari_kode_barang2" href="cari?ref=kode_barang2&tipe=stock" title="Klik untuk mencari kode barang"><i class="icon-search"></i></a></div>
					</div>
				</div>
			</div>
			
			<div class="row detailpilihan jpp jpk jhh jbp">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="kode_devisi">Devisi</label>
					<div class="controls">
						<div class="input-append"><input type="text" name="kode_devisi" id="kode_devisi" style="width:130px" oldvalue="" browseobj="cari_kode_devisi"/>
						<input type="text" name="nama_devisi" readonly="readonly" id="nama_devisi" style="width:550px"/><a style="display:none" class="add-on browse" id="cari_kode_devisi" href="cari?ref=kode_devisi&tipe=dev" title="Klik untuk mencari kode devisi"><i class="icon-search"></i></a></div>
					</div>
				</div>
			</div>
			<div class="row detailpilihan jpp jpk jbp">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="kode_devisi2">Sampai Devisi</label>
					<div class="controls">
						<div class="input-append"><input type="text" name="kode_devisi2" id="kode_devisi2" style="width:130px" oldvalue="" browseobj="cari_kode_devisi2"/>
						<input type="text" name="nama_devisi2" readonly="readonly" id="nama_devisi2" style="width:550px"/><a style="display:none" class="add-on browse" id="cari_kode_devisi2" href="cari?ref=kode_devisi2&tipe=dev" title="Klik untuk mencari kode devisi"><i class="icon-search"></i></a></div>
					</div>
				</div>
			</div>
			
			<div class="row detailpilihan jpp">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="kode_wil">Wilayah</label>
					<div class="controls">
						<div class="input-append"><input type="text" name="kode_wil" id="kode_wil" style="width:130px" oldvalue="" browseobj="cari_kode_wil"/>
						<input type="text" name="nama_wil" readonly="readonly" id="nama_wil" style="width:550px"/><a style="display:none" class="add-on browse" id="cari_kode_wil" href="cari?ref=kode_wil&tipe=wilayah" title="Klik untuk mencari kode wilayah"><i class="icon-search"></i></a></div>
					</div>
				</div>
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="kode_wil2">Sampai Wilayah</label>
					<div class="controls">
						<div class="input-append"><input type="text" name="kode_wil2" id="kode_wil2" style="width:130px" oldvalue="" browseobj="cari_kode_wil2"/>
						<input type="text" name="nama_wil2" readonly="readonly" id="nama_wil2" style="width:550px"/><a style="display:none" class="add-on browse" id="cari_kode_wil2" href="cari?ref=kode_wil2&tipe=wilayah" title="Klik untuk mencari kode wilayah"><i class="icon-search"></i></a></div>
					</div>
				</div>
			</div>
			<div class="row detailpilihan jpp jpc jpk jhh jbp">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="kode_cust">Customer</label>
					<div class="controls">
						<div class="input-append"><input type="text" name="kode_cust" id="kode_cust" style="width:130px" oldvalue="" browseobj="cari_kode_cust"/>
						<input type="text" name="nama_cust" readonly="readonly" id="nama_cust" style="width:550px"/><a style="display:none" class="add-on browse" id="cari_kode_cust" href="cari?ref=kode_cust&tipe=cust" title="Klik untuk mencari kode customer"><i class="icon-search"></i></a></div>
					</div>
				</div>
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="kode_cust2">Sampai Customer</label>
					<div class="controls">
						<div class="input-append"><input type="text" name="kode_cust2" id="kode_cust2" style="width:130px" oldvalue="" browseobj="cari_kode_cust2"/>
						<input type="text" name="nama_cust2" readonly="readonly" id="nama_cust2" style="width:550px"/><a style="display:none" class="add-on browse" id="cari_kode_cust2" href="cari?ref=kode_cust2&tipe=cust" title="Klik untuk mencari kode customer"><i class="icon-search"></i></a></div>
					</div>
				</div>
			</div>
			<div class="row detailpilihan jpp">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" >Sort</label>
					<div class="controls">
						<input type="radio" name="urut_cetak" id="urut_tanggal" value="t.tanggal" style="margin-left:-600px" /> <label class="control-label" for="urut_tanggal" style="margin-left:20px;width:50px">Tanggal</label>
						<input type="radio" name="urut_cetak" id="urut_sales" value="t.kode_sales" style="margin-left:90px" /> <label class="control-label" for="urut_sales" style="margin-left:45px;width:50px">Sales</label>
						<input type="radio" name="urut_cetak" id="urut_devisi" value="t.kode_dev" style="margin-left:80px" checked="checked" /> <label class="control-label" for="urut_devisi" style="margin-left:45px;width:60px">Devisi</label>
						<input type="radio" name="urut_cetak" id="urut_wilayah" value="m.kode_wil" style="margin-left:85px" /> <label class="control-label" for="urut_wilayah" style="margin-left:45px;width:65px">Wilayah</label>
						<input type="radio" name="urut_cetak" id="urut_invoice" value="t.no_invoice" style="margin-left:95px" /> <label class="control-label" for="urut_invoice" style="margin-left:45px;width:65px">Invoice</label>
						<input type="radio" name="urut_cetak" id="urut_customer" value="t.kode_cust" style="margin-left:80px" /> <label class="control-label" for="urut_customer" style="margin-left:45px;width:65px">Customer</label>
					</div>
				</div>
			</div>
			<div class="row detailpilihan jpk">
				<div class="control-group span4" style="height:15px">
					<label class="control-label" for="urut_tanggal_jpk">Urut Tanggal</label>
					<div class="controls">
						<input type="checkbox" name="urut_tanggal_jpk" id="urut_tanggal_jpk" value="0"/>
					</div>
				</div>
			</div>
		</div>

			<div class="form-actions btn-group" style="height:0px">
				<a href="#" class="btn browse cetak" style="top:-15px"><i class="icon-print"></i> Cetak</a>
				<a href="#" class="btn batal" style="top:-15px"><i class="icon-refresh"></i> Batal</a>
			</div>
		</fieldset>
		
	</form>
</div>
<div id="mask"></div>
<link href="<?php echo base_url('assets/css/mask.css'); ?>" rel="stylesheet">
<script src='<?php echo base_url('assets/js/unserialize.js'); ?>'></script>
<script src='<?php echo base_url('assets/js/utf8.decode.js'); ?>'></script>
<script src='<?php echo base_url('assets/js/script.js'); ?>'></script>
<link href="<?php echo base_url('assets/css/jqueryui/style.css'); ?>" rel="stylesheet">
<script src='<?php echo base_url('assets/js/jquery.caret.min.js'); ?>'></script>
<script src='<?php echo base_url('assets/js/jqueryui/jquery.ui.core.min.js'); ?>'></script>
<script src='<?php echo base_url('assets/js/jqueryui/jquery.ui.datepicker.min.js'); ?>'></script>
<script>
//*****************************************************************//
//
// Initialize
//
//*****************************************************************//
function initialize(){
	$( '.detailpilihan' ).hide();
	$( '#pilihan' ).val('-');
	$( '#pilihan' ).focus();	
	$( 'input:text' ).val("");
	var d = new Date();
	var tgl = d.getDate();
	if( tgl < 10 ) tgl = "0" + tgl;
	var bln = d.getMonth() + 1;
	if( bln < 10 ) bln = "0" + bln;
	var thn = d.getFullYear();
	var tanggal = "01-"+bln+"-"+thn;
	$( "#tanggal" ).val( tanggal );
	var tanggal2 = tgl+"-"+bln+"-"+thn;
	$( "#tanggal2" ).val( tanggal2 );
	if ($( '#urut_tanggal_jpk' ).is(":checked")){
		$( '#urut_tanggal_jpk' ).val("1");
	}else{
		$( '#urut_tanggal_jpk' ).val("0");
	}
}
$( document ).ready( function() {
	////////////////////////////////////////////////////////////////
	//
	// Initialize
	//
	////////////////////////////////////////////////////////////////
	initialize();
	$.post( 'db_preload', { }, function( result ){
		if( result !== '' ){
			var data =unserialize(result);
			$( "#kode_sales" ).val( data['kode_sales'] );
			$( "#nama_sales" ).val( data['nama_sales'] );
			$( "#kode_sales2" ).val( data['kode_sales2'] );
			$( "#nama_sales2" ).val( data['nama_sales2'] );
			$( "#kode_group" ).val( data['kode_group'] );
			$( "#nama_group" ).val( data['nama_group'] );
			$( "#kode_group2" ).val( data['kode_group2'] );
			$( "#nama_group2" ).val( data['nama_group2'] );
			$( "#kode_barang" ).val( data['kode_barang'] );
			$( "#nama_barang" ).val( data['nama_barang'] );
			$( "#kode_barang2" ).val( data['kode_barang2'] );
			$( "#nama_barang2" ).val( data['nama_barang2'] );
			$( "#kode_devisi" ).val( data['kode_devisi'] );
			$( "#nama_devisi" ).val( data['nama_devisi'] );
			$( "#kode_devisi2" ).val( data['kode_devisi2'] );
			$( "#nama_devisi2" ).val( data['nama_devisi2'] );
			$( "#kode_wil" ).val( data['kode_wil'] );
			$( "#nama_wil" ).val( data['nama_wil'] );
			$( "#kode_wil2" ).val( data['kode_wil2'] );
			$( "#nama_wil2" ).val( data['nama_wil2'] );
			$( "#kode_cust" ).val( data['kode_cust'] );
			$( "#nama_cust" ).val( data['nama_cust'] );
			$( "#kode_cust2" ).val( data['kode_cust2'] );
			$( "#nama_cust2" ).val( data['nama_cust2'] );
		}
	});
		

	////////////////////////////////////////////////////////////////
	//
	// Press enter then move from x to y with default value if empty
	//
	////////////////////////////////////////////////////////////////

	////////////////////////////////////////////////////////////////
	//
	// Browsing ID
	//
	////////////////////////////////////////////////////////////////
		
	////////////////////////////////////////////////////////////////
	//
	// Retrieve data
	//
	////////////////////////////////////////////////////////////////
	$( '#pilihan' ).bind( 'keydown', function( e ){
		if ((e.which==13)){
			e.preventDefault();
			$("#tanggal").focus();
		}
	});
	$( '#pilihan' ).bind( 'keyup', function( e ){
		if ((e.which==38) || (e.which==40)){
			$( '.detailpilihan' ).hide();
			$( '.'+$( '#pilihan' ).val() ).show();
			$( '.cetak' ).attr("href","#");
		}
	});
	
	$( '#pilihan' ).bind( 'change', function( e ){
		$( '.detailpilihan' ).hide();
		$( '.'+$( '#pilihan' ).val() ).show();
		$( '.cetak' ).attr("href","#");
	});

	$( '#tanggal' ).bind( 'keydown', function( e ){
		if ((e.which==13)){
			e.preventDefault();
			$("#tanggal2").focus();
		}
	});
	
	$( '#tanggal2' ).bind( 'focus', function( ){
		setTimeout(function() {
		   $('#tanggal2').datepicker("show");
		}, 50)
	});
	$( '#tanggal2' ).bind( 'keydown', function( e ){
		if ((e.which==13)){
			e.preventDefault();
			if ($("#pilihan").val()=="jpp"){
				$("#cetak_invoice").focus();
			}else if ($("#pilihan").val()=="jpc"){
				$("#kode_cust").focus();
			}else if ($("#pilihan").val()=="jps"){
				$("#kode_sales").focus();
			}else if ($("#pilihan").val()=="jpg"){
				$("#kode_group").focus();
			}else if ($("#pilihan").val()=="jpk"){
				$("#kode_barang").focus();
			}else if ($("#pilihan").val()=="jhh"){
				$("#kode_barang").focus();
			}else if ($("#pilihan").val()=="jbp"){
				$("#kode_barang").focus();
			}else if ($("#pilihan").val()=="jcl"){
				$(".cetak").focus();
			}
		}
	});
	$("#cetak_invoice").bind("keydown",function(e){
		if (e.which==13){
			e.preventDefault();
			$("#cetak_barang").focus();
		}
	});
	
	$("#cetak_barang").bind("keydown",function(e){
		if (e.which==13){
			e.preventDefault();
			$("#penjualan").focus();
		}
	});
	
	$("#penjualan").bind("keydown",function(e){
		if (e.which==13){
			e.preventDefault();
			$("#penjualann").focus();
		}
	});
	
	$("#penjualann").bind("keydown",function(e){
		if (e.which==13){
			e.preventDefault();
			$("#penjualans").focus();
		}
	});
	
	$("#penjualans").bind("keydown",function(e){
		if (e.which==13){
			e.preventDefault();
			$("#penjualana").focus();
		}
	});
	
	$("#penjualana").bind("keydown",function(e){
		if (e.which==13){
			e.preventDefault();
			$("#kode_sales").focus();
		}
	});
	
	$( '#kode_sales' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			if ($( this ).val()===''){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_kode_sales' ).click();
			}else{
				$( '#kode_sales2' ).focus();
			}
		}
	});

	$( '#kode_sales' ).bind( 'blur', function( ) {
		if ($( this ).val()===''){
			$( '#nama_sales' ).val( "" );
		}else{
			if ($(this).val()!==$(this).attr('oldvalue')){
				$.post( 'db_readsales', { id: $( '#kode_sales' ).val() }, function( result ){
					if( result === '' ){
						$( '#nama_sales' ).val( "" );
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Kode Sales tidak ada.</div>';
						$('#alert').html( message );						
					} else {
						$( '#nama_sales' ).val( result );
					}
				});
			}
		}
	});

	$( '#nama_sales' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			if ($( this ).val()!==''){
				$( '#kode_sales2' ).focus();
			}
		}
	});

	$( '#kode_sales2' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			if ($( this ).val()===''){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_kode_sales2' ).click();
			}else{
				$( '#kode_devisi' ).focus();
			}
		}
	});

	$( '#kode_sales2' ).bind( 'blur', function( ) {
		if ($( this ).val()===''){
			$( '#nama_sales2' ).val( "" );
		}else{
			if ($(this).val()!==$(this).attr('oldvalue')){
				$.post( 'db_readsales', { id: $( '#kode_sales2' ).val() }, function( result ){
					if( result === '' ){
						$( '#nama_sales2' ).val( "" );
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Kode Sales tidak ada.</div>';
						$('#alert').html( message );						
					} else {
						$( '#nama_sales2' ).val( result );
					}
				});
			}
		}
	});

	$( '#nama_sales2' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			if ($( this ).val()!==''){
				$( '#kode_devisi' ).focus();
			}
		}
	});

	$( '#kode_devisi' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			if ($( this ).val()===''){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_kode_devisi' ).click();
			}else{
				if ($( '#kode_devisi2' ).is(":visible")){
					$( '#kode_devisi2' ).focus();
				}else{
					$( '#kode_cust' ).focus();
				}
			}
		}
	});

	$( '#kode_devisi' ).bind( 'blur', function( ) {
		if ($( this ).val()===''){
			$( '#nama_devisi' ).val( "" );
		}else{
			if ($(this).val()!==$(this).attr('oldvalue')){
				$.post( 'db_readdevisi', { id: $( '#kode_devisi' ).val() }, function( result ){
					if( result === '' ){
						$( '#nama_devisi' ).val( "" );
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Kode Devisi tidak ada.</div>';
						$('#alert').html( message );						
					} else {
						$( '#nama_devisi' ).val( result );
					}
				});
			}
		}
	});

	$( '#nama_devisi' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			if ($( this ).val()!==''){
				if ($( '#kode_devisi2' ).is(":visible")){
					$( '#kode_devisi2' ).focus();
				}else{
					$( '#kode_cust' ).focus();
				}
			}
		}
	});
	
	$( '#kode_devisi2' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			if ($( this ).val()===''){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_kode_devisi2' ).click();
			}else{
				if ($( '#kode_wil' ).is(":visible")){
					$( '#kode_wil' ).focus();
				}else{
					$( '#kode_cust' ).focus();
				}
			}
		}
	});

	$( '#kode_devisi2' ).bind( 'blur', function( ) {
		if ($( this ).val()===''){
			$( '#nama_devisi2' ).val( "" );
		}else{
			if ($(this).val()!==$(this).attr('oldvalue')){
				$.post( 'db_readdevisi', { id: $( '#kode_devisi2' ).val() }, function( result ){
					if( result === '' ){
						$( '#nama_devisi' ).val( "" );
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Kode Devisi tidak ada.</div>';
						$('#alert').html( message );						
					} else {
						$( '#nama_devisi2' ).val( result );
					}
				});
			}
		}
	});

	$( '#nama_devisi2' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			if ($( this ).val()!==''){
				if ($( '#kode_wil' ).is(":visible")){
					$( '#kode_wil' ).focus();
				}else{
					$( '#kode_cust' ).focus();
				}
			}
		}
	});
	
	$( '#kode_wil' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			if ($( this ).val()===''){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_kode_wil' ).click();
			}else{
				$( '#kode_wil2' ).focus();
			}
		}
	});

	$( '#kode_wil' ).bind( 'blur', function( ) {
		if ($( this ).val()===''){
			$( '#nama_wil' ).val( "" );
		}else{
			if ($(this).val()!==$(this).attr('oldvalue')){
				$.post( 'db_readwil', { id: $( '#kode_wil' ).val() }, function( result ){
					if( result === '' ){
						$( '#nama_wil' ).val( "" );
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Kode Wilayah tidak ada.</div>';
						$('#alert').html( message );						
					} else {
						$( '#nama_wil' ).val( result );
					}
				});
			}
		}
	});

	$( '#nama_wil' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			if ($( this ).val()!==''){
				$( '#kode_wil2' ).focus();
			}
		}
	});

	$( '#kode_wil2' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			if ($( this ).val()===''){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_kode_wil2' ).click();
			}else{
				$( '#kode_cust' ).focus();
			}
		}
	});

	$( '#kode_wil2' ).bind( 'blur', function( ) {
		if ($( this ).val()===''){
			$( '#nama_wil2' ).val( "" );
		}else{
			if ($(this).val()!==$(this).attr('oldvalue')){
				$.post( 'db_readwil', { id: $( '#kode_wil2' ).val() }, function( result ){
					if( result === '' ){
						$( '#nama_wil2' ).val( "" );
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Kode Wilayah tidak ada.</div>';
						$('#alert').html( message );						
					} else {
						$( '#nama_wil2' ).val( result );
					}
				});
			}
		}
	});

	$( '#nama_wil2' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			if ($( this ).val()!==''){
				$( '#kode_cust' ).focus();
			}
		}
	});

	$( '#kode_cust' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			if ($( this ).val()===''){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_kode_cust' ).click();
			}else{
				$( '#kode_cust2' ).focus();
			}
		}
	});

	$( '#kode_cust' ).bind( 'blur', function( ) {
		if ($( this ).val()===''){
			$( '#nama_cust' ).val( "" );
		}else{
			if ($(this).val()!==$(this).attr('oldvalue')){
				$.post( 'db_readcust', { id: $( '#kode_cust' ).val() }, function( result ){
					if( result === '' ){
						$( '#nama_cust' ).val( "" );
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Kode Customer tidak ada.</div>';
						$('#alert').html( message );						
					} else {
						$( '#nama_cust' ).val( result );
					}
				});
			}
		}
	});

	$( '#nama_cust' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			if ($( this ).val()!==''){
				$( '#kode_cust2' ).focus();
			}
		}
	});

	$( '#kode_cust2' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			if ($( this ).val()===''){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_kode_cust2' ).click();
			}else{
				if ($( '#urut_tanggal' ).is(":visible")){
					$( '#urut_tanggal' ).focus();
				}else if ($( '#urut_tanggal_jpk' ).is(":visible")){					
					$( '#urut_tanggal_jpk' ).focus();
				}else {
					$( '.cetak' ).focus();
				}
			}
		}
	});

	$( '#kode_cust2' ).bind( 'blur', function( ) {
		if ($( this ).val()===''){
			$( '#nama_cust2' ).val( "" );
		}else{
			if ($(this).val()!==$(this).attr('oldvalue')){
				$.post( 'db_readcust', { id: $( '#kode_cust2' ).val() }, function( result ){
					if( result === '' ){
						$( '#nama_cust2' ).val( "" );
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Kode Customer tidak ada.</div>';
						$('#alert').html( message );						
					} else {
						$( '#nama_cust2' ).val( result );
					}
				});
			}
		}
	});

	$( '#nama_cust2' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			if ($( this ).val()!==''){
				if ($( '#urut_tanggal' ).is(":visible")){
					$( '#urut_tanggal' ).focus();
				}else if ($( '#urut_tanggal_jpk' ).is(":visible")){					
					$( '#urut_tanggal_jpk' ).focus();
				}else {
					$( '.cetak' ).focus();
				}
			}
		}
	});

	$( '#urut_tanggal' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			$( '#urut_sales' ).focus();
		}
	});

	$( '#urut_sales' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			$( '#urut_devisi' ).focus();
		}
	});

	$( '#urut_devisi' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			$( '#urut_wilayah' ).focus();
		}
	});

	$( '#urut_wilayah' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			$( '#urut_invoice' ).focus();
		}
	});

	$( '#urut_invoice' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			$( '#urut_customer' ).focus();
		}
	});

	$( '#urut_customer' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			$( '.cetak' ).focus();
		}
	});

	$( '#kode_group' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			if ($( this ).val()===''){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_kode_group' ).click();
			}else{
				$( '#kode_group2' ).focus();
			}
		}
	});

	$( '#kode_group' ).bind( 'blur', function( ) {
		if ($( this ).val()===''){
			$( '#nama_group' ).val( "" );
		}else{
			if ($(this).val()!==$(this).attr('oldvalue')){
				$.post( 'db_readgroup', { id: $( '#kode_group' ).val() }, function( result ){
					if( result === '' ){
						$( '#nama_group' ).val( "" );
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Kode Group tidak ada.</div>';
						$('#alert').html( message );						
					} else {
						$( '#nama_group' ).val( result );
					}
				});
			}
		}
	});

	$( '#nama_group' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			if ($( this ).val()!==''){
				$( '#kode_group2' ).focus();
			}
		}
	});

	$( '#kode_group2' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			if ($( this ).val()===''){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_kode_group2' ).click();
			}else{
				if ($( '#kode_sgroup' ).is(":visible")){
					$( '#kode_sgroup' ).focus();
				}else if ($( '#pencetakan' ).is(":visible")){
					$( '#pencetakan' ).focus();
				}else if ($( '#kode_devisi' ).is(":visible")){
					$( '#kode_devisi' ).focus();
				}
			}
		}
	});
	$( '#kode_group2' ).bind( 'blur', function( ) {
		if ($( this ).val()===''){
			$( '#nama_group2' ).val( "" );
		}else{
			if ($(this).val()!==$(this).attr('oldvalue')){
				$.post( 'db_readgroup', { id: $( '#kode_group2' ).val() }, function( result ){
					if( result === '' ){
						$( '#nama_group2' ).val( "" );
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Kode Group tidak ada.</div>';
						$('#alert').html( message );						
					} else {
						$( '#nama_group2' ).val( result );
					}
				});
			}
		}
	});

	$( '#nama_group2' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			if ($( this ).val()!==''){
				if ($( '#kode_sgroup' ).is(":visible")){
					$( '#kode_sgroup' ).focus();
				}else if ($( '#pencetakan' ).is(":visible")){
					$( '#pencetakan' ).focus();
				}else if ($( '#kode_devisi' ).is(":visible")){
					$( '#kode_devisi' ).focus();
				}
			}
		}
	});

	$( '#kode_sgroup' ).bind( 'focus', function( e ) {
		if ($("#kode_group").is(":visible")){
			$("#cari_kode_sgroup").attr("href","cari?ref=kode_sgroup&tipe=subgroup"+ "&cond1="+ $("#kode_group").val()+ "&cond2="+ $("#kode_group2").val());
		}else{
			$("#cari_kode_sgroup").attr("href","cari?ref=kode_sgroup&tipe=subgroup");
		}
	});
	$( '#kode_sgroup' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			if ($( this ).val()===''){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_kode_sgroup' ).click();
			}else{
				$( '#kode_sgroup2' ).focus();
			}
		}
	});

	$( '#kode_sgroup' ).bind( 'blur', function( ) {
		if ($( this ).val()===''){
			$( '#nama_sgroup' ).val( "" );
		}else{
			if ($(this).val()!==$(this).attr('oldvalue')){
				$.post( 'db_readsgroup', { id: $( '#kode_sgroup' ).val() }, function( result ){
					if( result === '' ){
						$( '#nama_sgroup' ).val( "" );
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Kode Sub Group tidak ada.</div>';
						$('#alert').html( message );						
					} else {
						$( '#nama_sgroup' ).val( result );
					}
				});
			}
		}
	});

	$( '#nama_sgroup' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			if ($( this ).val()!==''){
				$( '#kode_sgroup2' ).focus();
			}
		}
	});

	$( '#kode_sgroup2' ).bind( 'focus', function( e ) {
		if ($("#kode_group").is(":visible")){
			$("#cari_kode_sgroup2").attr("href","cari?ref=kode_sgroup2&tipe=subgroup"+ "&cond1="+ $("#kode_group").val()+ "&cond2="+ $("#kode_group2").val());
		}else{
			$("#cari_kode_sgroup2").attr("href","cari?ref=kode_sgroup2&tipe=subgroup");
		}
	});
	$( '#kode_sgroup2' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			if ($( this ).val()===''){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_kode_sgroup2' ).click();
			}else{
				$( '#kode_barang' ).focus();
			}
		}
	});

	$( '#kode_sgroup2' ).bind( 'blur', function( ) {
		if ($( this ).val()===''){
			$( '#nama_sgroup2' ).val( "" );
		}else{
			if ($(this).val()!==$(this).attr('oldvalue')){
				$.post( 'db_readsgroup', { id: $( '#kode_sgroup2' ).val() }, function( result ){
					if( result === '' ){
						$( '#nama_sgroup2' ).val( "" );
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Kode Sub Group tidak ada.</div>';
						$('#alert').html( message );						
					} else {
						$( '#nama_sgroup2' ).val( result );
					}
				});
			}
		}
	});

	$( '#nama_sgroup2' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			if ($( this ).val()!==''){
				$( '#kode_barang' ).focus();
			}
		}
	});

	$( '#kode_barang' ).bind( 'focus', function( e ) {
		if ($("#kode_group").is(":visible")){
			if ($("#kode_sgroup").is(":visible")){
				$("#cari_kode_barang").attr("href","cari?ref=kode_barang&tipe=stock"+ "&cond1="+ $("#kode_sgroup").val()+ "&cond2="+ $("#kode_sgroup2").val()+ "&cond3="+ $("#kode_group").val()+ "&cond4="+ $("#kode_group2").val());
			}else{
				$("#cari_kode_barang").attr("href","cari?ref=kode_barang&tipe=stock" + "&cond3="+ $("#kode_group").val()+ "&cond4="+ $("#kode_group2").val());
			}
		}else{
			if ($("#kode_sgroup").is(":visible")){
				$("#cari_kode_barang").attr("href","cari?ref=kode_barang&tipe=stock"+ "&cond1="+ $("#kode_sgroup").val()+ "&cond2="+ $("#kode_sgroup2").val());
			}else{
				$("#cari_kode_barang").attr("href","cari?ref=kode_barang&tipe=stock");
			}
		}
	});
	$( '#kode_barang' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			if ($( this ).val()===''){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_kode_barang' ).click();
			}else{
				$( '#kode_barang2' ).focus();
			}
		}
	});

	$( '#kode_barang' ).bind( 'blur', function( ) {
		if ($( this ).val()===''){
			$( '#nama_barang' ).val( "" );
		}else{
			if ($(this).val()!==$(this).attr('oldvalue')){
				$.post( 'db_readbarang', { id: $( '#kode_barang' ).val() }, function( result ){
					if( result === '' ){
						$( '#nama_barang' ).val( "" );
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Kode Barang tidak ada.</div>';
						$('#alert').html( message );						
					} else {
						$( '#nama_barang' ).val( result );
					}
				});
			}
		}
	});

	$( '#nama_barang' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			if ($( this ).val()!==''){
				$( '#kode_barang2' ).focus();
			}
		}
	});

	$( '#kode_barang2' ).bind( 'focus', function( e ) {
		if ($("#kode_group").is(":visible")){
			if ($("#kode_sgroup").is(":visible")){
				$("#cari_kode_barang2").attr("href","cari?ref=kode_barang2&tipe=stock"+ "&cond1="+ $("#kode_sgroup").val()+ "&cond2="+ $("#kode_sgroup2").val()+ "&cond3="+ $("#kode_group").val()+ "&cond4="+ $("#kode_group2").val());
			}else{
				$("#cari_kode_barang2").attr("href","cari?ref=kode_barang2&tipe=stock" + "&cond3="+ $("#kode_group").val()+ "&cond4="+ $("#kode_group2").val());
			}
		}else{
			if ($("#kode_sgroup").is(":visible")){
				$("#cari_kode_barang2").attr("href","cari?ref=kode_barang2&tipe=stock"+ "&cond1="+ $("#kode_sgroup").val()+ "&cond2="+ $("#kode_sgroup2").val());
			}else{
				$("#cari_kode_barang2").attr("href","cari?ref=kode_barang2&tipe=stock");
			}
		}
	});
	$( '#kode_barang2' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			if ($( this ).val()===''){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_kode_barang2' ).click();
			}else{
				if ($( '#pencetakan' ).is(":visible")){
					$( '#pencetakan' ).focus();
				}else {
					if ($( '#kode_devisi' ).is(":visible")){
						if ($("#pilihan").val()=='jhh'){
							$( '#kode_cust' ).focus();
						}else{
							$( '#kode_devisi' ).focus();
						}
					}else{
						$( '.cetak' ).focus();
					}
				}
			}
		}
	});
	$( '#kode_barang2' ).bind( 'blur', function( ) {
		if ($( this ).val()===''){
			$( '#nama_barang2' ).val( "" );
		}else{
			if ($(this).val()!==$(this).attr('oldvalue')){
				$.post( 'db_readbarang', { id: $( '#kode_barang2' ).val() }, function( result ){
					if( result === '' ){
						$( '#nama_barang2' ).val( "" );
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Kode Barang tidak ada.</div>';
						$('#alert').html( message );						
					} else {
						$( '#nama_barang2' ).val( result );
					}
				});
			}
		}
	});

	$( '#nama_barang2' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			if ($( this ).val()!==''){
				if ($( '#pencetakan' ).is(":visible")){
					$( '#pencetakan' ).focus();
				}else {
					$( '.cetak' ).focus();
				}
			}
		}
	});

	$( '#pencetakan' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			$( '#kode_gudang' ).focus();
		}
	});
	$( '#pencetakan' ).bind( 'keyup', function( e ){
		if ((e.which==38) || (e.which==40)){
			if ($( '#pencetakan' ).val()=='DF'){
				$( '.tipehargax' ).show();
			}else{
				$( '.tipehargax' ).hide();
			}
		}
	});
	
	$( '#pencetakan' ).bind( 'change', function(){
			if ($( '#pencetakan' ).val()=='DF'){
				$( '.tipehargax' ).show();
			}else{
				$( '.tipehargax' ).hide();
			}
	});
	
	$( '#kode_gudang' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			if ($( this ).val()===''){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_kode_gudang' ).click();
			}else{
				if ($("#tipe_harga").is(":visible")){
					$("#tipe_harga").focus();
				}else{
					$( '.cetak' ).focus();
				}
			}
		}
	});
	$( '#kode_gudang' ).bind( 'blur', function( ) {
		if ($( this ).val()===''){
			$( '#nama_gudang' ).val( "" );
		}else{
			if ($(this).val()!==$(this).attr('oldvalue')){
				$.post( 'db_readgudang', { id: $( '#kode_gudang' ).val() }, function( result ){
					if( result === '' ){
						$( '#nama_gudang' ).val( "" );
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Kode Gudang tidak ada.</div>';
						$('#alert').html( message );						
					} else {
						$( '#nama_gudang' ).val( result );
					}
				});
			}
		}
	});

	$( '#nama_gudang' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			if ($( this ).val()!==''){
				if ($("#tipe_harga").is(":visible")){
					$("#tipe_harga").focus();
				}else{
					$( '.cetak' ).focus();
				}
			}
		}
	});
	
	$( '#tipe_harga' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			if ($( this ).val()!==''){
				$( '.cetak' ).focus();
			}
		}
	});
	
	$( '#urut_tanggal_jpk' ).bind("keydown", function( e ){
		if (e.which==13){
			e.preventDefault();
			$( '.cetak' ).focus();
		}
	});
	$( '#urut_tanggal_jpk' ).click( function( e ){
		if ($( '#urut_tanggal_jpk' ).is(":checked")){
			$( '#urut_tanggal_jpk' ).val("1");
		}else{
			$( '#urut_tanggal_jpk' ).val("0");
		}
	});
	
	$( '.cetak' ).click( function(){
		if ($("#pilihan").val()=='jpp'){
			$( this ).attr( 'href', 'pdf?pilihan='+$( "#pilihan" ).val() + '&tanggal='+$( "#tanggal" ).val() + '&tanggal2=' + $( "#tanggal2" ).val() + '&model_cetak=' + $( 'input:radio[name=model_cetak]:checked' ).val() + '&tipejual=' + $( 'input:radio[name=tipejual]:checked' ).val() + '&kode_sales=' + $( "#kode_sales" ).val() + '&kode_sales2=' + $( "#kode_sales2" ).val() + '&kode_devisi=' + $( "#kode_devisi" ).val() + '&kode_devisi2=' + $( "#kode_devisi2" ).val() + '&kode_wil=' + $( "#kode_wil" ).val() + '&kode_wil2=' + $( "#kode_wil2" ).val()+ '&kode_cust=' + $( "#kode_cust" ).val() + '&kode_cust2=' + $( "#kode_cust2" ).val() + '&urut_cetak=' + $( 'input:radio[name=urut_cetak]:checked' ).val() );
		}else if ($("#pilihan").val()=='jpk'){
			$( this ).attr( 'href', 'pdf?pilihan='+$( "#pilihan" ).val() + '&tanggal='+$( "#tanggal" ).val() + '&tanggal2=' + $( "#tanggal2" ).val() + '&urut_tanggal_jpk=' + $( '#urut_tanggal_jpk' ).val() + '&kode_barang=' + $( "#kode_barang" ).val() + '&kode_barang2=' + $( "#kode_barang2" ).val() + '&kode_devisi=' + $( "#kode_devisi" ).val() + '&kode_devisi2=' + $( "#kode_devisi2" ).val() + '&kode_cust=' + $( "#kode_cust" ).val() + '&kode_cust2=' + $( "#kode_cust2" ).val());
		}else if ($("#pilihan").val()=='jhh'){
			$( this ).attr( 'href', 'pdf?pilihan='+$( "#pilihan" ).val() + '&tanggal='+$( "#tanggal" ).val() + '&tanggal2=' + $( "#tanggal2" ).val() + '&kode_barang=' + $( "#kode_barang" ).val() + '&kode_barang2=' + $( "#kode_barang2" ).val() + '&kode_devisi=' + $( "#kode_devisi" ).val() + '&kode_cust=' + $( "#kode_cust" ).val() + '&kode_cust2=' + $( "#kode_cust2" ).val());
		}
	});

	$( '.batal' ).click( function(){
		window.close();
	});

});
</script>