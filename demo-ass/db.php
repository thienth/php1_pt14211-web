<?php
function queryExecute($sqlQuery, $getAll = false){
    // 1. Tạo kết nối tới csdl
    $conn = new PDO("mysql:host=127.0.0.1;dbname=pt14211;charset=utf8", "root", "123456");

    // 2. Nạp câu truy vấn vào trong kết nối
    $statement = $conn->prepare($sqlQuery);

    // 3. Thực thi câu lệnh với csdl
    $statement->execute();

    if($getAll == true){
        // 4. Thu thập kết quả trả về
        return $statement->fetchAll();
    }

    return $statement->fetch();
}

?>