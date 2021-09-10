<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Template\Twig;

use Pmpr\Common\Foundation\Manipulate\ManipulateValidation;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateDatetime;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateNumber;

class Filter extends Callback
{
    public function iemaakgqgqosiecm()
    {
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw('add_twig_filters'), $this->yyyewgugioamwckw());
        $this->aqiicausqkomqkqy();
        $this->ugugagoguiycqeys();
        $this->eeoeyakoiycwiuoa();
    }
    private function aqiicausqkomqkqy()
    {
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew('ksort', function ($uomewyckeuqoqocu, $amcumcomgyqsuymk = null) {
            if (ksort($uomewyckeuqoqocu, $amcumcomgyqsuymk)) {
                return $uomewyckeuqoqocu;
            }
            return [];
        });
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew('preg_replace', function ($iosuwkkwwioumeqg, $eouekqmooogkoqoo, $oqcammciwimcumac) {
            return preg_replace($eouekqmooogkoqoo, $oqcammciwimcumac, $iosuwkkwwioumeqg);
        });
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew('str_split', function ($sociqikgoyemqaac, $ykiwomimkkuiigoq = 1) {
            return str_split($sociqikgoyemqaac, $ykiwomimkkuiigoq);
        });
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew('rawurldecode', function ($eqgoocgaqwqcimie) {
            return rawurldecode($eqgoocgaqwqcimie);
        });
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew('filter', function ($uomewyckeuqoqocu) {
            return array_filter($uomewyckeuqoqocu);
        });
    }
    private function ugugagoguiycqeys()
    {
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew('number', function ($eusockqasqqmoess, $aamkqmkgsaqmcuao = 'fa') {
            return $this->msywmyaoqmaegsuy($eusockqasqqmoess, $aamkqmkgsaqmcuao);
        });
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew('generate_hook', function ($ymqmyyeuycgmigyo, $ykuqcwwmuyqmkisq = true, $quowyokcwswmuois = null) {
            return $this->ygyygikyocoymgaw($ymqmyyeuycgmigyo, $ykuqcwwmuyqmkisq, $quowyokcwswmuois);
        });
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew('instanceof', function ($eqgoocgaqwqcimie, $sqeykgyoooqysmca = 'string') {
            return 'null' === $sqeykgyoooqysmca && null === $eqgoocgaqwqcimie || \function_exists($imacmeoaiyywkewm = 'is_' . $sqeykgyoooqysmca) && $imacmeoaiyywkewm($eqgoocgaqwqcimie) || $eqgoocgaqwqcimie instanceof $sqeykgyoooqysmca;
        });
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew('money', function ($eusockqasqqmoess, $aamkqmkgsaqmcuao = 'fa') {
            return $this->wusgwkaycokeckqs(ManipulateNumber::uwwmyomsqkoaqawa($eusockqasqqmoess), $aamkqmkgsaqmcuao);
        });
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew('value', function ($uomewyckeuqoqocu = [], $uusmaiomayssaecw = null) {
            $eqgoocgaqwqcimie = null;
            if (is_array($uomewyckeuqoqocu) && isset($uomewyckeuqoqocu[$uusmaiomayssaecw])) {
                $eqgoocgaqwqcimie = $uomewyckeuqoqocu[$uusmaiomayssaecw];
            }
            return $eqgoocgaqwqcimie;
        });
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew('parse_attrs', function ($siquossayskcwkea) {
            return ManipulateHTML::aoyseswaaaugicuq($siquossayskcwkea);
        });
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew('datetime', function ($ocogsiouoiuuguym, $saqmwwmqiwmkiwaa = null, $aamkqmkgsaqmcuao = null) {
            return $this->eciukqcoqmyacwow($ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $aamkqmkgsaqmcuao);
        });
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew('namespace', function ($sociqikgoyemqaac) {
            return str_replace('\\', '\\\\', $sociqikgoyemqaac);
        });
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew('sort_by_length', function ($uomewyckeuqoqocu, $giqggecqqikcysgq, $oaukocmsckciqaok = null) {
            $aqykuigiuwmmcieu = [];
            $umkqoiwcgmmkeagy = [];
            if ($uomewyckeuqoqocu && is_array($uomewyckeuqoqocu) && is_int($giqggecqqikcysgq)) {
                $couiucmsqaieciue = [];
                $umkqoiwcgmmkeagy = array_values($uomewyckeuqoqocu);
                $gaeqamemwmwsyukm = count($uomewyckeuqoqocu);
                $momcykaoccoymeig = 0;
                $yeacayasgueouoqc = $giqggecqqikcysgq;
                $kgcswwyywoscuqqs = 1;
                mwysseaekcsiesmm:
                if (!($momcykaoccoymeig < $gaeqamemwmwsyukm)) {
                    goto ukkcmocamwgiqayu;
                }
                if ($umkqoiwcgmmkeagy) {
                    if (count($couiucmsqaieciue) >= count($umkqoiwcgmmkeagy)) {
                        $yeacayasgueouoqc = $giqggecqqikcysgq;
                        $couiucmsqaieciue = [];
                        $kgcswwyywoscuqqs++;
                    }
                    [$uusmaiomayssaecw, $eqgoocgaqwqcimie] = ManipulateArray::oooekmcokooqkcgg($umkqoiwcgmmkeagy, $oaukocmsckciqaok, $couiucmsqaieciue);
                    if ($eqgoocgaqwqcimie) {
                        if (self::igyuegiiaqkymuka($eqgoocgaqwqcimie, $yeacayasgueouoqc, $giqggecqqikcysgq, $oaukocmsckciqaok)) {
                            $aqykuigiuwmmcieu[$uusmaiomayssaecw] = $umkqoiwcgmmkeagy[$uusmaiomayssaecw];
                            unset($umkqoiwcgmmkeagy[$uusmaiomayssaecw]);
                            $yeacayasgueouoqc -= 3;
                            $momcykaoccoymeig++;
                        } else {
                            $couiucmsqaieciue[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
                        }
                    } else {
                        $yeacayasgueouoqc = $giqggecqqikcysgq;
                        $kgcswwyywoscuqqs++;
                    }
                } else {
                    goto ukkcmocamwgiqayu;
                }
                goto mwysseaekcsiesmm;
                ukkcmocamwgiqayu:
            }
            if ($aqykuigiuwmmcieu && $umkqoiwcgmmkeagy) {
                $aqykuigiuwmmcieu = $aqykuigiuwmmcieu + $umkqoiwcgmmkeagy;
            } elseif ($umkqoiwcgmmkeagy) {
                $aqykuigiuwmmcieu = $umkqoiwcgmmkeagy;
            }
            if (!$aqykuigiuwmmcieu || count($aqykuigiuwmmcieu) !== count($uomewyckeuqoqocu)) {
                $aqykuigiuwmmcieu = $uomewyckeuqoqocu;
            }
            return $aqykuigiuwmmcieu;
        });
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew('random', function ($uomewyckeuqoqocu) {
            return $uomewyckeuqoqocu[array_rand($uomewyckeuqoqocu)];
        });
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew('short_number', function ($eqgoocgaqwqcimie, $cmyiqqsaoiwgqcay = 1) {
            return ManipulateNumber::readable($eqgoocgaqwqcimie, $cmyiqqsaoiwgqcay);
        });
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew('add', function ($uomewyckeuqoqocu, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $kskgqoywkoawosao = true) {
            if ($kskgqoywkoawosao) {
                if (is_array($uomewyckeuqoqocu)) {
                    $uomewyckeuqoqocu = ManipulateHTML::igmaewykumgwoaoy($uomewyckeuqoqocu, $uusmaiomayssaecw, $eqgoocgaqwqcimie);
                } else {
                    $uomewyckeuqoqocu[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
                }
            }
            return $uomewyckeuqoqocu;
        });
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew('wp_query', function ($oaukocmsckciqaok) {
            return CommonUtil::aogsoswomcaqoukq($oaukocmsckciqaok);
        });
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew('is_html', function ($sociqikgoyemqaac, $kqywgoqsmuswammk = null) {
            return ManipulateValidation::uuksaskqamgouosy($sociqikgoyemqaac, $kqywgoqsmuswammk);
        });
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew('time_ago', function ($cqgoimumaewouews) {
            return ManipulateDatetime::ikuqieqosemkwuio($cqgoimumaewouews);
        });
    }
    private function eeoeyakoiycwiuoa()
    {
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew('esc_attr', function ($sociqikgoyemqaac) {
            return esc_attr($sociqikgoyemqaac);
        });
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew('esc_html', function ($sociqikgoyemqaac) {
            return esc_html($sociqikgoyemqaac);
        });
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew('esc_url', function ($eeamcawaiqocomwy, $wmiuawgiayqiuqok = null, $_context = 'display') {
            return esc_url($eeamcawaiqocomwy, $wmiuawgiayqiuqok, $_context);
        });
    }
    
    private function igyuegiiaqkymuka($eqgoocgaqwqcimie, &$mwuwcsieauaqecae, $giqggecqqikcysgq, $oaukocmsckciqaok)
    {
        if (is_object($eqgoocgaqwqcimie)) {
            $eqgoocgaqwqcimie = $eqgoocgaqwqcimie->{$oaukocmsckciqaok};
        }
        if (is_string($eqgoocgaqwqcimie)) {
            $ykiwomimkkuiigoq = strlen($eqgoocgaqwqcimie);
            if ($ykiwomimkkuiigoq > $giqggecqqikcysgq && $mwuwcsieauaqecae == $giqggecqqikcysgq) {
                return true;
            }
            if ($ykiwomimkkuiigoq <= $mwuwcsieauaqecae) {
                $mwuwcsieauaqecae -= $ykiwomimkkuiigoq;
                return true;
            }
        }
        return false;
    }
}
