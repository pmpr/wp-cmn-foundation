<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             643ba3b71e982             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto nomsoewcmsqiikyy; } try { if (class_exists($egkyssmuqcwaciya)) { goto eyoiasswoyuyuuco; } wp_die("\x63\x61\156\x20\x6e\x6f\164\x20\x63\162\x65\x61\x74\x65\x20\x69\x6e\163\164\x61\156\143\x65\40\146\162\157\x20{$egkyssmuqcwaciya}\x2c\x20\162\145\161\x75\x65\163\164\145\x64\40\x63\x6c\141\x73\x73\40\x6e\157\x74\x20\145\170\x69\163\164\163\56"); goto ssocqyqwsyyekiik; eyoiasswoyuyuuco: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ssocqyqwsyyekiik: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto iiueqisykokweaaw; nomsoewcmsqiikyy: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; iiueqisykokweaaw: return $owgumcsyqsamiemg; } }
