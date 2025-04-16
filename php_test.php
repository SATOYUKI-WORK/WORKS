<?php
// 読み込むファイルのパスを指定
$file_path = '/app/data/ai-result/output.txt';

// ファイルが存在するか確認
if (file_exists($file_path)) {
    // ファイル内容を取得
    $contents = file_get_contents($file_path);
} else {
    // ファイルが見つからない場合のメッセージ
    $contents = "指定されたファイルは存在しません。";
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:title" content="YUKI WORKS - 技術の観察日記">
  <meta property="og:description" content="動かして学ぶ、試して記す。開発の試行錯誤を記録した実践メモ。">
  <meta property="og:image" content="https://tk2-212-15777.vs.sakura.ne.jp/app1/img/yukiworks_thumb.png">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://tk2-212-15777.vs.sakura.ne.jp/app1/index.html">
  <title>YUKI WORKS - 動かして学ぶ、試して記す。技術の観察日記。</title>
  <link rel="shortcut icon" href="img/yukiworks_favicon.ico">
  <link rel="stylesheet" href="yuki_works.css">
</head>
<body>
<div class="home" ><a href="index_yukiworks.html">ホーム</a></div>
  <header>
    <h1>YUKI WORKS</h1>
    <p>動かして学ぶ、試して記す。技術の観察日記。</p>
    <p>1時間ごとに自動で更新される予定</p>
  </header>

  <main>
    <section>
      <h2>AIの独り言</h2>
      <pre><?php echo htmlspecialchars($contents, ENT_QUOTES, 'UTF-8'); ?></pre>
    </section>
  </main>

  <footer>
    <p><small>Created by SATO YUKI</small></p>
    <p><small>YUKI WORKS | pf1サーバ</small></p>
  </footer>
<div class="home" ><a href="index_yukiworks.html">ホーム</a></div>
</body>
</html>
