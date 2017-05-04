<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>
		
	</main><!-- #main -->
</div><!-- #primary -->

<aside id="secondary" class="sidebar widget-area" role="complementary">
	<section id="search-3" class="widget widget_search"><form role="search" method="get" id="searchform" class="search-form" action="https://wpstash.com/fashify/">
    <label for="s">
		<span class="screen-reader-text">Search for:</span>
		<input class="search-field" placeholder="Search" value="" name="s" id="s" type="text">
	</label>
	<button type="submit" class="search-submit">
        <i class="fa fa-search"></i>
    </button>
    </form>
    </section>
    	<section class="widget fashify-posts-widget">
			<?$APPLICATION->IncludeComponent(
				"bitrix:main.include", 
				".default", 
				array(
					"AREA_FILE_RECURSIVE" => "Y",
					"AREA_FILE_SHOW" => "sect",
					"AREA_FILE_SUFFIX" => "widget_sidebar_top",
					"EDIT_TEMPLATE" => "",
					"COMPONENT_TEMPLATE" => ".default"
				),
				false
			);?>
        </section>
		<section class="widget widget_categories">
			<?$APPLICATION->IncludeComponent(
				"bitrix:main.include", 
				".default", 
				array(
					"AREA_FILE_RECURSIVE" => "Y",
					"AREA_FILE_SHOW" => "sect",
					"AREA_FILE_SUFFIX" => "widget_sidebar",
					"EDIT_TEMPLATE" => "",
					"COMPONENT_TEMPLATE" => ".default"
				),
				false
			);?>
		</section>
	</aside><!-- #secondary -->
</div>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		 <?	// STAFF PICKS
		 	$APPLICATION->IncludeComponent(
			"fashify:news.list",
			".default",
			Array(
				"AJAX_MODE" => "N",
				"AJAX_OPTION_ADDITIONAL" => "",
				"AJAX_OPTION_HISTORY" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"CACHE_TIME" => "36000000",
				"CACHE_TYPE" => "A",
				"COMPONENT_TEMPLATE" => ".default",
				"DISPLAY_DATE" => "Y",
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => "Y",
				"DISPLAY_PREVIEW_TEXT" => "Y",
				"IBLOCK_ID" => "1",
				"IBLOCK_TYPE" => "photos",
				"INCLUDE_SUBSECTIONS" => "Y",
				"NEWS_COUNT" => "4",
				"PARENT_SECTION" => "",
				"PARENT_SECTION_CODE" => "",
				"PROPERTY_CODE" => array(0=>"",1=>"",),
				"SMALL_HEIGHT" => "226",
				"SMALL_WIDTH" => "288",
				"SORT_BY1" => "ACTIVE_FROM",
				"SORT_BY2" => "SORT",
				"SORT_ORDER1" => "DESC",
				"SORT_ORDER2" => "ASC"
			)
		);?>

		<?php //if ( is_active_sidebar( 'footer' ) ) { ?>
		<div class="footer-widgets">
			<div class="container">
				<div class="footer-inner">
					<!-- dynamic_sidebar( 'footer' ); -->
					<section id="text-2" class="widget widget_text">
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include", 
						".default", 
						array(
							"AREA_FILE_RECURSIVE" => "Y",
							"AREA_FILE_SHOW" => "sect",
							"AREA_FILE_SUFFIX" => "widget_bottom_left",
							"EDIT_TEMPLATE" => "",
							"COMPONENT_TEMPLATE" => ".default"
						),
						false
					);?>
					</section>

					<section class="widget widget_categories">
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include", 
						".default", 
						array(
							"AREA_FILE_RECURSIVE" => "Y",
							"AREA_FILE_SHOW" => "sect",
							"AREA_FILE_SUFFIX" => "widget_bottom_middle",
							"EDIT_TEMPLATE" => "",
							"COMPONENT_TEMPLATE" => ".default"
						),
						false
					);?>
					</section>

					<section id="fashify-posts-2" class="widget fashify-posts-widget">
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include", 
						".default", 
						array(
							"AREA_FILE_RECURSIVE" => "Y",
							"AREA_FILE_SHOW" => "sect",
							"AREA_FILE_SUFFIX" => "widget_bottom_right",
							"EDIT_TEMPLATE" => "",
							"COMPONENT_TEMPLATE" => ".default"
						),
						false
					);?>
					</section>
				<!-- 	<section class="widget">
						<h4 class="widget-title">Recent Posts</h4>
						<ul class="widget-posts">
							<li class="has-thumb"><img width="150" height="150" src="">
								<div class="p-info">
									<h2 class="entry-tytle">
										<a href="">Sumsung vs Apple</a>
									</h2>
									<span class="entry-date">July 6, 2016</span>
								</div>
							</li>
										<li class="has-thumb"><img width="150" height="150" src="">
								<div class="p-info">
									<h2 class="entry-tytle">
										<a href="">Sumsung vs Apple</a>
									</h2>
									<span class="entry-date">July 6, 2016</span>
								</div>
							</li>
						</ul>
					</section> -->
				</div>
			</div>
		</div>
		<?php //} ?>

		<div class="site-info">
			<div class="container">

				<div class="site-copyright">
					Copyright © 2017 Fashify. All Rights Reserved.				</div>


						<div class="theme-info-text">
        	Fashify Theme by <a href="https://www.famethemes.com/" rel="designer">FameThemes</a>		</div>
		

			</div>
		</div><!-- .site-info -->

	</footer><!-- #colophon -->
</div><!-- #page -->
</body>
</html>