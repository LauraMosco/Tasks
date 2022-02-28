<?php
	Class Calculo
	{
		public $ca, $cp, $cta, $ctp, $ctt;

		public function c1 ($arr)
		{
			$this-> ca=($arr['p']*0.5)/4;
			return $this-> ca;
		}

		public function c2 ($arr)
		{
			$this-> cp=($arr=['p']*0.25)/4;
			return $this-> cp;
		}

		public function c3 ($ca, $arr)
		{
			$this-> cta=($ca*$arr['pa']);
			return $this-> cta;
		}

		public function cc3 ($cp, $arr)
		{
			$this-> ctp=($ca*$arr['pp']);
			return $this-> ctp;
		}

		public function c4 ($cta, $ctp)
		{
			$this-> ctt=$cta+$ctp;
			return $this-> ctt;
		}
	}
?>