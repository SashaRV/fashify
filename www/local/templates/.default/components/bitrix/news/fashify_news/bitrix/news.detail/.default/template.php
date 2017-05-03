<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>



<article id="" class="post type-post status-publish format-standard has-post-thumbnail hentry category-design category-muisic category-video tag-design">
	<header class="entry-header">
		<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
			<h1 class="entry-title"><?=$arResult["NAME"]?></h1>
		<?endif;?>
		<div class="entry-meta">
			<span class="byline"> Posted by
				<span class="author vcard">
					<a class="url fn n" href="https://wpstash.com/fashify/author/wpstash/">wpstash
					</a>
				</span>
			</span>
			<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
				<span class="posted-on"> on 
					<a href="" rel="bookmark">
						<time class="entry-date published" datetime="<?=$arResult["DISPLAY_ACTIVE_FROM"]?>"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></time>
						<time class="updated" datetime="<?=$arResult["DISPLAY_ACTIVE_FROM"]?>"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></time>
					</a>
				</span>
			<?endif;?>
			<div id="social-share-buttons" class="social-likes" data-counters="no">
				<div class="facebook" title="Поделиться ссылкой на Фейсбуке">Facebook</div>
				<div class="twitter" title="Поделиться ссылкой в Твиттере">Twitter</div>
				<div class="mailru" title="Поделиться ссылкой в Моём мире">Мой мир</div>
				<div class="vkontakte" title="Поделиться ссылкой во Вконтакте">Вконтакте</div>
				<div class="odnoklassniki" title="Поделиться ссылкой в Одноклассниках">Одноклассники</div>
				<div class="plusone" title="Поделиться ссылкой в Гугл-плюсе">Google+</div>
			</div>
			<div class="clear-both"></div>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
	    <div class="entry-thumb">
        	<img 
        	src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" 
        	class="attachment-full size-full wp-post-image" 
        	alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>" 
        	width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>" 
        	height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
        	title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
        	/>
    	</div>
	<?endif?>
    
	<div class="entry-content">
		<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arResult["FIELDS"]["PREVIEW_TEXT"]):?>
			<p><?=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?></p>
		<?endif;?>

		<?if($arResult["NAV_RESULT"]):?>
			<?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
			<?echo $arResult["NAV_TEXT"];?>
			<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
		<?elseif(strlen($arResult["DETAIL_TEXT"])>0):?>
			<?echo $arResult["DETAIL_TEXT"];?>
		<?else:?>
			<?echo $arResult["PREVIEW_TEXT"];?>
		<?endif?>
		
	</div><!-- .entry-content -->

	
<!-- 	<nav class="navigation post-navigation" role="navigation">
		<h2 class="screen-reader-text">Continue Reading</h2>
		<div class="nav-links"><div class="nav-previous"><a href="https://wpstash.com/fashify/2016/07/06/theyre-observant-incredibly-intuitive-and-can-sometimes-figure-out/" rel="prev"><span>Previous article</span> They’re observant, incredibly intuitive and can sometimes figure out</a></div><div class="nav-next"><a href="https://wpstash.com/fashify/2016/07/06/samsung-vs-apple-samsung-is-winning-every-way-but-one/" rel="next"><span>Next article</span> Samsung vs. Apple: Samsung Is Winning Every Way But One</a></div></div>
	</nav>-->
	<footer class="entry-footer">
		<div class="entry-taxonomies">
			<?if(count($arResult["CATEGORIES"])):?>
            <div class="entry-categories posted-in-detail">
				<span>Posted in</span>
            	<?php foreach ($arResult["CATEGORIES"] as $category): ?>
            		<a class="category tag" rel="category tag"><?=$category["NAME"]?></a> 
            	<?php endforeach ?>
            </div>
            <?endif;?>
		</div>	
	</footer><!-- .entry-footer --> 

</article>