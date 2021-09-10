<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Traits;

use Pmpr\Common\Foundation\Container\Storage;
use Pmpr\Common\Foundation\Data\Component;
use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Common\Foundation\Manipulate\ManipulateFile;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Pmpr\Common\Foundation\Template\Traits\TemplateTrait;

trait ComponentTrait
{
    use TemplateTrait;
    
    public final function gkieogwukagigisy($miawkwqioaeasiig)
    {
        goto uiwmoaosqkcaoqce;
        ucyimwewacagqocw:
        $this->ycgwemyyomeiuake();
        goto gkqsiqmqqemqqwku;
        uiwmoaosqkcaoqce:
        Storage::kmsomwiqwmoyoeci($this, $miawkwqioaeasiig);
        goto ucyimwewacagqocw;
        gkqsiqmqqemqqwku:
        $this->kkcywkucqsawqqqo();
        goto wiokcqeyeaymgwae;
        wiokcqeyeaymgwae:
    }
    
    public final function gmiyqqaekqcsoime(string $ymqmyyeuycgmigyo = null) : bool
    {
        goto cewcuuesgeiiassq;
        wsocaemogooskccw:
        $omkysikckkcieckq = DecoratorOption::get("\x63\x6f\x6d\x70\157\156\x65\x6e\164\x2d{$ymqmyyeuycgmigyo}", []);
        goto qsowiceqiuciwiku;
        amieoocwaeecmywi:
        geyysuiiagkkeqam:
        goto uogamakkkoeumkuo;
        eqgiyaakqasaqymq:
        if (!(!$ggocakcisguuokai && $ymqmyyeuycgmigyo)) {
            goto qsgigkoyesqiwoik;
        }
        goto wsocaemogooskccw;
        qsowiceqiuciwiku:
        $ggocakcisguuokai = ManipulateArray::get($omkysikckkcieckq, self::STATUS) == self::ACTIVE;
        goto acmyiosessocqqsg;
        uqagmecggeymyekm:
        return $ggocakcisguuokai;
        goto sawggikqsayoiscm;
        mqeycgqqaoguwkoa:
        $ymqmyyeuycgmigyo = $wksoawcgagcgoask->eeucessuemoysgqg();
        goto amieoocwaeecmywi;
        koikauauameyygqc:
        $wksoawcgagcgoask = self::couwksyewgyeooqe();
        goto sksucoueuaiseguw;
        uogamakkkoeumkuo:
        sueiceyeyweumeck:
        goto waoymaouskgiemes;
        cewcuuesgeiiassq:
        if ($ymqmyyeuycgmigyo) {
            goto sueiceyeyweumeck;
        }
        goto koikauauameyygqc;
        waoymaouskgiemes:
        $ggocakcisguuokai = ManipulateSetting::cmaecekuqkwmemms("\103\x4f\x4d\120\117\116\105\116\x54\123\137\x41\x43\x54\x49\126\105", 0);
        goto eqgiyaakqasaqymq;
        sksucoueuaiseguw:
        if (!$wksoawcgagcgoask) {
            goto geyysuiiagkkeqam;
        }
        goto mqeycgqqaoguwkoa;
        acmyiosessocqqsg:
        qsgigkoyesqiwoik:
        goto uqagmecggeymyekm;
        sawggikqsayoiscm:
    }
    
    public final function omseesogaocascyo(string $ymqmyyeuycgmigyo, string $sqeykgyoooqysmca = self::PKG) : bool
    {
        $wksoawcgagcgoask = self::mqucqomkmisceawy("\160\162\x5f\137{$sqeykgyoooqysmca}\137\x5f" . ManipulateString::ogimogiceeekegoi($ymqmyyeuycgmigyo));
        return $wksoawcgagcgoask instanceof Component;
    }
    
    public static final function uqggkiomyiceyooa() : string
    {
        return get_called_class();
    }
    
    public static function isyyiqwsgyieiqgu($sqeykgyoooqysmca = null) : array
    {
        return Storage::misumgawyweoagic($sqeykgyoooqysmca);
    }
    
    public static function yegwayqakokyuiok($egkyssmuqcwaciya = null) : ?string
    {
        goto moqsoaomwaeykgei;
        aqoumegesyioyyme:
        kegwaamwygcyissk:
        goto uwyayemiakeqosci;
        suycymikusukkyio:
        sqkuescwoaugawem:
        goto mkseiiygswgckuyi;
        qyemiqcwoyeyeyiw:
        if (!$uomewyckeuqoqocu) {
            goto yqewwggigucqaiou;
        }
        goto ksiskiqygouakumc;
        ksiskiqygouakumc:
        $sqeykgyoooqysmca = strtolower(ManipulateArray::get($uomewyckeuqoqocu, 1));
        goto gksysyaaaaeasgmg;
        uiiiomwgksaissoc:
        $egkyssmuqcwaciya = self::uqggkiomyiceyooa();
        goto aqoumegesyioyyme;
        gksysyaaaaeasgmg:
        switch ($sqeykgyoooqysmca) {
            case "\160\x61\x63\153\141\147\145":
                $sqeykgyoooqysmca = self::PKG;
                goto sqkuescwoaugawem;
            case "\x63\x6f\x6d\x6d\157\156":
                $sqeykgyoooqysmca = self::CMN;
                goto sqkuescwoaugawem;
            case "\x74\150\145\x6d\145":
                $sqeykgyoooqysmca = self::THM;
                goto sqkuescwoaugawem;
            default:
                $sqeykgyoooqysmca = self::CTM;
        }
        goto gwauyogieqaqueyu;
        sqswqiyeaauwaeui:
        $uomewyckeuqoqocu = explode("\134", $egkyssmuqcwaciya);
        goto qyemiqcwoyeyeyiw;
        moqsoaomwaeykgei:
        if ($egkyssmuqcwaciya) {
            goto kegwaamwygcyissk;
        }
        goto uiiiomwgksaissoc;
        gwauyogieqaqueyu:
        gqewqqqogsygmicg:
        goto suycymikusukkyio;
        ogksggygiqgccsgs:
        return $sqeykgyoooqysmca;
        goto ugwcquomeuagcuma;
        mkseiiygswgckuyi:
        yqewwggigucqaiou:
        goto ogksggygiqgccsgs;
        uwyayemiakeqosci:
        $sqeykgyoooqysmca = '';
        goto sqswqiyeaauwaeui;
        ugwcquomeuagcuma:
    }
    
    public static function couwksyewgyeooqe($egkyssmuqcwaciya = null) : ?Component
    {
        $ymqmyyeuycgmigyo = self::akuociswqmoigkas($egkyssmuqcwaciya);
        return Storage::cqusmgskowmesgcg($ymqmyyeuycgmigyo);
    }
    
    public static function aswwewigcsoawwqk($egkyssmuqcwaciya = null) : ?string
    {
        goto wccqiqisegqowemu;
        wmyaoiwaoycgwucw:
        return $kcismmoemwgiymuq;
        goto ykuewakwswmuaoqq;
        niiosgywwiykokkq:
        if (!$wksoawcgagcgoask) {
            goto awysggkgocqkkmaq;
        }
        goto uokamacqkkiqccku;
        pkueqgmoqweqmssi:
        $kcismmoemwgiymuq = '';
        goto niiosgywwiykokkq;
        uokamacqkkiqccku:
        $kcismmoemwgiymuq = $wksoawcgagcgoask->aiqioscoyukqgsgw();
        goto gmocwmmyommsqkky;
        gmocwmmyommsqkky:
        awysggkgocqkkmaq:
        goto wmyaoiwaoycgwucw;
        wccqiqisegqowemu:
        $wksoawcgagcgoask = self::couwksyewgyeooqe($egkyssmuqcwaciya);
        goto pkueqgmoqweqmssi;
        ykuewakwswmuaoqq:
    }
    
    public static final function akuociswqmoigkas($egkyssmuqcwaciya = null) : ?string
    {
        goto wuqqmyecwsmegamk;
        cueyocuoyqoygsqk:
        giykkoouiosqeuqo:
        goto oieimksmyyeyosik;
        uicoowkoscsuucui:
        $wksoawcgagcgoask = ManipulateArray::get($uomewyckeuqoqocu, 2);
        goto iguyoiwiuikugekq;
        oieimksmyyeyosik:
        $sqeykgyoooqysmca = self::yegwayqakokyuiok($egkyssmuqcwaciya);
        goto qqqecycaqiuckqge;
        wywaockmiweeueom:
        $egkyssmuqcwaciya = self::uqggkiomyiceyooa();
        goto cueyocuoyqoygsqk;
        uqaymuykyqsuayso:
        wp_die("\143\141\156\40\156\157\x74\40\x72\x65\x67\x69\x73\x74\145\162\40\x63\x6f\155\x70\x6f\x6e\145\156\x74\72\x20" . $egkyssmuqcwaciya);
        goto imowaciskmueoogo;
        wuqqmyecwsmegamk:
        if ($egkyssmuqcwaciya) {
            goto giykkoouiosqeuqo;
        }
        goto wywaockmiweeueom;
        iguyoiwiuikugekq:
        return ManipulateString::ogimogiceeekegoi("\160\162\x5f\137{$sqeykgyoooqysmca}\x5f\137{$wksoawcgagcgoask}");
        goto weeosewyimcickoi;
        iycouaqccscasucc:
        $uomewyckeuqoqocu = explode("\x5c", $egkyssmuqcwaciya);
        goto uicoowkoscsuucui;
        qqqecycaqiuckqge:
        if ($sqeykgyoooqysmca) {
            goto ogsmeaeskmkauwwy;
        }
        goto uqaymuykyqsuayso;
        imowaciskmueoogo:
        ogsmeaeskmkauwwy:
        goto iycouaqccscasucc;
        weeosewyimcickoi:
    }
    
    public static function qmkyymgaecsmakqq($couygeouymagssgw = null) : ?Component
    {
        goto somsmcmoyaiiwuyk;
        aaoekkysuimcamyu:
        iuwcskswgaeuqumi:
        goto wugqaoggyqusmaoa;
        somsmcmoyaiiwuyk:
        $ksiyqouuaoymsycg = null;
        goto msqmakqaiawgqeau;
        iuukukcykqykisaa:
        foreach ($mqkkuqaimswumeww as $wksoawcgagcgoask) {
            goto aaaicwymgocaseis;
            iuimkcgcsyemcuei:
            ggaqgegasaaiuacg:
            goto qmukeceewgmekoae;
            aaaicwymgocaseis:
            if (!($wksoawcgagcgoask->ikeqsmumgwwuqmkw() === $couygeouymagssgw)) {
                goto syoyogomscqcsoyk;
            }
            goto aycyouisaiokysqw;
            moequykwukcqmiga:
            goto iuwcskswgaeuqumi;
            goto mgkwqmyqgswasocy;
            aycyouisaiokysqw:
            $ksiyqouuaoymsycg = $wksoawcgagcgoask;
            goto moequykwukcqmiga;
            mgkwqmyqgswasocy:
            syoyogomscqcsoyk:
            goto iuimkcgcsyemcuei;
            qmukeceewgmekoae:
        }
        goto aaoekkysuimcamyu;
        msqmakqaiawgqeau:
        $mqkkuqaimswumeww = self::isyyiqwsgyieiqgu();
        goto iuukukcykqykisaa;
        wugqaoggyqusmaoa:
        return $ksiyqouuaoymsycg;
        goto qamicqyikayyacok;
        qamicqyikayyacok:
    }
    
    public static function mqucqomkmisceawy(string $ymqmyyeuycgmigyo) : ?Component
    {
        return ManipulateArray::get(self::isyyiqwsgyieiqgu(), $ymqmyyeuycgmigyo);
    }
    
    public static final function cmewgsgomuwkkoou($egkyssmuqcwaciya = null) : ?string
    {
        goto kuwwysummgiakgwo;
        qgaoikokgokgqaqi:
        return $mkomwsiykqigmqca;
        goto ikqwewkaooqqcwmw;
        imiqucuaiyoaeaka:
        $ymqmyyeuycgmigyo = self::akuociswqmoigkas($egkyssmuqcwaciya);
        goto ggiiuoqggyauekgs;
        ggiiuoqggyauekgs:
        $mkomwsiykqigmqca = ManipulateFile::cmaecekuqkwmemms(strtoupper($ymqmyyeuycgmigyo) . self::__ROOT__PATH, null);
        goto yyeiqoiuweqikyyq;
        yyeiqoiuweqikyyq:
        goto oaymmkagwocukmyq;
        goto qqyqygkmkeeuaiss;
        qqyqygkmkeeuaiss:
        oasqosiqcsiyyaye:
        goto myccwweewiwguqaa;
        kuusyaqguycoyiia:
        if ($wksoawcgagcgoask) {
            goto oasqosiqcsiyyaye;
        }
        goto imiqucuaiyoaeaka;
        myccwweewiwguqaa:
        $mkomwsiykqigmqca = $wksoawcgagcgoask->ikeqsmumgwwuqmkw();
        goto cqokwokkmcecokwi;
        kuwwysummgiakgwo:
        $wksoawcgagcgoask = self::couwksyewgyeooqe($egkyssmuqcwaciya);
        goto kuusyaqguycoyiia;
        cqokwokkmcecokwi:
        oaymmkagwocukmyq:
        goto qgaoikokgokgqaqi;
        ikqwewkaooqqcwmw:
    }
    
    private final function ycgwemyyomeiuake(string $mokawwccycoiqeka = null, string $mkomwsiykqigmqca = null) : bool
    {
        goto auycewyimycgsusg;
        mokwmqowycmwwkem:
        $mokawwccycoiqeka = $wksoawcgagcgoask->wwawisckiqeueoua();
        goto wiakkcgyggaeaeoa;
        iwsckisegswykacc:
        $egcekquqcyayskcm = "{$aamkqmkgsaqmcuao}\x2e\x6d\x6f";
        goto aawsuekkqeecmsuu;
        sgiyakiusoqeesgi:
        ymcwgkmiysmukacs:
        goto mmkoaqwkqwweiuco;
        eukmaswisycyiwik:
        $wksoawcgagcgoask = self::couwksyewgyeooqe();
        goto ysgkwckuuwmeqmim;
        uqckgkumgouqgcus:
        $mkomwsiykqigmqca = $this->cmewgsgomuwkkoou() . "\57\164\162\141\x6e\163\154\141\164\x69\157\x6e";
        goto sgiyakiusoqeesgi;
        aawsuekkqeecmsuu:
        if ($mkomwsiykqigmqca) {
            goto ymcwgkmiysmukacs;
        }
        goto uqckgkumgouqgcus;
        wiakkcgyggaeaeoa:
        oyqwymwomuameswa:
        goto ecyuccaigwwcquoq;
        ecyuccaigwwcquoq:
        ogmogeeogucogway:
        goto oesgammmiwwkggki;
        auycewyimycgsusg:
        if ($mokawwccycoiqeka) {
            goto ogmogeeogucogway;
        }
        goto eukmaswisycyiwik;
        ysgkwckuuwmeqmim:
        if (!$wksoawcgagcgoask) {
            goto oyqwymwomuameswa;
        }
        goto mokwmqowycmwwkem;
        oesgammmiwwkggki:
        $aamkqmkgsaqmcuao = $this->sscegwueamckwmcy("\160\154\165\x67\151\x6e\137\x6c\x6f\143\x61\154\x65", determine_locale(), $mokawwccycoiqeka);
        goto iwsckisegswykacc;
        mmkoaqwkqwweiuco:
        
        return load_textdomain($mokawwccycoiqeka, realpath("{$mkomwsiykqigmqca}\x2f{$egcekquqcyayskcm}"));
        goto wwwyuwogyaymawes;
        wwwyuwogyaymawes:
    }
    
    public function eegcqkwceasicmek() : ?string
    {
        goto egekcweywqwukqwq;
        egekcweywqwukqwq:
        $wissqeyocyayguas = $this->sscegwueamckwmcy("\x67\x65\x74\137\x70\155\160\x72\137\x70\154\x75\x67\151\156\x5f\x61\x70\151\137\x6b\x65\x79", '');
        goto sgkksaaokaceycie;
        sgkksaaokaceycie:
        if (is_string($wissqeyocyayguas)) {
            goto suigamkkgmwiaakg;
        }
        goto ouaaoissmeyugeye;
        uyagiwoqkikiygme:
        suigamkkgmwiaakg:
        goto kogcmeyqyokimaqo;
        ouaaoissmeyugeye:
        $wissqeyocyayguas = null;
        goto uyagiwoqkikiygme;
        kogcmeyqyokimaqo:
        return $wissqeyocyayguas;
        goto iieiwkmcwkocasiq;
        iieiwkmcwkocasiq:
    }
}
