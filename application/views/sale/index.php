<div class="container">
    <div class="row">
        <div id="slide" class="col-lg-6 mt-4">
            <!-- <div id="carouselExampleIndicators" class="carousel slide d-none d-lg-block" data-ride="carousel"> -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <?php foreach ($paket1 as $corousel) : ?>
                        <div class="carousel-item <?= $corousel['tampil_paket'] ?>">
                            <img class="mx-auto d-block w-100" src="<?= base_url('assets/img/') . $corousel['gambar_paket'] ?>" style="max-width: 80%" alt="...">
                            <div class="carousel-caption">
                                <h5><?= $corousel['nama_paket'] ?></h5>
                                <p><?= $corousel['deskripsi_paket'] ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mt-4">
            <div class="preloader">
                <div class="centered-element text-light">
                    <div class="spinner-border" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
            </div>
            <div class="formActtion">
                <form id="formDaftar" action="<?= base_url('sale/konfirmasi') ?>" method="POST">
                    <div class="form-group">
                        <label for="namaCustomer">Nama Lengkap</label>
                        <input name="kodeUnik" type="hidden" value="<?= rand(10, 900) ?>">
                        <input name="namaCustomer" type="text" class="form-control" id="namaCustomer" maxlength="30" placeholder="Nama" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="pilihanPaket">Pilihan Paket</label>
                        <select name="pilihanPaket[]" class="form-control selectpicker required" id="pilihanPaket" data-size="4" multiple required>
                            <?php foreach ($paket1 as $paket) : ?>
                                <option value="<?= $paket['id_paket'] ?>"><?= $paket['nama_paket'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nomorCustomer">Nomor Whatsapp</label>
                        <input name="nomorCustomer" type="tel" class="form-control" id="nomorCustomer" maxlength="20" placeholder="Ponsel" required>
                    </div>
                    <div class="form-group">
                        <label for="pilihanTempat">Cukur di mana?</label>
                        <select name="pilihanTempat" class="form-control selectpicker" id="pilihanTempat" data-live-search="true" data-live-search-placeholder="Cari kecamatan" data-size="4" required>
                            <?php foreach ($kecamatan as $row) : ?>
                                <option value="<?= $row['id_kec'] ?>"><?= $row['nama_kec'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="datepicker">Order Kapan?</label>
                        <input name="tanggalCukur" id="datepicker" class="form-control" placeholder="Tanggal.." required>
                    </div>
                    <div class="form-group">
                        <label for="pilihanPaket">Pukul Berapa? </label>
                        <select name="jamCukur" placeholder="Pilih.." class="form-control selectpicker" id="pilihanPaket" data-size="4" required>
                            <?php for ($i = 9; $i < 21; $i++) : ?>
                                <option><?= $i ?>:00 WIB</option>
                            <?php endfor ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                </form>
            </div>
        </div>
    </div>
    <hr>
</div>



<div id="paket" class="container">
    <div class="">
        <header class="">
            <h3 class="aboutHeader">Package</h3>
            <!-- <span class="byline">Replicating and improving the lightbox module seen on Medium with fluid transitions</span> -->
        </header>
        <div class="card-deck">
            <?php foreach ($paket1 as $paketan) : ?>
                <div class="card">
                    <!-- <img class="card-img-top" src=".../100px180/" alt="Card image cap"> -->
                    <div class="card-body">
                        <h5 class="card-title"><?= $paketan['nama_paket']; ?></h5>
                        <p class="text-monospace"><?= $paketan['deskripsi_paket']; ?></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Rp. <?= number_format($paketan['harga_paket']); ?>,-</small>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    <hr>
</div>

<div id="service" class="container">
    <header class="">
        <h3 class="aboutHeader">Service</h3>
        <!-- <span class="byline">Replicating and improving the lightbox module seen on Medium with fluid transitions</span> -->
    </header>

    <p class="aboutText text-monospace text-justify">Kami menyediakan kebutuhan cukur dalam genggaman ponsel anda. Anda tak perlu mengantre, tapi tetap bisa merasakan kualitas barbershop premium #stayathome.<br>
        Kami selalu memerhatikan keselamatan kerja dan kesehatan pelanggan sekaligus pegawai kami. Dibekali oleh protokol yang sudah kami buat melalui diskusi dengan dokter agar terhindar dari penyebaran penyakit atau virus.</p>

    <hr>
</div>



<div id="about" class="container">
    <header class="">
        <h3 class="aboutHeader">About</h3>
        <!-- <span class="byline">Replicating and improving the lightbox module seen on Medium with fluid transitions</span> -->
    </header>

    <p class="aboutText text-monospace text-justify">Kami bergerak di dunia barbershop sejak 2010, yang saat ini beroperasi di Jl. Serma Taruna Ramli No 12, Kotabaru, Gondukusuman, Yk (Arta Barber and Chill). Kami berusaha melayani pelanggan kami dengan sebaik mungkin salah satunya dengan menambahkan fasilitas <i>mobile barbershop</i> dengan kualitas Barbershop premium, kapster profesional dan dengan harga yang pantas.</p>
    <br><br><br>
</div>