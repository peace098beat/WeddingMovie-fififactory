<?php
$actor = array();
$actor[0][0] = "./img/actor-m1.jpg";
$actor[0][1] = "FiFi";
$actor[0][2] = "グラフィック担当";

$actor[1][0] = "./img/actor-m2.jpg";
$actor[1][1] = "YU";
$actor[1][2] = "問い合わせ担当";

$actor[2][0] = "./img/actor-m3.jpg";
$actor[2][1] = "TAKA";
$actor[2][2] = "企画担当";
?>

<style type="text/css">
/*.wm-footer{
	padding-top: 40px;
	padding-bottom: 40px;
	margin-top: 100px;
	color: #777;
	text-align: center;
	border-top: 1px solid #e5e5e5;
  background-color: #F2F1EF;
}*/
</style>

<hr style="border-top:1px solid #000; size:10" >
<hr>

<div class="wm-footer">
	<div class="container-fluid">
	<p>連絡先 mail@post.fififactory.com</p>
	<p>住所 神奈川県川崎市幸区小倉*-*-**</p>
	<p>facebook</p>

	<p>私達について</p>

	<h5>私達について</h5>
	<!-- <div class="col-md-6"> -->
		<div class="row">
			<?php for ($i=0; $i < 3; $i++) { 
				$template = '
				<div class="col-sm-4 col-md-4">
				<div class="thumbnail">
				<img src="%s" alt="...">
				<div class="caption">
				<h3>%s</h3>
				<p class="small">%s</p>
				<p>
				<a href="#" class="btn btn-primary" role="button">Button</a>
				</p>
				</div>
				</div>
				</div>';
				printf($template, $actor[$i][0], $actor[$i][1], $actor[$i][2]);
			}?>
		</div><!-- /row -->
	<!-- </div> -->
	<!-- col-md-6 -->
</div> <!-- container-fluid -->
</div> <!-- wm-footer -->


