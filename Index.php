<!DOCTYPE html>
<html>

<head>
    <title>Manajemen File</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Manajemen File</h1>

        <h2>Daftar File</h2>
        <ul class="file-list">
            <li><a href="htdt">File 1</a></li>
            <li><a href="/path/to/file2.pdf">File 2</a></li>
            <li><a href="/path/to/file3.pdf">File 3</a></li>
            <li><a href="/path/to/file4.pdf">File 4</a></li>
            <li><a href="/path/to/file5.pdf">File 5</a></li>
            <li><a href="/path/to/file6.pdf">File 6</a></li>
        </ul>

        <h2>Unggah File</h2>
        <form class="upload-form" action="/upload" method="post" enctype="multipart/form-data">
            <label for="file">Pilih file:</label>
            <input type="file" id="file" name="file" required>
            <button type="submit">Unggah</button>
        </form>
    </div>
</body>

</html>