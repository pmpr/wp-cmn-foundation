<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        qsowiceqiuciwiku:
        $ggocakcisguuokai = ManipulateArray::get($omkysikckkcieckq, self::STATUS) == self::ACTIVE;
        goto acmyiosessocqqsg;
        uogamakkkoeumkuo:
        sueiceyeyweumeck:
        goto waoymaouskgiemes;
        cewcuuesgeiiassq:
        if ($ymqmyyeuycgmigyo) {
            goto sueiceyeyweumeck;
        }
        goto koikauauameyygqc;
        acmyiosessocqqsg:
        qsgigkoyesqiwoik:
        goto uqagmecggeymyekm;
        wsocaemogooskccw:
        $omkysikckkcieckq = DecoratorOption::get("\143\x6f\155\x70\x6f\156\145\x6e\164\55{$ymqmyyeuycgmigyo}", []);
        goto qsowiceqiuciwiku;
        mqeycgqqaoguwkoa:
        $ymqmyyeuycgmigyo = $wksoawcgagcgoask->eeucessuemoysgqg();
        goto amieoocwaeecmywi;
        waoymaouskgiemes:
        $ggocakcisguuokai = ManipulateSetting::cmaecekuqkwmemms("\103\117\x4d\120\117\x4e\105\x4e\x54\123\x5f\101\x43\x54\x49\126\105", 0);
        goto eqgiyaakqasaqymq;
        koikauauameyygqc:
        $wksoawcgagcgoask = self::couwksyewgyeooqe();
        goto sksucoueuaiseguw;
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
        uqagmecggeymyekm:
        return $ggocakcisguuokai;
        goto sawggikqsayoiscm;
        amieoocwaeecmywi:
        geyysuiiagkkeqam:
        goto uogamakkkoeumkuo;
        sawggikqsayoiscm:
    }
    
    public final function omseesogaocascyo(string $ymqmyyeuycgmigyo, string $sqeykgyoooqysmca = self::PKG) : bool
    {
        $wksoawcgagcgoask = self::mqucqomkmisceawy("\160\162\x5f\137{$sqeykgyoooqysmca}\137\137" . ManipulateString::ogimogiceeekegoi($ymqmyyeuycgmigyo));
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
        suycymikusukkyio:
        sqkuescwoaugawem:
        goto mkseiiygswgckuyi;
        qyemiqcwoyeyeyiw:
        if (!$uomewyckeuqoqocu) {
            goto yqewwggigucqaiou;
        }
        goto ksiskiqygouakumc;
        mkseiiygswgckuyi:
        yqewwggigucqaiou:
        goto ogksggygiqgccsgs;
        moqsoaomwaeykgei:
        if ($egkyssmuqcwaciya) {
            goto kegwaamwygcyissk;
        }
        goto uiiiomwgksaissoc;
        aqoumegesyioyyme:
        kegwaamwygcyissk:
        goto uwyayemiakeqosci;
        uwyayemiakeqosci:
        $sqeykgyoooqysmca = '';
        goto sqswqiyeaauwaeui;
        gksysyaaaaeasgmg:
        switch ($sqeykgyoooqysmca) {
            case "\160\141\x63\153\x61\x67\145":
                $sqeykgyoooqysmca = self::PKG;
                goto sqkuescwoaugawem;
            case "\143\157\x6d\x6d\x6f\156":
                $sqeykgyoooqysmca = self::CMN;
                goto sqkuescwoaugawem;
            case "\x74\x68\x65\155\145":
                $sqeykgyoooqysmca = self::THM;
                goto sqkuescwoaugawem;
            default:
                $sqeykgyoooqysmca = self::CTM;
        }
        goto gwauyogieqaqueyu;
        uiiiomwgksaissoc:
        $egkyssmuqcwaciya = self::uqggkiomyiceyooa();
        goto aqoumegesyioyyme;
        gwauyogieqaqueyu:
        gqewqqqogsygmicg:
        goto suycymikusukkyio;
        ksiskiqygouakumc:
        $sqeykgyoooqysmca = strtolower(ManipulateArray::get($uomewyckeuqoqocu, 1));
        goto gksysyaaaaeasgmg;
        ogksggygiqgccsgs:
        return $sqeykgyoooqysmca;
        goto ugwcquomeuagcuma;
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
        wccqiqisegqowemu:
        $wksoawcgagcgoask = self::couwksyewgyeooqe($egkyssmuqcwaciya);
        goto pkueqgmoqweqmssi;
        uokamacqkkiqccku:
        $kcismmoemwgiymuq = $wksoawcgagcgoask->aiqioscoyukqgsgw();
        goto gmocwmmyommsqkky;
        pkueqgmoqweqmssi:
        $kcismmoemwgiymuq = '';
        goto niiosgywwiykokkq;
        wmyaoiwaoycgwucw:
        return $kcismmoemwgiymuq;
        goto ykuewakwswmuaoqq;
        niiosgywwiykokkq:
        if (!$wksoawcgagcgoask) {
            goto awysggkgocqkkmaq;
        }
        goto uokamacqkkiqccku;
        gmocwmmyommsqkky:
        awysggkgocqkkmaq:
        goto wmyaoiwaoycgwucw;
        ykuewakwswmuaoqq:
    }
    
    public static final function akuociswqmoigkas($egkyssmuqcwaciya = null) : ?string
    {
        goto wuqqmyecwsmegamk;
        uqaymuykyqsuayso:
        wp_die("\143\x61\x6e\40\156\157\164\x20\x72\145\x67\x69\x73\x74\145\162\x20\x63\x6f\155\160\x6f\x6e\145\156\164\72\40" . $egkyssmuqcwaciya);
        goto imowaciskmueoogo;
        wuqqmyecwsmegamk:
        if ($egkyssmuqcwaciya) {
            goto giykkoouiosqeuqo;
        }
        goto wywaockmiweeueom;
        imowaciskmueoogo:
        ogsmeaeskmkauwwy:
        goto iycouaqccscasucc;
        wywaockmiweeueom:
        $egkyssmuqcwaciya = self::uqggkiomyiceyooa();
        goto cueyocuoyqoygsqk;
        iguyoiwiuikugekq:
        return ManipulateString::ogimogiceeekegoi("\160\162\137\x5f{$sqeykgyoooqysmca}\137\137{$wksoawcgagcgoask}");
        goto weeosewyimcickoi;
        oieimksmyyeyosik:
        $sqeykgyoooqysmca = self::yegwayqakokyuiok($egkyssmuqcwaciya);
        goto qqqecycaqiuckqge;
        cueyocuoyqoygsqk:
        giykkoouiosqeuqo:
        goto oieimksmyyeyosik;
        uicoowkoscsuucui:
        $wksoawcgagcgoask = ManipulateArray::get($uomewyckeuqoqocu, 2);
        goto iguyoiwiuikugekq;
        qqqecycaqiuckqge:
        if ($sqeykgyoooqysmca) {
            goto ogsmeaeskmkauwwy;
        }
        goto uqaymuykyqsuayso;
        iycouaqccscasucc:
        $uomewyckeuqoqocu = explode("\134", $egkyssmuqcwaciya);
        goto uicoowkoscsuucui;
        weeosewyimcickoi:
    }
    
    public static function qmkyymgaecsmakqq($couygeouymagssgw = null) : ?Component
    {
        goto somsmcmoyaiiwuyk;
        msqmakqaiawgqeau:
        $mqkkuqaimswumeww = self::isyyiqwsgyieiqgu();
        goto iuukukcykqykisaa;
        somsmcmoyaiiwuyk:
        $ksiyqouuaoymsycg = null;
        goto msqmakqaiawgqeau;
        wugqaoggyqusmaoa:
        return $ksiyqouuaoymsycg;
        goto qamicqyikayyacok;
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
            aycyouisaiokysqw:
            $ksiyqouuaoymsycg = $wksoawcgagcgoask;
            goto moequykwukcqmiga;
            iuimkcgcsyemcuei:
            ggaqgegasaaiuacg:
            goto qmukeceewgmekoae;
            mgkwqmyqgswasocy:
            syoyogomscqcsoyk:
            goto iuimkcgcsyemcuei;
            moequykwukcqmiga:
            goto iuwcskswgaeuqumi;
            goto mgkwqmyqgswasocy;
            qmukeceewgmekoae:
        }
        goto aaoekkysuimcamyu;
        qamicqyikayyacok:
    }
    
    public static function mqucqomkmisceawy(string $ymqmyyeuycgmigyo) : ?Component
    {
        return ManipulateArray::get(self::isyyiqwsgyieiqgu(), $ymqmyyeuycgmigyo);
    }
    
    public static final function cmewgsgomuwkkoou($egkyssmuqcwaciya = null) : ?string
    {
        goto kuwwysummgiakgwo;
        yyeiqoiuweqikyyq:
        goto oaymmkagwocukmyq;
        goto qqyqygkmkeeuaiss;
        kuwwysummgiakgwo:
        $wksoawcgagcgoask = self::couwksyewgyeooqe($egkyssmuqcwaciya);
        goto kuusyaqguycoyiia;
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
        myccwweewiwguqaa:
        $mkomwsiykqigmqca = $wksoawcgagcgoask->ikeqsmumgwwuqmkw();
        goto cqokwokkmcecokwi;
        imiqucuaiyoaeaka:
        $ymqmyyeuycgmigyo = self::akuociswqmoigkas($egkyssmuqcwaciya);
        goto ggiiuoqggyauekgs;
        qgaoikokgokgqaqi:
        return $mkomwsiykqigmqca;
        goto ikqwewkaooqqcwmw;
        ggiiuoqggyauekgs:
        $mkomwsiykqigmqca = ManipulateFile::cmaecekuqkwmemms(strtoupper($ymqmyyeuycgmigyo) . self::__ROOT__PATH, null);
        goto yyeiqoiuweqikyyq;
        ikqwewkaooqqcwmw:
    }
    
    private final function ycgwemyyomeiuake(string $mokawwccycoiqeka = null, string $mkomwsiykqigmqca = null) : bool
    {
        goto auycewyimycgsusg;
        ecyuccaigwwcquoq:
        ogmogeeogucogway:
        goto oesgammmiwwkggki;
        wiakkcgyggaeaeoa:
        oyqwymwomuameswa:
        goto ecyuccaigwwcquoq;
        oesgammmiwwkggki:
        $aamkqmkgsaqmcuao = $this->sscegwueamckwmcy("\160\154\x75\x67\x69\156\137\x6c\x6f\x63\x61\x6c\145", determine_locale(), $mokawwccycoiqeka);
        goto iwsckisegswykacc;
        ysgkwckuuwmeqmim:
        if (!$wksoawcgagcgoask) {
            goto oyqwymwomuameswa;
        }
        goto mokwmqowycmwwkem;
        mokwmqowycmwwkem:
        $mokawwccycoiqeka = $wksoawcgagcgoask->wwawisckiqeueoua();
        goto wiakkcgyggaeaeoa;
        eukmaswisycyiwik:
        $wksoawcgagcgoask = self::couwksyewgyeooqe();
        goto ysgkwckuuwmeqmim;
        mmkoaqwkqwweiuco:
        
        return load_textdomain($mokawwccycoiqeka, realpath("{$mkomwsiykqigmqca}\x2f{$egcekquqcyayskcm}"));
        goto wwwyuwogyaymawes;
        iwsckisegswykacc:
        $egcekquqcyayskcm = "{$aamkqmkgsaqmcuao}\56\155\x6f";
        goto aawsuekkqeecmsuu;
        sgiyakiusoqeesgi:
        ymcwgkmiysmukacs:
        goto mmkoaqwkqwweiuco;
        auycewyimycgsusg:
        if ($mokawwccycoiqeka) {
            goto ogmogeeogucogway;
        }
        goto eukmaswisycyiwik;
        uqckgkumgouqgcus:
        $mkomwsiykqigmqca = $this->cmewgsgomuwkkoou() . "\x2f\164\x72\141\x6e\163\x6c\x61\164\151\x6f\x6e";
        goto sgiyakiusoqeesgi;
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
        ouaaoissmeyugeye:
        $wissqeyocyayguas = null;
        goto uyagiwoqkikiygme;
        egekcweywqwukqwq:
        $wissqeyocyayguas = $this->sscegwueamckwmcy("\147\x65\164\x5f\160\x6d\160\162\137\160\154\x75\x67\151\156\137\141\160\x69\x5f\x6b\x65\171", '');
        goto sgkksaaokaceycie;
        sgkksaaokaceycie:
        if (is_string($wissqeyocyayguas)) {
            goto suigamkkgmwiaakg;
        }
        goto ouaaoissmeyugeye;
        kogcmeyqyokimaqo:
        return $wissqeyocyayguas;
        goto iieiwkmcwkocasiq;
        uyagiwoqkikiygme:
        suigamkkgmwiaakg:
        goto kogcmeyqyokimaqo;
        iieiwkmcwkocasiq:
    }
}
