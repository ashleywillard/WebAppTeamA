
<style>
input[type=checkbox].filter {
	display:none;
}

input[type=checkbox].filter + label.filter-label1 {
	padding-left:27px;
	padding-right: 0px;
	/*height:px; */
	display:inline-block;
	line-height:22px;
	background-image:url(/OrangeUnchecked.png);
	background-repeat:no-repeat;
	background-size: 22px 22px;
	background-position: 0 0;
	font-size:18px;
	vertical-align:middle;
	cursor:pointer;

}

input[type=checkbox].filter:checked + label.filter-label1 {
	background-image:url(/OrangeChecked.png);
}
label.filter-label1 {
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}

input[type=checkbox].filter + label.filter-label2 {
	padding-left:27px;
	display:inline-block;
	line-height:22px;
	background-image:url(/RedUnchecked.png);
	background-repeat:no-repeat;
	background-size: 22px 22px;
	background-position: 0 0;
	font-size:18px;
	vertical-align:middle;
	cursor:pointer;

}

input[type=checkbox].filter:checked + label.filter-label2 {
	background-image:url(/RedChecked.png);
}
label.filter-label2 {
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}

input[type=checkbox].filter + label.filter-label3 {
	padding-left:27px;
	display:inline-block;
	line-height:22px;
	background-image:url(/PurpleUnchecked.png);
	background-repeat:no-repeat;
	background-size: 22px 22px;
	background-position: 0 0;
	font-size:18px;
	vertical-align:middle;
	cursor:pointer;

}

input[type=checkbox].filter:checked + label.filter-label3 {
	background-image:url(/PurpleChecked.png);
}
label.filter-label3 {
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}

input[type=checkbox].filter + label.filter-label4 {
	padding-left:27px;
	display:inline-block;
	line-height:22px;
	background-image:url(/BlueUnchecked.png);
	background-repeat:no-repeat;
	background-size: 22px 22px;
	background-position: 0 0;
	font-size:18px;
	vertical-align:middle;
	cursor:pointer;

}

input[type=checkbox].filter:checked + label.filter-label4 {
	background-image:url(/BlueChecked.png);
}
label.filter-label4 {
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}

input[type=checkbox] + label.filter-label5 {
	padding-left:27px;
	display:inline-block;
	line-height:22px;
	background-image:url(/GreenUnchecked.png);
	background-repeat:no-repeat;
	background-size: 22px 22px;
	background-position: 0px 0;
	font-size:18px;
	vertical-align:middle;
	cursor:pointer;

}
input[type=checkbox].filter:checked + label.filter-label5 {
	background-image:url(/GreenChecked.png);
}
label.filter-label5 {
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}

</style>
<header class="transparent">
      	<h1 class="entry-title move"><?php the_title(); ?></h1>
    	<p>This is the custom theme</p>
</header>
<form class="sform">
	<input class="filter" id="check1" type="checkbox" name="glutenFree"  /><label for="check1" class="filter-label1">Gluten Free</label>
	<input class="filter" id="check2" type="checkbox" name="nutFree" /><label for="check2" class="filter-label2">Nut Free</label>
	<input class="filter" id="check3" type="checkbox" name="shellfishFree" /><label for="check3" class="filter-label3">Shellfish Free</label>
	<input class="filter" id="check4" type="checkbox" name="eatSmart" /><label for="check4" class="filter-label4">Eat Smart</label>
	<input class="filter" id="check5" type="checkbox" name="vegan" /><label for="check5" class="filter-label5">Vegan</label>
</form>

<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Messages <b class="caret"></b></a>
                  <span class="dropdown-arrow"></span>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </li>













