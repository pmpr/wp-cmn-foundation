<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66afcf114dfe8             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto acwgyguyoswiiayo; } try { if (class_exists($egkyssmuqcwaciya)) { goto sgggogwmywukuwoq; } wp_die("\143\141\156\x20\156\157\164\40\143\162\145\141\164\x65\x20\x69\x6e\x73\164\x61\x6e\143\145\40\146\x72\x6f\40{$egkyssmuqcwaciya}\54\x20\162\x65\x71\165\145\163\164\x65\144\x20\x63\154\x61\x73\163\40\156\157\164\40\x65\x78\x69\x73\x74\163\x2e"); goto bkusemkaeowgcggg; sgggogwmywukuwoq: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; bkusemkaeowgcggg: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto oqqsaycukyyqkwwa; acwgyguyoswiiayo: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; oqqsaycukyyqkwwa: return $owgumcsyqsamiemg; } }
