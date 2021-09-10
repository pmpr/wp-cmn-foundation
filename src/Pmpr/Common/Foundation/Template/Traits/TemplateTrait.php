<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        iygkkieqyqoeaaee:
        return $this->templating;
        goto iigquwogaowewecc;
        ecmwwosseekiuagg:
        if ($this->templating) {
            goto ecckmmswcugmikea;
        }
        goto cmqwceuukuwoiwek;
        cmqwceuukuwoiwek:
        $this->templating = Twig::symcgieuakksimmu()->uykissogmuaaocsg();
        goto aaoqwwkgcmmuoyaw;
        aaoqwwkgcmmuoyaw:
        ecckmmswcugmikea:
        goto iygkkieqyqoeaaee;
        iigquwogaowewecc:
    }
    
    public final function iuygowkemiiwqmiw(string $qqscaoyqikuyeoaw, array $qookweymeqawmcwo = [], array $ywmkwiwkosakssii = []) : string
    {
        goto uwsciuioqumimyuw;
        ccwikwaicwwsewyc:
        $nsmgceoqaqogqmuw = $this->kasioquywmeosmsi()->render($wkcwykowmmmwioqs, $qookweymeqawmcwo);
        goto oqgegyekomogicem;
        wyusiimusqwqkkay:
        return $nsmgceoqaqogqmuw;
        goto osikekkwkwccuosu;
        kekgsuqmmcqiwkmm:
        $koaqeegoeiaiccse = ManipulateArray::get($ywmkwiwkosakssii, "\x65\x63\150\157", false);
        goto moikisugcqcsaaoy;
        oqgegyekomogicem:
        if (!$koaqeegoeiaiccse) {
            goto uookkcasyoqgsisc;
        }
        goto mqqsyewyymsekyai;
        usmqcukamkauwqmu:
        $ggauoeuaesiymgee = ManipulateArray::get($ywmkwiwkosakssii, "\144\145\146\141\165\x6c\164", false);
        goto cimeeqaiweeqawam;
        uwsciuioqumimyuw:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\145\143\150\x6f" => false, "\143\154\141\x73\x73" => false, "\144\x65\146\x61\x75\154\164" => false]);
        goto kekgsuqmmcqiwkmm;
        moikisugcqcsaaoy:
        $egkyssmuqcwaciya = ManipulateArray::get($ywmkwiwkosakssii, "\143\x6c\141\163\163", false);
        goto usmqcukamkauwqmu;
        cimeeqaiweeqawam:
        $wkcwykowmmmwioqs = $this->eskggqsasgsiommy($qqscaoyqikuyeoaw, $ggauoeuaesiymgee, $egkyssmuqcwaciya);
        goto ccwikwaicwwsewyc;
        mqqsyewyymsekyai:
        echo $nsmgceoqaqogqmuw;
        goto emmuasmesyuaymkc;
        emmuasmesyuaymkc:
        uookkcasyoqgsisc:
        goto wyusiimusqwqkkay;
        osikekkwkwccuosu:
    }
    
    public function sawwoqoiocqwakai($egkyssmuqcwaciya = null) : ?string
    {
        goto suweqsmuqmoqiqka;
        ksaquyioqskqgemw:
        if (!empty($this->templatePrefix)) {
            goto uwaecasqomqsismq;
        }
        goto owmmyggcqikgwmqi;
        qwoiqiaiueeksuea:
        return $this->kasioquywmeosmsi()->siameoooqiiuqgsm($egkyssmuqcwaciya);
        goto eakgoqeusssawkiy;
        eakgoqeusssawkiy:
        gkkagswkwmummiiy:
        goto ksaquyioqskqgemw;
        ocaecwowkcsoocci:
        uwaecasqomqsismq:
        goto wscmeqgusioeqece;
        wscmeqgusioeqece:
        return $this->templatePrefix;
        goto uimwkmsekogcooks;
        suweqsmuqmoqiqka:
        if (!$egkyssmuqcwaciya) {
            goto gkkagswkwmummiiy;
        }
        goto qwoiqiaiueeksuea;
        owmmyggcqikgwmqi:
        $this->templatePrefix = $this->kasioquywmeosmsi()->siameoooqiiuqgsm(self::uqggkiomyiceyooa());
        goto ocaecwowkcsoocci;
        uimwkmsekogcooks:
    }
    
    private final function omwawqyqikcsgyqo(string $mkomwsiykqigmqca) : string
    {
        goto yumsukgwuyomocge;
        qowksiiacauekqiw:
        $uomewyckeuqoqocu[] = $ymqmyyeuycgmigyo;
        goto ygmuqycgaqsukwug;
        yumsukgwuyomocge:
        $uomewyckeuqoqocu = explode(DIRECTORY_SEPARATOR, $mkomwsiykqigmqca);
        goto qsioegocesimcqee;
        qsioegocesimcqee:
        $ymqmyyeuycgmigyo = array_pop($uomewyckeuqoqocu);
        goto qsewamsaqkuuowas;
        ygmuqycgaqsukwug:
        return implode(DIRECTORY_SEPARATOR, $uomewyckeuqoqocu);
        goto geucmycgqkuqcgss;
        qsewamsaqkuuowas:
        array_pop($uomewyckeuqoqocu);
        goto qowksiiacauekqiw;
        geucmycgqkuqcgss:
    }
    
    public final function kkcywkucqsawqqqo($aiieyweysaukqemc = null, $mkomwsiykqigmqca = null)
    {
        goto ouaomcekuycgkesk;
        ouaomcekuycgkesk:
        $wksoawcgagcgoask = $this->akuociswqmoigkas();
        goto igysiemcggkiekyo;
        igysiemcggkiekyo:
        if ($mkomwsiykqigmqca) {
            goto oeaccykmeaiamqkw;
        }
        goto qwggsgwkeckokmce;
        qwggsgwkeckokmce:
        $mkomwsiykqigmqca = ManipulateFile::cmaecekuqkwmemms(strtoupper($wksoawcgagcgoask) . self::__ROOT__PATH);
        goto ueqwwycwakwsqgma;
        okoaqqegqeeqqsgw:
        return $this->kasioquywmeosmsi()->wkosicsekwkigyss($aiieyweysaukqemc, $mkomwsiykqigmqca);
        goto cmykqwcwsgcoouiu;
        osumceweusuqiycu:
        $aiieyweysaukqemc = strtolower($wksoawcgagcgoask);
        goto mykaamwaiguuckgu;
        iikiemieyocgiswa:
        if ($aiieyweysaukqemc) {
            goto mqmcyogeociuooau;
        }
        goto osumceweusuqiycu;
        ueqwwycwakwsqgma:
        oeaccykmeaiamqkw:
        goto iikiemieyocgiswa;
        mykaamwaiguuckgu:
        mqmcyogeociuooau:
        goto okoaqqegqeeqqsgw;
        cmykqwcwsgcoouiu:
    }
    
    public final function eskggqsasgsiommy($qqscaoyqikuyeoaw, ?string $ggauoeuaesiymgee = null, $egkyssmuqcwaciya = null)
    {
        goto qwiwekqsmmeakmuw;
        qksaqkeugsqscias:
        $wkcwykowmmmwioqs = $this->ygwkeuwkeyieqsim(trailingslashit($this->sawwoqoiocqwakai($egkyssmuqcwaciya)), "{$qqscaoyqikuyeoaw}{$sqeykgyoooqysmca}\x2e\164\x77\x69\x67", $ggauoeuaesiymgee);
        goto gmowomwyecacouuw;
        sicyosycsmuqsysq:
        ooocyiciwokoqucy:
        goto qksaqkeugsqscias;
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
        mioukcqeukuoiowc:
        if (preg_match("\x2f\134\56\50\x5b\60\x2d\71\141\x2d\x7a\135\x2b\44\x29\x2f\151", $qqscaoyqikuyeoaw, $meyiiwcswqmuggyg)) {
            goto ooocyiciwokoqucy;
        }
        goto cmmagyiwukeyqwsy;
        qwiwekqsmmeakmuw:
        $wkcwykowmmmwioqs = $this->ygwkeuwkeyieqsim($qqscaoyqikuyeoaw);
        goto kauowiucwweueecy;
        cmmagyiwukeyqwsy:
        $sqeykgyoooqysmca = "\x2e\x68\164\x6d\x6c";
        goto sicyosycsmuqsysq;
        gmowomwyecacouuw:
        ieqomucoayqoemog:
        goto wwuccwuuawkiywgk;
        gameegaekuiikoww:
    }
    
    private final function ygwkeuwkeyieqsim(?string $wkcwykowmmmwioqs, ?string $qqscaoyqikuyeoaw = null, ?string $ggauoeuaesiymgee = null)
    {
        goto uaamwamsuakywoqc;
        icaaymowyygqqwsa:
        if (!(!$this->kasioquywmeosmsi()->exists($qqscaoyqikuyeoaw) && $ggauoeuaesiymgee)) {
            goto wmmsqcgygcuuaycy;
        }
        goto cwqecoyeuseoiyee;
        egcqemgwyuoosmuq:
        $wkcwykowmmmwioqs = $this->omwawqyqikcsgyqo($wkcwykowmmmwioqs);
        goto wekieycqkqmgagyq;
        yccqswiseqwmqqyg:
        if ($qqscaoyqikuyeoaw) {
            goto aieyemueueyscaym;
        }
        goto ecqkyymaqewoquuu;
        cwqecoyeuseoiyee:
        $qqscaoyqikuyeoaw = $wkcwykowmmmwioqs . $ggauoeuaesiymgee;
        goto iukwaymqsaukgucc;
        mskkcyugwccmgmue:
        qowesgcsaiysuagc:
        goto usuaqaeacooqoqeg;
        wigkaokkwyecekic:
        $wkcwykowmmmwioqs = $this->omwawqyqikcsgyqo($wkcwykowmmmwioqs);
        goto mskkcyugwccmgmue;
        aeagssqaiwooeoei:
        goto cmieikgaiegwmycs;
        goto cusmimwmwgscqeku;
        wekieycqkqmgagyq:
        cmieikgaiegwmycs:
        goto gogmaqgwwsoekumo;
        ssuagkigqokwaekc:
        aieyemueueyscaym:
        goto uumwyacekksycmcy;
        gogmaqgwwsoekumo:
        qccywycocsamgkqi:
        goto wucqauasuekkoayw;
        uumwyacekksycmcy:
        if ($this->kasioquywmeosmsi()->exists($wkcwykowmmmwioqs . $qqscaoyqikuyeoaw)) {
            goto qowesgcsaiysuagc;
        }
        goto wigkaokkwyecekic;
        uaamwamsuakywoqc:
        if (!$wkcwykowmmmwioqs) {
            goto qccywycocsamgkqi;
        }
        goto yccqswiseqwmqqyg;
        cusmimwmwgscqeku:
        eeiweeggimkmqoqg:
        goto egcqemgwyuoosmuq;
        iukwaymqsaukgucc:
        wmmsqcgygcuuaycy:
        goto oukcgieuakaagsaw;
        ecqkyymaqewoquuu:
        if (!$this->kasioquywmeosmsi()->exists($wkcwykowmmmwioqs)) {
            goto eeiweeggimkmqoqg;
        }
        goto cywkigiikmcqaskw;
        cywkigiikmcqaskw:
        goto cmieikgaiegwmycs;
        goto ssuagkigqokwaekc;
        wucqauasuekkoayw:
        return $wkcwykowmmmwioqs;
        goto qiuucioewqyqqwok;
        usuaqaeacooqoqeg:
        $qqscaoyqikuyeoaw = $wkcwykowmmmwioqs . $qqscaoyqikuyeoaw;
        goto icaaymowyygqqwsa;
        oukcgieuakaagsaw:
        $wkcwykowmmmwioqs = $qqscaoyqikuyeoaw;
        goto aeagssqaiwooeoei;
        qiuucioewqyqqwok:
    }
}
