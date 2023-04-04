<?php
$nama_server = "localhost";
$nama_user = "root";
$password = "";
$dbname = "informatika";

$conn = mysqli_connect($nama_server, $nama_user, $password, $dbname);

if (!$conn) {
    die("koneksi gagal: " . mysqli_connect_error());
}
function baseurl($link = '')
{
    $baseurl = "http://localhost/FIDAP/";

    if (!empty($link)) {
        $url = $baseurl . $link;
    } else {
        $url = $baseurl;
    }
    return $url;
}
function redirectto($url = "", $second = 0)
{
    $redirecto = '<meta http-equiv="refresh" content="' . $second . ';url=' . baseurl($url) . '">';
    echo $redirecto;die;
}