<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        omqiwwwiacockgqi:
        $mqkkuqaimswumeww = ManipulateArray::get($mqkkuqaimswumeww, $sqeykgyoooqysmca, []);
        goto iemqyuusqogscacm;
        yaacseqwycoiwscq:
        if ($sqeykgyoooqysmca) {
            goto yqwegoiemuiassgc;
        }
        goto miisgaoyumayooye;
        miisgaoyumayooye:
        $mqkkuqaimswumeww = ManipulateArray::kaucoswaceqcuyam($mqkkuqaimswumeww);
        goto ykqyuoacigoewiee;
        ucmumgeqkewmqkqe:
        $mqkkuqaimswumeww = self::$components;
        goto yaacseqwycoiwscq;
        iemqyuusqogscacm:
        yugggoyoqaaacaem:
        goto wakgeaysawoausoc;
        cqsgyyauoqyoywsu:
        yqwegoiemuiassgc:
        goto omqiwwwiacockgqi;
        wakgeaysawoausoc:
        return $mqkkuqaimswumeww;
        goto ekyycmgeggguuqmu;
        ykqyuoacigoewiee:
        goto yugggoyoqaaacaem;
        goto cqsgyyauoqyoywsu;
        ekyycmgeggguuqmu:
    }
    
    public static function kmsomwiqwmoyoeci($mksyucucyswaukig, $couygeouymagssgw)
    {
        goto kwyaykgmcuookkcw;
        gsicykeesggkwsyw:
        $ymqmyyeuycgmigyo = $mksyucucyswaukig::akuociswqmoigkas();
        goto emeqkgwamumkcuii;
        msuuwaqwqmmwagmi:
        ekeagiqmwqmiigiw:
        goto igoukeaccigacuqy;
        uccgigcqcqwsksmi:
        syoisuiggkakuicc:
        goto msuuwaqwqmmwagmi;
        kwyaykgmcuookkcw:
        if (!$mksyucucyswaukig instanceof Container) {
            goto ekeagiqmwqmiigiw;
        }
        goto gsicykeesggkwsyw;
        syqywaowckiiouck:
        self::$components[$sqeykgyoooqysmca][$ymqmyyeuycgmigyo] = new Component($mksyucucyswaukig, $sqeykgyoooqysmca, $ymqmyyeuycgmigyo, $couygeouymagssgw);
        goto uccgigcqcqwsksmi;
        mwigwkmoumcqyauu:
        if (!($sqeykgyoooqysmca && $ymqmyyeuycgmigyo)) {
            goto syoisuiggkakuicc;
        }
        goto syqywaowckiiouck;
        emeqkgwamumkcuii:
        $sqeykgyoooqysmca = $mksyucucyswaukig::yegwayqakokyuiok();
        goto mwigwkmoumcqyauu;
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
        kwgogcacqosaayag:
        $mqkkuqaimswumeww = self::misumgawyweoagic();
        goto mmqamyegwcyamyos;
        cuwciymwsoaasaug:
        if (!(is_object($wksoawcgagcgoask) && method_exists($wksoawcgagcgoask, "\x6b\x77\161\163\x67\x75\151\151\x6f\143\157\x6f\x75\163\165\161"))) {
            goto oqycagwciwqamqkk;
        }
        goto aquwcmkckkiisggs;
        eumagwacwacokkey:
        oqycagwciwqamqkk:
        goto kwgogcacqosaayag;
        mmqamyegwcyamyos:
        return ManipulateArray::get($mqkkuqaimswumeww, $wksoawcgagcgoask);
        goto wkoakyucusqiokuw;
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
        ugemeyesygqiskic:
        $uusmaiomayssaecw = self::cisyiemkeykgkomc($egkyssmuqcwaciya, $aokagokqyuysuksm);
        goto ccscooiuewmaegyi;
        eciiyuwciimgmakq:
        ioyqkckmegiaawoo:
        goto qqyeekywsyguucio;
        mqmooaikaumwewew:
        mcggquasyuiygwui:
        goto cyeycessoayeoism;
        ksomcksouggwacay:
        if ($owgumcsyqsamiemg) {
            goto mcggquasyuiygwui;
        }
        goto iucowqewyoaomsuk;
        mugcwkmqsweggcic:
        $ywmkwiwkosakssii[] = $aokagokqyuysuksm;
        goto eciiyuwciimgmakq;
        qqyeekywsyguucio:
        $owgumcsyqsamiemg = new $egkyssmuqcwaciya(...$ywmkwiwkosakssii);
        goto wiiioykewquawmsu;
        wecycieacweseosm:
        if (!$aokagokqyuysuksm) {
            goto ioyqkckmegiaawoo;
        }
        goto mugcwkmqsweggcic;
        ccscooiuewmaegyi:
        $owgumcsyqsamiemg = self::umuecysoywoumgwo($uusmaiomayssaecw);
        goto ksomcksouggwacay;
        cyeycessoayeoism:
        return $owgumcsyqsamiemg;
        goto emuqseyswwammumy;
        iucowqewyoaomsuk:
        $egkyssmuqcwaciya = self::iigqkgiamcykcwcm($egkyssmuqcwaciya);
        goto wecycieacweseosm;
        wiiioykewquawmsu:
        self::add($uusmaiomayssaecw, $owgumcsyqsamiemg);
        goto mqmooaikaumwewew;
        emuqseyswwammumy:
    }
    
    public static function cisyiemkeykgkomc(string $egkyssmuqcwaciya, ?string $aokagokqyuysuksm = null) : string
    {
        return "{$egkyssmuqcwaciya}{$aokagokqyuysuksm}";
    }
}
