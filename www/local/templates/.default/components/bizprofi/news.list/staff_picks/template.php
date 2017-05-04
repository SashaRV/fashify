<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="footer-staff-picks">
	<div class="container">
		<h3>Staff Picks</h3>
        <div class="staff-inner">
        <? foreach($arResult["ITEMS"] as $arElement): ?>
			<article id="post-50-recent" class="post-50 post type-post status-publish format-standard has-post-thumbnail hentry category-design category-mobile category-photo category-video tag-design">
				<div class="featured-image">
					<a href="#" title="Samsung vs. Apple: Samsung Is Winning Every Way But One">
						<img src="<?=$arElement["PREVIEW_IMG"]["SRC"]?>" class="attachment-fashify-thumb-layout3 size-fashify-thumb-layout3 wp-post-image" alt="">
					</a>
				</div>
				<header class="entry-header">
					<h2 class="entry-title">
						<a href="" rel="bookmark">
							<?=$arElement["NAME"]?>
						</a>
					</h2>
				</header>
			</article>
		<? endforeach;?>
		</div>
	</div>
</div>
