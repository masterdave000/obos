<?php

include './../../../config/constants.php';

if (filter_has_var(INPUT_POST, 'password')) {

    $password = md5($_POST['password']);

    $checkUser = "SELECT * FROM user_view WHERE password = :password";
    $checkStatement = $pdo->prepare($checkUser);
    $checkStatement->bindParam(':password', $password);
    $checkStatement->execute();

    if ($checkStatement->rowCount() === 0) {
        $_SESSION['invalid_password'] = "
        <div class='msgalert alert--danger' id='alert'>
            <div class='alert__message'>
                Incorrect Password, Please try again
            </div>
        </div>

        ";
        //Redirecting to the manage user page.
        header('location:' . SITEURL . 'inspection/item/');
        exit;
    }
    
}

//Post the id to be deleted
if (filter_has_var(INPUT_POST, 'item_id')) {
    $clean_id = filter_var($_POST['item_id'], FILTER_SANITIZE_NUMBER_INT);
    $item_id = filter_var($clean_id, FILTER_VALIDATE_INT);

    //SQL query to delete list
    $deleteItemQuery = "DELETE FROM item_list WHERE item_id = :item_id";
    $deleteItemStatement = $pdo->prepare($deleteItemQuery);
    $deleteItemStatement->bindParam(':item_id', $item_id, PDO::PARAM_INT);

    if ($deleteItemStatement->execute()) {
        //Creating SESSION variable to display message.
        $_SESSION['delete'] = "
        <div class='msgalert alert--success' id='alert'>
            <div class='alert__message'>
                Item Details Deleted Successfully
            </div>
        </div>
        ";
        //Redirecting to the manage Item page.
        header('location:' . SITEURL . 'inspection/item/');
    } else {
        //Creating SESSION variable to display message.
        $_SESSION['delete'] = "
        <div class='msgalert alert--danger' id='alert'>
            <div class='alert__message'>
                Failed to Delete Item Details, Please try again
            </div>
        </div>

        ";
        //Redirecting to the manage Item page.
        header('location:' . SITEURL . 'inspection/item/');
    }
} else {

    $_SESSION['id_not_found'] = "
        <div class='msgalert alert--danger' id='alert'>
            <div class='alert__message'>
                User ID Not Found
            </div>
        </div>

    ";
    //Redirecting to the manage item page.
    header('location:' . SITEURL . 'inspection/item/');
}