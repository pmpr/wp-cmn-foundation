<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64d261fef2d50             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto wiiaiqiomosmyuwq; } try { if (class_exists($egkyssmuqcwaciya)) { goto gawswamyawcmsmei; } wp_die("\143\141\x6e\40\156\x6f\164\x20\x63\162\x65\141\164\145\x20\151\x6e\163\x74\141\x6e\x63\x65\x20\x66\162\157\x20{$egkyssmuqcwaciya}\x2c\x20\x72\145\x71\165\145\x73\x74\145\144\x20\x63\154\x61\x73\163\x20\156\x6f\164\x20\145\x78\151\163\x74\163\x2e"); goto cmsyegseqcwmyycy; gawswamyawcmsmei: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; cmsyegseqcwmyycy: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto sccaumocseyiqsue; wiiaiqiomosmyuwq: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; sccaumocseyiqsue: return $owgumcsyqsamiemg; } }
