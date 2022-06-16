<?php include 'component/header.php';?>

<?php include 'component/g-nav.php';?>

<article>
    <div id="news">
        <div id="news-inner">
            <h2>最新情報</h2>
            <p>2022.06.12 ホームページリニューアルしました。</p>
        </div>
    </div>
    
    <section id="contents">
        <div class="wrapper">
            <h1 class="section-title">CONTENTS <span>メインメニュー</span></h1>
            <div id="contents-inner" class="clear">
                <dl>
                    <dt>会社概要</dt>
                    <dd><img src="images/topmenu_4.jpg" alt=""></dd>
                    <dd>
                        <p>- より良い製品作りの担い手 -</p>
                        <p>十条ステンは板金加工のスペシャリストとして常にお客様の要望にお応えする製品づくりを心掛けています。</p>
                        <a href="company.php"><span class="readmore">MORE</span></a>
                    </dd>
                </dl>
                
                <dl>
                    <dt>製造工程</dt>
                    <dd><img src="images/topmenu_5.jpg" alt=""></dd>
                    <dd>
                        <p>- 高精度・高品質・高精密 -</p>
                        <p>弊社屈指の主要設備のご紹介。クオリティ重視・短納期を追求し続け、お客様のニーズに必ずお応えします。</p>
                        <a href="work.php"><span class="readmore">MORE</span></a>
                    </dd>
                </dl>
                
                <dl class="lastchild">
                    <dt>主要設備</dt>
                    <dd><img src="images/topmenu_3.jpg" alt=""></dd>
                    <dd>
                        <p>- オリジナル製品開発大歓迎 -</p>
                        <p>公共空間、専門空間など生活をとりまくさまざまな環境づくりをサポートいたします。<br /><br /></p>
                        <a href="facility.php"><span class="readmore">MORE</span></a>
                    </dd>
                </dl>
            </div>
        </div>
    </section>
    
    <section id="lead">
        <div class="wrapper">
            <h1>地道で細かい作業。<br class="visible_940">それでも地域の力になれる。<br class="visible_940">それが十条ステン工業株式会社の仕事です。</h1>
        </div>
        
        <!-- load carousel -->
        <link rel="stylesheet" type="text/css" href="css/slick.css"/>
        <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
        <script src="js/slick.min.js"></script>
        
        <script>
        $(function(){
            $("#carousel-inner").slick({
                lazyLoad: 'ondemand',
                slidesToShow: 9,
                autoplay: true,
                slidesToScroll: 1
            });
        });
        </script>
        
        <div id="carousel" class="">
            <ul id="carousel-inner">
                <li><img src="images/j01.png" width="245" alt=""></li>
                <li><img src="images/j03.png" width="245" alt=""></li>
                <li><img src="images/j04.png" width="245" alt=""></li>
                <li><img src="images/j05.png" width="245" alt=""></li>
                <li><img src="images/j06.png" width="245" alt=""></li>
                <li><img src="images/j07.png" width="245" alt=""></li>
                <li><img src="images/j08.png" width="245" alt=""></li>
                <li><img src="images/j09.png" width="245" alt=""></li>
                <li><img src="images/j10.png" width="245" alt=""></li>
                <li><img src="images/j11.png" width="245" alt=""></li>
                <li><img src="images/j12.png" width="245" alt=""></li>
                <li><img src="images/j13.png" width="245" alt=""></li>
                <li><img src="images/j26.png" width="245" alt=""></li>
                <li><img src="images/j27.png" width="245" alt=""></li>
                <li><img src="images/j28.png" width="245" alt=""></li>
                <li><img src="images/j29.png" width="245" alt=""></li>
            </ul>
        </div>
    </section>
    
    <section id="recent" class="clear">
        <div class="recentL">
            <div id="recent1" class="clear">
                <h1 class="section-title">PRODUCTS＆INSTALLATION　WORK <span>製品・据付</span></h1>
                <dl>
                    <dt><img src="images/item4.jpg" alt=""></dt>
                    <dd class="recent-title"><a href="product.php">【各種BOX】</a></dd>
                    <dd class="recent-text">埋込式、露出式、
開閉式、防雨型、
アクリルカバー組込型、寒冷地
仕様、生体認証組込など、設置環境・条件により、各種ご用意できます。
<span class="readmore"><a href="product.php">MORE</a></span></dd>
                </dl>

                <dl>
                    <dt><img src="images/item5.jpg" alt=""></dt>
                    <dd class="recent-title"><a href="product.php">【各種スタンド】</a></dd>
                    <dd class="recent-text">埋込式、露出式、
可搬式、エアコン内蔵型、屋外型、塩害対策仕様、ゲート搭載型、生体認証対応型など、また付帯構造も含め各種ご用意できます。
<span class="readmore"><a href="product.php">MORE</a></span></dd>
                </dl>

                <dl>
                    <dt><img src="images/item6.jpg" alt=""></dt>
                    <dd class="recent-title"><a href="product.php">【パーテーション】</a></dd>
                    <dd class="recent-text">埋込式、置敷式、
ガラス・アクリル嵌め込み型・ﾎﾟｲﾝﾄﾌｨｯｸｽ型、格子型など、意匠性を考慮して各種ご用意できます。
<span class="readmore"><a href="product.php">MORE</a></span></dd>
                </dl> 

                <dl>
                    <dt><img src="images/item3.jpg" alt=""></dt>
                    <dd class="recent-title"><a href="product.php">【その他製品】</a></dd>
                    <dd class="recent-text">ステンレス・スチール・アルミなど各種材料で、気密性、調湿性空間、セキュリテイ機能、意匠性などを考慮した構造をご用意できます。
<span class="readmore"><a href="product.php">MORE</a></span></dd>
                </dl> 

                <dl class="lastchild">
                    <dt><img src="images/item7.jpg" alt=""></dt>
                    <dd class="recent-title"><a href="product.php">【据付作業】</a></dd>
                    <dd class="recent-text">新築、既存施設、アクセスフロアの撤去、架台設置、床張り替え、床斫りなど、現地の諸条件に対応した設置工事も行っております。
<span class="readmore"><a href="product.php">MORE</a></span></dd>
                </dl> 
            </div>

            <div id="recent2" class="clear">
                <h2 class="section-title">What's New <span>最新情報</span></h2>

                <!--
                お知らせは class="news"　更新はclass="info"にしてください。
                アイコンは<i></i>で囲んでください
                -->
                <dl class="clear">
                    <dt class="date">2022.06.12</dt>
                    <dd class="kind info">お知らせ</dd>
                    <dd class="txt">ホームページリニューアルしました。</dd>
                </dl>

                <dl class="clear">
                    <dt class="date">2018.05.01</dt>
                    <dd class="kind info">お知らせ</dd>
                    <dd class="txt">第二工場を移転・稼働致しました。業務統合により、第三工場を閉鎖しました。<i></dd>
                </dl>

                <dl class="clear">
                    <dt class="date">2016.12.25</dt>
                    <dd class="kind info">お知らせ</dd>
                    <dd class="txt">ホームページリニューアルしました。</dd>
                </dl>


                
                <!-- ニュースここまで -->
                
                <!-- get acrobat -->
                <div id="getAcrobat" class="clear">
                    <div class="banner">
                        <a href="https://get.adobe.com/jp/reader/"><img src="images/Get_Adobe_Acrobat_Reader_DC_web_button_158x39.fw.png" alt="Get Acrobat"></a>
                    </div>
                    <p>PDFファイルをご閲覧いただくには、アドビリーダーが必要です。<br>アイコンをクリックすると、アドビ社より無料でダウンロードすることができます。</p>
                </div>
            </div>    
        </div>
        
        
        <!-- <div id="recent3" class="recentR">
            <h2 class="section-title">Calendar <span>営業日</span></h2>
            <div class="calendar">
                calendar 1
                <iframe src="https://calendar.google.com/calendar/embed?src=jyujyou.stain%40gmail.com&ctz=Asia/Tokyo" style="border: 0" width="220" height="600" frameborder="0" scrolling="no"></iframe>
            </div>
            
            <div class="calendar">
                calendar 2
            </div>
        </div>   -->
    </section>
</article>

<?php include 'component/footer.php';?>