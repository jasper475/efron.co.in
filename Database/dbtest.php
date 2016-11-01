<?php 

$link = mysqli_connect("localhost","cl44-efrondba","nmDe3h.nV","cl44-efrondba");

echo "</br>";


if (mysqli_connect_error())
		{
			echo "DataBase connection Failed !! ";
		} 
else {
			echo "DataBase connected succesfully !! ";

			// SQL Query to fetch the data 

			$query = 'SELECT * FROM Admin';
    		$result = mysqli_query($link,$query);

    if($result)
      {
      	echo "</br>";
      	While($row= mysqli_fetch_array($result))
      	{
      	print_r($row);
      	echo "</br>";
      } //end while 

      } 

      else echo"SQL Query fetch failed ! ";

}


		// SQL INERT INTO Command

	/*	$INSERTQuery = "INSERT INTO `Admin`(`FNAME`,`LNAME`,`PASSWORD`,`EMAIL`, `PHONE`)
		VALUES ('PETER','RODDA','test123','peter@rediffmail.com','9640157208') ";

		//if (mysqli_query($link,$INSERTQuery)) echo "INTERTED into Dabatase succefully "; 

		if (mysqli_query($link,$INSERTQuery)) echo "INSERTED succesful";
		else echo "INSERTION Failed";

*/

		
		// SQL INERT INTO Command

	/*	$UPDATEQuery = "UPDATE `Admin` SET `FNAME`='JASPER'
		WHERE `ID`= 2 LIMIT 1";
		//if (mysqli_query($link,$INSERTQuery)) echo "INTERTED into Dabatase succefully "; 

		if (mysqli_query($link,$UPDATEQuery)) echo "UPDATEED succesful";
		else echo "UPDATION Failed";


*/


?>