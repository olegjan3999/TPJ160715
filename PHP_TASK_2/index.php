<?php
/**
 * Created by PhpStorm.
 * User: it
 * Date: 04.08.16
 * Time: 15:02
 */
$table=array(
    1=>"<td width='200px' height='200px'>1</td>",
    "<td width='200px' height='200px'>2</td>",
    "<td width='200px' height='200px'>3</td>",
    "<td width='200px' height='200px'>4</td>",
    "<td width='200px' height='200px'>5</td>",
    "<td width='200px' height='200px'>6</td>",
    "<td width='200px' height='200px'>7</td>",
    "<td width='200px' height='200px'>8</td>",
    "<td width='200px' height='200px'>9</td>");
$arr=array(
    array( 'text' => 'Red text',
        'cells' => '1,2,4,5',
        'align' => 'center',
        'valign' => 'center',
        'color' => 'FF0000',
        'bgcolor' => '0000FF'),
    array( 'text' => 'Green text',
        'cells' => '8,9',
        'align' => 'right',
        'valign' => 'bottom',
        'color' => '00FF00',
        'bgcolor' => 'FFFFFF')
);

foreach($arr as $item)
{
    $text = $item['text'];
    $align = $item['align'];
    $valign = $item['valign'];
    $color = $item['color'];
    $bgcolor = $item['bgcolor'];

    $tt=explode(",", $item['cells']);

    if($tt[0]>0&&$tt[0]<4){$rov1=1; $col1=$tt[0];}
    if($tt[0]>3&&$tt[0]<7){$rov1=2; $col1=$tt[0]-3;};
    if($tt[0]>6&&$tt[0]<10){$rov1=3; $col1=$tt[0]-6;};

    for($i=1;$i<count($tt);$i++)
    {
        if($tt[$i]>0&&$tt[$i]<4){$rov2=1; $col2=$tt[$i];}
        if($tt[$i]>3&&$tt[$i]<7){$rov2=2; $col2=$tt[$i]-3;};
        if($tt[$i]>6&&$tt[$i]<10){$rov2=3; $col2=$tt[$i]-6;};

        $table[$tt[$i]]="";
    }
    $rov = $rov2-$rov1+1;
    $col = $col2-$col1+1;
    $table[$tt[0]]= "<td width='".(100*$col)."px' height='".(100*$rov)."px' colspan='".$col."' rowspan='".$rov."' valign='$valign' style='text-align:$align; color:#$color; background-color:#$bgcolor'>$text</td>";
}

$nr=1;
echo "<table width='600' height='600' align='center' border='1' cellpadding='0' cellspacing='0' style='text-align:center'>";
for($a=1;$a<=3;$a++)
{
    echo "<tr>";
    for($b=1;$b<=3;$b++)
    {
        echo $table[$nr];
        $nr++;

    }
    echo "</tr>";
}
echo "</table>";