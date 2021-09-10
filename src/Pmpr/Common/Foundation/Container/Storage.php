<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        iemqyuusqogscacm:
        if ($sqeykgyoooqysmca) {
            goto ykqyuoacigoewiee;
        }
        goto wakgeaysawoausoc;
        ekeagiqmwqmiigiw:
        $mqkkuqaimswumeww = ManipulateArray::get($mqkkuqaimswumeww, $sqeykgyoooqysmca, []);
        goto kwyaykgmcuookkcw;
        ekyycmgeggguuqmu:
        goto cqsgyyauoqyoywsu;
        goto syoisuiggkakuicc;
        syoisuiggkakuicc:
        ykqyuoacigoewiee:
        goto ekeagiqmwqmiigiw;
        wakgeaysawoausoc:
        $mqkkuqaimswumeww = ManipulateArray::kaucoswaceqcuyam($mqkkuqaimswumeww);
        goto ekyycmgeggguuqmu;
        kwyaykgmcuookkcw:
        cqsgyyauoqyoywsu:
        goto gsicykeesggkwsyw;
        omqiwwwiacockgqi:
        $mqkkuqaimswumeww = self::$components;
        goto iemqyuusqogscacm;
        gsicykeesggkwsyw:
        return $mqkkuqaimswumeww;
        goto emeqkgwamumkcuii;
        emeqkgwamumkcuii:
    }
    
    public static function kmsomwiqwmoyoeci($mksyucucyswaukig, $couygeouymagssgw)
    {
        goto uccgigcqcqwsksmi;
        wisyigcyyuaoaiai:
        if (!($sqeykgyoooqysmca && $ymqmyyeuycgmigyo)) {
            goto mwigwkmoumcqyauu;
        }
        goto eqiemywuquiseawy;
        swicmcmgakeuaueq:
        mwigwkmoumcqyauu:
        goto wggcwoesmigkqmqg;
        wggcwoesmigkqmqg:
        syqywaowckiiouck:
        goto oqycagwciwqamqkk;
        eqiemywuquiseawy:
        self::$components[$sqeykgyoooqysmca][$ymqmyyeuycgmigyo] = new Component($mksyucucyswaukig, $sqeykgyoooqysmca, $ymqmyyeuycgmigyo, $couygeouymagssgw);
        goto swicmcmgakeuaueq;
        msuuwaqwqmmwagmi:
        $ymqmyyeuycgmigyo = $mksyucucyswaukig::akuociswqmoigkas();
        goto igoukeaccigacuqy;
        igoukeaccigacuqy:
        $sqeykgyoooqysmca = $mksyucucyswaukig::yegwayqakokyuiok();
        goto wisyigcyyuaoaiai;
        uccgigcqcqwsksmi:
        if (!$mksyucucyswaukig instanceof Container) {
            goto syqywaowckiiouck;
        }
        goto msuuwaqwqmmwagmi;
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
        ccscooiuewmaegyi:
        return ManipulateArray::get($mqkkuqaimswumeww, $wksoawcgagcgoask);
        goto ksomcksouggwacay;
        ugemeyesygqiskic:
        $mqkkuqaimswumeww = self::misumgawyweoagic();
        goto ccscooiuewmaegyi;
        mcggquasyuiygwui:
        mmqamyegwcyamyos:
        goto ugemeyesygqiskic;
        ioyqkckmegiaawoo:
        $wksoawcgagcgoask = $wksoawcgagcgoask::kwqsguiiocoousuq();
        goto mcggquasyuiygwui;
        wkoakyucusqiokuw:
        if (!(is_object($wksoawcgagcgoask) && method_exists($wksoawcgagcgoask, "\x6b\167\x71\163\x67\x75\151\151\157\x63\x6f\x6f\x75\x73\165\x71"))) {
            goto mmqamyegwcyamyos;
        }
        goto ioyqkckmegiaawoo;
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
        eciiyuwciimgmakq:
        $owgumcsyqsamiemg = self::umuecysoywoumgwo($uusmaiomayssaecw);
        goto qqyeekywsyguucio;
        mqmooaikaumwewew:
        if (!$aokagokqyuysuksm) {
            goto iucowqewyoaomsuk;
        }
        goto cyeycessoayeoism;
        aocuemmuaaiiuiee:
        self::add($uusmaiomayssaecw, $owgumcsyqsamiemg);
        goto ugaaqomusosqmquw;
        ugaaqomusosqmquw:
        wecycieacweseosm:
        goto auaioqeaqmeueemi;
        wiiioykewquawmsu:
        $egkyssmuqcwaciya = self::iigqkgiamcykcwcm($egkyssmuqcwaciya);
        goto mqmooaikaumwewew;
        emuqseyswwammumy:
        iucowqewyoaomsuk:
        goto aeogsokusmsqcuaa;
        mugcwkmqsweggcic:
        $uusmaiomayssaecw = self::cisyiemkeykgkomc($egkyssmuqcwaciya, $aokagokqyuysuksm);
        goto eciiyuwciimgmakq;
        cyeycessoayeoism:
        $ywmkwiwkosakssii[] = $aokagokqyuysuksm;
        goto emuqseyswwammumy;
        auaioqeaqmeueemi:
        return $owgumcsyqsamiemg;
        goto kkcouemcsagaqiae;
        qqyeekywsyguucio:
        if ($owgumcsyqsamiemg) {
            goto wecycieacweseosm;
        }
        goto wiiioykewquawmsu;
        aeogsokusmsqcuaa:
        $owgumcsyqsamiemg = new $egkyssmuqcwaciya(...$ywmkwiwkosakssii);
        goto aocuemmuaaiiuiee;
        kkcouemcsagaqiae:
    }
    
    public static function cisyiemkeykgkomc(string $egkyssmuqcwaciya, ?string $aokagokqyuysuksm = null) : string
    {
        return "{$egkyssmuqcwaciya}{$aokagokqyuysuksm}";
    }
}
