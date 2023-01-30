<?php $this->load->view('/template/header') ?>
<!-- Page Header-->
<header class="masthead" style="background-image: url('<?= base_url(); ?>assets/assets/img/post-sample-image.jpg')">
	<div class="container position-relative px-4 px-lg-5">
		<div class="row gx-4 gx-lg-5 justify-content-center">
			<div class="col-md-10 col-lg-8 col-xl-7">
				<div class="post-heading">
					<h1>Ubah Artikel</h1>
				</div>
			</div>
		</div>
	</div>
</header>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
		<h1>Ubah Artikel</h1>
			<?= form_open(); ?>
			<div class="form-group">
				<label for="title">Title</label>
				<br><br>
				<?= form_input('title', $blog['title'], 'id="title", class="form-control"'); ?>
				<br><br>
			</div>
			<div class="form-group">
				<label for="url">Url</label> <br>
				<?= form_input('url', $blog['url'], 'id="url", class="form-control"'); ?>
				<br><br>
			</div>
			<div class="form-group">
				<label for="content">Content</label>
				<br><br>
				<?= form_textarea('content', $blog['content'], 'id="content", class="form-control"'); ?>
				<br><br>
			</div>


			<button type="submit" class="btn btn-info">Submit</button>
			</form>
		</div>
	</div>
</div>

<?php $this->load->view('/template/footer') ?>
