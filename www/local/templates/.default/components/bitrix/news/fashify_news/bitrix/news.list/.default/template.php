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


<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<article id="<?=$this->GetEditAreaId($arItem['ID']);?>"
		class="post-50 post type-post status-publish format-standard has-post-thumbnail hentry category-design category-mobile category-photo category-video tag-design">
	    <!-- begin .featured-image -->
	    <div class="featured-image">
	        <a href="" 
	        title="Samsung vs. Apple: Samsung Is Winning Every Way But One">
	        	<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
		        class="attachment-fashify-thumb-default size-fashify-thumb-default wp-post-image" 
		        alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" 
		        srcset="" 
		        sizes="(max-width: 676px) 100vw, 676px" 
		        width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>" 
	        	height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>">
	        </a>    
	    </div>
	        <!-- end .featured-image -->

	    <div class="entry-info">
	            <!-- begin .entry-header -->
	            <div class="entry-header">
				    <?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
						<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
							<h2 class="entry-title">
			                	<a href="<?= $arItem["DETAIL_PAGE_URL"]?>" rel="bookmark"><?= $arItem["NAME"]?>
			                	</a>
			                </h2>
						<?else:?>
						<?endif;?>
					<?endif;?>

	                <div class="entry-meta">
	                    <span class="byline"> Posted by 
	                    	<span class="author vcard">
	                    		<a class="url fn n" href="https://wpstash.com/fashify/author/wpstash/">wpstash
	                    		</a>
	                    	</span>
	                    </span>
	                    <?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
							<span class="posted-on"> on 
	                    	<a href="" rel="bookmark">
	                    	<time class="entry-date published" datetime="<?= $arItem["DISPLAY_ACTIVE_FROM"]?>"><?= $arItem["DISPLAY_ACTIVE_FROM"]?>
	                    	</time>
	                    	</a>
	                    </span>
						<?endif?>
	                    <span class="posted-in"> in 
	                    	<a href="https://wpstash.com/fashify/category/design/" rel="category tag">Design
	                    	</a>, 
	                    	<a href="https://wpstash.com/fashify/category/mobile/" rel="category tag">Mobile
	                    	</a>, 
	                    	<a href="https://wpstash.com/fashify/category/photo/" rel="category tag">Photos
	                    	</a>, 
	                    	<a href="https://wpstash.com/fashify/category/video/" rel="category tag">Videos
	                    	</a>
	                    </span>
	                </div>

	            </div>
	            <!-- end .entry-header -->

				<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
		            <div class="entry-content">
		                <p><?= $arItem["PREVIEW_TEXT"];?></p>
		            </div><!-- .entry-content -->
	            <?endif;?>
	    </div>
	</article>
<?endforeach;?>