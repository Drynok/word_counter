<?php

namespace Drupal\word_counter;

/**
 * Calculated count of words in a string.
 */
interface WordCounterInterface {

  /**
   * Returns number of characters.
   *
   * @param string $data
   *   Input string.
   *
   * @return int|null
   *   Number of words in a string.
   */
  public function getCharCount(string $data): ?int;

  /**
   * Strips html tags and new line symbols.
   *
   * @param string $data
   *   Input string.
   *
   * @return string|null
   *   Returns html stripped string.
   */
  public function preprocessData(string $data): ?string;

}
