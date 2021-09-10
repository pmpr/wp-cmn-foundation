<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        gkqsiqmqqemqqwku:
        $this->kkcywkucqsawqqqo();
        goto wiokcqeyeaymgwae;
        ucyimwewacagqocw:
        $this->ycgwemyyomeiuake();
        goto gkqsiqmqqemqqwku;
        uiwmoaosqkcaoqce:
        Storage::kmsomwiqwmoyoeci($this, $miawkwqioaeasiig);
        goto ucyimwewacagqocw;
        wiokcqeyeaymgwae:
    }
    
    public final function gmiyqqaekqcsoime(string $ymqmyyeuycgmigyo = null) : bool
    {
        goto cewcuuesgeiiassq;
        koikauauameyygqc:
        $wksoawcgagcgoask = self::couwksyewgyeooqe();
        goto sksucoueuaiseguw;
        waoymaouskgiemes:
        $ggocakcisguuokai = ManipulateSetting::cmaecekuqkwmemms("\x43\117\115\120\x4f\x4e\105\116\x54\123\137\x41\x43\x54\111\126\105", 0);
        goto eqgiyaakqasaqymq;
        cewcuuesgeiiassq:
        if ($ymqmyyeuycgmigyo) {
            goto sueiceyeyweumeck;
        }
        goto koikauauameyygqc;
        qsowiceqiuciwiku:
        $ggocakcisguuokai = ManipulateArray::get($omkysikckkcieckq, self::STATUS) == self::ACTIVE;
        goto acmyiosessocqqsg;
        acmyiosessocqqsg:
        qsgigkoyesqiwoik:
        goto uqagmecggeymyekm;
        eqgiyaakqasaqymq:
        if (!(!$ggocakcisguuokai && $ymqmyyeuycgmigyo)) {
            goto qsgigkoyesqiwoik;
        }
        goto wsocaemogooskccw;
        uqagmecggeymyekm:
        return $ggocakcisguuokai;
        goto sawggikqsayoiscm;
        amieoocwaeecmywi:
        geyysuiiagkkeqam:
        goto uogamakkkoeumkuo;
        mqeycgqqaoguwkoa:
        $ymqmyyeuycgmigyo = $wksoawcgagcgoask->eeucessuemoysgqg();
        goto amieoocwaeecmywi;
        uogamakkkoeumkuo:
        sueiceyeyweumeck:
        goto waoymaouskgiemes;
        wsocaemogooskccw:
        $omkysikckkcieckq = DecoratorOption::get("\x63\157\x6d\x70\x6f\156\145\156\x74\x2d{$ymqmyyeuycgmigyo}", []);
        goto qsowiceqiuciwiku;
        sksucoueuaiseguw:
        if (!$wksoawcgagcgoask) {
            goto geyysuiiagkkeqam;
        }
        goto mqeycgqqaoguwkoa;
        sawggikqsayoiscm:
    }
    
    public final function omseesogaocascyo(string $ymqmyyeuycgmigyo, string $sqeykgyoooqysmca = self::PKG) : bool
    {
        $wksoawcgagcgoask = self::mqucqomkmisceawy("\160\x72\x5f\137{$sqeykgyoooqysmca}\x5f\x5f" . ManipulateString::ogimogiceeekegoi($ymqmyyeuycgmigyo));
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
        moqsoaomwaeykgei:
        if ($egkyssmuqcwaciya) {
            goto kegwaamwygcyissk;
        }
        goto uiiiomwgksaissoc;
        gwauyogieqaqueyu:
        gqewqqqogsygmicg:
        goto suycymikusukkyio;
        gksysyaaaaeasgmg:
        switch ($sqeykgyoooqysmca) {
            case "\160\x61\143\153\141\x67\145":
                $sqeykgyoooqysmca = self::PKG;
                goto sqkuescwoaugawem;
            case "\x63\x6f\x6d\x6d\157\156":
                $sqeykgyoooqysmca = self::CMN;
                goto sqkuescwoaugawem;
            case "\164\x68\x65\155\145":
                $sqeykgyoooqysmca = self::THM;
                goto sqkuescwoaugawem;
            default:
                $sqeykgyoooqysmca = self::CTM;
        }
        goto gwauyogieqaqueyu;
        ogksggygiqgccsgs:
        return $sqeykgyoooqysmca;
        goto ugwcquomeuagcuma;
        aqoumegesyioyyme:
        kegwaamwygcyissk:
        goto uwyayemiakeqosci;
        suycymikusukkyio:
        sqkuescwoaugawem:
        goto mkseiiygswgckuyi;
        ksiskiqygouakumc:
        $sqeykgyoooqysmca = strtolower(ManipulateArray::get($uomewyckeuqoqocu, 1));
        goto gksysyaaaaeasgmg;
        qyemiqcwoyeyeyiw:
        if (!$uomewyckeuqoqocu) {
            goto yqewwggigucqaiou;
        }
        goto ksiskiqygouakumc;
        uiiiomwgksaissoc:
        $egkyssmuqcwaciya = self::uqggkiomyiceyooa();
        goto aqoumegesyioyyme;
        uwyayemiakeqosci:
        $sqeykgyoooqysmca = '';
        goto sqswqiyeaauwaeui;
        mkseiiygswgckuyi:
        yqewwggigucqaiou:
        goto ogksggygiqgccsgs;
        sqswqiyeaauwaeui:
        $uomewyckeuqoqocu = explode("\134", $egkyssmuqcwaciya);
        goto qyemiqcwoyeyeyiw;
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
        uokamacqkkiqccku:
        $kcismmoemwgiymuq = $wksoawcgagcgoask->aiqioscoyukqgsgw();
        goto gmocwmmyommsqkky;
        wmyaoiwaoycgwucw:
        return $kcismmoemwgiymuq;
        goto ykuewakwswmuaoqq;
        wccqiqisegqowemu:
        $wksoawcgagcgoask = self::couwksyewgyeooqe($egkyssmuqcwaciya);
        goto pkueqgmoqweqmssi;
        gmocwmmyommsqkky:
        awysggkgocqkkmaq:
        goto wmyaoiwaoycgwucw;
        pkueqgmoqweqmssi:
        $kcismmoemwgiymuq = '';
        goto niiosgywwiykokkq;
        niiosgywwiykokkq:
        if (!$wksoawcgagcgoask) {
            goto awysggkgocqkkmaq;
        }
        goto uokamacqkkiqccku;
        ykuewakwswmuaoqq:
    }
    
    public static final function akuociswqmoigkas($egkyssmuqcwaciya = null) : ?string
    {
        goto wuqqmyecwsmegamk;
        cueyocuoyqoygsqk:
        giykkoouiosqeuqo:
        goto oieimksmyyeyosik;
        iycouaqccscasucc:
        $uomewyckeuqoqocu = explode("\134", $egkyssmuqcwaciya);
        goto uicoowkoscsuucui;
        wywaockmiweeueom:
        $egkyssmuqcwaciya = self::uqggkiomyiceyooa();
        goto cueyocuoyqoygsqk;
        wuqqmyecwsmegamk:
        if ($egkyssmuqcwaciya) {
            goto giykkoouiosqeuqo;
        }
        goto wywaockmiweeueom;
        uicoowkoscsuucui:
        $wksoawcgagcgoask = ManipulateArray::get($uomewyckeuqoqocu, 2);
        goto iguyoiwiuikugekq;
        qqqecycaqiuckqge:
        if ($sqeykgyoooqysmca) {
            goto ogsmeaeskmkauwwy;
        }
        goto uqaymuykyqsuayso;
        uqaymuykyqsuayso:
        wp_die("\x63\141\x6e\40\x6e\157\x74\40\x72\145\x67\151\x73\x74\x65\162\40\x63\x6f\155\x70\157\156\x65\156\x74\72\x20" . $egkyssmuqcwaciya);
        goto imowaciskmueoogo;
        imowaciskmueoogo:
        ogsmeaeskmkauwwy:
        goto iycouaqccscasucc;
        oieimksmyyeyosik:
        $sqeykgyoooqysmca = self::yegwayqakokyuiok($egkyssmuqcwaciya);
        goto qqqecycaqiuckqge;
        iguyoiwiuikugekq:
        return ManipulateString::ogimogiceeekegoi("\160\x72\137\x5f{$sqeykgyoooqysmca}\x5f\x5f{$wksoawcgagcgoask}");
        goto weeosewyimcickoi;
        weeosewyimcickoi:
    }
    
    public static function qmkyymgaecsmakqq($couygeouymagssgw = null) : ?Component
    {
        goto somsmcmoyaiiwuyk;
        wugqaoggyqusmaoa:
        return $ksiyqouuaoymsycg;
        goto qamicqyikayyacok;
        iuukukcykqykisaa:
        foreach ($mqkkuqaimswumeww as $wksoawcgagcgoask) {
            goto aaaicwymgocaseis;
            moequykwukcqmiga:
            goto iuwcskswgaeuqumi;
            goto mgkwqmyqgswasocy;
            mgkwqmyqgswasocy:
            syoyogomscqcsoyk:
            goto iuimkcgcsyemcuei;
            iuimkcgcsyemcuei:
            ggaqgegasaaiuacg:
            goto qmukeceewgmekoae;
            aycyouisaiokysqw:
            $ksiyqouuaoymsycg = $wksoawcgagcgoask;
            goto moequykwukcqmiga;
            aaaicwymgocaseis:
            if (!($wksoawcgagcgoask->ikeqsmumgwwuqmkw() === $couygeouymagssgw)) {
                goto syoyogomscqcsoyk;
            }
            goto aycyouisaiokysqw;
            qmukeceewgmekoae:
        }
        goto aaoekkysuimcamyu;
        somsmcmoyaiiwuyk:
        $ksiyqouuaoymsycg = null;
        goto msqmakqaiawgqeau;
        msqmakqaiawgqeau:
        $mqkkuqaimswumeww = self::isyyiqwsgyieiqgu();
        goto iuukukcykqykisaa;
        aaoekkysuimcamyu:
        iuwcskswgaeuqumi:
        goto wugqaoggyqusmaoa;
        qamicqyikayyacok:
    }
    
    public static function mqucqomkmisceawy(string $ymqmyyeuycgmigyo) : ?Component
    {
        return ManipulateArray::get(self::isyyiqwsgyieiqgu(), $ymqmyyeuycgmigyo);
    }
    
    public static final function cmewgsgomuwkkoou($egkyssmuqcwaciya = null) : ?string
    {
        goto kuwwysummgiakgwo;
        ggiiuoqggyauekgs:
        $mkomwsiykqigmqca = ManipulateFile::cmaecekuqkwmemms(strtoupper($ymqmyyeuycgmigyo) . self::__ROOT__PATH, null);
        goto yyeiqoiuweqikyyq;
        qgaoikokgokgqaqi:
        return $mkomwsiykqigmqca;
        goto ikqwewkaooqqcwmw;
        qqyqygkmkeeuaiss:
        oasqosiqcsiyyaye:
        goto myccwweewiwguqaa;
        myccwweewiwguqaa:
        $mkomwsiykqigmqca = $wksoawcgagcgoask->ikeqsmumgwwuqmkw();
        goto cqokwokkmcecokwi;
        kuusyaqguycoyiia:
        if ($wksoawcgagcgoask) {
            goto oasqosiqcsiyyaye;
        }
        goto imiqucuaiyoaeaka;
        yyeiqoiuweqikyyq:
        goto oaymmkagwocukmyq;
        goto qqyqygkmkeeuaiss;
        kuwwysummgiakgwo:
        $wksoawcgagcgoask = self::couwksyewgyeooqe($egkyssmuqcwaciya);
        goto kuusyaqguycoyiia;
        imiqucuaiyoaeaka:
        $ymqmyyeuycgmigyo = self::akuociswqmoigkas($egkyssmuqcwaciya);
        goto ggiiuoqggyauekgs;
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
        auycewyimycgsusg:
        if ($mokawwccycoiqeka) {
            goto ogmogeeogucogway;
        }
        goto eukmaswisycyiwik;
        oesgammmiwwkggki:
        $aamkqmkgsaqmcuao = $this->sscegwueamckwmcy("\x70\154\x75\x67\x69\156\137\x6c\157\143\141\154\145", determine_locale(), $mokawwccycoiqeka);
        goto iwsckisegswykacc;
        aawsuekkqeecmsuu:
        if ($mkomwsiykqigmqca) {
            goto ymcwgkmiysmukacs;
        }
        goto uqckgkumgouqgcus;
        sgiyakiusoqeesgi:
        ymcwgkmiysmukacs:
        goto mmkoaqwkqwweiuco;
        mmkoaqwkqwweiuco:
        
        return load_textdomain($mokawwccycoiqeka, realpath("{$mkomwsiykqigmqca}\57{$egcekquqcyayskcm}"));
        goto wwwyuwogyaymawes;
        ecyuccaigwwcquoq:
        ogmogeeogucogway:
        goto oesgammmiwwkggki;
        eukmaswisycyiwik:
        $wksoawcgagcgoask = self::couwksyewgyeooqe();
        goto ysgkwckuuwmeqmim;
        wiakkcgyggaeaeoa:
        oyqwymwomuameswa:
        goto ecyuccaigwwcquoq;
        iwsckisegswykacc:
        $egcekquqcyayskcm = "{$aamkqmkgsaqmcuao}\56\155\x6f";
        goto aawsuekkqeecmsuu;
        uqckgkumgouqgcus:
        $mkomwsiykqigmqca = $this->cmewgsgomuwkkoou() . "\57\164\x72\x61\156\163\154\x61\164\x69\x6f\156";
        goto sgiyakiusoqeesgi;
        ysgkwckuuwmeqmim:
        if (!$wksoawcgagcgoask) {
            goto oyqwymwomuameswa;
        }
        goto mokwmqowycmwwkem;
        wwwyuwogyaymawes:
    }
    
    public function eegcqkwceasicmek() : ?string
    {
        goto egekcweywqwukqwq;
        kogcmeyqyokimaqo:
        return $wissqeyocyayguas;
        goto iieiwkmcwkocasiq;
        egekcweywqwukqwq:
        $wissqeyocyayguas = $this->sscegwueamckwmcy("\147\x65\x74\x5f\x70\155\160\x72\137\160\x6c\165\147\x69\156\x5f\141\x70\x69\x5f\153\145\x79", '');
        goto sgkksaaokaceycie;
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
