<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        $this->mmuyuqussqkgkega(self::mecgagckeuagggyw()->qigsyyqgewgskemg("\x69\x6e\x70\x75\x74\55\x67\x72\157\x75\x70\40\x6d\x62\x2d\x33"));
    }
    
    public function imswwiyicyksouus() : array
    {
        return $this->buttons;
    }
    
    public function igmamuiesywmkgeu(Button $gskauacumcmekigs) : self
    {
        goto mkcyockksuwmqyee;
        mkcyockksuwmqyee:
        $gskauacumcmekigs->qigsyyqgewgskemg("\x69\x6e\x70\165\x74\55\x67\x72\157\x75\160\55\142\164\156");
        goto megeageomkioeoca;
        oqswuukyqsoiwquo:
        return $this;
        goto cymmqcgksykkmswi;
        megeageomkioeoca:
        $this->buttons[$gskauacumcmekigs->mwikyscisascoeea()] = $gskauacumcmekigs;
        goto oqswuukyqsoiwquo;
        cymmqcgksykkmswi:
    }
    
    public function assmkuqekscwausm(?string $nsmgceoqaqogqmuw) : ?string
    {
        goto gwsiuuywieaokgam;
        wqkyoqmimmcmqgqw:
        $nsmgceoqaqogqmuw .= $gmwmsmkosomgguiq;
        goto qmgyoamwwkwmkgka;
        cmmyoagaqoyeymik:
        if (!($qyukicweqoisimwg && is_array($qyukicweqoisimwg))) {
            goto qqyqkkicysmkywye;
        }
        goto ykaoeemqmkoaimsw;
        gkauywgyiayiioug:
        $gmwmsmkosomgguiq = '';
        goto cmmyoagaqoyeymik;
        gsckkwksmcsuowqg:
        if ($heckyiakawemwsmu) {
            goto micqqaukcwauyakc;
        }
        goto wqkyoqmimmcmqgqw;
        ksyuggwmykuiiooy:
        owicaumkugwyiuem:
        goto weckoamymcgsskke;
        ykaoeemqmkoaimsw:
        foreach ($qyukicweqoisimwg as $momcykaoccoymeig => $gskauacumcmekigs) {
            goto uwueekmwysgmgcqw;
            keqgyeweciagewey:
            qwiiscwsowokciwi:
            goto ywwigkiqoouocoes;
            gggoqskysukqguga:
            ckyeuwkgigokyggq:
            goto wuseoaecmsuismwa;
            msqyicumygogaaek:
            $heckyiakawemwsmu = $gskauacumcmekigs->heckyiakawemwsmu();
            goto keqgyeweciagewey;
            ywwigkiqoouocoes:
            $gmwmsmkosomgguiq = $gskauacumcmekigs->render(["\x65\x63\x68\x6f" => false]);
            goto timikyukuimkeasw;
            timikyukuimkeasw:
            sggqeakigmwwswyk:
            goto gggoqskysukqguga;
            uwueekmwysgmgcqw:
            if (!$gskauacumcmekigs instanceof Button) {
                goto sggqeakigmwwswyk;
            }
            goto ewqquasomauogwwm;
            ewqquasomauogwwm:
            if (!($momcykaoccoymeig == 0)) {
                goto qwiiscwsowokciwi;
            }
            goto msqyicumygogaaek;
            wuseoaecmsuismwa:
        }
        goto uywokigkksckcgeg;
        mgymgcsywkseaaaw:
        $gmwmsmkosomgguiq = ManipulateHTML::uuccukgasskgimsq("\144\151\166", ["\143\154\x61\163\163" => "\151\x6e\160\165\x74\x2d\x67\x72\157\x75\160\x2d" . ($heckyiakawemwsmu ? "\x70\x72\x65\x70\x65\156\144" : "\x61\160\160\145\x6e\x64")], $gmwmsmkosomgguiq);
        goto gsckkwksmcsuowqg;
        umuqqcsocwogmmuw:
        iugeyykwamwamwic:
        goto ksyuggwmykuiiooy;
        uywokigkksckcgeg:
        auyuwiemukwecqga:
        goto iauuqukiyugkmuqe;
        gwsiuuywieaokgam:
        $heckyiakawemwsmu = false;
        goto eewuuuyuugucoiwo;
        weckoamymcgsskke:
        return parent::assmkuqekscwausm($nsmgceoqaqogqmuw);
        goto aqiyqkqkeeaokeka;
        eewuuuyuugucoiwo:
        $qyukicweqoisimwg = $this->imswwiyicyksouus();
        goto gkauywgyiayiioug;
        skwsosgqyumikwkm:
        $nsmgceoqaqogqmuw = $gmwmsmkosomgguiq . $nsmgceoqaqogqmuw;
        goto umuqqcsocwogmmuw;
        kgmowiykwaamoceq:
        if (!$gmwmsmkosomgguiq) {
            goto owicaumkugwyiuem;
        }
        goto mgymgcsywkseaaaw;
        mkiywysewmkeqawg:
        micqqaukcwauyakc:
        goto skwsosgqyumikwkm;
        qmgyoamwwkwmkgka:
        goto iugeyykwamwamwic;
        goto mkiywysewmkeqawg;
        iauuqukiyugkmuqe:
        qqyqkkicysmkywye:
        goto kgmowiykwaamoceq;
        aqiyqkqkeeaokeka:
    }
}
