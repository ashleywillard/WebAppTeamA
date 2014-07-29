<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Template Name: Menu
 * @package Eighties
 * @since 1.0.0
 */

// get_header(); 
?>

<style>
    @import url(http://fonts.googleapis.com/css?family=Oswald);
    @import url(http://fonts.googleapis.com/css?family=Cabin);

    * {
      box-sizing: border-box;
    }

    body {
      padding: 1rem 3rem;
      font-family: 'Cabin', sans-serif;
      line-height: 1.4;
      min-width: 925px;
    }
    a {
      text-decoration: none;
    }

    .main-navigation ul {
      list-style: none;
      padding: 0;
    }

    .main-navigation li {
      float: left;
      width: 12rem;
      height: 5rem;
      margin: 0 0 0 -1rem;
      position: relative;
    }

    .main-navigation li &:active {
      z-index: 6; 
    }
    .main-navigation a {
      position: relative;
      display: inline-block;
      color: white;
      width: 100%;
      height: 100%;
      font-family: 'Oswald', sans-serif;
      text-transform: uppercase;
      font-size: 1.4rem;
      text-shadow: 0 1px 0 rgba(0, 0, 0, 0.4);
    }

    .main-navigation svg {
      width: 120%;
      height: 100%;
      /*for tab shadows
      also screws up Firefox
      filter: url(#shadow);*/
      position: absolute;
      top: 0;
      left: 0;
      z-index: 1;
      pointer-events: none;
    }

    .main-navigation span {
      position: relative;
      padding: 1rem 0 0 3.3rem;
      z-index: 2;
      display: inline-block;
      width: 100%;
      height: 100%;
    }

    .main-navigation .tab-1 {
      z-index: 5;
    }

    .main-navigation .tab-1 svg {
      fill: url(#tab-1-bg);
    }

    .main-navigation .tab-2 {
      z-index: 4;
    }

    .main-navigation .tab-2 svg {
      fill: url(#tab-2-bg);
    }

    .main-navigation .tab-3 {
      z-index: 3;
    }

    .main-navigation .tab-3 svg {
      fill: url(#tab-3-bg);
    }

    .main-navigation .tab-4 {
      z-index: 2;
    }

    .main-navigation .tab-4 svg {
      fill: url(#tab-4-bg);
    }

    .main-navigation .tab-5 {
      z-index: 1;
    }

    .main-navigation .tab-5 svg {
      fill: url(#tab-5-bg);
    }

    .main-navigation {
      overflow: hidden;
      position: relative;
      padding: 0 0 0 1rem;
    }

    .main-navigation &::after {
      content: "";
      position: absolute;
      bottom: 16px;
      left: 0;
      width: 798px;
      height: 12px;
      background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.2));
      z-index: 6;
    }

    .main-content {
      position: relative;
      z-index: 9;
      background: rgba(102, 51, 153, 1.0);
      margin: -1.6rem 0 0 0;
      padding: 3rem;
      border-radius: 15px;
      border-top-left-radius: 0;
    }

    .article {
      background: white;
      padding: 5rem;
      border-radius: 8px;
    }

    .article h2 {
      font-family: 'Oswald', sans-serif;
      text-transform: uppercase;
      font-size: 3rem;
      color: rgba(118, 160, 192, 1.0);
      margin: 0 0 0.5rem 0;
    }

    input[type=checkbox].filter-1 {
      display:none;
    }

    input[type=checkbox].filter-1 + label.filter-label1 {
      padding-left:27px;
      padding-right: 0px;
      /*height:px; */
      display:inline-block;
      line-height:22px;
      background-image:url(/wp-content/themes/eighties/OrangeUnchecked.png);
      background-repeat:no-repeat;
      background-size: 22px 22px;
      background-position: 0 0;
      font-size:18px;
      font-family: "Cabin", serif;
      vertical-align:middle;
      cursor:pointer;
    }

    input[type=checkbox].filter-1:checked + label.filter-label1 {
      background-image:url(/wp-content/themes/eighties/OrangeChecked.png);
    }
    label.filter-label1 {
      float: left;
      -webkit-touch-callout: none;
      -webkit-user-select: none;
      -khtml-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    input[type=checkbox].filter-2 {
      display:none;
    }

    input[type=checkbox].filter-2 + label.filter-label2 {
      padding-left:27px;
      display:inline-block;
      line-height:22px;
      background-image:url(/wp-content/themes/eighties/RedUnchecked.png);
      background-repeat:no-repeat;
      background-size: 22px 22px;
      background-position: 0 0;
      font-size:18px;
      font-family: "Cabin", serif;
      vertical-align:middle;
      cursor:pointer;
    }

    input[type=checkbox].filter-2:checked + label.filter-label2 {
      background-image:url(/wp-content/themes/eighties/RedChecked.png);
    }
    label.filter-label2 {
      margin-left: 19px;
      float: left;
      -webkit-touch-callout: none;
      -webkit-user-select: none;
      -khtml-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    input[type=checkbox].filter-3 {
      display:none;
    }

    input[type=checkbox].filter-3 + label.filter-label3 {
      padding-left:27px;
      display:inline-block;
      line-height:22px;
      background-image:url(/wp-content/themes/eighties/PurpleUnchecked.png);
      background-repeat:no-repeat;
      background-size: 22px 22px;
      background-position: 0 0;
      font-size:18px;
      font-family: "Cabin", serif;
      vertical-align:middle;
      cursor:pointer;
    }

    input[type=checkbox].filter-3:checked + label.filter-label3 {
      background-image:url(/wp-content/themes/eighties/PurpleChecked.png);
    }
    label.filter-label3 {
      margin-left: 19px;
      float: left;
      -webkit-touch-callout: none;
      -webkit-user-select: none;
      -khtml-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    input[type=checkbox].filter-4 {
      display:none;
    }

    input[type=checkbox].filter-4 + label.filter-label4 {
      padding-left:27px;
      display:inline-block;
      line-height:22px;
      background-image:url(/wp-content/themes/eighties/BlueUnchecked.png);
      background-repeat:no-repeat;
      background-size: 22px 22px;
      background-position: 0 0;
      font-size:18px;
      font-family: "Cabin", serif;
      vertical-align:middle;
      cursor:pointer;

    }

    input[type=checkbox].filter-4:checked + label.filter-label4 {
      background-image:url(/wp-content/themes/eighties/BlueChecked.png);
    }
    label.filter-label4 {
      margin-left: 19px;
      float: left;
      -webkit-touch-callout: none;
      -webkit-user-select: none;
      -khtml-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    input[type=checkbox].filter-5 {
      display:none;
    }

    input[type=checkbox].filter-5 + label.filter-label5 {
      padding-left:27px;
      display:inline-block;
      line-height:22px;
      background-image:url(/wp-content/themes/eighties/GreenUnchecked.png);
      background-repeat:no-repeat;
      background-size: 22px 22px;
      background-position: 0 0;
      font-size:18px;
      font-family: "Cabin", serif;
      vertical-align:middle;
      cursor:pointer;
    }

    input[type=checkbox].filter-5:checked + label.filter-label5 {
      background-image:url(/wp-content/themes/eighties/GreenChecked.png);
    }
    label.filter-label5 {
      margin-left: 19px;
      float: left;
      -webkit-touch-callout: none;
      -webkit-user-select: none;
      -khtml-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    .sform {
      /*margin-left: auto;
      margin-right: auto;*/
      margin: auto;
    }

    .meal-text {
      cursor: pointer;
    }

    .breakfast .breakfast-header {
      border-top-left-radius: 8px;
      border-top-right-radius: 8px;
      margin-top: 2rem;
      font-size: 1.4rem;
      font-family: "Oswald", sans-serif;
      padding: 0.3rem 0rem 0.3rem 1.5rem;
      background: rgba(102, 51, 153, 1.0);
      color: white;
        text-transform: uppercase;
        text-shadow: 0 1px 0 rgba(0, 0, 0, 0.4);
        cursor: pointer;
    }

    .breakfast .breakfast-items {
      font-size: 20px;
      font-family: "Cabin", serif;
      /*display: block;*/
      float: left;
      width: 33%;
      padding-bottom: 0.7rem;
      line-height: 2.3rem;
    }

    .breakfast-items &:active {
      display: block;
    }

    .lunch .lunch-header {
      border-top-left-radius: 8px;
      border-top-right-radius: 8px;
      margin-top: 2rem;
      font-size: 1.4rem;
      font-family: "Oswald", sans-serif;
      padding: 0.3rem 0rem 0.3rem 1.5rem;
      background: rgba(102, 51, 153, 1.0);
      color: white;
        text-transform: uppercase;
        text-shadow: 0 1px 0 rgba(0, 0, 0, 0.4);
        cursor: pointer;
    }

    .arrow {
      height: 1.5rem;
      width: 1.5rem;
      margin-right: 0.8rem;
      margin-top: 0.2rem;
      float: right;
      /*transform: rotate(275deg);*/
    }

    .lunch .lunch-items {
      font-size: 20px;
      font-family: "Cabin", serif;
      line-height: 2.3rem;
      /*display: block;*/
      float: left;
      width: 33%;
      padding-bottom: 0.7rem;
    }

    .lunch-manage {
      overflow: hidden;
      border-bottom: 2px solid rgba(0, 0, 0, 0.4);
      border-left: 2px solid rgba(0, 0, 0, 0.4);
      border-right: 2px solid rgba(0, 0, 0, 0.4);
      border-bottom-left-radius: 8px;
      border-bottom-right-radius: 8px;
    }

    .bfast-manage {
      overflow: hidden;
      border-bottom: 2px solid rgba(0, 0, 0, 0.4);
      border-left: 2px solid rgba(0, 0, 0, 0.4);
      border-right: 2px solid rgba(0, 0, 0, 0.4);
      border-bottom-left-radius: 8px;
      border-bottom-right-radius: 8px;
    }

    .lunch-list {
      max-width: 69em;
      list-style: none;
      margin: 0px auto;
      margin-top: 58px;
      padding: 0;
      overflow-y: hidden;
    }

    .bfast-list {
      max-width: 69em;
      list-style: none;
      /*margin: 0px auto;*/
      /*margin-top: 58px;*/
      padding: 0;
    }

    .Monday {
    	display: none;
    }

    .Tuesday {
    	display: none;
    }

    .Wednesday {
    	display: none;
    }

    .Thursday {
    	display: none;
    }

    .Friday {
    	display: none;
    }

    @media screen and (max-width: 1100px) {
      .lunch .lunch-items {
        width: 50%;
      }

      .breakfast .breakfast-items {
        width: 50%;
      }
    }

    @media (max-width: 500px) {
      .lunch .lunch-items {
        width: 100%;
      }

      .breakfast .breakfast-items {
        width: 100%;
      }
    }

    .circle1 {
      background: #F16E35;
    }

    .circle2 {
      background: #D23E51;
    }

    .circle3 {
      background: #6262AC;
    }

    .circle4 {
      background: #3399CC;
    }

    .circle5 {
      background: #4BB649;
    }

    .circles {
      height: 0.8rem;
      width: 0.8rem;
      border-radius: 50%;
      display: block;
      float: left;
      margin-right: 0.35rem;
    }

    .popup {
      width: 40%;
      /*height: 40rem;*/
      margin-left: auto;
      margin-right: auto;
      display: none;
      background: #fff;
      position: absolute;
      vertical-align: middle;
      z-index: 12;
      border: 0.5rem solid #000;
      border-radius: 8px;
      margin-left: 25%;
      margin-top: 5%;
    }

    .popup-circles {
      height: 1rem;
      width: 1rem;
      border-radius: 50%;
      display: inline-block;
      margin-left: 5rem;
    }

    .popup-circles2 {
      height: 1rem;
      width: 1rem;
      border-radius: 50%;
      display: inline-block;
      /*float: left;*/
      margin-left: 1rem;
    }

    .padding {
      margin-left: 3.3rem;
    }

    .ingredients {
      font-family: 'Cabin', sans-serif;
      font-size: 1.3rem;
      margin-left: 5.0rem;
      margin-top: 0.3rem;
    }

    #ingredients {
      padding-right: 3rem;
    }

    .ingredients-header {
      font-family: 'Oswald', sans-serif;
      font-size: 1.8rem;
      margin-left: -1.7rem;
      margin-top: 1rem;
    }

    .price {
      font-family: 'Cabin', sans-serif;
      font-size: 1.3rem;
      margin-left: 5.0rem;
      margin-top: 0.3rem;
    }

    .price-header {
      font-family: 'Oswald', sans-serif;
      font-size: 1.8rem;
      margin-left: -1.7rem;
      margin-top: 1rem;
    }

    .allergy-header {
      font-family: 'Oswald', sans-serif;
      font-size: 1.8rem;
      margin-left: 3.3rem;
      margin-top: 1rem;
      margin-bottom: 0.3rem;
    }

    .allergies {
      font-family: 'Cabin', sans-serif;
      font-size: 1.3rem;
      display: inline-block;
      margin-left: 0.8rem;
    }

    .close {
      float: right;
      font-size: 2rem;
      cursor: pointer;
      margin-right: 0.7rem;
      /*margin-top: 0.1rem;*/
    }

    .allergy-info {
      padding-bottom: 2rem;
    }

    .popup-header {
      font-family: 'Oswald', sans-serif;
      font-size: 3rem;
      padding-top: 1.5rem;
      padding-left: 2.5rem;
    }

    body {
      height: 100%;
      width: 100%;
    }

    .everything {
      z-index: 10;
      height: 100%;
      width:100%;
      position: absolute;
      display: none;
      background: #000;
      opacity: 0.8;
    }

    .loader {
      display: block;
      margin: auto;
      vertical-align: middle;
      height: 5rem;
      width: 5rem;
    }

  </style>

    <svg height="0" width="0" style="position: absolute; margin-left: -100%;">
  
      <defs>
        
        <filter id='shadow'>
          <feComponentTransfer in="SourceGraphic">
            <feFuncR type="discrete" tableValues="0"/>
            <feFuncG type="discrete" tableValues="0"/>
            <feFuncB type="discrete" tableValues="0"/>
          </feComponentTransfer>
          <feGaussianBlur stdDeviation="1"/>
           <feComponentTransfer><feFuncA type="linear" slope="0.2"/></feComponentTransfer>
          <feOffset dx="5" dy="1" result="shadow"/>
          <feComposite in="SourceGraphic" />
        </filter>
            
        <linearGradient id="tab-1-bg" x1="0%" y1="0%" x2="0%" y2="65%">
          <stop offset="0%" style="stop-color: rgba(139, 88, 183, 1.0);" />
          <stop offset="100%" style="stop-color: rgba(102, 51, 153, 1.0);" />
        </linearGradient>
        
        <linearGradient id="tab-2-bg" x1="0%" y1="0%" x2="0%" y2="65%">
          <stop offset="0%" style="stop-color: rgba(146, 95, 184, 1.0);" />
          <stop offset="100%" style="stop-color: rgba(117, 66, 168, 1.0);" />
        </linearGradient>
        
        <linearGradient id="tab-3-bg" x1="0%" y1="0%" x2="0%" y2="65%">
          <stop offset="0%" style="stop-color: rgba(164, 113, 198, 1.0);" />
          <stop offset="100%" style="stop-color: rgba(120, 71, 172, 1.0);" />
        </linearGradient>
        
        <linearGradient id="tab-4-bg" x1="0%" y1="0%" x2="0%" y2="65%">
          <stop offset="0%" style="stop-color: rgba(184, 123, 208, 1.0);" />
          <stop offset="100%" style="stop-color: rgba(142, 92, 190, 1.0);" />
        </linearGradient>

        <linearGradient id="tab-5-bg" x1="0%" y1="0%" x2="0%" y2="65%">
          <stop offset="0%" style="stop-color: rgba(210, 160, 230, 1.0);" />
          <stop offset="100%" style="stop-color: rgba(150, 100, 205, 1.0);" />
        </linearGradient>
          
      </defs>
      
      <path id="tab-shape" class="tab-shape" d="M116.486,29.036c-23.582-8-14.821-29-42.018-29h-62.4C5.441,0.036,0,5.376,0,12.003v28.033h122v-11H116.486
          z">
      
    </svg>

    <div class="everything" id="all"></div>
    <div class="popup" id="popup"></div>

    <nav role="navigation" class="main-navigation">
      <ul>
        <li class="tab-1" id="monday" data-bg-color="rgba(102, 51, 153, 1.0)">
          <a href="#monday">
            <span>Monday</span>
            <svg viewBox="0 0 122 40">
               <use xlink:href="#tab-shape"></use>
            </svg>
          </a>
        </li>
        <li class="tab-2" id="tuesday" data-bg-color="rgba(117, 66, 168, 1.0)">
          <a href="#tuesday">
            <span>Tuesday</span>
            <svg viewBox="0 0 122 40">
              <use xlink:href="#tab-shape"></use>
            </svg>
          </a>
        </li>
        <li class="tab-3" id="wednesday" data-bg-color="rgba(120, 71, 172, 1.0)">
          <a href="#Wednesday">
            <span>Wednesday</span>
            <svg viewBox="0 0 122 40">
              <use xlink:href="#tab-shape"></use>
            </svg>
          </a>
        </li>
        <li class="tab-4" id="thursday" data-bg-color="rgba(142, 92, 190, 1.0)">
          <a href="#thursday">
            <span>Thursday</span>
            <svg viewBox="0 0 122 40">
              <use xlink:href="#tab-shape"></use>
            </svg>
          </a>
        </li>
        <li class="tab-5" id="friday" data-bg-color="rgba(150, 100, 205, 1.0)">
          <a href="#friday">
            <span>Friday</span>
            <svg viewBox="0 0 122 40">
              <use xlink:href="#tab-shape"></use>
            </svg>
          </a>
        </li>
      </ul>
    </nav>

    <div class="main-content">
      <div class="article">
              <form class="sform">
                <div class="check1">
                  <input class="filter-1" id="check1" type="checkbox" onclick="filter(this, '1')" /><label for="check1" class="filter-label1">Gluten Free</label>
                </div>
                <div class="check2">
                  <input class="filter-2" id="check2" type="checkbox" onclick="filter(this, '2')" /><label for="check2" class="filter-label2">Nut Free</label>
                </div>
                <div class="check3">
                  <input class="filter-3" id="check3" type="checkbox" onclick="filter(this, '3')" /><label for="check3" class="filter-label3">Shellfish Free</label>
                </div>
                <div class="check4">
                  <input class="filter-4" id="check4" type="checkbox" onclick="filter(this, '4')" /><label for="check4" class="filter-label4">Eat Smart</label>
                </div>
                <div class="check4">
                  <input class="filter-5" id="check5" type="checkbox" onclick="filter(this, '5')" /><label for="check5" class="filter-label5">Vegan</label>
                </div><br>
              </form>

              <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
    <script src="http://code.jquery.com/color/jquery.color-2.1.2.min.js"></script>

              <div class="breakfast">

                <div class="breakfast-header">
                  Breakfast
                  <img class="arrow" src="/wp-content/Arrow2.png">
                </div>
                <div class="bfast-manage">
                  <ul id="bfast-list">
                    <?php 
                    global $wpdb;

                    function getMenuItems( $currDate, $day, $meal ) {
                      global $wpdb;
                      $gf = '';
                      $nf = '';
                      $sf = '';
                      $es = '';
                      $v = '';
                      $bitems = 'SELECT item_name FROM wp_menu WHERE is_' . $meal . '= 1 AND date_served="' . $currDate . '"';
                      $results = $wpdb->get_results($bitems);
                      if(!empty($results)) {
                           foreach($results as $r) {

                              $blah = $wpdb->get_results('SELECT glutenfree, nutfree, shellfishfree, eatsmart, vegan FROM wp_menu WHERE item_name="' . $r->item_name . '"');
                              foreach($blah as $b) {
                                if ($b->glutenfree=='1') {
                                  $gf = '<div class="circles circle1"></div>' . "\n";
                                }
                                if ($b->nutfree=='1') {
                                  $nf = '<div class="circles circle2"></div>' . "\n";
                                }
                                if ($b->shellfishfree=='1') {
                                  $sf = '<div class="circles circle3"></div>' . "\n";
                                }
                                if ($b->eatsmart=='1') {
                                  $es = '<div class="circles circle4"></div>' . "\n";
                                }
                                if ($b->vegan=='1') {
                                  $v = '<div class="circles circle5"></div>' . "\n";
                                }
                              }

                                echo "<li class='" . $meal . "-items " . $day . "'><div class='meal-text' onclick='getInfo(this)'>" . $r->item_name . "</div>" . $gf . $nf . $sf . $es . $v . "</li>" . "\n";
                                $gf='';
                                $nf = '';
                                    $sf = '';
                                    $es = '';
                                    $v = '';
                           }
                      }
                    }

                    date_default_timezone_set('America/Los_Angeles');

                    $dayofweek = date("N");
                    $day = date("l");
                    $today = date("m/d/Y");
                    $bfast = 'breakfast';

                    if ($dayofweek == 1) {
                      $date1 = date('m/d/Y');
                      echo "<style>.Monday { display: block; }</style>" . "\n";
                    }

                    if ($dayofweek == 2) {
                      $date1 = date('m/d/Y', strtotime($today. ' - 1 days'));
                      echo "<style>.Tuesday { display: block; }</style>" . "\n";
                    }

                    if ($dayofweek == 3) {
                      $date1 = date('m/d/Y', strtotime($today. ' - 2 days'));
                      echo "<style>.Wednesday { display: block; }</style>" . "\n";
                    }

                    if ($dayofweek == 4) {
                      $date1 = date('m/d/Y', strtotime($today. ' - 3 days'));
                      echo "<style>.Thursday { display: block; }</style>" . "\n";
                    }

                    if ($dayofweek == 5) {
                      $date1 = date('m/d/Y', strtotime($today. ' - 4 days'));
                      echo "<style>.Friday { display: block; }</style>" . "\n";
                    }

                    if ($dayofweek == 6) {
                      $date1 = date('m/d/Y', strtotime($today. ' + 2 days'));
                      echo "<style>.Monday { display: block; }</style>" . "\n";
                    }

                    if ($dayofweek == 7) {
                      $date1 = date('m/d/Y', strtotime($today. ' + 1 days'));
                      echo "<style>.Monday { display: block; }</style>" . "\n";
                    }

                    echo "<style>." . $day . " { display: block; }</style>" . "\n";
                    getMenuItems($date1, 'Monday', $bfast);

                   $date2 = date('m/d/Y', strtotime($date1. ' + 1 days'));
                   getMenuItems($date2, 'Tuesday', $bfast);

                   $date3 = date('m/d/Y', strtotime($date1. ' + 2 days'));
                   getMenuItems($date3, 'Wednesday', $bfast);

                   $date4 = date('m/d/Y', strtotime($date1. ' + 3 days'));
                   getMenuItems($date4, 'Thursday', $bfast);

                   $date5 = date('m/d/Y', strtotime($date1. ' + 4 days'));
                   getMenuItems($date5, 'Friday', $bfast);
					?>
                  </ul>
                </div>

              </div>

              <div class="lunch">
              <div class="lunch-header">
                Lunch
                <img class="arrow" src="/wp-content/Arrow2.png">
              </div>
                <div class="lunch-manage">
                <ul id="lunch-list">
                  <?php 
                    $lunch = 'lunch';
                    getMenuItems($date1, 'Monday', $lunch);
                    getMenuItems($date2, 'Tuesday', $lunch);
                    getMenuItems($date3, 'Wednesday', $lunch);
                    getMenuItems($date4, 'Thursday', $lunch);
                    getMenuItems($date5, 'Friday', $lunch);
					?>
                </ul>
              </div>

              </div>

    </div>

  </div>

    

              <script type="text/javascript">
	document.onload = load();
	var tabday;

	    function load() {

	      var var_data = 5;

      var myDate = new Date();
      var daynum = myDate.getDay();
      var hours = myDate.getHours();
        if (daynum == 1 || daynum == 6 || daynum == 7) {
        	loadHelper(1);
        	tabday = 'Monday';
      	}
  		if (daynum == 2) {
        	loadHelper(2);
        	tabday = 'Tuesday';
      	}
  		if (daynum == 3) {
        	loadHelper(3);
        	tabday = 'Wednesday';
      	}
  		if (daynum == 4) {
  			loadHelper(4);
  			tabday = 'Thursday';
      	}
  		if (daynum == 5) {
        	loadHelper(5);
        	tabday = 'Friday';
      	}
      	if (hours >= 0 && hours < 12){
      		$(".lunch-header").addClass("closed");
    		$(".lunch-manage").slideUp();
    		$(".lunch-header .arrow").css({
              '-webkit-transform': 'rotate(' + -90 + 'deg)',
              '-moz-transform': 'rotate(' + -90 + 'deg)',
              '-ms-transform': 'rotate(' + -90 + 'deg)',
              '-o-transform': 'rotate(' + -90 + 'deg)',
              'transform': 'rotate(' + -90 + 'deg)',
              'zoom': 1
          });
    	} 
    	else if (hours >= 12 && hours <= 23) {
    		$(".breakfast-header").addClass("closed");
    		$(".bfast-manage").slideUp();
    		$(".breakfast-header .arrow").css({
              '-webkit-transform': 'rotate(' + -90 + 'deg)',
              '-moz-transform': 'rotate(' + -90 + 'deg)',
              '-ms-transform': 'rotate(' + -90 + 'deg)',
              '-o-transform': 'rotate(' + -90 + 'deg)',
              'transform': 'rotate(' + -90 + 'deg)',
              'zoom': 1
          });
    	}
    }

    function loadHelper(num) {
    	$(".main-content").css({
    		"background": $(".tab-" + num).data("bg-color")
 		});
   		$('.tab-' + num).addClass('active');

   		$(".breakfast-header").css({
        	"background": $(".tab-" + num).data("bg-color")
      	});

        $(".lunch-header").css({
          "background": $(".tab-" + num).data("bg-color")
        });

        $(".lunch-manage").css({
          "border-color": $(".tab-" + num).data("bg-color")
        });

        $(".bfast-manage").css({
          "border-color": $(".tab-" + num).data("bg-color")
        });

        var someVar = new Date();
    }
    
  </script>

    <script>
    function getInfo(item) {
      $(".popup").css({display: 'block', height: '60%'});
      // $(".main-navigation").css({display: 'none'});
      // $(".main-content").css({display: 'none'});
      $("body").css({background: '#000', opacity: '0.8'});
      $(".everything").css({display: 'block'});
      document.getElementById("popup").innerHTML='<img class="loader" src="/wp-content/themes/eighties/ajax-loader.gif">';
      var xmlhttp=new XMLHttpRequest();
      xmlhttp.onreadystatechange=function() {
        if (xmlhttp.readyState==4 && xmlhttp.status==200) {
          document.getElementById("popup").innerHTML=xmlhttp.responseText;
          $(".popup").css({height: ''});
        }
      }
      xmlhttp.open("GET","/wp-content/themes/eighties/gethint.php?q="+item.textContent,true);
      xmlhttp.send();
      // $("#all").css({background:'#000'});
      // $("#all").css({opacity:'0.8'});
    }

    function filter(checkbox, circleNum) {
    	var myDate = new Date();
      	var daynum = myDate.getDay();
    	var kids = $('.meal-text');
    	if (checkbox.checked) {
	    	var found = false;
	    	var len = kids.length;
	    	for (var i = 0; i < len; i++) {
	    		found = false;
	    		var sibs = $(kids[i]).siblings();
	    		for (var j = 0; j < sibs.length; j++) {
		    		if ($(sibs[j]).hasClass("circle" + circleNum)) {
		    			found = true;
		    		}
		    	}
		    	if (!found) {
		    		$(kids[i]).parent().css({display: 'none'});
		    	}
	    	}
	    } else {
	    	var found = false;
	    	var len = kids.length;
	    	for (var i = 0; i < len; i++) {
	    		found = false;
	    		var sibs = $(kids[i]).siblings();
	    		for (var j = 0; j < sibs.length; j++) {
		    		if ($(sibs[j]).hasClass("circle" + circleNum)) {
		    			found = true;
		    		}
		    	}
		    	if (!found) {
		    		if ($(kids[i]).parent().hasClass(tabday)) {
		    			$(kids[i]).parent().css({display: 'block'});
		    		}
		    	}
	    	}
	    }
    }

    function closePopup() {
      $(".popup").css({display: 'none'});
      $(".main-navigation").css({display: 'block'});
      $(".main-content").css({display: 'block'});
      $("body").css({background: '#fff', opacity: '1'});
      $(".everything").css({display: 'none'});
      event.preventDefault();
    }

      var menuItems = $('.main-navigation li');

    menuItems.on("click", function(event) {

      $('.breakfast-items').css({ display: 'none' });
      $('.lunch-items').css({ display: 'none' });

      if ($(this).hasClass("tab-1")) {
        $('.Monday').css({ display: 'block' });
        tabday = 'Monday';
      }

      if ($(this).hasClass("tab-2")) {
        $('.Tuesday').css({ display: 'block' });
        tabday = 'Tuesday';
      }

      if ($(this).hasClass("tab-3")) {
        $('.Wednesday').css({ display: 'block' });
        tabday = 'Wednesday';
      }

      if ($(this).hasClass("tab-4")) {
        $('.Thursday').css({ display: 'block' });
        tabday = 'Thursday';
      }

      if ($(this).hasClass("tab-5")) {
        $('.Friday').css({ display: 'block' });
        tabday = 'Friday';
      }
        
      menuItems.removeClass("active");
      
      $(this).addClass("active");
      
      $(".main-content").css({
        "background": $(this).data("bg-color")
      });

      $(".breakfast-header").css({
        "background": $(this).data("bg-color")
      });

      $(".lunch-header").css({
        "background": $(this).data("bg-color")
      });

      $(".lunch-manage").css({
        "border-color": $(this).data("bg-color")
      });

      $(".bfast-manage").css({
        "border-color": $(this).data("bg-color")
      });
      
      event.preventDefault();
    });

    $('.lunch-header').on("click", function(event) {
      if ($(this).hasClass("closed")) {
        $(this).removeClass("closed");
        $(".lunch-manage").slideDown(1000);
        $(".lunch-header .arrow").css({
              '-webkit-transform': 'rotate(' + 0 + 'deg)',
              '-moz-transform': 'rotate(' + 0 + 'deg)',
              '-ms-transform': 'rotate(' + 0 + 'deg)',
              '-o-transform': 'rotate(' + 0 + 'deg)',
              'transform': 'rotate(' + 0 + 'deg)',
              'zoom': 1
          });
      } else {
        $(this).addClass("closed");
        $(".lunch-manage").slideUp(1000);
        $(".lunch-header .arrow").css({
              '-webkit-transform': 'rotate(' + -90 + 'deg)',
              '-moz-transform': 'rotate(' + -90 + 'deg)',
              '-ms-transform': 'rotate(' + -90 + 'deg)',
              '-o-transform': 'rotate(' + -90 + 'deg)',
              'transform': 'rotate(' + -90 + 'deg)',
              'zoom': 1
          });
      }

      event.preventDefault();
    });

    $('.breakfast-header').on("click", function(event) {
      if ($(this).hasClass("closed")) {
        $(this).removeClass("closed");
        $(".bfast-manage").slideDown(1000);
        $(".breakfast-header .arrow").css({
              '-webkit-transform': 'rotate(' + 0 + 'deg)',
              '-moz-transform': 'rotate(' + 0 + 'deg)',
              '-ms-transform': 'rotate(' + 0 + 'deg)',
              '-o-transform': 'rotate(' + 0 + 'deg)',
              'transform': 'rotate(' + 0 + 'deg)',
              'zoom': 1
          });
      } else {
        $(this).addClass("closed");
        $(".bfast-manage").slideUp(1000);
        $(".breakfast-header .arrow").css({
              '-webkit-transform': 'rotate(' + -90 + 'deg)',
              '-moz-transform': 'rotate(' + -90 + 'deg)',
              '-ms-transform': 'rotate(' + -90 + 'deg)',
              '-o-transform': 'rotate(' + -90 + 'deg)',
              'transform': 'rotate(' + -90 + 'deg)',
              'zoom': 1
          });
      }

      event.preventDefault();
    });
</script>

<!-- Filter plan: Detect text, look up in database -->