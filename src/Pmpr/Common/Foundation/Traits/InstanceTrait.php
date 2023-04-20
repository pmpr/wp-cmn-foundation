<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             644166ee226f9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto iqsoeqgwemgyiimg; } try { if (class_exists($egkyssmuqcwaciya)) { goto ooqqyyewioyccuww; } wp_die("\143\x61\x6e\x20\x6e\x6f\164\x20\x63\x72\145\141\164\x65\40\x69\156\163\x74\141\156\143\x65\x20\x66\x72\x6f\40{$egkyssmuqcwaciya}\54\x20\x72\145\161\x75\x65\163\164\x65\144\x20\x63\154\x61\163\163\x20\156\x6f\x74\x20\x65\170\151\x73\164\163\56"); goto umasasgawwamkisc; ooqqyyewioyccuww: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; umasasgawwamkisc: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto qqkqiioqwkekqsoq; iqsoeqgwemgyiimg: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; qqkqiioqwkekqsoq: return $owgumcsyqsamiemg; } }
