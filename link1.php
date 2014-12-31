<!DOCTYPE html>
<html lang="ja">
	<?php require("head.php") ?>
<body>
	<div class="container">
		<?php require("header.php") ?>
	</div>
	<div class="container">

		<!-- START main contents -->
		<h2>Sample Movie</h2>

			<!-- <img src="https://unsplash.it/540/360/?random"> -->

			<!-- <iframe width="480px" height="320px" src="//www.youtube.com/embed/8yHuFfcvg-c" frameborder="0" allowfullscreen></iframe> -->
			<iframe width="560" height="315" src="//www.youtube.com/embed/8yHuFfcvg-c?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
			<!-- /youtubeリンク-->

		<h3>準備していただくもの</h3>

		<div class="row">
			<div class="col-sm-6 col-md-3">
				<ul class="media-list">
					<li class="media">
						<a class="media-left" href="#">
							<img src="https://unsplash.it/100/100/?random" alt="..."></a>
						<div class="media-body">
							<h4 class="media-heading">時間</h4>
							<p>5分</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="col-sm-6 col-md-3">
				<ul class="media-list">
					<li class="media">
						<a class="media-left" href="#">
							<img src="https://unsplash.it/100/101/?random" alt="..."></a>
						<div class="media-body">
							<h4 class="media-heading">写真枚数</h4>
							<p>40枚</p>
							<p>※１枚につき+100円で追加できます。</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="col-sm-6 col-md-3">
				<ul class="media-list">
					<li class="media">
						<a class="media-left" href="#">
							<img src="https://unsplash.it/100/102/?random" alt="..."></a>
						<div class="media-body">
							<h4 class="media-heading">コメント</h4>
							<p>30文字</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="col-sm-6 col-md-3">
				<ul class="media-list">
					<li class="media">
						<a class="media-left" href="#">
							<img src="https://unsplash.it/100/103/?random" alt="..."></a>
						<div class="media-body">
							<h4 class="media-heading">BGM</h4>
							<p>1曲</p>
						</div>
					</li>
				</ul>
			</div>
		</div>

		<!-- <h3>ストーリー</h3> -->
		<!-- <img src="./img/sample_friend_b_1.png" max-width="80%"> -->

		<h3>ストーリー</h3>

		<div id="story">
			<?php 
				$elem = array();
				$elem[0][0] = "./img/sample-story1.jpg";
				$elem[0][1] = "Opening";
				$elem[0][2] = "(5秒) 「Happy Wedding」と落ち着きのあるアニメーションで始まります";

				$elem[1][0] = "./img/sample-story2.jpg";
				$elem[1][1] = "Title Call";
				$elem[1][2] = "(5秒) 結婚式の日付や、お名前を入れることができます";

				$elem[2][0] = "./img/sample-story3.jpg";
				$elem[2][1] = "Photo Slide Show";
				$elem[2][2] = "(3~5分) コメントをつけることができます。※コメントは30文字まで";


				$elem[3][0] = "./img/sample-story4.jpg";
				$elem[3][1] = "";
				$elem[3][2] = "";

				$elem[4][0] = "./img/sample-story6.jpg";
				$elem[4][1] = "Last Message";
				$elem[4][2] = "「○○結婚おめでとう♥︎」のようなメッセージをいれることができます";				

				for ($i=0; $i < 5; $i++) { 
					$template = '
					<ul class="media-list">
						<li class="media">
							<a class="media-left" href="#">
								<img src="%s" alt="...">
							</a>
							<div class="media-body">
								<h4 class="media-heading">%s</h4>
								<p>%s</p>
							</div>
						</li>
					</ul>';
					// printf($template, "./img/sample-story1.jpg", "bbb", "ccc");
					printf($template, $elem[$i][0], $elem[$i][1], $elem[$i][2]);
				}
			?>
		</div><!-- /story -->
		<!-- END main contents -->

	</div>
	<div class="container">
		<?php require("footer.php") ?>
	</div>
	<?php require("bootstrap-plugins.php"); ?>
	</body>
</html>