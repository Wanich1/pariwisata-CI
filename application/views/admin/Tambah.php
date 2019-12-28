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
				<form action="" method="POST" enctype="multipart/form-data">

					<div class="form-group row ">
					<label class="control-label col-md-3 col-sm-3 ">Title</label>
					<div class="col-md-9 col-sm-9 ">
						<input type="text" name="judul" class="form-control" placeholder="Add title">
					</div>
					</div>
					<div class="form-group row">
					<label class="control-label col-md-3 col-sm-3 ">Categories</label>
					<div class="col-md-9 col-sm-9 ">
						<select class="select2_single form-control" tabindex="-1">
						<option></option>
						<option value="AK">Alaska</option>
						<option value="HI">Hawaii</option>
						<option value="CA">California</option>
						<option value="NV">Nevada</option>
						</select>

						<!-- <select name="kategori" class="form-control select2" style="width: 200px;">
										<?php
										$query = mysqli_query($koneksi, "SELECT nama FROM kategori");

										while ($kat = mysqli_fetch_array($query)){
											echo "<option value='".$kat['nama']."'>".$kat['nama']."</option>";
										}
										?>
									</select> -->
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
								</div>
					<div class="ln_solid"></div>
					<div class="form-group">
					<!-- <div class="col-md-3 col-sm-3  offset-md-1"> -->
						<button type="submit" name="simpan" class="btn btn-success">Submit</button>
					<!-- </div> -->
					</div>

				</form>
				</div>
			</div>
	</div>
	<!-- /page content -->

