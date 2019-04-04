<?php

/**
 * @file
 * Hex to RGB Color Twig filter.
 */

use pcate\TwigToolsPl\TwigColor;

$filter = new Twig_SimpleFilter('hex_to_rgb', function ($hex) {
  return TwigColor::hexToRgb($hex);
});
