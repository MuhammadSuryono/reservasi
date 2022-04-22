<?php
    $nav = [
        'Konfigurasi Ujian' => [
            'url' => '/admin/question',
            'icon' => 'fa fa-th-large',
            'in' => ['admin/session', 'admin/category', 'admin/question', 'admin/packet'],
            'sub' => [
                'Sesi Pelaksanaan' => [
                    'url' => '/admin/session',
                    'icon' => 'fa fa-diamond',
                    'sub' => []
                ],
                'Kategori Soal' => [
                    'url' => '/admin/category',
                    'icon' => 'fa fa-bars'
                ],
                'Paket Soal' => [
                    'url' => '/admin/packet',
                    'icon' => 'fa fa-list'
                ],
            ]
        ],
        'Data Peserta' => [
            'url' => '/admin/user',
            'icon' => 'fa fa-user-plus',
            'in' => ['admin/user', 'admin/peserta/sesi'],
            'sub' => [
                'Sesi Peserta' => [
                    'url' => '/admin/peserta/sesi',
                    'icon' => 'fa fa-diamond',
                    'sub' => []
                ],
                'List Peserta' => [
                    'url' => '/admin/user',
                    'icon' => 'fa fa-bars'
                ],
            ]
        ],
        'Pengaturan' => [
            'url' => '/admin/setting',
            'icon' => 'fa fa-cog',
            'in' => ['admin/setting/announcement', 'admin/setting'],
            'sub' => [
                'Template Pengumuman' => [
                    'url' => '/admin/setting/announcement',
                    'icon' => 'fa fa-bullhorn'
                ],
            ]
        ],
    ]
?>
<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <h1 class="text-white font-weight-bold">Mr. <p>T<span class="text-navy">o</span>efl ID</p>
                    </h1>
                </div>
            </li>
            <?php foreach ($nav as $key => $value): ?>
            <li class="<?= in_array(uri_string(), $value["in"]) ? "active" : "" ?>">
                <a href="<?= base_url($value['url']) ?>" aria-expanded="false">
                    <i class="<?= $value['icon'] ?>"></i>
                    <span class="nav-label"><?= $key ?></span>
                    <?php if (isset($value['sub'])): ?>
                        <span class="fa arrow"></span>
                    <?php endif ?>
                </a>
                <?php if (isset($value['sub'])): ?>
                    <ul class="nav nav-second-level collapse <?= in_array(uri_string(), $value["in"]) ? "in" : "" ?>" aria-expanded="true" style="">
                    <?php foreach ($value['sub'] as $k => $sub): ?>
                        <li class="<?= strpos(current_url(), $sub['url']) ? "active" : "" ?>">
                            <a href="<?= base_url($sub['url']) ?>" aria-expanded="false">
                                <i class="<?= $sub['icon'] ?>"></i>
                                <span class="nav-label"><?= $k ?></span>
                            </a>
                        </li>
                    <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </li>
            <?php endforeach ?>
        </ul>

    </div>
</nav>