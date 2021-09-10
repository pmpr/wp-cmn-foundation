<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        ekeagiqmwqmiigiw:
        $mqkkuqaimswumeww = ManipulateArray::get($mqkkuqaimswumeww, $sqeykgyoooqysmca, []);
        goto kwyaykgmcuookkcw;
        kwyaykgmcuookkcw:
        cqsgyyauoqyoywsu:
        goto gsicykeesggkwsyw;
        iemqyuusqogscacm:
        if ($sqeykgyoooqysmca) {
            goto ykqyuoacigoewiee;
        }
        goto wakgeaysawoausoc;
        syoisuiggkakuicc:
        ykqyuoacigoewiee:
        goto ekeagiqmwqmiigiw;
        wakgeaysawoausoc:
        $mqkkuqaimswumeww = ManipulateArray::kaucoswaceqcuyam($mqkkuqaimswumeww);
        goto ekyycmgeggguuqmu;
        gsicykeesggkwsyw:
        return $mqkkuqaimswumeww;
        goto emeqkgwamumkcuii;
        omqiwwwiacockgqi:
        $mqkkuqaimswumeww = self::$components;
        goto iemqyuusqogscacm;
        ekyycmgeggguuqmu:
        goto cqsgyyauoqyoywsu;
        goto syoisuiggkakuicc;
        emeqkgwamumkcuii:
    }
    
    public static function kmsomwiqwmoyoeci($mksyucucyswaukig, $couygeouymagssgw)
    {
        goto uccgigcqcqwsksmi;
        wggcwoesmigkqmqg:
        syqywaowckiiouck:
        goto oqycagwciwqamqkk;
        igoukeaccigacuqy:
        $sqeykgyoooqysmca = $mksyucucyswaukig::yegwayqakokyuiok();
        goto wisyigcyyuaoaiai;
        uccgigcqcqwsksmi:
        if (!$mksyucucyswaukig instanceof Container) {
            goto syqywaowckiiouck;
        }
        goto msuuwaqwqmmwagmi;
        swicmcmgakeuaueq:
        mwigwkmoumcqyauu:
        goto wggcwoesmigkqmqg;
        msuuwaqwqmmwagmi:
        $ymqmyyeuycgmigyo = $mksyucucyswaukig::akuociswqmoigkas();
        goto igoukeaccigacuqy;
        eqiemywuquiseawy:
        self::$components[$sqeykgyoooqysmca][$ymqmyyeuycgmigyo] = new Component($mksyucucyswaukig, $sqeykgyoooqysmca, $ymqmyyeuycgmigyo, $couygeouymagssgw);
        goto swicmcmgakeuaueq;
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
        eumagwacwacokkey:
        self::add($aiieyweysaukqemc, $owgumcsyqsamiemg);
        goto kwgogcacqosaayag;
        aquwcmkckkiisggs:
        self::remove($aiieyweysaukqemc);
        goto eumagwacwacokkey;
        cuwciymwsoaasaug:
        $aiieyweysaukqemc = $owgumcsyqsamiemg::uecyuoauykiqqkey();
        goto aquwcmkckkiisggs;
        kwgogcacqosaayag:
    }
    
    public static function cqusmgskowmesgcg($wksoawcgagcgoask = null)
    {
        goto wkoakyucusqiokuw;
        ioyqkckmegiaawoo:
        $wksoawcgagcgoask = $wksoawcgagcgoask::kwqsguiiocoousuq();
        goto mcggquasyuiygwui;
        wkoakyucusqiokuw:
        if (!(is_object($wksoawcgagcgoask) && method_exists($wksoawcgagcgoask, "\x6b\167\x71\163\147\x75\151\x69\157\x63\x6f\x6f\x75\163\x75\x71"))) {
            goto mmqamyegwcyamyos;
        }
        goto ioyqkckmegiaawoo;
        mcggquasyuiygwui:
        mmqamyegwcyamyos:
        goto ugemeyesygqiskic;
        ugemeyesygqiskic:
        $mqkkuqaimswumeww = self::misumgawyweoagic();
        goto ccscooiuewmaegyi;
        ccscooiuewmaegyi:
        return ManipulateArray::get($mqkkuqaimswumeww, $wksoawcgagcgoask);
        goto ksomcksouggwacay;
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
        wiiioykewquawmsu:
        $egkyssmuqcwaciya = self::iigqkgiamcykcwcm($egkyssmuqcwaciya);
        goto mqmooaikaumwewew;
        eciiyuwciimgmakq:
        $owgumcsyqsamiemg = self::umuecysoywoumgwo($uusmaiomayssaecw);
        goto qqyeekywsyguucio;
        ugaaqomusosqmquw:
        wecycieacweseosm:
        goto auaioqeaqmeueemi;
        aocuemmuaaiiuiee:
        self::add($uusmaiomayssaecw, $owgumcsyqsamiemg);
        goto ugaaqomusosqmquw;
        aeogsokusmsqcuaa:
        $owgumcsyqsamiemg = new $egkyssmuqcwaciya(...$ywmkwiwkosakssii);
        goto aocuemmuaaiiuiee;
        mqmooaikaumwewew:
        if (!$aokagokqyuysuksm) {
            goto iucowqewyoaomsuk;
        }
        goto cyeycessoayeoism;
        auaioqeaqmeueemi:
        return $owgumcsyqsamiemg;
        goto kkcouemcsagaqiae;
        mugcwkmqsweggcic:
        $uusmaiomayssaecw = self::cisyiemkeykgkomc($egkyssmuqcwaciya, $aokagokqyuysuksm);
        goto eciiyuwciimgmakq;
        emuqseyswwammumy:
        iucowqewyoaomsuk:
        goto aeogsokusmsqcuaa;
        qqyeekywsyguucio:
        if ($owgumcsyqsamiemg) {
            goto wecycieacweseosm;
        }
        goto wiiioykewquawmsu;
        kkcouemcsagaqiae:
    }
    
    public static function cisyiemkeykgkomc(string $egkyssmuqcwaciya, ?string $aokagokqyuysuksm = null) : string
    {
        return "{$egkyssmuqcwaciya}{$aokagokqyuysuksm}";
    }
}
