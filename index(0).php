<?php
   include_once('stock.php');
   $stock = new stock('yahoo');
?>
<style>
    body{
       margin: 0px;
    }
    h1{
       margin: 0px;
       margin-bottom: 10px;
    }
    #mainHolder{
       width: 100%;
       background: #efefef;
       padding: 5px;
    }
    .rowTop{
       background: #000;
       border: #efefef solid 1px;
       padding: 5px;
    }.rowTop.cell{
       width: 33%;
       float: left;
       border: #000 solid 1px;
    }
    .rowData{
       background: #fff;
       padding: 5px;
    }.rowData.cell{
       width: 33%;
       float: left;
       border: #000 solid 1px;
    }
</style>
<div id='mainHolder'>
    <h1>Stock Stance</h1>
    <div class='rowTop'>
        <div class='cell'>testing</div>
        <div class='cell'>testing</div>
        <div class='cell'></div>
    </div>
    <div class='rowData'>
        <div class='cell'></div>
        <div class='cell'></div>
        <div class='cell'></div>
    </div>
</div>