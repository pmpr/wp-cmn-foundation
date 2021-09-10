<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        aaoqwwkgcmmuoyaw:
        ecckmmswcugmikea:
        goto iygkkieqyqoeaaee;
        cmqwceuukuwoiwek:
        $this->templating = Twig::symcgieuakksimmu()->uykissogmuaaocsg();
        goto aaoqwwkgcmmuoyaw;
        iygkkieqyqoeaaee:
        return $this->templating;
        goto iigquwogaowewecc;
        iigquwogaowewecc:
    }
    
    public final function iuygowkemiiwqmiw(string $qqscaoyqikuyeoaw, array $qookweymeqawmcwo = [], array $ywmkwiwkosakssii = []) : string
    {
        goto uwsciuioqumimyuw;
        mqqsyewyymsekyai:
        echo $nsmgceoqaqogqmuw;
        goto emmuasmesyuaymkc;
        oqgegyekomogicem:
        if (!$koaqeegoeiaiccse) {
            goto uookkcasyoqgsisc;
        }
        goto mqqsyewyymsekyai;
        kekgsuqmmcqiwkmm:
        $koaqeegoeiaiccse = ManipulateArray::get($ywmkwiwkosakssii, "\145\143\150\157", false);
        goto moikisugcqcsaaoy;
        wyusiimusqwqkkay:
        return $nsmgceoqaqogqmuw;
        goto osikekkwkwccuosu;
        cimeeqaiweeqawam:
        $wkcwykowmmmwioqs = $this->eskggqsasgsiommy($qqscaoyqikuyeoaw, $ggauoeuaesiymgee, $egkyssmuqcwaciya);
        goto ccwikwaicwwsewyc;
        emmuasmesyuaymkc:
        uookkcasyoqgsisc:
        goto wyusiimusqwqkkay;
        moikisugcqcsaaoy:
        $egkyssmuqcwaciya = ManipulateArray::get($ywmkwiwkosakssii, "\143\x6c\141\x73\163", false);
        goto usmqcukamkauwqmu;
        uwsciuioqumimyuw:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\145\x63\x68\157" => false, "\x63\154\141\163\163" => false, "\x64\145\x66\x61\165\154\x74" => false]);
        goto kekgsuqmmcqiwkmm;
        ccwikwaicwwsewyc:
        $nsmgceoqaqogqmuw = $this->kasioquywmeosmsi()->render($wkcwykowmmmwioqs, $qookweymeqawmcwo);
        goto oqgegyekomogicem;
        usmqcukamkauwqmu:
        $ggauoeuaesiymgee = ManipulateArray::get($ywmkwiwkosakssii, "\x64\x65\x66\141\165\x6c\164", false);
        goto cimeeqaiweeqawam;
        osikekkwkwccuosu:
    }
    
    public function sawwoqoiocqwakai($egkyssmuqcwaciya = null) : ?string
    {
        goto suweqsmuqmoqiqka;
        eakgoqeusssawkiy:
        gkkagswkwmummiiy:
        goto ksaquyioqskqgemw;
        ocaecwowkcsoocci:
        uwaecasqomqsismq:
        goto wscmeqgusioeqece;
        wscmeqgusioeqece:
        return $this->templatePrefix;
        goto uimwkmsekogcooks;
        owmmyggcqikgwmqi:
        $this->templatePrefix = $this->kasioquywmeosmsi()->siameoooqiiuqgsm(self::uqggkiomyiceyooa());
        goto ocaecwowkcsoocci;
        ksaquyioqskqgemw:
        if (!empty($this->templatePrefix)) {
            goto uwaecasqomqsismq;
        }
        goto owmmyggcqikgwmqi;
        suweqsmuqmoqiqka:
        if (!$egkyssmuqcwaciya) {
            goto gkkagswkwmummiiy;
        }
        goto qwoiqiaiueeksuea;
        qwoiqiaiueeksuea:
        return $this->kasioquywmeosmsi()->siameoooqiiuqgsm($egkyssmuqcwaciya);
        goto eakgoqeusssawkiy;
        uimwkmsekogcooks:
    }
    
    private final function omwawqyqikcsgyqo(string $mkomwsiykqigmqca) : string
    {
        goto yumsukgwuyomocge;
        yumsukgwuyomocge:
        $uomewyckeuqoqocu = explode(DIRECTORY_SEPARATOR, $mkomwsiykqigmqca);
        goto qsioegocesimcqee;
        qsewamsaqkuuowas:
        array_pop($uomewyckeuqoqocu);
        goto qowksiiacauekqiw;
        qsioegocesimcqee:
        $ymqmyyeuycgmigyo = array_pop($uomewyckeuqoqocu);
        goto qsewamsaqkuuowas;
        qowksiiacauekqiw:
        $uomewyckeuqoqocu[] = $ymqmyyeuycgmigyo;
        goto ygmuqycgaqsukwug;
        ygmuqycgaqsukwug:
        return implode(DIRECTORY_SEPARATOR, $uomewyckeuqoqocu);
        goto geucmycgqkuqcgss;
        geucmycgqkuqcgss:
    }
    
    public final function kkcywkucqsawqqqo($aiieyweysaukqemc = null, $mkomwsiykqigmqca = null)
    {
        goto ouaomcekuycgkesk;
        igysiemcggkiekyo:
        if ($mkomwsiykqigmqca) {
            goto oeaccykmeaiamqkw;
        }
        goto qwggsgwkeckokmce;
        qwggsgwkeckokmce:
        $mkomwsiykqigmqca = ManipulateFile::cmaecekuqkwmemms(strtoupper($wksoawcgagcgoask) . self::__ROOT__PATH);
        goto ueqwwycwakwsqgma;
        iikiemieyocgiswa:
        if ($aiieyweysaukqemc) {
            goto mqmcyogeociuooau;
        }
        goto osumceweusuqiycu;
        ouaomcekuycgkesk:
        $wksoawcgagcgoask = $this->akuociswqmoigkas();
        goto igysiemcggkiekyo;
        osumceweusuqiycu:
        $aiieyweysaukqemc = strtolower($wksoawcgagcgoask);
        goto mykaamwaiguuckgu;
        ueqwwycwakwsqgma:
        oeaccykmeaiamqkw:
        goto iikiemieyocgiswa;
        mykaamwaiguuckgu:
        mqmcyogeociuooau:
        goto okoaqqegqeeqqsgw;
        okoaqqegqeeqqsgw:
        return $this->kasioquywmeosmsi()->wkosicsekwkigyss($aiieyweysaukqemc, $mkomwsiykqigmqca);
        goto cmykqwcwsgcoouiu;
        cmykqwcwsgcoouiu:
    }
    
    public final function eskggqsasgsiommy($qqscaoyqikuyeoaw, ?string $ggauoeuaesiymgee = null, $egkyssmuqcwaciya = null)
    {
        goto qwiwekqsmmeakmuw;
        cmmagyiwukeyqwsy:
        $sqeykgyoooqysmca = "\56\x68\164\155\154";
        goto sicyosycsmuqsysq;
        gmowomwyecacouuw:
        ieqomucoayqoemog:
        goto wwuccwuuawkiywgk;
        qksaqkeugsqscias:
        $wkcwykowmmmwioqs = $this->ygwkeuwkeyieqsim(trailingslashit($this->sawwoqoiocqwakai($egkyssmuqcwaciya)), "{$qqscaoyqikuyeoaw}{$sqeykgyoooqysmca}\x2e\x74\x77\x69\147", $ggauoeuaesiymgee);
        goto gmowomwyecacouuw;
        eicgugqewsqoeqyq:
        $sqeykgyoooqysmca = '';
        goto mioukcqeukuoiowc;
        wwuccwuuawkiywgk:
        return $wkcwykowmmmwioqs;
        goto gameegaekuiikoww;
        sicyosycsmuqsysq:
        ooocyiciwokoqucy:
        goto qksaqkeugsqscias;
        mioukcqeukuoiowc:
        if (preg_match("\57\134\x2e\50\133\x30\x2d\x39\x61\x2d\x7a\x5d\53\x24\51\x2f\x69", $qqscaoyqikuyeoaw, $meyiiwcswqmuggyg)) {
            goto ooocyiciwokoqucy;
        }
        goto cmmagyiwukeyqwsy;
        kauowiucwweueecy:
        if ($this->kasioquywmeosmsi()->exists($wkcwykowmmmwioqs)) {
            goto ieqomucoayqoemog;
        }
        goto eicgugqewsqoeqyq;
        qwiwekqsmmeakmuw:
        $wkcwykowmmmwioqs = $this->ygwkeuwkeyieqsim($qqscaoyqikuyeoaw);
        goto kauowiucwweueecy;
        gameegaekuiikoww:
    }
    
    private final function ygwkeuwkeyieqsim(?string $wkcwykowmmmwioqs, ?string $qqscaoyqikuyeoaw = null, ?string $ggauoeuaesiymgee = null)
    {
        goto uaamwamsuakywoqc;
        aeagssqaiwooeoei:
        goto cmieikgaiegwmycs;
        goto cusmimwmwgscqeku;
        oukcgieuakaagsaw:
        $wkcwykowmmmwioqs = $qqscaoyqikuyeoaw;
        goto aeagssqaiwooeoei;
        mskkcyugwccmgmue:
        qowesgcsaiysuagc:
        goto usuaqaeacooqoqeg;
        wigkaokkwyecekic:
        $wkcwykowmmmwioqs = $this->omwawqyqikcsgyqo($wkcwykowmmmwioqs);
        goto mskkcyugwccmgmue;
        uaamwamsuakywoqc:
        if (!$wkcwykowmmmwioqs) {
            goto qccywycocsamgkqi;
        }
        goto yccqswiseqwmqqyg;
        ecqkyymaqewoquuu:
        if (!$this->kasioquywmeosmsi()->exists($wkcwykowmmmwioqs)) {
            goto eeiweeggimkmqoqg;
        }
        goto cywkigiikmcqaskw;
        cwqecoyeuseoiyee:
        $qqscaoyqikuyeoaw = $wkcwykowmmmwioqs . $ggauoeuaesiymgee;
        goto iukwaymqsaukgucc;
        yccqswiseqwmqqyg:
        if ($qqscaoyqikuyeoaw) {
            goto aieyemueueyscaym;
        }
        goto ecqkyymaqewoquuu;
        ssuagkigqokwaekc:
        aieyemueueyscaym:
        goto uumwyacekksycmcy;
        iukwaymqsaukgucc:
        wmmsqcgygcuuaycy:
        goto oukcgieuakaagsaw;
        uumwyacekksycmcy:
        if ($this->kasioquywmeosmsi()->exists($wkcwykowmmmwioqs . $qqscaoyqikuyeoaw)) {
            goto qowesgcsaiysuagc;
        }
        goto wigkaokkwyecekic;
        cywkigiikmcqaskw:
        goto cmieikgaiegwmycs;
        goto ssuagkigqokwaekc;
        gogmaqgwwsoekumo:
        qccywycocsamgkqi:
        goto wucqauasuekkoayw;
        usuaqaeacooqoqeg:
        $qqscaoyqikuyeoaw = $wkcwykowmmmwioqs . $qqscaoyqikuyeoaw;
        goto icaaymowyygqqwsa;
        egcqemgwyuoosmuq:
        $wkcwykowmmmwioqs = $this->omwawqyqikcsgyqo($wkcwykowmmmwioqs);
        goto wekieycqkqmgagyq;
        cusmimwmwgscqeku:
        eeiweeggimkmqoqg:
        goto egcqemgwyuoosmuq;
        icaaymowyygqqwsa:
        if (!(!$this->kasioquywmeosmsi()->exists($qqscaoyqikuyeoaw) && $ggauoeuaesiymgee)) {
            goto wmmsqcgygcuuaycy;
        }
        goto cwqecoyeuseoiyee;
        wekieycqkqmgagyq:
        cmieikgaiegwmycs:
        goto gogmaqgwwsoekumo;
        wucqauasuekkoayw:
        return $wkcwykowmmmwioqs;
        goto qiuucioewqyqqwok;
        qiuucioewqyqqwok:
    }
}
