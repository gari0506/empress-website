<?php
// ── Language selection ──────────────────────────────────────────
$lang = (isset($_GET['lang']) && $_GET['lang'] === 'zh') ? 'zh' : 'en';
$is_zh = ($lang === 'zh');

// ── All bilingual strings ───────────────────────────────────────
$t = [
  'en' => [
    'html_lang'      => 'en',
    'page_title'     => 'The Empress Dining Palace — BGC, Taguig',
    'topbar_phone'   => '☎ +63 915 543 1862',
    'topbar_email'   => '✉ reservations@empressdiningpalace.com',
    'logo_sub'       => '皇后御膳',
    'logo_name'      => 'The Empress',
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
    'stat_labels'    => ['Established','Menu Items','Daily Open','Location'],
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
    'lang_switch_lbl'=> '中文',
    'lang_switch_url'=> '?lang=zh',
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
    'topbar_phone'   => '☎ +63 915 543 1862',
    'topbar_email'   => '✉ reservations@empressdiningpalace.com',
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
    'stat_labels'    => ['創立年份','菜單項目','每日開門','地點'],
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
    'lang_switch_lbl'=> 'English',
    'lang_switch_url'=> '?lang=en',
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

$s = $t[$lang]; // active strings
$other_lang_url = $s['lang_switch_url'];
$other_lang_lbl = $s['lang_switch_lbl'];
?>
<!DOCTYPE html>
<html lang="<?= $s['html_lang'] ?>">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?= htmlspecialchars($s['page_title']) ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@300;400;500;700&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400;1,600&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet"/>
  <style>
  *, *::before, *::after { box-sizing:border-box; margin:0; padding:0; }
  html { scroll-behavior:smooth; font-size:16px; }

  :root {
    --yellow:      #f5c842;
    --yellow-lt:   #fde98a;
    --yellow-dk:   #d4a80e;
    --yellow-pale: #fffbea;
    --pink:        #c0304a;
    --pink-lt:     #e05070;
    --pink-pale:   #fdf0f2;
    --white:       #ffffff;
    --offwhite:    #f9f5ee;
    --charcoal:    #2e2e2e;
    --ink:         #1a1a1a;
    --muted:       #6b6357;
    --topbar-h:    38px;
    --hdr-h:       70px;
  }

  body {
    background: var(--yellow-pale);
    color: var(--ink);
    font-family: 'DM Sans', 'Noto Serif TC', sans-serif;
    overflow-x: hidden;
  }

  /* ── TOPBAR ── */
  .topbar {
    position:fixed; top:0; left:0; right:0; z-index:300;
    height:var(--topbar-h);
    background:var(--charcoal);
    display:flex; align-items:center; justify-content:space-between;
    padding:0 28px;
    font-size:.72rem; letter-spacing:.06em; color:rgba(255,255,255,.6);
    gap:12px;
  }
  .topbar-left { display:flex; gap:20px; align-items:center; flex-shrink:1; min-width:0; overflow:hidden; }
  .topbar-left a { color:rgba(255,255,255,.65); text-decoration:none; transition:color .2s; white-space:nowrap; }
  .topbar-left a:hover { color:var(--yellow-lt); }
  .topbar-right { display:flex; gap:8px; align-items:center; flex-shrink:0; }
  .topbar-right a {
    width:26px; height:26px; border-radius:50%;
    border:1px solid rgba(255,255,255,.25);
    display:flex; align-items:center; justify-content:center;
    color:rgba(255,255,255,.55); text-decoration:none; font-size:.68rem;
    transition:background .2s, color .2s, border-color .2s;
  }
  .topbar-right a:hover { background:var(--yellow); color:var(--charcoal); border-color:var(--yellow); }

  /* ── LANG SWITCHER ── */
  .lang-switcher {
    display:flex; align-items:center; gap:0;
    border:1px solid rgba(255,255,255,.22); border-radius:20px; overflow:hidden;
    flex-shrink:0; margin-left:8px;
  }
  .lang-btn {
    font-size:.68rem; font-weight:600; letter-spacing:.06em; text-transform:uppercase;
    padding:4px 11px; text-decoration:none; transition:background .2s, color .2s;
    color:rgba(255,255,255,.5); white-space:nowrap;
  }
  .lang-btn.active { background:var(--yellow); color:var(--charcoal); }
  .lang-btn:not(.active):hover { background:rgba(255,255,255,.1); color:rgba(255,255,255,.85); }

  /* ── HEADER ── */
  header {
    position:fixed; top:var(--topbar-h); left:0; right:0; z-index:200;
    height:var(--hdr-h);
    background:var(--white);
    border-bottom:1px solid rgba(0,0,0,.08);
    box-shadow:0 2px 16px rgba(0,0,0,.07);
    display:flex; align-items:center; justify-content:space-between;
    padding:0 28px; gap:12px;
    transition:box-shadow .3s;
  }

  .logo { display:flex; align-items:center; gap:11px; text-decoration:none; flex-shrink:0; }
  .logo-icon {
    width:42px; height:42px; border-radius:50%;
    background:linear-gradient(135deg,var(--yellow),var(--yellow-dk));
    display:flex; align-items:center; justify-content:center;
    font-family:'Noto Serif TC',serif; font-size:1.2rem; font-weight:700; color:var(--white);
    box-shadow:0 2px 8px rgba(212,168,14,.35);
  }
  .logo-text { display:flex; flex-direction:column; line-height:1.1; }
  .logo-cn { font-family:'Noto Serif TC',serif; font-size:.7rem; font-weight:500; color:var(--pink); letter-spacing:.22em; }
  .logo-en { font-family:'Playfair Display',serif; font-size:1.08rem; font-weight:700; color:var(--ink); }

  nav { display:flex; align-items:center; gap:2px; }
  .nav-link {
    font-family:'Noto Serif TC',serif; font-size:.82rem; font-weight:400; letter-spacing:.06em;
    color:var(--muted); text-decoration:none; padding:7px 14px; border-radius:30px;
    transition:background .2s, color .2s; white-space:nowrap;
  }
  .nav-link:hover { color:var(--ink); }
  .nav-link.active { background:var(--yellow-pale); color:var(--ink); font-weight:600; border:1px solid rgba(245,200,66,.5); }

  .btn-book {
    font-family:'Noto Serif TC',serif; font-size:.8rem; font-weight:600; letter-spacing:.06em;
    padding:9px 22px; border-radius:30px; text-decoration:none;
    border:1.5px solid var(--ink); color:var(--ink); background:transparent;
    transition:background .2s, color .2s; white-space:nowrap; flex-shrink:0;
  }
  .btn-book:hover { background:var(--ink); color:var(--white); }

  /* ── HERO ── */
  .hero {
    margin-top:calc(var(--topbar-h) + var(--hdr-h));
    position:relative; overflow:hidden;
    min-height:calc(100vh - var(--topbar-h) - var(--hdr-h));
    display:flex; align-items:center; justify-content:center;
    background:var(--offwhite);
  }
  .hero::before {
    content:''; position:absolute; inset:0;
    background:
      radial-gradient(ellipse 60% 80% at 50% 60%,rgba(255,255,255,.93) 0%,rgba(255,255,255,.6) 40%,transparent 70%),
      radial-gradient(ellipse 80% 60% at 0% 50%,rgba(253,232,138,.45) 0%,transparent 55%),
      radial-gradient(ellipse 80% 60% at 100% 50%,rgba(253,232,138,.45) 0%,transparent 55%);
    pointer-events:none; z-index:1;
  }
  .food-circle {
    position:absolute; border-radius:50%;
    display:flex; align-items:center; justify-content:center;
    font-size:5rem; line-height:1;
    background:linear-gradient(135deg,#f7e8b0,#f0d47a);
    border:3px solid rgba(255,255,255,.8);
    box-shadow:0 12px 40px rgba(0,0,0,.12);
    animation:floatIn 1s ease both;
  }
  .fc-1 { width:280px;height:280px; left:-60px; top:5%;   animation-delay:.1s; }
  .fc-2 { width:200px;height:200px; left:100px; bottom:8%; animation-delay:.25s; }
  .fc-3 { width:300px;height:300px; right:-70px;top:3%;   animation-delay:.15s; }
  .fc-4 { width:190px;height:190px; right:90px; bottom:6%; animation-delay:.3s; }
  .lemon { position:absolute; font-size:3rem; opacity:.65; pointer-events:none; animation:floatIn .8s ease both; }
  .lemon--1 { right:240px; top:18%; animation-delay:.5s; transform:rotate(-20deg); }
  .lemon--2 { left:220px;  bottom:22%; animation-delay:.55s; transform:rotate(15deg); }

  .hero-content { position:relative; z-index:2; text-align:center; max-width:640px; padding:80px 24px; }

  .hero-tag {
    display:inline-block; font-family:'Noto Serif TC',serif; font-size:.72rem; font-weight:500;
    letter-spacing:.16em; color:var(--pink); margin-bottom:22px;
    padding:5px 16px; border-radius:30px;
    background:var(--pink-pale); border:1px solid rgba(192,48,74,.2);
    animation:fadeDown .8s ease both;
  }
  .hero-title {
    font-family:'Playfair Display',serif;
    font-size:clamp(3rem,7.5vw,6.5rem); font-weight:700;
    line-height:.95; color:var(--ink); letter-spacing:-.01em;
    display:block; margin-bottom:16px;
    animation:fadeDown .9s .1s ease both;
  }
  .hero-title em { font-style:italic; color:var(--pink); }
  /* Chinese hero title uses Noto Serif TC */
  .hero-title-zh {
    font-family:'Noto Serif TC',serif;
    font-size:clamp(2.5rem,6vw,5.5rem); font-weight:700;
    line-height:1.1; color:var(--ink);
    display:block; margin-bottom:16px;
    animation:fadeDown .9s .1s ease both;
  }
  .hero-title-zh em { font-style:normal; color:var(--pink); }

  .hero-cn {
    font-family:'Noto Serif TC',serif; font-size:1rem; font-weight:300;
    color:var(--muted); letter-spacing:.28em; display:block; margin-bottom:18px;
    animation:fadeDown .9s .15s ease both;
  }
  .hero-desc {
    font-family:'Noto Serif TC',serif; font-size:1.05rem; font-weight:300;
    color:var(--muted); line-height:1.9; margin-bottom:36px;
    animation:fadeUp .9s .3s ease both;
  }
  .hero-ctas { display:flex; gap:14px; justify-content:center; flex-wrap:wrap; animation:fadeUp .9s .4s ease both; }

  .cta {
    font-family:'Noto Serif TC',serif; font-size:.88rem; font-weight:600; letter-spacing:.08em;
    padding:13px 32px; border-radius:30px; text-decoration:none;
    transition:opacity .2s, transform .2s, box-shadow .2s;
  }
  .cta:hover { transform:translateY(-2px); }
  .cta--pink { background:var(--pink); color:var(--white); box-shadow:0 4px 18px rgba(192,48,74,.35); }
  .cta--pink:hover { opacity:.9; box-shadow:0 6px 24px rgba(192,48,74,.45); }
  .cta--outline { border:1.5px solid var(--ink); color:var(--ink); background:transparent; }
  .cta--outline:hover { background:var(--ink); color:var(--white); }

  /* ── SHARED SECTION ── */
  section { padding:88px 32px; }

  .divider { display:flex; align-items:center; gap:14px; margin:0 auto 56px; width:260px; max-width:90%; }
  .div-line { flex:1; height:1.5px; background:linear-gradient(90deg,transparent,var(--yellow-dk),transparent); }
  .div-gem  { width:8px;height:8px; background:var(--yellow); transform:rotate(45deg); flex-shrink:0; }

  .sec-head { text-align:center; margin-bottom:56px; }
  .sec-tag {
    display:inline-block; font-family:'Noto Serif TC',serif;
    font-size:.7rem; font-weight:600; letter-spacing:.18em; text-transform:uppercase;
    color:var(--pink); padding:4px 14px; border-radius:30px;
    background:var(--pink-pale); border:1px solid rgba(192,48,74,.18); margin-bottom:14px;
  }
  .sec-title {
    font-family:'Playfair Display',serif;
    font-size:clamp(1.9rem,3.5vw,2.8rem); font-weight:700;
    color:var(--ink); line-height:1.15; margin-bottom:14px;
  }
  .sec-title em { font-style:italic; color:var(--pink); }
  /* Chinese section titles */
  .sec-title-zh {
    font-family:'Noto Serif TC',serif;
    font-size:clamp(1.7rem,3vw,2.5rem); font-weight:700;
    color:var(--ink); line-height:1.3; margin-bottom:14px;
  }
  .sec-title-zh em { font-style:normal; color:var(--pink); }
  .sec-desc { font-family:'Noto Serif TC',serif; font-size:.98rem; color:var(--muted); line-height:1.85; max-width:540px; margin:0 auto; }

  /* ── HIGHLIGHTS ── */
  #highlights {
    background:var(--yellow);
    background-image:radial-gradient(circle at 20% 30%,rgba(255,255,255,.18) 0%,transparent 50%),
                     radial-gradient(circle at 80% 70%,rgba(212,168,14,.25) 0%,transparent 50%);
  }
  #highlights .sec-tag  { background:rgba(255,255,255,.55); }
  #highlights .sec-desc { color:rgba(30,20,0,.65); }

  .highlights-grid { display:grid; grid-template-columns:repeat(auto-fit,minmax(280px,1fr)); gap:22px; max-width:1100px; margin:0 auto; }
  .h-card {
    background:var(--white); border-radius:16px; padding:30px 26px;
    box-shadow:0 4px 24px rgba(0,0,0,.08); position:relative; overflow:hidden;
    transition:transform .3s, box-shadow .3s;
  }
  .h-card:hover { transform:translateY(-5px); box-shadow:0 10px 36px rgba(0,0,0,.13); }
  .h-card::after {
    content:attr(data-n); position:absolute; bottom:10px; right:16px;
    font-family:'Playfair Display',serif; font-size:3.8rem; font-weight:700;
    color:rgba(245,200,66,.18); line-height:1; pointer-events:none;
  }
  .h-icon { font-size:2.2rem; margin-bottom:14px; display:block; }
  .h-title { font-family:'Noto Serif TC',serif; font-size:1.05rem; font-weight:600; color:var(--ink); margin-bottom:8px; }
  .h-desc  { font-family:'Noto Serif TC',serif; font-size:.88rem; color:var(--muted); line-height:1.75; }

  /* ── MENUS ── */
  #menus { background:var(--white); }
  .menus-grid { display:grid; grid-template-columns:repeat(auto-fit,minmax(440px,1fr)); gap:32px; max-width:1100px; margin:0 auto; }
  .menu-card {
    background:var(--offwhite); border-radius:16px;
    border:1px solid rgba(0,0,0,.07); overflow:hidden;
    display:flex; flex-direction:column;
    box-shadow:0 4px 24px rgba(0,0,0,.07);
    transition:transform .3s, box-shadow .3s;
    animation:fadeUp .8s ease both;
  }
  .menu-card:hover { transform:translateY(-6px); box-shadow:0 14px 44px rgba(0,0,0,.13); }
  .menu-card::before { content:''; display:block; height:4px; background:linear-gradient(90deg,var(--yellow-dk),var(--yellow),var(--yellow-lt)); }
  .mc-head { padding:24px 24px 0; }
  .mc-tag {
    font-family:'Noto Serif TC',serif; font-size:.63rem; font-weight:600;
    letter-spacing:.2em; text-transform:uppercase; color:var(--pink); margin-bottom:8px;
    display:flex; align-items:center; gap:10px;
  }
  .mc-tag::after { content:''; flex:1; height:1px; background:rgba(0,0,0,.08); }
  .mc-title { font-family:'Noto Serif TC',serif; font-size:clamp(1.1rem,2vw,1.45rem); font-weight:700; color:var(--ink); line-height:1.25; margin-bottom:4px; }
  .mc-cn    { font-family:'Noto Serif TC',serif; font-size:.82rem; font-weight:300; color:var(--pink); letter-spacing:.14em; display:block; margin-bottom:2px; }
  .mc-desc  { font-family:'Noto Serif TC',serif; font-size:.88rem; color:var(--muted); line-height:1.75; padding:12px 24px 14px; }
  .mc-pills { display:flex; flex-wrap:wrap; gap:7px; padding:0 24px 16px; }
  .pill {
    font-family:'Noto Serif TC',serif; font-size:.65rem; font-weight:500; letter-spacing:.06em;
    padding:4px 12px; border-radius:30px;
    background:var(--pink-pale); color:var(--pink); border:1px solid rgba(192,48,74,.18);
  }
  .flipbook-shell { margin:0 16px 14px; border-radius:10px; border:1px solid rgba(0,0,0,.08); overflow:hidden; background:#faf6ef; aspect-ratio:4/3; }
  .flipbook-shell iframe { width:100%; height:100%; border:none; display:block; }
  .mc-foot { margin-top:auto; display:flex; align-items:center; justify-content:space-between; padding:12px 24px 22px; border-top:1px solid rgba(0,0,0,.07); }
  .mc-note { font-family:'Noto Serif TC',serif; font-size:.68rem; color:rgba(0,0,0,.35); font-style:italic; }
  .btn-full {
    display:inline-flex; align-items:center; gap:7px;
    font-family:'Noto Serif TC',serif; font-size:.78rem; font-weight:600; letter-spacing:.06em;
    color:var(--pink); text-decoration:none; padding:8px 18px; border-radius:30px;
    border:1.5px solid var(--pink); transition:background .2s, color .2s;
  }
  .btn-full:hover { background:var(--pink); color:var(--white); }
  .btn-full svg { transition:transform .25s; }
  .btn-full:hover svg { transform:translateX(3px); }

  /* ── ABOUT ── */
  #about {
    background:linear-gradient(135deg,var(--yellow-pale),#fff8d6,var(--yellow-pale));
    border-top:1px solid rgba(245,200,66,.3); border-bottom:1px solid rgba(245,200,66,.3);
  }
  .about-inner { max-width:1000px; margin:0 auto; display:grid; grid-template-columns:1fr 1fr; gap:64px; align-items:center; }
  .about-text p { font-family:'Noto Serif TC',serif; font-size:1rem; color:var(--muted); line-height:1.95; margin-bottom:18px; }
  .about-text strong { color:var(--ink); font-weight:600; }
  .stats { display:grid; grid-template-columns:1fr 1fr; gap:16px; }
  .stat {
    background:var(--white); border-radius:14px; padding:24px 18px; text-align:center;
    border:1px solid rgba(245,200,66,.4); box-shadow:0 3px 16px rgba(0,0,0,.06);
    transition:transform .3s;
  }
  .stat:hover { transform:translateY(-3px); }
  .stat::before { content:''; display:block; height:3px; border-radius:14px 14px 0 0; background:linear-gradient(90deg,var(--yellow),var(--yellow-lt)); margin:-24px -18px 16px; }
  .stat-num   { font-family:'Playfair Display',serif; font-size:2.4rem; font-weight:700; color:var(--pink); line-height:1; }
  .stat-label { font-family:'Noto Serif TC',serif; font-size:.72rem; font-weight:500; letter-spacing:.12em; text-transform:uppercase; color:var(--muted); margin-top:6px; }

  /* ── RESERVE ── */
  #reserve {
    background:var(--pink);
    background-image:radial-gradient(circle at 30% 50%,rgba(255,255,255,.12) 0%,transparent 55%),
                     radial-gradient(circle at 70% 50%,rgba(0,0,0,.08) 0%,transparent 55%);
    text-align:center;
  }
  #reserve h2 { font-family:'Noto Serif TC',serif; font-size:clamp(2rem,4vw,2.8rem); font-weight:700; color:var(--white); margin-bottom:14px; line-height:1.2; }
  #reserve h2 em { font-style:normal; color:var(--yellow-lt); }
  #reserve p { font-family:'Noto Serif TC',serif; font-size:1.02rem; color:rgba(255,255,255,.82); line-height:1.85; margin-bottom:28px; }
  .contact-row { display:flex; gap:28px; justify-content:center; flex-wrap:wrap; margin-bottom:36px; }
  .contact-item { font-family:'Noto Serif TC',serif; font-size:.88rem; color:rgba(255,255,255,.85); }
  .contact-item span { color:var(--yellow-lt); font-weight:600; }
  .cta--white { background:var(--white); color:var(--pink); font-weight:700; box-shadow:0 4px 18px rgba(0,0,0,.15); }
  .cta--white:hover { background:var(--yellow-lt); color:var(--pink); }
  .cta--white-outline { border:2px solid rgba(255,255,255,.7); color:var(--white); background:transparent; font-weight:600; }
  .cta--white-outline:hover { background:rgba(255,255,255,.15); }

  /* ── FOOTER ── */
  footer { background:var(--charcoal); color:rgba(255,255,255,.55); }
  .foot-inner { display:flex; align-items:center; justify-content:space-between; padding:28px 36px; gap:16px; flex-wrap:wrap; }
  .foot-logo { font-family:'Playfair Display',serif; font-size:1.05rem; font-weight:700; color:var(--white); }
  .foot-logo small { display:block; font-family:'Noto Serif TC',serif; font-size:.72rem; font-weight:300; color:rgba(245,200,66,.6); letter-spacing:.22em; margin-top:2px; }
  .foot-links { display:flex; gap:20px; flex-wrap:wrap; }
  .foot-links a { font-family:'Noto Serif TC',serif; font-size:.75rem; letter-spacing:.1em; color:rgba(255,255,255,.45); text-decoration:none; transition:color .2s; }
  .foot-links a:hover { color:var(--yellow); }
  .foot-copy { font-family:'Noto Serif TC',serif; font-size:.7rem; color:rgba(255,255,255,.3); }

  /* ── ANIMATIONS ── */
  @keyframes fadeDown { from{opacity:0;transform:translateY(-16px);}to{opacity:1;transform:translateY(0);} }
  @keyframes fadeUp   { from{opacity:0;transform:translateY(20px);}to{opacity:1;transform:translateY(0);} }
  @keyframes floatIn  { from{opacity:0;transform:scale(.93);}to{opacity:1;transform:scale(1);} }
  .menu-card:nth-child(1){ animation-delay:.15s; }
  .menu-card:nth-child(2){ animation-delay:.3s;  }

  /* ── RESPONSIVE ── */
  @media(max-width:900px){
    .about-inner { grid-template-columns:1fr; gap:40px; }
    .stats { grid-template-columns:repeat(4,1fr); }
  }
  @media(max-width:768px){
    :root{ --topbar-h:0px; }
    .topbar { display:none; }
    nav { display:none; }
    .btn-book { margin-left:auto; }
    .menus-grid { grid-template-columns:1fr; }
    .fc-1,.fc-2 { left:-90px; }
    .fc-3,.fc-4 { right:-90px; }
  }
  @media(max-width:540px){
    section { padding:60px 18px; }
    .highlights-grid { grid-template-columns:1fr; }
    .stats { grid-template-columns:1fr 1fr; }
    header { padding:0 16px; }
    .logo-en { font-size:.95rem; }
    .hero-content { padding:50px 16px; }
    .fc-1,.fc-2,.fc-3,.fc-4,.lemon { display:none; }
    .foot-inner { flex-direction:column; text-align:center; gap:18px; }
    .foot-links { justify-content:center; }
    .contact-row { flex-direction:column; gap:10px; }
    .lang-btn { padding:4px 8px; }
  }
  </style>
</head>
<body>

<!-- ══════ TOPBAR ══════ -->
<div class="topbar">
  <div class="topbar-left">
    <a href="tel:+639155431862"><?= $s['topbar_phone'] ?></a>
    <a href="mailto:reservations@empressdiningpalace.com"><?= $s['topbar_email'] ?></a>
  </div>
  <div class="topbar-right">
    <!-- Language switcher -->
    <div class="lang-switcher">
      <a href="?lang=en" class="lang-btn <?= $lang==='en'?'active':'' ?>">EN</a>
      <a href="?lang=zh" class="lang-btn <?= $lang==='zh'?'active':'' ?>">中文</a>
    </div>
    <a href="#" title="Facebook">f</a>
    <a href="#" title="Instagram">◎</a>
    <a href="#" title="Twitter">✗</a>
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
  <div class="food-circle fc-1">🥟</div>
  <div class="food-circle fc-2">🍜</div>
  <div class="food-circle fc-3">🦆</div>
  <div class="food-circle fc-4">🦞</div>
  <div class="lemon lemon--1">🍋</div>
  <div class="lemon lemon--2">🍋</div>

  <div class="hero-content">
    <span class="hero-tag"><?= $s['hero_tag'] ?></span>

    <?php if($is_zh): ?>
      <span class="hero-title-zh"><?= $s['hero_title'] ?></span>
    <?php else: ?>
      <span class="hero-title"><?= $s['hero_title'] ?></span>
    <?php endif; ?>

    <span class="hero-cn"><?= $s['hero_cn'] ?></span>
    <p class="hero-desc"><?= $s['hero_desc'] ?></p>

    <div class="hero-ctas">
      <a class="cta cta--pink"    href="#reserve"><?= $s['cta_book'] ?></a>
      <a class="cta cta--outline" href="#menus"><?= $s['cta_menu'] ?></a>
    </div>
  </div>
</section>


<!-- ══════ HIGHLIGHTS ══════ -->
<section id="highlights">
  <div class="sec-head">
    <span class="sec-tag"><?= $s['hl_tag'] ?></span>
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
    <span class="sec-tag"><?= $s['menus_tag'] ?></span>
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
        <a class="btn-full" href="empress-menu.php?menu=alacarte&orient=landscape">
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
        <a class="btn-full" href="empress-menu.php?menu=celebrations&orient=portrait">
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
      <span class="sec-tag" style="display:inline-block;margin-bottom:14px;"><?= $s['about_tag'] ?></span>
      <?php if($is_zh): ?>
        <h2 class="sec-title-zh" style="text-align:left;margin-bottom:22px;"><?= $s['about_title'] ?></h2>
      <?php else: ?>
        <h2 class="sec-title" style="text-align:left;margin-bottom:22px;"><?= $s['about_title'] ?></h2>
      <?php endif; ?>
      <p><?= $s['about_p1'] ?></p>
      <p><?= $s['about_p2'] ?></p>
    </div>
    <div class="stats">
      <?php
      $stat_vals = ['2019','200+','11AM','BGC'];
      foreach($stat_vals as $i => $v):
      ?>
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
  <h2><?= $s['reserve_title'] ?></h2>
  <p><?= $s['reserve_desc'] ?></p>
  <div class="contact-row">
    <div class="contact-item"><?= $s['contact_phone'] ?></div>
    <div class="contact-item"><?= $s['contact_addr'] ?></div>
    <div class="contact-item"><?= $s['contact_hours'] ?></div>
  </div>
  <div style="display:flex;gap:14px;justify-content:center;flex-wrap:wrap;">
    <a class="cta cta--white"         href="tel:+639155431862"><?= $s['cta_call'] ?></a>
    <a class="cta cta--white-outline" href="#menus"><?= $s['cta_view'] ?></a>
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
  hdr.style.boxShadow = window.scrollY > 10
    ? '0 4px 24px rgba(0,0,0,.13)'
    : '0 2px 16px rgba(0,0,0,.07)';
});
</script>
</body>
</html>
