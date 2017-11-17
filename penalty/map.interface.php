<?php
  interface Map {
    public function size();

    public function isEmpty();

    public function containsKey($key);

    public function containsValue($value);

    public function get($key);

    public function put($key, $value);

    public function remove($key);

    public function putAll($map);

    public function clear();

    public function keySet();

    public function values();

    public function entrySet();
  }

  class MyMap implements Map {
    private $map = array();

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

    public function containsKey($key) {
      return array_key_exists($key, $this->$map);
    }

    public function containsValue($value){
      return in_array($value, $this->$map);
    }

    public function get($key) {
      if (self::containsKey($key)) {
        return $this->$map[$key];
      } else {
        return null;
      }
    }

    public function put($key, $value) {
      $result = null;

      if (self::containsKey($key)) {
        $result = $this->$map[$key];
        $this->$map[$key] = $value;
      } else {
        $this->$map[$key] = $value;
      }

      return $result;
    }

    public function remove($key) {
      $result = null;

      if (self::containsKey($key)) {
        $result = $this->$map[$key];
        unset($this->$map[$key]);
      }

      return $result;
    }

    public function putAll($map) {
      array_merge($this->$map, $map);
    }

    public function clear() {
      array_splice($this->$map, 0);
    }

    public function keySet() {
      return array_keys($this->$map);
    }

    public function values() {
      return array_values($this->$map);
    }

    public function entrySet() {
      return $this->$map;
    }
  }
