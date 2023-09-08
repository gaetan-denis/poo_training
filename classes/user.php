<?php

namespace classes;

class user
{
    private int $id;
    private string $username;
    private string $password;

    //Constructor//

    public function __construct(int $id, string $username, string $password)
    {
        $this->id=$id;
        $this->username=$username;
        $this->password=hash('sha512',$password);
    }

    //Getters//

    public function getId(): int
    {
        return $this->id;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    //Setters//

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setUSername(string $username): void
    {
        $this->username = $username;
    }

    function displayUser() :void
    {
        foreach ($this as $key => $value) {
            echo '<td>'. $value.'</td>';
        }
    }
}