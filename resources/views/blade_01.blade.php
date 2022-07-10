<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>blade_traning</title>
</head>
<body>
    <h1>Laravel_blade_traning_変数呼び出し</h1>
    
    <!-- 変数の内容を呼び出せる -->
    <h2>これは「{{ $name }}」です。</h2>

    <!-- 関数の結果も呼び出せる -->
    <h2>これは「{{ time() }}」です。</h2>
    
    <!-- Carbonphpで日付・時刻を扱うためのライブラリ -->
    <h2>これは「{{ \Carbon\Carbon::now() }}」です。</h2>


</body>
</html>