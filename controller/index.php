<?php

    if (isset($_GET['action'])){
        $action = $_GET['action'];
    }else{
        $action = "";
    }
    switch ($action){
        case "add":
            //logic
            if (isset($_POST['submit'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $gender = $_POST['gender'];
                $course = implode(', ', $_POST['course']);

                if (empty($name) || empty($email) || empty($phone) || empty($gender) || empty($course)){
                    $error = "Not Null";
                }else{
                    $db->action("INSERT INTO student (name,email,phone,gender,course) VALUE ('$name', '$email', '$phone','$gender', '$course')");
                    header("Location:index.php?controller=student");
                }
            }
            require_once "view/insert.php";
            break;
        case "edit":
            //logic
            if (isset($_GET['id'])){
                $id = $_GET['id'];
                foreach ($db->getData("SELECT * FROM student WHERE id = '$id'") as $row){
                    $name = isset($row['name'])?$row['name']:'';
                    $email = isset($row['email'])?$row['email']:'';
                    $phone = isset($row['phone'])?$row['phone']:'';
                    $gender = isset($row['gender'])?$row['gender']:'';
                    $course = isset($row['course'])?$row['course']:'';
                }
                if (isset($_POST['submit'])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $gender = $_POST['gender'];
                    $course = implode(', ', $_POST['course']);

                    if (empty($name) || empty($email) || empty($phone) || empty(gender) || empty(couse)) {
                        $error = "Not Null";
                    }else{
                        $db->action ("UPDATE student SET name='$name', email='$email', phone='$phone',gender='$gender', course='$course' WHERE id='$id'");
                        header("Location:index.php?controller=student");
                    }
                }
            }
            require_once "view/edit.php";
            break;
        case "delete":
            //logic
            if (isset($_GET['id'])){
                $id = $_GET['id'];
                $db->action("DELETE FROM student where id = '$id'");
                header("Location:index.php?controller=student");
            }
            //require_once "view/delete.php";
            break;
        default:
            //logic

            $data = $db->getData("SELECT * FROM student");
            require_once "view/index.php";
            break;
    }