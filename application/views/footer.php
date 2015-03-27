<div class="container keteranganindex">
<div><label class="keteranganindex keteranganindexawal" style="margin-top:-60px;height:10px">F5) (Double Click) Browse Data</label></div>
<div style="height:13px"><label class="keteranganindex" style="height:13px">F3) Delete Detail List</label></div>
<div style="height:13px"><label class="keteranganindex" style="height:13px">F2) Goto Save Or Edit Button</label></div>
<div style="height:13px"><label class="keteranganindex" style="height:13px">F1) Edit Current Coloumn</label></div>
		<div class="pull-right keteranganindex" style="margin-top:-60px">&copy; 2015 <a href="//dutamegah.co.id/" target="_blank">Migent Software</a></div>
</div>
<div style="height:13px"><label class="keteranganindex2" style="height:13px">F4) Find Data</label></div>
<script>
// $(".dropdown-toggle").bind("mouseover",function(){
	// $(this).click();
// });

function validatedate(inputText)  
  {  
  //Test which seperator is used '/' or '-'  
  var opera1 = inputText.split('/');  
  var opera2 = inputText.split('-');  
  lopera1 = opera1.length;  
  lopera2 = opera2.length;  
  // Extract the string into month, date and year  
	if (lopera1>1){  
		var pdate = inputText.split('/');  
	}else if (lopera2>1){  
		var pdate = inputText.split('-');  
	}
  var dd = parseInt(pdate[0]);  
  var mm  = parseInt(pdate[1]);  
  var yy = parseInt(pdate[2]);  
  // Create list of days of a month [assume there is no leap year by default]  
  var ListofDays = [31,28,31,30,31,30,31,31,30,31,30,31];  
	if (mm==1 || mm>2){  
		if (dd>ListofDays[mm-1]){  
			return false;  
		}  
	}else if (mm==2){  
		var lyear = false;  
		if ( (!(yy % 4) && yy % 100) || !(yy % 400)){  
			lyear = true;  
		}  
		if ((lyear==false) && (dd>=29)){  
			return false;  
		}  
		if ((lyear==true) && (dd>29)){  
			return false;  
		}  
	} 
		return true;
  }  


$("#ui-datepicker-div,.ui-datepicker, .ui-widget, .ui-widget-content").live("focus",function(){
	passobj=true;
});
$("#ui-datepicker-div,.ui-datepicker, .ui-widget, .ui-widget-content").live("blur",function(){
	passobj=false;
});
	
$( 'input:text' ).bind( 'keydown', function( e ) {
	if (e.which===kodebrowse || e.which===13){
		if ($(this).attr('browseobj')!=undefined){
			$(this).val($(this).val().toUpperCase());
		}
	}
});
$( 'input:text' ).bind( 'keypress', function( e ) {
// 35 = # 37 = % 42= *
	if (e.which===32 || e.which===34 || e.which===39 ){//|| e.which===35 || e.which===37 || e.which===42){
		if ($(this).attr('browseobj')!=undefined){
			return false;
		}else{
			if (e.which===39){
				return false;
			}
		}
	}
});

 $( 'input:text' ).live( 'keydown', function( e ) {
	if (e.which===kodebrowse || e.which===13){
		if ($(this).attr('browseobj')!=undefined){
			$(this).val($(this).val().toUpperCase());
		}
	}
});

$( 'input:text' ).live( 'keypress', function( e ) {
// 35 = # 37 = % 42= *
	if (e.which===32 || e.which===34 || e.which===39 ){//|| e.which===35 || e.which===37 || e.which===42){
		if ($(this).attr('browseobj')!=undefined){
			return false;
		}else{
			if (e.which===39){
				return false;
			}
		}
	}
});

$( 'input:text' ).bind( 'click', function( ) {
	if ($(this).attr('browseobj')!=undefined){
		$(this).val($(this).val().toUpperCase());
	}
});
$( 'input:text' ).live( 'click', function( ) {
	if ($(this).attr('browseobj')!=undefined){
		$(this).val($(this).val().toUpperCase());
	}
});

$( 'input:text' ).bind( 'blur', function( ) {
	if ($(this).attr('oldvalue')!==$(this).val()){
		$(this).attr("laststatus","")
	}
});
$( 'input:text' ).live( 'blur', function( ) {
	if ($(this).attr('oldvalue')!==$(this).val()){
		$(this).attr("laststatus","")
	}
});
$( 'input:text' ).bind( 'dblclick', function( ) {
	if ($(this).attr('browseobj')!=undefined){
		if (!$(this).is("[readonly]")){
			$(this).attr('oldvalue',$(this).val());
			$("#"+$(this).attr('browseobj')).click();
		}
	}
});

$( 'input:text, textarea' ).bind( 'keydown', function( e ) {
	if (e.which === kodebrowse) {
		if ($(this).attr('browseobj')!=undefined){
			if (!$(this).is("[readonly]")){
				$(this).attr('oldvalue',$(this).val());
				$("#"+$(this).attr('browseobj')).click();
			}
		}
	}else if (e.which === kodeeditkolom) {
		var textBox = document.getElementById($( this ).attr( 'id' ));
		textBox.selectionStart=textBox.value.length;
	}
});

$( 'input:text' ).bind( 'keyup', function( e ) {	
	if ($(this).attr('oldvalue')!=undefined){
		if ($(this).attr('oldvalue')!==$(this).val()){
			$(this).attr('oldvalue','');
			$(this).attr('laststatus','x');
		}
	}
});
$( 'input:text' ).live( 'dblclick', function() {
	if ($(this).attr('browseobj')!=undefined){
		if (!$(this).is("[readonly]")){
			$(this).attr('oldvalue',$(this).val());
			$("#"+$(this).attr('browseobj')).click();
		}
	}
});
$( 'input:text' ).live( 'keydown', function( e ) {
	if (e.which === kodebrowse) {
		if ($(this).attr('browseobj')!=undefined){
			if (!$(this).is("[readonly]")){
				$(this).attr('oldvalue',$(this).val());
				$("#"+$(this).attr('browseobj')).click();
			}
		}
	}else if (e.which === kodeeditkolom) {
		var textBox = document.getElementById($( this ).attr( 'id' ));
		textBox.selectionStart=textBox.value.length;
	}
});
$( 'input:text' ).live( 'keyup', function( e ) {
	if ($(this).attr('oldvalue')!=undefined){
		if ($(this).attr('oldvalue')!==$(this).val()){
			$(this).attr('oldvalue','');
			$(this).attr('laststatus','x');
		}
	}
});

$('.tanggalx').bind('keydown',function(e){	
	if(e.which==116){
		$(this).datepicker('show');	
	}
});
$('.tanggalx').bind('focus',function(){
	$(this).datepicker({
		dateFormat: 'dd-mm-yy',
		changeMonth:true,
		changeYear:true
	});
	$(this).datepicker("show");
});

$('.tanggal').bind('keydown',function(e){	
	if (e.which==13){
		if ($(this).val()==''){
			var d = new Date();
			var tgl = d.getDate();
			if( tgl < 10 ) tgl = "0" + tgl;
			var bln = d.getMonth() + 1;
			if( bln < 10 ) bln = "0" + bln;
			var thn = d.getFullYear();
			var tanggal = tgl+"-"+bln+"-"+thn;
			$(this).val(tanggal);
		}
		$(this).datepicker('hide');	
	}else if(e.which==115){
		$(this).datepicker('show');	
	}
});
$('.tanggal').bind('focus',function(){
	$(".tanggal").each( function(){
		if (!$(this).is('[readonly]')){
			$(this).datepicker({
				dateFormat: 'dd-mm-yy',
				changeMonth:true,
				changeYear:true,
				onSelect: function(dateText, inst) { 
					$(this).focus();
				}
			});
		}else{
			$(this).datepicker("destroy");
		}
	});
});
$('.tanggal').bind('blur',function(){
	if ($(this).val()!==''){
		var dateformat = /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/;  
		if($(this).val().match(dateformat)){  
			var xdt=validatedate($(this).val());
			if (!xdt) {
				$(this).val('');
				var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Format tanggal salah.</div>';
				$('#alert').html( message );						
			}
		}else{
			$(this).val('');
			var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Peringatan!</strong> Format tanggal salah.</div>';
			$('#alert').html( message );						
		}
	}
});

$('.tanggal').live('keydown',function(e){	
	if (e.which==13){
		if ($(this).val()==''){
			var d = new Date();
			var tgl = d.getDate();
			if( tgl < 10 ) tgl = "0" + tgl;
			var bln = d.getMonth() + 1;
			if( bln < 10 ) bln = "0" + bln;
			var thn = d.getFullYear();
			var tanggal = tgl+"-"+bln+"-"+thn;
			$(this).val(tanggal);
		}
		$(this).datepicker('hide');	
	}else if(e.which==115){
		$(this).datepicker('show');	
	}
});
$('.tanggal').live('focus',function(){
	$(".tanggal").each( function(){
		if (!$(this).is('[readonly]')){
			$(this).datepicker({
				dateFormat: 'dd-mm-yy',
				changeMonth:true,
				changeYear:true,
				onSelect: function(dateText, inst) { 
					$(this).focus();
				}
			});
		}else{
			$(this).datepicker("destroy");
		}
	});
});
$('.tanggal').live('blur',function(){
	if ($(this).val()!==''){
		var dateformat = /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/;  
		if($(this).val().match(dateformat)){  
			var xdt=validatedate($(this).val());
			if (!xdt) {
				$(this).val('');
				var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Wrong Format Number.</div>';
				$('#alert').html( message );						
			}
		}else{
			$(this).val('');
			var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Warning!</strong> Wrong Format Number.</div>';
			$('#alert').html( message );						
		}
	}
});

$('.browse').tooltip();
function stringchar(huruf,banyak){
	var kata="";
	var i=0;
	for ( i = 0; i < banyak; i++){
	   kata=kata + huruf;
	}
	return kata;
}
function upone(lasttext,numberonly){
var chrdoom="0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
var lama=lasttext.toUpperCase().split("");
var hasil="1" + stringchar("0",lasttext.length);
var posnya=0;
	for( $o = (lama.length-1); $o >=0; $o-- ){
		posnya=chrdoom.indexOf(lama[$o].toUpperCase())+1;
		if (numberonly==true){
			if(posnya<10){
				hasil = Left(lasttext,$o) + Mid(chrdoom,posnya+1,1) + stringchar("0",lama.length-Number($o)-1);
				break;
			}
		}else{
			if(posnya<36){
				hasil = Left(lasttext,$o) + Mid(chrdoom,posnya+1,1) + stringchar("0",lama.length-Number($o)-1);
				break;
			}
		}
	}


		return hasil;
}

function sudah_ada(tipe,kode,cari){
var pecahkode=kode.split(':;:');
var pecahcari=cari.split(':;:');
var i=0;
var ok=false;
	var jumlah = 0 ;
	for( $o = 0; $o < $('#baris-'+tipe).val(); $o++ ){
		var xobj = document.getElementById(tipe+'-'+( Number( $o ) )+'-'+pecahkode[0]);
		if (xobj != null){
			ok=false;
			for (i=0;i<pecahkode.length;i++)
			{
				if($( '#'+tipe+'-'+( Number( $o ) )+'-'+pecahkode[i] ).val().toUpperCase()!== pecahcari[i].toUpperCase() ){
					ok=true;
					break;
				}
			}
		
			if(!ok){
				jumlah++;
			}
		}
	}
	if (jumlah >1){
		return true;
	}else{
		return false;
	}
}

function jmlbrs(kode,tipe){
var jumlahk5 = 0 ;
for( $o = 0; $o < $('#baris-'+tipe+'').val(); $o++ ){
	var xobj = document.getElementById(''+tipe+'-'+( Number( $o ) )+'-'+kode);
	if (xobj != null){
		jumlahk5++;
	}
}
return jumlahk5;
}
function setfocus(mulai,kode,tipe){
var jumlahk5 = 0 ;
for( $o = 0; $o < $('#baris-'+tipe+'').val(); $o++ ){
	var xobj = document.getElementById(''+tipe+'-'+( Number( $o ) )+'-'+kode);
	if (xobj != null){
		if ((Number($o)>=Number(mulai)) && Number(jumlahk5)===0){
		jumlahk5++;
			$( '#'+tipe+'-'+( Number( $o ) )+'-'+kode ).focus();
			$( '#'+tipe+'-'+( Number( $o ) )+'-'+kode ).select();
		}
	}
}
}

function setfocus2(mulai,kode,tipe){

var jumlahk5 = 0 ;
for( $o = $('#baris-'+tipe).val(); $o >= 0; $o-=1 ){
	var xobj = document.getElementById(''+tipe+'-'+( Number( $o ) )+'-'+kode);
	if (xobj != null){
		if ((Number($o)<Number(mulai)) && Number(jumlahk5)===0){
		jumlahk5++;
			$( '#'+tipe+'-'+( Number( $o ) )+'-'+kode ).focus();
			$( '#'+tipe+'-'+( Number( $o ) )+'-'+kode ).select();
			break;
		}
	}
}
}

function getselectedtext($idvar)
{
  var textComponent = document.getElementById($idvar);
  var selectedText;
  // IE version
  if (document.selection != undefined)
  {
    textComponent.focus();
    var sel = document.selection.createRange();
    selectedText = sel.text;
  }
  // Mozilla version
  else if (textComponent.selectionStart != undefined)
  {
    var startPos = textComponent.selectionStart;
    var endPos = textComponent.selectionEnd;
    selectedText = textComponent.value.substring(startPos, endPos)
  }
  return (selectedText);
}

$( document ).ready( function() {
 
	$( ".batal" ).attr("name",'batal');
	$( "#kode_dev, #kode_devisi" ).attr("class",'kode_dev');
	var address = window.location.href;
	var path = address.split( "/" );	
	var xobj = document.getElementById(path[ 3 ]);
	if (xobj !== null){
		$( ".pilih" ).text("You Currently Open >>" + $( "."+path[ 3 ] ).text());
	}else{
		$( ".pilih" ).text("");
	}
	$("input[readonly]").attr("tabindex","-1");
	$("input[maxlength!='20' && maxlength<'100']").attr("maxlength","100");
	$("input[oldvalue]").attr("maxlength","6");
	$('.btn-group').attr("style","top:-20px;height:0px;width:"+(Number(screen.width)-263)+'px');
	$('.form-horizontal').attr("style","margin-top:-10px");
	$('.judul').attr("style","margin-top:-20px;height:40px");
	$('#submit, #register').attr("style","top:-15px");
	$('.simpan').attr("style",$('.simpan').attr("style") +';'+"top:-15px");
	$('.cetak').attr("style",$('.cetak').attr("style") +';'+"top:-15px");
	$('.ubah').attr("style",$('.ubah').attr("style") +';'+"top:-15px");
	$('.hapus').attr("style",$('.hapus').attr("style") +';'+"top:-15px");
	$('.batal').attr("style","top:-15px");
	// $('.simpan, .cetak, .ubah, .hapus, .batal').attr("style","top:-15px");
	
});	

function FormatNumberBy3(num, decpoint, sep) {

  // check for missing parameters and use defaults if so
  if (arguments.length == 2) {
    sep = ",";
  }
  if (arguments.length == 1) {
    sep = ",";
    decpoint = ".";
  }
  // need a string for operations
  num = num.toString();
  // separate the whole number and the fraction if possible
  a = num.split(decpoint);
  x = a[0]; // decimal
  y = a[1]; // fraction
  z = "";

  if (typeof(x) != "undefined") {
    // reverse the digits. regexp works from left to right.
    for (i=x.length-1;i>=0;i--)
      z += x.charAt(i);
    // add seperators. but undo the trailing one, if there
    z = z.replace(/(\d{3})/g, "$1" + sep);
    if (z.slice(-sep.length) == sep)
      z = z.slice(0, -sep.length);
    x = "";
    // reverse again to get back the number
    for (i=z.length-1;i>=0;i--)
      x += z.charAt(i);
    // add the fraction back in, if it was there
	if (Number(x).length===1){
		x=Number(x);
	}
    if (typeof(y) != "undefined" && y.length > 0){
	  if ((Left(y,2)).length==1){
	  x += decpoint + y + "0";
	  }else{
		x += decpoint + Left(y,2);
	  }
	}else{
      x += decpoint + "00";
	}
  }
  return x;
}
function Left(str, n){
	if (n <= 0){
		return "";
	}else if (n > String(str).length){
		return str;
	}else{
		return String(str).substring(0,n);
	}
}
function Right(str, n){
	if (n <= 0){
		return "";
	}else if (n > String(str).length){
		return str;
	}else {
		var iLen = String(str).length;
		return String(str).substring(iLen, iLen - n);
	}
}

function Mid(str,s, n){
	if (n <= 0){
		return "";
	}else if (s > String(str).length){
		return "";
	}else if (Number(n)+Number(s) > String(str).length){
		var iLen = String(str).length;
		return String(str).substring(Number(s)-1, Number(iLen)	);
	}else {
		var iLen = String(str).length;
		return String(str).substring(Number(s)-1, Number(s)-1+Number(n));
	}
}
$('input:text, textarea, select').live('focus',function(){
$(this).select();
	if ($(this).attr('oldvalue')!=undefined){
		if ($(this).attr('laststatus')==undefined){
			$(this).attr('laststatus','');
		}
		if ($(this).attr('laststatus')==''){
			$(this).attr('oldvalue',$(this).val());
		}else{
			if ($(this).attr('oldvalue')==""){
				$(this).attr("laststatus","")
			}
			$(this).attr("oldvalue","");
		}
	}
	if ($(this).attr('bataschar')!=undefined){
		$(this).attr("maxlength",$(this).attr('bataschar'));
	}else if ($(this).attr('oldvalue')!=undefined){
		$(this).attr("maxlength","20");
	}
});
$('input:text, textarea, select').bind('focus',function(){
if ($(this).attr('bataschar')!=undefined){
	$(this).attr("maxlength",$(this).attr('bataschar'));
}else if ($(this).attr('oldvalue')!=undefined){
	$(this).attr("maxlength","20");
}
$(this).select();
if ($(this).attr('oldvalue')!=undefined){
	if ($(this).attr('laststatus')==undefined){
		$(this).attr('laststatus','');
	}
	if ($(this).attr('laststatus')==''){
		$(this).attr('oldvalue',$(this).val());
	}else{
		if ($(this).attr('oldvalue')==""){
			$(this).attr("laststatus","")
		}
		$(this).attr("oldvalue","");
	}
}
	$(this).select();
	if (preventempty!="" && !passobj){
	var i=0;
	if (bypassprevent!=''){
		if (($(this).attr('class')!==null) && ($(this).attr('class')!==undefined)){
			var pecah=$(this).attr('class').split(' ');
			for (;i<=pecah.length;i++)
			{
				if (bypassprevent.indexOf(pecah[i])>=0){
					var ok=false;
					$('input, textarea, select').each( function(){
						if (($(this).attr('class')!==null) && ($(this).attr('class')!==undefined)){
							var pecah=$(this).attr('class').split(' ');
							i=0;
							for (;i<=pecah.length;i++)
							{
								if (bypassprevent.indexOf(pecah[i])>=0){
									ok=true;
								}
							}
						}
					
					if (!ok){
						if (($(this).val()=='') && $(this).is(":visible")){
							$(this).focus();
							ok=true;
						}
					}
					});
					return ok;
				}
			}
		}
	}
		var pecahurut=preventempty.split(',');
		var pecahurut2=preventemptystatus.split(',');
		i=0;
		for (;i<=pecahurut.length;i++)
		{
			if ($(this).attr('id')==pecahurut[i]){
				lastfocusobj= pecahurut[i];
				break;
			}
			if ($('#'+ pecahurut[i]).val()==='' && (pecahurut2[i]=='1')){
				$('#'+ pecahurut[i]).focus();
				lastfocusobj= pecahurut[i];
				break;
			}
		}
	}
});

$('.currency, .numeric, .number').bind('focus blur',function(){
	if ($(this).val()==''){
		$(this).val('0');
		$(this).select();
	}
});

$('.currency, .numeric, .number').live('focus blur',function(){
	if ($(this).val()==''){
		$(this).val('0');
		$(this).select();
	}
});

$(document).bind('mouseover, mousemove',function(e){
	if ($(e.target).attr('browseobj')!=undefined){
		$(e.target).attr("title","F5 atau double klik untuk pencarian");
	}
});
$('input:text, textarea, select').live('focus',function(){
	if (preventempty!="" && !passobj){
	var i=0;
	if (bypassprevent!=''){
		if (($(this).attr('class')!==null) && ($(this).attr('class')!==undefined)){
			var pecah=$(this).attr('class').split(' ');
			for (;i<=pecah.length;i++)
			{
				if (bypassprevent.indexOf(pecah[i])>=0){
					var ok=false;
					$('input, textarea, select').each( function(){
						if (($(this).attr('class')!==null) && ($(this).attr('class')!==undefined)){
							var pecah=$(this).attr('class').split(' ');
							i=0;
							for (;i<=pecah.length;i++)
							{
								if (bypassprevent.indexOf(pecah[i])>=0){
									ok=true;
								}
							}
						}
					
					if (!ok){
						if (($(this).val()=='') && $(this).is(":visible")){
							$(this).focus();
							ok=true;
						}
					}
					});
					return ok;
				}
			}
		}
	}
		var pecahurut=preventempty.split(',');
		var pecahurut2=preventemptystatus.split(',');
		i=0;
		for (;i<=pecahurut.length;i++)
		{
			if ($(this).attr('id')==pecahurut[i]){
				lastfocusobj= pecahurut[i];
				break;
			}
			if ($('#'+ pecahurut[i]).val()==='' && (pecahurut2[i]=='1')){
				$('#'+ pecahurut[i]).focus();
				lastfocusobj= pecahurut[i];
				break;
			}
		}
	}
});

$('input:text, textarea').bind('keydown',function(e){
	if (((e.keyCode || event.which || event.charCode || 0)===kodetombolsimpanedit) || ((e.keyCode || event.which || event.charCode || 0)===37) || ((e.keyCode || event.which || event.charCode || 0)===38) || ((e.keyCode || event.which || event.charCode || 0)===39) || ((e.keyCode || event.which || event.charCode || 0)===40)){
		if ($(this).data("datepicker")!== null && $(this).data("datepicker")!== undefined){
			$(this).datepicker('hide');	
		}
	}else if(e.which==13){
		e.preventDefault;
	}
});
$('input:text, textarea').live('keydown',function(e){
	if (((e.keyCode || event.which || event.charCode || 0)===kodetombolsimpanedit) || ((e.keyCode || event.which || event.charCode || 0)===37) || ((e.keyCode || event.which || event.charCode || 0)===38) || ((e.keyCode || event.which || event.charCode || 0)===39) || ((e.keyCode || event.which || event.charCode || 0)===40)){
		if ($(this).data("datepicker")!== null && $(this).data("datepicker")!== undefined){
			$(this).datepicker('hide');	
		}
	}else if(e.which==13){
		e.preventDefault;
	}
});
$('.batal').bind('keypress',function(e){
	if (((e.keyCode || event.which || event.charCode || 0)===27)){
		e.preventDefault();
		$('.batal').click();
	}
});
document.oncontextmenu = function(){return false;};
$(document).bind('keydown',function(e){
	if ((e.keyCode || event.which || event.charCode || 0)===27){
		var xobj = document.getElementById('ref');
		if (xobj != null && xobj!='undefined'){
			e.preventDefault();
			$( '#'+$( "#ref" ).val(), window.parent.document ).focus();
			lastfocusobj=$( '#'+$( "#ref" ).val(), window.parent.document ).attr('id');
			parent.$.fancybox.close();
		}else{
			var xobj = document.getElementsByClassName('batal');
			if ((e.target.name!=null) && (e.target.name!='')){
				if (xobj != null){
					if($('.batal').is(":visible")){
						$('.batal').focus();
					}else{
						
					}
				}
			}else if ($(e.target).attr('class')!='btn batal'){
				if (xobj != null){
					if($('.batal').is(":visible")){
						$('.batal').focus();
					}else{
						
					}
				}
			}
		}
	}else if ((e.keyCode || event.which || event.charCode || 0)===kodecari){
		var xobj = document.getElementById('key');
		if (xobj !== null){
			$('#key').focus();
		}
	}else if ((e.keyCode || event.which || event.charCode || 0)===13){
	}else if ((e.keyCode || event.which || event.charCode || 0)===kodetombolsimpanedit){
	e.preventDefault();
		xx=kodetombolsimpanedit;
		var xobj = document.getElementsByClassName('simpan');
		if (xobj != null){
			if($('.simpan').is(":visible")){
				$('.simpan').focus();
			}else{
				var xobj1 = document.getElementsByClassName('ubah');
				if (xobj1 != null){
					if($('.ubah').is(":visible")){
						$('.ubah').focus();
					}else{
						var xobj2 = document.getElementsByClassName('cetak');
						if (xobj2 != null){
							if($('.cetak').is(":visible")){
								$('.cetak').focus();
							}else{
								$('.batal').focus();
							}
						}
					}
				}else{
					var xobj2 = document.getElementsByClassName('cetak');
					if (xobj2 != null){
						if($('.cetak').is(":visible")){
							$('.cetak').focus();
						}else{
							$('.batal').focus();
						}
					}
				}
			}
		}else{
			var xobj1 = document.getElementsByClassName('ubah');
			if (xobj1 != null){
				if($('.ubah').is(":visible")){
					$('.ubah').focus();
				}else{
					var xobj2 = document.getElementsByClassName('cetak');
					if (xobj2 != null){
						if($('.cetak').is(":visible")){
							$('.cetak').focus();
						}else{
							$('.batal').focus();
						}
					}
				}
			}else{
				var xobj2 = document.getElementsByClassName('cetak');
				if (xobj2 != null){
					if($('.cetak').is(":visible")){
						$('.cetak').focus();
					}else{
						$('.batal').focus();
					}
				}
			}
		}
	}else if (((e.keyCode || event.which || event.charCode || 0)===112) || ((e.keyCode || event.which || event.charCode || 0)===116) || ((e.keyCode || event.which || event.charCode || 0)===117)){
		e.preventDefault();
	}
});

	$( '.browse' ).fancybox({
		maxWidth	: screen.width,
		maxHeight	: screen.height,
		fitToView	: false,
		width		: '100%',
		height		: '100%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none',
		type		: 'iframe'
	});
	var xobj = document.getElementById('key');
	if (xobj !== null){
		$('.keteranganindex').remove();
	}else{
		$('.keteranganindex2').remove();
	}

	var address = window.location.href;
	var path = address.split( "/" );
    var xxx=address.toUpperCase();
    var n = xxx.indexOf("LOCALHOST");
	if (n>=0){
		if ((path[ 4 ]==='fasilitas') || (path[ 4 ]==='auth') || (path[ 4 ]==='')){
			$('.keteranganindex').remove();
		}
	}else{
		if ((path[ 3 ]==='fasilitas') || (path[ 3 ]==='auth') || (path[ 3 ]==='')){
			$('.keteranganindex').remove();
		}
	}
$(document).bind('click mousedown dblclick contextmenu',function(e){
	if (e.button!=0){
       e.preventDefault()
       e.stopImmediatePropagation()
	}else{
		var namaclick="";
		if (e.target.name!=null){
			namaclick = e.target.name
		}
		if(e.target.nodeName=='A'){
			if (($('a[name="'+namaclick+'"]').attr('class')!==undefined) && ($('a[name="'+namaclick+'"]').attr('class')=='btn batal')){
				return ;
			}
		}
		if(e.target.nodeName=='HTML'){
			return ;
		}
	
	var i=0;
	if (bypassprevent!=''){
		if (($('input[name="'+namaclick+'"]').attr('class')!==undefined) && ($('input[name="'+namaclick+'"]').attr('class')!==null)){
			var pecah=$('input[name="'+namaclick+'"]').attr('class').split(' ');
			for (;i<=pecah.length;i++)
			{
				if (bypassprevent.indexOf(pecah[i])>=0){
					var ok=false;
					$('input, textarea, select').each( function(){
						if (($(this).attr('class')!==null) && ($(this).attr('class')!==undefined)){
							var pecah=$(this).attr('class').split(' ');
							i=0;
							for (;i<=pecah.length;i++)
							{
								if (bypassprevent.indexOf(pecah[i])>=0){
									ok=true;
								}
							}
						}
					
					if (!ok){
						if (($(this).val()=='') && $(this).is(":visible")){
							$(this).focus();
							ok=true;
						}
					}
					});
					return ok;
				}
			}
		}
	}	
		if (preventempty!="" && !passobj){
			var pecahurut=preventempty.split(',');
			var pecahurut2=preventemptystatus.split(',');
			for (i=0;i<=pecahurut.length;i++)
			{
				if (namaclick==pecahurut[i]){
					lastfocusobj= pecahurut[i];
					break;
				}
				if ($('#'+ pecahurut[i]).val()==='' && (pecahurut2[i]=='1')){
					$('#'+ pecahurut[i]).focus();
					lastfocusobj= pecahurut[i];
					break;
				}
			}
		}else{
			// $('input:visible:enabled:first').focus();		
		}
	}
});
	var xobj2 = document.getElementById('listgrid');
	if (xobj2 != null){
		var lebarnya=  $(window).width();
	    var tingginya=  $(window).height();
		$('#listgrid').attr("style",'height:'+(Number(tingginya)-190)+'px;width:'+(Number(lebarnya)-30)+'px');
	}
$(document).bind('focus',function(e){
	var xobj2 = document.getElementById('listgrid');
	if (xobj2 != null){
		var lebarnya=  $(window).width();
	    var tingginya=  $(window).height();
		$('#listgrid').attr("style",'height:'+(Number(tingginya)-190)+'px;width:'+(Number(lebarnya)-30)+'px');
	}

	var namaclick="";
	if(e.target.nodeName=='HTML'){
		return ;
	}
	if (e.target.name!=null){
		namaclick = e.target.name
	if(e.target.nodeName=='A'){
		if (($('a[name="'+namaclick+'"]').attr('class')!==undefined) && ($('a[name="'+namaclick+'"]').attr('class')=='btn batal')){
			return ;
		}
	}
	var i=0;
	
	if (bypassprevent!=''){
		if (($('input[name="'+namaclick+'"]').attr('class')!==undefined) && ($('input[name="'+namaclick+'"]').attr('class')!==null)){
			var pecah=$('input[name="'+namaclick+'"]').attr('class').split(' ');
			for (;i<=pecah.length;i++)
			{
				if (bypassprevent.indexOf(pecah[i])>=0){
					var ok=false;
					$('input, textarea, select').each( function(){
						if (($(this).attr('class')!==null) && ($(this).attr('class')!==undefined)){
							var pecah=$(this).attr('class').split(' ');
							i=0;
							for (;i<=pecah.length;i++)
							{
								if (bypassprevent.indexOf(pecah[i])>=0){
									ok=true;
								}
							}
						}
					
					if (!ok){
						if (($(this).val()=='') && $(this).is(":visible")){
							$(this).focus();
							ok=true;
						}
					}
					});
					return ok;
				}
			}
		}
	}	
	
	if (bypassprevent!=''){
		if (($('input[name="'+namaclick+'"]').attr('class')!==undefined)){
			var pecah=$('input[name="'+namaclick+'"]').attr('class').split(' ');
			for (;i<=pecah.length;i++)
			{
				if (bypassprevent==pecah[i]){
					return true;
				}
			}
		}
	}
		if (preventempty!="" && !passobj){
			var pecahurut=preventempty.split(',');
			var pecahurut2=preventemptystatus.split(',');
			i=0;
			for (;i<=pecahurut.length;i++)
			{
				if (namaclick==pecahurut[i]){
					lastfocusobj= pecahurut[i];
					break;
				}
				if ($('#'+ pecahurut[i]).val()==='' || (pecahurut2[i]=='1')){
					$('#'+ pecahurut[i]).focus();
					lastfocusobj= pecahurut[i];
					break;
				}
			}
		}else{
		var ok=false
			$('input, textarea, select').each( function(){
			if (!ok){
				if (($(this).val()=='') && $(this).is(":visible")){
					$(this).focus();
					ok=true;
				}
			}
			});
		}
	}
});
</script>	
</body>
</html>