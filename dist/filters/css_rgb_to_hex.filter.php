<?php

/**
 * @file
 * CSS RGB to Hex Color Twig filter.
 */

use Drupal\twig_tools\TwigExtension\TwigColor;

$filter = new Twig_SimpleFilter('css_rgb_to_hex', function ($string) {
  return TwigColor::cssRgbToHex($string);
});
