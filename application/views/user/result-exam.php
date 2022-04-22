
<div class="animated fadeInDown">
    <div class="row justify-content-center">
        <div class="col-md-10 mb-5">
            <div class="ibox-content">
                <div class="d-block text-center mb-lg-5 mt-4">
                    <img src="<?= base_url('assets/img/logo.png') ?>" width="200" />
                </div>
                <div class="text-center mb-3">
                    <img alt="image"
                         style="border: #3a526b solid 3px; border-radius: 50%;"
                         class="rounded-circle mb-2"
                         src="https://cdn4.iconfinder.com/data/icons/small-n-flat/24/user-alt-512.png"
                         width="100">
                    <h3><strong><?= strtoupper($dataResult->full_name) ?></strong></h3>
                    <h5 id="register-number"><?= $dataResult->number_of_register ?> <span style="cursor: pointer; color: #515151" id="copy-register"><i class="fa fa-copy"></i></span> </h5>
                    <div class="row">
                        <div class="col-lg-12">
                            <span class="label label-danger"><i class="fa fa-envelope"></i> <?= $dataResult->email ?></span>
                            <span class="label label-info"><i class="fa fa-phone"></i> <?= $dataResult->phone_number ?></span>
                        </div>
                    </div>
                </div>
                <br/>
                <br />
                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel panel-info">
                            <div class="panel-heading text-center">
                                NILAI PADA SERTIFIKAT
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                    <tr class="text-center">
                                        <td>No</td>
                                        <td>Category</td>
                                        <td>Score</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($dataResult->typeExam as $resume) { ?>
                                        <tr>
                                            <td class="text-center"><?= $no ?></td>
                                            <td><?= $resume->name ?></td>
                                            <td class="text-center"><?= $resume->value ?></td>
                                            <td></td>
                                        </tr>
                                        <?php
                                        $no++;
                                    } ?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td colspan="2" class="text-center font-bold">Total Score</td></td>
                                        <td class="text-center font-bold"><?= $dataResult->totalReward  ?></td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel panel-danger">
                            <div class="panel-heading text-center">
                                INFORMASI SERTIFIKAT
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td>Nomor Sertifikat</td>
                                        <td><?= $dataResult->sertificate_number  ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Sertifikat</td>
                                        <td><?= $dataResult->sertificate_date  ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Ujian</td>
                                        <td><?= $dataResult->exam_date  ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <a href="<?= base_url("exam/logout") ?>" class="btn btn-outline-secondary btn-block">
                    <i class="fa fa-sign-out"></i> Logout
                </a>
            </div>
        </div>
    </div>
</div>
<script>
    const txtRegisterNumber = document.getElementById("register-number");
    const iconRegisterCopy = document.getElementById("copy-register");

    iconRegisterCopy.addEventListener("click", function () {
        txtRegisterNumber.textContent;
        document.execCommand('copy');
    });
</script>