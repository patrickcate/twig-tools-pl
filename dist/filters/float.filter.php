<?php

/**
 * @file
 * Float Twig filter.
 */

$filter = new Twig_SimpleFilter('float', function ($value) {
  return floatval($value);
});
