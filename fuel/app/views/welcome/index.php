<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>FuelPHP Bultin Board</title>
    <?php echo Asset::css('bootstrap.css'); ?>
</head>
<body>
    <div class="container">
        <table class="table table-hover">
            <thead>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">投稿</h3>
                    </div>
                    <div class="panel-body">
                        <!-- Name input-->
                        <div class="form-group">
                            <label>ユーザ名</label>
                            <div>
                                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>メッセージ</label>
                            <div>
                                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary btn-lg">送信</button>
                            </div>
                        </div>
                    </div>
                </div>
            </thead>
            <tbody>
                <tr style="height:80">
                    <td>
                        <div>
                            <p class="text-left">
                                ユーザ1
                            </p>
                            <p class="text-left">
                            テストテストテストテストテストテストテスト
                            </p>
                        </div>
                    </td>
                </tr>
                <tr style="height:80">
                    <td>
                        <div>
                            <p class="text-left">
                                ユーザ2
                            </p>
                            <p class="test-left">
                            テストテストテスト22222222
                            </p>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
