// JavaScript Document

function filter_syobunrui($index){
 $daibunruiname = 'ccus_Syokusyu'+$index+'Daibunrui__c';
 $syobunruiname = 'ccus_Syokusyu'+$index+'Syobunrui__c';
 $daibunrui_sel = $('select[name="'+$daibunruiname+'"]').val();
 
 
 $('select[name="'+$syobunruiname+'"] option').hide();
 $('select[name="'+$syobunruiname+'"] option.'+$daibunrui_sel).show();
}
