<?php

namespace Drupal\word_counter;

/**
 * Interface WordCounterInterface.
 */
interface WordCounterInterface {

  /**
   * Returns number of characters
   *
   * @param string $data
   *
   * @return int|null
   */
  function getCharCount(string $data): ?int;

  /**
   * Removed html from data string
   *
   * @param string $data
   *
   * @return string|null
   */
  function preprocessData(string $data): ?string;

}
