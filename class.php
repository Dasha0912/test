<?

final class Item
{
        
    /**
     * id
     *
     * @var int
     */
    private $id;    
    /**
     * name
     *
     * @var string
     */
    private $name;    
    /**
     * status
     *
     * @var int
     */
    private $status;    
    /**
     * changed
     *
     * @var bool
     */
    private $changed;
    
    /**
     * __construct
     *
     * @param  int $id_obj
     * @return void
     */
    public function __construct($id_obj) 
    {
        $this->id = $id_obj;
    }
    
    /**
     * __get
     *
     * @param $property
     * @return mixed
     */
    public function __get($property)
	{
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value)
    {
        if(property_exists($this, $property) && !empty($value) && mb_strtolower($property) == 'name')
        {
            if (is_string($value)) {
                $this->$property = $value;
            }
        }

        if(property_exists($this, $property) && is_int($value) && mb_strtolower($property) == 'status')
        {
            if (is_string($value)) {
                $this->$property = $value;
            }
        }
    }

    private function init($name_db, $status_db) 
    {
        $this->name = $name_db;
        $this->status = $status_db;
    }
  
    public function save($name_val, $status_val) {
        if ($this->changed == false)
        {
            $this->name = $name_val;
            $this->status = $status_val;
            $this->changed = true;
        }
    }
}
