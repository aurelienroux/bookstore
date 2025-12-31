<?php

namespace Bookstore\Exceptions;

use Exception;

class InvalidIdException extends Exception
{
  public function __construct(string $message = "")
  {
    $message = $message ?: 'Invalid id provided.';
    return parent::__construct($message);
  }
}
