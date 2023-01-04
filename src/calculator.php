<?php
class calculator {
        public function Factorial($n){
                if(is_int($n) && $n>=0 )
                { $fact=1;

                for($x=$n;$x>=1;$x--){

                $fact= $fact * $x;
                }
                return $fact;
        }else{
                return null;
        }
}
        public function Fact($n){
                if(is_int($n) and $n>3 )
                {
                        $y=1; $m=$n-1;

                for ($z=$m; $z>1 ;$z--)
                {
                $y = $y*$z;
                }
                return $y;
                }
         }
        }
?>
