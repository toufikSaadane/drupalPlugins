<?php

namespace Drupal\opdracht\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class OpdrachtForm.
 */
class OpdrachtForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'opdracht.opdracht',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'opdracht_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('opdracht.opdracht');
    $form['opdracht_select_form'] = [
      '#type' => 'select',
      '#title' => $this->t('Opdracht select form'),
      '#options' => [
        'Uppercase' => $this->t('Uppercase'),
        'Reverse the words' => $this->t('Reverse the words')],
      '#size' => 5,
      '#default_value' => $config->get('opdracht_select_form'),
    ];
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);

    $this->config('opdracht.opdracht')
      ->set('opdracht_select_form', $form_state->getValue('opdracht_select_form'))
      ->save();
  }

}
