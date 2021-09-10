<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation;

use Pmpr\Common\Foundation\Container\Container;
use Pmpr\Common\Foundation\Decorator\DecoratorQuery;
use Pmpr\Common\Foundation\Manipulate\ManipulateRewrite;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Pmpr\Common\Foundation\Register\RegisterPost;
use WP_Post_Type;

class CPT extends Container
{
    
    protected ?int $id = 0;
    
    protected ?string $content = '';
    
    protected ?string $title = '';
    
    protected ?string $slug = '';
    
    protected ?RegisterPost $register = null;
    
    public function aqcogscycyycgkuq() : ?string
    {
        return $this->slug;
    }
    
    public function qcgakseyaikigqco() : ?string
    {
        return $this->title;
    }
    
    public function souwykwwmyygqyqi() : ?string
    {
        return $this->content;
    }
    
    public function oyeskqayoscwciem() : RegisterPost
    {
        if (!$this->register) {
            $this->register = new RegisterPost();
        }
        return $this->register;
    }
    
    public function __construct($aokagokqyuysuksm = null)
    {
        if (!$aokagokqyuysuksm) {
            $this->mgoeqkosywwaoqyw();
            if (!$this->miwqiiqeegeqcwis()) {
                $this->oyeskqayoscwciem()->usuqmwksoeaayaig(strtolower(ManipulateString::mkwcwqkqeqkqyggc($this)));
            }
            parent::__construct();
        } else {
            $post = ManipulatePost::get($aokagokqyuysuksm);
            if ($post) {
                $qmcuiciekkawmmms = ['post_content' => 'content', 'post_title' => 'title', 'post_name' => 'slug'];
                $gmawcgiwcmsukeiu = get_class_vars($this);
                foreach ($post as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
                    if (isset($gmawcgiwcmsukeiu[$uusmaiomayssaecw])) {
                        $this->ecioiwwikqqgwqee($uusmaiomayssaecw, $eqgoocgaqwqcimie);
                    } else {
                        if (isset($qmcuiciekkawmmms[$uusmaiomayssaecw])) {
                            $this->ecioiwwikqqgwqee($qmcuiciekkawmmms[$uusmaiomayssaecw], $eqgoocgaqwqcimie);
                        }
                    }
                    uookseqsmsqgweuy:
                }
                mseokuecmeoyoggk:
            }
        }
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu('init', [$this, 'init'])->qcsmikeggeemccuu('after_switch_theme', [$this, 'kmwauaacmgeqakqg']);
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse('post_updated_messages', [$this, 'pmiwkwkygaewicqs'])->cecaguuoecmccuse('subtitle_view_supported', [$this, 'owycmeseeikcaqwk']);
        if (method_exists($this, 'uqewcuuiggccuqia')) {
            $this->cecaguuoecmccuse("render_{$this->miwqiiqeegeqcwis()}_children", [$this, 'uqewcuuiggccuqia'], 10, 2);
        }
    }
    public function init()
    {
        if (!$this->oyeskqayoscwciem()->aoaiwceqgsckygsg()) {
            $this->oyeskqayoscwciem()->ckwgqocyuaysggma('slug', $this->miwqiiqeegeqcwis())->wakugsseussemkka(['title', 'editor', 'excerpt', 'thumbnail']);
        }
        $this->register();
        global $wp_rewrite;
        $acqqmqmcquukaqsc = $this->uqewmqqccgukyisu($wp_rewrite, $this->miwqiiqeegeqcwis());
        if ($acqqmqmcquukaqsc) {
            ManipulateRewrite::kcaoacekwkiqmaee($acqqmqmcquukaqsc);
        }
        if (method_exists($this, 'yeyiguyegmmyusea') && is_admin()) {
            $this->yeyiguyegmmyusea();
        }
    }
    public function register()
    {
        $ywmkwiwkosakssii = $this->oyeskqayoscwciem()->sacmkccceuywoqsq();
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        if ($ywmkwiwkosakssii && $ymqmyyeuycgmigyo) {
            register_post_type($ymqmyyeuycgmigyo, $ywmkwiwkosakssii);
        }
    }
    
    public function migkyseymeomymmy() : bool
    {
        return ManipulatePost::sqyyemqmmgmyiaam($this->miwqiiqeegeqcwis());
    }
    public function kmwauaacmgeqakqg()
    {
        $this->register();
        flush_rewrite_rules();
    }
    public function mgoeqkosywwaoqyw()
    {
    }
    
    public function cukiusasccucgwqc() : bool
    {
        return DecoratorQuery::cukiusasccucgwqc($this->miwqiiqeegeqcwis());
    }
    
    public function owycmeseeikcaqwk() : bool
    {
        return !(DecoratorQuery::migkyseymeomymmy() || DecoratorQuery::eyokaicigoeymwoo());
    }
    
    private function ecioiwwikqqgwqee(string $oaukocmsckciqaok, $eqgoocgaqwqcimie)
    {
        if (property_exists($this, $oaukocmsckciqaok)) {
            $this->{$oaukocmsckciqaok}($eqgoocgaqwqcimie);
        }
    }
    
    public function miwqiiqeegeqcwis() : ?string
    {
        return $this->oyeskqayoscwciem()->aakmagwggmkoiiyu();
    }
    
    public function uqewmqqccgukyisu($squgkkgwywimowua, $ymqmyyeuycgmigyo) : array
    {
        return [];
    }
    
    public function pmiwkwkygaewicqs($wumguikkgaigkoee) : array
    {
        $post = ManipulatePost::get();
        $mksyucucyswaukig = ManipulatePost::gueasuouwqysmomu($post, true);
        if ($mksyucucyswaukig instanceof WP_Post_Type && $mksyucucyswaukig->publicly_queryable && $this->miwqiiqeegeqcwis() === $mksyucucyswaukig->name) {
            $sisssumicskyceeg = $this->oyeskqayoscwciem()->giiayuqckuiecosm();
            $useksmwkuswkwcqg = $mksyucucyswaukig->name;
            $wumguikkgaigkoee[$useksmwkuswkwcqg] = [
                0 => '',
                
                1 => sprintf(__('%s updated.', PR__CMN__FOUNDATION), $sisssumicskyceeg),
                2 => __('Custom field updated.', PR__CMN__FOUNDATION),
                3 => __('Custom field deleted.', PR__CMN__FOUNDATION),
                4 => sprintf(__('%s updated.', PR__CMN__FOUNDATION), $sisssumicskyceeg),
                
                5 => isset($_GET['revision']) ? sprintf(__('%s restored to revision from %s', PR__CMN__FOUNDATION), $sisssumicskyceeg, wp_post_revision_title((int) $_GET['revision'], false)) : false,
                6 => sprintf(__('%s published.', PR__CMN__FOUNDATION), $sisssumicskyceeg),
                7 => sprintf(__('%s saved.', PR__CMN__FOUNDATION), $sisssumicskyceeg),
                8 => sprintf(__('%s submitted.', PR__CMN__FOUNDATION), $sisssumicskyceeg),
                9 => sprintf(__('%1$s scheduled for: <strong>%2$s</strong>.', PR__CMN__FOUNDATION), $sisssumicskyceeg, date_i18n(__('M j, Y @ G:i', PR__CMN__FOUNDATION), strtotime($post->post_date))),
                10 => sprintf(__('%s draft updated.', PR__CMN__FOUNDATION), $sisssumicskyceeg),
            ];
            $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($post);
            $view_link = sprintf(' <a href="%s">%s</a>', esc_url($migiiksoiymissge), sprintf(__('View %s', PR__CMN__FOUNDATION), $sisssumicskyceeg));
            $wumguikkgaigkoee[$useksmwkuswkwcqg][1] .= $view_link;
            $wumguikkgaigkoee[$useksmwkuswkwcqg][6] .= $view_link;
            $wumguikkgaigkoee[$useksmwkuswkwcqg][9] .= $view_link;
            $preview_permalink = DecoratorQuery::yqymaqmqiqmmmsoo('preview', 'true', $migiiksoiymissge);
            $preview_link = sprintf(' <a target="_blank" href="%s">%s</a>', esc_url($preview_permalink), sprintf(__('Preview %s', PR__CMN__FOUNDATION), $sisssumicskyceeg));
            $wumguikkgaigkoee[$useksmwkuswkwcqg][8] .= $preview_link;
            $wumguikkgaigkoee[$useksmwkuswkwcqg][10] .= $preview_link;
        }
        return $wumguikkgaigkoee;
    }
}
