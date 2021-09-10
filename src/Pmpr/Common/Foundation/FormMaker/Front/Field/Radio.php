<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Front\Field;

use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;

class Radio extends OptionAwareField
{
    
    protected bool $inline = false;
    
    public function __construct(?string $aokagokqyuysuksm, string $pkyyagewkiyckmwy = null, string $mkqqqewsokcswckc = null)
    {
        parent::__construct("\x64\151\x76", "\x72\141\144\x69\x6f", $aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc);
    }
    
    public function mkmssscwmeekwgqo() : self
    {
        $this->inline = true;
        return $this;
    }
    
    public function wmociykwcyesssui() : bool
    {
        return $this->inline;
    }
    
    public function souwykwwmyygqyqi() : ?string
    {
        goto wegiqgicwasiuomk;
        cqewgaaqiwayuoko:
        if (!(is_array($qiouiwasaauyaaue) && $qiouiwasaauyaaue)) {
            goto gwewaiykiykyigeo;
        }
        goto kgywiqemagekugqe;
        qecgguuckuucaoyu:
        foreach ($qiouiwasaauyaaue as $eqgoocgaqwqcimie => $meqocwsecsywiiqs) {
            goto kqmkkoswuikcioyy;
            yiukgokwwsuaimwa:
            $egkyssmuqcwaciya .= "\x20\143\165\x73\164\157\155\55\x63\x6f\x6e\164\162\157\154\x2d\x69\x6e\x6c\x69\156\x65";
            goto cawyqkqeossegomm;
            hwmeuwuqykkwokiw:
            $pkyyagewkiyckmwy = ManipulateHTML::qgsekwygcgawekeq("\154\141\x62\145\154", ["\x63\154\141\163\x73" => "\x63\165\163\x74\157\155\x2d\143\x6f\x6e\164\x72\x6f\x6c\x2d\154\141\142\145\x6c", "\146\x6f\x72" => $aokagokqyuysuksm . $momcykaoccoymeig], true, $meqocwsecsywiiqs);
            goto qccqmcmckeoimoai;
            quwiqeccsoyekuym:
            if (!($ggauoeuaesiymgee && $ggauoeuaesiymgee === $eqgoocgaqwqcimie || !$ggauoeuaesiymgee && $momcykaoccoymeig == 1)) {
                goto awagwaymwcmeagqg;
            }
            goto ckymggcskyoqisku;
            meieukqcmqmwogek:
            awagwaymwcmeagqg:
            goto ogewoqkkgssweeuk;
            qccqmcmckeoimoai:
            $egkyssmuqcwaciya = "\143\165\163\164\x6f\x6d\x2d\x63\x6f\x6e\164\x72\157\x6c\x20\143\165\163\x74\x6f\155\x2d\162\141\144\151\157";
            goto gaueqekgoikuowqi;
            swcyceicuemomkgu:
            $wwgucssaecqekuek = ["\x63\x6c\x61\x73\x73" => "\143\165\x73\x74\x6f\155\x2d\143\x6f\156\164\x72\x6f\154\x2d\x69\156\x70\165\164", self::ID => $aokagokqyuysuksm . $momcykaoccoymeig, self::TYPE => "\x72\141\x64\x69\x6f", self::NAME => $aokagokqyuysuksm, self::VALUE => $eqgoocgaqwqcimie];
            goto quwiqeccsoyekuym;
            kqmkkoswuikcioyy:
            $aokagokqyuysuksm = $this->mwikyscisascoeea();
            goto swcyceicuemomkgu;
            aeggeaaeyameykmm:
            $momcykaoccoymeig++;
            goto saayeowaagsquisy;
            ogewoqkkgssweeuk:
            $euueacigmgoqkimu = ManipulateHTML::qgsekwygcgawekeq("\151\156\x70\x75\x74", $wwgucssaecqekuek);
            goto hwmeuwuqykkwokiw;
            cawyqkqeossegomm:
            qmkemsekcmccqiyg:
            goto yceeoiguyiockyog;
            saayeowaagsquisy:
            yougcykgisumukia:
            goto vowqmwsooooeyywc;
            ckymggcskyoqisku:
            $wwgucssaecqekuek["\x63\150\145\143\x6b\145\144"] = true;
            goto meieukqcmqmwogek;
            gaueqekgoikuowqi:
            if (!$this->wmociykwcyesssui()) {
                goto qmkemsekcmccqiyg;
            }
            goto yiukgokwwsuaimwa;
            yceeoiguyiockyog:
            $ewgwqamkygiqaawc .= ManipulateHTML::uuccukgasskgimsq("\x64\x69\x76", ["\x63\154\x61\x73\163" => $egkyssmuqcwaciya], [$euueacigmgoqkimu, $pkyyagewkiyckmwy]);
            goto aeggeaaeyameykmm;
            vowqmwsooooeyywc:
        }
        goto wsmigmawyoasesuw;
        wsmigmawyoasesuw:
        aqeogmeyeguaqckw:
        goto oasgswewwmoqykoa;
        wegiqgicwasiuomk:
        $ewgwqamkygiqaawc = '';
        goto wmqacumokqegmmiq;
        oasgswewwmoqykoa:
        gwewaiykiykyigeo:
        goto yciyysmucecskimo;
        kgywiqemagekugqe:
        $momcykaoccoymeig = 1;
        goto uuiukusqaqkykiyi;
        uuiukusqaqkykiyi:
        $ggauoeuaesiymgee = $this->oiswysuiioecsaae();
        goto qecgguuckuucaoyu;
        yciyysmucecskimo:
        return $this->uikgwcuascgeissw() . $ewgwqamkygiqaawc;
        goto cuuaywiycieugooq;
        wmqacumokqegmmiq:
        $qiouiwasaauyaaue = $this->gkwkqmwweiawigae();
        goto cqewgaaqiwayuoko;
        cuuaywiycieugooq:
    }
}
