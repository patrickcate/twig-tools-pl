<?php

/**
 * @file
 * CSS RGB to Hex Color Twig filter.
 */

use pcate\TwigToolsPl\TwigColor;

$filter = new Twig_SimpleFilter('css_rgb_to_hex', function ($string) {
  return TwigColor::cssRgbToHex($string);
});
