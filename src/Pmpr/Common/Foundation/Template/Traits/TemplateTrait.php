<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Template\Traits;

use Pmpr\Common\Foundation\Manipulate\ManipulateFile;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Template\Engine;
use Pmpr\Common\Foundation\Template\Twig\Twig;

trait TemplateTrait
{
    
    protected ?Engine $templating = null;
    
    protected ?string $templatePrefix = '';
    
    public function kasioquywmeosmsi() : ?Engine
    {
        goto sgkkgysqkisuckcc;
        oggigasguykseuqs:
        return $this->templating;
        goto goqgqygaasmeogqc;
        cqeoyiaqowgumgqi:
        sqmakgoukwggqguc:
        goto oggigasguykseuqs;
        sgkkgysqkisuckcc:
        if ($this->templating) {
            goto sqmakgoukwggqguc;
        }
        goto uuywoaoyegumicic;
        uuywoaoyegumicic:
        $this->templating = Twig::symcgieuakksimmu()->uykissogmuaaocsg();
        goto cqeoyiaqowgumgqi;
        goqgqygaasmeogqc:
    }
    
    public final function iuygowkemiiwqmiw(string $qqscaoyqikuyeoaw, array $qookweymeqawmcwo = [], array $ywmkwiwkosakssii = []) : string
    {
        goto oaeuicecqcyymume;
        oaeuicecqcyymume:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\145\143\x68\x6f" => false, "\143\x6c\141\x73\x73" => false, "\x64\145\x66\141\165\154\x74" => false]);
        goto seoyoigiqioiakyq;
        oaaqgsymgoiauuqo:
        $wkcwykowmmmwioqs = $this->eskggqsasgsiommy($qqscaoyqikuyeoaw, $ggauoeuaesiymgee, $egkyssmuqcwaciya);
        goto ssceugiuqiakemcm;
        ssceugiuqiakemcm:
        $nsmgceoqaqogqmuw = $this->kasioquywmeosmsi()->render($wkcwykowmmmwioqs, $qookweymeqawmcwo);
        goto eowmsqkksesqysaq;
        ywcuocgquokgyoic:
        $ggauoeuaesiymgee = ManipulateArray::get($ywmkwiwkosakssii, "\x64\x65\146\x61\165\x6c\164", false);
        goto oaaqgsymgoiauuqo;
        kcwosqcuqsikgkyi:
        return $nsmgceoqaqogqmuw;
        goto ioesqeescickieuo;
        cyqsmqoaaguqouog:
        echo $nsmgceoqaqogqmuw;
        goto kgekiyoosqkwoqcw;
        qoskgeomamikicio:
        $egkyssmuqcwaciya = ManipulateArray::get($ywmkwiwkosakssii, "\143\x6c\x61\163\163", false);
        goto ywcuocgquokgyoic;
        seoyoigiqioiakyq:
        $koaqeegoeiaiccse = ManipulateArray::get($ywmkwiwkosakssii, "\145\x63\150\x6f", false);
        goto qoskgeomamikicio;
        kgekiyoosqkwoqcw:
        oiokgqmqeiooeksu:
        goto kcwosqcuqsikgkyi;
        eowmsqkksesqysaq:
        if (!$koaqeegoeiaiccse) {
            goto oiokgqmqeiooeksu;
        }
        goto cyqsmqoaaguqouog;
        ioesqeescickieuo:
    }
    
    public function sawwoqoiocqwakai($egkyssmuqcwaciya = null) : ?string
    {
        goto aciggsookugoiwis;
        egawkwesqyogksya:
        return $this->kasioquywmeosmsi()->siameoooqiiuqgsm($egkyssmuqcwaciya);
        goto oiwwecykcycoouai;
        ywskqmoyukgyguiy:
        $this->templatePrefix = $this->kasioquywmeosmsi()->siameoooqiiuqgsm(self::uqggkiomyiceyooa());
        goto wougckywwqeusquq;
        eiegogciisyewaaa:
        if (!empty($this->templatePrefix)) {
            goto suyouseqsosomgke;
        }
        goto ywskqmoyukgyguiy;
        aciggsookugoiwis:
        if (!$egkyssmuqcwaciya) {
            goto ugekiayuuqwywsog;
        }
        goto egawkwesqyogksya;
        masqmwkguiamwgkc:
        return $this->templatePrefix;
        goto euqoygooougocsoy;
        wougckywwqeusquq:
        suyouseqsosomgke:
        goto masqmwkguiamwgkc;
        oiwwecykcycoouai:
        ugekiayuuqwywsog:
        goto eiegogciisyewaaa;
        euqoygooougocsoy:
    }
    
    private final function omwawqyqikcsgyqo(string $mkomwsiykqigmqca) : string
    {
        goto ioiacoyoygkcmaac;
        mycwwkyauoegscee:
        array_pop($uomewyckeuqoqocu);
        goto oyysyqcickwskiwq;
        ioiacoyoygkcmaac:
        $uomewyckeuqoqocu = explode(DIRECTORY_SEPARATOR, $mkomwsiykqigmqca);
        goto mkaocmwkyykmakug;
        mkaocmwkyykmakug:
        $ymqmyyeuycgmigyo = array_pop($uomewyckeuqoqocu);
        goto mycwwkyauoegscee;
        oyysyqcickwskiwq:
        $uomewyckeuqoqocu[] = $ymqmyyeuycgmigyo;
        goto oykskeiyeqqmqgaq;
        oykskeiyeqqmqgaq:
        return implode(DIRECTORY_SEPARATOR, $uomewyckeuqoqocu);
        goto eoweieoeouuiesea;
        eoweieoeouuiesea:
    }
    
    public final function kkcywkucqsawqqqo($aiieyweysaukqemc = null, $mkomwsiykqigmqca = null)
    {
        goto kasmyowscwyiuqok;
        uimugqewwuwguoay:
        yooqksokgugueoyu:
        goto cqqoaacqwsgsaymw;
        mummsuuiqsqckmqu:
        if ($mkomwsiykqigmqca) {
            goto yooqksokgugueoyu;
        }
        goto agemwcwmiqisoagc;
        oqcucsciagwqmkia:
        egasiugmqoomiams:
        goto gioywmqkqcemcqoq;
        gioywmqkqcemcqoq:
        return $this->kasioquywmeosmsi()->wkosicsekwkigyss($aiieyweysaukqemc, $mkomwsiykqigmqca);
        goto rouiwqegswowiiie;
        cswyeeccwkqqsick:
        $aiieyweysaukqemc = strtolower($wksoawcgagcgoask);
        goto oqcucsciagwqmkia;
        cqqoaacqwsgsaymw:
        if ($aiieyweysaukqemc) {
            goto egasiugmqoomiams;
        }
        goto cswyeeccwkqqsick;
        agemwcwmiqisoagc:
        $mkomwsiykqigmqca = ManipulateFile::cmaecekuqkwmemms(strtoupper($wksoawcgagcgoask) . self::__ROOT__PATH);
        goto uimugqewwuwguoay;
        kasmyowscwyiuqok:
        $wksoawcgagcgoask = $this->akuociswqmoigkas();
        goto mummsuuiqsqckmqu;
        rouiwqegswowiiie:
    }
    
    public final function eskggqsasgsiommy($qqscaoyqikuyeoaw, ?string $ggauoeuaesiymgee = null, $egkyssmuqcwaciya = null)
    {
        goto csysmmwiisgwmyoo;
        sckyokicsooukyuk:
        if ($this->kasioquywmeosmsi()->exists($wkcwykowmmmwioqs)) {
            goto gscycqkuumemawcw;
        }
        goto iwyoggscwoaecuae;
        csysmmwiisgwmyoo:
        $wkcwykowmmmwioqs = $this->ygwkeuwkeyieqsim($qqscaoyqikuyeoaw);
        goto sckyokicsooukyuk;
        usoowaiwsaiesgem:
        gscycqkuumemawcw:
        goto mkeuieqqyqegogsq;
        eiwigiaqmiwyakck:
        $sqeykgyoooqysmca = "\x2e\150\x74\155\154";
        goto yauqmogucwsigqeq;
        yauqmogucwsigqeq:
        eywmyayuiaqsyogc:
        goto iyqmssemqiauuqqc;
        quauyiscsiqskwie:
        if (preg_match("\57\x5c\56\x28\x5b\60\55\x39\x61\55\x7a\135\x2b\44\51\57\151", $qqscaoyqikuyeoaw, $meyiiwcswqmuggyg)) {
            goto eywmyayuiaqsyogc;
        }
        goto eiwigiaqmiwyakck;
        iwyoggscwoaecuae:
        $sqeykgyoooqysmca = '';
        goto quauyiscsiqskwie;
        mkeuieqqyqegogsq:
        return $wkcwykowmmmwioqs;
        goto cqquqgcesyumsseu;
        iyqmssemqiauuqqc:
        $wkcwykowmmmwioqs = $this->ygwkeuwkeyieqsim(trailingslashit($this->sawwoqoiocqwakai($egkyssmuqcwaciya)), "{$qqscaoyqikuyeoaw}{$sqeykgyoooqysmca}\56\x74\167\151\147", $ggauoeuaesiymgee);
        goto usoowaiwsaiesgem;
        cqquqgcesyumsseu:
    }
    
    private final function ygwkeuwkeyieqsim(?string $wkcwykowmmmwioqs, ?string $qqscaoyqikuyeoaw = null, ?string $ggauoeuaesiymgee = null)
    {
        goto osuyekmuuwmgkwca;
        ecckmmswcugmikea:
        if (!(!$this->kasioquywmeosmsi()->exists($qqscaoyqikuyeoaw) && $ggauoeuaesiymgee)) {
            goto oocciiqymkucsegu;
        }
        goto ecmwwosseekiuagg;
        miiqgcgyyuwocgay:
        if (!$this->kasioquywmeosmsi()->exists($wkcwykowmmmwioqs)) {
            goto cysoogqmuikoisqy;
        }
        goto yuwawokiuiimecqy;
        osuyekmuuwmgkwca:
        if (!$wkcwykowmmmwioqs) {
            goto aagceqeeqogaqaes;
        }
        goto qsqwwcgikmcoikkg;
        kekgsuqmmcqiwkmm:
        aagceqeeqogaqaes:
        goto moikisugcqcsaaoy;
        qsqwwcgikmcoikkg:
        if ($qqscaoyqikuyeoaw) {
            goto wewsckyqeeoeewmu;
        }
        goto miiqgcgyyuwocgay;
        euiecommumccmsoy:
        qasmomuqokkmywyk:
        goto cqaquqywymqyymqs;
        ecmwwosseekiuagg:
        $qqscaoyqikuyeoaw = $wkcwykowmmmwioqs . $ggauoeuaesiymgee;
        goto cmqwceuukuwoiwek;
        yuwawokiuiimecqy:
        goto ksuqymwomimwkqyw;
        goto sqameksmiwwkyucq;
        sqameksmiwwkyucq:
        wewsckyqeeoeewmu:
        goto yeugqaigsaakooak;
        uookkcasyoqgsisc:
        $wkcwykowmmmwioqs = $this->omwawqyqikcsgyqo($wkcwykowmmmwioqs);
        goto uwsciuioqumimyuw;
        moikisugcqcsaaoy:
        return $wkcwykowmmmwioqs;
        goto usmqcukamkauwqmu;
        iygkkieqyqoeaaee:
        goto ksuqymwomimwkqyw;
        goto iigquwogaowewecc;
        yeugqaigsaakooak:
        if ($this->kasioquywmeosmsi()->exists($wkcwykowmmmwioqs . $qqscaoyqikuyeoaw)) {
            goto qasmomuqokkmywyk;
        }
        goto asemcaymsukcaawm;
        iigquwogaowewecc:
        cysoogqmuikoisqy:
        goto uookkcasyoqgsisc;
        uwsciuioqumimyuw:
        ksuqymwomimwkqyw:
        goto kekgsuqmmcqiwkmm;
        aaoqwwkgcmmuoyaw:
        $wkcwykowmmmwioqs = $qqscaoyqikuyeoaw;
        goto iygkkieqyqoeaaee;
        asemcaymsukcaawm:
        $wkcwykowmmmwioqs = $this->omwawqyqikcsgyqo($wkcwykowmmmwioqs);
        goto euiecommumccmsoy;
        cqaquqywymqyymqs:
        $qqscaoyqikuyeoaw = $wkcwykowmmmwioqs . $qqscaoyqikuyeoaw;
        goto ecckmmswcugmikea;
        cmqwceuukuwoiwek:
        oocciiqymkucsegu:
        goto aaoqwwkgcmmuoyaw;
        usmqcukamkauwqmu:
    }
}
