<?php
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'transcript_db');


$query = "SELECT  * from tblstudent";
// $header = '';
$header = '';
$data ='';
$export = mysqli_query ($con, $query) or die ( "Sql error : " . mysqli_error( ) );
 


$fields = mysqli_num_fields ( $export );
 
for ( $i = 0; $i < $fields; $i++ )
{
    // $data = 
    // $header .= mysqli_fetch_field_direct( $export ,$i). "\t";
    // $result = mysqli_fetch_field_direct($export,$i);
    $result = mysqli_fetch_field($export);
    // echo json_encode($data).'<br>';
    // $header .= json_encode($result). "\t";
    $header .= $result->name. "\t";
    
}

// while($row = mysqli_fetch_field($export)){
//     echo $row->name .'<br>';
// }
// echo $header;
 
while( $row = mysqli_fetch_row( $export ) )
{
    $line = '';
    foreach( $row as $value )
    {                                            
        if ( ( !isset( $value ) ) || ( $value == "" ) )
        {
            $value = "\t";
        }
        else
        {
            $value = str_replace( '"' , '""' , $value );
            $value = '"' . $value . '"' . "\t";
        }
        $line .= $value;
        
    }
    $data .= trim( $line ) . "\n";
    // echo $data;
}
$data = str_replace( "\r" , "" , $data );
 
if ( $data == "" )
{
    $data = "\nNo Record(s) Found!\n";                        
}
 
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=export.xls");
header("Pragma: no-cache");
header("Expires: 0");
print "$header\n$data";
 
?>