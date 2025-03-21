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
<div class="news-detail">
<section class="article">
  <header class="article__header">
    <h1 class="article__title">
    <?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
		  <?=$arResult["NAME"]?>
	  <?endif;?>
    </h1>
    <?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
		<time class="article__publication-date"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></time>
	  <?endif;?>
    <a class="back-link" href="/novosti/">
      <svg class="icon" role="img">
        <use xlink:href="<?=ASSET_PATH?>icons.svg#dropdown-arrow" /></svg>
      Пресс-центр
    </a>
  </header>
  <div class="article__content-wrapper">
    <div class="article__lead content-block">
      <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arResult["FIELDS"]["PREVIEW_TEXT"]):?>
        <p><?=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?></p>
      <?endif;?>
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
    </div>
  </div>
  <div class="article__content-wrapper">
    <div class="article__content content-block">
    <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
      <img
        class="detail_picture"
        border="0"
        src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
        width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>"
        height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
        alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
        title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
        />
      <?endif?>
      <div class="image-caption">
        Подпись к&nbsp;фотографии. Как и&nbsp;сама фотография не&nbsp;является необходимой
      </div>
      <p>
        <?if($arResult["NAV_RESULT"]):?>
          <?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
          <?echo $arResult["NAV_TEXT"];?>
          <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
        <?elseif(strlen($arResult["DETAIL_TEXT"])>0):?>
          <?echo $arResult["DETAIL_TEXT"];?>
        <?else:?>
          <?echo $arResult["PREVIEW_TEXT"];?>
        <?endif?>
      </p>
      <blockquote class="blockquote" data-controller="polar-lights-masked"
        data-action="mousemove->polar-lights-masked#updateMaskPosition">

        Один паром у&nbsp;нас сегодня все-таки перевёз несколько автомашин.
        На&nbsp;11&nbsp;часов утра ветер на&nbsp;реке в&nbsp;районе переправы
        Салехард-Лабытнанги усилился до&nbsp;25&nbsp;метров в&nbsp;секунду. Паромы
        остановились. Прекращены также все перевозки водным транспортом. Из-за сильного
        северо-восточного ветра из&nbsp;аэропорта Салехард временно прекращён
        приём-выпуск вертолётных рейсов. Самолёты летают в&nbsp;штатном режиме
        <div class="person-info">
          <img class="person-info__photo" src="<?=ASSET_PATH?>stub/12.jpg" alt="Виталий Лагутин">
          <div class="person-info__description">
            <span class="person-info__name">Виталий Лагутин</span>
            <span class="person-info__position">директор дирекции транспорта ЯНАО</span>
          </div>
        </div>
        <div class="polar-lights polar-lights--dim">
          <div class="polar-lights__mask" data-target="polar-lights-masked.mask"></div>
        </div>
      </blockquote>
    </div>
  </div>

	<div style="clear:both"></div>
	
  
</section>
</div>