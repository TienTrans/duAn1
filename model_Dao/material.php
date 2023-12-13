function cl_select_all(){
$sql = "SELECT * FROM thuonghieu";
return pdo_query($sql);
}