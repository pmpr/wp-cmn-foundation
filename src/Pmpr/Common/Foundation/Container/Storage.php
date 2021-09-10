<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        kwyaykgmcuookkcw:
        cqsgyyauoqyoywsu:
        goto gsicykeesggkwsyw;
        gsicykeesggkwsyw:
        return $mqkkuqaimswumeww;
        goto emeqkgwamumkcuii;
        ekeagiqmwqmiigiw:
        $mqkkuqaimswumeww = ManipulateArray::get($mqkkuqaimswumeww, $sqeykgyoooqysmca, []);
        goto kwyaykgmcuookkcw;
        syoisuiggkakuicc:
        ykqyuoacigoewiee:
        goto ekeagiqmwqmiigiw;
        ekyycmgeggguuqmu:
        goto cqsgyyauoqyoywsu;
        goto syoisuiggkakuicc;
        omqiwwwiacockgqi:
        $mqkkuqaimswumeww = self::$components;
        goto iemqyuusqogscacm;
        wakgeaysawoausoc:
        $mqkkuqaimswumeww = ManipulateArray::kaucoswaceqcuyam($mqkkuqaimswumeww);
        goto ekyycmgeggguuqmu;
        iemqyuusqogscacm:
        if ($sqeykgyoooqysmca) {
            goto ykqyuoacigoewiee;
        }
        goto wakgeaysawoausoc;
        emeqkgwamumkcuii:
    }
    
    public static function kmsomwiqwmoyoeci($mksyucucyswaukig, $couygeouymagssgw)
    {
        goto uccgigcqcqwsksmi;
        swicmcmgakeuaueq:
        mwigwkmoumcqyauu:
        goto wggcwoesmigkqmqg;
        eqiemywuquiseawy:
        self::$components[$sqeykgyoooqysmca][$ymqmyyeuycgmigyo] = new Component($mksyucucyswaukig, $sqeykgyoooqysmca, $ymqmyyeuycgmigyo, $couygeouymagssgw);
        goto swicmcmgakeuaueq;
        msuuwaqwqmmwagmi:
        $ymqmyyeuycgmigyo = $mksyucucyswaukig::akuociswqmoigkas();
        goto igoukeaccigacuqy;
        uccgigcqcqwsksmi:
        if (!$mksyucucyswaukig instanceof Container) {
            goto syqywaowckiiouck;
        }
        goto msuuwaqwqmmwagmi;
        wggcwoesmigkqmqg:
        syqywaowckiiouck:
        goto oqycagwciwqamqkk;
        igoukeaccigacuqy:
        $sqeykgyoooqysmca = $mksyucucyswaukig::yegwayqakokyuiok();
        goto wisyigcyyuaoaiai;
        wisyigcyyuaoaiai:
        if (!($sqeykgyoooqysmca && $ymqmyyeuycgmigyo)) {
            goto mwigwkmoumcqyauu;
        }
        goto eqiemywuquiseawy;
        oqycagwciwqamqkk:
    }
    
    public static function umuecysoywoumgwo(string $aiieyweysaukqemc)
    {
        return ManipulateArray::get(self::iawcusqgkeieicug(), $aiieyweysaukqemc);
    }
    
    public static function update(object $owgumcsyqsamiemg)
    {
        goto cuwciymwsoaasaug;
        aquwcmkckkiisggs:
        self::remove($aiieyweysaukqemc);
        goto eumagwacwacokkey;
        cuwciymwsoaasaug:
        $aiieyweysaukqemc = $owgumcsyqsamiemg::uecyuoauykiqqkey();
        goto aquwcmkckkiisggs;
        eumagwacwacokkey:
        self::add($aiieyweysaukqemc, $owgumcsyqsamiemg);
        goto kwgogcacqosaayag;
        kwgogcacqosaayag:
    }
    
    public static function cqusmgskowmesgcg($wksoawcgagcgoask = null)
    {
        goto wkoakyucusqiokuw;
        ugemeyesygqiskic:
        $mqkkuqaimswumeww = self::misumgawyweoagic();
        goto ccscooiuewmaegyi;
        mcggquasyuiygwui:
        mmqamyegwcyamyos:
        goto ugemeyesygqiskic;
        ccscooiuewmaegyi:
        return ManipulateArray::get($mqkkuqaimswumeww, $wksoawcgagcgoask);
        goto ksomcksouggwacay;
        wkoakyucusqiokuw:
        if (!(is_object($wksoawcgagcgoask) && method_exists($wksoawcgagcgoask, "\153\167\x71\x73\x67\165\x69\x69\157\143\157\157\x75\x73\165\161"))) {
            goto mmqamyegwcyamyos;
        }
        goto ioyqkckmegiaawoo;
        ioyqkckmegiaawoo:
        $wksoawcgagcgoask = $wksoawcgagcgoask::kwqsguiiocoousuq();
        goto mcggquasyuiygwui;
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
        cyeycessoayeoism:
        $ywmkwiwkosakssii[] = $aokagokqyuysuksm;
        goto emuqseyswwammumy;
        eciiyuwciimgmakq:
        $owgumcsyqsamiemg = self::umuecysoywoumgwo($uusmaiomayssaecw);
        goto qqyeekywsyguucio;
        wiiioykewquawmsu:
        $egkyssmuqcwaciya = self::iigqkgiamcykcwcm($egkyssmuqcwaciya);
        goto mqmooaikaumwewew;
        ugaaqomusosqmquw:
        wecycieacweseosm:
        goto auaioqeaqmeueemi;
        mqmooaikaumwewew:
        if (!$aokagokqyuysuksm) {
            goto iucowqewyoaomsuk;
        }
        goto cyeycessoayeoism;
        auaioqeaqmeueemi:
        return $owgumcsyqsamiemg;
        goto kkcouemcsagaqiae;
        emuqseyswwammumy:
        iucowqewyoaomsuk:
        goto aeogsokusmsqcuaa;
        aeogsokusmsqcuaa:
        $owgumcsyqsamiemg = new $egkyssmuqcwaciya(...$ywmkwiwkosakssii);
        goto aocuemmuaaiiuiee;
        aocuemmuaaiiuiee:
        self::add($uusmaiomayssaecw, $owgumcsyqsamiemg);
        goto ugaaqomusosqmquw;
        qqyeekywsyguucio:
        if ($owgumcsyqsamiemg) {
            goto wecycieacweseosm;
        }
        goto wiiioykewquawmsu;
        mugcwkmqsweggcic:
        $uusmaiomayssaecw = self::cisyiemkeykgkomc($egkyssmuqcwaciya, $aokagokqyuysuksm);
        goto eciiyuwciimgmakq;
        kkcouemcsagaqiae:
    }
    
    public static function cisyiemkeykgkomc(string $egkyssmuqcwaciya, ?string $aokagokqyuysuksm = null) : string
    {
        return "{$egkyssmuqcwaciya}{$aokagokqyuysuksm}";
    }
}
