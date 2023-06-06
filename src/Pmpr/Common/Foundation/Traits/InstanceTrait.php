<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             647f20d58f3db             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto oegoygwicucyeses; } try { if (class_exists($egkyssmuqcwaciya)) { goto kimusawigieceeai; } wp_die("\x63\x61\156\x20\x6e\x6f\164\x20\143\162\145\141\x74\145\40\151\x6e\163\164\141\x6e\x63\x65\40\x66\162\x6f\40{$egkyssmuqcwaciya}\54\40\x72\145\161\x75\145\x73\x74\x65\x64\x20\143\x6c\141\x73\x73\40\156\x6f\164\40\145\170\151\x73\x74\x73\56"); goto ccgoagogukekkeks; kimusawigieceeai: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ccgoagogukekkeks: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto gswyigyemukicika; oegoygwicucyeses: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; gswyigyemukicika: return $owgumcsyqsamiemg; } }
