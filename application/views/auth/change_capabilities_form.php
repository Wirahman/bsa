<?php
$id = ( isset( $_POST['id'] ) ) ? $_POST['id'] : '';
if (empty($id)){
redirect('fasilitas/user');
}
$form = array(
	'class' => 'form-horizontal'
);
$label = array(
	'class' => 'control-label'
);
$role = array(
	'name'	=> 'role',
	'class'	=> 'role',
	'id'	=> 'role',
	'value' => set_value('role'),
	'onkeydown' => 'moveto(event)',
);

if (intval($user_role)==1){
	$role_list = array(
		1  => 'Member',
	);
}elseif (intval($user_role)==10){
	$role_list = array(
		1  => 'Member',
	);
}elseif (intval($user_role)==20){
	$role_list = array(
		1  => 'Member',
		10    => 'Admin',
	);
}elseif (intval($user_role)==30){
	$role_list = array(
		1  => 'Member',
		10    => 'Admin',
		20    => 'Supervisor',
	);
}elseif (intval($user_role)==40){
	$role_list = array(
		1  => 'Member',
		10    => 'Admin',
		20    => 'Supervisor',
		30    => 'Manager',
	);
}elseif (intval($user_role)==50){
	$role_list = array(
		1  => 'Member',
		10    => 'Admin',
		20    => 'Supervisor',
		30    => 'Manager',
		40    => 'Director',
	);
}else{
	$role_list = array(
		1  => 'Member',
		10    => 'Admin',
		20    => 'Supervisor',
		30    => 'Manager',
		40    => 'Director',
		99   => 'Super Admin',
	);
}
$change = array(
		'name' => 'change',
		'class' => 'btn btn-primary',
			'id' => 'change',
		'value' => 'Update Capabilities'
);
if( isset( $capabilities ) ){
	$user_cap = $capabilities;
}
$cap = unserialize( $user_cap );
?>
<div class="container">
	<p><a href="<?php echo base_url('fasilitas/user'); ?>" class="btn">&lt;&lt; Kembali ke halaman sebelumnya</a></p>
	<?php echo ( isset( $message ) ) ? $message : ''; ?>
	<?php echo form_open( $this->uri->uri_string() ); ?>
	<input type="hidden" name="id" value="<?php echo $id; ?>"/>
	<div class="control-group">
		<?php if ((intval($user_role)==99) || (intval($user_role)==0)){ echo form_label('Role', $role['id'], $label); ?>
		<div class="controls">
			<?php echo form_dropdown($role['name'], $role_list); ?>
			<?php echo form_error($role['name']);} ?>
		</div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>Module</th>
				<th>Create</th>
				<th>Read</th>
				<th>Update</th>
				<th>Delete</th>
				<th>Select All</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td colspan="5"><strong>Master</strong></td>
				<td><input type="checkbox" class="all" id="master" /></td>
			</tr>
			<tr>
				<td>Account</td>
				<td><input type="checkbox" name="capabilities[]" value="create_account" <?php echo ( in_array( 'create_account', $cap ) ) ? 'checked' : ''; ?> class="create master account" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_account" <?php echo ( in_array( 'read_account', $cap ) ) ? 'checked' : ''; ?> class="read master account" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_account" <?php echo ( in_array( 'update_account', $cap ) ) ? 'checked' : ''; ?>  class="update master account" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_account" <?php echo ( in_array( 'delete_account', $cap ) ) ? 'checked' : ''; ?> class="delete master account" /></td>
				<td><input type="checkbox" class="all" id="account" /></td>
			</tr>
			<tr>
				<td>Batasan</td>
				<td><input type="checkbox" name="capabilities[]" value="create_batasan" <?php echo ( in_array( 'create_batasan', $cap ) ) ? 'checked' : ''; ?> class="create master batasan" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_batasan" <?php echo ( in_array( 'read_batasan', $cap ) ) ? 'checked' : ''; ?> class="read master batasan" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_batasan" <?php echo ( in_array( 'update_batasan', $cap ) ) ? 'checked' : ''; ?> class="update master batasan" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_batasan" <?php echo ( in_array( 'delete_batasan', $cap ) ) ? 'checked' : ''; ?> class="delete master batasan" /></td>
				<td><input type="checkbox" class="all" id="batasan" /></td>
			</tr>
			<tr>
				<td>Stock</td>
				<td><input type="checkbox" name="capabilities[]" value="create_stock" <?php echo ( in_array( 'create_stock', $cap ) ) ? 'checked' : ''; ?> class="create master stock" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_stock" <?php echo ( in_array( 'read_stock', $cap ) ) ? 'checked' : ''; ?> class="read master stock" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_stock" <?php echo ( in_array( 'update_stock', $cap ) ) ? 'checked' : ''; ?>  class="update master stock" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_stock" <?php echo ( in_array( 'delete_stock', $cap ) ) ? 'checked' : ''; ?> class="delete master stock" /></td>
				<td><input type="checkbox" class="all" id="stock" /></td>
			</tr>
			<tr>
				<td>Gudang</td>
				<td><input type="checkbox" name="capabilities[]" value="create_gudang" <?php echo ( in_array( 'create_gudang', $cap ) ) ? 'checked' : ''; ?> class="create master gudang" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_gudang" <?php echo ( in_array( 'read_gudang', $cap ) ) ? 'checked' : ''; ?> class="read master gudang" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_gudang" <?php echo ( in_array( 'update_gudang', $cap ) ) ? 'checked' : ''; ?>  class="update master gudang" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_gudang" <?php echo ( in_array( 'delete_gudang', $cap ) ) ? 'checked' : ''; ?> class="delete master gudang" /></td>
				<td><input type="checkbox" class="all" id="gudang" /></td>
			</tr>

			<tr>
				<td>Group</td>
				<td><input type="checkbox" name="capabilities[]" value="create_group" <?php echo ( in_array( 'create_group', $cap ) ) ? 'checked' : ''; ?> class="create master group" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_group" <?php echo ( in_array( 'read_group', $cap ) ) ? 'checked' : ''; ?> class="read master group" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_group" <?php echo ( in_array( 'update_group', $cap ) ) ? 'checked' : ''; ?>  class="update master group" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_group" <?php echo ( in_array( 'delete_group', $cap ) ) ? 'checked' : ''; ?> class="delete master group" /></td>
				<td><input type="checkbox" class="all" id="group" /></td>
			</tr>			
			
			<tr>
				<td>Airline</td>
				<td><input type="checkbox" name="capabilities[]" value="create_airline" <?php echo ( in_array( 'create_airline', $cap ) ) ? 'checked' : ''; ?> class="create master airline" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_airline" <?php echo ( in_array( 'read_airline', $cap ) ) ? 'checked' : ''; ?> class="read master airline" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_airline" <?php echo ( in_array( 'update_airline', $cap ) ) ? 'checked' : ''; ?>  class="update master airline" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_airline" <?php echo ( in_array( 'delete_airline', $cap ) ) ? 'checked' : ''; ?> class="delete master airline" /></td>
				<td><input type="checkbox" class="all" id="airline" /></td>
			</tr>

			<tr>
				<td>Airport</td>
				<td><input type="checkbox" name="capabilities[]" value="create_airport" <?php echo ( in_array( 'create_airport', $cap ) ) ? 'checked' : ''; ?> class="create master airport" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_airport" <?php echo ( in_array( 'read_airport', $cap ) ) ? 'checked' : ''; ?> class="read master airport" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_airport" <?php echo ( in_array( 'update_airport', $cap ) ) ? 'checked' : ''; ?>  class="update master airport" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_airport" <?php echo ( in_array( 'delete_airport', $cap ) ) ? 'checked' : ''; ?> class="delete master airport" /></td>
				<td><input type="checkbox" class="all" id="airport" /></td>
			</tr>
						
			<tr>
				<td>Buku Tamu</td>
				<td><input type="checkbox" name="capabilities[]" value="create_guest_book" <?php echo ( in_array( 'create_guest_book', $cap ) ) ? 'checked' : ''; ?> class="create master guest_book" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_guest_book" <?php echo ( in_array( 'read_guest_book', $cap ) ) ? 'checked' : ''; ?> class="read master guest_book" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_guest_book" <?php echo ( in_array( 'update_guest_book', $cap ) ) ? 'checked' : ''; ?>  class="update master guest_book" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_guest_book" <?php echo ( in_array( 'delete_guest_book', $cap ) ) ? 'checked' : ''; ?> class="delete master guest_book" /></td>
				<td><input type="checkbox" class="all" id="guest_book" /></td>
			</tr>
			
			<tr>
				<td>Currency</td>
				<td><input type="checkbox" name="capabilities[]" value="create_currency" <?php echo ( in_array( 'create_currency', $cap ) ) ? 'checked' : ''; ?> class="create master currency" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_currency" <?php echo ( in_array( 'read_currency', $cap ) ) ? 'checked' : ''; ?> class="read master currency" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_currency" <?php echo ( in_array( 'update_currency', $cap ) ) ? 'checked' : ''; ?>  class="update master currency" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_currency" <?php echo ( in_array( 'delete_currency', $cap ) ) ? 'checked' : ''; ?> class="delete master currency" /></td>
				<td><input type="checkbox" class="all" id="currency" /></td>
			</tr>
			
			<tr>
				<td>Customer</td>
				<td><input type="checkbox" name="capabilities[]" value="create_customer" <?php echo ( in_array( 'create_customer', $cap ) ) ? 'checked' : ''; ?> class="create master customer" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_customer" <?php echo ( in_array( 'read_customer', $cap ) ) ? 'checked' : ''; ?> class="read master customer" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_customer" <?php echo ( in_array( 'update_customer', $cap ) ) ? 'checked' : ''; ?>  class="update master customer" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_customer" <?php echo ( in_array( 'delete_customer', $cap ) ) ? 'checked' : ''; ?> class="delete master customer" /></td>
				<td><input type="checkbox" class="all" id="customer" /></td>
			</tr>
			
			<tr>
				<td>City</td>
				<td><input type="checkbox" name="capabilities[]" value="create_city" <?php echo ( in_array( 'create_city', $cap ) ) ? 'checked' : ''; ?> class="create master city" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_city" <?php echo ( in_array( 'read_city', $cap ) ) ? 'checked' : ''; ?> class="read master city" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_city" <?php echo ( in_array( 'update_city', $cap ) ) ? 'checked' : ''; ?>  class="update master city" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_city" <?php echo ( in_array( 'delete_city', $cap ) ) ? 'checked' : ''; ?> class="delete master city" /></td>
				<td><input type="checkbox" class="all" id="city" /></td>
			</tr>
			
			<tr>
				<td>Commodity</td>
				<td><input type="checkbox" name="capabilities[]" value="create_commodity" <?php echo ( in_array( 'create_commodity', $cap ) ) ? 'checked' : ''; ?> class="create master commodity" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_commodity" <?php echo ( in_array( 'read_commodity', $cap ) ) ? 'checked' : ''; ?> class="read master commodity" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_commodity" <?php echo ( in_array( 'update_commodity', $cap ) ) ? 'checked' : ''; ?>  class="update master commodity" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_commodity" <?php echo ( in_array( 'delete_commodity', $cap ) ) ? 'checked' : ''; ?> class="delete master commodity" /></td>
				<td><input type="checkbox" class="all" id="commodity" /></td>
			</tr>
			
			
			<tr>
				<td>Commodity_Class</td>
				<td><input type="checkbox" name="capabilities[]" value="create_commodity_class" <?php echo ( in_array( 'create_commodity_class', $cap ) ) ? 'checked' : ''; ?> class="create master commodity_class" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_commodity_class" <?php echo ( in_array( 'read_commodity_class', $cap ) ) ? 'checked' : ''; ?> class="read master commodity_class" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_commodity_class" <?php echo ( in_array( 'update_commodity_class', $cap ) ) ? 'checked' : ''; ?>  class="update master commodity_class" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_commodity_class" <?php echo ( in_array( 'delete_commodity_class', $cap ) ) ? 'checked' : ''; ?> class="delete master commodity_class" /></td>
				<td><input type="checkbox" class="all" id="commodity_class" /></td>
			</tr>
			
			<tr>
				<td>Company</td>
				<td><input type="checkbox" name="capabilities[]" value="create_company" <?php echo ( in_array( 'create_company', $cap ) ) ? 'checked' : ''; ?> class="create master company" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_company" <?php echo ( in_array( 'read_company', $cap ) ) ? 'checked' : ''; ?> class="read master company" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_company" <?php echo ( in_array( 'update_company', $cap ) ) ? 'checked' : ''; ?>  class="update master company" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_company" <?php echo ( in_array( 'delete_company', $cap ) ) ? 'checked' : ''; ?> class="delete master company" /></td>
				<td><input type="checkbox" class="all" id="company" /></td>
			</tr>
			
			<tr>
				<td>Country</td>
				<td><input type="checkbox" name="capabilities[]" value="create_country" <?php echo ( in_array( 'create_country', $cap ) ) ? 'checked' : ''; ?> class="create master country" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_country" <?php echo ( in_array( 'read_country', $cap ) ) ? 'checked' : ''; ?> class="read master country" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_country" <?php echo ( in_array( 'update_country', $cap ) ) ? 'checked' : ''; ?>  class="update master country" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_country" <?php echo ( in_array( 'delete_country', $cap ) ) ? 'checked' : ''; ?> class="delete master country" /></td>
				<td><input type="checkbox" class="all" id="country" /></td>
			</tr>
			
			<tr>
				<td>Devisi</td>
				<td><input type="checkbox" name="capabilities[]" value="create_devisi" <?php echo ( in_array( 'create_devisi', $cap ) ) ? 'checked' : ''; ?> class="create master devisi" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_devisi" <?php echo ( in_array( 'read_devisi', $cap ) ) ? 'checked' : ''; ?> class="read master devisi" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_devisi" <?php echo ( in_array( 'update_devisi', $cap ) ) ? 'checked' : ''; ?>  class="update master devisi" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_devisi" <?php echo ( in_array( 'delete_devisi', $cap ) ) ? 'checked' : ''; ?> class="delete master devisi" /></td>
				<td><input type="checkbox" class="all" id="devisi" /></td>
			</tr>
			
			<tr>
				<td>Freight Term</td>
				<td><input type="checkbox" name="capabilities[]" value="create_freight_term" <?php echo ( in_array( 'create_freight_term', $cap ) ) ? 'checked' : ''; ?> class="create master freight_term" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_freight_term" <?php echo ( in_array( 'read_freight_term', $cap ) ) ? 'checked' : ''; ?> class="read master freight_term" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_freight_term" <?php echo ( in_array( 'update_freight_term', $cap ) ) ? 'checked' : ''; ?>  class="update master freight_term" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_freight_term" <?php echo ( in_array( 'delete_freight_term', $cap ) ) ? 'checked' : ''; ?> class="delete master freight_term" /></td>
				<td><input type="checkbox" class="all" id="freight_term" /></td>
			</tr>

			<tr>
				<td>Komponen Freight</td>
				<td><input type="checkbox" name="capabilities[]" value="create_charges" <?php echo ( in_array( 'create_charges', $cap ) ) ? 'checked' : ''; ?> class="create master charges" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_charges" <?php echo ( in_array( 'read_charges', $cap ) ) ? 'checked' : ''; ?> class="read master charges" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_charges" <?php echo ( in_array( 'update_charges', $cap ) ) ? 'checked' : ''; ?>  class="update master charges" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_charges" <?php echo ( in_array( 'delete_charges', $cap ) ) ? 'checked' : ''; ?> class="delete master charges" /></td>
				<td><input type="checkbox" class="all" id="charges" /></td>
			</tr>
			
			<tr>
				<td>Publish Rate(Air)</td>
				<td><input type="checkbox" name="capabilities[]" value="create_publish_rate_air" <?php echo ( in_array( 'create_publish_rate_air', $cap ) ) ? 'checked' : ''; ?> class="create master publish_rate_air" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_publish_rate_air" <?php echo ( in_array( 'read_publish_rate_air', $cap ) ) ? 'checked' : ''; ?> class="read master publish_rate_air" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_publish_rate_air" <?php echo ( in_array( 'update_publish_rate_air', $cap ) ) ? 'checked' : ''; ?> class="update master publish_rate_air" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_publish_rate_air" <?php echo ( in_array( 'delete_publish_rate_air', $cap ) ) ? 'checked' : ''; ?> class="delete master publish_rate_air" /></td>
				<td><input type="checkbox" class="all" id="publish_rate_air" /></td>
			</tr>
			
			<tr>
				<td>Publish Rate(Sea)</td>
				<td><input type="checkbox" name="capabilities[]" value="create_publish_rate_sea" <?php echo ( in_array( 'create_publish_rate_sea', $cap ) ) ? 'checked' : ''; ?> class="create master publish_rate_sea" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_publish_rate_sea" <?php echo ( in_array( 'read_publish_rate_sea', $cap ) ) ? 'checked' : ''; ?> class="read master publish_rate_sea" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_publish_rate_sea" <?php echo ( in_array( 'update_publish_rate_sea', $cap ) ) ? 'checked' : ''; ?> class="update master publish_rate_sea" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_publish_rate_sea" <?php echo ( in_array( 'delete_publish_rate_sea', $cap ) ) ? 'checked' : ''; ?> class="delete master publish_rate_sea" /></td>
				<td><input type="checkbox" class="all" id="publish_rate_sea" /></td>
			</tr>
			
			<tr>
				<td>Region</td>
				<td><input type="checkbox" name="capabilities[]" value="create_region" <?php echo ( in_array( 'create_region', $cap ) ) ? 'checked' : ''; ?> class="create master region" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_region" <?php echo ( in_array( 'read_region', $cap ) ) ? 'checked' : ''; ?> class="read master region" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_region" <?php echo ( in_array( 'update_region', $cap ) ) ? 'checked' : ''; ?>  class="update master region" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_region" <?php echo ( in_array( 'delete_region', $cap ) ) ? 'checked' : ''; ?> class="delete master region" /></td>
				<td><input type="checkbox" class="all" id="region" /></td>
			</tr>
			
			<tr>
				<td>Sales</td>
				<td><input type="checkbox" name="capabilities[]" value="create_sales" <?php echo ( in_array( 'create_sales', $cap ) ) ? 'checked' : ''; ?> class="create master sales" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_sales" <?php echo ( in_array( 'read_sales', $cap ) ) ? 'checked' : ''; ?> class="read master sales" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_sales" <?php echo ( in_array( 'update_sales', $cap ) ) ? 'checked' : ''; ?>  class="update master sales" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_sales" <?php echo ( in_array( 'delete_sales', $cap ) ) ? 'checked' : ''; ?> class="delete master sales" /></td>
				<td><input type="checkbox" class="all" id="sales" /></td>
			</tr>
			
			<tr>
				<td>Sales Bonus</td>
				<td><input type="checkbox" name="capabilities[]" value="create_sales_bon" <?php echo ( in_array( 'create_sales_bon', $cap ) ) ? 'checked' : ''; ?> class="create master sales bonus" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_sales_bon" <?php echo ( in_array( 'read_sales_bon', $cap ) ) ? 'checked' : ''; ?> class="read master sales bonus" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_sales_bon" <?php echo ( in_array( 'update_sales_bon', $cap ) ) ? 'checked' : ''; ?>  class="update master sales bonus" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_sales_bon" <?php echo ( in_array( 'delete_sales_bon', $cap ) ) ? 'checked' : ''; ?> class="delete master sales bonus" /></td>
				<td><input type="checkbox" class="all" id="sales_bon" /></td>
			</tr>
			
			<tr>
				<td>Sales Commision</td>
				<td><input type="checkbox" name="capabilities[]" value="create_sales_com" <?php echo ( in_array( 'create_sales_com', $cap ) ) ? 'checked' : ''; ?> class="create master sales commision" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_sales_com" <?php echo ( in_array( 'read_sales_com', $cap ) ) ? 'checked' : ''; ?> class="read master sales commision" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_sales_com" <?php echo ( in_array( 'update_sales_com', $cap ) ) ? 'checked' : ''; ?>  class="update master sales commision" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_sales_com" <?php echo ( in_array( 'delete_sales_com', $cap ) ) ? 'checked' : ''; ?> class="delete master sales commision" /></td>
				<td><input type="checkbox" class="all" id="sales_com" /></td>
			</tr>
			
			<tr>
				<td>Seaport</td>
				<td><input type="checkbox" name="capabilities[]" value="create_seaport" <?php echo ( in_array( 'create_seaport', $cap ) ) ? 'checked' : ''; ?> class="create master seaport" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_seaport" <?php echo ( in_array( 'read_seaport', $cap ) ) ? 'checked' : ''; ?> class="read master seaport" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_seaport" <?php echo ( in_array( 'update_seaport', $cap ) ) ? 'checked' : ''; ?>  class="update master seaport" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_seaport" <?php echo ( in_array( 'delete_seaport', $cap ) ) ? 'checked' : ''; ?> class="delete master seaport" /></td>
				<td><input type="checkbox" class="all" id="seaport" /></td>
			</tr>
			
			<tr>
				<td>Signature</td>
				<td><input type="checkbox" name="capabilities[]" value="create_signature" <?php echo ( in_array( 'create_signature', $cap ) ) ? 'checked' : ''; ?> class="create master signature" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_signature" <?php echo ( in_array( 'read_signature', $cap ) ) ? 'checked' : ''; ?> class="read master signature" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_signature" <?php echo ( in_array( 'update_signature', $cap ) ) ? 'checked' : ''; ?>  class="update master signature" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_signature" <?php echo ( in_array( 'delete_signature', $cap ) ) ? 'checked' : ''; ?> class="delete master signature" /></td>
				<td><input type="checkbox" class="all" id="signature" /></td>
			</tr>
			
			<tr>
				<td>Selling Rate(Air)</td>
				<td><input type="checkbox" name="capabilities[]" value="create_selling_rate_air" <?php echo ( in_array( 'create_selling_rate_air', $cap ) ) ? 'checked' : ''; ?> class="create master selling_rate_air" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_selling_rate_air" <?php echo ( in_array( 'read_selling_rate_air', $cap ) ) ? 'checked' : ''; ?> class="read master selling_rate_air" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_selling_rate_air" <?php echo ( in_array( 'update_selling_rate_air', $cap ) ) ? 'checked' : ''; ?> class="update master selling_rate_air" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_selling_rate_air" <?php echo ( in_array( 'delete_selling_rate_air', $cap ) ) ? 'checked' : ''; ?> class="delete master selling_rate_air" /></td>
				<td><input type="checkbox" class="all" id="selling_rate_air" /></td>
			</tr>
			
			<tr>
				<td>Selling Rate(Sea)</td>
				<td><input type="checkbox" name="capabilities[]" value="create_selling_rate_sea" <?php echo ( in_array( 'create_selling_rate_sea', $cap ) ) ? 'checked' : ''; ?> class="create master selling_rate_sea" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_selling_rate_sea" <?php echo ( in_array( 'read_selling_rate_sea', $cap ) ) ? 'checked' : ''; ?> class="read master selling_rate_sea" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_selling_rate_sea" <?php echo ( in_array( 'update_selling_rate_sea', $cap ) ) ? 'checked' : ''; ?> class="update master selling_rate_sea" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_selling_rate_sea" <?php echo ( in_array( 'delete_selling_rate_sea', $cap ) ) ? 'checked' : ''; ?> class="delete master selling_rate_sea" /></td>
				<td><input type="checkbox" class="all" id="selling_rate_sea" /></td>
			</tr>
			
			<tr>
				<td>Unit</td>
				<td><input type="checkbox" name="capabilities[]" value="create_unit" <?php echo ( in_array( 'create_unit', $cap ) ) ? 'checked' : ''; ?> class="create master unit" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_unit" <?php echo ( in_array( 'read_unit', $cap ) ) ? 'checked' : ''; ?> class="read master unit" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_unit" <?php echo ( in_array( 'update_unit', $cap ) ) ? 'checked' : ''; ?>  class="update master unit" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_unit" <?php echo ( in_array( 'delete_unit', $cap ) ) ? 'checked' : ''; ?> class="delete master unit" /></td>
				<td><input type="checkbox" class="all" id="unit" /></td>
			</tr>
			
			<tr>
				<td>Vessel</td>
				<td><input type="checkbox" name="capabilities[]" value="create_vessel" <?php echo ( in_array( 'create_vessel', $cap ) ) ? 'checked' : ''; ?> class="create master vessel" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_vessel" <?php echo ( in_array( 'read_vessel', $cap ) ) ? 'checked' : ''; ?> class="read master vessel" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_vessel" <?php echo ( in_array( 'update_vessel', $cap ) ) ? 'checked' : ''; ?>  class="update master vessel" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_vessel" <?php echo ( in_array( 'delete_vessel', $cap ) ) ? 'checked' : ''; ?> class="delete master vessel" /></td>
				<td><input type="checkbox" class="all" id="vessel" /></td>
			</tr>
			
			<tr>
				<td>Wilayah</td>
				<td><input type="checkbox" name="capabilities[]" value="create_wilayah" <?php echo ( in_array( 'create_wilayah', $cap ) ) ? 'checked' : ''; ?> class="create master wilayah" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_wilayah" <?php echo ( in_array( 'read_wilayah', $cap ) ) ? 'checked' : ''; ?> class="read master wilayah" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_wilayah" <?php echo ( in_array( 'update_wilayah', $cap ) ) ? 'checked' : ''; ?>  class="update master wilayah" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_wilayah" <?php echo ( in_array( 'delete_wilayah', $cap ) ) ? 'checked' : ''; ?> class="delete master wilayah" /></td>
				<td><input type="checkbox" class="all" id="wilayah" /></td>
			</tr>
			<tr>
				<td>Customer</td>
				<td><input type="checkbox" name="capabilities[]" value="create_customer" <?php echo ( in_array( 'create_customer', $cap ) ) ? 'checked' : ''; ?> class="create master customer" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_customer" <?php echo ( in_array( 'read_customer', $cap ) ) ? 'checked' : ''; ?> class="read master customer" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_customer" <?php echo ( in_array( 'update_customer', $cap ) ) ? 'checked' : ''; ?>  class="update master customer" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_customer" <?php echo ( in_array( 'delete_customer', $cap ) ) ? 'checked' : ''; ?> class="delete master customer" /></td>
				<td><input type="checkbox" class="all" id="customer" /></td>
			</tr>

			<tr>
				<td>Supplier</td>
				<td><input type="checkbox" name="capabilities[]" value="create_supplier" <?php echo ( in_array( 'create_supplier', $cap ) ) ? 'checked' : ''; ?> class="create master supplier" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_supplier" <?php echo ( in_array( 'read_supplier', $cap ) ) ? 'checked' : ''; ?> class="read master supplier" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_supplier" <?php echo ( in_array( 'update_supplier', $cap ) ) ? 'checked' : ''; ?>  class="update master supplier" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_supplier" <?php echo ( in_array( 'delete_supplier', $cap ) ) ? 'checked' : ''; ?> class="delete master supplier" /></td>
				<td><input type="checkbox" class="all" id="supplier" /></td>
			</tr>
			<tr>
				<td>Currency</td>
				<td><input type="checkbox" name="capabilities[]" value="create_currency" <?php echo ( in_array( 'create_currency', $cap ) ) ? 'checked' : ''; ?> class="create master currency" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_currency" <?php echo ( in_array( 'read_currency', $cap ) ) ? 'checked' : ''; ?> class="read master currency" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_currency" <?php echo ( in_array( 'update_currency', $cap ) ) ? 'checked' : ''; ?>  class="update master currency" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_currency" <?php echo ( in_array( 'delete_currency', $cap ) ) ? 'checked' : ''; ?> class="delete master currency" /></td>
				<td><input type="checkbox" class="all" id="currency" /></td>
			</tr>

			<tr>
				<td>Karyawan</td>
				<td><input type="checkbox" name="capabilities[]" value="create_karyawan" <?php echo ( in_array( 'create_karyawan', $cap ) ) ? 'checked' : ''; ?> class="create master karyawan" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_karyawan" <?php echo ( in_array( 'read_karyawan', $cap ) ) ? 'checked' : ''; ?> class="read master karyawan" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_karyawan" <?php echo ( in_array( 'update_karyawan', $cap ) ) ? 'checked' : ''; ?>  class="update master karyawan" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_karyawan" <?php echo ( in_array( 'delete_karyawan', $cap ) ) ? 'checked' : ''; ?> class="delete master karyawan" /></td>
				<td><input type="checkbox" class="all" id="karyawan" /></td>
			</tr>
			<tr>
				<td>Komisi Sales</td>
				<td><input type="checkbox" name="capabilities[]" value="create_komisi_sales" <?php echo ( in_array( 'create_komisi_sales', $cap ) ) ? 'checked' : ''; ?> class="create master komisi_sales" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_komisi_sales" <?php echo ( in_array( 'read_komisi_sales', $cap ) ) ? 'checked' : ''; ?> class="read master komisi_sales" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_komisi_sales" <?php echo ( in_array( 'update_komisi_sales', $cap ) ) ? 'checked' : ''; ?>  class="update master komisi_sales" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_komisi_sales" <?php echo ( in_array( 'delete_komisi_sales', $cap ) ) ? 'checked' : ''; ?> class="delete master komisi_sales" /></td>
				<td><input type="checkbox" class="all" id="komisi_sales" /></td>
			</tr>
			<tr>
				<td>Komisi Supervisor</td>
				<td><input type="checkbox" name="capabilities[]" value="create_komisi_spv" <?php echo ( in_array( 'create_komisi_spv', $cap ) ) ? 'checked' : ''; ?> class="create master komisi_spv" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_komisi_spv" <?php echo ( in_array( 'read_komisi_spv', $cap ) ) ? 'checked' : ''; ?> class="read master komisi_spv" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_komisi_spv" <?php echo ( in_array( 'update_komisi_spv', $cap ) ) ? 'checked' : ''; ?>  class="update master komisi_spv" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_komisi_spv" <?php echo ( in_array( 'delete_komisi_spv', $cap ) ) ? 'checked' : ''; ?> class="delete master komisi_spv" /></td>
				<td><input type="checkbox" class="all" id="komisi_spv" /></td>
			</tr>
			<tr>
				<td colspan="6" style="text-align:center"><?php echo form_submit($change); ?></td>
			</tr>
			<tr>
				<td colspan="5"><strong>Transaksi</strong></td>
				<td><input type="checkbox" class="all" id="transaksi" /></td>
			</tr>
			<tr>
				<td>Jurnal Umum</td>
				<td><input type="checkbox" name="capabilities[]" value="create_jurnal_umum" <?php echo ( in_array( 'create_jurnal_umum', $cap ) ) ? 'checked' : ''; ?> class="create transaksi jurnal_umum" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_jurnal_umum" <?php echo ( in_array( 'read_jurnal_umum', $cap ) ) ? 'checked' : ''; ?> class="read transaksi jurnal_umum" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_jurnal_umum" <?php echo ( in_array( 'update_jurnal_umum', $cap ) ) ? 'checked' : ''; ?> class="update transaksi jurnal_umum" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_jurnal_umum" <?php echo ( in_array( 'delete_jurnal_umum', $cap ) ) ? 'checked' : ''; ?> class="delete transaksi jurnal_umum" /></td>
				<td><input type="checkbox" class="all" id="jurnal_umum" /></td>
			</tr>
			
			<tr>
				<td>Air Quotation</td>
				<td><input type="checkbox" name="capabilities[]" value="create_air_quotation" <?php echo ( in_array( 'create_air_quotation', $cap ) ) ? 'checked' : ''; ?> class="create transaksi air_quotation" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_air_quotation" <?php echo ( in_array( 'read_air_quotation', $cap ) ) ? 'checked' : ''; ?> class="read transaksi air_quotation" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_air_quotation" <?php echo ( in_array( 'update_air_quotation', $cap ) ) ? 'checked' : ''; ?> class="update transaksi air_quotation" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_air_quotation" <?php echo ( in_array( 'delete_air_quotation', $cap ) ) ? 'checked' : ''; ?> class="delete transaksi air_quotation" /></td>
				<td><input type="checkbox" class="all" id="air_quotation" /></td>
			</tr>
			
			<tr>
				<td>Booking Cargo Air</td>
				<td><input type="checkbox" name="capabilities[]" value="create_booking_cargo_air" <?php echo ( in_array( 'create_booking_cargo_air', $cap ) ) ? 'checked' : ''; ?> class="create transaksi booking_cargo_air" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_booking_cargo_air" <?php echo ( in_array( 'read_booking_cargo_air', $cap ) ) ? 'checked' : ''; ?> class="read transaksi booking_cargo_air" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_booking_cargo_air" <?php echo ( in_array( 'update_booking_cargo_air', $cap ) ) ? 'checked' : ''; ?> class="update transaksi booking_cargo_air" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_booking_cargo_air" <?php echo ( in_array( 'delete_booking_cargo_air', $cap ) ) ? 'checked' : ''; ?> class="delete transaksi booking_cargo_air" /></td>
				<td><input type="checkbox" class="all" id="booking_cargo_air" /></td>
			</tr>

			<tr>
				<td>Booking Cargo Sea</td>
				<td><input type="checkbox" name="capabilities[]" value="create_booking_cargo_sea" <?php echo ( in_array( 'create_booking_cargo_sea', $cap ) ) ? 'checked' : ''; ?> class="create transaksi booking_cargo_sea" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_booking_cargo_sea" <?php echo ( in_array( 'read_booking_cargo_sea', $cap ) ) ? 'checked' : ''; ?> class="read transaksi booking_cargo_sea" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_booking_cargo_sea" <?php echo ( in_array( 'update_booking_cargo_sea', $cap ) ) ? 'checked' : ''; ?> class="update transaksi booking_cargo_sea" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_booking_cargo_sea" <?php echo ( in_array( 'delete_booking_cargo_sea', $cap ) ) ? 'checked' : ''; ?> class="delete transaksi booking_cargo_sea" /></td>
				<td><input type="checkbox" class="all" id="booking_cargo_sea" /></td>
			</tr>

			<tr>
				<td>Carrier Booking Sea</td>
				<td><input type="checkbox" name="capabilities[]" value="create_carrier_booking_sea" <?php echo ( in_array( 'create_carrier_booking_sea', $cap ) ) ? 'checked' : ''; ?> class="create transaksi carrier_booking_sea" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_carrier_booking_sea" <?php echo ( in_array( 'read_carrier_booking_sea', $cap ) ) ? 'checked' : ''; ?> class="read transaksi carrier_booking_sea" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_carrier_booking_sea" <?php echo ( in_array( 'update_carrier_booking_sea', $cap ) ) ? 'checked' : ''; ?> class="update transaksi carrier_booking_sea" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_carrier_booking_sea" <?php echo ( in_array( 'delete_carrier_booking_sea', $cap ) ) ? 'checked' : ''; ?> class="delete transaksi carrier_booking_sea" /></td>
				<td><input type="checkbox" class="all" id="carrier_booking_sea" /></td>
			</tr>

			<tr>
				<td>Sea Export Master</td>
				<td><input type="checkbox" name="capabilities[]" value="create_sea_export_master" <?php echo ( in_array( 'create_sea_export_master', $cap ) ) ? 'checked' : ''; ?> class="create transaksi sea_export_master" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_sea_export_master" <?php echo ( in_array( 'read_sea_export_master', $cap ) ) ? 'checked' : ''; ?> class="read transaksi sea_export_master" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_sea_export_master" <?php echo ( in_array( 'update_sea_export_master', $cap ) ) ? 'checked' : ''; ?> class="update transaksi sea_export_master" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_sea_export_master" <?php echo ( in_array( 'delete_sea_export_master', $cap ) ) ? 'checked' : ''; ?> class="delete transaksi sea_export_master" /></td>
				<td><input type="checkbox" class="all" id="sea_export_master" /></td>
			</tr>

			<tr>
				<td>Sea Import Master</td>
				<td><input type="checkbox" name="capabilities[]" value="create_sea_import_master" <?php echo ( in_array( 'create_sea_import_master', $cap ) ) ? 'checked' : ''; ?> class="create transaksi sea_import_master" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_sea_import_master" <?php echo ( in_array( 'read_sea_import_master', $cap ) ) ? 'checked' : ''; ?> class="read transaksi sea_import_master" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_sea_import_master" <?php echo ( in_array( 'update_sea_import_master', $cap ) ) ? 'checked' : ''; ?> class="update transaksi sea_import_master" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_sea_import_master" <?php echo ( in_array( 'delete_sea_import_master', $cap ) ) ? 'checked' : ''; ?> class="delete transaksi sea_import_master" /></td>
				<td><input type="checkbox" class="all" id="sea_import_master" /></td>
			</tr>		

			<tr>
				<td>Shipment Inbound Entry Sea</td>
				<td><input type="checkbox" name="capabilities[]" value="create_shipment_inbound_entry_sea" <?php echo ( in_array( 'create_shipment_inbound_entry_sea', $cap ) ) ? 'checked' : ''; ?> class="create transaksi shipment_inbound_entry_sea" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_shipment_inbound_entry_sea" <?php echo ( in_array( 'read_shipment_inbound_entry_sea', $cap ) ) ? 'checked' : ''; ?> class="read transaksi shipment_inbound_entry_sea" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_shipment_inbound_entry_sea" <?php echo ( in_array( 'update_shipment_inbound_entry_sea', $cap ) ) ? 'checked' : ''; ?> class="update transaksi shipment_inbound_entry_sea" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_shipment_inbound_entry_sea" <?php echo ( in_array( 'delete_shipment_inbound_entry_sea', $cap ) ) ? 'checked' : ''; ?> class="delete transaksi shipment_inbound_entry_sea" /></td>
				<td><input type="checkbox" class="all" id="shipment_inbound_entry_sea" /></td>
			</tr>

			<tr>
				<td>Sea Quotation</td>
				<td><input type="checkbox" name="capabilities[]" value="create_sea_quotation" <?php echo ( in_array( 'create_sea_quotation', $cap ) ) ? 'checked' : ''; ?> class="create transaksi sea_quotation" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_sea_quotation" <?php echo ( in_array( 'read_sea_quotation', $cap ) ) ? 'checked' : ''; ?> class="read transaksi sea_quotation" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_sea_quotation" <?php echo ( in_array( 'update_sea_quotation', $cap ) ) ? 'checked' : ''; ?> class="update transaksi sea_quotation" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_sea_quotation" <?php echo ( in_array( 'delete_sea_quotation', $cap ) ) ? 'checked' : ''; ?> class="delete transaksi sea_quotation" /></td>
				<td><input type="checkbox" class="all" id="sea_quotation" /></td>
			</tr>
			
			<tr>
				<td>Kas Bank Keluar</td>
				<td><input type="checkbox" name="capabilities[]" value="create_kb_keluar" <?php echo ( in_array( 'create_kb_keluar', $cap ) ) ? 'checked' : ''; ?> class="create transaksi kb_keluar" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_kb_keluar" <?php echo ( in_array( 'read_kb_keluar', $cap ) ) ? 'checked' : ''; ?> class="read transaksi kb_keluar" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_kb_keluar" <?php echo ( in_array( 'update_kb_keluar', $cap ) ) ? 'checked' : ''; ?> class="update transaksi kb_keluar" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_kb_keluar" <?php echo ( in_array( 'delete_kb_keluar', $cap ) ) ? 'checked' : ''; ?> class="delete transaksi kb_keluar" /></td>
				<td><input type="checkbox" class="all" id="kb_keluar" /></td>
			</tr>
			<tr>
				<td>Kas Bank Terima</td>
				<td><input type="checkbox" name="capabilities[]" value="create_kb_terima" <?php echo ( in_array( 'create_kb_terima', $cap ) ) ? 'checked' : ''; ?> class="create transaksi kb_terima" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_kb_terima" <?php echo ( in_array( 'read_kb_terima', $cap ) ) ? 'checked' : ''; ?> class="read transaksi kb_terima" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_kb_terima" <?php echo ( in_array( 'update_kb_terima', $cap ) ) ? 'checked' : ''; ?> class="update transaksi kb_terima" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_kb_terima" <?php echo ( in_array( 'delete_kb_terima', $cap ) ) ? 'checked' : ''; ?> class="delete transaksi kb_terima" /></td>
				<td><input type="checkbox" class="all" id="kb_terima" /></td>
			</tr>
			<tr>
				<td>Mutasi Antar Gudang</td>
				<td><input type="checkbox" name="capabilities[]" value="create_mutasi" <?php echo ( in_array( 'create_mutasi', $cap ) ) ? 'checked' : ''; ?> class="create transaksi mutasi" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_mutasi" <?php echo ( in_array( 'read_mutasi', $cap ) ) ? 'checked' : ''; ?> class="read transaksi mutasi" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_mutasi" <?php echo ( in_array( 'update_mutasi', $cap ) ) ? 'checked' : ''; ?> class="update transaksi mutasi" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_mutasi" <?php echo ( in_array( 'delete_mutasi', $cap ) ) ? 'checked' : ''; ?> class="delete transaksi mutasi" /></td>
				<td><input type="checkbox" class="all" id="mutasi" /></td>
			</tr>
			<tr>
				<td>Pecah Kode</td>
				<td><input type="checkbox" name="capabilities[]" value="create_pecah_kode" <?php echo ( in_array( 'create_pecah_kode', $cap ) ) ? 'checked' : ''; ?> class="create transaksi pecah_kode" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_pecah_kode" <?php echo ( in_array( 'read_pecah_kode', $cap ) ) ? 'checked' : ''; ?> class="read transaksi pecah_kode" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_pecah_kode" <?php echo ( in_array( 'update_pecah_kode', $cap ) ) ? 'checked' : ''; ?> class="update transaksi pecah_kode" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_pecah_kode" <?php echo ( in_array( 'delete_pecah_kode', $cap ) ) ? 'checked' : ''; ?> class="delete transaksi pecah_kode" /></td>
				<td><input type="checkbox" class="all" id="pecah_kode" /></td>
			</tr>
			<tr>
				<td>Penyesuaian Barang</td>
				<td><input type="checkbox" name="capabilities[]" value="create_penyesuaian" <?php echo ( in_array( 'create_penyesuaian', $cap ) ) ? 'checked' : ''; ?> class="create transaksi penyesuaianbarang" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_penyesuaian" <?php echo ( in_array( 'read_penyesuaian', $cap ) ) ? 'checked' : ''; ?> class="read transaksi penyesuaianbarang" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_penyesuaian" <?php echo ( in_array( 'update_penyesuaian', $cap ) ) ? 'checked' : ''; ?> class="update transaksi penyesuaianbarang" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_penyesuaian" <?php echo ( in_array( 'delete_penyesuaian', $cap ) ) ? 'checked' : ''; ?> class="delete transaksi penyesuaianbarang" /></td>
				<td><input type="checkbox" class="all" id="penyesuaianbarang" /></td>
			</tr>
			<tr>
				<td>Purchase Order</td>
				<td><input type="checkbox" name="capabilities[]" value="create_order_beli" <?php echo ( in_array( 'create_order_beli', $cap ) ) ? 'checked' : ''; ?> class="create transaksi order_beli" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_order_beli" <?php echo ( in_array( 'read_order_beli', $cap ) ) ? 'checked' : ''; ?> class="read transaksi order_beli" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_order_beli" <?php echo ( in_array( 'update_order_beli', $cap ) ) ? 'checked' : ''; ?> class="update transaksi order_beli" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_order_beli" <?php echo ( in_array( 'delete_order_beli', $cap ) ) ? 'checked' : ''; ?> class="delete transaksi order_beli" /></td>
				<td><input type="checkbox" class="all" id="order_beli" /></td>
			</tr>
			<tr>
				<td>Penerimaan Barang</td>
				<td><input type="checkbox" name="capabilities[]" value="create_terima_beli" <?php echo ( in_array( 'create_terima_beli', $cap ) ) ? 'checked' : ''; ?> class="create transaksi terima_beli" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_terima_beli" <?php echo ( in_array( 'read_terima_beli', $cap ) ) ? 'checked' : ''; ?> class="read transaksi terima_beli" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_terima_beli" <?php echo ( in_array( 'update_terima_beli', $cap ) ) ? 'checked' : ''; ?> class="update transaksi terima_beli" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_terima_beli" <?php echo ( in_array( 'delete_terima_beli', $cap ) ) ? 'checked' : ''; ?> class="delete transaksi terima_beli" /></td>
				<td><input type="checkbox" class="all" id="terima_beli" /></td>
			</tr>
			<tr>
				<td>Purchase Invoice</td>
				<td><input type="checkbox" name="capabilities[]" value="create_pembelian" <?php echo ( in_array( 'create_pembelian', $cap ) ) ? 'checked' : ''; ?> class="create transaksi pembelian" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_pembelian" <?php echo ( in_array( 'read_pembelian', $cap ) ) ? 'checked' : ''; ?> class="read transaksi pembelian" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_pembelian" <?php echo ( in_array( 'update_pembelian', $cap ) ) ? 'checked' : ''; ?> class="update transaksi pembelian" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_pembelian" <?php echo ( in_array( 'delete_pembelian', $cap ) ) ? 'checked' : ''; ?> class="delete transaksi pembelian" /></td>
				<td><input type="checkbox" class="all" id="pembelian" /></td>
			</tr>
			<tr>
				<td>Retur Pembelian</td>
				<td><input type="checkbox" name="capabilities[]" value="create_retur_beli" <?php echo ( in_array( 'create_retur_beli', $cap ) ) ? 'checked' : ''; ?> class="create transaksi retur_beli" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_retur_beli" <?php echo ( in_array( 'read_retur_beli', $cap ) ) ? 'checked' : ''; ?> class="read transaksi retur_beli" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_retur_beli" <?php echo ( in_array( 'update_retur_beli', $cap ) ) ? 'checked' : ''; ?> class="update transaksi retur_beli" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_retur_beli" <?php echo ( in_array( 'delete_retur_beli', $cap ) ) ? 'checked' : ''; ?> class="delete transaksi retur_beli" /></td>
				<td><input type="checkbox" class="all" id="retur_beli" /></td>
			</tr>
			<tr>
				<td>Pelunasan Hutang</td>
				<td><input type="checkbox" name="capabilities[]" value="create_pelhutang" <?php echo ( in_array( 'create_pelhutang', $cap ) ) ? 'checked' : ''; ?> class="create transaksi pelhutang" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_pelhutang" <?php echo ( in_array( 'read_pelhutang', $cap ) ) ? 'checked' : ''; ?> class="read transaksi pelhutang" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_pelhutang" <?php echo ( in_array( 'update_pelhutang', $cap ) ) ? 'checked' : ''; ?> class="update transaksi pelhutang" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_pelhutang" <?php echo ( in_array( 'delete_pelhutang', $cap ) ) ? 'checked' : ''; ?> class="delete transaksi pelhutang" /></td>
				<td><input type="checkbox" class="all" id="pelhutang" /></td>
			</tr>
			<tr>
				<td>Tolak Giro Keluar</td>
				<td><input type="checkbox" name="capabilities[]" value="create_tolakgirohutang" <?php echo ( in_array( 'create_tolakgirohutang', $cap ) ) ? 'checked' : ''; ?> class="create transaksi tolakgirohutang" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_tolakgirohutang" <?php echo ( in_array( 'read_tolakgirohutang', $cap ) ) ? 'checked' : ''; ?> class="read transaksi tolakgirohutang" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_tolakgirohutang" <?php echo ( in_array( 'update_tolakgirohutang', $cap ) ) ? 'checked' : ''; ?> class="update transaksi tolakgirohutang" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_tolakgirohutang" <?php echo ( in_array( 'delete_tolakgirohutang', $cap ) ) ? 'checked' : ''; ?> class="delete transaksi tolakgirohutang" /></td>
				<td><input type="checkbox" class="all" id="tolakgirohutang" /></td>
			</tr>
			<tr>
				<td>Sales Order</td>
				<td><input type="checkbox" name="capabilities[]" value="create_order_jual" <?php echo ( in_array( 'create_order_jual', $cap ) ) ? 'checked' : ''; ?> class="create transaksi order_jual" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_order_jual" <?php echo ( in_array( 'read_order_jual', $cap ) ) ? 'checked' : ''; ?> class="read transaksi order_jual" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_order_jual" <?php echo ( in_array( 'update_order_jual', $cap ) ) ? 'checked' : ''; ?> class="update transaksi order_jual" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_order_jual" <?php echo ( in_array( 'delete_order_jual', $cap ) ) ? 'checked' : ''; ?> class="delete transaksi order_jual" /></td>
				<td><input type="checkbox" class="all" id="order_jual" /></td>
			</tr>
			<tr>
				<td>Surat Jalan</td>
				<td><input type="checkbox" name="capabilities[]" value="create_surat_jalan" <?php echo ( in_array( 'create_surat_jalan', $cap ) ) ? 'checked' : ''; ?> class="create transaksi surat_jalan" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_surat_jalan" <?php echo ( in_array( 'read_surat_jalan', $cap ) ) ? 'checked' : ''; ?> class="read transaksi surat_jalan" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_surat_jalan" <?php echo ( in_array( 'update_surat_jalan', $cap ) ) ? 'checked' : ''; ?> class="update transaksi surat_jalan" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_surat_jalan" <?php echo ( in_array( 'delete_surat_jalan', $cap ) ) ? 'checked' : ''; ?> class="delete transaksi surat_jalan" /></td>
				<td><input type="checkbox" class="all" id="surat_jalan" /></td>
			</tr>
			<tr>
				<td>Penjualan</td>
				<td><input type="checkbox" name="capabilities[]" value="create_penjualan" <?php echo ( in_array( 'create_penjualan', $cap ) ) ? 'checked' : ''; ?> class="create transaksi penjualan" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_penjualan" <?php echo ( in_array( 'read_penjualan', $cap ) ) ? 'checked' : ''; ?> class="read transaksi penjualan" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_penjualan" <?php echo ( in_array( 'update_penjualan', $cap ) ) ? 'checked' : ''; ?> class="update transaksi penjualan" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_penjualan" <?php echo ( in_array( 'delete_penjualan', $cap ) ) ? 'checked' : ''; ?> class="delete transaksi penjualan" /></td>
				<td><input type="checkbox" class="all" id="penjualan" /></td>
			</tr>
			<tr>
				<td>Retur Penjualan</td>
				<td><input type="checkbox" name="capabilities[]" value="create_retur_jual" <?php echo ( in_array( 'create_retur_jual', $cap ) ) ? 'checked' : ''; ?> class="create transaksi retur_jual" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_retur_jual" <?php echo ( in_array( 'read_retur_jual', $cap ) ) ? 'checked' : ''; ?> class="read transaksi retur_jual" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_retur_jual" <?php echo ( in_array( 'update_retur_jual', $cap ) ) ? 'checked' : ''; ?> class="update transaksi retur_jual" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_retur_jual" <?php echo ( in_array( 'delete_retur_jual', $cap ) ) ? 'checked' : ''; ?> class="delete transaksi retur_jual" /></td>
				<td><input type="checkbox" class="all" id="retur_jual" /></td>
			</tr>
			<tr>
				<td>Pelunasan Piutang</td>
				<td><input type="checkbox" name="capabilities[]" value="create_pelpiutang" <?php echo ( in_array( 'create_pelpiutang', $cap ) ) ? 'checked' : ''; ?> class="create transaksi pelpiutang" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_pelpiutang" <?php echo ( in_array( 'read_pelpiutang', $cap ) ) ? 'checked' : ''; ?> class="read transaksi pelpiutang" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_pelpiutang" <?php echo ( in_array( 'update_pelpiutang', $cap ) ) ? 'checked' : ''; ?> class="update transaksi pelpiutang" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_pelpiutang" <?php echo ( in_array( 'delete_pelpiutang', $cap ) ) ? 'checked' : ''; ?> class="delete transaksi pelpiutang" /></td>
				<td><input type="checkbox" class="all" id="pelpiutang" /></td>
			</tr>
			<tr>
				<td>Tolak Giro Masuk</td>
				<td><input type="checkbox" name="capabilities[]" value="create_tolakgiropiutang" <?php echo ( in_array( 'create_tolakgiropiutang', $cap ) ) ? 'checked' : ''; ?> class="create transaksi tolakgiropiutang" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_tolakgiropiutang" <?php echo ( in_array( 'read_tolakgiropiutang', $cap ) ) ? 'checked' : ''; ?> class="read transaksi tolakgiropiutang" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_tolakgiropiutang" <?php echo ( in_array( 'update_tolakgiropiutang', $cap ) ) ? 'checked' : ''; ?> class="update transaksi tolakgiropiutang" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_tolakgiropiutang" <?php echo ( in_array( 'delete_tolakgiropiutang', $cap ) ) ? 'checked' : ''; ?> class="delete transaksi tolakgiropiutang" /></td>
				<td><input type="checkbox" class="all" id="tolakgiropiutang" /></td>
			</tr>
			<tr>
				<td colspan="6" style="text-align:center"><?php echo form_submit($change); ?></td>
			</tr>
			<tr>
				<td colspan="5"><strong>Laporan</strong></td>
				<td><input type="checkbox" class="all" id="laporan" /></td>
			</tr>
			<tr>
				<td>Stock</td>
				<td><input type="checkbox" name="capabilities[]" value="create_lap_stock" <?php echo ( in_array( 'create_lap_stock', $cap ) ) ? 'checked' : ''; ?> class="create laporan lap_stock" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_lap_stock" <?php echo ( in_array( 'read_lap_stock', $cap ) ) ? 'checked' : ''; ?> class="read laporan lap_stock" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_lap_stock" <?php echo ( in_array( 'update_lap_stock', $cap ) ) ? 'checked' : ''; ?> class="update laporan lap_stock" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_lap_stock" <?php echo ( in_array( 'delete_lap_stock', $cap ) ) ? 'checked' : ''; ?> class="delete laporan lap_stock" /></td>
				<td><input type="checkbox" class="all" id="lap_stock" /></td>
			</tr>
			<tr>
				<td>Stock Gudang</td>
				<td><input type="checkbox" name="capabilities[]" value="create_lap_stock2" <?php echo ( in_array( 'create_lap_stock2', $cap ) ) ? 'checked' : ''; ?> class="create laporan lap_stock2" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_lap_stock2" <?php echo ( in_array( 'read_lap_stock2', $cap ) ) ? 'checked' : ''; ?> class="read laporan lap_stock2" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_lap_stock2" <?php echo ( in_array( 'update_lap_stock2', $cap ) ) ? 'checked' : ''; ?> class="update laporan lap_stock2" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_lap_stock2" <?php echo ( in_array( 'delete_lap_stock2', $cap ) ) ? 'checked' : ''; ?> class="delete laporan lap_stock2" /></td>
				<td><input type="checkbox" class="all" id="lap_stock2" /></td>
			</tr>
			<tr>
				<td>Kartu Stock</td>
				<td><input type="checkbox" name="capabilities[]" value="create_lap_kartustock" <?php echo ( in_array( 'create_lap_kartustock', $cap ) ) ? 'checked' : ''; ?> class="create laporan lap_kartustock" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_lap_kartustock" <?php echo ( in_array( 'read_lap_kartustock', $cap ) ) ? 'checked' : ''; ?> class="read laporan lap_kartustock" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_lap_kartustock" <?php echo ( in_array( 'update_lap_kartustock', $cap ) ) ? 'checked' : ''; ?> class="update laporan lap_kartustock" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_lap_kartustock" <?php echo ( in_array( 'delete_lap_kartustock', $cap ) ) ? 'checked' : ''; ?> class="delete laporan lap_kartustock" /></td>
				<td><input type="checkbox" class="all" id="lap_kartustock" /></td>
			</tr>
			<tr>
				<td>Mutasi Antar Gudang</td>
				<td><input type="checkbox" name="capabilities[]" value="create_lap_mutasiag" <?php echo ( in_array( 'create_lap_mutasiag', $cap ) ) ? 'checked' : ''; ?> class="create laporan lap_mutasiag" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_lap_mutasiag" <?php echo ( in_array( 'read_lap_mutasiag', $cap ) ) ? 'checked' : ''; ?> class="read laporan lap_mutasiag" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_lap_mutasiag" <?php echo ( in_array( 'update_lap_mutasiag', $cap ) ) ? 'checked' : ''; ?> class="update laporan lap_mutasiag" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_lap_mutasiag" <?php echo ( in_array( 'delete_lap_mutasiag', $cap ) ) ? 'checked' : ''; ?> class="delete laporan lap_mutasiag" /></td>
				<td><input type="checkbox" class="all" id="lap_mutasiag" /></td>
			</tr>
			<tr>
				<td>Customer</td>
				<td><input type="checkbox" name="capabilities[]" value="create_lap_customer" <?php echo ( in_array( 'create_lap_customer', $cap ) ) ? 'checked' : ''; ?> class="create laporan lap_customer" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_lap_customer" <?php echo ( in_array( 'read_lap_customer', $cap ) ) ? 'checked' : ''; ?> class="read laporan lap_customer" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_lap_customer" <?php echo ( in_array( 'update_lap_customer', $cap ) ) ? 'checked' : ''; ?> class="update laporan lap_customer" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_lap_customer" <?php echo ( in_array( 'delete_lap_customer', $cap ) ) ? 'checked' : ''; ?> class="delete laporan lap_customer" /></td>
				<td><input type="checkbox" class="all" id="lap_customer" /></td>
			</tr>
			<tr>
				<td>Supplier</td>
				<td><input type="checkbox" name="capabilities[]" value="create_lap_supplier" <?php echo ( in_array( 'create_lap_supplier', $cap ) ) ? 'checked' : ''; ?> class="create laporan lap_supplier" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_lap_supplier" <?php echo ( in_array( 'read_lap_supplier', $cap ) ) ? 'checked' : ''; ?> class="read laporan lap_supplier" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_lap_supplier" <?php echo ( in_array( 'update_lap_supplier', $cap ) ) ? 'checked' : ''; ?> class="update laporan lap_supplier" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_lap_supplier" <?php echo ( in_array( 'delete_lap_supplier', $cap ) ) ? 'checked' : ''; ?> class="delete laporan lap_supplier" /></td>
				<td><input type="checkbox" class="all" id="lap_supplier" /></td>
			</tr>
			<tr>
				<td>Sales Order</td>
				<td><input type="checkbox" name="capabilities[]" value="create_lap_salesorder" <?php echo ( in_array( 'create_lap_salesorder', $cap ) ) ? 'checked' : ''; ?> class="create laporan lap_salesorder" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_lap_salesorder" <?php echo ( in_array( 'read_lap_salesorder', $cap ) ) ? 'checked' : ''; ?> class="read laporan lap_salesorder" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_lap_salesorder" <?php echo ( in_array( 'update_lap_salesorder', $cap ) ) ? 'checked' : ''; ?> class="update laporan lap_salesorder" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_lap_salesorder" <?php echo ( in_array( 'delete_lap_salesorder', $cap ) ) ? 'checked' : ''; ?> class="delete laporan lap_salesorder" /></td>
				<td><input type="checkbox" class="all" id="lap_salesorder" /></td>
			</tr>
			<tr>
				<td>Surat Jalan</td>
				<td><input type="checkbox" name="capabilities[]" value="create_lap_suratjalan" <?php echo ( in_array( 'create_lap_suratjalan', $cap ) ) ? 'checked' : ''; ?> class="create laporan lap_suratjalan" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_lap_suratjalan" <?php echo ( in_array( 'read_lap_suratjalan', $cap ) ) ? 'checked' : ''; ?> class="read laporan lap_suratjalan" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_lap_suratjalan" <?php echo ( in_array( 'update_lap_suratjalan', $cap ) ) ? 'checked' : ''; ?> class="update laporan lap_suratjalan" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_lap_suratjalan" <?php echo ( in_array( 'delete_lap_suratjalan', $cap ) ) ? 'checked' : ''; ?> class="delete laporan lap_suratjalan" /></td>
				<td><input type="checkbox" class="all" id="lap_suratjalan" /></td>
			</tr>
			<tr>
				<td>Penjualan</td>
				<td><input type="checkbox" name="capabilities[]" value="create_lap_penjualan" <?php echo ( in_array( 'create_lap_penjualan', $cap ) ) ? 'checked' : ''; ?> class="create laporan lap_penjualan" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_lap_penjualan" <?php echo ( in_array( 'read_lap_penjualan', $cap ) ) ? 'checked' : ''; ?> class="read laporan lap_penjualan" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_lap_penjualan" <?php echo ( in_array( 'update_lap_penjualan', $cap ) ) ? 'checked' : ''; ?> class="update laporan lap_penjualan" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_lap_penjualan" <?php echo ( in_array( 'delete_lap_penjualan', $cap ) ) ? 'checked' : ''; ?> class="delete laporan lap_penjualan" /></td>
				<td><input type="checkbox" class="all" id="lap_penjualan" /></td>
			</tr>
			<tr>
				<td>Pembelian</td>
				<td><input type="checkbox" name="capabilities[]" value="create_lap_pembelian" <?php echo ( in_array( 'create_lap_pembelian', $cap ) ) ? 'checked' : ''; ?> class="create laporan lap_pembelian" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_lap_pembelian" <?php echo ( in_array( 'read_lap_pembelian', $cap ) ) ? 'checked' : ''; ?> class="read laporan lap_pembelian" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_lap_pembelian" <?php echo ( in_array( 'update_lap_pembelian', $cap ) ) ? 'checked' : ''; ?> class="update laporan lap_pembelian" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_lap_pembelian" <?php echo ( in_array( 'delete_lap_pembelian', $cap ) ) ? 'checked' : ''; ?> class="delete laporan lap_pembelian" /></td>
				<td><input type="checkbox" class="all" id="lap_pembelian" /></td>
			</tr>
			<tr>
				<td>Penerimaan</td>
				<td><input type="checkbox" name="capabilities[]" value="create_lap_penerimaan" <?php echo ( in_array( 'create_lap_penerimaan', $cap ) ) ? 'checked' : ''; ?> class="create laporan lap_penerimaan" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_lap_penerimaan" <?php echo ( in_array( 'read_lap_penerimaan', $cap ) ) ? 'checked' : ''; ?> class="read laporan lap_penerimaan" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_lap_penerimaan" <?php echo ( in_array( 'update_lap_penerimaan', $cap ) ) ? 'checked' : ''; ?> class="update laporan lap_penerimaan" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_lap_penerimaan" <?php echo ( in_array( 'delete_lap_penerimaan', $cap ) ) ? 'checked' : ''; ?> class="delete laporan lap_penerimaan" /></td>
				<td><input type="checkbox" class="all" id="lap_penerimaan" /></td>
			</tr>
			<tr>
				<td>Purchase Order</td>
				<td><input type="checkbox" name="capabilities[]" value="create_lap_purchaseorder" <?php echo ( in_array( 'create_lap_purchaseorder', $cap ) ) ? 'checked' : ''; ?> class="create laporan lap_purchaseorder" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_lap_purchaseorder" <?php echo ( in_array( 'read_lap_purchaseorder', $cap ) ) ? 'checked' : ''; ?> class="read laporan lap_purchaseorder" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_lap_purchaseorder" <?php echo ( in_array( 'update_lap_purchaseorder', $cap ) ) ? 'checked' : ''; ?> class="update laporan lap_purchaseorder" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_lap_purchaseorder" <?php echo ( in_array( 'delete_lap_purchaseorder', $cap ) ) ? 'checked' : ''; ?> class="delete laporan lap_purchaseorder" /></td>
				<td><input type="checkbox" class="all" id="lap_purchaseorder" /></td>
			</tr>
			<tr>
				<td>Retur Beli</td>
				<td><input type="checkbox" name="capabilities[]" value="create_lap_returbeli" <?php echo ( in_array( 'create_lap_returbeli', $cap ) ) ? 'checked' : ''; ?> class="create laporan lap_returbeli" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_lap_returbeli" <?php echo ( in_array( 'read_lap_returbeli', $cap ) ) ? 'checked' : ''; ?> class="read laporan lap_returbeli" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_lap_returbeli" <?php echo ( in_array( 'update_lap_returbeli', $cap ) ) ? 'checked' : ''; ?> class="update laporan lap_returbeli" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_lap_returbeli" <?php echo ( in_array( 'delete_lap_returbeli', $cap ) ) ? 'checked' : ''; ?> class="delete laporan lap_returbeli" /></td>
				<td><input type="checkbox" class="all" id="lap_returbeli" /></td>
			</tr>
			<tr>
				<td>Retur Jual</td>
				<td><input type="checkbox" name="capabilities[]" value="create_lap_returjual" <?php echo ( in_array( 'create_lap_returjual', $cap ) ) ? 'checked' : ''; ?> class="create laporan lap_returjual" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_lap_returjual" <?php echo ( in_array( 'read_lap_returjual', $cap ) ) ? 'checked' : ''; ?> class="read laporan lap_returjual" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_lap_returjual" <?php echo ( in_array( 'update_lap_returjual', $cap ) ) ? 'checked' : ''; ?> class="update laporan lap_returjual" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_lap_returjual" <?php echo ( in_array( 'delete_lap_returjual', $cap ) ) ? 'checked' : ''; ?> class="delete laporan lap_returjual" /></td>
				<td><input type="checkbox" class="all" id="lap_returjual" /></td>
			</tr>
			<tr>
				<td>Pelunasan Piutang</td>
				<td><input type="checkbox" name="capabilities[]" value="create_lap_pelunasanpiutang" <?php echo ( in_array( 'create_lap_pelunasanpiutang', $cap ) ) ? 'checked' : ''; ?> class="create laporan lap_pelunasanpiutang" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_lap_pelunasanpiutang" <?php echo ( in_array( 'read_lap_pelunasanpiutang', $cap ) ) ? 'checked' : ''; ?> class="read laporan lap_pelunasanpiutang" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_lap_pelunasanpiutang" <?php echo ( in_array( 'update_lap_pelunasanpiutang', $cap ) ) ? 'checked' : ''; ?> class="update laporan lap_pelunasanpiutang" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_lap_pelunasanpiutang" <?php echo ( in_array( 'delete_lap_pelunasanpiutang', $cap ) ) ? 'checked' : ''; ?> class="delete laporan lap_pelunasanpiutang" /></td>
				<td><input type="checkbox" class="all" id="lap_pelunasanpiutang" /></td>
			</tr>
			<tr>
				<td>Pelunasan Hutang</td>
				<td><input type="checkbox" name="capabilities[]" value="create_lap_pelunasanhutang" <?php echo ( in_array( 'create_lap_pelunasanhutang', $cap ) ) ? 'checked' : ''; ?> class="create laporan lap_pelunasanhutang" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_lap_pelunasanhutang" <?php echo ( in_array( 'read_lap_pelunasanhutang', $cap ) ) ? 'checked' : ''; ?> class="read laporan lap_pelunasanhutang" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_lap_pelunasanhutang" <?php echo ( in_array( 'update_lap_pelunasanhutang', $cap ) ) ? 'checked' : ''; ?> class="update laporan lap_pelunasanhutang" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_lap_pelunasanhutang" <?php echo ( in_array( 'delete_lap_pelunasanhutang', $cap ) ) ? 'checked' : ''; ?> class="delete laporan lap_pelunasanhutang" /></td>
				<td><input type="checkbox" class="all" id="lap_pelunasanhutang" /></td>
			</tr>
			<tr>
				<td>Tolak Giro Piutang</td>
				<td><input type="checkbox" name="capabilities[]" value="create_lap_tolakgiropiutang" <?php echo ( in_array( 'create_lap_tolakgiropiutang', $cap ) ) ? 'checked' : ''; ?> class="create laporan lap_tolakgiropiutang" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_lap_tolakgiropiutang" <?php echo ( in_array( 'read_lap_tolakgiropiutang', $cap ) ) ? 'checked' : ''; ?> class="read laporan lap_tolakgiropiutang" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_lap_tolakgiropiutang" <?php echo ( in_array( 'update_lap_tolakgiropiutang', $cap ) ) ? 'checked' : ''; ?> class="update laporan lap_tolakgiropiutang" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_lap_tolakgiropiutang" <?php echo ( in_array( 'delete_lap_tolakgiropiutang', $cap ) ) ? 'checked' : ''; ?> class="delete laporan lap_tolakgiropiutang" /></td>
				<td><input type="checkbox" class="all" id="lap_tolakgiropiutang" /></td>
			</tr>
			<tr>
				<td>Tolak Giro Hutang</td>
				<td><input type="checkbox" name="capabilities[]" value="create_lap_tolakgirohutang" <?php echo ( in_array( 'create_lap_tolakgirohutang', $cap ) ) ? 'checked' : ''; ?> class="create laporan lap_tolakgirohutang" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_lap_tolakgirohutang" <?php echo ( in_array( 'read_lap_tolakgirohutang', $cap ) ) ? 'checked' : ''; ?> class="read laporan lap_tolakgirohutang" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_lap_tolakgirohutang" <?php echo ( in_array( 'update_lap_tolakgirohutang', $cap ) ) ? 'checked' : ''; ?> class="update laporan lap_tolakgirohutang" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_lap_tolakgirohutang" <?php echo ( in_array( 'delete_lap_tolakgirohutang', $cap ) ) ? 'checked' : ''; ?> class="delete laporan lap_tolakgirohutang" /></td>
				<td><input type="checkbox" class="all" id="lap_tolakgirohutang" /></td>
			</tr>
			<tr>
				<td>Penyesuaian Stock</td>
				<td><input type="checkbox" name="capabilities[]" value="create_lap_penyesuaianstock" <?php echo ( in_array( 'create_lap_penyesuaianstock', $cap ) ) ? 'checked' : ''; ?> class="create laporan lap_penyesuaianstock" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_lap_penyesuaianstock" <?php echo ( in_array( 'read_lap_penyesuaianstock', $cap ) ) ? 'checked' : ''; ?> class="read laporan lap_penyesuaianstock" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_lap_penyesuaianstock" <?php echo ( in_array( 'update_lap_penyesuaianstock', $cap ) ) ? 'checked' : ''; ?> class="update laporan lap_penyesuaianstock" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_lap_penyesuaianstock" <?php echo ( in_array( 'delete_lap_penyesuaianstock', $cap ) ) ? 'checked' : ''; ?> class="delete laporan lap_penyesuaianstock" /></td>
				<td><input type="checkbox" class="all" id="lap_penyesuaianstock" /></td>
			</tr>
			<tr>
				<td>Saldo Piutang</td>
				<td><input type="checkbox" name="capabilities[]" value="create_lap_saldo_piu" <?php echo ( in_array( 'create_lap_saldo_piu', $cap ) ) ? 'checked' : ''; ?> class="create laporan lap_saldo_piu" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_lap_saldo_piu" <?php echo ( in_array( 'read_lap_saldo_piu', $cap ) ) ? 'checked' : ''; ?> class="read laporan lap_saldo_piu" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_lap_saldo_piu" <?php echo ( in_array( 'update_lap_saldo_piu', $cap ) ) ? 'checked' : ''; ?> class="update laporan lap_saldo_piu" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_lap_saldo_piu" <?php echo ( in_array( 'delete_lap_saldo_piu', $cap ) ) ? 'checked' : ''; ?> class="delete laporan lap_saldo_piu" /></td>
				<td><input type="checkbox" class="all" id="lap_saldo_piu" /></td>
			</tr>
			<tr>
				<td>Saldo Hutang</td>
				<td><input type="checkbox" name="capabilities[]" value="create_lap_saldo_hut" <?php echo ( in_array( 'create_lap_saldo_hut', $cap ) ) ? 'checked' : ''; ?> class="create laporan lap_saldo_hut" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_lap_saldo_hut" <?php echo ( in_array( 'read_lap_saldo_hut', $cap ) ) ? 'checked' : ''; ?> class="read laporan lap_saldo_hut" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_lap_saldo_hut" <?php echo ( in_array( 'update_lap_saldo_hut', $cap ) ) ? 'checked' : ''; ?> class="update laporan lap_saldo_hut" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_lap_saldo_hut" <?php echo ( in_array( 'delete_lap_saldo_hut', $cap ) ) ? 'checked' : ''; ?> class="delete laporan lap_saldo_hut" /></td>
				<td><input type="checkbox" class="all" id="lap_saldo_hut" /></td>
			</tr>
			<tr>
				<td>Kas Bank Terima</td>
				<td><input type="checkbox" name="capabilities[]" value="create_lap_kb_terima" <?php echo ( in_array( 'create_lap_kb_terima', $cap ) ) ? 'checked' : ''; ?> class="create laporan lap_kb_terima" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_lap_kb_terima" <?php echo ( in_array( 'read_lap_kb_terima', $cap ) ) ? 'checked' : ''; ?> class="read laporan lap_kb_terima" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_lap_kb_terima" <?php echo ( in_array( 'update_lap_kb_terima', $cap ) ) ? 'checked' : ''; ?> class="update laporan lap_kb_terima" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_lap_kb_terima" <?php echo ( in_array( 'delete_lap_kb_terima', $cap ) ) ? 'checked' : ''; ?> class="delete laporan lap_kb_terima" /></td>
				<td><input type="checkbox" class="all" id="lap_kb_terima" /></td>
			</tr>
			<tr>
				<td>Kas Bank Keluar</td>
				<td><input type="checkbox" name="capabilities[]" value="create_lap_kb_keluar" <?php echo ( in_array( 'create_lap_kb_keluar', $cap ) ) ? 'checked' : ''; ?> class="create laporan lap_kb_keluar" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_lap_kb_keluar" <?php echo ( in_array( 'read_lap_kb_keluar', $cap ) ) ? 'checked' : ''; ?> class="read laporan lap_kb_keluar" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_lap_kb_keluar" <?php echo ( in_array( 'update_lap_kb_keluar', $cap ) ) ? 'checked' : ''; ?> class="update laporan lap_kb_keluar" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_lap_kb_keluar" <?php echo ( in_array( 'delete_lap_kb_keluar', $cap ) ) ? 'checked' : ''; ?> class="delete laporan lap_kb_keluar" /></td>
				<td><input type="checkbox" class="all" id="lap_kb_keluar" /></td>
			</tr>
			<tr>
				<td>Komisi</td>
				<td><input type="checkbox" name="capabilities[]" value="create_lap_komisi" <?php echo ( in_array( 'create_lap_komisi', $cap ) ) ? 'checked' : ''; ?> class="create laporan lap_komisi" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_lap_komisi" <?php echo ( in_array( 'read_lap_komisi', $cap ) ) ? 'checked' : ''; ?> class="read laporan lap_komisi" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_lap_komisi" <?php echo ( in_array( 'update_lap_komisi', $cap ) ) ? 'checked' : ''; ?> class="update laporan lap_komisi" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_lap_komisi" <?php echo ( in_array( 'delete_lap_komisi', $cap ) ) ? 'checked' : ''; ?> class="delete laporan lap_komisi" /></td>
				<td><input type="checkbox" class="all" id="lap_komisi" /></td>
			</tr>
			<tr>
				<td>Jurnal</td>
				<td><input type="checkbox" name="capabilities[]" value="create_lap_jurnal" <?php echo ( in_array( 'create_lap_jurnal', $cap ) ) ? 'checked' : ''; ?> class="create laporan lap_jurnal" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_lap_jurnal" <?php echo ( in_array( 'read_lap_jurnal', $cap ) ) ? 'checked' : ''; ?> class="read laporan lap_jurnal" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_lap_jurnal" <?php echo ( in_array( 'update_lap_jurnal', $cap ) ) ? 'checked' : ''; ?> class="update laporan lap_jurnal" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_lap_jurnal" <?php echo ( in_array( 'delete_lap_jurnal', $cap ) ) ? 'checked' : ''; ?> class="delete laporan lap_jurnal" /></td>
				<td><input type="checkbox" class="all" id="lap_jurnal" /></td>
			</tr>
			<tr>
				<td>Neraca General</td>
				<td><input type="checkbox" name="capabilities[]" value="create_lap_neraca_general" <?php echo ( in_array( 'create_lap_neraca_general', $cap ) ) ? 'checked' : ''; ?> class="create laporan lap_neraca_general" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_lap_neraca_general" <?php echo ( in_array( 'read_lap_neraca_general', $cap ) ) ? 'checked' : ''; ?> class="read laporan lap_neraca_general" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_lap_neraca_general" <?php echo ( in_array( 'update_lap_neraca_general', $cap ) ) ? 'checked' : ''; ?> class="update laporan lap_neraca_general" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_lap_neraca_general" <?php echo ( in_array( 'delete_lap_neraca_general', $cap ) ) ? 'checked' : ''; ?> class="delete laporan lap_neraca_general" /></td>
				<td><input type="checkbox" class="all" id="lap_neraca_general" /></td>
			</tr>
			<tr>
				<td>Neraca Detail</td>
				<td><input type="checkbox" name="capabilities[]" value="create_lap_neraca_detail" <?php echo ( in_array( 'create_lap_neraca_detail', $cap ) ) ? 'checked' : ''; ?> class="create laporan lap_neraca_detail" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_lap_neraca_detail" <?php echo ( in_array( 'read_lap_neraca_detail', $cap ) ) ? 'checked' : ''; ?> class="read laporan lap_neraca_detail" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_lap_neraca_detail" <?php echo ( in_array( 'update_lap_neraca_detail', $cap ) ) ? 'checked' : ''; ?> class="update laporan lap_neraca_detail" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_lap_neraca_detail" <?php echo ( in_array( 'delete_lap_neraca_detail', $cap ) ) ? 'checked' : ''; ?> class="delete laporan lap_neraca_detail" /></td>
				<td><input type="checkbox" class="all" id="lap_neraca_detail" /></td>
			</tr>
			<tr>
				<td>Rugi Laba</td>
				<td><input type="checkbox" name="capabilities[]" value="create_lap_rugi_laba" <?php echo ( in_array( 'create_lap_rugi_laba', $cap ) ) ? 'checked' : ''; ?> class="create laporan lap_rugi_laba" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_lap_rugi_laba" <?php echo ( in_array( 'read_lap_rugi_laba', $cap ) ) ? 'checked' : ''; ?> class="read laporan lap_rugi_laba" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_lap_rugi_laba" <?php echo ( in_array( 'update_lap_rugi_laba', $cap ) ) ? 'checked' : ''; ?> class="update laporan lap_rugi_laba" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_lap_rugi_laba" <?php echo ( in_array( 'delete_lap_rugi_laba', $cap ) ) ? 'checked' : ''; ?> class="delete laporan lap_rugi_laba" /></td>
				<td><input type="checkbox" class="all" id="lap_rugi_laba" /></td>
			</tr>
			<tr>
				<td>Buku Besar</td>
				<td><input type="checkbox" name="capabilities[]" value="create_lap_buku_besar" <?php echo ( in_array( 'create_lap_buku_besar', $cap ) ) ? 'checked' : ''; ?> class="create laporan lap_buku_besar" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_lap_buku_besar" <?php echo ( in_array( 'read_lap_buku_besar', $cap ) ) ? 'checked' : ''; ?> class="read laporan lap_buku_besar" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_lap_buku_besar" <?php echo ( in_array( 'update_lap_buku_besar', $cap ) ) ? 'checked' : ''; ?> class="update laporan lap_buku_besar" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_lap_buku_besar" <?php echo ( in_array( 'delete_lap_buku_besar', $cap ) ) ? 'checked' : ''; ?> class="delete laporan lap_buku_besar" /></td>
				<td><input type="checkbox" class="all" id="lap_buku_besar" /></td>
			</tr>
			<tr>
				<td>Arus Kas</td>
				<td><input type="checkbox" name="capabilities[]" value="create_lap_arus_kas" <?php echo ( in_array( 'create_lap_arus_kas', $cap ) ) ? 'checked' : ''; ?> class="create laporan lap_arus_kas" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_lap_arus_kas" <?php echo ( in_array( 'read_lap_arus_kas', $cap ) ) ? 'checked' : ''; ?> class="read laporan lap_arus_kas" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_lap_arus_kas" <?php echo ( in_array( 'update_lap_arus_kas', $cap ) ) ? 'checked' : ''; ?> class="update laporan lap_arus_kas" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_lap_arus_kas" <?php echo ( in_array( 'delete_lap_arus_kas', $cap ) ) ? 'checked' : ''; ?> class="delete laporan lap_arus_kas" /></td>
				<td><input type="checkbox" class="all" id="lap_arus_kas" /></td>
			</tr>
			<tr>
				<td colspan="6" style="text-align:center"><?php echo form_submit($change); ?></td>
			</tr>
			<tr>
				<td colspan="5"><strong>Fasilitas</strong></td>
				<td><input type="checkbox" class="all" id="fasilitas" /></td>
			</tr>
			<tr>
				<td>Proses Jurnal</td>
				<td><input type="checkbox" name="capabilities[]" value="create_proses_jurnal" <?php echo ( in_array( 'create_proses_jurnal', $cap ) ) ? 'checked' : ''; ?> class="create fasilitas proses_jurnal" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_proses_jurnal" <?php echo ( in_array( 'read_proses_jurnal', $cap ) ) ? 'checked' : ''; ?> class="read fasilitas proses_jurnal" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_proses_jurnal" <?php echo ( in_array( 'update_proses_jurnal', $cap ) ) ? 'checked' : ''; ?> class="update fasilitas proses_jurnal" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_proses_jurnal" <?php echo ( in_array( 'delete_proses_jurnal', $cap ) ) ? 'checked' : ''; ?> class="delete fasilitas proses_jurnal" /></td>
				<td><input type="checkbox" class="all" id="proses_jurnal" /></td>
			</tr>
			<tr>
				<td>Proses Posting</td>
				<td><input type="checkbox" name="capabilities[]" value="create_proses_posting" <?php echo ( in_array( 'create_proses_posting', $cap ) ) ? 'checked' : ''; ?> class="create fasilitas proses_posting" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_proses_posting" <?php echo ( in_array( 'read_proses_posting', $cap ) ) ? 'checked' : ''; ?> class="read fasilitas proses_posting" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_proses_posting" <?php echo ( in_array( 'update_proses_posting', $cap ) ) ? 'checked' : ''; ?> class="update fasilitas proses_posting" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_proses_posting" <?php echo ( in_array( 'delete_proses_posting', $cap ) ) ? 'checked' : ''; ?> class="delete fasilitas proses_posting" /></td>
				<td><input type="checkbox" class="all" id="proses_posting" /></td>
			</tr>
			<tr>
				<td>Tutup Buku</td>
				<td><input type="checkbox" name="capabilities[]" value="create_tutup_buku" <?php echo ( in_array( 'create_tutup_buku', $cap ) ) ? 'checked' : ''; ?> class="create fasilitas tutup_buku" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_tutup_buku" <?php echo ( in_array( 'read_tutup_buku', $cap ) ) ? 'checked' : ''; ?> class="read fasilitas tutup_buku" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_tutup_buku" <?php echo ( in_array( 'update_tutup_buku', $cap ) ) ? 'checked' : ''; ?> class="update fasilitas tutup_buku" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_tutup_buku" <?php echo ( in_array( 'delete_tutup_buku', $cap ) ) ? 'checked' : ''; ?> class="delete fasilitas tutup_buku" /></td>
				<td><input type="checkbox" class="all" id="tutup_buku" /></td>
			</tr>
			<tr>
				<td>Batal Tutup Buku</td>
				<td><input type="checkbox" name="capabilities[]" value="create_batal_tutup_buku" <?php echo ( in_array( 'create_batal_tutup_buku', $cap ) ) ? 'checked' : ''; ?> class="create fasilitas batal_tutup_buku" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_batal_tutup_buku" <?php echo ( in_array( 'read_batal_tutup_buku', $cap ) ) ? 'checked' : ''; ?> class="read fasilitas batal_tutup_buku" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_batal_tutup_buku" <?php echo ( in_array( 'update_batal_tutup_buku', $cap ) ) ? 'checked' : ''; ?> class="update fasilitas batal_tutup_buku" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_batal_tutup_buku" <?php echo ( in_array( 'delete_batal_tutup_buku', $cap ) ) ? 'checked' : ''; ?> class="delete fasilitas batal_tutup_buku" /></td>
				<td><input type="checkbox" class="all" id="batal_tutup_buku" /></td>
			</tr>
			<tr>
				<td>User</td>
				<td><input type="checkbox" name="capabilities[]" value="create_user" <?php echo ( in_array( 'create_user', $cap ) ) ? 'checked' : ''; ?> class="create fasilitas user" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_user" <?php echo ( in_array( 'read_user', $cap ) ) ? 'checked' : ''; ?> class="read fasilitas user" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_user" <?php echo ( in_array( 'update_user', $cap ) ) ? 'checked' : ''; ?> class="update fasilitas user" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_user" <?php echo ( in_array( 'delete_user', $cap ) ) ? 'checked' : ''; ?> class="delete fasilitas user" /></td>
				<td><input type="checkbox" class="all" id="user" /></td>
			</tr>
			<tr>
				<td>Company</td>
				<td><input type="checkbox" name="capabilities[]" value="create_company" <?php echo ( in_array( 'create_company', $cap ) ) ? 'checked' : ''; ?> class="create fasilitas company" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_company" <?php echo ( in_array( 'read_company', $cap ) ) ? 'checked' : ''; ?> class="read fasilitas company" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_company" <?php echo ( in_array( 'update_company', $cap ) ) ? 'checked' : ''; ?> class="update fasilitas company" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_company" <?php echo ( in_array( 'delete_company', $cap ) ) ? 'checked' : ''; ?> class="delete fasilitas company" /></td>
				<td><input type="checkbox" class="all" id="company" /></td>
			</tr>
			<tr>
				<td>Backup Database</td>
				<td><input type="checkbox" name="capabilities[]" value="create_backup_database" <?php echo ( in_array( 'create_backup_database', $cap ) ) ? 'checked' : ''; ?> class="create fasilitas backup_database" /></td>
				<td><input type="checkbox" name="capabilities[]" value="read_backup_database" <?php echo ( in_array( 'read_backup_database', $cap ) ) ? 'checked' : ''; ?> class="read fasilitas backup_database" /></td>
				<td><input type="checkbox" name="capabilities[]" value="update_backup_database" <?php echo ( in_array( 'update_backup_database', $cap ) ) ? 'checked' : ''; ?> class="update fasilitas backup_database" /></td>
				<td><input type="checkbox" name="capabilities[]" value="delete_backup_database" <?php echo ( in_array( 'delete_backup_database', $cap ) ) ? 'checked' : ''; ?> class="delete fasilitas backup_database" /></td>
				<td><input type="checkbox" class="all" id="backup_database" /></td>
			</tr>
			<tr>
				<td colspan="6" style="text-align:center"><?php echo form_submit($change); ?></td>
			</tr>
		<tbody>
	</table>
	<?php echo form_close(); ?>
	<p><a href="<?php echo base_url('fasilitas/user'); ?>" class="btn">&lt;&lt; Kembali ke halaman sebelumnya</a></p>
	<!--<div class="pull-right">&copy; 2012 <a href="//dutamegah.co.id/" target="_blank">Migent Software</a> &middot; {elapsed_time} s &middot; {memory_usage} s</div>-->
</div>
<div id="mask"></div>
<?php
echo '<!--'; ?>
<pre>
<?php print_r( unserialize( $capabilities ) ); ?>
</pre><?php
echo '-->'; ?>
<script>
$( document ).ready( function() {
		$('.fasilitas').each( function(){
			if ((Left($(this).val(),6)=='create') || (Left($(this).val(),6)=='delete') || (Left($(this).val(),6)=='update')){
				$(this).attr("disabled", true);
			}
		});
		$('.laporan').each( function(){
			if ((Left($(this).val(),6)=='create') || (Left($(this).val(),6)=='delete') || (Left($(this).val(),6)=='update')){
				$(this).attr("disabled", true);
			}
		});

var att=document.createAttribute("class");
att.value="role";
document.getElementsByName("role")[0].setAttributeNode(att);
var att2=document.createAttribute("id");
att2.value="role";
document.getElementsByName("role")[0].setAttributeNode(att2);
$('.role').val('<?php echo $level; ?>')
	$('.role').click(function(){
		$('.delete').attr("disabled", false);
		if (Number($('.role').val())==99){
			$('.all').each( function(){
				var id = $(this).attr('id');
				var checked = $(this).attr('checked');
				$('.'+id).each( function(){
					$(this).attr('checked', 'checked');
				});
			});
		}else if (Number($('.role').val())==1){
			$('.delete').removeAttr('checked');
			$('.delete').attr("disabled", true);
		}
		$('.fasilitas').each( function(){
			if ((Left($(this).val(),6)=='create') || (Left($(this).val(),6)=='delete') || (Left($(this).val(),6)=='update')){
				$(this).attr("disabled", true);
			}
		});
		$('.laporan').each( function(){
			if ((Left($(this).val(),6)=='create') || (Left($(this).val(),6)=='delete') || (Left($(this).val(),6)=='update')){
				$(this).attr("disabled", true);
			}
		});
	});

	$('.all').click( function(){
		var id = $(this).attr('id');
		var checked = $(this).attr('checked');
		$('.'+id).each( function(){
			if (Number($('.role').val())==1){
				if ($(this).is(':enabled')){
					if( checked ) $(this).attr('checked', 'checked');
					else $(this).removeAttr('checked');
				}else{
					$(this).removeAttr('checked');
				}
			}else{
				if( checked ) $(this).attr('checked', 'checked');
				else $(this).removeAttr('checked');
			}
		});
	});
});
</script>