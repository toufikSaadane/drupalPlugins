<?php

namespace Drupal\opdracht;

use Drupal\Component\Plugin\PluginBase;

/**
 * Base class for opdracht plugins.
 */
abstract class OpdrachtPluginBase extends PluginBase implements OpdrachtInterface {

  /**
   * {@inheritdoc}
   */
  public function label() {
    return (string) $this->pluginDefinition['label'];
  }

  public function url()
  {
    return \Drupal::service('path.current')->getPath();
  }
}
