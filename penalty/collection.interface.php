<?php
  interface Collection {
    public function size();

    public function isEmpty();

    public function contains($object);

    public function iterator();

    public function toArray();

    public function add($object);

    public function remove($object);

    public function addAll($collection);

    public function clear();

    public function retainAll($collection);

    public function removeAll($collection);

    public function containsAll($collection);
  }

  class MyCollection implements Collection {
    private $collection = array();

    public function size() {
      return count($this->$collection);
    }

    public function isEmpty() {
      if (self::size() > 0) {
        return false;
      } else {
        return true;
      }
    }

    public function contains($object) {
      if (in_array($object, $this->$collection)) {
        return true;
      } else {
        return false;
      }
    }

    public function iterator() {
      return new ArrayIterator($this->$collection);
    }

    public function toArray() {
      return $this->$collection;
    }

    public function add($object) {
      $before = self::size();

      array_push($this->$collection, $object)

      if (self::size() > $before) {
        return true;
      } else {
        return false;
      }
    }

    public function remove($object) {
      return array_diff($this->$collection, [$object]);
    }

    public function addAll($collection) {
      return array_merge($this->$collection, $collection);
    }

    public function clear() {
      return array_splice($this->$collection, 0);
    }

    public function retainAll($collection) {
      $before = self::size();
      $new_collection = array_intersect($this->$collection, $collection);

      self::clear();
      self::addAll($new_collection);

      if (self::size() != $before) {
        return true;
      } else {
        return false;
      }
    }

    public function removeAll($collection) {
      return array_diff($this->$collection, $collection);
    }

    public function containsAll($collection) {
      if (count(array_intersect($this->$collection, $collection)) == self::size()) {
        return true;
      } else {
        return false;
      }
    }
  }
