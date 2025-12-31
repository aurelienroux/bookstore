<?php

namespace Bookstore\Domain;

interface Customer
{
  public function getMonthlyFee(): float;
  public function getAmountToBorrow(): int;
  public function getType(): string;
}

// abstract class Customer extends Person
// {
//   private static $lastId = 0;
//   private $id;
//   private $email;

//   public function __construct(
//     int $id,
//     string $firstname,
//     string $surname,
//     string $email
//   ) {
//     parent::__construct($firstname, $surname);

//     if ($id == null) {
//       $this->id = ++self::$lastId;
//     } else {
//       $this->id = $id;
//       if ($id > self::$lastId) {
//         self::$lastId = $id;
//       }
//     }

//     $this->firstname = $firstname;
//     $this->surname = $surname;
//     $this->email = $email;
//   }

//   abstract public function getMonthlyFee();
//   abstract public function getAmountToBorrow();
//   abstract public function getType();

//   public function getId(): int
//   {
//     return $this->id;
//   }

//   public function getEmail(): string
//   {
//     return $this->email;
//   }

//   public function setEmail(string $email): void
//   {
//     $this->email = $email;
//   }

//   // echo Customer::getLastId();
//   public static function getLastId(): int
//   {
//     return self::$lastId;
//   }
// }
