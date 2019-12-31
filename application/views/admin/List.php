<!-- page content -->
<div class="right_col" role="main">
	<div class="x_panel">
		<div class="x_title">
		<h2>Default Example <small>Users</small></h2>
		<div class="clearfix"></div>
		</div>
		<div class="x_content">
		<p class="text-muted font-13 m-b-30">
			DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
		</p>
		<table id="datatable" class="table table-striped table-bordered" style="width:100%">
			<thead>
			<tr>
				<th>Judul</th>
				<th>Kategori</th>
				<th>Artikel</th>
				<th>Tanggal</th>
				<th>Aksi</th>
			</tr>
			</thead>
			<tbody>
			<?php $no=1; ?>
			<?php foreach($konten as $kntn) : ?>
			<tr>
				<?php $no++; ?>
				<td><?php echo $kntn['judul'] ?></td>
				<td><?php echo $kntn['id_kategori'] ?></td>
				<td><?php echo $kntn['isi_konten'] ?></td>
				<td><?php echo $kntn['tanggal'] ?></td>
				<td class='py-0 align-middle'>
					<div class='btn-group btn-group-sm'>
						<a href='' class='btn btn-warning'><i class='fa fa-edit'></i></a>
						<a href=''  class='btn btn-info'><i class='fa fa-eye'></i></a>
						<a href='' class='btn btn-danger'><i class='fa fa-trash'></i></a>
					</div>
				</td>
			</tr>
			<?php endforeach; ?>			
			</tbody>
		</table>
		</div>
	</div>
</div>
<!-- /page content -->
