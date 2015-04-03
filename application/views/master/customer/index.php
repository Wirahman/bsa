<div class="container">
	<h2 class="judul">Master Customer (Freight)</h2>
	<div id="alert"></div>
	<form class="form-horizontal">
		<fieldset>
			<div class="row">
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="cus_id">Customer ID :</label>
					<div class="controls">
						<div class="input-append"><input type="text" name="cus_id" id="cus_id" oldvalue="" browseobj="cari_kode_customer" style="width:50px" /><a style="display:none" class="add-on browse" id="cari_kode_customer" href="cari/ref/cus_id/tipe/customer" title="Klik untuk mencari Kode Customer"><i class="icon-search"></i></a></div>
					</div>
				</div>
				
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="type">Customer Type :</label>
					<div class="controls">
						<select name="type" id="type" class="type">
							<option value="-">Select Type</option>
							<option value="Domestic">Domestic</option>
							<option value="Overseas">Overseas</option>
							<option value="Affiliate">Affiliate</option>
<!--						
-->						</select>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="name">Company Name :</label>
					<div class="controls">
						<input type="text" name="name" id="name" />
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="control-group span12" style="height:15px" >
					<label class="control-label" for="npwp">N.P.W.P :</label>
					<div class="controls">
						<input type="text" name="npwp" id="npwp" />
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="address">Address :</label>
					<div class="controls">
						<input type="text" style="width:400px" name="address" id="address"/>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="address1"></label>
					<div class="controls">
						<input type="text" style="width:400px" name="address1" id="address1"/>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="address2"></label>
					<div class="controls">
						<input type="text" style="width:400px" name="address2" id="address2"/>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="address_tax">Address Tax:</label>
					<div class="controls">
						<input type="text" style="width:400px" name="address_tax" id="address_tax"/>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="address_tax1"></label>
					<div class="controls">
						<input type="text" style="width:400px" name="address_tax1" id="address_tax1"/>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="address_tax2"></label>
					<div class="controls">
						<input type="text" style="width:400px" name="address_tax2" id="address_tax2"/>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="country_code">Country :</label>
					<div class="controls">
						<div class="input-append">
							<input type="text" name="country_code" id="country_code" oldvalue="" browseobj="cari_country_code" style="width : 50px" />
							<input type="text" style="width:200px" readonly="readonly" name="country_name" id="country_name"  />
							<a style="display:none" class="add-on browse" id="cari_country_code" href="cari/ref/country_code/tipe/count" title="Klik untuk mencari Kode Country"><i class="icon-search"></i></a>				
						</div>
					</div>
				</div>
				
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="region_code">Region :</label>
					<div class="controls">
						<div class="input-append">
							<input type="text" name="region_code" id="region_code" oldvalue="" browseobj="cari_kode_region" style="width:50px" />
							<input type="text" style="width:150px" readonly="readonly" name="region_name" id="region_name" />
							<a style="display:none" class="add-on browse" id="cari_kode_region" href="cari/ref/region_code/tipe/reg" title="Klik untuk mencari Kode Region"><i class="icon-airrch"></i></a>				
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="city_code">City :</label>
					<div class="controls">
						<div class="input-append">
							<input type="text" name="city_code" id="city_code" oldvalue="" browseobj="cari_city_code" style="width : 50px" />
							<input type="text" style="width:200px" readonly="readonly" name="city_name" id="city_name" />
							<a style="display:none" class="add-on browse" id="cari_city_code" href="cari/ref/city_code/tipe/city" title="Klik untuk mencari Kode City"><i class="icon-search"></i></a>				
						</div>
					</div>
				</div>
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="zip">ZIP :</label>
					<div class="controls">
						<input type="text" name="zip" id="zip" />
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="phone">Phone :</label>
					<div class="controls">
						<input type="text" name="phone" id="phone" />
					</div>
				</div>
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="fax">Fax :</label>
					<div class="controls">
						<input type="text" name="fax" id="fax" />
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="email">E-Mail Address :</label>
					<div class="controls">
						<input type="text" style="width:400px" name="email" id="email" />
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="website">Web Sites :</label>
					<div class="controls">
						<input type="text" style="width:400px" name="website" id="website" />
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="contack_person">Contact Person :</label>
					<div class="controls">
						<input type="text" name="contack_person" id="contack_person" />
					</div>
				</div>
				<div class="control-group span6" style="height:15px">
					<label class="control-label" for="dept">Dept :</label>
					<div class="controls">
						<input type="text" name="dept" id="dept" />
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="control-group span12" style="height:15px">
					<label class="control-label" for="credit_term">Credit Term :</label>
					<div class="controls">
						<input type="text" name="credit_term" id="credit_term" /> Days
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="control-group span12" style="height:60px">
					<label class="control-label" for="classification">Customer Classification</label>
					
				  <div class="controls">

						<input name="classification1" id ="classification1" type="checkbox" value="1"  /> as Shipper
		
						<input name="classification2" id ="classification2" type="checkbox" value="1"  /> as Consignee
						
						<input name="classification3" id ="classification3" type="checkbox" value="1"  /> as Agent
				
						<input name="classification4" id ="classification4" type="checkbox" value="1"  /> as Shippingline
			
						<input name="classification5" id ="classification5" type="checkbox" value="1"  /> as Airline
					
						<input name="classification6" id ="classification6" type="checkbox" value="1"  /> as Co-Loader
					</div>
				</div>
			</div>
			
			<div class="form-actions btn-group" style="height:0px">
				<a href="#" class="btn browse cetak" style="top:-15px"><i class="icon-print"></i> Print</a>
				<?php if( in_array( 'create_customer', unserialize($capabilities) ) ){ ?>
					<a href="#" class="btn btn-primary simpan" style="top:-15px"><i class="icon-ok icon-white"></i> Save</a>
				<?php } ?>
				<?php if( in_array( 'update_customer', unserialize($capabilities) ) ){ ?>
					<a href="#" class="btn btn-primary ubah" style="top:-15px"><i class="icon-pencil icon-white"></i> Update</a>
				<?php } ?>
				<?php if( intval($role)!=0 ) { ?>
					<?php if( in_array( 'delete_customer', unserialize($capabilities) ) ){ ?>
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

function initialize(){
	initializex();
	$( '#cus_id' ).focus();
}
function initializex(){

	$( '.simpan, .batal' ).show();
	$( '.ubah, .hapus' ).hide();
	$('input:text, textarea').val('');
	$('input:checkbox').removeAttr('checked');
	$('#cari_kode_customer').tooltip();
	$('.alert').alert();
	$('.cetak').attr('href', 'cetak');
	show_user_name('');
}	
preventempty="cus_id,type,name,npwp,address,address1,address2,address_tax,address_tax1,address_tax2,country_code,region_code,city_code,zip,phone,fax,email,website,contack_person,dept,credit_term";
preventemptystatus="1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1";

$( document ).ready( function() {

	// Initialize
	
	initialize();
	
	// Retrieve data
	
	$( '#cus_id' ).bind( 'blur', function( ) {
		if($(this).val()!==$(this).attr('oldvalue')){
			$.post( 'db_read', { id: $( '#cus_id' ).val() }, function( result ){
				if( result === '' ){				
					var id = $( '#cus_id' ).val();
					initializex();
					$( '#cus_id' ).val( id );
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
					if (data[ 'shipper' ] == '1')
					{
						$('#classification1').prop('checked',true);
					}
					else
					{
						$('#classification1').prop('checked',false);
					}
					if (data[ 'consignee' ] == '1')
					{
						$('#classification2').prop('checked',true);
					}
					else
					{
						$('#classification2').prop('checked',false);
					}
					if (data[ 'agent' ] == '1')
					{
						$('#classification3').prop('checked',true);
					}
					else
					{
						$('#classification3').prop('checked',false);
					}
					if (data[ 'shippingline' ] == '1')
					{
						$('#classification4').prop('checked',true);
					}
					else
					{
						$('#classification4').prop('checked',false);
					}
					if (data[ 'airline' ] == '1')
					{
						$('#classification5').prop('checked',true);
					}
					else
					{
						$('#classification5').prop('checked',false);
					}
					if (data[ 'coloader' ] == '1')
					{
						$('#classification6').prop('checked',true);
					}
					else
					{
						$('#classification6').prop('checked',false);
					}
					
					
					$( "#cus_id" ).val( data[ 'cus_id' ] );
					$( "#type" ).val( data[ 'type' ] );
					$( "#name" ).val( data[ 'name' ] );
					$( "#npwp" ).val( data[ 'npwp' ] );
					$( "#address" ).val( data[ 'address' ] );
					$( "#address1" ).val( data[ 'address1' ] );
					$( "#address2" ).val( data[ 'address2' ] );
					$( "#address_tax" ).val( data[ 'address_tax' ] );
					$( "#address_tax1" ).val( data[ 'address_tax1' ] );
					$( "#address_tax2" ).val( data[ 'address_tax2' ] );
					$( "#country_code" ).val( data[ 'country_code' ] );
					$( "#country_name" ).val( data[ 'country_name' ] );
					$( "#region_code" ).val( data[ 'region_code' ] );
					$( "#region_name" ).val( data['region_name'] );
					$( "#city_code" ).val( data[ 'city_code' ] );
					$( "#city_name" ).val( data[ 'city_name' ] );
					$( "#zip" ).val( data[ 'zip' ] );
					$( "#phone" ).val( data[ 'phone' ] );
					$( "#fax" ).val( data[ 'fax' ] );
					$( "#email" ).val( data[ 'email' ] );
					$( "#website" ).val( data[ 'website' ] );
					$( "#contack_person" ).val( data[ 'contack_person' ] );
					$( "#dept" ).val( data[ 'dept' ] );
					$( "#credit_term" ).val( data[ 'credit_term' ] );
					$( "#classification" ).val( data[ 'classification' ] );
					$( '#credit_term' ).bind( 'keydown', function( e ) {
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
	
	$( '#cus_id' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			e.preventDefault();
			if( $( this ).val() === '' ){
				$(this).attr('oldvalue',$(this).val());
				$( '#cari_kode_customer' ).click();
			} else {
				$( '#type' ).focus();
			}
		}else if ( e.which === 39){
			e.preventDefault;
			$( '#type' ).focus();
		}else if ( e.which === 40 ){
			e.preventDefault;
			$( '#name' ).focus();
		}
	});
	
	$( '#type' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '#name' ).focus();
		}else if ( e.which === 37 ){
			e.preventDefault;
			$( '#cus_id' ).focus();
		}
	});
	
	$( '#name' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '#npwp' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#cus_id' ).focus();
		}else if ( e.which === 39){
			e.preventDefault;
			$( '#type' ).focus();
		}else if ( e.which === 40 ){
			e.preventDefault;
			$( '#npwp' ).focus();
		}
	});
	
	$( '#npwp' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '#address' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#name' ).focus();
		}else if ( e.which === 39){
			e.preventDefault;
			$( '#type' ).focus();
		}else if ( e.which === 40 ){
			e.preventDefault;
			$( '#address' ).focus();
		}
	});
	
	$( '#address' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '#address1' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#npwp' ).focus();
		}else if ( e.which === 39){
			e.preventDefault;
			$( '#type' ).focus();
		}else if ( e.which === 40 ){
			e.preventDefault;
			$( '#address1' ).focus();
		}
	});
	
	$( '#address1' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '#address2' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#address' ).focus();
		}else if ( e.which === 39){
			e.preventDefault;
			$( '#type' ).focus();
		}else if ( e.which === 40 ){
			e.preventDefault;
			$( '#address2' ).focus();
		}
	});
	
	$( '#address2' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '#address_tax' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#address1' ).focus();
		}else if ( e.which === 39){
			e.preventDefault;
			$( '#type' ).focus();
		}else if ( e.which === 40 ){
			e.preventDefault;
			$( '#address_tax' ).focus();
		}
	});
	
	$( '#address_tax' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '#address_tax1' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#address2' ).focus();
		}else if ( e.which === 39){
			e.preventDefault;
			$( '#type' ).focus();
		}else if ( e.which === 40 ){
			e.preventDefault;
			$( '#address_tax1' ).focus();
		}
	});
	
	$( '#address_tax1' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '#address_tax2' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#address_tax' ).focus();
		}else if ( e.which === 39){
			e.preventDefault;
			$( '#type' ).focus();
		}else if ( e.which === 40 ){
			e.preventDefault;
			$( '#address_tax2' ).focus();
		}
	});
	
	$( '#address_tax2' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '#country_code' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#address_tax1' ).focus();
		}else if ( e.which === 39){
			e.preventDefault;
			$( '#type' ).focus();
		}else if ( e.which === 40 ){
			e.preventDefault;
			$( '#country_code' ).focus();
		}
	});
	
	$( '#country_code' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '#region_code' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#address_tax2' ).focus();
		}else if ( e.which === 39){
			e.preventDefault;
			$( '#region_code' ).focus();
		}else if ( e.which === 40 ){
			e.preventDefault;
			$( '#city_code' ).focus();
		}
	});
	
	$( '#region_code' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '#city_code' ).focus();
		}else if ( e.which === 37 ){
			e.preventDefault;
			$( '#country_code' ).focus();
		}else if ( e.which === 38){
			e.preventDefault;
			$( '#type' ).focus();
		}else if ( e.which === 40 ){
			e.preventDefault;
			$( '#zip' ).focus();
		}
	});
	
	$( '#city_code' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '#zip' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#country_code' ).focus();
		}else if ( e.which === 39){
			e.preventDefault;
			$( '#zip' ).focus();
		}else if ( e.which === 40 ){
			e.preventDefault;
			$( '#phone' ).focus();
		}
	});
	
	$( '#zip' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '#phone' ).focus();
		}else if ( e.which === 37 ){
			e.preventDefault;
			$( '#city_code' ).focus();
		}else if ( e.which === 38){
			e.preventDefault;
			$( '#region_code' ).focus();
		}else if ( e.which === 40 ){
			e.preventDefault;
			$( '#fax' ).focus();
		}
	});
	
	$( '#phone' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '#fax' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#city_code' ).focus();
		}else if ( e.which === 39){
			e.preventDefault;
			$( '#fax' ).focus();
		}else if ( e.which === 40 ){
			e.preventDefault;
			$( '#email' ).focus();
		}
	});
	
	$( '#fax' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '#email' ).focus();
		}else if ( e.which === 37 ){
			e.preventDefault;
			$( '#phone' ).focus();
		}else if ( e.which === 38){
			e.preventDefault;
			$( '#zip' ).focus();
		}else if ( e.which === 40 ){
			e.preventDefault;
			$( '#dept' ).focus();
		}
	});
	
	$( '#email' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '#website' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#phone' ).focus();
		}else if ( e.which === 39 ){
			e.preventDefault;
			$( '#fax' ).focus();
		}else if ( e.which === 40 ){
			e.preventDefault;
			$( '#website' ).focus();
		}
	});
	
	$( '#website' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '#contack_person' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#email' ).focus();
		}else if ( e.which === 39 ){
			e.preventDefault;
			$( '#dept' ).focus();
		}else if ( e.which === 40 ){
			e.preventDefault;
			$( '#contack_person' ).focus();
		}
	});
	
	$( '#contack_person' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '#dept' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#website' ).focus();
		}else if ( e.which === 39 ){
			e.preventDefault;
			$( '#dept' ).focus();
		}else if ( e.which === 40 ){
			e.preventDefault;
			$( '#credit_term' ).focus();
		}
	});
	
	$( '#dept' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '#credit_term' ).focus();
		}else if ( e.which === 37 ){
			e.preventDefault;
			$( '#contack_person' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#fax' ).focus();
		}else if ( e.which === 40 ){
			e.preventDefault;
			$( '#credit_term' ).focus();
		}
	});
					
	$( '#credit_term' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '.simpan' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#contack_person' ).focus();
		}else if ( e.which === 39 ){
			e.preventDefault;
			$( '#dept' ).focus();
		}else if ( e.which === 40 ){
			e.preventDefault;
			$( '#classification1' ).focus();
		}
	});
	
	$( '#classification1' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '.simpan' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#credit_term' ).focus();
		}else if ( e.which === 39 ){
			e.preventDefault;
			$( '#classification2' ).focus();
		}else if ( e.which === 40 ){
			e.preventDefault;
			$( '.cetak' ).focus();
		}
	});
	
	$( '#classification2' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '.simpan' ).focus();
		}else if ( e.which === 37 ){
			e.preventDefault;
			$( '#classification1' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#credit_term' ).focus();
		}else if ( e.which === 39 ){
			e.preventDefault;
			$( '#classification3' ).focus();
		}else if ( e.which === 40 ){
			e.preventDefault;
			$( '.cetak' ).focus();
		}
	});
	
	$( '#classification3' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '.simpan' ).focus();
		}else if ( e.which === 37 ){
			e.preventDefault;
			$( '#classification2' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#credit_term' ).focus();
		}else if ( e.which === 39 ){
			e.preventDefault;
			$( '#classification4' ).focus();
		}else if ( e.which === 40 ){
			e.preventDefault;
			$( '.cetak' ).focus();
		}
	});
	
	$( '#classification4' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '.simpan' ).focus();
		}else if ( e.which === 37 ){
			e.preventDefault;
			$( '#classification3' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#credit_term' ).focus();
		}else if ( e.which === 39 ){
			e.preventDefault;
			$( '#classification5' ).focus();
		}else if ( e.which === 40 ){
			e.preventDefault;
			$( '.cetak' ).focus();
		}
	});
	
	$( '#classification5' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '.simpan' ).focus();
		}else if ( e.which === 37 ){
			e.preventDefault;
			$( '#classification4' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#credit_term' ).focus();
		}else if ( e.which === 39 ){
			e.preventDefault;
			$( '#classification6' ).focus();
		}else if ( e.which === 40 ){
			e.preventDefault;
			$( '.cetak' ).focus();
		}
	});
	
	$( '#classification6' ).bind( 'keydown', function( e ) {
		if ( e.which === 13 ){
			$( '.simpan' ).focus();
		}else if ( e.which === 37 ){
			e.preventDefault;
			$( '#classification5' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#credit_term' ).focus();
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
			$( '#classification1' ).focus();
		}
	});
	
	$( '.simpan' ).bind( 'keydown', function( e ) {
		if ( e.which === 37 ){
			$( '.cetak' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#classification1' ).focus();
		}else if ( e.which === 39 ){
			$( '.batal' ).focus();
		}
	});
	
	$( '.ubah' ).bind( 'keydown', function( e ) {
		if ( e.which === 37 ){
			$( '.cetak' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#classification1' ).focus();
		}else if ( e.which === 39 ){
			$( '.hapus' ).focus();
		}
	});
	
	$( '.hapus' ).bind( 'keydown', function( e ) {
		if ( e.which === 37 ){
			$( '.ubah' ).focus();
		}else if ( e.which === 38 ){
			e.preventDefault;
			$( '#classification1' ).focus();
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
			$( '#classification1' ).focus();
		}
	});
	$( '#country_code' ).bind( 'blur', function( ) {
		if ($( '#country_code' ).val()===''){
			$( '#country_name' ).val( "" );
		}else{
			if($(this).val()!==$(this).attr('oldvalue')){
				$.post( 'db_read_kepala_country', { id: $( '#country_code' ).val() }, function( result ){
					if( result === '' ){
						$( '#country_code' ).val( "" );
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Country Code Not Found.</div>';
						$('#alert').html( message );
						$( '#country_code' ).focus();
					} else {
						$( '#country_name' ).val( result );
					}
				});
			}
		}
	});
	
	$( '#city_code' ).bind( 'blur', function( ) {
		if ($( '#city_code' ).val()===''){
			$( '#city_name' ).val( "" );
		}else{
			if($(this).val()!==$(this).attr('oldvalue')){
				$.post( 'db_read_kepala_city', { id: $( '#city_code' ).val() }, function( result ){
					if( result === '' ){
						$( '#city_code' ).val( "" );
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> City Code Not Found.</div>';
						$('#alert').html( message );
						$( '#city_code' ).focus();
					} else {
						$( '#city_name' ).val( result );
					}
				});
			}
		}
	});
	
	$( '#region_code' ).bind( 'blur', function( ) {
		if ($( '#region_code' ).val()===''){
			$( '#region_name' ).val( "" );
		}else{
			if($(this).val()!==$(this).attr('oldvalue')){
				$.post( 'db_read_kepala_region', { id: $( '#region_code' ).val() }, function( result ){
					if( result === '' ){
						$( '#region_code' ).val( "" );
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong>Region Code Not Found.</div>';
						$('#alert').html( message );
						$( '#region_code' ).focus();
					} else {
						$( '#region_name' ).val( result );
					}
				});
			}
		}
	});
	
	// Button Behavior
	
	$( '.simpan' ).click( function(){
	
		if( $( '#cus_id' ).val() !== '' ){
			$.post( 'db_create', $( 'form' ).serialize(), function( result ){
				success=unserialize(result);
				if( success['status'] ==='Error' ){
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Create Data '+$( '#cus_id' ).val()+' Failed. '+ success['ket'] +'</div>';
					$('#alert').html( message );					
				}else if( success['status'] ){
					var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Create Data '+$( '#cus_id' ).val()+' Complete.</div>';
					$('#alert').html( message );
					initialize();
				} else {
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Create Data '+$( '#cus_id' ).val()+' Failed.</div>';
					$('#alert').html( message );
				}
			});
		} else {
			var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Data Required.</div>';
			$('#alert').html( message );
		}
	});
	$( '.ubah' ).click( function(){
		if( $( '#cus_id' ).val() !== '' ){
			$.post( 'db_update', $( 'form' ).serialize(), function( result ){
				success=unserialize(result);
				if( success['status'] ==='Error' ){
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Update Data '+$( '#cus_id' ).val()+' Failed. '+ success['ket'] +'</div>';
					$('#alert').html( message );					
				}else if( success['status'] ){
					var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Update Data '+$( '#cus_id' ).val()+' Complete.</div>';
					$('#alert').html( message );
					initialize();
				} else {
					var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Update Data '+$( '#cus_id' ).val()+' Failed.</div>';
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
			if( $( '#cus_id' ).val() !== '' ){
				$.post( 'db_delete', { id: $( '#cus_id' ).val() }, function( result ){
					success=unserialize(result);
					if( success['status'] ==='Error' ){
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Delete Data '+$( '#cus_id' ).val()+' Failed. '+ success['ket'] +'</div>';
						$('#alert').html( message );					
					}else if( success['status'] ){
						var message = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Delete Data '+$( '#cus_id' ).val()+' Complete.</div>';
						$('#alert').html( message );
						initialize();
					} else {
						var message = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Delete Data '+$( '#cus_id' ).val()+' Failed.</div>';
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
		if ($('#cus_id').val()===''){
			window.close();
		}else{
			if( confirm( 'Are You Sure Cancel This Transaction?' ) ){
				initialize();
			}
		}
	});

});
</script>
