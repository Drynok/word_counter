<?php

namespace Drupal\word_counter;

/**
 * Class WordCounter.
 */
class WordCounter implements WordCounterInterface {

  /**
   * Constructs a new WordCounter object.
   */
  public function __construct() {

  }

  /**
   * Returns number of characters
   *
   * @param string $data
   *
   * @return int|null
   */
  public function getCharCount(string $data): ?int {
    $data = $this->preprocessData($data);
    return $data ? str_word_count($data) : NULL;
  }

  /**
   * @param $data
   */
  public function preprocessData($data): ?string {
    $data = strip_tags($data); //get rid of html
    $data = preg_replace('/\s\s+/', '', $data); //get rid of \r\n and whitespaces
    return $data;
  }

}
