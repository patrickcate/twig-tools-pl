<?php

/**
 * @file
 * String Twig filter.
 */

$filter = new Twig_SimpleFilter('string', function ($value) {
  return strval($value);
});
