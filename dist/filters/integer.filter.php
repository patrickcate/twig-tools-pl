<?php

/**
 * @file
 * Integer Twig filter.
 */

$filter = new Twig_SimpleFilter('integer', function ($value) {
  return intval($value);
});
