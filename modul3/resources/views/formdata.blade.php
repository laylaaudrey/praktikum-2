<!DOCTYPE html>
<html>
<head>
    <title>Form Biodata</title>
</head>
<body>
    <h2>Input Biodata</h2>
    <form action= "/output" method="post">
        @csrf
        <label>Judul :</label>
        <input type="text" name="judul"><br><br>

         <label>Deskripsi :</label>
         <textarea name="deskripsi"></textarea><br><br>

         <label>kategori :</label>
        <input type="text" name="kategori"><br><br>

        <button type="submit">Kirim </button>
    </form>
</body>
</html>