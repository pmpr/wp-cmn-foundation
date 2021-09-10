<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Media;

use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class Image extends Common
{
    const LARGE = 'large';
    const MEDIUM = 'medium';
    const THUMBNAIL = 'thumbnail';
    const ASPECT_RATION_URLS = 'aspect_ratio_urls';
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse('wp_image_editors', [$this, 'iieciymgawsgwegs'])->cecaguuoecmccuse('wordpress_settings_fields', [$this, 'socqoiaiiqgkquoi'])->cecaguuoecmccuse('wp_get_attachment_image_attributes', [$this, 'mqyacwaaocgcsyag'], 99, 2)->cecaguuoecmccuse('wp_get_attachment_image_attributes', [$this, 'uoqqmsmgwuqmoigs'], 999, 3);
    }
    
    public static function okmuegqmewwoieum($smqcaaeyaweakyoo)
    {
        array_unshift($smqcaaeyaweakyoo, Editor::class);
        return $smqcaaeyaweakyoo;
    }
    
    public function socqoiaiiqgkquoi($qeqooyuoiasweuck) : array
    {
        $aiwaackyimoamgmy = ['seo_settings_section' => ['group' => 'media', 'title' => __('SEO settings', PR__CMN__FOUNDATION), 'args' => ['type' => 'html', 'value' => ManipulateHTML::uuccukgasskgimsq('h2', ['class' => 'title'], __('Improve your seo by using these settings.', PR__CMN__FOUNDATION))]], self::ASPECT_RATION_URLS => ['group' => 'media', 'title' => __('Aspect ratio based URLs', PR__CMN__FOUNDATION), 'args' => ['type' => 'checkbox', 'desc' => sprintf('%s https://example.com/upload/1x1/image.jpg', __('Use aspect ratio based image URLs like', PR__CMN__FOUNDATION))]]];
        return array_merge($qeqooyuoiasweuck, $aiwaackyimoamgmy);
    }
    
    public function mqyacwaaocgcsyag($siquossayskcwkea, $aiooqyausygaasqm)
    {
        $siquossayskcwkea['data-id'] = ManipulatePost::mwikyscisascoeea($aiooqyausygaasqm);
        return $siquossayskcwkea;
    }
    
    public function uoqqmsmgwuqmoigs($siquossayskcwkea, $aiooqyausygaasqm, $oiegiwogmwmawkeo)
    {
        $wyicceigkekkkwgs = ManipulateAttachment::wgogyccwcysggaig();
        if (is_string($oiegiwogmwmawkeo)) {
            $oiegiwogmwmawkeo = ManipulateArray::get($wyicceigkekkkwgs, $oiegiwogmwmawkeo);
            if ($oiegiwogmwmawkeo) {
                $siquossayskcwkea['data-width'] = $oiegiwogmwmawkeo['width'];
                $siquossayskcwkea['data-height'] = $oiegiwogmwmawkeo['height'];
            }
        }
        return $siquossayskcwkea;
    }
}
