<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
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
        foreach ($qssskwiqeumgkago as $aiowsaccomcoikus) {
            if ($aiowsaccomcoikus instanceof Field) {
                $this->cquokmemekqqywgi($aiowsaccomcoikus);
            }
            usquiuuyiyqaeyiu:
        }
        kymkucucyeoeikim:
        return $this;
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
        if (is_array($gmawcgiwcmsukeiu)) {
            foreach ($gmawcgiwcmsukeiu as $oaukocmsckciqaok) {
                $this->qokmgyacmymciaey($oaukocmsckciqaok);
                uguigkcmukuouway:
            }
            qicwaskssogcokgm:
        }
        return $this;
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
        if (!$this->cgswceaawqgeskua($uusmaiomayssaecw)) {
            $ggauoeuaesiymgee = ['type' => $uusmaiomayssaecw, 'position' => 0, 'menu_slug' => $this->aakmagwggmkoiiyu(), 'page_title' => $this->qeeuwmmksmqiuywg(), 'menu_title' => $this->uikgwcuascgeissw('all_items'), 'show_in_menu' => $this->egockcwgmeocqeqc()];
            if (is_array($ywmkwiwkosakssii) && $ywmkwiwkosakssii) {
                $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, $ggauoeuaesiymgee);
            }
            $this->views[$uusmaiomayssaecw] = $ywmkwiwkosakssii;
        }
        return $this;
    }
    
    public function qemeyueyiwgsokuc($ywmkwiwkosakssii = []) : self
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ['per_page' => ManipulateSetting::omkaowmygoqwsywq(), 'columns' => []]);
        return $this->ecmiqywsauuoccwo('index', $ywmkwiwkosakssii);
    }
    
    public function wkesqcmiekqoykag($ywmkwiwkosakssii = []) : self
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ['parent_slug' => $this->aakmagwggmkoiiyu(), 'menu_slug' => 'edit_' . $this->aakmagwggmkoiiyu(), 'columns' => 2]);
        return $this->ecmiqywsauuoccwo('edit', $ywmkwiwkosakssii);
    }
    
    public function gemkqqguesukeocw($ywmkwiwkosakssii = []) : self
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ['parent_slug' => $this->aakmagwggmkoiiyu(), 'menu_slug' => 'add_' . $this->aakmagwggmkoiiyu(), 'columns' => 2]);
        return $this->ecmiqywsauuoccwo('add', $ywmkwiwkosakssii);
    }
    
    public function aseucqksocwomwos($ywmkwiwkosakssii = []) : self
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ['parent_slug' => $this->aakmagwggmkoiiyu(), 'menu_slug' => 'show_' . $this->aakmagwggmkoiiyu(), 'columns' => []]);
        return $this->ecmiqywsauuoccwo('show', $ywmkwiwkosakssii);
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
        $yuwymayicwwqiske = $this->prefix;
        if ($yuwymayicwwqiske) {
            $yuwymayicwwqiske .= '_';
        }
        return $yuwymayicwwqiske;
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
        ManipulateArray::unset($kkeqqkkkqwkocsyu, 'not_schema');
        $aaqqkgyougeiueyq = ManipulateArray::get($kkeqqkkkqwkocsyu, 'schema', []);
        if (is_array($aaqqkgyougeiueyq) && $aaqqkgyougeiueyq) {
            $yygmoeguaqyumuui = array_map('strlen', array_keys($aaqqkgyougeiueyq));
            array_multisort($yygmoeguaqyumuui, SORT_ASC, $aaqqkgyougeiueyq);
            foreach ($aaqqkgyougeiueyq as $uusmaiomayssaecw => $ymaogssqccumcyqa) {
                if ($ymaogssqccumcyqa instanceof Field) {
                    $aaqqkgyougeiueyq[$uusmaiomayssaecw] = $ymaogssqccumcyqa->sacmkccceuywoqsq(true, $ywmkwiwkosakssii);
                }
                esuiysskoweawsue:
            }
            uqqaiagaeqgqgaiy:
            $kkeqqkkkqwkocsyu['schema'] = $aaqqkgyougeiueyq;
        }
        return $kkeqqkkkqwkocsyu;
    }
}
