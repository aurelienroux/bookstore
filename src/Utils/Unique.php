<?php

namespace Bookstore\Utils;

use Bookstore\Exceptions\ExceededMaxAllowedException;
use Bookstore\Exceptions\InvalidIdException;

trait Unique
{
  private static $lastId = 0;
  private $id;

  public function setId(int $id)
  {
    try {
      if ($id < 0) {
        throw new InvalidIdException("Id cannot be negative.");
      }
      if ($id == null) {
        $this->id = ++self::$lastId;
      } else {
        $this->id = $id;
        if ($id > self::$lastId) {
          self::$lastId = $id;
        }
      }
      if ($this->id > 50) {
        throw new ExceededMaxAllowedException('Max number of users is 50.');
      }
    } catch (\Exception $e) {
      echo $e->getMessage();
    }
  }

  public static function getLastId(): int
  {
    return self::$lastId;
  }

  public function getId(): int
  {
    return $this->id;
  }
}
