<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>

<div class="footer-staff-picks">
	<div class="container">
		<h3><?= $arParams["NAME_BLOCK"] ?></h3>
        <div class="staff-inner">
        <? foreach($arResult["ITEMS"] as $arElement): ?>
			<article class="post type-post status-publish format-standard has-post-thumbnail hentry category-design category-mobile category-photo category-video tag-design">
				<div class="featured-image">
					<a href="<?=$arElement["DETAIL_PAGE_URL"]?>" title="<?=$arElement["PREVIEW_PICTURE"]["TITLE"]?>">
						<div class="staff-picks-img" style="
							background-image: url(<?=$arElement["PREVIEW_PICTURE"]["SRC"]?>);">
						</div>
					</a>
				</div>
				<header class="entry-header">
					<h2 class="entry-title">
						<a href="<?=$arElement["DETAIL_PAGE_URL"]?>" rel="bookmark">
							<?=$arElement["NAME"]?>
						</a>
					</h2>
				</header>
			</article>
		<? endforeach;?>
		</div>
	</div>
</div>
