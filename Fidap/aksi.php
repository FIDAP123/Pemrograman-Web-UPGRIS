<?php
include('koneksi.php');
if (isset($_POST["edit-user"])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];

    //Edit user's name and email
    $sql = "UPDATE mahasiswa SET nama='$nama' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        redirectto("");
    } else {
        echo "Error updating user ". mysqli_error($conn);
    }
}else if (isset($_POST["delete-user"])){
    $id = $_POST['id'];
    $sql = "DELETE FROM mahasiswa WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        redirectto("");
    } else {
        echo "Error deleting user ". mysqli_error($conn);
    }
}
?>