<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66af633f8debd             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto bkusemkaeowgcggg; } try { if (class_exists($egkyssmuqcwaciya)) { goto fauegywkmasowmki; } wp_die("\x63\x61\x6e\x20\x6e\x6f\x74\40\x63\x72\x65\141\164\145\40\151\x6e\x73\164\x61\156\143\145\x20\x66\x72\157\x20{$egkyssmuqcwaciya}\x2c\40\162\145\x71\165\x65\x73\164\x65\x64\x20\143\x6c\x61\163\163\x20\x6e\157\x74\x20\x65\170\x69\163\x74\x73\x2e"); goto sgggogwmywukuwoq; fauegywkmasowmki: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; sgggogwmywukuwoq: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto acwgyguyoswiiayo; bkusemkaeowgcggg: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; acwgyguyoswiiayo: return $owgumcsyqsamiemg; } }
