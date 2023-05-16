<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6463ac09b6c4e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto keigessgsgawiyyo; } try { if (class_exists($egkyssmuqcwaciya)) { goto myikgqcgseikimwa; } wp_die("\x63\141\x6e\40\156\157\x74\x20\x63\162\145\x61\x74\145\40\151\156\x73\164\x61\x6e\x63\145\40\146\162\x6f\x20{$egkyssmuqcwaciya}\54\40\x72\x65\x71\165\145\x73\164\145\x64\40\x63\154\x61\x73\163\40\156\x6f\x74\40\x65\170\151\163\164\163\56"); goto ooyyuaswogikyggu; myikgqcgseikimwa: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ooyyuaswogikyggu: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto saueosiwcgqsmgmk; keigessgsgawiyyo: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; saueosiwcgqsmgmk: return $owgumcsyqsamiemg; } }
