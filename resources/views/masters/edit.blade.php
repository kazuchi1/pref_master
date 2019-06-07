<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>地域マスタ登録</title>
<link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <div class="container">
    <p>地域マスタ登録</p>
    <section>
        <form method="post" action="{{ url('/masters/confirm') }}">
            {{ csrf_field() }}
        <p>地域コード
        <input type="text" name="prefecture_CD" value="{{ old('prefecture_CD') }}">
        </p>
        <p>
        @if ($errors->has('prefecture_CD'))
        <span class="error">{{ $errors->first('prefecture_CD') }}</span>
        @endif
        </p>
        <p>地域名
        <input type="text" name="prefectureName" value="{{ old('prefectureName') }}">
        </p>
        <p>
        @if ($errors->has('prefectureName'))
        <span class="error">{{ $errors->first('prefectureName') }}</span>
        @endif
        </p>
        <button type="submit" name="btnAction" value="regist">登録</button>
        <button type="submit" name="btnBack" onclick="history.back()">戻る</button>
        </form>
    </section>
    </div>
</body>
</html>