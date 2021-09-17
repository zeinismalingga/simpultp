<?php

$config = array(
        'auth/login' => array(
                array(
                        'field' => 'username',
                        'label' => 'Username',
                        'rules' => 'required|trim|min_length[5]'
                ),
                array(
                        'field' => 'password',
                        'label' => 'Password',
                        'rules' => 'required'
                )
        ),
        'auth/add_user' => array(
                array(
                        'field' => 'username',
                        'label' => 'Username',
                        'rules' => 'required|trim|min_length[5]'
                ),
                array(
                        'field' => 'password',
                        'label' => 'Password',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'confirm-password',
                        'label' => 'confirm password',
                        'rules' => 'required|matches[password]'
                )
        ),
        'auth/edit' => array(
                array(
                        'field' => 'password',
                        'label' => 'Password',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'confirm-password',
                        'label' => 'confirm password',
                        'rules' => 'required|matches[password]'
                )
        ),
        'varietas/add' => array(
            array(
                        'field' => 'nama_varietas',
                        'label' => 'nama_varietas',
                        'rules' => 'required'
                ),
            array(
                        'field' => 'kode',
                        'label' => 'kode',
                        'rules' => 'required'
                ),
        ),
        'varietas/edit' => array(
            array(
                        'field' => 'nama_varietas',
                        'label' => 'nama_varietas',
                        'rules' => 'required'
                ),
            array(
                        'field' => 'kode',
                        'label' => 'kode',
                        'rules' => 'required'
                ),
        ),
        'sertifikasi_apbd/add' => array(
            array(
                        'field' => 'jenis_anggaran',
                        'label' => 'jenis anggaran',
                        'rules' => 'required'
                ),
        ),
        'sertifikasi_apbd/edit' => array(
            array(
                        'field' => 'no_induk',
                        'label' => 'no induk',
                        'rules' => 'required'
                ),
        ),
        'sertifikasi_apbn/add' => array(
            array(
                        'field' => 'jenis_anggaran',
                        'label' => 'jenis anggaran',
                        'rules' => 'required'
                ),
        ),
        'sertifikasi_apbn/edit' => array(
            array(
                        'field' => 'no_induk',
                        'label' => 'no induk',
                        'rules' => 'required'
                ),
        ),
        'lab_input_apbn/add' => array(
            array(
                        'field' => 'benih_murni',
                        'label' => 'benih murni',
                        'rules' => 'required'
                ),
        ),
        'lab_input_apbd/add' => array(
            array(
                        'field' => 'benih_murni',
                        'label' => 'benih murni',
                        'rules' => 'required'
                ),
        ),
        'tu_apbn/add' => array(
            array(
                        'field' => 'no_rekomendasi',
                        'label' => 'No Rekomendasi',
                        'rules' => 'required'
                ),
        ),
        'tu_apbn/edit' => array(
            array(
                        'field' => 'no_tu',
                        'label' => 'No TU',
                        'rules' => 'required'
                ),
        ),
        'tu_apbd/add' => array(
            array(
                        'field' => 'no_rekomendasi',
                        'label' => 'No Rekomendasi',
                        'rules' => 'required'
                ),
        ),
        'tu_apbd/edit' => array(
            array(
                        'field' => 'no_tu',
                        'label' => 'No TU',
                        'rules' => 'required'
                ),
        ),
        'lab/edit' => array(
            array(
                        'field' => 'kadar_air',
                        'label' => 'Kadar Air',
                        'rules' => 'required'
                ),
        ),
        'stok_bulanan_pangan/list' => array(
            array(
                        'field' => 'id_komoditi',
                        'label' => 'id komoditi',
                        'rules' => 'required'
                ),
        ),
        'stok_bulanan_pangan/add' => array(
            array(
                        'field' => 'id_kota',
                        'label' => 'kota',
                        'rules' => 'required'
                ),
        ),
        'stok_bulanan_pangan/edit' => array(
            array(
                        'field' => 'id_kota',
                        'label' => 'kota',
                        'rules' => 'required'
                ),
        ),
        'pelabelan_benih/add' => array(
            array(
                        'field' => 'no_awal',
                        'label' => 'no awal',
                        'rules' => 'required'
                ),
        ),
        'pelabelan_benih/edit' => array(
            array(
                        'field' => 'no_awal',
                        'label' => 'no awal',
                        'rules' => 'required'
                ),
        ),
        'inventaris_produsen/add' => array(
            array(
                        'field' => 'nama_produsen',
                        'label' => 'Nama Produsen',
                        'rules' => 'required'
                ),
        ),
        'inventaris_produsen/edit' => array(
            array(
                        'field' => 'nama_produsen',
                        'label' => 'Nama Produsen',
                        'rules' => 'required'
                ),
        ),
        'inventaris_pengedar/add' => array(
            array(
                        'field' => 'no_rekomendasi',
                        'label' => 'No Rekomendasi',
                        'rules' => 'required'
                ),
        ),
        'inventaris_pengedar/edit' => array(
            array(
                        'field' => 'no_rekomendasi',
                        'label' => 'No Rekomendasi',
                        'rules' => 'required'
                ),
        ),
        'cek_mutu_pangan/add' => array(
            array(
                        'field' => 'no_contoh_benih',
                        'label' => 'no contoh benih',
                        'rules' => 'required'
                ),
        ),
        'cek_mutu_pangan/edit' => array(
            array(
                        'field' => 'no_contoh_benih',
                        'label' => 'no contoh benih',
                        'rules' => 'required'
                ),
        ),
        'cek_mutu_pangan/edit_lab' => array(
            array(
                        'field' => 'tonase',
                        'label' => 'tonase',
                        'rules' => 'required'
                ),
        ),
        'cek_mutu_pangan/edit_wasar' => array(
            array(
                        'field' => 'no_surat_pengantar',
                        'label' => 'no surat pengantar',
                        'rules' => 'required'
                ),
        ),
        'tu_apbn/pemlap1' => array(
            array(
                        'field' => 'no_pemlap',
                        'label' => 'no pemlap',
                        'rules' => 'required'
                ),
        ),
        'tu_apbn/pemlap2' => array(
            array(
                        'field' => 'no_pemlap',
                        'label' => 'no pemlap',
                        'rules' => 'required'
                ),
        ),
        'tu_apbn/pemlap3' => array(
            array(
                        'field' => 'no_pemlap',
                        'label' => 'no pemlap',
                        'rules' => 'required'
                ),
        ),
        'tu_apbd/pemlap1' => array(
            array(
                        'field' => 'no_pemlap',
                        'label' => 'no pemlap',
                        'rules' => 'required'
                ),
        ),
        'tu_apbd/pemlap2' => array(
            array(
                        'field' => 'no_pemlap',
                        'label' => 'no pemlap',
                        'rules' => 'required'
                ),
        ),
        'tu_apbd/pemlap3' => array(
            array(
                        'field' => 'no_pemlap',
                        'label' => 'no pemlap',
                        'rules' => 'required'
                ),
        ),
        'tu_apbn/llhp' => array(
            array(
                        'field' => 'no_llhp',
                        'label' => 'no llhp',
                        'rules' => 'required'
                ),
        ),
        'tu_apbd/llhp' => array(
            array(
                        'field' => 'no_llhp',
                        'label' => 'no llhp',
                        'rules' => 'required'
                ),
        ),
        'wasar/edit' => array(
            array(
                        'field' => 'tgl_pemeriksaan_alat_panen',
                        'label' => 'tgl pemeriksaan alat_panen',
                        'rules' => 'required'
                ),
        ),



);
