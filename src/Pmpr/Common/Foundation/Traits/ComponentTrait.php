<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        goto coqmamquawyaeyae;
        coqmamquawyaeyae:
        Storage::kmsomwiqwmoyoeci($this, $miawkwqioaeasiig);
        goto ymsiicmasqigsymw;
        yiyuuyewoweiaokc:
        $this->kkcywkucqsawqqqo();
        goto uiwmoaosqkcaoqce;
        ymsiicmasqigsymw:
        $this->ycgwemyyomeiuake();
        goto yiyuuyewoweiaokc;
        uiwmoaosqkcaoqce:
    }
    
    public final function gmiyqqaekqcsoime(string $ymqmyyeuycgmigyo = null) : bool
    {
        goto geyysuiiagkkeqam;
        sksucoueuaiseguw:
        gkqsiqmqqemqqwku:
        goto mqeycgqqaoguwkoa;
        wsocaemogooskccw:
        return $ggocakcisguuokai;
        goto qsowiceqiuciwiku;
        eqgiyaakqasaqymq:
        wiokcqeyeaymgwae:
        goto wsocaemogooskccw;
        cewcuuesgeiiassq:
        $ymqmyyeuycgmigyo = $wksoawcgagcgoask->eeucessuemoysgqg();
        goto koikauauameyygqc;
        uogamakkkoeumkuo:
        $omkysikckkcieckq = DecoratorOption::get("\143\157\155\160\x6f\156\x65\x6e\x74\x2d{$ymqmyyeuycgmigyo}", []);
        goto waoymaouskgiemes;
        geyysuiiagkkeqam:
        if ($ymqmyyeuycgmigyo) {
            goto gkqsiqmqqemqqwku;
        }
        goto sueiceyeyweumeck;
        sueiceyeyweumeck:
        $wksoawcgagcgoask = self::couwksyewgyeooqe();
        goto qsgigkoyesqiwoik;
        waoymaouskgiemes:
        $ggocakcisguuokai = ManipulateArray::get($omkysikckkcieckq, self::STATUS) == self::ACTIVE;
        goto eqgiyaakqasaqymq;
        amieoocwaeecmywi:
        if (!(!$ggocakcisguuokai && $ymqmyyeuycgmigyo)) {
            goto wiokcqeyeaymgwae;
        }
        goto uogamakkkoeumkuo;
        koikauauameyygqc:
        ucyimwewacagqocw:
        goto sksucoueuaiseguw;
        qsgigkoyesqiwoik:
        if (!$wksoawcgagcgoask) {
            goto ucyimwewacagqocw;
        }
        goto cewcuuesgeiiassq;
        mqeycgqqaoguwkoa:
        $ggocakcisguuokai = ManipulateSetting::cmaecekuqkwmemms("\103\x4f\115\x50\117\x4e\x45\x4e\x54\x53\137\101\103\124\111\126\105", 0);
        goto amieoocwaeecmywi;
        qsowiceqiuciwiku:
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
        goto sqkuescwoaugawem;
        gksysyaaaaeasgmg:
        kegwaamwygcyissk:
        goto gwauyogieqaqueyu;
        uiiiomwgksaissoc:
        $uomewyckeuqoqocu = explode("\134", $egkyssmuqcwaciya);
        goto aqoumegesyioyyme;
        uwyayemiakeqosci:
        $sqeykgyoooqysmca = strtolower(ManipulateArray::get($uomewyckeuqoqocu, 1));
        goto sqswqiyeaauwaeui;
        sqswqiyeaauwaeui:
        switch ($sqeykgyoooqysmca) {
            case "\x70\x61\x63\153\x61\x67\x65":
                $sqeykgyoooqysmca = self::PKG;
                goto uqagmecggeymyekm;
            case "\x63\157\155\x6d\157\156":
                $sqeykgyoooqysmca = self::CMN;
                goto uqagmecggeymyekm;
            case "\x74\150\x65\155\145":
                $sqeykgyoooqysmca = self::THM;
                goto uqagmecggeymyekm;
            default:
                $sqeykgyoooqysmca = self::CTM;
        }
        goto qyemiqcwoyeyeyiw;
        qyemiqcwoyeyeyiw:
        sawggikqsayoiscm:
        goto ksiskiqygouakumc;
        gwauyogieqaqueyu:
        return $sqeykgyoooqysmca;
        goto suycymikusukkyio;
        ksiskiqygouakumc:
        uqagmecggeymyekm:
        goto gksysyaaaaeasgmg;
        gqewqqqogsygmicg:
        $egkyssmuqcwaciya = self::uqggkiomyiceyooa();
        goto yqewwggigucqaiou;
        yqewwggigucqaiou:
        acmyiosessocqqsg:
        goto moqsoaomwaeykgei;
        sqkuescwoaugawem:
        if ($egkyssmuqcwaciya) {
            goto acmyiosessocqqsg;
        }
        goto gqewqqqogsygmicg;
        aqoumegesyioyyme:
        if (!$uomewyckeuqoqocu) {
            goto kegwaamwygcyissk;
        }
        goto uwyayemiakeqosci;
        moqsoaomwaeykgei:
        $sqeykgyoooqysmca = '';
        goto uiiiomwgksaissoc;
        suycymikusukkyio:
    }
    
    public static function couwksyewgyeooqe($egkyssmuqcwaciya = null) : ?Component
    {
        $ymqmyyeuycgmigyo = self::akuociswqmoigkas($egkyssmuqcwaciya);
        return Storage::cqusmgskowmesgcg($ymqmyyeuycgmigyo);
    }
    
    public static function aswwewigcsoawwqk($egkyssmuqcwaciya = null) : ?string
    {
        goto ogksggygiqgccsgs;
        niiosgywwiykokkq:
        return $kcismmoemwgiymuq;
        goto uokamacqkkiqccku;
        wccqiqisegqowemu:
        $kcismmoemwgiymuq = $wksoawcgagcgoask->aiqioscoyukqgsgw();
        goto pkueqgmoqweqmssi;
        ogksggygiqgccsgs:
        $wksoawcgagcgoask = self::couwksyewgyeooqe($egkyssmuqcwaciya);
        goto ugwcquomeuagcuma;
        awysggkgocqkkmaq:
        if (!$wksoawcgagcgoask) {
            goto mkseiiygswgckuyi;
        }
        goto wccqiqisegqowemu;
        ugwcquomeuagcuma:
        $kcismmoemwgiymuq = '';
        goto awysggkgocqkkmaq;
        pkueqgmoqweqmssi:
        mkseiiygswgckuyi:
        goto niiosgywwiykokkq;
        uokamacqkkiqccku:
    }
    
    public static final function akuociswqmoigkas($egkyssmuqcwaciya = null) : ?string
    {
        goto ykuewakwswmuaoqq;
        giykkoouiosqeuqo:
        $egkyssmuqcwaciya = self::uqggkiomyiceyooa();
        goto ogsmeaeskmkauwwy;
        oieimksmyyeyosik:
        wmyaoiwaoycgwucw:
        goto qqqecycaqiuckqge;
        ykuewakwswmuaoqq:
        if ($egkyssmuqcwaciya) {
            goto gmocwmmyommsqkky;
        }
        goto giykkoouiosqeuqo;
        ogsmeaeskmkauwwy:
        gmocwmmyommsqkky:
        goto wuqqmyecwsmegamk;
        imowaciskmueoogo:
        return ManipulateString::ogimogiceeekegoi("\x70\x72\x5f\x5f{$sqeykgyoooqysmca}\137\137{$wksoawcgagcgoask}");
        goto iycouaqccscasucc;
        cueyocuoyqoygsqk:
        wp_die("\x63\x61\x6e\x20\x6e\157\x74\x20\162\x65\x67\151\x73\x74\145\162\x20\x63\x6f\x6d\160\157\156\145\x6e\x74\72\x20" . $egkyssmuqcwaciya);
        goto oieimksmyyeyosik;
        wywaockmiweeueom:
        if ($sqeykgyoooqysmca) {
            goto wmyaoiwaoycgwucw;
        }
        goto cueyocuoyqoygsqk;
        uqaymuykyqsuayso:
        $wksoawcgagcgoask = ManipulateArray::get($uomewyckeuqoqocu, 2);
        goto imowaciskmueoogo;
        qqqecycaqiuckqge:
        $uomewyckeuqoqocu = explode("\134", $egkyssmuqcwaciya);
        goto uqaymuykyqsuayso;
        wuqqmyecwsmegamk:
        $sqeykgyoooqysmca = self::yegwayqakokyuiok($egkyssmuqcwaciya);
        goto wywaockmiweeueom;
        iycouaqccscasucc:
    }
    
    public static function qmkyymgaecsmakqq($couygeouymagssgw = null) : ?Component
    {
        goto mgkwqmyqgswasocy;
        somsmcmoyaiiwuyk:
        uicoowkoscsuucui:
        goto msqmakqaiawgqeau;
        iuimkcgcsyemcuei:
        $mqkkuqaimswumeww = self::isyyiqwsgyieiqgu();
        goto qmukeceewgmekoae;
        qmukeceewgmekoae:
        foreach ($mqkkuqaimswumeww as $wksoawcgagcgoask) {
            goto iuwcskswgaeuqumi;
            aaaicwymgocaseis:
            weeosewyimcickoi:
            goto aycyouisaiokysqw;
            ggaqgegasaaiuacg:
            $ksiyqouuaoymsycg = $wksoawcgagcgoask;
            goto syoyogomscqcsoyk;
            iuwcskswgaeuqumi:
            if (!($wksoawcgagcgoask->ikeqsmumgwwuqmkw() === $couygeouymagssgw)) {
                goto weeosewyimcickoi;
            }
            goto ggaqgegasaaiuacg;
            syoyogomscqcsoyk:
            goto uicoowkoscsuucui;
            goto aaaicwymgocaseis;
            aycyouisaiokysqw:
            iguyoiwiuikugekq:
            goto moequykwukcqmiga;
            moequykwukcqmiga:
        }
        goto somsmcmoyaiiwuyk;
        msqmakqaiawgqeau:
        return $ksiyqouuaoymsycg;
        goto iuukukcykqykisaa;
        mgkwqmyqgswasocy:
        $ksiyqouuaoymsycg = null;
        goto iuimkcgcsyemcuei;
        iuukukcykqykisaa:
    }
    
    public static function mqucqomkmisceawy(string $ymqmyyeuycgmigyo) : ?Component
    {
        return ManipulateArray::get(self::isyyiqwsgyieiqgu(), $ymqmyyeuycgmigyo);
    }
    
    public static final function cmewgsgomuwkkoou($egkyssmuqcwaciya = null) : ?string
    {
        goto qamicqyikayyacok;
        oasqosiqcsiyyaye:
        if ($wksoawcgagcgoask) {
            goto aaoekkysuimcamyu;
        }
        goto oaymmkagwocukmyq;
        yyeiqoiuweqikyyq:
        wugqaoggyqusmaoa:
        goto qqyqygkmkeeuaiss;
        ggiiuoqggyauekgs:
        $mkomwsiykqigmqca = $wksoawcgagcgoask->ikeqsmumgwwuqmkw();
        goto yyeiqoiuweqikyyq;
        imiqucuaiyoaeaka:
        aaoekkysuimcamyu:
        goto ggiiuoqggyauekgs;
        kuwwysummgiakgwo:
        $mkomwsiykqigmqca = ManipulateFile::cmaecekuqkwmemms(strtoupper($ymqmyyeuycgmigyo) . self::__ROOT__PATH, null);
        goto kuusyaqguycoyiia;
        oaymmkagwocukmyq:
        $ymqmyyeuycgmigyo = self::akuociswqmoigkas($egkyssmuqcwaciya);
        goto kuwwysummgiakgwo;
        kuusyaqguycoyiia:
        goto wugqaoggyqusmaoa;
        goto imiqucuaiyoaeaka;
        qqyqygkmkeeuaiss:
        return $mkomwsiykqigmqca;
        goto myccwweewiwguqaa;
        qamicqyikayyacok:
        $wksoawcgagcgoask = self::couwksyewgyeooqe($egkyssmuqcwaciya);
        goto oasqosiqcsiyyaye;
        myccwweewiwguqaa:
    }
    
    private final function ycgwemyyomeiuake(string $mokawwccycoiqeka = null, string $mkomwsiykqigmqca = null) : bool
    {
        goto oyqwymwomuameswa;
        aawsuekkqeecmsuu:
        
        return load_textdomain($mokawwccycoiqeka, realpath("{$mkomwsiykqigmqca}\x2f{$egcekquqcyayskcm}"));
        goto uqckgkumgouqgcus;
        ogmogeeogucogway:
        $wksoawcgagcgoask = self::couwksyewgyeooqe();
        goto ymcwgkmiysmukacs;
        wiakkcgyggaeaeoa:
        $egcekquqcyayskcm = "{$aamkqmkgsaqmcuao}\x2e\155\x6f";
        goto ecyuccaigwwcquoq;
        iwsckisegswykacc:
        ikqwewkaooqqcwmw:
        goto aawsuekkqeecmsuu;
        auycewyimycgsusg:
        $mokawwccycoiqeka = $wksoawcgagcgoask->wwawisckiqeueoua();
        goto eukmaswisycyiwik;
        mokwmqowycmwwkem:
        $aamkqmkgsaqmcuao = $this->sscegwueamckwmcy("\160\154\x75\147\151\x6e\137\x6c\x6f\x63\141\154\145", determine_locale(), $mokawwccycoiqeka);
        goto wiakkcgyggaeaeoa;
        oesgammmiwwkggki:
        $mkomwsiykqigmqca = $this->cmewgsgomuwkkoou() . "\x2f\x74\x72\141\156\163\154\141\164\151\157\156";
        goto iwsckisegswykacc;
        oyqwymwomuameswa:
        if ($mokawwccycoiqeka) {
            goto qgaoikokgokgqaqi;
        }
        goto ogmogeeogucogway;
        eukmaswisycyiwik:
        cqokwokkmcecokwi:
        goto ysgkwckuuwmeqmim;
        ysgkwckuuwmeqmim:
        qgaoikokgokgqaqi:
        goto mokwmqowycmwwkem;
        ecyuccaigwwcquoq:
        if ($mkomwsiykqigmqca) {
            goto ikqwewkaooqqcwmw;
        }
        goto oesgammmiwwkggki;
        ymcwgkmiysmukacs:
        if (!$wksoawcgagcgoask) {
            goto cqokwokkmcecokwi;
        }
        goto auycewyimycgsusg;
        uqckgkumgouqgcus:
    }
    
    public function eegcqkwceasicmek() : ?string
    {
        goto mmkoaqwkqwweiuco;
        mmkoaqwkqwweiuco:
        $wissqeyocyayguas = $this->sscegwueamckwmcy("\147\145\164\137\160\155\x70\x72\x5f\160\x6c\165\x67\151\x6e\137\x61\160\x69\137\x6b\x65\x79", '');
        goto wwwyuwogyaymawes;
        egekcweywqwukqwq:
        sgiyakiusoqeesgi:
        goto sgkksaaokaceycie;
        sgkksaaokaceycie:
        return $wissqeyocyayguas;
        goto ouaaoissmeyugeye;
        wwwyuwogyaymawes:
        if (is_string($wissqeyocyayguas)) {
            goto sgiyakiusoqeesgi;
        }
        goto suigamkkgmwiaakg;
        suigamkkgmwiaakg:
        $wissqeyocyayguas = null;
        goto egekcweywqwukqwq;
        ouaaoissmeyugeye:
    }
}
