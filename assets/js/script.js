// Move from x to y with default value
function move_from_to( dari, ke, value ){
	$( dari ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( value === 'required' ){
				if( $( dari ).val() != '' ){
					$( ke ).focus();
				}
			} else {
				if( $( dari ).val() === '' ){
					$( dari ).val( value );
				}
				$( ke ).focus();
			}
		}
	});
}

// Ajax setup
$.ajaxSetup({
	// async: false
	// , beforeSend: function() { 
	beforeSend: function() { 
		$('body').addClass("loading"); 
	}
	, complete: function() { 
		$('body').removeClass("loading"); 
	}    
	, error: function(){
		if( confirm( "Error has been occured. Reload page?" ) ){
			window.location.reload();
		}
	}
});

function show_user_name(nama) {
	if (nama==""){
		var message = "<B>&nbsp &nbsp &nbsp</B>";
	}else{
		var message = "<B> Last Update Username -> "+ nama.charAt(0).toUpperCase() + nama.slice(1) +"&nbsp &nbsp &nbsp</B>";
	}
	$('#user_name').html(message);
}
// Show alert
function show_alert(success, sentence){
	var message = '';
	if( success ){
		for( var i = 0; i < sentence.length; i++ ){
			message += '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> '+sentence[i]+'</div>';
		}
	} else {
		for( var i = 0; i < sentence.length; i++ ){
			message += '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> '+sentence[i]+'</div>';
		}
	}
	$('#alert').html( message );
}

function format_date( d, format = 'dd-mm-yyyy' ){
	if (d!=null && d!=''){
		tanggal = d.split( "-" );
		if( format === 'dd-mm-yyyy' ){
			tgl = tanggal[ 2 ];
			bln = tanggal[ 1 ];
			thn = tanggal[ 0 ];
		} else {
			return '';
		}
	}else{
		return '';
	}
	return tgl + "-" + bln + "-" + thn;
}
// Format while typing & warn on decimals entered, 2 decimal places
$( '.currency' ).bind("blur",function() {
	var rounded=2;
	if ($(this).attr("rounded")!==undefined){
		rounded=Number($(this).attr("rounded"));
	}
	$(this).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: rounded });
})
.live('keyup', function(e) {
	var e = window.event || e;
	var keyUnicode = e.charCode || e.keyCode;
	if (e !== undefined) {
		switch (keyUnicode) {
			case 16: break; // Shift
			case 17: break; // Ctrl
			case 18: break; // Alt
			// case 27: this.value = ''; break; // Esc: clear entry
			case 27: break; // Esc: clear entry
			case 35: break; // End
			case 36: break; // Home
			case 37: break; // cursor left
			case 38: break; // cursor up
			case 39: break; // cursor right
			case 40: break; // cursor down
			case 78: break; // N (Opera 9.63+ maps the "." from the 11111111 key section to the "N" key too!) (See: http://unixpapa.com/js/key.html search for ". Del")
			case 110: break; // . number block (Opera 9.63+ maps the "." from the number block to the "N" key (78) !!!)
			case 190: break; // .
			default: $(this).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: -1, eventOnDecimalsEntered: true });
		}
	}
})
.live('blur', function(e) {
	var rounded=2;
	if ($(this).attr("rounded")!==undefined){
		rounded=Number($(this).attr("rounded"));
	}
	$(this).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: rounded });
})

$( '.numeric' ).live( 'keydown', function(event){
	// Allow: backspace, delete, tab, escape, and enter
	if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 || 
		 // Allow: Ctrl+A
		(event.keyCode == 65 && event.ctrlKey === true) || 
		 // Allow: home, end, left, right
		(event.keyCode >= 35 && event.keyCode <= 39)) {
			 // let it happen, don't do anything
			 return;
	}
	else {
		// Ensure that it is a number and stop the keypress
		if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) {
			event.preventDefault(); 
		}   
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
