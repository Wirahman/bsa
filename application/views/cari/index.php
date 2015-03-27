<?php
	if( isset( $_GET['ref'] ) ){
		echo '<input type="hidden" id="ref" value="'.$_GET['ref'].'" />';
	} else echo '<input type="hidden" id="ref" value="" />';
	if( isset( $_GET['ref2'] ) ){
		echo '<input type="hidden" id="ref2" value="'.$_GET['ref2'].'" />';
	} else echo '<input type="hidden" id="ref2" value="" />';
	if( isset( $_GET['ref2from'] ) ){
		echo '<input type="hidden" id="ref2from" value="'.$_GET['ref2from'].'" />';
	} else echo '<input type="hidden" id="ref2from" value="" />';

	if( isset( $_GET['tipe'] ) ){
		echo '<input type="hidden" id="tipe" value="'.$_GET['tipe'].'" />';
	} else echo '<input type="hidden" id="tipe" />';

	if( isset( $_GET['cond1'] ) ){
		echo '<input type="hidden" id="cond1" value="'.$_GET['cond1'].'" />';
	} else echo '<input type="hidden" id="cond1" value="" />';

	if( isset( $_GET['cond2'] ) ){
		echo '<input type="hidden" id="cond2" value="'.$_GET['cond2'].'" />';
	} else echo '<input type="hidden" id="cond2" value="" />';

	if( isset( $_GET['cond3'] ) ){
		echo '<input type="hidden" id="cond3" value="'.$_GET['cond3'].'" />';
	} else echo '<input type="hidden" id="cond3" value="" />';

	if( isset( $_GET['cond4'] ) ){
		echo '<input type="hidden" id="cond4" value="'.$_GET['cond4'].'" />';
	} else echo '<input type="hidden" id="cond4" value="" />';

?>
<h2>Cari Data</h2>
	<form class="form-horizontal">
<div><input type="text" id="key" title="Masukkan nilai untuk mencari data. Klik pada baris yang diinginkan untuk memasukkan nilai" /></div>
<div class="row">
	<div class="span12 tab-pane active listgrid" style="height:370px;width:950px" id="listgrid">
	<input type="hidden" id="baris-listgrid" name="baris-listgrid" value="0" />
		<div id="result"></div>
	</div>
</div>		
	</form>
<style type="text/css">
#listgrid{
overflow-x:auto;
}
#listgrid{
overflow-y:auto;
}
</style>
<style>
input{
text-transform:uppercase;
}
</style>

<div id="mask"></div>
<link href="<?php echo base_url('assets/css/mask.css'); ?>" rel="stylesheet">
<script src='<?php echo base_url('assets/js/unserialize.js'); ?>'></script>
<script src='<?php echo base_url('assets/js/utf8.decode.js'); ?>'></script>
<script src='<?php echo base_url('assets/js/script.js'); ?>'></script>
<script>
//Edit Function ini
$( document ).ready( function() {
// var hasil;
var xlebar="";
var xjudul="";
var xalign="";
var xfield="";
var xfunction_name="";

if ($('#tipe').val()=='air'){
	xlebar="100px;350px;400px;450px";
	xjudul="Code;Name;Country;Region";
	xalign="";
	xfield="port_kode;port_name;country_code;region_code";
	xfunction_name="db_airport";
}else if  ($('#tipe').val()=='air_quot'){
	xlebar="100px;350px;400px;450px";
	xjudul="Quotation;Date;Attn;Re;Regards;Valid From;Valid Until;Customer ID; Customer Name; Sales Code; Sales Name; Term and Condition; Sales Notes; Manager Notes; Director Notes";
	xalign="";
	xfield="quot_id;date;attn;re;regards;valid_from;valid_until;cus_id;customer_name;sales_code;sales_name;term_cond;sales_note;manager_note;director_note";
	xfunction_name="db_air_quotation";
}else if($('#tipe').val()=='booking_cargo_sea'){
	xlebar="100px;100px";
	xjudul="Order No;Order Date";
	xalign="";
	xfield="order_no;order_date";
	xfunction_name="db_booking_cargo_sea";		
}else if  ($('#tipe').val()=='pr_air'){
	xlebar="120px;350px";
	xjudul="Vendor Id;Company Name";
	xalign="";
	xfield="vendor_id;company_name";
	xfunction_name="db_pr_air";	
}else if ($('#tipe').val()=='pr_air_master'){
	xlebar="100px;350px;400px;450px;500px;550px;600px;650px;700px;750px;800px;850px;900px;950px";
	xjudul="No;Vendor Id;Date (From);Date (Until); Charges Code; Charges Description; Code; Port Of loading; Code; Port Destination; Unit Code; Unit Description; Currency Code; Currency Description";
	xalign="";
	xfield="id;vendor_id;date_from;date_until;charges_code;charges_description;code_awal;port_awal;code_akhir;port_akhir;unit_code;unit_description;currency_code;currency_description";
	xfunction_name="db_pr_air_master";
}else if  ($('#tipe').val()=='pr_sea'){
	xlebar="120px;350px";
	xjudul="Vendor Id;Company Name";
	xalign="";
	xfield="vendor_id;company_name";
	xfunction_name="db_pr_sea";	
}else if ($('#tipe').val()=='pr_sea_master'){
	xlebar="100px;350px;400px;450px;500px;550px;600px;650px;700px;750px;800px;850px;900px;950px";
	xjudul="No;Vendor Id;Date (From);Date (Until); Charges Code; Charges Description; Code; Port Of loading; Code; Port Destination; Unit Code; Unit Description; Currency Code; Currency Description";
	xalign="";
	xfield="id;vendor_id;date_from;date_until;charges_code;charges_description;code_awal;port_awal;code_akhir;port_akhir;unit_code;unit_description;currency_code;currency_description";
	xfunction_name="db_pr_sea_master";
}else if  ($('#tipe').val()=='chra'){
	xlebar="90px;350px;70px;60px;60px;90px;350px;70px;70px";
	xjudul="Charges Code; Description; Traffic Lane;Exim;Type;GL Code;GL Description";
	xalign="";
	xfield="charges_code;description;traffic_lane;lintas;type;gl_code;gl_description";
	xfunction_name="db_charges";	
}else if($('#tipe').val()=='city'){
	xlebar="100px;350px";
	xjudul="Code;Name";
	xalign="";
	xfield="city_code;city_name";
	xfunction_name="db_city";
}else if($('#tipe').val()=='company'){
	xlebar="100px;350px;400px;450px;500px;550px;600px;650px;700px;750px;800px;850px;900px;950px;1000px;1050px";
	xjudul="Code;Type;Name;NPWP;Address;Region;ZIP;Fax;Phone;Email;Website;Contack Person;Dept;Country;City";
	xalign="";
	xfield="com_id;type;name;npwp;address;region;zip;fax;phone;email;website;contack_person;dept;country_code;city_code";
	xfunction_name="db_company";
}else if($('#tipe').val()=='com'){
	xlebar="100px;350px;400px;450px";
	xjudul="Code;Name;Description;Commodity Class";
	xalign="";
	xfield="code;name;desc;commodity_class";
	xfunction_name="db_commodity";
}else if($('#tipe').val()=='commclass'){
	xlebar="100px;350px";
	xjudul="Class;Description";
	xalign="";
	xfield="comclass;comdesc";
	xfunction_name="db_commodity_class";
}else if($('#tipe').val()=='count'){
	xlebar="100px;350px";
	xjudul="Code;Name";
	xalign="";
	xfield="country_code;country_name";
	xfunction_name="db_country";
}else if  ($('#tipe').val()=='cur'){
	xlebar="200px;350px;100px";
	xjudul="Currency Code; Descption; Symbol";
	xalign="";
	xfield="currency_code;description;symbol";
	xfunction_name="db_currency";
}else if($('#tipe').val()=='customer'){
	xlebar="100px;350px;400px;450px;500px;550px;600px;650px;700px;750px;800px;850px;900px;950px;1000px;1050px;1100px;1150px";
	xjudul="Code;Name;Type;NPWP;Address;Tax;Region;ZIP;Fax;Phone;Email;Website;Contack Person;Dept;Credit;Country;City";
	xalign="";
	xfield="cus_id;name;type;npwp;address;address_tax;region_code;zip;fax;phone;email;website;contack_person;dept;credit_term;country_code;city_code";
	xfunction_name="db_customer";	
}else if($('#tipe').val()=='sea_export_master'){
	xlebar="100px;150px";
	xjudul="OBL No;Date";
	xalign="";
	xfield="OBL_no;date";
	xfunction_name="db_sea_export_master";
}else if($('#tipe').val()=='sea_import_master'){
	xlebar="100px;150px;200px";
	xjudul="OBL No;Date;Total Shipment";
	xalign="";
	xfield="OBL_no;date;total_shipment";
	xfunction_name="db_sea_import_master";
}else if($('#tipe').val()=='freight_term'){
	xlebar="100px;350px";
	xjudul="Code;Name";
	xalign="";
	xfield="term_code;description";
	xfunction_name="db_freight_term";
}else if($('#tipe').val()=='guest_book'){
	xlebar="100px;200px;300px;350px;400px;450px";
	xjudul="Tanggal;Nama;Alamat;Contack Person;Perusahaan Asal; Tujuan";
	xalign="";
	xfield="date;nama;alamat;contack_person;company_name;tujuan";
	xfunction_name="db_guest_book";
}else if ($('#tipe').val()=='pb_air'){
	xlebar="100px;350px;400px;450px";
	xjudul="Code;Name";
	xalign="";
	xfield="port_kode;port_name";
	xfunction_name="db_airport";
}else if  ($('#tipe').val()=='pb_chra'){
	xlebar="90px;350px;70px;60px;60px;90px;350px;70px;70px";
	xjudul="Charges Code; Description";
	xalign="";
	xfield="charges_code;description";
	xfunction_name="db_charges";	
}else if  ($('#tipe').val()=='pb_pr_air'){
	xlebar="350px";
	xjudul="Vendor Name";
	xalign="";
	xfield="company_name";
	xfunction_name="db_pr_air";
}else if  ($('#tipe').val()=='pb_pr_sea'){
	xlebar="350px";
	xjudul="Vendor ID;Vendor Name";
	xalign="";
	xfield="vendor_id;company_name";
	xfunction_name="db_pr_sea";
}else if  ($('#tipe').val()=='pb_chra1'){
	xlebar="350px";
	xjudul="Charges Description";
	xalign="";
	xfield="description";
	xfunction_name="db_charges";
}else if  ($('#tipe').val()=='pb_comclass'){
	xlebar="350px";
	xjudul=" Service";
	xalign="";
	xfield="comdesc";
	xfunction_name="db_commodity_class";
}else if  ($('#tipe').val()=='pb_sea'){
	xlebar="350px";
	xjudul="Company Name";
	xalign="";
	xfield="company_name";
	xfunction_name="db_pr_sea";	
}else if($('#tipe').val()=='pb_unit'){
	xlebar="100px;350px";
	xjudul="Code;Name";
	xalign="";
	xfield="unit_code;description";
	xfunction_name="db_unit";
}else if($('#tipe').val()=='publish_air'){
	xlebar="100px;150px;200px;250px;300px;350px;400px";
	xjudul="Loading Port;Destinasion Port;Charges Code;Commodity Class;Unit;Begin Periode;End Period";
	xalign="";
	xfield="port_awal;port_akhir;code_charges;id_commodity_class;id_unit;date_from;date_until";
	xfunction_name="db_publish_rate_air";
}else if($('#tipe').val()=='publish_sea'){
	xlebar="100px;150px;200px;250px;300px;350px";
	xjudul="Loading Port;Destinasion Port;Charges Code;Unit;Begin Periode;End Period";
	xalign="";
	xfield="port_awal;port_akhir;id_charges_code;id_unit;date_from;date_until";
	xfunction_name="db_publish_rate_sea";
}else if  ($('#tipe').val()=='reg'){
	xlebar="100px;350px;400px";
	xjudul="Code;Name;Description";
	xalign="";
	xfield="region_code;region_name;description";
	xfunction_name="db_region";	
}else if  ($('#tipe').val()=='sal'){ // tampilan untuk ke data grid yang di cari f5 atau pada saat di browser
	xlebar="100px;250px;250px;50px;50px;100px;100px";
	xjudul="Kode sales;Nama sales;address;title;team;no_ktp;phone";
	xalign="";
	xfield="sales_code;nama_sales;address;title;team;no_ktp;phone";
	xfunction_name="db_sales";	
}else if  ($('#tipe').val()=='sal_bon'){
	xlebar="100px;85px;85px;130px";
	xjudul="Date;Target;Min Target;Percentge Bonus"; // nama untuk colom filed yang di pangil atau di kluarkan
	xalign="";
	xfield="date;target;min_target;percentage_bonus"; //nama- nama di filed data base
	xfunction_name="db_sales_bon";	
}else if  ($('#tipe').val()=='sal_com'){
	xlebar="100px;350px;100px;100px";
	xjudul="Kode Sales;Name Sales;Team;Date";
	xalign="";
	xfield="sales_code;nama_sales;team;date";
	xfunction_name="db_sales_com";
}else if  ($('#tipe').val()=='sea'){
	xlebar="100px;350px;400px;450px";
	xjudul="Code;Name;Country;Region";
	xalign="";
	xfield="port_kode;port_name;country_code;region_code";
	xfunction_name="db_seaport";
}else if  ($('#tipe').val()=='sea_quot'){
	xlebar="100px;350px;400px;450px";
	xjudul="Quotation;Date;Attn;Re;Regards;Valid From;Valid Until;Customer ID; Customer Name; Sales Code; Sales Name; Term and Condition; Sales Notes; Manager Notes; Director Notes";
	xalign="";
	xfield="quot_id;date;attn;re;regards;valid_from;valid_until;cus_id;customer_name;sales_code;sales_name;term_cond;sales_note;manager_note;director_note";
	xfunction_name="db_sea_quotation";
}else if($('#tipe').val()=='shipment_inbound_entry_sea'){
	xlebar="100px;100px";
	xjudul="Order No;Order Date";
	xalign="";
	xfield="order_no;order_date";
	xfunction_name="db_shipment_inbound_entry_sea";		
}else if  ($('#tipe').val()=='sig'){
	xlebar="40px;250px;40px";
	xjudul="Code;Name;Title";
	xalign="";
	xfield="signature_code;nama;title";
	xfunction_name="db_signature";	
}else if  ($('#tipe').val()=='sr_air'){
	xlebar="120px;350px";
	xjudul="Vendor Id;Company Name";
	xalign="";
	xfield="vendor_id;company_name";
	xfunction_name="db_sr_air";	
}else if ($('#tipe').val()=='sr_air_master'){
	xlebar="100px;350px;400px;450px;500px;550px;600px;650px;700px;750px;800px;850px;900px;950px";
	xjudul="No;Vendor Id;Date (From);Date (Until); Charges Code; Charges Description; Code; Port Of loading; Code; Port Destination; Unit Code; Unit Description; Currency Code; Currency Description";
	xalign="";
	xfield="id;vendor_id;date_from;date_until;charges_code;charges_description;code_awal;port_awal;code_akhir;port_akhir;unit_code;unit_description;currency_code;currency_description";
	xfunction_name="db_sr_air_master";
}else if  ($('#tipe').val()=='sr_sea'){
	xlebar="120px;350px";
	xjudul="Vendor Id;Company Name";
	xalign="";
	xfield="vendor_id;company_name";
	xfunction_name="db_sr_sea";	
}else if ($('#tipe').val()=='sr_sea_master'){
	xlebar="100px;350px;400px;450px;500px;550px;600px;650px;700px;750px;800px;850px;900px;950px";
	xjudul="No;Vendor Id;Date (From);Date (Until); Charges Code; Charges Description; Code; Port Of loading; Code; Port Destination; Unit Code; Unit Description; Currency Code; Currency Description";
	xalign="";
	xfield="id;vendor_id;date_from;date_until;charges_code;charges_description;code_awal;port_awal;code_akhir;port_akhir;unit_code;unit_description;currency_code;currency_description";
	xfunction_name="db_sr_sea_master";
}else if($('#tipe').val()=='unit'){
	xlebar="100px;350px";
	xjudul="Code;Name";
	xalign="";
	xfield="unit_code;description";
	xfunction_name="db_unit";
}else if($('#tipe').val()=='ves'){
	xlebar="100px;350px;400px;450px";
	xjudul="Code;Name;Type;Flag";
	xalign="";
	xfield="vessel_code;vessel_name;vessel_type;flag";
	xfunction_name="db_vessel";		
}else if($('#tipe').val()=='carrier_booking_sea'){
	xlebar="100px;100px";
	xjudul="SI No;Order Date";
	xalign="";
	xfield="si_no;order_date";
	xfunction_name="db_carrier_booking_sea";
}else if($('#tipe').val()=='air_quot_commclass'){
	xlebar="100px;350px";
	xjudul="Class;Description";
	xalign="";
	xfield="comclass;comdesc";
	xfunction_name="db_commodity_class";
}else if($('#tipe').val()=='sr_air_customer'){
	xlebar="100px;200px";
	xjudul="Customer ID; Customer Name";
	xalign="";
	xfield="customer_id;company_name;"
	xfunction_name="db_customer";
}else if($('#tipe').val()=='sr_sea_customer'){
	xlebar="100px;200px";
	xjudul="Customer ID; Customer Name";
	xalign="";
	xfield="customer_id;company_name;"
	xfunction_name="db_customer";
}else{
	alert('Script Error. Refresh Page');
	parent.$.fancybox.close();
}

	var maxfield='1';
function loaddata(kode){
var pecahlebar=xlebar.split(';');
var pecahjudul=xjudul.split(';');
var pecahalign=xalign.split(';');
var pecahfield=xfield.split(';');
maxfield=Number(pecahfield.length)-1;
	$.post( '../'+ xfunction_name, { key: kode,cond1: $('#cond1').val(),cond2: $('#cond2').val(),cond3: $('#cond3').val(),cond4: $('#cond4').val() }, function( result ){
		var data = unserialize( result );
		// hasil=data;
		var tabel = '<table><thead><tr>'
		var ix=0;
		var i = 0;
		var lebar="";
		var align="";
		var judul="";
		$('#baris-listgrid').val(0);
		while( pecahfield[ ix ] ){
			if (pecahlebar[ix]){
				lebar="width:"+ pecahlebar[ix];
			}else {
				lebar="";
			}
			if (pecahalign[ix]){
				align="text-align:"+ pecahalign[ix];
			}else {
				align="text-align:left";
			}
			if (pecahjudul[ix]){
				judul= pecahjudul[ix];
			}else {
				judul=pecahfield[ ix ];
			}
			if (lebar==''){
				if (align==''){
					tabel+='<th class="listgrid-'+ix+' detail_list">'+ judul +'</th>';
				}else{
					tabel+='<th class="listgrid-'+ix+' detail_list" style="'+ align +'">'+ judul +'</th>';
				}
			}else{
				if (align==''){
					tabel+='<th class="listgrid-'+ix+' detail_list" style="'+ lebar +'">'+ judul +'</th>';
				}else{
					tabel+='<th class="listgrid-'+ix+' detail_list" style="'+ lebar +';'+ align +'">'+ judul +'</th>';
				}
			}
			ix++;
		}
		tabel+='</tr>';
		if( data[ 0 ] == null ){
			tabel += '<tr id=""><td colspan="'+ maxfield +'">Tidak ada data</td></tr>';
			tabel += '<tr class="result" id="" style="display:none">';
			ix=0;
			while( pecahfield[ ix ] ){
				tabel += '<td ><input style="width:'+ pecahlebar[ix] +';text-align:'+ pecahalign[ix] +'" type="text" readonly="readonly" name="listgrid['+i+']['+ix+']" id="listgrid-'+i+'-'+ix+'" class="listgrid-'+ix+' detail_list" value="" /></td>';
				ix++;
			}
			tabel += '</tr>';
			$('#key').focus();
		} else {
			while( data[ i ] ){
				tabel += '<tr class="result" id="'+escape( data[ i ][ pecahfield[0] ] )+'" pos="listgrid-'+i+'-">';
				ix=0;
				while( data[ i ][pecahfield[ ix ]] || ix <= maxfield ){
					if (data[ i ][ pecahfield[ ix ] ]==null){
						if (pecahalign[ix]=='right'){
							tabel += '<td ><input style="width:'+ pecahlebar[ix] +';text-align:'+ pecahalign[ix] +'" type="text" readonly="readonly" name="listgrid['+i+']['+ix+']" id="listgrid-'+i+'-'+ix+'" class="listgrid-'+ix+' detail_list" value="'+ FormatNumberBy3(0,'.',',') +'" /></td>';
						}else{
							tabel += '<td ><input style="width:'+ pecahlebar[ix] +';text-align:'+ pecahalign[ix] +'" type="text" readonly="readonly" name="listgrid['+i+']['+ix+']" id="listgrid-'+i+'-'+ix+'" class="listgrid-'+ix+' detail_list" value="" /></td>';
						}
					}else{
						if (pecahalign[ix]=='right'){
							tabel += '<td ><input style="width:'+ pecahlebar[ix] +';text-align:'+ pecahalign[ix] +'" type="text" readonly="readonly" name="listgrid['+i+']['+ix+']" id="listgrid-'+i+'-'+ix+'" class="listgrid-'+ix+' detail_list" value="'+ FormatNumberBy3(data[ i ][ pecahfield[ ix ] ],'.',',') +'" /></td>';
						}else{
							tabel += '<td ><input style="width:'+ pecahlebar[ix] +';text-align:'+ pecahalign[ix] +'" type="text" readonly="readonly" name="listgrid['+i+']['+ix+']" id="listgrid-'+i+'-'+ix+'" class="listgrid-'+ix+' detail_list" value="'+data[ i ][ pecahfield[ ix ] ].replace(/"/g,'&quot;')+'" /></td>';
						}
					}
				ix++;
				}
				tabel += '</tr>';
				i++;
				$('#baris-listgrid').val(Number($('#baris-listgrid').val())+1);
				// if (i==20){
				// break;
				// }
			}
		}
		tabel += '</tbody></table>';
		$( '#result' ).html( tabel ).fadeIn();
		$('#listgrid-0-0').focus();
		$('#listgrid-0-0').select();
	});
}	
loaddata('');
$('#listgrid-0-0').live("focus",function(){
	$( '#'+$( "#ref" ).val(), window.parent.document ).attr( 'oldvalue',"" );
});
$(".detail_list").live('keydown',function(e){
e.preventDefault();
	var pecah=$(this).attr('id').split('-');
	var xcol=pecah[2];
	var xrow=pecah[1];
	if (e.which===13){
		if ($( "#ref2" ).val()!==''){
			var pecahobj=$( "#ref2" ).val().split(',');
			var pecahpos=$( "#ref2from" ).val().split(',');
			var i=0;
			for (i=0;i<=pecahobj.length;i++)
			{
				$( '#'+pecahobj[i], window.parent.document ).val( $('#listgrid-'+ xrow +'-'+pecahpos[i]).val() );
			}
		}
		$( '#'+$( "#ref" ).val(), window.parent.document ).val( $('#listgrid-'+ xrow +'-0').val() );
		$( '#'+$( "#ref" ).val(), window.parent.document ).focus();
		$( '#'+$( "#ref" ).val(), window.parent.document ).attr( 'oldvalue',"" );
		$( '#'+$( "#ref" ).val(), window.parent.document ).attr( 'laststatus',"x" );
		parent.$.fancybox.close();
	}else if (e.which == 37 && e.ctrlKey && e.shiftKey) {
		e.preventDefault;
		$(this).width($(this).width()-10);
		var xwid=$(this).width();
		var ix=$(this).attr('id').split('-');
		var xclass="listgrid-"+ ix[2];
		$("."+ xclass).each( function(){
			$(this).width(xwid);
		});
		return false;
	}else if (e.which == 37 && e.ctrlKey) {
		e.preventDefault;
		$(this).width($(this).width()-2);
		var xwid=$(this).width();
		var ix=$(this).attr('id').split('-');
		var xclass="listgrid-"+ ix[2];
		$("."+ xclass).each( function(){
			$(this).width(xwid);
		});
		return false;
	}else if (e.which == 39 && e.ctrlKey && e.shiftKey) {
		e.preventDefault;
		$(this).width($(this).width()+10);
		var xwid=$(this).width();
		var ix=$(this).attr('id').split('-');
		var xclass="listgrid-"+ ix[2];
		$("."+ xclass).each( function(){
			$(this).width(xwid);
		});
		return false;
	}else if (e.which == 39 && e.ctrlKey) {
		e.preventDefault;
		$(this).width($(this).width()+2);
		var xwid=$(this).width();
		var ix=$(this).attr('id').split('-');
		var xclass="listgrid-"+ ix[2];
		$("."+ xclass).each( function(){
			$(this).width(xwid);
		});
		return false;
	}else if (e.which===37){
		if (xcol=='0'){
			setfocus2(Number(xrow),maxfield,'listgrid');
		}else{
			setfocus(Number(xrow),Number(xcol)-1,'listgrid');
		}
	}else if (e.which===38){
		setfocus2(Number(xrow),xcol,'listgrid');
	}else if (e.which===39){
		if (xcol==maxfield){
			setfocus(Number(xrow)+1,'0','listgrid');
		}else{
			setfocus(Number(xrow),(Number(xcol)+1)+'','listgrid');
		}
	}else if (e.which===40){
		setfocus(Number(xrow)+1,xcol,'listgrid');
	}else if (e.which===35){
		setfocus2(Number($('#baris-listgrid').val()),xcol,'listgrid');
	}else if (e.which===36){
		setfocus(0,xcol,'listgrid');
	}else if (e.which===33){
		if ((Number(xrow)-11)<0){
			setfocus(0,xcol,'listgrid');
		}else{
			setfocus2(Number(xrow)-11,xcol,'listgrid');
		}
	}else if (e.which===34){
		if ((Number(xrow)+11)>=Number($('#baris-listgrid').val())){
			setfocus2(Number($('#baris-listgrid').val()),xcol,'listgrid');
		}else{
			setfocus(Number(xrow)+11,xcol,'listgrid');
		}
	}else if (e.ctrlKey || e.shiftKey){		
	}else {
		$('#key').focus();
	}
	
});

	$( '#key' ).keyup( function( e ){
		if ( e.which === 13 ){
		e.preventDefault();
			loaddata($( '#key' ).val());
		} else if ( e.which === 27 ){
			parent.$.fancybox.close();
		}
	});

	$( '.result' ).live( 'dblclick', function(){
		if ($( "#ref2" ).val()!==''){
			var pecahobj=$( "#ref2" ).val().split(',');
			var pecahpos=$( "#ref2from" ).val().split(',');
			var i=0;
			for (i=0;i<=pecahobj.length;i++)
			{
				$( '#'+pecahobj[i], window.parent.document ).val( unescape( $( '#'+$( this ).attr( 'pos' )+pecahpos[i] ).val()) );
			}
		}
		$( '#'+$( "#ref" ).val(), window.parent.document ).val( unescape( $( this ).attr( 'id' ) ) );
		$( '#'+$( "#ref" ).val(), window.parent.document ).focus();
		$( '#'+$( "#ref" ).val(), window.parent.document ).attr( 'oldvalue',"" );
		$( '#'+$( "#ref" ).val(), window.parent.document ).attr( 'laststatus',"x" );
		parent.$.fancybox.close();
	});
});
</script>