<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        uiwmoaosqkcaoqce:
        Storage::kmsomwiqwmoyoeci($this, $miawkwqioaeasiig);
        goto ucyimwewacagqocw;
        ucyimwewacagqocw:
        $this->ycgwemyyomeiuake();
        goto gkqsiqmqqemqqwku;
        gkqsiqmqqemqqwku:
        $this->kkcywkucqsawqqqo();
        goto wiokcqeyeaymgwae;
        wiokcqeyeaymgwae:
    }
    
    public final function gmiyqqaekqcsoime(string $ymqmyyeuycgmigyo = null) : bool
    {
        goto cewcuuesgeiiassq;
        acmyiosessocqqsg:
        qsgigkoyesqiwoik:
        goto uqagmecggeymyekm;
        eqgiyaakqasaqymq:
        if (!(!$ggocakcisguuokai && $ymqmyyeuycgmigyo)) {
            goto qsgigkoyesqiwoik;
        }
        goto wsocaemogooskccw;
        sksucoueuaiseguw:
        if (!$wksoawcgagcgoask) {
            goto geyysuiiagkkeqam;
        }
        goto mqeycgqqaoguwkoa;
        wsocaemogooskccw:
        $omkysikckkcieckq = DecoratorOption::get("\x63\157\155\160\157\156\145\x6e\164\x2d{$ymqmyyeuycgmigyo}", []);
        goto qsowiceqiuciwiku;
        mqeycgqqaoguwkoa:
        $ymqmyyeuycgmigyo = $wksoawcgagcgoask->eeucessuemoysgqg();
        goto amieoocwaeecmywi;
        qsowiceqiuciwiku:
        $ggocakcisguuokai = ManipulateArray::get($omkysikckkcieckq, self::STATUS) == self::ACTIVE;
        goto acmyiosessocqqsg;
        waoymaouskgiemes:
        $ggocakcisguuokai = ManipulateSetting::cmaecekuqkwmemms("\103\x4f\115\x50\x4f\116\x45\116\x54\123\x5f\x41\x43\x54\111\x56\105", 0);
        goto eqgiyaakqasaqymq;
        uqagmecggeymyekm:
        return $ggocakcisguuokai;
        goto sawggikqsayoiscm;
        uogamakkkoeumkuo:
        sueiceyeyweumeck:
        goto waoymaouskgiemes;
        amieoocwaeecmywi:
        geyysuiiagkkeqam:
        goto uogamakkkoeumkuo;
        cewcuuesgeiiassq:
        if ($ymqmyyeuycgmigyo) {
            goto sueiceyeyweumeck;
        }
        goto koikauauameyygqc;
        koikauauameyygqc:
        $wksoawcgagcgoask = self::couwksyewgyeooqe();
        goto sksucoueuaiseguw;
        sawggikqsayoiscm:
    }
    
    public final function omseesogaocascyo(string $ymqmyyeuycgmigyo, string $sqeykgyoooqysmca = self::PKG) : bool
    {
        $wksoawcgagcgoask = self::mqucqomkmisceawy("\x70\162\x5f\137{$sqeykgyoooqysmca}\137\137" . ManipulateString::ogimogiceeekegoi($ymqmyyeuycgmigyo));
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
        qyemiqcwoyeyeyiw:
        if (!$uomewyckeuqoqocu) {
            goto yqewwggigucqaiou;
        }
        goto ksiskiqygouakumc;
        ksiskiqygouakumc:
        $sqeykgyoooqysmca = strtolower(ManipulateArray::get($uomewyckeuqoqocu, 1));
        goto gksysyaaaaeasgmg;
        aqoumegesyioyyme:
        kegwaamwygcyissk:
        goto uwyayemiakeqosci;
        moqsoaomwaeykgei:
        if ($egkyssmuqcwaciya) {
            goto kegwaamwygcyissk;
        }
        goto uiiiomwgksaissoc;
        sqswqiyeaauwaeui:
        $uomewyckeuqoqocu = explode("\134", $egkyssmuqcwaciya);
        goto qyemiqcwoyeyeyiw;
        uiiiomwgksaissoc:
        $egkyssmuqcwaciya = self::uqggkiomyiceyooa();
        goto aqoumegesyioyyme;
        gksysyaaaaeasgmg:
        switch ($sqeykgyoooqysmca) {
            case "\160\x61\143\x6b\x61\147\x65":
                $sqeykgyoooqysmca = self::PKG;
                goto sqkuescwoaugawem;
            case "\143\157\155\155\157\156":
                $sqeykgyoooqysmca = self::CMN;
                goto sqkuescwoaugawem;
            case "\164\150\145\x6d\145":
                $sqeykgyoooqysmca = self::THM;
                goto sqkuescwoaugawem;
            default:
                $sqeykgyoooqysmca = self::CTM;
        }
        goto gwauyogieqaqueyu;
        gwauyogieqaqueyu:
        gqewqqqogsygmicg:
        goto suycymikusukkyio;
        mkseiiygswgckuyi:
        yqewwggigucqaiou:
        goto ogksggygiqgccsgs;
        suycymikusukkyio:
        sqkuescwoaugawem:
        goto mkseiiygswgckuyi;
        uwyayemiakeqosci:
        $sqeykgyoooqysmca = '';
        goto sqswqiyeaauwaeui;
        ogksggygiqgccsgs:
        return $sqeykgyoooqysmca;
        goto ugwcquomeuagcuma;
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
        niiosgywwiykokkq:
        if (!$wksoawcgagcgoask) {
            goto awysggkgocqkkmaq;
        }
        goto uokamacqkkiqccku;
        wmyaoiwaoycgwucw:
        return $kcismmoemwgiymuq;
        goto ykuewakwswmuaoqq;
        wccqiqisegqowemu:
        $wksoawcgagcgoask = self::couwksyewgyeooqe($egkyssmuqcwaciya);
        goto pkueqgmoqweqmssi;
        pkueqgmoqweqmssi:
        $kcismmoemwgiymuq = '';
        goto niiosgywwiykokkq;
        uokamacqkkiqccku:
        $kcismmoemwgiymuq = $wksoawcgagcgoask->aiqioscoyukqgsgw();
        goto gmocwmmyommsqkky;
        gmocwmmyommsqkky:
        awysggkgocqkkmaq:
        goto wmyaoiwaoycgwucw;
        ykuewakwswmuaoqq:
    }
    
    public static final function akuociswqmoigkas($egkyssmuqcwaciya = null) : ?string
    {
        goto wuqqmyecwsmegamk;
        wuqqmyecwsmegamk:
        if ($egkyssmuqcwaciya) {
            goto giykkoouiosqeuqo;
        }
        goto wywaockmiweeueom;
        qqqecycaqiuckqge:
        if ($sqeykgyoooqysmca) {
            goto ogsmeaeskmkauwwy;
        }
        goto uqaymuykyqsuayso;
        uicoowkoscsuucui:
        $wksoawcgagcgoask = ManipulateArray::get($uomewyckeuqoqocu, 2);
        goto iguyoiwiuikugekq;
        oieimksmyyeyosik:
        $sqeykgyoooqysmca = self::yegwayqakokyuiok($egkyssmuqcwaciya);
        goto qqqecycaqiuckqge;
        uqaymuykyqsuayso:
        wp_die("\143\141\x6e\40\x6e\157\x74\x20\162\x65\x67\151\163\x74\145\162\x20\143\x6f\x6d\160\x6f\x6e\x65\156\x74\x3a\40" . $egkyssmuqcwaciya);
        goto imowaciskmueoogo;
        wywaockmiweeueom:
        $egkyssmuqcwaciya = self::uqggkiomyiceyooa();
        goto cueyocuoyqoygsqk;
        cueyocuoyqoygsqk:
        giykkoouiosqeuqo:
        goto oieimksmyyeyosik;
        iycouaqccscasucc:
        $uomewyckeuqoqocu = explode("\134", $egkyssmuqcwaciya);
        goto uicoowkoscsuucui;
        iguyoiwiuikugekq:
        return ManipulateString::ogimogiceeekegoi("\x70\162\137\x5f{$sqeykgyoooqysmca}\x5f\x5f{$wksoawcgagcgoask}");
        goto weeosewyimcickoi;
        imowaciskmueoogo:
        ogsmeaeskmkauwwy:
        goto iycouaqccscasucc;
        weeosewyimcickoi:
    }
    
    public static function qmkyymgaecsmakqq($couygeouymagssgw = null) : ?Component
    {
        goto somsmcmoyaiiwuyk;
        somsmcmoyaiiwuyk:
        $ksiyqouuaoymsycg = null;
        goto msqmakqaiawgqeau;
        wugqaoggyqusmaoa:
        return $ksiyqouuaoymsycg;
        goto qamicqyikayyacok;
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
        aaoekkysuimcamyu:
        iuwcskswgaeuqumi:
        goto wugqaoggyqusmaoa;
        msqmakqaiawgqeau:
        $mqkkuqaimswumeww = self::isyyiqwsgyieiqgu();
        goto iuukukcykqykisaa;
        qamicqyikayyacok:
    }
    
    public static function mqucqomkmisceawy(string $ymqmyyeuycgmigyo) : ?Component
    {
        return ManipulateArray::get(self::isyyiqwsgyieiqgu(), $ymqmyyeuycgmigyo);
    }
    
    public static final function cmewgsgomuwkkoou($egkyssmuqcwaciya = null) : ?string
    {
        goto kuwwysummgiakgwo;
        myccwweewiwguqaa:
        $mkomwsiykqigmqca = $wksoawcgagcgoask->ikeqsmumgwwuqmkw();
        goto cqokwokkmcecokwi;
        ggiiuoqggyauekgs:
        $mkomwsiykqigmqca = ManipulateFile::cmaecekuqkwmemms(strtoupper($ymqmyyeuycgmigyo) . self::__ROOT__PATH, null);
        goto yyeiqoiuweqikyyq;
        kuwwysummgiakgwo:
        $wksoawcgagcgoask = self::couwksyewgyeooqe($egkyssmuqcwaciya);
        goto kuusyaqguycoyiia;
        yyeiqoiuweqikyyq:
        goto oaymmkagwocukmyq;
        goto qqyqygkmkeeuaiss;
        imiqucuaiyoaeaka:
        $ymqmyyeuycgmigyo = self::akuociswqmoigkas($egkyssmuqcwaciya);
        goto ggiiuoqggyauekgs;
        qgaoikokgokgqaqi:
        return $mkomwsiykqigmqca;
        goto ikqwewkaooqqcwmw;
        kuusyaqguycoyiia:
        if ($wksoawcgagcgoask) {
            goto oasqosiqcsiyyaye;
        }
        goto imiqucuaiyoaeaka;
        qqyqygkmkeeuaiss:
        oasqosiqcsiyyaye:
        goto myccwweewiwguqaa;
        cqokwokkmcecokwi:
        oaymmkagwocukmyq:
        goto qgaoikokgokgqaqi;
        ikqwewkaooqqcwmw:
    }
    
    private final function ycgwemyyomeiuake(string $mokawwccycoiqeka = null, string $mkomwsiykqigmqca = null) : bool
    {
        goto auycewyimycgsusg;
        wiakkcgyggaeaeoa:
        oyqwymwomuameswa:
        goto ecyuccaigwwcquoq;
        uqckgkumgouqgcus:
        $mkomwsiykqigmqca = $this->cmewgsgomuwkkoou() . "\57\x74\x72\x61\156\x73\x6c\x61\164\151\x6f\x6e";
        goto sgiyakiusoqeesgi;
        iwsckisegswykacc:
        $egcekquqcyayskcm = "{$aamkqmkgsaqmcuao}\x2e\155\x6f";
        goto aawsuekkqeecmsuu;
        mokwmqowycmwwkem:
        $mokawwccycoiqeka = $wksoawcgagcgoask->wwawisckiqeueoua();
        goto wiakkcgyggaeaeoa;
        auycewyimycgsusg:
        if ($mokawwccycoiqeka) {
            goto ogmogeeogucogway;
        }
        goto eukmaswisycyiwik;
        eukmaswisycyiwik:
        $wksoawcgagcgoask = self::couwksyewgyeooqe();
        goto ysgkwckuuwmeqmim;
        ysgkwckuuwmeqmim:
        if (!$wksoawcgagcgoask) {
            goto oyqwymwomuameswa;
        }
        goto mokwmqowycmwwkem;
        mmkoaqwkqwweiuco:
        
        return load_textdomain($mokawwccycoiqeka, realpath("{$mkomwsiykqigmqca}\x2f{$egcekquqcyayskcm}"));
        goto wwwyuwogyaymawes;
        oesgammmiwwkggki:
        $aamkqmkgsaqmcuao = $this->sscegwueamckwmcy("\x70\x6c\165\147\x69\x6e\x5f\x6c\x6f\143\x61\154\x65", determine_locale(), $mokawwccycoiqeka);
        goto iwsckisegswykacc;
        ecyuccaigwwcquoq:
        ogmogeeogucogway:
        goto oesgammmiwwkggki;
        sgiyakiusoqeesgi:
        ymcwgkmiysmukacs:
        goto mmkoaqwkqwweiuco;
        aawsuekkqeecmsuu:
        if ($mkomwsiykqigmqca) {
            goto ymcwgkmiysmukacs;
        }
        goto uqckgkumgouqgcus;
        wwwyuwogyaymawes:
    }
    
    public function eegcqkwceasicmek() : ?string
    {
        goto egekcweywqwukqwq;
        egekcweywqwukqwq:
        $wissqeyocyayguas = $this->sscegwueamckwmcy("\147\145\x74\137\160\x6d\160\162\x5f\x70\x6c\x75\147\151\156\x5f\x61\x70\x69\x5f\153\145\x79", '');
        goto sgkksaaokaceycie;
        kogcmeyqyokimaqo:
        return $wissqeyocyayguas;
        goto iieiwkmcwkocasiq;
        ouaaoissmeyugeye:
        $wissqeyocyayguas = null;
        goto uyagiwoqkikiygme;
        uyagiwoqkikiygme:
        suigamkkgmwiaakg:
        goto kogcmeyqyokimaqo;
        sgkksaaokaceycie:
        if (is_string($wissqeyocyayguas)) {
            goto suigamkkgmwiaakg;
        }
        goto ouaaoissmeyugeye;
        iieiwkmcwkocasiq:
    }
}
