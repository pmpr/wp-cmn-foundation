<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Front\Field;

use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;

class Radio extends OptionAwareField
{
    
    protected bool $inline = false;
    
    public function __construct(?string $aokagokqyuysuksm, string $pkyyagewkiyckmwy = null, string $mkqqqewsokcswckc = null)
    {
        parent::__construct("\x64\x69\x76", "\162\x61\144\151\x6f", $aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc);
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
        goto aeggeaaeyameykmm;
        cqewgaaqiwayuoko:
        aqeiymmmiygmoyws:
        goto kgywiqemagekugqe;
        vowqmwsooooeyywc:
        if (!(is_array($qiouiwasaauyaaue) && $qiouiwasaauyaaue)) {
            goto yceeoiguyiockyog;
        }
        goto gwewaiykiykyigeo;
        wegiqgicwasiuomk:
        $ggauoeuaesiymgee = $this->oiswysuiioecsaae();
        goto wmqacumokqegmmiq;
        aeggeaaeyameykmm:
        $ewgwqamkygiqaawc = '';
        goto saayeowaagsquisy;
        wmqacumokqegmmiq:
        foreach ($qiouiwasaauyaaue as $eqgoocgaqwqcimie => $meqocwsecsywiiqs) {
            goto aqeogmeyeguaqckw;
            awagwaymwcmeagqg:
            if (!($ggauoeuaesiymgee && $ggauoeuaesiymgee === $eqgoocgaqwqcimie || !$ggauoeuaesiymgee && $momcykaoccoymeig == 1)) {
                goto akcowwacsiuucuca;
            }
            goto qmkemsekcmccqiyg;
            yougcykgisumukia:
            $wwgucssaecqekuek = ["\x63\x6c\141\x73\x73" => "\143\x75\x73\x74\x6f\155\x2d\143\157\156\164\162\157\154\55\x69\x6e\x70\x75\164", self::ID => $aokagokqyuysuksm . $momcykaoccoymeig, self::TYPE => "\162\x61\x64\x69\157", self::NAME => $aokagokqyuysuksm, self::VALUE => $eqgoocgaqwqcimie];
            goto awagwaymwcmeagqg;
            ckymggcskyoqisku:
            $egkyssmuqcwaciya = "\x63\x75\x73\164\157\155\x2d\143\157\156\x74\x72\157\x6c\x20\143\x75\x73\x74\157\155\x2d\x72\x61\x64\x69\157";
            goto meieukqcmqmwogek;
            ogewoqkkgssweeuk:
            $egkyssmuqcwaciya .= "\x20\x63\165\x73\164\157\x6d\x2d\x63\157\x6e\x74\x72\x6f\x6c\x2d\x69\156\154\151\156\145";
            goto hwmeuwuqykkwokiw;
            qmkemsekcmccqiyg:
            $wwgucssaecqekuek["\143\150\x65\143\x6b\145\x64"] = true;
            goto kqmkkoswuikcioyy;
            kqmkkoswuikcioyy:
            akcowwacsiuucuca:
            goto swcyceicuemomkgu;
            swcyceicuemomkgu:
            $euueacigmgoqkimu = ManipulateHTML::qgsekwygcgawekeq("\x69\x6e\160\165\x74", $wwgucssaecqekuek);
            goto quwiqeccsoyekuym;
            qccqmcmckeoimoai:
            $ewgwqamkygiqaawc .= ManipulateHTML::uuccukgasskgimsq("\x64\x69\166", ["\143\154\x61\x73\x73" => $egkyssmuqcwaciya], [$euueacigmgoqkimu, $pkyyagewkiyckmwy]);
            goto gaueqekgoikuowqi;
            gaueqekgoikuowqi:
            $momcykaoccoymeig++;
            goto yiukgokwwsuaimwa;
            aqeogmeyeguaqckw:
            $aokagokqyuysuksm = $this->mwikyscisascoeea();
            goto yougcykgisumukia;
            quwiqeccsoyekuym:
            $pkyyagewkiyckmwy = ManipulateHTML::qgsekwygcgawekeq("\x6c\x61\142\x65\154", ["\143\x6c\141\x73\163" => "\143\165\x73\164\x6f\x6d\x2d\x63\157\156\164\162\157\x6c\55\x6c\x61\142\x65\x6c", "\x66\x6f\162" => $aokagokqyuysuksm . $momcykaoccoymeig], true, $meqocwsecsywiiqs);
            goto ckymggcskyoqisku;
            meieukqcmqmwogek:
            if (!$this->wmociykwcyesssui()) {
                goto uemcgsaisgakauyw;
            }
            goto ogewoqkkgssweeuk;
            yiukgokwwsuaimwa:
            gasiswcuyygasqye:
            goto cawyqkqeossegomm;
            hwmeuwuqykkwokiw:
            uemcgsaisgakauyw:
            goto qccqmcmckeoimoai;
            cawyqkqeossegomm:
        }
        goto cqewgaaqiwayuoko;
        gwewaiykiykyigeo:
        $momcykaoccoymeig = 1;
        goto wegiqgicwasiuomk;
        kgywiqemagekugqe:
        yceeoiguyiockyog:
        goto uuiukusqaqkykiyi;
        saayeowaagsquisy:
        $qiouiwasaauyaaue = $this->gkwkqmwweiawigae();
        goto vowqmwsooooeyywc;
        uuiukusqaqkykiyi:
        return $this->uikgwcuascgeissw() . $ewgwqamkygiqaawc;
        goto qecgguuckuucaoyu;
        qecgguuckuucaoyu:
    }
}
