<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        goto agsswcsmsugomcao;
        ykqyuoacigoewiee:
        yacgswmqesusicsi:
        goto cqsgyyauoqyoywsu;
        agsswcsmsugomcao:
        $mqkkuqaimswumeww = self::$components;
        goto yqwegoiemuiassgc;
        ucmumgeqkewmqkqe:
        goto yacgswmqesusicsi;
        goto yaacseqwycoiwscq;
        yaacseqwycoiwscq:
        jkkyqgueaogqecqc:
        goto miisgaoyumayooye;
        miisgaoyumayooye:
        $mqkkuqaimswumeww = ManipulateArray::get($mqkkuqaimswumeww, $sqeykgyoooqysmca, []);
        goto ykqyuoacigoewiee;
        yqwegoiemuiassgc:
        if ($sqeykgyoooqysmca) {
            goto jkkyqgueaogqecqc;
        }
        goto yugggoyoqaaacaem;
        cqsgyyauoqyoywsu:
        return $mqkkuqaimswumeww;
        goto omqiwwwiacockgqi;
        yugggoyoqaaacaem:
        $mqkkuqaimswumeww = ManipulateArray::kaucoswaceqcuyam($mqkkuqaimswumeww);
        goto ucmumgeqkewmqkqe;
        omqiwwwiacockgqi:
    }
    
    public static function kmsomwiqwmoyoeci($mksyucucyswaukig, $couygeouymagssgw)
    {
        goto ekyycmgeggguuqmu;
        syoisuiggkakuicc:
        $ymqmyyeuycgmigyo = $mksyucucyswaukig::akuociswqmoigkas();
        goto ekeagiqmwqmiigiw;
        emeqkgwamumkcuii:
        iemqyuusqogscacm:
        goto mwigwkmoumcqyauu;
        ekyycmgeggguuqmu:
        if (!$mksyucucyswaukig instanceof Container) {
            goto wakgeaysawoausoc;
        }
        goto syoisuiggkakuicc;
        gsicykeesggkwsyw:
        self::$components[$sqeykgyoooqysmca][$ymqmyyeuycgmigyo] = new Component($mksyucucyswaukig, $sqeykgyoooqysmca, $ymqmyyeuycgmigyo, $couygeouymagssgw);
        goto emeqkgwamumkcuii;
        ekeagiqmwqmiigiw:
        $sqeykgyoooqysmca = $mksyucucyswaukig::yegwayqakokyuiok();
        goto kwyaykgmcuookkcw;
        kwyaykgmcuookkcw:
        if (!($sqeykgyoooqysmca && $ymqmyyeuycgmigyo)) {
            goto iemqyuusqogscacm;
        }
        goto gsicykeesggkwsyw;
        mwigwkmoumcqyauu:
        wakgeaysawoausoc:
        goto syqywaowckiiouck;
        syqywaowckiiouck:
    }
    
    public static function umuecysoywoumgwo(string $aiieyweysaukqemc)
    {
        return ManipulateArray::get(self::iawcusqgkeieicug(), $aiieyweysaukqemc);
    }
    
    public static function update(object $owgumcsyqsamiemg)
    {
        goto uccgigcqcqwsksmi;
        igoukeaccigacuqy:
        self::add($aiieyweysaukqemc, $owgumcsyqsamiemg);
        goto wisyigcyyuaoaiai;
        msuuwaqwqmmwagmi:
        self::remove($aiieyweysaukqemc);
        goto igoukeaccigacuqy;
        uccgigcqcqwsksmi:
        $aiieyweysaukqemc = $owgumcsyqsamiemg::uecyuoauykiqqkey();
        goto msuuwaqwqmmwagmi;
        wisyigcyyuaoaiai:
    }
    
    public static function cqusmgskowmesgcg($wksoawcgagcgoask = null)
    {
        goto swicmcmgakeuaueq;
        aquwcmkckkiisggs:
        return ManipulateArray::get($mqkkuqaimswumeww, $wksoawcgagcgoask);
        goto eumagwacwacokkey;
        wggcwoesmigkqmqg:
        $wksoawcgagcgoask = $wksoawcgagcgoask::kwqsguiiocoousuq();
        goto oqycagwciwqamqkk;
        cuwciymwsoaasaug:
        $mqkkuqaimswumeww = self::misumgawyweoagic();
        goto aquwcmkckkiisggs;
        swicmcmgakeuaueq:
        if (!(is_object($wksoawcgagcgoask) && method_exists($wksoawcgagcgoask, "\x6b\167\x71\x73\x67\165\x69\151\157\143\x6f\157\165\163\x75\161"))) {
            goto eqiemywuquiseawy;
        }
        goto wggcwoesmigkqmqg;
        oqycagwciwqamqkk:
        eqiemywuquiseawy:
        goto cuwciymwsoaasaug;
        eumagwacwacokkey:
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
        goto wkoakyucusqiokuw;
        wkoakyucusqiokuw:
        $uusmaiomayssaecw = self::cisyiemkeykgkomc($egkyssmuqcwaciya, $aokagokqyuysuksm);
        goto ioyqkckmegiaawoo;
        ugemeyesygqiskic:
        $egkyssmuqcwaciya = self::iigqkgiamcykcwcm($egkyssmuqcwaciya);
        goto ccscooiuewmaegyi;
        mcggquasyuiygwui:
        if ($owgumcsyqsamiemg) {
            goto mmqamyegwcyamyos;
        }
        goto ugemeyesygqiskic;
        wecycieacweseosm:
        $owgumcsyqsamiemg = new $egkyssmuqcwaciya(...$ywmkwiwkosakssii);
        goto mugcwkmqsweggcic;
        ccscooiuewmaegyi:
        if (!$aokagokqyuysuksm) {
            goto kwgogcacqosaayag;
        }
        goto ksomcksouggwacay;
        iucowqewyoaomsuk:
        kwgogcacqosaayag:
        goto wecycieacweseosm;
        mugcwkmqsweggcic:
        self::add($uusmaiomayssaecw, $owgumcsyqsamiemg);
        goto eciiyuwciimgmakq;
        ksomcksouggwacay:
        $ywmkwiwkosakssii[] = $aokagokqyuysuksm;
        goto iucowqewyoaomsuk;
        ioyqkckmegiaawoo:
        $owgumcsyqsamiemg = self::umuecysoywoumgwo($uusmaiomayssaecw);
        goto mcggquasyuiygwui;
        eciiyuwciimgmakq:
        mmqamyegwcyamyos:
        goto qqyeekywsyguucio;
        qqyeekywsyguucio:
        return $owgumcsyqsamiemg;
        goto wiiioykewquawmsu;
        wiiioykewquawmsu:
    }
    
    public static function cisyiemkeykgkomc(string $egkyssmuqcwaciya, ?string $aokagokqyuysuksm = null) : string
    {
        return "{$egkyssmuqcwaciya}{$aokagokqyuysuksm}";
    }
}
