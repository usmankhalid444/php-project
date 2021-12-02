    <?php
    class Fruit
    {
        public $name;
        public $color;

        function __construct($name, $color)
        {
            $this->name = $name;
            $this->color = $color;
        }
        public function getInfo()
        {
            return $this->name . '  ' . $this->color;
        }
    }

    $apple = new Fruit('apple', 'red');
    echo $apple->getInfo();




    ?>