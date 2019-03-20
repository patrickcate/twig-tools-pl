<?php

/**
 * @file
 * Remove Empty Twig filter.
 */

$filter = new Twig_SimpleFilter('remove_empty', function (array $array) {
  return array_merge([], array_filter($array));
});
