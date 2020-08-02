<!DOCTYPE html>
<html lang="ja">
     <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="main">
                <div class="title"><h2>お問い合わせがありました。至急確認してください。</h2></div>
                <h3>・お名前</h3><br>
                <h4>{{ $name }}</h4><br>
                <h3>・メールアドレス</h3>
                <h4>{{ $from_email }}</h4><br>
                <h3>・内容</h3>
                <h4>{{ $content }}</h4><br>
            </div>
        </div>
    </body>
</html>
