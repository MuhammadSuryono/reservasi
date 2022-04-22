<?php
$vars = array(
    '[hari_pengumuman]' => "Untuk menampilkan hari pengumuman",
    '[tanggal_pengumuman]' => "Untuk menampilkan tanggal pengumuman",
    '[nama_sesi]' => "Untuk nama sesi",
    '[hari_sesi]' => "Hari sesi yang diikuti",
    '[jam_mulai_sesi]' => "Jam mulai sesi",
    '[jam_selesai_sesi]' => "Jam selesai sesi",
);
?>
<div class="modal fade" id="templateAdd" tabindex="-1" role="dialog" aria-labelledby="templateAddLabel" aria-hidden="true" data-type="create">
    <div class="modal-dialog" role="document" style="max-width: 1500px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="templateAddLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="template_form">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="type">Jenis</label>
                                <select name="type" id="type" class="form-control">
                                    <option value="">Pilih Jenis</option>
                                    <option value="pengumuman">Pengumuman</option>
                                </select>
                            </div>
                            <div class="ibox">
                                <div class="ibox-title">
                                    <h5>Variable Template</h5>
                                    <div class="ibox-tools">
                                        <a class="collapse-link">
                                            <i class="fa fa-chevron-up"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="ibox-content">
                                    <ul>
                                        <?php
                                        foreach ($vars as $key => $value) {
                                            echo "<li><code>$key</code> : $value</li>";
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="form-group">
                                <label for="question">Template</label>
                                <textarea class="summernote" name="value" id="value"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="modalDeleteLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDeleteLabel">Konfirmasi delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah anda yakin ingin menghapus template ini ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" id="delete" class="btn btn-danger">Hapus</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalPreview" tabindex="-1" aria-labelledby="modalPreviewLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 1500px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalPreviewLabel">Preview</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="preview"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>