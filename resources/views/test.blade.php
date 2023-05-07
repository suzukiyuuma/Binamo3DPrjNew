<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Example</title>
<link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body style="background-color:#262626;">

    <div id="app">
        <div id="nav">
          <!-- <router-link to="/BaseTextBox">ベーステキストボックス</router-link>
          <router-link to="/BaseLabel">ベースラベル</router-link>
          <router-link to="/BaseButton">ベースボタン</router-link>
          <router-link to="/BaseTextLabel">ベースラベルテキスト</router-link> -->
          <router-link to="/Login">ログイン</router-link>
        </div>
        <router-view/>
        </div>
    </div>

<script src="{{ mix('js/app.js') }}"></script> 
</body>
</html>