<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
$dir = $APPLICATION->GetCurDir();
?>
<!DOCTYPE HTML>
<html>
	<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico?v=2018">


<? $APPLICATION->AddHeadScript('//code.jquery.com/jquery-latest.js');?>
<? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/bootstrap/js/bootstrap.min.js');?>
<? $APPLICATION->AddHeadScript('//cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.js');?>
<? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/bootstrap/js/bootstrap.min.js');?>
<? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/wow.min.js');?>
<? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/bootstrap/css/bootstrap.css');
		$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/animate.css');
		$APPLICATION->SetAdditionalCSS('//cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.css');
		$APPLICATION->SetAdditionalCSS('//fonts.googleapis.com/css?family=Fira+Sans+Condensed:400,700,900,700i');
		$APPLICATION->SetAdditionalCSS('//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
		?>


		<? $APPLICATION->ShowHead();?>
		<title><? $APPLICATION->ShowTitle();?></title>

<script>
wow = new WOW(
		{
		boxClass:     'wow',      // default
		animateClass: 'animated', // default
		offset:       0,          // default
		mobile:       false,       // default
		live:         true        // default
	  }
	  )
	  wow.init();
</script>
<!-- дополнение -->
<style>
 #ki_navbar{
padding-top:1%;
list-style-type:none;
top:0;
/*position:fixed;*/
}
#ki_navbar li{
padding-left:10px;
display:inline;
}
#ki_navbar a, a:hover, a:focus{
text-decoration:none;
}
#ki_navbar a{
font-size: 1.05vw;
color:#036;
}
#ki_navbar a:hover{
color:#7093b5;
}
#ki_navbar li.current>a{
background-color:#ebc;
}
.new-menu{
top:0;
position:fixed;
width:100%;
left:0;
z-index:500;
padding-left:3%;
height:90px;
background:url(/local/templates/main/images/rainbow1.jpg) center -50px no-repeat
}
</style>
<!-- дополнениеконец -->
	</head>
	<body>
	 <div id="body_overlay"></div>
		<div id="panel">
			<? $APPLICATION->ShowPanel();?>
		</div>
<div class="overlay">
	<div class="container">



		<div class="row">
<!-- дополнение -->
			<div class="col-sm-3">
		<!--<div class="site-title"><a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/images/logo.png"  width="300"></a></div>--></div>
<div class="row">
<div class="new-menu">
<!-- <div class="header" > -->
<div id="ki_navbar">
<div class="col-sm-3">
<a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/images/logo.png"></a> </div>
<div class="col-sm-9" style="margin-top: 1.2%;">
<li><a href="/novosti/">Новости</a></li>
<li><a href="/dokumenty/">Документы</a></li>
<li><a href="/raskrytie-informatsii-fayly/">Раскрытие информации</a></li>
<li><a href="/normativno-pravovye-akty/">Нормативная-правовые акты</a></li>
<li><a href="/rajony/">Районы</a></li>
<li><a href="/uslugi/">Услуги</a></li>
<li><a href="/voprosy-i-otvety/">Вопросы и ответы</a></li>
<li><a href="/nashi-proekty/">Наши проекты</a></li>
<li><a href="http://vk.com/ros_komi">Мы в "ВКонтакте"!</a></li>
</div></div></div></div>

<!-- дополнениеконец -->
			</div>
			<!-- <div class="col-sm-6">
				<p class="text-right"><span class="fa fa-times hide-overlay"></span></p>
			</div>-->
		</div>
		<div class="row">
			<div class="col-sm-7">
			<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"main", 
	array(
		"COMPONENT_TEMPLATE" => "main",
		"ROOT_MENU_TYPE" => "top",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	),
	false
); ?>
			</div>
			<div class="col-sm-5">
				<form action="/search/">
					<div class="input-group">
      <input type="text" class="form-control input-lg" name="q" value="" placeholder="Поиск по сайту">
      <span class="input-group-btn">
        <button class="btn btn-primary btn-lg btn-lg2" type="submit"><span class="fa fa-search"></span></button>
      </span>
    </div>
			</form>

				<div class="contacts">
						<h2>ООО «УХТАЖИЛФОНД»</h2>
						<p><strong>Адрес</strong> <br>169300, Республика Коми,<br>
						г. Ухта, ул. Первомайская, 22Б</p>
						
						<p>
						<strong>Телефон:</strong> 8-800-350-39-62 / 8 (8216) 78-65-15<br>
						<strong>Email:</strong> <a href="mailto:mail@regop-komi.ru">mail@regop-komi.ru</a>
						</p>
						<p>
						<strong>Режим работы:</strong><br>
						ПН-ЧТ: 8:00-16:30
						</p>
							
					</div>
			</div>
	</div>
	</div>
</div>
<header<? if($dir =='/') { ?> class="full-header"<? } ?>> 
 
  <div class="container">
    <div class="row">
			
       <div class="col-sm-7">
        <!-- изменение САВ --> 
		<!-- <div class="site-title"><? if($dir =='/') { ?><img src="<?=SITE_TEMPLATE_PATH?>/images/logo.png"  width="300"><? } else { ?><a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/images/logo.png" width="200"></a><? } ?></div> --> 
		<!-- изменениеконец САВ -->
<? if($dir =='/') { ?>
        <div class="site-sligan wow fadeInDown" data-wow-duration="600ms" data-wow-delay="0.4s">Оперативно-диспетчерская служба<br>8-800-350-39-62</div>
        <div class="site-caption wow fadeInLeft" data-wow-duration="1100ms" data-wow-delay="1s">
        ООО «Региональный оператор Севера»</div>
				<? } ?>
     </div>
        
<div class="col-sm-5">
				<!-- изменение САВ --><!-- <p class="text-right"><span class="show-overlay-wrap"><span class="fa fa-bars show-overlay"></span></span></p> 
<!-- изменениеконец САВ -->        
<? if($dir =='/') { ?>
				<div class="map wow fadeInRight" data-wow-duration="1100ms" data-wow-delay="1s">
					<? include($_SERVER["DOCUMENT_ROOT"].'/local/templates/main/images/map.svg') ?>
					<script>

	$(document).ready(function() {
		$('#path1').click(function() {
			window.open("/rajony/syktyvkar/", '_self');
		});
    
    $('#path2').click(function() {
			window.open("/rajony/vorkuta/", '_self');
		});
    
    $('#path3').click(function() {
			window.open("/rajony/vuktyl/", '_self');
		});
    
    $('#path4').click(function() {
			window.open("/rajony/inta/", '_self');
		});
    
    $('#path5').click(function() {
			window.open("/rajony/usinsk/", '_self');
		});
    
    $('#path6').click(function() {
			window.open("/rajony/ukhta/", '_self');
		});
    
    $('#path7').click(function() {
			window.open("/rajony/pechora/", '_self');
		});
    
    $('#path8').click(function() {
			window.open("/rajony/izhemskiy-munitsipalnyy-rayon/", '_self');
		});
    
    $('#path9').click(function() {
			window.open("/rajony/knyazhpogostskiy-munitsipalnyy-rayon/", '_self');
		});
    
    $('#path10').click(function() {
			window.open("/rajony/koygorodskiy-munitsipalnyy-rayon/", '_self');
		});
    $('#path11').click(function() {
			window.open("/rajony/kortkerosskiy-munitsipalnyy-rayon/", '_self');
		});
    $('#path12').click(function() {
			window.open("/rajony/priluzskiy-munitsipalnyy-rayon/", '_self');
		});
    
    $('#path13').click(function() {
			window.open("/rajony/sosnogorskiy-munitsipalnyy-rayon/", '_self');
		});
    
    $('#path14').click(function() {
			window.open("/rajony/syktyvdinskiy-munitsipalnyy-rayon/", '_self');
		});
    
    $('#path15').click(function() {
			window.open("/rajony/sysolskiy-munitsipalnyy-rayon/", '_self');
		});
    
    $('#path16').click(function() {
			window.open("/rajony/troitsko-pechorskiy-munitsipalnyy-rayon/", '_self');
		});
    
    $('#path17').click(function() {
			window.open("/rajony/udorskiy-munitsipalnyy-rayon/", '_self');
		});
    
    $('#path18').click(function() {
			window.open("/rajony/ust-vymskiy-munitsipalnyy-rayon/", '_self');
		});
    
    $('#path19').click(function() {
			window.open("/rajony/ust-kulomskiy-munitsipalnyy-rayon/", '_self');
		});
    
    $('#path20').click(function() {
			window.open("/rajony/ust-tsilemskiy-munitsipalnyy-rayon/", '_self');
		});
    
    
    

 
        
    });
</script>
					<? } ?>
        </div>
      </div> 
     
			
			
    </div>
  </div>
</header>
<? if($dir !='/') { ?>
<div class="container">
	<h1 class="text-center"><? $APPLICATION->ShowTitle('h1');?></h1>
	<div class="row">


















































































<? } ?>