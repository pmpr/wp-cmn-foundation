<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64886c76243c6             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto oegoygwicucyeses; } try { if (class_exists($egkyssmuqcwaciya)) { goto kimusawigieceeai; } wp_die("\143\x61\x6e\x20\x6e\x6f\x74\40\143\162\x65\x61\x74\x65\x20\151\156\x73\164\141\156\143\145\x20\146\x72\157\x20{$egkyssmuqcwaciya}\54\40\x72\x65\x71\165\145\x73\x74\145\x64\40\143\154\x61\x73\163\x20\156\157\x74\40\145\x78\x69\163\x74\x73\56"); goto ccgoagogukekkeks; kimusawigieceeai: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ccgoagogukekkeks: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto gswyigyemukicika; oegoygwicucyeses: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; gswyigyemukicika: return $owgumcsyqsamiemg; } }
