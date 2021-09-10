<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        gowuaykeqimwouio:
        foreach ($qssskwiqeumgkago as $aiowsaccomcoikus) {
            goto qggoyqomgwciiigc;
            icgomugwscaugkgm:
            owqkeeeamewcmaum:
            goto gceckcyyeqkgussg;
            qggoyqomgwciiigc:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto owqkeeeamewcmaum;
            }
            goto qiusaiuaqusoqcgm;
            gceckcyyeqkgussg:
            cymcgssycuaakwsu:
            goto agyygqioqggmgawy;
            qiusaiuaqusoqcgm:
            $this->cquokmemekqqywgi($aiowsaccomcoikus);
            goto icgomugwscaugkgm;
            agyygqioqggmgawy:
        }
        goto qaksccygequmaaku;
        qaksccygequmaaku:
        emkywookycykucmu:
        goto emqmissqcckcecsy;
        emqmissqcckcecsy:
        return $this;
        goto vimsegsagoiwywys;
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
        kwmeeuiuqcaokkye:
        foreach ($gmawcgiwcmsukeiu as $oaukocmsckciqaok) {
            $this->qokmgyacmymciaey($oaukocmsckciqaok);
            iywceuecmmmqksuu:
        }
        goto qkukcokaqekkoako;
        qkukcokaqekkoako:
        wucoiwmyomgymyku:
        goto iyomiywaoqgiskcc;
        iyomiywaoqgiskcc:
        ouowckcwkscikcic:
        goto yemqwgwwogceuekc;
        mqseqwqcsesmmuag:
        if (!is_array($gmawcgiwcmsukeiu)) {
            goto ouowckcwkscikcic;
        }
        goto kwmeeuiuqcaokkye;
        yemqwgwwogceuekc:
        return $this;
        goto bowssiaeccamuiiq;
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
        ikekioqaccggcwko:
        if (!(is_array($ywmkwiwkosakssii) && $ywmkwiwkosakssii)) {
            goto awgqqokeqkaaqsko;
        }
        goto imciyymqukkwemqa;
        gooymcgycisyuowi:
        $ggauoeuaesiymgee = ["\164\171\x70\x65" => $uusmaiomayssaecw, "\x70\x6f\163\x69\164\151\x6f\x6e" => 0, "\x6d\145\156\x75\137\x73\x6c\165\147" => $this->aakmagwggmkoiiyu(), "\x70\x61\147\145\137\x74\x69\x74\154\x65" => $this->qeeuwmmksmqiuywg(), "\x6d\145\x6e\x75\137\164\x69\164\154\x65" => $this->uikgwcuascgeissw("\141\154\x6c\137\x69\164\x65\155\163"), "\163\x68\157\x77\x5f\151\x6e\x5f\x6d\145\x6e\x75" => $this->egockcwgmeocqeqc()];
        goto ikekioqaccggcwko;
        saosiwmguyawuouy:
        return $this;
        goto wwsasogecmwwikws;
        oqwiceqiyckwgqkw:
        $this->views[$uusmaiomayssaecw] = $ywmkwiwkosakssii;
        goto ukwkqeoyuoageuwg;
        muakuckcsywcyuao:
        awgqqokeqkaaqsko:
        goto oqwiceqiyckwgqkw;
        mgqumoaokymooyou:
        if ($this->cgswceaawqgeskua($uusmaiomayssaecw)) {
            goto ieiwswkoqcqaykik;
        }
        goto gooymcgycisyuowi;
        imciyymqukkwemqa:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, $ggauoeuaesiymgee);
        goto muakuckcsywcyuao;
        wwsasogecmwwikws:
    }
    
    public function qemeyueyiwgsokuc($ywmkwiwkosakssii = []) : self
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\145\162\x5f\x70\141\147\x65" => ManipulateSetting::omkaowmygoqwsywq(), "\x63\x6f\x6c\165\x6d\x6e\x73" => []]);
        return $this->ecmiqywsauuoccwo("\x69\x6e\x64\145\x78", $ywmkwiwkosakssii);
    }
    
    public function wkesqcmiekqoykag($ywmkwiwkosakssii = []) : self
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\141\162\145\156\164\x5f\163\x6c\165\x67" => $this->aakmagwggmkoiiyu(), "\x6d\145\x6e\x75\137\163\x6c\165\x67" => "\145\144\151\x74\137" . $this->aakmagwggmkoiiyu(), "\x63\157\154\x75\x6d\x6e\x73" => 2]);
        return $this->ecmiqywsauuoccwo("\145\144\x69\x74", $ywmkwiwkosakssii);
    }
    
    public function gemkqqguesukeocw($ywmkwiwkosakssii = []) : self
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\141\162\145\x6e\164\137\x73\x6c\165\x67" => $this->aakmagwggmkoiiyu(), "\155\145\x6e\x75\137\163\x6c\165\147" => "\x61\x64\x64\x5f" . $this->aakmagwggmkoiiyu(), "\x63\x6f\154\165\x6d\156\163" => 2]);
        return $this->ecmiqywsauuoccwo("\x61\144\144", $ywmkwiwkosakssii);
    }
    
    public function aseucqksocwomwos($ywmkwiwkosakssii = []) : self
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\x61\162\x65\156\x74\137\163\x6c\165\x67" => $this->aakmagwggmkoiiyu(), "\x6d\145\156\x75\137\x73\x6c\165\x67" => "\x73\x68\157\167\x5f" . $this->aakmagwggmkoiiyu(), "\143\x6f\x6c\165\x6d\x6e\163" => []]);
        return $this->ecmiqywsauuoccwo("\x73\x68\157\x77", $ywmkwiwkosakssii);
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
        wkceacsqeyiimcus:
        if (!$yuwymayicwwqiske) {
            goto ukeyisqesuoscwke;
        }
        goto acycwqqmgeygymkw;
        icqkceioeysykgua:
        return $yuwymayicwwqiske;
        goto kqkgwqkwqeokgagk;
        qiayggmakgsuwwsm:
        ukeyisqesuoscwke:
        goto icqkceioeysykgua;
        qgwcisoeysiwakak:
        $yuwymayicwwqiske = $this->prefix;
        goto wkceacsqeyiimcus;
        acycwqqmgeygymkw:
        $yuwymayicwwqiske .= "\x5f";
        goto qiayggmakgsuwwsm;
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
        ayaiiymgyagsoqia:
        if (!(is_array($aaqqkgyougeiueyq) && $aaqqkgyougeiueyq)) {
            goto cecsiuuukuegaqgq;
        }
        goto wksekwiuccskimmu;
        mookyeaauceccaga:
        cecsiuuukuegaqgq:
        goto qasccueceswyusgy;
        qaggmqequkmcamma:
        yaqgciyuusquaeea:
        goto qcysssoeueakqowq;
        icisiaukqqmgcwci:
        foreach ($aaqqkgyougeiueyq as $uusmaiomayssaecw => $ymaogssqccumcyqa) {
            goto sosqqwiqmeqkwcsm;
            wwwkcwcigkeqiqwo:
            gaagyegguueymiec:
            goto kkmeaociiyukweka;
            gwwyoyaqosoggkcu:
            $aaqqkgyougeiueyq[$uusmaiomayssaecw] = $ymaogssqccumcyqa->sacmkccceuywoqsq(true, $ywmkwiwkosakssii);
            goto wwwkcwcigkeqiqwo;
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
        wgksasuisoeqasuk:
        array_multisort($yygmoeguaqyumuui, SORT_ASC, $aaqqkgyougeiueyq);
        goto icisiaukqqmgcwci;
        qasccueceswyusgy:
        return $kkeqqkkkqwkocsyu;
        goto yuwiekiseooqagqo;
        qcysssoeueakqowq:
        $kkeqqkkkqwkocsyu["\163\x63\150\145\155\141"] = $aaqqkgyougeiueyq;
        goto mookyeaauceccaga;
        wksekwiuccskimmu:
        $yygmoeguaqyumuui = array_map("\163\x74\x72\x6c\x65\156", array_keys($aaqqkgyougeiueyq));
        goto wgksasuisoeqasuk;
        wkakwguccsqwkiam:
        ManipulateArray::unset($kkeqqkkkqwkocsyu, "\x6e\157\x74\137\x73\x63\150\x65\155\x61");
        goto gmwcaekkucsikwye;
        gmwcaekkucsikwye:
        $aaqqkgyougeiueyq = ManipulateArray::get($kkeqqkkkqwkocsyu, "\x73\143\x68\145\x6d\x61", []);
        goto ayaiiymgyagsoqia;
        yuwiekiseooqagqo:
    }
}
