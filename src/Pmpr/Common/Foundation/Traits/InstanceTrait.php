<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66b61855c9112             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto mmkooaugaqyqgyww; } try { if (class_exists($egkyssmuqcwaciya)) { goto yuiowkeqksugiksa; } wp_die("\143\141\x6e\40\156\x6f\164\x20\143\x72\145\141\x74\x65\40\151\156\163\x74\141\x6e\143\x65\40\146\162\x6f\40{$egkyssmuqcwaciya}\54\40\x72\x65\161\x75\x65\x73\164\145\x64\x20\x63\154\x61\x73\163\x20\x6e\157\164\40\145\170\151\x73\x74\x73\56"); goto ugasccoeokgqkses; yuiowkeqksugiksa: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ugasccoeokgqkses: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto aeesioaqmuoeyoga; mmkooaugaqyqgyww: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; aeesioaqmuoeyoga: return $owgumcsyqsamiemg; } }
