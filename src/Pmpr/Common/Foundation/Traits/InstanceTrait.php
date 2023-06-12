<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             648726e36be04             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto oegoygwicucyeses; } try { if (class_exists($egkyssmuqcwaciya)) { goto kimusawigieceeai; } wp_die("\143\x61\x6e\x20\x6e\x6f\164\x20\x63\x72\145\141\164\x65\40\x69\x6e\163\164\x61\x6e\143\145\x20\x66\162\157\x20{$egkyssmuqcwaciya}\54\40\162\x65\x71\165\x65\x73\164\x65\x64\40\x63\x6c\141\163\163\x20\156\x6f\x74\40\145\x78\151\163\x74\163\56"); goto ccgoagogukekkeks; kimusawigieceeai: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ccgoagogukekkeks: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto gswyigyemukicika; oegoygwicucyeses: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; gswyigyemukicika: return $owgumcsyqsamiemg; } }
