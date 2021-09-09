<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
        goto ciakokmuycsamoew;
        ciakokmuycsamoew:
        Storage::kmsomwiqwmoyoeci($this, $miawkwqioaeasiig);
        goto oicciogwwqmcoaue;
        ceugguwawauqcgqc:
        $this->kkcywkucqsawqqqo();
        goto umesgccceskkwcek;
        oicciogwwqmcoaue:
        $this->ycgwemyyomeiuake();
        goto ceugguwawauqcgqc;
        umesgccceskkwcek:
    }
    
    public final function gmiyqqaekqcsoime(string $ymqmyyeuycgmigyo = null) : bool
    {
        goto ycsyqeiqmgkqsykm;
        nwisymowgiuysywm:
        $ggocakcisguuokai = ManipulateSetting::cmaecekuqkwmemms("\x43\x4f\x4d\120\117\x4e\105\116\124\123\x5f\101\103\x54\x49\x56\105", 0);
        goto uoukmckqqaewiack;
        kmikysaiomgcocuq:
        if (!$wksoawcgagcgoask) {
            goto emmyeiacygokoyqm;
        }
        goto euoyyamaesgwcumc;
        wquwgeoesiweimsy:
        $wksoawcgagcgoask = self::couwksyewgyeooqe();
        goto kmikysaiomgcocuq;
        uoukmckqqaewiack:
        if (!(!$ggocakcisguuokai && $ymqmyyeuycgmigyo)) {
            goto ikuegsumgygqkoiq;
        }
        goto gowseceuccyoykqg;
        iusisyuoomsaqyge:
        emmyeiacygokoyqm:
        goto iosumqekeyuyscwm;
        euoyyamaesgwcumc:
        $ymqmyyeuycgmigyo = $wksoawcgagcgoask->eeucessuemoysgqg();
        goto iusisyuoomsaqyge;
        sqmgyqqesycegaog:
        ikuegsumgygqkoiq:
        goto auawcgwsgmocyikg;
        ycsyqeiqmgkqsykm:
        if ($ymqmyyeuycgmigyo) {
            goto quykkkqkscyeakyc;
        }
        goto wquwgeoesiweimsy;
        iosumqekeyuyscwm:
        quykkkqkscyeakyc:
        goto nwisymowgiuysywm;
        gowseceuccyoykqg:
        $omkysikckkcieckq = DecoratorOption::get("\143\157\x6d\x70\157\x6e\145\x6e\x74\55{$ymqmyyeuycgmigyo}", []);
        goto wmmymakwgisiiemm;
        auawcgwsgmocyikg:
        return $ggocakcisguuokai;
        goto csiywiqqacqiooam;
        wmmymakwgisiiemm:
        $ggocakcisguuokai = ManipulateArray::get($omkysikckkcieckq, self::STATUS) == self::ACTIVE;
        goto sqmgyqqesycegaog;
        csiywiqqacqiooam:
    }
    
    public final function omseesogaocascyo(string $ymqmyyeuycgmigyo, string $sqeykgyoooqysmca = self::PKG) : bool
    {
        $wksoawcgagcgoask = self::mqucqomkmisceawy("\160\162\137\x5f{$sqeykgyoooqysmca}\137\137" . ManipulateString::ogimogiceeekegoi($ymqmyyeuycgmigyo));
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
        goto gkswmkowgekmoecu;
        gwwgqgceskcqukig:
        return $sqeykgyoooqysmca;
        goto gqugaamwqqookmyc;
        isyassymuywsayyy:
        cgmoawqqgooiomam:
        goto qyckkgmuykqyaieq;
        esucokaeqgmiaige:
        switch ($sqeykgyoooqysmca) {
            case "\160\141\x63\153\x61\x67\x65":
                $sqeykgyoooqysmca = self::PKG;
                goto cgmoawqqgooiomam;
            case "\143\157\155\x6d\157\156":
                $sqeykgyoooqysmca = self::CMN;
                goto cgmoawqqgooiomam;
            case "\164\x68\x65\x6d\145":
                $sqeykgyoooqysmca = self::THM;
                goto cgmoawqqgooiomam;
            default:
                $sqeykgyoooqysmca = self::CTM;
        }
        goto oqgmiysscyygyaqg;
        cueascwqacykggki:
        ccuemieucuwkaiug:
        goto qqicgmcqukmywgwu;
        mousymoamqcmauki:
        $uomewyckeuqoqocu = explode("\134", $egkyssmuqcwaciya);
        goto yyiysucuymcuyycw;
        yyiysucuymcuyycw:
        if (!$uomewyckeuqoqocu) {
            goto igsmwqseogmyegee;
        }
        goto agcwmeycmgsyqeok;
        owmcuewayukusqmo:
        $egkyssmuqcwaciya = self::uqggkiomyiceyooa();
        goto cueascwqacykggki;
        oqgmiysscyygyaqg:
        ckyyiokeqmgokkii:
        goto isyassymuywsayyy;
        gkswmkowgekmoecu:
        if ($egkyssmuqcwaciya) {
            goto ccuemieucuwkaiug;
        }
        goto owmcuewayukusqmo;
        qyckkgmuykqyaieq:
        igsmwqseogmyegee:
        goto gwwgqgceskcqukig;
        qqicgmcqukmywgwu:
        $sqeykgyoooqysmca = '';
        goto mousymoamqcmauki;
        agcwmeycmgsyqeok:
        $sqeykgyoooqysmca = strtolower(ManipulateArray::get($uomewyckeuqoqocu, 1));
        goto esucokaeqgmiaige;
        gqugaamwqqookmyc:
    }
    
    public static function couwksyewgyeooqe($egkyssmuqcwaciya = null) : ?Component
    {
        $ymqmyyeuycgmigyo = self::akuociswqmoigkas($egkyssmuqcwaciya);
        return Storage::cqusmgskowmesgcg($ymqmyyeuycgmigyo);
    }
    
    public static function aswwewigcsoawwqk($egkyssmuqcwaciya = null) : ?string
    {
        goto eoeoaoomoeayemks;
        ygsiuoyewwecoemg:
        ayemyskkicqyskos:
        goto ywuegkmgqmweogqq;
        kaccuycsyukugwao:
        if (!$wksoawcgagcgoask) {
            goto ayemyskkicqyskos;
        }
        goto wqmkwsgmeceakwaw;
        eoeoaoomoeayemks:
        $wksoawcgagcgoask = self::couwksyewgyeooqe($egkyssmuqcwaciya);
        goto aucqswuoeqocuiqk;
        ywuegkmgqmweogqq:
        return $kcismmoemwgiymuq;
        goto ceasygsiuksuwwoc;
        aucqswuoeqocuiqk:
        $kcismmoemwgiymuq = '';
        goto kaccuycsyukugwao;
        wqmkwsgmeceakwaw:
        $kcismmoemwgiymuq = $wksoawcgagcgoask->aiqioscoyukqgsgw();
        goto ygsiuoyewwecoemg;
        ceasygsiuksuwwoc:
    }
    
    public static final function akuociswqmoigkas($egkyssmuqcwaciya = null) : ?string
    {
        goto mimogmagkwkiyskc;
        sieseicooqugaqgo:
        $wksoawcgagcgoask = ManipulateArray::get($uomewyckeuqoqocu, 2);
        goto goukwgqscacouyqs;
        caoauekaaegosauw:
        $uomewyckeuqoqocu = explode("\x5c", $egkyssmuqcwaciya);
        goto sieseicooqugaqgo;
        qcmwkecooegwkkks:
        wp_die("\x63\x61\x6e\40\156\157\164\40\162\145\147\x69\x73\x74\x65\162\x20\x63\x6f\155\x70\157\156\145\156\164\x3a\x20" . $egkyssmuqcwaciya);
        goto myemeeaqoywegsok;
        aemayukkiiaiueaq:
        $sqeykgyoooqysmca = self::yegwayqakokyuiok($egkyssmuqcwaciya);
        goto kawmoeuiyqkqmsmo;
        wcesgqaeqiqawysc:
        smwkgmymskokcoek:
        goto aemayukkiiaiueaq;
        kawmoeuiyqkqmsmo:
        if ($sqeykgyoooqysmca) {
            goto sgaaocqwgeqismmo;
        }
        goto qcmwkecooegwkkks;
        myemeeaqoywegsok:
        sgaaocqwgeqismmo:
        goto caoauekaaegosauw;
        goukwgqscacouyqs:
        return ManipulateString::ogimogiceeekegoi("\x70\x72\x5f\137{$sqeykgyoooqysmca}\137\137{$wksoawcgagcgoask}");
        goto cyekoicwwmekycyy;
        oimegeaimoymkmsc:
        $egkyssmuqcwaciya = self::uqggkiomyiceyooa();
        goto wcesgqaeqiqawysc;
        mimogmagkwkiyskc:
        if ($egkyssmuqcwaciya) {
            goto smwkgmymskokcoek;
        }
        goto oimegeaimoymkmsc;
        cyekoicwwmekycyy:
    }
    
    public static function qmkyymgaecsmakqq($couygeouymagssgw = null) : ?Component
    {
        goto yeomwmwumiieiywi;
        ymsiicmasqigsymw:
        yegimqcqoeaacsyq:
        goto yiyuuyewoweiaokc;
        yiyuuyewoweiaokc:
        return $ksiyqouuaoymsycg;
        goto uiwmoaosqkcaoqce;
        yeomwmwumiieiywi:
        $ksiyqouuaoymsycg = null;
        goto wakmmggoiykyuamq;
        wakmmggoiykyuamq:
        $mqkkuqaimswumeww = self::isyyiqwsgyieiqgu();
        goto coqmamquawyaeyae;
        coqmamquawyaeyae:
        foreach ($mqkkuqaimswumeww as $wksoawcgagcgoask) {
            goto aikaeokwagkiecao;
            mkggmsugkikwywom:
            qywueemkicmwyoqg:
            goto gkiikogcsmysucuc;
            aikaeokwagkiecao:
            if (!($wksoawcgagcgoask->ikeqsmumgwwuqmkw() === $couygeouymagssgw)) {
                goto qywueemkicmwyoqg;
            }
            goto acikugwgomwemcmu;
            kamwemiweockugia:
            goto yegimqcqoeaacsyq;
            goto mkggmsugkikwywom;
            gkiikogcsmysucuc:
            remiaquuossuqoma:
            goto uywoegeimqomwqoa;
            acikugwgomwemcmu:
            $ksiyqouuaoymsycg = $wksoawcgagcgoask;
            goto kamwemiweockugia;
            uywoegeimqomwqoa:
        }
        goto ymsiicmasqigsymw;
        uiwmoaosqkcaoqce:
    }
    
    public static function mqucqomkmisceawy(string $ymqmyyeuycgmigyo) : ?Component
    {
        return ManipulateArray::get(self::isyyiqwsgyieiqgu(), $ymqmyyeuycgmigyo);
    }
    
    public static final function cmewgsgomuwkkoou($egkyssmuqcwaciya = null) : ?string
    {
        goto wiokcqeyeaymgwae;
        cewcuuesgeiiassq:
        goto gkqsiqmqqemqqwku;
        goto koikauauameyygqc;
        amieoocwaeecmywi:
        return $mkomwsiykqigmqca;
        goto uogamakkkoeumkuo;
        qsgigkoyesqiwoik:
        $mkomwsiykqigmqca = ManipulateFile::cmaecekuqkwmemms(strtoupper($ymqmyyeuycgmigyo) . self::__ROOT__PATH, null);
        goto cewcuuesgeiiassq;
        sueiceyeyweumeck:
        $ymqmyyeuycgmigyo = self::akuociswqmoigkas($egkyssmuqcwaciya);
        goto qsgigkoyesqiwoik;
        wiokcqeyeaymgwae:
        $wksoawcgagcgoask = self::couwksyewgyeooqe($egkyssmuqcwaciya);
        goto geyysuiiagkkeqam;
        koikauauameyygqc:
        ucyimwewacagqocw:
        goto sksucoueuaiseguw;
        mqeycgqqaoguwkoa:
        gkqsiqmqqemqqwku:
        goto amieoocwaeecmywi;
        sksucoueuaiseguw:
        $mkomwsiykqigmqca = $wksoawcgagcgoask->ikeqsmumgwwuqmkw();
        goto mqeycgqqaoguwkoa;
        geyysuiiagkkeqam:
        if ($wksoawcgagcgoask) {
            goto ucyimwewacagqocw;
        }
        goto sueiceyeyweumeck;
        uogamakkkoeumkuo:
    }
    
    private final function ycgwemyyomeiuake(string $mokawwccycoiqeka = null, string $mkomwsiykqigmqca = null) : bool
    {
        goto qsowiceqiuciwiku;
        sawggikqsayoiscm:
        $mokawwccycoiqeka = $wksoawcgagcgoask->wwawisckiqeueoua();
        goto kegwaamwygcyissk;
        uiiiomwgksaissoc:
        $mkomwsiykqigmqca = $this->cmewgsgomuwkkoou() . "\x2f\x74\162\141\156\x73\x6c\141\x74\151\157\156";
        goto aqoumegesyioyyme;
        aqoumegesyioyyme:
        wsocaemogooskccw:
        goto uwyayemiakeqosci;
        acmyiosessocqqsg:
        $wksoawcgagcgoask = self::couwksyewgyeooqe();
        goto uqagmecggeymyekm;
        qsowiceqiuciwiku:
        if ($mokawwccycoiqeka) {
            goto eqgiyaakqasaqymq;
        }
        goto acmyiosessocqqsg;
        uqagmecggeymyekm:
        if (!$wksoawcgagcgoask) {
            goto waoymaouskgiemes;
        }
        goto sawggikqsayoiscm;
        yqewwggigucqaiou:
        $egcekquqcyayskcm = "{$aamkqmkgsaqmcuao}\56\x6d\157";
        goto moqsoaomwaeykgei;
        kegwaamwygcyissk:
        waoymaouskgiemes:
        goto sqkuescwoaugawem;
        gqewqqqogsygmicg:
        $aamkqmkgsaqmcuao = $this->sscegwueamckwmcy("\x70\154\x75\x67\151\x6e\x5f\x6c\x6f\143\141\x6c\145", determine_locale(), $mokawwccycoiqeka);
        goto yqewwggigucqaiou;
        uwyayemiakeqosci:
        
        return load_textdomain($mokawwccycoiqeka, realpath("{$mkomwsiykqigmqca}\57{$egcekquqcyayskcm}"));
        goto sqswqiyeaauwaeui;
        moqsoaomwaeykgei:
        if ($mkomwsiykqigmqca) {
            goto wsocaemogooskccw;
        }
        goto uiiiomwgksaissoc;
        sqkuescwoaugawem:
        eqgiyaakqasaqymq:
        goto gqewqqqogsygmicg;
        sqswqiyeaauwaeui:
    }
    
    public function eegcqkwceasicmek() : ?string
    {
        goto ksiskiqygouakumc;
        ksiskiqygouakumc:
        $wissqeyocyayguas = $this->sscegwueamckwmcy("\x67\145\x74\x5f\160\155\x70\162\x5f\x70\154\x75\x67\151\x6e\x5f\x61\x70\x69\137\153\x65\171", '');
        goto gksysyaaaaeasgmg;
        gksysyaaaaeasgmg:
        if (is_string($wissqeyocyayguas)) {
            goto qyemiqcwoyeyeyiw;
        }
        goto gwauyogieqaqueyu;
        suycymikusukkyio:
        qyemiqcwoyeyeyiw:
        goto mkseiiygswgckuyi;
        mkseiiygswgckuyi:
        return $wissqeyocyayguas;
        goto ogksggygiqgccsgs;
        gwauyogieqaqueyu:
        $wissqeyocyayguas = null;
        goto suycymikusukkyio;
        ogksggygiqgccsgs:
    }
}
