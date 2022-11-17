<?php
class m_Auth extends CI_Model
{

    var $table = "user";

    function loginUser($username, $password)
    {
        $this->db->where('username', $username);
		$this->db->where('password', $password);
		$result = $this->db->get($this->table, 1);
		return $result;
    }
}
