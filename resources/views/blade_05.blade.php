<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>blade_traning</title>
</head>
<body>
    <h1>Laravel_blade_traning_Bladeディレクティブ</h1>


    <!-- 認証済み -->
    @auth
        <!-- if -->
        @if(isset($array))
            <!-- foreach -->
            @foreach($array as $value)
                <h2>{{$value}}</h2>
            @endforeach
        @else
            <h2>認証されたデータです</h2>
        @endif
    @endauth

    <!-- 非認証 -->
    @guest
        <!-- if -->
        @if(!isset($array))
            <!-- foreach -->
            @foreach($array as $value)
                <h2>{{$value}}</h2>
            @endforeach
        @else
            <h2>認証されていないデータです</h2>
        @endif
    @endguest


</body>
</html>