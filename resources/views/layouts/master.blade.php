<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>尾田</title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="author" content="oda">

  <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <header class="header">
    <div class="first-view">
      <h1 class="title">尾田</h1>
    </div>
  </header>

  <section class="about" id="about">
    <h2 class="heading">人物</h2>
    <div class="about-wrapper">
      <div class="history-wrapper">
        <div class="history-box w-20per">
          <h3 class="history-title">小学校時代</h3>
        </div>
        <div class="history-box w-80per">
          <p class="history-body">
            通知簿の先生からの一言に「落ち着きがない」と必ず最初に書かれる。<br>
            家ではゲーム、外ではドッヂボールや野球をするなど、インドア・アウトドアの両立をこなす。
          </p>
        </div>
      </div>
      <div class="history-wrapper">
        <div class="history-box w-20per">
          <h3 class="history-title">中学校時代</h3>
        </div>
        <div class="history-box w-80per">
          <p class="history-body">
            部活動は軟式テニスを選択する。ポジションは前衛。後衛がうまいので１番手を務める。<br>
            この頃から数学に苦手意識を覚える。数学の勉強をするくらいならスマブラDXをするほど嫌悪していた。<br>
            父の影響もあり麻雀を始める。ゲームボーイの「役満」というゲームを楽しむが、役満仙人はトラウマである。<br>
          </p>
        </div>
      </div>
      <div class="history-wrapper">
        <div class="history-box w-20per">
          <h3 class="history-title">高校時代</h3>
        </div>
        <div class="history-box w-80per">
          <p class="history-body">
            進学コースを選択していたが入学当初は進学する気はさらさら無かったので、PSPの「MHP 2ndG」で遊んでいた。ダークネスというランスが好きだった。<br>
            典型的日本人の特性をフル活用して、周りが進学するのに合わせて勉強をするようになる。
          </p>
        </div>
      </div>
      <div class="history-wrapper">
        <div class="history-box w-20per">
          <h3 class="history-title">大学時代</h3>
        </div>
        <div class="history-box w-80per">
          <p class="history-body">
            １年の浪人を経て近畿大学経営学部に入学する。英語の講義でたまたま出会った２人とオンラインゲームにハマり、以後卒業するまでほとんど行動を共にする。<br>
            ITビジネスコースを専攻していたこともあり、ネットビジネスについて学ぶようになる。<br>
            専門科目で教授の補佐をするというアルバイト（TSA）を始める。リーダーを務め、TSAを盛り上げることに尽力した。
          </p>
        </div>
      </div>
      <div class="history-wrapper">
        <div class="history-box w-20per">
          <h3 class="history-title">現在</h3>
        </div>
        <div class="history-box w-80per">
          <p class="history-body">
            フリーランスとして生きることを決意する。<br>
            暇があるとカンファレンスなどの動画を見る。特にPHPカンファレンスの動画はよく見る。
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="skills" id="skills">
    <h2 class="heading">技術</h2>
    <div class="skills-wrapper">
      <div class="skills-box">
        <div class="skills-icon"><img src="{{ asset('img/icon-php.png') }}" alt=""></div>
        <div class="skills-title">PHP</div>
        <div class="skills-description">
          <p>社会人になって初めて学んだプログラミング言語。その分思い入れも強い。var_dump派である。</p>
        </div>
      </div>
      <div class="skills-box">
        <div class="skills-icon"><img src="{{ asset('img/icon-laravel.png') }}" alt=""></div>
        <div class="skills-title">Laravel</div>
        <div class="skills-description">
          <p>一番好きなフレームワーク。Laravelのコアコードを追いかけるのが好き。</p>
        </div>
      </div>
    </div>
    <div class="skills-wrapper">
      <div class="skills-box">
        <div class="skills-icon"><img src="{{ asset('img/icon-db.png') }}" alt=""></div>
        <div class="skills-title">RDB(PostgreSQL / MySQL)</div>
        <div class="skills-description">
          <p>データの寿命はコードよりも長いという言葉に衝撃を受け、RDBについて勉強し直した。</p>
        </div>
      </div>
      <div class="skills-box">
        <div class="skills-icon"><img src="{{ asset('img/icon-htmlcss.png') }}" alt=""></div>
        <div class="skills-title">HTML5 / CSS</div>
        <div class="skills-description">
          <p>2016年からデザインについて興味を持つ。細くスッキリとしたデザインを好む。</p>
        </div>
      </div>
    </div>
  </section>

  <section class="works" id="works">
    <h2 class="heading">制作</h2>
    <div class="works-wrapper">
      <div class="works-box">
        <div class="works-image">
          <img src="{{ asset('img/work_laravel-room1.png') }}" alt="" class="">
          <img src="{{ asset('img/work_laravel-room2.png') }}" alt="" class="">
          <img src="{{ asset('img/work_laravel-room3.png') }}" alt="" class="">
          <img src="{{ asset('img/work_laravel-room4.png') }}" alt="" class="">
        </div>
        <div class="works-description">
          <p class="title"><a href="http://laravel-room.com" target="_blank">Laravel Room</a></p>
          <p class="description">
            PHP7.0、Laravel5.3、HTML5、CSS3(MaterializeCSS)、MySQLを使用した。
           「 自分で一から何か作りたい」と「Laravelで技術ブログを作りたい」という気持ちから誕生した。<br>
           ベータ版の制作期間はバックエンドが約２〜３週間、フロントエンドが約１〜２週間の１ヶ月。
           最近はタグ機能を追加した。<br>
           マテリアルデザインが好きなので、手軽に実装できるMaterializeCSSを利用した。
          </p>
        </div>
      </div>
      <div class="works-box">
        <div class="works-image">
          <img src="{{ asset('img/work_lp1.png') }}" alt="" class="">
          <img src="{{ asset('img/work_lp2.png') }}" alt="" class="">
          <img src="{{ asset('img/work_lp3.png') }}" alt="" class="">
          <img src="{{ asset('img/work_lp4.png') }}" alt="" class="">
        </div>
        <div class="works-description">
          <p class="title"><a href="https://vform.link/" target="_blank">vform</a></p>
          <p class="description">
            初めて制作したランディングページ。白と黒の使い分けを意識して制作した。<br>
            ほとんど自力でCSSを書いたので良い経験となった。もちろんレスポンシブ。<br>
            実装期間は約１週間。ある程度作ったところで、デザインが気に食わないから一から作り直したこともあった。
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="contact" id="contact">
    <h2 class="heading">お問い合わせ</h2>
    <form action="#" class="contact-form">
      <div class="input-area">
        <div class="w-50per left pl-15 pr-15">
          <input type="text" name="name">
          <input type="text" name="email">
          <input type="text" name="subject">
        </div>
        <div class="w-50per left pl-15 pr-15">
          <textarea name="body" id=""></textarea>
        </div>
      </div>
      <div class="submit-area">
        <input type="submit" vlaue="送信">
      </div>
    </form>
  </section>


  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

</body>
</html>