<div class="container">
	<h2 class="judul">Sea Quotation</h2>
	<div id="alert"></div>
	<form class="form-horizontal">
		<fieldset>
			<div class="row">
				<div class="control-group span3" style="height:25px">
					<label class="control-label" for="quot_id">Quotation No: </label>
					<div class="controls">
						<div class="input-append"><input type="text" style="width:80px" name="quot_id" id="quot_id" oldvalue="" browseobj="cari_quot_id" /><a style="display:none" class="add-on browse" id="cari_quot_id" href="cari?ref=quot_id&tipe=sea_quot" title="Klik untuk mencari Quotation Number"><i class="icon-search"></i></a></div>
					</div>
				</div>
				<div class="control-group span3" style="height:25px">
					<label class="control-label" for="date">Date: </label>
					<div class="controls">
						<input type="text" name="date" style="width:80px"id="date" class="date tanggal" />
					</div>
				</div>
				<div class="control-group span3" style="height:15px">
					<label class="control-label" for="type">Type :</label>
					<div class="controls">
						<select name="type" id="type" style="width:120px" class="type">
							<option value="-">Select Type</option>
							<option value="Export">Export</option>
							<option value="Import">Import</option><!--						
-->						</select>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="cus_id">Customer ID :</label>
					<div class="controls">
						<div class="input-append">
							<input type="text" name="cus_id" id="cus_id" oldvalue="" browseobj="cari_kode_customer" style="width:80px" />
							<input type="text" style="width:400px" readonly="readonly" name="customer_name" id="customer_name" />
							<a style="display:none" class="add-on browse" id="cari_kode_customer" href="cari?ref=cus_id&tipe=customer" title="Klik untuk mencari Kode Customer"><i class="icon-search"></i></a>				
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="attn">Attn to :</label>
					<div class="controls">
						<input type="text" name="attn" id="attn" />
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="control-group span6" style="height:15px" >
					<label class="control-label" for="re">Re. :</label>
					<div class="controls">
					<div class="input-append">
						<input type="text" name="re" id="re" style="width:300px" />
						</div>
					</div>
				</div>
				
				
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="valid_from">Valid From :</label>
					<div class="controls">
						<input type="text" name="valid_from" id="valid_from" class="valid_from tanggal"/>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="sales_code">Sales Code :</label>
					<div class="controls">
						<div class="input-append">
							<input type="text" name="sales_code" id="sales_code" oldvalue="" browseobj="cari_sales_code" style="width : 87px" />
							<input type="text" style="width:200px" readonly="readonly" name="nama_sales" id="nama_sales"  />
							<a style="display:none" class="add-on browse" id="cari_sales_code" href="cari?ref=sales_code&tipe=sal" title="Klik untuk mencari Kode Sales"><i class="icon-search"></i></a>				
						</div>
					</div>
				</div>
				
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="valid_until">Valid Until :</label>
					<div class="controls">
						<input type="text" name="valid_until" id="valid_until" class="valid_until tanggal"/>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="control-group span9">
					<div class="controls">
						<ul class="nav nav-tabs nav-justified selector" id="meta">
							<li class="active"><a href="#parties" class="tab" title="Klik untuk mengisi informasi the parties">Detail</a></li>
							<li><a href="#notes" class="tab" title="Klik untuk mengisi informasi Notes">Notes Import</a></li>
							<li><a href="#notes_export" class="tab" title="Klik untuk mengisi informasi Notes Export">Notes Export</a></li>
						</ul> 
					</div>
				</div>
			</div>
			
			<div class="tab-content ">
				<div class="span12 tab-pane active parties" style="height:300px;width:1300px" id="parties">
					<div class="row">
						<div class="control-group span12" >
						<input type="hidden" id="baris-sea-quotation" name="baris-sea-quotation" value="1" />
						<table class="table">
						<thead>
							<tr><th>Vendor ID</th><th>Vendor Name</th><th>Charges Code</th><th>Charges Description</th>
							<th>Code</th><th>Port of Loading</th><th>Code</th><th>Port Destination</th><th>Unit Code</th>
							<th>Unit Description</th><th>Currency Code</th><th>Currency Description</th><th>Base Rate</th>
							<th>Additional Margin</th><th>Selling Rate</th><th>Description</th><th>Approval</th>
							<th></th></tr>
						</thead>
						<tbody id="transaksix">
						</tbody>
					</table>
						</div>
					</div>
				</div>
				
				<div class="span12 tab-pane notes" style="height:300px;width:1300px" id="notes">	
					<div class="row">
						<div class="control-group span12" style="height:60px">
							<label class="control-label" for="notes">Notes Import</label>
							
								<div class="controls">

								<input name="notes1" id ="notes1" type="checkbox" value="1"  /> 1. Tariff Effective on January 19, 2014 <p>
				
								<input name="notes2" id ="notes2" type="checkbox" value="1"  /> 2. For certain cases( Hi Co Scan, cargo discrepancy, etc.) we will ask for approval of the cost occured.<p>
								
								<input name="notes3" id ="notes3" type="checkbox" value="1"  /> 3. Above Tariff <b>excluding</b> VAT.PPN, PPH, Cost labor load and Cargo Insurance <p>
						
								<input name="notes4" id ="notes4" type="checkbox" value="1"  /> 4. Third Party charges (Shipping Line, Pelindo, etc) such as THC, Agency Fee, Doc. Fee & admin fee, Lift<p>
																									On / Off, Storage Charges, demurrage and others will be charged as per receipt.<p>
					
								<input name="notes5" id ="notes5" type="checkbox" value="1"  /> 5. Handling Red Line including Bahandle.<p>
							
								<input name="notes6" id ="notes6" type="checkbox" value="1"  /> 6. Tariff excluding insurance 0.15% of total value/total invoice<p>
								
								<input name="notes7" id ="notes7" type="checkbox" value="1"  /> 7. Overnight Charges 50% of tariff will be imposed to customer if trucking stay more than 18 hours.<p>
								
								<input name="notes8" id ="notes8" type="checkbox" value="1"  /> 8. Overnight Charges 100% of tariff will be imposed to customer if trucking stay more than 24 hours multication<p>
								
								<input name="notes9" id ="notes9" type="checkbox" value="1"  /> 9. Term of Payment: 30 Days after invoice received by Consignee / Importer <p>
								
								<input name="notes10" id ="notes10" type="checkbox" value="1"  /> 10. Exluding any import duties and taxes due to customs clearance process<p>
								
								<input name="notes11" id ="notes11" type="checkbox" value="1"  /> 11. Any other fine cause by wrong declaration of cargo by consignee will be under consignee account<p>
								
								<input name="notes12" id ="notes12" type="checkbox" value="1"  /> 12. Customs clearance process throught after EDI respon:<p>
																									- Green Line will be finished in 3-4 working days,<p>
																									- Yellow Line will be finished in 4-5 working days, and<p>
																									- Red Line will be finished in 7-10 working days, <p>
								<input name="notes13" id ="notes13" type="checkbox" value="1"  /> 13. Working procedures that have not been included in the provisions above, will be provided separately in the form<p>
																									of standard operating procedures approved and signed by both parties.<p>
								
								<input name="notes14" id ="notes14" type="checkbox" value="1"  /> 14. Above mention rate we will be valid until futher notice <p>
								
								<input name="notes15" id ="notes15" type="checkbox" value="1"  /> 15. Please return this quotation which has been signed as approval sign<p>
							</div>
						</div>
					</div>
				</div>
			
				<div class="span12 tab-pane notes_export" style="height:300px; width:1300px" id="notes_export">
					<div class="row">
						<div class="control-group span12" style="height:60px">
							<label class="control-label" for="notes_export"> Notes Export</label>
								<div class="controls">
								<input name="notes_export1" id="notes_export1" type="checkbox" value="1" />	1. Tariff Belum Termasuk Asuransi dan PPN 10%<p>
								<input name="notes_export2" id="notes_export2" type="checkbox" value="1" />	2. Semua biaya dari pihak ketiga seperti LO/LO, storage, Seal akan ditagihkan sesuai kwitansi<p>
								<input name="notes_export3" id="notes_export3" type="checkbox" value="1" />	3. Tarif diatas tidak termasuk biaya buruh muat (FOT)<p>
								<input name="notes_export4" id="notes_export4" type="checkbox" value="1" />	4. Overnight : Apabila truck > 8 jam di lokasi muat, akan dikenakan biaya overnight 50% dari tariff<p>
								<input name="notes_export5" id="notes_export5" type="checkbox" value="1" />	5. Apabila truck > 12 jam dilokasi muat, akan dikenakan biaya overnight 100% dari tariff<p>
								<input name="notes_export6" id="notes_export6" type="checkbox" value="1" />	6. Pembayaran : 14 hari setelah invoice di terima<p>
								<input name="notes_export7" id="notes_export7" type="checkbox" value="1" />	7. Order kami terima 1 - 2 hari sebelum tanggal pelaksanaan stuffing cargo.<p>
								</div>
							</div>
						</div>
					</div>
				</div>
			<div class="row">
				<div class="control-group span3" style="height:200px">
					<label class="control-label" for="term_cond"></label>
					<div class="controls" style="width:200px">
					Term and Condition :
					<div class="input-append">
						<textarea type="text" style="width:200px" name="term_cond" id="term_cond"></textarea>
						<a style="display:none" ></i></a>
					</div>
					</div>
					<label class="control-label" for="sales_note"></label>
					<div class="controls" style="width:200px">
					Sales Note :
					<div class="input-append">
						<textarea type="text" style="width:200px" name="sales_note" id="sales_note"></textarea>
						<a style="display:none" ></i></a>
						</div>
					</div>
				</div>
			<div class="row">
				<div class="control-group span3" style="height:200px">
					<label class="control-label" for="manager_note"></label>
					<div class="controls" style="width:200px">
					Manager Note :
					<div class="input-append">
						<textarea type="text" style="width:200px" name="manager_note" id="manager_note"></textarea>
						<a style="display:none" ></i></a>
					</div>
				</div>
				<label class="control-label" for="director_note"></label>
					<div class="controls" style="width:200px">
					Director Note :
					<div class="input-append">
						<textarea type="text" style="width:200px" name="director_note" id="director_note"></textarea>
						<a style="display:none" ></i></a>
					</div>
				</div>
			</div>
			</div>
			</div>
			
			<div class="form-actions btn-group;control-group span12">
				<?php if( in_array( 'create_sea_quotation', unserialize($capabilities) ) ){ ?>
				<a href="#" class="btn btn-primary simpan" style="top:-15px"><i class="icon-ok icon-white"></i> Save</a>
				<?php } ?>
				<a href="#" class="btn cetak browse" id="cetak" style="top:-15px"><i class="icon-print"></i> Print Import</a>
				<a href="#" class="btn print browse" id="print" style="top:-15px"><i class="icon-print"></i> Print Export</a>
				<?php if( in_array( 'update_sea_quotation', unserialize($capabilities) ) ){ ?>
				<a href="#" class="btn btn-primary ubah" style="top:-15px"><i class="icon-pencil icon-white"></i> Update</a>
				<?php } ?>
				<?php if( intval($role)!= 1){ ?>
					<?php if( in_array( 'delete_sea_quotation', unserialize($capabilities) ) ){ ?>
					<a href="#" class="btn btn-danger hapus" style="top:-15px"><i class="icon-trash icon-white"></i> Delete</a>
					<?php } ?>
				<?php } ?>
				<a href="#" class="btn batal" style="top:-15px"	><i class="icon-refresh"></i> Cancel</a>
			</div>
		</fieldset>
	</form>
	</div>
<style type="text/css">
#parties{
overflow-x:auto;
}
#parties{
overflow-y:auto;
}
#notes{
overflow-x:auto;
}
#notes{
overflow-y:auto;
}
#notes_export{
overflow-x:auto;
}
#notes_export{
overflow-y:auto;
}
</style>

<div id="mask"></div>
<link href="<?php echo base_url('assets/css/mask.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/jqueryui/style.css'); ?>" rel="stylesheet">
<script src='<?php echo base_url('assets/js/jqueryui/jquery.ui.core.min.js'); ?>'></script>
<script src='<?php echo base_url('assets/js/jqueryui/jquery.ui.datepicker.min.js'); ?>'></script>
<script src='<?php echo base_url('assets/js/unserialize.js'); ?>'></script>
<script src='<?php echo base_url('assets/js/utf8.decode.js'); ?>'></script>
<script src='<?php echo base_url('assets/js/format.currency.min.js'); ?>'></script>
<script src='<?php echo base_url('assets/js/script.js'); ?>'></script>
<script src='<?php echo base_url('assets/js/jquery.caret.min.js'); ?>'></script>
<script>
// Initialize
preventempty="quot_id,date,type,cus_id,attn,re,regards,valid_from,sales_code,valid_until";
preventemptystatus="1,1,1,1,1,1,1,1,1,1";
function initialize(){
	$( '#quot_id' ).focus();
	initializex();
}
function initializex(){
	$( '.simpan, .batal' ).show();
	$( '.ubah, .hapus' ).hide();
	$('input:text, textarea').val('');
	$('input:checkbox').removeAttr('checked');
	$('.browse').tooltip();
	$('.alert').alert();
	$('.tanggal').datepicker({
		dateFormat: 'dd-mm-yy',
		changeMonth:true,
		changeYear:true
	});
	$('#cetak').attr('href', '');
	$('#print').attr('href', '');
	$('.sea-quotation-row').remove();
	$( '#transaksix' ).append(
		add_row_sea_quotation( 0, 0 )
	);
	
	$('#meta a:first').show();
	$('#meta a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	})
	var d = new Date();
	var tgl = d.getDate();
	if( tgl < 10 ) tgl = "0" + tgl;
	var bln = d.getMonth() + 1;
	if( bln < 10 ) bln = "0" + bln;
	var thn = d.getFullYear();
	var tanggal = tgl+"-"+bln+"-"+thn;
	$( "#date" ).val( tanggal );
	show_user_name('');
	nomorbaru();
}

function nomorbaru()
{
	$.post( 'db_lastid', {tanggal : $( '#date' ).val() }, function( result ){
		if( result === '' ){
			var pecah=$( '#date' ).val().split('-');
			$( '#quot_id' ).val( pecah[2] + pecah[1] + '0001' );
		} else {
			var lastid = ( Number( result ) + 1 ) + '';
			for( var i = lastid.length; i < 10; i++ ){
				lastid = '0' + lastid;
			}
			$( '#quot_id' ).val( lastid );
		}
	});
}

	//Tinggal Pasang Fungsi
	
function get_base_rate(num)
{
	//ambil tahun dari program yang berformat dd-mm-yyyy menjadi format yyyy-mm-dd didalam database dengan cara
	//pecah tanggal (split)
	var tgldatefrom = $( '#valid_from').val();
	var tgldateuntil = $( '#valid_until').val();
	
	var tanggal = tgldatefrom.split( "-" );
	var tgl = tanggal[ 0 ];
	var bln = tanggal[ 1 ];
	var thn = tanggal[ 2 ];
	
	var tanggal = tgldateuntil.split( "-" );
	var tgl1 = tanggal[ 0 ];
	var bln1 = tanggal[ 1 ];
	var thn1 = tanggal[ 2 ];
	var tglawal =  thn +"-"+bln+"-"+tgl;
	var tglakhir = thn1 +"-"+bln1+"-"+tgl1;
	var vendorid = $('#sea-quotation-'+num+'-vendor_id').val();
	var charges_code = $('#sea-quotation-'+num+'-charges_code').val();
	var port_awal = $('#sea-quotation-'+num+'-code_awal').val();
	var port_akhir = $('#sea-quotation-'+num+'-code_akhir').val();
	if(tglawal!="" && tglakhir!="" && vendorid!="" && charges_code!="" && port_awal!="" && port_akhir!="")
	{		
			$.post( 'load_base_rate', { tgl_from: tglawal , tgl_until: tglakhir , charges: charges_code , vendor_id: vendorid , portawal : port_awal, portakhir: port_akhir }, function( result){
				
					var data = unserialize (result);
					// var data = eval(result);	
					
				if(result===''||data===null){
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Selling Rate Not Found. Please Check Again.</div>';
					$('#alert').html( message );
					$('#sea-quotation-'+num+'-vendor_id').focus();
					var base_rate = $('#sea-quotation-'+num+'-base_rate').val();
					$('#sea-quotation-'+num+'-base_rate').val('');
				}else{
					data = data[0];
					// console.log(data);
					$('#alert').html( "" );
					
					
					$('#sea-quotation-'+num+'-unit_code').val(data['unit_code']);
					$('#sea-quotation-'+num+'-unit_description').val(data['unit_description']);
					$('#sea-quotation-'+num+'-currency_code').val(data['currency_code']);
					$('#sea-quotation-'+num+'-currency_description').val(data['currency_description']);
					$('#sea-quotation-'+num+'-base_rate').val(parseFloat(data['base_rate'])).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });;
					// $('#sea-quotation-'+num+'-selling_rate').val(parseFloat( additional_margin)+parseFloat( data['base_rate'])).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });;
			
			}
		});
	}

}


function add_row_sea_quotation( i, action ){
	var tabel = '<tr class="sea-quotation-row" id="sea-quotation-'+i+'">';
	
	tabel += '<td><div class="input-append"><input style="width:80px" type="text" name="sea_quotation['+i+'][vendor_id]" id="sea-quotation-'+i+'-vendor_id" class="sea-quotation-vendor_id detail_jadwal" oldvalue="" browseobj="cari-sea-quotation-'+i+'-vendor_id" /><a style="display:none" class="add-on browse vendor_id detail_jadwal" id="cari-sea-quotation-'+i+'-vendor_id" href="cari?ref=sea-quotation-'+i+'-vendor_id&tipe=pr_sea" title="Klik untuk mencari vendor_id"><i class="icon-airrch"></i></a></div></td>';
	
	tabel += '<td><input style="width:200px" readonly type="text" name="sea_quotation['+i+'][vendor_name]" id="sea-quotation-'+i+'-vendor_name" class="sea-quotation-vendor_name detail_jadwal" /></td>';
	
	tabel += '<td><div class="input-append"><input style="width:80px" type="text" name="sea_quotation['+i+'][charges_code]" id="sea-quotation-'+i+'-charges_code" class="sea-quotation-charges_code charges_code detail_jadwal" oldvalue="" browseobj="cari-sea-quotation-'+i+'-charges_code" /><a style="display:none" class="add-on browse charges_code detail_jadwal" id="cari-sea-quotation-'+i+'-charges_code" href="cari?ref=sea-quotation-'+i+'-charges_code&tipe=chra" title="Klik untuk mencari charges_code"><i class="icon-airrch"></i></a></div></td>';
	
	tabel += '<td><input style="width:200px" readonly type="text" name="sea_quotation['+i+'][charges_description]" id="sea-quotation-'+i+'-charges_description" class="sea-quotation-charges_description detail_jadwal" /></td>';
	
	
	tabel += '<td><div class="input-append"><input style="width:80px" type="text" name="sea_quotation['+i+'][code_awal]" id="sea-quotation-'+i+'-code_awal" class="sea-quotation-code_awal detail_jadwal" oldvalue="" browseobj="cari-sea-quotation-'+i+'-code_awal" /><a style="display:none" class="add-on browse code_awal detail_jadwal" id="cari-sea-quotation-'+i+'-code_awal" href="cari?ref=sea-quotation-'+i+'-code_awal&tipe=sea" title="Klik untuk mencari code_awal"><i class="icon-airrch"></i></a></div></td>';
	
	tabel += '<td><input style="width:200px" readonly type="text" name="sea_quotation['+i+'][port_awal]" id="sea-quotation-'+i+'-port_awal" class="sea-quotation-port_awal detail_jadwal" /></td>';
	
	
	tabel += '<td><div class="input-append"><input style="width:80px" type="text" name="sea_quotation['+i+'][code_akhir]" id="sea-quotation-'+i+'-code_akhir" class="sea-quotation-code_akhir detail_jadwal" oldvalue="" browseobj="cari-sea-quotation-'+i+'-code_akhir" /><a style="display:none" class="add-on browse code_akhir detail_jadwal" id="cari-sea-quotation-'+i+'-code_akhir" href="cari?ref=sea-quotation-'+i+'-code_akhir&tipe=sea" title="Klik untuk mencari code_akhir"><i class="icon-airrch"></i></a></div></td>';
	
	tabel += '<td><input style="width:200px" readonly type="text" name="sea_quotation['+i+'][port_akhir]" id="sea-quotation-'+i+'-port_akhir" class="sea-quotation-port_akhir detail_jadwal" /></td>';
	
	tabel += '<td><div class="input-append"><input style="width:80px" type="text" name="sea_quotation['+i+'][unit_code]" id="sea-quotation-'+i+'-unit_code" class="sea-quotation-unit_code detail_jadwal" oldvalue="" browseobj="cari-sea-quotation-'+i+'-unit_code" /><a style="display:none" class="add-on browse unit_code detail_jadwal" id="cari-sea-quotation-'+i+'-unit_code" href="cari?ref=sea-quotation-'+i+'-unit_code&tipe=unit" title="Klik untuk mencari unit_code"><i class="icon-airrch"></i></a></div></td>';
	
	tabel += '<td><input style="width:80px" readonly type="text" name="sea_quotation['+i+'][unit_description]" id="sea-quotation-'+i+'-unit_description" class="sea-quotation-unit_description detail_jadwal" /></td>';
		
	tabel += '<td><div class="input-append"><input style="width:80px" type="text" name="sea_quotation['+i+'][currency_code]" id="sea-quotation-'+i+'-currency_code" class="sea-quotation-currency_code detail_jadwal" oldvalue="" browseobj="cari-sea-quotation-'+i+'-currency_code" /><a style="display:none" class="add-on browse currency_code detail_jadwal" id="cari-sea-quotation-'+i+'-currency_code" href="cari?ref=sea-quotation-'+i+'-currency_code&tipe=cur" title="Klik untuk mencari currency_code"><i class="icon-airrch"></i></a></div></td>';
	
	tabel += '<td><input style="width:80px" readonly type="text" name="sea_quotation['+i+'][currency_description]" id="sea-quotation-'+i+'-currency_description" class="sea-quotation-currency_description detail_jadwal" /></td>';
	
	tabel += '<td><input style="width:100px;text-align:right" readonly type="text" name="sea_quotation['+i+'][base_rate]" id="sea-quotation-'+i+'-base_rate" class="sea-quotation-base_rate currency detail_jadwal" value="0" /></td>';
	
	tabel += '<td><input style="width:100px;text-align:right" type="text" name="sea_quotation['+i+'][additional_margin]" id="sea-quotation-'+i+'-additional_margin" class="sea-quotation-additional_margin currency detail_jadwal" value="0" /></td>';
	
	tabel += '<td><input style="width:100px;text-align:right" readonly type="text" name="sea_quotation['+i+'][selling_rate]" id="sea-quotation-'+i+'-selling_rate" class="sea-quotation-selling_rate currency detail_jadwal" value="0" /></td>';
	
	tabel += '<td><input style="width:200px" maxlength="200" type="text" name="sea_quotation['+i+'][approval_desc]" id="sea-quotation-'+i+'-approval_desc" class="sea-quotation-approval_desc detail_transaksi" /></td>';
	
	tabel += '<td><input style="width:50px" type="checkbox" name="sea_quotation['+i+'][approval_number]" value="1" id="sea-quotation-'+i+'-approval_number" class="sea-quotation-approval_number detail_transaksi" /></td>';
	
	if( action === 1 ){
		tabel += '<td class="action" id="action-baris-sea-quotation-'+i+'"><a href="#void()" class="tombol tombol-small hapus-baris-sea-quotation detail_jadwal" id="hapus-baris-sea-quotation-'+i+'"><i class="icon-remove"></i></a></td>';
	} else tabel += '<td class="action" id="action-baris-sea-quotation-'+i+'"><a href="#void()" class="tombol tombol-small tambah-baris-sea-quotation detail_jadwal" id="tambah-baris-sea-quotation-'+i+'"><i class="icon-plus"></i></a></td>';
	tabel += '</tr>';
	$( "#baris-sea-quotation" ).val( i + 1 );
	return tabel;
}

$( document ).ready( function() {

	// Initialize
	initialize();
	// Miscellaneous
		
	//Blur : Ketika Pindah
	//Keydown : Ketika di Enter
	
	// $('.publish-rate-sea-base_margin').live( 'keyup', function(e){
		// var base_rate = 0;
		// var asal = $( this ).attr( 'id' );
		// var base_rate =	Number($( '#'+asal.replace( 'base_margin', 'publish_rate' ) ).val().replace( /(?!^-)[^0-9.]+/g, "" ) ) + Number( $( this ).val().replace(  /(?!^-)[^0-9.]+/g, "" ) );
		
		// $('#'+asal.replace( 'base_margin', 'base_rate' ) ).val(base_rate).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
	// });
	
	$('.sea-quotation-additional_margin').live( 'keyup', function(e){
		var base_rate = 0;
		var asal = $( this ).attr( 'id' );
		var base_rate =	Number($( '#'+asal.replace( 'additional_margin', 'base_rate' ) ).val().replace( /(?!^-)[^0-9.]+/g, "" ) ) + Number( $( this ).val().replace(  /(?!^-)[^0-9.]+/g, "" ) );
		
		$('#'+asal.replace( 'additional_margin', 'selling_rate' ) ).val(base_rate).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
	});
	
	
	
	
	$( '.detail_jadwal' ).live( 'keydown', function( e ){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 2 ];
		if ( e.which === kodehapusbaris ){
			e.preventDefault();
			var xobj = document.getElementById('hapus-baris-sea-quotation-'+num);
			if (xobj != null){
				$( '#hapus-baris-sea-quotation-'+( Number( num ) ) ).click();
			}else{
				$("input[id*='" + "sea-quotation-"+num + "']").val('');
			}
			setfocus(Number(num),'id','sea-quotation');
		}
	});
	//////////////////////////////////////////////////////////
	//keydown dan Blur Function
	//////////////////////////////////////////////////////////
	$( '.sea-quotation-id' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 2 ];
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr("oldvalue",$(this).val());
				$( '#cari-'+ asal ).click();
			} else {
				$( '#'+asal.replace( 'id', 'charges_code' ) ).focus();
			}
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'id','sea-quotation');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'id','sea-quotation');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'charges_code','sea-quotation');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus2((Number(num)),'currency_description','sea-quotation');
			}
		}
	});
		
	$( '.sea-quotation-vendor_id' ).live( 'blur', function(){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 2 ];
		if($( this ).val()==''){
			$( '#'+asal.replace( 'vendor_id', 'vendor_name' ) ).val( '' );
		}else{
			if ($( this ).val()!==$( this ).attr('oldvalue')){
				$.post( 'load_pr_sea', { id: $( this ).val() }, function( result ){
					var data = unserialize( result );
					if( result === '' ||  data===null){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Vendor ID not Found. Please Check Again.</div>';
						$('#alert').html( message );
						$( '#'+asal.replace( 'vendor_id', 'vendor_name' ) ).val( '' );
						$( '#'+asal ).val( '' );
						$(this).val('');
						$(this).attr("oldvalue",'');
						$( '#'+asal ).focus();
					}else{
						$('#alert').html( "" );	
						$( '#'+asal.replace( 'vendor_id', 'vendor_name' ) ).val( data['company_name'] );
					}
				});
			}
		}
	});
	
	$( '.sea-quotation-vendor_id' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 2 ];
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr("oldvalue",$(this).val());
				$( '#cari-'+ asal ).click();
			} else {
				$( '#'+asal.replace( 'vendor_id', 'charges_code' ) ).focus();
			}
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'vendor_id','sea-quotation');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'vendor_id','sea-quotation');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'charges_code','sea-quotation');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'approval_number','sea-quotation');
			}
		}
	});
	
	
	$( '.sea-quotation-charges_code' ).live( 'blur', function(){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 2 ];
		if($( this ).val()==''){
			$( '#'+asal.replace( 'charges_code', 'charges_description' ) ).val( '' );
		}else{
			if ($( this ).val()!==$( this ).attr('oldvalue')){
				$.post( 'load_charges', { id: $( this ).val() }, function( result ){
					var data = unserialize( result );
					if( result === '' ||  data===null){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Charges code not Found. Please Check Again.</div>';
						$('#alert').html( message );
						$( '#'+asal.replace( 'charges_code', 'charges_description' ) ).val( '' );
						$( '#'+asal ).val( '' );
						$(this).val('');
						$(this).attr("oldvalue",'');
						$( '#'+asal ).focus();
					}else{
						$('#alert').html( "" );	
						$( '#'+asal.replace( 'charges_code', 'charges_description' ) ).val( data['description'] );
					}
				});
			}
		}
	});
	
	$( '.sea-quotation-charges_code' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 2 ];
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr("oldvalue",$(this).val());
				$( '#cari-'+ asal ).click();
			} else {
				$( '#'+asal.replace( 'charges_code', 'code_awal' ) ).focus();
			}
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'charges_code','sea-quotation');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'charges_code','sea-quotation');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'code_awal','sea-quotation');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus2((Number(num)),'approval_number','sea-quotation');
			}
		}
	});
	
	$( '.sea-quotation-code_awal' ).live( 'blur', function(){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 2 ];
		if($( this ).val()==''){
			$( '#'+asal.replace( 'code_awal', 'port_awal' ) ).val( '' );
		}else{
			if ($( this ).val()!==$( this ).attr('oldvalue')){
				$.post( 'load_seaport', { id: $( this ).val() }, function( result ){
					var data = unserialize( result );
					if( result === '' ||  data===null){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Port Of Loading not Found. Please Check Again.</div>';
						$('#alert').html( message );
						$( '#'+asal.replace( 'code_awal', 'port_awal' ) ).val( '' );
						$( '#'+asal ).val( '' );
						$(this).val('');
						$(this).attr("oldvalue",'');
						$( '#'+asal ).focus();
					}else{
						$('#alert').html( "" );	
						$( '#'+asal.replace( 'code_awal', 'port_awal' ) ).val( data['port_name'] );
					}
				});
			}
		}
	});
	$( '.sea-quotation-code_awal' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 2 ];
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr("oldvalue",$(this).val());
				$( '#cari-'+ asal ).click();
			} else {
				$( '#'+asal.replace( 'code_awal', 'code_akhir' ) ).focus();
			}
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'code_awal','sea-quotation');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'code_awal','sea-quotation');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'code_akhir','sea-quotation');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'charges_code','sea-quotation');
			}
		}
	});
	$( '.sea-quotation-code_akhir' ).live( 'blur', function(){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 2 ];
		if($( this ).val()==''){
			$( '#'+asal.replace( 'code_akhir', 'port_akhir' ) ).val( '' );
		}else{
			if ($( this ).val()!==$( this ).attr('oldvalue')){
				$.post( 'load_seaport', { id: $( this ).val() }, function( result ){
					var data = unserialize( result );
					if( result === '' ||  data===null){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Port Destination not Found. Please Check Again.</div>';
						$('#alert').html( message );
						$( '#'+asal.replace( 'code_akhir', 'port_akhir' ) ).val( '' );
						$( '#'+asal ).val( '' );
						$(this).val('');
						$(this).attr("oldvalue",'');
						$( '#'+asal ).focus();
					}else{
						$('#alert').html( "" );	
						$( '#'+asal.replace( 'code_akhir', 'port_akhir' ) ).val( data['port_name'] );
					}
				});
			}
		}
	});
	
	$( '.sea-quotation-code_akhir' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 2 ];
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr("oldvalue",$(this).val());
				$( '#cari-'+ asal ).click();
			} else {
				$( '#'+asal.replace( 'code_akhir', 'unit_code' ) ).focus();
			}
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'code_akhir','sea-quotation');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'code_akhir','sea-quotation');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'unit_code','sea-quotation');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'code_awal','sea-quotation');
			}
		}
	});
	
	$( '.sea-quotation-unit_code' ).live( 'blur', function(){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 2 ];
		get_base_rate(num);
		if($( this ).val()==''){
			$( '#'+asal.replace( 'unit_code', 'unit_description' ) ).val( '' );
		}else{
			if ($( this ).val()!==$( this ).attr('oldvalue')){
				$.post( 'load_unit', { id: $( this ).val() }, function( result ){
					var data = unserialize( result );
					if( result === '' ||  data===null){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Unit code not Found. Please Check Again.</div>';
						$('#alert').html( message );
						$( '#'+asal.replace( 'unit_code', 'unit_description' ) ).val( '' );
						$( '#'+asal ).val( '' );
						$(this).val('');
						$(this).attr("oldvalue",'');
						$( '#'+asal ).focus();
					}else{
						$('#alert').html( "" );	
						$( '#'+asal.replace( 'unit_code', 'unit_description' ) ).val( data['description'] );
					}
				});
			}
		}
	});
	
	$( '.sea-quotation-unit_code' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 2 ];
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr("oldvalue",$(this).val());
				$( '#cari-'+ asal ).click();
			} else {
				$( '#'+asal.replace( 'unit_code', 'currency_code' ) ).focus();
			}
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'unit_code','sea-quotation');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'unit_code','sea-quotation');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'currency_code','sea-quotation');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'code_akhir','sea-quotation');
			}
		}
	});
	
	
	$( '.sea-quotation-currency_code' ).live( 'blur', function(){
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 2 ];
		get_base_rate(num);
		if($( this ).val()==''){
			$( '#'+asal.replace( 'currency_code', 'currency_description' ) ).val( '' );
		}else{
			if ($( this ).val()!==$( this ).attr('oldvalue')){
				$.post( 'load_currency', { id: $( this ).val() }, function( result ){
					var data = unserialize( result );
					if( result === '' ||  data===null){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Currency Code not Found. Please Check Again.</div>';
						$('#alert').html( message );
						$( '#'+asal.replace( 'currency_code', 'currency_description' ) ).val( '' );
						$( '#'+asal ).val( '' );
						$(this).val('');
						$(this).attr("oldvalue",'');
						$( '#'+asal ).focus();
					}else{
						$('#alert').html( "" );	
						$( '#'+asal.replace( 'currency_code', 'currency_description' ) ).val( data['description'] );
					}
				});
			}
		}
	});
	
	$( '.sea-quotation-currency_code' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 2 ];
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr("oldvalue",$(this).val());
				$( '#cari-'+ asal ).click();
			} else {
				$( '#'+asal.replace( 'currency_code', 'approval_desc' ) ).focus();
			}
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'currency_code','sea-quotation');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'currency_code','sea-quotation');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num),'approval_desc','sea-quotation');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'unit_code','sea-quotation');
			}
		}
	});
	
	$( '.sea-quotation-approval_desc' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 2 ];
		if ( e.which === 13 ){
			e.preventDefault;
			if( Number( $( '#baris-sea-quotation' ).val() ) === ( Number( num ) + 1 ) ){
				$( '#tambah-baris-sea-quotation-'+num ).click();
				nomorbaru();
			}
			setfocus(Number(num)+1,'approval_number','sea-quotation');
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'approval_desc','sea-quotation');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'approval_desc','sea-quotation');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num)+1,'approval_number','sea-quotation');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'currency_code','sea-quotation');
			}
		}
	});
	
	$( '.sea-quotation-approval_number' ).live( 'keydown', function( e ){
	
		var asal = $( this ).attr( 'id' );
		var num = asal.split( '-' )[ 2 ];
		if ( e.which === 13 ){
			e.preventDefault;
			if( Number( $( '#baris-sea-quotation' ).val() ) === ( Number( num ) + 1 ) ){
				$( '#tambah-baris-sea-quotation-'+num ).click();
				nomorbaru();
			}
			setfocus(Number(num)+1,'vendor_id','sea-quotation');
		}else if ( e.which === 40 ){
			e.preventDefault;
			setfocus(Number(num)+1,'approval_number','sea-quotation');
		}else if ( e.which === 38 ){
			e.preventDefault;
			setfocus2(Number(num),'approval_number','sea-quotation');
		}else if ( e.which === 39 ){
			var textBox = document.getElementById($( this ).attr( 'id' ));
			var textLength = textBox.value.length;			
			if (($(this).val()==='') || (getselectedtext($( this ).attr( 'id' ))==textBox.value) || ($(this).caret().start===textBox.value.length)){
			e.preventDefault();
				setfocus(Number(num)+1,'vendor_id','sea-quotation');
			}
		}else if ( e.which === 37 ){
			if ($(this).caret().start===0){
			e.preventDefault();
				setfocus((Number(num)),'base_rate','sea-quotation');
			}
		}
	});
	
		$( '.sea-quotation-approval_number' ).live( 'keydown', function( e ){
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== '' ){
				var asal = $( this ).attr( 'id' );
				var num = asal.split( '-' )[ 2 ];
				console.log( $( '#baris-sea-quotation' ).val() == ( Number( num ) + 1 ) );
				if( Number( $( '#baris-sea-quotation' ).val() ) === ( Number( num ) + 1 ) ){
					$( '#tambah-baris-sea-quotation-'+num ).click();
					nomorbaru();
				}
				$( '#sea-quotation-'+( Number( num ) + 1 )+'-id' ).focus();
			}
		}
	});
	// Retrieve data
	$( '#quot_id' ).bind( 'blur', function( ) {
		if($(this).val()!==$(this).attr('oldvalue')){
			$.post( 'db_read', { quot_id: $( '#quot_id' ).val() }, function( result ){
				if( result === '' ){
					var quot_id = $( '#quot_id' ).val();
					initializex();
					$( '#quot_id' ).val( quot_id );
					$( '#date' ).focus();
				} else {
					var data = unserialize( result );
					if (data[ 'user_name2']!=null){
						show_user_name(data[ 'user_name2']);
					}else if (data[ 'user_name']!=null){
						show_user_name(data[ 'user_name']);
					}else{
						show_user_name('');
					}
					var tanggal = data[ 'date' ].split( "-" );
					var tgl = tanggal[ 2 ];
					var bln = tanggal[ 1 ];
					var thn = tanggal[ 0 ];
					
					var tanggal1 = data[ 'valid_from' ].split( "-" );
					var tgl1 = tanggal1[ 2 ];
					var bln1 = tanggal1[ 1 ];
					var thn1 = tanggal1[ 0 ];
					
					var tanggal2 = data[ 'valid_until' ].split( "-" );
					var tgl2 = tanggal2[ 2 ];
					var bln2 = tanggal2[ 1 ];
					var thn2 = tanggal2[ 0 ];
					
					if (data[ 'notes1' ] == '1')
					{
						$('#notes1').prop('checked',true);
					}
					else
					{
						$('#notes1').prop('checked',false);
					}
					if (data[ 'notes2' ] == '1')
					{
						$('#notes2').prop('checked',true);
					}
					else
					{
						$('#notes2').prop('checked',false);
					}
					if (data[ 'notes3' ] == '1')
					{
						$('#notes3').prop('checked',true);
					}
					else
					{
						$('#notes3').prop('checked',false);
					}
					if (data[ 'notes4' ] == '1')
					{
						$('#notes4').prop('checked',true);
					}
					else
					{
						$('#notes4').prop('checked',false);
					}
					if (data[ 'notes5' ] == '1')
					{
						$('#notes5').prop('checked',true);
					}
					else
					{
						$('#notes5').prop('checked',false);
					}
					if (data[ 'notes6' ] == '1')
					{
						$('#notes6').prop('checked',true);
					}
					else
					{
						$('#notes6').prop('checked',false);
					}
					if (data[ 'notes7' ] == '1')
					{
						$('#notes7').prop('checked',true);
					}
					else
					{
						$('#notes7').prop('checked',false);
					}
					if (data[ 'notes8' ] == '1')
					{
						$('#notes8').prop('checked',true);
					}
					else
					{
						$('#notes8').prop('checked',false);
					}
					if (data[ 'notes3' ] == '1')
					{
						$('#notes9').prop('checked',true);
					}
					else
					{
						$('#notes9').prop('checked',false);
					}
					
					if (data[ 'notes10' ] == '1')
					{
						$('#notes10').prop('checked',true);
					}
					else
					{
						$('#notes10').prop('checked',false);
					}
					if (data[ 'notes11' ] == '1')
					{
						$('#notes11').prop('checked',true);
					}
					else
					{
						$('#notes11').prop('checked',false);
					}
					if (data[ 'notes12' ] == '1')
					{
						$('#notes12').prop('checked',true);
					}
					else
					{
						$('#notes12').prop('checked',false);
					}
					if (data[ 'notes13' ] == '1')
					{
						$('#notes13').prop('checked',true);
					}
					else
					{
						$('#notes13').prop('checked',false);
					}
					if (data[ 'notes14' ] == '1')
					{
						$('#notes14').prop('checked',true);
					}
					else
					{
						$('#notes14').prop('checked',false);
					}
					if (data[ 'notes15' ] == '1')
					{
						$('#notes15').prop('checked',true);
					}
					else
					{
						$('#notes15').prop('checked',false);
					}
					if (data[ 'notes_export1' ] == '1')
					{
						$('#notes_export1').prop('checked',true);
					}
					else
					{
						$('#notes_export1').prop('checked',false);
					}
					if (data[ 'notes_export2' ] == '1')
					{
						$('#notes_export2').prop('checked',true);
					}
					else
					{
						$('#notes_export2').prop('checked',false);
					}
					if (data[ 'notes_export3' ] == '1')
					{
						$('#notes_export3').prop('checked',true);
					}
					else
					{
						$('#notes_export3').prop('checked',false);
					}
					if (data[ 'notes_export4' ] == '1')
					{
						$('#notes_export4').prop('checked',true);
					}
					else
					{
						$('#notes_export4').prop('checked',false);
					}
					if (data[ 'notes_export5' ] == '1')
					{
						$('#notes_export5').prop('checked',true);
					}
					else
					{
						$('#notes_export5').prop('checked',false);
					}
					if (data[ 'notes_export6' ] == '1')
					{
						$('#notes_export6').prop('checked',true);
					}
					else
					{
						$('#notes_export6').prop('checked',false);
					}
					if (data[ 'notes_export7' ] == '1')
					{
						$('#notes_export7').prop('checked',true);
					}
					else
					{
						$('#notes_export7').prop('checked',false);
					}
					
					$( "#quot_id" ).val( data[ 'quot_id' ] );
					$( "#date" ).val( tgl + "-" + bln + "-" + thn );
					$( "type" ).val( data[ 'type' ]);
					$( "#cus_id" ).val( data[ 'cus_id' ] );
					$( "#customer_name").val( data['customer_name']);
					$( "#attn" ).val( data[ 'attn' ] );
					$( "#re" ).val( data[ 're' ] );
					$( "#regards" ).val( data[ 'regards' ] );
					$( "#valid_from" ).val( tgl1 + "-" + bln1 + "-" + thn1 );
					$( "#sales_code" ).val( data[ 'sales_code' ] );
					$( "#nama_sales" ).val( data[ 'nama_sales' ] );
					$( "#valid_until" ).val( tgl2 + "-" + bln2 + "-" + thn2 );
					$( "#term_cond" ).val( data[ 'term_cond' ] );
					$( "#sales_note").val( data['sales_note']);
					$( "#manager_note" ).val( data[ 'manager_note' ] );
					$( "#director_note" ).val( data[ 'director_note' ] );
					
					$( '.sea-quotation-row' ).remove();
					var i = 0;
										
					for(; data['jadwal'][i]; i++ ){					
						$( '#transaksix' ).append( add_row_sea_quotation( i, 1 ) );
						$( '#sea-quotation-'+i+'-charges_code' ).val( data['jadwal'][i][ 'charges_code' ] );
						$( '#sea-quotation-'+i+'-charges_description' ).val( data['jadwal'][i][ 'charges_description' ] );
						$( '#sea-quotation-'+i+'-code_awal' ).val( data['jadwal'][i][ 'code_awal' ] );
						$( '#sea-quotation-'+i+'-port_awal' ).val( data['jadwal'][i][ 'port_awal' ] );
						$( '#sea-quotation-'+i+'-code_akhir' ).val( data['jadwal'][i][ 'code_akhir' ] );
						$( '#sea-quotation-'+i+'-port_akhir' ).val( data['jadwal'][i][ 'port_akhir' ] );
						$( '#sea-quotation-'+i+'-unit_code' ).val( data['jadwal'][i][ 'unit_code' ] );
						$( '#sea-quotation-'+i+'-unit_description' ).val( data['jadwal'][i][ 'unit_description' ] );
						$( '#sea-quotation-'+i+'-currency_code' ).val( data['jadwal'][i][ 'currency_code' ] );
						$( '#sea-quotation-'+i+'-currency_description' ).val( data['jadwal'][i][ 'currency_description' ] );
						$( '#sea-quotation-'+i+'-vendor_id' ).val( data['jadwal'][i][ 'vendor_id' ] );
						$( '#sea-quotation-'+i+'-vendor_name' ).val( data['jadwal'][i][ 'vendor_name' ] );
						$( '#sea-quotation-'+i+'-base_rate' ).val( parseFloat( data['jadwal'][i][ 'base_rate' ] ) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
						$( '#sea-quotation-'+i+'-additional_margin' ).val( parseFloat( data['jadwal'][i][ 'additional_margin' ] ) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
						$( '#sea-quotation-'+i+'-selling_rate' ).val( parseFloat( data['jadwal'][i][ 'selling_rate' ] ) ).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
						$( '#sea-quotation-'+i+'-approval_desc' ).val( data['jadwal'][i][ 'approval_desc' ] );
						if (data['jadwal'][i][ 'approval_number' ] == '1')
						{
							$('#sea-quotation-'+i+'-approval_number').prop('checked',true);
						}
						else
						{
							$('#sea-quotation-'+i+'-approval_number').prop('checked',false);
						}
						$( '#baris-sea-quotation' ).val( i + 1 );
					}
					$( '#transaksix' ).append( add_row_sea_quotation( i, 0 ) );
					$( '.ubah, .hapus, .cetak, .print').show();
					$('#cetak').attr('href', 'import');
					$('#print').attr('href', 'export');
					$( '.simpan' ).hide();
				}
			});
		}
	});
	
	$( '#quot_id' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){	
				nomorbaru();
			} else {
				$('#date').focus();
			}
		}
	});
	$( '#date' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== '' ){	
				$('#type').focus();
			}
		}
	});
	
	$( '#type' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== '' ){	
				$('#cus_id').focus();
			}
		}
	});
	
	$( '#cus_id' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== '' ){	
				$('#attn').focus();
			}
		}
	});	
	
	
	$( '#cus_id' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			if ($( '#cus_id' ).val()===''){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_kode_customer' ).click();
			}else{		
				$( '#cus_id' ).focus();				
			}
		}
	});
	
	$( '#cus_id' ).bind( 'blur', function( ) {
		if ($( '#cus_id' ).val()===''){
			$( '#customer_name' ).val( "" );
		}else{
			if($(this).val()!==$(this).attr('oldvalue')){
				$.post( 'db_read_kepala_customer', { id: $( '#cus_id' ).val() }, function( result ){
					if( result === '' ){
						$( '#cus_id' ).val( "" );
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Customer Code Not Found.</div>';
						$('#alert').html( message );						
					} else {
						$( '#customer_name' ).val( result );
					}
				});
			}
		}
	});
	
	$( '#attn' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== '' ){	
				$('#re').focus();
			}
		}
	});
	$( '#re' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== '' ){	
				$('#valid_from').focus();
			}
		}
	});
	$( '#valid_from' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== '' ){	
				$('#sales_code').focus();
			}
		}
	});

	$( '#sales_code' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() !== '' ){	
				$('#valid_until').focus();
			}
		}
	});

	$( '#sales_code' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
		e.preventDefault();
			if ($( '#sales_code' ).val()===''){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_sales_code' ).click();
			}else{
					$( '#sales_code' ).focus();
			}
		}
	});
	
	$( '#sales_code' ).bind( 'blur', function( ) {
		if ($( '#sales_code' ).val()===''){
			$( '#nama_sales' ).val( "" );
		}else{
			if($(this).val()!==$(this).attr('oldvalue')){
				$.post( 'db_read_kepala_sales', { id: $( '#sales_code' ).val() }, function( result ){
					if( result === '' ){
						$( '#sales_code' ).val( "" );
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Sales Code Not Found.</div>';
						$('#alert').html( message );						
					} else {
						$( '#nama_sales' ).val( result );
					}
				});
			}
		}
	});
	$( '#valid_until' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			setfocus(0,'vendor_id','sea-quotation');
		}
	});
	// Tambah Hapus Baris TTUS
	
	$( '.tambah-baris-sea-quotation' ).live( 'click', function(){
		var str = $( this ).attr( 'id' );
		var num = str.replace( "tambah-baris-sea-quotation-", "" );

		// Change action
		$( "#action"+str.replace( "tambah", "" ) ).html(
			'<a href="#void()" class="tombol tombol-small hapus-baris hapus-baris-sea-quotation" id="hapus-baris-sea-quotation-'+num+'"><i class="icon-remove"></i></a>'
		);

		// Insert row
		$( '#transaksix' ).append(
			add_row_sea_quotation( Number( str.replace( 'tambah-baris-sea-quotation-', '' ) ) + 1, 0 )
		);
		setfocus(Number(num)+1,'id','sea-quotation');
	});

	$( '.hapus-baris-sea-quotation' ).live( 'click', function(){
		if( confirm( 'Are You Sure Want Cancel This Transaction?' ) ){
			var str = $( this ).attr( 'id' );
			var num = str.split('-')[4];
			$( "#"+str.replace( "hapus-baris-", "" ) ).remove();
			setfocus(Number(num),'id','sea-quotation');
		}
	});
	// Button Behavior
	
	$( '.simpan' ).click( function(){
		if( $( '#quot_id' ).val() !== '' ){
			$.post( 'db_create', $( 'form' ).serialize(), function( result ){
				success=unserialize(result);
				if( success['status'] ==='Error' ){
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Data '+$( '#quot_id' ).val()+success['ket'] +'</div>';
					$('#alert').html( message );					
					if (success['ket']=='Data Already Exist.'){
						nomorbaru();
					}
				}else if( success['status'] ){
					var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Data '+$( '#quot_id' ).val()+' Complete.</div>';
					$('#alert').html( message );
				} else {
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data '+$( '#quot_id' ).val()+' Failed.</div>';
					$('#alert').html( message );
				}
			});
		} else {
			var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data Required.</div>';
			$('#alert').html( message );
		}
	});
	
	$( '.ubah' ).click( function(){
		if( $( '#quot_id' ).val() !== ''){
			$.post( 'db_update', $( 'form' ).serialize(), function( result ){
				success=unserialize(result);
				if( success['status'] ==='Error' ){
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Data '+$( '#quot_id' ).val()+' Failed. '+ success['ket'] +'</div>';
					$('#alert').html( message );					
					if (success['ket']=='Data Already Exist.'){
						nomorbaru();
					}
				}else if( success['status'] ){
					var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Data '+$( '#quot_id' ).val()+' Complete.</div>';
					$('#alert').html( message );
				} else {
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data '+$( '#quot_id' ).val()+' Failed.</div>';
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
			if( $( '#quot_id' ).val() !== '' ){
				$.post( 'db_delete', { quot_id: $( '#quot_id' ).val() }, function( result ){
					success=unserialize(result);
					if( success['status'] ==='Error' ){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Data '+$( '#quot_id' ).val()+' Failed. '+ success['ket'] +'</div>';
						$('#alert').html( message );					
					}else if( success['status'] ){
						var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Data '+$( '#quot_id' ).val()+' Have been Deleted.</div>';
						$('#alert').html( message );
						initializex();
					} else {
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data '+$( '#quot_id' ).val()+' Failed.</div>';
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
		if (($('#quot_id').val()==='')){
			window.close();
			if( confirm( 'Are You Sure To Delete This Transaction?' ) ){
		}else{
				initializex();
			}
		}
	});
	
	$( '.cetak' ).click( function(){
		$( '#cetak' ).attr( 'href', 'import');
	});
	
	$( '.print').click(function(){
		$( '#print' ).attr( 'href', 'export');
	});

});
</script>