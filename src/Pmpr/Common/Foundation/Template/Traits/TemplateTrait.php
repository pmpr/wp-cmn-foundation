<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        cmqwceuukuwoiwek:
        $this->templating = Twig::symcgieuakksimmu()->uykissogmuaaocsg();
        goto aaoqwwkgcmmuoyaw;
        aaoqwwkgcmmuoyaw:
        ecckmmswcugmikea:
        goto iygkkieqyqoeaaee;
        iygkkieqyqoeaaee:
        return $this->templating;
        goto iigquwogaowewecc;
        ecmwwosseekiuagg:
        if ($this->templating) {
            goto ecckmmswcugmikea;
        }
        goto cmqwceuukuwoiwek;
        iigquwogaowewecc:
    }
    
    public final function iuygowkemiiwqmiw(string $qqscaoyqikuyeoaw, array $qookweymeqawmcwo = [], array $ywmkwiwkosakssii = []) : string
    {
        goto uwsciuioqumimyuw;
        usmqcukamkauwqmu:
        $ggauoeuaesiymgee = ManipulateArray::get($ywmkwiwkosakssii, "\x64\x65\146\x61\165\x6c\x74", false);
        goto cimeeqaiweeqawam;
        moikisugcqcsaaoy:
        $egkyssmuqcwaciya = ManipulateArray::get($ywmkwiwkosakssii, "\143\154\141\163\x73", false);
        goto usmqcukamkauwqmu;
        kekgsuqmmcqiwkmm:
        $koaqeegoeiaiccse = ManipulateArray::get($ywmkwiwkosakssii, "\x65\x63\150\157", false);
        goto moikisugcqcsaaoy;
        emmuasmesyuaymkc:
        uookkcasyoqgsisc:
        goto wyusiimusqwqkkay;
        mqqsyewyymsekyai:
        echo $nsmgceoqaqogqmuw;
        goto emmuasmesyuaymkc;
        ccwikwaicwwsewyc:
        $nsmgceoqaqogqmuw = $this->kasioquywmeosmsi()->render($wkcwykowmmmwioqs, $qookweymeqawmcwo);
        goto oqgegyekomogicem;
        uwsciuioqumimyuw:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x65\x63\x68\157" => false, "\x63\154\x61\x73\x73" => false, "\144\x65\146\141\165\x6c\x74" => false]);
        goto kekgsuqmmcqiwkmm;
        cimeeqaiweeqawam:
        $wkcwykowmmmwioqs = $this->eskggqsasgsiommy($qqscaoyqikuyeoaw, $ggauoeuaesiymgee, $egkyssmuqcwaciya);
        goto ccwikwaicwwsewyc;
        oqgegyekomogicem:
        if (!$koaqeegoeiaiccse) {
            goto uookkcasyoqgsisc;
        }
        goto mqqsyewyymsekyai;
        wyusiimusqwqkkay:
        return $nsmgceoqaqogqmuw;
        goto osikekkwkwccuosu;
        osikekkwkwccuosu:
    }
    
    public function sawwoqoiocqwakai($egkyssmuqcwaciya = null) : ?string
    {
        goto suweqsmuqmoqiqka;
        eakgoqeusssawkiy:
        gkkagswkwmummiiy:
        goto ksaquyioqskqgemw;
        qwoiqiaiueeksuea:
        return $this->kasioquywmeosmsi()->siameoooqiiuqgsm($egkyssmuqcwaciya);
        goto eakgoqeusssawkiy;
        suweqsmuqmoqiqka:
        if (!$egkyssmuqcwaciya) {
            goto gkkagswkwmummiiy;
        }
        goto qwoiqiaiueeksuea;
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
        uimwkmsekogcooks:
    }
    
    private final function omwawqyqikcsgyqo(string $mkomwsiykqigmqca) : string
    {
        goto yumsukgwuyomocge;
        qsewamsaqkuuowas:
        array_pop($uomewyckeuqoqocu);
        goto qowksiiacauekqiw;
        ygmuqycgaqsukwug:
        return implode(DIRECTORY_SEPARATOR, $uomewyckeuqoqocu);
        goto geucmycgqkuqcgss;
        qowksiiacauekqiw:
        $uomewyckeuqoqocu[] = $ymqmyyeuycgmigyo;
        goto ygmuqycgaqsukwug;
        yumsukgwuyomocge:
        $uomewyckeuqoqocu = explode(DIRECTORY_SEPARATOR, $mkomwsiykqigmqca);
        goto qsioegocesimcqee;
        qsioegocesimcqee:
        $ymqmyyeuycgmigyo = array_pop($uomewyckeuqoqocu);
        goto qsewamsaqkuuowas;
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
        qwggsgwkeckokmce:
        $mkomwsiykqigmqca = ManipulateFile::cmaecekuqkwmemms(strtoupper($wksoawcgagcgoask) . self::__ROOT__PATH);
        goto ueqwwycwakwsqgma;
        ouaomcekuycgkesk:
        $wksoawcgagcgoask = $this->akuociswqmoigkas();
        goto igysiemcggkiekyo;
        ueqwwycwakwsqgma:
        oeaccykmeaiamqkw:
        goto iikiemieyocgiswa;
        igysiemcggkiekyo:
        if ($mkomwsiykqigmqca) {
            goto oeaccykmeaiamqkw;
        }
        goto qwggsgwkeckokmce;
        mykaamwaiguuckgu:
        mqmcyogeociuooau:
        goto okoaqqegqeeqqsgw;
        osumceweusuqiycu:
        $aiieyweysaukqemc = strtolower($wksoawcgagcgoask);
        goto mykaamwaiguuckgu;
        okoaqqegqeeqqsgw:
        return $this->kasioquywmeosmsi()->wkosicsekwkigyss($aiieyweysaukqemc, $mkomwsiykqigmqca);
        goto cmykqwcwsgcoouiu;
        cmykqwcwsgcoouiu:
    }
    
    public final function eskggqsasgsiommy($qqscaoyqikuyeoaw, ?string $ggauoeuaesiymgee = null, $egkyssmuqcwaciya = null)
    {
        goto qwiwekqsmmeakmuw;
        qksaqkeugsqscias:
        $wkcwykowmmmwioqs = $this->ygwkeuwkeyieqsim(trailingslashit($this->sawwoqoiocqwakai($egkyssmuqcwaciya)), "{$qqscaoyqikuyeoaw}{$sqeykgyoooqysmca}\56\164\x77\x69\x67", $ggauoeuaesiymgee);
        goto gmowomwyecacouuw;
        sicyosycsmuqsysq:
        ooocyiciwokoqucy:
        goto qksaqkeugsqscias;
        qwiwekqsmmeakmuw:
        $wkcwykowmmmwioqs = $this->ygwkeuwkeyieqsim($qqscaoyqikuyeoaw);
        goto kauowiucwweueecy;
        gmowomwyecacouuw:
        ieqomucoayqoemog:
        goto wwuccwuuawkiywgk;
        kauowiucwweueecy:
        if ($this->kasioquywmeosmsi()->exists($wkcwykowmmmwioqs)) {
            goto ieqomucoayqoemog;
        }
        goto eicgugqewsqoeqyq;
        wwuccwuuawkiywgk:
        return $wkcwykowmmmwioqs;
        goto gameegaekuiikoww;
        cmmagyiwukeyqwsy:
        $sqeykgyoooqysmca = "\56\150\x74\155\154";
        goto sicyosycsmuqsysq;
        eicgugqewsqoeqyq:
        $sqeykgyoooqysmca = '';
        goto mioukcqeukuoiowc;
        mioukcqeukuoiowc:
        if (preg_match("\x2f\134\56\50\133\x30\x2d\x39\141\55\x7a\x5d\x2b\x24\x29\57\x69", $qqscaoyqikuyeoaw, $meyiiwcswqmuggyg)) {
            goto ooocyiciwokoqucy;
        }
        goto cmmagyiwukeyqwsy;
        gameegaekuiikoww:
    }
    
    private final function ygwkeuwkeyieqsim(?string $wkcwykowmmmwioqs, ?string $qqscaoyqikuyeoaw = null, ?string $ggauoeuaesiymgee = null)
    {
        goto uaamwamsuakywoqc;
        ecqkyymaqewoquuu:
        if (!$this->kasioquywmeosmsi()->exists($wkcwykowmmmwioqs)) {
            goto eeiweeggimkmqoqg;
        }
        goto cywkigiikmcqaskw;
        cwqecoyeuseoiyee:
        $qqscaoyqikuyeoaw = $wkcwykowmmmwioqs . $ggauoeuaesiymgee;
        goto iukwaymqsaukgucc;
        oukcgieuakaagsaw:
        $wkcwykowmmmwioqs = $qqscaoyqikuyeoaw;
        goto aeagssqaiwooeoei;
        mskkcyugwccmgmue:
        qowesgcsaiysuagc:
        goto usuaqaeacooqoqeg;
        iukwaymqsaukgucc:
        wmmsqcgygcuuaycy:
        goto oukcgieuakaagsaw;
        ssuagkigqokwaekc:
        aieyemueueyscaym:
        goto uumwyacekksycmcy;
        cusmimwmwgscqeku:
        eeiweeggimkmqoqg:
        goto egcqemgwyuoosmuq;
        wigkaokkwyecekic:
        $wkcwykowmmmwioqs = $this->omwawqyqikcsgyqo($wkcwykowmmmwioqs);
        goto mskkcyugwccmgmue;
        usuaqaeacooqoqeg:
        $qqscaoyqikuyeoaw = $wkcwykowmmmwioqs . $qqscaoyqikuyeoaw;
        goto icaaymowyygqqwsa;
        icaaymowyygqqwsa:
        if (!(!$this->kasioquywmeosmsi()->exists($qqscaoyqikuyeoaw) && $ggauoeuaesiymgee)) {
            goto wmmsqcgygcuuaycy;
        }
        goto cwqecoyeuseoiyee;
        wucqauasuekkoayw:
        return $wkcwykowmmmwioqs;
        goto qiuucioewqyqqwok;
        gogmaqgwwsoekumo:
        qccywycocsamgkqi:
        goto wucqauasuekkoayw;
        uaamwamsuakywoqc:
        if (!$wkcwykowmmmwioqs) {
            goto qccywycocsamgkqi;
        }
        goto yccqswiseqwmqqyg;
        egcqemgwyuoosmuq:
        $wkcwykowmmmwioqs = $this->omwawqyqikcsgyqo($wkcwykowmmmwioqs);
        goto wekieycqkqmgagyq;
        wekieycqkqmgagyq:
        cmieikgaiegwmycs:
        goto gogmaqgwwsoekumo;
        cywkigiikmcqaskw:
        goto cmieikgaiegwmycs;
        goto ssuagkigqokwaekc;
        yccqswiseqwmqqyg:
        if ($qqscaoyqikuyeoaw) {
            goto aieyemueueyscaym;
        }
        goto ecqkyymaqewoquuu;
        aeagssqaiwooeoei:
        goto cmieikgaiegwmycs;
        goto cusmimwmwgscqeku;
        uumwyacekksycmcy:
        if ($this->kasioquywmeosmsi()->exists($wkcwykowmmmwioqs . $qqscaoyqikuyeoaw)) {
            goto qowesgcsaiysuagc;
        }
        goto wigkaokkwyecekic;
        qiuucioewqyqqwok:
    }
}
