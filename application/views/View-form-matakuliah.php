<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width-device-width, initial-scale">
        <title>input</title>
</head>
<body>
    <form action="<?= base_url{'matakuliah/cetak'}?>" method="post">
        <table>
            <tr>
                <th colspan="3">
                    Form Input Data Mata Kuliah
                </th>
            </tr>
            <tr>
                <td colspan="3">
                <hr>
                </td>
            </tr>
            <tr>
            <th>Kode MTK</th>
            <th>:</th>
            <td>
                <input type="text" name="kode" id="kode">
            </td>
            </tr>
            <tr>
                <th>Nama MTk</th>
                <td>:</td>
                <td><input type="text" name="nama" id="nama"></td>
            </tr>
            <tr>
                <th>SKS</th>
                <td>:</td>
                <td>
            <select nama="sks" id="sk">
                <option value="">Pilih</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
             </select>
            </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <input type="submit" value="submit">
            </td>
            </tr>
</table>
</form>