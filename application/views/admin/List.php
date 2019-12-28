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
			<!-- <?php

			$query = mysqli_query($koneksi, "SELECT `konten`.*, `kategori`.`nama`
			FROM `konten` 
				LEFT JOIN `kategori` ON `konten`.`id_kategori` = `kategori`.`id_kategori`;");

			while($data = mysqli_fetch_array($query)){
				echo "<tr>";
				echo "<td>".$data['judul']."</td>";
				echo "<td>".$data['nama']."</td>";
				echo "<td>".$data['isi_konten']."</td>";
				echo "<td>".$data['tanggal']."</td>";
				echo "
					<td class='py-0 align-middle'>
					<div class='btn-group btn-group-sm'>
						<a href='update.php?id_konten=".$data['id_konten']."' class='btn btn-warning'><i class='fa fa-edit'></i></a>
						<a href='' target='_blank' class='btn btn-info'><i class='fa fa-eye'></i></a>
						<a href='hapus.php?id=".$data['id_konten']."' class='btn btn-danger'><i class='fa fa-trash'></i></a>
					</div>
				</td>";
				echo "</tr>";
			}

			?> -->
			
			</tbody>
		</table>
		</div>
	</div>
</div>
<!-- /page content -->
