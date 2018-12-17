<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->blade->sebarno('ctrl', $this);
		$this->load->model('m_profil');
		$this->load->model('m_config');
		$this->load->model('m_header');
		$this->load->model('m_artikel');
		$this->load->model('m_kategori');
		$this->load->model('m_album');
		$this->load->model('m_gambar');
		$this->load->model('m_potensi');
		$this->load->model('m_produk');
		$this->load->model('m_pejabat');
		$this->load->model('m_slider');
		$this->load->model('m_pesan');
		$this->load->model('m_member');
		$this->load->model('m_login');
		$this->load->model('m_novel');
		$this->load->model('m_komen');
		$this->load->model('m_chapter');

		$this->data['config'] = $this->m_config->ambil('config',1)->row();
		$this->data['profil'] = $this->m_profil->ambil('profil',1)->row();
		$this->data['header'] = $this->m_header->ambil('header',1)->row();
        $this->data['kategoris'] 			= $this->m_kategori->tampil_data('kategori')->result();
	}

	public function index()
	{
		$data                = $this->data;
		// $data['artikelBaru'] = $this->m_artikel->tampil_dataBaru('artikel')->result();
		// $data['artikelPop']  = $this->m_artikel->tampil_dataPop('artikel')->result();
		// $data['produk']      = $this->m_produk->tampil_dataBaru('produk')->result();
		// $data['potensi']     = $this->m_produk->tampil_dataBaru('potensi')->result();
		// $data['gambar']      = $this->m_gambar->tampil_dataBaru('gambar_album')->result();
		// $data['album']       = $this->m_album->tampil_data('album')->result();
		 $data['slider']      = $this->m_slider->tampil_data('slider')->result();
		$data['novel']       = $this->m_novel->tampil_dataBaru('novel')->result();
        $data['novelBaru'] = $this->m_novel->tampil_dataBaru('novel')->result();
		$data['menu']        = "home";
		echo $this->blade->nggambar('main.home',$data);
	}

	function novel($page=0,$id=null)
	{
		$data                 = $this->data;
        $data['novelBaru'] = $this->m_novel->tampil_dataBaru('novel')->result();
		// $data['novel']        = $this->m_novel->tampil_dataBaru('novel')->result();
		$data['menu']         = "novel";
        $per_page   = 2;
        $offset = 0;
        if($page){
            $offset = $page*$per_page;
        }else{
            $offset = $per_page;
        }
        $data['novel']				=  $this->m_novel->data($offset,$page)->result();
        $alldata				=  $this->m_novel->tampil_data('novel')->result();

        $jumlah_data = count($alldata);


        $paginate					= new Cak_Pagination();
        $data['pagination'] 		= $paginate->paginate(base_url('main/novel/'),$page,$per_page,$jumlah_data,$page);




        echo $this->blade->nggambar('main.novel',$data);
	}

	function regis()
	{
		$data = $this->data;
		$data['menu'] = "regis";
		echo $this->blade->nggambar('main.regis',$data);
	}

	function cek_email()
	{
		$email = $this->input->post('email');
		$where = array('email' => $email);
		$cek = $this->m_member->detail($where,'member')->num_rows();
		if ($cek != 0) {
			echo"is registered, please change your email...!";
		}
	}

	function cek_password()
	{
		$id       = $this->input->post('id');
		$password = $this->input->post('old_pass');
		$where = array('id_member' => $id);
		$cek = $this->m_member->detail($where,'member')->row();
		if ($cek->password != md5($password)) {
			echo"is wrong, please input your right old password...!";
		}
	}

	function addmember()
	{
		$email = $this->input->post('email');
		$name  = $this->input->post('name');
		$pass  = $this->input->post('pass');

		mkdir('./assets/images/member/'.$email, 0777, TRUE);

		$photo = time().$_FILES['photo']['name'];
		$photo = str_replace(' ', '_', $photo);

		if (!empty($_FILES['photo']['name'])) {
			$this->upload('./assets/images/member/'.$email,'photo',$photo);
		}

		$data = array(
			'email'    => $email,
			'nama'     => $name,
			'password' => md5($pass),
			'photo'    => $photo
		);

		$this->m_member->input_data($data,'member');

		redirect('main/auth/registered','refresh');
	}

	function detail_member($id_member,$value)
	{
		$data = $this->data;
		$where = array('id_member' => $id_member);
		$data['member'] = $this->m_member->detail($where,'member')->row();
		if ($value=='password') {
			$data['menu'] = "edit_password";
		}else{
			$data['menu'] = "edit_profil";
		}
		echo $this->blade->nggambar('main.edit_profil',$data);
	}


	function update_member($id_member,$menu)
	{
		if ($menu=='password') {
			$pass = $this->input->post('pass');
			$data = array(
				'password' => md5($pass)
			);
		}else{
			$nama  = $this->input->post('name');
			$email = $this->input->post('email');

			$photo = time().$_FILES['photo']['name'];
			$photo = str_replace(' ', '_', $photo);
			if (!empty($_FILES['photo']['name'])) {
				$this->upload('./assets/images/member/'.$email,'photo',$photo);
			}
			$data = array(
				'nama' => $nama,
				'photo' => $photo
			);

		}
		$where = array('id_member' => $id_member);
		
		$this->m_member->update_data($where,$data,'member');
		echo"<script>alert('edit success');</script>";
		redirect('main','refresh');
	}

	function auth($status)
	{
		$data = $this->data;
		if ($status=='registered') {
			$data['menu'] = "registered";
			echo $this->blade->nggambar('main.login',$data);
		}else{
			$data['menu'] = "login";
			echo $this->blade->nggambar('main.login',$data);
		}
	}

	public function authentication(){

		$where 	= array(
			'email'    => $this->input->post('email'),
			'password' => md5($this->input->post('pass')),
		);

		$cek = $this->m_login->cek_login("member",$where)->row();

		if($cek!=null){
			$data_session = array(
				'id'        => $cek->id_member,
				'email'     => $cek->email,
				'nama'      => $cek->nama,
				'photo'     => $cek->photo,
				'main_auth' => TRUE
			);
			// echo"success, welcome";
			$this->session->set_userdata($data_session);
			$arrayResponse = array('code' => 'Success','body' => '<div class="col-md-12">
                <div class="coloralert" style="background-color: green;">
                  <i class="fa fa-check"></i>
                  <p>Login Success...!</p>
                </div>
              </div>', );
			echo json_encode($arrayResponse);
			return;
		}else{
			$arrayResponse = array('code' => 'Error','body' => '<div class="col-md-12">
                <div class="coloralert" style="background-color: #F6BD42;">
                  <i class="fa fa-close"></i>
                  <p>Login failed, please check your email & password again...!</p>
                </div>
              </div>', );
			echo json_encode($arrayResponse);
			return;
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('main/auth/login');
	}

	function detail_novel($id)
	{
		$data = $this->data;
		$where = array('id_novel' => $id);
		$data['n']     = $this->m_novel->detail($where,'novel')->row();
		$viewers = $data['n']->view;
		$data['chap']  = $this->m_chapter->detail($where,'chapter')->result();
		// var_dump($viewers);
		$view = array('view' => $viewers+1);
		$this->m_member->update_data($where,$view,'novel');
		$data['komen'] = $this->m_komen->tampil_data($where,'komentar')->result();
		$data['menu']  = "detail_novel";
		echo $this->blade->nggambar('main.detailnovel',$data);
	}

	function detail_chapter($id)
	{
		$data = $this->data;
		$where = array('id_novel' => $id);
		$data['n']     = $this->m_novel->detail($where,'novel')->row();
		$data['chap']  = $this->m_chapter->detail($where,'chapter')->row();
		echo $this->blade->nggambar('main.detailchapter',$data);
	}

	function addcomment()
	{
		$id_member = $this->input->post('id_member');
		$id_novel  = $this->input->post('id_novel');
		$komen     = $this->input->post('comment');
		
		$data = array(
			'id_member' => $id_member,
			'id_novel'  => $id_novel,
			'komentar'  => $komen
		);

		$this->m_komen->input_data($data,'komentar');

		redirect('main/detail_novel/'.$id_novel,'refresh');
	}

	function contact_us()
	{
		$data            = $this->data;
		$data['menu']    = "contact_us";
		echo $this->blade->nggambar('main.contact_us',$data);
	}

	function proses_contact_us()
	{
		$nama  = $this->input->post('nama');
		$email = $this->input->post('email');
		$pesan = $this->input->post('pesan');

		$data = array(
			'nama'  => $nama,
			'email' => $email,
			'pesan' => $pesan,
		);

		$this->m_pesan->input_data($data,'pesan');

		$arrayResponse = array('code' => 'Success','body' => '<div class="col-md-12">
            <div class="coloralert" style="background-color: green;">
            <i class="fa fa-check"></i>
            <p>Messages succesfully sent...!</p>
            </div>
            </div>', 
        );

		echo json_encode($arrayResponse);
		return;
	}

	public function profil()
	{
		$data            = $this->data;
		$data['menu']    = "profil";
		$data['pejabat'] = $this->m_pejabat->tampil_dataPri('pejabat')->result();
		echo $this->blade->nggambar('main.profil',$data);
	}

	public function gallery()
	{
		$data           = $this->data;
		$data['menu']   = "gallery";
		$data['gambar'] = $this->m_gambar->tampil_dataBaruAll('gambar_album')->result();
		$data['album']  = $this->m_album->tampil_data('album')->result();
		echo $this->blade->nggambar('main.gallery',$data);
	}

	public function contact()
	{
		$data         = $this->data;
		$data['menu'] = "contact";
		echo $this->blade->nggambar('main.contact',$data);
	}

	public function pesan()
	{
		if ($this->input->is_ajax_request()) {
			$nama           = $this->input->post('nama');
			$email          = $this->input->post('email');
			$pesan          = $this->input->post('pesan');

			$data = array(
				'nama'           => $nama,
				'email'          => $email,
				'pesan'          => $pesan,
			);

			if($this->m_pesan->input_data($data,'pesan')){
				echo goResult(true,"Pesan Telah Dikirim");
				return;
			}

		}else{
			echo goResult(false,"no reques available");
			return;
		}
	}

	public function artikel($id=null,$kategori=null)
	{
		$data                = $this->data;
		$data['menu']        = "artikel";
		$data['artikelBaru'] = $this->m_artikel->tampil_dataBaru('artikel')->result();
		$data['artikelPop']  = $this->m_artikel->tampil_dataPop('artikel')->result();
		$data['kategori']    = $this->m_kategori->tampil_data('kategori')->result();

		if ($id!=null && $id!='kategori' && !$this->input->post('cari', FALSE)) {
			$data['menu']    = "detail";
			$where           = array('id_artikel' => $id );
			$data['artikel'] = $this->m_artikel->detail($where,'artikel')->row();
			$view            = array('view' => $data['artikel']->view + 1);
			$this->m_artikel->update_data($where,$view,'artikel');
			echo $this->blade->nggambar('main.artikel.detail',$data);
		}else if ($id=='kategori'){
			$data['menu']    = "kategori";
			$where           = array('artikel.id_kategori' => $kategori );
			$data['artikelBaru'] = $this->m_artikel->detail($where,'artikel')->result();
			echo $this->blade->nggambar('main.artikel.index',$data);
		}else if ($id=='cari'){
			$data['menu']        = "cari";
			$where               = array('judul' => $this->input->post('cari'));
			$data['artikelBaru'] = $this->m_artikel->cari($where,'artikel')->result();
			echo $this->blade->nggambar('main.artikel.index',$data);
		}
		else{
			echo $this->blade->nggambar('main.artikel.index',$data);
		}
	}

	public function produk($id=null)
	{
		$data               = $this->data;
		$data['menu']       = "produk";
		$data['produkBaru'] = $this->m_produk->tampil_dataBaru('produk')->result();
		$data['produkPop']  = $this->m_produk->tampil_dataPop('produk')->result();
		$data['produkRand'] = $this->m_produk->tampil_dataRand('produk')->result();
		if ($id!=null && !$this->input->post('cari', FALSE)) {
			$data['menu']   = "detail";
			$where          = array('id_produk' => $id );
			$data['produk'] = $this->m_produk->detail($where,'produk')->row();
			$view           = array('view' => $data['produk']->view + 1);
			$this->m_produk->update_data($where,$view,'produk');

			echo $this->blade->nggambar('main.produk.detail',$data);
		}else if ($id=='cari'){
			$data['menu']        = "cari";
			$where               = array('judul' => $this->input->post('cari'));
			$data['produkBaru'] = $this->m_produk->cari($where,'produk')->result();
			echo $this->blade->nggambar('main.produk.index',$data);
		}
		else{
			echo $this->blade->nggambar('main.produk.index',$data);
		}
	}

	public function potensi($id=null)
	{
		$data               = $this->data;
		$data['menu']       = "potensi";
		$data['potensiBaru'] = $this->m_potensi->tampil_dataBaru('potensi')->result();
		$data['potensiPop']  = $this->m_potensi->tampil_dataPop('potensi')->result();
		if ($id!=null) {
			$data['menu']    = "detail";
			$where           = array('id_potensi' => $id );
			$data['potensi'] = $this->m_potensi->detail($where,'potensi')->row();
			$view            = array('view' => $data['potensi']->view + 1);
			$this->m_potensi->update_data($where,$view,'potensi');
			echo $this->blade->nggambar('main.potensi.detail',$data);
		}else {	
			echo $this->blade->nggambar('main.potensi.index',$data);
		}
	}

	public function email($type){
		$data 		= $this->data;

		switch ($type) {
			case 'register':
				$data             	 = $this->data;
				$where = array(
					'id_member' => '2039'
				);
				$data['member']		= $this->m_member->detail($where,'member')->row();
				echo $this->blade->nggambar('email.member.register',$data);	
				break;
			default:
				exit('opps');
				break;
		}
	}

	private function upload($dir,$name ='userfile',$filename=null){
		$config['upload_path']      = $dir;
        $config['allowed_types']    = 'gif|jpg|png|jpeg';
        $config['max_size']         = 8000;
        $config['encrypt_name'] 	= FALSE;
        $config['file_name'] 		= $filename;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload($name))
        {
        		$data['auth'] 	= false;
                $data['msg'] 	= $this->upload->display_errors();
                return $data;
        }
        else
        {
        		$data['auth']	= true;
        		$data['msg']	= $this->upload->data();
        		return $data;
        }
	}

	private function saveWord($filename,$title,$content){
//        require_once 'bootstrap.php';

        // Creating the new document...
        $phpWord = new \PhpOffice\PhpWord\PhpWord();

        /* Note: any element you append to a document must reside inside of a Section. */

        // Adding an empty Section to the document...
        $section = $phpWord->addSection();
        // Adding Text element to the Section having font styled by default...
        $section->addText($title);

        /*
         * Note: it's possible to customize font style of the Text element you add in three ways:
         * - inline;
         * - using named font style (new font style object will be implicitly created);
         * - using explicitly created font style object.
         */

        // Adding Text element with font customized inline...
        $section->addText(
            $content,
            array('name' => 'Tahoma', 'size' => 10)
        );

        // Adding Text element with font customized using named font style...
        $fontStyleName = 'oneUserDefinedStyle';
        $phpWord->addFontStyle(
            $fontStyleName,
            array('name' => 'Tahoma', 'size' => 10, 'color' => '1B2232', 'bold' => true)
        );


        // Saving the document as OOXML file...

        $filename = $filename.'.docx';
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        $objWriter->save($filename);

        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename='.$filename);
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filename));
        flush();
        readfile($filename);
        unlink($filename);
    }

}

/* End of file Main.php */
/* Location: ./application/controllers/Main.php */