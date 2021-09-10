<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        goto ucmumgeqkewmqkqe;
        cqsgyyauoqyoywsu:
        yqwegoiemuiassgc:
        goto omqiwwwiacockgqi;
        wakgeaysawoausoc:
        return $mqkkuqaimswumeww;
        goto ekyycmgeggguuqmu;
        ucmumgeqkewmqkqe:
        $mqkkuqaimswumeww = self::$components;
        goto yaacseqwycoiwscq;
        ykqyuoacigoewiee:
        goto yugggoyoqaaacaem;
        goto cqsgyyauoqyoywsu;
        omqiwwwiacockgqi:
        $mqkkuqaimswumeww = ManipulateArray::get($mqkkuqaimswumeww, $sqeykgyoooqysmca, []);
        goto iemqyuusqogscacm;
        miisgaoyumayooye:
        $mqkkuqaimswumeww = ManipulateArray::kaucoswaceqcuyam($mqkkuqaimswumeww);
        goto ykqyuoacigoewiee;
        yaacseqwycoiwscq:
        if ($sqeykgyoooqysmca) {
            goto yqwegoiemuiassgc;
        }
        goto miisgaoyumayooye;
        iemqyuusqogscacm:
        yugggoyoqaaacaem:
        goto wakgeaysawoausoc;
        ekyycmgeggguuqmu:
    }
    
    public static function kmsomwiqwmoyoeci($mksyucucyswaukig, $couygeouymagssgw)
    {
        goto kwyaykgmcuookkcw;
        uccgigcqcqwsksmi:
        syoisuiggkakuicc:
        goto msuuwaqwqmmwagmi;
        kwyaykgmcuookkcw:
        if (!$mksyucucyswaukig instanceof Container) {
            goto ekeagiqmwqmiigiw;
        }
        goto gsicykeesggkwsyw;
        emeqkgwamumkcuii:
        $sqeykgyoooqysmca = $mksyucucyswaukig::yegwayqakokyuiok();
        goto mwigwkmoumcqyauu;
        mwigwkmoumcqyauu:
        if (!($sqeykgyoooqysmca && $ymqmyyeuycgmigyo)) {
            goto syoisuiggkakuicc;
        }
        goto syqywaowckiiouck;
        syqywaowckiiouck:
        self::$components[$sqeykgyoooqysmca][$ymqmyyeuycgmigyo] = new Component($mksyucucyswaukig, $sqeykgyoooqysmca, $ymqmyyeuycgmigyo, $couygeouymagssgw);
        goto uccgigcqcqwsksmi;
        gsicykeesggkwsyw:
        $ymqmyyeuycgmigyo = $mksyucucyswaukig::akuociswqmoigkas();
        goto emeqkgwamumkcuii;
        msuuwaqwqmmwagmi:
        ekeagiqmwqmiigiw:
        goto igoukeaccigacuqy;
        igoukeaccigacuqy:
    }
    
    public static function umuecysoywoumgwo(string $aiieyweysaukqemc)
    {
        return ManipulateArray::get(self::iawcusqgkeieicug(), $aiieyweysaukqemc);
    }
    
    public static function update(object $owgumcsyqsamiemg)
    {
        goto wisyigcyyuaoaiai;
        eqiemywuquiseawy:
        self::remove($aiieyweysaukqemc);
        goto swicmcmgakeuaueq;
        wisyigcyyuaoaiai:
        $aiieyweysaukqemc = $owgumcsyqsamiemg::uecyuoauykiqqkey();
        goto eqiemywuquiseawy;
        swicmcmgakeuaueq:
        self::add($aiieyweysaukqemc, $owgumcsyqsamiemg);
        goto wggcwoesmigkqmqg;
        wggcwoesmigkqmqg:
    }
    
    public static function cqusmgskowmesgcg($wksoawcgagcgoask = null)
    {
        goto cuwciymwsoaasaug;
        aquwcmkckkiisggs:
        $wksoawcgagcgoask = $wksoawcgagcgoask::kwqsguiiocoousuq();
        goto eumagwacwacokkey;
        eumagwacwacokkey:
        oqycagwciwqamqkk:
        goto kwgogcacqosaayag;
        cuwciymwsoaasaug:
        if (!(is_object($wksoawcgagcgoask) && method_exists($wksoawcgagcgoask, "\153\x77\x71\163\147\x75\151\x69\x6f\143\x6f\x6f\165\x73\165\x71"))) {
            goto oqycagwciwqamqkk;
        }
        goto aquwcmkckkiisggs;
        mmqamyegwcyamyos:
        return ManipulateArray::get($mqkkuqaimswumeww, $wksoawcgagcgoask);
        goto wkoakyucusqiokuw;
        kwgogcacqosaayag:
        $mqkkuqaimswumeww = self::misumgawyweoagic();
        goto mmqamyegwcyamyos;
        wkoakyucusqiokuw:
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
        goto ugemeyesygqiskic;
        ksomcksouggwacay:
        if ($owgumcsyqsamiemg) {
            goto mcggquasyuiygwui;
        }
        goto iucowqewyoaomsuk;
        cyeycessoayeoism:
        return $owgumcsyqsamiemg;
        goto emuqseyswwammumy;
        wecycieacweseosm:
        if (!$aokagokqyuysuksm) {
            goto ioyqkckmegiaawoo;
        }
        goto mugcwkmqsweggcic;
        mqmooaikaumwewew:
        mcggquasyuiygwui:
        goto cyeycessoayeoism;
        wiiioykewquawmsu:
        self::add($uusmaiomayssaecw, $owgumcsyqsamiemg);
        goto mqmooaikaumwewew;
        ccscooiuewmaegyi:
        $owgumcsyqsamiemg = self::umuecysoywoumgwo($uusmaiomayssaecw);
        goto ksomcksouggwacay;
        eciiyuwciimgmakq:
        ioyqkckmegiaawoo:
        goto qqyeekywsyguucio;
        ugemeyesygqiskic:
        $uusmaiomayssaecw = self::cisyiemkeykgkomc($egkyssmuqcwaciya, $aokagokqyuysuksm);
        goto ccscooiuewmaegyi;
        iucowqewyoaomsuk:
        $egkyssmuqcwaciya = self::iigqkgiamcykcwcm($egkyssmuqcwaciya);
        goto wecycieacweseosm;
        qqyeekywsyguucio:
        $owgumcsyqsamiemg = new $egkyssmuqcwaciya(...$ywmkwiwkosakssii);
        goto wiiioykewquawmsu;
        mugcwkmqsweggcic:
        $ywmkwiwkosakssii[] = $aokagokqyuysuksm;
        goto eciiyuwciimgmakq;
        emuqseyswwammumy:
    }
    
    public static function cisyiemkeykgkomc(string $egkyssmuqcwaciya, ?string $aokagokqyuysuksm = null) : string
    {
        return "{$egkyssmuqcwaciya}{$aokagokqyuysuksm}";
    }
}
