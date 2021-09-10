<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        $this->mmuyuqussqkgkega(self::mecgagckeuagggyw()->qigsyyqgewgskemg("\151\x6e\160\165\x74\x2d\147\x72\x6f\165\x70\x20\x6d\142\x2d\x33"));
    }
    
    public function imswwiyicyksouus() : array
    {
        return $this->buttons;
    }
    
    public function igmamuiesywmkgeu(Button $gskauacumcmekigs) : self
    {
        goto yeqeyiiywssgsyou;
        yeqeyiiywssgsyou:
        $gskauacumcmekigs->qigsyyqgewgskemg("\151\156\160\165\x74\55\147\x72\x6f\x75\x70\x2d\142\164\x6e");
        goto uqwgiykoaeaaiayu;
        uqwgiykoaeaaiayu:
        $this->buttons[$gskauacumcmekigs->mwikyscisascoeea()] = $gskauacumcmekigs;
        goto mumskauyosuokigg;
        mumskauyosuokigg:
        return $this;
        goto yoscseoiqicoccku;
        yoscseoiqicoccku:
    }
    
    public function assmkuqekscwausm(?string $nsmgceoqaqogqmuw) : ?string
    {
        goto wuseoaecmsuismwa;
        gwsiuuywieaokgam:
        syeissweoweigoug:
        goto eewuuuyuugucoiwo;
        qqyqkkicysmkywye:
        $qyukicweqoisimwg = $this->imswwiyicyksouus();
        goto micqqaukcwauyakc;
        kgmowiykwaamoceq:
        ywwigkiqoouocoes:
        goto mgymgcsywkseaaaw;
        gkauywgyiayiioug:
        if (!$gmwmsmkosomgguiq) {
            goto gggoqskysukqguga;
        }
        goto cmmyoagaqoyeymik;
        wqkyoqmimmcmqgqw:
        gggoqskysukqguga:
        goto qmgyoamwwkwmkgka;
        eewuuuyuugucoiwo:
        keqgyeweciagewey:
        goto gkauywgyiayiioug;
        gsckkwksmcsuowqg:
        timikyukuimkeasw:
        goto wqkyoqmimmcmqgqw;
        mgymgcsywkseaaaw:
        $nsmgceoqaqogqmuw = $gmwmsmkosomgguiq . $nsmgceoqaqogqmuw;
        goto gsckkwksmcsuowqg;
        iauuqukiyugkmuqe:
        goto timikyukuimkeasw;
        goto kgmowiykwaamoceq;
        cmmyoagaqoyeymik:
        $gmwmsmkosomgguiq = ManipulateHTML::uuccukgasskgimsq("\144\151\x76", ["\143\154\x61\x73\x73" => "\x69\156\x70\x75\164\x2d\x67\162\157\165\160\55" . ($heckyiakawemwsmu ? "\160\x72\145\x70\145\x6e\144" : "\x61\160\x70\x65\156\144")], $gmwmsmkosomgguiq);
        goto ykaoeemqmkoaimsw;
        micqqaukcwauyakc:
        $gmwmsmkosomgguiq = '';
        goto iugeyykwamwamwic;
        qmgyoamwwkwmkgka:
        return parent::assmkuqekscwausm($nsmgceoqaqogqmuw);
        goto mkiywysewmkeqawg;
        ykaoeemqmkoaimsw:
        if ($heckyiakawemwsmu) {
            goto ywwigkiqoouocoes;
        }
        goto uywokigkksckcgeg;
        uywokigkksckcgeg:
        $nsmgceoqaqogqmuw .= $gmwmsmkosomgguiq;
        goto iauuqukiyugkmuqe;
        owicaumkugwyiuem:
        foreach ($qyukicweqoisimwg as $momcykaoccoymeig => $gskauacumcmekigs) {
            goto cymmqcgksykkmswi;
            ckyeuwkgigokyggq:
            $heckyiakawemwsmu = $gskauacumcmekigs->heckyiakawemwsmu();
            goto qwiiscwsowokciwi;
            sggqeakigmwwswyk:
            $gmwmsmkosomgguiq = $gskauacumcmekigs->render(["\145\x63\150\157" => false]);
            goto uwueekmwysgmgcqw;
            uwueekmwysgmgcqw:
            oqswuukyqsoiwquo:
            goto ewqquasomauogwwm;
            qwiiscwsowokciwi:
            megeageomkioeoca:
            goto sggqeakigmwwswyk;
            auyuwiemukwecqga:
            if (!($momcykaoccoymeig == 0)) {
                goto megeageomkioeoca;
            }
            goto ckyeuwkgigokyggq;
            ewqquasomauogwwm:
            mkcyockksuwmqyee:
            goto msqyicumygogaaek;
            cymmqcgksykkmswi:
            if (!$gskauacumcmekigs instanceof Button) {
                goto oqswuukyqsoiwquo;
            }
            goto auyuwiemukwecqga;
            msqyicumygogaaek:
        }
        goto gwsiuuywieaokgam;
        iugeyykwamwamwic:
        if (!($qyukicweqoisimwg && is_array($qyukicweqoisimwg))) {
            goto keqgyeweciagewey;
        }
        goto owicaumkugwyiuem;
        wuseoaecmsuismwa:
        $heckyiakawemwsmu = false;
        goto qqyqkkicysmkywye;
        mkiywysewmkeqawg:
    }
}
