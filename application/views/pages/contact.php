<section class="section-page section-contact">
    <img class="img-rectangle d-none d-lg-block" src="<?= base_url()?>assets/rectangle-partikel.svg" alt="partikel">
    <img class="img-partikel d-none d-lg-block" src="<?= base_url()?>assets/partikel.svg" alt="partikel">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="txt-title">Get In Touch</h1>
            </div>
        </div>
        <div class="row justify-content-center flex-reverse">
            <div class="col-lg-5 col-md-6 col-12">
                <form class="form-contact" method="POST">
                    <div class="form-group mt-3">
                        <h5 for="nama">Name</h5>
                        <input type="text" class="form-control box-text" id="nama" name="nama" placeholder="cth : Ardhan Aryatama" required="required">
                    </div>
                    <div class="form-group mt-3">
                        <h5 for="email">Email Address</h5>
                        <input type="email" class="form-control box-text" id="email" name="email" placeholder="cth : ardhan@gmail.com" required="required">
                    </div>
                    <div class="form-group mt-3">
                        <h5 for="pesan">Message</h5>
                        <textarea style="resize: none;" type="email" class="form-control box-text" placeholder="Enter Text" name="pesan" id="pesan" rows="11" required="required"></textarea>
                    </div>
                    <button type="submit" name="kirim" class="btn btn-kirim mt-1" id="kirim">Kirim Pesan</button>
                </form>
            </div>
            <div class="col-lg-4 col-md-6 col-12 d-none d-lg-block">
                <?php foreach($portofolio as $pt) : ?>
                    <h5 class="mt-3">Email</h5>
                    <p class="no-mg"><?= $pt['email'];?></p>
                    <h5 class="mt-3">Phone</h5>
                    <p class="no-mg"><?= $pt['notelp'];?></p>
                    <h5 class="mt-3">Address</h5>
                    <p class="no-mg"><?= $pt['alamat'];?></p>
                    <p class="no-mg"><?= $pt['kota'];?></p>
                    <p class="no-mg"><?= $pt['negara'];?></p>
                    <iframe class="mt-2" style="border: 2px solid  rgba(0, 0, 0, 0.3);" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.88430982821325!2d107.06011395094876!3d-6.244091983927414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698f04733a31fd%3A0xbfd66798f5c9d2b!2sJl.%20Bumi%20Lestari%20Raya%2C%20Mangunjaya%2C%20Kec.%20Tambun%20Sel.%2C%20Bekasi%2C%20Jawa%20Barat%2017510!5e0!3m2!1sid!2sid!4v1603343485180!5m2!1sid!2sid" width="100%" height="260" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>