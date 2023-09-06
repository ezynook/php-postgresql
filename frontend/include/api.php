<?php
    $conn = pg_connect("host=192.168.10.22 dbname=test_db user=postgres password=postgres");
    if (!$conn) {die("Error: Unable to connect to the database");}
    function fetchAll(){
        $conn = $GLOBALS['conn'];
        $result = pg_query($conn, 'SELECT * FROM test_tb');
        $items = pg_fetch_all($result);
        return $items;
    }
    if (isset($_POST['type']) && $_POST['type'] == 'edit'){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $sql = "
            UPDATE test_tb
            SET name='$name', email='$email'
            WHERE id = $id
        ";
        $result = pg_query($conn, $sql);
        if ($result){
            echo json_encode(array(
                "status_code" => 200,
                "message" => "success"
            ));
        }
    }
    if (isset($_POST['type']) && $_POST['type'] == 'delete'){
        $result = pg_query($conn, 'DELETE FROM test_tb WHERE id='.$_POST['id']);
        if ($result){
            echo json_encode(array(
                "status_code" => 200,
                "message" => "success"
            ));
        }
    }
    if (isset($_POST['type']) && $_POST['type'] == 'add'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $sql = "
            INSERT INTO test_tb (name, email)
            VALUES ('$name', '$email')
        ";
        $result = pg_query($conn, $sql);
        if ($result){
            echo json_encode(array(
                "status_code" => 200,
                "message" => "success"
            ));
        }
    }