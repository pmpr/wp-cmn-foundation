<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             699992793a35d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\Database\Schema; use Pmpr\Common\Foundation\Interfaces\Constants; class Timestamp extends Schema { public function __construct(string $aokagokqyuysuksm, ?string $meqocwsecsywiiqs = null) { parent::__construct('timestamp', $aokagokqyuysuksm, $meqocwsecsywiiqs); $this->iwwmociiuayuwssq(function ($eqgoocgaqwqcimie) { if ($eqgoocgaqwqcimie) { $saqmwwmqiwmkiwaa = $this->imkyoqyocosuqasu('date_format', $this->caokeucsksukesyo()->eiwcuqigayigimak()->yoaaussmackoisuw()); $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom($eqgoocgaqwqcimie, $saqmwwmqiwmkiwaa, $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->iyouigcsiacgwksc()); } else { $eqgoocgaqwqcimie = '-'; } return $eqgoocgaqwqcimie; }); } public function migyiqecesmwseuy(string $mqwueawgkycquock) : self { return $this->igiywquyccyiaucw('date_format', $mqwueawgkycquock); } }
