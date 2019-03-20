<?php

/**
 * @file
 * Array Unique Twig filter.
 */

$filter = new Twig_SimpleFilter('array_unique', function (array $array) {
  return array_merge([], array_unique($array));
});
