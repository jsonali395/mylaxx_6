<style>
/* top search*/
.search-box {
    margin: auto;
    margin-bottom: 25px;
    position: relative;
    border-radius: 8px;
    margin-left: 124px;
    border: 3px solid #cecece;
    background: #fff;
    width: 67%;
	height: 57px;
}
.category-search-form {
	padding-right: 6px;
}
.search-box select:focus, .search-box select {
	border: none;
	border-left: 1px #ddd solid;
	border-right: 1px #ddd solid;
	/*-webkit-appearance: none;
   -moz-appearance:    none;
   appearance:         none; */  
	-webkit-border-radius: 0;  /* Safari 3-4, iOS 1-3.2, Android 1.6- */
	-moz-border-radius: 0;  /* Firefox 1-3.6 */
	border-radius: 0;  /* Opera 10.5, IE 9, Safari 5, Chrome, Firefox 4, iOS 4, Android 2.1+ */
}
.search-box .categories-filter {
	margin:0px; 
	padding:0px;
	list-style: none;
	border-left: 1px solid #e5e5e5;
    text-transform: capitalize;
    display: inline-block;
    line-height: 51px;
	padding-left:15px
    }
	
.search-box .categories-filter .dropdown-menu {
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    border: 1px solid #e1e1e1;
    padding: 12px 17px;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    border-radius: 0px;
	font-size:14px;
	list-style: none;
	
}

.search-box .categories-filter a {	color: #5D5D5D;} 

.search-box .categories-filter .dropdown-menu li a {
    padding: 0px;
	font-size: 13px;

}

.search-box .categories-filter .dropdown-menu li a:hover {
    background:#fff
}

.search-box .categories-filter .menu-header {font-weight:600; line-height:normal}

.search-box .categories-filter .dropdown-menu li {
    margin-bottom: 10px;
}
#frm-search-input {
	margin: 0;
	width:100%;
	font-size: 14px;
	height: 52px;
	color: #5D5D5D;
	padding: 0 20px;
	background: none;
	outline: none;
	border: none;
	line-height:40px;
  display:inline-block
  
}
.cate-dropdown {
	border: medium none;
	float: left;
	height: 35px;
	padding: 5px !important;
	width: 220px;
	line-height: 30px;
	letter-spacing: 0.5px
}
.search-btn-bg {
	-moz-appearance: button;
	background: #fed839 url("img/search-icon.png") no-repeat scroll 18px 18px;
	border: none;
	border-radius: 0 7px 7px 0;
	color: #fff;
	cursor: pointer;
	font-weight: bold;
	height: 57px;
	line-height: 17px;
	padding: 6px 5px;
	position: absolute;
	text-transform: uppercase;
	right: -3px;
	top: 0px;
	width: 55px;
	border-left: 1px #eaeaea solid;
	border: none;
  margin-top: -3px;
  
  
}
.search-btn-bg .glyphicon-search:before {
	font-size: 14px;
	color: #000
}
.search-btn-bg:hover {
	color: #000;
}
.glyphicon-search:before {
	font-size: 12px;
}
.cart-top .dropdown-menu {
	padding: 10px;
	min-height: 100px;
	height: auto !important;
	min-width: 445px;
	-webkit-transition: all 300ms ease-in-out 0s;
	-o-transition: all 300ms ease-in-out 0s;
	transition: all 300ms ease-in-out 0s;
	top: 0;
	position: fixed;
	z-index: 999;
	display: block;
	-webkit-transform: translate3d(100%, 0, 0);
	-moz-transform: translate3d(100%, 0, 0);
	-ms-transform: translate3d(100%, 0, 0);
	-o-transform: translate3d(100%, 0, 0);
	transform: translate3d(100%, 0, 0);
	-webkit-transition: all .4s cubic-bezier(.25, .46, .45, .94) 0s;
	-o-transition: all .4s cubic-bezier(.25, .46, .45, .94) 0s;
	transition: all .4s cubic-bezier(.25, .46, .45, .94) 0s
}
#search .input-group {
	border: 1px #ddd solid;
	display: inline-block;
	width: 100%;
	background: #fff
}
#search input {
	height: 45px;
	display: inline-block;
	width: 90%;
	border: none;
	background: #fff;
	box-shadow: none;
}
#search button {
	line-height: 24px;
	padding: 12px 18px 10px;
	float: right;
	display: inline-block;
	background: #0083c1;
	border: none;
	color: #fff;
}
#search button:hover {
	background: #0083c1;
	border: none;
	color: #fff
}
.top-search .modal-dialog {
	margin-top: 80px;
}
.top-search .fade.in {
	background: none repeat scroll 0 0 rgba(0,0,0,0.5);
	opacity: 1
}
.top-search .modal-content {
	border-radius: 3px
}
.top-search .modal-header {
	border: none;
}
.top-search .modal-body {
	padding: 10px 50px 50px;
}
#search button i {

	font-size: 12px
}
.top-search .modal-lg {
	width: 680px

}
.modal-header {
	text-align: left
}
.modal-open {
	padding: 0px !important
}
.top-search .modal-header .close {
	opacity: 1;
	background: red;
	border-radius: 100%;
	margin-top: -22px;
	margin-right: -24px;
}
.top-search .modal-header .close span {
	color: #fff;
	font-size: 22px;
	padding: 0 4px;
	text-shadow: none;
	line-height: 20px;
}
.welcome-msg {
	text-align: left;
	display: inline-block;
	padding: 0px;
	margin: 0px 5px;
	font-size: 13px;
	color: #334141;
	vertical-align: top;
	margin-top: 10px;
	margin-right: 0px;
	font-weight: normal;

}
</style>




<div class="Discover-Header-Bar">
  <div class="Discover-Header-Bar-Inner">
            <div class="search-box">
            <form id="search_mini_form" action="javascript:void();" onsubmit="location.href='/discover/results?q='+encodeURIComponent(document.getElementById('frm-search-input').value);" method="get">
              <!-- Autocomplete End code -->
              <input id="frm-search-input" type="text" name="q" value="Search entire store here..." class="searchbox" maxlength="128">
              <button type="submit" title="Search" class="search-btn-bg" id="submit-button"><img src="assets/img/search-icon.png"></button>
            </form>
          </div>
    
    
    <div class="Suggestions-Box clearfix">
      <div class="lbl clearfix">Suggestions:</div> 
      <a href="<?php echo base_url();?>discover/results?q=books">Books</a> 
      <a href="<?php echo base_url();?>discover/results?q=art">Art</a> 
      <a href="<?php echo base_url();?>discover/results?q=clothing">Clothing</a>
      <a href="<?php echo base_url();?>discover/results?q=bitcoin">Bitcoin</a> 
      <a href="<?php echo base_url();?>discover/results?q=crypto">Crypto</a> 
      <a href="<?php echo base_url();?>discover/results?q=handmade">Handmade</a> 
      <a href="<?php echo base_url();?>discover/results?q=health">Health</a> 
      <a href="<?php echo base_url();?>discover/results?q=toys">Toys</a> 
      <a href="<?php echo base_url();?>discover/results?q=electronics">Electronics</a> 
      <a href="<?php echo base_url();?>discover/results?q=games">Games</a> 
      <a href="<?php echo base_url();?>discover/results?q=music">Music</a>  
    </div>
  </div>  
</div>
<!-- <div class="Search-Bar clearfix">
      <form action="javascript:void();" onsubmit="location.href='/discover/results?q='+encodeURIComponent(document.getElementById('frm-search-input').value);">
      <div class="Search-Bar-Box-Left">
        <div style="background-image: url('<?=asset_url()?>img/icon-ob1-border.png'); height: 26px; width: 26px;background-size: contain; position: absolute;margin-top: 8px;margin-left: 8px;"></div>
        <input id="frm-search-input" type="text" class="Search-OB1" placeholder="Search" value="<?=(isset($q))? $q :"";?>" style="border-top-right-radius: 0;" />
        
      </div>
      <button class="Search-Button" type="submit">
        <div class="Search">Search</div>
      </button>
      </form>
    </div> -->