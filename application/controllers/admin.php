<?php
  class Admin extends CI_Controller{

    function __construct(){
      parent::__construct();
      $this->load->model('PortofolioModel');
      $this->load->model('PagesModel');
      $this->load->model('SliderModel');
      if($this->session->userdata('username')=="") {
          redirect('auth/login');
      }
        $this->load->helper('text');
    }

    function home(){
      $this->load->view('admin/index');
    }

    function pesanmasuk(){
      $data['showP'] = $this->PagesModel->showPesan();
      $this->load->view('admin/pesan_masuk',$data);
    }

    function portofolio(){
      $data['show'] = $this->PortofolioModel->showPorto();
      $this->load->view('admin/portofolio/portofolio',$data);
    }

    function tambahportofolio(){
      $data['showK'] = $this->PortofolioModel->showKat();
      $this->load->view('admin/portofolio/tambah_porto',$data);
    }

    function postportofolio(){
      date_default_timezone_set('Asia/Jakarta');
      $judul_porto = $this->input->post('judul_porto');
      $tagline = $this->input->post('tagline');
      $kategori = $this->input->post('kategori');
      $created_time = date('h:i A');
      $created_date = date('d/M/Y');

      if ($_FILES['gambar_porto']['type'] == "image/jpeg" || $_FILES['gambar_porto']['type'] == "image/png" || $_FILES['gambar_porto']['type'] == "image/gif")
      {
				$ori_src="./public/assets/upload/portofolio/".strtolower(str_replace(' ','_',$_FILES['gambar_porto']['name']));
				if(move_uploaded_file ($_FILES['gambar_porto']['tmp_name'],$ori_src))
				{
					chmod("$ori_src",0777);
				}else{
					echo "Gagal melakukan proses upload file...";
					exit;
				}
				$this->PortofolioModel->getQuery("INSERT INTO elok_porto (judul_porto,tagline,kategori,gambar_porto,created_time,created_date) VALUES ('".$judul_porto."','".$tagline."','".$kategori."','".$_FILES['gambar_porto']['name']."','".$created_time."','".$created_date."')");
				echo "<meta http-equiv='refresh' content='0; url=".base_url()."admin/portofolio?message=success'>";
			}
				else{
					$this->PortofolioModel->getQuery("INSERT INTO elok_porto (judul_porto,tagline,kategori,created_time,created_date) VALUES ('".$judul_porto."','".$tagline."','".$kategori."','".$created_time."','".$created_date."')");
					redirect('admin/portofolio?message=failed');
				}
    }

    function editporto(){
      $data['showK'] = $this->PortofolioModel->showKat();
      $id = $this->uri->segment(3);
      $data['getEditData'] = $this->PortofolioModel->getDataEdit($id)->row_array();
      $this->load->view('admin/portofolio/edit_porto',$data);
    }

    function updateporto(){
      $porto_id = $this->input->post('id');
      $judul_porto = $this->input->post('judul_porto');
      $tagline = $this->input->post('tagline');
      $kategori = $this->input->post('kategori');
      $gbr = $this->input->post('gbr');

      if($_FILES['gambar_porto']['type'] == "image/jpeg" || $_FILES['gambar_porto']['type'] == "image/png" || $_FILES['gambar_porto']['type'] == "image/gif"){
				$ori_src="./public/assets/upload/portofolio/".strtolower(str_replace(' ','_',$_FILES['gambar_porto']['name']));
				if(move_uploaded_file ($_FILES['gambar_porto']['tmp_name'],$ori_src))
				{
					chmod("$ori_src",0777);
				}else{
					echo "Gagal melakukan proses upload file...";
					exit;
				}
				$this->PortofolioModel->getQuery("UPDATE elok_porto SET judul_porto='".$judul_porto."',tagline='".$tagline."',kategori='".$kategori."',gambar_porto='".$_FILES['gambar_porto']['name']."' WHERE porto_id='".$porto_id."'");
				$file_image = './public/assets/upload/portofolio/'.$gbr;
				unlink($file_image);
				echo "<meta http-equiv='refresh' content='0; url=".base_url()."admin/portofolio?message=success'>";
				}
				else{
					$this->PortofolioModel->getQuery("UPDATE elok_porto SET judul_porto='".$judul_porto."',tagline='".$tagline."',kategori='".$kategori."' WHERE porto_id='".$porto_id."'");
					redirect('admin/portofolio?message=failed'); 
				}
    }

    function hapusporto($id){
      $gambar_porto= $this->input->post('gambar_porto');
      $file_image = './public/assets/upload/portofolio/'.$gambar_porto;

      $this->db->where('porto_id',$id);
      $this->db->delete('elok_porto');

      unlink($file_image);
      redirect('admin/portofolio');
    }

    function slider(){
      $data['showS'] = $this->SliderModel->showSlider();
      $this->load->view('admin/slider/slider',$data);
    }

    function tambahslider(){
      $this->load->view('admin/slider/tambah_slider');
    }

    function postslider(){
      $judul_slider = $this->input->post('judul_slider');
      $active = $this->input->post('active');

      if ($_FILES['gambar_slider']['type'] == "image/jpeg" || $_FILES['gambar_slider']['type'] == "image/png" || $_FILES['gambar_slider']['type'] == "image/gif")
      {
				$ori_src="./public/assets/upload/slider/".strtolower(str_replace(' ','_',$_FILES['gambar_slider']['name']));
				if(move_uploaded_file ($_FILES['gambar_slider']['tmp_name'],$ori_src))
				{
					chmod("$ori_src",0777);
				}else{
					echo "Gagal melakukan proses upload file...";
					exit;
				}
				$this->SliderModel->getQuery("INSERT INTO elok_slider (judul_slider,gambar_slider,active) VALUES ('".$judul_slider."','".$_FILES['gambar_slider']['name']."','".$active."')");
				echo "<meta http-equiv='refresh' content='0; url=".base_url()."admin/slider?message=success'>";
			}
				else{
					$this->SliderModel->getQuery("INSERT INTO elok_slider (judul_slider,active) VALUES ('".$judul_slider."','".$active."')");
					redirect('admin/slider?message=failed');
				}
    }
  }
