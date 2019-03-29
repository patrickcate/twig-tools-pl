<?php

/**
 * @file
 * Scrub Class Array Twig filter.
 */

use Drupal\Component\Utility\Html;

$filter = new Twig_SimpleFilter('scrub_class_array', function (array $classes) {

  $array = array_map(function ($class) {
    return Html::getClass($class);
  }, $classes);

  $array = array_filter($array);

  $array = array_merge([], array_unique($array));

  return $array;
});
