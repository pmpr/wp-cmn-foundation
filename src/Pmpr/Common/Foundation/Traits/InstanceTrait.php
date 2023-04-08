<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             643154b0189ff             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto yiuwcmkkcemwksaq; } try { if (class_exists($egkyssmuqcwaciya)) { goto oekyuoucqkakcewe; } wp_die("\x63\x61\156\x20\156\x6f\x74\x20\x63\162\145\x61\x74\x65\40\151\156\163\164\141\156\143\x65\x20\146\x72\157\x20{$egkyssmuqcwaciya}\54\40\x72\145\x71\165\x65\x73\x74\x65\144\40\143\154\x61\163\x73\40\156\157\164\x20\x65\x78\151\x73\x74\163\x2e"); goto ieaswyqkcwyaycse; oekyuoucqkakcewe: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ieaswyqkcwyaycse: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto wgegmwgsmsgmceqo; yiuwcmkkcemwksaq: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; wgegmwgsmsgmceqo: return $owgumcsyqsamiemg; } }
