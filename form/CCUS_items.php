<?php

class CCUS_items{
 private $ccus_Name_LastName__c;
 private $ccus_Name_FirstName__c;
 private $ccus_NameKana_LastName__c;
 private $ccus_NameKana_FirstName__c;
 private $ccus_RenrakusakiNo__c;
 private $ccus_Birth__c;
 private $ccus_TantouName_LastName__c;
 private $ccus_TantouName_FirstName__c;
 private $ccus_TantouNameKana_LastName__c;
 private $ccus_TantouNameKana_FirstName__c;
 private $ccus_TantouRenrakusakiNo__c;
 private $ccus_TantouEmail__c;
 private $ccus_Question__c;

 function __construct($post){
  $this->ccus_Name_LastName__c=htmlspecialchars($post["ccus_Name_LastName__c"], ENT_QUOTES);
  $this->ccus_Name_FirstName__c=htmlspecialchars($post["ccus_Name_FirstName__c"], ENT_QUOTES);
  $this->ccus_NameKana_LastName__c=htmlspecialchars($post["ccus_NameKana_LastName__c"], ENT_QUOTES);
  $this->ccus_NameKana_FirstName__c=htmlspecialchars($post["ccus_NameKana_FirstName__c"], ENT_QUOTES);
  $this->ccus_RenrakusakiNo__c=htmlspecialchars($post["ccus_RenrakusakiNo__c"], ENT_QUOTES);
  $this->ccus_Birth__c=htmlspecialchars($post["ccus_Birth__c_year"].'/'.$post["ccus_Birth__c_month"].'/'.$post["ccus_Birth__c_day"], ENT_QUOTES);
  $this->ccus_TantouName_LastName__c=htmlspecialchars($post["ccus_TantouName_LastName__c"], ENT_QUOTES);
  $this->ccus_TantouName_FirstName__c=htmlspecialchars($post["ccus_TantouName_FirstName__c"], ENT_QUOTES);
  $this->ccus_TantouNameKana_LastName__c=htmlspecialchars($post["ccus_TantouNameKana_LastName__c"], ENT_QUOTES);
  $this->ccus_TantouNameKana_FirstName__c=htmlspecialchars($post["ccus_TantouNameKana_FirstName__c"], ENT_QUOTES);
  $this->ccus_TantouRenrakusakiNo__c=htmlspecialchars($post["ccus_TantouRenrakusakiNo__c"], ENT_QUOTES);
  $this->ccus_TantouEmail__c=htmlspecialchars($post["ccus_TantouEmail__c"], ENT_QUOTES);
  $this->ccus_Question__c=htmlspecialchars($post["ccus_Question__c"], ENT_QUOTES);
  
  var_dump($this);
 }
 
 // https://www.synergy-marketing.co.jp/cloud/synergylead/support/faq-salesforce-web-to-case-on-php/
 function web2case() {
  
 /* 本番 */
 $url = 'https://webto.salesforce.com/servlet/servlet.WebToCase?encoding=UTF-8';
 // Salesforceの組織ID
 $oid = '00D7F0000001NoF';
 $recordtypeID = '012BV0000004KXf';
  
 /* Sandbox */
  /*
 $url = 'https://d7f0000001nofuau--ccus.sandbox.my.salesforce.com/servlet/servlet.WebToCase?encoding=UTF-8';
 // Salesforceの組織ID
 $oid = '00DAz000000HHxJ';
 $recordtypeID = '012Az0000000r17';
*/
  $fields = array(

  // Salesforceへのパラメーター
  'orgid' => $oid,
  'retURL' => '',
  'recordType'=> $recordtypeID,
  'ccus_Name_LastName__c'=>$this->ccus_Name_LastName__c,
  'ccus_Name_FirstName__c'=>$this->ccus_Name_FirstName__c,
  'ccus_NameKana_LastName__c'=>$this->ccus_NameKana_LastName__c,
  'ccus_NameKana_FirstName__c'=>$this->ccus_NameKana_FirstName__c,
  'ccus_RenrakusakiNo__c'=>$this->ccus_RenrakusakiNo__c,
  'ccus_Birth__c'=>$this->ccus_Birth__c,
  'ccus_TantouName_LastName__c'=>$this->ccus_TantouName_LastName__c,
  'ccus_TantouName_FirstName__c'=>$this->ccus_TantouName_FirstName__c,
  'ccus_TantouNameKana_LastName__c'=>$this->ccus_TantouNameKana_LastName__c,
  'ccus_TantouNameKana_FirstName__c'=>$this->ccus_TantouNameKana_FirstName__c,
  'ccus_TantouRenrakusakiNo__c'=>$this->ccus_TantouRenrakusakiNo__c,
  'ccus_TantouEmail__c'=>$this->ccus_TantouEmail__c,
  'ccus_Question__c'=>$this->ccus_Question__c,

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
