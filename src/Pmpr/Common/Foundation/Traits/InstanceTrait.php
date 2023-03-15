<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64117e71f227c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto ywoyioqqyuocoygk; } $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; goto iauwkeeaqsgweeoo; ywoyioqqyuocoygk: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; iauwkeeaqsgweeoo: return $owgumcsyqsamiemg; } }
