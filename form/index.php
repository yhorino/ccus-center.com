<?php
 include $_SERVER['DOCUMENT_ROOT'] .'/maintenance_check.php';
?>

<!doctype html>
<html>
<head>
<?php include  $_SERVER['DOCUMENT_ROOT'].'/gtag_head.php'; ?>
<?php $title = "CCUS申込フォーム"; ?>
<?php $description = "CCUS申込フォーム"; ?>
<?php $keyword = "CCUS,ccus"; ?>
<?php $url = "https://www.ccus-center.com/form/"; ?>
 
<?php include  $_SERVER['DOCUMENT_ROOT'].'/head_settings.php'; ?>
<link rel="stylesheet" href="/form/style_form.css" type="text/css">
 
</head>

<body>
 <?php include  $_SERVER['DOCUMENT_ROOT'].'/gtag_body.php'; ?>

 <?php 
 $option_class = 'no_menu';
 include_once $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/cocoon-child-master/tmp/header-container.php'; 
 ?>
 
 <article class="form_body">
  
  <section class="price">
   <div class="price_wrapper wrapper">
    <div class="price_body">
     <div class="price_body_line1">登録センターなら</div>
     <div class="price_body_line2">手続き費用が断トツ安い！</div>
     <div class="price_body_price"><span class="price_large ministry">25,000</span>円（税別）</div>
     <div class="price_body_info">※ 登録費用は別になります。</div>
    </div>
   </div>
  </section>
  
  <form name="form" method="post" action="trans.php" enctype="multipart/form-data" class="form wrapper">
  <input type="hidden" id="pagename" name="pagename" value = "index.php">
   
  <section class="form_input_section">
   
   <h2 class="form_input_section_title">技能者に登録したい人</h2>
   
   <div class="form_input_itembox">
    <?php $_itemname='ccus_Name';?>
    <span class="form_input_title required">氏名</span>
    <span class="form_input_item">
     <input type="text" name="<?php echo $_itemname;?>_LastName__c" id="<?php echo $_itemname;?>_LastName__c" placeholder="山田" required>
     <input type="text" name="<?php echo $_itemname;?>_FirstName__c" id="<?php echo $_itemname;?>_FirstName__c" placeholder="太郎" required>
    </span>
   </div>
   
   <div class="form_input_itembox">
    <?php $_itemname='ccus_NameKana';?>
    <span class="form_input_title required">氏名　ふりがな</span>
    <span class="form_input_item">
     <input type="text" name="<?php echo $_itemname;?>_LastName__c" id="<?php echo $_itemname;?>_LastName__c" placeholder="やまだ" required>
     <input type="text" name="<?php echo $_itemname;?>_FirstName__c" id="<?php echo $_itemname;?>_FirstName__c" placeholder="たろう" required>
    </span>
   </div>
   
   <div class="form_input_itembox">
    <?php $_itemname='ccus_RenrakusakiNo__c';?>
    <span class="form_input_title required">連絡先番号</span>
    <span class="form_input_item">
     <input type="tel" name="<?php echo $_itemname;?>" id="<?php echo $_itemname;?>" placeholder="090-1111-2222" required>
    </span>
   </div>
   
   <div class="form_input_itembox">
    <?php $_itemname='ccus_Birth__c';?>
    <span class="form_input_title required">生年月日</span>
    <span class="form_input_item">
     <select name="<?php echo $_itemname;?>_year" id="<?php echo $_itemname;?>_year" required>
      <option value="">-</option>
      <?php 
       $now_year = intval(date('Y'));
       $new_year = $now_year - 15;
       $old_year = $now_year - 80;
       for($year = $old_year; $year <= $new_year; $year++){
        echo '<option value="'.$year.'">'.$year.'</option>';
       }
      ?>
     </select> 年 
     <select name="<?php echo $_itemname;?>_month" id="<?php echo $_itemname;?>_month" required>
      <option value="">-</option>
      <?php 
       for($month = 1; $month <= 12; $month++){
        echo '<option value="'.$month.'">'.$month.'</option>';
       }
      ?>
     </select> 月 
     <select name="<?php echo $_itemname;?>_day" id="<?php echo $_itemname;?>_day" required>
      <option value="">-</option>
      <?php 
       for($day = 1; $day <= 31; $day++){
        echo '<option value="'.$day.'">'.$day.'</option>';
       }
      ?>
     </select> 日
    </span>
   </div>
   
  </section>

  <section class="form_input_section">
   
   <h2 class="form_input_section_title">担当者</h2>
   
   <div class="form_input_itembox">
    <?php $_itemname='ccus_TantouName';?>
    <span class="form_input_title required">氏名</span>
    <span class="form_input_item">
     <input type="text" name="<?php echo $_itemname;?>_LastName__c" id="<?php echo $_itemname;?>_LastName__c" placeholder="山田" required>
     <input type="text" name="<?php echo $_itemname;?>_FirstName__c" id="<?php echo $_itemname;?>_FirstName__c" placeholder="花子" required>
    </span>
   </div>
   
   <div class="form_input_itembox">
    <?php $_itemname='ccus_TantouNameKana';?>
    <span class="form_input_title required">氏名　ふりがな</span>
    <span class="form_input_item">
     <input type="text" name="<?php echo $_itemname;?>_LastName__c" id="<?php echo $_itemname;?>_LastName__c" placeholder="やまだ" required>
     <input type="text" name="<?php echo $_itemname;?>_FirstName__c" id="<?php echo $_itemname;?>_FirstName__c" placeholder="はなこ" required>
    </span>
   </div>
   
   <div class="form_input_itembox">
    <?php $_itemname='ccus_TantouRenrakusakiNo__c';?>
    <span class="form_input_title required">連絡先番号</span>
    <span class="form_input_item">
     <input type="tel" name="<?php echo $_itemname;?>" id="<?php echo $_itemname;?>" placeholder="090-3333-4444" required>
    </span>
   </div>
   
   <div class="form_input_itembox">
    <?php $_itemname='ccus_TantouEmail__c';?>
    <span class="form_input_title required">メールアドレス</span>
    <span class="form_input_item">
     <input type="email" name="<?php echo $_itemname;?>" id="<?php echo $_itemname;?>" placeholder="name@domain.co.jp" required>
    </span>
   </div>
   
   <div class="form_input_itembox">
    <?php $_itemname='ccus_Question__c';?>
    <span class="form_input_title no-required">質問内容</span>
    <span class="form_input_item">
     <textarea name="<?php echo $_itemname;?>" id="<?php echo $_itemname;?>" placeholder="質問がありましたら自由にご記入ください。" ></textarea>
    </span>
   </div>
   
  </section>
   
           
          <section class="mitsumori-regulation" id="regulation" style="display: none;">
            <h2 class="mitsumori-regulation_ttl">注意事項</h2>
            <div id="regulation_box" onSelectStart = "return false;" onMouseDown = "return false;" style = "-moz-user-select: none; -khtml-user-select: none; user-select: none;">
              <div class="mitsumori-regulation_box">
              
<h4>〈RJCグループにおける個人データの共同利用について〉</h4>
<pre style="white-space: pre-wrap ;">
当社では、RJCグループのグループ各社の連携強化による、より付加価値の高い各種商品・サービスのご提供や、グループ全体の経営管理やリスク管理の実施・強化を行うために、個人情報保護法第27条第5項第3号に基づき、お客さまの個人データの共同利用を以下のとおり行います。なお、当該共同利用は、お客さまの利益を不当に害することがないよう必要な範囲に限る等、所定の態勢整備の下で実施することとし、また、個人情報保護法以外の関連法令等による制限がある場合、当該法令等に則り取扱いいたします。
1.　共同利用する個人データの項目
(1)　氏名、住所、電話番号、電子メールアドレス、性別、生年月日、お問合せ内容、アプリ等サービスの利用内容、位置情報、名刺情報（会社名、部署名、肩書き等を含む名刺から読み取れる情報）など、お取引に関する情報以外でRJCグループにご提供いただいた情報、その他対面・電話・ＷＥＢ・電子メール・アプリ、第三者提供等の手段を含みRJCグループが取得した情報
(2)　お取引に関わらず、氏名、住所、電話番号、電子メールアドレス、性別、生年月日、お問合せ内容など、お客さまがＨＰでの見積りや、コールセンターへのお問合せなどによってRJCグループにご提供いただいた情報
2.　共同利用者の範囲
(1)　グループ会社：
一人親方労災保険RJC　<a href="https://www.xn--4gqprf2ac7ft97aryo6r5b3ov.tokyo/">こちら</a>をご覧ください。
労働保険事務組合RJC　<a href="https://www.xn--y5q0r2lqcz91qdrc.com/">こちら</a>をご覧ください。
株式会社TMGT
(2)　提携先企業：
RJCグループが個人データを共同利用している提携先企業はございません。
3.　共同利用における利用目的
(1)　お客さまのニーズにあった各種商品・サービスの企画･開発、各種商品・サービスに関する個別のご提案・ご案内のため
(2)　各種リスクの把握・管理など、グループとしての経営管理・リスク管理の適切な遂行のため
4.　個人データの管理について責任を有する者の名称
株式会社TMGT
5.　その他
共同利用に基づくダイレクトメールの発送等の各種ご案内・ご連絡の中止を希望されるお客さまは、以下窓口までお申し出下さい。
（お客さまの情報のRJCグループでの共同利用に関するお問い合わせ窓口）
【電話番号】　0568－27－7555
【受付時間】　平日　午前９時00分～午後5時00分

</pre>
<p style='text-align: right;'>作成及び使用開始；20240124</p>
              </div>
            </div>
          </section>

          <p class="mitsumori-txt" style="display: none;">下の「申込する」ボタンをクリックすることで、加入者ご本人様が申込み内容及び「注意事項」を確認し、同意いただいたことといたします。</p>
   
  <div class="submit_box">
   <input type="submit" value="申込する" class="submit_button grad_button">
  </div>
   
  </form>
  
 </article>
 
 <script src="script.js"></script>
 
 <?php include  $_SERVER['DOCUMENT_ROOT'].'/footer.php'; ?>
 
</body>
</html>