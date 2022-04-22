<button class="btn btn-primary mb-3" data-toggle="modal" data-target="#templateAdd">Tambah Data</button>
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
        <table class="table table-bordered text-center">
            <thead>
            <tr>
                <th width="5">No</th>
                <th>Jenis</th>
                <th>Template</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php if (isset($templates)) : ?>
                <?php foreach ($templates->data as $key => $value) : ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td class="text-left"><?= ucwords($value->type) ?></td>
                        <td><button data-toggle="modal" data-target="#modalPreview" data-value="<?= htmlspecialchars(json_encode($value)) ?>" class="btn btn-info btn-sm">Preview</button></td>
                        <td>
                            <button data-toggle="modal" data-target="#templateAdd" data-id="<?= $value->id ?>" data-template="<?= htmlspecialchars(json_encode($value)) ?>" class="btn btn-primary btn-sm">Edit</button>
                            <button data-toggle="modal" data-target="#modalDelete" data-id="<?= $value->id ?>" class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                <?php endforeach ?>
            <?php endif ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->load->view('admin/setting/template/modal_form', [], true) ?>