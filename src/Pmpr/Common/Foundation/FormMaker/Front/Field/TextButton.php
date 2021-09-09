<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
        $this->mmuyuqussqkgkega(self::mecgagckeuagggyw()->qigsyyqgewgskemg("\151\156\160\x75\164\55\147\x72\x6f\x75\x70\x20\x6d\x62\55\63"));
    }
    
    public function imswwiyicyksouus() : array
    {
        return $this->buttons;
    }
    
    public function igmamuiesywmkgeu(Button $gskauacumcmekigs) : self
    {
        goto oqweykgimegoiqik;
        uqecisqimkeikumi:
        return $this;
        goto myqoamuyekasyauk;
        esaiikawuuqsiwuq:
        $this->buttons[$gskauacumcmekigs->mwikyscisascoeea()] = $gskauacumcmekigs;
        goto uqecisqimkeikumi;
        oqweykgimegoiqik:
        $gskauacumcmekigs->qigsyyqgewgskemg("\151\x6e\x70\x75\164\55\147\162\x6f\x75\160\x2d\142\x74\156");
        goto esaiikawuuqsiwuq;
        myqoamuyekasyauk:
    }
    
    public function assmkuqekscwausm(?string $nsmgceoqaqogqmuw) : ?string
    {
        goto yougcykgisumukia;
        qmkemsekcmccqiyg:
        $gmwmsmkosomgguiq = '';
        goto kqmkkoswuikcioyy;
        hwmeuwuqykkwokiw:
        if ($heckyiakawemwsmu) {
            goto akcowwacsiuucuca;
        }
        goto qccqmcmckeoimoai;
        yiukgokwwsuaimwa:
        akcowwacsiuucuca:
        goto cawyqkqeossegomm;
        ckymggcskyoqisku:
        gasiswcuyygasqye:
        goto meieukqcmqmwogek;
        kqmkkoswuikcioyy:
        if (!($qyukicweqoisimwg && is_array($qyukicweqoisimwg))) {
            goto gasiswcuyygasqye;
        }
        goto swcyceicuemomkgu;
        gaueqekgoikuowqi:
        goto uemcgsaisgakauyw;
        goto yiukgokwwsuaimwa;
        awagwaymwcmeagqg:
        $qyukicweqoisimwg = $this->imswwiyicyksouus();
        goto qmkemsekcmccqiyg;
        yougcykgisumukia:
        $heckyiakawemwsmu = false;
        goto awagwaymwcmeagqg;
        aeggeaaeyameykmm:
        aqeogmeyeguaqckw:
        goto saayeowaagsquisy;
        quwiqeccsoyekuym:
        kysgskkmgemwecqu:
        goto ckymggcskyoqisku;
        meieukqcmqmwogek:
        if (!$gmwmsmkosomgguiq) {
            goto aqeogmeyeguaqckw;
        }
        goto ogewoqkkgssweeuk;
        swcyceicuemomkgu:
        foreach ($qyukicweqoisimwg as $momcykaoccoymeig => $gskauacumcmekigs) {
            goto syycweoceqmkaqcu;
            syycweoceqmkaqcu:
            if (!$gskauacumcmekigs instanceof Button) {
                goto eukiiwcwsiiugcsa;
            }
            goto cwqasqacoeoymgwm;
            ueageciuwyowgsyy:
            eukiiwcwsiiugcsa:
            goto yaisawwqsacugoem;
            ksiiqwkugmasuwum:
            $heckyiakawemwsmu = $gskauacumcmekigs->heckyiakawemwsmu();
            goto mkqosogckkycsqow;
            mkqosogckkycsqow:
            wkikiuscuumkuoew:
            goto uakcauwwqmwgsyue;
            yaisawwqsacugoem:
            qoiwsygocigycosk:
            goto aqeiymmmiygmoyws;
            cwqasqacoeoymgwm:
            if (!($momcykaoccoymeig == 0)) {
                goto wkikiuscuumkuoew;
            }
            goto ksiiqwkugmasuwum;
            uakcauwwqmwgsyue:
            $gmwmsmkosomgguiq = $gskauacumcmekigs->render(["\145\x63\x68\157" => false]);
            goto ueageciuwyowgsyy;
            aqeiymmmiygmoyws:
        }
        goto quwiqeccsoyekuym;
        ogewoqkkgssweeuk:
        $gmwmsmkosomgguiq = ManipulateHTML::uuccukgasskgimsq("\x64\151\x76", ["\x63\x6c\x61\x73\x73" => "\x69\x6e\160\x75\164\x2d\x67\x72\x6f\165\160\55" . ($heckyiakawemwsmu ? "\x70\x72\x65\160\x65\x6e\144" : "\x61\160\x70\x65\x6e\x64")], $gmwmsmkosomgguiq);
        goto hwmeuwuqykkwokiw;
        saayeowaagsquisy:
        return parent::assmkuqekscwausm($nsmgceoqaqogqmuw);
        goto vowqmwsooooeyywc;
        cawyqkqeossegomm:
        $nsmgceoqaqogqmuw = $gmwmsmkosomgguiq . $nsmgceoqaqogqmuw;
        goto yceeoiguyiockyog;
        yceeoiguyiockyog:
        uemcgsaisgakauyw:
        goto aeggeaaeyameykmm;
        qccqmcmckeoimoai:
        $nsmgceoqaqogqmuw .= $gmwmsmkosomgguiq;
        goto gaueqekgoikuowqi;
        vowqmwsooooeyywc:
    }
}
