<?php
/**
 * Created by PhpStorm.
 * User: Ikko
 * Date: 14/12/2018
 * Time: 20.36
 */

class Cak_Pagination {

    function __construct(){
        $this->ci = &get_instance();
        $this->ci->load->library('pagination');
    }

    function paginate($url, $uri_segment, $per_page, $number_row,$page=0){

        # iki nggolek onok pirang page
        # misal onok
        $total_rows = ceil($number_row/$per_page);

        $config = [
            'base_url' => $url,
            'total_rows' => $total_rows,
            'per_page' => 1,
            'uri_segment' => $uri_segment,
            'first_link' => 'Pertama <i class="fa fa-chevron-right"></i>',
            'last_link' => '<i class="fa fa-chevron-left"></i> Terakhir',
            'next_link' => 'Selanjutnya <i class="fa fa-chevron-right"></i>',
            'prev_link' => '<i class="fa fa-chevron-left"></i> Sebelumnya',
            // 'next_link' => '<span class="glyphicon glyphicon-chevron-right"></span>',
            // 'prev_link' => '<span class="glyphicon glyphicon-chevron-left"></span>',
            'cur_page'	=> $page,
            'cur_tag_open' => '<li><a href="#" class="active">',
            'cur_tag_close' => '</li>',
            'num_tag_open' => '<li>',
            'num_tag_close' => '</li>',
            'first_tag_open' => '<li>',
            'first_tag_close' => '</li>',
            'last_tag_open' => '<li>',
            'last_tag_close' => '</li>',

            'prev_tag_open' => '<li>',
            'prev_tag_close' => '</li>',

            'next_tag_open' => '<li>',
            'next_tag_close' => '</li>'
        ];

        $this->ci->pagination->initialize($config);
        return $this->ci->pagination->create_links();

    }
}