<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM;

use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\ORM\DB\Field\Field;
use Pmpr\Common\Foundation\Register\RegisterPost;

class Register extends RegisterPost
{
    
    protected array $views = [];
    
    protected array $schema = [];
    
    protected array $notSchema = [];
    
    protected bool $isGlobal = false;
    
    protected ?string $prefix = null;
    
    protected ?bool $mapMetaCap = null;
    
    public function aeosueemgsygqese() : ?array
    {
        return $this->schema;
    }
    
    public function uqeoyqiwywwmsiew($uusmaiomayssaecw) : ?Field
    {
        return ManipulateArray::get($this->aeosueemgsygqese(), $uusmaiomayssaecw);
    }
    
    public function cquokmemekqqywgi(Field $aiowsaccomcoikus) : self
    {
        $this->schema[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        return $this;
    }
    
    public function ckaemmoueyosqqkq(array $qssskwiqeumgkago) : self
    {
        goto gowuaykeqimwouio;
        emqmissqcckcecsy:
        return $this;
        goto vimsegsagoiwywys;
        gowuaykeqimwouio:
        foreach ($qssskwiqeumgkago as $aiowsaccomcoikus) {
            goto qggoyqomgwciiigc;
            gceckcyyeqkgussg:
            cymcgssycuaakwsu:
            goto agyygqioqggmgawy;
            qggoyqomgwciiigc:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto owqkeeeamewcmaum;
            }
            goto qiusaiuaqusoqcgm;
            icgomugwscaugkgm:
            owqkeeeamewcmaum:
            goto gceckcyyeqkgussg;
            qiusaiuaqusoqcgm:
            $this->cquokmemekqqywgi($aiowsaccomcoikus);
            goto icgomugwscaugkgm;
            agyygqioqggmgawy:
        }
        goto qaksccygequmaaku;
        qaksccygequmaaku:
        emkywookycykucmu:
        goto emqmissqcckcecsy;
        vimsegsagoiwywys:
    }
    
    public function iegyckmmougkucya() : array
    {
        return $this->notSchema;
    }
    
    public function qokmgyacmymciaey(?string $uusmaiomayssaecw) : self
    {
        $this->notSchema[] = $uusmaiomayssaecw;
        return $this;
    }
    
    public function mqekkegckiiqoquu(?array $gmawcgiwcmsukeiu = []) : self
    {
        goto mqseqwqcsesmmuag;
        iyomiywaoqgiskcc:
        ouowckcwkscikcic:
        goto yemqwgwwogceuekc;
        yemqwgwwogceuekc:
        return $this;
        goto bowssiaeccamuiiq;
        mqseqwqcsesmmuag:
        if (!is_array($gmawcgiwcmsukeiu)) {
            goto ouowckcwkscikcic;
        }
        goto kwmeeuiuqcaokkye;
        qkukcokaqekkoako:
        wucoiwmyomgymyku:
        goto iyomiywaoqgiskcc;
        kwmeeuiuqcaokkye:
        foreach ($gmawcgiwcmsukeiu as $oaukocmsckciqaok) {
            $this->qokmgyacmymciaey($oaukocmsckciqaok);
            iywceuecmmmqksuu:
        }
        goto qkukcokaqekkoako;
        bowssiaeccamuiiq:
    }
    
    public function okgmqaeuaeymaocm(?string $yuwymayicwwqiske) : self
    {
        $this->prefix = $yuwymayicwwqiske;
        return $this;
    }
    
    public function iemucaoqaisiwise()
    {
        return $this->mapMetaCap;
    }
    
    public function aioqieywgykaaoec() : ?array
    {
        return $this->views;
    }
    
    public function cgswceaawqgeskua($uusmaiomayssaecw)
    {
        return ManipulateArray::get($this->aioqieywgykaaoec(), $uusmaiomayssaecw);
    }
    
    public function ecmiqywsauuoccwo(string $uusmaiomayssaecw, $ywmkwiwkosakssii = []) : self
    {
        goto mgqumoaokymooyou;
        ukwkqeoyuoageuwg:
        ieiwswkoqcqaykik:
        goto saosiwmguyawuouy;
        saosiwmguyawuouy:
        return $this;
        goto wwsasogecmwwikws;
        muakuckcsywcyuao:
        awgqqokeqkaaqsko:
        goto oqwiceqiyckwgqkw;
        oqwiceqiyckwgqkw:
        $this->views[$uusmaiomayssaecw] = $ywmkwiwkosakssii;
        goto ukwkqeoyuoageuwg;
        mgqumoaokymooyou:
        if ($this->cgswceaawqgeskua($uusmaiomayssaecw)) {
            goto ieiwswkoqcqaykik;
        }
        goto gooymcgycisyuowi;
        gooymcgycisyuowi:
        $ggauoeuaesiymgee = ["\164\171\x70\145" => $uusmaiomayssaecw, "\160\157\163\x69\164\x69\x6f\x6e" => 0, "\x6d\x65\x6e\165\x5f\x73\x6c\x75\x67" => $this->aakmagwggmkoiiyu(), "\160\141\147\145\x5f\x74\x69\164\x6c\x65" => $this->qeeuwmmksmqiuywg(), "\x6d\145\156\165\x5f\164\x69\x74\154\145" => $this->uikgwcuascgeissw("\141\154\x6c\137\151\164\x65\x6d\163"), "\163\150\157\167\137\x69\156\x5f\155\145\x6e\x75" => $this->egockcwgmeocqeqc()];
        goto ikekioqaccggcwko;
        imciyymqukkwemqa:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, $ggauoeuaesiymgee);
        goto muakuckcsywcyuao;
        ikekioqaccggcwko:
        if (!(is_array($ywmkwiwkosakssii) && $ywmkwiwkosakssii)) {
            goto awgqqokeqkaaqsko;
        }
        goto imciyymqukkwemqa;
        wwsasogecmwwikws:
    }
    
    public function qemeyueyiwgsokuc($ywmkwiwkosakssii = []) : self
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\x65\162\x5f\160\141\x67\x65" => ManipulateSetting::omkaowmygoqwsywq(), "\x63\157\154\x75\x6d\156\x73" => []]);
        return $this->ecmiqywsauuoccwo("\151\x6e\x64\x65\170", $ywmkwiwkosakssii);
    }
    
    public function wkesqcmiekqoykag($ywmkwiwkosakssii = []) : self
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\141\162\x65\x6e\164\137\x73\154\x75\x67" => $this->aakmagwggmkoiiyu(), "\x6d\x65\156\165\x5f\163\154\165\147" => "\x65\144\x69\x74\x5f" . $this->aakmagwggmkoiiyu(), "\x63\x6f\154\165\155\156\x73" => 2]);
        return $this->ecmiqywsauuoccwo("\x65\144\151\x74", $ywmkwiwkosakssii);
    }
    
    public function gemkqqguesukeocw($ywmkwiwkosakssii = []) : self
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\141\162\x65\156\164\137\163\x6c\165\x67" => $this->aakmagwggmkoiiyu(), "\155\x65\156\165\137\x73\154\165\147" => "\x61\144\x64\x5f" . $this->aakmagwggmkoiiyu(), "\143\157\x6c\165\x6d\x6e\x73" => 2]);
        return $this->ecmiqywsauuoccwo("\x61\144\x64", $ywmkwiwkosakssii);
    }
    
    public function aseucqksocwomwos($ywmkwiwkosakssii = []) : self
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\141\x72\x65\x6e\x74\137\163\x6c\165\147" => $this->aakmagwggmkoiiyu(), "\155\x65\156\x75\x5f\x73\154\165\147" => "\x73\x68\x6f\x77\x5f" . $this->aakmagwggmkoiiyu(), "\143\157\x6c\165\155\156\x73" => []]);
        return $this->ecmiqywsauuoccwo("\x73\x68\x6f\x77", $ywmkwiwkosakssii);
    }
    
    public function cykmceoageywgkqs() : bool
    {
        return $this->isGlobal;
    }
    
    public function iukgqamaqiamuosa() : self
    {
        $this->isGlobal = true;
        return $this;
    }
    
    public function ogqgmqymcwsqikme() : ?string
    {
        goto qgwcisoeysiwakak;
        icqkceioeysykgua:
        return $yuwymayicwwqiske;
        goto kqkgwqkwqeokgagk;
        wkceacsqeyiimcus:
        if (!$yuwymayicwwqiske) {
            goto ukeyisqesuoscwke;
        }
        goto acycwqqmgeygymkw;
        qiayggmakgsuwwsm:
        ukeyisqesuoscwke:
        goto icqkceioeysykgua;
        acycwqqmgeygymkw:
        $yuwymayicwwqiske .= "\x5f";
        goto qiayggmakgsuwwsm;
        qgwcisoeysiwakak:
        $yuwymayicwwqiske = $this->prefix;
        goto wkceacsqeyiimcus;
        kqkgwqkwqeokgagk:
    }
    
    public function aakmagwggmkoiiyu() : ?string
    {
        return "{$this->ogqgmqymcwsqikme()}{$this->aiqioscoyukqgsgw()}";
    }
    
    public function aiqioscoyukqgsgw() : ?string
    {
        return $this->name;
    }
    
    public function masyeqmaiuqwosei() : bool
    {
        return !empty($this->name);
    }
    
    public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array
    {
        goto wkakwguccsqwkiam;
        wksekwiuccskimmu:
        $yygmoeguaqyumuui = array_map("\x73\164\x72\x6c\x65\x6e", array_keys($aaqqkgyougeiueyq));
        goto wgksasuisoeqasuk;
        qcysssoeueakqowq:
        $kkeqqkkkqwkocsyu["\163\143\x68\x65\155\x61"] = $aaqqkgyougeiueyq;
        goto mookyeaauceccaga;
        qaggmqequkmcamma:
        yaqgciyuusquaeea:
        goto qcysssoeueakqowq;
        gmwcaekkucsikwye:
        $aaqqkgyougeiueyq = ManipulateArray::get($kkeqqkkkqwkocsyu, "\x73\x63\150\145\x6d\141", []);
        goto ayaiiymgyagsoqia;
        wkakwguccsqwkiam:
        ManipulateArray::unset($kkeqqkkkqwkocsyu, "\x6e\157\164\137\163\x63\150\145\x6d\141");
        goto gmwcaekkucsikwye;
        qasccueceswyusgy:
        return $kkeqqkkkqwkocsyu;
        goto yuwiekiseooqagqo;
        mookyeaauceccaga:
        cecsiuuukuegaqgq:
        goto qasccueceswyusgy;
        icisiaukqqmgcwci:
        foreach ($aaqqkgyougeiueyq as $uusmaiomayssaecw => $ymaogssqccumcyqa) {
            goto sosqqwiqmeqkwcsm;
            gwwyoyaqosoggkcu:
            $aaqqkgyougeiueyq[$uusmaiomayssaecw] = $ymaogssqccumcyqa->sacmkccceuywoqsq(true, $ywmkwiwkosakssii);
            goto wwwkcwcigkeqiqwo;
            wwwkcwcigkeqiqwo:
            gaagyegguueymiec:
            goto kkmeaociiyukweka;
            sosqqwiqmeqkwcsm:
            if (!$ymaogssqccumcyqa instanceof Field) {
                goto gaagyegguueymiec;
            }
            goto gwwyoyaqosoggkcu;
            kkmeaociiyukweka:
            cewamoymcqkmsswi:
            goto cuoskwammceoauak;
            cuoskwammceoauak:
        }
        goto qaggmqequkmcamma;
        ayaiiymgyagsoqia:
        if (!(is_array($aaqqkgyougeiueyq) && $aaqqkgyougeiueyq)) {
            goto cecsiuuukuegaqgq;
        }
        goto wksekwiuccskimmu;
        wgksasuisoeqasuk:
        array_multisort($yygmoeguaqyumuui, SORT_ASC, $aaqqkgyougeiueyq);
        goto icisiaukqqmgcwci;
        yuwiekiseooqagqo:
    }
}
