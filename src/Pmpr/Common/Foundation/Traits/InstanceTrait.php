<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6464f0247bd02             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto kgmwmmiemqggaqeq; } try { if (class_exists($egkyssmuqcwaciya)) { goto keigessgsgawiyyo; } wp_die("\x63\x61\x6e\x20\x6e\x6f\164\40\x63\x72\x65\141\x74\145\x20\151\x6e\163\x74\141\x6e\x63\145\40\x66\x72\157\40{$egkyssmuqcwaciya}\x2c\40\162\x65\161\165\x65\x73\164\x65\144\40\x63\154\x61\163\163\40\156\x6f\164\40\x65\x78\151\x73\x74\x73\x2e"); goto saueosiwcgqsmgmk; keigessgsgawiyyo: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; saueosiwcgqsmgmk: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto cigcsyiesymkuywu; kgmwmmiemqggaqeq: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; cigcsyiesymkuywu: return $owgumcsyqsamiemg; } }
