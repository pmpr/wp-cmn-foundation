<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Front\Field;

use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;

class TextButton extends Text
{
    
    protected array $buttons = [];
    public function __construct(?string $aokagokqyuysuksm, string $pkyyagewkiyckmwy = null, string $mkqqqewsokcswckc = null)
    {
        parent::__construct($aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc);
        $this->mmuyuqussqkgkega(self::mecgagckeuagggyw()->qigsyyqgewgskemg("\151\x6e\x70\x75\x74\55\147\162\157\x75\x70\40\155\142\55\63"));
    }
    
    public function imswwiyicyksouus() : array
    {
        return $this->buttons;
    }
    
    public function igmamuiesywmkgeu(Button $gskauacumcmekigs) : self
    {
        goto yoscseoiqicoccku;
        mkcyockksuwmqyee:
        return $this;
        goto megeageomkioeoca;
        yoscseoiqicoccku:
        $gskauacumcmekigs->qigsyyqgewgskemg("\x69\156\x70\165\164\55\x67\x72\x6f\165\x70\x2d\142\x74\156");
        goto syeissweoweigoug;
        syeissweoweigoug:
        $this->buttons[$gskauacumcmekigs->mwikyscisascoeea()] = $gskauacumcmekigs;
        goto mkcyockksuwmqyee;
        megeageomkioeoca:
    }
    
    public function assmkuqekscwausm(?string $nsmgceoqaqogqmuw) : ?string
    {
        goto iugeyykwamwamwic;
        wqkyoqmimmcmqgqw:
        wuseoaecmsuismwa:
        goto qmgyoamwwkwmkgka;
        umuqqcsocwogmmuw:
        return parent::assmkuqekscwausm($nsmgceoqaqogqmuw);
        goto ksyuggwmykuiiooy;
        gkauywgyiayiioug:
        foreach ($qyukicweqoisimwg as $momcykaoccoymeig => $gskauacumcmekigs) {
            goto qwiiscwsowokciwi;
            msqyicumygogaaek:
            $gmwmsmkosomgguiq = $gskauacumcmekigs->render(["\x65\x63\x68\157" => false]);
            goto keqgyeweciagewey;
            uwueekmwysgmgcqw:
            $heckyiakawemwsmu = $gskauacumcmekigs->heckyiakawemwsmu();
            goto ewqquasomauogwwm;
            ywwigkiqoouocoes:
            cymmqcgksykkmswi:
            goto timikyukuimkeasw;
            qwiiscwsowokciwi:
            if (!$gskauacumcmekigs instanceof Button) {
                goto ckyeuwkgigokyggq;
            }
            goto sggqeakigmwwswyk;
            ewqquasomauogwwm:
            auyuwiemukwecqga:
            goto msqyicumygogaaek;
            sggqeakigmwwswyk:
            if (!($momcykaoccoymeig == 0)) {
                goto auyuwiemukwecqga;
            }
            goto uwueekmwysgmgcqw;
            keqgyeweciagewey:
            ckyeuwkgigokyggq:
            goto ywwigkiqoouocoes;
            timikyukuimkeasw:
        }
        goto cmmyoagaqoyeymik;
        eewuuuyuugucoiwo:
        if (!($qyukicweqoisimwg && is_array($qyukicweqoisimwg))) {
            goto gggoqskysukqguga;
        }
        goto gkauywgyiayiioug;
        cmmyoagaqoyeymik:
        oqswuukyqsoiwquo:
        goto ykaoeemqmkoaimsw;
        owicaumkugwyiuem:
        $qyukicweqoisimwg = $this->imswwiyicyksouus();
        goto gwsiuuywieaokgam;
        iauuqukiyugkmuqe:
        $gmwmsmkosomgguiq = ManipulateHTML::uuccukgasskgimsq("\144\x69\x76", ["\x63\154\141\163\x73" => "\x69\156\160\165\x74\55\147\162\157\x75\x70\x2d" . ($heckyiakawemwsmu ? "\x70\x72\x65\x70\x65\156\144" : "\x61\x70\x70\145\156\x64")], $gmwmsmkosomgguiq);
        goto kgmowiykwaamoceq;
        iugeyykwamwamwic:
        $heckyiakawemwsmu = false;
        goto owicaumkugwyiuem;
        qmgyoamwwkwmkgka:
        $nsmgceoqaqogqmuw = $gmwmsmkosomgguiq . $nsmgceoqaqogqmuw;
        goto mkiywysewmkeqawg;
        uywokigkksckcgeg:
        if (!$gmwmsmkosomgguiq) {
            goto micqqaukcwauyakc;
        }
        goto iauuqukiyugkmuqe;
        gsckkwksmcsuowqg:
        goto qqyqkkicysmkywye;
        goto wqkyoqmimmcmqgqw;
        mkiywysewmkeqawg:
        qqyqkkicysmkywye:
        goto skwsosgqyumikwkm;
        ykaoeemqmkoaimsw:
        gggoqskysukqguga:
        goto uywokigkksckcgeg;
        mgymgcsywkseaaaw:
        $nsmgceoqaqogqmuw .= $gmwmsmkosomgguiq;
        goto gsckkwksmcsuowqg;
        gwsiuuywieaokgam:
        $gmwmsmkosomgguiq = '';
        goto eewuuuyuugucoiwo;
        skwsosgqyumikwkm:
        micqqaukcwauyakc:
        goto umuqqcsocwogmmuw;
        kgmowiykwaamoceq:
        if ($heckyiakawemwsmu) {
            goto wuseoaecmsuismwa;
        }
        goto mgymgcsywkseaaaw;
        ksyuggwmykuiiooy:
    }
}
