<?php
class Penawaran extends CI_Controller{
    public function index(){
        $data = [
            'title' => 'penawaran',
            'judul' => 'Penawaran',
            'konten' => 'penawaran/index',
            'data' => $this->ModelPenawaran->get('penawaran')
        ];
        $this->load->view('kalkulator/template',$data);
    }

    public function createPenawaran(){
        $data = [
            'title' => 'penawaran',
            'judul' => 'Penawaran',
            'konten' => 'penawaran/create',
        ];
        $this->load->view('kalkulator/template',$data);
    }

    public function addBorongan(){
        $config['upload_path']          = './assets/upload/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 5000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $this->load->library('upload', $config);
        if(!$this->upload->do_upload('ttd')){
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Silahkan upload terlebih dahulu tanda tangan Anda!</div>');
            return redirect('Penawaran');
        }else{
            $data = [
                'tgl' => $this->input->post('tgl'),
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'note' => $this->input->post('noteBorongan'),
                'pajak' => $this->input->post('pajak'),
                'total' => $this->input->post('total'),
                'terbilang' => $this->input->post('terbilang'),
                'ttd' => $this->upload->data('file_name'),
            ];
            $item = $this->input->post('item');
            $role = $this->input->post('role');
            $data2 = array();
        if(is_array($item)){
            foreach($item as $key => $val):
                $data2[]= array(
                    'id_penawaran' => $this->input->post('kode'),
                    'item' => $item[$key],
                    'role' => $role[$key]
                );
            endforeach;
        }
        
            $this->ModelPenawaran->add('penawaran',$data);
            $this->ModelPenawaran->add_batch('spesifikasi',$data2);
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Berhasil Tambah Data!</div>');
            return redirect('Penawaran');
        }
        
    }

    public function addSatuan(){
        $config['upload_path']          = './assets/upload/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 5000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $this->load->library('upload', $config);
        if(!$this->upload->do_upload('ttd')){
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Silahkan upload terlebih dahulu tanda tangan Anda!</div>');
            return redirect('Penawaran');
        }else{
            $data = [
                'tgl' => $this->input->post('tgl'),
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'note' => $this->input->post('noteSatuan'),
                'pajak' => $this->input->post('pajak'),
                'total' => $this->input->post('total'),
                'terbilang' => $this->input->post('terbilang'),
                'ttd' => $this->upload->data('file_name'),
            ];
                $item = $this->input->post('item');
                $role = $this->input->post('role');
                $qty = $this->input->post('qty');
                $harga = $this->input->post('harga');
            $data2 = array();
            if(is_array($item)){
                foreach($item as $key => $val):
                    $data2[]= array(
                        'id_penawaran' => $this->input->post('kode'),
                        'item' => $item[$key],
                        'role' => $role[$key],
                        'qty' => $qty[$key],
                        'harga' => $harga[$key]
                    );
                endforeach;
            }
            $this->ModelPenawaran->add('penawaran',$data);
            $this->ModelPenawaran->add_batch('spesifikasi',$data2);
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Berhasil Tambah Data!</div>');
            return redirect('Penawaran');
        }
    }

    public function updateBorongan($id){
        $config['upload_path']          = './assets/upload/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 5000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $this->load->library('upload', $config);
        if(!$this->upload->do_upload('ttd')){
            $data = [
                'tgl' => $this->input->post('tgl'),
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'item' => $this->input->post('itemEdit'),
                'role' => $this->input->post('roleEdit'),
                'note' => $this->input->post('note'),
                'qty' => $this->input->post('qty'),
                'harga' => $this->input->post('harga'),
                'pajak' => $this->input->post('pajak'),
                'total' => $this->input->post('total'),
                'terbilang' => $this->input->post('terbilang')
            ];
            $this->ModelPenawaran->update($id,'penawaran',$data);
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Berhasil Edit Data!</div>');
            return redirect('Penawaran');
        }else{
            $data = [
                'tgl' => $this->input->post('tgl'),
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'item' => $this->input->post('itemEdit'),
                'role' => $this->input->post('roleEdit'),
                'note' => $this->input->post('note'),
                'qty' => $this->input->post('qty'),
                'harga' => $this->input->post('harga'),
                'pajak' => $this->input->post('pajak'),
                'total' => $this->input->post('total'),
                'terbilang' => $this->input->post('terbilang'),
                'ttd' => $this->upload->data('file_name'),
            ];
            $this->ModelPenawaran->update($id,'penawaran',$data);
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Berhasil Edit Data!</div>');
            return redirect('Penawaran');
        }
    }

    public function updatePenawaran($id){
        $config['upload_path']          = './assets/upload/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 5000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $this->load->library('upload', $config);
        if(!$this->upload->do_upload('ttd')){
            $data = [
                'tgl' => $this->input->post('tgl'),
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'item' => $this->input->post('itemEdit'),
                'role' => $this->input->post('roleEdit'),
                'note' => $this->input->post('note'),
                'qty' => $this->input->post('qty'),
                'harga' => $this->input->post('harga'),
                'pajak' => $this->input->post('pajak'),
                'total' => $this->input->post('total'),
                'terbilang' => $this->input->post('terbilang')
            ];
            $this->ModelPenawaran->update($id,'penawaran',$data);
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Berhasil Edit Data!</div>');
            return redirect('Penawaran');
        }else{
            $data = [
                'tgl' => $this->input->post('tgl'),
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'item' => $this->input->post('itemEdit'),
                'role' => $this->input->post('roleEdit'),
                'note' => $this->input->post('note'),
                'qty' => $this->input->post('qty'),
                'harga' => $this->input->post('harga'),
                'pajak' => $this->input->post('pajak'),
                'total' => $this->input->post('total'),
                'terbilang' => $this->input->post('terbilang'),
                'ttd' => $this->upload->data('file_name'),
            ];
            $this->ModelPenawaran->update($id,'penawaran',$data);
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Berhasil Edit Data!</div>');
            return redirect('Penawaran');
        }
    }

    public function deletePenawaran($id){
        $this->ModelPenawaran->delete($id,'penawaran');
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Berhasil Edit Data!</div>');
        return redirect('Penawaran');
    }

    public function printPenawaran($id){
        $data = [
            'data' =>$this->ModelPenawaran->print($id)
        ];
        $this->load->view('penawaran/printOut',$data);
    }

}

?>