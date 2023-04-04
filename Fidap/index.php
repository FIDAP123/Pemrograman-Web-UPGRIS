<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ini pakek bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">
        <h1>Hello, world!</h1>

        <table class="table table-bordered">
            <thead>
                <tr class="bg-danger">
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include('koneksi.php');
                $sql = "SELECT * FROM mahasiswa";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    $no_urut = 0;
                    while ($row = $result->fetch_assoc()) {
                        $no_urut++;
                ?>
                        <tr>
                            <td>
                                <?php echo $no_urut; ?>
                            </td>
                            <td>
                                <?php echo $row["nama"]; ?>
                            </td>
                            <td>
                                <?php echo $row["asal"]; ?>
                            </td>
                            <td>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal <?php echo $row["id"]; ?>">
                                    Edit
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal<?php echo $row["id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" action="<?php echo baseurl("aksi.php"); ?>">
                                                    <input type="text" class="form-control" id="nama" placeholder="tuliskan nama anda" value="<?php echo $row["id"]; ?>" name="id">
                                                    <div class="mb-3">
                                                        <label for="nama" class="form-label">Nama Anda</label>
                                                        <input type="text" class="form-control" id="nama" placeholder="tuliskan nama anda" value="<?php echo $row["nama"]; ?>" name="nama">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="asal" class="form-label">Asal Anda</label>
                                                        <input type="text" class="form-control" id="asal" placeholder="tuliskan asal anda" value="<?php echo $row["asal"]; ?>">
                                                    </div>
                                                    <br>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-success" name="edit-user">Edit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                <?php
                    }
                } else {
                    echo "data kosong";
                }
                ?>

            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>