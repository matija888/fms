<?php
	$admin = User::find_by_id($session->user_id);
?>
<div class="widget">
	<h2><?php echo ($admin->status === '2') ? 'Superadmin' : 'Admin'; ?></h2>
	<div class="inner">
		<table>
			<tr>
				<td><b>Ime i prezime:</b></td>
				<td><?php echo $admin->full_name(); ?></td>
			</tr>
			<tr>
				<td><b>Korisničko ime:</b></td>
				<td><?php echo $admin->username; ?></td>
			</tr>
		</table>
		<div>
			<div class="btn" onclick="location.href='<?php echo url_for('drivers'); ?>'">Upravljanje vozacima baze</div>
			<div class="btn" onclick="location.href='<?php echo url_for('search-drivers'); ?>'">Pretraga vozača</div>
			<div class="btn" onclick="location.href='<?php echo url_for('logout'); ?>';">Odjava</div>
		</div>
	</div>
</div>