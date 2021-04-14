
    
    <?php include "db_connect.php"; ?>
   
  <?php

                         
                                $username= $useName;
								$firstname=$firstNm;
								$lastname=$secNm;
                                $upline=$_GET['amount'];
                                $email=$user_email;
								$c_date=date("Y/m/d h:m:i  A");
									
                                    //check if user exists
                           
			      							
										 //the database querry here


                                                             $insert_ = "UPDATE  userdetails SET status= '1' where username ='$userNm' ";
															 $query_ = mysqli_query($ab_db_connect,$insert_);
																				if ($query_==1) {
																					
																			
					
				
                                                                                          }else{
                                                                                                echo "<h3 class='text-danger'>an error has occured</h3>";
																								echo "<script>window.location='paymentoption.php'</script>";
                                                                                            }
                                                                                    
																						//stage movement
			
				
			
		
			?>
																						