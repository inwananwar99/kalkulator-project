<?php
class Kalkulator extends CI_Controller{
    public function index(){
        $data = [
            'title' => 'home',
            'judul' => 'Dashboard',
            'konten' => 'kalkulator/dashboard'
        ];
        $this->load->view('kalkulator/template',$data);
    }

    public function data_kalkulator(){
        $data = [
            'title' => 'data kalkulator',
            'judul' => 'Data Kalkulasi',
            'konten' => 'kalkulator/index',
            'data' => $this->ModelKalkulator->getData('kalkulators')
        ];
        $this->load->view('kalkulator/template',$data);
    }
    public function kalkulators(){
        $data = [
            'title' => 'kalkulator',
            'judul' => 'Kalkulator',
            'konten' => 'kalkulator/kalkulator'
        ];
        $this->load->view('kalkulator/template',$data);
    }
    public function addKalkulator(){
        $data = [
            'lama' => $this->input->post('lama'),'qty' => $this->input->post('qty'),
            'hasil' => $this->input->post('hasil'),'mph' => $this->input->post('mph'),
            'hosting' => $this->input->post('hosting'),'bahan' => $this->input->post('bahan'),
            'biayatt' => $this->input->post('biayatt'),'asset' => $this->input->post('asset'),
            'grade' => $this->input->post('grade')
        ];
        $this->ModelKalkulator->add('kalkulators',$data);
        return redirect('Kalkulator/data_kalkulator');
    }

    public function updateKalkulator($id){
        $data = [
            'lama' => $this->input->post('lama'),'qty' => $this->input->post('qty'),
            'hasil' => $this->input->post('hasil'),'mph' => $this->input->post('mph'),
            'hosting' => $this->input->post('hosting'),'bahan' => $this->input->post('bahan'),
            'biayatt' => $this->input->post('biayatt'),'asset' => $this->input->post('asset'),
            'grade' => $this->input->post('grade')
        ];
        $this->ModelKalkulator->update($id,$data,'kalkulators');
        return redirect('Kalkulator/data_kalkulator');
    }

    public function deleteKalkulator($id){
        $this->ModelKalkulator->delete($id,'kalkulators');
        return redirect('Kalkulator/data_kalkulator');
    }


}

?>