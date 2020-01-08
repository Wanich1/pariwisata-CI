<script src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>
	<!-- page content -->
	<div class="right_col" role="main">
			<div class="x_panel">
				<div class="x_title">
				<h2>Post An Articel <small>add an articel to your web</small></h2>
				<div class="clearfix"></div>
				</div>
				<div class="x_content">
				<br />
				<?php echo form_open_multipart('dashboard/tambah_konten_aksi'); ?>

					<div class="form-group row ">
					<label class="control-label col-md-3 col-sm-3 ">Title</label>
					<div class="col-md-9 col-sm-9 ">
						<input type="text" name="judul" class="form-control" placeholder="Add title">
						<?php echo form_error('judul','<div class="text-small text-danger">','</div>') ?>
					</div>
					</div>
					<div class="form-group row">
					<label class="control-label col-md-3 col-sm-3 ">Categories</label>
					<div class="col-md-9 col-sm-9 ">
						

						<select name="kategori" class="form-control select2" style="width: 200px;">
							<option>--Pilih kategori--</option>
							<?php foreach($kategori as $cat) : ?>
								<option value="<?php echo $cat['id_kategori'] ?>"><?php echo $cat['nama']?></option>
							<?php endforeach; ?>
										
									</select>
									<?php echo form_error('kategori','<div class="text-small text-danger">','</div>') ?>
					</div>
					</div>
					<div class="form-group row ">
					<label class="control-label col-md-3 col-sm-3 ">Upload Thumbnail</label>
					<div class="col-md-9 col-sm-9 ">
						<input type="file" name="foto" class="form-control">
					</div>
					</div>
					<div class="mb-3">

								<textarea name="isi" id="isi" required>
				</textarea>
									<script>
										CKEDITOR.replace( 'isi' , {
											filebrowserImageBrowseUrl : '<?php echo base_url();?>assets/kcfinder/',
											height: 500
										});
									</script>
									<?php echo form_error('isi','<div class="text-small text-danger">','</div>') ?>
								</div>
					<div class="ln_solid"></div>
					<div class="form-group">
					<!-- <div class="col-md-3 col-sm-3  offset-md-1"> -->
						<button type="submit" name="simpan" class="btn btn-success">Submit</button>
					<!-- </div> -->
					</div>
					

				<?php echo form_close(); ?>
				</div>
			</div>
	</div>
	<!-- /page content -->

