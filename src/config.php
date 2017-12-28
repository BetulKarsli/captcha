$config['encryption_key'] = '2d8+e6]K0?ocWp7&`K)>6Ky"|.x|%nuwafC~S/+6_mZI9/17y=sKKG.;Tt}k';

/*
  |--------------------------------------------------------------------------
  | Captcha
  |
  | 'captcha_form' = Whether captcha will be used in a form or not
  | 'captcha_path' = Directory where the catpcha will be created.
  | 'captcha_fonts_path' = Font in this directory will be used when creating captcha.
  | 'captcha_font_size' = Font size when writing text to captcha. Leave blank for random font size.
  | 'captcha_grid' = Show grid in created captcha.
  | 'captcha_expire' = Life time of created captcha before expired, default is 3 minutes (180 seconds).
  | 'captcha_case_sensitive' = Captcha case sensitive or not.
  |--------------------------------------------------------------------------
 */
$config['captcha_form'] = TRUE;
$config['captcha_path'] = 'captcha/';
$config['captcha_fonts_path'] = 'captcha/fonts/1.ttf';
$config['captcha_width'] = 200;
$config['captcha_height'] = 50;
$config['captcha_font_size'] = 14;
$config['captcha_grid'] = FALSE;
$config['captcha_expire'] = 180;
$config['captcha_case_sensitive'] = TRUE;