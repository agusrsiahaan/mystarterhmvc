<?php
class Items extends MX_Controller 
{

function __construct() {
parent::__construct();
}

function manage()
{
    $data['view_module'] = "items";
    $data['view_file'] = "manage";
    $this->load->module('master_template');
    $this->master_template->template($data);
}

function get($order_by)
{
    $this->load->model('mdl_items');
    $query = $this->mdl_items->get($order_by);
    return $query;
}

function get_with_limit($limit, $offset, $order_by) 
{
    if ((!is_numeric($limit)) || (!is_numeric($offset))) {
        die('Non-numeric variable!');
    }

    $this->load->model('mdl_items');
    $query = $this->mdl_items->get_with_limit($limit, $offset, $order_by);
    return $query;
}

function get_where($id)
{
    if (!is_numeric($id)) {
        die('Non-numeric variable!');
    }

    $this->load->model('mdl_items');
    $query = $this->mdl_items->get_where($id);
    return $query;
}

function get_where_custom($col, $value) 
{
    $this->load->model('mdl_items');
    $query = $this->mdl_items->get_where_custom($col, $value);
    return $query;
}

function _insert($data)
{
    $this->load->model('mdl_items');
    $this->mdl_items->_insert($data);
}

function _update($id, $data)
{
    if (!is_numeric($id)) {
        die('Non-numeric variable!');
    }

    $this->load->model('mdl_items');
    $this->mdl_items->_update($id, $data);
}

function _delete($id)
{
    if (!is_numeric($id)) {
        die('Non-numeric variable!');
    }

    $this->load->model('mdl_items');
    $this->mdl_items->_delete($id);
}

function count_where($column, $value) 
{
    $this->load->model('mdl_items');
    $count = $this->mdl_items->count_where($column, $value);
    return $count;
}

function get_max() 
{
    $this->load->model('mdl_items');
    $max_id = $this->mdl_items->get_max();
    return $max_id;
}

function _custom_query($mysql_query) 
{
    $this->load->model('mdl_items');
    $query = $this->mdl_items->_custom_query($mysql_query);
    return $query;
}

}