<?php

class CrudDynamique
{
    public static function selectRecords($pdo, string $table, string $columns = "*", string $where = null)
    {
        // Use prepared statements to prevent SQL injection
        $sql = "SELECT $columns FROM $table";

        if ($where !== null) {
            $sql .= " WHERE $where";
        }

        // Prepare the SQL query
        $stmt = $pdo->prepare($sql);

        if (!$stmt) {
            die("Error in prepared statement: " . $pdo->errorInfo()[2]);
        }

        // Execute the prepared statement with any bound parameters
        $stmt->execute();

        // Fetch the result set as an associative array
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    public static function insertRecord($pdo, string $table, array $data)
    {
        // Use prepared statements to prevent SQL injection
        $columns = implode(', ', array_keys($data));

        $placeholders = implode(', ', array_fill(0, count($data), '?'));

        $sql = "INSERT INTO $table ($columns) VALUES ($placeholders)";

        $stmt = $pdo->prepare($sql);

        if (!$stmt) {
            die("Error in prepared statement: " . $pdo->errorInfo()[2]);
        }

        // Bind parameters to the prepared statement by reference
        $i = 1;
        foreach ($data as $key => &$value) {
            $stmt->bindParam($i, $value);
            $i++;
        }

        // Execute the prepared statement
        if ($stmt->execute()) {
            // Get the ID of the last inserted row (if applicable)
            $lastInsertId = $pdo->lastInsertId();
            return $lastInsertId;
        } else {
            return false;
        }
    }

    public static function updateRecord($pdo, $table, $data, $id)
    {
        // Use prepared statements to prevent SQL injection
        $args = array();

        foreach ($data as $key => $value) {
            $args[] = "$key = ?";
        }

        $sql = "UPDATE $table SET " . implode(',', $args) . " WHERE id = ?";

        $stmt = $pdo->prepare($sql);

        if (!$stmt) {
            die("Error in prepared statement: " . $pdo->errorInfo()[2]);
        }

        // Bind parameters to the prepared statement

        $i = 1;
        foreach ($data as $key => &$value) {
            $stmt->bindParam($i, $value);
            $i++;
        }
        $stmt->bindParam($i, $id);



        // Execute the prepared statement
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public static function deleteRecord($pdo, string $table, int $id)
    {
        // Use prepared statements to prevent SQL injection
        $sql = "DELETE FROM $table WHERE id = ?";

        $stmt = $pdo->prepare($sql);

        if (!$stmt) {
            die("Error in prepared statement: " . $pdo->errorInfo()[2]);
        }

        // Bind parameters to the prepared statement
        $stmt->bindParam(1, $id);

        // Execute the prepared statement
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
