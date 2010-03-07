<?php
// $Id$

/**
 * @file meerkat.tpl.php
 * Default theme implementation for meerkat content.
 *
 * Available variables:
 * - $input: The meerkat container content.
 * - $options: The meerkat options.
 */

$css = '';
$close = '';
$dontshow = '';

if ( $options['css'] != '' ) {
  $css = ' class="' . $options['css'] . '"';
}

if ( $options['close'] != 'none' && $options['showclose'] == 'true' ) {
  $title = t('Click here to close this');

  $close = <<<EOF
  <a href="#" class="meerkatclose" title="$title">Close</a>
EOF;
}

if ( $options['dontShow'] != 'none' && $options['showdontshow'] == 'true'  ) {
  $title = t('Click here to close this and future messages');

  $dontshow = <<<EOF
  <a href="#" class="meerkatdontshow" title="$title">Don't Show</a>
EOF;
}

?>
<div id="meerkat"<?php echo $css; ?>>
  <?php

  echo $close;
  echo $dontshow;
  echo $input;

  ?>
</div>
