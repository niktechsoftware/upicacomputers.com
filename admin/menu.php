<table width="100%">
        	<tr>
            	<td><a href="s_stu.php">Success Student</a></td>
                <td><a href="edit_succ.php">Edit Detail</a></td>
                <td><a href="c_varification.php">Certificate</a></td>
                <td><a href="board.php">Notice board</a></td>
                <td><a href="edit_cont.php">Edit Notice board</a></td>
                <td>
                	<?php
                		$temp = strlen ( $test );
					if($temp != 0)
					{
					echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='logout.php'>Logout</a>";
					}
					else
					{
					echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='index.php'>Login</a>";
					}
                	?>
                </td>
            </tr>
         </table>