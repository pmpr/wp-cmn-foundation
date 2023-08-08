<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64d2619f78f58             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto wiiaiqiomosmyuwq; } try { if (class_exists($egkyssmuqcwaciya)) { goto gawswamyawcmsmei; } wp_die("\x63\141\156\x20\x6e\157\164\x20\143\162\x65\141\x74\145\x20\x69\156\x73\x74\141\156\x63\x65\40\x66\162\x6f\x20{$egkyssmuqcwaciya}\54\x20\162\145\x71\x75\x65\163\164\145\x64\40\x63\x6c\x61\163\163\x20\x6e\157\x74\40\145\170\151\163\164\x73\x2e"); goto cmsyegseqcwmyycy; gawswamyawcmsmei: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; cmsyegseqcwmyycy: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto sccaumocseyiqsue; wiiaiqiomosmyuwq: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; sccaumocseyiqsue: return $owgumcsyqsamiemg; } }
