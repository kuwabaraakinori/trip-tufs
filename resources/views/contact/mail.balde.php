<!DOCTYPE html>
<html lang="ja">
    <P>お問い合わせがありました。確認してください</P>
    <br>
    
    <p>お名前</p><br>
    {{ $data['to_name'] }}
    
    <p>メールアドレス</p><br>
    {{ $data['to'] }}<br>
    <br>
    <p>お問い合わせ内容</p><br>
    <?php echo nl2br(htmlspecialchars($data['content'])); ?><br>
    <br>
    <p>終わり。確認お願いします。</p>
</html>
