<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64417580becf9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto iqsoeqgwemgyiimg; } try { if (class_exists($egkyssmuqcwaciya)) { goto ooqqyyewioyccuww; } wp_die("\x63\x61\x6e\x20\x6e\x6f\x74\x20\x63\162\145\141\x74\x65\x20\x69\x6e\163\164\141\x6e\x63\145\40\x66\162\x6f\40{$egkyssmuqcwaciya}\54\40\162\145\x71\165\x65\x73\164\145\x64\40\x63\x6c\141\x73\x73\40\x6e\157\x74\40\145\x78\151\x73\164\x73\56"); goto umasasgawwamkisc; ooqqyyewioyccuww: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; umasasgawwamkisc: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto qqkqiioqwkekqsoq; iqsoeqgwemgyiimg: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; qqkqiioqwkekqsoq: return $owgumcsyqsamiemg; } }
