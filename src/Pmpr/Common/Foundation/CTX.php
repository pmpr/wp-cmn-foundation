<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation;

use Pmpr\Common\Foundation\Container\Container;
use Pmpr\Common\Foundation\Decorator\DecoratorQuery;
use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTaxonomy;
use Pmpr\Common\Foundation\FormMaker\Admin\Field\Field;
use Pmpr\Common\Foundation\FormMaker\Admin\Field\File;
use Pmpr\Common\Foundation\FormMaker\Admin\Traits\FieldTrait;
use Pmpr\Common\Foundation\Manipulate\ManipulateRewrite;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Pmpr\Common\Foundation\Register\RegisterTaxonomy;

class CTX extends Container
{
    use FieldTrait;
    
    protected ?RegisterTaxonomy $register = null;
    
    protected ?array $fields = [];
    
    public function __construct($aokagokqyuysuksm = null)
    {
        if (!$aokagokqyuysuksm) {
            $this->mgoeqkosywwaoqyw();
            if (!$this->miwqiiqeegeqcwis()) {
                $this->oyeskqayoscwciem()->usuqmwksoeaayaig(ManipulateString::ogimogiceeekegoi(self::ugwmakayykcmcmqa()));
            }
            parent::__construct();
        }
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu('init', [$this, 'init'], 99)->qcsmikeggeemccuu('admin_menu', [$this, 'kmywssyewaouskak']);
        if (method_exists($this, 'yeyiguyegmmyusea')) {
            $this->qcsmikeggeemccuu('admin_init', [$this, 'yeyiguyegmmyusea']);
        }
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        $this->qcsmikeggeemccuu("edited_{$ymqmyyeuycgmigyo}", [$this, 'ygcakquiguusssso'], 99)->qcsmikeggeemccuu("created_{$ymqmyyeuycgmigyo}", [$this, 'ygcakquiguusssso'], 99)->qcsmikeggeemccuu("{$ymqmyyeuycgmigyo}_add_form_fields", [$this, 'owoguowweeccuyuw'])->qcsmikeggeemccuu("{$ymqmyyeuycgmigyo}_edit_form_fields", [$this, 'iuewqoqwmasugoiu'], 10, 2);
    }
    public function init()
    {
        $this->register();
    }
    public function register()
    {
        $yyksucsgisomecgg = $this->oyeskqayoscwciem();
        $ywmkwiwkosakssii = $yyksucsgisomecgg->sacmkccceuywoqsq();
        $ymqmyyeuycgmigyo = $yyksucsgisomecgg->aakmagwggmkoiiyu();
        if ($ywmkwiwkosakssii && $ymqmyyeuycgmigyo) {
            $mqyaskyaekmkegmg = $yyksucsgisomecgg->aaamyckgicycisqq();
            $aaokuekaimigoyue = $yyksucsgisomecgg->kuggecgwaickowwu('slug');
            $sogksuscggsicmac = DecoratorTaxonomy::register(substr($ymqmyyeuycgmigyo, 0, 32), $mqyaskyaekmkegmg, array_filter($ywmkwiwkosakssii));
            if (!is_wp_error($sogksuscggsicmac)) {
                $acqqmqmcquukaqsc = [];
                if (is_array($mqyaskyaekmkegmg)) {
                    foreach ($mqyaskyaekmkegmg as $useksmwkuswkwcqg) {
                        $acqqmqmcquukaqsc[] = $this->uueaoikucyigousq($ymqmyyeuycgmigyo, $aaokuekaimigoyue, $useksmwkuswkwcqg);
                        $acqqmqmcquukaqsc[] = $this->uueaoikucyigousq($ymqmyyeuycgmigyo, $aaokuekaimigoyue, $useksmwkuswkwcqg, true);
                        aomysykcgikegiau:
                    }
                    ikqqskkqqwmwssoo:
                } else {
                    $acqqmqmcquukaqsc[] = $this->uueaoikucyigousq($ymqmyyeuycgmigyo, $aaokuekaimigoyue, $mqyaskyaekmkegmg);
                    $acqqmqmcquukaqsc[] = $this->uueaoikucyigousq($ymqmyyeuycgmigyo, $aaokuekaimigoyue, $mqyaskyaekmkegmg, true);
                }
                ManipulateRewrite::kcaoacekwkiqmaee($acqqmqmcquukaqsc);
            }
        }
    }
    public function kmywssyewaouskak()
    {
        $yyksucsgisomecgg = $this->oyeskqayoscwciem();
        $cyiwaggmwimigmcc = $yyksucsgisomecgg->egockcwgmeocqeqc();
        if (is_string($cyiwaggmwimigmcc)) {
            add_submenu_page($cyiwaggmwimigmcc, $yyksucsgisomecgg->qeeuwmmksmqiuywg(), $yyksucsgisomecgg->qeeuwmmksmqiuywg(), 'edit_posts', "edit-tags.php?taxonomy={$yyksucsgisomecgg->aakmagwggmkoiiyu()}", false);
        }
    }
    
    public function migkyseymeomymmy() : bool
    {
        return DecoratorQuery::qmssqeyayicowkgy($this->miwqiiqeegeqcwis());
    }
    public function mgoeqkosywwaoqyw()
    {
    }
    
    public function ygcakquiguusssso($iwewcwusemqaiggk)
    {
        $icwicymcioeyeyek = ManipulateServer::ayueggmoqeeukqmq();
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy($this->miwqiiqeegeqcwis());
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            if ($aiowsaccomcoikus instanceof File) {
                $uusmaiomayssaecw = "{$aiowsaccomcoikus->mwikyscisascoeea()}_id";
                $this->wqeaqyusommocmsi($iwewcwusemqaiggk, $uusmaiomayssaecw, ManipulateArray::get($icwicymcioeyeyek, $uusmaiomayssaecw));
            }
            $uusmaiomayssaecw = $aiowsaccomcoikus->mwikyscisascoeea();
            $this->wqeaqyusommocmsi($iwewcwusemqaiggk, $uusmaiomayssaecw, ManipulateArray::get($icwicymcioeyeyek, $uusmaiomayssaecw));
            awoaooyoeoyeeqee:
        }
        cwwmimggaaecmucw:
    }
    
    public function miwqiiqeegeqcwis() : ?string
    {
        return $this->oyeskqayoscwciem()->aakmagwggmkoiiyu();
    }
    
    public function mkksewyosgeumwsa(?Field $aiowsaccomcoikus) : self
    {
        if ($aiowsaccomcoikus instanceof Field) {
            $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        }
        return $this;
    }
    
    public function owoguowweeccuyuw($kesssewsiegssiya)
    {
        $this->qcwkymmgakaeyqaq($kesssewsiegssiya);
    }
    
    public function oyeskqayoscwciem() : RegisterTaxonomy
    {
        if (!$this->register) {
            $this->register = new RegisterTaxonomy();
        }
        return $this->register;
    }
    
    public function wqeaqyusommocmsi($iwewcwusemqaiggk, $aiowsaccomcoikus, $eqgoocgaqwqcimie)
    {
        if ($aiowsaccomcoikus) {
            ManipulateTerm::ksmqawcowkmegigw($iwewcwusemqaiggk, $aiowsaccomcoikus, $eqgoocgaqwqcimie);
        }
    }
    
    public function iuewqoqwmasugoiu($iwewcwusemqaiggk, $kesssewsiegssiya)
    {
        $this->qcwkymmgakaeyqaq($kesssewsiegssiya, $iwewcwusemqaiggk);
    }
    
    public function ugmceccgwaaaigiy($kesssewsiegssiya, $iwewcwusemqaiggk = null) : ?array
    {
        return $this->sscegwueamckwmcy("taxonomy_{$kesssewsiegssiya}_custom_fields", $this->fields, $kesssewsiegssiya, $iwewcwusemqaiggk);
    }
    
    public function qcwkymmgakaeyqaq($kesssewsiegssiya, $iwewcwusemqaiggk = null)
    {
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy($kesssewsiegssiya, $iwewcwusemqaiggk);
        if (is_array($ikgwqyuyckaewsow) && $ikgwqyuyckaewsow) {
            foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
                ManipulateTerm::qkauysqeioauswys($aiowsaccomcoikus, !empty($iwewcwusemqaiggk));
                ykomgumacooyomsk:
            }
            ogqmesokykywseys:
        }
    }
    
    public function uueaoikucyigousq($ymqmyyeuycgmigyo, $aaokuekaimigoyue, $useksmwkuswkwcqg, $kiyaqqoyagguscog = false) : array
    {
        $ekuqiqmikiicgoss = [];
        if ($ymqmyyeuycgmigyo && $aaokuekaimigoyue && $useksmwkuswkwcqg) {
            $ucccueqywigcukcc = "{$aaokuekaimigoyue}/([^/]+)/{$useksmwkuswkwcqg}/";
            $gqgemcmoicmgaqie = "index.php?post_type={$useksmwkuswkwcqg}&{$ymqmyyeuycgmigyo}=\$matches[1]";
            if ($kiyaqqoyagguscog) {
                ManipulateRewrite::wqcwsicmeukcoqei($ucccueqywigcukcc, $gqgemcmoicmgaqie, 2);
            }
            $ucccueqywigcukcc .= '?$';
            $ekuqiqmikiicgoss = [$ucccueqywigcukcc, $gqgemcmoicmgaqie, 'top'];
        }
        return $ekuqiqmikiicgoss;
    }
}
