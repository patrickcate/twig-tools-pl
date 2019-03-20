<?php

/**
 * @file
 * Clean Class Array Twig filter.
 */

use Drupal\Component\Utility\Html;

$filter = new Twig_SimpleFilter('clean_class_array', function (array $classes) {
  return array_map(function ($class) {
    return Html::getClass($class);
  }, $classes);
});
