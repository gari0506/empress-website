<?php
// ── Language selection ──────────────────────────────────────────
$lang = (isset($_GET['lang']) && $_GET['lang'] === 'zh') ? 'zh' : 'en';
$is_zh = ($lang === 'zh');

// ── All bilingual strings ───────────────────────────────────────
$t = [
  'en' => [
    'html_lang'      => 'en',
    'page_title'     => 'The Empress Dining Palace — BGC, Taguig',
    'topbar_phone'   => '+63 915 543 1862',
    'topbar_email'   => 'reservations@empressdiningpalace.com',
    'logo_sub'       => '皇后御膳',
    'logo_name'      => 'The Empress Dining Palace',
    'nav'            => ['Home','About','Menu','Reservations','Contact'],
    'nav_hrefs'      => ['#home','#about','#menus','#reserve','#reserve'],
    'btn_book'       => 'Book a Table',
    'hero_tag'       => 'Authentic Cantonese Cuisine · BGC, Taguig',
    'hero_title'     => 'Imperial<br><em>Cantonese</em><br>Cuisine',
    'hero_cn'        => '皇后御膳 · The Empress Dining Palace',
    'hero_desc'      => 'Discover meticulously crafted Chinese dishes served in timeless elegance — from delicate dim sum to grand banquet feasts fit for royalty.',
    'cta_book'       => 'Book a Table',
    'cta_menu'       => 'Explore Menu',
    'hl_tag'         => 'Our Specialties',
    'hl_title'       => 'A Feast <em>Fit for Royalty</em>',
    'hl_desc'        => 'Every dish is a masterpiece — prepared with the finest ingredients and a deep reverence for Cantonese culinary tradition.',
    'menus_tag'      => 'Our Menus · 2026',
    'menus_title'    => 'Browse Our <em>Curated</em> Selections',
    'menus_desc'     => 'Flip through our menus below, or open the full interactive viewer for the complete experience.',
    'ac_tag'         => 'À La Carte · Dim Sum',
    'ac_title'       => 'Ala Carte & Dim Sum Menu',
    'ac_cn'          => '點心及單點菜單 · 2026',
    'ac_desc'        => 'Empress Favorites, Appetizers, Roasted & Marinated Selection, Bird\'s Nest, Abalone, Live Seafood, Meat Galore, and Szechuan Dishes.',
    'ac_pills'       => ['Dim Sum','Live Seafood','Roasted Meats','Bird\'s Nest','Abalone','Szechuan'],
    'ac_note'        => 'Prices include VAT · 10% service charge applies',
    'cel_tag'        => 'Set Menus · Celebrations',
    'cel_title'      => 'Celebrations Menu 2026',
    'cel_cn'         => '宴席菜單 · 2026',
    'cel_desc'       => 'Curated set menus for Graduation, Birthday, Anniversary, Reunion, Engagement, and The Empress Signature Menu. Each set serves 10 pax.',
    'cel_pills'      => ['Graduation','Birthday','Anniversary','Reunion','Engagement','Signature Set'],
    'cel_note'       => 'Bilingual menu · Prices include VAT · 10% service charge',
    'full_view'      => 'Full View',
    'about_tag'      => 'About The Empress',
    'about_title'    => 'A Palace of <em>Authentic</em> Flavors',
    'about_p1'       => 'Established in September 2019 along Bonifacio High Street, <strong>The Empress Dining Palace</strong> has become BGC\'s premier destination for authentic Cantonese fine dining — committed to preparing traditional Chinese dishes elevated with a modern, royal twist.',
    'about_p2'       => 'From live seafood tanks to roasting specialties, private dining rooms to grand banquet halls, every detail is crafted to give guests a <strong>regal dining experience</strong> fit for royalty.',
    'stat_labels'    => ['Established','Daily Open','Location'],
    'reserve_title'  => 'Ready to <em>Dine?</em>',
    'reserve_desc'   => 'Experience authentic Cantonese cuisine in an imperial atmosphere.<br>Reserve your table today or visit us at Bonifacio High Street.',
    'contact_phone'  => '☎ +63 915 543 1862',
    'contact_addr'   => '📍 7th Ave, BGC, Taguig',
    'contact_hours'  => '🕐 Mon–Sun, 11AM–11PM',
    'cta_call'       => 'Call to Reserve',
    'cta_view'       => 'View Menus',
    'foot_links'     => ['Home','About','Menus','Reserve'],
    'foot_hrefs'     => ['#home','#about','#menus','#reserve'],
    'foot_copy'      => '© %d The Empress Dining Palace. All rights reserved.',
    'highlights'     => [
      ['🦆','Peking Duck',          'Crispy skin, succulent meat, served whole or with steamed pancakes & plum sauce.'],
      ['🦞','Live Seafood',          'Alaskan King Crab, lobster, and fresh catch — prepared to your preference.'],
      ['🥟','Dim Sum',               'Steamed, baked, and fried selections from classic siu mai to taro puff.'],
      ['🐷','Suckling Pig',          'Roasted to golden perfection with irresistibly crispy skin and tender meat.'],
      ['🦪','Abalone & Sea Cucumber','Premium delicacies slow-braised in rich Cantonese master stock.'],
      ['🍜','La Mian & Szechuan',    'Hand-pulled noodles and bold, fiery Szechuan specialties.'],
    ],
  ],
  'zh' => [
    'html_lang'      => 'zh-TW',
    'page_title'     => '皇后御膳 — 邦尼法西奧大道, 打古市',
    'topbar_phone'   => '+63 915 543 1862',
    'topbar_email'   => 'reservations@empressdiningpalace.com',
    'logo_sub'       => '皇后御膳',
    'logo_name'      => 'The Empress',
    'nav'            => ['首頁','關於我們','菜單','訂位','聯絡我們'],
    'nav_hrefs'      => ['#home','#about','#menus','#reserve','#reserve'],
    'btn_book'       => '立即訂位',
    'hero_tag'       => '道地粵菜 · 菲律賓邦尼法西奧大道',
    'hero_title'     => '皇室<br><em>粵菜</em><br>御宴',
    'hero_cn'        => '皇后御膳 · The Empress Dining Palace',
    'hero_desc'      => '精心炮製的傳統粵菜，呈現皇室般的優雅氛圍——從精緻點心到隆重宴席，盡享帝王美食。',
    'cta_book'       => '立即訂位',
    'cta_menu'       => '瀏覽菜單',
    'hl_tag'         => '招牌菜式',
    'hl_title'       => '御廚精饌，<em>皇室饗宴</em>',
    'hl_desc'        => '每一道菜均為精心之作——採用頂級食材，深耕粵菜烹飪傳統，精工細作。',
    'menus_tag'      => '本店菜單 · 2026年',
    'menus_title'    => '翻閱我們的<em>精選菜單</em>',
    'menus_desc'     => '可在下方翻閱菜單，或開啟完整互動式閱讀器獲得最佳體驗。',
    'ac_tag'         => '單點 · 點心',
    'ac_title'       => '單點及點心菜單',
    'ac_cn'          => '點心及單點菜單 · 2026',
    'ac_desc'        => '皇后精選、前菜、燒味及醃製拼盤、燕窩、鮑魚、海鮮、肉類、江南及四川菜式。',
    'ac_pills'       => ['點心','海鮮','燒味','燕窩','鮑魚','四川菜'],
    'ac_note'        => '價格含增值稅 · 另加10%服務費',
    'cel_tag'        => '套餐 · 宴席',
    'cel_title'      => '2026年慶典套餐',
    'cel_cn'         => '宴席菜單 · 2026',
    'cel_desc'       => '專為畢業、生日、周年紀念、家庭團聚、訂婚及皇后御膳招牌宴席而設的套餐，每套適合10人享用。',
    'cel_pills'      => ['畢業宴','生日宴','周年紀念','家庭團聚','訂婚宴','招牌套餐'],
    'cel_note'       => '中英雙語菜單 · 價格含增值稅 · 另加10%服務費',
    'full_view'      => '完整瀏覽',
    'about_tag'      => '關於皇后御膳',
    'about_title'    => '<em>道地</em>風味，御宴殿堂',
    'about_p1'       => '皇后御膳於2019年9月在邦尼法西奧大道開幕，是BGC地區首屈一指的道地粵菜精緻餐廳，致力以現代皇室風格呈現傳統中式料理。',
    'about_p2'       => '從現撈海鮮水槽、燒味專區，到私人包廂及宴會廳，每一個細節均為賓客打造<strong>如皇室般的用餐體驗</strong>。',
    'stat_labels'    => ['創立年份','每日開門','地點'],
    'reserve_title'  => '準備好<em>用餐</em>了嗎？',
    'reserve_desc'   => '在皇室氛圍中品味道地粵菜。<br>立即致電訂位，或親臨邦尼法西奧大道。',
    'contact_phone'  => '☎ +63 915 543 1862',
    'contact_addr'   => '📍 第七大道，BGC，打古市',
    'contact_hours'  => '🕐 週一至週日，上午11時至晚上11時',
    'cta_call'       => '致電訂位',
    'cta_view'       => '瀏覽菜單',
    'foot_links'     => ['首頁','關於我們','菜單','訂位'],
    'foot_hrefs'     => ['#home','#about','#menus','#reserve'],
    'foot_copy'      => '© %d 皇后御膳版權所有。',
    'highlights'     => [
      ['🦆','北京烤鴨',      '鴨皮香脆，鴨肉鮮嫩，可整隻上桌或以薄餅捲配梅醬享用。'],
      ['🦞','現撈海鮮',      '阿拉斯加帝王蟹、龍蝦及新鮮漁獲，按您喜好烹調。'],
      ['🥟','精緻點心',      '蒸、焗、炸點心任您選——從傳統燒賣到香芋角一應俱全。'],
      ['🐷','乳豬全體',      '烤至金黃酥脆，外皮香口，肉質鮮嫩，令人垂涎。'],
      ['🦪','鮑魚·海參',    '頂級食材以濃郁粵式滷汁慢燉，入口即化。'],
      ['🍜','拉麵·四川菜',  '手拉麵條及濃郁四川辛辣料理，適合喜歡挑戰的您。'],
    ],
  ],
];

$s = $t[$lang];
$stat_vals = ['2019','11AM','BGC'];
?>
<!DOCTYPE html>
<html lang="<?= $s['html_lang'] ?>">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?= htmlspecialchars($s['page_title']) ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@300;400;500;700&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400;1,600&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;1,300;1,400&display=swap" rel="stylesheet"/>
  <style>
  /* ══════════════════════════════════
     RESET & TOKENS
  ══════════════════════════════════ */
  *, *::before, *::after { box-sizing:border-box; margin:0; padding:0; }
  html { scroll-behavior:smooth; }

  :root {
    --red:        #8b0000;
    --red-mid:    #a80000;
    --red-dark:   #5c0000;
    --red-deep:   #1f0000;
    --gold:       #d4a017;
    --gold-lt:    #ffe066;
    --gold-dk:    #b8860b;
    --cream:      #fdf6e8;
    --cream-70:   rgba(253,246,232,.7);
    --cream-45:   rgba(253,246,232,.45);
    --border:     rgba(212,160,23,.3);
    --topbar-h:   38px;
    --hdr-h:      64px;
  }

  body {
    background: var(--red-deep);
    color: var(--cream);
    font-family: 'Cormorant Garamond', 'Noto Serif TC', Georgia, serif;
    overflow-x: hidden;
  }

  /* grain */
  body::after {
    content:''; position:fixed; inset:0; pointer-events:none; z-index:9999;
    background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='180' height='180'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.9' numOctaves='4' stitchTiles='stitch'/%3E%3CfeColorMatrix type='saturate' values='0'/%3E%3C/filter%3E%3Crect width='180' height='180' filter='url(%23n)' opacity='.03'/%3E%3C/svg%3E");
    opacity:.4;
  }

  /* ══════════════════════════════════
     TOPBAR
  ══════════════════════════════════ */
  .topbar {
    position:fixed; top:0; left:0; right:0; z-index:300;
    height:var(--topbar-h);
    background:#0d0000;
    border-bottom:1px solid rgba(212,160,23,.2);
    display:flex; align-items:center; justify-content:space-between;
    padding:0 28px; gap:12px;
    font-size:.72rem; letter-spacing:.08em; color:rgba(212,160,23,.65);
  }
  .topbar-left { display:flex; gap:22px; align-items:center; flex-shrink:1; min-width:0; overflow:hidden; }
  .topbar-left a { color:rgba(212,160,23,.65); text-decoration:none; transition:color .2s; white-space:nowrap; }
  .topbar-left a:hover { color:var(--gold-lt); }
  .topbar-right { display:flex; gap:8px; align-items:center; flex-shrink:0; }

  .soc-media {
    width:26px; height:26px; border-radius:50%;
    border:1px solid rgba(212,160,23,.3);
    display:flex; align-items:center; justify-content:center;
    color:rgba(212,160,23,.55); text-decoration:none; font-size:1rem;
    transition:background .2s, color .2s, border-color .2s;
  }
  .soc-media:hover { background:var(--gold); color:var(--red-deep); border-color:var(--gold); }

  /* lang switcher */
  .lang-switcher {
    display:flex; align-items:center;
    border:1px solid rgba(212,160,23,.3); border-radius:20px; overflow:hidden;
    flex-shrink:0; margin-right:6px;
  }
  .lang-btn {
    font-size:.65rem; font-weight:600; letter-spacing:.08em; text-transform:uppercase;
    padding:4px 11px; text-decoration:none; transition:background .2s, color .2s;
    color:rgba(212,160,23,.5); white-space:nowrap;
    font-family:'Cormorant Garamond',serif;
  }
  .lang-btn.active { background:var(--gold); color:var(--red-deep); }
  .lang-btn:not(.active):hover { background:rgba(212,160,23,.12); color:var(--gold-lt); }

  /* ══════════════════════════════════
     HEADER
  ══════════════════════════════════ */
  header {
    position:fixed; top:var(--topbar-h); left:0; right:0; z-index:200;
    height:var(--hdr-h);
    background:linear-gradient(180deg,#b20000 0%,#7a0000 100%);
    border-bottom:2px solid var(--gold);
    box-shadow:0 3px 20px rgba(0,0,0,.6);
    display:flex; align-items:center; justify-content:space-between;
    padding:0 28px; gap:12px;
    transition:background .3s;
  }
  header::before {
    content:''; position:absolute; top:0; left:0; right:0; height:3px;
    background:linear-gradient(90deg,#7a0000,var(--gold) 30%,var(--gold-lt) 50%,var(--gold) 70%,#7a0000);
    pointer-events:none;
  }
  header::after {
    content:''; position:absolute; inset:0;
    background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='80' height='64'%3E%3Ccircle cx='20' cy='32' r='16' fill='none' stroke='rgba(255,220,80,.05)' stroke-width='1.5'/%3E%3Ccircle cx='60' cy='32' r='16' fill='none' stroke='rgba(255,220,80,.05)' stroke-width='1.5'/%3E%3C/svg%3E");
    background-size:80px 64px; pointer-events:none;
  }

  .logo { display:flex; align-items:center; gap:11px; text-decoration:none; flex-shrink:0; position:relative; }
  .logo-icon {
    width:42px; height:42px; border-radius:50%;
    border:1.5px solid var(--gold);
    background:rgba(212,160,23,.12);
    display:flex; align-items:center; justify-content:center;
    font-family:'Noto Serif TC',serif; font-size:1.15rem; font-weight:700;
    color:var(--gold-lt);
    box-shadow:0 2px 8px rgba(0,0,0,.4);
  }
  .logo-text { display:flex; flex-direction:column; line-height:1.15; }
  .logo-cn { font-family:'Noto Serif TC',serif; font-size:.68rem; font-weight:500; color:var(--gold-lt); letter-spacing:.22em; text-shadow:0 1px 3px rgba(0,0,0,.4); }
  .logo-en { font-family:'Playfair Display',serif; font-size:1rem; font-weight:700; color:var(--cream); letter-spacing:.03em; text-shadow:0 1px 3px rgba(0,0,0,.4); }

  nav { display:flex; align-items:center; gap:2px; position:relative; }
  .nav-link {
    font-family:'Cormorant Garamond',serif; font-size:.82rem; font-weight:400;
    letter-spacing:.14em; text-transform:uppercase;
    color:rgba(255,224,102,.6); text-decoration:none;
    padding:6px 14px; border-radius:2px;
    transition:color .2s, background .2s; white-space:nowrap;
  }
  .nav-link:hover { color:var(--gold-lt); background:rgba(212,160,23,.1); }
  .nav-link.active { color:var(--gold-lt); background:rgba(212,160,23,.12); }

  .btn-book {
    font-family:'Cormorant Garamond',serif; font-size:.78rem; font-weight:600;
    letter-spacing:.18em; text-transform:uppercase;
    padding:9px 22px; text-decoration:none;
    border:1.5px solid var(--gold);
    background:linear-gradient(180deg,var(--gold-lt),var(--gold));
    color:var(--red-deep);
    box-shadow:0 2px 12px rgba(212,160,23,.3);
    transition:opacity .2s, box-shadow .2s;
    white-space:nowrap; flex-shrink:0;
  }
  .btn-book:hover { opacity:.87; box-shadow:0 4px 20px rgba(212,160,23,.5); }

  /* ══════════════════════════════════
     HERO
  ══════════════════════════════════ */
  .hero {
    margin-top:calc(var(--topbar-h) + var(--hdr-h));
    position:relative; overflow:hidden;
    min-height:calc(100vh - var(--topbar-h) - var(--hdr-h));
    display:flex; align-items:center; justify-content:center;
    background:#1a0000;
  }
  .hero-bg {
    position:absolute; inset:0;
    background:
      radial-gradient(ellipse 55% 70% at 15% 50%,rgba(139,0,0,.55) 0%,transparent 60%),
      radial-gradient(ellipse 50% 70% at 85% 50%,rgba(90,0,0,.55) 0%,transparent 60%),
      radial-gradient(ellipse 80% 55% at 50% 100%,rgba(31,0,0,.8) 0%,transparent 55%),
      linear-gradient(135deg,#2a0000 0%,#1a0000 40%,#0d0000 100%);
  }

  /* lattice sides */
  .hero-lattice {
    position:absolute; top:0; bottom:0; width:200px;
    opacity:.05; pointer-events:none;
    background-image:
      repeating-linear-gradient(0deg,var(--gold) 0,var(--gold) 1px,transparent 1px,transparent 40px),
      repeating-linear-gradient(90deg,var(--gold) 0,var(--gold) 1px,transparent 1px,transparent 40px);
  }
  .hero-lattice--left  { left:0; }
  .hero-lattice--right { right:0; }

  /* corner ornaments */
  .corner { position:absolute; opacity:.45; pointer-events:none; }
  .corner svg { display:block; }
  .corner--tl { top:24px; left:24px; }
  .corner--tr { top:24px; right:24px; transform:scaleX(-1); }
  .corner--bl { bottom:24px; left:24px; transform:scaleY(-1); }
  .corner--br { bottom:24px; right:24px; transform:scale(-1,-1); }

  .hero-content { position:relative; z-index:2; text-align:center; max-width:660px; padding:80px 24px; }

  .hero-eyebrow {
    font-size:.7rem; font-weight:300; letter-spacing:.5em; text-transform:uppercase;
    color:var(--gold); margin-bottom:24px; display:block;
    animation:fadeDown .9s ease both;
  }
  .hero-eyebrow::before, .hero-eyebrow::after { content:'◆'; margin:0 12px; font-size:.45em; vertical-align:middle; opacity:.7; }

  .hero-cn {
    font-family:'Noto Serif TC',serif;
    font-size:clamp(1.8rem,4.5vw,2.8rem); font-weight:300;
    color:var(--gold-lt); letter-spacing:.22em; line-height:1;
    display:block; margin-bottom:12px;
    animation:fadeDown .9s .1s ease both;
  }
  .hero-title {
    font-family:'Playfair Display',serif;
    font-size:clamp(3rem,8vw,6.5rem); font-weight:700; line-height:.95;
    color:var(--cream); letter-spacing:.02em; display:block; margin-bottom:10px;
    animation:fadeDown .9s .15s ease both;
  }
  .hero-title em { font-style:italic; color:var(--gold-lt); }
  .hero-title-zh {
    font-family:'Noto Serif TC',serif;
    font-size:clamp(2.5rem,6vw,5.5rem); font-weight:700; line-height:1.1;
    color:var(--cream); display:block; margin-bottom:10px;
    animation:fadeDown .9s .15s ease both;
  }
  .hero-title-zh em { font-style:normal; color:var(--gold-lt); }

  .hero-sub {
    font-family:'Cormorant Garamond',serif; font-style:italic;
    font-size:clamp(1.1rem,2.5vw,1.6rem); font-weight:300;
    color:var(--gold); letter-spacing:.1em; display:block; margin-bottom:8px;
    animation:fadeDown .9s .2s ease both;
  }

  .divider { display:flex; align-items:center; gap:14px; margin:26px auto; width:280px; max-width:90%; }
  .div-line { flex:1; height:1px; background:linear-gradient(90deg,transparent,var(--gold),transparent); }
  .div-gem  { width:7px; height:7px; background:var(--gold); transform:rotate(45deg); flex-shrink:0; }

  .hero-desc {
    font-family:'Cormorant Garamond',serif; font-size:clamp(1rem,1.9vw,1.15rem);
    font-weight:300; color:var(--cream-70); line-height:1.9; margin-bottom:36px;
    animation:fadeUp .9s .35s ease both;
  }
  .hero-ctas { display:flex; gap:14px; justify-content:center; flex-wrap:wrap; animation:fadeUp .9s .45s ease both; }

  .cta {
    font-family:'Cormorant Garamond',serif; font-size:.88rem; font-weight:600;
    letter-spacing:.18em; text-transform:uppercase; text-decoration:none;
    padding:13px 32px; transition:opacity .2s, transform .2s, box-shadow .2s;
  }
  .cta:hover { transform:translateY(-2px); }
  .cta--gold {
    background:linear-gradient(180deg,var(--gold-lt),var(--gold));
    color:var(--red-deep); border:1.5px solid var(--gold);
    box-shadow:0 3px 16px rgba(212,160,23,.4);
  }
  .cta--gold:hover { opacity:.87; box-shadow:0 5px 26px rgba(212,160,23,.55); }
  .cta--ghost {
    background:transparent; color:var(--gold-lt);
    border:1.5px solid rgba(212,160,23,.6);
  }
  .cta--ghost:hover { background:rgba(212,160,23,.1); border-color:var(--gold); }

  /* ══════════════════════════════════
     SHARED SECTION
  ══════════════════════════════════ */
  section { padding:88px 32px; }

  .sec-head { text-align:center; margin-bottom:56px; }

  .sec-eyebrow {
    display:block; font-size:.68rem; letter-spacing:.48em; text-transform:uppercase;
    color:var(--gold); margin-bottom:12px;
  }
  .sec-eyebrow::before, .sec-eyebrow::after { content:'◆'; margin:0 10px; font-size:.45em; vertical-align:middle; opacity:.6; }

  .sec-title {
    font-family:'Playfair Display',serif;
    font-size:clamp(1.8rem,3.5vw,2.8rem); font-weight:400;
    color:var(--cream); line-height:1.15; margin-bottom:14px;
  }
  .sec-title em { font-style:italic; color:var(--gold-lt); }
  .sec-title-zh {
    font-family:'Noto Serif TC',serif;
    font-size:clamp(1.7rem,3vw,2.5rem); font-weight:700;
    color:var(--cream); line-height:1.3; margin-bottom:14px;
  }
  .sec-title-zh em { font-style:normal; color:var(--gold-lt); }
  .sec-desc { font-family:'Cormorant Garamond',serif; font-size:1.05rem; color:var(--cream-70); font-style:italic; line-height:1.8; max-width:560px; margin:0 auto; }

  /* ══════════════════════════════════
     HIGHLIGHTS
  ══════════════════════════════════ */
  #highlights {
    background:linear-gradient(180deg,#1a0000,#250000);
    border-top:1px solid var(--border); border-bottom:1px solid var(--border);
  }

  .highlights-grid { display:grid; grid-template-columns:repeat(auto-fit,minmax(280px,1fr)); gap:24px; max-width:1100px; margin:0 auto; }

  .h-card {
    background:linear-gradient(160deg,#2d0505,#1a0000);
    border:1px solid var(--border); padding:30px 26px;
    position:relative; overflow:hidden;
    transition:transform .3s, box-shadow .3s;
  }
  .h-card::before { content:''; position:absolute; top:0; left:0; right:0; height:2px; background:linear-gradient(90deg,transparent,var(--gold),transparent); }
  .h-card::after { content:attr(data-n); position:absolute; bottom:12px; right:16px; font-family:'Playfair Display',serif; font-size:3.5rem; font-weight:700; color:rgba(212,160,23,.07); line-height:1; pointer-events:none; }
  .h-card:hover { transform:translateY(-5px); box-shadow:0 12px 40px rgba(0,0,0,.6); }

  .h-icon  { font-size:2.2rem; margin-bottom:14px; display:block; }
  .h-title { font-family:'Playfair Display',serif; font-size:1.1rem; font-weight:600; color:var(--cream); margin-bottom:8px; }
  .h-desc  { font-family:'Cormorant Garamond',serif; font-size:.95rem; color:var(--cream-70); line-height:1.75; font-style:italic; }

  /* ══════════════════════════════════
     MENUS
  ══════════════════════════════════ */
  #menus { background:linear-gradient(180deg,#250000,#1a0000); }

  .menus-grid { display:grid; grid-template-columns:repeat(auto-fit,minmax(440px,1fr)); gap:36px; max-width:1100px; margin:0 auto; }

  .menu-card {
    background:linear-gradient(160deg,#2d0505,#1a0000);
    border:1px solid var(--border); overflow:hidden;
    display:flex; flex-direction:column;
    box-shadow:0 8px 40px rgba(0,0,0,.6);
    transition:transform .35s, box-shadow .35s;
    animation:fadeUp .8s ease both;
    position:relative;
  }
  .menu-card::before { content:''; position:absolute; top:0; left:0; right:0; height:2px; background:linear-gradient(90deg,transparent,var(--gold-lt) 40%,var(--gold) 60%,transparent); }
  .menu-card::after  { content:'◆'; position:absolute; top:12px; right:14px; font-size:.55rem; color:rgba(212,160,23,.35); line-height:1; }
  .menu-card:hover { transform:translateY(-6px); box-shadow:0 18px 60px rgba(0,0,0,.8); }

  .mc-head { padding:26px 26px 0; }
  .mc-tag {
    font-family:'Cormorant Garamond',serif; font-size:.62rem; letter-spacing:.42em; text-transform:uppercase;
    color:var(--gold); margin-bottom:8px; display:flex; align-items:center; gap:10px;
  }
  .mc-tag::after { content:''; flex:1; height:1px; background:var(--border); }
  .mc-title { font-family:'Playfair Display',serif; font-size:clamp(1.2rem,2.2vw,1.6rem); font-weight:600; color:var(--cream); line-height:1.15; margin-bottom:4px; }
  .mc-cn    { font-family:'Noto Serif TC',serif; font-size:.85rem; font-weight:300; color:var(--gold); letter-spacing:.14em; display:block; margin-bottom:2px; }
  .mc-desc  { font-family:'Cormorant Garamond',serif; font-size:.93rem; color:var(--cream-45); line-height:1.75; font-style:italic; padding:12px 26px 14px; height:110px; }

  .mc-pills { display:flex; flex-wrap:wrap; gap:7px; padding:0 26px 18px; }
  .pill {
    font-family:'Cormorant Garamond',serif; font-size:.68rem; letter-spacing:.1em;
    padding:4px 12px; border:1px solid rgba(212,160,23,.28); border-radius:0;
    color:rgba(255,224,102,.65); background:rgba(212,160,23,.05);
  }

  .flipbook-shell { margin:0 18px 14px; border:1px solid rgba(212,160,23,.15); overflow:hidden; background:#0d0000; aspect-ratio:4/3; }
  .flipbook-shell iframe { width:100%; height:100%; border:none; display:block; }

  .mc-foot { margin-top:auto; display:flex; align-items:center; justify-content:space-between; padding:13px 26px 22px; border-top:1px solid var(--border); }
  .mc-note { font-family:'Cormorant Garamond',serif; font-size:.7rem; color:rgba(212,160,23,.45); font-style:italic; }

  .btn-full {
    display:inline-flex; align-items:center; gap:7px;
    font-family:'Cormorant Garamond',serif; font-size:.78rem; font-weight:600; letter-spacing:.18em; text-transform:uppercase;
    color:var(--gold); text-decoration:none; padding:8px 18px;
    border:1px solid rgba(212,160,23,.45);
    transition:background .2s, color .2s;
  }
  .btn-full:hover { background:var(--gold); color:var(--red-deep); }
  .btn-full svg { transition:transform .25s; }
  .btn-full:hover svg { transform:translateX(3px); }

  /* ══════════════════════════════════
     ABOUT
  ══════════════════════════════════ */
  #about {
    background:linear-gradient(135deg,#1a0000 0%,#2a0202 50%,#1a0000 100%);
    border-top:1px solid var(--border); border-bottom:1px solid var(--border);
  }
  .about-inner { max-width:1000px; margin:0 auto; display:grid; grid-template-columns:1fr 1fr; gap:64px; align-items:center; }
  .about-text p { font-family:'Cormorant Garamond',serif; font-size:1.05rem; color:var(--cream-70); line-height:1.95; margin-bottom:18px; }
  .about-text strong { color:var(--gold-lt); font-weight:500; }

  .stats { display:grid; grid-template-columns:repeat(3,1fr); gap:16px; }
  .stat {
    background:linear-gradient(160deg,#2d0505,#1a0000);
    border:1px solid var(--border); padding:24px 18px; text-align:center; position:relative;
    transition:transform .3s;
  }
  .stat::before { content:''; position:absolute; top:0; left:0; right:0; height:2px; background:linear-gradient(90deg,transparent,var(--gold),transparent); }
  .stat:hover { transform:translateY(-3px); }
  .stat-num   { font-family:'Playfair Display',serif; font-size:2.4rem; font-weight:700; color:var(--gold-lt); line-height:1; }
  .stat-label { font-family:'Cormorant Garamond',serif; font-size:.72rem; font-weight:500; letter-spacing:.15em; text-transform:uppercase; color:rgba(212,160,23,.6); margin-top:6px; }

  /* ══════════════════════════════════
     RESERVE
  ══════════════════════════════════ */
  #reserve {
    background:linear-gradient(180deg,#1a0000,#0d0000);
    border-top:1px solid var(--border); text-align:center;
  }
  #reserve .inner { max-width:600px; margin:0 auto; }
  #reserve h2 { font-family:'Playfair Display',serif; font-size:clamp(2rem,4vw,3rem); font-weight:700; color:var(--cream); margin-bottom:14px; line-height:1.1; }
  #reserve h2 em { font-style:italic; color:var(--gold-lt); }
  #reserve .sub-h2 { font-family:'Noto Serif TC',serif; font-size:clamp(1.8rem,3.5vw,2.6rem); font-weight:700; color:var(--cream); margin-bottom:14px; line-height:1.2; }
  #reserve .sub-h2 em { font-style:normal; color:var(--gold-lt); }
  #reserve p { font-family:'Cormorant Garamond',serif; font-size:1.08rem; color:var(--cream-70); line-height:1.85; margin-bottom:28px; font-style:italic; }
  .contact-row { display:flex; gap:28px; justify-content:center; flex-wrap:wrap; margin-bottom:36px; }
  .contact-item { font-family:'Cormorant Garamond',serif; font-size:.92rem; color:rgba(212,160,23,.8); }
  .contact-item span { color:var(--gold-lt); font-weight:500; }

  .cta--crimson {
    background:linear-gradient(180deg,var(--gold-lt),var(--gold));
    color:var(--red-deep); border:1.5px solid var(--gold);
    box-shadow:0 3px 16px rgba(212,160,23,.35);
  }
  .cta--crimson:hover { opacity:.87; }
  .cta--ghost-gold { border:1.5px solid rgba(212,160,23,.6); color:var(--gold-lt); background:transparent; }
  .cta--ghost-gold:hover { background:rgba(212,160,23,.1); border-color:var(--gold); }

  /* ══════════════════════════════════
     FOOTER
  ══════════════════════════════════ */
  footer { background:#0d0000; border-top:2px solid var(--gold); }
  footer::before { content:''; display:block; height:3px; background:linear-gradient(90deg,#0d0000,var(--gold) 30%,var(--gold-lt) 50%,var(--gold) 70%,#0d0000); }
  .foot-inner { display:flex; align-items:center; justify-content:space-between; padding:26px 32px; gap:16px; flex-wrap:wrap; }
  .foot-logo { font-family:'Playfair Display',serif; font-size:1.05rem; font-weight:700; color:var(--gold); letter-spacing:.1em; }
  .foot-logo small { display:block; font-family:'Noto Serif TC',serif; font-size:.7rem; font-weight:300; color:rgba(212,160,23,.5); letter-spacing:.22em; margin-top:2px; }
  .foot-links { display:flex; gap:20px; flex-wrap:wrap; }
  .foot-links a { font-family:'Cormorant Garamond',serif; font-size:.78rem; letter-spacing:.14em; text-transform:uppercase; color:rgba(212,160,23,.45); text-decoration:none; transition:color .2s; }
  .foot-links a:hover { color:var(--gold-lt); }
  .foot-copy { font-family:'Cormorant Garamond',serif; font-size:.72rem; color:rgba(212,160,23,.3); letter-spacing:.06em; }

  /* ══════════════════════════════════
     ANIMATIONS
  ══════════════════════════════════ */
  @keyframes fadeDown { from{opacity:0;transform:translateY(-18px);}to{opacity:1;transform:translateY(0);} }
  @keyframes fadeUp   { from{opacity:0;transform:translateY(22px);}to{opacity:1;transform:translateY(0);} }
  @keyframes floatIn  { from{opacity:0;transform:scale(.92);}to{opacity:1;transform:scale(1);} }
  .menu-card:nth-child(1){ animation-delay:.15s; }
  .menu-card:nth-child(2){ animation-delay:.3s; }

  /* ══════════════════════════════════
     RESPONSIVE
  ══════════════════════════════════ */
  @media(max-width:900px){
    .about-inner { grid-template-columns:1fr; gap:40px; }
    .stats { grid-template-columns:repeat(3,1fr); }
  }
  @media(max-width:768px){
    :root{ --topbar-h:0px; }
    .topbar { display:none; }
    nav { display:none; }
    .btn-book { margin-left:auto; }
    .menus-grid { grid-template-columns:1fr; }
  }
  @media(max-width:540px){
    section { padding:60px 18px; }
    .highlights-grid { grid-template-columns:1fr; }
    .stats { grid-template-columns:1fr 1fr; }
    header { padding:0 16px; }
    .hero-content { padding:50px 16px; }
    .corner { display:none; }
    .hero-lattice { display:none; }
    .foot-inner { flex-direction:column; text-align:center; gap:18px; }
    .foot-links { justify-content:center; }
    .contact-row { flex-direction:column; gap:10px; }
  }
  </style>
</head>
<body>

<!-- ══════ TOPBAR ══════ -->
<div class="topbar">
  <div class="topbar-left">
    <a href="tel:+639155431862">☎ <?= $s['topbar_phone'] ?></a>
    <a href="mailto:reservations@empressdiningpalace.com">✉ <?= $s['topbar_email'] ?></a>
  </div>
  <div class="topbar-right">
    <div class="lang-switcher">
      <a href="?lang=en" class="lang-btn <?= $lang==='en'?'active':'' ?>">EN</a>
      <a href="?lang=zh" class="lang-btn <?= $lang==='zh'?'active':'' ?>">中文</a>
    </div>
    <a class="soc-media" href="https://www.facebook.com/empressdiningpalace" target="_blank" title="Facebook"><i class="bi bi-facebook"></i></a>
    <a class="soc-media" href="https://www.instagram.com/empressdiningpalace/" target="_blank" title="Instagram"><i class="bi bi-instagram"></i></a>
  </div>
</div>

<!-- ══════ HEADER ══════ -->
<header id="hdr">
  <a class="logo" href="?lang=<?= $lang ?>">
    <div class="logo-icon">龍</div>
    <div class="logo-text">
      <span class="logo-cn"><?= $s['logo_sub'] ?></span>
      <span class="logo-en"><?= $s['logo_name'] ?></span>
    </div>
  </a>

  <nav>
    <?php foreach($s['nav'] as $i => $lbl): ?>
      <a class="nav-link<?= $i===0?' active':'' ?>" href="<?= $s['nav_hrefs'][$i] ?>"><?= $lbl ?></a>
    <?php endforeach; ?>
  </nav>

  <a class="btn-book" href="#reserve"><?= $s['btn_book'] ?></a>
</header>


<!-- ══════ HERO ══════ -->
<section class="hero" id="home">
  <div class="hero-bg"></div>
  <div class="hero-lattice hero-lattice--left"></div>
  <div class="hero-lattice hero-lattice--right"></div>

  <?php $corner_svg = '<svg width="100" height="100" viewBox="0 0 100 100" fill="none">
    <path d="M8 92L8 8L92 8" stroke="#d4a017" stroke-width="1.5" fill="none"/>
    <circle cx="8" cy="8" r="3.5" fill="#d4a017" opacity=".9"/>
    <path d="M22 8Q36 22 22 42" stroke="#d4a017" stroke-width=".9" fill="none"/>
    <path d="M8 22Q22 36 42 22" stroke="#d4a017" stroke-width=".9" fill="none"/>
    <circle cx="8"  cy="92" r="2" fill="#d4a017" opacity=".4"/>
    <circle cx="92" cy="8"  r="2" fill="#d4a017" opacity=".4"/>
  </svg>'; ?>
  <div class="corner corner--tl"><?= $corner_svg ?></div>
  <div class="corner corner--tr"><?= $corner_svg ?></div>
  <div class="corner corner--bl"><?= $corner_svg ?></div>
  <div class="corner corner--br"><?= $corner_svg ?></div>

  <div class="hero-content">
    <span class="hero-eyebrow"><?= $s['hero_tag'] ?></span>
    <span class="hero-cn"><?= $s['logo_sub'] ?></span>

    <?php if($is_zh): ?>
      <span class="hero-title-zh"><?= $s['hero_title'] ?></span>
      <span class="hero-sub">御膳殿堂</span>
    <?php else: ?>
      <span class="hero-title"><?= $s['hero_title'] ?></span>
      <span class="hero-sub">Dining Palace</span>
    <?php endif; ?>

    <div class="divider"><div class="div-line"></div><div class="div-gem"></div><div class="div-line"></div></div>
    <p class="hero-desc"><?= $s['hero_desc'] ?></p>

    <div class="hero-ctas">
      <a class="cta cta--gold"  href="#reserve"><?= $s['cta_book'] ?></a>
      <a class="cta cta--ghost" href="#menus"><?= $s['cta_menu'] ?></a>
    </div>
  </div>
</section>


<!-- ══════ HIGHLIGHTS ══════ -->
<section id="highlights">
  <div class="sec-head">
    <span class="sec-eyebrow"><?= $s['hl_tag'] ?></span>
    <?php if($is_zh): ?>
      <h2 class="sec-title-zh"><?= $s['hl_title'] ?></h2>
    <?php else: ?>
      <h2 class="sec-title"><?= $s['hl_title'] ?></h2>
    <?php endif; ?>
    <p class="sec-desc"><?= $s['hl_desc'] ?></p>
  </div>
  <div class="highlights-grid">
    <?php foreach($s['highlights'] as $i => [$icon,$title,$desc]): ?>
    <div class="h-card" data-n="<?= str_pad($i+1,2,'0',STR_PAD_LEFT) ?>">
      <span class="h-icon"><?= $icon ?></span>
      <div class="h-title"><?= $title ?></div>
      <p class="h-desc"><?= $desc ?></p>
    </div>
    <?php endforeach; ?>
  </div>
</section>


<!-- ══════ MENUS ══════ -->
<section id="menus">
  <div class="sec-head">
    <span class="sec-eyebrow"><?= $s['menus_tag'] ?></span>
    <?php if($is_zh): ?>
      <h2 class="sec-title-zh"><?= $s['menus_title'] ?></h2>
    <?php else: ?>
      <h2 class="sec-title"><?= $s['menus_title'] ?></h2>
    <?php endif; ?>
    <p class="sec-desc"><?= $s['menus_desc'] ?></p>
  </div>
  <div class="divider"><div class="div-line"></div><div class="div-gem"></div><div class="div-line"></div></div>

  <div class="menus-grid">

    <!-- Ala Carte -->
    <div class="menu-card">
      <div class="mc-head">
        <div class="mc-tag"><?= $s['ac_tag'] ?></div>
        <h3 class="mc-title"><?= $s['ac_title'] ?></h3>
        <span class="mc-cn"><?= $s['ac_cn'] ?></span>
      </div>
      <p class="mc-desc"><?= $s['ac_desc'] ?></p>
      <div class="mc-pills">
        <?php foreach($s['ac_pills'] as $p): ?><span class="pill"><?= $p ?></span><?php endforeach; ?>
      </div>
      <div class="flipbook-shell">
        <iframe src="https://online.fliphtml5.com/theempressdiningpalace/EMPRESS_ALA_CARTE_DIMSUM_MENU_LOWRES/"
          title="Ala Carte & Dim Sum" loading="lazy" allowfullscreen></iframe>
      </div>
      <div class="mc-foot">
        <span class="mc-note"><?= $s['ac_note'] ?></span>
        <a class="btn-full" href="/menu?menu=alacarte&orient=landscape">
          <?= $s['full_view'] ?>
          <svg width="13" height="13" viewBox="0 0 14 14" fill="none"><path d="M3 7h8M7 3l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
      </div>
    </div>

    <!-- Celebrations -->
    <div class="menu-card">
      <div class="mc-head">
        <div class="mc-tag"><?= $s['cel_tag'] ?></div>
        <h3 class="mc-title"><?= $s['cel_title'] ?></h3>
        <span class="mc-cn"><?= $s['cel_cn'] ?></span>
      </div>
      <p class="mc-desc"><?= $s['cel_desc'] ?></p>
      <div class="mc-pills">
        <?php foreach($s['cel_pills'] as $p): ?><span class="pill"><?= $p ?></span><?php endforeach; ?>
      </div>
      <div class="flipbook-shell">
        <iframe src="https://online.fliphtml5.com/theempressdiningpalace/The-Empress-Celebrations-Menu-2026/"
          title="Celebrations Menu 2026" loading="lazy" allowfullscreen></iframe>
      </div>
      <div class="mc-foot">
        <span class="mc-note"><?= $s['cel_note'] ?></span>
        <a class="btn-full" href="/menu?menu=celebrations&orient=portrait">
          <?= $s['full_view'] ?>
          <svg width="13" height="13" viewBox="0 0 14 14" fill="none"><path d="M3 7h8M7 3l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
      </div>
    </div>

  </div>
</section>


<!-- ══════ ABOUT ══════ -->
<section id="about">
  <div class="about-inner">
    <div class="about-text">
      <span class="sec-eyebrow" style="text-align:left;display:block;margin-bottom:14px;"><?= $s['about_tag'] ?></span>
      <?php if($is_zh): ?>
        <h2 class="sec-title-zh" style="text-align:left;margin-bottom:22px;"><?= $s['about_title'] ?></h2>
      <?php else: ?>
        <h2 class="sec-title" style="text-align:left;margin-bottom:22px;"><?= $s['about_title'] ?></h2>
      <?php endif; ?>
      <p><?= $s['about_p1'] ?></p>
      <p><?= $s['about_p2'] ?></p>
    </div>
    <div class="stats">
      <?php foreach($stat_vals as $i => $v): ?>
        <div class="stat">
          <div class="stat-num"><?= $v ?></div>
          <div class="stat-label"><?= $s['stat_labels'][$i] ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ══════ RESERVE ══════ -->
<section id="reserve">
  <div class="inner">
    <div class="divider" style="margin-bottom:32px;"><div class="div-line"></div><div class="div-gem"></div><div class="div-line"></div></div>
    <?php if($is_zh): ?>
      <h2 class="sub-h2"><?= $s['reserve_title'] ?></h2>
    <?php else: ?>
      <h2><?= $s['reserve_title'] ?></h2>
    <?php endif; ?>
    <p><?= $s['reserve_desc'] ?></p>
    <div class="contact-row">
      <div class="contact-item"><?= $s['contact_phone'] ?></div>
      <div class="contact-item"><?= $s['contact_addr'] ?></div>
      <div class="contact-item"><?= $s['contact_hours'] ?></div>
    </div>
    <div style="display:flex;gap:14px;justify-content:center;flex-wrap:wrap;">
      <a class="cta cta--crimson"    href="tel:+639155431862"><?= $s['cta_call'] ?></a>
      <a class="cta cta--ghost-gold" href="#menus"><?= $s['cta_view'] ?></a>
    </div>
  </div>
</section>


<!-- ══════ FOOTER ══════ -->
<footer>
  <div class="foot-inner">
    <div class="foot-logo">
      The Empress Dining Palace
      <small>皇后御膳</small>
    </div>
    <div class="foot-links">
      <?php foreach($s['foot_links'] as $i => $lbl): ?>
        <a href="<?= $s['foot_hrefs'][$i] ?>"><?= $lbl ?></a>
      <?php endforeach; ?>
    </div>
    <div class="foot-copy"><?= sprintf($s['foot_copy'], date('Y')) ?></div>
  </div>
</footer>

<script>
var sections = document.querySelectorAll('section[id]');
var navLinks  = document.querySelectorAll('.nav-link');
window.addEventListener('scroll', function(){
  var pos = window.scrollY + 100;
  sections.forEach(function(s){
    if(pos >= s.offsetTop && pos < s.offsetTop + s.offsetHeight){
      navLinks.forEach(function(l){ l.classList.remove('active'); });
      var m = document.querySelector('.nav-link[href="#'+s.id+'"]');
      if(m) m.classList.add('active');
    }
  });
});
var hdr = document.getElementById('hdr');
window.addEventListener('scroll', function(){
  hdr.style.background = window.scrollY > 60
    ? 'linear-gradient(180deg,#8b0000 0%,#5c0000 100%)'
    : 'linear-gradient(180deg,#b20000 0%,#7a0000 100%)';
});
</script>

</body>
</html>