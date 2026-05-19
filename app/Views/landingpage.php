<?php
$lang = (isset($_GET['lang']) && $_GET['lang'] === 'zh') ? 'zh' : 'en';
$is_zh = ($lang === 'zh');

$t = [
  'en' => [
    'title'       => 'The Empress Dining Palace — Website Under Development',
    'logo_sub'    => '皇后御膳',
    'logo_name'   => 'The Empress Dining Palace',
    'tagline'     => 'Imperial Cantonese Fine Dining',
    'status'      => 'Now Preparing Our Digital Experience',
    'headline'    => 'Our New Website Is <em>Coming Soon</em>',
    'desc'        => 'The Empress Dining Palace is crafting a refined new online experience inspired by timeless Cantonese elegance, imperial hospitality, and authentic culinary artistry.',
    'desc2'       => 'While our website is being prepared, we continue to welcome guests daily at Bonifacio Global City.',
    'contact'     => 'Reservations & Inquiries',
    'phone'       => '+63 915 543 1862',
    'email'       => 'reservations@empressdiningpalace.com',
    'address'     => '7th Ave, Bonifacio High Street, BGC, Taguig',
    'hours'       => 'Open Daily · 11AM – 11PM',
    'btn_call'    => 'Call Us',
    'btn_fb'      => 'Visit Facebook',
    'footer'      => '© %d The Empress Dining Palace. All rights reserved.',
    'loading'     => 'Crafting an Imperial Experience',
  ],

  'zh' => [
    'title'       => '皇后御膳 — 網站建設中',
    'logo_sub'    => '皇后御膳',
    'logo_name'   => 'The Empress Dining Palace',
    'tagline'     => '皇室粵菜 · 高級餐飲',
    'status'      => '我們正在打造全新網站體驗',
    'headline'    => '全新網站 <em>即將登場</em>',
    'desc'        => '皇后御膳正在精心打造全新的線上體驗，以傳統粵菜文化、皇室風格與尊貴待客之道為靈感。',
    'desc2'       => '網站建設期間，我們依然每天於 Bonifacio Global City 恭迎您的蒞臨。',
    'contact'     => '訂位及查詢',
    'phone'       => '+63 915 543 1862',
    'email'       => 'reservations@empressdiningpalace.com',
    'address'     => '菲律賓 BGC Bonifacio High Street 第七大道',
    'hours'       => '每日營業 · 上午11時至晚上11時',
    'btn_call'    => '立即致電',
    'btn_fb'      => 'Facebook 專頁',
    'footer'      => '© %d 皇后御膳版權所有。',
    'loading'     => '正在打造御膳殿堂',
  ]
];

$s = $t[$lang];
?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?= $s['title'] ?></title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@300;400;500;700&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400;1,600&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet"/>

<style>

*{
  margin:0;
  padding:0;
  box-sizing:border-box;
}

:root{
  --yellow:#f5c842;
  --yellow-lt:#fde98a;
  --yellow-dk:#d4a80e;
  --yellow-pale:#fffbea;

  --pink:#c0304a;
  --pink-lt:#e05070;
  --pink-pale:#fdf0f2;

  --white:#ffffff;
  --offwhite:#f9f5ee;

  --charcoal:#2e2e2e;
  --ink:#1a1a1a;
  --muted:#6b6357;
}

body{
  min-height:100vh;
  overflow-x:hidden;
  overflow-y:auto;
  background:
    radial-gradient(circle at top left, rgba(245,200,66,.18), transparent 30%),
    radial-gradient(circle at bottom right, rgba(192,48,74,.10), transparent 35%),
    linear-gradient(135deg,#fffdf7 0%, #fff7dc 50%, #fff2c8 100%);
  font-family:'DM Sans','Noto Serif TC',sans-serif;
  color:var(--ink);
  position:relative;
}

body::before{
  content:'';
  position:absolute;
  inset:0;
  background:
    repeating-linear-gradient(
      45deg,
      rgba(255,255,255,.2) 0,
      rgba(255,255,255,.2) 1px,
      transparent 1px,
      transparent 5px
    );
  opacity:.2;
  pointer-events:none;
}

.wrapper{
  min-height:100vh;
  display:flex;
  align-items:center;
  justify-content:center;
  padding:40px 20px;
  position:relative;
  z-index:2;
}

.card{
  width:100%;
  max-width:900px;
  background:rgba(255,255,255,.82);
  backdrop-filter:blur(12px);

  border:1px solid rgba(245,200,66,.35);

  border-radius:28px;

  padding:70px 55px;

  position:relative;
  overflow:hidden;

  box-shadow:
    0 10px 40px rgba(0,0,0,.08),
    0 2px 12px rgba(245,200,66,.12);
}

.card::before{
  content:'';
  position:absolute;
  top:0;
  left:0;
  right:0;
  height:5px;

  background:linear-gradient(
    90deg,
    var(--yellow),
    var(--pink),
    var(--yellow-lt)
  );
}

.corner{
  position:absolute;
  width:90px;
  height:90px;
  border-color:rgba(245,200,66,.45);
}

.corner-tl{
  top:18px;
  left:18px;
  border-top:1px solid;
  border-left:1px solid;
}

.corner-tr{
  top:18px;
  right:18px;
  border-top:1px solid;
  border-right:1px solid;
}

.corner-bl{
  bottom:18px;
  left:18px;
  border-bottom:1px solid;
  border-left:1px solid;
}

.corner-br{
  bottom:18px;
  right:18px;
  border-bottom:1px solid;
  border-right:1px solid;
}

.logo-cn{
  font-family:'Noto Serif TC',serif;
  font-size:.82rem;
  font-weight:500;
  letter-spacing:.35em;
  color:var(--pink);
  margin-bottom:10px;
  text-align:center;
}

.logo{
  font-family:'Playfair Display',serif;
  font-size:clamp(2.2rem,5vw,4rem);
  font-weight:700;
  color:var(--ink);
  text-align:center;
  margin-bottom:10px;
}

.tagline{
  text-align:center;
  color:var(--muted);
  letter-spacing:.24em;
  text-transform:uppercase;
  font-size:.74rem;
  margin-bottom:42px;
}

.loader{
  width:200px;
  margin:0 auto 28px;
}

.loader-bar{
  height:3px;
  overflow:hidden;
  position:relative;
  background:rgba(245,200,66,.18);
  border-radius:30px;
}

.loader-bar::after{
  content:'';
  position:absolute;
  top:0;
  left:-40%;
  width:40%;
  height:100%;
  background:linear-gradient(
    90deg,
    transparent,
    var(--pink),
    var(--yellow),
    transparent
  );
  animation:loading 2s linear infinite;
}

.loader-text{
  margin-top:14px;
  text-align:center;

  font-size:.68rem;
  font-weight:600;

  letter-spacing:.2em;
  text-transform:uppercase;

  color:var(--pink);
}

.status{
  display:table;
  margin:0 auto 28px;

  padding:9px 18px;

  border-radius:40px;

  border:1px solid rgba(192,48,74,.18);

  background:var(--pink-pale);

  color:var(--pink);

  font-size:.72rem;
  font-weight:600;

  letter-spacing:.16em;
  text-transform:uppercase;
}

h1{
  font-family:'Playfair Display',serif;
  font-size:clamp(2.8rem,7vw,5.4rem);
  line-height:1;
  text-align:center;
  margin-bottom:28px;
  color:var(--ink);
}

h1 em{
  color:var(--pink);
  font-style:italic;
}

.desc{
  max-width:680px;
  margin:0 auto;
  text-align:center;

  font-family:'Noto Serif TC',serif;

  line-height:1.95;

  color:var(--muted);

  font-size:1.02rem;
}

.desc + .desc{
  margin-top:18px;
}

.divider{
  width:260px;
  max-width:90%;

  margin:42px auto;

  display:flex;
  align-items:center;
  gap:14px;
}

.line{
  flex:1;
  height:1.5px;

  background:linear-gradient(
    90deg,
    transparent,
    var(--yellow-dk),
    transparent
  );
}

.gem{
  width:8px;
  height:8px;
  background:var(--yellow);
  transform:rotate(45deg);
}

.contact-title{
  text-align:center;

  font-size:.76rem;
  font-weight:700;

  letter-spacing:.28em;
  text-transform:uppercase;

  color:var(--pink);

  margin-bottom:24px;
}

.contact-grid{
  display:grid;
  gap:14px;
  margin-bottom:40px;
}

.contact-item{
  text-align:center;

  font-family:'Noto Serif TC',serif;

  color:var(--muted);

  font-size:1rem;
}

.buttons{
  display:flex;
  justify-content:center;
  gap:14px;
  flex-wrap:wrap;
}

.btn{
  padding:14px 28px;

  border-radius:40px;

  text-decoration:none;

  font-family:'Noto Serif TC',serif;

  font-size:.76rem;
  font-weight:600;

  letter-spacing:.14em;
  text-transform:uppercase;

  transition:.25s ease;
}

.btn-gold{
  background:linear-gradient(
    180deg,
    var(--yellow-lt),
    var(--yellow)
  );

  color:var(--ink);

  border:1px solid var(--yellow);
}

.btn-gold:hover{
  transform:translateY(-2px);
  box-shadow:0 10px 28px rgba(245,200,66,.28);
}

.btn-outline{
  border:1.5px solid var(--pink);
  color:var(--pink);
  background:transparent;
}

.btn-outline:hover{
  background:var(--pink);
  color:var(--white);
}

.footer{
  margin-top:50px;

  text-align:center;

  font-size:.75rem;

  color:rgba(0,0,0,.38);

  letter-spacing:.08em;
}

@keyframes loading{
  100%{
    left:140%;
  }
}

@media(max-width:768px){

  body{
    overflow:auto;
  }

  .card{
    padding:55px 26px;
  }

  .logo{
    font-size:2.2rem;
  }

  h1{
    font-size:3rem;
  }

  .desc{
    font-size:.95rem;
  }

  .corner{
    width:55px;
    height:55px;
  }

}

</style>
</head>

<body>

<div class="wrapper">

  <div class="card">

    <div class="corner corner-tl"></div>
    <div class="corner corner-tr"></div>
    <div class="corner corner-bl"></div>
    <div class="corner corner-br"></div>

    <div class="logo-cn"><?= $s['logo_sub'] ?></div>

    <div class="logo"><?= $s['logo_name'] ?></div>

    <div class="tagline"><?= $s['tagline'] ?></div>

    <div class="loader">
      <div class="loader-bar"></div>
      <div class="loader-text"><?= $s['loading'] ?></div>
    </div>

    <div class="status"><?= $s['status'] ?></div>

    <h1><?= $s['headline'] ?></h1>

    <p class="desc"><?= $s['desc'] ?></p>

    <p class="desc"><?= $s['desc2'] ?></p>

    <div class="divider">
      <div class="line"></div>
      <div class="gem"></div>
      <div class="line"></div>
    </div>

    <div class="contact-title"><?= $s['contact'] ?></div>

    <div class="contact-grid">
      <div class="contact-item">☎ <?= $s['phone'] ?></div>
      <div class="contact-item">✉ <?= $s['email'] ?></div>
      <div class="contact-item">📍 <?= $s['address'] ?></div>
      <div class="contact-item">🕐 <?= $s['hours'] ?></div>
    </div>

    <div class="buttons">

      <a class="btn btn-gold"
         href="tel:+639155431862">
        <?= $s['btn_call'] ?>
      </a>

      <a class="btn btn-outline"
         href="https://www.facebook.com/empressdiningpalace"
         target="_blank">

        <i class="bi bi-facebook"></i>
        <?= $s['btn_fb'] ?>

      </a>

    </div>

    <div class="footer">
      <?= sprintf($s['footer'], date('Y')) ?>
    </div>

  </div>

</div>

</body>
</html>