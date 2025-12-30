<?php

require_once __DIR__ . '/Book.php';
require_once __DIR__ . '/Customer.php';

$book1 = new Book(9877633, "1984", "George Orwell", 12);
$book2 = new Book(7783934, "To kill", "Harper Lee", 2);

$customer1 = new Customer(1, "John", "Doe", "john.doe@gmail.com");
$customer2 = new Customer(2, "Mary", "Poppins", "mary.poppins@gmail.com");
