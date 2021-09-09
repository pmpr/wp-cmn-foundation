<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;

use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class OptionAwareField extends Field
{
    
    protected array $options = [];
    
    protected array $extendable = [];
    
    public function __construct(?string $sqeykgyoooqysmca, ?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $mkqqqewsokcswckc = null, array $qiouiwasaauyaaue = [])
    {
        parent::__construct($sqeykgyoooqysmca, $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        $this->options = $qiouiwasaauyaaue;
    }
    
    public function gkwkqmwweiawigae() : ?array
    {
        return $this->options;
    }
    
    public function eksgyasugmuassok(array $qiouiwasaauyaaue) : self
    {
        $this->options = $qiouiwasaauyaaue;
        return $this;
    }
    
    public function kesomeowemmyygey($uusmaiomayssaecw, $omkysikckkcieckq) : self
    {
        $this->options[$uusmaiomayssaecw] = $omkysikckkcieckq;
        return $this;
    }
    
    public function acauweqyyugwisqc(?array $qiouiwasaauyaaue = []) : self
    {
        goto gqokeuqaekgyqicc;
        iuckwquqmiqyiwme:
        return $this;
        goto gwgecwmmqawiyeyc;
        gqokeuqaekgyqicc:
        foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $omkysikckkcieckq) {
            $this->kesomeowemmyygey($uusmaiomayssaecw, $omkysikckkcieckq);
            cyaykeqeigqiesci:
        }
        goto seooyagaqiumwygo;
        seooyagaqiumwygo:
        ocogeauuqekwauiw:
        goto iuckwquqmiqyiwme;
        gwgecwmmqawiyeyc:
    }
    
    public function asicmoumkgkcmiqq() : array
    {
        return $this->extendable;
    }
    
    public function wmwikuasuocmqycw($ywmkwiwkosakssii = []) : self
    {
        goto ceuqoqkwqcsykaqg;
        ccwqgeoouwogwaua:
        $ywmkwiwkosakssii["\146\x69\145\154\144\163"] = $ikgwqyuyckaewsow;
        goto oyuowasocagmkyqu;
        kckmqmyuuwksiqmw:
        return $this;
        goto woeocusikcmygaae;
        mooiyyoqgosgmmca:
        $ikgwqyuyckaewsow[] = $this->mwikyscisascoeea();
        goto ccwqgeoouwogwaua;
        euaukyacsiqecymw:
        goto cwsomsmwaqaisgio;
        goto uuygomywywcgqsqa;
        scwgussgsqqekccq:
        if (is_array($ikgwqyuyckaewsow)) {
            goto kmaemucaqywwkmum;
        }
        goto gsgkqggwiyyuwkie;
        kmmmseaoqkcisuky:
        $ikgwqyuyckaewsow = ManipulateArray::get($ywmkwiwkosakssii, "\x66\151\145\x6c\x64\163");
        goto yemokasigukmuoyk;
        uuygomywywcgqsqa:
        gumauoekyeeuqiaa:
        goto agegyckegkmsoeow;
        gsgkqggwiyyuwkie:
        $ikgwqyuyckaewsow = [$ikgwqyuyckaewsow];
        goto emsmkeoommcyaqsg;
        oyuowasocagmkyqu:
        $this->extendable = $ywmkwiwkosakssii;
        goto kckmqmyuuwksiqmw;
        qwauesgyogyigyss:
        cwsomsmwaqaisgio:
        goto mooiyyoqgosgmmca;
        emsmkeoommcyaqsg:
        kmaemucaqywwkmum:
        goto euaukyacsiqecymw;
        yemokasigukmuoyk:
        if (!$ikgwqyuyckaewsow) {
            goto gumauoekyeeuqiaa;
        }
        goto scwgussgsqqekccq;
        agegyckegkmsoeow:
        $ikgwqyuyckaewsow = [];
        goto qwauesgyogyigyss;
        ceuqoqkwqcsykaqg:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [
            "\166\x61\x72\x69\x61\x74\x69\x6f\x6e\163" => [],
            
            "\x66\151\145\154\x64\x73" => [],
        ]);
        goto kmmmseaoqkcisuky;
        woeocusikcmygaae:
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto kkuumakayqumesck;
        iewmcmiquoyacgyq:
        symugyeaukyomkke:
        goto wcqwgisyoeuosuyq;
        mwuueaqkukaikwki:
        $this->eyygsasuqmommkua($omkysikckkcieckq);
        goto qmammsguewagcqkg;
        meqoykkccigcymuq:
        $this->qigsyyqgewgskemg("\x70\x72\55\145\170\x74\145\x6e\144\x61\x62\154\x65\x2d\x69\156\160\x75\164")->igmaewykumgwoaoy("\144\x61\x74\141\x2d\145\170\164\x65\156\144\141\142\154\145", json_encode($mmswksymsquueauk));
        goto muwkcogucacmioyk;
        eeosougaawskcqme:
        $omkysikckkcieckq = $isksgswsmmqgeqmo = reset($qiouiwasaauyaaue);
        goto acquwsaqecuammqu;
        qwysywacqwqcqsoa:
        uqgymuciaiouwmse:
        goto kcsqwsswsemaumma;
        qmammsguewagcqkg:
        kuwmsgiyyaykcmcy:
        goto qwysywacqwqcqsoa;
        useqokgmmisiguym:
        if (!$qiouiwasaauyaaue) {
            goto kuwmsgiyyaykcmcy;
        }
        goto eeosougaawskcqme;
        eeugkasygsucwemg:
        aeigqeeeqiqgkmcw:
        goto aqkqkawsoekoguwq;
        kcsqwsswsemaumma:
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
        goto wcqcuygyssquoecu;
        acgckkceoemekqye:
        amqugcggsgmmoysc:
        goto cywuoisiuqqycswk;
        iywsuggwumemiueu:
        $omkysikckkcieckq = array_keys($isksgswsmmqgeqmo)[0];
        goto qwuwmceyoweoquwe;
        egkogyiekywscqky:
        $omkysikckkcieckq = array_keys($isksgswsmmqgeqmo["\x6f\x70\164\151\157\x6e\163"])[0];
        goto gekwsciqyqicqssw;
        aqkqkawsoekoguwq:
        if (isset($isksgswsmmqgeqmo["\157\160\x74\151\157\156\163"])) {
            goto amqugcggsgmmoysc;
        }
        goto iywsuggwumemiueu;
        cywuoisiuqqycswk:
        if (!is_array($isksgswsmmqgeqmo["\157\160\164\x69\x6f\156\x73"])) {
            goto wyeikksaagewuyua;
        }
        goto egkogyiekywscqky;
        usqogwuuyqisgqoy:
        if (!$mmswksymsquueauk) {
            goto wosuqmeaykwqgkcw;
        }
        goto meqoykkccigcymuq;
        muwkcogucacmioyk:
        wosuqmeaykwqgkcw:
        goto wskwayesikacgimy;
        qwuwmceyoweoquwe:
        goto symugyeaukyomkke;
        goto acgckkceoemekqye;
        wskwayesikacgimy:
        if (!$this->msmiagueogcsucgc()) {
            goto uqgymuciaiouwmse;
        }
        goto kcwywemwqiokmwqu;
        mmgecsioimmsaese:
        $omkysikckkcieckq = array_keys($qiouiwasaauyaaue)[0];
        goto iuwckqmwgeegmkym;
        acquwsaqecuammqu:
        if (is_array($isksgswsmmqgeqmo)) {
            goto aeigqeeeqiqgkmcw;
        }
        goto mmgecsioimmsaese;
        kkuumakayqumesck:
        $mmswksymsquueauk = $this->asicmoumkgkcmiqq();
        goto usqogwuuyqisgqoy;
        kcwywemwqiokmwqu:
        $qiouiwasaauyaaue = $this->gkwkqmwweiawigae();
        goto useqokgmmisiguym;
        gekwsciqyqicqssw:
        wyeikksaagewuyua:
        goto iewmcmiquoyacgyq;
        iuwckqmwgeegmkym:
        goto aqgswwomukqywuwo;
        goto eeugkasygsucwemg;
        wcqwgisyoeuosuyq:
        aqgswwomukqywuwo:
        goto mwuueaqkukaikwki;
        wcqcuygyssquoecu:
    }
}
