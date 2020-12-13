<?php

class Model_barang extends CI_Model
{

   public function tampil()
   {

      $query = "SELECT * FROM `tb_barang` LIMIT 6
             ";
      return $this->db->query($query)->result_array();
   }

   public function search($keyword = null)
   {
      if ($keyword) {
         $this->db->like('nama_barang', $keyword);
      }
      return $this->db->get('tb_barang')->result_array();
   }

   public function tampil_admin()
   {
      return $this->db->get('tb_barang')->result_array();
   }

   public function insert($data, $table)
   {
      $this->db->insert($table, $data);
   }

   public function delete($id)
   {
      $this->db->delete('tb_barang', ['id_barang' => $id]);
   }

   public function tampilById($id)
   {
      return $this->db->get_where('tb_barang', ['id_barang' => $id])->row_array();
   }

   public function getById($id_barang)
   {
      return $this->db->get_where('tb_barang', ['id_barang' => $id_barang])->row_array();
   }

   public function find($id_barang)
   {

      $result = $this->db->where('id_barang', $id_barang)
         ->limit(1)
         ->get('tb_barang');

      if ($result->num_rows() > 0) {
         return $result->row();
      } else {
         return [];
      }
   }
}
