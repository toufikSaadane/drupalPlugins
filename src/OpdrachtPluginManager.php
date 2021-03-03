<?php

namespace Drupal\opdracht;

use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Plugin\DefaultPluginManager;

/**
 * Opdracht plugin manager.
 */
class OpdrachtPluginManager extends DefaultPluginManager {

  /**
   * Constructs OpdrachtPluginManager object.
   *
   * @param \Traversable $namespaces
   *   An object that implements \Traversable which contains the root paths
   *   keyed by the corresponding namespace to look for plugin implementations.
   * @param \Drupal\Core\Cache\CacheBackendInterface $cache_backend
   *   Cache backend instance to use.
   * @param \Drupal\Core\Extension\ModuleHandlerInterface $module_handler
   *   The module handler to invoke the alter hook with.
   */
  public function __construct(\Traversable $namespaces, CacheBackendInterface $cache_backend, ModuleHandlerInterface $module_handler) {
    parent::__construct(
      'Plugin/Opdracht',
      $namespaces,
      $module_handler,
      'Drupal\opdracht\OpdrachtInterface',
      'Drupal\opdracht\Annotation\Opdracht'
    );
    $this->alterInfo('opdracht_info');
    $this->setCacheBackend($cache_backend, 'opdracht_plugins');
  }

}
