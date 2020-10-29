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
                        'field' => 'pemohon',
                        'label' => 'pemohon',
                        'rules' => 'required'
                ),
        ),
        'sertifikasi_apbd/edit' => array(
            array(
                        'field' => 'pemohon',
                        'label' => 'pemohon',
                        'rules' => 'required'
                ),
        ),
        'sertifikasi_apbn/add' => array(
            array(
                        'field' => 'pemohon',
                        'label' => 'pemohon',
                        'rules' => 'required'
                ),
        ),
        'sertifikasi_apbn/edit' => array(
            array(
                        'field' => 'pemohon',
                        'label' => 'pemohon',
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
                        'field' => 'no_tu',
                        'label' => 'No TU',
                        'rules' => 'required'
                ),
        ),
        'tu_apbd/add' => array(
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
                        'field' => 'id_komoditi',
                        'label' => 'id komoditi',
                        'rules' => 'required'
                ),
        ),
        'cek_mutu_pangan/edit' => array(
            array(
                        'field' => 'id_komoditi',
                        'label' => 'id komoditi',
                        'rules' => 'required'
                ),
        ),



);
