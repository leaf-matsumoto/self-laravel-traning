<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>blade_traning</title>
</head>
<body>
    <h1>Laravel_blade_traning_エスケープ処理</h1>

    <!-- @をつけるとJsが実行される -->
    {{-- Bladeテンプレート --}}
    <h2>@{{ <script>alert("エスケープ処理がされていません。");</script> }}</h2>

    <!-- @がないととエラーになる -->

</body>
</html>