<?php

  namespace Xparse\ElementFinder\ElementFinder;

  use Xparse\ElementFinder\ElementFinder;

  /**
   * @author Ivan Shcherbak <dev@funivan.com>
   * @method ElementFinder current();
   * @method null|ElementFinder offsetGet($offset);
   */
  class ObjectCollection extends \Fiv\Collection\ObjectCollection {

    /**
     * Used for validation
     * Return class name
     *
     * @codeCoverageIgnore
     * @return string
     */
    public function objectsClassName() {
      return ElementFinder::class;
    }


    /**
     * @param int $index
     * @return null|ElementFinder
     */
    public function item($index) {
      if (isset($this->items[$index])) {
        return $this->items[$index];
      }

      return null;
    }


    /**
     * @param string $regexp
     * @param string $to
     * @return $this
     */
    public function replace($regexp, $to = '') {
      foreach ($this as $item) {
        $item->replace($regexp, $to);
      }

      return $this;
    }

  } 