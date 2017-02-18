<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php

class crud extends CI_Model {

    private $table_name;

    public function __construct() {
        parent::__construct();
        //$this->table_name = 'tb_about';
    }

    function get($tabel) {
        $sql = $this->db->get($tabel);
        if ($sql->num_rows() > 0) {
            foreach ($sql->result_array() as $row) {
                $data[] = $row;
            }
            return $data;
        } else {
            return null;
        }
    }

     function whereOne($tabel, $field, $id) {
        $this->db->select('*');
        $this->db->where($field, $id);
        $sql = $this->db->get($tabel)->row_array();
       return $sql;
        
    }

    function where($tabel, $field, $id) {
        $this->db->select('*');
        $this->db->where($field, $id);
        $sql = $this->db->get($tabel);
        if ($sql->num_rows() > 0) {
            foreach ($sql->result_array() as $row) {
                $data[] = $row;
            }
            return $data;
        } else {
            return null;
        }
    }

    function baca($tabel) {
        $sql = $this->db->get($tabel);
        if ($sql->num_rows() > 0) {
            foreach ($sql->result() as $row) {
                $data[] = $row;
            }
            return $data;
        } else {
            return null;
        }
    }

    function bacaSort($tabel, $kolom, $method) {
        $this->db->order_by($kolom, $method);
        $sql = $this->db->get($tabel);
        if ($sql->num_rows() > 0) {
            foreach ($sql->result() as $row) {
                $data[] = $row;
            }
            return $data;
        } else {
            return null;
        }
    }

    function bacaLimit($tabel, $limit, $start) {
        $this->db->limit($limit, $start);
        $sql = $this->db->get($tabel);
        if ($sql->num_rows() > 0) {
            foreach ($sql->result() as $row) {
                $data[] = $row;
            }
            return $data;
        } else {
            return null;
        }
    }

    function bacaLimitSort($tabel, $kolom, $method, $limit, $start) {
        $this->db->order_by($kolom, $method);
        $this->db->limit($limit, $start);
        $sql = $this->db->get($tabel);

        if ($sql->num_rows() > 0) {
            foreach ($sql->result() as $row) {
                $data[] = $row;
            }
            return $data;
        } else {
            return null;
        }
    }

    function bacaLimitSortP($tabel, $kolom, $limit, $start) {
        $this->db->order_by($kolom);
        $this->db->limit($limit, $start);
        $sql = $this->db->get($tabel);

        if ($sql->num_rows() > 0) {
            foreach ($sql->result() as $row) {
                $data[] = $row;
            }
            return $data;
        } else {
            return null;
        }
    }

    function bacaDr($tabel, $field, $id) {
        $this->db->select('*');
        $this->db->where($field, $id);
        $sql = $this->db->get($tabel);
        if ($sql->num_rows() > 0) {
            foreach ($sql->result() as $row) {
                $data[] = $row;
            }
            return $data;
        } else {
            return null;
        }
    }

    function bacaDrSort($tabel, $field, $id, $kolom, $method) {
        $this->db->select('*');
        $this->db->where($field, $id);
        $this->db->order_by($kolom, $method);
        $sql = $this->db->get($tabel);
        if ($sql->num_rows() > 0) {
            foreach ($sql->result() as $row) {
                $data[] = $row;
            }
            return $data;
        } else {
            return null;
        }
    }

    function bacaDrLimit($tabel, $field, $id,$limit, $start) {
        $this->db->select('*');
        $this->db->limit($limit, $start);
        $this->db->where($field, $id);
        $sql = $this->db->get($tabel);
        if ($sql->num_rows() > 0) {
            foreach ($sql->result() as $row) {
                $data[] = $row;
            }
            return $data;
        } else {
            return null;
        }
    }

    function bacaLike($tabel, $field, $string) {
        $this->db->select('*');
        $this->db->like($field, $string);
        $sql = $this->db->get($tabel);
        if ($sql->num_rows() > 0) {
            foreach ($sql->result() as $row) {
                $data[] = $row;
            }
            return $data;
        } else {
            return null;
        }
    }

    function bacaLike2($tabel, $field, $string, $field = '', $where = '') {
        $this->db->select('*');

        if ($field && $where):
            $this->db->where($field, $where);
        endif;

        $this->db->like($field, $string);
        $sql = $this->db->get($tabel);
        if ($sql->num_rows() > 0) {
            foreach ($sql->result() as $row) {
                $data[] = $row;
            }
            return $data;
        } else {
            return null;
        }
    }

    function bacaRand($tabel, $field, $limit) {
        $this->db->order_by($field, 'RANDOM');
        $this->db->limit($limit);
        $sql = $this->db->get($tabel);
        if ($sql->num_rows() > 0) {
            foreach ($sql->result() as $row) {
                $data[] = $row;
            }
            return $data;
        } else {
            return null;
        }
    }

    function simpan($tabel, $data) {
        $this->db->insert($tabel, $data);
        return $data;
    }

    function update($tabel, $field, $kode, $p) {
        $this->db->where($field, $kode);
        $this->db->update($tabel, $p);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function delete($tabel, $field, $kode) {
        $this->db->where($field, $kode);
        $this->db->delete($tabel);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function jns_klm($jns_klm) {
        switch ($jns_klm){
            case 'L':
                $jns_klm = 'Laki-laki';
                break;
            
            case 'P':
                $jns_klm = 'Perempuan';
                break;
        }
        
        return $jns_klm;
    }

}
