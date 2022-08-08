<?php

class DbConnection
{
    private $db;

    public function __construct() {

        $this->connect();
    }

    public function getConnection() {

        return $this->db;
    }

    private function connect() {

        $this->db = mysqli_connect(
            "localhost",
            "root",
            "",
            "vercom")

        or die("no db found!");
    }

    public function insertUsers(array $users) {

        $stmt = $this
            ->getConnection()
            ->prepare("INSERT INTO users (imie, test) VALUES (?, ?)");

        $stmt->bind_param("ss", $imie, $test);

        foreach ($users as $user) {

            $imie = $user['imie'];
            $test = $user['test'];
            $stmt->execute();
        }

        $stmt->close();
    }

    public function fetchUsers() {

        return $this
            ->getConnection()
            ->query("SELECT * FROM users");
    }
}