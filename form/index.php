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
       $old_year = $now_year - 70;
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
   
  <div class="submit_box">
   <input type="submit" value="申込する" class="submit_button grad_button">
  </div>
   
  </form>
  
 </article>
 
 <script src="script.js"></script>
 
 <?php include  $_SERVER['DOCUMENT_ROOT'].'/footer.php'; ?>
 
</body>
</html>