<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        goto omqiwwwiacockgqi;
        omqiwwwiacockgqi:
        $mqkkuqaimswumeww = self::$components;
        goto iemqyuusqogscacm;
        ekyycmgeggguuqmu:
        goto cqsgyyauoqyoywsu;
        goto syoisuiggkakuicc;
        gsicykeesggkwsyw:
        return $mqkkuqaimswumeww;
        goto emeqkgwamumkcuii;
        ekeagiqmwqmiigiw:
        $mqkkuqaimswumeww = ManipulateArray::get($mqkkuqaimswumeww, $sqeykgyoooqysmca, []);
        goto kwyaykgmcuookkcw;
        iemqyuusqogscacm:
        if ($sqeykgyoooqysmca) {
            goto ykqyuoacigoewiee;
        }
        goto wakgeaysawoausoc;
        wakgeaysawoausoc:
        $mqkkuqaimswumeww = ManipulateArray::kaucoswaceqcuyam($mqkkuqaimswumeww);
        goto ekyycmgeggguuqmu;
        kwyaykgmcuookkcw:
        cqsgyyauoqyoywsu:
        goto gsicykeesggkwsyw;
        syoisuiggkakuicc:
        ykqyuoacigoewiee:
        goto ekeagiqmwqmiigiw;
        emeqkgwamumkcuii:
    }
    
    public static function kmsomwiqwmoyoeci($mksyucucyswaukig, $couygeouymagssgw)
    {
        goto uccgigcqcqwsksmi;
        wggcwoesmigkqmqg:
        syqywaowckiiouck:
        goto oqycagwciwqamqkk;
        eqiemywuquiseawy:
        self::$components[$sqeykgyoooqysmca][$ymqmyyeuycgmigyo] = new Component($mksyucucyswaukig, $sqeykgyoooqysmca, $ymqmyyeuycgmigyo, $couygeouymagssgw);
        goto swicmcmgakeuaueq;
        wisyigcyyuaoaiai:
        if (!($sqeykgyoooqysmca && $ymqmyyeuycgmigyo)) {
            goto mwigwkmoumcqyauu;
        }
        goto eqiemywuquiseawy;
        uccgigcqcqwsksmi:
        if (!$mksyucucyswaukig instanceof Container) {
            goto syqywaowckiiouck;
        }
        goto msuuwaqwqmmwagmi;
        igoukeaccigacuqy:
        $sqeykgyoooqysmca = $mksyucucyswaukig::yegwayqakokyuiok();
        goto wisyigcyyuaoaiai;
        swicmcmgakeuaueq:
        mwigwkmoumcqyauu:
        goto wggcwoesmigkqmqg;
        msuuwaqwqmmwagmi:
        $ymqmyyeuycgmigyo = $mksyucucyswaukig::akuociswqmoigkas();
        goto igoukeaccigacuqy;
        oqycagwciwqamqkk:
    }
    
    public static function umuecysoywoumgwo(string $aiieyweysaukqemc)
    {
        return ManipulateArray::get(self::iawcusqgkeieicug(), $aiieyweysaukqemc);
    }
    
    public static function update(object $owgumcsyqsamiemg)
    {
        goto cuwciymwsoaasaug;
        eumagwacwacokkey:
        self::add($aiieyweysaukqemc, $owgumcsyqsamiemg);
        goto kwgogcacqosaayag;
        cuwciymwsoaasaug:
        $aiieyweysaukqemc = $owgumcsyqsamiemg::uecyuoauykiqqkey();
        goto aquwcmkckkiisggs;
        aquwcmkckkiisggs:
        self::remove($aiieyweysaukqemc);
        goto eumagwacwacokkey;
        kwgogcacqosaayag:
    }
    
    public static function cqusmgskowmesgcg($wksoawcgagcgoask = null)
    {
        goto wkoakyucusqiokuw;
        wkoakyucusqiokuw:
        if (!(is_object($wksoawcgagcgoask) && method_exists($wksoawcgagcgoask, "\153\x77\161\163\147\x75\x69\151\x6f\x63\157\x6f\x75\x73\165\x71"))) {
            goto mmqamyegwcyamyos;
        }
        goto ioyqkckmegiaawoo;
        ioyqkckmegiaawoo:
        $wksoawcgagcgoask = $wksoawcgagcgoask::kwqsguiiocoousuq();
        goto mcggquasyuiygwui;
        ccscooiuewmaegyi:
        return ManipulateArray::get($mqkkuqaimswumeww, $wksoawcgagcgoask);
        goto ksomcksouggwacay;
        ugemeyesygqiskic:
        $mqkkuqaimswumeww = self::misumgawyweoagic();
        goto ccscooiuewmaegyi;
        mcggquasyuiygwui:
        mmqamyegwcyamyos:
        goto ugemeyesygqiskic;
        ksomcksouggwacay:
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
        goto mugcwkmqsweggcic;
        qqyeekywsyguucio:
        if ($owgumcsyqsamiemg) {
            goto wecycieacweseosm;
        }
        goto wiiioykewquawmsu;
        aocuemmuaaiiuiee:
        self::add($uusmaiomayssaecw, $owgumcsyqsamiemg);
        goto ugaaqomusosqmquw;
        auaioqeaqmeueemi:
        return $owgumcsyqsamiemg;
        goto kkcouemcsagaqiae;
        eciiyuwciimgmakq:
        $owgumcsyqsamiemg = self::umuecysoywoumgwo($uusmaiomayssaecw);
        goto qqyeekywsyguucio;
        cyeycessoayeoism:
        $ywmkwiwkosakssii[] = $aokagokqyuysuksm;
        goto emuqseyswwammumy;
        aeogsokusmsqcuaa:
        $owgumcsyqsamiemg = new $egkyssmuqcwaciya(...$ywmkwiwkosakssii);
        goto aocuemmuaaiiuiee;
        emuqseyswwammumy:
        iucowqewyoaomsuk:
        goto aeogsokusmsqcuaa;
        mugcwkmqsweggcic:
        $uusmaiomayssaecw = self::cisyiemkeykgkomc($egkyssmuqcwaciya, $aokagokqyuysuksm);
        goto eciiyuwciimgmakq;
        mqmooaikaumwewew:
        if (!$aokagokqyuysuksm) {
            goto iucowqewyoaomsuk;
        }
        goto cyeycessoayeoism;
        wiiioykewquawmsu:
        $egkyssmuqcwaciya = self::iigqkgiamcykcwcm($egkyssmuqcwaciya);
        goto mqmooaikaumwewew;
        ugaaqomusosqmquw:
        wecycieacweseosm:
        goto auaioqeaqmeueemi;
        kkcouemcsagaqiae:
    }
    
    public static function cisyiemkeykgkomc(string $egkyssmuqcwaciya, ?string $aokagokqyuysuksm = null) : string
    {
        return "{$egkyssmuqcwaciya}{$aokagokqyuysuksm}";
    }
}
