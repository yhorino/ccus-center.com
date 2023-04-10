<!doctype html>
<html>
<head>
<?php include  $_SERVER['DOCUMENT_ROOT'].'/gtag_head.php'; ?>
<?php $title = "CCUS申込フォーム"; ?>
<?php $description = "CCUS申込フォーム"; ?>
<?php $keyword = "CCUS,ccus"; ?>
<?php $url = "https://www.ccus-center.com/form/"; ?>
 
<?php include  $_SERVER['DOCUMENT_ROOT'].'/head_settings.php'; ?>
</head>

<body>
 <?php include  $_SERVER['DOCUMENT_ROOT'].'/gtag_body.php'; ?>

 <?php include  $_SERVER['DOCUMENT_ROOT'].'/header.php'; ?>
 
 <article class="form_body">
  
  <form name="form" method="post" action="trans.php" enctype="multipart/form-data">
  <input type="hidden" id="pagename" name="pagename" value = "index.php">
   
  <section class="form_select_section">
   
   <div class="form_input_itembox">
    <?php $_itemname='ccus_Nihonkokuseki__c';?>
    <span class="form_input_title required">日本国籍ですか？</span>
    <span class="form_input_item">
     <input type="radio" name="<?php echo $_itemname;?>" id="<?php echo $_itemname;?>_yes" value="はい" >
     <label for="<?php echo $_itemname;?>_yes">はい</label>
     <input type="radio" name="<?php echo $_itemname;?>" id="<?php echo $_itemname;?>_no" value="いいえ" >
     <label for="<?php echo $_itemname;?>_no">いいえ</label>
    </span>
   </div>
   
   <div class="form_input_itembox">
    <?php $_itemname='ccus_HoujinKojin__c';?>
    <span class="form_input_title required">登録される方は？</span>
    <span class="form_input_item">
     <input type="radio" name="<?php echo $_itemname;?>" id="<?php echo $_itemname;?>_houjin" value="法人" >
     <label for="<?php echo $_itemname;?>_houjin">法人</label>
     <input type="radio" name="<?php echo $_itemname;?>" id="<?php echo $_itemname;?>_kojin" value="個人" >
     <label for="<?php echo $_itemname;?>_kojin">個人</label>
    </span>
   </div>

   <div class="form_input_itembox ccus_HoujinKojin__c_kojin">
    <?php $_itemname='yagou';?>
    <span class="form_input_title required">屋号がありますか？</span>
    <span class="form_input_item">
     <input type="radio" name="<?php echo $_itemname;?>" id="<?php echo $_itemname;?>_yes" value="はい" >
     <label for="<?php echo $_itemname;?>_yes">はい</label>
     <input type="radio" name="<?php echo $_itemname;?>" id="<?php echo $_itemname;?>_no" value="いいえ" >
     <label for="<?php echo $_itemname;?>_no">いいえ</label>
    </span>
   </div>
      
   <div class="form_input_itembox">
    <?php $_itemname='ccus_Syosaigata__c';?>
    <span class="form_input_title required">詳細型を希望しますか？</span>
    <span class="form_input_item">
     <input type="radio" name="<?php echo $_itemname;?>" id="<?php echo $_itemname;?>_yes" value="はい" >
     <label for="<?php echo $_itemname;?>_yes">はい</label>
     <input type="radio" name="<?php echo $_itemname;?>" id="<?php echo $_itemname;?>_no" value="いいえ" >
     <label for="<?php echo $_itemname;?>_no">いいえ</label>
    </span>
   </div>
   
  </section>
  
  <section class="form_input_section">
   
   <div class="form_input_itembox">
    <?php $_itemname='ccus_SyomeisyoURL__c';?>
    <span class="form_input_title required">証明書添付</span>
    <span class="form_input_item">
     <input type="file" name="<?php echo $_itemname;?>" id="<?php echo $_itemname;?>" accept="image/*,.pdf" >
    </span>
   </div>
   
   <div class="form_input_itembox">
    <?php $_itemname='ccus_SyomeisyoGenjyusyo__c';?>
    <span class="form_input_title required">証明書の住所は現住所ですか？</span>
    <span class="form_input_item">
     <input type="radio" name="<?php echo $_itemname;?>" id="<?php echo $_itemname;?>_yes" value="はい" >
     <label for="<?php echo $_itemname;?>_yes">はい</label>
     <input type="radio" name="<?php echo $_itemname;?>" id="<?php echo $_itemname;?>_no" value="いいえ" >
     <label for="<?php echo $_itemname;?>_no">いいえ</label>
    </span>
   </div>
   
   <div class="form_input_itembox">
    <?php $_itemname='ccus_PhotoURL__c';?>
    <span class="form_input_title required">顔写真添付</span>
    <span class="form_input_item">
     <input type="file" name="<?php echo $_itemname;?>" id="<?php echo $_itemname;?>" accept="image/*,.pdf" >
    </span>
   </div>
   
   <div class="form_input_itembox">
    <?php $_itemname='ccus_Name';?>
    <span class="form_input_title required">氏名</span>
    <span class="form_input_item">
     <input type="text" name="<?php echo $_itemname;?>_LastName__c" id="<?php echo $_itemname;?>_LastName__c" >
     <input type="text" name="<?php echo $_itemname;?>_FirstName__c" id="<?php echo $_itemname;?>_FirstName__c" >
    </span>
   </div>
   
   <div class="form_input_itembox">
    <?php $_itemname='ccus_NameKana';?>
    <span class="form_input_title required">氏名　ふりがな</span>
    <span class="form_input_item">
     <input type="text" name="<?php echo $_itemname;?>_LastName__c" id="<?php echo $_itemname;?>_LastName__c" >
     <input type="text" name="<?php echo $_itemname;?>_FirstName__c" id="<?php echo $_itemname;?>_FirstName__c" >
    </span>
   </div>
   
   <div class="form_input_itembox gaikoku">
    <?php $_itemname='ccus_NameTsusho';?>
    <span class="form_input_title required">通称名</span>
    <span class="form_input_item">
     <input type="text" name="<?php echo $_itemname;?>_LastName__c" id="<?php echo $_itemname;?>_LastName__c" >
     <input type="text" name="<?php echo $_itemname;?>_FirstName__c" id="<?php echo $_itemname;?>_FirstName__c" >
    </span>
   </div>
   
   <div class="form_input_itembox">
    <?php $_itemname='ccus_BloodType__c';?>
    <span class="form_input_title required">血液型</span>
    <span class="form_input_item">
     <select name="<?php echo $_itemname;?>" >
      <option value="">-選択-</option>
      <option value="A">A</option>
      <option value="B">B</option>
      <option value="O">O</option>
      <option value="AB">AB</option>
      <option value="わからない">わからない</option>
     </select>
    </span>
   </div>
   
   <div class="form_input_itembox">
    <?php $_itemname='ccus_RenrakusakiSyubetsu__c';?>
    <span class="form_input_title required">連絡先種別</span>
    <span class="form_input_item">
     <select name="<?php echo $_itemname;?>" >
      <option value="">-選択-</option>
      <option value="自宅">自宅</option>
      <option value="携帯">携帯</option>
      <option value="FAX">FAX</option>
     </select>
    </span>
   </div>
   
   <div class="form_input_itembox">
    <?php $_itemname='ccus_RendakusakiNo__c';?>
    <span class="form_input_title required">連絡先番号</span>
    <span class="form_input_item">
     <input type="tel" name="<?php echo $_itemname;?>" id="<?php echo $_itemname;?>" >
    </span>
   </div>
   
   <div class="form_input_itembox">
    <?php $_itemname='ccus_Email__c';?>
    <span class="form_input_title required">メールアドレス</span>
    <span class="form_input_item">
     <input type="email" name="<?php echo $_itemname;?>" id="<?php echo $_itemname;?>" >
    </span>
   </div>
   
   <div class="form_input_itembox">
    <?php $_itemname='ccus_CardAddressSame__c';?>
    <span class="form_input_title required">カード送付先は証明書住所と同じ</span>
    <span class="form_input_item checkbox">
     <input type="checkbox" name="<?php echo $_itemname;?>" id="<?php echo $_itemname;?>" value="はい">
    </span>
   </div>
   
   <div class="form_input_itembox ccus_CardAddressSame__c_no">
    <?php $_itemname='ccus_CardAddress';?>
    <span class="form_input_title required">カード送付先住所</span>
    <span class="form_input_item">
     <label for="<?php echo $_itemname;?>_Zip__c">郵便番号</label>
     <input type="tel" name="<?php echo $_itemname;?>_Zip__c" id="<?php echo $_itemname;?>_Zip__c" >
     <label for="<?php echo $_itemname;?>_Pref__c">都道府県</label>
     <select name="<?php echo $_itemname;?>_Pref__c" >
      <option value="">-選択-</option>
      <option value="北海道">北海道</option>
     </select>
     <label for="<?php echo $_itemname;?>_City__c">市区町村</label>
     <input type="text" name="<?php echo $_itemname;?>_City__c" id="<?php echo $_itemname;?>_City__c" >
     <label for="<?php echo $_itemname;?>_Address__c">以下住所</label>
     <input type="text" name="<?php echo $_itemname;?>_Address__c" id="<?php echo $_itemname;?>_Address__c" >
    </span>
   </div>
   
   <div class="form_input_itembox">
    <?php $_itemname='ccus_KinkyurenrakusakiName';?>
    <span class="form_input_title required">緊急連絡先　氏名</span>
    <span class="form_input_item">
     <input type="text" name="<?php echo $_itemname;?>_LastName__c" id="<?php echo $_itemname;?>_LastName__c" >
     <input type="text" name="<?php echo $_itemname;?>_FirstName__c" id="<?php echo $_itemname;?>_FirstName__c" >
    </span>
   </div>
   
   <div class="form_input_itembox">
    <?php $_itemname='ccus_KinkyurenrakusakiNameKana';?>
    <span class="form_input_title required">緊急連絡先　氏名ふりがな</span>
    <span class="form_input_item">
     <input type="text" name="<?php echo $_itemname;?>_LastName__c" id="<?php echo $_itemname;?>_LastName__c" >
     <input type="text" name="<?php echo $_itemname;?>_FirstName__c" id="<?php echo $_itemname;?>_FirstName__c" >
    </span>
   </div>
   
   <div class="form_input_itembox">
    <?php $_itemname='ccus_KinkyurenrakusakiAddress_Same__c';?>
    <span class="form_input_title required">緊急連絡先は証明書住所と同じ</span>
    <span class="form_input_item checkbox">
     <input type="checkbox" name="<?php echo $_itemname;?>" id="<?php echo $_itemname;?>" value="はい">
    </span>
   </div>
   
   <div class="form_input_itembox ccus_KinkyurenrakusakiAddress_Same__c_no">
    <?php $_itemname='ccus_CardAddress';?>
    <span class="form_input_title required">緊急連絡先住所</span>
    <span class="form_input_item">
     <label for="<?php echo $_itemname;?>_Zip__c">郵便番号</label>
     <input type="tel" name="<?php echo $_itemname;?>_Zip__c" id="<?php echo $_itemname;?>_Zip__c" >
     <label for="<?php echo $_itemname;?>_Pref__c">都道府県</label>
     <select name="<?php echo $_itemname;?>_Pref__c" >
      <option value="">-選択-</option>
      <option value="北海道">北海道</option>
     </select>
     <label for="<?php echo $_itemname;?>_City__c">市区町村</label>
     <input type="text" name="<?php echo $_itemname;?>_City__c" id="<?php echo $_itemname;?>_City__c" >
     <label for="<?php echo $_itemname;?>_Address__c">以下住所</label>
     <input type="text" name="<?php echo $_itemname;?>_Address__c" id="<?php echo $_itemname;?>_Address__c" >
    </span>
   </div>
   
   <div class="form_input_itembox">
    <?php $_itemname='ccus_KinkyurenrakusakiPhone__c';?>
    <span class="form_input_title required">緊急連絡先　電話番号</span>
    <span class="form_input_item">
     <input type="tel" name="<?php echo $_itemname;?>" id="<?php echo $_itemname;?>" >
    </span>
   </div>
   
   <div class="form_input_itembox">
    <?php $_itemname='ccus_Syokusyu1';?>
    <span class="form_input_title required">職種１</span>
    <span class="form_input_item">
     <label for="<?php echo $_itemname;?>Daibunrui__c">大分類</label>
     <select name="<?php echo $_itemname;?>Daibunrui__c" onchange="filter_syobunrui(1);">
      <?php
       include_once('gyosyulist.php');
       create_gyosyudaibunruioption_html();
      ?>
     </select>
     <label for="<?php echo $_itemname;?>Syobunrui__c">小分類</label>
     <select name="<?php echo $_itemname;?>Syobunrui__c" >
      <?php
       include_once('gyosyulist.php');
       create_gyosyusyobunruioption_html();
      ?>
     </select>
    </span>
   </div>
   
   <div class="form_input_itembox">
    <?php $_itemname='ccus_Kenkohoken__c';?>
    <span class="form_input_title required">健康保険</span>
    <span class="form_input_item">
     <select name="<?php echo $_itemname;?>" >
      <option value="">-選択-</option>
      <option value="有">有</option>
      <option value="無">無</option>
      <option value="わからない">わからない</option>
     </select>
    </span>
   </div>
   
   <div class="form_input_itembox">
    <?php $_itemname='ccus_Nenkinhoken__c';?>
    <span class="form_input_title required">年金保険</span>
    <span class="form_input_item">
     <select name="<?php echo $_itemname;?>" >
      <option value="">-選択-</option>
      <option value="有">有</option>
      <option value="無">無</option>
      <option value="わからない">わからない</option>
     </select>
    </span>
   </div>
   
   <div class="form_input_itembox">
    <?php $_itemname='ccus_Koyohoken__c';?>
    <span class="form_input_title required">雇用保険</span>
    <span class="form_input_item">
     <select name="<?php echo $_itemname;?>" >
      <option value="">-選択-</option>
      <option value="有">有</option>
      <option value="無">無</option>
      <option value="わからない">わからない</option>
     </select>
    </span>
   </div>
   
   <div class="form_input_itembox">
    <?php $_itemname='ccus_Kentaikyo__c';?>
    <span class="form_input_title required">建設業退職金共済制度</span>
    <span class="form_input_item">
     <select name="<?php echo $_itemname;?>" >
      <option value="">-選択-</option>
      <option value="有">有</option>
      <option value="無">無</option>
      <option value="わからない">わからない</option>
     </select>
    </span>
   </div>
   
   <div class="form_input_itembox">
    <?php $_itemname='ccus_ChushokigyoTaisyoku__c';?>
    <span class="form_input_title required">中小企業退職金共済制度</span>
    <span class="form_input_item">
     <select name="<?php echo $_itemname;?>" >
      <option value="">-選択-</option>
      <option value="有">有</option>
      <option value="無">無</option>
      <option value="わからない">わからない</option>
     </select>
    </span>
   </div>
   
   <div class="ccus_HoujinKojin__c_houjin">
    
    <div class="form_input_itembox">
     <?php $_itemname='ccus_JigyosyaName__c';?>
     <span class="form_input_title required">事業者名</span>
     <span class="form_input_item">
      <input type="text" name="<?php echo $_itemname;?>" id="<?php echo $_itemname;?>" >
     </span>
    </div>

    <div class="form_input_itembox">
     <?php $_itemname='ccus_JigyosyoAddress';?>
     <span class="form_input_title required">事業所住所</span>
     <span class="form_input_item">
      <label for="<?php echo $_itemname;?>_Zip__c">郵便番号</label>
      <input type="tel" name="<?php echo $_itemname;?>_Zip__c" id="<?php echo $_itemname;?>_Zip__c" >
      <label for="<?php echo $_itemname;?>_Pref__c">都道府県</label>
      <select name="<?php echo $_itemname;?>_Pref__c" >
       <option value="">-選択-</option>
       <option value="北海道">北海道</option>
      </select>
      <label for="<?php echo $_itemname;?>_City__c">市区町村</label>
      <input type="text" name="<?php echo $_itemname;?>_City__c" id="<?php echo $_itemname;?>_City__c" >
      <label for="<?php echo $_itemname;?>_Address__c">以下住所</label>
      <input type="text" name="<?php echo $_itemname;?>_Address__c" id="<?php echo $_itemname;?>_Address__c" >
     </span>
    </div>

    <div class="form_input_itembox">
     <?php $_itemname='ccus_JigyosyoEmail__c';?>
     <span class="form_input_title required">メールアドレス</span>
     <span class="form_input_item">
      <input type="email" name="<?php echo $_itemname;?>" id="<?php echo $_itemname;?>" >
     </span>
    </div>

    <div class="form_input_itembox">
     <?php $_itemname='ccus_JigyosyoKoyokeitai__c';?>
     <span class="form_input_title required">雇用形態</span>
     <span class="form_input_item">
      <select name="<?php echo $_itemname;?>" >
       <option value="">-選択-</option>
       <option value="常時雇用">常時雇用</option>
       <option value="臨時雇用">臨時雇用</option>
       <option value="建設業労務労働者就業機会確保事業に基づく雇用">建設業労務労働者就業機会確保事業に基づく雇用</option>
      </select>
     </span>
    </div>

    <div class="form_input_itembox">
     <?php $_itemname='ccus_JigyosyoKoyoDate__c';?>
     <span class="form_input_title required">雇用年月日</span>
     <span class="form_input_item">
      <input type="date" name="<?php echo $_itemname;?>" id="<?php echo $_itemname;?>" >
     </span>
    </div>

   </div>
   
   <div class="ccus_HoujinKojin__c_kojin">
    
    <div class="form_input_itembox yagou_yes">
     <?php $_itemname='ccus_JigyosyaYagou__c';?>
     <span class="form_input_title required">屋号</span>
     <span class="form_input_item">
      <input type="text" name="<?php echo $_itemname;?>" id="<?php echo $_itemname;?>" >
     </span>
    </div>
    
    <div class="form_input_itembox yagou_no">
     <?php $_itemname='ccus_JigyosyaDaihyosyaName__c';?>
     <span class="form_input_title required">代表者名</span>
     <span class="form_input_item">
      <input type="text" name="<?php echo $_itemname;?>" id="<?php echo $_itemname;?>" >
     </span>
    </div>
    
   </div>
   
   <div class="ccus_Syosaigata__c_yes">
    
    <div class="form_input_itembox">
     <?php $_itemname='ccus_SyosaigataTokubetsukanyu__c';?>
     <span class="form_input_title required">労災特別加入</span>
     <span class="form_input_item">
      <select name="<?php echo $_itemname;?>" >
       <option value="">-選択-</option>
       <option value="RJCで加入">RJCで加入</option>
       <option value="別団体で加入">別団体で加入</option>
       <option value="加入していない">加入していない</option>
       <option value="わからない">わからない</option>
      </select>
     </span>
    </div>

    <div class="form_input_itembox">
     <?php $_itemname='ccus_SyosaigataKenshin__c';?>
     <span class="form_input_title required">健康診断を過去１年に受診（じん肺健康診断は３年以内）しましたか？</span>
     <span class="form_input_item">
      <select name="<?php echo $_itemname;?>" >
       <option value="">-選択-</option>
       <option value="はい">はい</option>
       <option value="いいえ">いいえ</option>
       <option value="わからない">わからない</option>
      </select>
     </span>
    </div>

    <div class="form_input_itembox ccus_SyosaigataKenshin__c_yes">
     <?php $_itemname='ccus_SyosaigataKenshinDate__c';?>
     <span class="form_input_title required">受診日</span>
     <span class="form_input_item">
      <input type="date" name="<?php echo $_itemname;?>" id="<?php echo $_itemname;?>" >
     </span>
    </div>

    <div class="form_input_itembox">
     <?php $_itemname='ccus_SyosaigataKenshinName__c';?>
     <span class="form_input_title required">健康診断種別名</span>
     <span class="form_input_item">
      <input type="text" name="<?php echo $_itemname;?>" id="<?php echo $_itemname;?>" >
     </span>
    </div>
    
   </div>
   
  </section>
   
  <input type="submit" value="申込する">
   
  </form>
  
 </article>
 
 <script src="script.js"></script>
 
 <?php include  $_SERVER['DOCUMENT_ROOT'].'/footer.php'; ?>
 
</body>
</html>