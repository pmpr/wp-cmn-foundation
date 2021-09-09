<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Container;

use Exception;
use Pmpr\Common\Foundation\Data\Component;
use Pmpr\Common\Foundation\Interfaces\ConstantInterface;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class Storage implements ConstantInterface
{
    
    protected static array $instances = [];
    
    protected static array $components = [self::CMN => [], self::PKG => [], self::THM => [], self::CTM => []];
    
    public static function iawcusqgkeieicug() : ?array
    {
        return self::$instances;
    }
    
    public static function misumgawyweoagic($sqeykgyoooqysmca = null) : array
    {
        goto maisiwgiyemcksso;
        maisiwgiyemcksso:
        $mqkkuqaimswumeww = self::$components;
        goto cakgesecyaemgueq;
        ywgmykeycoyogqco:
        $mqkkuqaimswumeww = ManipulateArray::get($mqkkuqaimswumeww, $sqeykgyoooqysmca, []);
        goto ucakuayukmgmyegg;
        ucakuayukmgmyegg:
        uyqyioeqeoqcuykq:
        goto ukeoaugaookyquee;
        iigosmqysegggsau:
        goto uyqyioeqeoqcuykq;
        goto iuqmcesucmkqckmo;
        cakgesecyaemgueq:
        if ($sqeykgyoooqysmca) {
            goto uwqkmayasqiymkcw;
        }
        goto wmscaqqokaamkyiq;
        ukeoaugaookyquee:
        return $mqkkuqaimswumeww;
        goto uqeyauiimkymqkqo;
        wmscaqqokaamkyiq:
        $mqkkuqaimswumeww = ManipulateArray::kaucoswaceqcuyam($mqkkuqaimswumeww);
        goto iigosmqysegggsau;
        iuqmcesucmkqckmo:
        uwqkmayasqiymkcw:
        goto ywgmykeycoyogqco;
        uqeyauiimkymqkqo:
    }
    
    public static function kmsomwiqwmoyoeci($mksyucucyswaukig, $couygeouymagssgw)
    {
        goto gaueqomusygaqaia;
        gwywgyiccasyeyuc:
        self::$components[$sqeykgyoooqysmca][$ymqmyyeuycgmigyo] = new Component($mksyucucyswaukig, $sqeykgyoooqysmca, $ymqmyyeuycgmigyo, $couygeouymagssgw);
        goto cccqicomasamemuq;
        weyikuomgeyimyay:
        imioswwmquauqkia:
        goto qywgyeaiwcumsouk;
        cccqicomasamemuq:
        ouiusiyeswawsgyc:
        goto weyikuomgeyimyay;
        gaueqomusygaqaia:
        if (!$mksyucucyswaukig instanceof Container) {
            goto imioswwmquauqkia;
        }
        goto ocyiqkkgoiqcgoiy;
        ywsssccywigceiyi:
        $sqeykgyoooqysmca = $mksyucucyswaukig::yegwayqakokyuiok();
        goto mwmieoicwuqyuygy;
        ocyiqkkgoiqcgoiy:
        $ymqmyyeuycgmigyo = $mksyucucyswaukig::akuociswqmoigkas();
        goto ywsssccywigceiyi;
        mwmieoicwuqyuygy:
        if (!($sqeykgyoooqysmca && $ymqmyyeuycgmigyo)) {
            goto ouiusiyeswawsgyc;
        }
        goto gwywgyiccasyeyuc;
        qywgyeaiwcumsouk:
    }
    
    public static function umuecysoywoumgwo(string $aiieyweysaukqemc)
    {
        return ManipulateArray::get(self::iawcusqgkeieicug(), $aiieyweysaukqemc);
    }
    
    public static function update(object $owgumcsyqsamiemg)
    {
        goto meookcgmmeqeumim;
        aqeiyioooucwqgmg:
        self::add($aiieyweysaukqemc, $owgumcsyqsamiemg);
        goto mswywuwysiwmewwg;
        kgyqyegwmomouqws:
        self::remove($aiieyweysaukqemc);
        goto aqeiyioooucwqgmg;
        meookcgmmeqeumim:
        $aiieyweysaukqemc = $owgumcsyqsamiemg::uecyuoauykiqqkey();
        goto kgyqyegwmomouqws;
        mswywuwysiwmewwg:
    }
    
    public static function cqusmgskowmesgcg($wksoawcgagcgoask = null)
    {
        goto kwmacaaskumakkmi;
        nosacyaasaucscou:
        return ManipulateArray::get($mqkkuqaimswumeww, $wksoawcgagcgoask);
        goto sqigskysuqcqamsw;
        kwmacaaskumakkmi:
        if (!(is_object($wksoawcgagcgoask) && method_exists($wksoawcgagcgoask, "\153\x77\161\163\147\x75\151\x69\x6f\143\x6f\157\165\163\x75\161"))) {
            goto oaaguckuyyqiuysg;
        }
        goto wiwyqiiuqiecaagq;
        auusomqggyqoeows:
        $mqkkuqaimswumeww = self::misumgawyweoagic();
        goto nosacyaasaucscou;
        wiwyqiiuqiecaagq:
        $wksoawcgagcgoask = $wksoawcgagcgoask::kwqsguiiocoousuq();
        goto kgmuuggwcomgisoq;
        kgmuuggwcomgisoq:
        oaaguckuyyqiuysg:
        goto auusomqggyqoeows;
        sqigskysuqcqamsw:
    }
    
    public static function add(string $uusmaiomayssaecw, object $owgumcsyqsamiemg)
    {
        self::$instances[$uusmaiomayssaecw] = $owgumcsyqsamiemg;
    }
    
    public static function iigqkgiamcykcwcm($iakkeikwceeomgyq)
    {
        return $iakkeikwceeomgyq;
    }
    
    public static function remove(string $aiieyweysaukqemc, $aokagokqyuysuksm = null)
    {
        $uusmaiomayssaecw = self::cisyiemkeykgkomc($aiieyweysaukqemc, $aokagokqyuysuksm);
        return ManipulateArray::unset(self::$instances, $uusmaiomayssaecw);
    }
    
    public static function get(string $egkyssmuqcwaciya, ?string $aokagokqyuysuksm = null, ...$ywmkwiwkosakssii)
    {
        goto qqiyoegsyuioeckw;
        ckigcgskuimkcaqw:
        if ($owgumcsyqsamiemg) {
            goto wweogomakqeumaem;
        }
        goto gicwyacksgiucaem;
        mkmusqguaqaoiiie:
        wweogomakqeumaem:
        goto kaekwemuauqsseee;
        akcswkssaqkqmuai:
        $owgumcsyqsamiemg = new $egkyssmuqcwaciya(...$ywmkwiwkosakssii);
        goto akewkwcuoimqkaqw;
        kaekwemuauqsseee:
        return $owgumcsyqsamiemg;
        goto wcegwageayaaskqu;
        akewkwcuoimqkaqw:
        self::add($uusmaiomayssaecw, $owgumcsyqsamiemg);
        goto mkmusqguaqaoiiie;
        uogkyukgkuagagce:
        $ywmkwiwkosakssii[] = $aokagokqyuysuksm;
        goto umgugakmykkciguc;
        gicwyacksgiucaem:
        $egkyssmuqcwaciya = self::iigqkgiamcykcwcm($egkyssmuqcwaciya);
        goto gcumkowycakiggag;
        qkgquayemucsyyuk:
        $owgumcsyqsamiemg = self::umuecysoywoumgwo($uusmaiomayssaecw);
        goto ckigcgskuimkcaqw;
        gcumkowycakiggag:
        if (!$aokagokqyuysuksm) {
            goto kgoiamsswecauwkw;
        }
        goto uogkyukgkuagagce;
        umgugakmykkciguc:
        kgoiamsswecauwkw:
        goto akcswkssaqkqmuai;
        qqiyoegsyuioeckw:
        $uusmaiomayssaecw = self::cisyiemkeykgkomc($egkyssmuqcwaciya, $aokagokqyuysuksm);
        goto qkgquayemucsyyuk;
        wcegwageayaaskqu:
    }
    
    public static function cisyiemkeykgkomc(string $egkyssmuqcwaciya, ?string $aokagokqyuysuksm = null) : string
    {
        return "{$egkyssmuqcwaciya}{$aokagokqyuysuksm}";
    }
}
