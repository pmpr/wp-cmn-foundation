<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        $this->mmuyuqussqkgkega(self::mecgagckeuagggyw()->qigsyyqgewgskemg("\x69\x6e\x70\165\164\x2d\147\162\x6f\x75\160\x20\x6d\142\x2d\63"));
    }
    
    public function imswwiyicyksouus() : array
    {
        return $this->buttons;
    }
    
    public function igmamuiesywmkgeu(Button $gskauacumcmekigs) : self
    {
        goto yoscseoiqicoccku;
        yoscseoiqicoccku:
        $gskauacumcmekigs->qigsyyqgewgskemg("\x69\156\160\x75\164\55\x67\x72\x6f\165\160\x2d\x62\x74\156");
        goto syeissweoweigoug;
        mkcyockksuwmqyee:
        return $this;
        goto megeageomkioeoca;
        syeissweoweigoug:
        $this->buttons[$gskauacumcmekigs->mwikyscisascoeea()] = $gskauacumcmekigs;
        goto mkcyockksuwmqyee;
        megeageomkioeoca:
    }
    
    public function assmkuqekscwausm(?string $nsmgceoqaqogqmuw) : ?string
    {
        goto iugeyykwamwamwic;
        qmgyoamwwkwmkgka:
        $nsmgceoqaqogqmuw = $gmwmsmkosomgguiq . $nsmgceoqaqogqmuw;
        goto mkiywysewmkeqawg;
        uywokigkksckcgeg:
        if (!$gmwmsmkosomgguiq) {
            goto micqqaukcwauyakc;
        }
        goto iauuqukiyugkmuqe;
        iauuqukiyugkmuqe:
        $gmwmsmkosomgguiq = ManipulateHTML::uuccukgasskgimsq("\144\x69\166", ["\x63\154\x61\x73\x73" => "\x69\156\160\x75\x74\55\147\x72\x6f\165\160\55" . ($heckyiakawemwsmu ? "\160\162\145\160\145\156\144" : "\141\x70\x70\x65\156\144")], $gmwmsmkosomgguiq);
        goto kgmowiykwaamoceq;
        owicaumkugwyiuem:
        $qyukicweqoisimwg = $this->imswwiyicyksouus();
        goto gwsiuuywieaokgam;
        mkiywysewmkeqawg:
        qqyqkkicysmkywye:
        goto skwsosgqyumikwkm;
        gsckkwksmcsuowqg:
        goto qqyqkkicysmkywye;
        goto wqkyoqmimmcmqgqw;
        ykaoeemqmkoaimsw:
        gggoqskysukqguga:
        goto uywokigkksckcgeg;
        umuqqcsocwogmmuw:
        return parent::assmkuqekscwausm($nsmgceoqaqogqmuw);
        goto ksyuggwmykuiiooy;
        skwsosgqyumikwkm:
        micqqaukcwauyakc:
        goto umuqqcsocwogmmuw;
        gkauywgyiayiioug:
        foreach ($qyukicweqoisimwg as $momcykaoccoymeig => $gskauacumcmekigs) {
            goto qwiiscwsowokciwi;
            ywwigkiqoouocoes:
            cymmqcgksykkmswi:
            goto timikyukuimkeasw;
            ewqquasomauogwwm:
            auyuwiemukwecqga:
            goto msqyicumygogaaek;
            msqyicumygogaaek:
            $gmwmsmkosomgguiq = $gskauacumcmekigs->render(["\145\x63\x68\x6f" => false]);
            goto keqgyeweciagewey;
            sggqeakigmwwswyk:
            if (!($momcykaoccoymeig == 0)) {
                goto auyuwiemukwecqga;
            }
            goto uwueekmwysgmgcqw;
            qwiiscwsowokciwi:
            if (!$gskauacumcmekigs instanceof Button) {
                goto ckyeuwkgigokyggq;
            }
            goto sggqeakigmwwswyk;
            uwueekmwysgmgcqw:
            $heckyiakawemwsmu = $gskauacumcmekigs->heckyiakawemwsmu();
            goto ewqquasomauogwwm;
            keqgyeweciagewey:
            ckyeuwkgigokyggq:
            goto ywwigkiqoouocoes;
            timikyukuimkeasw:
        }
        goto cmmyoagaqoyeymik;
        wqkyoqmimmcmqgqw:
        wuseoaecmsuismwa:
        goto qmgyoamwwkwmkgka;
        kgmowiykwaamoceq:
        if ($heckyiakawemwsmu) {
            goto wuseoaecmsuismwa;
        }
        goto mgymgcsywkseaaaw;
        iugeyykwamwamwic:
        $heckyiakawemwsmu = false;
        goto owicaumkugwyiuem;
        gwsiuuywieaokgam:
        $gmwmsmkosomgguiq = '';
        goto eewuuuyuugucoiwo;
        mgymgcsywkseaaaw:
        $nsmgceoqaqogqmuw .= $gmwmsmkosomgguiq;
        goto gsckkwksmcsuowqg;
        cmmyoagaqoyeymik:
        oqswuukyqsoiwquo:
        goto ykaoeemqmkoaimsw;
        eewuuuyuugucoiwo:
        if (!($qyukicweqoisimwg && is_array($qyukicweqoisimwg))) {
            goto gggoqskysukqguga;
        }
        goto gkauywgyiayiioug;
        ksyuggwmykuiiooy:
    }
}
