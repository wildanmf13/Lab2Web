<body>
  <h2>Form Input</h2>
  <form method="post">
    <label>Nama : </label>
    <input type="text" name="nama">
    <input type="submit" value="Kirim">
  </form>
  <?php
  if (isset($_GET["nama"])) {
    echo "Selamat Datang " . $_GET["nama"];
  }
  ?>
</body>