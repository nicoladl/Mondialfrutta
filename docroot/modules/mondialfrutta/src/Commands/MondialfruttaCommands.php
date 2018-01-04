<?php
namespace Drupal\mondialfrutta\Commands;

use Consolidation\OutputFormatters\StructuredData\RowsOfFields;
use Drush\Commands\DrushCommands;

/**
 *
 * In addition to a commandfile like this one, you need a drush.services.yml
 * in root of your module, and a composer.json file that provides the name
 * of the services file to use.
 *
 * See these files for an example of injecting Drupal services:
 *   - http://cgit.drupalcode.org/devel/tree/src/Commands/DevelCommands.php
 *   - http://cgit.drupalcode.org/devel/tree/drush.services.yml
 */
class MondialfruttaCommands extends DrushCommands {

  /**
   * Command description here.
   *
   * @command mondialfrutta-commandName
   * @param $arg1 Argument description.
   * @param array $options An associative array of options whose values come from cli, aliases, config, etc.
   * @option option-name option description
   * @usage mondialfrutta-commandName foo
   *   Usage description
   * @aliases foo
   */
  public function commandName($arg1, $options = ['option-name' => 'default']) {
    $this->logger()->success(dt('Achievement unlocked.'));
  }

  /**
   * An example of the table output format.
   *
   * @command mondialfrutta-token
   * @param array $options An associative array of options whose values come from cli, aliases, config, etc.
   * @aliases token
   * @field-labels
   *   group: Group
   *   token: Token
   *   name: Name
   * @default-fields group,token,name
   *
   * @return \Consolidation\OutputFormatters\StructuredData\RowsOfFields
   */
  public function token($options = ['format' => 'table'])
  {
    $all = \Drupal::token()->getInfo();
    foreach ($all['tokens'] as $group => $tokens) {
      foreach ($tokens as $key => $token) {
        $rows[] = [
          'group' => $group,
          'token' => $key,
          'name' => $token['name'],
        ];
      }
    }
    return new RowsOfFields($rows);
  }

}
