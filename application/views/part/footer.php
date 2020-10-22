<?php foreach($portofolio as $pt) : ?>
<footer class="section-footer">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-12">
				<a class="navbar-brand" href="#">
					<img src="<?= base_url()?>assets/logo.svg" alt="Logo">
				</a>
				<p class="txt-quote">"We will never know the real answer before we try".</p>
			</div>
			<div class="col-md-4 col-12">
				<h3>Info</h3>
				<a class="txt-info no-mg" href="<?= base_url('about');?>">About</a><br>
				<a class="txt-info" href="<?= base_url('contact');?>">Contact</a>
				<div class="social-media">
					<a href="https://www.instagram.com/ardhan21/?hl=id"><img class="ic_instagram mr-1" src="<?= base_url()?>assets/instagram.svg"
							alt="instagram"></a>
					<a href="#"><img class="ic_linkedin mx-1" src="<?= base_url()?>assets/linkedin.svg"
							alt="linkedin"></a>
					<a href="#"><img class="ic_dribbble mx-1" src="<?= base_url()?>assets/dribbble.svg"
							alt="dribbble"></a>
					<a href="#"><img class="ic_github mx-1" src="<?= base_url()?>assets/github.svg" alt="github"></a>
				</div>
			</div>
			<div class="col-md-4 col-12">
				<h3>Contact</h3>
				<p class="no-mg"><?= $pt['email'];?></p>
				<p class="no-mg"><?= $pt['notelp'];?></p>
				<p class="no-mg"><?= $pt['alamat'];?></p>
				<p class="no-mg"><?= $pt['kota'];?></p>
				<p class="no-mg"><?= $pt['negara'];?></p>
			</div>
		</div>
	</div>
</footer>
<?php endforeach; ?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
	integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
	integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
	integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
</script>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script src="<?= base_url()?>/js/main.js"></script>
</body>

</html>
