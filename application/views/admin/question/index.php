<button class="btn btn-primary mb-3" data-toggle="modal" data-target="#questionAdd">Tambah Data</button>
<div class="ibox ">
    <div class="ibox-title">
        <h5>Border Table </h5>
        <div class="ibox-tools">
            <a class="collapse-link">
                <i class="fa fa-chevron-up"></i>
            </a>
        </div>
    </div>
    <div class="ibox-content">
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Soal</th>
                    <th>Kategori Kode</th>
                    <th>Kategori Soal</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $key => $value) : ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= $value->title_question ?></td>
                        <td><?= $value->category_code ?></td>
                        <td><?= $value->category_name ?></td>
                        <td>
                            <?php if ($value->is_publish == 1) : ?>
                                <span class="badge badge-primary">Publish</span>
                            <?php else : ?>
                                <span class="badge badge-success">Draft</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="<?= base_url('admin/question/' . $value->id) ?>" class="btn btn-warning btn-sm">Soal</a>
                            <button data-toggle="modal" data-target="#questionAdd" data-id="<?= $value->id ?>" data-data="<?= htmlspecialchars(json_encode($value)) ?>" data-status="draft" class="btn btn-success btn-sm">Edit</i></button>
                            <button data-toggle="modal" data-target="#modalDelete" data-id="<?= $value->id ?>" class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
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

<?= $this->load->view('admin/question/modal_add.php', [], true) ?>