<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             652e61aaa54a7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto kayygiukegykiwas; } try { if (class_exists($egkyssmuqcwaciya)) { goto geaucesekwmkgusc; } wp_die("\x63\141\x6e\40\156\157\164\40\x63\162\x65\x61\x74\145\40\151\156\163\164\141\x6e\143\145\40\x66\162\157\x20{$egkyssmuqcwaciya}\54\x20\162\145\x71\x75\x65\x73\164\145\144\x20\143\x6c\x61\x73\163\x20\156\157\164\x20\x65\170\151\163\164\x73\x2e"); goto mmkssgccamceekkq; geaucesekwmkgusc: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; mmkssgccamceekkq: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto uqqwyiemackamkca; kayygiukegykiwas: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; uqqwyiemackamkca: return $owgumcsyqsamiemg; } }
