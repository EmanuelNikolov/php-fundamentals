<?php

interface UserServiceInterface
{

    public function __construct(PDO $db);

    public function register(
      string $email,
      string $username,
      DateTime $birthday,
      string $password,
      string $passwordConfirm
    );

    public function edit(
      int $id,
      array $userCurrentData,
      string $email,
      string $username,
      DateTime $birthDate,
      string $password,
      string $passwordConfirm
    );

    public function login(string $username, string $password): bool;
}