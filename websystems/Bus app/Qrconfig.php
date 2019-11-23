<!Doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="qr.css" />
    <script src="qr.js"></script>
    <script src="https://dmla.github.io/jsqrcode/src/qr_packed.js"></script>
</head>
<body>
<form action="saveqr.php" method="POST">
<input name="code" type=text size=16 placeholder="Code" class=qrcode-text readonly >
<label class=qrcode-text-btn><input type=file accept="image/*" capture=environment onchange="openQRCamera(this);" tabindex=-1></label> 
</div>
<div class="row" align="center">
				<div class="col-lg-12">
					<p> <div class="">
            <div class="controls">
                <button id="save" STYLE="font-size: 14px;  min-width: 140px; text-align: center; padding: 15px 10px; position: relative; color: #fff; border: none;background-color: #000;margin-right: 15px;z-index: 1;" >Save</button>
                
				</div>
</form>
</body>
</html>