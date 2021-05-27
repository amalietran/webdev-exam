<?php

session_start();

if (!isset($_SESSION['user_uuid'])) {
    header('Location: /settings');
    exit();
}


try {
    $db_path = $_SERVER['DOCUMENT_ROOT'] . '/data/users.db';
    $db = new PDO("sqlite:$db_path");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $q = $db->prepare(' UPDATE users 
    SET user_name = :user_name,
        user_lastname = :user_lastname,
        user_email = :user_email,
        user_age = :user_age,
        user_phone = :user_phone,
        user_password = :user_password
    WHERE user_uuid = :user_uuid ');
    $q->bindParam(':user_name', $_POST['update_name']);
    $q->bindParam(':user_lastname', $_POST['update_last_name']);
    $q->bindParam(':user_email', $_POST['update_email']);
    $q->bindParam(':user_age', $_POST['update_age']);
    $q->bindParam(':user_phone', $_POST['update_phone']);
    $q->bindParam(':user_password', $_POST['update_password']);
    $q->bindParam(':user_uuid', $_SESSION['user_uuid']);
    // $q->bindValue(':user_name', $_POST['update_name']);
    // $q->bindValue(':user_lastname', $_POST['update_last_name']);
    // $q->bindValue(':user_email', $_POST['update_email']);
    // $q->bindValue(':user_age', $_POST['update_age']);
    // $q->bindValue(':user_phone', $_POST['update_phone']);
    // $q->bindValue(':user_password', $_POST['update_password']);

    $q->execute();

    if (!$q->rowCount()) {
        header('Location: /settings');
        exit();
    }
    header('Location: /user/update');
    exit();
} catch (PDOException $ex) {
    echo $ex;
}
?>
<script>
    let console = <?= json_encode($user) ?>
    console.log(console);
</script>