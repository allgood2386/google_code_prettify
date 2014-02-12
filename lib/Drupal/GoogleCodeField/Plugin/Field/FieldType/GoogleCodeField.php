<?php

/**
 * @file
 * Contains \Drupal\GoogleCodeField\Plugin\Field\FieldType\GoogleCodeFieldItem.
 */
namespace Drupal\GoogleCodeField\Plugin\Field\FieldType;
use Drupal\Core\Field\ConfigFieldItemBase;
use Drupal\Core\Field\FieldDefinitionInterface;
use Drupal\field\FieldInterface;

/**
 * Plugin implementation of the 'GoogleCodeFieldItem' field type.
 *
 * @FieldType(
 *  id = 'google_code_field',
 *  label = @Translations('Google Code Field"),
 *  description = @Translations('This field does code highlighting'),
 *  default_widget = 'google_code_field_default_widget',
 *  default_formatter = 'google_code_field_default_formatter
 * )
 */
class GoogleCodeFieldItem extends ConfigFieldItemBase {
  /**
   * {@inheritdoc}
   */
  /**
  public static function schema(FieldDefinitionInterface $field_definition) {
    return array(
      'columns' => array(
        'code_highlighter' => array(
          'type' => 'text'
        )
      )
    );
  }
}*/