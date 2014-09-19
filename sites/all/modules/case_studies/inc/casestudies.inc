<?php
/*
* Case Studies Class
*/
class CaseStudies
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
    public function fnShowCaseStudiesListing()
    {
       
        
        //echo "SDSDSD";exit; 
        //Query for Getting list of all case studies //
        $strSelectQuery = db_select('node', 'n');
        $strSelectQuery->join('field_data_field_overview', 'o', 'n.nid = o.entity_id');
        $strSelectQuery->fields('n', array('title'))
            ->fields('o', array('field_overview_value'));
            


       //echo "SDSDSD".$strSelectQuery;die; 
            
        $strSelectQuery = $strSelectQuery->execute();
        $arrCaseStudiesList = $strSelectQuery->fetchAll();

        //Comment query for Tdd admin list
        /*$strSelectQuery = "SELECT u.uid AS uid, f.field_first_name_value AS field_first_name_value, l.field_last_name_value AS field_last_name_value FROM users u INNER JOIN field_data_field_first_name f ON u.uid = f.entity_id INNER JOIN field_data_field_last_name l ON u.uid = l.entity_id INNER JOIN field_data_field_is_delete d ON u.uid = d.entity_id INNER JOIN users_roles r ON r.uid = u.uid WHERE (u.uid <> 1) AND (d.field_is_delete_value = 0) AND (r.rid = 3) ORDER BY $strParamName $strOrderBy";

        $arrAdminInfo = db_query($strSelectQuery)->fetchAll();*/

        return $arrCaseStudiesList;

    }

}