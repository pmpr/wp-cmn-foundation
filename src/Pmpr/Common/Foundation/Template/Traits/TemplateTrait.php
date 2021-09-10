<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        ecmwwosseekiuagg:
        if ($this->templating) {
            goto ecckmmswcugmikea;
        }
        goto cmqwceuukuwoiwek;
        cmqwceuukuwoiwek:
        $this->templating = Twig::symcgieuakksimmu()->uykissogmuaaocsg();
        goto aaoqwwkgcmmuoyaw;
        iygkkieqyqoeaaee:
        return $this->templating;
        goto iigquwogaowewecc;
        aaoqwwkgcmmuoyaw:
        ecckmmswcugmikea:
        goto iygkkieqyqoeaaee;
        iigquwogaowewecc:
    }
    
    public final function iuygowkemiiwqmiw(string $qqscaoyqikuyeoaw, array $qookweymeqawmcwo = [], array $ywmkwiwkosakssii = []) : string
    {
        goto uwsciuioqumimyuw;
        cimeeqaiweeqawam:
        $wkcwykowmmmwioqs = $this->eskggqsasgsiommy($qqscaoyqikuyeoaw, $ggauoeuaesiymgee, $egkyssmuqcwaciya);
        goto ccwikwaicwwsewyc;
        emmuasmesyuaymkc:
        uookkcasyoqgsisc:
        goto wyusiimusqwqkkay;
        moikisugcqcsaaoy:
        $egkyssmuqcwaciya = ManipulateArray::get($ywmkwiwkosakssii, "\143\x6c\x61\163\163", false);
        goto usmqcukamkauwqmu;
        oqgegyekomogicem:
        if (!$koaqeegoeiaiccse) {
            goto uookkcasyoqgsisc;
        }
        goto mqqsyewyymsekyai;
        wyusiimusqwqkkay:
        return $nsmgceoqaqogqmuw;
        goto osikekkwkwccuosu;
        uwsciuioqumimyuw:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x65\143\150\x6f" => false, "\143\x6c\141\x73\x73" => false, "\144\x65\x66\x61\x75\154\164" => false]);
        goto kekgsuqmmcqiwkmm;
        ccwikwaicwwsewyc:
        $nsmgceoqaqogqmuw = $this->kasioquywmeosmsi()->render($wkcwykowmmmwioqs, $qookweymeqawmcwo);
        goto oqgegyekomogicem;
        usmqcukamkauwqmu:
        $ggauoeuaesiymgee = ManipulateArray::get($ywmkwiwkosakssii, "\144\145\146\141\165\154\x74", false);
        goto cimeeqaiweeqawam;
        mqqsyewyymsekyai:
        echo $nsmgceoqaqogqmuw;
        goto emmuasmesyuaymkc;
        kekgsuqmmcqiwkmm:
        $koaqeegoeiaiccse = ManipulateArray::get($ywmkwiwkosakssii, "\x65\143\x68\157", false);
        goto moikisugcqcsaaoy;
        osikekkwkwccuosu:
    }
    
    public function sawwoqoiocqwakai($egkyssmuqcwaciya = null) : ?string
    {
        goto suweqsmuqmoqiqka;
        qwoiqiaiueeksuea:
        return $this->kasioquywmeosmsi()->siameoooqiiuqgsm($egkyssmuqcwaciya);
        goto eakgoqeusssawkiy;
        eakgoqeusssawkiy:
        gkkagswkwmummiiy:
        goto ksaquyioqskqgemw;
        ocaecwowkcsoocci:
        uwaecasqomqsismq:
        goto wscmeqgusioeqece;
        owmmyggcqikgwmqi:
        $this->templatePrefix = $this->kasioquywmeosmsi()->siameoooqiiuqgsm(self::uqggkiomyiceyooa());
        goto ocaecwowkcsoocci;
        ksaquyioqskqgemw:
        if (!empty($this->templatePrefix)) {
            goto uwaecasqomqsismq;
        }
        goto owmmyggcqikgwmqi;
        wscmeqgusioeqece:
        return $this->templatePrefix;
        goto uimwkmsekogcooks;
        suweqsmuqmoqiqka:
        if (!$egkyssmuqcwaciya) {
            goto gkkagswkwmummiiy;
        }
        goto qwoiqiaiueeksuea;
        uimwkmsekogcooks:
    }
    
    private final function omwawqyqikcsgyqo(string $mkomwsiykqigmqca) : string
    {
        goto yumsukgwuyomocge;
        qowksiiacauekqiw:
        $uomewyckeuqoqocu[] = $ymqmyyeuycgmigyo;
        goto ygmuqycgaqsukwug;
        qsioegocesimcqee:
        $ymqmyyeuycgmigyo = array_pop($uomewyckeuqoqocu);
        goto qsewamsaqkuuowas;
        qsewamsaqkuuowas:
        array_pop($uomewyckeuqoqocu);
        goto qowksiiacauekqiw;
        ygmuqycgaqsukwug:
        return implode(DIRECTORY_SEPARATOR, $uomewyckeuqoqocu);
        goto geucmycgqkuqcgss;
        yumsukgwuyomocge:
        $uomewyckeuqoqocu = explode(DIRECTORY_SEPARATOR, $mkomwsiykqigmqca);
        goto qsioegocesimcqee;
        geucmycgqkuqcgss:
    }
    
    public final function kkcywkucqsawqqqo($aiieyweysaukqemc = null, $mkomwsiykqigmqca = null)
    {
        goto ouaomcekuycgkesk;
        ouaomcekuycgkesk:
        $wksoawcgagcgoask = $this->akuociswqmoigkas();
        goto igysiemcggkiekyo;
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
        qwggsgwkeckokmce:
        $mkomwsiykqigmqca = ManipulateFile::cmaecekuqkwmemms(strtoupper($wksoawcgagcgoask) . self::__ROOT__PATH);
        goto ueqwwycwakwsqgma;
        ueqwwycwakwsqgma:
        oeaccykmeaiamqkw:
        goto iikiemieyocgiswa;
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
        qksaqkeugsqscias:
        $wkcwykowmmmwioqs = $this->ygwkeuwkeyieqsim(trailingslashit($this->sawwoqoiocqwakai($egkyssmuqcwaciya)), "{$qqscaoyqikuyeoaw}{$sqeykgyoooqysmca}\x2e\164\x77\x69\x67", $ggauoeuaesiymgee);
        goto gmowomwyecacouuw;
        kauowiucwweueecy:
        if ($this->kasioquywmeosmsi()->exists($wkcwykowmmmwioqs)) {
            goto ieqomucoayqoemog;
        }
        goto eicgugqewsqoeqyq;
        wwuccwuuawkiywgk:
        return $wkcwykowmmmwioqs;
        goto gameegaekuiikoww;
        mioukcqeukuoiowc:
        if (preg_match("\x2f\x5c\56\x28\133\60\x2d\71\141\x2d\172\135\53\x24\x29\57\x69", $qqscaoyqikuyeoaw, $meyiiwcswqmuggyg)) {
            goto ooocyiciwokoqucy;
        }
        goto cmmagyiwukeyqwsy;
        sicyosycsmuqsysq:
        ooocyiciwokoqucy:
        goto qksaqkeugsqscias;
        qwiwekqsmmeakmuw:
        $wkcwykowmmmwioqs = $this->ygwkeuwkeyieqsim($qqscaoyqikuyeoaw);
        goto kauowiucwweueecy;
        gmowomwyecacouuw:
        ieqomucoayqoemog:
        goto wwuccwuuawkiywgk;
        eicgugqewsqoeqyq:
        $sqeykgyoooqysmca = '';
        goto mioukcqeukuoiowc;
        cmmagyiwukeyqwsy:
        $sqeykgyoooqysmca = "\56\x68\x74\155\154";
        goto sicyosycsmuqsysq;
        gameegaekuiikoww:
    }
    
    private final function ygwkeuwkeyieqsim(?string $wkcwykowmmmwioqs, ?string $qqscaoyqikuyeoaw = null, ?string $ggauoeuaesiymgee = null)
    {
        goto uaamwamsuakywoqc;
        aeagssqaiwooeoei:
        goto cmieikgaiegwmycs;
        goto cusmimwmwgscqeku;
        usuaqaeacooqoqeg:
        $qqscaoyqikuyeoaw = $wkcwykowmmmwioqs . $qqscaoyqikuyeoaw;
        goto icaaymowyygqqwsa;
        gogmaqgwwsoekumo:
        qccywycocsamgkqi:
        goto wucqauasuekkoayw;
        cusmimwmwgscqeku:
        eeiweeggimkmqoqg:
        goto egcqemgwyuoosmuq;
        wigkaokkwyecekic:
        $wkcwykowmmmwioqs = $this->omwawqyqikcsgyqo($wkcwykowmmmwioqs);
        goto mskkcyugwccmgmue;
        mskkcyugwccmgmue:
        qowesgcsaiysuagc:
        goto usuaqaeacooqoqeg;
        uaamwamsuakywoqc:
        if (!$wkcwykowmmmwioqs) {
            goto qccywycocsamgkqi;
        }
        goto yccqswiseqwmqqyg;
        wekieycqkqmgagyq:
        cmieikgaiegwmycs:
        goto gogmaqgwwsoekumo;
        icaaymowyygqqwsa:
        if (!(!$this->kasioquywmeosmsi()->exists($qqscaoyqikuyeoaw) && $ggauoeuaesiymgee)) {
            goto wmmsqcgygcuuaycy;
        }
        goto cwqecoyeuseoiyee;
        egcqemgwyuoosmuq:
        $wkcwykowmmmwioqs = $this->omwawqyqikcsgyqo($wkcwykowmmmwioqs);
        goto wekieycqkqmgagyq;
        cwqecoyeuseoiyee:
        $qqscaoyqikuyeoaw = $wkcwykowmmmwioqs . $ggauoeuaesiymgee;
        goto iukwaymqsaukgucc;
        ssuagkigqokwaekc:
        aieyemueueyscaym:
        goto uumwyacekksycmcy;
        cywkigiikmcqaskw:
        goto cmieikgaiegwmycs;
        goto ssuagkigqokwaekc;
        uumwyacekksycmcy:
        if ($this->kasioquywmeosmsi()->exists($wkcwykowmmmwioqs . $qqscaoyqikuyeoaw)) {
            goto qowesgcsaiysuagc;
        }
        goto wigkaokkwyecekic;
        ecqkyymaqewoquuu:
        if (!$this->kasioquywmeosmsi()->exists($wkcwykowmmmwioqs)) {
            goto eeiweeggimkmqoqg;
        }
        goto cywkigiikmcqaskw;
        oukcgieuakaagsaw:
        $wkcwykowmmmwioqs = $qqscaoyqikuyeoaw;
        goto aeagssqaiwooeoei;
        yccqswiseqwmqqyg:
        if ($qqscaoyqikuyeoaw) {
            goto aieyemueueyscaym;
        }
        goto ecqkyymaqewoquuu;
        wucqauasuekkoayw:
        return $wkcwykowmmmwioqs;
        goto qiuucioewqyqqwok;
        iukwaymqsaukgucc:
        wmmsqcgygcuuaycy:
        goto oukcgieuakaagsaw;
        qiuucioewqyqqwok:
    }
}
