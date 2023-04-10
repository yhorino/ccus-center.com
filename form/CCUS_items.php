<?php

class CCUS_items{
 private $ccus_Nihonkokuseki__c;
 private $ccus_SyomeisyoURL__c;
 private $ccus_SyomeisyoGenjyusyo__c;
 private $ccus_PhotoURL__c;
 private $ccus_Name_LastName__c;
 private $ccus_Name_FirstName__c;
 private $ccus_NameKana_LastName__c;
 private $ccus_NameKana_FirstName__c;
 private $ccus_NameTsusho_LastName__c;
 private $ccus_NameTsusho_FirstName__c;
 private $ccus_BloodType__c;
 private $ccus_RenrakusakiSyubetsu__c;
 private $ccus_RendakusakiNo__c;
 private $ccus_Email__c;
 private $ccus_Address_Zip__c;
 private $ccus_Address_Pref__c;
 private $ccus_Address_City__c;
 private $ccus_Address_Address__c;
 private $ccus_CardAddressSame__c;
 private $ccus_CardAddress_Zip__c;
 private $ccus_CardAddress_Pref__c;
 private $ccus_CardAddress_City__c;
 private $ccus_CardAddress_Address__c;
 private $ccus_KinkyurenrakusakiName_LastName__c;
 private $ccus_KinkyurenrakusakiName_FirstName__c;
 private $ccus_KinkyurenrakusakiNameKana_LastName__c;
 private $ccus_KinkyurenrakusakiNameKana_FirstName__c;
 private $ccus_KinkyurenrakusakiAddress_Same__c;
 private $ccus_KinkyurenrakusakiAddress_Zip__c;
 private $ccus_KinkyurenrakusakiAddress_Pref__c;
 private $ccus_KinkyurenrakusakiAddress_City__c;
 private $ccus_KinkyurenrakusakiAddress_Address__c;
 private $ccus_KinkyurenrakusakiPhone__c;
 private $ccus_Syokusyu1Daibunrui__c;
 private $ccus_Syokusyu1Syobunrui__c;
 private $ccus_Kenkohoken__c;
 private $ccus_Nenkinhoken__c;
 private $ccus_Koyohoken__c;
 private $ccus_Kentaikyo__c;
 private $ccus_ChushokigyoTaisyoku__c;
 private $ccus_HoujinKojin__c;
 private $ccus_JigyosyaName__c;
 private $ccus_JigyosyaYagou__c;
 private $ccus_JigyosyaDaihyosyaName__c;
 private $ccus_JigyosyoAddress_Zip__c;
 private $ccus_JigyosyoAddress_Pref__c;
 private $ccus_JigyosyoAddress_City__c;
 private $ccus_JigyosyoAddress_Address__c;
 private $ccus_JigyosyoEmail__c;
 private $ccus_JigyosyoKoyokeitai__c;
 private $ccus_JigyosyoKoyoDate__c;
 private $ccus_Syosaigata__c;
 private $ccus_SyosaigataTokubetsukanyu__c;
 private $ccus_SyosaigataKenshin__c;
 private $ccus_SyosaigataKenshinDate__c;
 private $ccus_SyosaigataKenshinName__c;
 private $ccus_SyosaigataGakureki__c;

 function __construct($post){
  $this->ccus_Nihonkokuseki__c=htmlspecialchars($post["ccus_Nihonkokuseki__c"], ENT_QUOTES);
  $this->ccus_SyomeisyoURL__c=htmlspecialchars($post["ccus_SyomeisyoURL__c"], ENT_QUOTES);
  $this->ccus_SyomeisyoGenjyusyo__c=htmlspecialchars($post["ccus_SyomeisyoGenjyusyo__c"], ENT_QUOTES);
  $this->ccus_PhotoURL__c=htmlspecialchars($post["ccus_PhotoURL__c"], ENT_QUOTES);
  $this->ccus_Name_LastName__c=htmlspecialchars($post["ccus_Name_LastName__c"], ENT_QUOTES);
  $this->ccus_Name_FirstName__c=htmlspecialchars($post["ccus_Name_FirstName__c"], ENT_QUOTES);
  $this->ccus_NameKana_LastName__c=htmlspecialchars($post["ccus_NameKana_LastName__c"], ENT_QUOTES);
  $this->ccus_NameKana_FirstName__c=htmlspecialchars($post["ccus_NameKana_FirstName__c"], ENT_QUOTES);
  $this->ccus_NameTsusho_LastName__c=htmlspecialchars($post["ccus_NameTsusho_LastName__c"], ENT_QUOTES);
  $this->ccus_NameTsusho_FirstName__c=htmlspecialchars($post["ccus_NameTsusho_FirstName__c"], ENT_QUOTES);
  $this->ccus_BloodType__c=htmlspecialchars($post["ccus_BloodType__c"], ENT_QUOTES);
  $this->ccus_RenrakusakiSyubetsu__c=htmlspecialchars($post["ccus_RenrakusakiSyubetsu__c"], ENT_QUOTES);
  $this->ccus_RendakusakiNo__c=htmlspecialchars($post["ccus_RendakusakiNo__c"], ENT_QUOTES);
  $this->ccus_Email__c=htmlspecialchars($post["ccus_Email__c"], ENT_QUOTES);
  $this->ccus_Address_Zip__c=htmlspecialchars($post["ccus_Address_Zip__c"], ENT_QUOTES);
  $this->ccus_Address_Pref__c=htmlspecialchars($post["ccus_Address_Pref__c"], ENT_QUOTES);
  $this->ccus_Address_City__c=htmlspecialchars($post["ccus_Address_City__c"], ENT_QUOTES);
  $this->ccus_Address_Address__c=htmlspecialchars($post["ccus_Address_Address__c"], ENT_QUOTES);
  $this->ccus_CardAddressSame__c=htmlspecialchars($post["ccus_CardAddressSame__c"], ENT_QUOTES);
  $this->ccus_CardAddress_Zip__c=htmlspecialchars($post["ccus_CardAddress_Zip__c"], ENT_QUOTES);
  $this->ccus_CardAddress_Pref__c=htmlspecialchars($post["ccus_CardAddress_Pref__c"], ENT_QUOTES);
  $this->ccus_CardAddress_City__c=htmlspecialchars($post["ccus_CardAddress_City__c"], ENT_QUOTES);
  $this->ccus_CardAddress_Address__c=htmlspecialchars($post["ccus_CardAddress_Address__c"], ENT_QUOTES);
  $this->ccus_KinkyurenrakusakiName_LastName__c=htmlspecialchars($post["ccus_KinkyurenrakusakiName_LastName__c"], ENT_QUOTES);
  $this->ccus_KinkyurenrakusakiName_FirstName__c=htmlspecialchars($post["ccus_KinkyurenrakusakiName_FirstName__c"], ENT_QUOTES);
  $this->ccus_KinkyurenrakusakiNameKana_LastName__c=htmlspecialchars($post["ccus_KinkyurenrakusakiNameKana_LastName__c"], ENT_QUOTES);
  $this->ccus_KinkyurenrakusakiNameKana_FirstName__c=htmlspecialchars($post["ccus_KinkyurenrakusakiNameKana_FirstName__c"], ENT_QUOTES);
  $this->ccus_KinkyurenrakusakiAddress_Same__c=htmlspecialchars($post["ccus_KinkyurenrakusakiAddress_Same__c"], ENT_QUOTES);
  $this->ccus_KinkyurenrakusakiAddress_Zip__c=htmlspecialchars($post["ccus_KinkyurenrakusakiAddress_Zip__c"], ENT_QUOTES);
  $this->ccus_KinkyurenrakusakiAddress_Pref__c=htmlspecialchars($post["ccus_KinkyurenrakusakiAddress_Pref__c"], ENT_QUOTES);
  $this->ccus_KinkyurenrakusakiAddress_City__c=htmlspecialchars($post["ccus_KinkyurenrakusakiAddress_City__c"], ENT_QUOTES);
  $this->ccus_KinkyurenrakusakiAddress_Address__c=htmlspecialchars($post["ccus_KinkyurenrakusakiAddress_Address__c"], ENT_QUOTES);
  $this->ccus_KinkyurenrakusakiPhone__c=htmlspecialchars($post["ccus_KinkyurenrakusakiPhone__c"], ENT_QUOTES);
  $this->ccus_Syokusyu1Daibunrui__c=htmlspecialchars($post["ccus_Syokusyu1Daibunrui__c"], ENT_QUOTES);
  $this->ccus_Syokusyu1Syobunrui__c=htmlspecialchars($post["ccus_Syokusyu1Syobunrui__c"], ENT_QUOTES);
  $this->ccus_Kenkohoken__c=htmlspecialchars($post["ccus_Kenkohoken__c"], ENT_QUOTES);
  $this->ccus_Nenkinhoken__c=htmlspecialchars($post["ccus_Nenkinhoken__c"], ENT_QUOTES);
  $this->ccus_Koyohoken__c=htmlspecialchars($post["ccus_Koyohoken__c"], ENT_QUOTES);
  $this->ccus_Kentaikyo__c=htmlspecialchars($post["ccus_Kentaikyo__c"], ENT_QUOTES);
  $this->ccus_ChushokigyoTaisyoku__c=htmlspecialchars($post["ccus_ChushokigyoTaisyoku__c"], ENT_QUOTES);
  $this->ccus_HoujinKojin__c=htmlspecialchars($post["ccus_HoujinKojin__c"], ENT_QUOTES);
  $this->ccus_JigyosyaName__c=htmlspecialchars($post["ccus_JigyosyaName__c"], ENT_QUOTES);
  $this->ccus_JigyosyaYagou__c=htmlspecialchars($post["ccus_JigyosyaYagou__c"], ENT_QUOTES);
  $this->ccus_JigyosyaDaihyosyaName__c=htmlspecialchars($post["ccus_JigyosyaDaihyosyaName__c"], ENT_QUOTES);
  $this->ccus_JigyosyoAddress_Zip__c=htmlspecialchars($post["ccus_JigyosyoAddress_Zip__c"], ENT_QUOTES);
  $this->ccus_JigyosyoAddress_Pref__c=htmlspecialchars($post["ccus_JigyosyoAddress_Pref__c"], ENT_QUOTES);
  $this->ccus_JigyosyoAddress_City__c=htmlspecialchars($post["ccus_JigyosyoAddress_City__c"], ENT_QUOTES);
  $this->ccus_JigyosyoAddress_Address__c=htmlspecialchars($post["ccus_JigyosyoAddress_Address__c"], ENT_QUOTES);
  $this->ccus_JigyosyoEmail__c=htmlspecialchars($post["ccus_JigyosyoEmail__c"], ENT_QUOTES);
  $this->ccus_JigyosyoKoyokeitai__c=htmlspecialchars($post["ccus_JigyosyoKoyokeitai__c"], ENT_QUOTES);
  $this->ccus_JigyosyoKoyoDate__c=htmlspecialchars(str_replace('-', '/', $post["ccus_JigyosyoKoyoDate__c"]), ENT_QUOTES);
  $this->ccus_Syosaigata__c=htmlspecialchars($post["ccus_Syosaigata__c"], ENT_QUOTES);
  $this->ccus_SyosaigataTokubetsukanyu__c=htmlspecialchars($post["ccus_SyosaigataTokubetsukanyu__c"], ENT_QUOTES);
  $this->ccus_SyosaigataKenshin__c=htmlspecialchars($post["ccus_SyosaigataKenshin__c"], ENT_QUOTES);
  $this->ccus_SyosaigataKenshinDate__c=htmlspecialchars(str_replace('-', '/', $post["ccus_SyosaigataKenshinDate__c"]), ENT_QUOTES);
  $this->ccus_SyosaigataKenshinName__c=htmlspecialchars($post["ccus_SyosaigataKenshinName__c"], ENT_QUOTES);
  $this->ccus_SyosaigataGakureki__c=htmlspecialchars($post["ccus_SyosaigataGakureki__c"], ENT_QUOTES);
  //var_dump($this);
 }
 
 // https://www.synergy-marketing.co.jp/cloud/synergylead/support/faq-salesforce-web-to-case-on-php/
 function web2case() {
  
 /* 本番 */
  /*
 $url = 'https://webto.salesforce.com/servlet/servlet.WebToCase?encoding=UTF-8';
 // Salesforceの組織ID
 $oid = '00D7F0000001NoF';
  */

 /* Sandbox */
 $url = 'https://d7f0000001nofuau--ccus.sandbox.my.salesforce.com/servlet/servlet.WebToCase?encoding=UTF-8';
 // Salesforceの組織ID
 $oid = '00DAz000000HHxJ';

  $fields = array(

  // Salesforceへのパラメーター
  'orgid' => $oid,
  'retURL' => '',
  'recordType'=>'012Az0000000r17',
  'ccus_Nihonkokuseki__c'=>$this->ccus_Nihonkokuseki__c,
  'ccus_SyomeisyoURL__c'=>$this->ccus_SyomeisyoURL__c,
  'ccus_SyomeisyoGenjyusyo__c'=>$this->ccus_SyomeisyoGenjyusyo__c,
  'ccus_PhotoURL__c'=>$this->ccus_PhotoURL__c,
  'ccus_Name_LastName__c'=>$this->ccus_Name_LastName__c,
  'ccus_Name_FirstName__c'=>$this->ccus_Name_FirstName__c,
  'ccus_NameKana_LastName__c'=>$this->ccus_NameKana_LastName__c,
  'ccus_NameKana_FirstName__c'=>$this->ccus_NameKana_FirstName__c,
  'ccus_NameTsusho_LastName__c'=>$this->ccus_NameTsusho_LastName__c,
  'ccus_NameTsusho_FirstName__c'=>$this->ccus_NameTsusho_FirstName__c,
  'ccus_BloodType__c'=>$this->ccus_BloodType__c,
  'ccus_RenrakusakiSyubetsu__c'=>$this->ccus_RenrakusakiSyubetsu__c,
  'ccus_RendakusakiNo__c'=>$this->ccus_RendakusakiNo__c,
  'ccus_Email__c'=>$this->ccus_Email__c,
  'ccus_Address_Zip__c'=>$this->ccus_Address_Zip__c,
  'ccus_Address_Pref__c'=>$this->ccus_Address_Pref__c,
  'ccus_Address_City__c'=>$this->ccus_Address_City__c,
  'ccus_Address_Address__c'=>$this->ccus_Address_Address__c,
  'ccus_CardAddressSame__c'=>$this->ccus_CardAddressSame__c,
  'ccus_CardAddress_Zip__c'=>$this->ccus_CardAddress_Zip__c,
  'ccus_CardAddress_Pref__c'=>$this->ccus_CardAddress_Pref__c,
  'ccus_CardAddress_City__c'=>$this->ccus_CardAddress_City__c,
  'ccus_CardAddress_Address__c'=>$this->ccus_CardAddress_Address__c,
  'ccus_KinkyurenrakusakiName_LastName__c'=>$this->ccus_KinkyurenrakusakiName_LastName__c,
  'ccus_KinkyurenrakusakiName_FirstName__c'=>$this->ccus_KinkyurenrakusakiName_FirstName__c,
  'ccus_KinkyurenrakusakiNameKana_LastName__c'=>$this->ccus_KinkyurenrakusakiNameKana_LastName__c,
  'ccus_KinkyurenrakusakiNameKana_FirstName__c'=>$this->ccus_KinkyurenrakusakiNameKana_FirstName__c,
  'ccus_KinkyurenrakusakiAddress_Same__c'=>$this->ccus_KinkyurenrakusakiAddress_Same__c,
  'ccus_KinkyurenrakusakiAddress_Zip__c'=>$this->ccus_KinkyurenrakusakiAddress_Zip__c,
  'ccus_KinkyurenrakusakiAddress_Pref__c'=>$this->ccus_KinkyurenrakusakiAddress_Pref__c,
  'ccus_KinkyurenrakusakiAddress_City__c'=>$this->ccus_KinkyurenrakusakiAddress_City__c,
  'ccus_KinkyurenrakusakiAddress_Address__c'=>$this->ccus_KinkyurenrakusakiAddress_Address__c,
  'ccus_KinkyurenrakusakiPhone__c'=>$this->ccus_KinkyurenrakusakiPhone__c,
  'ccus_Kenkohoken__c'=>$this->ccus_Kenkohoken__c,
  'ccus_Nenkinhoken__c'=>$this->ccus_Nenkinhoken__c,
  'ccus_Koyohoken__c'=>$this->ccus_Koyohoken__c,
  'ccus_Kentaikyo__c'=>$this->ccus_Kentaikyo__c,
  'ccus_ChushokigyoTaisyoku__c'=>$this->ccus_ChushokigyoTaisyoku__c,
  'ccus_HoujinKojin__c'=>$this->ccus_HoujinKojin__c,
  'ccus_JigyosyaName__c'=>$this->ccus_JigyosyaName__c,
  'ccus_JigyosyaYagou__c'=>$this->ccus_JigyosyaYagou__c,
  'ccus_JigyosyaDaihyosyaName__c'=>$this->ccus_JigyosyaDaihyosyaName__c,
  'ccus_JigyosyoAddress_Zip__c'=>$this->ccus_JigyosyoAddress_Zip__c,
  'ccus_JigyosyoAddress_Pref__c'=>$this->ccus_JigyosyoAddress_Pref__c,
  'ccus_JigyosyoAddress_City__c'=>$this->ccus_JigyosyoAddress_City__c,
  'ccus_JigyosyoAddress_Address__c'=>$this->ccus_JigyosyoAddress_Address__c,
  'ccus_JigyosyoEmail__c'=>$this->ccus_JigyosyoEmail__c,
  'ccus_JigyosyoKoyokeitai__c'=>$this->ccus_JigyosyoKoyokeitai__c,
  'ccus_JigyosyoKoyoDate__c'=>$this->ccus_JigyosyoKoyoDate__c,
  'ccus_Syosaigata__c'=>$this->ccus_Syosaigata__c,
  'ccus_SyosaigataTokubetsukanyu__c'=>$this->ccus_SyosaigataTokubetsukanyu__c,
  'ccus_SyosaigataKenshin__c'=>$this->ccus_SyosaigataKenshin__c,
  'ccus_SyosaigataKenshinDate__c'=>$this->ccus_SyosaigataKenshinDate__c,
  'ccus_SyosaigataKenshinName__c'=>$this->ccus_SyosaigataKenshinName__c

  //'debug' => '1',
  //'debugEmail' => urlencode("xxx@xxxx"),
  );
  foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
  rtrim($fields_string,'&');
  var_dump($fields_string);
  

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_POST,count($fields));
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
  curl_setopt($ch, CURLOPT_POSTFIELDS,$fields_string);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  $result = curl_exec($ch);
  curl_close($ch);

  return $result;
 }

}

?>
