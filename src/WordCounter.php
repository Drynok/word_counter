<?php

namespace Drupal\word_counter;

/**
 * Calculated count of words in a string.
 */
class WordCounter implements WordCounterInterface {

  /**
   * Returns number of characters.
   *
   * @param string $data
   *   Input string.
   *
   * @return int|null
   *   Number of words in a string.
   */
  public function getCharCount(string $data): ?int {
    $data = $this->preprocessData($data);
    return $data ? str_word_count($data) : NULL;
  }

  /**
   * Strips html tags and new line symbols.
   *
   * @param string $data
   *   Input string.
   *
   * @return string|null
   *   Returns html stripped string.
   */
  public function preprocessData(string $data): ?string {
    // Get rid of html.
    $data = strip_tags($data);
    // Get rid of \r\n and whitespaces.
    $data = preg_replace('/\s\s+/', '', $data);
    return $data;
  }

}
