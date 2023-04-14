<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64396e52aede3             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto nomsoewcmsqiikyy; } try { if (class_exists($egkyssmuqcwaciya)) { goto eyoiasswoyuyuuco; } wp_die("\x63\141\x6e\x20\156\157\x74\x20\143\x72\x65\141\x74\145\x20\x69\x6e\x73\164\x61\156\143\x65\40\146\x72\x6f\x20{$egkyssmuqcwaciya}\x2c\40\x72\145\x71\165\145\163\164\x65\144\40\143\x6c\x61\163\x73\x20\156\x6f\164\40\145\170\151\x73\x74\x73\x2e"); goto ssocqyqwsyyekiik; eyoiasswoyuyuuco: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ssocqyqwsyyekiik: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto iiueqisykokweaaw; nomsoewcmsqiikyy: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; iiueqisykokweaaw: return $owgumcsyqsamiemg; } }
