<?php
$content_plan = "お手持ちの写真から制作致します。
完成したスライドショーはＤＶＤプレーヤーやパソコンで楽しむことが出来ます。
また、ＤＶＤは自動で再生されますので難しい操作は不要です。
披露宴の余興やお二人の生い立ちなどにスライドショーが大活躍!!
ほかにも、来客様の紹介、友達へのメッセージや感謝の言葉などにもご利用頂けます。
華やかなスライドショーで、素敵な披露宴にしてみませんか？
";
$content_10days = "先着10件のみ製作しております。私達は映像製作の傍ら、結婚式の幸せを少しもらって、
また本業でがんばる！！そのようなスタンスですので、あまり沢山の注文はお受けできないのが現状です。
そのため、毎月先着10件のみをお受けさせていただいております。そのぶん、格安で引き受けることができるのです。
(10件を超えた分は割高になってしまいます。毎月中旬は注文数が増えますので、お早めにご連絡いただけるとよいとおもいます)";
$content_simple = "シンプルなデザイン。私達のスライドショーは非常にシンプルなデザインとなっています。
世の中には奇抜な内容で、見る人を驚かせたり、他人と違った演出で楽しませてくれるようなスライドショーも沢山あります。
しかし、私達は、あくまでもお客さまの”思い出”が一番の最高コンテンツだと考えています。
そのため、動画はできるだけシンプルに、そして写真とメッセージに演出の色をできるだけ加えず、
お客様の思い出の呼吸を温度をそのままの形で伝えたいと思っています。
もしも「他人とは違った風にしたい..」とお考えのお客様に関しては、他社様のご検討をお願いしております。";


?>

<!DOCTYPE html>
<html lang="ja">
  <?php require("head.php") ?>
<body>
  <div class="container">
    <?php require("header.php") ?>
    <!-- START main contents -->

    <div class="jumbotron">
      <!-- <img src="http://placehold.it/350x150"> -->
      <p>
         <img src="./img/toppage-img.png">
      </p>
    </div>

    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="./img/icon-plan.png" alt="..." style="width:130px">
          <div class="caption">
            <h3>Plan</h3>
            <p><?php echo $content_plan ?></p>
            <p>
              <a href="#" class="btn btn-default" role="button">Button</a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="./img/icon-10day.png" alt="..." style="width:130px">
          <div class="caption">
            <h3>First 10</h3>
            <p><?php echo $content_10days ?></p>
            <p>
              <a href="#" class="btn btn-default" role="button">Button</a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="./img/icon-simple.png" alt="..." style="width:130px">
          <div class="caption">
            <h3>Simple</h3>
            <p><?php echo $content_simple ?></p>
            <p>
              <a href="#" class="btn btn-default" role="button">Button</a>
            </p>
          </div>
        </div>
      </div>
</div>
<!-- END main contents -->

<?php require("footer.php") ?></div>
<?php require("bootstrap-plugins.php"); ?></body>
</html>