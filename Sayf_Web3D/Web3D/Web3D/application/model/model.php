<?php

class Model {

    public $dbHandle;

    public function __construct() {
        $dsn = 'sqlite:./db/database.db';

        try {
            $this -> dbHandle= new PDO(
                $dsn,
                'user',
                'password',
                array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES => false,
                )
            );
        }
        catch (PDOException $e) {
            echo "PDOException manually thrown";
            print new Exception($e -> getMessage());
        }
    }

    public function model3D_info() {
        return array (
            'temp' => 'this is SQLite later'
        );
    }

    public function dbCreateTable() {
        try {
            $this -> dbHandle -> exec("CREATE TABLE Model_3D (Id INTEGER PRIMARY KEY, x3dModelTitle TEXT, x3dCreationMethod TEXT, modelTitle TEXT, modelSubtitle TEXT, modelDescription TEXT)"
            );
            return "Table for the Model is Created, Success";
        }
        catch (PDOException $e) {
            print new Exception($e -> getMessage());
        }

        $this -> dbHandle = NULL;
        return "Error, disconnected @ model.php -> dbCreateTable()";
    }

    public function dbCreateImageTable() {
        try {
            $this -> dbHandle -> exec("CREATE TABLE Image_Gallery (Id INTEGER PRIMARY KEY, path TEXT, imageTitle TEXT, imageDescription TEXT)"
            );
            return "Carousel Gallery Images Table Created";
        }
        catch (PDOException $e) {
            print new Exception($e -> getMessage());
        }

        $this -> dbHandle = NULL;
        return "Error, disconnected @ model.php -> dbCreateImageTable()";
    }

    public function dbInsertData() {
        try {
            $this -> dbHandle -> exec(
                "INSERT INTO Model_3D (Id, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) VALUES (1, 'TestModelTitle', 'TestMethod', 'TestTitle', 'TestSub', 'TestDesc');"
            );
            return "data inserted";
        }
        catch (PDOException $e) {
            print new Exception($e -> getMessage());
        }

        $this -> dbHandle = NULL;
        return "Error, disconnected @ model.php -> dbInsertData()";
    }

    public function dbInsertImageData() {
        try {
            $this -> dbHandle -> exec(
                "INSERT INTO Image_Gallery (Id, path, imageTitle, imageDescription) VALUES (1, 'TestPath', 'TestTitle', 'TestDesc');"
            );
            return "data inserted";
        }
        catch (PDOException $e) {
            print new Exception($e -> getMessage());
        }

        $this -> dbHandle = NULL;
        return "Error, disconnected @ model.php -> dbInsertImageData()";
    }

    public function dbGetData() {

        $sql = 'SELECT * FROM Model_3D';
        $result = NULL;
        try {
            $table = $this -> dbHandle -> query($sql);

            $id = 0 ;
            while ($data = $table -> fetch()) {
                $result[$id]['x3dModelTitle'] = $data['x3dModelTitle'];
                $result[$id]['x3dCreationMethod'] = $data['x3dCreationMethod'];
                $result[$id]['modelTitle'] = $data['modelTitle'];
                $result[$id]['modelSubtitle'] = $data['modelSubtitle'];
                $result[$id]['modelDescription'] = $data['modelDescription'];

                $id++;
            }
        }
        catch (PDOException $e) {
            print new Exception($e -> getMessage());
        }

        $this -> dbHandle = NULL;

        return $result;
    }

    public function imageGetData() {

        $sql = 'SELECT * FROM Image_Gallery';
        $result = NULL;
        try {
            $table = $this -> dbHandle -> query($sql);

            $id = 0 ;
            while ($data = $table -> fetch()) {
                $result[$id]['iPath'] = $data['path'];
                $result[$id]['imageTitle'] = $data['imageTitle'];
                $result[$id]['imageDescription'] = $data['imageDescription'];

                $id++;
            }
        }
        catch (PDOException $e) {
            print new Exception($e -> getMessage());
        }

        $this -> dbHandle = NULL;

        return $result;
    }

    public function dbGetModelData($brandName) {

        $sql = 'SELECT * FROM Model_3D WHERE modelTitle="'. $brandName . '"';
        $result = NULL;
        try {
            $table = $this -> dbHandle -> query($sql);
            $data = $table -> fetch();


            $result['x3dModelTitle'] = $data['x3dModelTitle'];
            $result['x3dCreationMethod'] = $data['x3dCreationMethod'];
            $result['modelTitle'] = $data['modelTitle'];
            $result['modelSubtitle'] = $data['modelSubtitle'];
            $result['modelDescription'] = $data['modelDescription'];
        }
        catch (PDOException $e) {
            print new Exception($e -> getMessage());
        }

        $this -> dbHandle = NULL;

        return $result;
    }
}