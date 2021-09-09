<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Front\Field;

use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;

class Radio extends OptionAwareField
{
    
    protected bool $inline = false;
    
    public function __construct(?string $aokagokqyuysuksm, string $pkyyagewkiyckmwy = null, string $mkqqqewsokcswckc = null)
    {
        parent::__construct("\144\x69\x76", "\x72\x61\144\x69\x6f", $aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc);
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
        goto yooyasyggysysqco;
        yooyasyggysysqco:
        $ewgwqamkygiqaawc = '';
        goto uqymcyyiewiiwqqu;
        qwicaaakcymkqgcu:
        cssukoaykymkugys:
        goto eukogiuaicuoagkw;
        eomyiygumegiacam:
        foreach ($qiouiwasaauyaaue as $eqgoocgaqwqcimie => $meqocwsecsywiiqs) {
            goto wmueqisaqsaqeqwo;
            xoqugcgcausywooc:
            $ewgwqamkygiqaawc .= ManipulateHTML::uuccukgasskgimsq("\144\151\166", ["\x63\x6c\x61\163\163" => $egkyssmuqcwaciya], [$euueacigmgoqkimu, $pkyyagewkiyckmwy]);
            goto yacyygsucqcwygis;
            iseyowcwogamscuy:
            $pkyyagewkiyckmwy = ManipulateHTML::qgsekwygcgawekeq("\154\141\142\145\x6c", ["\x63\x6c\x61\163\x73" => "\143\165\x73\164\x6f\x6d\x2d\143\x6f\x6e\164\162\x6f\154\55\154\x61\142\145\x6c", "\146\157\x72" => $aokagokqyuysuksm . $momcykaoccoymeig], true, $meqocwsecsywiiqs);
            goto myeqeyegsaaasiqc;
            iismyqyayagiyios:
            ioqkkemusiegokqk:
            goto cmussggwecawauwc;
            qmocisicciagswmy:
            $wwgucssaecqekuek = ["\143\154\x61\x73\x73" => "\x63\x75\163\164\157\155\55\143\x6f\156\164\x72\157\x6c\55\151\x6e\x70\165\164", self::ID => $aokagokqyuysuksm . $momcykaoccoymeig, self::TYPE => "\162\141\144\151\x6f", self::NAME => $aokagokqyuysuksm, self::VALUE => $eqgoocgaqwqcimie];
            goto kyssogoocgmkmcim;
            wmueqisaqsaqeqwo:
            $aokagokqyuysuksm = $this->mwikyscisascoeea();
            goto qmocisicciagswmy;
            osywimumacyuocou:
            egggqwyceacmeamu:
            goto qycwmgioageosswe;
            igoegiuockuwuukc:
            $wwgucssaecqekuek["\x63\150\145\143\x6b\145\144"] = true;
            goto osywimumacyuocou;
            myeqeyegsaaasiqc:
            $egkyssmuqcwaciya = "\143\165\163\x74\157\155\55\x63\x6f\x6e\164\162\157\154\x20\143\x75\x73\164\x6f\155\55\162\141\144\x69\157";
            goto gqimacywyeawgyaa;
            yacyygsucqcwygis:
            $momcykaoccoymeig++;
            goto iismyqyayagiyios;
            kyssogoocgmkmcim:
            if (!($ggauoeuaesiymgee && $ggauoeuaesiymgee === $eqgoocgaqwqcimie || !$ggauoeuaesiymgee && $momcykaoccoymeig == 1)) {
                goto egggqwyceacmeamu;
            }
            goto igoegiuockuwuukc;
            oiaiuqmgiesgcqyk:
            $egkyssmuqcwaciya .= "\x20\143\165\163\164\x6f\155\x2d\143\157\156\164\x72\x6f\154\x2d\151\156\x6c\x69\x6e\145";
            goto ioiumiumouowyygc;
            ioiumiumouowyygc:
            woumoysskimoeaki:
            goto xoqugcgcausywooc;
            gqimacywyeawgyaa:
            if (!$this->wmociykwcyesssui()) {
                goto woumoysskimoeaki;
            }
            goto oiaiuqmgiesgcqyk;
            qycwmgioageosswe:
            $euueacigmgoqkimu = ManipulateHTML::qgsekwygcgawekeq("\x69\156\x70\x75\x74", $wwgucssaecqekuek);
            goto iseyowcwogamscuy;
            cmussggwecawauwc:
        }
        goto qqcieyikoqueosyo;
        gmwksskckoeggoau:
        $momcykaoccoymeig = 1;
        goto gugqwiqqeesskwqw;
        gugqwiqqeesskwqw:
        $ggauoeuaesiymgee = $this->oiswysuiioecsaae();
        goto eomyiygumegiacam;
        eukogiuaicuoagkw:
        return $this->uikgwcuascgeissw() . $ewgwqamkygiqaawc;
        goto eqooyueyyiqqgygc;
        uqymcyyiewiiwqqu:
        $qiouiwasaauyaaue = $this->gkwkqmwweiawigae();
        goto uqsigcyiocicmiqm;
        qqcieyikoqueosyo:
        qwkyeaecekmwewke:
        goto qwicaaakcymkqgcu;
        uqsigcyiocicmiqm:
        if (!(is_array($qiouiwasaauyaaue) && $qiouiwasaauyaaue)) {
            goto cssukoaykymkugys;
        }
        goto gmwksskckoeggoau;
        eqooyueyyiqqgygc:
    }
}
