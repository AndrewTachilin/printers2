<?php

include_once(ROOT . '/model/UpdateExistSamsung.php');

class SamsungController extends UpdateExistSamsung
{
7

    /**
     * @param $path = path to printer
     * @return false if in path  if no math by regular expression
     */


    public function actionSamsung()
    {

        $arrayofSamsungs = [

            'sm2622',
            'sm2626',
            'sm2752',
            'sm2847',
            'sm2861',
            'sm6210',
            'sm2831',
            'sm2855',
            'sm2865',
            'sm2974',
            'sm2844',
            'sm2803',
            'sm2742',
            'sm2690',
            'sm2834',
            'sm2854',
            'sm2832',
            'sm2779',
            'sm2730',
            'sm6170',
        ];


        foreach ($arrayofSamsungs as $oneSamsung) {

         $path = file_get_contents('http://' . $oneSamsung . '/sws/app/information/home/home.json');

            $regularExpression = '/remaining:\s([0-9]{1,3})/';
            $check = preg_match_all($regularExpression, $path, $matches);
            if ($check) {
                $fullname = explode('"', $matches[0][0]);
                $procentCartridge = explode(" ", $fullname[0]);
            }
            $check = preg_match('/model_name:\s"[a-zA-Z]{1,}\sSCX-[\d]{1,}[a-z]/', $path, $matches);
            if ($check) {
                $fullname = explode('"', $matches[0]);
                $nameAndType = explode(" ", $fullname[1]);
                var_dump($nameAndType);
            }




            if (parent::issetPrinter($procentCartridge[1], $nameAndType[0], $oneSamsung)) {

            }
        }




    }
    public function selectall(){
        if(parent::select()){
             return (parent::select());
        }
    }


7
}






$samung = new SamsungController();
//$samung->actionSamsung();
$samung->actionSamsung();
//var_dump($samung->selectAll());
//var_dump($resultSamsung)
$resultOfall  = $samung->selectall();
//var_dump($resultOfall);
foreach ($resultOfall as $all){

}
