<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>地域マスタ登録</title>
<link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <div class="regstContainer">
    <p>地域マスタ登録</p>
        <div class="regist_form">
            <form class="formSubmit" method="post" action="{{ url('/masters/confirm') }}">
                {{ csrf_field() }}
            <p>
            @if ($errors->has('prefecture_CD'))
            <span class="error">{{ $errors->first('prefecture_CD') }}</span>
            @endif
            </p>
            <p>
            @if ($errors->has('prefectureName'))
            <span class="error">{{ $errors->first('prefectureName') }}</span>
            @endif
            </p>
            <p>地域コード
            <input type="text" name="prefecture_CD" value="{{ old('prefecture_CD') }}">
            </p>
            
            <p>地域名
            <input type="text" name="prefectureName" value="{{ old('prefectureName') }}">
            </p>
            <div class="btnSubmit">
            <button type="submit" name="btnAction" value="regist">登録</button>
            </div>
            </form>
        </div>
    <button type="submit" name="btnBack" onclick="history.back()">戻る</button>

    
    </div>
</body>
</html>