<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             643b8fba83496             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto nomsoewcmsqiikyy; } try { if (class_exists($egkyssmuqcwaciya)) { goto eyoiasswoyuyuuco; } wp_die("\x63\141\x6e\40\156\157\164\40\x63\x72\145\141\164\145\x20\151\156\163\x74\x61\156\x63\x65\x20\x66\x72\x6f\40{$egkyssmuqcwaciya}\x2c\40\162\145\161\x75\x65\x73\x74\x65\144\40\x63\x6c\141\x73\163\x20\156\x6f\164\40\x65\170\x69\163\x74\163\x2e"); goto ssocqyqwsyyekiik; eyoiasswoyuyuuco: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ssocqyqwsyyekiik: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto iiueqisykokweaaw; nomsoewcmsqiikyy: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; iiueqisykokweaaw: return $owgumcsyqsamiemg; } }
