<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        $this->mmuyuqussqkgkega(self::mecgagckeuagggyw()->qigsyyqgewgskemg("\x69\156\160\165\x74\x2d\x67\162\x6f\165\x70\x20\155\x62\x2d\63"));
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
        $gskauacumcmekigs->qigsyyqgewgskemg("\151\x6e\160\x75\164\x2d\x67\162\157\x75\160\55\142\x74\156");
        goto mkcyockksuwmqyee;
        megeageomkioeoca:
        return $this;
        goto oqswuukyqsoiwquo;
        oqswuukyqsoiwquo:
    }
    
    public function assmkuqekscwausm(?string $nsmgceoqaqogqmuw) : ?string
    {
        goto owicaumkugwyiuem;
        skwsosgqyumikwkm:
        micqqaukcwauyakc:
        goto umuqqcsocwogmmuw;
        iauuqukiyugkmuqe:
        if (!$gmwmsmkosomgguiq) {
            goto iugeyykwamwamwic;
        }
        goto kgmowiykwaamoceq;
        cmmyoagaqoyeymik:
        foreach ($qyukicweqoisimwg as $momcykaoccoymeig => $gskauacumcmekigs) {
            goto sggqeakigmwwswyk;
            ywwigkiqoouocoes:
            qwiiscwsowokciwi:
            goto timikyukuimkeasw;
            msqyicumygogaaek:
            ckyeuwkgigokyggq:
            goto keqgyeweciagewey;
            ewqquasomauogwwm:
            $heckyiakawemwsmu = $gskauacumcmekigs->heckyiakawemwsmu();
            goto msqyicumygogaaek;
            timikyukuimkeasw:
            auyuwiemukwecqga:
            goto gggoqskysukqguga;
            sggqeakigmwwswyk:
            if (!$gskauacumcmekigs instanceof Button) {
                goto qwiiscwsowokciwi;
            }
            goto uwueekmwysgmgcqw;
            keqgyeweciagewey:
            $gmwmsmkosomgguiq = $gskauacumcmekigs->render(["\145\143\150\157" => false]);
            goto ywwigkiqoouocoes;
            uwueekmwysgmgcqw:
            if (!($momcykaoccoymeig == 0)) {
                goto ckyeuwkgigokyggq;
            }
            goto ewqquasomauogwwm;
            gggoqskysukqguga:
        }
        goto ykaoeemqmkoaimsw;
        qmgyoamwwkwmkgka:
        qqyqkkicysmkywye:
        goto mkiywysewmkeqawg;
        gsckkwksmcsuowqg:
        $nsmgceoqaqogqmuw .= $gmwmsmkosomgguiq;
        goto wqkyoqmimmcmqgqw;
        owicaumkugwyiuem:
        $heckyiakawemwsmu = false;
        goto gwsiuuywieaokgam;
        ksyuggwmykuiiooy:
        return parent::assmkuqekscwausm($nsmgceoqaqogqmuw);
        goto weckoamymcgsskke;
        eewuuuyuugucoiwo:
        $gmwmsmkosomgguiq = '';
        goto gkauywgyiayiioug;
        kgmowiykwaamoceq:
        $gmwmsmkosomgguiq = ManipulateHTML::uuccukgasskgimsq("\144\151\x76", ["\x63\154\141\163\x73" => "\151\x6e\x70\165\x74\x2d\147\x72\x6f\x75\x70\55" . ($heckyiakawemwsmu ? "\160\162\145\x70\x65\156\x64" : "\x61\160\x70\x65\x6e\144")], $gmwmsmkosomgguiq);
        goto mgymgcsywkseaaaw;
        mkiywysewmkeqawg:
        $nsmgceoqaqogqmuw = $gmwmsmkosomgguiq . $nsmgceoqaqogqmuw;
        goto skwsosgqyumikwkm;
        gwsiuuywieaokgam:
        $qyukicweqoisimwg = $this->imswwiyicyksouus();
        goto eewuuuyuugucoiwo;
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
        wqkyoqmimmcmqgqw:
        goto micqqaukcwauyakc;
        goto qmgyoamwwkwmkgka;
        mgymgcsywkseaaaw:
        if ($heckyiakawemwsmu) {
            goto qqyqkkicysmkywye;
        }
        goto gsckkwksmcsuowqg;
        ykaoeemqmkoaimsw:
        cymmqcgksykkmswi:
        goto uywokigkksckcgeg;
        weckoamymcgsskke:
    }
}
