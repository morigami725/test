<?php
use Knp\Snappy\Pdf;
require '../vendor/autoload.phpbbb';

		error_reporting(E_ALL);
		ini_set("display_errors", 1);

$url = "http://www.outward.jp" ;
$image_name = "outward.jpg" ;

exec('/usr/local/bin/wkhtmltopdf http://www.yahoo.co.jp/ test2.pdf');
exit;

$html = <<<EOF

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>ログインページ</title>
<meta name="description" content="">
<meta name="viewport" content="width=1020, user-scalable=yes">
</head>
<body>

<div class="red">
    <p>テスト</p>
    <p>テスト</p>
    <p>テスト</p>
    <p>テスト</p>
    <p class="opacity">テスト</p>
    <p>テスト</p>
    <p>テスト</p>
    <p>テスト</p>
    <p class="opacity">テスト</p>
    <p>テスト</p>
    <p>テスト</p>
</div>
</body>
</html>
EOF;

// echo 'req';
// echo realpath(dirname(__FILE__)."/..");
		error_reporting(E_ALL);
		ini_set("display_errors", 1);
require_once realpath(dirname(__FILE__)."/..").'/zf/library/Knp/Snappy/GeneratorInterface.php';
require_once realpath(dirname(__FILE__)."/..").'/zf/library/Knp/Snappy/AbstractGenerator.php';
require_once realpath(dirname(__FILE__)."/..").'/zf/library/Knp/Snappy/Pdf.php';
// echo 'req';

// wkhtmltopdfの位置をコンストラクタに渡す
$pdf = new Pdf('/usr/local/bin/wkhtmltopdf');
// encoding = utf-8をセット
$pdf->setOption('encoding', 'utf-8');

// PDFをブラウザに出力
header("Content-Type: application/pdf");
echo $pdf->getOutputFromHtml($html);
// echo $html;


?>
