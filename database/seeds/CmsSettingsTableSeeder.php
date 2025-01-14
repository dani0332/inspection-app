<?php

use Illuminate\Database\Seeder;

class CmsSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_settings')->delete();
        
        \DB::table('cms_settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'login_background_color',
                'content' => 'transparent',
                'content_input_type' => 'text',
                'dataenum' => NULL,
                'helper' => 'Input hexacode',
                'created_at' => '2018-10-03 16:40:04',
                'updated_at' => NULL,
                'group_setting' => 'Login Register Style',
                'label' => 'Login Background Color',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'login_font_color',
                'content' => 'ffffff',
                'content_input_type' => 'text',
                'dataenum' => NULL,
                'helper' => 'Input hexacode',
                'created_at' => '2018-10-03 16:40:04',
                'updated_at' => NULL,
                'group_setting' => 'Login Register Style',
                'label' => 'Login Font Color',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'login_background_image',
                'content' => 'uploads/2018-10/5745230637b8b806bfd96b5142fb43c7.jpg',
                'content_input_type' => 'upload_image',
                'dataenum' => NULL,
                'helper' => NULL,
                'created_at' => '2018-10-03 16:40:04',
                'updated_at' => NULL,
                'group_setting' => 'Login Register Style',
                'label' => 'Login Background Image',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'email_sender',
                'content' => 'support@crudbooster.com',
                'content_input_type' => 'text',
                'dataenum' => NULL,
                'helper' => NULL,
                'created_at' => '2018-10-03 16:40:04',
                'updated_at' => NULL,
                'group_setting' => 'Email Setting',
                'label' => 'Email Sender',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'smtp_driver',
                'content' => 'mail',
                'content_input_type' => 'select',
                'dataenum' => 'smtp,mail,sendmail',
                'helper' => NULL,
                'created_at' => '2018-10-03 16:40:04',
                'updated_at' => NULL,
                'group_setting' => 'Email Setting',
                'label' => 'Mail Driver',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'smtp_host',
                'content' => '',
                'content_input_type' => 'text',
                'dataenum' => NULL,
                'helper' => NULL,
                'created_at' => '2018-10-03 16:40:04',
                'updated_at' => NULL,
                'group_setting' => 'Email Setting',
                'label' => 'SMTP Host',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'smtp_port',
                'content' => '25',
                'content_input_type' => 'text',
                'dataenum' => NULL,
                'helper' => 'default 25',
                'created_at' => '2018-10-03 16:40:04',
                'updated_at' => NULL,
                'group_setting' => 'Email Setting',
                'label' => 'SMTP Port',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'smtp_username',
                'content' => '',
                'content_input_type' => 'text',
                'dataenum' => NULL,
                'helper' => NULL,
                'created_at' => '2018-10-03 16:40:04',
                'updated_at' => NULL,
                'group_setting' => 'Email Setting',
                'label' => 'SMTP Username',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'smtp_password',
                'content' => '',
                'content_input_type' => 'text',
                'dataenum' => NULL,
                'helper' => NULL,
                'created_at' => '2018-10-03 16:40:04',
                'updated_at' => NULL,
                'group_setting' => 'Email Setting',
                'label' => 'SMTP Password',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'appname',
                'content' => 'Field Scope',
                'content_input_type' => 'text',
                'dataenum' => NULL,
                'helper' => NULL,
                'created_at' => '2018-10-03 16:40:04',
                'updated_at' => NULL,
                'group_setting' => 'Application Setting',
                'label' => 'Application Name',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'default_paper_size',
                'content' => 'A4',
                'content_input_type' => 'text',
                'dataenum' => NULL,
                'helper' => 'Paper size, ex : A4, Legal, etc',
                'created_at' => '2018-10-03 16:40:04',
                'updated_at' => NULL,
                'group_setting' => 'Application Setting',
                'label' => 'Default Paper Print Size',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'logo',
                'content' => 'uploads/2019-03/2951b66d49583f7ae0d79cbea00837ca.png',
                'content_input_type' => 'upload_image',
                'dataenum' => NULL,
                'helper' => NULL,
                'created_at' => '2018-10-03 16:40:04',
                'updated_at' => NULL,
                'group_setting' => 'Application Setting',
                'label' => 'Logo',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'favicon',
                'content' => 'uploads/2019-03/7627747ff036abe71d91804e2fb55bca.png',
                'content_input_type' => 'upload_image',
                'dataenum' => NULL,
                'helper' => NULL,
                'created_at' => '2018-10-03 16:40:04',
                'updated_at' => NULL,
                'group_setting' => 'Application Setting',
                'label' => 'Favicon',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'api_debug_mode',
                'content' => 'true',
                'content_input_type' => 'select',
                'dataenum' => 'true,false',
                'helper' => NULL,
                'created_at' => '2018-10-03 16:40:04',
                'updated_at' => NULL,
                'group_setting' => 'Application Setting',
                'label' => 'API Debug Mode',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'google_api_key',
                'content' => NULL,
                'content_input_type' => 'text',
                'dataenum' => NULL,
                'helper' => NULL,
                'created_at' => '2018-10-03 16:40:04',
                'updated_at' => NULL,
                'group_setting' => 'Application Setting',
                'label' => 'Google API Key',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'google_fcm_key',
                'content' => NULL,
                'content_input_type' => 'text',
                'dataenum' => NULL,
                'helper' => NULL,
                'created_at' => '2018-10-03 16:40:04',
                'updated_at' => NULL,
                'group_setting' => 'Application Setting',
                'label' => 'Google FCM Key',
            ),
        ));
        
        
    }
}