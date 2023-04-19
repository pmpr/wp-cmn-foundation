<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             643fe5128d192             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto iqsoeqgwemgyiimg; } try { if (class_exists($egkyssmuqcwaciya)) { goto ooqqyyewioyccuww; } wp_die("\x63\141\x6e\40\x6e\x6f\164\x20\x63\x72\145\x61\164\x65\x20\x69\x6e\163\x74\141\x6e\x63\x65\40\146\x72\157\40{$egkyssmuqcwaciya}\x2c\x20\162\x65\161\165\x65\x73\x74\145\144\40\x63\154\x61\163\x73\40\x6e\x6f\x74\x20\x65\170\151\x73\164\x73\56"); goto umasasgawwamkisc; ooqqyyewioyccuww: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; umasasgawwamkisc: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto qqkqiioqwkekqsoq; iqsoeqgwemgyiimg: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; qqkqiioqwkekqsoq: return $owgumcsyqsamiemg; } }
