<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ce6343424e0             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Plugin\Ticket; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Plugin\Common as BaseClass; use Pmpr\Common\Foundation\Plugin\Ticket\Traits\SettingTrait; abstract class Common extends BaseClass { use SettingTrait; public function umqeyekmoagusaiq($iiwuoccgisuaoaka) : string { $iiwuoccgisuaoaka = (array) $iiwuoccgisuaoaka; if (isset($iiwuoccgisuaoaka[Constants::ckmsuwamgymouaeu])) { goto mgkaweokcicgiegg; } $igwimgwceysgwimw = get_custom_logo(); if ($igwimgwceysgwimw) { goto qkeyoeyiuqeyicqa; } $igwimgwceysgwimw = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->aeymcyaqkmmukomc(); qkeyoeyiuqeyicqa: $iiwuoccgisuaoaka[Constants::owsgqueosiqycgky] = $igwimgwceysgwimw; goto ukcoymqsgmcwokoq; mgkaweokcicgiegg: $iiwuoccgisuaoaka[Constants::owsgqueosiqycgky] = $this->qaawomkouwoaoqma(Constants::mscgqqsgosmsqygq); ukcoymqsgmcwokoq: $iiwuoccgisuaoaka[Constants::yqemseykugmsyeqa] = sprintf(__("\45\163\40\x61\x74\40\45\x73", PR__CMN__FOUNDATION), "\152\x20\x46\40\x59", "\110\72\x69"); return $this->iuygowkemiiwqmiw("\143\x6f\x6e\166\145\x72\163\141\164\x69\157\x6e", $iiwuoccgisuaoaka); } }
