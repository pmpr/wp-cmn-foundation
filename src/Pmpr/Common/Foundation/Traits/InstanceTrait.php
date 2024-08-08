<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66b40b4e0d42f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto aeesioaqmuoeyoga; } try { if (class_exists($egkyssmuqcwaciya)) { goto ugasccoeokgqkses; } wp_die("\x63\141\x6e\x20\x6e\x6f\164\x20\x63\162\x65\141\164\x65\40\x69\x6e\x73\164\x61\x6e\x63\145\40\x66\162\x6f\40{$egkyssmuqcwaciya}\54\x20\x72\145\161\165\x65\x73\x74\x65\144\40\x63\x6c\141\163\163\x20\x6e\157\164\x20\145\x78\x69\x73\164\163\x2e"); goto mmkooaugaqyqgyww; ugasccoeokgqkses: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; mmkooaugaqyqgyww: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto ikseiooeakoewqqu; aeesioaqmuoeyoga: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; ikseiooeakoewqqu: return $owgumcsyqsamiemg; } }
