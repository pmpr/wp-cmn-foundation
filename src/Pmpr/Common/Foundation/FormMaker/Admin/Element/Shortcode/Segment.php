<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Element\Shortcode;

use Pmpr\Common\Foundation\FormMaker\Admin\Element\Modal\Segment as BaseClass;
use Pmpr\Common\Foundation\FormMaker\Admin\Field\BSSelect;
use Pmpr\Common\Foundation\FormMaker\Admin\Field\Field;
use Pmpr\Common\Foundation\FormMaker\Admin\Field\Group;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

abstract class Segment extends BaseClass
{
    
    protected $target = self::ALL;
    
    protected bool $enableInAmp = true;
    
    public function squsacgomqgkakaw()
    {
        return $this->target;
    }
    
    public function kqeoeeayumeoyaoa() : ?bool
    {
        return $this->enableInAmp;
    }
    
    public function mwikyscisascoeea() : ?string
    {
        $aokagokqyuysuksm = parent::mwikyscisascoeea();
        if (!$aokagokqyuysuksm) {
            $aokagokqyuysuksm = $this->aakmagwggmkoiiyu();
        }
        return $aokagokqyuysuksm;
    }
    public function init()
    {
        parent::init();
        $this->gkoiuyagqcoecigk();
    }
    public function gkoiuyagqcoecigk()
    {
        add_shortcode($this->cisyiemkeykgkomc(), [$this, 'oseacqimecwggakw']);
        
        add_shortcode("pmpr_{$this->aakmagwggmkoiiyu()}", [$this, 'oseacqimecwggakw']);
    }
    
    public function isqsicqgwyyasyke() : array
    {
        return $this->sscegwueamckwmcy('shortcode_columns', []);
    }
    
    public function oseacqimecwggakw($wwgucssaecqekuek) : string
    {
        $nsmgceoqaqogqmuw = '';
        if (ManipulateServer::smowememmgeukwki() && !$this->kqeoeeayumeoyaoa()) {
            return $nsmgceoqaqogqmuw;
        }
        if (is_array($wwgucssaecqekuek)) {
            $ggauoeuaesiymgee = $this->gwquaaaaikcwcges();
            $wwgucssaecqekuek = array_merge($ggauoeuaesiymgee, $wwgucssaecqekuek);
        } else {
            $wwgucssaecqekuek = [];
        }
        $iqyiekoceqqsqoow = ManipulateArray::get($wwgucssaecqekuek, self::LAYOUT, $this->aakmagwggmkoiiyu());
        if ($iqyiekoceqqsqoow) {
            $wwgucssaecqekuek = $this->woqmqgkiuomammya($wwgucssaecqekuek);
            $wwgucssaecqekuek = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->aakmagwggmkoiiyu()}_shortcode_attrs"), $wwgucssaecqekuek, $this);
            
            $qookweymeqawmcwo = array_filter($this->kyaweigsqwomykaa($wwgucssaecqekuek));
            $qookweymeqawmcwo['shortcode_name'] = $this->aakmagwggmkoiiyu();
            $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw($iqyiekoceqqsqoow, $qookweymeqawmcwo, ['default' => 'index.html.twig']);
        } else {
            wp_die(__('cannot found template for create markup in shortcode of: ' . self::uqggkiomyiceyooa(), PR__CMN__FOUNDATION));
        }
        return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw('shortcode_html'), $nsmgceoqaqogqmuw, $this->aakmagwggmkoiiyu(), $this);
    }
    
    public final function woqmqgkiuomammya($wwgucssaecqekuek = [], $ikgwqyuyckaewsow = []) : array
    {
        $this->ecwgiiuacoaokqkw();
        if (!$ikgwqyuyckaewsow) {
            $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        }
        foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) {
            if ($aiowsaccomcoikus instanceof Field) {
                $eqgoocgaqwqcimie = ManipulateArray::get($wwgucssaecqekuek, $aokagokqyuysuksm);
                $wwgucssaecqekuek[$aokagokqyuysuksm] = $this->ymcsqgcuewmommio($eqgoocgaqwqcimie, $aiowsaccomcoikus);
            }
            igmmqwyawcuuckkq:
        }
        wiwoiyoakywqyaiy:
        return $wwgucssaecqekuek;
    }
    
    public function ymcsqgcuewmommio($eqgoocgaqwqcimie, $aiowsaccomcoikus = null)
    {
        if ($aiowsaccomcoikus instanceof Field) {
            if ($eqgoocgaqwqcimie) {
                if ($aiowsaccomcoikus instanceof Group) {
                    $eqgoocgaqwqcimie = $this->xaycwsakgqmcseue($eqgoocgaqwqcimie, $aiowsaccomcoikus);
                } elseif ($aiowsaccomcoikus instanceof BSSelect) {
                    if ($aiowsaccomcoikus->zosqeeykkcqmmkqs()) {
                        $eqgoocgaqwqcimie = $this->acgiiomwuewkmgei($eqgoocgaqwqcimie);
                    }
                } elseif (is_string($eqgoocgaqwqcimie)) {
                    $eqgoocgaqwqcimie = rawurldecode($eqgoocgaqwqcimie);
                }
            }
        }
        return $eqgoocgaqwqcimie;
    }
    
    public function ocwoiywammqiuggq() : string
    {
        return 'pr-shortcode';
    }
    
    public function ccmewsuaqiaegqso($eqgoocgaqwqcimie)
    {
        preg_match('/{(.*?)}/', $eqgoocgaqwqcimie, $uammqaqiwgcmeska);
        if (isset($uammqaqiwgcmeska[1])) {
            $wywkqkuaaekaokeq = do_shortcode('[' . $uammqaqiwgcmeska[1] . ']');
            $eqgoocgaqwqcimie = str_replace($uammqaqiwgcmeska[0], $wywkqkuaaekaokeq, $eqgoocgaqwqcimie);
        }
        return $eqgoocgaqwqcimie;
    }
    
    public function squkoowcgeokaywq($somsiuiquigiqsmk) : array
    {
        $oammesyieqmwuwyi = [];
        foreach ($somsiuiquigiqsmk as $uusmaiomayssaecw => $mcqieaigyeeyaksm) {
            $oammesyieqmwuwyi[$uusmaiomayssaecw] = ManipulateHTML::qgsekwygcgawekeq('img', ['src' => $mcqieaigyeeyaksm]);
            sqwuqegeiisoiiuq:
        }
        eouwacqiommmeaqc:
        return $oammesyieqmwuwyi;
    }
    
    public function kyaweigsqwomykaa($wwgucssaecqekuek = []) : array
    {
        return $wwgucssaecqekuek;
    }
    
    public function xaycwsakgqmcseue($icwicymcioeyeyek, ?Group $aiowsaccomcoikus = null) : array
    {
        $aqykuigiuwmmcieu = [];
        preg_match_all('/\\((.*?)\\)/', $icwicymcioeyeyek, $meyiiwcswqmuggyg);
        $meyiiwcswqmuggyg = $meyiiwcswqmuggyg[1];
        foreach ($meyiiwcswqmuggyg as $momcykaoccoymeig => $uammqaqiwgcmeska) {
            $uammqaqiwgcmeska = explode(',', $uammqaqiwgcmeska);
            foreach ($uammqaqiwgcmeska as $igqsaukqcqscimok) {
                preg_match('/([^=]+)/', $igqsaukqcqscimok, $uusmaiomayssaecw);
                preg_match("/'([^']*)'/", $igqsaukqcqscimok, $eqgoocgaqwqcimie);
                $uusmaiomayssaecw = $uusmaiomayssaecw[1];
                if (isset($eqgoocgaqwqcimie[1])) {
                    $uskwgmsuqowaosow = ManipulateArray::get($aiowsaccomcoikus->ugmceccgwaaaigiy(), $uusmaiomayssaecw);
                    $aqykuigiuwmmcieu[$momcykaoccoymeig][$uusmaiomayssaecw] = $this->ymcsqgcuewmommio($eqgoocgaqwqcimie[1], $uskwgmsuqowaosow);
                }
                egesuwkqkmaigaoe:
            }
            ugogoekeckgcmuaw:
            ykqsuiyyosyeyscc:
        }
        uscokkmquayiukag:
        return $aqykuigiuwmmcieu;
    }
    
    public function acgiiomwuewkmgei($eqgoocgaqwqcimie)
    {
        if (is_string($eqgoocgaqwqcimie)) {
            
            $aqykuigiuwmmcieu = explode(self::COMMA_SYMBOL, $eqgoocgaqwqcimie);
            if (count($aqykuigiuwmmcieu) <= 1) {
                $eqgoocgaqwqcimie = explode(self::PIPE_SYMBOL, $eqgoocgaqwqcimie);
            } else {
                $eqgoocgaqwqcimie = $aqykuigiuwmmcieu;
            }
        }
        return $eqgoocgaqwqcimie;
    }
    
    public abstract function gwquaaaaikcwcges() : array;
}
