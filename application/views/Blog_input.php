<?php $this->load->view('/template/header') ?>
<!-- Page Header-->
<header class="masthead" style="background-image: url('<?= base_url(); ?>assets/assets/img/about-bg.jpg')">
	<div class="container position-relative px-4 px-lg-5">
		<div class="row gx-4 gx-lg-5 justify-content-center">
			<div class="col-md-10 col-lg-8 col-xl-7">
				<div class="post-heading">
					<h1>Tambah Artikel</h1>
				</div>
			</div>
		</div>
	</div>
</header>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<h1>Tambah Artikel</h1>
			<?= form_open_multipart(); ?>
			<div class="form-group">
				<label for="title">Title</label>
				<br><br>
				<?= form_input('title', null, 'id="title", class="form-control" required'); ?>
				<br><br>
			</div>

			<div class="form-group">
				<label for="url">Url</label> <br>
				<?= form_input('url', null, 'id="url", class="form-control" required'); ?>
				<br><br>
			</div>
			<div class="form-group">
				<label for="content">konten</label>
				<br><br>
				<?= form_textarea('content', null, 'id="content", class="form-control" required'); ?>
				<br><br>
			</div>
			<div class="form-group">
				<label for="cover">Cover</label>
				<?= form_upload('cover', null,'id="cover", class="form-control" required'); ?>
				<br><br><br>
			</div>


			<button type="submit" name="submit" class="btn btn-primary">Simpan Artikel</button>
			</form>
		</div>
	</div>
</div>
</body>

</html>
<?php $this->load->view('/template/footer') ?>
