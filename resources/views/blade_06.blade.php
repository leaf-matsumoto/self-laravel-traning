<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>blade_traning</title>
</head>
<body>
    <h1>Laravel_blade_traning_サブビューの読み込み</h1>

    @include('include')

    @include('include_02', ['test' => 'テスト'])

    @includeIf('include_00', ['test' => 'テスト'])

</body>
</html>