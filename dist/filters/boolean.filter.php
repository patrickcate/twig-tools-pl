<?php

/**
 * @file
 * Boolean Twig filter.
 */

$filter = new Twig_SimpleFilter('boolean', function ($value) {
  return boolval($value);
});
