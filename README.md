# Twig Tools Pattern Lab Edition

This is a Pattern Lab plugin that implements all of the existing filters added by the Drupal [Twig Tools](https://www.drupal.org/project/twig_tools) module.

**Note:** This plugin assumes you are using Pattern Lab inside a Drupal theme.

## Installation

1. Install and enable the Drupal [Twig Tools](https://www.drupal.org/project/twig_tools) module.

1. Inside of your Drupal theme Pattern Lab directory, locate Pattern Lab the `composer.json` file abd run the command in the same directory:

```shell
composer require pcate/twig-tools-pl
```

1. After the composer package has installed, a post-install script will prompt you to merge/replace the new filters in the `_twig-components` directory.
