<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Type;

use Exception;
use ReflectionClass;

class ManipulateString extends Common
{
    
    public static function scramble(string $sociqikgoyemqaac) : string
    {
        $ykiwomimkkuiigoq = 16;
        $sociqikgoyemqaac = hash('md5', $sociqikgoyemqaac);
        
        $eugsosgsugioquqe = base_convert(md5($sociqikgoyemqaac), 16, 26);
        
        $eugsosgsugioquqe = substr($eugsosgsugioquqe, -$ykiwomimkkuiigoq);
        
        $eugsosgsugioquqe = str_pad($eugsosgsugioquqe, $ykiwomimkkuiigoq, '0', STR_PAD_LEFT);
        
        return strtr($eugsosgsugioquqe, self::NUMBERS_SEQUENCE, 'qrstuvwxyz');
    }
    
    public static function ycwmswocisskwuwg($eomsgokgyssmwmai = 20) : string
    {
        if (function_exists('openssl_random_pseudo_bytes')) {
            $eugsosgsugioquqe = bin2hex(openssl_random_pseudo_bytes(20));
        } else {
            $eugsosgsugioquqe = sha1(wp_rand());
        }
        if (strlen($eugsosgsugioquqe) > $eomsgokgyssmwmai) {
            $eugsosgsugioquqe = substr($eugsosgsugioquqe, 0, $eomsgokgyssmwmai);
        }
        return $eugsosgsugioquqe;
    }
    
    public static function uniqid($eomsgokgyssmwmai = 8)
    {
        $sosyakcgakmeueii = md5("yourSaltHere" . uniqid("", true));
        $asakkwwsyqsqqkkw = pack('H*', $sosyakcgakmeueii);
        $umkokecyamcwcqwe = base64_encode($asakkwwsyqsqqkkw);
        $momkisisegqcmmwi = preg_replace("/[^A-Za-z0-9]/", "", $umkokecyamcwcqwe);
        $eomsgokgyssmwmai = max(4, min(128, $eomsgokgyssmwmai));
        usyckeewsgwaysam:
        if (!(strlen($momkisisegqcmmwi) < $eomsgokgyssmwmai)) {
            goto skwusmoyomgqkimm;
        }
        $momkisisegqcmmwi .= self::uniqid($eomsgokgyssmwmai);
        goto usyckeewsgwaysam;
        skwusmoyomgqkimm:
        $momkisisegqcmmwi = substr($momkisisegqcmmwi, 0, $eomsgokgyssmwmai);
        if (!$momkisisegqcmmwi) {
            $momkisisegqcmmwi = uniqid();
        }
        return $momkisisegqcmmwi;
    }
    
    public static function mkwcwqkqeqkqyggc($egkyssmuqcwaciya)
    {
        if (is_object($egkyssmuqcwaciya)) {
            try {
                $oqkmoekaagukcwia = new ReflectionClass($egkyssmuqcwaciya);
                $ymqmyyeuycgmigyo = $oqkmoekaagukcwia->quqaewqkeiiwqiss();
            } catch (Exception $wgaoewqkwgomoaai) {
                $egkyssmuqcwaciya = explode('\\', get_class($egkyssmuqcwaciya));
                $ymqmyyeuycgmigyo = end($egkyssmuqcwaciya);
            }
        } else {
            $egkyssmuqcwaciya = explode('\\', $egkyssmuqcwaciya);
            $ymqmyyeuycgmigyo = end($egkyssmuqcwaciya);
        }
        return $ymqmyyeuycgmigyo;
    }
    
    public static function ogimogiceeekegoi($sociqikgoyemqaac) : ?string
    {
        $sociqikgoyemqaac = self::kwuyaykukcmaqggg($sociqikgoyemqaac);
        return self::cyakegkcqemuyaey($sociqikgoyemqaac);
    }
    
    public static function igcwuwuymeuomaqo($sociqikgoyemqaac) : ?string
    {
        $sociqikgoyemqaac = self::kwuyaykukcmaqggg($sociqikgoyemqaac);
        return str_replace(' ', '-', self::ywuiyekyoaowmuss($sociqikgoyemqaac));
    }
    
    public static function qoqowykumameucwa($sociqikgoyemqaac) : ?string
    {
        $sociqikgoyemqaac = self::cyakegkcqemuyaey($sociqikgoyemqaac);
        return self::snake2camel($sociqikgoyemqaac);
    }
    
    public static function ucymkkoowkqeauga($sociqikgoyemqaac, $ekwsasieesaqcsiw)
    {
        if ($ykiwomimkkuiigoq = strpos($sociqikgoyemqaac, $ekwsasieesaqcsiw)) {
            return substr($sociqikgoyemqaac, 0, $ykiwomimkkuiigoq);
        }
        return $sociqikgoyemqaac;
    }
    
    public static function kwuyaykukcmaqggg($sociqikgoyemqaac) : string
    {
        return strtolower(preg_replace("/([a-z])([A-Z])/", "\$1_\$2", $sociqikgoyemqaac));
    }
    
    public static function snake2camel($sociqikgoyemqaac) : string
    {
        $sociqikgoyemqaac = str_replace(' ', '', ucwords(str_replace('_', ' ', $sociqikgoyemqaac)));
        $sociqikgoyemqaac[0] = strtolower($sociqikgoyemqaac[0]);
        return $sociqikgoyemqaac;
    }
    
    public static function ywuiyekyoaowmuss($sociqikgoyemqaac) : string
    {
        return strtolower(str_replace('_', '-', $sociqikgoyemqaac));
    }
    
    public static function cyakegkcqemuyaey($sociqikgoyemqaac) : string
    {
        return strtolower(str_replace('-', '_', $sociqikgoyemqaac));
    }
    
    public static function amkcmaguoecyiscg($ycskuuyucyuqisaq) : string
    {
        $ycskuuyucyuqisaq = addslashes($ycskuuyucyuqisaq);
        return "'{$ycskuuyucyuqisaq}'";
    }
    
    public static function quuwkeiwesaoqwom($qwcmueausqgiwigy, $iosuwkkwwioumeqg)
    {
        $iosuwkkwwioumeqg = (string) $iosuwkkwwioumeqg;
        $gaeqamemwmwsyukm = 1;
        kakkuyeccaacewyo:
        if (!$gaeqamemwmwsyukm) {
            goto gicuuwuuuwumyooa;
        }
        $iosuwkkwwioumeqg = str_replace($qwcmueausqgiwigy, '', $iosuwkkwwioumeqg, $gaeqamemwmwsyukm);
        goto kakkuyeccaacewyo;
        gicuuwuuuwumyooa:
        return $iosuwkkwwioumeqg;
    }
    
    public static function crypt($sociqikgoyemqaac, $euakaisoocwokioe = true)
    {
        
        $qgciuiagkkguykgs = "AES-256-CBC";
        $aqykuigiuwmmcieu = $sociqikgoyemqaac;
        $eeamcawaiqocomwy = home_url();
        $uusmaiomayssaecw = hash('sha256', "{$eeamcawaiqocomwy}_secret_key");
        $imiwcieyucysgsck = substr(hash('sha256', "{$eeamcawaiqocomwy}_secret_iv"), 0, 16);
        if (extension_loaded('openssl')) {
            if ($euakaisoocwokioe) {
                if (function_exists('openssl_encrypt')) {
                    $aqykuigiuwmmcieu = base64_encode(openssl_encrypt($sociqikgoyemqaac, $qgciuiagkkguykgs, $uusmaiomayssaecw, 0, $imiwcieyucysgsck));
                }
            } else {
                if (function_exists('openssl_decrypt')) {
                    $aqykuigiuwmmcieu = openssl_decrypt(base64_decode($sociqikgoyemqaac), $qgciuiagkkguykgs, $uusmaiomayssaecw, 0, $imiwcieyucysgsck);
                }
            }
        }
        return $aqykuigiuwmmcieu;
    }
    
    public static function aisesaskgsuywqqy($egkyssmuqcwaciya) : string
    {
        $ymqmyyeuycgmigyo = self::mkwcwqkqeqkqyggc($egkyssmuqcwaciya);
        return self::aimgkskucmymyquc("\\{$ymqmyyeuycgmigyo}", '', $egkyssmuqcwaciya);
    }
    
    public static function ykemmsoumouomkqm($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw) : bool
    {
        $ksaameoqigiaoigg = false;
        if (is_string($wokkuqgcqcyuaiko) && is_string($ekwsasieesaqcsiw)) {
            $ykiwomimkkuiigoq = strlen($ekwsasieesaqcsiw);
            if (!$ykiwomimkkuiigoq) {
                $ksaameoqigiaoigg = true;
            } else {
                $ksaameoqigiaoigg = substr($wokkuqgcqcyuaiko, -$ykiwomimkkuiigoq) === $ekwsasieesaqcsiw;
            }
        }
        return $ksaameoqigiaoigg;
    }
    
    public static function usemqqucksuocoeq($sociqikgoyemqaac) : string
    {
        $ukokkqkkkggcmksy = ['%21' => '!', '%2A' => '*', '%27' => "'", '%28' => '(', '%29' => ')'];
        return strtr(rawurlencode($sociqikgoyemqaac), $ukokkqkkkggcmksy);
    }
    
    public static function wkgaescyescmucmg($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw) : bool
    {
        $ksaameoqigiaoigg = false;
        if (is_string($wokkuqgcqcyuaiko) && is_string($ekwsasieesaqcsiw)) {
            $ksaameoqigiaoigg = substr($wokkuqgcqcyuaiko, 0, strlen($ekwsasieesaqcsiw)) === $ekwsasieesaqcsiw;
        }
        return $ksaameoqigiaoigg;
    }
    
    public static function gumqicgiosoqweoy($sociqikgoyemqaac)
    {
        
        $ymqmyyeuycgmigyo = ManipulateString::wiecmkiugmyyqiqc(self::PR__, '', $sociqikgoyemqaac);
        return self::csuomkyoukqauwcg($ymqmyyeuycgmigyo, 8);
    }
    
    public static function aimgkskucmymyquc($qwcmueausqgiwigy, $moyaaaascoeowegu, $ycskuuyucyuqisaq)
    {
        if (($yuyowiyumyysomoy = strrpos($ycskuuyucyuqisaq, $qwcmueausqgiwigy)) !== false) {
            $ykiwomimkkuiigoq = strlen($qwcmueausqgiwigy);
            $ycskuuyucyuqisaq = substr_replace($ycskuuyucyuqisaq, $moyaaaascoeowegu, $yuyowiyumyysomoy, $ykiwomimkkuiigoq);
        }
        return $ycskuuyucyuqisaq;
    }
    
    public static function eqyqgywiseiwqocc($uomewyckeuqoqocu) : string
    {
        if (is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu) {
            $uomewyckeuqoqocu = join("', '", array_map('esc_sql', $uomewyckeuqoqocu));
        }
        return $uomewyckeuqoqocu;
    }
    
    public static function csuomkyoukqauwcg($sociqikgoyemqaac, $aoqagsqecokqqwqg = 5)
    {
        $uwomkgseoiegeume = preg_replace('/(?<!^)[aAeEiIoOuU]/', '', $sociqikgoyemqaac);
        if (strlen($uwomkgseoiegeume) >= $aoqagsqecokqqwqg) {
            $sociqikgoyemqaac = $uwomkgseoiegeume;
        }
        return $sociqikgoyemqaac;
    }
    
    public static function wqqwcuegeiqgyswe($egkyssmuqcwaciya) : string
    {
        $aiieyweysaukqemc = self::aisesaskgsuywqqy($egkyssmuqcwaciya);
        $uomewyckeuqoqocu = explode('\\', $aiieyweysaukqemc);
        return ManipulateArray::get($uomewyckeuqoqocu, count($uomewyckeuqoqocu) - 1, $aiieyweysaukqemc);
    }
    
    public static function yaaoeasygeggswcq($uusmaiomayssaecw, $yuwymayicwwqiske = '_') : string
    {
        return substr($uusmaiomayssaecw, 0, strlen($yuwymayicwwqiske)) != $yuwymayicwwqiske ? $yuwymayicwwqiske . $uusmaiomayssaecw : $uusmaiomayssaecw;
    }
    
    public static function wiecmkiugmyyqiqc($qwcmueausqgiwigy, string $moyaaaascoeowegu, string $iosuwkkwwioumeqg) : string
    {
        return implode($moyaaaascoeowegu, explode($qwcmueausqgiwigy, $iosuwkkwwioumeqg, 2));
    }
}
