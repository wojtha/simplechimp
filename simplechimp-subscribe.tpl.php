<?php
/**
 * Available variables:
 *
 * $action
 * $body
 * $subscribe_text
 */
?>
<!-- simplechimp-subscribe.tpl.php -->
<?php echo $body; ?>
<div id="mc_embed_signup">
  <form action="<?php echo $action; ?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
    <fieldset>
      <div class="mc-field-group">
        <label for="mce-EMAIL"><?php t('E-mail'); ?></label>
        <input type="text" value="" name="EMAIL" class="required email" id="mce-EMAIL">
      </div>
      <div id="mce-responses">
        <div class="response" id="mce-error-response" style="display:none"></div>
        <div class="response" id="mce-success-response" style="display:none"></div>
      </div>
      <div>
        <input type="submit" value="<?php echo $subscribe_text; ?>" name="subscribe" id="mc-embedded-subscribe" class="btn">
      </div>
    </fieldset>
  </form>
</div>
<!-- /simplechimp-subscribe.tpl.php -->