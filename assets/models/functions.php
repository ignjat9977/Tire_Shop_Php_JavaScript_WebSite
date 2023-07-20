<?php
    include("assets/config/connection.php");

    function selectAll($x){
        global $conn;
        $sql = "SELECT * FROM $x";
        $data = $conn->query($sql)->fetchAll();
        return $data;
    }
    function selectAllUsers(){
        global $conn;
        $sql = "SELECT * FROM users u JOIN roles r ON u.role_id=r.role_id";
        $data = $conn->query($sql)->fetchAll();
        return $data;
    }
    function selectAllProducts($l){
        global $conn;

        $limit = $l *6;
        $sql = "SELECT * FROM products p join brands b 
        ON p.brand_id = p.brand_id LIMIT $limit, 6";
        $data = $conn->query($sql)->fetchAll();
        return $data;
    }
    function selectAllProducts1($l=0){
        global $conn;
        $limit = (int)$l *6;
        $sql = "SELECT * FROM products p join brands b 
        ON p.brand_id = p.brand_id LIMIT :limit, :offset";
        $select = $conn->prepare($sql);
        $offset = 6;
        $select->bindParam(":limit", $limit, PDO::PARAM_INT);
        $select->bindParam(":offset", $offset, PDO::PARAM_INT);

        $select->execute();

        $data = $select->fetchAll();
        return $data;
        
    }
    function deleteProd($id){
        global $conn;
        $sql = "DELETE FROM products WHERE prod_id= :id";

        $delete = $conn->prepare($sql);
        $delete->bindParam(":id", $id);

        $result = $delete->execute();
    }
    function deleteBCS($id, $x, $c){
        global $conn;
        $sql = "DELETE FROM $x WhERE $c = :id";
        $delete = $conn->prepare($sql);
        $delete->bindParam(":id", $id);

        $result = $delete->execute();

    }
    function insertContactMessage($first,$last,$email,$message){
        global $conn;
        $sql = "INSERT INTO contact_messages(first_name, last_name, email, message_text) VALUES 
        (:firstN, :lastN, :mail, :mess)";

        $insert = $conn->prepare($sql);
        $insert->bindParam(":firstN", $first);
        $insert->bindParam(":lastN", $last);
        $insert->bindParam(":mail", $email);
        $insert->bindParam(":mess", $message);

        $result = $insert->execute();

        return $result;
    }
    function insertUser($first,$last,$user,$email,$adress,$pass){
        global $conn;
        $sql = "INSERT INTO users(username, password, first_name, last_name, adress, email, role_id)
        VALUES(:u, :p, :f, :l, :a, :e, :r)";
        $role = 2;


        $insert = $conn->prepare($sql);
        $insert->bindParam(":u", $user);
        $insert->bindParam(":p", $pass);
        $insert->bindParam(":f", $first);
        $insert->bindParam(":l", $last);
        $insert->bindParam(":a", $adress);
        $insert->bindParam(":e", $email);
        $insert->bindParam(":r", $role);

        $result = $insert->execute();
        return $result;
    }
    function insertCategory($x, $y, $z){
        global $conn;
        $sql = "INSERT INTO $y($z)
        VALUES(:x)";

        $insert = $conn->prepare($sql);
        $insert->bindParam(":x",$x);

        $result = $insert->execute();
        return $result;
    }
    function updateCategory($id, $value, $table, $name, $i){
        global $conn;
        $sql = "UPDATE $table
        SET $name = :v
        WHERE $i = :x";

        $update = $conn->prepare($sql);
        $update->bindParam(":v", $value);
        $update->bindParam(":x", $id);

        $result = $update->execute();
        return $result;

    }
    function checkUser($username, $password){
        global $conn;
        $sql = "SELECT * FROM users u JOIN roles r ON u.role_id = r.role_id
        WHERE u.username = :u AND u.password = :p";
 
        $select = $conn->prepare($sql);
        $select->bindParam(":u", $username);
        $select->bindParam(":p", $password);

        $select->execute();
        $result = $select->fetch();
        return $result;

    }
    function filterItems($brandId, $sortId, $categoryId, $sizeId){
        global $conn;
        $cate = "";
        $size = "";
        $s = "";
        $c = "";
        if($brandId == 0){
            $brand = "WHERE p.brand_id IN ('1','2','3','4','5','6')";
        }else{
            $brand = "WHERE p.brand_id = $brandId";
        }
        if($sortId == 0){
            $sortId = "";
        }
        if($sortId == "priceAsc"){
            $sortId = "ORDER BY prod_price_new ASC";
        }
        if($sortId == "priceDesc"){
            $sortId = "ORDER BY prod_price_new DESC";
        }
        if($sortId == "letterAsc"){
            $sortId = "ORDER BY prod_name ASC";
        }
        if($sortId == "letterDesc"){
            $sortId = "ORDER BY prod_name DESC";
        }
        if($categoryId == NULL){
            $cate = "AND p.category_id IN ('1','2','3') ";
        }else{
            foreach($categoryId as $key => $cat){
                if(count($categoryId)==1){
                    $cate = "AND p.category_id = $cat";
                }else{
                    $cate = "AND p.category_id IN(";
                    $c .= $cat;
                    if(count($categoryId)>$key+1){
                        $c.=", ";
                    }
                    $cate = $cate . $c . ")";
                }
            }
        }
        if($sizeId == NULL){
            $size = "AND p.size_id IN ('1','2','3','4','5')";
        }else{
            foreach($sizeId as $key => $siz){
                if(count($sizeId)==1){
                    $size = "AND p.size_id = $siz";
                }else{
                    $size = "AND p.size_id IN(";
                    $s .= $siz;
                    if(count($sizeId)>$key+1){
                        $s.=", ";
                    }
                    $size = $size . $s . ")";
                }
            }
        }
        $sql = "SELECT * FROM products p JOIN brands b ON p.brand_id = b.brand_id
        JOIN categories c ON p.category_id = c.category_id JOIN sizes s ON p.size_id = s.size_id 
        $brand $cate $size $sortId";

        $data = $conn->query($sql)->fetchAll();
        return $data;
        
    }
    function numberProd(){
        global $conn;

        $sql = "SELECT COUNT(*) as num FROM products";

        $result = $conn->query($sql)->fetch();
        return $result;
    }
    
