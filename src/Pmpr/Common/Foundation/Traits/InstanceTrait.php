<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             646a336b8f5d1             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto kgmwmmiemqggaqeq; } try { if (class_exists($egkyssmuqcwaciya)) { goto keigessgsgawiyyo; } wp_die("\143\141\x6e\x20\x6e\157\x74\40\x63\162\x65\141\x74\145\40\x69\x6e\163\164\x61\x6e\x63\x65\40\146\162\x6f\40{$egkyssmuqcwaciya}\54\40\x72\x65\x71\165\x65\x73\x74\x65\x64\x20\x63\154\x61\163\x73\x20\x6e\x6f\x74\x20\x65\x78\151\163\x74\163\x2e"); goto saueosiwcgqsmgmk; keigessgsgawiyyo: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; saueosiwcgqsmgmk: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto cigcsyiesymkuywu; kgmwmmiemqggaqeq: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; cigcsyiesymkuywu: return $owgumcsyqsamiemg; } }
