<!doctype html>
<html lang="ja">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
</head>
 
<body>
    <!-- モーダルを開くボタン・リンク -->
    <div class="container">
        <div class="row my-3">
            <h1>モーダルを開く</h1>
        </div>
        <div class="row mb-5">
            <div class="col-2">
                <!-- ボタンクリック時にモーダルウィンドウを開く -->
                <button type="button" class="btn btn-primary mb-12" data-toggle="modal" data-backdrop="true" data-target="#testModal">ボタンで開く</button>
            </div>
            <div class="col-2">
                <!-- リンククリック時にモーダルウィンドウを開く -->
                <a class="btn btn-primary" data-toggle="modal" data-backdrop="false" data-target="#testModal">リンクボタンで開く</a>
            </div>
        </div>
    </div>
 
    <!-- ボタン・リンククリック後に表示される画面の内容 -->
    <!-- 「testModal」というid名のモーダルウィンドウを表示する -->
    <div class="modal fade" id="testModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- 「modal-header」で画面名やタイトルを書くヘッダー部分 -->
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">削除確認画面</h4><button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                </div>

                <!-- 「modal-body」で詳細な内容を書くボディ部分 -->
                <div class="modal-body">
                    <label>データを削除しますか？</label>
                </div>

                <form class="px-4 py-3">
                    <div class="form-group">
                        <label for="exampleFormEmail1">Eメールアドレス</label>
                        <input type="email" class="form-control" id="exampleFormEmail" placeholder="email@example.com" data-focus="true">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormPassword">パスワード</label>
                        <input type="password" class="form-control" id="exampleFormPassword" placeholder="パスワード">
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        記憶する
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">サインイン</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                </form>

                <input type="date" id="date" name="今日の日付" value="" />
                <input type="time" id="time" name="予定の時刻" value="" />

                <!-- 「modal-footer」でボタンなど置くフッター部分 -->
                <div class="modal-footer">
                <form>
                    <div class="form-group">
                        <label>氏名：</label>
                        <input type="text" class="form-control">
                    </div>
                    <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
                    <button type="button" class="btn btn-danger">削除</button>
                </div>
            </div>
        </div>
    </div>
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
 
</html>
