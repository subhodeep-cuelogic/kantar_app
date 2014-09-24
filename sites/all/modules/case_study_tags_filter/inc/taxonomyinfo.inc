<?php
/*
* Case Studies Class
*/
class TaxonomyInfo
{

    #Initalize class variables
    public function __construct()
    {

    }

 
    /**
     * Function for showing all case studies
     *
     * @return mixed
     */
    public function fnShowTaxonomyListing()
    {
       
        $strSelectQuery = db_select('taxonomy_term_data', 't');
        $strSelectQuery->fields('t', array('tid','name'));
        $strSelectQuery->condition('vid', 2);
        $strSelectQuery->orderBy('name', 'ASC');
    
       //echo "SDSDSD".$strSelectQuery;die; 
            
        $strSelectQuery = $strSelectQuery->execute();
        $arrTaxonomiesList = $strSelectQuery->fetchAll();

        //Comment query for Tdd admin list
        /*$strSelectQuery = "SELECT u.uid AS uid, f.field_first_name_value AS field_first_name_value, l.field_last_name_value AS field_last_name_value FROM users u INNER JOIN field_data_field_first_name f ON u.uid = f.entity_id INNER JOIN field_data_field_last_name l ON u.uid = l.entity_id INNER JOIN field_data_field_is_delete d ON u.uid = d.entity_id INNER JOIN users_roles r ON r.uid = u.uid WHERE (u.uid <> 1) AND (d.field_is_delete_value = 0) AND (r.rid = 3) ORDER BY $strParamName $strOrderBy";

        $arrAdminInfo = db_query($strSelectQuery)->fetchAll();*/

        return $arrTaxonomiesList;

    }

}