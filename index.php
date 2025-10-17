<?php
$judul = "Lagu Favoritku";
$lagu = "Malibu Nights - LANY";
$alasan = "karena lagu ini rasanya kayak langit malam setelah hujan — sepi tapi indah.";
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title><?= $judul ?></title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(180deg, #d9c2ff 0%, #b9c9ff 100%);
      color: #2d2d2d;
      text-align: center;
      padding-top: 80px;
      margin: 0;
      height: 100vh;
    }
    h1 {
      font-size: 2.2em;
      letter-spacing: 1px;
      margin-bottom: 10px;
      color: #3a3070;
    }
    p {
      font-size: 1.1em;
      margin: 10px 0;
    }
    img {
      margin-top: 40px;
      border-radius: 12px;
      width: 240px;
      height: 240px;
      box-shadow: 0 6px 16px rgba(0,0,0,0.15);
    }
    .lyrics {
      margin-top: 25px;
      font-style: italic;
      color: #4f4f4f;
    }
    a {
      display: inline-block;
      margin-top: 25px;
      padding: 10px 22px;
      color: #ffffff;
      background-color: #6750a4;
      border-radius: 25px;
      text-decoration: none;
      font-weight: 500;
      transition: 0.3s;
    }
    a:hover {
      background-color: #52408c;
    }
    footer {
      position: absolute;
      bottom: 20px;
      width: 100%;
      font-size: 0.9em;
      color: #777;
    }
  </style>
</head>
<body>
  <h1><?= $judul ?> 💜</h1>
  <p><strong>Lagu:</strong> <?= $lagu ?></p>
  <p><em>Kenapa suka?</em> <?= $alasan ?></p>
  <img src="https://i.scdn.co/image/ab67616d0000b273b5a87f5a9d1b1fcf3e2292c4" alt="Malibu Nights cover">
  <div class="lyrics">
    <p>“There's no reason, there's no rhyme<br>
    I found myself blindsided by a feeling that i never know...”</p>
  </div>
  <a href="https://open.spotify.com/track/0Eqg0CQ7bK3RQIMPw1A7pl?si=981d0f0ac7a0446c" target="_blank">🎧 Dengarkan di Spotify</a>
  <footer>Inspired by "Malibu Nights" — LANY</footer>
</body>
</html>
