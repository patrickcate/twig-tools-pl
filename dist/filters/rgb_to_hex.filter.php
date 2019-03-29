<?php

/**
 * @file
 * RGB to Hex Color Twig filter.
 */

use Drupal\twig_tools\TwigExtension\TwigColor;

$filter = new Twig_SimpleFilter('rgb_to_hex', function (array $rgb) {
  return TwigColor::rgbToHex($rgb);
});
