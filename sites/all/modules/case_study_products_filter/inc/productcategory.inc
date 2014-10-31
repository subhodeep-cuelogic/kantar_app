<?php
/*
* Case Studies Class
*/
class ProductCategory
{

    #Initalize class variables
    public function __construct()
    {

    }

 
    /**
     * Function for fetching all product categories
     *
     * @return mixed
     */
    public function fnGetProductCatList()
    {
        $strSelectQuery = db_select('taxonomy_term_data', 't');
        $strSelectQuery->fields('t', array('tid','name'));
        $strSelectQuery->condition('vid', 3);
        $strSelectQuery->orderBy('name', 'ASC');
        $strSelectQuery = $strSelectQuery->execute();
        $arrTaxonomiesList = $strSelectQuery->fetchAll();
        return $arrTaxonomiesList;
    }

}