<?php

include_once(ROOT . '/model/admin.php');

class AdminController extends AdminExist
{
    function __construct()
    {
        if (isset($_POST['submit']) && isset($_POST['password']) && isset($_POST['UserName'])) {
            $this->submit = $_POST['submit'];
            $this->UserName = $_POST['UserName'];
            $this->Pass = $_POST['password'];
        }
    }

    /**
     * @param in second if, send 3 @param into model, first it's query, 2,3 @param user data
     * @return true when user exist in database
     */
    public function actionIndex()
    {
        if (isset($this->submit) && isset($this->Pass) && isset($this->UserName)) {
            if (parent::issetAdmin("SELECT * from role", $_POST['UserName'], $_POST['password'])) {
                $_SESSION['admin'] = true;

            }
        }
    }


//    public function actionBlackAndWhite(){
//        $_SESSION['blackAndWhite']=true;
//       $black = [
//            'sm2752',
//            'sm2847',
//            'xr6970',
//            'hp2472',
//            'xr6698',
//            'xr6986',
//            'sm2861',
//            'sm6210',
//            'sm2831',
//            'xr6690',
//            'xr6696',
//            'xr6689',
//            'xr6897',
//            'xr6898',
//            'xr6680',
//            'xr6688',
//            'xr6686',
//            'sm2855',
//            'sm2865',
//            'sm2974',
//            'xr6897',
//            'sm2844',
//            'sm2803',
//            'hp2635',
//            'sm2742',
//            'sm2690',
//            'sm2834',
//            'ky6206',
//            'sm2854',
//            'sm2832',
//            'sm2779',
//            'sm2730',
//        ];
//    }public function actionColor(){
//        $_SESSION['blackAndWhite']=true;
//    $colors =  [
//
//        '2030xr',
//        'ky2874',
//        'sm6170',
//        'xr2948',
//        'xr6000',
//        '2237xr',
//        'xr2827',
//        'ky6999',
//        'xr6345',
//        'ky6594',
//        'xr2850',
//        'xr6899',
//        'xr2889',
//        'ky6595',
//        'xr2827',
//        '2030xr',
//        'xr6687',
//
//    ];
//    }
}

$admin = new AdminController();
$admin->actionIndex();
//$admin->acttionBlackAndWhite();

