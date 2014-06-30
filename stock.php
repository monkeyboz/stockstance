<?php

class stock{
   var $conn;
   var $url = 'http://d.yimg.com/autoc.finance.yahoo.com/autoc?query=[ticker]&callback=YAHOO.Finance.SymbolSuggest.ssCallback&format=json';
   var $priceurl = 'http://finance.google.com/finance/info?client=ig&q=[stock]:[symbol]';
   var $historical = "http://www.google.com/finance/historical?q=NASDAQ:AAPL&authuser=0&output=json";
   function __construct($ticker){
      
      $this->url = str_replace('[ticker]',$ticker,$this->url);
      
      $sinfo = $this->curlcall($this->url);
      $sinfo = str_replace('YAHOO.Finance.SymbolSuggest.ssCallback(','',str_replace(')','',$sinfo));
      $sjson = json_decode($sinfo,true);
      //print '<pre>'.print_r($sjson,true).'</pre>';
      
      $this->parsetickers($sjson);
      
      //echo $this->priceurl;
      //print_r($sprice);
   }
   
   private function curlcall($url){
      echo 'getting info: ';
      echo $url;
      $ch = curl_init();
      curl_setopt($ch,CURLOPT_URL,$url);
      curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
      $s = curl_exec($ch);
      curl_close($ch);
      
      echo '<br/>';
      return $s;
   }
   
   private function parsetickers($json){
if(isset($json['ResultSet']['Result'])){ 
  foreach($json['ResultSet']['Result'] as $f){
          $priceurl = $this->priceurl;
          $priceurl = str_replace('[stock]',$f['exch'],$priceurl);
          $priceurl = str_replace('[symbol]',$f['symbol'],$priceurl);
          
          $sprice = $this->curlcall($priceurl);
          $sprice = json_decode(str_replace('//','',$sprice),true);
          print_r($sprice);
          $this->
       }}
       return ;
   }
   
   private function conn(){
      $this->conn = mysql_connect('localhost','root','ntisman1');
      mysql_select_db('stockstance');
   }
   
   private function close(){
      mysql_close($this->conn);
   }
   
   function storestock($name,$ticker,$price,$time,$market){
       $this->conn();
       $result = mysql_query('Select ticker from stocks where ticker='.$ticker.' limit 0,1');
       $r = mysql_fetch_assoc($result);
       
       if(sizeof($r)<1){
          mysql_query('Insert into stocks () values()');
       } else {
          mysql_query();
       }
       $this->close();
   }
}
?>