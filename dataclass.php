<?php 
class dataclass
{
    private $conn="";

    function __construct()
    {
        $this->conn=mysqli_connect("localhost","root","","dbwedding");
    }

    public function gettable($query)
    {
        $tb=mysqli_query($this->conn,$query);
        return $tb;
    }
    
    public function getrecord($query)
    {
        $tb=mysqli_query($this->conn,$query);
        $rw=mysqli_fetch_array($tb);
        return $rw;
    }
    
    public function saverecord($query)//insert,update,delete records
    {
        $result=mysqli_query($this->conn,$query);
        return $result;
    }

    public function primarykey($query)//select max($regid) from register
    {
        $pno=0;
        $tb=mysqli_query($this->conn,$query);
        $rw=mysqli_fetch_array($tb);
        if($rw)
        {
            $pno=$rw[0];
            $pno++;
        }
        else
        {
            $pno=1;
        }

        return $pno;
    }

    public function unique($query)//select count(*) from register where username='$username'
    {
        $result="";
        $tb=mysqli_query($this->conn,$query);
        $rw=mysqli_fetch_array($tb);
        $count=$rw[0];
        if($count==1)
        {
            $result=true;
        }
        else
        {
            $result=false;
        }

        return $result;
    }
}
?>