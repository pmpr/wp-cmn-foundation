<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        goto ecmwwosseekiuagg;
        aaoqwwkgcmmuoyaw:
        ecckmmswcugmikea:
        goto iygkkieqyqoeaaee;
        ecmwwosseekiuagg:
        if ($this->templating) {
            goto ecckmmswcugmikea;
        }
        goto cmqwceuukuwoiwek;
        iygkkieqyqoeaaee:
        return $this->templating;
        goto iigquwogaowewecc;
        cmqwceuukuwoiwek:
        $this->templating = Twig::symcgieuakksimmu()->uykissogmuaaocsg();
        goto aaoqwwkgcmmuoyaw;
        iigquwogaowewecc:
    }
    
    public final function iuygowkemiiwqmiw(string $qqscaoyqikuyeoaw, array $qookweymeqawmcwo = [], array $ywmkwiwkosakssii = []) : string
    {
        goto uwsciuioqumimyuw;
        kekgsuqmmcqiwkmm:
        $koaqeegoeiaiccse = ManipulateArray::get($ywmkwiwkosakssii, "\x65\x63\x68\x6f", false);
        goto moikisugcqcsaaoy;
        ccwikwaicwwsewyc:
        $nsmgceoqaqogqmuw = $this->kasioquywmeosmsi()->render($wkcwykowmmmwioqs, $qookweymeqawmcwo);
        goto oqgegyekomogicem;
        usmqcukamkauwqmu:
        $ggauoeuaesiymgee = ManipulateArray::get($ywmkwiwkosakssii, "\144\145\x66\141\x75\154\x74", false);
        goto cimeeqaiweeqawam;
        wyusiimusqwqkkay:
        return $nsmgceoqaqogqmuw;
        goto osikekkwkwccuosu;
        cimeeqaiweeqawam:
        $wkcwykowmmmwioqs = $this->eskggqsasgsiommy($qqscaoyqikuyeoaw, $ggauoeuaesiymgee, $egkyssmuqcwaciya);
        goto ccwikwaicwwsewyc;
        mqqsyewyymsekyai:
        echo $nsmgceoqaqogqmuw;
        goto emmuasmesyuaymkc;
        oqgegyekomogicem:
        if (!$koaqeegoeiaiccse) {
            goto uookkcasyoqgsisc;
        }
        goto mqqsyewyymsekyai;
        moikisugcqcsaaoy:
        $egkyssmuqcwaciya = ManipulateArray::get($ywmkwiwkosakssii, "\143\x6c\141\x73\x73", false);
        goto usmqcukamkauwqmu;
        uwsciuioqumimyuw:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x65\143\150\157" => false, "\143\x6c\141\163\163" => false, "\144\x65\x66\141\x75\154\164" => false]);
        goto kekgsuqmmcqiwkmm;
        emmuasmesyuaymkc:
        uookkcasyoqgsisc:
        goto wyusiimusqwqkkay;
        osikekkwkwccuosu:
    }
    
    public function sawwoqoiocqwakai($egkyssmuqcwaciya = null) : ?string
    {
        goto suweqsmuqmoqiqka;
        owmmyggcqikgwmqi:
        $this->templatePrefix = $this->kasioquywmeosmsi()->siameoooqiiuqgsm(self::uqggkiomyiceyooa());
        goto ocaecwowkcsoocci;
        ocaecwowkcsoocci:
        uwaecasqomqsismq:
        goto wscmeqgusioeqece;
        wscmeqgusioeqece:
        return $this->templatePrefix;
        goto uimwkmsekogcooks;
        eakgoqeusssawkiy:
        gkkagswkwmummiiy:
        goto ksaquyioqskqgemw;
        suweqsmuqmoqiqka:
        if (!$egkyssmuqcwaciya) {
            goto gkkagswkwmummiiy;
        }
        goto qwoiqiaiueeksuea;
        qwoiqiaiueeksuea:
        return $this->kasioquywmeosmsi()->siameoooqiiuqgsm($egkyssmuqcwaciya);
        goto eakgoqeusssawkiy;
        ksaquyioqskqgemw:
        if (!empty($this->templatePrefix)) {
            goto uwaecasqomqsismq;
        }
        goto owmmyggcqikgwmqi;
        uimwkmsekogcooks:
    }
    
    private final function omwawqyqikcsgyqo(string $mkomwsiykqigmqca) : string
    {
        goto yumsukgwuyomocge;
        yumsukgwuyomocge:
        $uomewyckeuqoqocu = explode(DIRECTORY_SEPARATOR, $mkomwsiykqigmqca);
        goto qsioegocesimcqee;
        qsioegocesimcqee:
        $ymqmyyeuycgmigyo = array_pop($uomewyckeuqoqocu);
        goto qsewamsaqkuuowas;
        qowksiiacauekqiw:
        $uomewyckeuqoqocu[] = $ymqmyyeuycgmigyo;
        goto ygmuqycgaqsukwug;
        qsewamsaqkuuowas:
        array_pop($uomewyckeuqoqocu);
        goto qowksiiacauekqiw;
        ygmuqycgaqsukwug:
        return implode(DIRECTORY_SEPARATOR, $uomewyckeuqoqocu);
        goto geucmycgqkuqcgss;
        geucmycgqkuqcgss:
    }
    
    public final function kkcywkucqsawqqqo($aiieyweysaukqemc = null, $mkomwsiykqigmqca = null)
    {
        goto ouaomcekuycgkesk;
        iikiemieyocgiswa:
        if ($aiieyweysaukqemc) {
            goto mqmcyogeociuooau;
        }
        goto osumceweusuqiycu;
        ouaomcekuycgkesk:
        $wksoawcgagcgoask = $this->akuociswqmoigkas();
        goto igysiemcggkiekyo;
        ueqwwycwakwsqgma:
        oeaccykmeaiamqkw:
        goto iikiemieyocgiswa;
        qwggsgwkeckokmce:
        $mkomwsiykqigmqca = ManipulateFile::cmaecekuqkwmemms(strtoupper($wksoawcgagcgoask) . self::__ROOT__PATH);
        goto ueqwwycwakwsqgma;
        okoaqqegqeeqqsgw:
        return $this->kasioquywmeosmsi()->wkosicsekwkigyss($aiieyweysaukqemc, $mkomwsiykqigmqca);
        goto cmykqwcwsgcoouiu;
        osumceweusuqiycu:
        $aiieyweysaukqemc = strtolower($wksoawcgagcgoask);
        goto mykaamwaiguuckgu;
        mykaamwaiguuckgu:
        mqmcyogeociuooau:
        goto okoaqqegqeeqqsgw;
        igysiemcggkiekyo:
        if ($mkomwsiykqigmqca) {
            goto oeaccykmeaiamqkw;
        }
        goto qwggsgwkeckokmce;
        cmykqwcwsgcoouiu:
    }
    
    public final function eskggqsasgsiommy($qqscaoyqikuyeoaw, ?string $ggauoeuaesiymgee = null, $egkyssmuqcwaciya = null)
    {
        goto qwiwekqsmmeakmuw;
        gmowomwyecacouuw:
        ieqomucoayqoemog:
        goto wwuccwuuawkiywgk;
        eicgugqewsqoeqyq:
        $sqeykgyoooqysmca = '';
        goto mioukcqeukuoiowc;
        kauowiucwweueecy:
        if ($this->kasioquywmeosmsi()->exists($wkcwykowmmmwioqs)) {
            goto ieqomucoayqoemog;
        }
        goto eicgugqewsqoeqyq;
        wwuccwuuawkiywgk:
        return $wkcwykowmmmwioqs;
        goto gameegaekuiikoww;
        qwiwekqsmmeakmuw:
        $wkcwykowmmmwioqs = $this->ygwkeuwkeyieqsim($qqscaoyqikuyeoaw);
        goto kauowiucwweueecy;
        qksaqkeugsqscias:
        $wkcwykowmmmwioqs = $this->ygwkeuwkeyieqsim(trailingslashit($this->sawwoqoiocqwakai($egkyssmuqcwaciya)), "{$qqscaoyqikuyeoaw}{$sqeykgyoooqysmca}\x2e\x74\x77\151\147", $ggauoeuaesiymgee);
        goto gmowomwyecacouuw;
        cmmagyiwukeyqwsy:
        $sqeykgyoooqysmca = "\56\x68\164\x6d\154";
        goto sicyosycsmuqsysq;
        mioukcqeukuoiowc:
        if (preg_match("\x2f\x5c\x2e\x28\133\60\x2d\71\141\x2d\x7a\135\53\44\x29\57\x69", $qqscaoyqikuyeoaw, $meyiiwcswqmuggyg)) {
            goto ooocyiciwokoqucy;
        }
        goto cmmagyiwukeyqwsy;
        sicyosycsmuqsysq:
        ooocyiciwokoqucy:
        goto qksaqkeugsqscias;
        gameegaekuiikoww:
    }
    
    private final function ygwkeuwkeyieqsim(?string $wkcwykowmmmwioqs, ?string $qqscaoyqikuyeoaw = null, ?string $ggauoeuaesiymgee = null)
    {
        goto uaamwamsuakywoqc;
        gogmaqgwwsoekumo:
        qccywycocsamgkqi:
        goto wucqauasuekkoayw;
        ecqkyymaqewoquuu:
        if (!$this->kasioquywmeosmsi()->exists($wkcwykowmmmwioqs)) {
            goto eeiweeggimkmqoqg;
        }
        goto cywkigiikmcqaskw;
        cusmimwmwgscqeku:
        eeiweeggimkmqoqg:
        goto egcqemgwyuoosmuq;
        cwqecoyeuseoiyee:
        $qqscaoyqikuyeoaw = $wkcwykowmmmwioqs . $ggauoeuaesiymgee;
        goto iukwaymqsaukgucc;
        wucqauasuekkoayw:
        return $wkcwykowmmmwioqs;
        goto qiuucioewqyqqwok;
        mskkcyugwccmgmue:
        qowesgcsaiysuagc:
        goto usuaqaeacooqoqeg;
        aeagssqaiwooeoei:
        goto cmieikgaiegwmycs;
        goto cusmimwmwgscqeku;
        cywkigiikmcqaskw:
        goto cmieikgaiegwmycs;
        goto ssuagkigqokwaekc;
        wekieycqkqmgagyq:
        cmieikgaiegwmycs:
        goto gogmaqgwwsoekumo;
        uaamwamsuakywoqc:
        if (!$wkcwykowmmmwioqs) {
            goto qccywycocsamgkqi;
        }
        goto yccqswiseqwmqqyg;
        egcqemgwyuoosmuq:
        $wkcwykowmmmwioqs = $this->omwawqyqikcsgyqo($wkcwykowmmmwioqs);
        goto wekieycqkqmgagyq;
        wigkaokkwyecekic:
        $wkcwykowmmmwioqs = $this->omwawqyqikcsgyqo($wkcwykowmmmwioqs);
        goto mskkcyugwccmgmue;
        uumwyacekksycmcy:
        if ($this->kasioquywmeosmsi()->exists($wkcwykowmmmwioqs . $qqscaoyqikuyeoaw)) {
            goto qowesgcsaiysuagc;
        }
        goto wigkaokkwyecekic;
        yccqswiseqwmqqyg:
        if ($qqscaoyqikuyeoaw) {
            goto aieyemueueyscaym;
        }
        goto ecqkyymaqewoquuu;
        icaaymowyygqqwsa:
        if (!(!$this->kasioquywmeosmsi()->exists($qqscaoyqikuyeoaw) && $ggauoeuaesiymgee)) {
            goto wmmsqcgygcuuaycy;
        }
        goto cwqecoyeuseoiyee;
        ssuagkigqokwaekc:
        aieyemueueyscaym:
        goto uumwyacekksycmcy;
        usuaqaeacooqoqeg:
        $qqscaoyqikuyeoaw = $wkcwykowmmmwioqs . $qqscaoyqikuyeoaw;
        goto icaaymowyygqqwsa;
        iukwaymqsaukgucc:
        wmmsqcgygcuuaycy:
        goto oukcgieuakaagsaw;
        oukcgieuakaagsaw:
        $wkcwykowmmmwioqs = $qqscaoyqikuyeoaw;
        goto aeagssqaiwooeoei;
        qiuucioewqyqqwok:
    }
}
