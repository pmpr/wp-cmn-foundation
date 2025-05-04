<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6817590b297b0             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; class Tool extends Common { public function iyiccksyewqymmqg($sogksuscggsicmac, $gwmokccqwwksmwye) : bool { $ymiyawysimukkoso = $sogksuscggsicmac[Constants::ycuusiweasqygwiw] ?? []; return (int) ($ymiyawysimukkoso[Constants::yusuiaeueqwieqqq] ?? 1) <= (int) $gwmokccqwwksmwye; } public function mail(?string $acuayeeoiwokyomo, ?string $iosuwkkwwioumeqg, ?string $uamcoiueqaamsqma, array $aieaqakyuyewkkwe = [], array $uykgysuswksgmwqy = []) { $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $uykgysuswksgmwqy = array_merge($uykgysuswksgmwqy, ['Content-Type: text/html; charset=UTF-8', sprintf('From: %s <no-reply@%s>', $qkqgcaykemoiecma->ciqkaakiwsgqwiqu(Constants::NAME), $qkqgcaykemoiecma->ciqkaakiwsgqwiqu(Constants::auqoykcmsiauccao))]); return $this->uwkmaywceaaaigwo()->asgqmkcukouykiie()->mail($acuayeeoiwokyomo, $iosuwkkwwioumeqg, $uamcoiueqaamsqma, $uykgysuswksgmwqy, $aieaqakyuyewkkwe); } }
