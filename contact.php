<?php

include "db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $subject = trim($_POST["subject"]);
    $message = trim($_POST["message"]);

    if ($name !== "" && $email !== "" && $subject !== "" && $message !== "") {
        $sql = "INSERT INTO contact_messages (name, email, subject, message)
                VALUES (?, ?, ?, ?)";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([$name, $email, $subject, $message]);

        header("Location: index.php?status=success#contact");
        exit;
    } else {
        header("Location: index.php?status=error#contact");
        exit;
    }
}

header("Location: index.php#contact");
exit;

?>