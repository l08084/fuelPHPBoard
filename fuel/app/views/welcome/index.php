<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>FuelPHP Bultin Board</title>
    <?php echo Asset::css('bootstrap.css'); ?>
</head>
<body>
    <header>
        <div class="container">
            <div id="logo"></div>
        </div>
    </header>
    <div class="container">
       <!-- <div class="jumbotron">
            <h1>Welcome!</h1>
            <p>You have successfully installed the FuelPHP Framework.</p>
        </div>
        -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">投稿</h3>
            </div>
            <div class="panel-body">
                <!-- Name input-->
                <div class="form-group">
                    <label class="col-md-3 control-label" for="name">ユーザ名</label>
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
    </div>
</body>
</html>
