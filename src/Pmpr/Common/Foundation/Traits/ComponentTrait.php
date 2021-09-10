<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        gkqsiqmqqemqqwku:
        $this->kkcywkucqsawqqqo();
        goto wiokcqeyeaymgwae;
        uiwmoaosqkcaoqce:
        Storage::kmsomwiqwmoyoeci($this, $miawkwqioaeasiig);
        goto ucyimwewacagqocw;
        wiokcqeyeaymgwae:
    }
    
    public final function gmiyqqaekqcsoime(string $ymqmyyeuycgmigyo = null) : bool
    {
        goto cewcuuesgeiiassq;
        cewcuuesgeiiassq:
        if ($ymqmyyeuycgmigyo) {
            goto sueiceyeyweumeck;
        }
        goto koikauauameyygqc;
        qsowiceqiuciwiku:
        $ggocakcisguuokai = ManipulateArray::get($omkysikckkcieckq, self::STATUS) == self::ACTIVE;
        goto acmyiosessocqqsg;
        sksucoueuaiseguw:
        if (!$wksoawcgagcgoask) {
            goto geyysuiiagkkeqam;
        }
        goto mqeycgqqaoguwkoa;
        amieoocwaeecmywi:
        geyysuiiagkkeqam:
        goto uogamakkkoeumkuo;
        mqeycgqqaoguwkoa:
        $ymqmyyeuycgmigyo = $wksoawcgagcgoask->eeucessuemoysgqg();
        goto amieoocwaeecmywi;
        koikauauameyygqc:
        $wksoawcgagcgoask = self::couwksyewgyeooqe();
        goto sksucoueuaiseguw;
        acmyiosessocqqsg:
        qsgigkoyesqiwoik:
        goto uqagmecggeymyekm;
        wsocaemogooskccw:
        $omkysikckkcieckq = DecoratorOption::get("\x63\157\155\x70\x6f\156\x65\156\164\x2d{$ymqmyyeuycgmigyo}", []);
        goto qsowiceqiuciwiku;
        uogamakkkoeumkuo:
        sueiceyeyweumeck:
        goto waoymaouskgiemes;
        uqagmecggeymyekm:
        return $ggocakcisguuokai;
        goto sawggikqsayoiscm;
        waoymaouskgiemes:
        $ggocakcisguuokai = ManipulateSetting::cmaecekuqkwmemms("\103\117\x4d\120\x4f\116\x45\x4e\124\x53\137\101\x43\x54\x49\x56\x45", 0);
        goto eqgiyaakqasaqymq;
        eqgiyaakqasaqymq:
        if (!(!$ggocakcisguuokai && $ymqmyyeuycgmigyo)) {
            goto qsgigkoyesqiwoik;
        }
        goto wsocaemogooskccw;
        sawggikqsayoiscm:
    }
    
    public final function omseesogaocascyo(string $ymqmyyeuycgmigyo, string $sqeykgyoooqysmca = self::PKG) : bool
    {
        $wksoawcgagcgoask = self::mqucqomkmisceawy("\160\x72\137\137{$sqeykgyoooqysmca}\x5f\137" . ManipulateString::ogimogiceeekegoi($ymqmyyeuycgmigyo));
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
        mkseiiygswgckuyi:
        yqewwggigucqaiou:
        goto ogksggygiqgccsgs;
        qyemiqcwoyeyeyiw:
        if (!$uomewyckeuqoqocu) {
            goto yqewwggigucqaiou;
        }
        goto ksiskiqygouakumc;
        ogksggygiqgccsgs:
        return $sqeykgyoooqysmca;
        goto ugwcquomeuagcuma;
        gwauyogieqaqueyu:
        gqewqqqogsygmicg:
        goto suycymikusukkyio;
        suycymikusukkyio:
        sqkuescwoaugawem:
        goto mkseiiygswgckuyi;
        uwyayemiakeqosci:
        $sqeykgyoooqysmca = '';
        goto sqswqiyeaauwaeui;
        sqswqiyeaauwaeui:
        $uomewyckeuqoqocu = explode("\x5c", $egkyssmuqcwaciya);
        goto qyemiqcwoyeyeyiw;
        moqsoaomwaeykgei:
        if ($egkyssmuqcwaciya) {
            goto kegwaamwygcyissk;
        }
        goto uiiiomwgksaissoc;
        uiiiomwgksaissoc:
        $egkyssmuqcwaciya = self::uqggkiomyiceyooa();
        goto aqoumegesyioyyme;
        ksiskiqygouakumc:
        $sqeykgyoooqysmca = strtolower(ManipulateArray::get($uomewyckeuqoqocu, 1));
        goto gksysyaaaaeasgmg;
        aqoumegesyioyyme:
        kegwaamwygcyissk:
        goto uwyayemiakeqosci;
        gksysyaaaaeasgmg:
        switch ($sqeykgyoooqysmca) {
            case "\x70\x61\143\153\x61\147\x65":
                $sqeykgyoooqysmca = self::PKG;
                goto sqkuescwoaugawem;
            case "\143\x6f\x6d\155\x6f\x6e":
                $sqeykgyoooqysmca = self::CMN;
                goto sqkuescwoaugawem;
            case "\x74\x68\x65\155\x65":
                $sqeykgyoooqysmca = self::THM;
                goto sqkuescwoaugawem;
            default:
                $sqeykgyoooqysmca = self::CTM;
        }
        goto gwauyogieqaqueyu;
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
        gmocwmmyommsqkky:
        awysggkgocqkkmaq:
        goto wmyaoiwaoycgwucw;
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
        wccqiqisegqowemu:
        $wksoawcgagcgoask = self::couwksyewgyeooqe($egkyssmuqcwaciya);
        goto pkueqgmoqweqmssi;
        ykuewakwswmuaoqq:
    }
    
    public static final function akuociswqmoigkas($egkyssmuqcwaciya = null) : ?string
    {
        goto wuqqmyecwsmegamk;
        qqqecycaqiuckqge:
        if ($sqeykgyoooqysmca) {
            goto ogsmeaeskmkauwwy;
        }
        goto uqaymuykyqsuayso;
        wuqqmyecwsmegamk:
        if ($egkyssmuqcwaciya) {
            goto giykkoouiosqeuqo;
        }
        goto wywaockmiweeueom;
        iycouaqccscasucc:
        $uomewyckeuqoqocu = explode("\x5c", $egkyssmuqcwaciya);
        goto uicoowkoscsuucui;
        uqaymuykyqsuayso:
        wp_die("\143\141\156\40\156\157\x74\40\x72\x65\147\151\x73\164\145\x72\x20\x63\x6f\x6d\x70\157\x6e\145\x6e\164\x3a\40" . $egkyssmuqcwaciya);
        goto imowaciskmueoogo;
        wywaockmiweeueom:
        $egkyssmuqcwaciya = self::uqggkiomyiceyooa();
        goto cueyocuoyqoygsqk;
        cueyocuoyqoygsqk:
        giykkoouiosqeuqo:
        goto oieimksmyyeyosik;
        oieimksmyyeyosik:
        $sqeykgyoooqysmca = self::yegwayqakokyuiok($egkyssmuqcwaciya);
        goto qqqecycaqiuckqge;
        uicoowkoscsuucui:
        $wksoawcgagcgoask = ManipulateArray::get($uomewyckeuqoqocu, 2);
        goto iguyoiwiuikugekq;
        imowaciskmueoogo:
        ogsmeaeskmkauwwy:
        goto iycouaqccscasucc;
        iguyoiwiuikugekq:
        return ManipulateString::ogimogiceeekegoi("\160\x72\137\x5f{$sqeykgyoooqysmca}\x5f\x5f{$wksoawcgagcgoask}");
        goto weeosewyimcickoi;
        weeosewyimcickoi:
    }
    
    public static function qmkyymgaecsmakqq($couygeouymagssgw = null) : ?Component
    {
        goto somsmcmoyaiiwuyk;
        msqmakqaiawgqeau:
        $mqkkuqaimswumeww = self::isyyiqwsgyieiqgu();
        goto iuukukcykqykisaa;
        aaoekkysuimcamyu:
        iuwcskswgaeuqumi:
        goto wugqaoggyqusmaoa;
        iuukukcykqykisaa:
        foreach ($mqkkuqaimswumeww as $wksoawcgagcgoask) {
            goto aaaicwymgocaseis;
            aaaicwymgocaseis:
            if (!($wksoawcgagcgoask->ikeqsmumgwwuqmkw() === $couygeouymagssgw)) {
                goto syoyogomscqcsoyk;
            }
            goto aycyouisaiokysqw;
            mgkwqmyqgswasocy:
            syoyogomscqcsoyk:
            goto iuimkcgcsyemcuei;
            aycyouisaiokysqw:
            $ksiyqouuaoymsycg = $wksoawcgagcgoask;
            goto moequykwukcqmiga;
            iuimkcgcsyemcuei:
            ggaqgegasaaiuacg:
            goto qmukeceewgmekoae;
            moequykwukcqmiga:
            goto iuwcskswgaeuqumi;
            goto mgkwqmyqgswasocy;
            qmukeceewgmekoae:
        }
        goto aaoekkysuimcamyu;
        somsmcmoyaiiwuyk:
        $ksiyqouuaoymsycg = null;
        goto msqmakqaiawgqeau;
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
        cqokwokkmcecokwi:
        oaymmkagwocukmyq:
        goto qgaoikokgokgqaqi;
        yyeiqoiuweqikyyq:
        goto oaymmkagwocukmyq;
        goto qqyqygkmkeeuaiss;
        kuwwysummgiakgwo:
        $wksoawcgagcgoask = self::couwksyewgyeooqe($egkyssmuqcwaciya);
        goto kuusyaqguycoyiia;
        qgaoikokgokgqaqi:
        return $mkomwsiykqigmqca;
        goto ikqwewkaooqqcwmw;
        ggiiuoqggyauekgs:
        $mkomwsiykqigmqca = ManipulateFile::cmaecekuqkwmemms(strtoupper($ymqmyyeuycgmigyo) . self::__ROOT__PATH, null);
        goto yyeiqoiuweqikyyq;
        kuusyaqguycoyiia:
        if ($wksoawcgagcgoask) {
            goto oasqosiqcsiyyaye;
        }
        goto imiqucuaiyoaeaka;
        imiqucuaiyoaeaka:
        $ymqmyyeuycgmigyo = self::akuociswqmoigkas($egkyssmuqcwaciya);
        goto ggiiuoqggyauekgs;
        myccwweewiwguqaa:
        $mkomwsiykqigmqca = $wksoawcgagcgoask->ikeqsmumgwwuqmkw();
        goto cqokwokkmcecokwi;
        qqyqygkmkeeuaiss:
        oasqosiqcsiyyaye:
        goto myccwweewiwguqaa;
        ikqwewkaooqqcwmw:
    }
    
    private final function ycgwemyyomeiuake(string $mokawwccycoiqeka = null, string $mkomwsiykqigmqca = null) : bool
    {
        goto auycewyimycgsusg;
        ysgkwckuuwmeqmim:
        if (!$wksoawcgagcgoask) {
            goto oyqwymwomuameswa;
        }
        goto mokwmqowycmwwkem;
        uqckgkumgouqgcus:
        $mkomwsiykqigmqca = $this->cmewgsgomuwkkoou() . "\57\x74\162\141\156\x73\154\141\x74\x69\x6f\x6e";
        goto sgiyakiusoqeesgi;
        auycewyimycgsusg:
        if ($mokawwccycoiqeka) {
            goto ogmogeeogucogway;
        }
        goto eukmaswisycyiwik;
        ecyuccaigwwcquoq:
        ogmogeeogucogway:
        goto oesgammmiwwkggki;
        aawsuekkqeecmsuu:
        if ($mkomwsiykqigmqca) {
            goto ymcwgkmiysmukacs;
        }
        goto uqckgkumgouqgcus;
        oesgammmiwwkggki:
        $aamkqmkgsaqmcuao = $this->sscegwueamckwmcy("\x70\x6c\165\147\x69\156\137\x6c\x6f\143\141\154\145", determine_locale(), $mokawwccycoiqeka);
        goto iwsckisegswykacc;
        eukmaswisycyiwik:
        $wksoawcgagcgoask = self::couwksyewgyeooqe();
        goto ysgkwckuuwmeqmim;
        wiakkcgyggaeaeoa:
        oyqwymwomuameswa:
        goto ecyuccaigwwcquoq;
        mmkoaqwkqwweiuco:
        
        return load_textdomain($mokawwccycoiqeka, realpath("{$mkomwsiykqigmqca}\57{$egcekquqcyayskcm}"));
        goto wwwyuwogyaymawes;
        iwsckisegswykacc:
        $egcekquqcyayskcm = "{$aamkqmkgsaqmcuao}\x2e\x6d\157";
        goto aawsuekkqeecmsuu;
        sgiyakiusoqeesgi:
        ymcwgkmiysmukacs:
        goto mmkoaqwkqwweiuco;
        mokwmqowycmwwkem:
        $mokawwccycoiqeka = $wksoawcgagcgoask->wwawisckiqeueoua();
        goto wiakkcgyggaeaeoa;
        wwwyuwogyaymawes:
    }
    
    public function eegcqkwceasicmek() : ?string
    {
        goto egekcweywqwukqwq;
        uyagiwoqkikiygme:
        suigamkkgmwiaakg:
        goto kogcmeyqyokimaqo;
        sgkksaaokaceycie:
        if (is_string($wissqeyocyayguas)) {
            goto suigamkkgmwiaakg;
        }
        goto ouaaoissmeyugeye;
        kogcmeyqyokimaqo:
        return $wissqeyocyayguas;
        goto iieiwkmcwkocasiq;
        ouaaoissmeyugeye:
        $wissqeyocyayguas = null;
        goto uyagiwoqkikiygme;
        egekcweywqwukqwq:
        $wissqeyocyayguas = $this->sscegwueamckwmcy("\x67\x65\x74\137\160\x6d\160\162\137\160\154\165\x67\151\x6e\137\141\160\151\137\x6b\145\x79", '');
        goto sgkksaaokaceycie;
        iieiwkmcwkocasiq:
    }
}
