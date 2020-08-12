<?php
 try{
 require_once ("DBConfigration.php");

class Paginator  extends DBConfigration
{
    private $_conn;
    private $_limit; 
    private $_page; 
    private $_query;
    private $_total;
    private $_row_start;


    public function __construct($query)
	{
        parent::__construct(); 
 $this->_conn=$this->connection;
        $this->_query = $query; 
         $rs = $this->connection->query( $this->_query );
        $this->_total = $rs->num_rows; 
     
	}

  public function getData($page = 1 ) { 
     
        $this->_limit = 10;
        $this->_page = $page;

        if ( $this->_limit == 'all' ) {
            $query = $this->_query;
        } 
        
        else {
            $this->_row_start = ( ( $this->_page - 1 ) * $this->_limit );
            $query = $this->_query .
                    " LIMIT {$this->_row_start}, $this->_limit";
        }
    $i=0;
        $rs = $this->_conn->query( $query ) or die($this->_conn->error);

        while ( $row = $rs->fetch_assoc() ) {
            $results[]  = $row; 
        $i++;
    }
        
        $result         = new stdClass();
        $result->page   = $this->_page;
        $result->limit  = $this->_limit;
        $result->total  = $this->_total;
      if($i==0) {
        echo "<h4>No records</h4>";  
        return null;} 
        $result->data   = $results; 
        return $result; 
    }
    
    public function createLinks($list_class ) 
    {
       
        $links=2;
        if ( $this->_limit == 'all' ) {
            return '';
        }

        $last = ceil( $this->_total / $this->_limit );
       
        if($last>1){

        $start = ( ( $this->_page - $links ) > 0 ) ? $this->_page - $links : 1;
        $end = ( ( $this->_page + $links ) < $last ) ? $this->_page + $links : $last;
        $html = '<ul class="' . $list_class . '">';

        $class = ( $this->_page == 1 ) ? "disabled" : "";
        $previous_page = ( $this->_page == 1 ) ? 
        '<a href=""><li class="' . $class . '">&laquo;</a></li>' : 
        '<li  class="' . $class . '"><a   href="?page=' . ( $this->_page - 1 ) . '">&laquo;</a></li>';

        $html .= $previous_page;

        
        if ( $start > 1 ) { 
            $html .= '<li><a href="?page=1">1</a></li>'; 
            $html .= '<li class="disabled"><span>...</span></li>';
        }
        for ( $i = $start ; $i <= $end; $i++ ) {
            $class = ( $this->_page == $i ) ? "active" : ""; 
            $html .= '<li class="' . $class . '"><a href="?page=' . $i . '">' . $i . '</a></li>';
        }

        if ( $end < $last ) { 
            $html .= '<li class="disabled"><span>...</span></li>'; 
            $html .= '<li><a href="?page=' . $last . '">' . $last . '</a></li>'; 
        }

        $class = ( $this->_page == $last ) ? "disabled" : ""; 
        $next_page = ( $this->_page == $last) ? 
        '<li class="' . $class . '"><a href="">&raquo;</a></li>' : 
        '<li class="' . $class . '"><a href="?limit=' . $this->_limit . '&page=' . ( $this->_page + 1 ) . '">&raquo;</a></li>';

        $html .= $next_page;
        $html .= '</ul>';
        
        return $html;
    }}
}

}catch(Exception $e){
    echo "SOMETHING GOES WRONG.";
}
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">