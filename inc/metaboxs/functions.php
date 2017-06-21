<?php 
    
function lupanh_metabox_cmb2(array $ourmetabox){
    $prefix ="_cmb2_";
    $ourmetabox[]= array(
        'id'            =>  'first_metabox',
        'title'         =>  'Truong Tuy bien cho cac trang va post',
        'object_types'  =>  array('post','page'),
        'fields'        =>array(
            array(
               'name'       => 'Text:',
               'type'       => 'text',
               'id'         =>  $prefix.'text'
            ),
            array(
                'name'      =>  "Select",
                'type'      =>  'select',
                'id'        =>  $prefix.'select',
                'options'   =>  array(
                    'long'         => '0',             
                    'nguyen'         => '1',
                    'ca'         => '2',
                    'hung'         => '3',
                    'pham'        => '4',
                ),
                'default'       => '0',
                'show_option_none' => true
            ),
            array(
                'name'      =>  'lupanhnguyen',
                'id'        => $prefix.'trong',
                'type'      =>  'taxonomy_select',
                'taxonomy'  =>  'category'
            ),
            array(
                'name'      =>  'Checkbox',
                'type'      =>  'multicheck',
                'id'        =>  $prefix.'multicheck',
                'options'   =>array(
                    'dolar' =>  'Dolar',
                    'vnd'   =>  'VietNam',
                    'cent'  =>  'Cent',
                    'pound' =>  'Pound'
                ),
            ),
            array(
                'name'      => 'taxonomylupanh',
                'id'        =>  $prefix.'trongtuoi1',
                'type'      =>  'taxonomy_radio',
                'taxonomy'  =>  'category'
            ),
            array(
               'name'       => 'Text-Small ',
               'type'       => 'text_small',
               'id'         =>  $prefix.'text_small'
            ),
            array(
               'name'       => 'Text_Medium',
               'type'       => 'text_medium',
               'id'         => $prefix.'text_medium'
            ),
            array(
               'name'       => 'Text_Money',
               'type'       => 'text_money',
               'id'         => $prefix.'text_money',
               'before_field' => '&pound;'
            ),
            array(
               'name'       => 'Text_Email',
               'type'       => 'text_email',
               'id'         => $prefix.'text_email',
               
            ),
            array(
               'name'       => 'TEXTAREA',
               'type'       => 'textarea',
               'id'         => $prefix.'textarea',
               
            ),
            array(
               'name'       => 'TEXT DATE',
               'type'       => 'text_date',
               'id'         => $prefix.'text_date',
               
            ),
             array(
               'name'       => 'TEXT DATE',
               'type'       => 'select_timezone',
               'id'         => $prefix.'timezone',
               
            ),
             array(
               'name'       => 'TEXT DATE',
               'type'       => 'text_datetime_timestamp_timezone',
               'id'         => $prefix.'timezonestamp',
               
            ),
            array(
               'name'       => 'Radio',
               'type'       => 'radio',
               'id'         => $prefix.'radio',
               'options'    =>array(
                    'male'  => 'MALE',
                    'female'    =>"FEMALE"
                ),
                'default'   =>'male'
            ),
            
            array(
                'name'          =>  'write your content',
                'type'          => 'wysiwyg',
                'id'            =>  $prefix.'wysiwyg',
                'options'       =>array(
                    'textarea_rows' => get_option('default_post_edit_rows', 20)    
                )
            ),
        ) 
    );
    return $ourmetabox;
}
add_filter('cmb2_meta_boxes','lupanh_metabox_cmb2');