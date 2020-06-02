<?php

$koneksi = mysqli_connect('localhost', 'root', '', 'db_eoq');

class conn
{
    function ambilData($query)
    {
        global $koneksi;

        $ambil = mysqli_query($koneksi, $query);
        $hasil = [];

        while ($pecah = mysqli_fetch_assoc($ambil)) {
            $hasil[] = $pecah;
        }

        return $hasil;
    }
}
