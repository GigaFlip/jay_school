<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 2/1/19
 * Time: 7:36 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function insertCommon($tablename,$insert_array) {
        /*
        $this->db->insert($tablename,$insert_array);
        return $this->db->insert_id();
        */
        error_log("in insertCommon");
        error_log("insert array 7" . count($insert_array[7]));
        $bucket = CloudStorageTools::getDefaultGoogleStorageBucketName();
        $root_path = 'gs://' . $bucket . '/' . $_SERVER["REQUEST_ID_HASH"] . '/' . 'abc.blob';
        error_log($root_path);
        return file_put_contents($root_path, $insert_array);
    }

    public function updateCommon($tablename, $update_array, $where_array=null)
    {
        foreach ($update_array as $key=>$values) {
            $this->db->set($key,$values);
        }
        if ($where_array!=null) {
            foreach ($where_array as $key=>$value) {
                $this->db->where($key,$value);
            }
        }

        $this->db->update($tablename);
        return $this->db->affected_rows();
    }

    public function selectCommon($tablename,$columns,$where_array=null) {
        if ($columns!=null)
            $this->db->select($columns);
        if (is_array($where_array) && $where_array!=null) {
            foreach ($where_array as $key=>$value) {
                $this->db->where($key,$value);
            }
        }
        //$this->db->order_by('id', 'DESC');

        $query=$this->db->get($tablename);
        if ($query->num_rows()>0)
            return $query;

        return null;
    }

}
?>