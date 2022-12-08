<?php
require '../Database.php';

class QueryData extends Database
{
    // lay thong tin dang nhap user
    public function GetUser($username, $password, $type)
    {
        try {
            $sql = "SELECT id,username,password FROM USER WHERE username = ? and isDeleted = 0";
            $statement = $this->getConnect()->prepare($sql);
            $statement->bindValue(1, $username);

            $statement->execute();
            $result = $statement->fetchAll();
            $success = $statement->rowCount();
            $statement->closeCursor();

            if ($success >= 1) {
                if (password_verify($password, $result[0]['password'])) {
                    if ($type === 'session') {
                        $_SESSION['username'] = $username;
                        echo '<script>alert("Đăng nhập thành công")</script>';
                        header('location: ../message/Index.php');
                    } else if ($type === 'cookie') {
                        $_SESSION['username'] = $username;
                        $_SESSION['expire'] = time() + (3600 * 3600 * 24 * 15);
                        echo '<script>alert("Đăng nhập thành công")</script>';
                        header('location: ../message/Index.php');
                    }
                } else {
                    echo '<script>alert("Đăng nhập thất bại")</script>';
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    //get id cua 1 user

    public function GetIdUser($username)
    {
        try {
            $sql = "SELECT id FROM tranning_amela.user where username =?";
            $statement = $this->getConnect()->prepare($sql);
            $statement->bindValue(1, $username);

            $statement->execute();
            $resultId = $statement->fetchAll();
            $statement->closeCursor();

            return $resultId;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // lấy dữ liệu tin nhắn
    function GetData()
    {
        try {
            $sql = "SELECT u.hoten,m.image,m.content FROM tranning_amela.message AS m 
                    JOIN tranning_amela.user AS u
                    ON  m.idUser = u.id
                    WHERE m.isDeleted =0";
            $resultMessage = $this->getConnect()->prepare($sql);

            $resultMessage->execute();
            $data = $resultMessage->fetchAll();
            $resultMessage->closeCursor();

            return $data;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // send message ( insert value )
    function SendMessage($id_user, $content, $image, $createAt)
    {
        try {

            $sql = "INSERT INTO tranning_amela.message(idUser,content,image,createAt) VALUES (:id_user,:content,:image,:createAt)";
            $statement = $this->getConnect()->prepare($sql);

            $statement->bindValue(':id_user', $id_user);
            $statement->bindValue(':content', $content);
            $statement->bindValue('image', $image);
            $statement->bindValue('createAt', $createAt);

            $success = $statement->execute();

            $statement->closeCursor();
            return $success;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    //register user

    function Register($array)
    {
        try {
            $sql = "INSERT INTO tranning_amela.user(username,password,age,address,job,gender,description,image,createAt,hoten) 
                VALUES(:username,:password,:age,:address,:job,:gender,:description,:image,:date,:hoten)";

            $statement = $this->getConnect()->prepare($sql);
            $statement->bindValue(':username', $array['username']);
            $statement->bindValue(':password', $array['password']);
            $statement->bindValue(':age', $array['age']);
            $statement->bindValue(':address', $array['address']);
            $statement->bindValue(':job', $array['job']);
            $statement->bindValue(':gender', $array['gender']);
            $statement->bindValue(':description', $array['description']);
            $statement->bindValue(':image', $array['image']);
            $statement->bindValue(':date', $array['date']);
            $statement->bindValue(':hoten', $array['hoten']);

            $success = $statement->execute();
            $statement->closeCursor();

            return $success;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    //get username check exists

    function GetUserName($username)
    {
        try {
            $sql = "SELECT * FROM tranning_amela.user WHERE username = ?";

            $statement = $this->getConnect()->prepare($sql);

            $statement->bindValue(1, $username);
            $statement->execute();
            $result = $statement->rowCount();

            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
};
