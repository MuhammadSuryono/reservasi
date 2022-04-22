<div class="animated fadeInDown">
    <div class="row justify-content-center">
        <div class="col-md-8 mb-5">
            <div class="ibox-content">
                <div class="d-block text-center">
                    <img src="<?= base_url('assets/img/logo.png') ?>" width="200" />
                </div>
                <div id="error-message"></div>
                <form action="<?= base_url('/exam/register/user') ?>" id="user_form" method="post">
                    <div class="form-group">
                        <input type="hidden" name="token" class="form-control" value="<?= $token ?>" placeholder="Session Key" required />
                    </div>
                    <div class="form-group">
                        <label for="full_name">Nama Lengkap</label>
                        <input type="text" name="full_name" id="full_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="place_of_birth">Tempat Lahir</label>
                        <input type="text" name="place_of_birth" id="place_of_birth" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="date_of_birth">Tanggal Lahir</label>
                        <div class="row">
                            <div class="col-lg-4">
                                <select class="form-control" name="date">
                                    <option value="">Tanggal</option>
                                    <?php for ($i = 1; $i <= 31; $i++) { ?>
                                        <option value="<?= $i ?>"><?= $i ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <select class="form-control" name="month">
                                    <option value="">Bulan</option>
                                    <?php
                                    $months = array(
                                        'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
                                    );
                                    for ($i = 0; $i <= count($months); $i++) { ?>
                                        <option value="<?= $i + 1 ?>"><?= $months[$i] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <select class="form-control" name="year">
                                    <option value="">Tahun</option>
                                    <?php for ($i = date('Y'); $i >= date('Y') - 100; $i--) { ?>
                                        <option value="<?= $i ?>"><?= $i ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" type="email" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="phone_number">Nomor HP</label>
                        <input class="form-control" type="tel" name="phone_number" id="phone_number">
                    </div>
                    <div class="form-group">
                        <label for="address">Alamat</label>
                        <input class="form-control" type="text" name="address" id="address">
                        <small>Masukkan alamat yang lengkap guna untuk keperluan pengiriman Sertifikat</small>
                    </div>
                    <button id="btn-submit-form" type="submit" class="btn btn-primary block full-width m-b"><i class="fa fa-check"></i> Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>