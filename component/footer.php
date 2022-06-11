<footer>
    <div class="wrapper clear">
        <div id="eco-action21" class="cleaer">
            <div id="eco-logo">
                <a href="//www.ea21.jp/"><img src="images/TOP_64.jpg" alt="ECO ACTION"></a>
            </div>
            <div id="eco-detail">
                <p>十条ステン工業株式会社は地球環境の保全が事業活動の重要事項と認識し、製品及びサービスにおいて環境に与える影響を継続的に改善し、地域及び地球環境の保全活動に全従業員が積極的に貢献してゆきます。</p>
                <hr>
                <h3>エコアクション21</h3>
                <p>認証・登録番号 0006601</p>
                <p>認証・登録日 2011年2月9日</p>
            </div>
        </div>
        
        <div id="adrs">
            <dl class="clear">
                <dt>【本社工場】</dt>
                <dd class="add">
                    <address>
                        <p>〒332-0003 埼玉県川口市東領家5-7-19</p>
                        <p>TEL 048-222-5733 / FAX048-222-5732</p>
                    </address>
               
                <span class="map">
                    <a href="">MAP</a>
                </span>
                </dd>
            </dl>
            
            <dl class="clear">
                <dt>【第二工場】</dt>
                <dd class="add">
                    <address>
                        <p>〒332-0003 埼玉県川口市東領家5-22-13</p>
                        <p>TEL 048-223-7679 / FAX 048-223-7492</p>
                    </address>

                <span class="map">
                    <a href="https://goo.gl/maps/XjgU2pTrnK32">MAP</a>
                </span>
                </dd>
            </dl>
            
            
        </div>   
    </div>
    <div id="footer-2nd">
        <div class="wrapper">
            <h3>サービスラインナップ</h3>
        </div>
        <div id="footer-inner">
            <div class="wrapper">
                <ul class="clear">
                    <li><a href="http://www.j-s-k.jp/product.php">電動式シャッター用スイッチボックス</a></li>
                    <li><a href="http://www.j-s-k.jp/product.php">各種ボックス（ID認証・生体認証各種端末、インターホン、<br>カメラ等組込用）</a></li>
                    <li><a href="http://www.j-s-k.jp/product.php">各種スタンド（自立、ゲート搭載、キャビネット搭載）</a></li>
                    <li><a href="http://www.j-s-k.jp/product.php">各種架台（ゲート、パーテーション、BDS、壁面収納家具、<br>金庫）</a></li>
                    <li><a href="http://www.j-s-k.jp/product.php">家具（スライドレール付き引出、鍵保管庫収納・積載用、<br>ＰＣ収納用、鍵保管用、美術工芸品用）</a></li>
                    <li><a href="http://www.j-s-k.jp/product.php">各種筐体（医療用、電子機器用）</a></li>
                    <li><a href="http://www.j-s-k.jp/product.php">各種パネル（各種BOX塞ぎ用、機器撤去後塞ぎ用、機器接続用、<br>巾木等内装用、アクリル・木加工・印刷等）</a></li>
                    <li><a href="http://www.j-s-k.jp/product.php">建築金物（格子、サッシュ枠、フロント、グレーチング等）</a></li>
                    <li><a href="http://www.j-s-k.jp/product.php">鋼構造物取付作業（上記製品の運搬、搬入、取付、仕上げ工事）</a></li>
                </ul>    
            </div>
        </div>
    </div>
    <div id="footer-last">
        <div class="wrapper">
            <h3>地道・細かい…。<br class="visible_940">それでも地域の力になる仕事。<br class="visible_940">それが十条ステン株式会社の仕事です。</h3>
            <nav id="foot-nav">
                <ul>
                    <li><a href="policy.php">理念</a></li>
                    <li><a href="company.php">会社概要</a></li>
                    <li><a href="product.php">制作実績</a></li>
                    <li><a href="interview01.php">メンバー</a></li>
                    <li><a href="work.php">製造工程</a></li>
                    <li><a href="facility.php">主要設備</a></li>
                    <li><a href="office.php">社内活動</a></li>
                    <?php
                    if($_SERVER['REQUEST_URI'] == '/jujosten_last/facility.php'){
                        echo('<li class="lastchild"><a href="office.php">環境保護方針</a></li>');
                    }
                    ?>

                </ul>
            </nav>
            <p id="copyright">Copyright &copy; 十条ステン工業株式会社 All Rights Reserved.</p>
        </div>
    </div>
</footer>  
</body>
</html>

<script>
    $(".openbtn1").click(function () {//ボタンがクリックされたら
    $(this).toggleClass('active');//ボタン自身に activeクラスを付与し
        $("#g-nav").toggleClass('panelactive');//ナビゲーションにpanelactiveクラスを付与
    });

    $("#g-nav a").click(function () {//ナビゲーションのリンクがクリックされたら
        $(".openbtn1").removeClass('active');//ボタンの activeクラスを除去し
        $("#g-nav").removeClass('panelactive');//ナビゲーションのpanelactiveクラスも除去
    });
</script>