<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66b3f9e603f63             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto mmkooaugaqyqgyww; } try { if (class_exists($egkyssmuqcwaciya)) { goto yuiowkeqksugiksa; } wp_die("\x63\x61\x6e\x20\156\157\x74\40\143\162\x65\x61\164\x65\40\151\x6e\x73\164\141\156\143\145\x20\146\162\157\40{$egkyssmuqcwaciya}\x2c\x20\x72\x65\161\165\145\163\164\x65\144\x20\143\x6c\x61\x73\x73\x20\x6e\157\x74\40\x65\x78\151\x73\x74\x73\x2e"); goto ugasccoeokgqkses; yuiowkeqksugiksa: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ugasccoeokgqkses: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto aeesioaqmuoeyoga; mmkooaugaqyqgyww: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; aeesioaqmuoeyoga: return $owgumcsyqsamiemg; } }
