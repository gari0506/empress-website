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

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Cormorant+Garamond:wght@300;400;500;600&family=Noto+Serif+TC:wght@300;400;500;700&display=swap" rel="stylesheet">

<style>
*{
  margin:0;
  padding:0;
  box-sizing:border-box;
}

:root{
  --red:#7a0000;
  --red-dark:#1b0000;
  --gold:#d4a017;
  --gold-light:#ffe8a3;
  --cream:#fdf6e8;
}

body{
  min-height:100vh;
  overflow:hidden;
  background:
    radial-gradient(circle at top left, rgba(212,160,23,.12), transparent 35%),
    radial-gradient(circle at bottom right, rgba(212,160,23,.08), transparent 35%),
    linear-gradient(135deg,#2a0000 0%, #140000 45%, #090000 100%);
  color:var(--cream);
  font-family:'Cormorant Garamond', serif;
  position:relative;
}

/* subtle grain */
body::before{
  content:'';
  position:absolute;
  inset:0;
  opacity:.06;
  pointer-events:none;
  background-image:
    repeating-linear-gradient(
      45deg,
      rgba(255,255,255,.04) 0,
      rgba(255,255,255,.04) 1px,
      transparent 1px,
      transparent 4px
    );
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
  max-width:820px;
  padding:70px 50px;
  background:rgba(15,0,0,.72);
  border:1px solid rgba(212,160,23,.25);
  backdrop-filter:blur(8px);
  text-align:center;
  position:relative;
  overflow:hidden;
  box-shadow:
    0 0 0 1px rgba(255,215,120,.05),
    0 25px 80px rgba(0,0,0,.65);
}

.card::before{
  content:'';
  position:absolute;
  top:0;
  left:0;
  right:0;
  height:2px;
  background:linear-gradient(
    90deg,
    transparent,
    var(--gold),
    var(--gold-light),
    var(--gold),
    transparent
  );
}

.corner{
  position:absolute;
  width:90px;
  height:90px;
  border-color:rgba(212,160,23,.45);
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
  font-family:'Noto Serif TC', serif;
  font-size:1rem;
  letter-spacing:.4em;
  color:var(--gold-light);
  margin-bottom:10px;
}

.logo{
  font-family:'Playfair Display', serif;
  font-size:clamp(2rem,5vw,3.5rem);
  font-weight:700;
  margin-bottom:8px;
}

.tagline{
  color:rgba(255,232,163,.72);
  letter-spacing:.28em;
  text-transform:uppercase;
  font-size:.78rem;
  margin-bottom:40px;
}

.status{
  display:inline-block;
  margin-bottom:22px;
  padding:8px 18px;
  border:1px solid rgba(212,160,23,.35);
  color:var(--gold-light);
  letter-spacing:.18em;
  text-transform:uppercase;
  font-size:.72rem;
  background:rgba(212,160,23,.06);
}

h1{
  font-family:'Playfair Display', serif;
  font-size:clamp(2.7rem,7vw,5.2rem);
  line-height:1;
  margin-bottom:26px;
}

h1 em{
  color:var(--gold-light);
  font-style:italic;
}

.desc{
  max-width:650px;
  margin:0 auto;
  line-height:1.9;
  color:rgba(253,246,232,.72);
  font-size:1.15rem;
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
  height:1px;
  background:linear-gradient(
    90deg,
    transparent,
    var(--gold),
    transparent
  );
}

.gem{
  width:8px;
  height:8px;
  background:var(--gold);
  transform:rotate(45deg);
}

.contact-title{
  font-size:.82rem;
  letter-spacing:.3em;
  text-transform:uppercase;
  color:var(--gold);
  margin-bottom:24px;
}

.contact-grid{
  display:grid;
  gap:14px;
  margin-bottom:38px;
}

.contact-item{
  color:rgba(253,246,232,.78);
  font-size:1.05rem;
}

.buttons{
  display:flex;
  justify-content:center;
  gap:14px;
  flex-wrap:wrap;
}

.btn{
  padding:14px 28px;
  text-decoration:none;
  letter-spacing:.18em;
  text-transform:uppercase;
  font-size:.75rem;
  transition:.25s ease;
}

.btn-gold{
  background:linear-gradient(
    180deg,
    var(--gold-light),
    var(--gold)
  );
  color:#1b0000;
  border:1px solid var(--gold);
}

.btn-gold:hover{
  transform:translateY(-2px);
  box-shadow:0 8px 24px rgba(212,160,23,.28);
}

.btn-outline{
  border:1px solid rgba(212,160,23,.45);
  color:var(--gold-light);
}

.btn-outline:hover{
  background:rgba(212,160,23,.08);
}

.footer{
  margin-top:48px;
  color:rgba(212,160,23,.4);
  font-size:.78rem;
  letter-spacing:.08em;
}

.loader{
  width:170px;
  margin:0 auto 28px;
}

.loader-bar{
  height:2px;
  width:100%;
  overflow:hidden;
  background:rgba(212,160,23,.15);
  position:relative;
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
    var(--gold-light),
    transparent
  );
  animation:loading 2s linear infinite;
}

.loader-text{
  margin-top:12px;
  font-size:.72rem;
  letter-spacing:.22em;
  color:rgba(212,160,23,.55);
  text-transform:uppercase;
}

@keyframes loading{
  100%{
    left:140%;
  }
}

@media(max-width:768px){

  .card{
    padding:55px 26px;
  }

  .logo{
    font-size:2.3rem;
  }

  h1{
    font-size:3rem;
  }

  .desc{
    font-size:1rem;
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
      <a class="btn btn-gold" href="tel:+639155431862">
        <?= $s['btn_call'] ?>
      </a>

      <a class="btn btn-outline"
         href="https://www.facebook.com/empressdiningpalace"
         target="_blank">
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