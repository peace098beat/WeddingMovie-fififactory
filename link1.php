<!DOCTYPE html>
<html lang="ja">
	<?php require("head.php") ?>
<body>
	<div class="container">
		<?php require("header.php") ?>

		<!-- START main contents -->
		<h1>Sample Movie</h1>

		<h2>サンプル動画</h2>
			<img src="https://unsplash.it/540/360/?random">

		<h2>準備していただくもの</h2>

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
		<h2>ストーリー</h2>
		<div class="story">
				<ul class="media-list">
					<li class="media">
						<a class="media-left" href="#">
							<img src="https://unsplash.it/380/240/?random" alt="..."></a>
						<div class="media-body">
							<h4 class="media-heading">サブタイトル</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
						</div>
					</li>
				</ul>

				<ul class="media-list">
					<li class="media">
						<a class="media-left" href="#">
							<img src="https://unsplash.it/380/242/?random" alt="..."></a>
						<div class="media-body">
							<h4 class="media-heading">サブタイトル</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
							<div class="alert alert-dismissable alert-success">
								<button type="button" class="close" data-dismiss="alert">×</button>
								<strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
							</div>
						</div>
					</li>
				</ul>

				<ul class="media-list">
					<li class="media">
						<a class="media-left" href="#">
							<img src="https://unsplash.it/380/241/?random" alt="..."></a>
						<div class="media-body">
							<h4 class="media-heading">サブタイトル</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
							<div class="alert alert-dismissable alert-info">
							  <button type="button" class="close" data-dismiss="alert">×</button>
							  <strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important.
							</div>
						</div>
					</li>
				</ul>

		</div><!-- /story -->
		<!-- END main contents -->

		<?php require("footer.php") ?>
		</div>
	<?php require("bootstrap-plugins.php"); ?>
	</body>
</html>