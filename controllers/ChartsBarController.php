<?php




class ChartsBarController
{

    public function actionDiagrammBar()
    {
        $table_name = $_GET['table'];

        $data = array();
        
        if ($table_name == 'orders')
        {
            $data = Order::getOrderCountByProduct();
        }
        if ($table_name == 'manufactures')
        {
            $data = Order::getOrderCountByManufactures();
        }
        require_once(ROOT . '/views/charts/diagrammBar.php');
        return true;
    }
}