<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             643a53df34d76             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto nomsoewcmsqiikyy; } try { if (class_exists($egkyssmuqcwaciya)) { goto eyoiasswoyuyuuco; } wp_die("\143\141\x6e\40\x6e\x6f\164\x20\143\162\145\141\x74\x65\x20\151\x6e\163\x74\141\x6e\x63\145\40\x66\162\x6f\x20{$egkyssmuqcwaciya}\54\x20\x72\x65\x71\x75\145\x73\x74\x65\x64\x20\143\x6c\141\163\163\x20\x6e\x6f\164\40\x65\x78\151\163\164\163\56"); goto ssocqyqwsyyekiik; eyoiasswoyuyuuco: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ssocqyqwsyyekiik: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto iiueqisykokweaaw; nomsoewcmsqiikyy: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; iiueqisykokweaaw: return $owgumcsyqsamiemg; } }
