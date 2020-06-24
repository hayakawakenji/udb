<!DOCTYPE html>
<html>
<head>
<title>ユーザー登録画面123</title>
</head>
<body>
<p>ユーザー登録フォーム456</p>
<form method="POST" action="prev.php">
<p>■氏名</p>
<div>
    <p>姓:<input type="text" name="f_name"></p>
    <p>名:<input type="text" name="u_name"></p>
    <p>姓(カナ):<input type="text" name="f_kana"></p>
    <p>名(カナ):<input type="text" name="u_kana"></p>
</div>
-------------------------------------------------------------------------
<div>
<p>■基本情報12</p>
    <p>アカウント:<input type="text" name="account"></p>
    <p>パスワード:<input type="text" name="t_pass"></p>
    <p>パスワード(確認用):<input type="text" name="d_pass"></p>
-------------------------------------------------------------------------
<p>■基本情報2</p>
    <p>社員番号:<input type="text" name="e_num"></p>
    <p>所属:<select name="belongs">
      <option value="" selectd>選択してください</option>
      <option value="24h">24H</option>
      <option value="commerce">コマース運用</option>
      <option value="game">ゲーム</option>
      <option value="24h">管理部</option>
        </select>
    </p>
    <p>メールアドレス(クレオ):<input type="text" name="cr_mail"></p>
    <p>メールアドレス(ココト):<input type="text" name="co_mail"></p>
    <p>入社年度:<input type="text" name="j_year"></p>
    <p>性別:<input type="text" name="sex"></p>
    <p>生年月日:<input type="text" name="birth"></p>
</div>

-------------------------------------------------------------------------
<p>■自宅情報 ※緊急時のみ使用します</p>
<div>
    <p>郵便番号:<input type="text" name="p_code"></p>
    <p>都道府県:<input type="text" name="pref1"></p>
    <p>市町村名:<input type="text" name="pref2"></p>
    <p>番地以降:<input type="text" name="pref3"></p>
</div>
<input type="submit" value="登録">
</form>


</body>
</html>
