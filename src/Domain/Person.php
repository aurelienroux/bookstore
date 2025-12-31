<?php

namespace Bookstore\Domain;

class Person
{
  protected string $firstname;
  protected string $surname;

  function __construct(string $firstname, string $surname)
  {
    $this->firstname = $firstname;
    $this->surname = $surname;
  }

  function getFirstname(): string
  {
    return $this->firstname;
  }

  function getSurname(): string
  {
    return $this->surname;
  }
}
