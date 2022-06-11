<?php 
if(!isset($_POST['check'])){
  header('location: mail.php');
}
if($_POST['E-mail'] != $_POST['mail（入力確認）']){
  header('location: mail.php?message=メールアドレスが一致していません。');
}
if($_POST['会社名']=='' or $_POST['住所']=='' or $_POST['お名前（漢字）']=='' or $_POST['フリガナ']=='' or $_POST['E-mail']=='' or $_POST['mail（入力確認）']=='' or $_POST['お問い合わせ内容']==''){
  header('location: mail.php?message=必須項目を入力してください。');
}
?>
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
                    <h1 class="section-title">Mail Form<span>メールフォーム（確認）</span></h1>
                    <p class="note" style="color:blue;font-weight:bold;">以下の内容で送信してもよろしいですか？</p>
                </div>
                
                <link rel="stylesheet" href="css/lightbox.css">
                <script src="js/lightbox.js"></script>
                
                <div id="formWrap">
	  <form action="./mailform/send.cgi" method="post" name="mailform" id="mailform" onsubmit="return sendmail(this);">
                    <table class="formTable">
                      <tr>
                        <th>会社名 <img src="images/form_1.gif" class="hissu" /></th>
                        <td><input size="" type="text" name="会社名" value="<?php echo($_POST['会社名']); ?>" readonly/></td>
                      </tr>
                      <tr>
                        <th>事業所・<br class="visible_940">部署名</th>
                        <td><input size="" type="text" name="事業所・部署名" value="<?php echo($_POST['事業所・部署名']); ?>" readonly/> </td>
                      </tr>
                      <tr>
                        <th>役職名</th>
                        <td><input size="" type="text" name="役職名" value="<?php echo($_POST['役職名']); ?>" readonly/> </td>
                      </tr>
                      <tr>
                        <th>住所 <img src="images/form_1.gif" class="hissu" /></th>
                        <td><input size="" type="text" name="住所" value="<?php echo($_POST['住所']); ?>" readonly/></td>
                      </tr>
                      <tr>
                        <th>お名前<br class="visible_940">(漢字)<img src="images/form_1.gif" class="hissu" /></th>
                        <td><input size="" type="text" name="お名前（漢字）" value="<?php echo($_POST['お名前（漢字）']); ?>" readonly/></td>
                      </tr>
                      <tr>
                        <th>フリガナ <img src="images/form_1.gif" class="hissu" /></th>
                        <td><input size="" type="text" name="フリガナ" value="<?php echo($_POST['フリガナ']); ?>" readonly/></td>
                      </tr>
                      <tr>
                        <th>電話番号</th>
                        <td><input size="" type="text" name="電話番号" value="<?php echo($_POST['電話番号']); ?>" readonly/></td>
                      </tr>
                      <tr>
                        <th>お問い合わせ内容<br class="visible_940">（項目）</th>
                        <td><input size="" type="text" name="お問い合わせ内容（項目）" value="<?php $koumoku=''; if(isset($_POST['お問い合わせ内容（項目）'])){$koumoku.=$_POST['お問い合わせ内容（項目）'];} if(isset($_POST['お問い合わせ内容（項目）2'])){if($koumoku!=''){$koumoku.='、';} $koumoku.=$_POST['お問い合わせ内容（項目）2'];} if(isset($_POST['お問い合わせ内容（項目）3'])){if($koumoku!=''){$koumoku.='、';} $koumoku.=$_POST['お問い合わせ内容（項目）3'];} if(isset($_POST['お問い合わせ内容（項目）4'])){if($koumoku!=''){$koumoku.='、';} $koumoku.=$_POST['お問い合わせ内容（項目）4'];}  echo($koumoku); ?>" readonly/></td>
                      </tr>
                      <tr>
                        <th>E-mail <img src="images/form_1.gif" class="hissu" /></th>
                        <td><input size="" type="email" name="E-mail" value="<?php echo($_POST['E-mail']); ?>" readonly/></td>
                      </tr>
                      <tr>
                        <th>mail<br class="visible_940">(入力確認)<img src="images/form_1.gif" class="hissu" /></th>
                        <td><input size="" type="email" name="mail（入力確認）" value="<?php echo($_POST['mail（入力確認）']); ?>" readonly/></td>
                      </tr>
                      <tr>
                        <th>弊社を知ったきっかけ</th>
                        <td><input size="" type="text" name="弊社を知ったきっかけ" value="<?php if(isset($_POST['弊社を知ったきっかけ'])){echo($_POST['弊社を知ったきっかけ']);} ?>" readonly/></td>
                      </tr>
                      <tr>
                        <th colspan="2">お問い合わせ内容 <img src="images/form_1.gif" class="hissu_" /><br />
						<br />
                        <textarea name="お問い合わせ内容" cols="" rows="20"><?php echo($_POST['お問い合わせ内容']); ?></textarea><br />
						<br />
                        <p align="center">
                      <input type="image" src="images/form_2.gif" alt="送信" />
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