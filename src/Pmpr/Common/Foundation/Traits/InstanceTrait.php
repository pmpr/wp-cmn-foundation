<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66aeb5dd1a4cd             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto sgggogwmywukuwoq; } try { if (class_exists($egkyssmuqcwaciya)) { goto moaqsaoasisemagk; } wp_die("\143\x61\x6e\40\x6e\157\x74\40\143\x72\x65\x61\164\x65\x20\151\156\x73\x74\x61\156\143\145\x20\x66\x72\x6f\40{$egkyssmuqcwaciya}\54\40\x72\145\x71\165\x65\163\164\145\144\40\143\154\x61\163\163\40\x6e\x6f\x74\x20\x65\x78\151\163\164\x73\56"); goto fauegywkmasowmki; moaqsaoasisemagk: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; fauegywkmasowmki: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto bkusemkaeowgcggg; sgggogwmywukuwoq: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; bkusemkaeowgcggg: return $owgumcsyqsamiemg; } }
