<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        $this->mmuyuqussqkgkega(self::mecgagckeuagggyw()->qigsyyqgewgskemg("\x69\x6e\x70\165\x74\x2d\147\x72\x6f\x75\160\x20\155\x62\x2d\63"));
    }
    
    public function imswwiyicyksouus() : array
    {
        return $this->buttons;
    }
    
    public function igmamuiesywmkgeu(Button $gskauacumcmekigs) : self
    {
        goto syeissweoweigoug;
        mkcyockksuwmqyee:
        $this->buttons[$gskauacumcmekigs->mwikyscisascoeea()] = $gskauacumcmekigs;
        goto megeageomkioeoca;
        megeageomkioeoca:
        return $this;
        goto oqswuukyqsoiwquo;
        syeissweoweigoug:
        $gskauacumcmekigs->qigsyyqgewgskemg("\x69\156\x70\x75\x74\x2d\x67\162\157\x75\160\55\x62\x74\156");
        goto mkcyockksuwmqyee;
        oqswuukyqsoiwquo:
    }
    
    public function assmkuqekscwausm(?string $nsmgceoqaqogqmuw) : ?string
    {
        goto owicaumkugwyiuem;
        owicaumkugwyiuem:
        $heckyiakawemwsmu = false;
        goto gwsiuuywieaokgam;
        kgmowiykwaamoceq:
        $gmwmsmkosomgguiq = ManipulateHTML::uuccukgasskgimsq("\x64\151\x76", ["\x63\154\x61\x73\x73" => "\151\156\x70\x75\164\55\x67\x72\157\165\160\55" . ($heckyiakawemwsmu ? "\160\x72\145\160\x65\x6e\144" : "\141\160\x70\145\x6e\144")], $gmwmsmkosomgguiq);
        goto mgymgcsywkseaaaw;
        gsckkwksmcsuowqg:
        $nsmgceoqaqogqmuw .= $gmwmsmkosomgguiq;
        goto wqkyoqmimmcmqgqw;
        cmmyoagaqoyeymik:
        foreach ($qyukicweqoisimwg as $momcykaoccoymeig => $gskauacumcmekigs) {
            goto sggqeakigmwwswyk;
            keqgyeweciagewey:
            $gmwmsmkosomgguiq = $gskauacumcmekigs->render(["\x65\x63\x68\157" => false]);
            goto ywwigkiqoouocoes;
            timikyukuimkeasw:
            auyuwiemukwecqga:
            goto gggoqskysukqguga;
            uwueekmwysgmgcqw:
            if (!($momcykaoccoymeig == 0)) {
                goto ckyeuwkgigokyggq;
            }
            goto ewqquasomauogwwm;
            ywwigkiqoouocoes:
            qwiiscwsowokciwi:
            goto timikyukuimkeasw;
            sggqeakigmwwswyk:
            if (!$gskauacumcmekigs instanceof Button) {
                goto qwiiscwsowokciwi;
            }
            goto uwueekmwysgmgcqw;
            msqyicumygogaaek:
            ckyeuwkgigokyggq:
            goto keqgyeweciagewey;
            ewqquasomauogwwm:
            $heckyiakawemwsmu = $gskauacumcmekigs->heckyiakawemwsmu();
            goto msqyicumygogaaek;
            gggoqskysukqguga:
        }
        goto ykaoeemqmkoaimsw;
        uywokigkksckcgeg:
        wuseoaecmsuismwa:
        goto iauuqukiyugkmuqe;
        ksyuggwmykuiiooy:
        return parent::assmkuqekscwausm($nsmgceoqaqogqmuw);
        goto weckoamymcgsskke;
        mgymgcsywkseaaaw:
        if ($heckyiakawemwsmu) {
            goto qqyqkkicysmkywye;
        }
        goto gsckkwksmcsuowqg;
        wqkyoqmimmcmqgqw:
        goto micqqaukcwauyakc;
        goto qmgyoamwwkwmkgka;
        mkiywysewmkeqawg:
        $nsmgceoqaqogqmuw = $gmwmsmkosomgguiq . $nsmgceoqaqogqmuw;
        goto skwsosgqyumikwkm;
        umuqqcsocwogmmuw:
        iugeyykwamwamwic:
        goto ksyuggwmykuiiooy;
        qmgyoamwwkwmkgka:
        qqyqkkicysmkywye:
        goto mkiywysewmkeqawg;
        eewuuuyuugucoiwo:
        $gmwmsmkosomgguiq = '';
        goto gkauywgyiayiioug;
        gkauywgyiayiioug:
        if (!($qyukicweqoisimwg && is_array($qyukicweqoisimwg))) {
            goto wuseoaecmsuismwa;
        }
        goto cmmyoagaqoyeymik;
        ykaoeemqmkoaimsw:
        cymmqcgksykkmswi:
        goto uywokigkksckcgeg;
        skwsosgqyumikwkm:
        micqqaukcwauyakc:
        goto umuqqcsocwogmmuw;
        iauuqukiyugkmuqe:
        if (!$gmwmsmkosomgguiq) {
            goto iugeyykwamwamwic;
        }
        goto kgmowiykwaamoceq;
        gwsiuuywieaokgam:
        $qyukicweqoisimwg = $this->imswwiyicyksouus();
        goto eewuuuyuugucoiwo;
        weckoamymcgsskke:
    }
}
