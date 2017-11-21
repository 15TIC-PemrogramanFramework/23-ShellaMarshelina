<?php $this->load->view('templatesMember/header'); ?>

<div class ="row">
<div class="col-md-12 text-right">
<div style="margin-top:20px;margin-bottom:10px;">
	<?php echo anchor(site_url('member/tambah'),'<i class="fa fa-plus-circle" >
	</i> Tambah Data','class="btn btn-primary"'); ?>
</div>
	
</div>
</div>
<div class="row">
<table id="example" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Id Member</th>	
			<th>Nama</th>
			<th>Alamat</th>	
			<th>No Hp</th>
		</tr>
	</thead>
	<tbody>

<?php foreach ($data_member as $key => $row) {?>
		<tr>
			<td><?php echo $row->id; ?></td>	
			<td><?php echo $row->nama; ?></td>
			<td><?php echo $row->alamat; ?></td>
			<td><?php echo $row->nohp; ?></td>

			<td>
			<?php echo anchor(site_url('member/edit/'.$row->id),
				'<i class="fa fa-pencil"></i>',
				'class="btn btn-warning"'); ?>
			
			<?php echo anchor(site_url('member/delete/'.$row->id),
				'<i class="fa fa-trash"></i>',
				'class="btn btn-danger"'); ?>

			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>
</div>
<?php $this->load->view('templatesMember/footer'); ?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#example').DataTable();
	} );
</script>