<!DOCTYPE.html>
<html>
    <head>
        <style>
        .rect{
            width:20%;
            border:3px solid #000;
           margin-left:40%;
            border-radius:10px;
        }
        .a{
            margin-left:47%;
        }
        #div3{
            background: rgb(78, 71, 1);
            width: 0px;
            
            position: relative;
            -webkit-transition-width:2s;
            transition:width 2s;
            transition-timing-function:linear;
            border-radius:10px;


        }
        #div4{
            background: rgb(78, 71, 1);
            width: 0px;
            border-radius:10px;
            position: relative;
            -webkit-transition-width:2s;
            transition:width 2s;
            transition-timing-function:linear;
        }
        #div5{
            background: rgb(78, 71, 1);
            width: 0px;
            border-radius:10px;
            position: relative;
            -webkit-transition-width:2s;
            transition:width 2s;
            transition-timing-function:linear;
        }
        #div6{
            background: rgb(78, 71, 1);
            width: 0px;
            border-radius:10px;
            position: relative;
            -webkit-transition-width:2s;
            transition:width 2s;
            transition-timing-function:linear;
        }
        .rect:hover>#div3{
             width:71.1%;    
        }
        .rect:hover>#div4{
             width:75.6%;    
        }
        .rect:hover>#div5{
             width:73.1%;    
        }
        .rect:hover>#div6{
             width:88.1%;    
        }

        .about{
            background: rgb(14, 207, 198);
        }
        table{
            width:100%;
            margin:0px;
            border-collapse: collapse;
            padding:0px;
            border: 5px solid rgb(219, 14, 209);
        }
    td{
        padding: 10px;
    }
      /*  .main{
	position:auto;
	top:25%;
	margin-top:11%;
    align-content:center;
        
        background: rgb(14, 207, 198);
        width:33%;
     margin-bottom:20px auto 0px;
     margin-right:20px auto 0px;
     margin-left:20px auto 0px;
      width:100%;
      height:65%;
      border-radius:10px;


    border-radius=10px;

}*/
        </style>
        <title>
                abhijit
        </title>
    </head>
    <body>
	<?php
	include 'temp.php';
	?>
	<div class="main">
            <div class="a">
                SEM I
</div>
       <div class="rect">
            <div id="div3">
                7.11
            </div>
        </div>
        <div class="a">
        SEM II
        </div>
<div class="rect">
     <div id="div4">
         7.56
     </div>
 </div>
 <div class="a">
 SEM III
 </div>
<div class="rect">
     <div id="div5">
         7.31
     </div>
 </div>
<div class="a">
SEM IV
</div>
<div class="rect">
     <div id="div6">
         8.81
     </div>
 </div>
</div>
    </body>
</html>