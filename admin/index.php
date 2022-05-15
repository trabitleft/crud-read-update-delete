<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dashboard.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <table>
        <thead>
            <tr>
                <td id="inputUser">
                    <input type="text" placeholder="kode">
                </td>
                <td id="inputUser">
                    <input type="text" placeholder="nama_barang">
                </td>
                <td id="inputUser">
                    <input type="text" placeholder="harga">
                </td>
                <td id="inputUser">
                <button id="btn-add" name="btn-add"><i class="bi bi-plus-circle"></i></button>
                </td>
            </tr>
            <tr>
                <td colspan="4" id="space">...</td>
            </tr>
            <tr>
                <th>kode</th>
                <th>nama barang</th>
                <th>harga</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr id="display">
                <td>001</td>
                <td>roti</td>
                <td>5000</td>
                <td id="inputUser">
                    <button id="btn-edit" name="btn-edit"><i class="bi bi-pen"></i></button>
                    <button id="btn-del" name="btn-del"><i class="bi bi-trash"></i></button>
                </td>
            </tr>
            <tr>
                <td>001</td>
                <td>roti</td>
                <td>5000</td>
                <td id="inputUser">
                    <button id="btn-edit" name="btn-edit"><i class="bi bi-pen"></i></button>
                    <button id="btn-del" name="btn-del"><i class="bi bi-trash"></i></button>
                </td>
            </tr>
            <tr id="display">
                <td>001</td>
                <td>roti</td>
                <td>5000</td>
                <td id="inputUser">
                    <button id="btn-edit" name="btn-edit"><i class="bi bi-pen"></i></button>
                    <button id="btn-del" name="btn-del"><i class="bi bi-trash"></i></button>
                </td>
            </tr>
        </tbody>
        
    </table>
    </form>
</body>
</html>