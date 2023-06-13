<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             648879b8b8674             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto oegoygwicucyeses; } try { if (class_exists($egkyssmuqcwaciya)) { goto kimusawigieceeai; } wp_die("\x63\141\156\x20\156\157\x74\40\x63\162\x65\x61\164\145\x20\x69\x6e\163\x74\141\156\143\145\x20\146\162\157\40{$egkyssmuqcwaciya}\54\x20\x72\x65\x71\x75\x65\163\164\x65\x64\x20\x63\x6c\141\x73\163\x20\x6e\x6f\x74\x20\145\170\151\x73\x74\163\x2e"); goto ccgoagogukekkeks; kimusawigieceeai: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ccgoagogukekkeks: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto gswyigyemukicika; oegoygwicucyeses: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; gswyigyemukicika: return $owgumcsyqsamiemg; } }
