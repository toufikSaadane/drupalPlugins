<?php

namespace Drupal\opdracht\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\opdracht\OpdrachtPluginManager;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class MyOpdrachtController.
 */
class MyOpdrachtController extends ControllerBase {

  /**
   * @var OpdrachtPluginManager
   */
  private  $opdrachtPluginManager;

  public function __construct(OpdrachtPluginManager $opdrachtPluginManager)
  {
    $this->opdrachtPluginManager = $opdrachtPluginManager;
  }


  /**
   * Index.
   *
   * @return string|array
   *   Return Hello string.
   */
  public function index() {
    $build = [];
    $opdracht_plugin_definitions = $this->opdrachtPluginManager->getDefinitions();

    $items = [];

      foreach ($opdracht_plugin_definitions as $plugin_id => $sandwich_plugin_definition) {
        $plugin = $this->opdrachtPluginManager->createInstance($plugin_id, ['of' => 'configuration values']);
        $items[] = $plugin->getUrl();
      }

    $build['plugin_definitions'] = [
      '#theme' => 'item_list',
      '#title' => 'Plugin opdracht',
      '#items' => $items,
    ];

    return $build;
  }

  public static function create(ContainerInterface $container)
  {
   return new static($container->get('plugin.manager.opdracht'));
  }


}
