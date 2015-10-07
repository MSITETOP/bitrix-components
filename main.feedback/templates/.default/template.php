<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */

?>
<form action="/" method="POST" class="form form-mrcrook">
	<div class="message-form-mrcrook"></div>
	<?=bitrix_sessid_post()?>
	<input type="hidden" name="url" value="<?=$_SERVER["QUERY_STRING"]?>">
	<div class="left">
		<div class="form-group fild-name">
			<div class="name-fild">Имя</div>
			<div class="error-text"></div>
			<input type="text" name="user_name" value="" >
		</div>
		<div class="form-group fild-mail">
			<div class="name-fild">E-mail</div>
			<div class="error-text"></div>
			<input type="text" name="user_email" value="">
		</div>
		<div class="form-group fild-phone">
			<div class="name-fild">Телефон</div>
			<div class="error-text"></div>
			<input type="text" name="user_phone" value="">
		</div>
		<div class="form-group fild-skype">
			<div class="name-fild">Skype</div>
			<div class="error-text"></div>
			<input type="text" name="user_skype" value="">
		</div>
	</div>
	<div class="right">
		<div class="form-group fild-message">
			<div class="name-fild">Сообщение</div>
			<div class="error-text"></div>
			<textarea name="MESSAGE"></textarea>
		</div>
		<div class="form-group">
			<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
			<input type="hidden" name="submit" value="Отправить">
			<button class="button button_call-to-act" id="btn-form-mrcrook">Отправить</button>
			<div class="clear"></div>
		</div>
	</div>
	<div style="clear: both; width: 100%;"></div>
</form>
