<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             647cafa1ad878             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto oegoygwicucyeses; } try { if (class_exists($egkyssmuqcwaciya)) { goto kimusawigieceeai; } wp_die("\x63\x61\x6e\x20\x6e\x6f\164\40\143\x72\145\x61\x74\x65\x20\151\x6e\x73\164\141\x6e\x63\145\40\146\162\157\x20{$egkyssmuqcwaciya}\54\x20\162\145\161\165\145\163\164\x65\144\40\x63\x6c\x61\x73\163\40\156\x6f\x74\x20\x65\170\151\x73\x74\x73\56"); goto ccgoagogukekkeks; kimusawigieceeai: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ccgoagogukekkeks: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto gswyigyemukicika; oegoygwicucyeses: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; gswyigyemukicika: return $owgumcsyqsamiemg; } }
