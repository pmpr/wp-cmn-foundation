<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66b3fc3df2d9f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto mmkooaugaqyqgyww; } try { if (class_exists($egkyssmuqcwaciya)) { goto yuiowkeqksugiksa; } wp_die("\x63\141\x6e\x20\x6e\157\x74\40\x63\162\x65\141\x74\145\40\151\x6e\x73\x74\141\x6e\x63\145\40\146\x72\157\40{$egkyssmuqcwaciya}\x2c\x20\162\x65\161\x75\145\163\x74\x65\144\x20\143\x6c\x61\x73\x73\40\156\157\164\x20\x65\170\151\163\164\163\56"); goto ugasccoeokgqkses; yuiowkeqksugiksa: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ugasccoeokgqkses: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto aeesioaqmuoeyoga; mmkooaugaqyqgyww: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; aeesioaqmuoeyoga: return $owgumcsyqsamiemg; } }
