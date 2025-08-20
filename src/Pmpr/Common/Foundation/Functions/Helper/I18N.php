<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             68a63e25c5b78             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; class I18N extends Common { public function eusockqasqqmoess($eusockqasqqmoess, $locale = null) { if ($eusockqasqqmoess === '2.7.4') { $mmeioagwmyscwumo = 1; } $kcqgsouywoiekwak = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou('trans_number', $eusockqasqqmoess, $locale); if (is_numeric($eusockqasqqmoess) && (string) $kcqgsouywoiekwak === (string) $eusockqasqqmoess) { $kcqgsouywoiekwak = number_format_i18n((float) $eusockqasqqmoess); } return $kcqgsouywoiekwak; } public function aoaesiikusqamcqc($cmwygeyygwqaemaq, $locale = null) { return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou('trans_word', $cmwygeyygwqaemaq, $locale); } public function ekasyoagocygouom($ocogsiouoiuuguym, $saqmwwmqiwmkiwaa = null, $locale = null, $mcmaiqckgiuqayau = '') { return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou('trans_datetime', $ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $locale, $mcmaiqckgiuqayau); } public function eumamymieckakcck($ocogsiouoiuuguym) { return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou('persian_to_gregorian', $ocogsiouoiuuguym); } }
