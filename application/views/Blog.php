<?php $this->load->view('/template/header') ?>
	<!-- Page Header-->
	<header class="masthead" style="background-image: url('<?= base_url();?>assets/assets/img/home-bg.jpg')">
		<div class="container position-relative px-4 px-lg-5">
			<div class="row gx-4 gx-lg-5 justify-content-center">
				<div class="col-md-10 col-lg-8 col-xl-7">
					<div class="site-heading">
						<h1>Rafli Blog</h1>
						<span class="subheading">Selamat Datang Di Artikel Saya</span>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Main Content-->
	<div class="container px-4 px-lg-5">
		<div class="row gx-4 gx-lg-5 justify-content-center">
			<div class="col-md-10 col-lg-8 col-xl-7">
				<!-- Post preview-->
				<?php foreach ($blogs as $key => $value) : ?>
					<div class="post-preview">

						<a href="<?php echo site_url('/blog/detail/' . $value['url']) ?>">
							<h2 class="post-title"><?= $value['title']; ?></h2>
							<h3 class="post-subtitle"><?= $value['content']; ?></h3>
						</a>

						<p class="post-meta">
							Posted on September <?= $value['date']; ?>
							<a href="<?php echo site_url('blog/editBlog/' . $value['id']); ?>" class="edit-delete"> Edit</a>
							<a href="<?php echo site_url('blog/delete/' . $value['id']); ?>" class="edit-delete"> Delete</a>
						</p>
					</div>
					<hr>
				<?php endforeach ?>
			</div>
		</div>
	</div>
	<?php $this->load->view('/template/footer') ?>
