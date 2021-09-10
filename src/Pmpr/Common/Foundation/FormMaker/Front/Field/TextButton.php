<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        $this->mmuyuqussqkgkega(self::mecgagckeuagggyw()->qigsyyqgewgskemg("\151\156\x70\x75\x74\x2d\x67\x72\x6f\x75\160\x20\155\x62\x2d\x33"));
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
        syeissweoweigoug:
        $gskauacumcmekigs->qigsyyqgewgskemg("\151\156\160\165\164\x2d\147\162\x6f\x75\160\55\x62\164\x6e");
        goto mkcyockksuwmqyee;
        megeageomkioeoca:
        return $this;
        goto oqswuukyqsoiwquo;
        oqswuukyqsoiwquo:
    }
    
    public function assmkuqekscwausm(?string $nsmgceoqaqogqmuw) : ?string
    {
        goto owicaumkugwyiuem;
        gwsiuuywieaokgam:
        $qyukicweqoisimwg = $this->imswwiyicyksouus();
        goto eewuuuyuugucoiwo;
        mkiywysewmkeqawg:
        $nsmgceoqaqogqmuw = $gmwmsmkosomgguiq . $nsmgceoqaqogqmuw;
        goto skwsosgqyumikwkm;
        kgmowiykwaamoceq:
        $gmwmsmkosomgguiq = ManipulateHTML::uuccukgasskgimsq("\144\151\166", ["\x63\154\x61\x73\x73" => "\151\x6e\160\x75\164\x2d\147\x72\157\165\160\55" . ($heckyiakawemwsmu ? "\x70\162\x65\160\x65\156\144" : "\x61\160\x70\145\156\x64")], $gmwmsmkosomgguiq);
        goto mgymgcsywkseaaaw;
        ksyuggwmykuiiooy:
        return parent::assmkuqekscwausm($nsmgceoqaqogqmuw);
        goto weckoamymcgsskke;
        owicaumkugwyiuem:
        $heckyiakawemwsmu = false;
        goto gwsiuuywieaokgam;
        iauuqukiyugkmuqe:
        if (!$gmwmsmkosomgguiq) {
            goto iugeyykwamwamwic;
        }
        goto kgmowiykwaamoceq;
        ykaoeemqmkoaimsw:
        cymmqcgksykkmswi:
        goto uywokigkksckcgeg;
        skwsosgqyumikwkm:
        micqqaukcwauyakc:
        goto umuqqcsocwogmmuw;
        wqkyoqmimmcmqgqw:
        goto micqqaukcwauyakc;
        goto qmgyoamwwkwmkgka;
        uywokigkksckcgeg:
        wuseoaecmsuismwa:
        goto iauuqukiyugkmuqe;
        umuqqcsocwogmmuw:
        iugeyykwamwamwic:
        goto ksyuggwmykuiiooy;
        gkauywgyiayiioug:
        if (!($qyukicweqoisimwg && is_array($qyukicweqoisimwg))) {
            goto wuseoaecmsuismwa;
        }
        goto cmmyoagaqoyeymik;
        gsckkwksmcsuowqg:
        $nsmgceoqaqogqmuw .= $gmwmsmkosomgguiq;
        goto wqkyoqmimmcmqgqw;
        qmgyoamwwkwmkgka:
        qqyqkkicysmkywye:
        goto mkiywysewmkeqawg;
        eewuuuyuugucoiwo:
        $gmwmsmkosomgguiq = '';
        goto gkauywgyiayiioug;
        mgymgcsywkseaaaw:
        if ($heckyiakawemwsmu) {
            goto qqyqkkicysmkywye;
        }
        goto gsckkwksmcsuowqg;
        cmmyoagaqoyeymik:
        foreach ($qyukicweqoisimwg as $momcykaoccoymeig => $gskauacumcmekigs) {
            goto sggqeakigmwwswyk;
            msqyicumygogaaek:
            ckyeuwkgigokyggq:
            goto keqgyeweciagewey;
            timikyukuimkeasw:
            auyuwiemukwecqga:
            goto gggoqskysukqguga;
            ewqquasomauogwwm:
            $heckyiakawemwsmu = $gskauacumcmekigs->heckyiakawemwsmu();
            goto msqyicumygogaaek;
            sggqeakigmwwswyk:
            if (!$gskauacumcmekigs instanceof Button) {
                goto qwiiscwsowokciwi;
            }
            goto uwueekmwysgmgcqw;
            ywwigkiqoouocoes:
            qwiiscwsowokciwi:
            goto timikyukuimkeasw;
            uwueekmwysgmgcqw:
            if (!($momcykaoccoymeig == 0)) {
                goto ckyeuwkgigokyggq;
            }
            goto ewqquasomauogwwm;
            keqgyeweciagewey:
            $gmwmsmkosomgguiq = $gskauacumcmekigs->render(["\145\143\x68\157" => false]);
            goto ywwigkiqoouocoes;
            gggoqskysukqguga:
        }
        goto ykaoeemqmkoaimsw;
        weckoamymcgsskke:
    }
}
