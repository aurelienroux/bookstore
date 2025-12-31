<?php

namespace Bookstore\Domain;

use Bookstore\Utils\Unique;

class Person
{
  use Unique;

  protected string $firstname;
  protected string $surname;
  private $email;

  function __construct(
    int $id,
    string $firstname,
    string $surname,
    string $email
  ) {
    $this->firstname = $firstname;
    $this->surname = $surname;
    $this->email = $email;
    $this->setId($id);
  }

  function getFirstname(): string
  {
    return $this->firstname;
  }

  function getSurname(): string
  {
    return $this->surname;
  }

  public function getEmail(): string
  {
    return $this->email;
  }

  public function setEmail(string $email): void
  {
    $this->email = $email;
  }
}
