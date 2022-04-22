
<div class="animated fadeInDown">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="ibox-content" style="height: 700px">
                <h2 class="font-weight-bold">Total Peserta: 100 <i class="fa fa-users"></i> </h2>
                <table class="table table-striped table-hover" id="peserta">
                    <thead>
                        <tr class="text-center">
                            <th width="3%">No</th>
                            <th>Nama</th>
                            <th>Divisi</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($peserta as $p) {
                            ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $p->full_name ?></td>
                                <td><?= $p->division_name ?></td>
                                <td class="text-center"><?= $p->status ? '<span class="badge badge-success">Hadir</span>': '<span class="badge badge-danger">Tidak Hadir</span>' ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>