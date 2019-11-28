<?php
class Listings extends Mx_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function fix()
    {
        $names[] ='Zolmitriptan';
        $names[] ='Zoylmitriptan';
        $names[] ='Zoelmitriptan';
        $names[] ='Zollmitriptan';

        foreach($names as $name)
        {
            echo $name.'<br>';
            echo metaphone($name).'<hr';
        }

       // metaphone(str);
        // $query = $this->get('id');
        //foreach( $query->result() as $row)
        //{

        //$company_name = $row->company_name;
        //$address = $row->address;
        //$city = $row->city;
        //$postcode = $row->postcode;
        //$telnum = $row->telnum;
        //}
    }

    function _count_listings($user_id, $type)
    {
        $mysql_query = "select * from listings where user_id=$user_id";

        if ($type=='pending')
        {
            $mysql_query.= ' and live=0';
        }
        elseif($type=='live')
        {
            $mysql_query.= ' and live=1';
        }

        $query = $this->custom_query($mysql_query);
        $num_rows = $query->num_rows();
        return $num_rows;
    }

    function _create_custom_search($category_id,$location)
    {
        $mysql_query ="select * from listings" ;
        //if(is_numeric($))
    }

}
?>

