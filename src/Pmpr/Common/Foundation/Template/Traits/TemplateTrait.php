<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        goto euiecommumccmsoy;
        ecckmmswcugmikea:
        asemcaymsukcaawm:
        goto ecmwwosseekiuagg;
        euiecommumccmsoy:
        if ($this->templating) {
            goto asemcaymsukcaawm;
        }
        goto cqaquqywymqyymqs;
        cqaquqywymqyymqs:
        $this->templating = Twig::symcgieuakksimmu()->uykissogmuaaocsg();
        goto ecckmmswcugmikea;
        ecmwwosseekiuagg:
        return $this->templating;
        goto cmqwceuukuwoiwek;
        cmqwceuukuwoiwek:
    }
    
    public final function iuygowkemiiwqmiw(string $qqscaoyqikuyeoaw, array $qookweymeqawmcwo = [], array $ywmkwiwkosakssii = []) : string
    {
        goto iygkkieqyqoeaaee;
        moikisugcqcsaaoy:
        $nsmgceoqaqogqmuw = $this->kasioquywmeosmsi()->render($wkcwykowmmmwioqs, $qookweymeqawmcwo);
        goto usmqcukamkauwqmu;
        oqgegyekomogicem:
        return $nsmgceoqaqogqmuw;
        goto mqqsyewyymsekyai;
        uookkcasyoqgsisc:
        $egkyssmuqcwaciya = ManipulateArray::get($ywmkwiwkosakssii, "\143\154\141\163\x73", false);
        goto uwsciuioqumimyuw;
        usmqcukamkauwqmu:
        if (!$koaqeegoeiaiccse) {
            goto aaoqwwkgcmmuoyaw;
        }
        goto cimeeqaiweeqawam;
        iigquwogaowewecc:
        $koaqeegoeiaiccse = ManipulateArray::get($ywmkwiwkosakssii, "\x65\x63\150\157", false);
        goto uookkcasyoqgsisc;
        ccwikwaicwwsewyc:
        aaoqwwkgcmmuoyaw:
        goto oqgegyekomogicem;
        iygkkieqyqoeaaee:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\145\143\x68\157" => false, "\x63\x6c\141\x73\x73" => false, "\144\x65\x66\x61\x75\154\164" => false]);
        goto iigquwogaowewecc;
        cimeeqaiweeqawam:
        echo $nsmgceoqaqogqmuw;
        goto ccwikwaicwwsewyc;
        kekgsuqmmcqiwkmm:
        $wkcwykowmmmwioqs = $this->eskggqsasgsiommy($qqscaoyqikuyeoaw, $ggauoeuaesiymgee, $egkyssmuqcwaciya);
        goto moikisugcqcsaaoy;
        uwsciuioqumimyuw:
        $ggauoeuaesiymgee = ManipulateArray::get($ywmkwiwkosakssii, "\144\x65\x66\141\x75\154\x74", false);
        goto kekgsuqmmcqiwkmm;
        mqqsyewyymsekyai:
    }
    
    public function sawwoqoiocqwakai($egkyssmuqcwaciya = null) : ?string
    {
        goto osikekkwkwccuosu;
        eakgoqeusssawkiy:
        wyusiimusqwqkkay:
        goto ksaquyioqskqgemw;
        ksaquyioqskqgemw:
        return $this->templatePrefix;
        goto owmmyggcqikgwmqi;
        qwoiqiaiueeksuea:
        $this->templatePrefix = $this->kasioquywmeosmsi()->siameoooqiiuqgsm(self::uqggkiomyiceyooa());
        goto eakgoqeusssawkiy;
        osikekkwkwccuosu:
        if (!$egkyssmuqcwaciya) {
            goto emmuasmesyuaymkc;
        }
        goto gkkagswkwmummiiy;
        suweqsmuqmoqiqka:
        if (!empty($this->templatePrefix)) {
            goto wyusiimusqwqkkay;
        }
        goto qwoiqiaiueeksuea;
        uwaecasqomqsismq:
        emmuasmesyuaymkc:
        goto suweqsmuqmoqiqka;
        gkkagswkwmummiiy:
        return $this->kasioquywmeosmsi()->siameoooqiiuqgsm($egkyssmuqcwaciya);
        goto uwaecasqomqsismq;
        owmmyggcqikgwmqi:
    }
    
    private final function omwawqyqikcsgyqo(string $mkomwsiykqigmqca) : string
    {
        goto ocaecwowkcsoocci;
        ocaecwowkcsoocci:
        $uomewyckeuqoqocu = explode(DIRECTORY_SEPARATOR, $mkomwsiykqigmqca);
        goto wscmeqgusioeqece;
        wscmeqgusioeqece:
        $ymqmyyeuycgmigyo = array_pop($uomewyckeuqoqocu);
        goto uimwkmsekogcooks;
        qsioegocesimcqee:
        return implode(DIRECTORY_SEPARATOR, $uomewyckeuqoqocu);
        goto qsewamsaqkuuowas;
        uimwkmsekogcooks:
        array_pop($uomewyckeuqoqocu);
        goto yumsukgwuyomocge;
        yumsukgwuyomocge:
        $uomewyckeuqoqocu[] = $ymqmyyeuycgmigyo;
        goto qsioegocesimcqee;
        qsewamsaqkuuowas:
    }
    
    public final function kkcywkucqsawqqqo($aiieyweysaukqemc = null, $mkomwsiykqigmqca = null)
    {
        goto geucmycgqkuqcgss;
        qwggsgwkeckokmce:
        $aiieyweysaukqemc = strtolower($wksoawcgagcgoask);
        goto ueqwwycwakwsqgma;
        iikiemieyocgiswa:
        return $this->kasioquywmeosmsi()->wkosicsekwkigyss($aiieyweysaukqemc, $mkomwsiykqigmqca);
        goto osumceweusuqiycu;
        igysiemcggkiekyo:
        if ($aiieyweysaukqemc) {
            goto ygmuqycgaqsukwug;
        }
        goto qwggsgwkeckokmce;
        mqmcyogeociuooau:
        $mkomwsiykqigmqca = ManipulateFile::cmaecekuqkwmemms(strtoupper($wksoawcgagcgoask) . self::__ROOT__PATH);
        goto ouaomcekuycgkesk;
        oeaccykmeaiamqkw:
        if ($mkomwsiykqigmqca) {
            goto qowksiiacauekqiw;
        }
        goto mqmcyogeociuooau;
        ouaomcekuycgkesk:
        qowksiiacauekqiw:
        goto igysiemcggkiekyo;
        ueqwwycwakwsqgma:
        ygmuqycgaqsukwug:
        goto iikiemieyocgiswa;
        geucmycgqkuqcgss:
        $wksoawcgagcgoask = $this->akuociswqmoigkas();
        goto oeaccykmeaiamqkw;
        osumceweusuqiycu:
    }
    
    public final function eskggqsasgsiommy($qqscaoyqikuyeoaw, ?string $ggauoeuaesiymgee = null, $egkyssmuqcwaciya = null)
    {
        goto cmykqwcwsgcoouiu;
        mioukcqeukuoiowc:
        $wkcwykowmmmwioqs = $this->ygwkeuwkeyieqsim(trailingslashit($this->sawwoqoiocqwakai($egkyssmuqcwaciya)), "{$qqscaoyqikuyeoaw}{$sqeykgyoooqysmca}\x2e\164\167\x69\147", $ggauoeuaesiymgee);
        goto cmmagyiwukeyqwsy;
        ooocyiciwokoqucy:
        if ($this->kasioquywmeosmsi()->exists($wkcwykowmmmwioqs)) {
            goto okoaqqegqeeqqsgw;
        }
        goto ieqomucoayqoemog;
        sicyosycsmuqsysq:
        return $wkcwykowmmmwioqs;
        goto qksaqkeugsqscias;
        cmmagyiwukeyqwsy:
        okoaqqegqeeqqsgw:
        goto sicyosycsmuqsysq;
        ieqomucoayqoemog:
        $sqeykgyoooqysmca = '';
        goto qwiwekqsmmeakmuw;
        eicgugqewsqoeqyq:
        mykaamwaiguuckgu:
        goto mioukcqeukuoiowc;
        kauowiucwweueecy:
        $sqeykgyoooqysmca = "\56\x68\x74\155\x6c";
        goto eicgugqewsqoeqyq;
        cmykqwcwsgcoouiu:
        $wkcwykowmmmwioqs = $this->ygwkeuwkeyieqsim($qqscaoyqikuyeoaw);
        goto ooocyiciwokoqucy;
        qwiwekqsmmeakmuw:
        if (preg_match("\x2f\134\x2e\50\x5b\60\x2d\x39\141\55\172\135\x2b\44\x29\x2f\x69", $qqscaoyqikuyeoaw, $meyiiwcswqmuggyg)) {
            goto mykaamwaiguuckgu;
        }
        goto kauowiucwweueecy;
        qksaqkeugsqscias:
    }
    
    private final function ygwkeuwkeyieqsim(?string $wkcwykowmmmwioqs, ?string $qqscaoyqikuyeoaw = null, ?string $ggauoeuaesiymgee = null)
    {
        goto aieyemueueyscaym;
        uumwyacekksycmcy:
        $qqscaoyqikuyeoaw = $wkcwykowmmmwioqs . $qqscaoyqikuyeoaw;
        goto wigkaokkwyecekic;
        aeagssqaiwooeoei:
        gameegaekuiikoww:
        goto cusmimwmwgscqeku;
        eeiweeggimkmqoqg:
        if ($qqscaoyqikuyeoaw) {
            goto qowesgcsaiysuagc;
        }
        goto qccywycocsamgkqi;
        wigkaokkwyecekic:
        if (!(!$this->kasioquywmeosmsi()->exists($qqscaoyqikuyeoaw) && $ggauoeuaesiymgee)) {
            goto wwuccwuuawkiywgk;
        }
        goto mskkcyugwccmgmue;
        ssuagkigqokwaekc:
        gmowomwyecacouuw:
        goto uumwyacekksycmcy;
        yccqswiseqwmqqyg:
        qowesgcsaiysuagc:
        goto ecqkyymaqewoquuu;
        cusmimwmwgscqeku:
        cmieikgaiegwmycs:
        goto egcqemgwyuoosmuq;
        aieyemueueyscaym:
        if (!$wkcwykowmmmwioqs) {
            goto cmieikgaiegwmycs;
        }
        goto eeiweeggimkmqoqg;
        mskkcyugwccmgmue:
        $qqscaoyqikuyeoaw = $wkcwykowmmmwioqs . $ggauoeuaesiymgee;
        goto usuaqaeacooqoqeg;
        uaamwamsuakywoqc:
        goto gameegaekuiikoww;
        goto yccqswiseqwmqqyg;
        ecqkyymaqewoquuu:
        if ($this->kasioquywmeosmsi()->exists($wkcwykowmmmwioqs . $qqscaoyqikuyeoaw)) {
            goto gmowomwyecacouuw;
        }
        goto cywkigiikmcqaskw;
        icaaymowyygqqwsa:
        $wkcwykowmmmwioqs = $qqscaoyqikuyeoaw;
        goto cwqecoyeuseoiyee;
        iukwaymqsaukgucc:
        wmmsqcgygcuuaycy:
        goto oukcgieuakaagsaw;
        cywkigiikmcqaskw:
        $wkcwykowmmmwioqs = $this->omwawqyqikcsgyqo($wkcwykowmmmwioqs);
        goto ssuagkigqokwaekc;
        cwqecoyeuseoiyee:
        goto gameegaekuiikoww;
        goto iukwaymqsaukgucc;
        oukcgieuakaagsaw:
        $wkcwykowmmmwioqs = $this->omwawqyqikcsgyqo($wkcwykowmmmwioqs);
        goto aeagssqaiwooeoei;
        egcqemgwyuoosmuq:
        return $wkcwykowmmmwioqs;
        goto wekieycqkqmgagyq;
        usuaqaeacooqoqeg:
        wwuccwuuawkiywgk:
        goto icaaymowyygqqwsa;
        qccywycocsamgkqi:
        if (!$this->kasioquywmeosmsi()->exists($wkcwykowmmmwioqs)) {
            goto wmmsqcgygcuuaycy;
        }
        goto uaamwamsuakywoqc;
        wekieycqkqmgagyq:
    }
}
