
    <?php
    //
    class person
    {
        var $name;
        public $gender;
        private $mobile;
        //私有屬性無法直接讀取,可以用公開的function去讀取
        function set_mobile($mob)
        {
            $this->mobile = $mob;
        }
    }
    //建立一個這個類別
    $p = new person;
    $p->name = 'Nancy';
    $p->gender = 'girl';
    $p->set_mobile('0955-111-222');

    print_r($p);


    // class person_two
    // {
    //     var $name;
    //     //....建....構涵式__construct:建立物件時呼叫
    //     function __construct($n)
    //     {
    //         $this->name = $n;
    //         echo $this->name . '建構</br>';
    //     }
    //     //...解....構涵式__construct:在物件被刪除之前會呼叫
    //     function __destruct($n)
    //     {
    //         echo $this->name . '解構</br>';
    //     }
    // }

    // $p2 = new person_two('p2');
    // unset ($p2);
    // $p3 = new person_two('p3')









    ?>
 