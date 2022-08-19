<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['addtocart']))
    {
        if(isset($_SESSION['cart']))
        {
            $myitems=array_column($_SESSION['cart'],'pname');
            if(in_array($_POST['pname'],$myitems))
            { ?>
                <script>
                    alert('Item Already Added');
					window.location.href='shop.php';
                </script>
<?php
            }
			else
			{	
			
            $count=count($_SESSION['cart']);
            $_SESSION['cart'][$count]=array('pname'=>$_POST['pname'],'pprice'=>$_POST['pprice'],'qunatity'=>1);
            // print_r($_SESSION['cart']);    
						 ?>
                <script>
                    alert('Item Added');
					window.location.href='shop.php';
                </script>
<?php
			}
        }
        else
        {
            $_SESSION['cart'][0]=array('pname'=>$_POST['pname'],'pprice'=>$_POST['pprice'],'qunatity'=>1);
            // print_r($_SESSION['cart']);
			 ?>
                <script>
                    alert('Item Added');
					window.location.href='shop.php';
                </script>
<?php
        }
    }
	if(isset($_POST['Remove_Item']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
//			print_r ($key);
			if($value['pname']==$_POST['pname'])
			{
			unset($_SESSION['cart'][$key]);
			$_SESSION['cart'] = array_values($_SESSION['cart']);
				?>
                <script>
                    alert('Item Removed!');
					window.location.href='mycart.php';
                </script>
<?php
			}
			
		}
	}
}

?>