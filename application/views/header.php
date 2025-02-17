<?php
// autodetect user's language
if(!isset($_COOKIE['language'])) { 
	
	/**
	 * Get browser language, given an array of avalaible languages.
	 * 
	 * @param  [array]   $availableLanguages  Avalaible languages for the site
	 * @param  [string]  $default             Default language for the site
	 * @return [string]                       Language code/prefix
	 */
	function get_browser_language( $available = [], $default = 'en' ) {
		if ( isset( $_SERVER[ 'HTTP_ACCEPT_LANGUAGE' ] ) ) {
			$langs = explode( ',', $_SERVER['HTTP_ACCEPT_LANGUAGE'] );
	    if ( empty( $available ) ) {
	      return $langs[ 0 ];
	    }
			foreach ( $langs as $lang ){
				$lang = substr( $lang, 0, 2 );
				if( in_array( $lang, $available ) ) {
					return $lang;
				}
			}
		}
		return $default;
	}
	
	$languages = file_get_contents(asset_url().'js/languages.json');
	$languages = json_decode($languages, true);

	$available_languages = array();
	foreach($languages as $lang) {
		array_push($available_languages,$lang['code']);
	}
	
	$language = get_browser_language( $available_languages, "en");
	
	setcookie("language", $language, time() + (86400 * 30), "/"); 	
	
}

if(!isset($_COOKIE['country'])) { 
	$ipinfo = ip_info();
	if($ipinfo) {
		$country = country_code_to_name($ipinfo['country_code']);
	} else {
		$country = "UNITED_STATES";
	}
	setcookie("country", $country, time() + (86400 * 30), "/");
	$_COOKIE['country'] = $country; // Won't set until page load
}

if(!isset($_COOKIE['currency'])) { 
	
	// Try to map country name to currency otherwise fall back to BTC
	$countries = file_get_contents(asset_url().'js/countries.json');
	$countries = json_decode($countries, true);
	
	$user_country = $_COOKIE['country'];

	foreach($countries as $json_country) {
		if($_COOKIE['country'] == $json_country['dataName']) {
			setcookie("currency", $json_country['currency'], time() + (86400 * 30), "/");
			$_COOKIE['currency'] = $json_country['currency'];
			break;
		}
	}
	
	if($_COOKIE['currency'] == "") {
		setcookie("currency", "BTC", time() + (86400 * 30), "/");
	}
	
}

$locale = ( isset($_COOKIE['locale']) ) ? 
            $_COOKIE['locale'] : 
            $_SERVER['HTTP_ACCEPT_LANGUAGE'];
setlocale(LC_ALL, $locale);

?>
<html>
	<head>
		
		<meta name="description" content="A free online marketplace to buy and sell goods / services using cryptocurrency. OpenBazaar is a peer-to-peer ecommerce platform with no fees or restrictions."/>
		<meta name="keywords" content="shop,online,search,openbazaar,bitcoin,crypto,bitcoin cash,zcash,crypto,buy" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
		
		<meta property="og:title" content="<?=(isset($page_title))?ucfirst($page_title):"";?>OpenBazaar">
		<meta property="og:description" content="<?=(isset($page_description))?$page_description:"";?>">
		<meta property="og:image" content="<?=(isset($page_image))?$page_image:"";?>">
		<meta property="og:url" content="<?="https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"?>">
		<meta name="twitter:card" content="summary_large_image">
						
		<link rel="stylesheet" href="<?=asset_url()?>css/styles.css?2">
		<link href="https://fonts.googleapis.com/css?family=Montserrat|Noto+Sans:400,700" rel="stylesheet">
		<link rel="stylesheet" href="<?=asset_url()?>css/flickity.css" media="screen">
		<link rel="icon" type="image/png" href="<?=asset_url()?>/img/base-rounded.png" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>				
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>			
		<script src="//twemoji.maxcdn.com/2/twemoji.min.js?2.5"></script>
		<script src="<?=asset_url()?>js/jquery.3.3.1.js"></script>		
		<script src="<?=asset_url()?>js/script.js"></script>	
		<script src="<?=asset_url()?>js/flickity.pkgd.min.js"></script>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.7/jquery.lazy.min.js"></script>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.7/jquery.lazy.plugins.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
		<script src="//unpkg.com/ionicons@4.3.0/dist/ionicons.js"></script>
		
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-75536111-2"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		
		  gtag('config', 'UA-75536111-2');
		</script>
	
		<title><?=(isset($page_title))?ucfirst($page_title):"";?>Mylaxx</title>
	</head>
	<body id="<?=(isset($body_class)) ? $body_class : "";?>" class="<?php if(isset($_SESSION['hidebanner'])) { ?>no-promotion<?php } ?>">
		<script>$(window).resize(function(){});</script>

		<div class="Rectangle-3">						
			
			<div class="logo-title">
				<div class="Icon-Frame clickable"><img src="<?=asset_url()?>img/base-rounded.png" srcset="<?=asset_url()?>img/base-rounded@2x.png 2x, <?=asset_url()?>img/base-rounded@3x.png 3x" class="Base-Rounded" onclick="location.href='/';"></div> 
				<div class="OpenBazaar" style="float:left"><a href="/" title="OpenBazaar"><img src="<?=asset_url()?>img/icon-openbazaar-text.png" style="margin-top:22px; width: 100px;" /></a></div>
			</div>

			<div class="back-btn-frame">
				<div class="Back-Button button" style="background-image: url('<?=asset_url()?>img/icon-back.png')">
					<a href="<?php if(isset($_SERVER['HTTP_REFERER'])) { echo strpos($_SERVER['HTTP_REFERER'], '/store/') ? $_SERVER['HTTP_REFERER'] : '/'; } ?>"></a>
				</div>
			</div>
			
			<!-- <div class="search-icons">
				<div class="search-icon-frame" style="border-bottom:1px solid black;width:36px;">
					<div class="search-icon search-icon-active"><a href="/discover/results"><img src="<?=asset_url()?>/img/icon-ob1-border.png" width=36 height=36 title="OB1" /></a></div>
				</div>
				<div style="display: table-cell;width:10px;"></div>
				<div class="search-icon-frame" >
					<div class="search-icon"><a href="https://blockbooth.com" title="Visit Blockbooth.com" target="_blank"><img src="<?=asset_url()?>img/icon-block-booth.png" width=36 height=36 title="Visit Blockbooth.com" /></a></div>
				</div>
				<div style="display: table-cell;width:10px;"></div>
			</div> -->
			
			<div class="config-btn-frame"> 
				
				<div style="float: right; margin-left: 8px; height: 32px; line-height: 32px;" class="mobile-hidden"><a href="/sell" style="color: #007aff; font-size: 13px; text-decoration: none;">Sell on OpenBazaar</a></div>
				<div class="Config-Button button" style="border-radius: 5px!important;border-color: #fff;background-image: url('http://134.209.23.223:4002/assets/img/icon-gear.png')" onclick="$('#Config-Modal').toggle();$('#Config-Modal').load('/config');"></div>
				<div class="header-search">
					<form id="frm-header-search" onsubmit="return processHeaderSearch();">
					<input style="border: solid 1px #fff !important;border-radius: 5px;" class="header-search-input" type="text" name="q" value="" placeholder="🔍 Search">
						<input type="submit" style="display: none" />
					</form>
				</div>
				
				<?php if(isset($_COOKIE['currency']) && $_COOKIE['currency'] != "BTC") { ?>
				<div class="btc-price" style="box-sizing: border-box;padding:8px; float:right;margin-right:2px;font-size:13px;">
					<img src="<?=asset_url()?>img/btcIcon128.png" /> <?=pretty_price(100000000, "BTC")?>
					<img src="<?=asset_url()?>img/bchIcon128.png" style="margin-left: 100px;" /> <?=pretty_price(100000000, "BCH")?>
					<img src="<?=asset_url()?>img/zecIcon128.png" style="margin-left: 15px;" /> <?=pretty_price(1, "ZEC")?>
				</div>
				<?php } ?>

				
			</div>
			
			
		</div>				
