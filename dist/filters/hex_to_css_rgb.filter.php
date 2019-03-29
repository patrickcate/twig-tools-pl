<?php

/**
 * @file
 * Hex to CSS RGB Color Twig filter.
 */

use Drupal\twig_tools\TwigExtension\TwigColor;

$filter = new Twig_SimpleFilter('hex_to_css_rgb', function ($hex) {
  return TwigColor::hexToCssRgb($hex);
});
