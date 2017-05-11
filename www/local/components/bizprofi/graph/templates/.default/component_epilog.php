<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
?>

<div id="bizprofi-graph">
	<canvas id="bizprofi-graph-canvas"></canvas>
</div>

<script>
	render_my_graph(<?=json_encode($arResult["METRICA"])?>);
</script> 

<?$APPLICATION->AddHeadScript('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js');?>

<?$APPLICATION->AddHeadScript('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.bundle.min.js');?>