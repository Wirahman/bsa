<div class="container">
	<h2 class="judul" style ="height:25px">Surat Jalan</h2>
	<div id="alert"></div>
	<form class="form-horizontal">
		<fieldset>
			<div class="row">
				<div class="control-group span12"style="height:15px">
					<label class="control-label" for="kode_dev">Devisi</label>
					<div class="controls">
						<div class="input-append">
							<input type="text" name="kode_dev" id="kode_dev" oldvalue="" browseobj="cari_kode_dev"/>
							<input type="text" style="width:440px" readonly="readonly" name="nama_dev" id="nama_dev" />
							<a style="display:none" class="add-on browse" id="cari_kode_dev" href="cari/ref/kode_dev/tipe/dev" title="Klik untuk mencari Devisi"><i class="icon-search"></i></a>				
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="no_invoice">No Transaksi</label>
					<div class="controls">
						<div class="input-append"><input type="text" name="no_invoice" id="no_invoice" oldvalue="" browseobj="cari_no_invoice"/><a style="display:none" class="add-on browse" id="cari_no_invoice" href="cari/ref/no_invoice/tipe/sj" title="Klik untuk mencari No Transaksi"><i class="icon-search"></i></a></div>
					</div>
				</div>
				<div class="control-group span6"style="height:15px">
					<label class="control-label" for="tanggal">Tanggal</label>
					<div class="controls">
						<input type="text" name="tanggal" id="tanggal" class="tanggal" style="width:180px" />
					</div>
				</div>
			</div>
			<div class="row">
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="no_so">No. S.O</label>
					<div class="controls">
						<div class="input-append"><input type="text" name="no_so" id="no_so" oldvalue="" browseobj="cari_no_so"/><a style="display:none" class="add-on browse" id="cari_no_so" href="cari/ref/no_so/tipe/so" title="Klik untuk mencari No Sales Order"><i class="icon-search"></i></a></div>
					</div>
				</div>
				<div class="control-group span6"style="height:15px">
					<label class="control-label" for="tanggal_so">Tanggal S.O.</label>
					<div class="controls">
						<input type="text" name="tanggal_so" id="tanggal_so" class="tanggal_so" style="width:180px" readonly />
					</div>
				</div>
			</div>
			<div class="row">
				<div class="control-group span12"style="height:15px">
					<label class="control-label" for="kode_cust">Customer</label>
					<div class="controls">
						<div class="input-append">
							<input type="text" name="kode_cust" id="kode_cust" readonly="readonly"/>
							<input type="text" style="width:440px" readonly="readonly" name="nama_cust" id="nama_cust" />
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="control-group span12"style="height:15px">
					<label class="control-label" for="alamat_cust">Alamat</label>
					<div class="controls">
						<div class="input-append">
							<input type="text" style="width:660px" readonly="readonly" name="alamat_cust" id="alamat_cust" />
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="control-group span12"style="height:15px">
					<label class="control-label" for="kode_gud">Gudang</label>
					<div class="controls">
						<div class="input-append">
							<input type="text" name="kode_gud" id="kode_gud" readonly="readonly" />
							<input type="text" style="width:440px" readonly="readonly" name="nama_gud" id="nama_gud"/>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="span12 tab-pane active tsurat_jalan" style="height:200px" id="tsurat_jalan">
					<input type="hidden" id="baris-surat_jalan" name="baris-surat_jalan" value="0" />
					<table class="table">
						<thead height="5px">
							<tr height="5px"><th style="width:100px">Kode</th><th style="width:200px">Nama Barang</th><th style="width:50px">Satuan</th><th style="width:50px">Qty SO</th><th style="width:50px">Qty Akm</th><th style="width:50px">Qty Kirim</th><th style="width:50px">Sisa</th><th style="width:200px">Keterangan</th><th></th></tr>
						</thead>
						<tbody id="surat_jalan">
						</tbody>
						
					</table>
				</div>
			</div>

			<div class="row">
				<div class="control-group span12"style="height:15px">
					<label class="control-label" for="catatan">Catatan</label>
					<div class="controls">
					<input type="text" style="width:686px" name="catatan" id="catatan" maxlength="200" />
					</div>
				</div>
			</div>
			<div class="row">
				<div class="control-group span12"style="height:15px">
					<label class="control-label" for="catatan2"></label>
					<div class="controls">
					<input type="text" style="width:686px" name="catatan2" id="catatan2" maxlength="200" />
					</div>
				</div>
			</div>

			<div class="form-actions btn-group">
				<?php if( in_array( 'create_surat_jalan', unserialize($capabilities) ) ){ ?>
					<a href="#" class="btn btn-primary simpan" id="simpan" style="top:-15px"><i class="icon-ok icon-white"></i> Save</a>
				<?php } ?>
					<a href="#" class="btn cetak" style="top:-15px"><i class="icon-print"></i> Cetak</a>
				<?php if( in_array( 'update_surat_jalan', unserialize($capabilities) ) ){ ?>
					<a href="#" class="btn btn-primary ubah" style="top:-15px"><i class="icon-pencil icon-white"></i> Edit</a>
				<?php } ?>
				<?php if( intval($role)!= 1){ ?>
					<?php if( in_array( 'delete_surat_jalan', unserialize($capabilities) ) ){ ?>
						<a href="#" class="btn btn-danger hapus" style="top:-15px"><i class="icon-trash icon-white"></i> Hapus</a>
					<?php } ?>
				<?php } ?>
					<a href="#" class="btn batal" style="top:-15px"><i class="icon-refresh"></i> Batal</a>
			</div>
		</fieldset>
		
	</form>
</div>
<style type="text/css">
#tsurat_jalan{
overflow-x:auto;
}
#tsurat_jalan{
overflow-y:auto;
}
</style>

<div id="mask"></div>
<link href="<?php echo base_url('assets/css/jqueryui/style.css'); ?>" rel="stylesheet">
<script src='<?php echo base_url('assets/js/jqueryui/jquery.ui.core.min.js'); ?>'></script>
<script src='<?php echo base_url('assets/js/jqueryui/jquery.ui.datepicker.min.js'); ?>'></script>
<link href="<?php echo base_url('assets/css/mask.css'); ?>" rel="stylesheet">
<script src='<?php echo base_url('assets/js/format.currency.min.js'); ?>'></script>
<script src='<?php echo base_url('assets/js/unserialize.js'); ?>'></script>

<script src='<?php echo base_url('assets/js/utf8.decode.js'); ?>'></script>

<script src='<?php echo base_url('assets/js/script.js'); ?>'></script>
<script src='<?php echo base_url('assets/js/jquery.caret.min.js'); ?>'></script>
<script>
//*****************************************************************//
//
// Initialize
//
//*****************************************************************//
preventempty="kode_dev,no_invoice,tanggal,no_so";
preventemptystatus="0,1,1,1";
function initialize(){
	var dev=$( '#kode_dev' ).val();
	var devname=$( '#nama_dev' ).val();
	initializex();
	$( '#kode_dev' ).val(dev);
	$( '#nama_dev' ).val(devname);
	$( '#kode_dev' ).focus();
}	

function initializex(){
	$( '.simpan, .batal' ).show();
	$( '.ubah, .hapus, .datalama' ).hide();
	$('input:text, textarea').val('');
	$('input:checkbox').removeAttr('checked');
	$('#cari_no_invoice').tooltip();
	$( '#kode_dev' ).attr("readonly",false);
	$('.alert').alert();
	$('.cetak').attr('href', 'cetak');
	$('.cetak').hide();
	var d = new Date();
	var tgl = d.getDate();
	if( tgl < 10 ) tgl = "0" + tgl;
	var bln = d.getMonth() + 1;
	if( bln < 10 ) bln = "0" + bln;
	var thn = d.getFullYear();
	var tanggal = tgl+"-"+bln+"-"+thn;
	$( "#tanggal" ).val( tanggal );
	$('.surat_jalan-row').remove();
	$( '#surat_jalan' ).append(
		add_row_tabel_surat_jalan( 0, 0 )
	);
	$('.add-on').attr("style","display:none");

var address = window.location.href;
	var path = address.split( "/" );	
	var xobj = document.getElementById(path[ 3 ]);
	if (xobj !== null){
		var pt = $( "."+path[ 3 ] ).text();
	}else{
		var pt = '';
	}
	$('.browse').tooltip();
	show_user_name('');
}	

function sudahada(posisi,tipe){
var qty=0;
var kode_lama=$( '#'+tipe+'-'+( Number( posisi ) )+'-kode' ).val().toUpperCase().trim();
if ((kode_lama!='')){
for( $o = 0; $o < $('#baris-'+tipe+'').val(); $o++ ){
	var xobj = document.getElementById(''+tipe+'-'+( Number( $o ) )+'-'+'kode');
	if (xobj != null){
		if ((kode_lama==$( '#'+tipe+'-'+( Number( $o ) )+'-kode' ).val().toUpperCase().trim())) {
			qty++;
			if (qty>1){
			break;
			}
		}
	}
}
}
var hasil=false;
if (Number(qty)>1){
	hasil=true;
}
return hasil;
}

function add_row_tabel_surat_jalan( i, action ){
	var tabel = '<tr class="surat_jalan-row" id="surat_jalan-'+i+'">';
	tabel += '<td><div class="input-append"><input style="width:90px" type="text" name="surat_jalan['+i+'][kode]" id="surat_jalan-'+i+'-kode" oldvalue="" browseobj="cari-surat_jalan-'+i+'-kode" xclass="surat_jalan-kode" class="surat_jalan-kode detail_transaksi" maxlength="10"/><input style="width:90px;display:none" type="text" name="surat_jalan['+i+'][no_urut]" id="surat_jalan-'+i+'-no_urut" class="surat_jalan-no_urut detail_transaksi"/><a style="display:none" class="add-on browse cari-surat_jalan-kode detail_transaksi" id="cari-surat_jalan-'+i+'-kode" href="cari/ref/surat_jalan-'+i+'-kode/tipe/stock_so" title="Klik untuk mencari kode barang"><i class="icon-search"></i></a></div></td>';
	tabel += '<td><input readonly="readonly" style="width:295px" type="text" name="surat_jalan['+i+'][nama_barang]" id="surat_jalan-'+i+'-nama_barang" xclass="surat_jalan-nama_barang" class="surat_jalan-nama_barang detail_transaksi" maxlength="250" /></td>';
	tabel += '<td><div class="input-append"><input style="width:50px" type="text" readonly="readonly" name="surat_jalan['+i+'][satuan]" id="surat_jalan-'+i+'-satuan" xclass="surat_jalan-satuan" class="surat_jalan-satuan detail_transaksi" /></div></td>';
	tabel += '<td><input style="text-align:right;width:60px" readonly type="text" name="surat_jalan['+i+'][qty_so]" id="surat_jalan-'+i+'-qty_so" value="0" xclass="surat_jalan-qty_so" class="surat_jalan-qty_so detail_transaksi currency" /></td>';
	tabel += '<td><input style="text-align:right;width:60px" readonly type="text" name="surat_jalan['+i+'][qty_akm]" id="surat_jalan-'+i+'-qty_akm" value="0" xclass="surat_jalan-qty_akm" class="surat_jalan-qty_akm detail_transaksi currency" /></td>';
	tabel += '<td><input style="text-align:right;width:60px" type="text" name="surat_jalan['+i+'][qty_kirim]" id="surat_jalan-'+i+'-qty_kirim" value="0" xclass="surat_jalan-qty_kirim" class="surat_jalan-qty_kirim detail_transaksi currency" /></td>';
	tabel += '<td><input style="text-align:right;width:60px" readonly type="text" name="surat_jalan['+i+'][qty_sisa]" id="surat_jalan-'+i+'-qty_sisa" value="0" xclass="surat_jalan-qty_sisa" class="surat_jalan-qty_sisa detail_transaksi currency" /></td>';
	tabel += '<td><input style="width:200px" maxlength="200" type="text" name="surat_jalan['+i+'][keterangan]" id="surat_jalan-'+i+'-keterangan" xclass="surat_jalan-keterangan" class="surat_jalan-keterangan detail_transaksi" /></td>';
	if( action === 1 ){
		tabel += '<td class="action" id="action-baris-surat_jalan-'+i+'"><a href="#void()" class="tombol tombol-small hapus-baris-surat_jalan" id="hapus-baris-surat_jalan-'+i+'"><i class="icon-remove"></i></a></td>';
	} else tabel += '<td class="action" id="action-baris-surat_jalan-'+i+'"><a href="#void()" class="tombol tombol-small tambah-baris-surat_jalan" id="tambah-baris-surat_jalan-'+i+'"><i class="icon-plus"></i></a></td>';
	tabel += '<td><input style="text-align:right;width:40px;display:none" type="text" name="surat_jalan['+i+'][isi]" id="surat_jalan-'+i+'-isi" value="0" class="surat_jalan-isi detail_transaksi currency" /></td>';
	tabel += '</tr>';
	$( "#baris-surat_jalan" ).val( i + 1 );
	return tabel;
}
function nomorbaru()
{
	$.post( 'db_lastid', {tanggal : $( '#tanggal' ).val(),kode_dev : $( '#kode_dev' ).val()}, function( result ){
		if( (result === 'x') && $( '#no_invoice' ).val()!=='' ){
		}else if( (result === '') || ( (result === 'x') && $( '#no_invoice' ).val()=='' )){
			var pecah=$( '#tanggal' ).val().split('-');
			$( '#no_invoice' ).val( $( '#kode_dev' ).val()+Right(pecah[2],2) + pecah[1] + '0001' );
		}else if( result === 'x' ){
		} else {
			var lastid=upone(result,true);
			for( var i = lastid.length; i < 10; i++ ){
				lastid = '0' + lastid;
			}
			$( '#no_invoice' ).val( lastid );
		}
	});
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
	// Miscellaneous
	//
	////////////////////////////////////////////////////////////////
		
	////////////////////////////////////////////////////////////////
	//
	// Retrieve data
	//
	////////////////////////////////////////////////////////////////
$( '#no_invoice' ).bind( 'blur', function( ) {
	if ($(this).val()!== $(this).attr("oldvalue")){
		$.post( 'db_read', { id: $( '#no_invoice' ).val() }, function( result ){
			if( result === '' ){
				nomorbaru();
				var id = $( '#no_invoice' ).val();
				var id2 = $( '#kode_dev' ).val();
				var namadev = $( '#nama_dev' ).val();
				var tgl = $( '#tanggal' ).val();
				initializex();
				$( '#tanggal' ).val(tgl);
				$( '#no_invoice' ).val( id );
				$( '#kode_dev' ).val( id2 );
				$( '#nama_dev' ).val( namadev );
				$( '#kode_dev' ).attr("readonly",true);
			} else {
				$( '#kode_dev' ).attr("readonly",true);
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
				if (data[ 'tanggal_so' ]!==null){
					tanggal = data[ 'tanggal_so' ].split( "-" );
					tgl = tanggal[ 2 ];
					bln = tanggal[ 1 ];
					thn = tanggal[ 0 ];
					$( "#tanggal_so" ).val( tgl + "-" + bln + "-" + thn );
				}else{
					$( "#tanggal_so" ).val("");
				}
				$( "#kode_cust" ).val( data[ 'kode_cust' ] );
				$( "#nama_cust" ).val( data[ 'nama_cust' ] );
				$( "#alamat_cust" ).val( data[ 'alamat' ] );
				$( "#kode_dev" ).val( data[ 'kode_dev' ] );
				$( "#no_so" ).val( data[ 'no_so' ] );
				// $( "#tanggal_so" ).val( data[ 'tanggal_so' ] );
				$( "#catatan" ).val( data[ 'catatan' ] );
				$( "#catatan2" ).val( data[ 'catatan2' ] );
				$( "#nama_dev" ).val( data[ 'nama_dev' ] );
				$( "#kode_gud" ).val( data[ 'kode_gud' ] );
				$( "#nama_gud" ).val( data[ 'nama_gud' ] );
				retrivedetail();
				$( '.ubah, .hapus, .cetak' ).show();
				$( '.simpan' ).hide();
			}
		});
	}
});
	$( '#no_invoice' ).bind( 'focus', function( e ) {
		var x=$(this).attr("id");
		if ($("#kode_dev").val()){
			$('#cari_'+ x).attr("href","cari/ref/no_invoice/tipe/sj/cond1/"+ $("#kode_dev").val());
		}else{
			$('#cari_'+ x).attr("href","cari/ref/no_invoice/tipe/sj");
		}
	});
	$( '#cari_no_invoice' ).bind( 'focus', function( e ) {
		if ($("#kode_dev").val()){
			$(this).attr("href","cari/ref/no_invoice/tipe/sj/cond1?"+ $("#kode_dev").val());
		}else{
			$(this).attr("href","cari/ref/no_invoice/tipe/sj");
		}
	});

	$( '#no_invoice' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				nomorbaru();
			} else {
				$( '#tanggal' ).focus();
			}
		}
	});

$( '#kode_dev' ).bind( 'blur', function( ) {
	if ($( this ).val()===''){
		$( '#nama_dev' ).val( "" );
	}else{
		if ($(this).val()!== $(this).attr("oldvalue")){
			$.post( 'db_read_dev', { id: $( '#kode_dev' ).val() }, function( result ){
				if( result === '' ){
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Kode devisi tidak ada.</div>';
					$('#alert').html( message );
					$( "#nama_dev" ).val( '' );
					$( "#kode_dev" ).val( '' );
					$( '#kode_dev' ).focus();
				} else {
					$( "#nama_dev" ).val( result );
				}
			});
		}
	}
});

	$( '#kode_dev' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_kode_dev' ).click();
			} else {
				$( '#no_invoice' ).focus();
			}
		}
	});

	function retrivedetail()
	{
		$.post( 'db_read_detail', { id: $( '#no_invoice' ).val() }, function( result ){
			var i = 0;
			$( '.surat_jalan-row' ).remove();	
			if( result === '' ){
			} else {
				var hasil=$.parseJSON(result);
				var result = hasil.result;
				if( result == null ){
				}else{
					for(; result[i]; i++ ){
						$( '#surat_jalan' ).append( add_row_tabel_surat_jalan( i, 1 ) );
						$( '#surat_jalan-'+i+'-kode' ).val( result[i].kode_barang );
						$( '#surat_jalan-'+i+'-no_urut' ).val( result[i].no_urut );
						$( '#surat_jalan-'+i+'-nama_barang' ).val( result[i].nama_barang );
						$( '#surat_jalan-'+i+'-keterangan' ).val( result[i].keterangan );
						$( '#surat_jalan-'+i+'-satuan' ).val( result[i].satuan );
						$( '#surat_jalan-'+i+'-isi' ).val( result[i].isi ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
						$( '#surat_jalan-'+i+'-qty_so' ).val( result[i].qty_so ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
						$( '#surat_jalan-'+i+'-qty_akm' ).val( result[i].qty_akm ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
						$( '#surat_jalan-'+i+'-qty_kirim' ).val( result[i].qty_kirim ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
						$( '#surat_jalan-'+i+'-qty_sisa' ).val( result[i].qty_sisa ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
						$( '#baris-surat_jalan' ).val( i + 1 );
					}
				}
			}
			$( '#surat_jalan' ).append( add_row_tabel_surat_jalan( i, 0 ) );
		});	
	}

	function retrivedetail_so()
	{
		$.post( 'db_read_detail_so', { id: $( '#no_so' ).val(), no_sj: $( '#no_invoice' ).val() }, function( result ){
			var i = 0;
			$( '.surat_jalan-row' ).remove();	
			if( result === '' ){
			} else {
				var hasil=$.parseJSON(result);
				var result = hasil.result;
				if( result == null ){
				}else{
					for(; result[i]; i++ ){
						$( '#surat_jalan' ).append( add_row_tabel_surat_jalan( i, 1 ) );
						$( '#surat_jalan-'+i+'-kode' ).val( result[i].kode_barang );
						$( '#surat_jalan-'+i+'-no_urut' ).val( result[i].no_urut );
						$( '#surat_jalan-'+i+'-nama_barang' ).val( result[i].nama_barang );
						$( '#surat_jalan-'+i+'-keterangan' ).val( '' );
						$( '#surat_jalan-'+i+'-satuan' ).val( result[i].satuan );
						$( '#surat_jalan-'+i+'-isi' ).val( result[i].isi ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
						$( '#surat_jalan-'+i+'-qty_so' ).val( result[i].qty ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
						$( '#surat_jalan-'+i+'-qty_akm' ).val( Number(result[i].qty_kirim) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
						$( '#surat_jalan-'+i+'-qty_kirim' ).val( Number(result[i].qty)- Number(result[i].qty_kirim) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
						$( '#surat_jalan-'+i+'-qty_sisa' ).val( 0 ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
						$( '#baris-surat_jalan' ).val( i + 1 );
					}
				}
			}
			$( '#surat_jalan' ).append( add_row_tabel_surat_jalan( i, 0 ) );
			setfocus(0,'kode','surat_jalan');
		});	
	}

	$( '.detail_transaksi' ).live( 'keydown', function( e ){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if ( e.which === kodehapusbaris ){
			e.preventDefault();
			var xobj = document.getElementById('hapus-baris-surat_jalan-'+num);
			if (xobj != null){
				$( '#hapus-baris-surat_jalan-'+( Number( num ) ) ).click();
			}else{
				$("input[id*='" + "surat_jalan-"+num + "']").val('');
			}
			setfocus(Number(num),'kode','surat_jalan');
		}
	});
	
	$( '.surat_jalan-kode' ).live( 'blur', function( e ){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if ($(this).val()==''){
			$( '#surat_jalan-'+num+'-nama_barang' ).val( '' );
			$( '#surat_jalan-'+num+'-satuan' ).val( '' );
			$( '#surat_jalan-'+num+'-no_urut' ).val( '' );
			$( '#surat_jalan-'+num+'-isi' ).val( 0 ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
			$( '#surat_jalan-'+num+'-qty_so' ).val( 0 ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
			$( '#surat_jalan-'+num+'-qty_akm' ).val( 0 ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
			$( '#surat_jalan-'+num+'-qty_kirim' ).val( 0 ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
			$( '#surat_jalan-'+num+'-qty_sisa' ).val( 0 ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
			$( '#surat_jalan-'+num+'-keterangan' ).val( '' );
		}else{
			if ($(this).val()!==$(this).attr("oldvalue")){
				// if (sudahada(Number(num),'surat_jalan')){
				if (sudah_ada('surat_jalan','kode:;:no_urut',$(this).val()+':;:'+$( '#surat_jalan-'+num+'-no_urut' ).val())){
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Kode barang tidak boleh sama.</div>';
					$('#alert').html( message );
					$( '#surat_jalan-'+num+'-kode' ).val( '' );
					$( '#surat_jalan-'+num+'-no_urut' ).val( '' );
					$( '#surat_jalan-'+num+'-nama_barang' ).val( '' );
					$( '#surat_jalan-'+num+'-satuan' ).val( '' );
					$( '#surat_jalan-'+num+'-isi' ).val( 0 ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
					$( '#surat_jalan-'+num+'-qty_so' ).val( 0 ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
					$( '#surat_jalan-'+num+'-qty_akm' ).val( 0 ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
					$( '#surat_jalan-'+num+'-qty_kirim' ).val( 0 ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
					$( '#surat_jalan-'+num+'-qty_sisa' ).val( 0 ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
					$( '#surat_jalan-'+num+'-keterangan' ).val( '' );
					$(this).val('');
					$(this).attr("oldvalue",'');
					$( '#'+asal ).focus();
				}else{
					$.post( 'db_load_barang', { id: $( this ).val(), no_so: $( '#no_so' ).val(), no_sj: $( '#no_invoice' ).val(), no_urut: $( '#surat_jalan-'+num+'-no_urut' ).val()}, function( result ){
						if( result === '' ){
							var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Kode barang tidak ada dalam SO yang dipilih.</div>';
							$('#alert').html( message );
							$( '#surat_jalan-'+num+'-kode' ).val( '' );
							$( '#surat_jalan-'+num+'-no_urut' ).val( '' );
							$( '#surat_jalan-'+num+'-nama_barang' ).val( '' );
							$( '#surat_jalan-'+num+'-satuan' ).val( '' );
							$( '#surat_jalan-'+num+'-isi' ).val( 0 ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
							$( '#surat_jalan-'+num+'-qty_so' ).val( 0 ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
							$( '#surat_jalan-'+num+'-qty_akm' ).val( 0 ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
							$( '#surat_jalan-'+num+'-qty_kirim' ).val( 0 ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
							$( '#surat_jalan-'+num+'-qty_sisa' ).val( 0 ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
							$( '#surat_jalan-'+num+'-keterangan' ).val( '' );
							$(this).val('');
							$(this).attr("oldvalue",'');
							$( '#'+asal ).focus();
						} else {
							$('#alert').html( "" );	
							var data = unserialize( result );
							// $( '#surat_jalan-'+num+'-no_urut' ).val( data['no_urut'] );
							$( '#surat_jalan-'+num+'-nama_barang' ).val( data['nama_barang'] );
							$( '#surat_jalan-'+num+'-satuan' ).val( data['satuan'] );
							$( '#surat_jalan-'+num+'-isi' ).val( data['isi'] ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
							$( '#surat_jalan-'+num+'-qty_so' ).val( data['qty'] ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
							$( '#surat_jalan-'+num+'-qty_akm' ).val( Number(data['qty_kirim']) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
							$( '#surat_jalan-'+num+'-qty_kirim' ).val( Number(data['qty'])- Number(data['qty_kirim']) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
							$( '#surat_jalan-'+num+'-qty_sisa' ).val( 0 ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
						}
					});	
				}
			}
		}
	});

	$( '.surat_jalan-kode' ).live( 'focus', function( ){
		var asal = $( this ).attr( 'id' );
		var href=$("#cari-"+asal).attr("href").split("&");
		var num = asal.split( '-' )[ 1 ];
		$("#cari-"+asal).attr("href",href[0] + "&"+ href[1] + "&cond1="+ $( '#no_so' ).val() + "&ref2=surat_jalan-"+ num +"-no_urut" + "&ref2from=6" );
	});
	$( '.cari-surat_jalan-kode' ).click( function( ){
		var asal = $( this ).attr( 'id' );
		var href=$("#"+asal).attr("href").split("&");
		var num = asal.split( '-' )[ 2 ];
		$("#"+asal).attr("href",href[0] + "&"+ href[1] + "&cond1="+ $( '#no_so' ).val() + "&ref2=surat_jalan-"+ num +"-no_urut" + "&ref2from=6");
	});

	$( '.surat_jalan-kode' ).live( 'keydown', function( e ){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== ''){
				$( '#'+asal.replace( 'kode', 'qty_kirim' ) ).focus();
			}else{
				$(this).attr('oldvalue',$(this).val());
				$( '#cari-'+asal ).click();
			}
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'kode','surat_jalan');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'kode','surat_jalan');
		}else if (e.which == 37 && e.ctrlKey && e.shiftKey) {
			e.preventDefault;
			$(this).width($(this).width()-10);
			var xwid=$(this).width();
			var xclass='surat_jalan-kode';
			$("."+ xclass).each( function(){
				$(this).width(xwid);
			});
			return false;
		}else if (e.which == 37 && e.ctrlKey) {
			e.preventDefault;
			$(this).width($(this).width()-2);
			var xwid=$(this).width();
			var xclass='surat_jalan-kode';
			$("."+ xclass).each( function(){
				$(this).width(xwid);
			});
			return false;
		}else if (e.which == 39 && e.ctrlKey && e.shiftKey) {
			e.preventDefault;
			$(this).width($(this).width()+10);
			var xwid=$(this).width();
			var xclass='surat_jalan-kode';
			$("."+ xclass).each( function(){
				$(this).width(xwid);
			});
			return false;
		}else if (e.which == 39 && e.ctrlKey) {
			e.preventDefault;
			$(this).width($(this).width()+2);
			var xwid=$(this).width();
			var xclass='surat_jalan-kode';
			$("."+ xclass).each( function(){
				$(this).width(xwid);
			});
			return false;
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'nama_barang','surat_jalan');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus2((Number(num)),'disc','surat_jalan');
			}
		}
	});
	
	$( '.surat_jalan-nama_barang' ).live( 'keydown', function( e ){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== ''){
				setfocus(Number(num),'satuan','surat_jalan');
			}
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'nama_barang','surat_jalan');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'nama_barang','surat_jalan');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'satuan','surat_jalan');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'kode','surat_jalan');
			}
		}
	});

	$( '.surat_jalan-qty_kirim' ).live( 'keyup', function( e ){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		var sisa=0;
		$( '#'+asal ).val($( '#'+asal ).val().replace( /[^0-9,.]+/g, ""));
		sisa+=Number($( '#'+asal.replace( 'qty_kirim', 'qty_so' ) ).val().replace( /[^0-9.]+/g, ""));
		sisa-=Number($( '#'+asal.replace( 'qty_kirim', 'qty_akm' ) ).val().replace( /[^0-9.]+/g, ""));
		if (!isNaN(Number($( '#'+asal ).val().replace( /[^0-9.]+/g, "")))){
			sisa-=Number($( '#'+asal ).val().replace( /[^0-9.]+/g, ""));
		}
		$( '#'+asal.replace( 'qty_kirim', 'qty_sisa' ) ).val(sisa).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
	});
	
	$( '.surat_jalan-qty_kirim' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== ''){
				setfocus(Number(num),'keterangan','surat_jalan');
			}
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'qty_kirim','surat_jalan');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'qty_kirim','surat_jalan');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'qty_sisa','surat_jalan');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'qty_akm','surat_jalan');
			}
		}
	});

	$( '.surat_jalan-qty_so' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== ''){
				setfocus(Number(num),'qty_akm','surat_jalan');
			}
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'qty_so','surat_jalan');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'qty_so','surat_jalan');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
				e.preventDefault();
				setfocus(Number(num),'qty_akm','surat_jalan');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
				e.preventDefault();
				setfocus((Number(num)),'satuan','surat_jalan');
			}
		}
	});

	$( '.surat_jalan-qty_akm' ).live( 'keydown', function( e ){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== ''){
				setfocus(Number(num),'qty_kirim','surat_jalan');
			}
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'qty_akm','surat_jalan');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'qty_akm','surat_jalan');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'qty_kirim','surat_jalan');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'qty_so','surat_jalan');
			}
		}
	});
	
	$( '.surat_jalan-qty_sisa' ).live( 'keydown', function( e ){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== ''){
				setfocus(Number(num),'keterangan','surat_jalan');
			}
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'qty_sisa','surat_jalan');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'qty_sisa','surat_jalan');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'keterangan','surat_jalan');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'qty_kirim','surat_jalan');
			}
		}
	});

	$( '.surat_jalan-keterangan' ).live( 'keydown', function( e ){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if ( e.which === 13 ){
			e.preventDefault();
			if ($( "#"+asal.replace('keterangan','nama_barang') ).val() !== ''){
				if (Number(num)==(Number($( '#baris-surat_jalan' ).val())-1)){
					$( '#tambah-baris-surat_jalan-'+( Number( num ) ) ).click();
				}
				setfocus(Number(num)+1,'kode','surat_jalan');
			}
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'keterangan','surat_jalan');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'keterangan','surat_jalan');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num)+1,'kode','surat_jalan');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'qty_sisa','surat_jalan');
			}
		}
	});

	$( '.surat_jalan-satuan' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 1 ];
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== ''){
				$( '#'+asal.replace( 'satuan', 'qty_kirim' ) ).focus();
			}
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'satuan','surat_jalan');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'satuan','surat_jalan');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'qty_kirim','surat_jalan');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'nama_barang','surat_jalan');
			}
		}
	});
	
	$( '#tanggal' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();	
			$( '#no_so' ).focus();
		}
	});

	$( '#no_so' ).bind( 'focus', function( ){
		var asal = $( this ).attr( 'id' );
		var href=$("#cari_"+asal).attr("href").split("&");
		$("#cari_"+asal).attr("href",href[0] + "&"+ href[1] + "&cond1="+ $( '#kode_dev' ).val());
	});
	
	$( '#cari_no_so' ).click( function( ){
		var asal = $( this ).attr( 'id' );
		var href=$("#"+asal).attr("href").split("&");
		$("#"+asal).attr("href",href[0] + "&"+ href[1] + "&cond1="+ $( '#kode_dev' ).val());
	});

	$( '#no_so' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			if ($( '#no_so' ).val()===''){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_no_so' ).click();
			}else{
				setfocus(0,'kode','surat_jalan');
			}
		}
	});
	$( '#no_so' ).bind( 'blur', function( ) {
		if ($( '#no_so' ).val()===''){
			$( '#tanggal_so' ).val( "" );
			$( '#kode_cust' ).val( "" );
			$( '#nama_cust' ).val( "" );
			$( '#alamat_cust' ).val( "" );
			$( '#kode_gud' ).val( "" );
			$( '#nama_gud' ).val( "" );
		}else{
			if ($( this ).val()!==$( this ).attr('oldvalue')){
				$.post( 'db_read_so', { id: $( '#no_so' ).val(), kode_dev : $( '#kode_dev' ).val() }, function( result ){
					if( result === '' ){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> SO tidak ada, status selesai atau batal, atau bukan untuk devisi yang dipilih.</div>';
						$('#alert').html( message );						
						$( '#tanggal_so' ).val( "" );
						$( '#kode_cust' ).val( "" );
						$( '#nama_cust' ).val( "" );
						$( '#alamat_cust' ).val( "" );
						$( '#kode_gud' ).val( "" );
						$( '#nama_gud' ).val( "" );
						$( '#no_so' ).val('');
						$( '#no_so' ).focus();
					} else {
						var data =unserialize(result);
						var tanggal=data['tanggal'].split('-');
						var tgl=tanggal[2];
						var bln=tanggal[1];
						var thn=tanggal[0];
						$( '#tanggal_so' ).val( tgl + '-' + bln + '-' + thn );
						$( '#kode_cust' ).val( data['kode_cust'] );
						$( '#nama_cust' ).val( data['nama_cust'] );
						$( '#alamat_cust' ).val( data['alamat'] );
						$( '#kode_gud' ).val( data['kode_gud'] );
						$( '#nama_gud' ).val( data['nama_gud'] );
						retrivedetail_so();
					}
				});
			}
		}
	});

	$( '#tanggal_so' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		 $( '#kode_supp' ).focus();
		}
	});
	
	
	$( '#tanggal_so' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();	
			if ($(this).val()!==''){
				setfocus(0, 'kode', 'surat_jalan');
			}
		}
	});

	$( '#kode_cust' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			if ($( '#kode_cust' ).val()!==''){
				$( '#kode_gud' ).focus();
			}
		}
	});

	$( '#nama_cust' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		 $( '#kode_gud' ).focus();
		}
	});
	
	$( '#alamat_cust' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '#kode_gud' ).focus();
		}
	});

	$( '#kode_gud' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			if ($( '#kode_gud' ).val()!==''){
				setfocus(0,'kode','surat_jalan');
			}
		}
	});

	$( '#nama_gud' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if ($( '#nama_gud' ).val()!==''){
				setfocus(0,'kode','surat_jalan');
			}
		}
	});

	$( '.tambah-baris-surat_jalan' ).live( 'click', function(){
		var str = $( this ).attr( 'id' );
		var num = str.replace( "tambah-baris-surat_jalan-", "" );

		// Change action
		$( "#action"+str.replace( "tambah", "" ) ).html(
			'<a href="#void()" class="tombol tombol-small hapus-baris hapus-baris-surat_jalan" id="hapus-baris-surat_jalan-'+num+'"><i class="icon-remove"></i></a>'
		);

		// Insert row
		$( '#surat_jalan' ).append(
			add_row_tabel_surat_jalan( Number( str.replace( 'tambah-baris-surat_jalan-', '' ) ) + 1, 0 )
		);
		setfocus(Number(num)+1,'kode','surat_jalan');
	});

	$( '.hapus-baris-surat_jalan' ).live( 'click', function(){
		if( confirm( 'Anda yakin untuk menghapus baris ini?' ) ){
			var str = $( this ).attr( 'id' );
			var num = str.split('-')[3];
			$( "#"+str.replace( "hapus-baris-", "" ) ).remove();
			setfocus(Number(num),'kode','surat_jalan');
		}
	});
	
	////////////////////////////////////////////////////////////////
	//
	// Button Behavior
	//
	////////////////////////////////////////////////////////////////
	$( '.simpan' ).click( function(){
	
		if ($( '#no_invoice' ).val() !== ''){
			$.post( 'db_create', $( 'form' ).serialize(), function( result ){
				success=unserialize(result);
				if( success['status'] ==='Error' ){
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Data '+$( '#no_invoice' ).val()+' gagal disimpan. '+ success['ket'] +'</div>';
					$('#alert').html( message );					
					if (success['ket']=='Data dengan nomor transaksi yang sama sudah ada.'){
						nomorbaru();
					}
				}else if( success['status'] ){
					var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Berhasil!</strong> Data '+$( '#no_invoice' ).val()+' telah disimpan.</div>';
					$('#alert').html( message );
					var address = window.location.href;
					var path = address.split( "#" );	
					window.open( path[0] + "cetak?no_invoice="+$('#no_invoice').val(),"_parent");
					initialize();
				} else {
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Data '+$( '#no_invoice' ).val()+' gagal disimpan.</div>';
					$('#alert').html( message );
				}
			});
		} else {
			var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Nomor Transaksi <strong>Harus</strong> Diisi.</div>';
			$('#alert').html( message );
		}
	});

	$( '.ubah' ).click( function(){
		if ($( '#no_invoice' ).val() !== ''){
			$.post( 'db_update', $( 'form' ).serialize(), function( result ){
				success=unserialize(result);
				if( success['status'] ==='Error' ){
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Data '+$( '#no_invoice' ).val()+' gagal diubah. '+ success['ket'] +'</div>';
					$('#alert').html( message );					
				}else if( success['status'] ){
					var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Berhasil!</strong> Data '+$( '#no_invoice' ).val()+' telah diubah.</div>';
					$('#alert').html( message );
					var address = window.location.href;
					var path = address.split( "#" );	
					window.open( path[0] + "cetak?no_invoice="+$('#no_invoice').val(), "_parent" );
					initialize();
				} else {
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Data '+$( '#no_invoice' ).val()+' gagal diubah.</div>';
					$('#alert').html( message );
				}
			});
		} else {
			var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Nomor Transaksi <strong>Harus</strong> Diisi.</div>';
			$('#alert').html( message );
		}
	});

	$( '.hapus' ).click( function(){
		if( confirm( 'Anda yakin untuk menghapus data ini?' ) ){
			if( $( '#no_invoice' ).val() !== '' ){
				$.post( 'db_delete', { id: $( '#no_invoice' ).val() }, function( result ){
					success=unserialize(result);
					if( success['status'] ==='Error' ){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Data '+$( '#no_invoice' ).val()+' gagal dihapus. '+ success['ket'] +'</div>';
						$('#alert').html( message );					
					}else if( success['status'] ){
						var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Berhasil!</strong> Data '+$( '#no_invoice' ).val()+' telah dihapus.</div>';
						$('#alert').html( message );
						initialize();
					} else {
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Data '+$( '#no_invoice' ).val()+' gagal dihapus.</div>';
						$('#alert').html( message );
					}
				});
			} else {
				var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Nomor Transaksi <strong>Harus</strong> Diisi.</div>';
				$('#alert').html( message );
			}
		}
	});

	$( '.batal' ).click( function(){
		if ($('#no_invoice').val()===''){
			window.close();
		}else{
			if( confirm( 'Anda yakin untuk membatalkan transaksi ini?' ) ){
				initialize();
			}
		}
	});
	$( '.cetak' ).focus( function(){
	var address = window.location.href;
	var path = address.split( "#" );	
		$( '.cetak' ).attr( 'href', 'cetak?no_invoice=' + $('#no_invoice').val());
	});

});
</script>
