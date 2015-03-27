<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="container">
	<h2>Manage Users</h2>
	<div id="alert"></div>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Username</th>
				<th>Email</th>
				<th>Role</th>
				<th colspan="2">Actions</th>
			</tr>
		<thead>
		<tbody>
		</tbody>
	</table>
	<div class="row">
		<div class="span12">
			<a href="<?php echo base_url('auth/register'); ?>" class="btn btn-primary">Register More Users</a>
		</div>
	</div>
	
</div>
<div id="mask"></div>
<script>
$( document ).ready( function() {
	$.post( 'db_user', {}, function( result ){
		var data = $.parseJSON(result);
		if( $.isEmptyObject(error = data.error) ){
			if( $.isEmptyObject( users = data.result) ){
			} else {
				for( var i = 0, role = 'Unknown'; i < users.length; i++ ){
					if( Number(users[i].role) === 1 ) role = 'Member';
					else if( Number(users[i].role) === 10 ) role = 'Admin';
					else if( Number(users[i].role) === 20 ) role = 'Superisor';
					else if( Number(users[i].role) === 30 ) role = 'Manager';
					else if( Number(users[i].role) === 40 ) role = 'Director';
					else if( Number(users[i].role) === 99 || Number(users[i].role) === 0 ) role = 'Super Admin'
					else role = 'Unknown';

					var row = '<tr>';
					row += '<td class="span1">'+users[i].username+'</td>';
					row += '<td class="span1">'+users[i].email+'</td>';
					row += '<td class="span1">'+role+'</td>';
					row += '<td class="span2">';
					row += '<form action="change_capabilities" method="post"><button class="btn" name="id" value="'+users[i].id+'"><i class="icon-pencil"></i> Change Capabilities</button></form>';
					row += '</td>';
					row += '<td class="span1">';
					row += '<form action="delete" method="post"><button class="btn btn-danger delete" name="id" value="'+users[i].id+'"><i class="icon-trash icon-white"></i> Delete</button></form>';
					row += '</td>';
					row += '</tr>';
					$('tbody').append( row );
				}
			}
		}
	});

	$( '.delete' ).click( function(e){
		if( ! confirm( 'Anda yakin untuk menghapus user ini?' ) ){
			e.preventDefault();
		}
	});
});
</script>