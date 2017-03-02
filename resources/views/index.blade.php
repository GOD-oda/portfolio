<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>t-oda.tech portfolio</title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="author" content="oda">

  <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <!-- <header class="header">
    <div class="first-view">
      <h1 class="title">尾田</h1>
    </div>
  </header> -->

  <section class="first-view">
    <h1 class="title">尾田</h1>
  </section>

  <section class="about" id="about">
    <div class="container">
      <h2 class="heading">人物</h2>
      <div class="row">
        <div class="col-xs-2">
          <h3 class="history-title">小学校時代</h3>
        </div>
        <div class="col-xs-10">
          <p class="history-text">
            通知簿の先生からの一言に「落ち着きがない」と必ず最初に書かれる。<br>
            家ではゲーム、外ではドッヂボールや野球をするなど、インドア・アウトドアの両立をこなす。
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-2">
          <h3 class="history-title">中学校時代</h3>
        </div>
        <div class="col-xs-10">
          <p class="history-text">
            部活動は軟式テニスを選択する。ポジションは前衛。後衛がうまいので１番手を務める。<br>
            この頃から数学に苦手意識を覚える。数学の勉強をするくらいならスマブラDXをするほど嫌悪していた。<br>
            父の影響もあり麻雀を始める。ゲームボーイの「役満」というゲームを楽しむが、役満仙人はトラウマである。
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-2">
          <h3 class="history-title">高校時代</h3>
        </div>
        <div class="col-xs-10">
          <p class="history-text">
            進学コースを選択していたが入学当初は進学する気はさらさら無かったので、PSPの「MHP 2ndG」で遊んでいた。ダークネスというランスが好きだった。<br>
            典型的日本人の特性をフル活用して、周りが進学するのに合わせて勉強をするようになる。
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-2">
          <h3 class="history-title">大学時代</h3>
        </div>
        <div class="col-xs-10">
          <p class="history-text">
            １年の浪人を経て近畿大学経営学部に入学する。英語の講義でたまたま出会った２人とオンラインゲームにハマり、以後卒業するまでほとんど行動を共にする。<br>
            ITビジネスコースを専攻していたこともあり、ネットビジネスについて学ぶようになる。<br>
            専門科目で教授の補佐をするというアルバイト（TSA）を始める。リーダーを務め、TSAを盛り上げることに尽力した。
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-2">
          <h3 class="history-title">現在</h3>
        </div>
        <div class="col-xs-10">
          <p class="history-text">
            TSAとしてHTMLやCSS、JavaScriptといったwebに関する講義に参加し、webの面白さに興味を惹かれるようになる。また、RDBに関する講義も受け、RDBのイロハを学んだ。<br>
            こうした経緯からweb業界に身を置くことになる。<br>
            現在はフリーランスの傍、自分でwebサービスを作っている。<br>
            暇があるとカンファレンスなどの動画を見る。特にPHPカンファレンスやDB勉強会の動画はよく見る。
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="skills" id="skills">
    <h2 class="heading">技術</h2>
      <div class="row">
        <div class="col-sm-6">
          <img src="{{ asset('img/icon-php.png') }}" class="skills-icon">
          <div class="skills-title">PHP</div>
          <div class="skills-description">
            <p>
              社会人になって初めて学んだプログラミング言語。その分思い入れも強い。var_dump派である。
            </p>
          </div>
        </div>
        <div class="col-sm-6">
          <img src="{{ asset('img/icon-laravel.png') }}" class="skills-icon">
          <div class="skills-title">Laravel</div>
          <div class="skills-description">
            <p>
              一番好きなフレームワーク。Laravelのコアコードを追いかけるのが好き。
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <img src="{{ asset('img/icon-db.png') }}" class="skills-icon">
          <div class="skills-title">RDB(PostgreSQL / MySQL) / SQL</div>
          <div class="skills-description">
            <p>
              データの寿命はコードよりも長いという言葉に衝撃を受け、RDBについて勉強し直した。
              目XPLAINが出来るようになりたい。
            </p>
          </div>
        </div>
        <div class="col-sm-6">
          <img src="{{ asset('img/icon-htmlcss.png') }}" class="skills-icon">
          <div class="skills-title">HTML5 / CSS</div>
          <div class="skills-description">
            <p>2016年からデザインについて興味を持つ。細くスッキリとしたデザインを好む。</p>
          </div>
        </div>
      </div>
  </section>

  <section class="works" id="works">
    <h2 class="heading">制作</h2>

    <div class="row">
      <div class="col-sm-5">
        <img src="{{ asset('img/work_laravel-room1.png') }}" alt="" class="works-image">
        <img src="{{ asset('img/work_laravel-room2.png') }}" alt="" class="works-image">
        <img src="{{ asset('img/work_laravel-room3.png') }}" alt="" class="works-image">
        <img src="{{ asset('img/work_laravel-room4.png') }}" alt="" class="works-image">
      </div>
      <div class="col-sm-7 works-outline">
        <a href="//laravel-room.com" target="_blank" class="works-title">Laravel Room</a>
        <p class="works-description">
          PHP7.0、Laravel5.3、HTML5、CSS3、MaterializeCSS、MySQLを使用した。
         「 自分で一から何か作りたい」と「Laravelで技術ブログを作りたい」という気持ちから誕生した。<br>
         ベータ版の制作期間はバックエンドが約２〜３週間、フロントエンドが約１〜２週間の１ヶ月。
         最近はタグ機能を追加した。<br>
         マテリアルデザインが好きなので、手軽に実装できるMaterializeCSSを利用した。
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-5">
        <img src="{{ asset('img/work_lp1.png') }}" alt="" class="works-image">
        <img src="{{ asset('img/work_lp2.png') }}" alt="" class="works-image">
        <img src="{{ asset('img/work_lp3.png') }}" alt="" class="works-image">
        <img src="{{ asset('img/work_lp4.png') }}" alt="" class="works-image">
      </div>
      <div class="col-sm-7 works-outline">
        <a href="//vform.link" target="_blank" class="works-title">vform</a>
        <p class="works-description">
          初めて制作したランディングページ。白と黒の使い分けを意識して制作した。<br>
          ほとんど自力でCSSを書いたので良い経験となった。もちろんレスポンシブ。<br>
          実装期間は約１週間。ある程度作ったところで、デザインが気に食わないから一から作り直したこともあった。
        </p>
      </div>
    </div>
  </section>

  <section class="contact" id="contact">
    <h2 class="heading">お問い合わせ</h2>
    <div class="container">
      <form action="{{ url('send-mail') }}" class="contact-form" method="post">
        {{ csrf_field() }}

        <div class="row input-area">
          <div class="col-sm-6">
            <div class="form-group @if (! empty($errors->first('name'))) has-error @endif">
              <label for="name">お名前<span class="label label-danger">必須</span></label>
              <input type="text" class="form-control" id="name" name="name" placeholder="お名前を入力してください">
              <span class="help-block">{{ $errors->first('name') }}</span>
            </div>
            <div class="form-group @if (! empty($errors->first('email'))) has-error @endif">
              <label for="email">メールアドレス<span class="label label-danger">必須</span></label>
              <input type="email" class="form-control" id="email" name="email" placeholder="メールアドレスを入力してください">
              <span class="help-block">{{ $errors->first('email') }}</span>
            </div>
            <div class="form-group @if (! empty($errors->first('subject'))) has-error @endif">
              <label for="subject">件名<span class="label label-danger">必須</span></label>
              <input type="text" class="form-control" id="subject" name="subject" placeholder="件名を入力してください">
              <span class="help-block">{{ $errors->first('subject') }}</span>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group @if (! empty($errors->first('body'))) has-error @endif">
              <label for="body">お問い合わせ内容<span class="label label-danger">必須</span></label>
              <textarea name="body" id="body" col="30" row="10" class="form-control" placeholder="ご自由に入力してください"></textarea>
              <span class="help-block">{{ $errors->first('body') }}</span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-offset-4 col-xs-4">
            <input type="submit" class="btn btn-default btn-submit" value="送信">
          </div>
        </div>
      </form>
    </div>
  </section>

  <footer class="footer">
    <ul class="icon-list">
      <li class="icon-item"><a href="https://twitter.com/Tkahiro_Oda" target="_blank"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a></li>
      <li class="icon-item"><a href="https://github.com/GOD-oda" target="_blank"><i class="fa fa-github fa-2x" aria-hidden="true"></i></a></li>
      <li class="icon-item"><a href="https://www.facebook.com/takahiro.oda.1420" target="_blank"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a></li>
    </ul>
    <p class="copy-right">© 2017 t-oda</p>
  </footer>

  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
</body>
</html>