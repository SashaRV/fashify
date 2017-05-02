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
	</nav>
	<footer class="entry-footer">
		<div class="entry-taxonomies"><div class="entry-categories"><span>Posted in</span> <a href="https://wpstash.com/fashify/category/design/" rel="category tag">Design</a>, <a href="https://wpstash.com/fashify/category/muisic/" rel="category tag">Muisic</a>, <a href="https://wpstash.com/fashify/category/video/" rel="category tag">Videos</a></div><div class="entry-tags"><span>Tagged in</span> <a href="https://wpstash.com/fashify/tag/design/" rel="tag">design</a></div></div>	
	</footer><!-- .entry-footer --> 

</article>