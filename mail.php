<?php include 'component/header.php';?>

        <div class="section-title-area">
            <div class="wrapper">
                <h2>お問い合わせ・ご相談</h2>
                <p>ステンレス製品の板金やオリジナル製品などのご相談もお気軽にお問合せください</p>    
            </div>
        </div>

        <?php include 'component/g-nav.php';?>

        <article>
            <section id="equip">
                <div class="wrapper">
                    <h1 class="section-title">Mail Form<span>メールフォーム</span></h1>
                    <p class="note">以下よりお気軽にお問い合わせください。弊社担当者より折り返しご連絡をさせていただきます。<br>尚、このぺージにてご入力いただきましたお客様の個人情報につきましては、お客様からのお問合せにお応えするためにのみ利用させていただき、その目的以外には利用いたしません。<br>※下記フォームより問い合わせても返信がない場合は、<a href="">こちら</a>をクリック。</p>
                </div>
                
                <link rel="stylesheet" href="css/lightbox.css">
                <script src="js/lightbox.js"></script>
                
                <div id="formWrap">
	  <form action="./mailform/send.cgi" method="post" name="mailform" id="mailform" onsubmit="return sendmail(this);">
                    <table class="formTable">
                      <tr>
                        <th>会社名 <img src="images/form_1.gif" class="hissu" /></th>
                        <td><input size="40" type="text" name="会社名" /></td>
                      </tr>
                      <tr>
                        <th>事業所・部署名</th>
                        <td><input size="40" type="text" name="事業所・部署名" /> </td>
                      </tr>
                      <tr>
                        <th>役職名</th>
                        <td><input size="40" type="text" name="役職名" /> </td>
                      </tr>
                      <tr>
                        <th>住所 <img src="images/form_1.gif" class="hissu" /></th>
                        <td><input size="40" type="text" name="住所" /></td>
                      </tr>
                      <tr>
                        <th>お名前（漢字） <img src="images/form_1.gif" class="hissu" /></th>
                        <td><input size="40" type="text" name="お名前（漢字）" /></td>
                      </tr>
                      <tr>
                        <th>フリガナ <img src="images/form_1.gif" class="hissu" /></th>
                        <td><input size="40" type="text" name="フリガナ" /></td>
                      </tr>
                      <tr>
                        <th>電話番号</th>
                        <td><input size="40" type="text" name="電話番号" /></td>
                      </tr>
                      <tr>
                        <th>お問い合わせ内容（項目）</th>
                        <td><input size="40" type="text" name="お問い合わせ内容（項目）" /></td>
                      </tr>
                      <tr>
                        <th>E-mail <img src="images/form_1.gif" class="hissu" /></th>
                        <td><input size="40" type="email" name="E-mail" /></td>
                      </tr>
                      <tr>
                        <th>mail（入力確認） <img src="images/form_1.gif" class="hissu" /></th>
                        <td><input size="40" type="email" name="mail（入力確認）" /></td>
                      </tr>
                      <tr>
                        <th>弊社を知ったきっかけ</th>
                        <td><input size="40" type="text" name="弊社を知ったきっかけ" /></td>
                      </tr>
                      <tr>
                        <th colspan="2">お問い合わせ内容 <img src="images/form_1.gif" class="hissu_" /><br />
						<br />
                        <textarea name="お問い合わせ内容" cols="90" rows="20"></textarea><br />
						<br />
                        <p align="center">
                      <input type="image" src="images/form_2.gif" alt="送信" />
					  　<input type="reset" value="リセット" />
                    </p></th>
                      </tr>
                    </table>
                  </form>
			<script type="text/javascript" src="./mailform/mailform.js" charset="utf-8"></script>
			<script type="text/javascript" src="./mailform/check.cgi" charset="utf-8"></script>
                </div>
            </section>

            <?php include 'component/sub-nav.php';?>

        </article>

<?php include 'component/footer.php';?>