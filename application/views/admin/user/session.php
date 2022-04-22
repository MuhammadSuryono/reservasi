<div class="ibox ">
    <div class="ibox-title">
        <h5><?= $title_tab ?> </h5>
        <div class="ibox-tools">
            <a class="collapse-link">
                <i class="fa fa-chevron-up"></i>
            </a>
        </div>
    </div>
    <div class="ibox-content">
        <div class="row mb-3">
            <div class="col-lg-3">
                <select class="form-control" onchange="onSelect(this)">
                    <option value="1" <?= $status == "1" ? "selected='selected'" : "" ?>>Aktif</option>
                    <option value="0" <?= $status == "0" ? "selected='selected'" : "" ?>>Tidak Aktif</option>
                </select>
            </div>
        </div>
        <table class="table table-bordered text-center">
            <thead>
            <tr>
                <th>No</th>
                <th>Nama Sesi</th>
                <th>Hari</th>
                <th>Total Peserta</th>
                <th>Is Active</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php if (isset($data)) : ?>
                <?php foreach ($data as $key => $value) : ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td class="text-left"><?= $value->session_name ?></td>
                        <td class="text-left"><?= $value->session_day ?></td>
                        <td><?= $value->total_peserta ?></td>
                        <td><span class="badge <?= $value->is_active == 1 ? "badge-primary" : "badge-danger" ?>"><?= $value->is_active == 1 ? "Aktif" : "Nonaktif" ?></span></td>
                        <td>
                            <a href="<?= base_url('admin/user/session?sessionKey=' . $value->session_key) ?>" class="btn btn-primary">Detail Peserta</a>
                            <button data-sessionKey="<?= $value->session_key ?>" class="btn btn-success" id="btn-download" onclick="download('<?= $value->session_key ?>')">Download</button>
                        </td>
                    </tr>
                <?php endforeach ?>
            <?php endif ?>
            </tbody>
        </table>
        <ul class="pagination justify-content-end">
            <?= $pagination['first'] ?>
            <?= $pagination['prev'] ?>
            <?= $pagination['data'] ?>
            <?= $pagination['next'] ?>
            <?= $pagination['last'] ?>
        </ul>
    </div>
</div>

<div class="modal fade" id="modalLoadingDownload" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="userModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <i class="fa fa-spinner fa-spin"></i> Sedang mengunduh data peserta sesi. Mohon tunggu beberapa saat....
            </div>
        </div>
    </div>
</div>

<script>
    function onSelect (e) {
        window.location.href = "<?= base_url('admin/peserta/sesi?status=') ?>" + e.value;
    }

    function download(sessionKey) {
        console.log(sessionKey)
        $('#modalLoadingDownload').modal('show');
        fetch(`http://156.67.218.146:8081/api/v1/exam/result/${sessionKey}/download`, {
            method: 'GET',
        })
            .then(res => res.blob())
            .then(blob => {
                $('#modalLoadingDownload').modal('hide');
                let url = window.URL.createObjectURL(blob);
                let a = document.createElement('a');
                a.href = url;
                a.download = `${sessionKey}.xlsx`;
                a.click();
            })
            .catch(err => console.log(err));
    }


</script>