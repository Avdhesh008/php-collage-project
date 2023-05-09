<!DOCTYPE html>
<html lang="en">
  <head>
  <?php
    $path=url('');
    $url=$path.'/public/img/';
    $logo=$url.($data->company_type=='Reports N Market'?'logo.png':'logo-ir.png');
    $sort=$data->company_type=='Reports N Market'?'(RNM)':'(RI)';
    $chart=$path.'/public/chart/';
    ?>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
    <title></title>
    <style>
      .kkls {
        clear: both;
        margin-top: 100px !important;
        display: flex;
        align-items: center;
        justify-content: center;
        align-content: center;
      }

      .col-md-4 {
        display: inline;
      }

      .button2.mt-3 {
        clear: both;
      }

      .button.mt-3 {
        clear: both;
      }

      .main_grf.row {
        width: 100% !important;
        margin-top: 50px !important;
      }

      button.manu_y {
        clear: both;
      }

      .rajuk {
        width: 500px !important;
        float: left;
      }

      .rajuk2 {
        width: 500px !important;
        float: right;
      }

      nagpur {
        clear: both;
      }

      .fkl33 {
        float: right;
        width: 45% !important;
      }

      .fkl22 {
        float: left;
        width: 45% !important;
        margin-left: 3%;
      }

      .nagpur {
        clear: both;
      }

      .mcon {
        display: inline-block;
      }

      .dono {
        clear: both;
      }

      .button_p.mt-5 {
        clear: both;
      }

      .button_m {
        clear: both;
      }

      img.roma {
        clear: both;
      }

      div#fir_chang {
        clear: both;
      }

      .ikka2 p.goaanama {
        text-align: center;
      }

      .ikka1 p {
        text-align: center;
      }

      .jagguY {
        position: absolute;
        left: -5;
        top: 50px;
      }

      button.manu_y {
        margin-top: 290px;
      }

      .grofe {
        text-align: center;
        width: 100%;
        margin: auto;
        clear: both;
      }

      .grofe .main-bar {
        width: 880px;
        margin: auto;
        background: red !important;
        clear: both;
      }

      .kasmir {
        clear: both;
        padding-top: 30px !important;
      }

      .kasmir .ikka1 {
        float: left;
        position: relative;
        width: 45%;
      }

      .ikka2 {
        float: right;
        width: 45%;
        position: relative;
      }

      .ikka2 p {
        background: #9ED3F9;
        padding: 20px 0px;
        text-align: center;
        width: 100%;
      }

      .ikka1 p {
        background: #9ED3F9;
        padding: 20px 0px;
        text-align: center;
        width: 100%;
      }

      .lembo {
        width: 95%;
      }

      .lembo {
        text-align: center;
      }

      .lembo {
        clear: both;
      }

      .ikka1 .lembo {
        float: left;
      }

      .ikka2 .lembo {
        float: right;
      }

      .copyeeeeee {
        background: #9ED3F9;
        padding: 20px;
      }

      .goaanama {
        position: absolute;
        right: 0px;
        bottom: 50px;
         background: red;
        width: 100%;
      }

      .ikka1 p {
        background: #9ED3F9;
        padding: 20px;
        text-align: center;
        width: 100%;
        left: 0px;
        bottom: 300px;
        width: 100% !important;
      }

      .kasmir .ikka1 {
        position: relative !important;
      }

      .kasmir .ikka1 p {
        text-align: center !important;
      }

      #hemantha {
        clear: both;
      }

      .max_proi {
        padding: 0px 18px;
      }

      .max_proi .pie-chart {
        background: radial-gradient(circle closest-side, white 0, white 45.72%, transparent 27.72%, transparent 84%, white 0), conic-gradient(from 180deg, #4e79a7 0, #4e79a7 38%, #f28e2c 0, #f28e2c 61%, #e15759 0, #e15759 77%, #76b7b2 0, #76b7b2 87%, #59a14f 0, #59a14f 93%, #edc949 0, #edc949 100%);
        position: relative;
        width: 500px;
        min-height: 350px;
        margin: 0;
        outline: 1px solid #ccc;
      }

      .max_proi .pie-chart h2 {
        position: absolute;
        margin: 1rem;
      }

      .max_proi .pie-chart cite {
        position: absolute;
        bottom: 0;
        font-size: 80%;
        padding: 1rem;
        color: gray;
      }

      .max_proi .pie-chart figcaption {
        position: absolute;
        bottom: 9em;
        right: -1em;
        font-size: smaller;
        text-align: right;
      }

      .max_proi .pie-chart span:after {
        display: inline-block;
        content: "";
        width: 2.8em;
        height: 0.8em;
        margin-left: 0.4em;
        height: 0.8em;
        border-radius: 0.2em;
        background: currentColor;
      }

      .rajaki {
        display: flex;
      }

      .rajaki p {
        margin-left: 20px;
        margin-bottom: 0px;
      }

      .max_proi figure.pie-chart {
        margin-top: 30px;
        border: none !important;
        outline: none !important;
      }

      * {
        margin: 0;
        /* padding: 0; */
        box-sizing: border-box;
      }

      .main_div_s .contant {
        margin-top: 300px !important;
      }

      section {
        background: white;
        height: 100% !important;
        overflow: hidden;
        width: 100% !important;
        margin: auto;
        margin-bottom: 0px !important;
      }

      .jagguY {
        width: 120px;
        flex-direction: column;
        margin-top: 235px;
        font-size: 14px;
        margin-left: 60px;
        font-weight: 700;
      }

      .jagguY span {
        display: block;
        margin: 15px 0px;
        padding: 5px 0px;
        color: #161615;
      }

      .dava {
        display: flex;
        margin-left: 39px;
      }

      div#soda {
        margin-left: 0px;
        margin-top: -2px;
      }

      div#jindgi tr {
        text-align: center;
      }

      .dava span {
        font-size: 12px;
        margin-left: 17px;
        margin-top: -7px;
      }

      .button_p button.go {
        border: groove;
        background: #2e90ce;
        padding: 20px 20px;
        width: 95%;
        color: white;
        font-size: 50px;
        font-weight: 800;
        text-transform: uppercase;
        outline: none;
        border: 2px groove #f3eded !important;
      }

      .main_grf.row div#ok {
        margin: 0;
        padding: 0;
        background: transparent;
        margin-top: 50px;
        border: none;
      }

      .lembo {
        background: #9ed3f9;
        padding: 30px;
        margin-top: 5px;
        border-radius: 20px;
      }

      h2 {
        font-weight: 700;
        color: #000000;
      }

      .main_div_s {
        height: 100%;
        width: 100%;
        background-size: 100% 100% !important;
        background-repeat: no-repeat !important;
        background-position: center;
        background: url("<?=$url.'um.png'?>");
        color: #1f497d !important;
        display: flex;
        align-items: center;
        justify-content: center;
        align-content: center;
      }

      .right img {
        width: 150px !important;
      }

      .main_div_s h1 {
        font-family: auto;
        font-weight: 800;
        font-size: 45px;
        margin-bottom: 50px;
        text-transform: capitalize;
      }

      .main_div_s p {
        font-family: auto;
        font-size: 25px;
        font-weight: 600;
      }

      .main_div_s h2 {
        color: #1f497d;
        font-family: auto;
        font-size: 40px;
        font-weight: 700;
      }

      .contant {
        text-align: right;
        padding-right: 30px;
      }

      .my_f .right {
        float: right;
      }

      .my_f .left {
        float: left;
        margin-top: 20px;
        text-transform: uppercase;
      }

      .hero_contant p.pr-5.mt-5 {
        margin-top: 20px;
      }

      .hero_contant p {
        text-align: justify;
        clear: both;
        font-weight: 600;
      }

      .DIV_IMG {
        clear: both;
        margin-top: 20px;
      }

      .my_f {
        justify-content: space-between;
        margin-top: 30px;
        align-items: center;
      }

      section.hero_contant {
        position: relative;
      }

      .manu_y {
        background: transparent;
        border: none;
        color: white;
        font-weight: 700;
        font-size: 20px;
        text-transform: uppercase;
        letter-spacing: 1px;
      }

      .hero_contant p {
        text-align: justify;
        font-weight: 600;
      }

      .copy {
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translate(-50%);
        color: #5a6481 !important;
      }

      img {
        width: 100%;
      }

      section {
        position: relative;
      }

      .mg {
        padding: 0px 30px;
      }

      .main_item {
        border: 4px solid #272727;
        width: 235px;
        height: 160px;
        padding: 10px;
        border-radius: 30px;
        margin-left: 85px;
        margin-bottom: 30px;
        text-align: center;
        font-weight: 600;
      }

      div#ok p {
        color: #404040;
        text-align: center;
        margin: auto;
        display: block;
        width: 100%;
        font-weight: 700 !important;
        font-size: 21px !important;
      }

      .main_item h3 {
        font-weight: 700;
      }

      .item {
        position: relative;
        display: inline-block !important;
      }

      body {
        overflow-x: hidden;
      }

      .DIV_IMG {
        margin-top: 30px;
      }

      .main_item p {
        font-size: 12px;
      }

      .rotet {
        position: absolute;
        transform: rotate(-180deg);
        left: -30px;
        top: 75px;
        text-align: center;
        width: 221px !;
      }

      .mgandi button {
    background: transparent !important;
    width: 90%;
    margin: 12px auto !important;
    margin-left: 80px !important;
    border: none !important;
    box-shadow: none !important;
}




.button_dis.mgandi button.go {
    border: none !important;
}



div#fir_chang button.go {
    border: none !important;
}


div#fir_chang button.go {
    margin-top: 30px !important;
    box-shadow: none !important;
}

      .rotet span {
        padding: 10px;
        transform: rotate(90deg);
        display: block;
        width: 125px !important;
        border-radius: 10px 10px 0px 0px;
        background: #001f5f;
        color: white;
        font-size: 13px;
        font-weight: 500;
      }

      .mg i {
        margin-right: 10px;
      }

      .button_list-2 ul {
        list-style: square;
        margin-left: 21px;
        margin-top: 30px;
        color: #2e2521 !important;
      }

      .button_list-2 ul a {
        /* color: black; */
        font-size: 18px;
        color: #212521;
        font-weight: 500;
        text-transform: capitalize;
      }

      .row2 {
        display: flex;
      }

      button.By_Technology {
        background: #1a4671;
        color: white;
        padding: 10px 20px;
        font-size: 18px;
        text-transform: capitalize;
        font-weight: 700;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        /* box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px; */
        border: none;
        outline: none;
        width: 100%;
      }

      .button {
        width: 60%;
      }

      a {
        text-decoration: none !important;
      }

      .mcon a {
        font-size: 12px;
      }

      .button_list {
        margin: 30px 0px;
        width: max-content;
        padding: 20px;
        text-transform: capitalize;
      }

      .button_list ul {
        list-style: none;
      }

      .button_list ul li {
        padding: 5px 0px;
      }

      .button_list ul li a {
        font-size: 18px;
        color: #212521;
        font-weight: 500;
      }

      .Geography_contant {
        display: inline-flex;
        flex-wrap: wrap;
      }

      .mcon label {
        font-size: 14px;
        font-weight: 700;
      }

      .mcon ul {
        list-style: none;
      }

      .mcon ul li a {
        /* font-size: 18px; */
        color: #212521;
        font-weight: 500;
      }

      .Geography_contant .mcon {
    margin-right: 20px;
    display: inline-block;
    height: 200px;
}

      a {
        text-decoration: none;
      }

      body {
        /* padding: 0px 200px; */
        background: #ddd;
      }

      .button_list-2 ol {
        margin-left: 21px;
        color: #2e2521 !important;
      }

      .list123 {
        margin-top: 30px;
      }

      .button_list-2 ol a {
        /* color: black; */
        font-size: 18px;
        color: #212521;
        font-weight: 500;
        text-transform: capitalize;
      }

      .button_list-2.list123 label {
        font-size: 18px;
        font-weight: 700;
        text-transform: uppercase;
      }

      button#salu {
        border: none !important;
        background: transparent;
        box-shadow: none;
      }

      div#kalu {
        margin-top: 10px;
      }

      .chart {
        display: table;
        table-layout: fixed;
        width: 100%;
        max-width: 1000px;
        height: 200px;
        margin: 0 auto;
        background-image: linear-gradient(bottom, rgba(0, 0, 0, 0.1) 2%, transparent 2%);
        background-size: 100% 50px;
        background-position: left top;
      }

      ul#mnbv span {
        border: 1px solid white;
      }

      .chart li {
        position: relative;
        display: table-cell;
        vertical-align: bottom;
        height: 200px;
      }

      .chart span {
        margin: 0 1em;
        display: block;
        background: #042e60;
        animation: draw 1s ease-in-out;
      }

      .chart span:before {
        position: absolute;
        left: 0;
        right: 0;
        top: 100%;
        padding: 5px 1em 0;
        display: block;
        text-align: center;
        content: attr(title);
        word-wrap: break-word;
      }

      @keyframes draw {
        0% {
          height: 0;
        }
      }

      button.go {
        border: groove;
        background: #404040;
        padding: 11px 20px;
        width: 100%;
        color: #c7c7c7;
        font-size: 16px;
        font-weight: 800;
        text-transform: uppercase;
        outline: none;
        border: 2px groove #f3eded !important;
      }

      .button_gh button.go {
        background: #8291a4;
        color: white;
        padding: 5px 20px;
        margin-top: 36px;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
        font-weight: 700;
      }

      .button_m {
        margin-top: 20px;
      }

      button.manu_yww {
        background: transparent;
        border: none;
        color: #ddd;
      }

      div#ok {
        background: #bfbfbf;
        height: 300px;
        margin-left: 30px;
        padding: 0px 20px;
        border: 1px solid #bebebe;
        margin-top: 30px;
      }

      ul#mnbv span {
        font-size: 10px;
      }

      .mamu_carkal {
        width: 100%;
        align-items: center;
        justify-content: center;
        align-content: center;
      }

      body {
        font-family: arial;
      }

      .mt-3.nagpur {
    margin-right: 30px !important;
}
.button_gh {
    padding: 0px 35px !important;
}

button.By_Technology {
    margin-right: 30px !important;
   display: block;
    width: 95% !important;
    margin-top: 40px !important;
}

      .pie-chartone {
        background: radial-gradient(circle closest-side, transparent 90%, #0a304a 0), conic-gradient(#0948b3 0, #0948b3 72.7%, #ee5050 0, #ee5050 90.9%, #05a677 0, #05a677 100%);
        /* position: relative; */
        margin: auto;
        width: 92%;
        min-height: 500px;
        margin: 0;
        /* outline: 1px solid #ccc; */
      }

      .pie-chartone h1 {
        position: absolute;
        margin-top: -30px;
        margin-left: 1rem;
      }

      .pie-chartone h3 {
        position: absolute;
        top: 1em;
        right: 1em;
        font-size: smaller;
        text-align: right;
        font-weight: 400;
      }

      div#rahul .pie-chart {
        background: radial-gradient(circle closest-side, white 0, transparent -2.28%, transparent 27.72%, transparent 84%, white 0), conic-gradient(from 180deg, #4e79a7 0, #4e79a7 38%, #f28e2c 0, #f28e2c 61%, #e15759 0, #e15759 77%, #76b7b2 0, #76b7b2 87%, #59a14f 0, #59a14f 93%, #edc949 0, #edc949 100%);
        position: relative;
        width: 500px;
        min-height: 350px;
        margin: 0;
        outline: 1px solid #ccc;
      }

      .pie-chartone span:after {
        display: inline-block;
        content: "";
        width: 0.8em;
        height: 0.8em;
        margin-left: 0.4em;
        height: 0.8em;
        border-radius: 5px;
        background: currentColor;
      }

      .mamu_carkal {
        width: 100%;
      }

      .button_dis {
        margin: 30px 0px;
      }

      .button_dis button.go {
        background: #042349;
        border-radius: 10px;
      }

      div#fir_chang button.go {
        background: #042349;
      }

      .mast_table {
        margin: 0px 30px;
      }

      .mast_table thead tr {
        background: #042349;
        color: white;
        border-bottom: 3px solid #ffffff !important;
        padding: 0px 10px !important;
      }

      .mast_table tbody tr {
        background: #cccdd2;
      }

      th,
      td {
        padding: 5px 10px !important;
      }

      div#jindgi tbody tr {
        background: #245d8b;
        color: white;
      }

      div#jindgi th,
      div#jindgi td {
        padding: 10px 10px !important;
      }

      .table-striped tbody tr:nth-of-type(odd) {
        background-color: #527fa4 !important;
      }

      div#jindgi thead tr {
        border: none !important;
        background: #245d8b;
      }

      .life_T {
        background: #9ed3f9;
        margin: 6px 30px;
        padding: 20px;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        align-content: center;
        color: white;
      }
      .col-6-r {
    width: 45%;
    
}

.col-6-l {
    width: 45%;
    float: right;
    margin-bottom: 10%;
}
.row-mainchart {float: none;}
.col-6-l-1 {
    width: 25%;
    float:left;
}

.col-6-r-1 {
    width: 25%;
    float: right;
}


button#jjjkkggffdd {
    background: transparent;
    padding: 0px;
    /* color: black; */
    /* margin-top: 30px; */
    width: 100%;
    margin: auto;
    margin-top: 30px;
    box-shadow: none;
}


.Geography_contant .mcon a {
    display: block !important;
    color: black !important;
}



.col-6-l.hgffffffffffff {
    width: 30%;
    position: relative;
}

.col-6-r.hgffffffffffff {
    width: 30%;
    position: relative;
}

.col-6-l.hgffffffffffff {
    padding-right: 100px;
}


.qsdhklojjhhhhhh .wllkkjjjhhjd{

  left: 350px !important;
}

.color_uu1 {
    background: #4472C3;
    width: 30px;
    height: 12px;
 
    left: -102px;
    top: 28px;
}

.wllkkjjjhhjd span {
    
    margin-bottom: 10px;
    display: block;
}

.wllkkjjjhhjd {
    position: absolute;
    left: 310px;
    top: 130px;
    text-transform: capitalize;
}


.color_25{
 
  background: navy !important;
}
.color_24
{
  background-color: #4472c3 !important;
}

.color_23{
  background: #A3A3A3 !important;
}


.color_21{
  background: #FFBF00 !important;
}

.color_22{
  background: #91CF50 !important;
  
}

.color_26{
  background:#EB7C30 !important;
}
.lal button {   
    text-transform: capitalize;
}
.mk1 {   
    text-transform: capitalize;
}
.mk2 {
  text-transform: capitalize;
}
.table {
    text-transform: capitalize;
}
.titlecompany {
    position: absolute;
    right: 20%;
    top: 52%;
    font-weight: 900;
    font-size: 20px;
    text-transform: capitalize;
}
    </style>
  </head>
  <body>
 <section class="hero">
      <div class="main_div_s">
        <div class="row" style="width: 100%;">
          <div class="col-md-12">
          <div class="my_f">
          <div></div>
          <div class="right">
            <img src="<?=$logo?>" alt="" width="150px"  style="margin-right:10px" />
          </div>
        </div>
            <div class="contant">
              <h1>Global <?=$data->company_name?> Market</h1>
              <p> Industry Value, Size, Share, Growth, Competition, <br /> Trends, Outlook, and Forecasts, </p>
              <h2><?=$data->start_year?> – <?=$data->end_year?></h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="hero_contant">
      <div class="mg">
        <div class="my_f">
          <div class="left">
            <h2>ABOUT OUR COMPANY</h2>
          </div>
          <div class="right">
            <img src="<?=$logo?>" alt="" width="150px" />
          </div>
        </div>
        <p class="pr-5 mt-5"><?=$data->company_type.' '.$sort?>  is a research firm providing research reports on various industries with a unique combination of</p>
        <p class="pr-5"> authenticity, extensive research, and infallibility. We offer reliable objective insights covering growth industries with unparalleled proficiency in wide range of products and services. We follow global approach covering the entire world and have clients from almost every country. </p>
        <p class="pr-5">RNM analysts are subject matter experts and possess expertise in varied domains. Our in-house data base is updated regularly</p>
        <p class="pr-5"> and we source data from extremely reliable sources. Our rigorous and proven research methodology help us to derive reliable and actionable insights. RNM can help you make informed business decisions and thus assist you in taking the right path. We offer product and country level breakdown for all our research reports. </p>
      </div>
      <div class="copy">
        <p>
          <small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
        </p>
      </div>
    </section>
    <section class="div_same_2">
      <div class="mg">
        <div class="my_f">
          <div class="left">
            <h2>INDUSTRY VERTICALS WE SERVE</h2>
          </div>
          <div class="right">
            <img src="<?=$logo?>" alt="" width="150px" />
          </div>
        </div>
        <div class="DIV_IMG">
          <img src="<?=$url.'wwwwwwwwwwww.png'?>" alt="" />
        </div>
      </div>
      <div class="copy">
        <p>
          <small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
        </p>
      </div>
    </section>
<section class="dibba"> <div class="mg"> <div class="my_f"> <div class="left"> <h2>BENCHMARKING & KEY DATA POINTERS COVERED</h2> </div><div class="right"> <img src="<?=$logo?>" alt="" width="150px"/> </div></div><br> <br> <div class="row mt-5 kkls"> <div class="col-md-4"> <div class="item"> <div class="rotet"> <span>DATA POINTS</span> </div><div class="main_item"> <h3>2100+</h3> <p>Exhaustive coverage of data points including segments and subsegments; we offer the most detailed dissection of the market.</p></div></div></div><div class="col-md-4"> <div class="item"> <div class="rotet"> <span>DATA POINTS</span> </div><div class="main_item"> <h3>2100+</h3> <p>Exhaustive coverage of data points including segments and subsegments; we offer the most detailed dissection of the market.</p></div></div></div><div class="col-md-4"> <div class="item"> <div class="rotet"> <span>DATA POINTS</span> </div><div class="main_item"> <h3>2100+</h3> <p>Exhaustive coverage of data points including segments and subsegments; we offer the most detailed dissection of the market.</p></div></div></div><div class="col-md-4"> <div class="item"> <div class="rotet"> <span>DATA POINTS</span> </div><div class="main_item"> <h3>2100+</h3> <p>Exhaustive coverage of data points including segments and subsegments; we offer the most detailed dissection of the market.</p></div></div></div><div class="col-md-4"> <div class="item"> <div class="rotet"> <span>DATA POINTS</span> </div><div class="main_item"> <h3>2100+</h3> <p>Exhaustive coverage of data points including segments and subsegments; we offer the most detailed dissection of the market.</p></div></div></div><div class="col-md-4"> <div class="item"> <div class="rotet"> <span>DATA POINTS</span> </div><div class="main_item"> <h3>2100+</h3> <p>Exhaustive coverage of data points including segments and subsegments; we offer the most detailed dissection of the market.</p></div></div></div></div></div><div class="copy"> <p><small>Copyright © | All Rights Reserved by <?=$data->company_type?></small></p></div></section>
     <section class="hero_contant">
      <div class="mg">
        <div class="my_f">
          <div class="left">
            <h2>REPORT SCOPE AND MARKET SEGMENTATION</h2>
          </div>
          <div class="right">
            <img src="<?=$logo?>" alt="" width="150px" />
          </div>
        </div>
        <p>
          <i class="fa fa-angle-double-right" aria-hidden="true"></i> The report scope encompasses key stakeholders in the value chain of the “Global & Regional <?=ucwords($data->company_name)?> Market”
        </p>
        <p>
          <i class="fa fa-angle-double-right" aria-hidden="true"></i> The report comprises of the detailed analysis of the Global <?=ucwords($data->company_name)?> Market by Geography.
        </p>
        <p>
          <i class="fa fa-angle-double-right" aria-hidden="true"></i> Competitive analysis of key players in <?=ucwords($data->company_name)?> Market
        </p>
        <p>
          <i class="fa fa-angle-double-right" aria-hidden="true"></i> The report comprises of the detailed analysis of the Global <?=ucwords($data->company_name)?> Market. It also comprises statistically refined forecasts, further broken down
        </p>
        <p>
          <i class="fa fa-angle-double-right" aria-hidden="true"></i> These are gathered based on the :
        </p>
        <p>
          <i class="fa fa-circle" aria-hidden="true"></i>Supply-Demand Outlook
        </p>
        <p>
          <i class="fa fa-circle" aria-hidden="true"></i>Industry Demand
        </p>
        <p>
          <i class="fa fa-circle" aria-hidden="true"></i>Key Competitor Information
        </p>
        <p>
          <i class="fa fa-circle" aria-hidden="true"></i>Databases, associations, white paper research, outlooks, primary and secondary resources
        </p>
      </div>
      <div class="copy">
        <p>
          <small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
        </p>
      </div>
    </section> 
    <?php foreach($data->segment as $segment_data){ ?>
  <section class=hero_contant>
      <div class=mg>
        <div class=my_f>
          <div class=left>
            <h2>REPORT SCOPE AND MARKET SEGMENTATION</h2>
          </div>
          <div class=right>
            <img alt="" src=<?=$logo?> width=150px>
          </div>
        </div>
        <br>
        <br>
        <div class="button mt-3">
          <button class=By_Technology><?=$segment_data->market_segment?></button>
        </div>
        <div class=button_list >
          <ul>
            <?php foreach($segment_data->segment_type as $seg_type){ ?>
            <li>
              <a href="#"><?=$seg_type->segment_type?></a>
              <ul>
              <?php foreach($seg_type->segment_subtype as $seg_subtype){ ?>
                <li><?=$seg_subtype->segment_subtype?>
                    
                    </li>
                <?php } ?>
              </ul>
            </li>
            <?php } ?>
            
          </ul>
        </div>
      </div>
      <div class=copy>
        <p>
          <small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
      </div>
    </section>
    <?php } ?>
<section class="hero_contant" id="madhab" style="background: url(https://techramindra.com/report/public/img/jiro.png);
    background-repeat: no-repeat;
    background-size: 100%;
    background-color: #FFFFFF;">
      <div class="mg">
        <div class="my_f">
          <div class="left">
            <h2>REPORT SCOPE AND MARKET SEGMENTATION</h2>
          </div>
          <div class="right">
       
          </div>
        </div>
        <br>
        <br>
        <div class="button2 mt-3">
          <button class="By_Technology" id="jjjkkggffdd">By Geography</button>
        </div>
        <br>
        <br>
        <div class="row" id="hemantha">
          <div class="col-md-6 mt-5 fkl22">
            <div class="Geography_contant">
              <div class="mcon">
                <label for="">North America</label>
              
                
                    <a href="">U.S.</a>
                
                
                    <a href="">Canada</a>
                
              
                    <a href="">Mexico</a>
                
               
              </div>
              <div class="mcon">
                <label for="">South America</label>
            
                 
                    <a href="">Brazil</a>
                 
                 
                    <a href="">Argentina</a>
                 
                 
                    <a href="">Colombia</a>
                
                 
                    <a href="">Rest of South America</a>
                
              </div>
              <div class="mcon">
                <label for="">Europe</label>
              
                    <a href="">Germany</a>
                 
                    <a href="">U.K.</a>
                 
                    <a href="">France</a>
                 
                    <a href="">Italy</a>
                  
                    <a href="">Spain</a>
                 
                    <a href="">Russia</a>
                 
                    <a href="">Rest of Europe</a>
                 
              </div>
              <div class="row2">
                <div class="mcon">
                  <label for="">Middle East & Africa</label>
                 
                      <a href="">UAE</a>
                 
                      <a href="">Saudi Arabia</a>
                  
                      <a href="">Egypt</a>
                   
                      <a href="">South Africa</a>
                  
                      <a href="">Rest Of MEA</a>
                   
                      <a href="">Rest of South America</a>
                   
                </div>
                <div class="mcon">
                  <label for="">Asia Pacific</label>
                 
                      <a href="">China</a>
                  
                      <a href="">Japan</a>
                   
                      <a href="">India</a>
                   
                      <a href="">Australia</a>
                  
                      <a href="">South Korea</a>
                    
                      <a href="">ASEAN</a>
                   
                      <a href="">Rest of Asia Pacific</a>
                  
                </div>
              </div>
            </div>
          </div>
        
        </div>
      </div>
      <br>
      <br>
      <div class="copy">
        <p>
          <small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
        </p>
      </div>
    </section>
    <section class="hero_contant">
      <div class="mg">
        <div class="my_f">
          <div class="left">
            <h2>REPORT SCOPE AND MARKET SEGMENTATION</h2>
          </div>
          <div class="right">
            <img src="<?=$logo?>" alt="" width="150px" />
          </div>
        </div>
        <div class="mt-3 nagpur">
          <button class="By_Technology"> Some of the Players Operating – Reference <br /> (but not limited to) </button>
        </div>
        <div class="button_list-2">
          <ul>
            <?php foreach($data->Competition_index as $compin){ ?>
            <li>
              <a href="javascript:;"><?=$compin->company ?></a>
            </li>
            <?php } ?>
            
          </ul>
          <br />
          <br />
          <p> Note: In company profiles we will be providing number of employees, headquarters location, <br /> sales route, recent M&A activities, global strategic overview </p>
          <p> **Above-mentioned list is tentative and not exhaustive, meant only for representation purposes. The list of players to be profiled in the final report deliverable is entirely customizable and is provided exclusively as per our client’s requirements. </p>
        </div>
      </div>
      <div class="copy">
        <p>
          <small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
        </p>
      </div>
    </section>
    <section class="hero_contant">
    <br>
          <br>
         
      <div class="mg">
        <div class="mt-3">
         
          <button class="By_Technology">Table Of Content</button>
        </div>
        <div class="button_list-2 list123">
          <label for=""> 1. EXECUTIVE SUMMARY</label>
          <ol>
            <li>
              <a href="#"> Market Attractiveness Analysis</a>
            </li>
            <li>
              <a href="#">Global <?=$data->company_name?> Market, Historical Market Size & Future Projections Analysis </a>
            </li>
            <?php foreach($data->segment as $segment_data){ ?>
            <li>
              <a href="#">Global <?=$data->company_name?> Market, <?=$segment_data->market_segment ?></a>
            </li>
            <?php } ?>
         
            <li>
              <a href="">Global <?=$data->company_name?> Market, By Geography </a>
            </li>
          </ol>
        </div>
      </div>
      <div class="copy">
        <p>
          <small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
        </p>
      </div>
    </section>
    <section class="hero_contant">
      <div class="mg">
        <div class="row">
          <div class="col-6">
            <div class="button_list-2 list123">
              <label for=""> 2. MARKET INTRODUCTION</label>
              <ol>
                <li>
                  <a href=""> Definition</a>
                </li>
                <li>
                  <a href="">Scope of the Study </a>
                </li>
                <li>
                  <a href=""> Market Structure</a>
                </li>
                <li>
                  <a href="">Macro Factor Indicator Analysis </a>
                </li>
              </ol>
            </div>
          </div>
          <div class="col-6">
            <div class="button_list-2 list123">
              <label for=""> 3. RESEARCH METHODOLOGY</label>
              <ol>
                <li>
                  <a href="">Research Process</a>
                </li>
                <li>
                  <a href=""> Primary Research </a>
                </li>
                <li>
                  <a href=""> Secondary Research </a>
                </li>
                <li>
                  <a href="">Market Size Estimation </a>
                </li>
                <li>
                  <a href="">Forecast Model </a>
                </li>
                <li>
                  <a href=""> List of Assumptions </a>
                </li>
              </ol>
            </div>
          </div>
          <div class="col-6">
            <div class="button_list-2 list123">
              <label for=""> 4. MARKET DYNAMICS </label>
              <ol>
                <li>
                  <a href="">Introduction</a>
                </li>
                <li>
                  <a href="">Drivers </a>
                </li>
                <li>
                  <a href="">GRestraints</a>
                </li>
                <li>
                  <a href="">Opportunities </a>
                </li>
                <li>
                  <a href="">Challenges </a>
                </li>
                <li>
                  <a href=""> Covid 19 Impact Analysis </a>
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="copy">
        <p>
          <small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
        </p>
      </div>
    </section>
    <section class="hero_contant">
      <div class="mg">
        <div class="row">
          <div class="col-12">
            <div class="button_list-2 list123">
              <label for=""> 5.<?=$data->company_name?> MARKET ANALYSIS BY SEGMENT (STATE LEVEL ANALYSIS)</label>
              <ol>
                <li>
                  <a href="">Overview</a>
                </li>
                <li>
                  <a href=""><?=$data->company_name?> Historical Market size ($Million), (<?=$data->start_year?> – <?=$data->end_year?>) </a>
                </li>
                <li>
                  <a href=""> <?=$data->company_name?> Market size ($Million), and Forecasts (<?=$data->start_year?> – <?=$data->end_year?>)</a>

                </li>
                <?php foreach($data->segment as $segment_data){ ?>
                <li>
                  <a href=""><?=$data->company_name?> Market size ($Million), and Forecasts (<?=$data->start_year?> – <?=$data->end_year?>), <?=$segment_data->market_segment?> </a>
                
                  <ol>
                  <?php foreach($segment_data->segment_type as $seg_type){   ?>
                    <li>
                      <a href=""><?=$seg_type->segment_type?></a>
                            <ol>
                                <?php foreach($seg_type->segment_subtype as $seg_subtype){   ?>
                                    <li>
                                    <a href=""><?=$seg_subtype->segment_subtype?></a>
                                    </li>
                                <?php } ?>
                            </ol>
                    </li>
                    <?php } ?>
                  </ol>
                  
                </li>
                <?php } ?>
              
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="copy">
        <p>
          <small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
        </p>
      </div>
    </section>
    
    <section class="hero_contant">
      <div class="mg">
        <div class="row">
          <div class="col-12">
            <div class="button_list-2 list123">
              <ol start="6">
                <li>
                  <a href=""><?=$data->company_name?> Market size ($Million), and Forecasts (<?=$data->start_year?> – <?=$data->end_year?>), By Geography </a>
                  <ol>
                    <li>
                      <a href="">North America</a>
                    </li>
                    <li>
                      <a href=""> Asia Pacific</a>
                    </li>
                    <li>
                      <a href="">Europe</a>
                    </li>
                    <li>
                      <a href="">Rest of the World </a>
                    </li>
                  </ol>
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="copy">
        <p>
          <small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
        </p>
      </div>
    </section>
    <section class="hero_contant">
      <div class="mg">
        <div class="row">
          <div class="col-12">
            <div class="button_list-2 list123">
              <label for=""> 6.NORTH AMERICA <?=$data->company_name?> MARKET ANALYSIS</label>
              <ol>
                <li>
                  <a href="">Overview</a>
                </li>
                <li>
                  <a href="">North America <?=$data->company_name?> Historical Market size ($Million), (<?=$data->start_year?> – <?=$data->end_year?>) </a>
                </li>
                <li>
                  <a href=""> North America <?=$data->company_name?> Market size ($Million), and Forecasts (<?=$data->start_year?> – <?=$data->end_year?>)</a>
                </li>
                <li>
                  <a href="">North America <?=$data->company_name?> Market size ($Million), and Forecasts (<?=$data->start_year?> – <?=$data->end_year?>), By Country</a>
                  <ol>
                    <li>
                      <a href=""> United States</a>
                    </li>
                    <li>
                      <a href=""> Canada</a>
                    </li>
                    <li>
                      <a href=""> Mexico</a>
                    </li>
                  </ol>
                </li>
              </ol>
            </div>
            <div class="button_list-2 list123">
              <label for=""> 7. ASIA PACIFIC <?=$data->company_name?> MARKET ANALYSIS</label>
              <ol>
                <li>
                  <a href="">Overview</a>
                </li>
                <li>
                  <a href="">Asia Pacific <?=$data->company_name?> Historical Market size ($Million), (<?=$data->start_year?> – <?=$data->end_year?>)</a>
                </li>
                <li>
                  <a href=""> Asia Pacific <?=$data->company_name?> Market size ($Million), and Forecasts (<?=$data->start_year?> – <?=$data->end_year?>)</a>
                </li>
                <li>
                  <a href="">Asia Pacific <?=$data->company_name?> Market size ($Million), and Forecasts (<?=$data->start_year?> – <?=$data->end_year?>), By Country</a>
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="copy">
        <p>
          <small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
        </p>
      </div>
    </section>
    <section class="hero_contant">
      <div class="mg">
        <div class="row">
          <div class="col-12">
            <div class="button_list-2 list123">
              <label for=""> 7.EUROPE <?=$data->company_name?> MARKET ANALYSIS</label>
              <ol>
                <li>
                  <a href="">Overview</a>
                </li>
                <li>
                  <a href="">Europe <?=$data->company_name?> Historical Market size ($Million),(<?=$data->start_year?> – <?=$data->end_year?>) </a>
                </li>
                <li>
                  <a href="">Europe <?=$data->company_name?> Market size ($Million), and Forecasts (<?=$data->start_year?> – <?=$data->end_year?>)</a>
                </li>
                <li>
                  <a href="">Europe <?=$data->company_name?> Market size ($Million), and Forecasts (<?=$data->start_year?> – <?=$data->end_year?>), By Country</a>
                  <ol>
                    <li>
                      <a href=""> Germany</a>
                    </li>
                    <li>
                      <a href=""> France</a>
                    </li>
                    <li>
                      <a href=""> Italy</a>
                    </li>
                    <li>
                      <a href=""> Spain</a>
                    </li>
                    <li>
                      <a href=""> U.K. </a>
                    </li>
                    <li>
                      <a href=""> Rest of Europe</a>
                    </li>
                  </ol>
                </li>
              </ol>
            </div>
            <div class="button_list-2 list123">
              <label for=""> 8. REST OF THE WORLD <?=$data->company_name?> MARKET ANALYSIS</label>
              <ol>
                <li>
                  <a href="">Overview</a>
                </li>
                <li>
                  <a href="">Rest of the World <?=$data->company_name?> Historical Market size ($Million), (<?=$data->start_year?> – <?=$data->end_year?>)</a>
                </li>
                <li>
                  <a href=""> Rest of the World <?=$data->company_name?> Market size ($Million), and Forecasts (<?=$data->start_year?> – <?=$data->end_year?>)</a>
                </li>
                <li>
                  <a href="">Rest of the World <?=$data->company_name?> Market size ($Million), and Forecasts (<?=$data->start_year?> – <?=$data->end_year?>), By Country</a>
                  <ol>
                    <li>
                      <a href="">Latin America</a>
                    </li>
                    <li>
                      <a href="">Middle east</a>
                    </li>
                    <li>
                      <a href="">Africa</a>
                    </li>
                  </ol>
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="copy">
        <p>
          <small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
        </p>
      </div>
    </section>
    <section class="hero_contant">
      <div class="mg">
        <div class="my_f">
          <div class="left">
            <h2><?=$data->company_name?> MARKET – SNAPSHOT & OVERVIEW</h2>
          </div>
          <div class="right">
            <img src="<?=$logo?>" alt="" width="150px" />
          </div>
        </div>
      </div>
      <br>
      <img class="mt-3 dono" src="<?=$url.'rk.jpg'?>" alt="" />
      <div class="copy">
        <p>
          <small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
        </p>
      </div>
    </section>
    <section class="hero_contant" id="hero_o" style="background: url('<?=$url.'raviteja-19.jpg'?>'); background-size: 100%;">
    <div class="mg">
<div class="my_f">
<div class="left">
<h2></h2>
</div>
<div class="right">
<img src="<?=$logo?>" alt="" width="150px"/>
</div>
</div>
</div>
<div class="copy">
<p>
<small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
</p>
</div>
</section>
<section class="hero_contant" id="hero_o" style="background: url('<?=$url.'raviteja-20.jpg'?>'); background-size: 100%;">
<div class="mg">
<div class="my_f">
<div class="left">
<h2>DRIVERS, RESTRAINTS, OPPORTUNITIES & TRENDS 
<br> ASSESSMENT
</h2>
</div>
<div class="right">
<img src="<?=$logo?>" alt="" width="150px"/>
</div>
</div>
</div>
<div class="copy">
<p>
<small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
</p>
</div>
</section>
<section class="hero_contant" id="hero_o" style="background: url('<?=$url.'raviteja-21.jpg'?>'); background-size: 100%;">
<div class="mg">
<div class="my_f">
<div class="left">
<h2>DRIVERS, RESTRAINTS, OPPORTUNITIES & TRENDS ASSESSMENT</h2>
</div>
<div class="right">
<img src="<?=$logo?>" alt="" width="150px"/>
</div>
</div>
</div>
<div class="copy">
<p>
<small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
</p>
</div>
</section>
<section class="hero_contant" id="hero_o" style="background: url('<?=$url.'raviteja-22.jpg'?>'); background-size: 100% 100%;background-repeat: no-repeat;">
<div class="mg">
<div class="my_f">
<div class="left">
<h2>DRIVERS, RESTRAINTS, OPPORTUNITIES & TRENDS
<br> ASSESSMENT
</h2>
</div>
<div class="right">
<img src="<?=$logo?>" alt="" width="150px"/>
</div>
</div>
</div>
<div class="copy">
<p>
<small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
</p>
</div>
</section>
<section class="hero_contant" id="hero_o" style="background: url('<?=$url.'raviteja-23.jpg'?>'); background-size: 100% 100%;background-repeat: no-repeat;">
<div class="mg">
<div class="my_f">
<div class="left">
<h2>SWOT ANALYSIS <?=strtoupper($data->company_name)?> INDUSTRY</h2>
</div>
<div class="right">
<img src="<?=$logo?>" alt="" width="150px"/>
</div>
</div>
</div>
<div class="copy">
<p>
<small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
</p>
</div>
</section>
<section class="hero_contant" id="hero_o" style="background: url('<?=$url.'raviteja-24.jpg'?>'); background-size: 100% 100%; background-repeat: no-repeat;">
<div class="mg">
<div class="my_f">
<div class="left">
<h2>RUSSIA-UKRAINE WAR IMPACTS ANALYSIS</h2>
</div>
<div class="right">
<img src="<?=$logo?>" alt="" width="150px"/>
</div>
</div>
</div>
<div class="copy">
<p>
<small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
</p>
</div>
</section>
<section class="hero_contant" id="hero_o" style="background: url('<?=$url.'raviteja-25.jpg'?>'); background-size: 100% 100%;background-repeat: no-repeat;">
<div class="mg">
<div class="my_f">
<div class="left">
<h2>ANSOFF MATRIX</h2>
</div>
<div class="right">
<img src="<?=$logo?>" alt="" width="150px"/>
</div>
</div>
</div>
<div class="copy">
<p>
<small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
</p>
</div>
</section> 
 <section class="hero_contant" id="hero_o" style="padding-right: 10px;">
<style>.bar-block{width:30px;background-color:#fff}.bar-inner{float:left;margin-left:15px}.bar-outer{height:140px;width:30px;background-color:#042e60}.bar-title{margin-top:10px}.jjjggddd{margin-left:300px}</style>
<div class="mg">
<div class="my_f">
<div class="left">
<h2>GLOBAL <?=strtoupper($data->company_name)?> MARKET</h2>
</div>
<div class="right">
<img src="<?=$logo?>" alt="" width="150px">
</div>
</div>
</div>
<center>
<br>
<br>
<div class="button_m">
<button type="" class="go">Global <?=$data->company_name?> Market, (<?=$data->start_year?> – <?=$data->end_year?>)</button>
</div>
</center>
<div class="gujfgbdyufguygquyguy" style="margin-bottom: 10px;">
    <div class="jjjggddd">
        <?php //for($data->start_year;$data->start_year<=$data->end_year;$data->end_year++){ ?>
        <?php $k=$data->end_year- $data->start_year;
        $j=120; 
       $k=abs($k-10);
        for($i=$data->start_year;$i<=$data->end_year;$i++){ ?>
        <div class="bar-inner">
            <div class="bar-outer">
                <div class="bar-block" style="height:<?=$j?>px"></div>
            </div>
            <div class="bar-title"><?=$i?></div>
        </div>
        <?php $j=$j-10; } ?>
        
    </div>
</div>
<div class="kasmir">
<div class="ikka1">
<button type="" class="go">Market Size, (US$ Mn)</button>
<p>Content has been removed from the sample</p>
</div>
<div class="ikka2">
<button type="" class="go">Market Growth Rates Market Growth Rates</button>
<p class="goaanama" style="margin-bottom: 46%;">Content has been removed from the sample</p>
</div>
</div>
<div class="copy">
<p>
<small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
</p>
</div>
</section> 
<?php foreach($data->segment as $segment_data){ ?>
<section class="hero_contant" id="hero_o">
<div class="mg">
<div class="my_f">
<div class="left">
<h2></h2>
</div>
<div class="right">
<img src="<?=$logo?>" alt="" width="150px"/>
</div>
</div>
</div>
<br>
<br>
<center>
<br>
    <br>
        <div class="button_p mt-5">
            <button type="" class="go">Global <?=$data->company_name?> Markets, <?=$segment_data->market_segment?></button>
        </div>
    </center>
    <div class="copy">
        <p>
            <small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
        </p>
    </div>
</section>
<section class="main_loclal_class" style="background:url(https://techramindra.com/report/storage/app/reportnmarktes/20.png);background-repeat:no-repeat;background-size:100% 100%">
    <style>section.main_loclal_class{height:100vh;width:100%}.lal{padding-top:55px;color:#fff;background:0 0}.lal button{background:0 0;border:none;color:#fff}.mk1{width:45%;height:60%;margin-top:5px;margin-left:32px;padding-top:60px;text-align:center;float:left}.mk2{width:45%;float:right;height:60%;margin-right:37px;padding-top:60px;text-align:center}.buttom_right{position:absolute;bottom:110px;left:5px}.buttom_right span{font-size:12px;padding:0 8px}.mk1{position:relative}.mk2{position:relative}.buttom_left{position:absolute;bottom:110px;left:8px}.buttom_left span{font-size:12px;padding:0 8px}.last_bbt_section{position:absolute;left:50%;transform:translate(-50%);bottom:180px;color:#fff;clear:both;letter-spacing:1px}div#more_last{bottom:80px}</style>
    <div class="lal">
        <center>
            <button>Global <?=$data->company_name?> Market, <?=$segment_data->market_segment?></button>
        </center>
    </div>
    <div class="mk1">
        <p>Global <?=$data->company_name?> Market, <?=$segment_data->market_segment?></p>
        <div class="buttom_left">
        <?php 
        for($i=$data->start_year;$i<=$data->end_year;$i++){ ?>
            <span><?=$i?></span>
            <?php } ?>
            
        </div>
    </div>
    <div class="mk2">
        <p>Global <?=$data->company_name?> Market,<?=$segment_data->market_segment?></p>
        <div class="buttom_right">
        <?php for($i=$data->start_year;$i<=$data->end_year;$i++){ ?>
            <span><?=$i?></span>
            <?php } ?>
        </div>
    </div>
    <div class="last_bbt_section">
        <p>Description</p>
    </div>
    <div class="last_bbt_section" id="more_last">
        <p>Content Has Been Removed</p>
    </div>
</center>
<div class="copy">
    <p>
        <small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
    </p>
</div>
</section>
<section class="hero_contant" id="hero_o"  style="background: url(<?=$chart.(count($segment_data->segment_type)).'.jpg'?>);
    background-repeat: no-repeat;
    background-size: 100%;
    background-color: #FFFFFF;">
<center>
    <div class="button_gh mgandi" id="fir_chang" >
        <button type="" class="go">Global <?=$data->company_name?> Market, <?=$segment_data->market_segment?></button>
    </div>
</center>
<center>
    <div class="button_dis mgandi">
        <button type="" class="go">Global <?=$data->company_name?> Market Share % <?=$segment_data->market_segment?>, (<?=$data->start_year?> – <?=$data->end_year?>)</button>
    </div>
</center>

<div class="copy">
    <p>
        <small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
    </p>
</div>
</section>
<section class="hero_contant" id="hero_o">
<center>
    <div class="button_gh" id="fir_chang">
        <button type="" class="go">Global <?=$data->company_name?> Market, <?=$segment_data->market_segment?></button>
    </div>
</center>
<center>
    <div class="button_gh" id="fir_chang">
        <button type="" class="go">Global <?=$data->company_name?> Market, <?=$segment_data->market_segment?></button>
    </div>
</center>
<br/>
<br/>
<div class="mast_table">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col"><?=$segment_data->market_segment?></th>
                <?php for($i=$data->start_year;$i<=$data->end_year;$i++){ ?>
                    <th scope="col"><?=$i?></th>
            <?php } ?>
                
                
            </tr>
        </thead>
        <tbody>
            <?php foreach($segment_data->segment_type as $seg_type){ ?>
            <tr>
                <td><?=$seg_type->segment_type ?></td>
                <?php for($i=$data->start_year;$i<=$data->end_year;$i++){ ?>
                    <td >XX</th>
            <?php } ?>
            </tr>
            <?php } ?>
           
           
        </tbody>
    </table>
</div>
<div class="copy">
    <p>
        <small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
    </p>
</div>
</section>
<?php } ?>

 <section class="hero_contant" id="hero_o">
<div class="mg">
    <div class="my_f">
        <div class="left">
            <h2></h2>
        </div>
        <div class="right">
            <img src="<?=$logo?>" alt="" width="150px"/>
        </div>
    </div>
</div>
<center>
    <br>
        <br>
            <div class="button_p mt-5">
                <button type="" class="go">Global <?=$data->company_name?> market ,by Geography</button>
            </div>
        </center>
        <div class="copy">
            <p>
                <small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
            </p>
        </div>
    </section>
    <section class="main_loclal_class" style="background:url(https://techramindra.com/report/storage/app/reportnmarktes/20.png);background-repeat:no-repeat;background-size:100% 100%">
        <style>section.main_loclal_class{height:100vh;width:100%}.lal{padding-top:55px;color:#fff;background:0 0}.lal button{background:0 0;border:none;color:#fff}.mk1{width:45%;height:60%;margin-top:5px;margin-left:32px;padding-top:60px;text-align:center;float:left}.mk2{width:45%;float:right;height:60%;margin-right:37px;padding-top:60px;text-align:center}.buttom_right{position:absolute;bottom:110px;left:5px}.buttom_right span{font-size:12px;padding:0 8px}.mk1{position:relative}.mk2{position:relative}.buttom_left{position:absolute;bottom:110px;left:8px}.buttom_left span{font-size:12px;padding:0 8px}.last_bbt_section{position:absolute;left:50%;transform:translate(-50%);bottom:180px;color:#fff;clear:both;letter-spacing:1px}div#more_last{bottom:80px}</style>
        <div class="lal">
            <center>
                <button>Global <?=$data->company_name?> Market, by Geography</button>
            </center>
        </div>
        <div class="mk1">
            <p>Global <?=$data->company_name?> Market, by Geography</p>
            <div class="buttom_left">
            <?php for($i=$data->start_year;$i<=$data->end_year;$i++){ ?>
            <span><?=$i?></span>
            <?php } ?>
            </div>
        </div>
        <div class="mk2">
            <p>Global <?=$data->company_name?> Market, by Geography</p>
            <div class="buttom_right">
            <?php for($i=$data->start_year;$i<=$data->end_year;$i++){ ?>
            <span><?=$i?></span>
            <?php } ?>
            </div>
        </div>
        <div class="last_bbt_section">
            <p>Description</p>
        </div>
        <div class="last_bbt_section" id="more_last">
            <p>Content Has Been Removed</p>
        </div>
    </center>
    <div class="copy">
        <p>
            <small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
        </p>
    </div>
</section>
<section class="hero_contant" id="hero_o"  style="background: url(<?=$chart.'4.jpg'?>);
    background-repeat: no-repeat;
    background-size: 100%;
    background-color: #FFFFFF;">
<center>
    <div class="button_gh mgandi" id="fir_chang" >
        <button type="" class="go">Global <?=$data->company_name?> Market, by Geography</button>
    </div>
</center>
<center>
    <div class="button_dis mgandi">
        <button type="" class="go">Global <?=$data->company_name?> Market Share % by Geography, (<?=$data->start_year?> – <?=$data->end_year?>)</button>
    </div>
</center>

<div class="copy">
    <p>
        <small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
    </p>
</div>
</section>
<section class="hero_contant" id="hero_o">
    <center>
        <div class="button_gh" id="fir_chang">
            <button type="" class="go">Global <?=$data->company_name?> Market, by Geography</button>
        </div>
    </center>
    <center>
        <div class="button_gh" id="fir_chang">
            <button type="" class="go">Global <?=$data->company_name?> Market, by Geography</button>
        </div>
    </center>
    <br/>
    <br/>
    <div class="mast_table">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">BY GEOGRAPHY</th>
                    
                    <?php for($i=$data->start_year;$i<=$data->end_year;$i++){ ?>
                        <th scope="col"><?=$i?></th>
            <?php } ?>
                   
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>North America </td>
                    <?php for($i=$data->start_year;$i<=$data->end_year;$i++){ ?>
                        <td>XX</td>
            <?php } ?>
                </tr>
                <tr>
                    <td>Europe</td>
                    <?php for($i=$data->start_year;$i<=$data->end_year;$i++){ ?>
                        <td>XX</td>
            <?php } ?>
                </tr>
                <tr>
                    <td>APAC</td>
                    <?php for($i=$data->start_year;$i<=$data->end_year;$i++){ ?>
                        <td>XX</td>
            <?php } ?>
                </tr>
                <tr>
                    <td>Rest of the World</td>
                    <?php for($i=$data->start_year;$i<=$data->end_year;$i++){ ?>
                        <td>XX</td>
            <?php } ?>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="copy">
        <p>
            <small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
        </p>
    </div>
</section>

<?php foreach($data->segment as $segment_data){ ?>
<section class="hero_contant" id="hero_o">
<div class="mg">
<div class="my_f">
<div class="left">
<h2></h2>
</div>
<div class="right">
<img src="<?=$logo?>" alt="" width="150px"/>
</div>
</div>
</div>
<br>
<br>
<center>
<br>
    <br>
        <div class="button_p mt-5">
            <button type="" class="go">North America <?=$data->company_name?> Markets, <?=$segment_data->market_segment?></button>
        </div>
    </center>
    <div class="copy">
        <p>
            <small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
        </p>
    </div>
</section>
<section class="main_loclal_class" style="background:url(https://techramindra.com/report/storage/app/reportnmarktes/20.png);background-repeat:no-repeat;background-size:100% 100%">
    <style>section.main_loclal_class{height:100vh;width:100%}.lal{padding-top:55px;color:#fff;background:0 0}.lal button{background:0 0;border:none;color:#fff}.mk1{width:45%;height:60%;margin-top:5px;margin-left:32px;padding-top:60px;text-align:center;float:left}.mk2{width:45%;float:right;height:60%;margin-right:37px;padding-top:60px;text-align:center}.buttom_right{position:absolute;bottom:110px;left:5px}.buttom_right span{font-size:12px;padding:0 8px}.mk1{position:relative}.mk2{position:relative}.buttom_left{position:absolute;bottom:110px;left:8px}.buttom_left span{font-size:12px;padding:0 8px}.last_bbt_section{position:absolute;left:50%;transform:translate(-50%);bottom:180px;color:#fff;clear:both;letter-spacing:1px}div#more_last{bottom:80px}</style>
    <div class="lal">
        <center>
            <button>North America <?=$data->company_name?> Market, <?=$segment_data->market_segment?></button>
        </center>
    </div>
    <div class="mk1">
        <p>North America <?=$data->company_name?> Market, <?=$segment_data->market_segment?></p>
        <div class="buttom_left">
        <?php 
        for($i=$data->start_year;$i<=$data->end_year;$i++){ ?>
            <span><?=$i?></span>
            <?php } ?>
            
        </div>
    </div>
    <div class="mk2">
        <p>North America <?=$data->company_name?> Market,<?=$segment_data->market_segment?></p>
        <div class="buttom_right">
        <?php for($i=$data->start_year;$i<=$data->end_year;$i++){ ?>
            <span><?=$i?></span>
            <?php } ?>
        </div>
    </div>
    <div class="last_bbt_section">
        <p>Description</p>
    </div>
    <div class="last_bbt_section" id="more_last">
        <p>Content Has Been Removed</p>
    </div>
</center>
<div class="copy">
    <p>
        <small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
    </p>
</div>
</section>
<section class="hero_contant" id="hero_o"  style="background: url(<?=$chart.(count($segment_data->segment_type)).'.jpg'?>);
    background-repeat: no-repeat;
    background-size: 100%;
    background-color: #FFFFFF;">
<center>
    <div class="button_gh mgandi" id="fir_chang" >
        <button type="" class="go">North America <?=$data->company_name?> Market, <?=$segment_data->market_segment?></button>
    </div>
</center>
<center>
    <div class="button_dis mgandi">
        <button type="" class="go">North America <?=$data->company_name?> Market Share % <?=$segment_data->market_segment?>, (<?=$data->start_year?> – <?=$data->end_year?>)</button>
    </div>
</center>

<div class="copy">
    <p>
        <small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
    </p>
</div>
</section>
<section class="hero_contant" id="hero_o">
<center>
    <div class="button_gh" id="fir_chang">
        <button type="" class="go">North America <?=$data->company_name?> Market, <?=$segment_data->market_segment?></button>
    </div>
</center>
<center>
    <div class="button_gh" id="fir_chang">
        <button type="" class="go">North America <?=$data->company_name?> Market, <?=$segment_data->market_segment?></button>
    </div>
</center>
<br/>
<br/>
<div class="mast_table">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col"><?=$segment_data->market_segment?></th>
                <?php for($i=$data->start_year;$i<=$data->end_year;$i++){ ?>
                    <th scope="col"><?=$i?></th>
            <?php } ?>
                
                
            </tr>
        </thead>
        <tbody>
            <?php foreach($segment_data->segment_type as $seg_type){ ?>
            <tr>
                <td><?=$seg_type->segment_type ?></td>
                <?php for($i=$data->start_year;$i<=$data->end_year;$i++){ ?>
                    <td >XX</th>
            <?php } ?>
            </tr>
            <?php } ?>
           
           
        </tbody>
    </table>
</div>
<div class="copy">
    <p>
        <small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
    </p>
</div>
</section>
<?php } ?>
<section class="hero_contant" id="hero_o">
<div class="mg">
    <div class="my_f">
        <div class="left">
            <h2></h2>
        </div>
        <div class="right">
            <img src="<?=$logo?>" alt="" width="150px"/>
        </div>
    </div>
</div>
<center>
    <br>
        <br>
            <div class="button_p mt-5">
                <button type="" class="go">North America <?=$data->company_name?> market ,by Geography</button>
            </div>
        </center>
        <div class="copy">
            <p>
                <small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
            </p>
        </div>
    </section>
    <section class="main_loclal_class" style="background:url(https://techramindra.com/report/storage/app/reportnmarktes/20.png);background-repeat:no-repeat;background-size:100% 100%">
        <style>section.main_loclal_class{height:100vh;width:100%}.lal{padding-top:55px;color:#fff;background:0 0}.lal button{background:0 0;border:none;color:#fff}.mk1{width:45%;height:60%;margin-top:5px;margin-left:32px;padding-top:60px;text-align:center;float:left}.mk2{width:45%;float:right;height:60%;margin-right:37px;padding-top:60px;text-align:center}.buttom_right{position:absolute;bottom:110px;left:5px}.buttom_right span{font-size:12px;padding:0 8px}.mk1{position:relative}.mk2{position:relative}.buttom_left{position:absolute;bottom:110px;left:8px}.buttom_left span{font-size:12px;padding:0 8px}.last_bbt_section{position:absolute;left:50%;transform:translate(-50%);bottom:180px;color:#fff;clear:both;letter-spacing:1px}div#more_last{bottom:80px}</style>
        <div class="lal">
            <center>
                <button>North America <?=$data->company_name?> Market, by Geography</button>
            </center>
        </div>
        <div class="mk1">
            <p>North America <?=$data->company_name?> Market, by Geography</p>
            <div class="buttom_left">
            <?php for($i=$data->start_year;$i<=$data->end_year;$i++){ ?>
            <span><?=$i?></span>
            <?php } ?>
            </div>
        </div>
        <div class="mk2">
            <p>North America <?=$data->company_name?> Market, by Geography</p>
            <div class="buttom_right">
            <?php for($i=$data->start_year;$i<=$data->end_year;$i++){ ?>
            <span><?=$i?></span>
            <?php } ?>
            </div>
        </div>
        <div class="last_bbt_section">
            <p>Description</p>
        </div>
        <div class="last_bbt_section" id="more_last">
            <p>Content Has Been Removed</p>
        </div>
    </center>
    <div class="copy">
        <p>
            <small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
        </p>
    </div>
</section>
<section class="hero_contant" id="hero_o"  style="background: url(<?=$chart.'2.jpg'?>);
    background-repeat: no-repeat;
    background-size: 100%;
    background-color: #FFFFFF;">
<center>
    <div class="button_gh mgandi" id="fir_chang" >
        <button type="" class="go">North America <?=$data->company_name?> Market, by Geography</button>
    </div>
</center>
<center>
    <div class="button_dis mgandi">
        <button type="" class="go">North America <?=$data->company_name?> Market Share % by Geography, (<?=$data->start_year?> – <?=$data->end_year?>)</button>
    </div>
</center>

<div class="copy">
    <p>
        <small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
    </p>
</div>
</section>
<section class="hero_contant" id="hero_o">
    <center>
        <div class="button_gh" id="fir_chang">
            <button type="" class="go">North America <?=$data->company_name?> Market, by Geography</button>
        </div>
    </center>
    <center>
        <div class="button_gh" id="fir_chang">
            <button type="" class="go">North America <?=$data->company_name?> Market, by Geography</button>
        </div>
    </center>
    <br/>
    <br/>
    <div class="mast_table">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">BY GEOGRAPHY</th>
                    
                    <?php for($i=$data->start_year;$i<=$data->end_year;$i++){ ?>
                        <th scope="col"><?=$i?></th>
            <?php } ?>
                   
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>United States </td>
                    <?php for($i=$data->start_year;$i<=$data->end_year;$i++){ ?>
                        <td>XX</td>
            <?php } ?>
                </tr>
                <tr>
                    <td>Canada</td>
                    <?php for($i=$data->start_year;$i<=$data->end_year;$i++){ ?>
                        <td>XX</td>
            <?php } ?>
                </tr>
                
                
            </tbody>
        </table>
    </div>
    <div class="copy">
        <p>
            <small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
        </p>
    </div>
</section>

<section class="hero_contant" id="hero_o" style="background: white; background-size: 100%;">
    <br>
        <br>
            <img class="roma" src="<?=$url.'map-1.png'?>" class="hero" alt=""/>
        </div>
        <div class="copy">
            <p>
                <small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
            </p>
        </div>
    </section>
    <section class="hero_contant" id="hero_o" style="background: white; background-size: 100%;">
        <img class="roma" src="<?=$url.'map-2.png'?>" class="hero" alt=""/>
    </div>
    <div class="copy">
        <p>
            <small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
        </p>
    </div>
</section>
<section class="hero_contant" id="hero_o" style="background: white; background-size: 100%;">
    <img src="<?=$url.'sp1.jpg'?>" alt="" width="100%"/>
    <div class="copy">
        <p>
            <small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
        </p>
    </div>
</section>
<section class="hero_contant" id="hero_o" style="background: url(<?=$url.'sp-2.jpg'?>); background-size: 100%; background-repeat: no-repeat; background-color: white;">
    <div class="mg">
        <div class="my_f">
            <div class="left"></div>
            <div class="right">
                <img src="<?=$logo?>" alt="" width="150px"/>
            </div>
        </div>
    </div>
    <div class="copy">
        <p>
            <small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
        </p>
    </div>
</section>
<section class="hero_contant" id="hero_o">
    <center>
        <br>
            <div class="button_gh" id="fir_chang">
                <button type="" class="go">Competition Index</button>
            </div>
        </center>
        <br/>
        <br/>
        <div class="mast_table" id="jindgi">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">Sr.</th>
                        <th scope="col">Company</th>
                        <th scope="col">Head Office</th>
                        <th scope="col">Year of Foundation</th>
                        <th scope="col">Revenue (2021)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; foreach($data->Competition_index as $comm){ ?>
                    <tr>
                        <td><?=$i++?></td>
                        <td><?=$comm->company?></td>
                        <td>xx</td>
                        <td>xx</td>
                        <td>xx</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="copy">
            <p>
                <small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
            </p>
        </div>
    </section>
    <section class="hero_contant" id="hero_o" style="background: url(<?=$url.'sp3.jpg'?>); background-size: 100% 100%; background-repeat: no-repeat; background-color: white;">
        <div class="jagguY">
        <?php $name=''; $i=1; foreach($data->Competition_index as $comm){ ?>
            <span><?= $comm->company?></span>
            <br>
            <?php $i++; } ?>
        </div>
        <div class="copy">
            <p>
                <small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
            </p>
        </div>
    </section> 
    <section class="hero_contant" id="hero_o">
        <center>
            <div class="button_gh" id="fir_chang">
                <button type="" class="go">Market Concentration</button>
            </div>
        </center>
        <div class="max_proi">
            <div class="row-mainchart">
            <div class="col-6-l hgffffffffffff">
                    <center>
                        <div class="button_gh" id="fir_chang">
                            <button type="" class="go">TOP 3</button>
                        </div>
                    </center>
                    <center style="margin-top: 30px;">
                    <div class="qsdhklojjhhhhhh">
                        <img src="<?=$url.'donut1.png'?>"  width="30%">
                     <div class="wllkkjjjhhjd">
                     <?php $i=21; foreach($data->Competition_index as $comm){ if($i>23){break;} ?>
                     <span><div class="color_uu1 color_<?=$i?>"></div><?= $comm->company?></span>
                     <?php $i++; } ?>
                        <span><div class="color_uu1" style="background-color: #9d480e !important;"></div>Other</span>
               
                        <!-- <span><div class="color_uu1 color_23"></div>company</span>
               
                        <span><div class=" color_uu1 color_24"></div>company</span>
                     
                        <span><div class=" color_uu1 color_25"></div>company</span> -->
                     </div>
                     </div>
                    </center>

            </div>
            <div class="col-6-r hgffffffffffff">
                    <center>
                        <div class="button_gh" id="fir_chang">
                            <button type="" class="go">TOP 5</button>
                        </div>
                    </center>
                    <center style="margin-top: 30px;">
                <div class="qsdhklojjhhhhhh">
                <img src="<?=$url.'donut2.png'?>"width="30%">
                        <div class="wllkkjjjhhjd">
                        <?php $i=21; foreach($data->Competition_index as $comm){ if($i>25){break;} ?>
                     <span><div class="color_uu1 color_<?=$i?>"></div><?= $comm->company?></span>
                     <?php $i++; } ?>
                        <span><div class="color_uu1" style="background-color: #EB7C30 !important;"></div>Other</span>
                     </div>
                </div>
                    </center>
             </div>
            </div>
        </div>
        <div class="copy">
            <p>
                <small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
            </p>
        </div>
    </section> 
  
    <section class="hero_contant" id="hero_o" style="background: url(<?=$url.'sp-5.jpg'?>); background-size: 100%; background-repeat: no-repeat; background-color: white;">
        <div class="mg">
            <div class="my_f">
                <div class="left"></div>
                <div class="right">
                    <img src="<?=$logo?>" alt="" width="150px"/>
                </div>
            </div>
        </div>
        <div class="copy">
            <p>
                <small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
            </p>
        </div>
    </section>
      
    <section class="hero_contant" id="hero_o" style="background: url(<?=$url.'sp-6.jpg'?>); background-size: 100%; background-repeat: no-repeat; background-color: white;">
        <div class="mg">
            <div class="my_f">
                <div class="left">
                    <h2><?php $name=''; $i=1; foreach($data->Competition_index as $comm){ 
             if($i>1)
            {
                 break;
                 
            }
               echo $comm->company;
                
            
            $i++; } ?></h2>
                </div>
                <div class="right">
                    <img src="<?=$logo?>" alt="" width="150px"/>
                </div>
            </div>
        </div>
        <div class="titlecompany">
        <?=$data->company_name?>
        </div>
        <div class="copy">
            <p>
                <small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
            </p>
        </div>
    </section>
    <div class="urkl">
      
    


    <section class="hero_contant" id="hero_o">
        <center>
            <div class="button_gh" id="fir_chang">
                <button type="" class="go">Market Concentration</button>
            </div>
        </center>
        <div class="max_proi">
            <div class="row-mainchart">
            <div class="col-6-l">
                    <center>
                        <div class="button_gh" id="fir_chang">
                            <button type="" class="go">TOP 5</button>
                        </div>
                    </center>
                    <center style="margin-top: 30px;">
                        <img src="<?=$url.'pei1.png'?>" height="370px" width="100px">
                    </center>

            </div>
            <div class="col-6-r">
                    <center>
                        <div class="button_gh" id="fir_chang">
                            <button type="" class="go">TOP 3</button>
                        </div>
                    </center>
                    <center style="margin-top: 30px;">
                        <img src="<?=$url.'pei1.png'?>" height="370px" width="100px">
                    </center>
             </div>
            </div>
        </div>

        <center>
            <div class="button_gh" id="fir_chang">
                <button type="" class="go">Market Concentration</button>
            </div>
        </center>

        <p class="pika" style="background: #2E90CE;   color: white;
    padding: 10px 0px; text-align: center;">Market Concentration</p>
        <div class="copy">
            <p>
                <small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
            </p>
        </div>
    </section> 
    </div>
    <section class="hero_contant" id="hero_o" style="background: url(<?=$url.'spt2.jpg'?>); background-size: 100%; background-repeat: no-repeat; background-color: white;">
        <div class="mg">
            <div class="my_f">
                <div class="left">
                    <h2><?php $name=''; $i=1; foreach($data->Competition_index as $comm){ 
             if($i>1)
            {
                 break;
                 
            }
               echo $comm->company;
                
            
            $i++; } ?></h2>
                </div>
                <div class="right">
                    <img src="<?=$logo?>" alt="" width="150px"/>
                </div>
            </div>
        </div>
        <div class="copy">
            <p>
                <small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
            </p>
        </div>
    </section>
    <section class="hero_contant" id="hero_o" style="background: url(<?=$url.'spt3.jpg'?>); background-size: 100% 100%; background-repeat: no-repeat; background-color: white;">
        <div class="mg">
            <div class="my_f">
                <div class="left">
                    <h2><?php $name=''; $i=1; foreach($data->Competition_index as $comm){ 
             if($i>1)
            {
                 break;
                 
            }
               echo $comm->company;
                
            
            $i++; } ?></h2>
                </div>
                <div class="right">
                    <img src="<?=$logo?>" alt="" width="150px"/>
                </div>
            </div>
        </div>
        <div class="copy">
            <p>
                <small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
            </p>
        </div>
    </section>
    <section class="hero_contant" id="hero_o" style="background: url(<?=$url.'spt-4.jpg'?>); background-size: 100%; background-repeat: no-repeat; background-color: white;">
        <div class="mg">
            <div class="my_f">
                <div class="left">
                    <h2><?php $name=''; $i=1; foreach($data->Competition_index as $comm){ 
             if($i>1)
            {
                 break;
                 
            }
               echo $comm->company;
                
            
            $i++; } ?></h2>
                </div>
                <div class="right">
                    <img src="<?=$logo?>" alt="" width="150px"/>
                </div>
            </div>
        </div>
        <div class="copy">
            <p>
                <small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
            </p>
        </div>
    </section>
    <section class="hero_contant" id="hero_o" style="background: url(<?=$url.'spt5.jpg'?>); background-size: 100%; background-repeat: no-repeat; background-color: white;">
        <div class="copy">
            <p>
                <small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
            </p>
        </div>
    </section>
    <section class="hero_contant" id="hero_o" style="background: url(<?=$url.'spt6.jpg'?>); background-size: 100% 100%; background-repeat: no-repeat; background-color: white;">
        <div class="mg">
            <div class="my_f">
                <div class="left">
                    <h2>REPORT FAQS</h2>
                </div>
                <div class="right">
                    <img src="<?=$logo?>" alt="" width="150px"/>
                </div>
            </div>
        </div>
        <div class="copy">
            <p>
                <small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
            </p>
        </div>
    </section>
    <section class="hero_contant" id="hero_o" style="background: url(<?=$url.'spt-7.jpg'?>); background-size: 100%; background-repeat: no-repeat; background-color: white;">
        <div class="mg">
            <div class="my_f">
                <div class="left">
                    <h2>NOTES & DISCLAIMER</h2>
                </div>
                <div class="right">
                    <img src="<?=$logo?>" alt="" width="150px"/>
                </div>
            </div>
        </div>
        <div class="copy">
            <p>
                <small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
            </p>
        </div>
    </section>
    <section class="hero_contant" id="hero_o" style="background: url(<?=$url.($data->company_type=='Reports N Market'?'spt8.jpg':'spt8-ir.jpg');?>); background-size: 100%; background-repeat: no-repeat; background-color: white;">
        <div class="copy">
            <p>
                <small>Copyright © | All Rights Reserved by <?=$data->company_type?></small>
            </p>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>