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
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

	<div class="news-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
 <article class="news news--wide">
		<div class="n1 news__publication-info">
            <?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
              <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
          <a class="news__link" href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><h3 class="news__title content-block"><mark><?echo $arItem["NAME"]?></mark>
              <?else:?>
          <mark><?echo $arItem["NAME"]?></mark>
              <?endif;?>
            <?endif;?>
            <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
	            <span><?echo $arItem["PREVIEW_TEXT"];?></span></h3></a>
		    <?endif;?>
            <?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
				<time class="news__publication-date"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></time>
			<?endif?>
		</div>
    <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<a class="news__link" href="<?=$arItem["DETAIL_PAGE_URL"]?>"><div 
						class="news__illustration"
						style='background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>);
background-size: <?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?> <?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>;'
						border="0"
						alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
						title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
					></div></a>
			<?else:?>
					<div 
						class="news__illustration"
						style='background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>);
background-size: <?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?> <?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>'
						border="0"
						alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
						title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
	></div>
			<?endif;?>
		<?endif?>
      <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<div style="clear:both"></div>
		<?endif?>
		<?foreach($arItem["FIELDS"] as $code=>$value):?>
			<small>
			<?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?>
			</small><br />
		<?endforeach;?>
		<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
			<small>
			<?=$arProperty["NAME"]?>:&nbsp;
			<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
				<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
			<?else:?>
				<?=$arProperty["DISPLAY_VALUE"];?>
			<?endif?>
			</small><br />
		<?endforeach;?>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</article>