<?php

namespace Bookstore\Domain;

class Person
{
  private static $lastId = 0;
  private $id;
  protected string $firstname;
  protected string $surname;
  private $email;

  function __construct(
    int $id,
    string $firstname,
    string $surname,
    string $email
  ) {
    if ($id == null) {
      $this->id = ++self::$lastId;
    } else {
      $this->id = $id;
      if ($id > self::$lastId) {
        self::$lastId = $id;
      }
    }

    $this->firstname = $firstname;
    $this->surname = $surname;
    $this->email = $email;
  }

  function getFirstname(): string
  {
    return $this->firstname;
  }

  function getSurname(): string
  {
    return $this->surname;
  }

  public function getId(): int
  {
    return $this->id;
  }

  public function getEmail(): string
  {
    return $this->email;
  }

  public function setEmail(string $email): void
  {
    $this->email = $email;
  }

  // echo Customer::getLastId();
  public static function getLastId(): int
  {
    return self::$lastId;
  }
}
