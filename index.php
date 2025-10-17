<?php
$judul = "Lagu Favoritku";
$lagu = "Malibu Nights - LANY";
$alasan = "karena lagunya sedih tapi indah — kayak ngerasa patah hati yang lembut.";
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title><?= $judul ?></title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f0f4ff;
      color: #222;
      text-align: center;
      padding-top: 100px;
    }
    h1 { color: #5a6bf0; }
    p { font-size: 18px; }
    .note { color: #777; margin-top: 20px; }
  </style>
</head>
<body>
  <h1><?= $judul ?></h1>
  <p><strong>Lagu:</strong> <?= $lagu ?></p>
  <p><em>Kenapa suka?</em> <?= $alasan ?></p>
  <p class="note">🎧 “In Malibu nights, I can't breathe...”</p>
</body>
</html>
