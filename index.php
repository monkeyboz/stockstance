<?php
    class stock{
        var $name = "";
        var $price = 0;
        var $average_change = 0;
        function __construct( $n,$p,$a ){
            $this->name = $n;
            $this->price = $p;
            $this->average_change = $a;
        }
        public function display(){
            echo $this->name." ".$this->price." ".$this->average_change;
        }
    }
    
    /*used to buy and sell based upon the changes in a stocks
     average frequency along with changes in the overall stock
     sector. Used to calculate changes for comparison and triggers
     */
    class frequencyCompiler{
        function __construct(){
             
        }
    }
    
    
    class comparison{
        var $stocks = array();
        function __construct($stock){
            $stockholder = explode(",",$stock);
            foreach($stockholder as $k=>$s){
            $sI = explode(":",$s);
                 $this->stocks[$k] = new stock($sI[0],$sI[1],$sI[2]);
            }
        }
        public function showStock($i){
           $this->stocks[$i]->display();
        }
    }
    
    $testing = new comparison("test:8.453:-2","AEG:4.332:2");
    $testing->showStock(0);
    
?>