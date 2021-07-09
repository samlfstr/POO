<?php
// suppose that I know col names
// insert into <t_n> (optional col names) values (need to know number of the cols);

class Insert {
    private $table_name;
    private $ref_exp;
    private $ref_imp;
    private $query;



    /**
     * <strong> [-PROVIDE A TABLE NAME-] </strong>
     * @param $table_name
     */
    public function __construct($table_name)/**dependency injection*/
    {
        $this->table_name = $table_name;
        $this->query = "insert into ".$table_name;
    }

    /**
     * <strong> [-SPACE SEPARATED COL NAMES-] </strong>
     * @param $col_names
     */
    public function col_names ($col_names){
        $this->ref_exp = explode(' ', $col_names);
        $this->ref_imp = implode(',', $this->ref_exp);
        $this->query .= " (".$this->ref_imp.")";
        $this->ref_exp;
    }

    /**
     * <strong> [-SPACE SEPARATED VALUES-] </strong>
     * @param $vals
     */
    public function values($vals){
        $this->ref_exp = explode(' ', $vals);
        $this->ref_imp = implode(',', $this->ref_exp);
        $this->query .=" values (". $this->ref_imp . ")";
    }

    /**
     * @return string
     */
    public function getQuery(): string
    {
        return $this->query;
    }

}

$ins = new Insert("table_name");
$ins->col_names("id 1 2 3");
$ins->values("1 x y z");


echo $ins->getQuery();








