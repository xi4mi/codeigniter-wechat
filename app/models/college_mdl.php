<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class College_mdl extends PF_Model {
    const COLLEGE_MDL = 'colleges';

	public function gen_new_college($obj_college = null){
        $obj_new_college = new stdClass();
		$obj_new_college->id = NULL;
		$obj_new_college->name = '';
		$obj_new_college->num  = 0;
        $obj_new_college->create_time = isset($obj_college->create_time)? $obj_college->create_time: time();
        $obj_new_college->update_time = isset($obj_college->update_time)? $obj_college->update_time: time();

		return $obj_new_college;
    }

	public function get_college($college_id){
		$res = $this->gen_new_college();

		$this->db->from(self::COLLEGE_MDL);
		$this->db->where('id',$college_id);
		$query = $this->db->get();
		
		if($query && $query->num_rows() > 0){
			$res = $query->row_object();
        }
		return $res;
    }

	public function get_college_byname($name){
        $res = null;

		$this->db->from(self::COLLEGE_MDL);
		$this->db->where('name',$name);
		$query = $this->db->get();

		if($query && $query->num_rows() > 0){
			$res = $query->row_object();
        }
		return $res;
    }

    public function get_last() {
        $res = null;

        $this->db->from(self::COLLEGE_MDL);
        $this->db->order_by("id", 'desc');
		$query = $this->db->get();

		if($query && $query->num_rows() > 0){
			$res = $query->row_object();
        }
		return $res;
    }


    public function set_college($obj_college){
        $obj_college->update_time = time();

        $this->db->replace(self::COLLEGE_MDL, $obj_college);
		return $this->db->insert_id();
	}

    public function _search($search = array(), $page = 0, $size = 0){
        $res = array();
        $this->db->from(self::COLLEGE_MDL);
		$this->db->order_by('update_time');
        $this->_each($search);
        if($size > 0) $this->db->limit(($page+1)*$size, $page);

        $query = $this->db->get();
        if($query && $query->num_rows() > 0){
            $res = $query->result_object();
        }

        return $res;
     }
}
